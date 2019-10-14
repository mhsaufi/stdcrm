<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyPackage extends Model
{
    protected $table = "company_package";

    public function company()
    {
        return $this->hasOne('App\Company','company_id','company_id');
    }

    public function event()
    {
    	return $this->belongsTo('App\WEvent');
    }

    public function cpct()
    {
    	return $this->belongsTo('App\CompanyPackageTag');
    }

    public function cpct_reverse()
    {
    	return $this->hasMany('App\CompanyPackageTag','package_id','package_id');
    }
}
