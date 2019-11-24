<?php

namespace App\Http\Controllers;

use App\CompanyCategoryTag;
use App\CompanyPackage;
use App\CompanyPromotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketingController extends Controller
{
    public function index(){

    	$tag = new CompanyCategoryTag;

        $tag_list = $tag->where('company_id',Auth::user()->company_id)->get();

        $utilities = new UtilitiesController;

        $rate = $utilities->companyRating(Auth::user()->company_id);

        $company_package = new companyPackage;

        $result = $company_package->where("company_id",Auth::user()->company_id)->get();

    	return view('internal.marketing',compact('tag_list','rate','result'));
    }

    public function packageData(Request $request){

    	$package = $request->input('pid');

    	$company_package = new CompanyPackage;

    	$package_data = $company_package->where('package_id',$package)->first();

    	return json_encode($package_data);
    }

    public function newPromotion(Request $request){

    	$p_title = $request->input('ptitle');
    	$p_price = $request->input('pprice');
    	$p_pax = $request->input('ppax');
    	$p_detail = $request->input('pdetail');
    	$company_id = $request->input('company');

    	$promotion = new CompanyPromotion;

    	$promotion->promotion_title = $p_title;
    	$promotion->promotion_price = $p_price;
    	$promotion->promotion_pax = $p_pax;
    	$promotion->promotion_detail = base64_encode($p_detail);
    	$promotion->company_id = $company_id;

    	$promotion->save();

    	return "success";

    }
} 
