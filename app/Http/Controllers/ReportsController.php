<?php

namespace App\Http\Controllers;

use App\Disaster;
use App\FamilyPostInfo;
use App\InfraestructurePostInfo;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function disasters(Disaster $disaster){
        $infrastructures_afected = InfraestructurePostInfo::where('disaster_id',$disaster->id)->get();
        $habitants_afected = FamilyPostInfo::where('disaster_id',$disaster->id)->get();
        return view('reports.disasters',compact(['disaster','infrastructures_afected','habitants_afected']));
    }
}
