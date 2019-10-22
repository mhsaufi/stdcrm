
<!DOCTYPE html>
<html>
<head>
	<title>{{ $result['company_name'] }} | Gallery</title>
	 @include('templates.header')

  <script src="{{asset('myasset/js/jquery-min.js')}}"></script>
  <!-- <link rel="stylesheet" href="{{asset('myasset/justified/jquery.justified.css')}}"/> -->
  <script src="{{asset('myasset/unitegallery-master/dist/js/unitegallery.min.js')}}"></script>
  <link rel='stylesheet' href="{{asset('myasset/unitegallery-master/dist/css/unite-gallery.css')}}"/> 
  <script src="{{asset('myasset/unitegallery-master/dist/themes/tiles/ug-theme-tiles.js')}}"></script>
  <link rel='stylesheet' href="{{asset('myasset/unitegallery-master/dist/themes/default/ug-theme-default.css')}}"/>
  <link rel='stylesheet'  href="{{asset('myasset/unitegallery-master/dist/skins/alexis/alexis.css')}}"/>
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
            <div style="background: #d4af37;color: white;">GALLERY</div>
            <div onclick="viewPackages('{{ $result['company_id'] }}','{{ $result['company_name']}}')">PACKAGES</div>
            <div onclick="viewReviews('{{ $result['company_id'] }}','{{ $result['company_name']}}')">REVIEWS</div>
            <div onclick="contactUs('{{ $result['company_id'] }}','{{ $result['company_name']}}')">CONTACT US</div>
          </div>
          <div class="content_company_content">
                
              @if($count == 0)

                <span>No gallery yet</span>

              @else
                <div id="gallery" style="display:none;">
                @foreach($galleries as $gallery)

                <img alt="Gallery" src="{{ asset('storage/'.$gallery['att_path']) }}"
                  data-image="{{ asset('storage/'.$gallery['att_path']) }}"
                  data-description="Image 1 Description">

                @endforeach
                </div>
              @endif
              
            
            
          </div>
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
      $("#gallery").unitegallery({
        lightbox_type: "compact",
        tiles_type: "justified",    //example how to change only skin for slider bullets
      });

      function viewVendors(vendorID,vendorName){
        
        var url = '{{ url("/vendor") }}'+ '/' + vendorName.split(' ').join('_')+'/'+vendorID;
        
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