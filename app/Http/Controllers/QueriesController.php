<?php

namespace App\Http\Controllers;

use App\Department;
use App\DisasterType;
use App\District;
use App\FamilyInfo;
use App\FamilyPostInfo;
use App\InfraestructureInfo;
use App\InfraestructurePostInfo;
use App\InfraestructureType;
use App\Province;
use App\UrbanSpace;
use App\Zone;
use Illuminate\Http\Request;
use App\Disaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class QueriesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function disastersIndex(){

        return view('queries.disasters.index');
    }
    public function disastersSearch(Request $request){
        //TODO: This can be easier with joins
        $multipleSelection= $request->input('selection');
        if ($multipleSelection!=null){
        if($multipleSelection[0] == "allDepartments"){
            $disasters= Disaster::all();
            return Redirect::action('QueriesController@disastersList')
                ->with('disasters',$disasters)
                ->with('scale','nacional')
                ->with('location','all');
        }
        if($multipleSelection[0] == "allProvinces"){
            $department=Department::where('id',$request->get('department'))->first();
            $provinces=$department->provinces->pluck('id');
            $districts=District::whereIn('province_id',$provinces)->pluck('id');
            $zones=Zone::whereIn('district_id',$districts)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->get();
            return Redirect::action('QueriesController@disastersList')
                ->with('disasters',$disasters)
                ->with('scale','departamento')
                ->with('location',$department->id);

        }
        if($multipleSelection[0] == "allDistricts"){
            $province=Province::where('id',$request->get('province'))->first();
            $districts=$province->districts->pluck('id');
            $zones=Zone::whereIn('district_id',$districts)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->get();
            return Redirect::action('QueriesController@disastersList')
                ->with('disasters',$disasters)
                ->with('scale','provincia')
                ->with('location',$province->id);

        }
        if($multipleSelection[0] == "allZones"){
            $district=District::where('id',$request->get('district_id'))->first();
            $zones=$district->zones->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->get();
            return Redirect::action('QueriesController@disastersList')
                ->with('disasters',$disasters)
                ->with('scale','distrito')
                ->with('location',$district->id);
        }
        if($multipleSelection[0] == "allUrbanSpaces"){
            $zone=Zone::where('id',$request->get('zone'))->first();
            $urbanspaces=$zone->urbanspaces->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->get();
            return Redirect::action('QueriesController@disastersList')
                ->with('disasters',$disasters)
                ->with('scale','zona')
                ->with('location',$zone->id);
        }
        }else{
            $this->validate($request,[
                'urbanspace' => ['required'],
            ]);
            $disasters=Disaster::where('urban_space_id',$request->get('urbanspace'))->get();
            return Redirect::action('QueriesController@disastersList')
                ->with('disasters',$disasters)
                ->with('scale','urbano')
                ->with('location',$request->get('urbanspace'));
        }
    }
    public function disastersList(){
        if(Session::has('disasters')){
            $disasters=Session::get('disasters');
            $disasters_id=$disasters->pluck('id');
            $scale=Session::get('scale');
            $location=Session::get('location');
            $disaster_groups=$disasters->sortByDesc('date_time_disaster')->groupBy('date_time_disaster')->groupBy('disaster_type_id')->first();
            $disaster_type=DisasterType::all();
            return view('queries.disasters.list',compact(['scale','location','disaster_groups','disaster_type']));
        }else{
            return view('queries.disasters.index');
        }
    }
    public function disastersDetail($type, $date, $scale, $location){
        //TODO: Having the type and date of creation of the desaster we can group disasters
        $disasters='';
        $disaster_type= DisasterType::where('id',$type)->first();
        $disasters_id='';
        if($scale=='nacional'){
            $disasters=Disaster::where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='departamento'){
            $department=Department::where('id',$location)->first();
            $provinces=$department->provinces->pluck('id');
            $districts=District::whereIn('province_id',$provinces)->pluck('id');
            $zones=Zone::whereIn('district_id',$districts)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='provincia'){
            $province=Province::where('id',$location)->first();
            $districts=$province->districts->pluck('id');
            $zones=Zone::whereIn('district_id',$districts)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='distrito'){
            $districts=District::where('id',$location)->first();
            $zones=Zone::whereIn('district_id',$districts)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->get();
        }
        if($scale=='zona'){
            $zone=Zone::where('id',$location)->first();
            $urbanspaces=$zone->urbanspaces->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='urbano'){
            $urbanspace=UrbanSpace::where('id',$location)->first();
            $disasters=Disaster::whereIn('urban_space_id',$urbanspace)->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        $disasters_id=$disasters->pluck('id');
        $post_infrastructures=InfraestructurePostInfo::whereIn('disaster_id',$disasters_id)->get();
        $post_infrastructures_pre_id=$post_infrastructures->pluck('infrastructure_info_id');
        $post_families=FamilyPostInfo::whereIn('disaster_id',$disasters_id)->get();
        $pre_infrastructures=InfraestructureInfo::whereIn('id',$post_infrastructures_pre_id)->get();
        $infrastructures_detail= DB::table('infraestructures_post_info')
            ->join('infraestructures_info','infraestructures_post_info.infraestructure_info_id','=','infraestructures_info.id')
            ->join('infraestructure_types','infraestructures_info.infraestructure_type_id','=','infraestructure_types.id')
            ->select('infraestructures_post_info.id as IDPOSTINFRA','infraestructure_types.name as TYPEINFRA','infraestructure_types.id as IDTYPEINFRA',
                'infraestructures_post_info.condition as CONDITION')
            ->whereIn('infraestructures_post_info.disaster_id',$disasters_id)->get();
        $infrastructure_types = InfraestructureType::all();
        return view('queries.disasters.detail',
            compact(['disaster_type',
                'date','scale','location','disasters',
                'post_families','pre_infrastructures',
                'post_infrastructures','infrastructure_types','infrastructures_detail']));
    }
    public function disasterHabitantsDetail($type, $date, $scale, $location,$condition){
        $disasters='';
        $disaster_type= DisasterType::where('id',$type)->first();
        $disasters_id='';
        $habitants='';
        if($scale=='nacional'){
            $disasters=Disaster::where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='departamento'){
            $department=Department::where('id',$location)->first();
            $provinces=$department->provinces->pluck('id');
            $districts=District::whereIn('province_id',$provinces)->pluck('id');
            $zones=Zone::whereIn('district_id',$districts)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='provincia'){
            $province=Province::where('id',$location)->first();
            $districts=$province->districts->pluck('id');
            $zones=Zone::whereIn('district_id',$districts)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='distrito'){
            $district=District::where('id',$location)->first();
            $zones=Zone::whereIn('district_id',$district)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->get();
        }
        if($scale=='zona'){
            $zone=Zone::where('id',$location)->first();
            $urbanspaces=$zone->urbanspaces->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='urbano'){
            $urbanspace=UrbanSpace::where('id',$location)->first();
            $disasters=Disaster::whereIn('urban_space_id',$urbanspace)->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        $disasters_id=$disasters->pluck('id');
        $habitants=FamilyPostInfo::whereIn('disaster_id',$disasters_id)->where('personal_damage',$condition)->get();
        return view('queries.disasters.habitants.list',compact(['habitants','disaster_type','date','scale','condition']));
    }
    public function disasterHabitantsPreEdan(Disaster $disaster, FamilyPostInfo $habitant){
        $habitant_info=$habitant->precondition;
        return view('queries.disasters.habitants.edan',compact(['disaster','habitant','habitant_info']));
    }
    public function disasterInfrastructureDetail($type, $date, $scale, $location,$typeinfra, $condition){
        $infrastructure_type=InfraestructureType::find($typeinfra);
        $disasters='';
        $disaster_type= DisasterType::where('id',$type)->first();
        $disasters_id='';
        $habitants='';
        if($scale=='nacional'){
            $disasters=Disaster::where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='departamento'){
            $department=Department::where('id',$location)->first();
            $provinces=$department->provinces->pluck('id');
            $districts=District::whereIn('province_id',$provinces)->pluck('id');
            $zones=Zone::whereIn('district_id',$districts)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='provincia'){
            $province=Province::where('id',$location)->first();
            $districts=$province->districts->pluck('id');
            $zones=Zone::whereIn('district_id',$districts)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='distrito'){            
            $district=District::where('id',$location)->first();
            $zones=Zone::whereIn('district_id',$district)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->get();
        }
        if($scale=='zona'){
            $zone=Zone::where('id',$location)->first();
            $urbanspaces=$zone->urbanspaces->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        if($scale=='urbano'){
            $urbanspace=UrbanSpace::where('id',$location)->first();
            $disasters=Disaster::whereIn('urban_space_id',$urbanspace)->where('disaster_type_id',$type)->where('date_time_disaster',$date)->get();
        }
        $disasters_id=$disasters->pluck('id');
        $infrastructures= DB::table('infraestructures_post_info')
            ->join('infraestructures_info','infraestructures_post_info.infraestructure_info_id','=','infraestructures_info.id')
            ->join('infraestructure_types','infraestructures_info.infraestructure_type_id','=','infraestructure_types.id')
            ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
            ->join('zones','urban_spaces.zone_id','=','zones.id')
            ->join('districts','zones.district_id','=','districts.id')
            ->join('provinces','districts.province_id','=','provinces.id')
            ->join('departments','provinces.department_id','=','departments.id')
            ->select('infraestructures_post_info.id as ID','departments.nombre as DEPARTMENT','provinces.nombre as PROVINCE',
                'districts.nombre as DISTRICT','zones.name as ZONE', 'urban_spaces.name as URBAN_SPACE','infraestructures_info.number as NUMBER')
            ->whereIn('infraestructures_post_info.disaster_id',$disasters_id)
            ->where('infraestructure_types.id',$typeinfra)
            ->where('infraestructures_post_info.condition',$condition)->get();
        return view('queries.disasters.infrastructure.list',compact(['infrastructures','disaster_type','date','scale','condition','infrastructure_type']));
    }
    public function disasterInfrastructurePreEdan($id){
        $infrastructure=InfraestructurePostInfo::find($id);
        return view('queries.disasters.infrastructure.edan',compact(['infrastructure']));
    }
    public function infrastructureIndex(){
        return view('queries.infrastructures.index');
    }
    public function infrastructureSearch(Request $request){
        $multipleSelection= $request->input('selection');
        if ($multipleSelection!=null){
            if($multipleSelection[0] == "allDepartments"){
                //TODO: WE CAN APPLY DRY HERE
                $infrastructures=DB::table('infraestructures_info')
                    ->join('infraestructure_types','infraestructures_info.infraestructure_type_id','=','infraestructure_types.id')
                    ->join('families_info','infraestructures_info.family_boss_id','=','families_info.id')
                    ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                    ->join('zones','urban_spaces.zone_id','=','zones.id')
                    ->join('districts','zones.district_id','=','districts.id')
                    ->join('provinces','districts.province_id','=','provinces.id')
                    ->join('departments','provinces.department_id','=','departments.id')
                    ->select('infraestructures_info.id as ID', 'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                        'infraestructures_info.number as NUMBER','infraestructures_info.tenencia as TENURE','infraestructures_info.usage_condition as USAGE_CONDITION',
                        'infraestructures_info.roof as ROOF','infraestructures_info.floor as FLOOR','infraestructures_info.wall as WALL','infraestructures_info.floors_number AS FLOORS_NUMBER',
                        'infraestructures_info.water as WATER','infraestructures_info.sewerage as SEWERAGE','infraestructures_info.lights as LIGHTS','infraestructures_info.natural_gas as NATURAL_GAS',
                        'infraestructures_info.public_transport as PUBLIC_TRANSPORT','infraestructures_info.telecomunications as TELECOMUNICATIONS')->get();
                return Redirect::action('QueriesController@infrastructureList')
                    ->with('infrastructures',$infrastructures)
                    ->with('scale','nacional')
                    ->with('location','all');
            }
            if($multipleSelection[0] == "allProvinces"){
                $infrastructures=DB::table('infraestructures_info')
                    ->join('infraestructure_types','infraestructures_info.infraestructure_type_id','=','infraestructure_types.id')
                    ->join('families_info','infraestructures_info.family_boss_id','=','families_info.id')
                    ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                    ->join('zones','urban_spaces.zone_id','=','zones.id')
                    ->join('districts','zones.district_id','=','districts.id')
                    ->join('provinces','districts.province_id','=','provinces.id')
                    ->join('departments','provinces.department_id','=','departments.id')
                    ->select('infraestructures_info.id as ID', 'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                        'infraestructures_info.number as NUMBER','infraestructures_info.tenencia as TENURE','infraestructures_info.usage_condition as USAGE_CONDITION',
                        'infraestructures_info.roof as ROOF','infraestructures_info.floor as FLOOR','infraestructures_info.wall as WALL','infraestructures_info.floors_number AS FLOORS_NUMBER',
                        'infraestructures_info.water as WATER','infraestructures_info.sewerage as SEWERAGE','infraestructures_info.lights as LIGHTS','infraestructures_info.natural_gas as NATURAL_GAS',
                        'infraestructures_info.public_transport as PUBLIC_TRANSPORT','infraestructures_info.telecomunications as TELECOMUNICATIONS')
                    ->where('departments.id',$request->get('department'))->get();
                return Redirect::action('QueriesController@infrastructureList')
                    ->with('infrastructures',$infrastructures)
                    ->with('scale','departamento')
                    ->with('location',$request->get('department'));

            }
            if($multipleSelection[0] == "allDistricts"){
                $infrastructures=DB::table('infraestructures_info')
                    ->join('infraestructure_types','infraestructures_info.infraestructure_type_id','=','infraestructure_types.id')
                    ->join('families_info','infraestructures_info.family_boss_id','=','families_info.id')
                    ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                    ->join('zones','urban_spaces.zone_id','=','zones.id')
                    ->join('districts','zones.district_id','=','districts.id')
                    ->join('provinces','districts.province_id','=','provinces.id')
                    ->join('departments','provinces.department_id','=','departments.id')
                    ->select('infraestructures_info.id as ID', 'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                        'infraestructures_info.number as NUMBER','infraestructures_info.tenencia as TENURE','infraestructures_info.usage_condition as USAGE_CONDITION',
                        'infraestructures_info.roof as ROOF','infraestructures_info.floor as FLOOR','infraestructures_info.wall as WALL','infraestructures_info.floors_number AS FLOORS_NUMBER',
                        'infraestructures_info.water as WATER','infraestructures_info.sewerage as SEWERAGE','infraestructures_info.lights as LIGHTS','infraestructures_info.natural_gas as NATURAL_GAS',
                        'infraestructures_info.public_transport as PUBLIC_TRANSPORT','infraestructures_info.telecomunications as TELECOMUNICATIONS')
                    ->where('provinces.id',$request->get('province'))->get();
                return Redirect::action('QueriesController@infrastructureList')
                    ->with('infrastructures',$infrastructures)
                    ->with('scale','provincia')
                    ->with('location',$request->get('province'));

            }
            if($multipleSelection[0] == "allZones"){
                $infrastructures=DB::table('infraestructures_info')
                    ->join('infraestructure_types','infraestructures_info.infraestructure_type_id','=','infraestructure_types.id')
                    ->join('families_info','infraestructures_info.family_boss_id','=','families_info.id')
                    ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                    ->join('zones','urban_spaces.zone_id','=','zones.id')
                    ->join('districts','zones.district_id','=','districts.id')
                    ->join('provinces','districts.province_id','=','provinces.id')
                    ->join('departments','provinces.department_id','=','departments.id')
                    ->select('infraestructures_info.id as ID', 'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                        'infraestructures_info.number as NUMBER','infraestructures_info.tenencia as TENURE','infraestructures_info.usage_condition as USAGE_CONDITION',
                        'infraestructures_info.roof as ROOF','infraestructures_info.floor as FLOOR','infraestructures_info.wall as WALL','infraestructures_info.floors_number AS FLOORS_NUMBER',
                        'infraestructures_info.water as WATER','infraestructures_info.sewerage as SEWERAGE','infraestructures_info.lights as LIGHTS','infraestructures_info.natural_gas as NATURAL_GAS',
                        'infraestructures_info.public_transport as PUBLIC_TRANSPORT','infraestructures_info.telecomunications as TELECOMUNICATIONS')
                    ->where('districts.id',$request->get('district_id'))->get();
                return Redirect::action('QueriesController@infrastructureList')
                    ->with('infrastructures',$infrastructures)
                    ->with('scale','distrito')
                    ->with('location',$request->get('district_id'));
            }
            if($multipleSelection[0] == "allUrbanSpaces"){
                $infrastructures=DB::table('infraestructures_info')
                    ->join('infraestructure_types','infraestructures_info.infraestructure_type_id','=','infraestructure_types.id')
                    ->join('families_info','infraestructures_info.family_boss_id','=','families_info.id')
                    ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                    ->join('zones','urban_spaces.zone_id','=','zones.id')
                    ->join('districts','zones.district_id','=','districts.id')
                    ->join('provinces','districts.province_id','=','provinces.id')
                    ->join('departments','provinces.department_id','=','departments.id')
                    ->select('infraestructures_info.id as ID', 'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                        'infraestructures_info.number as NUMBER','infraestructures_info.tenencia as TENURE','infraestructures_info.usage_condition as USAGE_CONDITION',
                        'infraestructures_info.roof as ROOF','infraestructures_info.floor as FLOOR','infraestructures_info.wall as WALL','infraestructures_info.floors_number AS FLOORS_NUMBER',
                        'infraestructures_info.water as WATER','infraestructures_info.sewerage as SEWERAGE','infraestructures_info.lights as LIGHTS','infraestructures_info.natural_gas as NATURAL_GAS',
                        'infraestructures_info.public_transport as PUBLIC_TRANSPORT','infraestructures_info.telecomunications as TELECOMUNICATIONS')
                    ->where('zones.id',$request->get('zone'))->get();
                return Redirect::action('QueriesController@infrastructureList')
                    ->with('infrastructures',$infrastructures)
                    ->with('scale','zona')
                    ->with('location',$request->get('zone'));
            }
        }else{
            $infrastructures=DB::table('infraestructures_info')
                ->join('infraestructure_types','infraestructures_info.infraestructure_type_id','=','infraestructure_types.id')
                ->join('families_info','infraestructures_info.family_boss_id','=','families_info.id')
                ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                ->join('zones','urban_spaces.zone_id','=','zones.id')
                ->join('districts','zones.district_id','=','districts.id')
                ->join('provinces','districts.province_id','=','provinces.id')
                ->join('departments','provinces.department_id','=','departments.id')
                ->select('infraestructures_info.id as ID', 'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                    'infraestructures_info.number as NUMBER','infraestructures_info.tenencia as TENURE','infraestructures_info.usage_condition as USAGE_CONDITION',
                    'infraestructures_info.roof as ROOF','infraestructures_info.floor as FLOOR','infraestructures_info.wall as WALL','infraestructures_info.floors_number AS FLOORS_NUMBER',
                    'infraestructures_info.water as WATER','infraestructures_info.sewerage as SEWERAGE','infraestructures_info.lights as LIGHTS','infraestructures_info.natural_gas as NATURAL_GAS',
                    'infraestructures_info.public_transport as PUBLIC_TRANSPORT','infraestructures_info.telecomunications as TELECOMUNICATIONS')
                ->where('urban_spaces.id',$request->get('urbanspace'))->get();
            return Redirect::action('QueriesController@infrastructureList')
                ->with('infrastructures',$infrastructures)
                ->with('scale','urbano')
                ->with('location',$request->get('urbanspace'));
        }

    }
    public function infrastructureList(){
        if(Session::has('infrastructures')){
            $infrastructures=Session::get('infrastructures');
            $scale=Session::get('scale');
            $location=Session::get('location');
            return view('queries.infrastructures.list',compact(['scale','location','infrastructures']));
        }else{
            return view('queries.infrastructures.index');
        }
    }
    public function peopleIndex(){
        return view('queries.people.index');
    }
    public function peopleSearch(Request $request){
        $multipleSelection= $request->input('selection');
        if ($multipleSelection!=null){
            if($multipleSelection[0] == "allDepartments"){
                //TODO: WE CAN APPLY DRY HERE
                $habitants=DB::table('families_info')
                    ->join('infraestructures_info','families_info.infraestructure_info_id','=','infraestructures_info.id')
                    ->join('people','families_info.people_id','=','people.id')
                    ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                    ->join('zones','urban_spaces.zone_id','=','zones.id')
                    ->join('districts','zones.district_id','=','districts.id')
                    ->join('provinces','districts.province_id','=','provinces.id')
                    ->join('departments','provinces.department_id','=','departments.id')
                    ->select('families_info.id as ID','people.name as NAME','people.first_surname as FIRST_SURNAME','people.second_surname as SECOND_SURNAME',
                        'people.document_type as DOCUMENT_TYPE','people.document_number as DOCUMENT_NUMBER','people.birthday as BIRTHDAY','people.sex as SEX',
                        'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                        'families_info.pregnant as PREGNANT','families_info.disability as DISABILITY','families_info.chronic_disease as CHRONIC_DISEASE')->get();
                return Redirect::action('QueriesController@peopleList')
                    ->with('habitants',$habitants)
                    ->with('scale','nacional')
                    ->with('location','all');
            }
            if($multipleSelection[0] == "allProvinces"){
                $habitants=DB::table('families_info')
                    ->join('infraestructures_info','families_info.infraestructure_info_id','=','infraestructures_info.id')
                    ->join('people','families_info.people_id','=','people.id')
                    ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                    ->join('zones','urban_spaces.zone_id','=','zones.id')
                    ->join('districts','zones.district_id','=','districts.id')
                    ->join('provinces','districts.province_id','=','provinces.id')
                    ->join('departments','provinces.department_id','=','departments.id')
                    ->select('families_info.id as ID','people.name as NAME','people.first_surname as FIRST_SURNAME','people.second_surname as SECOND_SURNAME',
                        'people.document_type as DOCUMENT_TYPE','people.document_number as DOCUMENT_NUMBER','people.birthday as BIRTHDAY','people.sex as SEX',
                        'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                        'families_info.pregnant as PREGNANT','families_info.disability as DISABILITY','families_info.chronic_disease as CHRONIC_DISEASE')
                    ->where('departments.id',$request->get('department'))->get();
                return Redirect::action('QueriesController@peopleList')
                    ->with('habitants',$habitants)
                    ->with('scale','departamento')
                    ->with('location',$request->get('department'));

            }
            if($multipleSelection[0] == "allDistricts"){
                $habitants=DB::table('families_info')
                    ->join('infraestructures_info','families_info.infraestructure_info_id','=','infraestructures_info.id')
                    ->join('people','families_info.people_id','=','people.id')
                    ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                    ->join('zones','urban_spaces.zone_id','=','zones.id')
                    ->join('districts','zones.district_id','=','districts.id')
                    ->join('provinces','districts.province_id','=','provinces.id')
                    ->join('departments','provinces.department_id','=','departments.id')
                    ->select('families_info.id as ID','people.name as NAME','people.first_surname as FIRST_SURNAME','people.second_surname as SECOND_SURNAME',
                        'people.document_type as DOCUMENT_TYPE','people.document_number as DOCUMENT_NUMBER','people.birthday as BIRTHDAY','people.sex as SEX',
                        'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                        'families_info.pregnant as PREGNANT','families_info.disability as DISABILITY','families_info.chronic_disease as CHRONIC_DISEASE')
                    ->where('provinces.id',$request->get('province'))->get();
                return Redirect::action('QueriesController@peopleList')
                    ->with('habitants',$habitants)
                    ->with('scale','provincia')
                    ->with('location',$request->get('province'));

            }
            if($multipleSelection[0] == "allZones"){
                $habitants=DB::table('families_info')
                    ->join('infraestructures_info','families_info.infraestructure_info_id','=','infraestructures_info.id')
                    ->join('people','families_info.people_id','=','people.id')
                    ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                    ->join('zones','urban_spaces.zone_id','=','zones.id')
                    ->join('districts','zones.district_id','=','districts.id')
                    ->join('provinces','districts.province_id','=','provinces.id')
                    ->join('departments','provinces.department_id','=','departments.id')
                    ->select('families_info.id as ID','people.name as NAME','people.first_surname as FIRST_SURNAME','people.second_surname as SECOND_SURNAME',
                        'people.document_type as DOCUMENT_TYPE','people.document_number as DOCUMENT_NUMBER','people.birthday as BIRTHDAY','people.sex as SEX',
                        'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                        'families_info.pregnant as PREGNANT','families_info.disability as DISABILITY','families_info.chronic_disease as CHRONIC_DISEASE')
                    ->where('districts.id',$request->get('district_id'))->get();
                return Redirect::action('QueriesController@peopleList')
                    ->with('habitants',$habitants)
                    ->with('scale','distrito')
                    ->with('location',$request->get('district_id'));
            }
            if($multipleSelection[0] == "allUrbanSpaces"){
                $habitants=DB::table('families_info')
                    ->join('infraestructures_info','families_info.infraestructure_info_id','=','infraestructures_info.id')
                    ->join('people','families_info.people_id','=','people.id')
                    ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                    ->join('zones','urban_spaces.zone_id','=','zones.id')
                    ->join('districts','zones.district_id','=','districts.id')
                    ->join('provinces','districts.province_id','=','provinces.id')
                    ->join('departments','provinces.department_id','=','departments.id')
                    ->select('families_info.id as ID','people.name as NAME','people.first_surname as FIRST_SURNAME','people.second_surname as SECOND_SURNAME',
                        'people.document_type as DOCUMENT_TYPE','people.document_number as DOCUMENT_NUMBER','people.birthday as BIRTHDAY','people.sex as SEX',
                        'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                        'families_info.pregnant as PREGNANT','families_info.disability as DISABILITY','families_info.chronic_disease as CHRONIC_DISEASE')
                    ->where('zones.id',$request->get('zone'))->get();
                return Redirect::action('QueriesController@peopleList')
                    ->with('habitants',$habitants)
                    ->with('scale','zona')
                    ->with('location',$request->get('zone'));
            }
        }else{
            $habitants=DB::table('families_info')
                ->join('infraestructures_info','families_info.infraestructure_info_id','=','infraestructures_info.id')
                ->join('people','families_info.people_id','=','people.id')
                ->join('urban_spaces','infraestructures_info.urban_space_id','=','urban_spaces.id')
                ->join('zones','urban_spaces.zone_id','=','zones.id')
                ->join('districts','zones.district_id','=','districts.id')
                ->join('provinces','districts.province_id','=','provinces.id')
                ->join('departments','provinces.department_id','=','departments.id')
                ->select('families_info.id as ID','people.name as NAME','people.first_surname as FIRST_SURNAME','people.second_surname as SECOND_SURNAME',
                    'people.document_type as DOCUMENT_TYPE','people.document_number as DOCUMENT_NUMBER','people.birthday as BIRTHDAY','people.sex as SEX',
                    'departments.nombre as DEPARTAMENT','provinces.nombre as PROVINCE','districts.nombre as DISTRICT','zones.name as ZONE','urban_spaces.name as URBAN_SPACE',
                    'families_info.pregnant as PREGNANT','families_info.disability as DISABILITY','families_info.chronic_disease as CHRONIC_DISEASE')
                ->where('urban_spaces.id',$request->get('urbanspace'))->get();
            return Redirect::action('QueriesController@peopleList')
                ->with('habitants',$habitants)
                ->with('scale','urbano')
                ->with('location',$request->get('urbanspace'));
        }
    }

    public function peopleList(){
        if(Session::has('habitants')){
            $habitants=Session::get('habitants');
            $scale=Session::get('scale');
            $location=Session::get('location');
            return view('queries.people.list',compact(['scale','location','habitants']));
        }else{
            return view('queries.people.index');
        }
    }
}
