<?php

namespace App;

use Laratrust\LaratrustRole;
use Laratrust\Traits\LaratrustRoleTrait;
use Illuminate\Support\Facades\Config;

class Role extends LaratrustRole
{
    //
    use LaratrustRoleTrait;
    public function users()
    {
        return $this->belongsToMany(
            Config::get('auth.providers.users.model'),
            Config::get('laratrust.role_user_table'),
            Config::get('laratrust.role_foreign_key'),
            Config::get('laratrust.user_foreign_key')
        );
    }
}
