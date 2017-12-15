<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class GroupActivities extends Model
{
    protected $table  = 'group_activities';

    public function user(){
        return $this->belongsTo(user::class);
    }

}
 