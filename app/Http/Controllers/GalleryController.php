<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Company;
use App\CompanyCategoryTag;
use App\User;
use App\Http\Controllers\UtilitiesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(){

    	$gallery = new Attachment;

    	$result = $gallery->where('item_id',Auth::user()->company_id)->where('item_type','gallery')->get();

        $tag = new CompanyCategoryTag;

        $tag_list = $tag->where('company_id',Auth::user()->company_id)->get();

        $utilities = new UtilitiesController;

        $rate = $utilities->companyRating(Auth::user()->company_id);

    	return view('internal.gallery', compact('result','tag_list','rate'));
    }

    public function uploadPhoto(Request $request){

    	$path = $request->file('file')->store('public/gallery/company/'.Auth::user()->company_id);

    	$file_name = $request->file->getClientOriginalName();

    	$path = ltrim($path,'public/');

    	$attachment = new Attachment;

    	$attachment->att_name = $file_name;
    	$attachment->att_filename = $file_name;
    	$attachment->att_path = $path;
    	$attachment->item_type = "gallery";
    	$attachment->item_id = Auth::user()->company_id;

    	$attachment->save();
    }

    public function removePhoto(Request $request){

        $img_name = $request->input('img');
        $img_att = $request->input('att');

        $gallery = new Attachment;
        $delete = $gallery->where('att_id',$img_att)->delete();

        Storage::delete('public/gallery/company/'.Auth::user()->company_id.'/'.$img_name);

        $count = $gallery->where('item_type','gallery')->where('item_id',Auth::user()->company_id)->count();

        return $count;
    }

    public function listPhotoJSON(Request $request){

    	$gallery = new Attachment;

    	$result = $gallery->where('item_id',Auth::user()->company_id)->where('item_type','gallery')->get();

    	return json_encode($result);
    }

    public function uploadAvatar(Request $request){

    }

    public function newLogo(Request $request){

        $path = $request->file('file')->store('public/avatar/company/'.Auth::user()->company_id);

        $file_name = $request->file->getClientOriginalName();

        $path = ltrim($path,'public/');

        $company = new Company;

        $update = $company->where('company_id',Auth::user()->company_id)->update(['company_logo'=>$path]);
    }

    public function newDP(Request $request){

        $path = $request->file('file')->store('public/avatar/user/'.Auth::user()->id);

        $file_name = $request->file->getClientOriginalName();

        $path = ltrim($path,'public/');

        $user = new User;

        $update = $user->where('id',Auth::user()->id)->update(['dp'=>$path]);
    }
}
