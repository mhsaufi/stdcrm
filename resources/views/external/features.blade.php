<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SaveTheDate | Features </title>

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
        background-color: #fff  ; /*#f2f4f4; */
        color:  #000  ; /*#aeb6bf ; #5d6d7e*/
        border: 2px solid #d4af37;
        height: 100px;
        width: 100px;
        padding-top: 10px;
        border-radius: 50%;
      } 

      .icon-circle:hover{
        background-color: white;
        color: #d4af37  ; 
        /* #ff1b4e */
        border: 3px inset #d4af37 ;
        z-index: 99;
        cursor: pointer;
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
      top: 25%;
      left: 30%;
      background-repeat:no-repeat;
      border: 2px solid #d4af37;
      width: 40%;
      opacity:0.8; 
      z-index:90; 
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
        background: url("{{asset('myasset/img/babout.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover; 
    }

    .text-features p{
      z-index: 90;
      position:absolute;
      top: 18%;
      left: 27%;
      font-size: 16px;
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
    margin-left:33%;
    }
    </style>

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      
    @include('templates.frontnav')
    </header>
    
    <!------------------- Header Area wrapper End ----------------------------------------------------->

    <div style="height: 100%;">
      
      <div class="text-features">
        <p> Ada masalah nak guna Save The Date? Jom tengok tutorial pendek ni..terus paham :)</p>
      </div>
        
        <video autoplay muted loop id="myVideo"><source src="{{asset('myasset/img/vid.mp4')}}" type="video/mp4">
        Your browser does not support HTML5 video.
        </video>

        <div class="biglayer">

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

          <div class="row" style="padding:0px!important;">
              <p class="small-p">All copyrights reserved © 2019 - Designed &amp; Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a>
              </p>
          </div>
        </div>
        <!-- Container Ends -->
    </div>
    

    <!-- Javascript  -->
    <script type="text/javascript">         

        $('.icon-circle').click(function(){
            window.location.replace("{{ url('/listvendor') }}");
        });  

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
     
    </script>

  </body>
</html>
