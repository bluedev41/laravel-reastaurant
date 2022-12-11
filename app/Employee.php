<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'address',
        'is_admin',
        'address'
    ];

    // protected $primaryKey = 'employee_id';
}
