<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'users';

    public function posts(){
        return $this->belongsToMany('App\GroupActivities','group_activities','user_id');
    }

}


