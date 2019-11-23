
<!DOCTYPE html>
<html>
<head>
	<title>{{ $result['company_name'] }} | Packages</title>
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
      /*background: yellow;*/
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
      flex-direction: column;
      justify-content: flex-start;
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

    .company_logo_mini {
      border-radius: 50%;
      border: 0.05em solid white;
      height: 30px;
      width: 30px;
      margin: 0 3px;
    }

    .company_name {
      font-size: 12px;
      opacity: 0.7;
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

      .package_cards {
        position: relative;
        height: 330px!important;
        width: 100%!important;
        border-radius: 2px;
        -moz-box-shadow: 0 0 6px #888;
        -webkit-box-shadow: 0 0 6px#888;
        box-shadow: 0 0 4px #888;
        margin-bottom: 20px;
        margin-right: 0!important;
        display: flex;
        flex-direction: column;
      }
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
      width: 100%;
      padding: 8vh 70px;
      margin-top: 3%;
      display: flex;
      flex-flow: row wrap;
      justify-content: space-around;
      /*background-color: blue;*/
    }

    .vendor_title_info h1 {
      color: white;
      text-shadow: 5px 5px 10px black!important;
    }

    .package_cards {
      position: relative;
      height: 330px!important;
      width: 30%;
      border-radius: 2px;
      -moz-box-shadow: 0 0 6px #888;
      -webkit-box-shadow: 0 0 6px#888;
      box-shadow: 0 0 4px #888;
      margin-right: 15px;
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
    }

    #p_title {
      padding: 10px 15px;
      font-family: Avant Garde, Avantgarde, Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
      font-size: 18px; 
      font-style: normal; 
      font-variant: normal; 
      font-weight: 550; 
      line-height: 18.5667px;
    }

    #sub_p_title {
      font-family: Avant Garde, Avantgarde, Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
      font-size: 14px; 
      font-style: italic; 
      font-variant: normal; 
      font-weight: 500; 
      line-height: 18.5667px;
      color: green;
    }

    #p_detail {
      position: absolute;
      top: 10%;height: 85%;
      width:100%;
      z-index: 70;
      background: rgba(255,255,255,0.7);
      padding: 30px 15px;
    }

    #p_company {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }

    #p_company_info {
      padding: 0 15px;
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      align-items: center;
    }

    #btn_book1 {
      width: 18px;
      background: linear-gradient(to bottom right,#fff 50%,#fff 0%,#27ae60 50%,#27ae60 0%);
      -moz-background: linear-gradient(to bottom right,#fff 50%,#fff 0%,#27ae60 50%,#27ae60 0%);
      height: 100%;
      z-index: 91;
    }

    #btn_book2 {
      width: 100px;
      background: #27ae60;
      color: white;
      font-weight: bold;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }

    .p_book_btn {
      display: flex;
      flex-direction: row;
      justify-content: flex-end;
      align-items: center!important;
      /*background: yellow;*/
      height: 100%;
      opacity: 0.7;
      cursor: pointer;
      z-index: 99;
    }

    .p_book_btn:hover {
      opacity: 1;
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
            <div style="background: #d4af37;color: white;" onclick="viewPackages('{{ $result['company_id'] }}','{{ $result['company_name']}}')">PACKAGES</div>
            <div onclick="viewReviews('{{ $result['company_id'] }}','{{ $result['company_name']}}')">REVIEWS</div>
            <div onclick="contactUs('{{ $result['company_id'] }}','{{ $result['company_name']}}')">CONTACT US</div>
          </div>
          <div class="content_company_content">

            @foreach($p_result as $p)
            <div class="package_cards">
              <div style="height: 20%;width: 100%;background: white;z-index: 71;display: flex;flex-direction: column;justify-content: space-between;" id="p_title">
              <div>{{ $p['package_title'] }}</div>
              <div style="width: 100%;display: flex;flex-direction: row;justify-content: space-between;" id="sub_p_title">
                <div>RM{{ $p['package_price'] }}</div>
                @if($p['package_pax'] == 0)
                  <div></div>
                @else
                  <div>({{ $p['package_pax'] }} pax)</div>
                @endif
                
              </div>
            </div>
              <div style="height: 75%;width: 100%;background: url('{{ asset('myasset/img/back.jpg') }}');background-size: cover;background-position: center;"></div>
              <div style="height: 10%;width: 100%;z-index: 71;background: white" id="p_company">
                <div id="p_company_info">
                  <div class="company_logo_mini" style="background: url('{{ asset('storage/'.$p['company']['company_logo']) }}');background-position: center;background-size: cover;">
                  </div>
                  <div class="company_name">{{ $p['company']['company_name'] }}</div>
                </div>
                <div class="p_book_btn" data-pid="{{ $p['package_id'] }}" data-name="{{ $p['package_title'] }}">
                  <div id="btn_book1"></div>
                  <div id="btn_book2"> BOOK </div>
                </div>
              </div>
              <div style="" id="p_detail">
                {!! $p['package_detail_short'] !!}
              </div>
            </div>
            @endforeach
          </div>
          <div style="position: absolute;bottom: 0;width: 100%;">
            
             
          </div>
        </div>
      </div>
    </div>
    @include('templates.external_footer')
    <<div class="ssk-sticky ssk-left ssk-center ssk-lg">
        <a href="" class="ssk ssk-facebook"></a>
        <a href="" class="ssk ssk-twitter"></a>
        <a href="" class="ssk ssk-linkedin"></a>
        <a href="" class="ssk ssk-google-plus"></a>
        <a href="" class="ssk ssk-whatsapp"></a>
    </div>


    @include('templates.footer')
    <script type="text/javascript" src="{{ asset('myasset/socialsharekit/dist/js/social-share-kit.js') }}"></script>
    <script>


      $(".p_book_btn").each(function(){

        var th = $(this);

        th.on('click',function(e){

          e.stopPropagation();

          var package_id = th.data('pid');
          
          var url = "{{ url('/booking') }}" + "/" + package_id;  

          window.location.replace(url);       

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