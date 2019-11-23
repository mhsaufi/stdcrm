<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WEventStatus extends Model
{
    //
    protected $table = "wevent_status";

    public function event()
    {
        return $this->belongsTo('App\WEvent');
    }
}
