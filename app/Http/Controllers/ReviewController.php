<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyCategory;
use App\CompanyCategoryTag;
use App\CompanyReview;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index($company_name, $company_id){

    	$company = new Company;

        $result = $company->where('company_id',$company_id)->first();

        $tag = new CompanyCategoryTag;

        $tag_list = $tag->where('company_id',$company_id)->get();

        $review = new CompanyReview;
        $review_data = $review->where('company_id',$company_id)->get()->sortByDesc('created_at');

        $i = 0;

        foreach($review_data as $data){

            $carbon = new Carbon($data['created_at']);
            $review_data[$i]['created_at_human'] = $carbon->format('d M , Y');

            $i++;
        }

        if(Auth::check()){
            
            $review_done = $review->where('company_id',$company_id)->where('review_user_id',Auth::user()->id)->count();

        }else{

            $review_done = '0';

        }
        

    	return view('external.review', compact('result','tag_list','review_data','review_done'));
    }

    public function redirect(){

        // will automatically reload the page with authentication

    }

    public function newreview(Request $request){

        $rate = $request->input('rate');
        $review = $request->input('review');
        $company_id = $request->input('company');

        $reviews = new CompanyReview;

        $reviews->review_user_id = Auth::user()->id;
        $reviews->review_user = Auth::user()->name;
        $reviews->review_rate = $rate;
        $reviews->review_text = $review;
        $reviews->company_id = $company_id;

        $reviews->save();

        return "Success";
    }
}
