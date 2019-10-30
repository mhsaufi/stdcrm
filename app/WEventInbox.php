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

    public function invited()
    {
    	if($this->i_type_id == '4'){

    		return $this->hasOne('App\Company','company_id','i_recipient_id');

    	}else if($this->i_type_id == '2'){

    		return $this->hasOne('App\User','id','i_recipient_id');
    	}
    }
}
