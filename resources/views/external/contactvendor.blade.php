
<!DOCTYPE html>
<html>
<head>
	<title>{{ $result['company_name'] }} | Contact Us</title>
	 @include('templates.header')

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
    }


    .big_container {
      width: 100%;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      min-height: 100%;
    }

    .footer_result_container {
      width: 80%;
      min-height: 10%;
      margin: 0 10%;
      background: white;
      padding: 20px 20px;
      display: flex;
      flex-flow: row wrap;
    }

    .result_container {
      position: relative;
      width: 80%;
      min-height: 100vh;
      background: white;
      margin: 0 10%;
      padding: 20px 0;
      display: flex;
      flex-flow: row wrap;
    }

    .vendor_cards_info {
      width: 100%;
      height: 30vh;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 15px 40px;
      background: blue;
    }

    .vendor_cards:hover ~ .vendor_cards_info {
      height: 90%;
    }

    .vendor_cards_info div h4 {
      color: white;
      text-shadow: 1px 1px 2px black;
    }

    .vendor_cards_info div p {
      color: white;
      text-shadow: 5px 5px 10px black!important;
    }

    .content_company_content {
      padding: 2vh 70px;
    }

    .vendor_title_info h1 {
      color: white;
      text-shadow: 5px 5px 10px black!important;
    }
    .tags-space {
      /*margin-top: 40px;*/
      /*margin-left: 300px;     */
    }     
    .tags {
      background: #888;
      color: #fff;
      padding: 8px 10px;
      font-size: 1.0em;
      border-radius: 5px;
      border: 0.1em solid #999;
      margin-right: 1px;      
    }

    .contact_form_container {
      width: 100%;
      height: 100%;
      padding: 25px 25px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      padding-bottom: 100px;
    }

    .submit_form_alert {
      width: 100%;
      height: 40vh;
      padding: 40px 25px;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
    }

    .contact_form_container div {
      margin-bottom: 15px;
      padding: 10px 10px;
      width: 100%;
    }

    .book_now_enabled {
      width: 100%;
      height: 50px;
      color: white;
      background: #27ae60;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
    }

    .book_now_disabled {
      width: 100%;
      height: 50px;
      color: white;
      background: #f1f1f1;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
    }

    .book_now_enabled:hover {
      -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
      -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
      box-shadow: 1px 2px 2px rgba(0, 0, 0, .5);
    }


    @media (max-width: 480px){

      .pattern {
        background-image: none;
      }

      .content_company_content {
        width: 100%;
        padding: 5% 0!important;
        margin-top: 3%;
        display: flex;
        flex-flow: row wrap;
        justify-content: flex-start;
        margin-bottom: 100px;
        /*background-color: blue;*/
      }

      .result_container {
        position: relative;
        width: 100%;
        min-height: 100%;
        /*background: pink!important;*/
        margin: 0;
        padding: 5% 0!important;
        display: flex;
        flex-flow: row wrap;
      }

      .company_logo {
        position: absolute;
        border-radius: 50%;
        border: 0.05em solid white;
        height: 70px;
        width: 70px;
        top: 170px;
        right: 8%;
        z-index: 81;
      }

      .company_logo_base {
        position: absolute;
        border-radius: 50%;
        border: 0.05em solid white;
        height: 70px;
        width: 70px;
        background: white;
        top: 170px;
        right: 8%;
        z-index: 80;
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

    <div class="big_container">
      <div class="result_container">
        <div class="vendor_cards_info" style="background: url('{{ asset('myasset/img/back.jpg') }}');background-size: cover;background-position: center;">
          @if($result['company_logo'] == '')
          <div class="company_logo" style="background: url('{{ asset('myasset/img/null.jpg') }}');background-position: center;background-size: cover;">
          @else
          <div class="company_logo" style="background: url('{{ asset('storage/'.$result['company_logo']) }}');background-position: center;background-size: cover;">
          @endif
          </div>
          <div class="company_logo_base"></div>

          <div class="vendor_title_info">
            <h1>{{ $result['company_name'] }}</h1>
            <p>{{ $result['company_ssm'] }}</p>
          </div>
          
        </div>
        <div class="content_company">
          <div class="content_company_menu">
            <div onclick="viewVendors('{{ $result['company_id'] }}','{{ $result['company_name']}}')">INFO</div>
            <div onclick="viewGalleries('{{ $result['company_id'] }}','{{ $result['company_name']}}')">GALLERY</div>
            <div onclick="viewPackages('{{ $result['company_id'] }}','{{ $result['company_name']}}')">PACKAGES</div>
            <div onclick="viewReviews('{{ $result['company_id'] }}','{{ $result['company_name']}}')">REVIEWS</div>
            <div style="background: #d4af37;color: white;">CONTACT US</div>
          </div>
          <div class="content_company_content">
            <div class="contact_form_container">
              <div style="border-bottom: 0.05em solid #f1f1f1;">CONTACT FORM</div>
              <div>
                <label>Your Email</label><br>

                @if (Route::has('login'))

                  @auth
                    <input type="text" name="email" class="form-std det" id="email"  value="{{ Auth::user()->email }}" required/>
                  @else
                    <input type="text" name="email" class="form-std det" id="email" required/>
                  @endauth 

                @endif
                
              </div>
              <div>
                <label>Subject</label><br>
                <input type="text" name="subject" class="form-std det" id="subject" required>
              </div>
              <div>
                <label>Your content or questionaire</label><br>
                <textarea class="form-std det" id="content" required></textarea>
              </div>
              <div id="book_now" class="book_now_disabled">
                SUBMIT
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>


    @include('templates.footer')

    <script>

      var APP_URL = '{!! url("/") !!}';

      $(document).ready(function(){
        var email = $('#email').val();
        var subject = $('#subject').val();
        var content = $('#content').val();
        var error_int = 0;

        if(email == ''){

          error_int += 1;

        }else{

          if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){

          }else{

            error_int += 1;
          }
        }

        if(subject == ''){

          error_int += 1;
        }

        if(content == ''){

          error_int += 1;

        }

        if(error_int == 0){

          $('#book_now').removeClass('book_now_disabled');
          $('#book_now').addClass('book_now_enabled');

        }else{

          $('#book_now').removeClass('book_now_enabled');
          $('#book_now').addClass('book_now_disabled');
        }
      });

      $('.det').focusout(function(){

        var email = $('#email').val();
        var subject = $('#subject').val();
        var content = $('#content').val();
        var error_int = 0;

        if(email == ''){

          error_int += 1;

        }else{

          if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){

          }else{

            error_int += 1;
          }
        }

        if(subject == ''){

          error_int += 1;
        }

        if(content == ''){

          error_int += 1;

        }

        if(error_int == 0){

          $('#book_now').removeClass('book_now_disabled');
          $('#book_now').addClass('book_now_enabled');

        }else{

          $('#book_now').removeClass('book_now_enabled');
          $('#book_now').addClass('book_now_disabled');
        }

      });

      $('#book_now').click(function(){

        var email = $('#email').val();
        var subject = $('#subject').val();
        var content = $('#content').val();

        var url = '{{ url("/submitcontactus") }}';
        var token = '{{ csrf_token() }}';
        var i_type_id = '8';
        var company_id = '{{ $result["company_id"] }}';

        $.post(url,{_token:token,email:email,subject:subject,content:content,iid:i_type_id,company_id:company_id},function(data){


            $('.content_company_content').load(APP_URL + '/myasset/templates/contactus/submitted.blade.php', function(){

              $(this).fadeIn(500);

            });
        });

      });

      function viewVendors(vendorID,vendorName){
        
        var url = '{{ url("/vendor") }}'+ '/' + vendorName.split(' ').join('_')+'/'+vendorID;
        
        window.location.replace(url);

      }
      function viewGalleries(vendorID,vendorName){
        
        var url = '{{ url("/vendor") }}'+ '/' + vendorName.split(' ').join('_')+'/gallery/'+vendorID;
        
        window.location.replace(url);

      }
      function viewPackages(vendorID,vendorName){

        var url = '{{ url("/vendor") }}'+ '/' + vendorName.split(' ').join('_')+'/packages/'+vendorID;
        
        window.location.replace(url);

      }

      function viewReviews(vendorID, vendorName){
        var url = '{{ url("/vendor") }}' + '/' + vendorName.split(' ').join('_')+'/review/'+vendorID;

        window.location.replace(url);
      }

    </script>
</body>
</html>