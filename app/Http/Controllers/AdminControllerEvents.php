<?php

namespace App\Http\Controllers;

use App\EventExternal;
use Illuminate\Http\Request;

class AdminControllerEvents extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){

    	$event = new EventExternal;
    	$event_data = $event->get();
    	$event_count = $event->count();

    	return view('admin.events',compact('event_data','event_count'));
    }
}
