<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InboxController;
use App\Http\Controllers\TimelineController;
use App\User;
use App\TimelineCategory;
use App\WEvent;
use App\WEventInbox;
use App\WEventTimeline;
use App\WEventVendors;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UtilitiesController extends Controller
{
    public function dashboardController(Request $request){

        $last_year = $request->input('ly');
    	$last_month = $request->input('lm');
    	$prog = $request->input('ld');
    	$company_id = Auth::user()->company_id;
    	$main_data = array();

    	if($last_month == null){

    		$date = new Carbon();
            $dat2 = new Carbon();

    		$last_month = $date->format('m Y');
            $this_month_year = $date->format('Y'); 

    		for($i = 0;$i < 4;$i++){

    			if($i <> 0){

    				$text_month = $date->addMonth()->format('M'); // incrementing month

    			}else{

    				$text_month = $date->format('M');
    			}

				$int_month = $date->format('m');

    			// parent layer array
				$main_data[$i]['month_text'] = $text_month;
                $main_data[$i]['year'] = $date->format('Y');
				$main_data[$i]['month_digit'] = $int_month;

				$timeline_data = $this->getMonthlyTimeline($date->format('Y'), $int_month, $company_id);

				$main_data[$i]['timeline_count'] = sizeof($timeline_data);
				$main_data[$i]['timeline'] = $timeline_data;

                $new_month_year = $date->format('Y');

                if($new_month_year == $this_month_year){
                    $main_data[$i]['year_text'] = $new_month_year;
                }else{
                    $main_data[$i]['year_text'] = $this_month_year." / ".$new_month_year;
                }
    		}

    		echo json_encode($main_data);

    	}else{

    		if($prog == 'plus'){

    			$last_month += 1;

    		}else{

                // if minus
                if($last_month < 7){

                    $last_year -= 1;
                }

    			$last_month -= 7;
    		}

    		$date = new Carbon();
    		$year = $date->create()->year($last_year)->format('Y');
    		$day = $date->format('d');
    		$month = $date->create()->month($last_month)->format('M');

    		$date = new Carbon('first day of '.$month." ".$year);

    		for($i = 0;$i < 4;$i++){

    			if($i <> 0){

    				$text_month = $date->addMonth()->format('M'); // incrementing month

    			}else{

    				$text_month = $date->format('M');
    			}

				$int_month = $date->format('m');

    			// parent layer array
				$main_data[$i]['month_text'] = $text_month;
				$main_data[$i]['month_digit'] = $int_month;
                $main_data[$i]['year'] = $date->format('Y');

				$timeline_data = $this->getMonthlyTimeline($date->format('Y'), $int_month, $company_id);

				$main_data[$i]['timeline_count'] = sizeof($timeline_data);
				$main_data[$i]['timeline'] = $timeline_data;

                $new_year = $date->format('Y');

                if($new_year == $year){
                    $main_data[$i]['year_text'] = $new_year;
                }else{
                    $main_data[$i]['year_text'] = $year." / ".$new_year;
                }
    		}

    		echo json_encode($main_data);
    	}
    }

    public function quickAccessData(Request $request){

        // for category select data

        $tcategory = new TimelineCategory;
        $categories = $tcategory->all();

        // -----------------------------------------------------------------------

        $timeline_controller = new TimelineController;
        $timeline_count = $timeline_controller->getTotalTimelineCOunt();

        // -----------------------------------------------------------------------

        $eventcontroller = new EventController;
        $all_event = $eventcontroller->listAllCompanyEvent();

        // -----------------------------------------------------------------------

        $mailbox = new InboxController;
        $mailbox_data = $mailbox->companyMailbox();

        // -----------------------------------------------------------------------

        // -----------------------------------------------------------------------

        $main_data['mailbox_data'] = $mailbox_data;
        $main_data['timeline_count'] = $timeline_count;
        $main_data['category'] = $categories;
        $main_data['all_event'] = $all_event;

        $i = 0;

        foreach($all_event as $event)
        {
             $main_data['all_event'][$i]['we_id'] = $event['event']['we_id'];
             $main_data['all_event'][$i]['we_title'] = $event['event']['we_title'];

             $i++;
        }

        return new JsonResponse($main_data);
    }

    public function getMonthlyTimeline($year, $month, $company_id){

    	$timelineController = new TimelineController;

    	$mydata = $timelineController->timelineMonthly($year, $month, $company_id);

    	return $mydata;
    }

    public function listEventVendors(Request $request){

        $event_id = $request->input('event_id');

        $vendors = new WEventVendors;
        $data_vendors = $vendors->where('we_id',$event_id)->get();

        $event = new WEvent;
        $data_event = $event->where('we_id',$event_id)->first();

        $u = new User;
        $u_data = $u->where('id',$data_event['user_id'])->first();

        $vendors_users = array();

        $vendors_users[0]['name'] = "Client";  
        $vendors_users[0]['users'][0] = $u_data;

        $i = 1;

        foreach($data_vendors as $vendor){

            if($vendor['vendor']['company_id'] <> Auth::user()->company_id){

                $users = new User;
                $data_users = $users->where('company_id',$vendor['vendor']['company_id'])->whereNotIn('id', [Auth::user()->id])->get();

                $vendors_users[$i]['name'] = $vendor['vendor']['company_name'];
                $vendors_users[$i]['users'] = $data_users;

                $i++;
            }
        }

        return json_encode($vendors_users);
    }

    public function globalNotification(Request $request){

        $status = 0;

        if(Auth::user()->role_id == '5'){

            // is there any invitation
            $inbox = new WEventInbox;
            $count_inbox = $inbox->where('i_recipient_id',Auth::user()->id)->where('i_type_id','2')->where('i_status_id','0')->count();

            $status += $count_inbox;

            // is there any rejected event
            $event = new WEvent;
            $users_event = $event->where('user_id',Auth::user()->id)->where('wes_id','1')->get();
            $rejected_count = $event->where('user_id',Auth::user()->id)->where('wes_id','3')->count();

            $status += $rejected_count;

            // count notification from all event's timeline

            foreach($users_event as $event){

                $we_id = $event['we_id'];

                $timeline = new WEventTimeline;

                $data_noti = $timeline
                            ->where('we_id', $we_id)
                            ->where(function($query){

                                $query
                                ->where(function($query_){
                                    $query_->where('ts_id',1)->where('user_id', Auth::user()->id);
                                })
                                ->orWhere(function($query_){

                                    $query_->where('ts_id',3)->where('wet_owner', Auth::user()->id);
                                });

                            })
                            ->get();

                foreach($data_noti as $noti){

                    $status += 1;
                }
            }


        }else if(Auth::user()->role_id == '3'){

            // CHECK INBOX ----------------------------------------------

            $inbox = new WEventInbox;
            $count_inbox = $inbox->where(function($query){

                    $query->where('i_recipient_id',Auth::user()->company_id)
                    ->whereIn('i_type_id',[3,4,5,6])
                    ->where('i_status_id',0);

                })->orWhere(function($query){

                    $query->where('i_recipient_id',Auth::user()->user_id)
                    ->whereIn('i_type_id',[2,7])
                    ->where('i_status_id',0);

                })->count();

            $status += $count_inbox;

            // to count if there is any booking from customer made -------

            $wevent = new WEvent;
            $count = $wevent->where('company_id',Auth::user()->company_id)->where('wes_id','3')->count();

            $status += $count;

            // count notification from all event's timeline

            $vendors = new WEventVendors;
            $data_vendors = $vendors->where('company_id',Auth::user()->company_id)->get();

            foreach($data_vendors as $vendor){

                $we_id = $vendor['we_id'];

                $timeline = new WEventTimeline;

                $data_noti = $timeline
                            ->where('we_id', $we_id)
                            ->where(function($query){

                                $query
                                ->where(function($query_){
                                    $query_->where('ts_id',1)->where('user_id', Auth::user()->id);
                                })
                                ->orWhere(function($query_){

                                    $query_->where('ts_id',3)->where('wet_owner', Auth::user()->id);
                                });

                            })
                            ->get();

                foreach($data_noti as $noti){

                    $status += 1;
                }

            }
        }

        return $status;
    }

    public function html_cut($text, $max_length)
    {
        $tags   = array();
        $result = "";

        $is_open   = false;
        $grab_open = false;
        $is_close  = false;
        $in_double_quotes = false;
        $in_single_quotes = false;
        $tag = "";

        $i = 0;
        $stripped = 0;

        $stripped_text = strip_tags($text);

        while ($i < strlen($text) && $stripped < strlen($stripped_text) && $stripped < $max_length)
        {
            $symbol  = $text{$i};
            $result .= $symbol;

            switch ($symbol)
            {
               case '<':
                    $is_open   = true;
                    $grab_open = true;
                    break;

               case '"':
                   if ($in_double_quotes)
                       $in_double_quotes = false;
                   else
                       $in_double_quotes = true;

                break;

                case "'":
                  if ($in_single_quotes)
                      $in_single_quotes = false;
                  else
                      $in_single_quotes = true;

                break;

                case '/':
                    if ($is_open && !$in_double_quotes && !$in_single_quotes)
                    {
                        $is_close  = true;
                        $is_open   = false;
                        $grab_open = false;
                    }

                    break;

                case ' ':
                    if ($is_open)
                        $grab_open = false;
                    else
                        $stripped++;

                    break;

                case '>':
                    if ($is_open)
                    {
                        $is_open   = false;
                        $grab_open = false;
                        array_push($tags, $tag);
                        $tag = "";
                    }
                    else if ($is_close)
                    {
                        $is_close = false;
                        array_pop($tags);
                        $tag = "";
                    }

                    break;

                default:
                    if ($grab_open || $is_close)
                        $tag .= $symbol;

                    if (!$is_open && !$is_close)
                        $stripped++;
            }

            $i++;
        }

        while ($tags)
            $result .= "</".array_pop($tags).">";

        return $result;
    }
}
