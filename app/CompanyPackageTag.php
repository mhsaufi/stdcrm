<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyPackageTag extends Model
{
    protected $table = "company_package_category_tag";
    public $timestamps = false;

    public function package()
    {
        return $this->hasOne('App\CompanyPackage','package_id','package_id');
    }

    public function package_reverse()
    {
    	return $this->belongsTo('App\CompanyPackage');
    }

    public function category()
    {
    	return $this->hasOne('App\CompanyCategory','cc_id','cc_id');
    }
}
