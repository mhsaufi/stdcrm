<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="site_name" content="Save The Date My">
    <meta name="page_site" content="savethedate-my.com">
    <meta name="page_language" content="English">
    <meta name="page_type" content="Members">
    <meta name="page_title" content="Members">
    <meta name="page_content" content="Members">

    <title>Save The Date | Members</title>

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

    .uplayer{
      position:absolute;
      top:0;
      left:0;
      width:100%;
      height:100%;
      z-index:85;
    }

    .downlayer{
      position:absolute;
      top:60%;
      left:0;
      bottom:0;
      width:100%;
      z-index:85;
    }

    .leftlayer{
        width:50%;
        height:100%;
        z-index:86;
        background: none!important;
    }

    .rightlayer{
        top:0;
        position:absolute;
        left:50% !important;
        width:50%;
        height:100%;
        z-index:86;
        background: none!important;
    }

    /* ------------------------------ shape styling */
    .ocard {
      position:absolute;
      transition: 0.3s;
      width: 100%;
      height: 100%;
      z-index:85;     
    }

    .ocard-content{
      position:absolute;
      top:10%;
      left:25%;
      width:50%;
      height:30%;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }

    .otext{
      position:absolute;
      width:100%;
      height:auto;
      /* padding-bottom:0.5%; */
      padding-left:49%;
      z-index:87;
      font-size:12px;
      /* background:blue; */
    }

    .ocard-left {
      position:absolute;
      top: 18%;
      left: 25%;
      transition: 0.3s;
      width: 10%;
      border-radius:10%;
    }

    .ocard-right {
      position:absolute;
      top: 18%;
      right: 54%;  
      transition: 0.3s;
      width: 20%;
      border-radius:10%;
    }
    .oimg{
      border-radius: 50%;
      border: 2px solid #d4af37;
    }

    .oimg-down {
      width: 80px;
      height: 80px ;
      border-radius: 50%;
      border: 1px solid #d4af37;
    }

    .ocontainer {
      padding: 2px;
      text-align: center;
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
    }

    @media (max-width: 600px){
        .credit {
            display: none;
        }

        .backimg-about{
            display:none;
        }

        .backtext-about{
            width:100%!important;
            height:100%;
            z-index:80;
            color:#000;
        }

        .backtext-about{
            width:100%;
            height:100%;
            z-index:80;
            color:#000;
            text-align: center;
        }

        .text-about p{
            position:absolute;
            top: 20%;
            padding-right: 0!important;
            z-index:81;
            color:#000;
            font-size: 16px;
        }
    }
    </style>
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      
      @include('templates.navbar')
    </header>
    
    <!------------------- Header Area wrapper End ----------------------------------------------------->
    
    <div class="biglayer">

      <div class="uplayer">

        <div class="leftlayer">
          <div class="ocard-left">
            <img src="{{asset('myasset/img/alin.jpg')}}" alt="Avatar" style="width:100%" class="oimg">
            <div class="ocontainer">
              <h4><b>Amalina Azren</b></h4> 
              <p>Web Developer</p> 
            </div>
          </div>
        </div>

        <div class="rightlayer">
          <div class="ocard-right" onclick="sir()">
            <img src="{{asset('myasset/img/4177.jpg')}}" alt="Avatar" style="width:100%" class="oimg">
            <div class="ocontainer">
              <h4><b>Dr Aznan Zuhid</b></h4> 
              <p>Supervisor</p> 
            </div>
          </div>
        </div>
      </div>

      <div class="downlayer">
        <p class="otext">Acknowledgement :</p>
        <div class="ocard">
          <div class="ocard-content">
            <div><img src="{{asset('myasset/img/uia.png')}}" alt="Avatar" style="width:100%" class="oimg-down"></div>
            <div><img src="{{asset('myasset/vendors/istana.png')}}" alt="Avatar" style="width:100%" class="oimg-down"></div>
            <div><img src="{{asset('myasset/vendors/veil.png')}}" alt="Avatar" style="width:100%" class="oimg-down"></div>
            <div><img src="{{asset('myasset/vendors/ain.png')}}" alt="Avatar" style="width:100%" class="oimg-down"></div>
          </div>
        </div>
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
                <li><a href="{{ url('/subscription') }}" class="small-isi">Features</a></li>
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

        function sir(){
          window.open('http://www.iium.edu.my/staff/show/4177');
        }
     
    </script>

  </body>
</html>
