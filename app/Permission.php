<?php

namespace App;

use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    //
    public function roles()
    {
        return $this->hasMany(Role::class);
    }
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
