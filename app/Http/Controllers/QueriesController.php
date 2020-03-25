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
            $urbanspace=UrbanSpace::where('id',$request->get('urbanspace'))->first();
            $disasters=Disaster::where('urban_space_id',$urbanspace->id)->get();
            return Redirect::action('QueriesController@disastersList')
                ->with('disasters',$disasters)
                ->with('scale','urbano')
                ->with('location',$urbanspace->id);
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
            $province=Province::where('id',$location)->first();
            $districts=$province->districts->pluck('id');
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
            $province=Province::where('id',$location)->first();
            $districts=$province->districts->pluck('id');
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
}
