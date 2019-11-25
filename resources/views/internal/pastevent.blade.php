<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard | Past Events</title>

    @include('templates.header')
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/air-datepicker-master/dist/css/datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/quick-access/quick-access.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/summernote-master/summernote/summernote-lite-bs3.css')}}">
    <style type="text/css">

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

      .label-carousel{
        width: 50%;
        height: 270px;
        background-color:  rgba(254, 249, 231, 0.8);
        color: blue;
        border-radius: 30px 0 30px 0;
        margin-left: 620px;
        margin-top: -30px;
        padding: 10px;
      }

      .label-carousel img{
        width: 200px;
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

      .pattern{
        background-image: url("{{asset('myasset/img/hy.png')}}");
        background-repeat: repeat;
        height: 250px !important;
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

      .title-forecast {
        font-weight: bold;
        font-size: 0.9em;
        opacity: 0.8;
      }

      .card{
        background-color: rgba (255,255,55,0.6)!important;
      }

      .event-title {
        font-weight: bold;
        font-size: 1.1em;
      }

      .event-date {
        font-style: italic;
        opacity: 0.8;
      }

      .event-venue {
        opacity: 0.9;
      }

      .first {
        border-left: 0.05em solid #cfd8dc;
      }

      .row-forecast {
        display: flex;
        flex-direction: row;
      }
      .col-forecast {
        flex-basis: 50px;
        flex-grow: 1;
      }

      .content-forecast-empty {
        opacity: 0;
      }

      .header-forecast {
        display: flex;
        justify-content: space-between;
        padding: 15px 20px;
        background-image: linear-gradient(#fff, #e9d79b);
      }

      .sub-title-forecast {
        font-style: italic;
        opacity: 0.7;
        font-size: 0.7em;
      }

      .content-forecast {
        /*margin-left: -30px!important;*/
        padding: 15px 20px;
        border: 0.05em solid #cfd8dc;
        cursor: pointer;
        background: #ffff;
      }

      .content-forecast:hover {
        background: #f2f3f4;
      }

      .forecast-first {
        /*border-left: 0.05em solid #cfd8dc;*/
      }

      .form-control-std {
        padding: 9px;
        border-radius: 10px;
        border: 0.05em solid #cfd8dc;
      }

      .form-control-std:focus {
        border: 0.08em solid #c5cae9;
      }

      .std-row {
        margin-top: 20px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }

      .std-row:nth-child(1) {
        padding-bottom: 10px;
        border-bottom: 2px solid #d4af37;
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


      .search-users {
        float: right;
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

      .event_requested_action_btn {
        padding: 3px 8px;
        border: none;
        color: white;
        cursor: pointer;
        margin-left: 5px;
      }

      .event_table th, .event_table td {
        -webkit-border: 0.05em solid #dcdcdc;
        border: 0.05em solid #dcdcdc;
        padding: 10px 15px;
        font-size: 12px;
      }
    </style>
  </head>
  <body class="pattern">

    <!-- ========================================================== Form for creating event -->

    <div id="create_event_form">
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
        <input type="text" name="we_title" class="form-std" placeholder="event name" id="title"/>
        <label>Description</label>
        <textarea class="form-std" id="description"></textarea><br>
        <label>Address</label>
        <input type="text" name="we_title" class="form-std" placeholder="event venue address" id="address"/>
        <div class="three-inline-box-std">
          <div>
            <label>Date</label>
            <input type='text' class="form-std datepicker-here" data-position="right top" data-language='en' data-date-format='d-m-yyyy' id="date"/>
          </div>
          <div>
            <label>Time Start</label>
            <div class="input-group bootstrap-timepicker timepicker">
              <input id="timepicker" class="form-std" data-provide="timepicker" data-minute-step="1" type="text"/>
            </div>
          </div>
          <div>
            <label>Time End</label>
            <div class="input-group bootstrap-timepicker timepicker">
              <input id="timepicker2" class="form-std" data-provide="timepicker" data-minute-step="1" type="text"/>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <button class="std_btn_cancel" id="cancel_button1">Cancel</button>
        <button class="std-btn" id="reg_event">Add New Event</button> 
      </div>
    </div>

    <!-- ========================================================== Form for creating event end -->

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>
     <!-- Feature Section Start -->
    <div class="section-padding">
      <div class="container">
        <div class="row std-row">
          <div>
            <button class="view-btn-history" id="add_event_btn"><i class="fas fa-plus"></i> New Event</button> 
            <div class="view-btn-history" id="list_timeline"><i class="fas fa-calendar-alt"></i> Timeline</div>
            <div class="view-btn-history" id="list_event">
              <i class="fas fa-th-list"></i> Events 
              @if($count_inbox > 0)

                <span id="count_inbox_badge">{{ $count_inbox }}</span>

              @endif
            </div>
            <div class="view-btn-history" id="ended_event" style="background: #cfd8dc;"><i class="fas fa-history"></i> Past Events</div>
          </div>
        </div><br>
        <div class="row row-forecast">
          <p>Access all ended and past events</p>
          <br>
          <div class="events_table_container">
            @php

              $i = 1;

            @endphp
            <table class="event_table">
              @foreach($data_event as $event)

              <tr onclick="viewTimeline('{{ $event['we_id'] }}')">
                <td>{{ $i }}</td>
                <td>{{ $event['event']['we_title'] }}</td>
                <td>{{ $event['event']['client']['name'] }}</td>
                <td>{{ $event['event']['client']['phone'] }}</td>
                <td>{{ $event['event']['client']['email'] }}</td>
                <td>{{ $event['event']['package']['package_title'] }}</td>
                <td>{{ $event['event']['package']['package_price'] }}</td>
                <td>Ended on {{ $event['event']['updated_at'] }}</td>
              </tr>

              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End --> 
         
    @include('templates.quick-access')

    <script type="text/javascript">
      function viewTimeline(id){

        window.location.replace("{{ url('/timeline?ax=') }}"+id);
      }
    </script>

    @include('templates.footer')

    <script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>
    <script src="{{asset('myasset/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('myasset/air-datepicker-master/dist/js/datepicker.min.js')}}"></script>
    <script src="{{asset('myasset/air-datepicker-master/dist/js/i18n/datepicker.en.js')}}"></script>
    <script src="{{asset('myasset/summernote-master/summernote/summernote-lite.js')}}"></script>
    <script>

      var token = '{{ csrf_token() }}';
      var APP_URL = '{!! url("/") !!}';
      var url = '';
      
      $(document).ready(function(){

        // $('.view-btn-history').each(function(){

        //   var btn = $(this);

        //   btn.addClass('jelly');
        // });

        $('.ani_row').each(function(i){

          var tag = $(this);
          var time = 20;

          setTimeout(function(i){ 

            tag.addClass('bounceInLeft');
            tag.show();

          }, time*i); 
        });

        globalNotification();

        $('#list_event').click(function(){

          var url  = "{{ url('/all') }}";

          window.location.replace(url);
        });

        $('#list_timeline').click(function(){

          url  = APP_URL + '/home';

          window.location.replace(url);
        });

        $('#ended_event').click(function(){
          url = APP_URL + '/past';

          window.loaction.replace(url);
        });

        $('#add_event_btn,.close-action-icon,#cancel_button1').click(function(){

          $('#create_event_form').fadeToggle();

        });

        $('#my-element').datepicker({
          minDate: new Date()
        });

        $('#reg_event').click(function(){

          var package = $("#package option:selected").val();
          var title = $('#title').val();
          var desc = $('#description').val();
          var address = $('#address').val();
          var date = $('#date').val();
          var time1 = $('#timepicker').val();
          var time2 = $('#timepicker2').val();
          var url = APP_URL + '/regEvent';

          if(package == ''){
            $( "#package" ).effect( "shake",{'direction':'up','distance':'3'} );
          }else if(title == ''){
            $( "#title" ).effect( "shake",{'direction':'up','distance':'3'} );
          }else if(desc == ''){
            $( "#description" ).effect( "shake",{'direction':'up','distance':'3'} );
          }else if(address == ''){
            $( "#address" ).effect( "shake",{'direction':'up','distance':'3'} );
          }else if(date == ''){
            $( "#date" ).effect( "shake",{'direction':'up','distance':'3'} );
          }else if(time1 == ''){
            $( "#timepicker" ).effect( "shake",{'direction':'up','distance':'3'} );
          }else if(time2 == ''){
            $( "#timepicker2" ).effect( "shake",{'direction':'up','distance':'3'} );
          }else{

            $.ajax({
              url:url,
              type:'POST',
              data:{package:package,title:title,desc:desc,address:address,date:date,time1:time1,time2:time2,_token:token},
                beforeSend: function() {
                  $('#loader_screen').attr("display","");
                }
              }).done(function(data){location.reload()});
          }
        });
      });

      function viewTimeline(id){

        window.location.replace(APP_URL + '/timeline?ax='+id);
      }

    </script>
    <script src="{{asset('myasset/js/global_notification.js')}}"></script>
    <script src="{{asset('myasset/quick-access/quick-access.js')}}"></script>
  </body>
</html>
