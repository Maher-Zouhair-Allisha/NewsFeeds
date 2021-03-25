<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    protected $guard = 'admin';
    protected $table='admins';

    protected $fillable = [
    'admin_name', 'admin_email', 'admin_password',
    ];

    protected $hidden = [
        'admin_password', 'remember_token',
    ];
}
