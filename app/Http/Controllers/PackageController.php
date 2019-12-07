<?php

namespace App\Http\Controllers;

use App\User;
use App\Company;
use App\CompanyCategory;
use App\CompanyCategoryTag;
use App\CompanyPackage;
use App\CompanyPackagePost;
use App\CompanyPackageTag;
use App\WEvent;
use App\Http\Controllers\UtilitiesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function index(){

        $company_package = new companyPackage;

        $result = $company_package->where("company_id",Auth::user()->company_id)->get();

        $company_category = new CompanyCategory;

        $categories = $company_category->get();

        $tag = new CompanyCategoryTag;

        $tag_list = $tag->where('company_id',Auth::user()->company_id)->get();

        $utilities = new UtilitiesController;

        $rate = $utilities->companyRating(Auth::user()->company_id);

        return view('internal.packages',compact('result','categories','tag_list','rate'));        
        
    }

    public function create(Request $request){

        $title = $request->input('title');
        $price = $request->input('price');
        $pax = $request->input('pax');
        $category = $request->input('category');
        $detail = $request->input('detail');
        
        $company_package = new CompanyPackage;

        $company_package->package_title = $title;
        $company_package->package_price = $price;
        $company_package->package_pax = $pax;
        // $company_package->package_category = $category;
        $company_package->package_detail = base64_encode($detail);
        $company_package->company_id = Auth::user()->company_id;

        $company_package->save();

        foreach($category as $c){

            $cpct = new CompanyPackageTag;

            $cpct->package_id = $company_package->id;
            $cpct->cc_id = $c;

            $cpct->save();
        }
        
        return "Successful";
    }

    public function edit(Request $request){
        
        $package_id = $request->input('p_id');        
        $package = new CompanyPackage;
        $data = $package->where('package_id', $package_id)->first();

        // return json_encode($edit);
        return view('namaview',compact('data'));
    }

    public function update(Request $request){

        $title = $request->input('title');
        $price = $request->input('price');
        $pax = $request->input('pax');
        $category = $request->input('category');
        $detail = $request->input('detail');
        $package_id = $request->input('package_id');
        
        $company_package = new CompanyPackage;

        $update = $company_package
                    ->where('package_id', $package_id)
                    ->update(['package_title'=>$title,'package_price'=>$price,'package_pax'=>$pax,'package_category'=>$category,'package_detail'=>base64_encode($detail)]);

       
        return "Successful";
    }

   public function delete(Request $request){

        $package_id = $request->input('package_id');

        $event = new WEvent;

        $event_count = $event->where('package_id',$package_id)->where('wes_id','1')->count();

        if($event_count > 0){

            $status = 1;

        }else{

            $status = 0;

            $package = new CompanyPackage;

            $delete = $package->where('package_id',$package_id)->delete();

        }

        return $status;
   }
}
