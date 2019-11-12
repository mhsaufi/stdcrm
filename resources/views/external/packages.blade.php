
<!DOCTYPE html>
<html>
<head>
  <title>Packages</title>
   @include('templates.header')

   <link rel="stylesheet" type="text/css" href="{{asset('myasset/select2/dist/css/select23.css')}}">

   <style>
    .navbar-expand-lg .navbar-nav .nav-link {
      color: white!important;
    }

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
      /*background-image: url("{{asset('myasset/img/bgg.jpg')}}");*/
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
      justify-content: space-between;
      margin: 0 10%;
      min-height: 50px;
      /*background: blue;*/
    }

    .search-engine-panel > div {
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      width: 100%!important;
      margin-bottom: 20px;
      /*background: pink;*/
    }

    .search-result-panel {
      padding: 20px 15px;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      background: rgba(255,255,255,1);
    }

    .big_container_o {
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
      width: 100%;
      min-height: 10%;
      margin: 0 0;
      padding: 2% 10%;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-around;
      /*background: blue;*/
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

    .forms_std {
      width: 100%!important;
    }

    .select2-container .select2-selection--multiple {
        min-width: 80%!important;
        max-width: 80%!important;
    }

    #std_search_btn {
      position: absolute;
      bottom: 0;
      padding: 8px 20px;
      background: #4caf50;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      opacity: 1;
      width: 200px!important;
    }

    #std_search_btn:hover {
      /*opacity: 0.9;*/
      background: #7cb342;
    }

    .package_cards {
      position: relative;
      height: 330px!important;
      width: 350px;
      border-radius: 2px;
      -moz-box-shadow: 0 0 6px #888;
      -webkit-box-shadow: 0 0 6px#888;
      box-shadow: 0 0 4px #888;
      /*margin-right: 15px;*/
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
      z-index: 98;
    }

    #p_title {
      padding: 10px 15px;
      font-family: Avant Garde, Avantgarde, Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
      font-size: 18px; 
      font-style: normal; 
      font-variant: normal; 
      font-weight: 650; 
      line-height: 18.5667px;
    }

    #p_price {
      font-family: Avant Garde, Avantgarde, Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
      font-size: 18px; 
      font-style: normal; 
      font-variant: normal; 
      font-weight: 650; 
      line-height: 18.5667px;
      color: #d4af37;
    }

    #sub_p_title {
      font-family: Avant Garde, Avantgarde, Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
      font-size: 14px; 
      font-style: italic; 
      font-variant: normal; 
      font-weight: 500; 
      line-height: 18.5667px;
      color: #d4af37;
    }

    #p_detail {
      position: absolute;
      top: 15%;height: 85%;
      width:100%;
      z-index: 70;
      background: rgba(255,255,255,0.6);
      padding: 30px 15px;
    }

    .package_cards:hover #p_detail {
      background: rgba(255,255,255,0.7)!important;
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
      z-index: 91;
    }

    .p_book_btn {
      display: flex;
      flex-direction: row;
      justify-content: flex-end;
      align-items: center!important;
      /*background: yellow;*/
      height: 100%;
      opacity: 1;
      cursor: pointer;
      z-index: 99;
    }

    .p_book_btn:hover {
      opacity: 0.9;
    }

    .above_2 {
      justify-content: space-between;
    }

    .below_2 {
      justify-content: flex-start;
    }

    .below_2 > .package_cards {
      margin-right: 15px;
    }

    @media (max-width: 700px){
      .big_container_o {
        margin-bottom: 25px;
      }

      #std_search_btn {
        width: 100%!important;
      }

      .search-engine-panel {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 100%;
        margin: 0!important;
        height: 250px;
        /*background: blue;*/
        padding: 0 10%;
      }

      .search-engine-panel > div {
        width: 100%!important;
        /*background: pink;*/
        border-radius: 3px;
      }

      .forms_std {
        border: 0.01em solid #cdcdcd;
        width: 100%!important;
      }

      .select2-container .select2-selection--multiple {
          min-width: 100%!important;
          max-width: 100%!important;
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

    <!-- Feature Section Start -->
    <div class="section-padding">
      <div class="big_container_o bg animated fadeInDown faster">
        <div style="padding: 3% 10% 5px 10%;">
          <p>Browse for all available packages on our site offered by our vendors. All of our vendors comprises of best reviewed companies 
          to make sure your wedding happening the way you wished for</p>
        </div>
        <div class="search-engine-panel">   
          <div>
              <label>By Category</label>
              <select class="forms_std" id="select_company_category" multiple="multiple">
                @foreach($category_data as $category)
                  <option value="{{ $category['cc_id'] }}">{{ $category['cc_title'] }}</option>
                @endforeach
              </select>
          </div>
          <div>
            <label>By Vendors name</label>
            <select class="forms_std" id="select_company_name" multiple="multiple">
              @foreach($result as $r)
                <option value="{{ $r['company_id'] }}">{{ $r['company_name'] }}</option>
              @endforeach
            </select>
          </div>
          <div>
            <button id="std_search_btn">Search &nbsp&nbsp<i class="fas fa-search"></i></button>
          </div>
        </div>
        <p style="margin-left: 10%">{{ $p_count }} result(s) found</p>   
      </div>
      <div class="big_container_o">
        @if($p_count > 0)
          @if($p_count > 2)
          <div class="result_container above_2">
          @else
          <div class="result_container below_2">
          @endif
          
            @foreach($p_result as $p)
            <div class="package_cards" data-pid="{{ $p['package_id'] }}" data-name="{{ $p['package_title'] }}" data-item-name="{{ $p['package_title'] }}" data-content-category="View Package" data-content-author="{{ $p['company']['company_name'] }}">
              <div style="height: 20%;width: 100%;background: white;z-index: 71;display: flex;flex-direction: column;justify-content: space-between;" id="p_title">
                <div>{{ $p['package_title'] }}</div>
                <div style="width: 100%;display: flex;flex-direction: row;justify-content: space-between;" id="sub_p_title">
                  <div><span id="p_price">RM{{ $p['package_price'] }}</span></div>
                  @if($p['package_pax'] == 0)
                    <div></div>
                  @else
                    <div>({{ $p['package_pax'] }} pax)</div>
                  @endif
                  
                </div>
              </div>
              <div style="height: 70%;width: 100%;background: url('{{ asset('myasset/img/back.jpg') }}');background-size: cover;background-position: center;"></div>
              <div style="height: 10%;width: 100%;z-index: 71;background: white" id="p_company">
                <div id="p_company_info">
                  <!-- <div class="company_name">by</div> -->
                  <div class="company_logo_mini" style="background: url('{{ asset('storage/'.$p['company']['company_logo']) }}');background-position: center;background-size: cover;">
                  </div>
                  <div class="company_name">{{ $p['company']['company_name'] }}</div>
                </div>
                <div class="p_book_btn" data-pid="{{ $p['package_id'] }}" data-name="{{ $p['package_title'] }}">
                  <div id="btn_book1"></div>
                  <div id="btn_book2"> BOOK </div>
                </div>
              </div>
              <div id="p_detail">
                {!! $p['package_detail_short'] !!}
              </div>
            </div>
            @endforeach
          </div>
          <div class="footer_result_container">
          
          </div>
        @else
          <div class="result_container_empty">
            <p>No package found</p>
          </div>
        @endif
      </div>
    </div>

    @include('templates.external_footer')

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

      $(".package_cards").each(function(){

        var th = $(this);

         th.on('click',':not(.p_book_btn)',function(e){

            // e.stopPropagation();

            var pid = th.data('pid');
            var name = th.data('name');

            var url = "{{ url('/packages') }}" + "/" + name.split(' ').join('_') + "/" + pid;

            window.location.replace(url);
        });
      });


      $(".p_book_btn").each(function(){

        var th = $(this);

        th.on('click',function(e){

          e.stopPropagation();

          var package_id = th.data('pid');
          
          var url = "{{ url('/booking') }}" + "/" + package_id;  

          window.location.replace(url);       

        });

      });

      $('#std_search_btn').click(function(){

        var selectedCategory = $('#select_company_category').val();
        var company_id = $( "#select_company_name option:selected" ).val();

        var url = '{{ url("/packages") }}'+ '?c=' + selectedCategory + '&cm=' + company_id;

        window.location.replace(url);

      });

    </script>
</body>
</html>