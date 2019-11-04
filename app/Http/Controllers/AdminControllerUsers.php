<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminControllerUsers extends Controller
{
    public function index(Request $request){

    	return view('admin.users');
    }

    public function listAll(Request $request){

    	$length = $request->input('length'); // how many records per retrieve
    	$offset = $request->input('start'); // start retrieve from which row
    	$draw = $request->input('draw'); // for dataTables security reason
    	$order = $request->input('order'); // for dataTables sorting
    	$search = $request->input('search');
    	$search_value = $search['value'];

    	$sortBy = $order[0]['column'];
    	$sortDir = $order[0]['dir'];

    	$user = new User;
    	$query = $user->skip($offset)->take($length);

    	// for search purpose --------------------------------------------

    	if($search_value <> ''){

    		// echo $search_value;

    		$query = $query->where('name','like', $search_value.'%')
    						->orWhere('name','like','%'.$search_value)
    						->orWhere('name','like','%'.$search_value.'%')
    						->orWhere('fullname','like',$search_value.'%')
    						->orWhere('fullname','like','%'.$search_value)
    						->orWhere('fullname','like','%'.$search_value.'%')
    						->orWhere('email','like',$search_value.'%')
    						->orWhere('email','like','%'.$search_value)
    						->orWhere('email','like','%'.$search_value.'%')
    						->orWhere('phone','like',$search_value.'%')
    						->orWhere('phone','like','%'.$search_value)
    						->orWhere('phone','like','%'.$search_value.'%')
    						->orWhere('state','like',$search_value.'%')
    						->orWhere('state','like','%'.$search_value)
    						->orWhere('state','like','%'.$search_value.'%')
    						->orWhere('created_at','like',$search_value.'%')
    						->orWhere('created_at','like','%'.$search_value)
    						->orWhere('created_at','like','%'.$search_value.'%')
    						->orWhere('dob','like',$search_value.'%')
    						->orWhere('dob','like','%'.$search_value)
    						->orWhere('dob','like','%'.$search_value.'%');
    	}

    	// for sorting purpose -------------------------------------------

    	if($sortBy == '1'){

    		$query = $query->orderBy('fullname',$sortDir);

    	}else if($sortBy == '2'){

    		$query = $query->orderBy('email',$sortDir);

    	}else if($sortBy == '3'){

    		$query = $query->orderBy('phone',$sortDir);

    	}else if($sortBy == '4'){

    		$query = $query->orderBy('state',$sortDir);

    	}else if($sortBy == '5'){

    		$query = $query->orderBy('role_id',$sortDir);

    	}else if($sortBy == '6'){

    		$query = $query->orderBy('created_at',$sortDir);

    	}else{

    		$query = $query->orderBy('name',$sortDir);

    	}

    	$data = $query->get();

    	$total = $user->count();

    	$data_arr = array();

    	$i = 0;

    	foreach($data as $d){

    		$data_arr[$i] = [ $d['name'], $d['fullname'], $d['email'], $d['phone'], $d['state'], $d['role_id'], $d['created_at']];

    		$i++;
    	}

    	$main_array = ['draw'=>$draw,'recordsTotal'=>$total,'recordsFiltered'=>$total,'data'=>$data_arr];

    	return json_encode($main_array);

    }
}