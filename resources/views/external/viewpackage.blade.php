
<!DOCTYPE html>
<html>
<head>
	<title>Package | {{ $result['package_title'] }}</title>
   <meta name="page_site" content="savethedate-my.com">
   <meta name="page_language" content="English">
   <meta name="page_type" content="Package View">
   <meta name="page_title" content="Package | {{ $result['package_title'] }}">
   <meta name="page_content" content="Package Detail">
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

    .package_info {
      width: 68%;
      min-height: 100%;
      background: white;
      -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
      -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
      box-shadow: 1px 2px 10px rgba(0, 0, 0, .5);
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      padding: 25px 25px;
    }

    .tags-space {
      margin: 15px 0;
      display: flex;
      flex-flow: row wrap;    
    }     
    .tags {
      background: #888;
      color: #fff;
      padding: 4px 6px;
      font-size: 1.0em;
      border-radius: 5px;
      border: 0.1em solid #999;
      margin-right: 5px; 
      margin-bottom: 10px;     
      display: none;
    }

    .company_info {
      width: 30%;
      min-height: 20px!important;
      background: white;
      -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
      -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
      box-shadow: 1px 2px 10px rgba(0, 0, 0, .5);
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      padding: 25px 15px;
    }

    .company_logo_medium {
      border-radius: 50%;
      border: 0.05em solid white;
      height: 100px;
      width: 100px;
      margin: 0 3px;
    }

    @media (max-width: 600px){
      .result_container {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 20px 20px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: flex-start;
      }

      .package_info {
        width: 100%;
        min-height: 50%;
        background: white;
        -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
        -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        box-shadow: 1px 2px 10px rgba(0, 0, 0, .5);
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding: 20px 25px;
        margin-bottom: 15px;
      }

      .company_info {
        width: 100%;
        min-height: 20px!important;
        background: white;
        -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
        -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        box-shadow: 1px 2px 10px rgba(0, 0, 0, .5);
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 25px 15px;
      }
    }

    #book_now {
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

    #book_now:hover {
      -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
      -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
      box-shadow: 1px 2px 2px rgba(0, 0, 0, .5);
    }

    #ask_vendor {
      width: 100%;
      height: 50px;
      color: white;
      background: #d4ac0d;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
    }

    #ask_vendor:hover {
      -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
      -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
      box-shadow: 1px 2px 2px rgba(0, 0, 0, .5);
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
    <div style="background: rgba(230,230,230,0.8);min-height: 100vh;">
    <!-- Feature Section Start -->
    <div class="section-padding">
      <div class="big_container">
        <div class="result_container">
          <div class="package_info animated fadeIn fast">
            <div style="display: flex;flex-direction: row;width: 100%;justify-content: space-between;">
              <div onclick="back()" style="margin-bottom: 15px;cursor: pointer;">< Back</div>
              <div>

              </div>
            </div>
            
            <div style="height: 40px;padding-bottom: 15px;border-bottom: 0.05em solid #f1f1f1;">
              <h4>{{ $result['package_title'] }}</h4>
            </div>
            <div class="tags-space">
              @foreach($result['cpct_reverse'] as $cpct)
                <span class="tags animated faster">#{{ $cpct['category']['cc_title'] }}</span>
              @endforeach
            </div>
            <div style="padding: 20px 0!important;">
              {!! base64_decode($result['package_detail']) !!}
            </div>
          </div>
          <div class="company_info animated flipInX fast">
            <div style="display: flex;flex-direction: row;align-items: center;border-bottom: 0.05em solid #f1f1f1;width: 100%;margin-bottom: 20px;">
              @if($result['company']['company_logo'] == '')
              <div class="company_logo_medium" style="background: url('{{ asset('myasset/img/null.jpg') }}');background-position: center;background-size: cover;">
              </div>
              @else              
              <div class="company_logo_medium" style="background: url('{{ asset('storage/'.$result['company']['company_logo']) }}');background-position: center;background-size: cover;">
              </div>
              @endif                
              <div>
                <h5>{{ $result['company']['company_name'] }}</h5>
                <span><small><em>({{ $result['company']['company_ssm'] }})</em></small></span>
              </div>
            </div>
            <div style="width: 100%;margin-bottom: 20px;">
              <h4>RM{{ $result['package_price'] }}</h4>
              @if($result['package_pax'] != 0)
              <p>({{ $result['package_pax'] }} pax)</p>
              @endif
            </div>
            <div id="book_now">
              BOOK NOW
            </div>
            <div id="ask_vendor" onclick="contactUs('{{ $result['company']['company_id'] }}','{{ $result['company']['company_name']}}')">
              Ask {{ $result['company']['company_name'] }}
            </div>
          </div>
        </div>
        <div class="footer_result_container">
          
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

    <script>
      var APP_URL = '{{ url("/") }}';
      var LOGIN = '{{ route("login") }}';
      var REGISTER = '{{ route("register") }}';
    </script>
      
    @include('templates.footer')

    <script type="text/javascript" src="{{ asset('myasset/socialsharekit/dist/js/social-share-kit.js') }}"></script>

    <script>
      SocialShareKit.init();

      $('.tags').each(function(i){

        var tag = $(this);
        var time = 10;

        setTimeout(function(i){ 

          tag.addClass('bounceInLeft');
          tag.show();

        }, time*i); 
      });

      function back(){

        var url = '{{ url("/packages") }}';

        window.location.replace(url);
      }

      function viewVendors(vendorID,vendorName){
        
        var url = '{{ url("/vendor") }}'+ '/' + vendorName.split(' ').join('_')+'/'+vendorID;
        
        window.location.replace(url);

      }

      function contactUs(vendorID,vendorName){
        var url = '{{ url("/vendor") }}'+ '/' + vendorName.split(' ').join('_')+'/contactus/'+vendorID;
        
        window.location.replace(url);
      }

      $('#book_now').click(function(){

        var package_id = "{{ $result['package_id'] }}";

        var url = "{{ url('/booking') }}" + "/" + package_id;

        window.location.replace(url);
      });
    </script>
</body>
</html>