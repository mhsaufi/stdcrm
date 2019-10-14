<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WEventInbox extends Model
{
    protected $table = "wevent_inbox";

    public function event()
    {
        return $this->hasOne('App\WEvent','we_id','i_item_id');
    }
}
