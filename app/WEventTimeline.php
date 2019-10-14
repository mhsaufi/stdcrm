<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WEventTimeline extends Model
{
    //
    protected $table = "wevent_timeline";

    public function event()
    {
        return $this->hasOne('App\WEvent','we_id','we_id');
    }

    public function category()
    {
        return $this->hasOne('App\TimelineCategory','tc_id','tc_id');
    }

    public function vendor()
    {
        return $this->hasOne('App\User','id','wet_owner');
    }
}
