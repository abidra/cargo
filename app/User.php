<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    use LaratrustUserTrait;
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'username', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('id','desc');
    }
    public function get_roles()
    {
        return $this->belongsToMany(
            Config::get('laratrust.models.role'),
            Config::get('laratrust.tables.role_user'),
            Config::get('laratrust.foreign_keys.user'),
            Config::get('laratrust.foreign_keys.role')
        );
    }

    public function authorizeRoles($roles)
    {
        if ($this->hasRole($roles)) {
            return true;
        }
        abort(401, 'This action is unauthorized.');
    }
//    public function role()
//    {
//        return $this->hasMany('App\Role');
//    }
//    public function role_user()
//    {
//        return $this->hasMany('App\Role');
//    }
}