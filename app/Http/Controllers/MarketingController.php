<?php

namespace App\Http\Controllers;

use App\CompanyCategoryTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketingController extends Controller
{
    public function index(){

    	$tag = new CompanyCategoryTag;

        $tag_list = $tag->where('company_id',Auth::user()->company_id)->get();

    	return view('internal.marketing',compact('tag_list'));
    }
}
