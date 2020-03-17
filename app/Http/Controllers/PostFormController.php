<?php

namespace App\Http\Controllers;

use App\Disaster;
use App\EdanEvaluator;
use App\FamilyInfo;
use App\FamilyPostInfo;
use App\InfraestructureInfo;
use App\InfraestructurePostInfo;
use App\InfraestructureType;
use App\Person;
use App\UrbanSpace;
use App\UrbanSpaceEvaluator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


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
    public function infrastructures(Disaster $disaster, UrbanSpace $urbanspace){
        $infrastructures = InfraestructureInfo::where('urban_space_id',$urbanspace->id)->get();
        return view('forms.post.infrastructure.index',compact(['urbanspace','infrastructures','disaster']));
    }
    public function infrastructureCondition(Disaster $disaster,InfraestructureInfo $infrastructure){
        if(count(InfraestructurePostInfo::where('infraestructure_info_id',$infrastructure->id)->where('disaster_id',$disaster->id)->get())>0){
            //TODO: Change for an edit button to infrastructure condition or pass parameter to not show button
            return redirect()->back()->with('warning' ,'Ya se ha completado la evaluación post desastre de esta infraestructura');
        }
        return view('forms.post.infrastructure.condition', compact(['infrastructure','disaster']));
    }
    public function storeInfrastructureCondition(Disaster $disaster,InfraestructureInfo $infrastructure, Request $request){
        $user= Auth::user();
        $evaluator= EdanEvaluator::where('people_id',$user->person->id)->first();
        if(count(InfraestructurePostInfo::where('infraestructure_info_id',$infrastructure->id)->where('disaster_id',$disaster->id)->get())>0){
            //TODO: Change for an edit button to infrastructure condition or pass parameter to not show button
            return redirect()->back()->with('warning' ,'Ya se ha completado la evaluación post desastre de esta infraestructura');
        }
        $post_infrastructure=new InfraestructurePostInfo();
        $post_infrastructure->infraestructure_info_id = $infrastructure->id;
        $post_infrastructure->condition = $request->condition;
        $post_infrastructure->water = $request->get('water');
        $post_infrastructure->sewerage = $request->get('sewerage');
        $post_infrastructure->lights = $request->get('lights');
        $post_infrastructure->natural_gas = $request->get('natural_gas');
        $post_infrastructure->public_transport = $request->get('public_transport');
        $post_infrastructure->telecomunications =$request->get('telecomunications');
        $post_infrastructure->disaster_id = $disaster->id;
        $post_infrastructure->evaluator_id = $evaluator->id;
        $post_infrastructure->save();
        return Redirect::action('PostFormController@infrastructures',['disaster'=>$disaster,'urbanspace'=>$infrastructure->urbanspace])->with('success','Se ha registrado la condición post desastre de la infraestructura');;
    }
    public function habitantsCondition(Disaster $disaster,InfraestructureInfo $infrastructure){
        $habitants = FamilyInfo::where('infraestructure_info_id',$infrastructure->id)->get();
        $habitants_id= $habitants->pluck('id');
        if(count(FamilyPostInfo::whereIn('family_info_id',$habitants_id)->where('disaster_id',$disaster->id)->get())>0){
            //TODO: Change for an edit button to habitants condition or pass parameter to not show button
            return redirect()->back()->with('warning' ,'Ya se ha completado la evaluación post desastre de los habitantes de esta infraestructura');
        }
        return view('forms.post.habitants.condition',compact(['habitants','infrastructure','disaster']));
    }
    public function storeHabitantsCondition(Disaster $disaster,InfraestructureInfo $infrastructure, Request $request){
        $user= Auth::user();
        $evaluator= EdanEvaluator::where('people_id',$user->person->id)->first();
        $data=[];
        for ($i=0; $i<count($request->family_info_id);$i++){
            $now = Carbon::now();
            if(count(FamilyPostInfo::where('family_info_id',$request->family_info_id[$i])->where('disaster_id',$disaster->id)->get())>0){
                return redirect()->back()->with('warning' ,'Ya se ha completado la evaluación post desastre de estos habitantes');
            }
            $data[]=[
                'family_info_id'=>$request->family_info_id[$i],
                'condition'=>$request->condition[$i],
                'personal_damage'=>$request->personal_damage[$i],
                'disaster_id'=> $disaster->id,
                'evaluator_id'=> $evaluator->id,
                'updated_at' => $now,
                'created_at' => $now
            ];
        }
        $post_habitants=FamilyPostInfo::insert($data);
        return Redirect::action('PostFormController@infrastructures',['disaster'=>$disaster,'urbanspace'=>$infrastructure->urbanspace])->with('success','Se ha registrado la condición post desastre de los habitantes');;
    }
    public function createInfrastructure(UrbanSpace $urbanspace){
        $types=InfraestructureType::all();
        return view('forms.post.infrastructure.create',compact(['urbanspace','types']));
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
        return Redirect::action('PostFormController@createHabitant',[$infrastructure])->with('success','Se ha registrado la infraestructura ahora, solicita información de los habitantes');
    }
    public function habitants(InfraestructureInfo $infrastructure){
        $family_members = FamilyInfo::where('infraestructure_info_id',$infrastructure->id)->get();
        return view('forms.post.habitants.index',compact(['family_members','infrastructure']));
    }
    public function createHabitant(InfraestructureInfo $infrastructure){
        return view('forms.post.habitants.create',compact(['infrastructure']));
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
        return Redirect::action('PostFormController@createHabitant',[$infrastructure])->with('success','Se ha añadido un nuevo habitante en esta infraestructura');
    }
    public function editHabitant(InfraestructureInfo $infrastructure, FamilyInfo $habitant){
        return view('forms.post.habitants.edit',compact(['infrastructure', 'habitant']));
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
        return Redirect::action('PostFormController@habitants',[$habitant->infraestructure_info_id])->with('success','Se ha actualizado correctamente el habitante de esta infraestructura');
    }
    public function concludeEvaluation(){

    }
}
