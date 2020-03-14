<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email', 'password', 'team_id'];
    protected $hidden = ['password'];
    protected $attributes = ['team_id' => 0];

}
