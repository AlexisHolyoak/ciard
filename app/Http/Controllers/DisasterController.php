<?php

namespace App\Http\Controllers;

use App\Disaster;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class DisasterController extends Controller
{
    //
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
        foreach ($urbanspaces as $urbanspace){
            if(!empty($urbanspace)){
                $now = Carbon::now();
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
}
