<?php

namespace App\Http\Controllers;

use App\InfraestructureType;
use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InfrastructureController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $infrastructuretypes = InfraestructureType::all();
        return view('infrastructure.index',compact(['infrastructuretypes']));
    }
    public function create(){
        return view('infrastructure.create');
    }
    public function store(Request $request){
        $permission= new Permission();
        $permission->name = 'visualizar-'.strtolower( $request->name);
        $permission->display_name= 'Visualizar '.ucwords(strtolower( $request->name));
        $permission->description= 'Visualizar '.ucwords(strtolower( $request->name));
        $permission->save();
        $type= new InfraestructureType();
        $type->name = strtoupper($request->name);
        $type->save();
        return Redirect::action('InfrastructureController@index')->with('success','Nuevo tipo de infraestructura añadido');
    }
    public function edit(InfraestructureType $type){
        return view('infrastructure.edit',compact(['type']));
    }
    public function update(InfraestructureType $type, Request $request){
        $permission=Permission::where('name',$type->name)->first();
        $permission->name = 'visualizar-'.strtolower( $request->name);
        $permission->display_name= 'Visualizar '.ucwords(strtolower( $request->name));
        $permission->description= 'Visualizar '.ucwords(strtolower( $request->name));
        $permission->save();
        $type->name = strtoupper($request->name);
        $type->save();
        return Redirect::action('InfrastructureController@index')->with('success','Tipo de infraestructura actualizado');
    }
}
