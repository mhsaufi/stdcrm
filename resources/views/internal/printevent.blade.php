<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard | Print Events</title>

    @include('templates.header')
    <link rel="stylesheet" type="text/css" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <style type="text/css">

      .navbar-expand-lg .navbar-nav .nav-link {
        color: black !important;
        opacity: 0.5;
      }
      .navbar-expand-lg .navbar-nav .nav-link:active{
        color: gold !important;
        opacity: 0.5;
      }

    /*green*/
      .approve { 
        background-color: #8bc34a;
      }
      /*yellow*/
      .pending {
        background-color: #ffca28;
      }
      /*red*/
      .disapproved {
        background-color: #f44336;
      }

      .pattern{
        background: #FFFBE5!important;
      }

      .main_print_container {
        margin: 8% 10%;
        height: auto;
        background: #ffff;        
        padding: 20px 20px;
        border-radius: 5px;
        -moz-box-shadow: 0 0 2px #888;
        -webkit-box-shadow: 0 0 2px#888;
        box-shadow: 0 0 2px #888;
      }

      .print_btn_section {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }

      .print_btn_section_btn {
        padding: 5px 10px;
        border: 0.05em solid #dcdcdc;
        border-radius: 3px;
        cursor: pointer;
      }

      .print_event_detail {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        margin: 10px 0;
      }

      .print_event_detail > div {
        margin: 5px 0;
      }

      .print_header {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        width: 100%;
        height: auto;
      }

      .print_description {
        border-bottom: 0.05em solid #d4af37;
        margin-bottom: 25px;
      }

      .print_list_vendor {
        opacity: 0.8;
        margin-bottom: 10px;
        display: block;
      }

      .print_timeline_section {

      }

      .print_timeline_header {
        padding: 5px 10px;
      }

      .print_timeline_header_text {
        color: #fff;
        font-size: 15px;
      }

      .print_timeline_detail {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 5px 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border-bottom: 0.05em solid #dcdcdc;
      }

      .print_timeline_detail > div {
        margin-bottom: 10px;
      }

      .print_timeline_detail_label {
        width: 100px;
        opacity: 0.4;
        font-size: 13px;
      }

      .print_timeline_description {
        padding: 5px 10px;
        margin-bottom: 10px;
      }

      .print_timeline_transaction {
        padding: 5px 10px;
        margin-bottom: 10px;
      }

      .print_timeline_transaction_table {
        width: 100%;
      }

      .print_timeline_transaction_table td {
        padding: 5px 5px;
        border: 0.05em solid #dcdcdc!important;
      }

      @media (max-width: 600px){
        .main_print_container {
          margin: 25% 4%;
          height: auto;
          background: #ffff;        
          padding: 20px 20px;
          border-radius: 5px;
          -moz-box-shadow: 0 0 2px #888;
          -webkit-box-shadow: 0 0 2px#888;
          box-shadow: 0 0 2px #888;
        }
      }

      @media print{
        /*green*/
        .approve { 
          background-color: #8bc34a;
        }
        /*yellow*/
        .pending {
          background-color: #ffca28;
        }
        /*red*/
        .disapproved {
          background-color: #f44336;
        }
        .main_print_container {
          margin: 8% 10%;
          height: auto;
          background: #ffff;        
          padding: 20px 20px;
          border-radius: 5px;
          -moz-box-shadow: 0 0 2px #888;
          -webkit-box-shadow: 0 0 2px#888;
          box-shadow: 0 0 2px #888;
        }

        .print_btn_section {
          width: 100%;
          display: flex;
          flex-direction: row;
          justify-content: space-between;
        }

        .print_btn_section_btn {
          padding: 5px 10px;
          border: 0.05em solid #dcdcdc;
          border-radius: 3px;
          cursor: pointer;
        }

        .print_event_detail {
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
          align-items: flex-start;
          margin: 10px 0;
        }

        .print_event_detail > div {
          margin: 5px 0;
        }

        .print_header {
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
          width: 100%;
          height: auto;
        }

        .print_description {
          border-bottom: 0.05em solid #d4af37;
          margin-bottom: 25px;
        }

        .print_list_vendor {
          opacity: 0.8;
          margin-bottom: 10px;
          display: block;
        }

        .print_timeline_section {

        }

        .print_timeline_header {
          padding: 5px 10px;
        }

        .print_timeline_header_text {
          color: #fff;
          font-size: 15px;
        }

        .print_timeline_detail {
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
          align-items: flex-start;
          padding: 5px 10px;
          margin-top: 10px;
          margin-bottom: 20px;
          border-bottom: 0.05em solid #dcdcdc;
        }

        .print_timeline_detail > div {
          margin-bottom: 10px;
        }

        .print_timeline_detail_label {
          width: 100px;
          opacity: 0.4;
          font-size: 13px;
        }
      }
    </style>
  </head>
  <body class="pattern">

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
    </header>

    <div class="main_print_container">
      <div class="print_btn_section">
        <div><a href="{{ url('timeline?ax='.$data_event['we_id']) }}">< Back to timeline</a></div>
        <div><button class="print_btn_section_btn"><i class="fas fa-print"></i> Print</button></div>
      </div>
      <div class="print_header" id="print_section">
        <div><h4 style="color: #CC0066;">{{ $data_event['we_title'] }}</h4></div>
        <div class="print_event_detail">
          <div><i class="far fa-calendar-alt"></i><span style="margin-left: 20px;">{{ $data_event['we_date'] }}</span></div>
          <div><i class="far fa-clock"></i><span style="margin-left: 20px;">{{ $data_event['we_time1'] }} - {{ $data_event['we_time2'] }}</span></div>
          <div><i class="fas fa-map-marker-alt"></i><span style="margin-left: 20px;">{{ $data_event['we_venue'] }}</span></div>
          <div><i class="fas fa-folder-open"></i><span style="margin-left: 20px;">{{ $data_event['package']['package_title'] }}</span></div>
          <div><i class="fas fa-dollar-sign"></i><span style="margin-left: 20px;">MYR {{ $data_event['package']['package_price'] }}</span></div>
        </div>
        <div class="print_description"><p>{{ $data_event['we_desc'] }}</p></div>
        <div style="margin-bottom: 20px;">
          <h6 style="margin-bottom: 15px;">Vendors / Companies</h6>

          @php
            $i = 1;
          @endphp

          @foreach($data_vendors as $vendors)

          <span class="print_list_vendor">{{ $i }} - {{ $vendors['vendor']['company_name'] }}</span>

          @php
            $i++;
          @endphp

          @endforeach
        </div>
        <div class="print_timeline_section">
          <h6 style="margin-bottom: 15px;">Timelines</h6>
          @foreach($datas as $data)
          
          @if($data['ts_id'] == 1)
          <div class="print_timeline_header pending">
          @elseif($data['ts_id'] == 2)
          <div class="print_timeline_header approve">
          @else
          <div class="print_timeline_header disapproved">
          @endif
            <span class="print_timeline_header_text" style="color: #fff;">{{ $data['wet_subject'] }}</span>
          </div>

          <div class="print_timeline_detail">
            <div>
              <div class="print_timeline_detail_label">Owner</div>
              <span>{{ $data['vendor']['fullname'] }}</span>
            </div>
            <div>
              <div class="print_timeline_detail_label">Assigned To</div>
              <span>{{ $data['user']['fullname'] }}</span>
            </div>
            <div>
              <div class="print_timeline_detail_label">Date & Time</div>
              <span>{{ $data['wet_dt'] }}</span>
            </div>
            <div>
              <div class="print_timeline_detail_label">Type</div>
              <span>{{ $data['category']['tc_title'] }}</span>
            </div>
          </div>

          <div class="print_timeline_description">
            {!! base64_decode($data['wet_desc']) !!}
          </div>
            
          @endforeach
        </div>

        <div class="print_timeline_transaction">
          <h6 style="margin-bottom: 15px;">Transactions</h6>

          <table class="print_timeline_transaction_table">
            <tr>
              <td>Receivable</td>
              <td><b>{{ $data_event['package']['package_title'] }}</b></td>
              <td style="text-align: right;">{{ $data_event['package']['package_price'] }}</td>
            </tr>
            <tr>
              <td rowspan="{{ $datas_count+1 }}" style="vertical-align: top;">Payable</td>
              <td style="opacity: 0.6;">Timeline : </td>
              <td></td>
            </tr>
            @foreach($datas as $d)
            <tr>
              <td><em>{{ $d['wet_subject'] }} ({{ $data['wet_dt'] }})</em></td>
              <td style="text-align: right;">{{ $data['wet_payment'] }}</td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
      
    </div>

    @include('templates.footer')

    <script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script src="{{asset('myasset/js/printThis.js')}}"></script>
    <script>

      var token = '{{ csrf_token() }}';
      var APP_URL = '{!! url("/") !!}';
      var url = '';
      
      $(document).ready(function(){

        $('.print_btn_section_btn').click(function(){

          codespeedy();

        });


        globalNotification();

      });

      function codespeedy(){

        var printContents = document.getElementById('print_section').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;

        // $('#print_section').printThis({
        //   importCSS: true,
        //   importStyle: true
        // });
      }

    </script>
    <script src="{{asset('myasset/js/global_notification.js')}}"></script>
  </body>
</html>
