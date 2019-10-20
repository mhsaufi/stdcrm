<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyReview extends Model
{
    protected $table = "company_reviews";

    public function company()
    {
        return $this->hasOne('App\Company','company_id','company_id');
    }
}
