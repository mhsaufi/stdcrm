
<!DOCTYPE html>
<html>
<head>
	<title>Package | Booking Form</title>

	 @include('templates.header')


  <link rel="stylesheet" type="text/css" href="{{asset('myasset/air-datepicker-master/dist/css/datepicker.min.css')}}">

	<style>
	  .icon {
	  	margin-left: -30px;
	  	opacity: 0.5;
	  }
	  .icon-s {
	  	margin-left: 10px;
	  	opacity: 0.5;
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
    	background-image: url("{{asset('myasset/img/bgg.jpg')}}");
    	background-repeat: no-repeat;
      background-attachment: fixed;
    	background-size: cover;
    	height: 250px !important;
      position: relative;
    }

    .company_logo_mini {
      border-radius: 50%;
      border: 0.05em solid white;
      height: 60px;
      width: 60px;
      margin: 0 3px;
    }

    .form-control-std {
        padding: 9px;
        border-radius: 10px;
        border: 0.05em solid #cfd8dc;
    }

    .big_container {
      width: 100%;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }

    .footer_result_container {
      width: 80%;
      min-height: 10%;
      margin: 0 10%;
      /*background: white;*/
      padding: 20px 20px;
      display: flex;
      flex-flow: row wrap;
    }

    .result_container {
      width: 80%;
      height: 100%;
      margin: 0 10%;
      padding: 20px 20px;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: flex-start;
    }

    .booking_form_container {
      width: 100%;
      min-height: 200px;
      background: #fff;
      -moz-box-shadow: 0 0 6px #888;
      -webkit-box-shadow: 0 0 6px#888;
      box-shadow: 0 0 4px #888;
      padding: 25px 25px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }

    @media (max-width: 600px){
      .result_container {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 20px 10px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
      }

      .booking_form_container {
        width: 100%;
        min-height: 200px;
        background: #fff;
        -moz-box-shadow: 0 0 6px #888;
        -webkit-box-shadow: 0 0 6px#888;
        box-shadow: 0 0 4px #888;
        padding: 25px 25px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
      }
    }

    #book_now {
      width: 100%;
      height: 50px;
      color: white;
      display: flex;
      margin-bottom: 20px;
    }

    #book_now_btn {
      background: #27ae60;
      border: none;
      width: 100%;
      height: 50px;
      padding-top: 2px;
      text-align: center;
      color: white;
    }

    #book_now_btn:disabled {
      background: grey;
    }

    #book_now_btn:hover {
      -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
      -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
      box-shadow: 1px 2px 2px rgba(0, 0, 0, .5);
    }

    #booking_alert_container {
      position: fixed;
      height: 100vh;
      width: 100%;
      background: rgba(0,0,0,0.3);
      z-index: 998;
      display: none;
    }

    #booking_alert {
      position: absolute;
      height: 250px;
      width: 500px;
      padding: 0 10px;
      top: 23%;
      left: 32%;
      background: white;
      z-index: 999;
      -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
      -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
      box-shadow: 1px 2px 2px rgba(0, 0, 0, .5);
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }

    #ok_booking_alert {
      background: #27ae60;
      margin: 10px 30px;
      padding: 10px 15px;
      text-align: center;
      color: white;
      cursor: pointer;
    }

    #ok_booking_alert:hover {
      -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
      -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
      box-shadow: 1px 2px 2px rgba(0, 0, 0, .5);
    }
	 </style>

