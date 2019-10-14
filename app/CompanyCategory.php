<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    protected $table = "company_category";

    public function company_category_tag()
    {
        return $this->belongsTo('App\CompanyCategoryTag');
    }

    public function cpct()
    {
        return $this->belongsTo('App\CompanyPackageTag');
    }
}
