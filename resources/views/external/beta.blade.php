
<!DOCTYPE html>
<html>
<head>
	<title>Vendors</title>
	 @include('templates.header')

   <link rel="stylesheet" type="text/css" href="{{asset('myasset/select2/dist/css/select23.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('myasset/std_rating/std_rating.css')}}">

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
    	background-image: url("{{asset('myasset/img/bgg.jpg')}}");
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
      flex-wrap: wrap;
      justify-content: flex-start;
    	width: 100%;
    	padding: 2% 10%;
      border-bottom: 0.05em solid grey;
      /*background: blue;*/
      /*margin: 0 10%;*/
    }

    .search-engine-panel div {
      margin-right: 15px;
    }

    .search-result-panel {
    	padding: 5% 10%;
    	display: flex;
    	justify-content: center;
    	flex-wrap: wrap;
    	background: rgba(255,255,255,1);
      border-bottom: 1px solid #d4af37;
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

    .vendor_cards {
      position: relative;
      width: 380px;
      height: 250px;
      min-height: 220px;
      /*background: yellow;*/
      margin: 15px 10px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      border-radius: 5px;
      -moz-box-shadow: 0 0 6px #888;
      -webkit-box-shadow: 0 0 6px#888;
      box-shadow: 0 0 4px #888;
      transition: margin-top 0.1s;
    }

    .vendor_cards_info {
      width: 100%;
      height: 80%;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      padding: 15px 15px;
    }

    .vendor_cards:hover {
      -moz-box-shadow: 0 0 5px #888;
      -webkit-box-shadow: 0 0 5px#888;
      box-shadow: 1px 1px 4px #888;
      margin-top: 5px;
    }

    .company_logo_2 {
      position: absolute;
      border-radius: 50%;
      border: 3px solid white;
      height: 80px;
      width: 80px;
      background: blue;
      bottom: 4%;
      right: 6%;
      z-index: 81;
    }

    .company_logo_base_2 {
      position: absolute;
      border-radius: 50%;
      border: 3px solid white;
      height: 80px;
      width: 80px;
      background: blue;
      bottom: 4%;
      right: 6%;
      background: white;
      z-index: 80;
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

    .form_std {
        padding: 5px 10px!important;
        height: 35px!important;
        border: 0.01em solid #cdcdcd;
        margin-right: 25px;
      }

      #std_search_btn {
        padding: 5px 20px;
        background: #d4af37;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        opacity: 0.7;
        margin-top:28px;
      }

      #std_search_btn:hover {
        opacity: 0.9;
      }

      .above_2 {
        justify-content: space-between;
      }

      .below_2 {
        justify-content: flex-start;
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
    		<div class="search-engine-panel">
            <div>
                <label>By Category</label>
                <br>
                <select class="form_std" id="select_company_category" multiple="multiple" style="width: 300px!important;">
                  @foreach($category_data as $category)
                    <option value="{{ $category['cc_id'] }}">{{ $category['cc_title'] }}</option>
                  @endforeach
                </select>
            </div>
            <div>
              <label>By Vendors name</label>
              <br>
              <select class="form_std" id="select_company_name" multiple="multiple" style="width: 300px!important;">
                @foreach($result as $r)
                  <option value="{{ $r['company_id'] }}">{{ $r['company_name'] }}</option>
                @endforeach
              </select>
            </div>
            <div><button id="std_search_btn">SEARCH &nbsp&nbsp<i class="fas fa-search"></i></button></div>
        </div>	
        <br>
        <p style="margin-left: 200px;margin-top: 20px;">{{ $p_count }} result(s) found</p> 	
    	</div>

      <div class="big_container">
        @if($p_count > 2)
        <div class="result_container above_2">
        @else
        <div class="result_container below_2">
        @endif
          
          @foreach($result as $r)
          <div class="vendor_cards" onclick="viewVendors('{{ $r['company_id'] }}','{{ $r['company_name']}}')">
            <div class="vendor_cards_info" style="background: url('{{ asset('myasset/img/back.jpg') }}');background-size: cover;">
              <div style="height: 25%;">
                
              </div>
              <div>
                <h4>{{ $r['company_name'] }}</h4>
              </div>
              <div style="width: 80%;">
                <p>{{ $r['company_address'] }}</p>
              </div>
            </div>
            <div style="width: 100%;height: 20%;background: white;display: flex;flex-direction: row;
            justify-content: flex-start;align-items: center;padding-left: 10px;">
              @php

                $rate = $r['rating'];
                $unrate = 5-$rate;

                for($i = 0;$i < $rate;$i++){

                  echo '<i class="fas fa-star star_rated" style="margin-right: 2px;"></i>';
                }

                for($i = 0;$i < $unrate;$i++){

                  echo '<i class="fas fa-star star_unrated" style="margin-right: 2px;"></i>';
                }

              @endphp
            </div>
            @if($r['company_logo'] == '')
            <div class="company_logo_2" style="background: url('{{ asset('myasset/img/null.jpg') }}');background-position: center;background-size: cover;"></div>
            @else
            <div class="company_logo_2" style="background: url('{{ asset('storage/'.$r['company_logo']) }}');background-position: center;background-size: cover;"></div>
            @endif
            
            <div class="company_logo_base_2"></div>
          </div>
          @endforeach

        </div>
        <div class="footer_result_container">
        
        </div>
      </div>
    </div>

    <script>
      var APP_URL = '{{ url("/") }}';
      var LOGIN = '{{ route("login") }}';
      var REGISTER = '{{ route("register") }}';
    </script>
      
    @include('templates.footer')

    <script src="{{asset('myasset/select2/dist/js/select2.js')}}"></script>
    <script>
      $('#select_company_category').select2();
      $('#select_company_name').select2();

      function viewVendors(vendorID,vendorName){
        
        var url = '{{ url("/vendor") }}'+ '/' + vendorName.split(' ').join('_')+'/'+vendorID;
        
        window.location.replace(url);

      }
    </script>
</body>
</html>