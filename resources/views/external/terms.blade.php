<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SaveTheDate | Terms & Conditions</title>

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


    .biglayer{
        position: relative;
        top:0;
        left:0;
        width:100%;
        height:100%;
        margin-bottom:5%;
        background: url("{{asset('myasset/img/babout.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        /* padding-top:100px;
        padding-left:50px; */
        /* padding: 130px 60px 10px 70px; */        
    }

    .layer{
      background: #fff;
      padding: 100px 30px 10px 30px;
      width: 80%;
      /* height: 30% !important;
      overflow: scroll; */
      margin-left: 10%;
      /* background:yellow; */
    }


    /* ============================================================================================ */


    /* ----------------------------- Footer styling */
    .credit {
    position: fixed;
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
      <!-- Navbar Start -->
      
    <!-- Navbar End -->
      @include('templates.frontnav')
    </header>
    
    <!------------------- Header Area wrapper End ----------------------------------------------------->
    <div class="biglayer">
      <div class="layer">      
        @include('templates.tnc')
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
