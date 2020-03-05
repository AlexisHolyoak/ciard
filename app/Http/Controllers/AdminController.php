<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Role;
use App\Permission;
use App\Person;
use App\User;
class AdminController extends Controller
{
    //
    public function index()
    {
        $permissions=Permission::all();
        $roles=Role::all();
        return view('admin.access',compact(['permissions','roles']));
    }
    public function rolCreation(Request $request){
        $permissions=$request->permission_id;
        $role= new Role();
        $role-> name = $request->get('name');
        $role-> display_name = $request->get('display_name');
        $role-> description = $request->get('description');
        $role-> save();
        $role-> attachPermissions($permissions);
        return Redirect::action('AdminController@index');
    }
    public function rolEdit(Role $role){
        $permissions=Permission::all();
        $permissions_selected_id =$role->permissions->pluck('id');
        return view('admin.roles.edit',compact(['permissions','role','permissions_selected_id']));
    }
    public function rolUpdate(Role $role, Request $request){
        $role->detachPermissions($role->permissions);
        $role-> name = strtolower($request->get('name'));
        $role-> display_name = $request->get('display_name');
        $role-> description = $request->get('description');
        $role-> attachPermissions($request->permission_id);
        $role-> save();
        return Redirect::action('AdminController@index');
    }
    public function users(){
        $users= User::all();
        return view('admin.users.index',compact(['users']));
    }

    public function createUser(){
        $permissions=Permission::all();
        $roles=Role::all();
        return view('admin.users.create',compact(['permissions','roles']));
    }
    public function storeUser(Request $request){

        $role=Role::find($request->role_id);

        $person = Person::create([
            'name'=>ucwords(strtolower( $request->name)),
            'first_surname'=>ucwords(strtolower( $request->first_surname)),
            'second_surname'=>ucwords(strtolower( $request->second_surname)),
            'birthday'=> $request->birthday,
            'document_type'=>$request->document_type,
            'document_number'=>$request->document_number
        ]);
        $user= User::create([
            'people_id'=>$person->id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->attachRole($request->role_id);
        $user->syncPermissions($role->permissions);
        return Redirect::action('AdminController@users');
    }

    public function editUser(User $user){

    }
}