</head>
<body class="pattern">

  <div id="booking_alert_container">
    <div id="booking_alert">
      <div style="width: 100%;border-bottom: 0.05em solid #d4af37;padding: 10px 10px;margin-bottom: 10px;">
        REMINDER
      </div>
      <div style="width: 100%;padding: 10px 10px;margin-bottom: 10px;">
        <p>Your booking is now successfully submitted to {{ $package_data['company']['company_name'] }}.
        Stay alert as they might contact you soon or login to your dashboard. Once accepted by {{ $package_data['company']['company_name'] }},
      your dashboard will be your event</p>
      </div>
      <div>
        <div id="ok_booking_alert">
          Noted and thank you
        </div>
      </div>
    </div>
  </div>

	  <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>
    <div style="background: rgba(230,230,230,0.8);min-height: 100vh;">
    <!-- Feature Section Start -->
    <div class="section-padding">
      <div class="big_container">
        <div class="result_container">

          @if($booking_count == 0)

          <div class="booking_form_container">
            <div style="margin-bottom: 10px;">
              <span style="cursor: pointer;" onclick="back()">< Back </span>
            </div>
            <div style="border-bottom: 0.05em solid #f1f1f1;margin-bottom: 10px;padding: 15px 0;display: flex;flex-direction: row;justify-content: space-between;align-items: center;">
              <div>BOOKING FORM </div>
              <div class="company_logo_mini" style="background: url('{{ asset('storage/'.$package_data['company']['company_logo']) }}');background-position: center;background-size: cover;"></div>
            </div>
            <div style="margin-bottom: 20px;padding: 15px 0;">
              Package : <span style="font-weight: bold;color: green;">{{ strtoupper($package_data['package_title']) }}</span>
            </div>
            <div style="margin-bottom: 20px;">
              <label>Bride's & Groom's name</label><br>
              <input type="text" name="title" class="form-std req" id="title" placeholder="Romie & Julie">
              <br>
              <label>Expected wedding date</label><br>
              <input type="text" name="date" class="form-std datepicker-here req" data-position="bottom right" data-language='en' data-date-format='d-m-yyyy' id="date" ><br>
              <label>(Optional) Any additional notes for {{ $package_data['company']['company_name'] }}</label><br>
              <textarea class="form-std" id="notes"></textarea>
              <br>
              <input type="checkbox" name="agreement" id="agreement" req> I hereby Agree to the Term n Conditions applied to the package
            </div>
            <div id="book_now">
              <button id="book_now_btn">
                BOOK
              </button>
            </div>
          </div>

          @else

          <div class="booking_form_container">
            <div style="margin-bottom: 10px;">
              <span style="cursor: pointer;" onclick="back()">< Back </span>
            </div>
            <div style="border-bottom: 0.05em solid #f1f1f1;margin-bottom: 10px;padding: 4px 0;display: flex;flex-direction: row;justify-content: space-between;align-items: center;">
            </div>
            <div>
              <p>You are not allowed to book new package because you have another booking currently waiting for approval. 
                Once approved by the company, you will be redirected to the timeline pages. Your booking detail : </p>
                <table class="booking_info">
                  <tr>
                    <td>Title</td>
                    <th> {{ $booking['we_title'] }} </th>
                  </tr>
                  <tr>
                    <td>Package</td>
                    <th>{{ $booking['package']['package_title'] }} - ({{ $booking['package']['package_pax'] }} pax) - MYR {{ $booking['package']['package_price'] }}</th>
                  </tr>
                  <tr>
                    <td>Company</td><th><span style="color: #d4af37;">{{ $booking['company']['company_name'] }}</span></th>
                  </tr>
                  <tr>
                    <td>Status</td><th><span style="color: #d4af37;">PENDING</span></th>
                  </tr>
                  <tr>
                    <td>Remark</td><th><span style="color: #d4af37;"></span></th>
                  </tr>
                </table>
            </div>
          </div>

          @endif

        </div>
        <div class="footer_result_container">
        </div>
      </div>
    </div>
    
    @include('templates.external_footer')
    @include('templates.footer')

    <script src="{{asset('myasset/air-datepicker-master/dist/js/datepicker.min.js')}}"></script>
    <script src="{{asset('myasset/air-datepicker-master/dist/js/i18n/datepicker.en.js')}}"></script>

    <script>
      $('#book_now_btn').attr("disabled", true);

      $(document).ready(function(){

        if($('#agreement').prop("checked") == true){

          $('#book_now_btn').attr("disabled", false);

        }else{

          $('#book_now_btn').attr("disabled", true); 
        }

      });

      function back(){
        var id = '{{ $package_data["package_id"] }}';
        var name = '{{ $package_data["package_title"] }}';
        var url = '{{ url("/packages") }}' + '/' + name.split(' ').join('_') + '/' + id;

        window.location.replace(url);
      }

      $('#agreement').click(function(){

        if($(this).prop("checked") == true){

            $('#book_now_btn').attr("disabled", false);

          }else{

            $('#book_now_btn').attr("disabled", true); 
          }
      });

      $('.req').blur(function(){

        var title = $('#title').val();
        var date = $('#date').val();

        if(title != ''){

          if(date != ''){

            if($('#agreement').prop("checked") == true){

              $('#book_now_btn').attr("disabled", false);

            }else{

              $('#book_now_btn').attr("disabled", true); 
            }

          }else{

            $('#book_now_btn').attr("disabled", true); 
          }

        }else{

          $('#book_now_btn').attr("disabled", true);
        }
        

      });

      $('#book_now_btn').click(function(){

        var title = $('#title').val();
        var date = $('#date').val();
        var notes = $('#notes').val();
        var token = '{{ csrf_token() }}';
        var url = '{{ url("/newbooking") }}';
        var package_id ="{{ $package_data['package_id'] }}";
        var company_id = "{{ $package_data['company']['company_id'] }}";

        $.post(url,{company:company_id,package:package_id,title:title,date:date,notes:notes,_token:token},function(result){

          $('#booking_alert_container').fadeToggle();

        });

      });

      $('#ok_booking_alert').click(function(){
        var id = '{{ $package_data["package_id"] }}';
        var name = '{{ $package_data["package_title"] }}';
        var url = '{{ url("/packages") }}' + '/' + name.split(' ').join('_') + '/' + id;

        window.location.replace(url);
      });
    </script>
</body>
</html>