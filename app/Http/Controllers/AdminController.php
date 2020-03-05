<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Role;
use App\Permission;
use App\Person;
use App\User;
use DB;
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
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'first_surname'=> ['required', 'string', 'max:255'],
            'second_surname'=> ['required', 'string', 'max:255'],
            'document_type'=> ['required'],
            'document_number'=> ['required', 'string', 'max:255'],
            'birthday'=> ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
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

    public function editUser(User $usuario){
        $permissions=Permission::all();
        $permissions_selected_id =$usuario->permissions->pluck('id');
        $roles=Role::all();
        return view('admin.users.edit',compact(['usuario','roles','permissions','permissions_selected_id']));
    }
    public function updateUser(User $usuario, Request $request){
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'first_surname'=> ['required', 'string', 'max:255'],
            'second_surname'=> ['required', 'string', 'max:255'],
            'document_type'=> ['required'],
            'document_number'=> ['required', 'string', 'max:255'],
            'birthday'=> ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $persona_id = $usuario->people_id;
        $str_name = ucwords(strtolower( $request->name));
        $str_f_surname = ucwords(strtolower( $request->first_surname));
        $str_s_surname =ucwords(strtolower( $request->second_surname));

        $persona = Person::where('id',$persona_id)->first();
        $persona -> name = $str_name;
        $persona -> first_surname = $str_f_surname;
        $persona -> second_surname = $str_s_surname;
        $persona -> birthday = $request->birthday;
        $persona -> document_type = $request->get('document_type');
        $persona -> document_number = $request->document_number;
        $persona->save();


        $usuario->email = $request->email;
        $usuario->password =Hash::make($request->password);
        $usuario->save();
        return Redirect::action('AdminController@editUser', [$usuario])->with('success',"Actualizaste los datos personales del usuario correctamente");
    }
    public function updateUserRole(User $usuario, Request $request){
        $role=Role::find($request->get('role_id'));
        $usuario->detachRoles($usuario->roles);
        $usuario->detachPermissions($usuario->permissions);
        $usuario->attachRole($request->get('role_id'));
        $usuario->attachPermissions($role->permissions);
        return Redirect::action('AdminController@editUser', [$usuario])->with('success',"Actualizaste el rol del usuario correctamente");;
    }
    public function updateUserPermission(User $usuario, Request $request){
        $permissions=$request->permissions_id;
        $usuario->detachPermissions($usuario->permissions);
        $usuario->attachPermissions($permissions);
        return Redirect::action('AdminController@editUser',[$usuario])->with('success',"Actualizaste los permisos por defecto del usuario correctamente");;
    }
}
