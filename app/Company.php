<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "company";

    protected $fillable = [
        'company_name','company_website','company_contact', 'company_email', 'company_ssm','company_address','company_logo','user_id', 'password','company_type',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function inbox()
    {
        return $this->belongsTo('App\WEventInbox');
    }

    public function userReverse()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function wevent()
    {
        return $this->hasOne('App\WEvent','company_id');
    }

    public function timeline()
    {
        return $this->belongsTo('App\WEventTimeline');
    }

    public function eventvendors()
    {
        return $this->belongsTo('App\WEventVendors');
    }

    public function package()
    {
        return $this->belongsTo('App\CompanyPackage');
    }

    public function company_category_tag()
    {
        return $this->belongsTo('App\CompanyCategoryTag');
    }

    public function review()
    {
        return $this->belongsTo('App\CompanyReview');
    }
}
