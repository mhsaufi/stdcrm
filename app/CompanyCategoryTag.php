<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyCategoryTag extends Model
{
    protected $table = "company_category_tag";
    public $timestamps = false;

    public function company()
    {
        return $this->hasOne('App\Company','company_id','company_id');
    }

    public function category()
    {
    	return $this->hasOne('App\CompanyCategory','cc_id','cc_id');
    }
}
