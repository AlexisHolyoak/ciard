<?php

namespace App\Http\Controllers;

use App\Disaster;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function disasters(Disaster $disaster){
        return view('reports.disasters',compact(['disaster']));
    }
}
