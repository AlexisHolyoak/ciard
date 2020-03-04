<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Role;
use App\Permission;
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
        $role-> name = $request->get('name');
        $role-> display_name = $request->get('display_name');
        $role-> description = $request->get('description');
        $role-> attachPermissions($request->permission_id);
        $role-> save();
        return Redirect::action('AdminController@index');
    }
}
