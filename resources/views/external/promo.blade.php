
<!DOCTYPE html>
<html>
<head>
	<title>Save The Date | Events</title>
	 @include('templates.header')


   <link rel="stylesheet" href="{{ asset('myasset/socialsharekit/dist/css/social-share-kit.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ asset('myasset/swiper/css/swiper.min.css') }}" type="text/css">
	 <style>
	  .btn-like {
	  	border: 1px solid #d4af37;
	  	border-radius: 3px;
	  	background: #fff;
	  	padding: 10px 20px;
	  	margin-right: 15px;
	  	cursor: pointer;
	  }
	  .btn-like:hover {
	  	background: #eee;
	  }
	  .btn-search {
	  	padding: 10px 20px;
	  	background: #d4af37;
	  	border: none;
	  	border-radius: 2px;
	  	cursor: pointer;
	  	color: #fff;
      width: 100%;
	  }
	  .btn-search:hover {
        background:#bb9928;
	  	opacity: 0.9;
	  }
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
      	/*background-image: url("{{asset('myasset/img/bg1.jpg')}}");*/
      	background-repeat: no-repeat;
        background-attachment: fixed;
      	background-size: cover;
      	height: 250px !important;
      }
      #query-input {
      	padding: 10px 20px;
      	border-radius: 2px;
      	border: 1px solid #d4af37;
      	width: 100%;
      }
      .search-engine-panel {
      	display: flex;
        flex-direction: row;
      	justify-content: center;
      	width: 100%;
      	padding: 3% 10%;
      	margin-top: 10vh;
        transition: padding 0.5s;
        /*background: pink;*/
      }
      .search-engine-panel-footer {
      	display: flex;
      	justify-content: center;
      }
      .sep-choose {
      	display: flex;
      }
      .sep-search {
      	width: 40%;
      	padding-right: 20px;
      }
      .search-result-panel {
        box-sizing: border-box;
        /*background: green;*/
      	margin: 1% 5% 10% 5%;
        height: auto;
      	display: flex;
        flex-direction: row;
      	justify-content: center;
        transition: margin 0.5s;
      }

      .search_result_list {
        width: 80%;
        padding-right: 5%;
        transition: padding-right 0.5s;
        /*background: blue;*/
      }

      .ads_panel {
        width: 20%;
        /*background: yellow;*/
      }

      .swiper-container {
        width: 300px;
        height: 250px;
        /*background: blue;*/
        /*position: fixed;*/
      }

      .swiper-image {
        height: 100%!important;
        width: 100%!important;
      }

      .swiper-button-next {
        color: #fff;
        display: none;
      }

      .swiper-button-prev {
        color: #fff;
        display: none;        
      }

      .event_card {
        width: 100%;
        background: #fff;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        /*border-radius: 5px;*/
      }

      .event_card_date_label {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        /*align-items: center;*/
        padding: 10px 80px;
        margin-bottom: 20px;
      }

      .event_card_date {
        width: 15%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        padding: 20px 10px;
      }

      .event_card_date > div:nth-child(1){
        font-size: 40px;
        opacity: 0.5;
        margin: 0 0 15px 0!important;
        transition: margin 0.5s, font-size 0.5s;
      }

      .event_card_date > div:nth-child(2){
        font-size: 20px;
        opacity: 0.5;
      }

      .event_card_content {
        width: 85%;
        padding: 3% 15px!important;
        border-left: 0.05em solid #ffecb3;
      }

      .event_card_content > div:nth-child(1){
        margin-bottom: 20px;
      }

      .event_card_content > div:nth-child(1) > a {
        font-size: 30px;
        line-height: 1.3em;
        margin-bottom: 20px;
        cursor: pointer;
        color: #546e7a;
      }

      .event_card_content > div:nth-child(1) > a:hover {
        color: #c2185b;
      }

      .event_card_content > div:nth-child(2){
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        flex-wrap: wrap;
        margin-bottom: 20px;
      }

      .date_location {
        padding: 5px 10px;
        border: 0.05em solid #f3f3f3;
        margin-right: 10px;
      }

      .event_card_content > div:nth-child(3){

      }

      .result_container_empty {
        min-height: 40vh;
      }

      .search_result_label {
        opacity: 0.7;
      }

      @media (max-width: 600px){
        .search-engine-panel {
          display: flex;
          flex-direction: column;
          justify-content: center;
          width: 100%;
          padding: 20px 5px;
          margin-top: 15vh;
          /*background: blue;*/
        }

        .sep-search {
          width: 100%;
          padding-right: 0!important;
          margin-bottom: 15px;
        }

        .search-engine-panel-footer {
          display: flex;
          flex-direction: column;
          justify-content: center;
          width: 100%;
          /*background: green;*/
        }

        .search-result-panel {
          box-sizing: border-box;
          margin: 0% 1% 1% 1%!important;
          height: auto;
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
        }

        .search_result_list {
          width: 100%!important;
          /*background: blue;*/
          padding-right: 0%!important;   
        }

        .ads_panel {
          width: 100%!important;
          /*background: yellow;*/
        }

        .event_card {
          width: 100%;
          background: #fff;
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
          align-items: center;
        }

        .event_card_date {
          width: 100%;
          display: flex;
          flex-direction: row;
          justify-content: center;
          /*align-items: center;*/
          padding: 10px 20px;
        }

        .event_card_date_label {
          width: 100%;
          display: flex;
          flex-direction: row;
          justify-content: center;
          /*align-items: center;*/
          padding: 10px 20px;
        }

        .event_card_date > div:nth-child(1){
          font-size: 20px;
          opacity: 0.5;
          margin: 0 5px 0 0!important;
        }

        .event_card_date > div:nth-child(2){
          font-size: 20px;
          opacity: 0.5;
        }

        .event_card_content {
          width: 100%;
          padding: 10% 5%!important;
          border-left: none;
          border-top: 0.05em solid #dcdcdc!important;
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

  			<div class="search-engine-panel">
  				<div class="sep-search">
  					<input type="text" name="query" placeholder="look by name etc" id="query-input" />
  					<i class="fa fa-search icon"></i>
  				</div>                            
  				<div class="search-engine-panel-footer">
  					<button class="btn-search" id="search_event">Search Events</button>
  				</div>
  			</div> 

        <div class="search-result-panel">
          <div class="search_result_list">
            <!-- repeated section -->
            <div class="event_card">
              <div class="event_card_date_label animated fadeInLeft fast">

                <span class="search_result_label">
                  {{ $event_count }} result(s) found 
                  @if($query != '')

                  with keyword <b>{{ $query }}</b>

                  @endif
                </span>

              </div>
            </div>
            @if($event_count > 0)

              @foreach($event_data as $event)

                <div class="event_card">
                  <div class="event_card_date animated fadeInLeft fast">
                    <div>{{ $event['big_date_num'] }}</div>
                    <div>{{ $event['big_date_text'] }}</div>
                  </div>
                  <div class="event_card_content">
                    <div class="animated fadeInRight fast"><a href="{{ $event['url'] }}" target="_blank">{{ $event['ee_title'] }}</a></div>
                    <div>
                      <span class="date_location">{{ $event['period'] }}</span>
                      <span class="date_location">{{ $event['location'] }}</span>
                    </div>
                    <div class="animated fadeInDown fast">
                      <p>{{ $event['description'] }}</p>
                    </div>
                  </div>
                </div>

              @endforeach

            @else

            <div class="result_container_empty">
              
            </div>

            @endif
            <!-- end repeated section -->
          </div>
          <div class="ads_panel">

            @if($event_count > 0)
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    @foreach($event_data as $e)

                    <div class="swiper-slide">
                      <a href="{{ $e['url'] }}" target="_blank">
                        <img src="{{ asset('storage/'.$e['poster']) }}" class="swiper-image" />
                      </a>
                    </div>


                    @endforeach


                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>

            @endif
          </div>
        </div>

        @include('templates.external_footer')

    <div class="ssk-sticky ssk-left ssk-center ssk-lg">
        <a href="" class="ssk ssk-facebook"></a>
        <a href="" class="ssk ssk-twitter"></a>
        <a href="" class="ssk ssk-linkedin"></a>
        <a href="" class="ssk ssk-google-plus"></a>
        <a href="" class="ssk ssk-whatsapp"></a>
    </div>

    <script>
      var APP_URL = '{{ url("/") }}';
      var LOGIN = '{{ route("login") }}';
      var REGISTER = '{{ route("register") }}';
    </script>

    @include('templates.footer')

    <script type="text/javascript" src="{{ asset('myasset/socialsharekit/dist/js/social-share-kit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('myasset/swiper/js/swiper.min.js') }}"></script>
    <script>
      SocialShareKit.init();

        var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        autoplay: {
          delay: 3000,
        },
      });

      $('#search_event').click(function(){

        var query = $('#query-input').val();
        var url = APP_URL + '/events?search=' + query;

        window.location.replace(url);

      });

    </script>
</body>
</html>