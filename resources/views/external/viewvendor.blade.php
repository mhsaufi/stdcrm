
<!DOCTYPE html>
<html>
<head>
	<title>{{ $result['company_name'] }} | Info</title>
	 @include('templates.header')

   
   <link rel="stylesheet" href="{{ asset('myasset/socialsharekit/dist/css/social-share-kit.css') }}" type="text/css">

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
      min-height: 100vh;
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

    .staff_info_container {
      border: 1px solid #d4af37;
      padding: 5px 10px;
      position: fixed;
      top: 20%!important;
      left: 20%!important;
      height: 50%;
      width: 60%;
      background: white;
      -moz-box-shadow: 0 0 7px #888;
      -webkit-box-shadow: 0 0 7px#888;
      box-shadow: 0 0 30px #888;
      z-index: 85;
      display: none;
    }


    .staff_info_container_child {
      display: flex;
      flex-flow: row;
      justify-content: space-around;
      height: 100%;
      width: 100%;
    }

    @media (max-width: 600px){

      .pattern {
        background-image: none;
      }

      .result_container {
        position: relative;
        width: 100%;
        min-height: 100%;
        background: white;
        margin: 0;
        padding: 5% 0;
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

      .staff_info_container {
        border: 1px solid #d4af37;
        padding: 10px 10px!important;
        position: fixed;
        top: 0!important;
        left: 0!important;
        height: 70%;
        width: 90%;
        background: white;
        -moz-box-shadow: 0 0 7px #888;
        -webkit-box-shadow: 0 0 7px#888;
        box-shadow: 0 0 30px #888;
        z-index: 85;
        display: none;
        margin: 30% 20px!important;
      }


      .staff_info_container_child {
        display: flex;
        flex-flow: column;
        justify-content: space-around;
        height: 100%;
        width: 100%;
        padding: 10% 0!important;
        /*background: blue;*/
      }

      .staff_card_dp {
        width: 100%!important;
        height: 100%;
        /*background: blue;*/
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
      }


      .staff_card_dp_circle {
        margin-top: 0!important;
        width: 150px!important;
        height: 150px!important;
        /*background: blue;*/
        z-index: 99;
        border-radius: 50%;
      }
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
      padding: 8% 10%;
      padding-bottom: 20vh;
    }

    .vendor_title_info h1 {
      color: white;
      text-shadow: 5px 5px 10px black!important;
    }
    .tags-space {
      width: 100%;
      display: flex;
      flex-flow: row wrap;
      justify-content: space-between;
    }     
    .tags {
      background: #888;
      color: #fff;
      padding: 8px 10px;
      font-size: 1.0em;
      border-radius: 5px;
      border: 0.1em solid #999;
      margin-right: 1px; 
      margin-bottom: 15px;     
    }

    .our_team_container {
      height: 180px;
      width: 180px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      margin-right: 20px;
    }

    .our_team_dp {
      height: 70%;
      width: 70%;
      background: grey;
      border-radius: 50%;
    }

    .staff_fullname {
      font-family: Avant Garde, Avantgarde, Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
      font-size: 13px; 
      font-style: normal; 
      font-variant: normal; 
      font-weight: 700; 
      line-height: 15.4px;
      opacity: 0.7;
      margin: 10px 0;
    }

    .staff_email {
      font-size: 12px;
      font-style: italic;
      opacity: 0.6;
    }

    .our_team_container {
      cursor: pointer;
    }

    .our_team_container:hover .staff_fullname{
      opacity: 1;
    }

    .staff_card_dp {
      width: 40%;
      height: 100%;
      padding: 10px 20px!important;
      /*background: blue;*/
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      align-items: center;
    }


    .staff_card_dp_circle {
      margin-top: -50px;
      width: 25vh;
      height: 25vh;
      /*background: blue;*/
      z-index: 99;
      border-radius: 50%;
    }

    .staff_card_info {
      width: 60%;
      height: 100%;
      /*background: red;*/
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding: 40px 25px;
    }

    .staff_card_info div {
      margin-bottom: 15px;
    }

    #staff_name {
      font-family: Avant Garde, Avantgarde, Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
      font-size: 30px; 
      font-style: normal; 
      font-variant: normal; 
      font-weight: 650; 
      line-height: 18.5667px;
      padding-bottom: 15px;
      border-bottom: 0.05em solid #d4af37;
      color: #d4af37;
    }

    #staff_email {
      font-size: 15px;
      font-style: italic;
    }

    #staff_fullname {
      font-size: 20px;
      font-weight: bold;
      opacity: 0.6;
    }

    #register_date {
      margin-top: 40px;
      font-size: 15px;
      font-style: italic;
      opacity: 0.6;
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
            <div style="background: #d4af37;color: white;">INFO</div>
            <div onclick="viewGalleries('{{ $result['company_id'] }}','{{ $result['company_name']}}')">GALLERY</div>
            <div onclick="viewPackages('{{ $result['company_id'] }}','{{ $result['company_name']}}')">PACKAGES</div>
            <div onclick="viewReviews('{{ $result['company_id'] }}','{{ $result['company_name']}}')">REVIEWS</div>
            <div onclick="contactUs('{{ $result['company_id'] }}','{{ $result['company_name']}}')">CONTACT US</div>
          </div>
          <div class="content_company_content">
            
            <h3>{{ $result['company_name'] }}</h3> <span><em>({{ $result['company_ssm'] }})</em></span><br><br>

            <p>{{ $result['company_address'] }}</p>
            <p><i class="fas fa-phone"></i> &nbsp&nbsp&nbsp{{ $result['company_contact'] }}</p>
            <p><i class="fas fa-envelope"></i> &nbsp&nbsp&nbsp{{ $result['company_email'] }}</p>
            <p>
              @if($result['company_website'] == '')

                <i class="fas fa-globe"></i> &nbsp&nbsp&nbspUnavailable

              @else

                <a href="http://{{ $result['company_website'] }}" target="_blank" class="a_std">
                <i class="fas fa-globe"></i> &nbsp&nbsp&nbsp{{ $result['company_website'] }}</a>

              @endif
            </p>
            <br><br>
            <div class="tags-space">
              @foreach($tag_list as $tag)
                <span class="tags">#{{ $tag['category']['cc_title'] }}</span>
              @endforeach
            </div>
            <br><br>
            <div style="margin-top: 20px;">
              <h4>Our Team</h4>
            </div>
            <br>
            <div style="display: flex;flex-direction: row;justify-content: flex-start;">
              @foreach($staff_list as $staff)
              <div class="our_team_container" data-id="{{ $staff['id'] }}">

              @if($staff['dp'] == '')
              <div class="our_team_dp" style="background: url('{{ asset('myasset/img/default.jpeg') }}');background-position: center;background-size: cover;"></div>
              @else
              <div class="our_team_dp" style="background: url('{{ asset('storage/'.$staff['dp']) }}');background-position: center;background-size: cover;"></div>
              @endif

                <div class="staff_fullname">{{ $staff['fullname'] }}</div>
                <div class="staff_email">{{ $staff['email'] }}</div>
              </div>
              @endforeach
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="staff_info_container">
      <div class="staff_info_container_child">
        <div class="staff_card_dp">
          <div class="staff_card_dp_circle" id="staff_avatar">
          </div>
        </div>
        <div class="staff_card_info">
          <div id="staff_name">kamarul</div>
          <div id="staff_email">kamarul@gmail.com</div>
          <div id="staff_fullname">Muhammad Kamarul bin Ahmad Sabar</div>
          <div id="staff_phone" style="color: green;">0133453784</div>
          <div id="register_date">Registered on <span id="reg_date">12 Nov, 2011</span></div>
        </div>
      </div>
    </div>

    <div class="ssk-sticky ssk-left ssk-center ssk-lg">
        <a href="" class="ssk ssk-facebook"></a>
        <a href="" class="ssk ssk-twitter"></a>
        <a href="" class="ssk ssk-linkedin"></a>
        <a href="" class="ssk ssk-google-plus"></a>
        <a href="" class="ssk ssk-pinterest"></a>
    </div>


    @include('templates.footer')

    <script type="text/javascript" src="{{ asset('myasset/socialsharekit/dist/js/social-share-kit.js') }}"></script>
 
    <script>

      SocialShareKit.init();

      $(document).on('mouseup',':not(.staff_info_container)',function (e){

        var container = $(".staff_info_container");

        if (!container.is(e.target) && container.has(e.target).length === 0){

          container.fadeOut('fast');
          
        }
      });

      $('.our_team_container').each(function(){

        var otc = $(this);

        otc.click(function(){

          var uid = otc.data('id');
          var url = '{{ url("/staffinfo") }}';
          var token = '{{ csrf_token() }}';

          $.post(url,{_token:token,uid:uid},function(data){

            var obj = JSON.parse(data);

            var name = $('#staff_name').html(obj.name);
            var email = $('#staff_email').html(obj.email);
            var fullname = $('#staff_fullname').html(obj.fullname);
            var phone = $('#staff_phone').html(obj.phone);
            var reg_date = $('#register_date').html(obj.created);

            if(obj.dp != ''){

              var staff_avatar = '{{ asset("storage/") }}' + '/' + obj.dp;
              // alert(staff_avatar);

              $('#staff_avatar').css('background-image', 'url(' + staff_avatar + ')');
              $('#staff_avatar').css('background-position','center');
              $('#staff_avatar').css('background-size','cover');  

            }else{

              var staff_avatar = '{{ asset("myasset/img/default.jpeg") }}';
              // alert(staff_avatar);

              $('#staff_avatar').css('background-image', 'url(' + staff_avatar + ')');
              $('#staff_avatar').css('background-position','center');
              $('#staff_avatar').css('background-size','cover');  

            }

               

            $('.staff_info_container').fadeToggle('fast');

          });

        });

      });

      function viewGalleries(vendorID,vendorName){
        
        var url = '{{ url("/vendor") }}'+ '/' + vendorName.split(' ').join('_')+'/gallery/'+vendorID;
        
        window.location.replace(url);

      }
      function viewPackages(vendorID,vendorName){

        var url = '{{ url("/vendor") }}'+ '/' + vendorName.split(' ').join('_')+'/packages/'+vendorID;
        
        window.location.replace(url);

      }
      function contactUs(vendorID,vendorName){
        var url = '{{ url("/vendor") }}'+ '/' + vendorName.split(' ').join('_')+'/contactus/'+vendorID;
        
        window.location.replace(url);
      }

      function viewReviews(vendorID, vendorName){
        var url = '{{ url("/vendor") }}' + '/' + vendorName.split(' ').join('_')+'/review/'+vendorID;

        window.location.replace(url);
      }
    </script>
</body>
</html>