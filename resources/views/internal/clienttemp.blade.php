<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard</title>
    @include('templates.header')
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/timelinesimple/style-albe-timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/jodit/build/jodit.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/air-datepicker-master/dist/css/datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/select2/dist/css/select2.min.css')}}">
    <style type="text/css">
      #std_timline_form {
        display: none;
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

      .pattern{
      	/*background-image: url("{{asset('myasset/img/bg1.jpg')}}");*/
      	background-repeat: no-repeat;
        background-attachment: fixed;
      	background-size: cover;
      	height: 250px !important;
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

      .std-timeline-banner {
        min-height: 20vh!important;
        background: #ffff;        
        padding: 20px 20px;
        border-radius: 5px;
        -moz-box-shadow: 0 0 5px #888;
        -webkit-box-shadow: 0 0 5px#888;
        box-shadow: 0 0 2px #888;
        margin-top: 20px;
      }

      .std-timeline-banner-header{
        width: 100%;
        display: flex;
        justify-content: space-between;
      }

      .std-timeline-banner-info {
        width: 100%;
        padding: 20px 20px;
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

    </style>
  </head>
  <body class="pattern">

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>

    <!-- Feature Section Start -->
    <div class="section-padding">
      <div class="container">
        <div class="std-timeline-banner">
          <div class="std-timeline-banner-info">

            @if($count == 0)

              @if($count_inbox == 0)

                You have no event yet. Ask your wedding planner or vendor to create one and invite you or you can simply browse for any available package on our site and book.

              @else

                @foreach($data_inbox as $inbox)

                <div style="padding: 15px 0;margin-top: 5px;">
                  You have been invited to participate in 
                  <span style="opacity: 0.7;font-style: italic;font-weight: bold;">{{ $inbox['event']['we_title'] }}</span>
                  <span style="opacity: 0.7;font-style: italic;font-weight: bold;"></span>
                </div>
                <div style="padding: 15px 0;margin-top: 10px;">
                  <button class="btn-alert" id="accept" onclick="accept('{{ $inbox['i_id'] }}')">ACCEPT</button> 
                  <button class="btn-alert-cancel" id="decline" onclick="decline('{{ $inbox['i_id'] }}')">DECLINE</button>
                </div>

                @endforeach

              @endif

            @else

              @if($data_event['wes_id'] == '3')

                <p>You have booking currently waiting for approval. 
                Once approved by the company, you will be redirected to the timeline pages. Your booking detail : </p>
                <table class="booking_info">
                  <tr>
                    <td>Title</td>
                    <th> {{ $data_event['we_title'] }} </th>
                  </tr>
                  <tr>
                    <td>Package</td>
                    <th>{{ $data_event['package']['package_title'] }} - ({{ $data_event['package']['package_pax'] }} pax) - MYR {{ $data_event['package']['package_price'] }}</th>
                  </tr>
                  <tr>
                    <td>Company</td><th><span style="color: #d4af37;">{{ $data_event['company']['company_name'] }}</span></th>
                  </tr>
                  <tr>
                    <td>Status</td><th><span style="color: #d4af37;">PENDING</span></th>
                  </tr>
                  <tr>
                    <td>Remark</td><th><span style="color: #d4af37;"></span></th>
                  </tr>
                </table>


              @else

                <p>Your booking had been rejected. Your booking detail :</p>
                  <table class="booking_info">
                    <tr>
                      <td>Title</td>
                      <th> {{ $data_event['we_title'] }} </th>
                    </tr>
                    <tr>
                      <td>Package</td>
                      <th>{{ $data_event['package']['package_title'] }} - ({{ $data_event['package']['package_pax'] }}) - MYR {{ $data_event['package']['package_price'] }}</th>
                    </tr>
                    <tr>
                      <td>Company</td><th><span style="color: #d4af37;">{{ $data_event['company']['company_name'] }}</span></th>
                    </tr>
                    <tr>
                      <td>Status</td><th><span style="color: red;">REJECTED</span></th>
                    </tr>
                    <tr>
                    <td>Remark</td><th><span style="color: #d4af37;">{{ $data_event['we_remark'] }}</span></th>
                  </tr>
                  </table>

                  <p>Dont worry, you still can try to book another available package on our site. Kindly clear your booking cart to allow new booking. </p>
                  <button class="std-btn-plain" onclick="clear_cart('{{ $data_event['we_id'] }}')">Clear Cart</button>

              @endif

            @endif
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->  


    <div id="reject_remark_container">
      <div id="reject_remark_clearcart">
        <div style="padding: 10px 0;border-bottom: 0.05em solid #d4af37;margin-bottom: 10px;">Reminder</div>
        <div style="margin-bottom: 5px;"><p>Now you can browse for another available package and book new!</p></div>
        <div style="display: flex;flex-direction: row;justify-content: center;">
          <button class="std-btn-plain" id="reject_reject_btn">Okey</button>
        </div>
      </div>
    </div>

    @include('templates.footer')
    <script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>
    <script src="{{asset('myasset/jodit/build/jodit.min.js')}}"></script>   
    <script src="{{asset('myasset/timelinesimple/jquery-albe-timeline.js')}}"></script>
    <script src="{{asset('myasset/air-datepicker-master/dist/js/datepicker.min.js')}}"></script>
    <script src="{{asset('myasset/air-datepicker-master/dist/js/i18n/datepicker.en.js')}}"></script>
    <script src="{{asset('myasset/select2/dist/js/select2.min.js')}}"></script>
    <script>
      
      $(document).ready(function () {

      });

      function accept(id){

        var url = '{{ url("/accept") }}';
        var token = '{{ csrf_token() }}';

        $.post(url,{id:id,_token:token},function(result){

          var url = '{{ url('/home') }}' + '?ax=' + result;

          window.location.replace(url);

        });
      }

      function decline(id){

        var url = "{{ url('/decline') }}";
        var token = '{{ csrf_token() }}';

        $.post(url,{id:id,_token:token},function(){

          location.reload();
        });
      }

      function clear_cart(id){

        var url = '{{ url("/clearcart") }}';
        var token = '{{ csrf_token() }}';

        $.post(url, {_token:token,we_id:id}, function(){

          $('#reject_remark_container').fadeToggle('fast');

        });
      }

      $('#reject_reject_btn').click(function(){

        $('#reject_remark_container').fadeToggle('fast');
        location.reload();
      });

    </script> 
  </body>
</html>
