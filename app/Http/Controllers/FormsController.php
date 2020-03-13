<?php

namespace App\Http\Controllers;

use App\EdanEvaluator;
use App\FamilyInfo;
use App\InfraestructureInfo;
use App\InfraestructureType;
use App\Person;
use App\UrbanSpace;
use Illuminate\Http\Request;
use App\UrbanSpaceEvaluator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FormsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user= Auth::user();
        $evaluator= EdanEvaluator::where('people_id',$user->person->id)->first();
        $designations = UrbanSpaceEvaluator::where('evaluator_id',$evaluator->id)->get();
        $infrastructures = InfraestructureInfo::all();
        return view('forms.pre.index',compact(['designations','infrastructures']));
    }
    public function infrastructures(UrbanSpace $urbanspace){
        $infrastructures = InfraestructureInfo::where('urban_space_id',$urbanspace->id)->get();
        return view('forms.pre.infrastructure.index',compact(['urbanspace','infrastructures']));
    }
    public function createInfrastructure(UrbanSpace $urbanspace){
        $types=InfraestructureType::all();
        return view('forms.pre.infrastructure.create',compact(['urbanspace','types']));
    }
    public function storeInfrastructure(UrbanSpace $urbanspace, Request $request){
        $user= Auth::user();
        $evaluator= EdanEvaluator::where('people_id',$user->person->id)->first();

        $name = ucwords(strtolower( $request->name));
        $first_surname = ucwords(strtolower( $request->first_surname));
        $second_surname = ucwords(strtolower( $request->second_surname));

        $person = new Person();
        $person->name = $name;
        $person->first_surname = $first_surname;
        $person->second_surname = $second_surname;
        $person->document_type = $request->get('document_type');
        $person->document_number = $request->document_number;
        $person->sex = $request->get('sex');
        $person->birthday = $request->birthday;
        $person->save();

        $infrastructure = new InfraestructureInfo();
        $infrastructure->infraestructure_type_id = $request->get('infrastructure_type');
        $infrastructure->urban_space_id = $urbanspace->id;
        $infrastructure->edan_evaluator_id = $evaluator->id;
        $infrastructure->number = $request->number;
        $infrastructure->tenencia = $request->get('tenencia');
        $infrastructure->usage_condition = $request->get('usage_condition');
        $infrastructure->wall = $request->get('wall');
        $infrastructure->roof = $request->get('roof');
        $infrastructure->floor = $request->get('floor');
        $infrastructure->floors_number = $request->floor_number;
        $infrastructure->water = $request->get('water');
        $infrastructure->sewerage = $request->get('sewerage');
        $infrastructure->lights = $request->get('lights');
        $infrastructure->natural_gas = $request->get('natural_gas');
        $infrastructure->public_transport = $request->get('public_transport');
        $infrastructure->telecomunications =$request->get('telecomunications');
        $infrastructure->save();


        $family_member = new FamilyInfo();
        $family_member->people_id = $person->id;
        $family_member->pregnant = $request->pregnant;
        $family_member->disability = $request->disability;
        $family_member->chronic_disease = $request->chronic_disease;
        $family_member->infraestructure_info_id = $infrastructure->id;
        $family_member->save();


        $infrastructure->family_boss_id = $family_member->id;
        $infrastructure->save();
        return Redirect::action('FormsController@createHabitant',[$infrastructure])->with('success','Se ha registrado la infraestructura ahora, solicita información de los habitantes');
    }
    public function editInfrastructure(InfraestructureInfo $infrastructure){
        $types=InfraestructureType::all();
        return view('forms.pre.infrastructure.edit',compact(['infrastructure','types']));
    }
    public function updateInfrastructure(InfraestructureInfo $infrastructure, Request $request){
        $infrastructure->infraestructure_type_id = $request->get('infrastructure_type');
        $infrastructure->number = $request->number;
        $infrastructure->tenencia = $request->get('tenencia');
        $infrastructure->usage_condition = $request->get('usage_condition');
        $infrastructure->wall = $request->get('wall');
        $infrastructure->roof = $request->get('roof');
        $infrastructure->floor = $request->get('floor');
        $infrastructure->floors_number = $request->floor_number;
        $infrastructure->water = $request->get('water');
        $infrastructure->sewerage = $request->get('sewerage');
        $infrastructure->lights = $request->get('lights');
        $infrastructure->natural_gas = $request->get('natural_gas');
        $infrastructure->public_transport = $request->get('public_transport');
        $infrastructure->telecomunications =$request->get('telecomunications');
        $infrastructure->save();
        return Redirect::action('FormsController@infrastructures',[$infrastructure->urbanspace])->with('success','Se ha actualizado la infraestructura');
    }

    public function habitants(InfraestructureInfo $infrastructure){
        $family_members = FamilyInfo::where('infraestructure_info_id',$infrastructure->id)->get();
        return view('forms.pre.habitants.index',compact(['family_members','infrastructure']));
    }
    public function createHabitant(InfraestructureInfo $infrastructure){
        return view('forms.pre.habitants.create',compact(['infrastructure']));
    }
    public function storeHabitant(InfraestructureInfo $infrastructure, Request $request){
        $name = ucwords(strtolower( $request->name));
        $first_surname = ucwords(strtolower( $request->first_surname));
        $second_surname = ucwords(strtolower( $request->second_surname));

        $person = new Person();
        $person->name = $name;
        $person->first_surname = $first_surname;
        $person->second_surname = $second_surname;
        $person->document_type = $request->get('document_type');
        $person->document_number = $request->document_number;
        $person->sex = $request->get('sex');
        $person->birthday = $request->birthday;

        $person->save();

        $family_member = new FamilyInfo();
        $family_member->people_id = $person->id;
        $family_member->pregnant = $request->pregnant;
        $family_member->disability = $request->disability;
        $family_member->chronic_disease = $request->chronic_disease;
        $family_member->infraestructure_info_id = $infrastructure->id;
        $family_member->save();
        return Redirect::action('FormsController@createHabitant',[$infrastructure])->with('success','Se ha añadido un nuevo habitante en esta infraestructura');
    }
    public function editHabitant(InfraestructureInfo $infrastructure, FamilyInfo $habitant){
        return view('forms.pre.habitants.edit',compact(['infrastructure', 'habitant']));
    }
    public function updateHabitant(FamilyInfo $habitant, Request $request){

        $name = ucwords(strtolower( $request->name));
        $first_surname = ucwords(strtolower( $request->first_surname));
        $second_surname = ucwords(strtolower( $request->second_surname));

        $person = Person::find($habitant->person->id);
        $person->name = $name;
        $person->first_surname = $first_surname;
        $person->second_surname = $second_surname;
        $person->document_type = $request->get('document_type');
        $person->document_number = $request->document_number;
        $person->sex = $request->get('sex');
        $person->birthday = $request->birthday;
        $person->save();

        $habitant->pregnant = $request->pregnant;
        $habitant->disability = $request->disability;
        $habitant->chronic_disease = $request->chronic_disease;
        $habitant->save();
        return Redirect::action('FormsController@habitants',[$habitant->infraestructure_info_id])->with('success','Se ha actualizado correctamente el habitante de esta infraestructura');
    }
}
