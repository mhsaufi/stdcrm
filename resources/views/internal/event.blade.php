<!DOCTYPE html>
<html lang="en"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard | Events</title>

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
            <div class="view-btn-history" id="list_event" style="background: #cfd8dc;">
              <i class="fas fa-th-list"></i> Events 
              @if($count_inbox > 0)

                <span id="count_inbox_badge">{{ $count_inbox }}</span>

              @endif
            </div>
            <div class="view-btn-history" id="ended_event"><i class="fas fa-history"></i> Past Events</div>
          </div>
        </div><br>
        <div class="row row-forecast">
          <p>All events listed here are within your company only. Refer to Past Events to view all ended events.</p>
          <br>
          <div class="events_table_container">
            <table class="event_table">
              <thead>
                <tr>
                  <th style="width: 1%;" colspan="2">#</th>
                  <th style="width: 13%;">Event</th>
                  <th style="width: 5%;">Category</th>
                  <th style="width: 10%;">Users</th>
                  <th style="width: 5%;">Contact</th>
                  <th style="width: 10%;">Packages</th>
                  <th style="width: 5%;">Price (MYR)</th>
                  <th style="width: 5%;">Status</th>
                  <th style="width: 10%;">Action</th>
                </tr>
              </thead>
              <tbody>

                @php

                  $i = 1;

                @endphp

                @foreach($data_inbox as $inbox)

                  @if($inbox['i_type_id'] == 4)
                  <tr>
                    <td>{{ $i }}</td>
                    <td style="background: #ec7063;"></td>
                    <td>{{ $inbox['event']['we_title'] }}</td>
                    <td>Invitation</td>
                    <td>-</td>
                    <td>-</td>
                    <td>{{ $inbox['event']['package']['package_title'] }}</td>
                    <td>{{ $inbox['event']['package']['package_price'] }}</td>
                    <td>Pending</td>
                    <td>
                      <button class="btn-alert" id="accept" onclick="accept('{{ $inbox['i_id'] }}')">ACCEPT</button> 
                      <button class="btn-alert-cancel" id="decline" onclick="decline('{{ $inbox['i_id'] }}')">DECLINE</button>
                    </td>
                  </tr>
                  @elseif($inbox['i_type_id'] == 5)
                  <tr>
                    <td>{{ $i }}</td>
                    <td style="background: #ec7063;"></td>
                    <td>{{ $inbox['event']['we_title'] }}</td>
                    <td>Declination</td>
                    <td>{{ $inbox['company']['company_name'] }}</td>
                    <td>-</td>
                    <td>{{ $inbox['event']['package']['package_title'] }}</td>
                    <td>{{ $inbox['event']['package']['package_price'] }}</td>
                    <td>Declined</td>
                    <td><button class="btn-alert-cancel" onclick="acknowledge('{{ $inbox['i_id'] }}')">Acknowledge</button></td>
                  </tr>
                  @else
                  <tr>
                    <td>{{ $i }}</td>
                    <td style="background: #ec7063;"></td>
                    <td>{{ $inbox['event']['we_title'] }}</td>
                    <td>Declination</td>
                    <td>{{ $inbox['user']['name'] }}</td>
                    <td>{{ $inbox['user']['phone'] }}</td>
                    <td>{{ $inbox['event']['package']['package_title'] }}</td>
                    <td>{{ $inbox['event']['package']['package_price'] }}</td>
                    <td>Declined</td>
                    <td><button class="btn-alert-cancel" onclick="acknowledge('{{ $inbox['i_id'] }}')">Acknowledge</button></td>
                  </tr>
                  @endif

                  @php

                    $i++;

                  @endphp

                @endforeach

                @foreach($data_event as $event)

                  @if($event['event']['wes_id'] == 3)

                    <tr class="animated fast ani_row">
                      <td>{{ $i }}</td>
                      <td style="background: #f1c40f;"></td>
                      <td>{{ $event['event']['we_title'] }}</td>
                      <td>Booking Request</td>
                      <td>{{ $event['event']['client']['name'] }}</td>
                      <td>{{ $event['event']['client']['phone'] }}</td>
                      <td>{{ $event['event']['package']['package_title'] }}</td>
                      <td>{{ $event['event']['package']['package_price'] }}</td>
                      <td>Pending</td>
                      <td>
                        <button class="event_requested_action_btn reject" style="background: #e74c3c;" data-event-id="{{ $event['event']['we_id'] }}">
                          REJECT
                        </button>
                        <button class="event_requested_action_btn accept" style="background: #2ecc71;" data-event-id="{{ $event['event']['we_id'] }}">
                          ACCEPT
                        </button>
                      </td>
                    </tr>

                  @elseif($event['event']['wes_id'] == 1)

                    <tr onclick="viewTimeline('{{ $event['we_id'] }}')" class="animated fast ani_row">
                      <td>{{ $i }}</td>
                      <td style="background: #7dcea0;"></td>
                      <td>{{ $event['event']['we_title'] }}</td>
                      <td>Current</td>
                      <td>{{ $event['event']['client']['name'] }}</td>
                      <td>{{ $event['event']['client']['phone'] }}</td>
                      <td>{{ $event['event']['package']['package_title'] }}</td>
                      <td>{{ $event['event']['package']['package_price'] }}</td>
                      <td>Active</td>
                      <td></td>
                    </tr>

                  @endif

                  @php

                    $i++;

                  @endphp

                @endforeach
                
              </tbody>
            </table>
          </div>


        
        </div>
      </div>
    </div>
    <!-- Feature Section End --> 

    <!-- Reject Timeline Remark Form -->

    <div id="reject_remark_container">
      <div id="reject_remark">
        <div style="padding: 10px 0;border-bottom: 0.05em solid #d4af37;margin-bottom: 10px;">Reject</div>
        <div style="margin-bottom: 5px;"><p>Reason for your rejection : </p></div>
        <input type="hidden" name="" id="rejected_event_id" val="">
        <input type="hidden" name="" id="action_booking_id" val="">
        <div><textarea class="form-control" id="remark"></textarea></div>
        <div style="display: flex;flex-direction: row;justify-content: flex-end;">
          <button class="std-btn-plain" style="margin-right: 20px;" id="cancel_reject_btn">Cancel</button>
          <button class="std-btn-plain" onclick="rejectEvent()">Reject</button>
        </div>
      </div>
      
    </div>
         
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

        });

        globalNotification();

        url = APP_URL + '/actiononbooking';

        $('.accept').each(function(){

          var accept_btn = $(this);

          accept_btn.click(function(){

            var we_id = $(this).data('event-id'); 

            var action = '1';

            $.post(url,{_token:token,action:action,we_id:we_id},function(result){

              var new_url = APP_URL + '/timeline' + '?ax=' + we_id;

              window.location.replace(new_url);

            });

          });

        });

        $('.reject').each(function(){

          var reject_btn = $(this);

          reject_btn.click(function(){

            var we_id = $(this).data('event-id'); 

            var action = '2';

            $('#rejected_event_id').val(we_id);
            $('#action_booking_id').val('2');
            $('#reject_remark_container').fadeToggle('fast');

          });

        });

        $('#cancel_reject_btn').click(function(){

          $('#reject_remark_container').fadeToggle('fast');

        });



        $('#list_timeline').click(function(){

          url  = APP_URL + '/home';

          window.location.replace(url);
        });

        $('#ended_event').click(function(){
          url = APP_URL + '/past';

          window.location.replace(url);
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

      function rejectEvent(){

        var we_id = $('#rejected_event_id').val();
        var action = $('#action_booking_id').val();
        var remark = $('#remark').val();

        $.post(url,{_token:token,action:action,we_id:we_id,remark:remark},function(result){

          location.reload();

        });

      }

      function viewTimeline(id){

        window.location.replace(APP_URL + '/timeline?ax='+id);
      }

      function accept(id){

        url = APP_URL + '/_accept';

        $.post(url,{id:id,_token:token},function(result){

          var url = '{{ url('/home') }}' + '?ax=' + result;

          window.location.replace(url);

        });
      }

      function decline(id){

        var url = "{{ url('/_decline') }}";
        var token = '{{ csrf_token() }}';

        $.post(url,{id:id,_token:token},function(){

          location.reload();
        });
      }

      function acknowledge(id){

        var url = "{{ url('/_ack') }}";
        var token = '{{ csrf_token() }}';

        $.post(url,{id:id,_token:token},function(){

          location.reload();
        });
      }

    </script>
    <script src="{{asset('myasset/js/global_notification.js')}}"></script>
    <script src="{{asset('myasset/quick-access/quick-access.js')}}"></script>
  </body>
</html>
