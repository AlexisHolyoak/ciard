<?php

namespace App\Http\Controllers;

use App\Department;
use App\DisasterType;
use App\District;
use App\FamilyPostInfo;
use App\InfraestructurePostInfo;
use App\Province;
use App\UrbanSpace;
use App\Zone;
use Illuminate\Http\Request;
use App\Disaster;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class QueriesController extends Controller
{
    //
    public function disastersIndex(){

        return view('queries.disasters.index');
    }
    public function disastersSearch(Request $request){
        $multipleSelection= $request->input('selection');
        if ($multipleSelection!=null){
        if($multipleSelection[0] == "allDepartments"){
            $disasters= Disaster::all();
            return Redirect::action('QueriesController@disastersList')->with('disasters',$disasters)->with('scale','nacional');
        }
        if($multipleSelection[0] == "allProvinces"){
            $department=Department::where('id',$request->get('department'))->first();
            $provinces=$department->provinces->pluck('id');
            $districts=District::whereIn('province_id',$provinces)->pluck('id');
            $zones=Zone::whereIn('district_id',$districts)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->get();
            return Redirect::action('QueriesController@disastersList')->with('disasters',$disasters)->with('scale','departamento de '.$department->nombre);

        }
        if($multipleSelection[0] == "allDistricts"){
            $province=Province::where('id',$request->get('province'))->first();
            $districts=$province->districts->pluck('id');
            $zones=Zone::whereIn('district_id',$districts)->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->get();
            return Redirect::action('QueriesController@disastersList')->with('disasters',$disasters)->with('scale','provincia de '.$province->nombre);

        }
        if($multipleSelection[0] == "allZones"){
            $district=District::where('id',$request->get('district_id'))->first();
            $zones=$district->zones->pluck('id');
            $urbanspaces=UrbanSpace::whereIn('zone_id',$zones)->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->get();
            return Redirect::action('QueriesController@disastersList')->with('disasters',$disasters)->with('scale','distrito de '.$district->nombre);
        }
        if($multipleSelection[0] == "allUrbanSpaces"){
            $zone=Zone::where('id',$request->get('zone'))->first();
            $urbanspaces=$zone->urbanspaces->pluck('id');
            $disasters=Disaster::whereIn('urban_space_id', $urbanspaces )->get();
            return Redirect::action('QueriesController@disastersList')->with('disasters',$disasters)->with('scale','zona de '.$zone->name);
        }
        }else{

        }
    }
    public function disastersList(){
        if(Session::has('disasters')){
            $disasters=Session::get('disasters');
            $disasters_id=$disasters->pluck('id');
            $scale=Session::get('scale');
            $disaster_groups=$disasters->groupBy('disaster_type_id')->groupBy('created_at')->first();
            $disaster_type=DisasterType::all();
            return view('queries.disasters.list',compact(['scale','disaster_groups','disaster_type']));
        }else{
            return view('queries.disasters.index');
        }
    }
    public function disastersDetail($type, $date){
        //TODO: Having the type and date of creation of the desaster we can group disasters
        dd("Nada que ver aqui");
    }
}
