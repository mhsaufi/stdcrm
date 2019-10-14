<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WEventVendors extends Model
{
    //
    protected $table = "wevent_vendors";
    public $timestamps = false;

    public function vendor()
    {
        return $this->hasOne('App\Company','company_id','company_id');
    }

    public function event()
    {
    	return $this->hasOne('App\WEvent','we_id','we_id');
    }
}
