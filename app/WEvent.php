<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WEvent extends Model
{
    protected $table = "wevent";

    public function company()
    {
        return $this->belongsTo('App\Company','company_id','company_id');
    }

    public function timeline()
    {
    	return $this->belongsTo('App\WEventTimeline');
    }

    public function eventvendor()
    {
        return $this->belongsTo('App\WEventVendors');
    }

    public function eventinbox()
    {
        return $this->belongsTo('App\WEventInbox');
    }

    public function client()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function package()
    {
        return $this->hasOne('App\CompanyPackage','package_id','package_id');
    }

    public function status()
    {
        return $this->hasOne('App\WEventStatus','wes_id','wes_id');
    }
}

