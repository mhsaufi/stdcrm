<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Company;
use App\CompanyCategory;
use App\CompanyCategoryTag;
use App\CompanyPackage;
use App\CompanyPackageTag;
use App\Attachment;
use App\Merchant;
use App\User;
use App\EventExternal;
use App\Http\Controllers\UtilitiesController;
use Carbon\Carbon;

class PublicController extends Controller
{
    public function index(Request $request){

        $packages = new CompanyPackage;

        $package_result = $packages->get();

        $p_result = array();

        $i = 0;

        foreach($package_result as $p){

            if($i < 3){

                $p_result[$i] = $p;

                if($p['package_detail'] <> ''){

                    $decoded_str = base64_decode($p['package_detail']);

                    $tool = new UtilitiesController;

                    $short_str = $tool->html_cut($decoded_str, 80);

                    $p_result[$i]['package_detail_short'] = $short_str."...";
                }
            }else{
                
            }

            $i++;
        }

        return view('front',compact('p_result'));
    }

    public function form(){

        $company = new Company;

        $company_data = $company->orderBy('company_name')->get();

        $category = new CompanyCategory;

        $categoy_data = $category->get();

        return view('auth.form',compact('company_data','categoy_data'));
    }

    public function newVendor(Request $request){

        $fullname = $request->input('fullname');
        $name = $request->input('name');
        $email = $request->input('email');
        $pass = $request->input('pw');
        $phone = $request->input('phone');

        $c_category = $request->input('cc');

        $c_name = $request->input('c_name');
        $c_email = $request->input('c_email');
        $c_ssm = $request->input('c_ssm');
        $c_address = $request->input('c_address');
        $c_phone = $request->input('c_phone');
        $cid = $request->input('cid');
        $c_type = $request->input('c_type');
        $c_website = $request->input('c_website');


        $merchant = new Merchant;

        $merchant->name = $name;
        $merchant->fullname = $fullname;
        $merchant->email = $email;
        $merchant->phone = $phone;
        $merchant->role_id = "3";
        $merchant->password = Hash::make($pass);

        $merchant->save();

        if($c_type == '1'){

            $company = new Company;

            $company->company_name = $c_name;
            $company->company_contact = $c_phone;
            $company->company_email = $c_email;
            $company->company_website = $c_website;
            $company->company_ssm = $c_ssm;
            $company->company_address = $c_address;
            $company->company_logo = "";
            $company->company_type_id = "wp";
            $company->user_id = $merchant->id;

            $company->save();

            $update = $merchant->where('id', $merchant->id)->update(['company_id'=>$company->id]);

            if($c_category <> null || $c_category <> ''){

                foreach($c_category as $category){

                    $cct = new CompanyCategoryTag;

                    $cct->cc_id = $category;
                    $cct->company_id = $company->id;

                    $cct->save();
                }

            }
            
        }else{

            $update = $merchant->where('id', $merchant->id)->update(['company_id'=>$cid,'status_id'=>'3']);

        }

        $data_return = array($merchant->id);

        $this->authenticate($email, $pass);
    }

