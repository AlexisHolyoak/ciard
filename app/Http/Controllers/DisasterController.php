<?php

namespace App\Http\Controllers;

use App\Disaster;
use App\UrbanSpace;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class DisasterController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $disasters = Disaster::all();
        return view('disasters.index',compact(['disasters']));
    }
    public function create(){
        return view('disasters.create');
    }
    public function store(Request $request){
        $urbanspaces = $request->get('urbanspace');
        $disasters_records=[];
        $now = Carbon::now();
        foreach ($urbanspaces as $urbanspace){
            if(!empty($urbanspace)){
                $disasters_records[]=[
                    'disaster_type_id'=>$request->get('danger_type'),
                    'date_time_disaster'=>$request->date_time_disaster,
                    'urban_space_id'=>$urbanspace,
                    'updated_at' => $now,
                    'created_at' => $now
                ];
            }
        }
        Disaster::insert($disasters_records);
        return Redirect::action('DisasterController@index')->with('success','Se ha registrado el desastre');
    }
    public function edit(Disaster $disaster){
        return view('disasters.edit',compact(['disaster']));
    }
    public function update(Disaster $disaster, Request $request){
        $disaster->disaster_type_id = $request->get('danger_type');
        $disaster->date_time_disaster = $request->date_time_disaster;
        $disaster->urban_space_id = $request->get('urbanspace');
        $disaster->save();
        return Redirect::action('DisasterController@index')->with('success','Se ha registrado el desastre');
    }
    public function createMassive(){
        return view('disasters.massive');
    }
    public function storeMassive(Request $request){
        $zones=$request->get('zone');
        $urbanspaces = UrbanSpace::whereIn('zone_id',$zones)->get();

        $disasters_records=[];
        $now = Carbon::now();
        foreach ($urbanspaces as $urbanspace){
            if(!empty($urbanspace)){
                $disasters_records[]=[
                    'disaster_type_id'=>$request->get('danger_type'),
                    'date_time_disaster'=>$request->date_time_disaster,
                    'urban_space_id'=>$urbanspace->id,
                    'updated_at' => $now,
                    'created_at' => $now
                ];
            }
        }
        Disaster::insert($disasters_records);
        return Redirect::action('DisasterController@index')->with('success','Se ha registrado el desastre');
    }
}
