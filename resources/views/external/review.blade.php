
<!DOCTYPE html>
<html>
<head>
	<title>{{ $result['company_name'] }} | Review</title>
	 @include('templates.header')
   <link rel="stylesheet" type="text/css" href="{{asset('myasset/std_rating/std_rating.css')}}">
  <script src="{{asset('myasset/js/jquery-min.js')}}"></script>

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
      padding: 8vh 70px;
    }

    .vendor_title_info h1 {
      color: white;
      text-shadow: 5px 5px 10px black!important;
    }

    .review_main_container {
      /*margin-top: 15px;*/
      width: 100%;
      min-height: 100px;
      /*background: blue;*/
    }

    #review_list_container {
      margin-top: 20px;
      padding: 15px 0;
      width: 100%;
      min-height: 100px;
      /*background: pink;*/
    }

    .review_data_card {
      position: relative;
      padding: 15px;
      width: 100%;
      min-height: 50px;
      margin-bottom: 15px;
      background: #f9f9f9;
      border: 0.05em solid #dcdcdc;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }

    .review_data_card_header {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      height: 10%;
      font-size: 14px;
      font-style: italic;
      font-weight: 600;
      opacity: 0.8;
    }

    .review_data_card_rating {
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      align-items: center;
      width: 20%;
      padding: 15px 0;
    }

    .review_data_card_review {
      position: inherit;
      padding: 15px 0;
      width: 100%;
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

      .package_cards {
        position: relative;
        height: 330px!important;
        width: 80%!important;
        border-radius: 2px;
        -moz-box-shadow: 0 0 6px #888;
        -webkit-box-shadow: 0 0 6px#888;
        box-shadow: 0 0 4px #888;
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
      }

      .review_data_card_rating {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        padding: 15px 0;
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
            <div style="background: #d4af37;color: white;")>REVIEWS</div>
            <div onclick="contactUs('{{ $result['company_id'] }}','{{ $result['company_name']}}')">CONTACT US</div>
          </div>
          <div class="content_company_content">
            <div class="review_main_container">

              @if(Route::has('login')) 

                @auth

                  <div>
                    @if($review_done == 0)

                      <p>Leave your review  and rating: </p>
                      <div class="shining_star_container">
                          <i class="fas fa-star shining_star" id="star_1"></i>
                          <i class="fas fa-star shining_star" id="star_2"></i>
                          <i class="fas fa-star shining_star" id="star_3"></i>
                          <i class="fas fa-star shining_star" id="star_4"></i>
                          <i class="fas fa-star shining_star" id="star_5"></i>
                      </div>
                      <input type="hidden" name="rating" id="rating_value"/>
                      <textarea class="form-control" id="review_value"></textarea>
                      <button class="std-btn-plain" id="leave_review" style="cursor: pointer;">Leave A Review</button>

                    @else

                      <p>You already leave your review</p>

                    @endif
                  </div>

                @else
                  <form action="{{ url('review') }}" method="POST">
                    @csrf
                    <input type="hidden" name="company_id" value="{{ $result['company_id']}}">
                    <input type="hidden" name="company_name" value="{{ $result['company_name'] }}">
                    <button class="std-btn-plain" id="login_to_review" type="submit">Login to review</button>
                  </form>
                @endauth
              @endif

              <div id="review_list_container">
                @foreach($review_data as $review)

                  <div class="review_data_card">
                      <div class="review_data_card_header">
                        <div>{{ $review['review_user'] }}</div>
                        <div>{{ $review['created_at_human'] }}</div>
                      </div>

                      <div class="review_data_card_rating">
                        <div>
                          @php

                            $rate = $review['review_rate'];
                            $unrate = 5-$rate;

                            for($i = 0;$i < $rate;$i++){

                              echo '<i class="fas fa-star star_rated"></i>';
                            }

                            for($i = 0;$i < $unrate;$i++){

                              echo '<i class="fas fa-star star_unrated"></i>';
                            }

                          @endphp
                        </div>
                      </div>

                      <div class="review_data_card_review">
                        "{{ $review['review_text'] }}"
                      </div>

                  </div>

                @endforeach
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    @include('templates.footer')

     <script src="{{asset('myasset/std_rating/std_rating.js')}}"></script>

    <script>

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
      }

      $('#login_to_review').click(function(){

        var ID = "'{{ $result['company_id'] }}'";
        var Name = "{{ $result['company_name']}}";
        var url = "{{ url('/review') }}";
        var token = "{{ csrf_token() }}";

        $.post(url,{_token:token,company_id:ID,company_name:Name},function(result){

        });

      });

      $('#leave_review').click(function(){

        var rate = $('#rating_value').val();
        var review = $('#review_value').val();
        var company_id = '{{ $result["company_id"] }}';
        var token = '{{ csrf_token() }}';
        var url = '{{ url("/leavereview") }}';

        $.post(url,{_token:token,rate:rate,review:review,company:company_id},function(result){

          location.reload();

        });

      });
    </script>
</body>
</html>