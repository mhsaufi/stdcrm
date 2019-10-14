<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimelineCategory extends Model
{
    //
    protected $table = "timeline_category";

    public function timeline()
    {
        return $this->belongsTo('App\WEventTimeline','tc_id','tc_id');
    }
}
