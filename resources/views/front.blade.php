<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Save The Date</title>

    @include('templates.header')

    <style type="text/css">
    html {
       height: 100%!important; 
    }
    /* ------------------------------------------------------------  navigation bar styling */


    .navcolumn {
        /* padding: 10px; */
        border-right: 2px dotted #d4af37;
        display: flex;
        flex-direction: column;
        justify-content: flex-start !important;
        text-align: left !important;
        /* background: blue; */
    }
    .icon-circle{
        position: relative;
        background-color: #fff  ; /*#f2f4f4; */
        color:  #000  ; /*#aeb6bf ; #5d6d7e*/
        border: 3px solid #d4af37;
        height: 100px;
        width: 100px;
        padding-top: 10px;
        border-radius: 50%;
        -webkit-transition: transform 0.3s;
      } 

      .icon-circle:hover{
        background-color: white;
        color: #d4af37  ; 
        /* #ff1b4e */
        border: 3px inset #d4af37 ;
        z-index: 99;
        cursor: pointer;
        transform: rotate(-180deg);
      }

      .icon-circle div {
        transition: transform 0.3s;
      }


      .icon-circle:hover div {
        transform: rotate(180deg);
      }

      .icon-circle a{
        color: black;
        opacity: 0.6;
      }

      .navbar-expand-lg .navbar-nav .nav-link {
        color: black !important;
      }
      .navbar-expand-lg .navbar-nav .nav-link:active{
        color: gold !important;
      }

      .drpdown {
        float: left;
        overflow: hidden;
    }

    .drpdown {
        font-size: 16px;  
        border: none;
        outline: none;
        color: white;
        padding: 1px 3px;
        font: inherit;
        margin: 0;
    }

    .drpdown:hover{
        color: #d4af37 ;
    }

    .drpdown-content {
        display: none;
        position: absolute;
        background: url("{{asset('myasset/img/movg.mp4')}}");  
        width: 100%;
        left: 0;
        z-index: 1;
    }

    .drpdown:hover .drpdown-content {
        display: block;
    }

    .fade-in {
        animation: fadeIn ease 1s;
        -webkit-animation: fadeIn ease 1s;
        -moz-animation: fadeIn ease 1s;
        -o-animation: fadeIn ease 1s;
        -ms-animation: fadeIn ease 1s;
    }

    @keyframes fadeIn{
        0% {opacity:0;}
        100% {opacity:1;}
    }

    /* ---------------------------------------------------- Video styling */
    #myVideo {
      position: fixed;
      right: 0;
      bottom: 0;
      background-repeat:no-repeat;
      min-width: 100%; 
      min-height: 100%;
      opacity:0.8;  
    }

    .biglayer{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
    }

    .leftlayer{
        width:30%;
        height:100%;
        z-index:80;
        background: rgba(255, 255, 255, 0);
    }
    .midlayer {
        width:40%;
        height:100%;
        z-index:80;
        background: linear-gradient(to bottom right,rgba(212, 175, 55, 0) 50%,rgba(212, 175, 55, 0) 0%,rgba(255, 255, 255, 0.5) 50%,rgba(255, 255, 255, 0.5) 0%);
    }

    .rightlayer{
        width:30%;
        height:100%;
        z-index:80;
        background: rgba(255, 255, 255, 0.5);
    }

    #div_logo {
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
         /*background: yellow; */
        z-index:82;
        text-align: center;
    }

    #logo_text_container {
        /*display:none;*/
        position: absolute;
        top: 30%;
        left: 25%;
        width: 50%;
        height: 30%;
        /*opacity: 0.7;*/
        cursor: pointer;
        z-index: 999;
    }

    #std_logo {
        width: 40%;
        filter:drop-shadow(5px 5px 8px grey);
        -webkit-transition: margin-top 1s, filter 1s, width 1s;
        z-index: 99;
    }

    #std_logo_text {
        position: absolute;
        top: 50%;
        width: 100%;
        font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
        font-size: 20px; 
        font-style: normal; 
        font-variant: normal; 
        font-weight: 800; 
        color: white;
        -webkit-text-stroke: 1px #23430C;
        text-shadow: -1px 1px 2px #23430C,
                1px 1px 2px #23430C,
                1px -1px 0 #23430C,
                -1px -1px 0 #23430C;
        line-height: 20px;
        z-index: 99;
        -webkit-transition: top 0.7s, opacity 1s;
        opacity: 0;
    }

    #logo_text_container:hover {
        /*background: yellow;*/
    }

    #logo_text_container:hover  #std_logo_text {
        top: 80%!important;
        opacity: 1;
    }

    #logo_text_container:hover  #std_logo {
        margin-top: -5%!important;
        opacity: 1;
        filter:drop-shadow(-7px -5px 6px grey);
    }

    /* ============================================================================================ */

    /* ----------------------------- Footer styling */
    .credit {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #fff !important;
    color: black !important;
    text-align: center;
    border-top: 3px solid #d4af37;
    z-index:999999;
    padding-top:10px;
    }

    .small-tajuk{
    font-size:14px;
    color: #000 ;
    }

    .small-isi{
    font-size:13px;
    color: #d4af37;
    }

    .small-isi:hover{
    color: #000 ;
    }

    .small-p{
    font-size:13px;
    color: #d4af37;
    margin-left:30%;
    }

    .package_nav {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      padding-bottom: -20px!important;
    }

    .package_container {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      /*background: blue;*/
      width: 320px;
      padding: 0 20px;
      border-right: 0.05em solid #f1f1f1;
      cursor: pointer;
    }

    #package_title {
      font-family: Avant Garde, Avantgarde, Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
      font-size: 15px; 
      font-style: normal; 
      font-variant: normal; 
      font-weight: 700; 
      line-height: 15.4px;
      opacity: 0.7;
      color: #d4af37;
    }

    #package_price_pax {
      font-size: 12px; 
    }

    #package_content_detail {
      position: relative;
      font-size: 11px!important;
      text-align: left!important;
      opacity: 0.4;
      color: #f4f4f4!important;
      z-index: 9999;
    }

    #package_content_detail h1, #package_content_detail h2,#package_content_detail h3#package_content_detail h4,#package_content_detail h5 {
      font-size: :12px;
    }

    .package_container:hover #package_content_detail {
      opacity: 0.7;
    }

    .event_list {
      padding: 10px 15px;
      border-right: 0.05em solid #f1f1f1;
      text-align: left;
      width: 20%;
      cursor: pointer;
    }

    #btn_join_us {
      padding: 8px 15px;
      background: #ffda00;
      border-radius: 5px;
      font-weight: 600;
      color: black;
    }

    #btn_join_us:hover {
      background: #ffc500;
    }
    </style>
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo bg-white " 
        style="height: 70px!important;border-bottom: 3px inset #d4af37;">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="collapse navbar-collapse" id="main-navbar" >
            <ul class="navbar-nav mr-auto w-100 justify-content-center clearfix">
                <div class="drpdown">
                  <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/listvendor') }}">
                      Our Vendors <i class="fa fa-angle-down"></i>
                      </a> 
                      <!-- Category Section Start -->
                      <div id="cate" class="drpdown-content fade-in section-padding" style="background:white;padding-bottom:25px !important;">
                      <div class="container">
                          
                          <div class="row" style="margin-right:-50px!important;margin-left: 50px; margin-top:-30px;">
                          
                              <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
                                  <div class="about block text-center">
                                  <div class="icon-circle" id="all">
                                    <div>
                                      <i class="fas fa-bars fa-3x"></i>
                                      <p><a href="{{ url('/booking') }}">All</a></p> 
                                    </div>
                                  </div>                           
                                  </div>
                              </div>
                              <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
                                  <div class="about block text-center">
                                  <div class="icon-circle" id="photo">
                                    <div>
                                      <i class="fa fa-camera fa-3x"></i>
                                      <p><a href="#">Photo</a></p>
                                    </div>
                                  </div> 
                                  </div>
                              </div>
                              <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
                                  <div class="about block text-center">
                                  <div class="icon-circle" id="dj">
                                    <div>
                                      <i class="fa fa-headset fa-3x"></i>
                                      <p><a href="#">DJ</a></p>
                                    </div>
                                  </div>                            
                                  </div>
                              </div>
                              <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
                                  <div class="about block text-center">
                                  <div class="icon-circle" id="catering">
                                    <div>
                                      <i class="fa fa-utensils fa-3x"></i>
                                      <p><a href="#">Catering</a></p>
                                      </div>
                                  </div>              
                                  </div>
                              </div>
                              <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
                                  <div class="about block text-center">
                                  <div class="icon-circle" id="pelamin">
                                    <div>
                                      <i class="fa fa-couch fa-3x"></i>
                                      <p><a href="#">Pelamin</a></p>
                                      </div>
                                  </div>                            
                                  </div>
                              </div>         
                              <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
                                  <div class="about block text-center">
                                  <div class="icon-circle" id="dress">
                                    <div>
                                      <i class="fa fa-tshirt fa-3x"></i>
                                      <p><a href="#">Dress</a></p> 
                                      </div>
                                  </div>
                                              
                                  </div>
                              </div>
                              <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
                                  <div class="about block text-center">
                                  <div class="icon-circle" id="hall">
                                    <div>
                                      <i class="fa fa-warehouse fa-3x"></i>
                                      <p><a href="#">Hall</a></p>
                                      </div>
                                  </div>                            
                                  </div>
                              </div>
                              <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
                                  <div class="about block text-center">
                                  <div class="icon-circle" id="cards">
                                    <div>
                                      <i class="fa fa-envelope-open-text fa-3x"></i>
                                      <p><a href="#">Cards</a></p>
                                      </div>
                                  </div>                            
                                  </div>
                              </div>         
                              <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
                                  <div class="about block text-center">
                                  <div class="icon-circle" id="booth">
                                    <div>
                                      <i class="fa fa-store fa-3x"></i>
                                      <p><a href="#">Booth</a></p> 
                                      </div>
                                  </div>                           
                                  </div>
                              </div>
                          </div>


                      </div>
                      </div>
                      <!----------------------------------------------------------------------- Category Section End -->
                  </li>
                </div>

                <div class="drpdown">
                  <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/packages') }}">
                      Packages <i class="fa fa-angle-down"></i>
                      </a>
                      <!-- Packages section Start --> 
                      <section id="package" class="drpdown-content fade-in section-padding" style="background:white;padding-bottom:2px!important;padding-top:2px;">
                      
                      <div class="container" style="padding-bottom: 10px;">
                      
                          <!-- START section content style="background-color:rgba(255,255,255,0.8); border-radius:30px;"-->
                        <div class="package_nav" style="margin-top:-35px; ">                          
                          @foreach($p_result as $p)  
                          <div class="package_container" data-pid="{{ $p['package_id'] }}" data-name="{{ $p['package_title'] }}">
                            <div><span id="package_title">{{ $p['package_title'] }}</span></div>
                            <div><span id="package_price_pax">MYR {{ $p['package_price'] }} ({{ $p['package_pax'] }} pax)</span></div>
                            <div id="package_content_detail">{!! $p['package_detail_short'] !!}</div>
                          </div>
                          @endforeach
                          <div style="width: 300px;display: flex;flex-direction: column;justify-content: center;align-items: center;">
                            <span><a href="{{ url('/packages') }}">More packages</a></span>
                          </div>
                          
                        </div>
                      </section>
                      <!------------------------------------------------------------------------ Packages Table Section End -->
                  </li>
                </div>

                <div class="drpdown">
                  <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/events') }}">
                      Events <i class="fa fa-angle-down"></i>
                      </a>

                        <section id="event" class="drpdown-content fade-in" style="background:white;padding-bottom:2px!important;padding-top:2px;">
                        
                          <div class="container">
                              <div style="display: flex;flex-direction: row;justify-content: center;width:100%;min-height: 100px!important;">
                                <div class="event_list" onclick="listEvent()">
                                      <div id="package_title" style="">Title Event</div><br>
                                      <div style="font-size: 12px;">
                                        <p>Why hired <b>Wedding Planner ?</b> Wedding planner will help you
                                         to manage your wedding planning including dealing with your vendors yang you nak laa.<br>
                                         </p><br>
                                       </div>
                                </div>
                                <div class="event_list" onclick="listEvent()">
                                      <div id="package_title" style="">Title Event</div><br>
                                      <div>
                                        <p>This wedding festival is an opportunity for brides to prepare for the wedding as MEFA
                                         organizes exhibitions as One Stop Center Wedding, from catering products, pelamin, 
                                         bridal boutiques, wedding cards, souvenirs, wedding halls and more.</p>
                                       </div>
                                </div>
                                <div class="event_list">
                                  <span><a href="{{ url('/events') }}">More events</a></span>
                                </div>
                              </div>                     
                              
                          </div>

                        </section>
                      <!-- </div> -->
                      <!----------------------------------------------------------------------- Event Section End --> 
                  </li>
                </div>            

                <!-- <div class="drpdown"> -->
                  <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/islamic_center') }}">
                      <i class="fas fa-mosque"></i> Islamic Affairs
                      </a>
                  </li>

                <!-- </div>  -->
                            
              @if (Route::has('login'))                
                  @auth

                    <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/home') }}">
                        <i class="fas fa-columns"></i>
                        Dashboard
                      </a>
                    </li>

                    <!-- <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/home') }}">
                        <i class="far fa-address-book"></i>
                        Contact
                      </a>
                    </li> -->

                    <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/profile') }}">
                      <i class="fas fa-user-circle"></i> {{ Auth::user()->name }}
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link black" href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>

                      </a>
                    </li>
                  @else         

                    <li class="nav-item">
                      <a class="nav-link black" href="{{ route('login') }}">
                      <i class="fas fa-sign-in-alt"></i> Login
                      </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link black" href="{{ url('/merchant') }}">
                        <span style="color: #e6c500;font-weight: bold;">Are you a vendor?</span>
                        </a>
                    </li> 
                    
                    <li class="nav-item">
                      <a class="nav-link black" href="{{ route('register') }}">
                      <span id="btn_join_us">Let's Join Us!</span>
                      </a>
                    </li>
                  @endauth               
              @endif
            </ul>
          </div>
        </div>
      </nav>
    <!-- Navbar End -->
    
    </header>
    
    <!------------------- Header Area wrapper End ----------------------------------------------------->

    <div style="height: 100%;background: green!important;">
        <video autoplay muted loop id="myVideo"><source src="{{asset('myasset/img/vid.mp4')}}" type="video/mp4">
        Your browser does not support HTML5 video.
        </video>

        <div class="biglayer">

            <!-- left layer infront of video -->
            <div class="leftlayer">
            
            </div>

            <!-- middle layer infront of video -->
            <div class="midlayer">
                
            </div>

            <!-- right layer infront of video -->
            <div class="rightlayer">
            
            </div>

        </div>
        
    </div>
    <div id="div_logo">
            <div id="logo_text_container">
            <img src="{{asset('myasset/img/logo.png')}}" class="slide-text fadeIn" id="std_logo" /> 
            <p id="std_logo_text">Every love story is beautiful, but yours should be unique. 
            <br><br>Let us help you design your perfect wedding event.</p>
            
            </div>
        
    </div>  

    
    @include('templates.footer')
    
    <!------------------------------------------------------------------------ Footer Section End-->

    <div class="credit">
        <!-- Container Starts -->
        <div class="container" style="padding:1px;">
          <!-- Row Starts -->
          <div class="row section" style="padding:1px;">
            <!-- Footer Widget Starts -->
            <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
              <h5 class="small-tajuk">
                SAVETHEDATE
              </h5>
              <ul>
                <li><a href="{{ url('/aboutSTD') }}" class="small-isi">About</a></li>
                
              </ul>
            </div>
            <!-- Footer Widget Ends -->

            <!-- Footer Widget Starts -->
            <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
              <h5 class="small-tajuk">
              PRODUCT
              </h5>
              <ul>
                <li><a href="{{ url('/features') }}" class="small-isi">Features</a></li>
                <!-- <li><a href=""class="small-isi">Marketplace</a></li> -->
              </ul>            
                          
            </div>
            <!-- Footer Widget Ends -->

            <!-- Footer Widget Starts -->
            <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
              <h5 class="small-tajuk">
              DISCOVER
              </h5>
              <ul>
                <li><a href="{{ url('/members') }}" class="small-isi">Members</a></li>
                <!-- <li><a href="" class="small-isi">Pricing</a></li> -->
              </ul>

            </div>
            <!-- Footer Widget Ends -->

            <!-- Footer Widget Starts -->
            <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".8s">
              <h5 class="small-tajuk">
                READ MORE
              </h5>
              <ul>                
                <li><a href="{{ url('/terms') }}" class="small-isi">Terms & Conditions</a></li>
              </ul>
              <!-- <div class="contact-us">
                <div class="social-footer">
                  <a href="#" class="small-isi"><i class="fab fa-facebook icon-round"></i></a>
                  <a href="#" class="small-isi"><i class="fab fa-twitter icon-round"></i></a>
                  <a href="#" class="small-isi"><i class="fab fa-instagram icon-round"></i></a>
                </div>              
              </div> -->
            </div>
            <!-- Footer Widget Ends -->
          </div>
          <!-- Row Ends -->

          <!-- <div class="row" style="padding:0px!important;">
              <p class="small-p">All copyrights reserved © 2019 - Designed &amp; Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a>
              </p>
          </div> -->
          <div class="row" style="padding:0px!important;">
              <p class="small-p">All copyrights reserved © SaveTheDate 2019 - Designed &amp; Developed by <a rel="" href="">AlynAzren</a>
              </p>
          </div>
        </div>
        <!-- Container Ends -->
    </div>
    

    <!-- Javascript  -->
    <script type="text/javascript">

      $('#all').click(function(){
        window.location.replace("{{ url('/listvendor') }}");
      })

      $('#btn-register').click(function(){
        window.location.replace("{{ route('register') }}");
      });

      $('#btn-pakej').click(function(){
        window.location.replace("{{ url('/packages') }}");
      });

      $('#btn-promo').click(function(){
        window.location.replace("{{ url('/events') }}");
      });

      $('#btn-islcenter').click(function(){
        window.location.replace("{{ url('/islamic_center') }}");
      });

      $(".package_container").each(function(){

        var th = $(this);

         th.on('click',':not(.p_book_btn)',function(e){

            e.stopPropagation();

            var pid = th.data('pid');
            var name = th.data('name');

            var url = "{{ url('/packages') }}" + "/" + name.split(' ').join('_') + "/" + pid;

            window.location.replace(url);
        });
      });

      function listEvent(){

        var url = "{{ url('/events') }}";

        window.location.replace(url);
      }
     
    </script>

  </body>
</html>
