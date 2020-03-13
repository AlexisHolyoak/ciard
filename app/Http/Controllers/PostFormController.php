<?php

namespace App\Http\Controllers;

use App\Disaster;
use App\EdanEvaluator;
use App\InfraestructureInfo;
use App\UrbanSpace;
use App\UrbanSpaceEvaluator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostFormController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user= Auth::user();
        $evaluator= EdanEvaluator::where('people_id',$user->person->id)->first();
        $designations = UrbanSpaceEvaluator::where('evaluator_id',$evaluator->id);
        $designations_id = UrbanSpaceEvaluator::where('evaluator_id',$evaluator->id)->pluck('urban_space_id');
        $disasters =Disaster::whereIn('urban_space_id',$designations_id)->where('evaluated',0)->orderBy('date_time_disaster','DESC')->get();
        $infrastructures = InfraestructureInfo::all();
        return view('forms.post.index',compact(['disasters','infrastructures']));
    }
    public function infrastructures(UrbanSpace $urbanspace){
        $infrastructures = InfraestructureInfo::where('urban_space_id',$urbanspace->id)->get();
        return view('forms.post.infrastructure.index',compact(['urbanspace','infrastructures']));
    }
    public function infrastructureCondition(InfraestructureInfo $infrastructure){
        return view('forms.post.infrastructure.condition', compact(['infrastructure']));
    }
    public function habitantsCondition(InfraestructureInfo $infrastructure){
        return view('forms.post.habitants.condition');
    }
}
