<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    //

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'permission_role');
    }

    public function users(){
        return $this->hasMany(User::class,);
    }
}
