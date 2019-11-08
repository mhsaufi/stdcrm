<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="page_site" content="savethedate-my.com">
    <meta name="page_language" content="English">
    <meta name="page_type" content="Timeline Vendor">
    <meta name="page_title" content="Timeline | {{ $data_event['we_title'] }}">
    <meta name="event_id" content="{{ $data_event['we_id'] }}">
    <meta name="user_id" content="{{ Auth::user()->id }}">
    <meta name="user_email" content="{{ Auth::user()->email }}">

    <title>Dashboard | {{ $data_event['we_title'] }}</title>
    @include('templates.header')
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/timelinesimple/style-albe-timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/air-datepicker-master/dist/css/datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/summernote-master/summernote/summernote-lite-bs3.css')}}">
    <style type="text/css">
      .pattern {
        background: #FFFBE5!important;
      }

      #std_timline_form {
        display: none;
      }

      #add-timeline-btn {
        border: none;
        padding: 8px 18px;
        background: #7cb342;
        border-radius: 5px; 
        color: #ffff;
        cursor: pointer;
      }

      #add-timeline-btn:hover {
        background: #8bc34a;
      }

      .big_container {
        padding: 0 10%;
      }

      #label-category{
        background-color: white;
        align-self: flex-start;
        width: 18%;
        height: 60px;
        padding-top: 8px;
        margin-top: 5px;
        border-radius: 10px 10px 0 0;  
        border: none;     
      }
      
      #label-category p{
        font-weight: bold;
        opacity: 0.4;
      }

      .icon-circle{
        background-color: #fff  ; /*#f2f4f4; */
        color:  #5d6d7e  ; /*#aeb6bf ;*/
        border: 1px solid lightgrey;
        height: 95px;
        width: 95px;
        padding-top: 17px;
        border-radius: 50%;
      } 

      .icon-circle:hover{
        background-color: white;
        color:  #d4ac0d ;
        border: 2px solid gold;
        z-index: 99;
        cursor: pointer;
      }
      .icon-circle a{
        color: black;
        opacity: 0.6;
      }
      .navbar-expand-lg .navbar-nav .nav-link {
        color: black !important;
        opacity: 0.5;
      }
      .navbar-expand-lg .navbar-nav .nav-link:active{
        color: gold !important;
        opacity: 0.5;
      }

      #btn-register{
      	border-radius: 10px;
      	height: 40px;
      	background-color: green;
      	color: white;		
      }

      #btn-seemore{
      	border-radius: 10px;
      	height: 40px;
      	background-color: blue;
		    color: white;
      }

      #edit-icon {
        opacity: 0.7;
        cursor: pointer;
      }

      #edit-icon:hover {
        opacity: 0.9;
      }

      #myTimeline {
        width: 100%!important;
        background: #fbfcfc;
        border-radius: 4px;
      }

      #timeline {
        width: 89%!important;
      }

      .no_timeline {
        padding: 20px 20px;
      }

      .no_timeline>span {
        opacity: 0.8;
      }

      .panel-title {
        border: 0.05em solid #cfd8dc;
        border-radius: 5px;
        height: 30px;
        width: 100%;
        margin-left: 20px;
        margin-top: 15px;
        margin-bottom: -20px;
        padding: 5px 10px;
        font-weight: bold;
        color: white;
      }
      /*green*/
      .approve { 
        background: #8bc34a;
      }
      /*yellow*/
      .pending {
        background: #ffca28;
      }
      /*red*/
      .disapproved {
        background: #f44336;
      }

      .timeline-date {
        font-style: italic;
        font-size: 1.2em;
      }

      .card{
        background-color: rgba (255,255,55,0.6)!important;
      }

      .std-link {
        text-decoration: none;
        color: #cfd8dc;
      }

      .std-link:hover {
        color: #90a4ae;
      }


      .std-btn {
        padding: 10px 20px;
        background: #09ce61;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        margin-right: 10px;
        float: left;
        height: 100%;
      }

      .std-btn:hover {
        background: #09bf5a;
      }

      .std-timeline-banner {
        position: relative;
        height: auto;
        background: #ffff;        
        padding: 20px 20px;
        border-radius: 5px;
        -moz-box-shadow: 0 0 5px #888;
        -webkit-box-shadow: 0 0 5px#888;
        box-shadow: 0 0 2px #888;
        margin: 20px 0 5px 0;
      }

      #std-timeline-banner-option-popup {
        position: absolute;
        top: 35px;
        right: 15px;
        width: 200px;
        height: 60px;
        background: white;
        -moz-box-shadow: 0 0 5px #888;
        -webkit-box-shadow: 0 0 5px#888;
        box-shadow: 0 0 2px #888;
        z-index: 99;
        padding: 10px 15px;
        display: none;
      }

      #std-timeline-banner-option-popup-content {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      .std-timeline-banner-option-popup-content-text {
        opacity: 0.5;
        cursor: pointer;
      }

      .std-timeline-banner-option-popup-content-text:hover {
        opacity: 0.8;
      }

      .std-timeline-banner-header{
        width: 100%;
        display: flex;
        justify-content: space-between;
      }

      .std-timeline-banner-transaction {
        width: 100%;
        padding: 10px 14px;
        /*background: green;*/
        display: flex;
        flex-direction: column;
        font-family: Optima, Segoe, Segoe UI, Candara, Calibri, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px;
        margin-bottom: 15px;
      }

      .std-timeline-banner-info {
        width: 100%;
        padding: 20px 20px;
        font-size: 14px;
      }

      .std-timeline-sidebar {
        background: #ffff;        
        padding: 20px 20px;
        border-radius: 3px;
        -moz-box-shadow: 0 0 5px #888;
        -webkit-box-shadow: 0 0 5px#888;
        box-shadow: 0 0 2px #888;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
      }

      .std-timeline {
        width: 100%;
        min-height: 250px;
        background: #ffff;        
        padding: 20px 20px;
        border-radius: 3px;
        -moz-box-shadow: 0 0 5px #888;
        -webkit-box-shadow: 0 0 5px#888;
        box-shadow: 0 0 2px #888;
      }

      .std-timeline-body {
        width: 100%!important;
        background: #ffff;
        border: 0.05em solid #cfd8dc;
        border-radius: 5px;
        /*box-shadow: 0 0 2px #888;*/
        margin-left: 20px;
        margin-top: 15px;
        cursor: pointer;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }

      .std-timeline-body:hover {
        background: #fbfcfc;
        /*box-shadow: 0 0 2px #888;*/
      }

      .std-timeline-sidebar-btn {
        border: 0.05em solid #cfd8dc;
        border-radius: 1px;
        padding: 5px 10px;
        /*color: #fff;*/
        background: #f5f5f5;
        float: right;
        cursor: pointer;
      }

      .std-timeline-sidebar-btn:hover {
        background: #EEEEEE;
      }

      .notification-tcard-header {
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
        padding: 6px 10px;
        color: #fff;
        font-weight: bold;
        font-size: 12px;
      }

      .notification-tcard-content {
        background: #fff;
        border-radius: 2px;
        padding: 10px 10px;
        border: 0.05em solid #cfd8dc;
        margin-bottom: 10px;
        font-size: 12px;
        min-height: 50px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
      }

      .vendors-tcard {
        position: relative;
        /*padding: 0 10%;*/
        border: 0.05em solid #cfd8dc;
        border-radius: 2px;
        width: 100%;
        min-height: 28%;
        margin-bottom: 5px;
        cursor: pointer;
        font-size: 13px;
        /*background: green;*/
      }

      .vendors-tcard:hover {
        -moz-box-shadow: 0 0 1px #888;
        -webkit-box-shadow: 0 0 1px#888;
        box-shadow: 0 0 1px #888;
      }

      .vendors-tcard-name {
        width: 93%;
        position: absolute;
        margin-right: 0;
        -webkit-transition: margin-right 0.2s, opacity 0.2s;
      }

      .vendors-tcard-name-contact {
        width: 100%;
        position: absolute;
        top: 0;
        bottom: 0;
        opacity: 1;
        margin: auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        /*background: red;*/
        padding: 0 5%;
      }

      .vendors-tcard-name-invite-alert {
        width: 100%;
        position: absolute;
        top: 0;
        bottom: 0;
        opacity: 1;
        margin: auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        background: #e74c3c;
        color: white;
        padding: 0 5%;
      }

      .vendors-tcard-name-invite-alert:hover {
        opacity: 0.9;
      }

      .vendors-tcard:hover  .vendors-tcard-name {
        margin-right: -15%;
        opacity: 0;
      }

      .vendors-tcard-add-contact {
        position: absolute;
        opacity: 0;
        margin-left: -11%;
        -webkit-transition: margin-left 0.2s, opacity 0.3s
      }

      .vendors-tcard:hover .vendors-tcard-add-contact {
        margin-left: 0;
        opacity: 1;
      }

      .vendors-tcard-disable {
        padding: 8px 10px;
        border: 0.05em solid #f7f7f7;
        background: #f7f7f7;
        border-radius: 2px;
        width: 100%;
        margin-bottom: 5px;
        font-size: 13px;
      }

      .approve_btn {
        padding: 10px 15px;
        margin-left: 15px;
        border: none;
        cursor: pointer;
        background: #689F38;
        color: white;
      }

      .disapprove_btn {
        padding: 10px 15px;
        margin-left: 15px;
        border: none;
        cursor: pointer;
        background: #d32f2f;
        color: white;
      }

      #confirm_update {
        position: fixed;
        background: white;
        top: 25%;
        left: 40%;
        height: 180px;
        width: 300px;
        -moz-box-shadow: 0 0 30px #888;
        -webkit-box-shadow: 0 0 30px#888;
        box-shadow: 0 0 30px #888;
        z-index: 999;
        display: none;
      }

      .main_timeline_col {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        flex-wrap: wrap;
      }

      .col_notification {
        width: 25%;
      }

      .col_timeline {
        width: 75%;
        padding-right: 0!important;
        padding-left: 5px!important;
      }

      .std-timeline-banner-info-detail {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }

      .filter_row {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
      }

      .vendor_select {
        margin-left: 30px;
        height: 30px;
        width: 200px;
        padding-left: 10px;
      }

      .timeline_form_child_1 {
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin-top: 15px;
      }

      .timeline_form_child_4 {
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
      }

      .timeline_form_child_4 div {
        display: flex;
        justify-content: flex-start;
        align-items: center;
      }

      #approve_invite_container {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(255,255,255, 0.8);
        z-index: 999;
        display: none;
      }

      #approve_invite_form {
        position: absolute;
        top: 40%;
        left: 40%;
        width: 20%;
        height: 20%;
        background: white;
        border-radius: 5px;
        -moz-box-shadow: 0 0 30px #888;
        -webkit-box-shadow: 0 0 30px#888;
        box-shadow: 0 0 30px #888;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding: 10px 15px;
      }

      .approve_button_yes {
        padding: 5px 10px;
        border: none;
        background: #2ecc71;
        color: white;
        border-radius: 3px;
        cursor: pointer;
      }

      .approve_button_yes:hover {
        opacity: 0.9;
      }

      .approve_button_no {
        padding: 5px 10px;
        border: none;
        background: #e74c3c;
        color: white;
        border-radius: 3px;
        cursor: pointer;
      }

      .approve_button_no:hover {
        opacity: 0.9;
      }

      .close_approve_container {
        cursor: pointer;
      }

      @media (max-width: 560px) {
        .big_container {
          margin-top: 7%;
          padding: 20px 2.5%;
        }

        .std-timeline-banner {
          margin: 0;
          width: 100%;
          margin-bottom: 10px;
        }

        .std-timeline-banner-info-detail {
          height: 150px;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
        }

        .col_notification {
          width: 100%;
          margin-bottom: 2.5%;
        }

        .col_timeline {
          width: 100%;
          margin: 0;
          padding: 0;
          padding-left: 0!important;
        }

        .filter_row {
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          align-items: flex-start;
          height: 20%;
        }

        .vendor_select {
          margin-left: 0;
          height: 30px;
          width: 100%;
          margin-bottom: 15%;
          padding-left: 10px;
        }

        #edit-icon {
          display: none;
        }

        .timeline_form_child_1 {
          width: 100%;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          margin-top: 15px;
        }

        .timeline_form_child_1 div {
          width: 100%;
          display: flex;
          flex-direction: row;
          justify-content: space-between;
          margin-bottom: 15px;
        }

        .timeline_form_child_4 {
          width: 100%;
          height: 100px;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          margin-top: 10px;
        }

        .timeline_form_child_4 > div {
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
          align-items: flex-start;
          width: 100%;
        }
      }
    </style>
  </head>
  <body class="pattern">

    <!-- Update event reminder popup -->

    <div id="confirm_update">
      <div style="padding: 10px 10px;display: flex;flex-direction: column;justify-content: flex-start;height: 100%;width: 100%;align-items: center;">
        <div style="padding: 10px 0;border-bottom: 0.05em solid #d4af37;margin-bottom: 10px;width: 100%;">Notes</div>
        <div style="padding: 10px 0;">
          <p>Your event has been successfully updated!</p>
        </div>
        <div><button class="approve_btn" id="okey_update">Okey</button></div>
      </div>      
    </div>

    <!-- =============================== Form for creating event ===================================== -->

    <div id="create_event_form" style="height: 490px;">
      <div class="row">
        <span>Create new event</span><span class="close-action-icon"><i class="fas fa-times"></i></span>
        <hr>
      </div>
      <div class="row">
        <label>Select Package</label>
        <select class="form-std" id="package">
          <option value=""></option>
          <option value="C">Custom</option>
          @foreach($package_data as $package)
          <option value="{{ $package['package_id'] }}">{{ $package['package_title'] }}</option>
          @endforeach
        </select>
        <br>
        <label>Event Name</label>
        <input type="text" name="we_title" class="form-std" placeholder="event name" id="title" value="{{ $data_event['we_title'] }}" />
        <label>Description</label>
        <textarea class="form-std" id="description"></textarea><br>
        <label>Address</label>
        <input type="text" name="we_title" class="form-std" placeholder="event venue address" id="address" value="{{ $data_event['we_venue'] }}" />
        <div class="three-inline-box-std">
          <div>
            <label>Date</label>
            <input type='text' class="form-std datepicker-here" data-position="right top" data-language='en' data-date-format='d-m-yyyy' id="date" value="{{ $data_event['we_date_airdatepicker'] }}" />
          </div>
          <div>
            <label>Time Start</label>
            <div class="input-group bootstrap-timepicker timepicker">
              <input id="timepicker" class="form-std" data-provide="timepicker" data-minute-step="1" type="text" value="{{ $data_event['we_time1_timepicker'] }}" />
            </div>
          </div>
          <div>
            <label>Time End</label>
            <div class="input-group bootstrap-timepicker timepicker">
              <input id="timepicker2" class="form-std" data-provide="timepicker" data-minute-step="1" type="text" value="{{ $data_event['we_time2_timepicker'] }}" />
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <button class="std-btn" id="reg_event">Update Event</button> 
      </div>
    </div>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>

    <!-- ====================== Timeline header EVENT INFO ============================== -->

    <!-- Feature Section Start -->
    <div class="section-padding">
      <div class="big_container">
        <div class="std-timeline-banner">
          <div class="std-timeline-banner-header">
            <div id="std-timeline-banner-option-popup">
              <div id="std-timeline-banner-option-popup-content">
                <div class="std-timeline-banner-option-popup-content-text" id="edit_info">Edit Information</div>
                <div class="std-timeline-banner-option-popup-content-text" id="cancel_event">Cancel Event</div>
              </div>
            </div>
            
            <div>
              @if(Auth::user()->role_id == '5')

              @else
              <a href="{{ url('/home') }}" class="std-link"><i class="fas fa-columns"></i> Back to Dashboard</a><br><br>
              @endif
              <h4 style="opacity: 0.7;" id="banner_we_title">{{ $data_event['we_title'] }}</h4>
            </div>
            <div id="edit-icon"><i class="fas fa-ellipsis-h"></i></div>
          </div>
          <div class="std-timeline-banner-info">
            <div class="std-timeline-banner-info-detail">
              <div>
                <i class="far fa-calendar-alt"></i><span style="margin-left: 20px;">{{ $data_event['we_date'] }}</span>
              </div>
              <div>
                <i class="far fa-clock"></i><span style="margin-left: 20px;">{{ $data_event['we_time1'] }} - {{ $data_event['we_time2'] }}</span>
              </div>
              <div>
                <i class="fas fa-map-marker-alt"></i><span style="margin-left: 20px;">{{ $data_event['we_venue'] }}</span>
              </div>
              <div>
                <i class="fas fa-folder-open"></i><span style="margin-left: 20px;">{{ $data_event['package']['package_title'] }}</span>
              </div>
              <div>
                <i class="fas fa-dollar-sign"></i><span style="margin-left: 20px;">MYR {{ $data_event['package']['package_price'] }}</span>
              </div>
            </div>
          </div>
        </div>

        <!-- ========= Notification sidebar ==================  -->

        <div class="main_timeline_col">
          <div class="col_notification std-timeline-sidebar" style="padding-bottom: 100px;">
            
            <div style="padding: 8px 15px;max-height: 50vh;overflow: auto;">
              <span style="opacity: 0.7;"><i class="fas fa-bell" style="margin-right: 10px;"></i> Timeline Notification</span>
              <hr>

              @foreach($data_noti as $noti)

              <div class="notification-tcard">

              @if($noti['ts_id'] == 1)
              <div class="notification-tcard-header pending">
              @else
              <div class="notification-tcard-header disapproved">
              @endif

                {{ $noti['assigned'] }} : {{ $noti['category']['tc_title'] }}</div>
                <div class="notification-tcard-content">
                  <div>{{ $noti['wet_subject'] }}</div>
                  
                  <div>
                  @if($noti['ts_id'] == 1)
                      <button class="std-timeline-sidebar-btn new" onclick="tDetail('{{ $noti['wet_id'] }}')">
                        Approve
                      </button>
                  @else
                      <button class="std-timeline-sidebar-btn new" onclick="tUpdate('{{ $noti['wet_id'] }}')">
                        Change
                      </button>
                  @endif
                  </div>
                  
                </div>
              </div>

              @endforeach
            </div>


            <div class="std-timeline-banner-transaction">
              <p style="opacity: 0.8;"><i class="fas fa-exchange-alt" style="margin-right: 10px;"></i> Transaction</p>
              <table id="transaction_table">
                <tr>
                  <td>Type</td><td style="text-align: right;">Amount (MYR)</td>
                </tr>
                <tr>
                  <td><i class="fas fa-sort-amount-up-alt"></i> <b>Payable</b></td><td style="text-align: right;color: green;font-weight: bold;">{{ $payment_data['total_payable'] }}</td>
                </tr>
                <tr>
                  <td><i class="fas fa-sort-amount-down-alt"></i> <b>Receivable</b></td><td style="text-align: right;color: red;font-weight: bold;">{{ $payment_data['total_receivable'] }}</td>
                </tr>
              </table>
            </div>

            <!-- ========= Event Vendors sidebar ==============  -->

            <div style="padding: 10px 10px;">
              <div style="display: flex;flex-direction: row;justify-content: space-between;width: 100%;">
                <div style="opacity: 0.7;"><i class="fas fa-users" style="margin-right: 10px;"></i> Event Vendors</div>
                <div class="plus_btn" id="add_vendors_btn"><i class="fas fa-plus"></i></div>
              </div>
              <hr>

                @if($data_event['user_id'] != 0)

                  @if($data_event['user_is_contact'] == 'yes')

                    <div class="vendors-tcard">
                      <div class="vendors-tcard-name-contact"><div>{{ $data_event['client']['name'] }}</div><div><i class="far fa-handshake"></i></div></div>
                    </div>

                  @else

                    <div class="vendors-tcard" onclick="addContactClient('{{ $data_event['client']['name'] }}','{{ $data_event['client']['id'] }}')">
                      <div class="vendors-tcard-name">{{ $data_event['client']['name'] }}</div>
                      <div class="vendors-tcard-add-contact"><i class="fas fa-plus"></i> Add as contact</div>
                    </div>

                  @endif

                @endif

                @foreach($data_vendors as $vendor)

                  @if($vendor['company_id'] == $data_event['company_id'])

                    <div class="vendors-tcard-disable">
                      {{ $vendor['vendor']['company_name'] }}
                    </div>

                  @else

                    @if($vendor['contact'] == 'yes')

                      <div class="vendors-tcard">
                        <div class="vendors-tcard-name-contact"><div>{{ $vendor['vendor']['company_name'] }}</div><div><i class="far fa-handshake"></i></div></div>
                      </div>

                    @else

                      <div class="vendors-tcard" onclick="addContactVendor('{{ $vendor['vendor']['company_id'] }}','{{ $vendor['vendor']['company_name'] }}')">
                        <div class="vendors-tcard-name">{{ $vendor['vendor']['company_name'] }}</div>
                        <div class="vendors-tcard-add-contact"><i class="fas fa-plus"></i> Add as contact</div>
                      </div>

                    @endif
                    

                  @endif

                @endforeach

                @if(Auth::user()->id == '5')

                  @foreach($inbox_data as $inbox)

                    <div class="vendors-tcard" onclick="approveInvite('{{ $inbox['i_id'] }}')">
                      <div class="vendors-tcard-name-invite-alert">
                        <span>{{ $inbox['invited']['company_name'] }}</span> <i class="fas fa-exclamation-circle"></i>
                      </div>
                    </div>

                  @endforeach

                @endif

            </div>
          </div> 

        <!-- ======== ADD TImeline form -->

          <div class="col_timeline">
            <div class="std-timeline">
              @if($data_event['user_id'] != 0)              
              <div class="form_switch" id="form-switch">
                <div><i class="fas fa-angle-down" id="arrow_icon"></i><span id="form-switch-text">Show timeline form</span></div>
              </div>
              @endif
              <div id="std_timline_form">
                
                <div class="timeline_form_child_1">

                  <div style="margin-bottom: 15px;">
                    <label>Category </label>
                    <select class="date_form" id="category">
                      <option value=""></option>
                      @foreach($categories as $category)
                        <option value="{{ $category['tc_id'] }}">{{ $category['tc_title'] }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div>
                    <label>Date & Time </label>
                    <input type='text' 
                      class="date_form" 
                      data-timepicker="true" 
                      data-position="bottom right" 
                      data-language='en' 
                      data-date-format='d-m-yyyy' 
                      data-time-format='h:ii aa' 
                      id="date_t"/>
                  </div>

                  <div>
                    Assign to 
                    <select class="date_form" style="width: 200px!important;margin-left: 10px!important;" id="select_opt">
                      
                      @foreach($vendors_users as $vu)

                        @if($vu['name'] == 'Client' && Auth::user()->role_id == '5')

                        @else

                        <optgroup label="{{ $vu['name'] }}">
                          
                          @foreach($vu['users'] as $v)

                            <option value="{{ $v['id'] }}">{{ $v['name'] }}</option>

                          @endforeach

                        </optgroup>

                        @endif

                      @endforeach
                    </select>
                  </div>                  
                </div>

                <div style="width: 100%;padding: 10px 0;">
                  <label>Subject</label>
                  <br>
                  <input type="text" name="Subject" id="subject" class="date_form" style="width: 100%!important;" />
                </div>

                <div id="editor_container">
                  <textarea id="editor"></textarea>
                </div>
                <br>
                <div class="timeline_form_child_4">
                  <div>
                      <div>
                        <input type="checkbox" name="involve_payment" id="involve_payment">
                        <span style="margin-left: 10px;margin-right: 15px;">Include Payment</span>
                      </div>
                      <div id="payment_input">
                        <span style="font-weight: bold;">MYR</span> <input type="text" name="payment_amount" class="date_form" id="payment">
                      </div>
                  </div>
                  <div>
                      <button id="add-timeline-btn">Add Timeline</button>
                  </div>
                </div>
              </div>
              <hr>
              <div class="filter_row">
                <select class="vendor_select" id="select_vendor">
                  <option value="all">All</option>
                  @foreach($d_vendors as $vendor)
                    <option value="{{ $vendor['id'] }}">{{ $vendor['name'] }}</option>
                  @endforeach
                </select>
                <div style="margin-left: 15px;">
                  <input type="radio" name="filter_type" value="owner" id="radio_1" class="filter_type_radio"> Assigner &nbsp&nbsp&nbsp
                  <input type="radio" name="filter_type" value="assignto" class="filter_type_radio"> Assigned To
                </div>
              </div>
              <div id="timeline_loader">
                <div>
                  <img src="{{ asset('myasset/img/carrier/loading2.gif') }}">
                </div>
              </div>
              <div id="myTimeline"></div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Creating timeline reminder popup -->  

    <div id="send_alert">
      <div class="row" style="border-bottom: 0.01em solid #d4af37;">
        <span style="color:red;margin-bottom: 10px;">REMINDER</span>
      </div>
      <div class="row" style="padding-top: 15px;">
        <p>The timeline you just created will need approval from the person you assigned before being displayed.
          <br>Do you wish to proceed?</p>
        <div style="display: flex;flex-direction: row;justify-content: flex-end;width: 100%;">
          <button class="btn-alert" style="" id="proceed_send">Yes, proceed</button>
          <button class="btn-alert-cancel" id="cancel_send">Cancel</button>
        </div>
      </div>
      <div class="row"></div>
    </div> 

    <!-- Invite vendors into timeline -->

    <div id="invite_form">
      <div style="border-bottom: 0.01em solid #f1f1f1;padding-bottom: 10px;">
        Invite Client and Vendors to participate
      </div>
      <div style="padding-bottom: 10px;padding-top: 10px;">
        @if($data_event['user_id'] == 0)
        <label>Client</label><br>
        <select class="date_form" style="width: 200px!important;margin-left: 10px!important;" id="select_client">
          <option></option>
          @foreach($all_users_data as $users_data)
          <option value="{{ $users_data['id'] }}">{{ $users_data['name'] }}</option>
          @endforeach
        </select>
        <br><br>
        @endif
        <label>Vendors</label><br>
        <select class="date_form" style="width: 100%!important;margin-left: 10px!important;" id="select_add_vendors" multiple="multiple">
          <option></option>
          @foreach($all_company_data as $company_data)
          <option value="{{ $company_data['company_id'] }}">{{ $company_data['company_name'] }}</option>
          @endforeach
        </select>
        <br><br>
        <div style="width: 100%;display: flex;flex-direction: row;justify-content: flex-end;">
          <div><button class="btn-alert-cancel" id="cancel_invite">Cancel</button></div>
          <div><button class="btn-alert" style="" id="proceed_invite">Invite</button></div>
        </div>
      </div>
    </div>

    <!-- invite alert reminder popup -->

    <div id="send_alert_invite">
      <div class="row" style="border-bottom: 0.01em solid #d4af37;">
        <span style="color:red;margin-bottom: 10px;">REMINDER</span>
      </div>
      <div class="row" style="padding-top: 15px;">
        <p>All invitations will be completed when accepted.
          <br>Do you wish to proceed?</p>
        <div style="display: flex;flex-direction: row;justify-content: flex-end;width: 100%;">
          <button class="btn-alert" style="" id="proceed_send_invite">Yes, invite</button>
          <button class="btn-alert-cancel" id="cancel_send_invite">Cancel</button>
        </div>
      </div>
      <div class="row"></div>
    </div> 

    <!-- Timeline content popup -->

    <div id="view_timeline_content">
      <div style="padding: 15px 0;border-bottom: 0.01em solid grey;">
        <div style="display: flex;flex-direction: row;justify-content: space-between;">
          <div><span style="opacity: 0.5;font-style: italic;">Subject</span></div>
          <div id="close_tdetail"><i class="fas fa-times"></i></div>
        </div><br>
        <div style="display: flex;flex-direction: row;justify-content: space-between;">
          <div><span id="tsubject"></span></div>
          <div id="sub_contain">
            <button class="approve_btn">APPROVE</button>
            <button class="disapprove_btn">DISAPPROVE</button>
          </div>
        </div>
      </div>
      <div style="display: flex;flex-direction: row;justify-content: space-between;padding: 15px 0;">
        <div><i class="far fa-clock"></i>&nbsp&nbsp <span style="font-style: italic;" id="datetime"></span></div>
        <div><i class="fas fa-user-alt"></i>&nbsp&nbsp <span style="font-style: italic;" id="user"></span></div>
        <div style="color: green;" id="payment_element"><i class="fas fa-sort-amount-up-alt"></i>&nbsp&nbsp <span style="font-style: italic;" id="payment_value"></span></div>
        <div id="print_btn_section">
          <a href="" id="print_btn" target="_blank"><i class="fas fa-print"></i>&nbsp&nbsp Print </a>
        </div>
      </div>
      <br>
      <div id="view_timeline_content_desc">
        
      </div>
      <br><br>
    </div>

    <!-- Reject Timeline Remark Form -->

    <div id="reject_remark_container">
      <div id="reject_remark">
        <div style="padding: 10px 0;border-bottom: 0.05em solid #d4af37;margin-bottom: 10px;">Reject</div>
        <div style="margin-bottom: 5px;"><p>Reason for your rejection : </p></div>
        <input type="hidden" name="" id="rejected_timeline_id" val="">
        <div><textarea class="form-control" id="remark"></textarea></div>
        <div style="display: flex;flex-direction: row;justify-content: flex-end;">
          <button class="std-btn-plain" style="margin-right: 20px;" id="cancel_reject_btn">Cancel</button>
          <button class="std-btn-plain" id="reject_reject_btn">Reject</button>
        </div>
      </div>
    </div>

    <!-- Add Contact poppup -->
    <div id="add_contact_form_container">
      <div id="add_contact_form">
        <div style="display: flex;flex-direction: row;justify-content: space-between;padding-bottom: 10px;border-bottom: 0.05em solid #d4af37;">
          <div>Add Contact</div>
          <div style="opacity: 0.8;cursor: pointer;" id="close_add_contact"><i class="fas fa-times"></i></div>
        </div>
        <div id="add_contact_form_content">
          <span id="prompt"></span><button class="std-btn-plain" style="margin-top: 15px;cursor: pointer;" id="add_contact">Add</button>
          <input type="hidden" name="" id="contact_id" />
          <input type="hidden" name="" id="contact_type" />          
        </div>
      </div>
      <div id="add_contact_form_added">
        <div><div>Contact successfully added</div></div>
      </div>
    </div>
    

    <div id="edit_timeline">
      <div style="width: 100%;position: relative;">
        <i class="fas fa-times" style="float: right;cursor: pointer;" id="close_edit_modal"></i>
      </div>
      <br><br>
      <div style="width: 100%;padding: 15px 0;">
        Remark : <span id="timeline_remark" style="opacity: 0.6;font-weight: bold;"></span>
      </div>
      <div style="width: 100%;display: flex;justify-content: space-between;margin-bottom: 15px;">
        <div>
          <label>Category </label>
          <select class="date_form" style="margin-right: 15px;" id="category_edit">
            <option value=""></option>
            @foreach($categories as $category)
              <option value="{{ $category['tc_id'] }}">{{ $category['tc_title'] }}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label>Date & Time </label>
          <input type='text' 
            class="date_form datepicker-here" 
            data-timepicker="true" 
            data-position="right top" 
            data-language='en' 
            data-date-format='d-m-yyyy' 
            id="date_edit"/>
        </div>
        <div>
          Assign to 
          <select class="date_form" style="width: 200px!important;margin-left: 10px!important;" id="select_opt_edit">
            
            @foreach($vendors_users as $vu)

              @if($vu['name'] == 'Client' && Auth::user()->role_id == '5')

              @else

              <optgroup label="{{ $vu['name'] }}">
                
                @foreach($vu['users'] as $v)

                  <option value="{{ $v['id'] }}">{{ $v['name'] }}</option>

                @endforeach

              </optgroup>

              @endif

            @endforeach
          </select>
        </div>
      </div>
      <div style="width: 100%;padding: 10px 0;">
        <label>Subject</label>
        <br>
        <input type="text" name="Subject" id="subject_edit" class="date_form" style="width: 100%!important;" />
        <input type="hidden" name="" id="wet_id" value="">
      </div>
      <div id="editor_container">
        <textarea id="editor_edit"></textarea>
      </div>
      <br>
      <div style="width: 100%;display: flex;justify-content: space-between;margin-top: 10px;">
        <div style="display: flex;justify-content: flex-start;align-items: center;">
            <div>
              <input type="checkbox" name="involve_payment" id="involve_payment_edit">
              <span style="margin-left: 10px;margin-right: 15px;">Include Payment</span>
            </div>
            <div id="payment_input_edit">
              <span style="font-weight: bold;">MYR</span> <input type="text" name="payment_amount" class="date_form" id="payment_edit">
            </div>
        </div>                
        <div>
          <button id="add-timeline-btn" style="background: red;" onclick="deleteTimeline()">DELETE</button>
          <button id="add-timeline-btn" style="background: green;" onclick="updateTimeline()">UPDATE</button>
        </div>
      </div>
      <br>
    </div>

    <!-- End Event poppup -->

    <div id="end_event_container">
      <div id="end_event_form">
        <div id="end_event_header"><div>Cancel Event</div><div id="close_end_event" style="cursor: pointer;"><i class="fas fa-times"></i></div></div>
        <div style="margin-top: 15px;"><p>You are about to cancel this event. Votes from others will be needed to officially cancel this event. Once you manage to get majority of the participant to vote, this event will be officially cancelled and ended</p></div>
        <div id="end_event_content">
          <div id="eec_1">
           
          </div>
          <div id="eec_2">
            <div class="eec_2_content">
              <img src="{{ asset('myasset/img/carrier/loading.gif') }}">
            </div>
          </div>
          <div id="eec_3">
            <div class="eec_3_content">
              <div style="padding: 5px 6px;border: 0.05em solid #dcdcdc;background: #fefefe;width: 5%;margin-bottom: 10px;cursor: pointer;" id="undo_vote"><i class="fas fa-undo"></i></div>
              <p>Give your reason for this cancellation</p>
              <textarea class="form-control" rows="3" id="vote_reason"></textarea>
              <button id="confim_end_event">Submit Vote</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <input type="hidden" name="vote_id" value="" id="vote_id">
    <input type="hidden" name="vote_type" value="" id="vote_type">

    <input type="hidden" name="i_id" value="" id="i_id">

    <div id="approve_invite_container">
      <div id="approve_invite_form">
        <div style="padding-bottom: 10px;border-bottom: 0.05em solid #d4af37;display: flex;flex-direction: row;justify-content: space-between;">
          <span>Approve</span>
          <span class="close_approve_container"><i class="fas fa-times"></i></span>
        </div>
        <div style="display: flex;flex-direction: column;justify-content: space-around;height: 100%;align-items: center;">
          <div>Approve this invitation?</div>
          <div style="display: flex;flex-direction: row;justify-content: space-around;width: 90%;"><button class="approve_button_yes">Approve</button><button class="approve_button_no">Reject</button></div>
        </div>
      </div>
    </div>

    @include('templates.footer')

    <script src="{{asset('myasset/summernote-master/summernote/summernote-lite.js')}}"></script>
    <script src="{{asset('myasset/summernote-master/summernote/summernote-ext-print.js')}}"></script>
    <script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>
    <script src="{{asset('myasset/textillate/jquery.lettering.js')}}"></script>
    <script src="{{asset('myasset/textillate/jquery.textillate.js')}}"></script>
    <script src="{{asset('myasset/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('myasset/timelinesimple/jquery-albe-timeline.js')}}"></script>
    <script src="{{asset('myasset/air-datepicker-master/dist/js/datepicker.min.js')}}"></script>
    <script src="{{asset('myasset/air-datepicker-master/dist/js/i18n/datepicker.en.js')}}"></script>
    <script src="{{asset('myasset/select2/dist/js/select2.min.js')}}"></script>
    <script>
      
      var token = '{{ csrf_token() }}';
      var APP_URL = '{!! url("/") !!}';
      var self_id = '{{ Auth::user()->id }}';
      var role = '{{ Auth::user()->role_id }}';
      var company_id = '{{ Auth::user()->company_id }}';
      var url = '';
      var we_id = '{{ $data_event["we_id"] }}';

      $('#timeline_loader').show();
      $('#myTimeline').hide();
      $('#banner_we_title').textillate({ in: { effect: 'bounceInDown', shuffle: true,  delay: 20 } });

      $(document).ready(function () {

        globalNotification();

        var data;
        url = APP_URL + '/load_u';
        var we_id = '{{ $data_event["we_id"] }}';

        $.post(url,{'we_id':we_id},function(result){

          if(JSON.parse(result).length == 0){

            $('#myTimeline').addClass('no_timeline');
            $('#myTimeline').html('<br><span>No timeline have been added yet</span><br><br>');
            
          }else{

            $('#myTimeline').albeTimeline(JSON.parse(result), {
              effect: 'fadeInUp',
              showGroup: false,
              formatDate: 'DD d MMMM, at std'
            });

          }

          $('#timeline_loader').hide();
          $('#myTimeline').show('highlight',700);

        });

        $('#proceed_send').click(function(){

          var category = $( "#category option:selected" ).val();
          var user = $( "#select_opt option:selected" ).val();
          var datetime = $('#date_t').val();
          var subject = $('#subject').val();
          var content = $('#editor').summernote('code');
          var payment = $('#payment').val();
          var url = APP_URL + '/send_t';
          var we_id = "{{ $data_event['we_id'] }}";

          $.post(url,{category:category,user:user,subject:subject,datetime:datetime,content:content,payment:payment,_token:token,we_id:we_id},function(result){
            
            location.reload();

          });
        });

        $('#proceed_send_invite').click(function(){

          var client = $( "#select_client option:selected" ).val();
          var vendors = $( "#select_add_vendors" ).val();
          var url = APP_URL + '/invite';
          var item_id = '{{ $data_event["we_id"] }}';

          $.post(url,{client:client,vendors:vendors,item_id:item_id,_token:token},function(result){

            location.reload();

          });

        });

      });

      $('#reg_event').click(function(){

        var package = $("#package option:selected").val();
        var title = $('#title').val();
        var desc = $('#description').val();
        var address = $('#address').val();
        var date = $('#date').val();
        var time1 = $('#timepicker').val();
        var time2 = $('#timepicker2').val();
        var url = APP_URL + '/updateevent';
        var we_id = '{{ $data_event["we_id"] }}';

        $.post(url,{we_id:we_id,package:package,title:title,desc:desc,address:address,date:date,time1:time1,time2:time2,_token:token},function(result){

          $('#confirm_update').show();

          globalNotification();

        });
      });

      $('.close_approve_container').click(function(){
        $('#approve_invite_container').fadeToggle('fast');
      });

      $('.approve_button_yes').click(function(){

        url = APP_URL + '/approveinvitation';
        var i_id = $('#i_id').val();
        var action = 'app';

        $.post(url,{_token:token,i_id:i_id,action:action},function(data){
            location.reload();
        });

      });


      $('.approve_button_no').click(function(){

        url = APP_URL + '/approveinvitation';
        var i_id = $('#i_id').val();
        var action = 'rej';

        $.post(url,{_token:token,i_id:i_id,action:action},function(data){
            location.reload();
        });

      });


      function approveInvite(i_id){

        $('#approve_invite_container').fadeToggle('fast');

        $('#i_id').val(i_id);
      }

      function tDetail(id){

        url = APP_URL + '/tdetail';
        var self = '{{ Auth::user()->id }}';
        var token = '{{ csrf_token() }}';

        $.post(url,{_token:token,tid:id},function(result){

          var obj = JSON.parse(result);
          var printURL = APP_URL + '/printt'+ '?stdt='+obj.wet_id;

          $('#view_timeline_content_desc').html(atob(obj.wet_desc));
          $('#tsubject').html(obj.wet_subject);
          $('#datetime').html(obj.wet_datetime);
          $('#user').html(obj.assignation);
          $('#print_btn').attr('href',printURL);

          if(obj.ts_id == '2'){

            $('#print_btn_section').show();

          }else {

            $('#print_btn_section').hide();
          }

          if(obj.wet_payment == 0){

            $('#payment_element').hide();

          }else{

            $('#payment_element').show();
            $('#payment_value').html(" <b>MYR " + obj.wet_payment + "</b>");
          }

          if(obj.user_id == self){

            if(obj.ts_id == 1){

              $('#sub_contain').show();
              $('.approve_btn').attr('onclick','approve("'+ obj.wet_id +'")');
              $('.disapprove_btn').attr('onclick','disapprove("'+ obj.wet_id +'")');

            }else{

              $('#sub_contain').hide();
            }

          }else{

            $('#sub_contain').hide();
          }

          $('#view_timeline_content').fadeToggle('fast');

        });
      }

      function tUpdate(id){

        url = APP_URL + '/tdetail';
        var self = '{{ Auth::user()->id }}';

        $.post(url,{_token:token,tid:id},function(result){

          var obj = JSON.parse(result);

          $('#editor_edit').summernote({
            height: 100,                 // set editor height
            minHeight: 200,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true
          });

          $('#subject_edit').val(obj.wet_subject);
          // $('#editor_edit').val(atob(obj.wet_desc));
          $('#editor_edit').summernote("code",atob(obj.wet_desc));
          $('#date_edit').val(obj.wet_datetime_datepicker);
          $('#category_edit').val(obj.tc_id);
          $('#select_opt_edit').val(obj.user_id);
          $('#wet_id').val(obj.wet_id);
          $('#timeline_remark').html(obj.wet_remark);

          if(obj.wet_payment == 0){

            $("#involve_payment_edit").prop("checked",false);

          }else{

            $("#involve_payment_edit").prop("checked",true);
            $("#payment_edit").val(wet.payment);
          }

          $('#edit_timeline').fadeToggle();

        });

      }

      function approve(wet_id){

        url = APP_URL + '/approvet';

        $.post(url,{wet_id:wet_id,_token:token},function(){

            location.reload();
        });
      }

      function disapprove(wet_id){

        $('#rejected_timeline_id').val(wet_id);

        $('#reject_remark_container').fadeToggle('fast');
      }

      function updateTimeline(){

        url = APP_URL + '/updatetimeline';

        var editSubject = $('#subject_edit').val();
        var editContent = $('#editor_edit').summernote('code');
        var editDate = $('#date_edit').val();
        var editCategory = $('#category_edit').val();
        var editUser = $('#select_opt_edit').val();
        var editID = $('#wet_id').val();
        var payment = $('#payment_edit').val();

        $.post(url,{category:editCategory,datetime:editDate,payment:payment,user:editUser,content:editContent,we_id:editID,subject:editSubject,_token:token},function(result){

          location.reload();

        });
      }

      function deleteTimeline(){

        url = APP_URL + '/deletetimeline';
        var editID = $('#wet_id').val();

        $.post(url,{we_id:editID,_token:token},function(result){

          location.reload();

        });
      }

      function addContactClient(name, id){

        $('#add_contact_form_container').fadeToggle('fast');

        $('#prompt').html("Add <b>" + name + "</b> as your potential client?");
        $('#contact_id').val(id);
        $('#contact_type').val('client');
      }

      function addContactVendor(id, name){

        $('#add_contact_form_container').fadeToggle('fast');

        $('#prompt').html("Add <b>" + name + "</b> as your potential partner?");
        $('#contact_id').val(id);
        $('#contact_type').val('company');
      }

      $('#add_contact').click(function(){

        var contact_id = $('#contact_id').val();
        var contact_type = $('#contact_type').val();

        url = APP_URL + '/addcontact';
        token = '{{ csrf_token() }}';

        $.post(url,{_token:token,contact_type:contact_type,contact_id:contact_id},function(){
            $('#add_contact_form').fadeToggle('fast');
            $('#add_contact_form_added').fadeToggle('fast');

            setTimeout(swap, 1000);
        });

      });

      function swap(){
        $('#add_contact_form_container').fadeToggle('fast');
        $('#add_contact_form_added').fadeToggle('fast');
        $('#add_contact_form').fadeToggle('fast');

        location.reload();
      }


    </script>

    <script src="{{asset('myasset/js/global_notification.js')}}"></script>  
    <script src="{{asset('myasset/js/timeline.js')}}"></script> 
  </body>
</html>
