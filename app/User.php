<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email', 'password', 'team_id'];
    protected $hidden = ['password'];
    
    public function team(){
        return $this->belongsTo('App\Team');
    }

}