    public function authenticate($email, $password){
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            
        }else{
            
        }
    }

    public function checkUsernamePassword(Request $request){

        $email = $request->input('email');
        $username = $request->input('username');

        $user = new User;

        $count = $user->where('name', $username)->count();

        $count2 = $user->where('email', $email)->count();

        if($count <> 0){
            $status = 1;
        }else{
            if($count2 <> 0){
                $status = 2;
            }else{
                $status = 3;
            }
        }

        return $status;
    }

    public function events(){

        $event = new EventExternal;
        $event_data = $event->get();
        $event_count = $event->count();

        $i = 0;

        foreach($event_data as $e){

            $a = new Carbon($e['date_start']);

            $event_data[$i]['big_date_num'] = $a->format('d');
            $event_data[$i]['big_date_text'] = $a->format('M');

            $b = new Carbon($e['date_end']);

            $event_data[$i]['period'] = $a->format('D, d')." - ".$b->format('D, d M Y');

            $i++;
        }

        return view('external.promo',compact('event_data','event_count'));
    }

    public function listVendor(Request $request){

        $search_query = $request->input('query');

        $category = new CompanyCategory;

        $category_data = $category->get();

        $company = new Company;

        if($search_query == ''){

            $result = $company->get();

            $p_count = $company->count();

            $i = 0;

            foreach($result as $r){

                $utilities = new UtilitiesController;

                $rating = $utilities->companyRating($r['company_id']);

                $result[$i]['rating'] = $rating;

                $i++;
            }

        }else{

        }

        return view('external.beta',compact('result','category_data','p_count'));
    }

    public function viewVendor($company_name, $company_id){

        $company = new Company;

        $result = $company->where('company_id',$company_id)->first();

        $tag = new CompanyCategoryTag;

        $tag_list = $tag->where('company_id',$company_id)->get();

        $user = new User;

        $staff_list = $user->where('company_id',$company_id)->get();

        return view('external.viewvendor',compact('result','tag_list','staff_list'));
    }

    public function contactVendors($company_name, $company_id){

        $company = new Company;

        $result = $company->where('company_id',$company_id)->first();

        return view('external.contactvendor',compact('result'));
    }

    public function viewVendorGallery($company_name, $company_id){

        $gallery = new Attachment;

        $galleries = $gallery->where('item_id',$company_id)->where('item_type','gallery')->get();

        $count = $gallery->where('item_id',$company_id)->where('item_type','gallery')->count();

        $company = new Company;

        $result = $company->where('company_id',$company_id)->first();


        return view('external.gallery', compact('result','galleries','count'));
    }

    public function viewVendorPackages($company_name, $company_id){

        $company = new Company;

        $result = $company->where('company_id',$company_id)->first();

        $packages = new CompanyPackage;

        $p_result = $packages->where('company_id',$company_id)->get();

        $i = 0;

        foreach($p_result as $p){

            if($p['package_detail'] <> ''){

                $decoded_str = base64_decode($p['package_detail']);

                $tool = new UtilitiesController;

                $short_str = $tool->html_cut($decoded_str, 120);

                $p_result[$i]['package_detail_short'] = $short_str."...";
            }

            $i++;
        }

        return view('external.packagesvendor',compact('result','p_result'));
    }

    public function allVendorPackages(Request $request){

        if($request->input()){
            $selectedCategory = $request->input('c');
            $selectedCompany = $request->input('cm');
        }else{
            $selectedCategory = '';
            $selectedCompany = '';
        }

        if($selectedCategory <> ''){

            $selectedC = explode(',', $selectedCategory);
            // echo "2";

        }else{

            $selectedC = array();
            // echo "1";
        }

        if($selectedCompany <> ''){

            $selectedCM = explode(',', $selectedCompany);
            // echo "2a";

        }else{

            $selectedCM = array();

            // echo "1a";
        }

        // print_r($selectedC);

        $category = new CompanyCategory;

        $category_data = $category->get();

        $company = new Company;

        $result = $company->get();

        //--------------------------------------------------------------------

        $packages = new CompanyPackage;

        $package_id_arr = array();

        if(!empty($selectedC)){

            // echo "Ada";

            $packageTag = new CompanyPackageTag;
            $packageTagData = $packageTag->whereIn('cc_id',$selectedC)->get();

            foreach($packageTagData as $tagData){

                array_push($package_id_arr, $tagData['package_id']);

            }

            // print_r($package_id_arr);

            $query = $packages->whereIn('package_id',$package_id_arr);

            if(!empty($selectedCM)){

                // echo "company ada";

                $query = $query->whereIn('company_id',$selectedCM);
            }

        }else{

            // echo "Tiada";

            if(!empty($selectedCM)){

                $query = $packages->whereIn('company_id',$selectedCM);

            }else{

                // echo "Memang tiada";

                $query = $packages;

            }

        }

        $p_count = $query->count();
        $p_result = $query->get();

        //--------------------------------------------------------------------

        $i = 0;

        foreach($p_result as $p){

            if($p['package_detail'] <> ''){

                $decoded_str = base64_decode($p['package_detail']);

                $tool = new UtilitiesController;

                $short_str = $tool->html_cut($decoded_str, 120);

                $p_result[$i]['package_detail_short'] = $short_str."...";
            }

            $i++;
        }

        return view('external.packages',compact('result','category_data','p_result','p_count'));
    }

    public function detailVendorPackages($package_name,$package_id){

        $package = new CompanyPackage;

        $result = $package->where('package_id', $package_id)->first();  

        return view('external.viewpackage',compact('result'));
    }

    public function staffInfo(Request $request){

        $uid = $request->input('uid');

        $user = new User;

        $data_user = $user->where('id',$uid)->first();

        $carbon = new Carbon($data_user['created_at']);

        $data_user['created'] = $carbon->format('d M , Y');

        return json_encode($data_user);
    }

    public function reset(Request $request){

        $email = $request->input('email');

        $user = new User;

        $check = $user->where('email',$email)->count();

        if($check <> 0){

            $info = $user->where('email',$email)->first();

            $key = str_random(30);

            $update = $user->where('id',$info['id'])->update(['remember_token' => $key]);

            $reset_password_url = url('/').'/reset/'.$key;


            Mail::send('emails.password_reset_mail',['link_url' => $reset_password_url,'name' => $info['name']],function($m) use ($info){

                // $m->from('online@savethedate-my.com','Save The Date');

                $m->to($info['email'], $info['name'])->subject('Password reset link');

            });


            $status = '200';

        }else{

            $status = '418';
        }

        return $status;
    }

    public function resetStep2($key){

        $user = new User;

        $count = $user->where('remember_token',$key)->count();

        if($count == 0){

            abort(403, 'Unauthorized action');

        }else{

            $info = $user->where('remember_token',$key)->first();

            return view('auth.reset_form',compact('info'));
        }
    }

    public function resetStep3(Request $request){

        $pw = $request->input('pw1');
        $id = $request->input('user');

        $user  = new User;
        $update = $user->where('id',$id)->update(['password'=>Hash::make($pw)]);

        return "200";
    }
}
