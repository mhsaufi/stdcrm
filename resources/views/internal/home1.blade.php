<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="page_site" content="savethedate-my.com">
    <meta name="page_language" content="English">
    <meta name="page_type" content="Dashboard Vendor">
    <meta name="user_id" content="{{ Auth::user()->id }}">
    <meta name="user_email" content="{{ Auth::user()->email }}">
    <title>Dashboard</title>

    @include('templates.header')
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/air-datepicker-master/dist/css/datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/summernote-master/summernote/summernote-lite-bs3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/quick-access/quick-access.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/dashboard-calendar/dashboard-calendar.css')}}">
    <style type="text/css">

      .navbar-expand-lg .navbar-nav .nav-link {
        color: black !important;
        opacity: 0.5;
      }
      .navbar-expand-lg .navbar-nav .nav-link:active{
        color: gold !important;
        opacity: 0.5;
      }

      .pattern{
        /*background-image: url("{{asset('myasset/img/bg1.jpg')}}");*/
        background-repeat: no-repeat;
        background-size: cover;
        background: #eaeded;
        height: 250px !important;
      }

      .std-row {
        margin-top: 15px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }

      .std-row:nth-child(1) {
        padding-bottom: 10px;
        border-bottom: 2px solid #FFCA28;
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

      .std_btn_cancel {
        padding: 10px 20px;
        background: #e3623a;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        margin-right: 20px;
        height: 100%;
      }

      .std_btn_cancel:hover {
        background: #e14617;
      }

      .view-btn {
        padding: 10px 12px;
        border-top: 0.05em solid #cfd8dc;
        border-bottom: 0.05em solid #cfd8dc;
        border-right: 0.05em solid #cfd8dc;
        cursor: pointer;
        float: left;
        background: #ffff;
      }

      .view-btn-history {
        border: 0.05em solid #cfd8dc;
        float: left;
        margin-right: 10px;
        opacity: 1.0;
        cursor: pointer;
        padding: 10px 20px;
        background: #ffff;
      }

      .active-view {
        background: #dfdfdf;
        cursor: default!important;
      }

      .active-view:hover {
        background: #dfdfdf!important;
      }

      .view-btn:hover {
        background: #fffde7;
      }

      .view-btn-history:hover {
        opacity: 0.9;
        background: #fffde7;
      }

      #event{
        background-image: url("{{asset('myasset/img/bg1.jpg')}}");
      }

      .top_menu_button {
        display: flex;
        flex-flow: row wrap;
        align-items: center;
      }

      @media (max-width: 560px){

        .std-row {
          padding: 0 5%!important;
        }

        .std-row:nth-child(1) {
          padding-bottom: 10px;
          border-bottom: none;
        }

        .slider_navigator > div {
          border-bottom: 0 0 0 #fff;
        }

        .top_menu_button {
          padding: 0 0;
        }

        .top_menu_button div:nth-child(1) {
          display: none;
        }

        .top_menu_button div {
          width: 100%;
        }
      }
      
    </style>
  </head>
  <body class="pattern">

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>
    @include('templates.create_event_form')
     <!-- Feature Section Start -->
    <div class="section-padding">
      <div class="container" style="min-height: 100%!important;position: relative;">
        <div class="std-row">
          <div class="top_menu_button">
            <div class="view-btn-history" id="add_event_btn"><i class="fas fa-plus"></i> New Event</div> 
            <div class="view-btn-history" id="list_timeline" style="background: #cfd8dc;"><i class="fas fa-calendar-alt"></i> Timeline</div>
            <div class="view-btn-history" id="list_event">
              <i class="fas fa-th-list"></i> Events 
              @if($count_inbox > 0)

                <span id="count_inbox_badge">{{ $count_inbox }}</span>

              @endif
            </div>
            <div class="view-btn-history"><i class="fas fa-history"></i> Past Events</div>
          </div>
        </div>
        <div class="std-row">
          <a href="#" class="slide_btn previous round" id="minus">&#8249;</a>
          <div id="year_label" style="padding: 5px 10px;border-bottom: 0.05em solid #d4af37;"></div>
          <a href="#" class="slide_btn next round" id="plus">&#8250;</a>
        </div><br>     
        <div class="row-forecast" id='event_cal'>
          
        </div>
      </div>
     
      @include('templates.quick-access')

    </div>
    <!-- Feature Section End --> 

    <div id="dashboard_loading">
      <div>
        <img src="{{ asset('myasset/img/carrier/loading.gif') }}"> 
      </div>
    </div>

    <script>
      var APP_URL = '{{ url("/") }}';
      var LOGIN = '{{ route("login") }}';
      var REGISTER = '{{ route("register") }}';
      var token = '{{ csrf_token() }}';
    </script>

    @include('templates.footer')

    <script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>
    <script src="{{asset('myasset/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('myasset/air-datepicker-master/dist/js/datepicker.min.js')}}"></script>
    <script src="{{asset('myasset/air-datepicker-master/dist/js/i18n/datepicker.en.js')}}"></script>
    <script src="{{asset('myasset/summernote-master/summernote/summernote-lite.js')}}"></script>
    <script>

      var url = '';

      $('#dashboard_loading').show();
      
      $(document).ready(function(){

        $('#list_event').click(function(){

          var url  = "{{ url('/all') }}";

          window.location.replace(url);
        });

        globalNotification();

      });

      function viewTimeline(id){

        window.location.replace("{{ url('/timeline?ax=') }}"+id);
      }

    </script>
    <script src="{{asset('myasset/create_event_form/create_event_form.js')}}"></script>
    <script src="{{asset('myasset/quick-access/quick-access.js')}}"></script>
    <script src="{{asset('myasset/js/global_notification.js')}}"></script>
    <script src="{{asset('myasset/dashboard-calendar/dashboard-calendar.js')}}"></script>
  </body>
</html>
