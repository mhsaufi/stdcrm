<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','fullname','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->hasOne('App\Company','company_id','company_id');
    }

    public function companyreverse()
    {
        return $this->belongsTo('App\Company');
    }

    public function event()
    {
        return $this->belongsTo('App\WEvent');
    }

    public function timeline()
    {
        return $this->belongsTo('App\WEventTimeline');
    }

    public function inbox()
    {
        return $this->belongsTo('App\WEventInbox');
    }
}
