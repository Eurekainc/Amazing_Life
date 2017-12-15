<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'users';
    
    public function GroupActivities(){
        return $this->hasMany(GroupActivities::class);
    }
}
