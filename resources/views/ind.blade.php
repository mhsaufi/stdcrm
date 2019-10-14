<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SaveTheDate | HOME</title>

    @include('templates.header')

    <style type="text/css">
    .mySlides {display:none; border: 3px ridge #d4af37;}

      #label-category{
        background-color: white;
        align-self: flex-start;
        width: 18%;
        height: 60px;
        padding-top: 8px;
        margin-top: 90px;
        border-radius: 10px 10px 0 0;  
        border: none;     
      }
      
      #label-category p{
        font-weight: bold;
        opacity: 0.4;
      }

      .label-carousel{
        margin-left: 550px;
        margin-top: -90px;
        border-bottom: 380px solid #FFF;
        border-left: 300px solid transparent; 
        height: 0 ;
        width: 70%;
      }

      .label-carousel img{
      	width: 200px;
      } 

      .icon-circle{
        background-color: #fff  ; /*#f2f4f4; */
        color:  #000  ; /*#aeb6bf ; #5d6d7e*/
        border: 2px solid #d4af37;
        height: 150px;
        width: 150px;
        padding-top: 33px;
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
        opacity: 0.5;
      }
      .navbar-expand-lg .navbar-nav .nav-link:active{
        color: gold !important;
        opacity: 0.5;
      }
      
      .pattern{
      	background-image: url("{{asset('myasset/img/bg1.jpg')}}");
      	background-repeat: no-repeat;
        background-attachment: fixed;
      	background-size: cover;
      	height: 100% !important;
        /* background-color: rgba(0,0,0); */
      }

      #btn-register{
        margin-left: 3%;
        width: 300px;
      	border-radius: 50px;
      	height: 40px;
        background-color: #d4af37;
        border: 3px outset #fff;
      	color: #fff;
        font-weight: bold;
      }

      #btn-register:hover{
        cursor: pointer;
        background-color: rgba(212,175,55);
        border: 4px outset #000;
        color: #000;
        font-weight:bold;
        z-index: 99;
      }

      .card{
        background-color: rgba (255,255,55,0.6)!important;
      }

      #cate{
      /* background-image: url("{{asset('myasset/img/bg1y.jpg')}}"); */
      background-repeat: no-repeat;
        background-size: cover;
      /* border-top:3px double black;       */
    }

    #event{
      /* background-image: url("{{asset('myasset/img/bg1z.jpg')}}"); */
      background-repeat: no-repeat;
        background-size: cover;
      /* border-top:3px double black;       */
    }

    #package{
      /* background-image: url("{{asset('myasset/img/bg1.jpg')}}"); */
      background-repeat: no-repeat;
        background-size: cover;
        /* border-top:3px double black; */        
    }

    .pricing-table-item{
      /* background-color: rgba(212, 175, 55, 0.4); */
      background-color:rgba(255,255,255);
      color:black;
      font-weight:bold;
      border: 4px inset #d4af37;      
    }

    .tajuk{
      font-size: 18px;
    }

    .row-slider{
      margin-right:400px;
      /* margin-bottom: 30px; */
    }

    /* ================================== more pakej button =========================== */
    .pakejbutton {
  /* display: inline-block; */
  /* border-radius: 40px;
  background-color: rgba(255,255,255,0.2);
  border: 3px inset #d4af37; */
  border:none;
  background:none;
  color: #000;
  text-align: center;
  font-weight: bold;
  font-size: 14px;
  padding: 15px;
  width: 350px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 10px 34%;
}

.pakejbutton span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;  
}

.pakejbutton span:after {
  content: '\00bb\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;  
}

.pakejbutton:hover {
  color: #d4af37;
}

.pakejbutton:hover span {
  padding-right: 25px;  
}

.pakejbutton:hover span:after {
  opacity: 1;
  right: 0;  
}
/* ================================== more pakej button =========================== */

.bawah{
  margin: auto 14%;
  cursor: pointer;
  color: #d4af37;
  border: black;
}

.bawah:hover {
  color: #000;
  transition: 0.5s;
}

#myVideo {
  /* position: fixed; */
  right: 0;
  bottom: 0;
  background-repeat:no-repeat;
  min-width: 100%; 
  min-height: 100%;
  /* opacity:0.8; */  
}

.movgcontent {
  position:absolute;
  top:30%;
  /* bottom: 50%; */
  left:33%;
  width:100%;
  height:100%;
  /* background: rgba(0, 0, 0, 0.2); */
  color: #000;
  width: 100%;
  padding: 20px;
  box-sizing: border-box;
  z-index:1;
}

    </style>
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
      <!-- sliders -->
      <div id="sliders">
        <div class="full-width">
          <!-- light slider -->
          <!-- <div id="light-slider" class="carousel slide">
            <div id="carousel-area">
              <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">

                  <div class="carousel-item active">
                      <div class="w3-content w3-section" style="max-width:70%, height:20%;">
                        <img class="slider" src="{{asset('myasset/img/slider/bg-1.jpg')}}" style="width:100%; height:430px;">
                        <img class="slider" src="{{asset('myasset/img/bunga.jpg')}}" style="width:100%; height:430px;">
                        <img class="slider" src="{{asset('myasset/img/cincin.jfif')}}" style="width:100%; height:430px;">
                        <img class="slider" src="{{asset('myasset/img/meja.jpg')}}" style="width:100%; height:430px;">
                        <img class="slider" src="{{asset('myasset/img/pelamin.jpg')}}" style="width:100%; height:430px;">
                      </div>
                    
                    <div class="carousel-caption">
                    	<div class="label-carousel">
                    	
                    		<div class="row">
                    	
                    			<div class="col-lg-12 col-md-12" style="text-align: left; margin-top: 20px; padding-right: 20px;">
                            <img src="{{asset('myasset/img/logo2.png')}}" style="margin-top: 65px;">
                    				<p style="font-size: 1.2em;" class="slide-text animated fadeIn">Every love story is beautiful, but yours should be unique.<br>Let us help you design your perfect wedding event.</p>

                            @if (Route::has('login'))                
                              @auth
                      				
                              @else
                                <button id="btn-register">R E G I S T E R &nbsp&nbsp&nbsp&nbsp N O W</button>
                               
                              @endauth               
                            @endif 

                    			</div>
                    		</div>
                    		
	                      	
	                  	</div>                      

                      <div id="label-category">
                        <p>Browse by Category</p>
                      </div>

                    </div>

                  
                  </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <!-- End sliders -->
      <div class="row">
        <video autoplay muted loop id="myVideo">
          <source src="{{asset('myasset/img/movg.mp4')}}" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>

        <div class="movgcontent">         
          <img src="{{asset('myasset/img/logo2.png')}}" class="slide-text animated fadeIn" style="width:30%;"> 
            <p style="font-size: 1.2em;">Every love story is beautiful, but yours should be unique.<br>Let us help you design your perfect wedding event.</p>

            <a href="#cate"><i class="bawah fa fa-angle-double-down fa-3x" id="upp"></i></a>   
          
            
        </div>
      </div>
    </header>
    <!------------------------------------------------------------------------------ Header Area wrapper End -->
    
    
    <!-- About Section Start -->
    <!-- <div class="section-padding pattern"> -->
      <!-- <div class="container">
        <div style="margin-top:-10px;margin-bottom: 20px;">
          <h4 style="color: #ff1b4e;">Browse available vendors</h4>
          <p style="opacity: 0.9;">Find your favorite vendors and explore more about their background and offered wedding packages
            <a class="here-link" href="{{ url('/listvendor') }}">here</a>.</p>
        </div>
        <div class="row" style="margin-right: -50px!important;margin-left: -50px;">
          
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fas fa-bars fa-3x"></i>
              <p><a href="{{ url('/listvendor') }}">All</a></p> 
              </div>                           
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-camera fa-3x"></i>
                <p><a href="#">Photo</a></p>
              </div> 
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fas fa-video fa-3x"></i>
                <p><a href="#">Video</a></p>
              </div>              
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-utensils fa-3x"></i>
                <p><a href="#">Catering</a></p>
              </div>              
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-couch fa-3x"></i>
                <p><a href="#">Pelamin</a></p>
              </div>                            
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-tshirt fa-3x"></i>
                <p><a href="#">Dress</a></p> 
              </div>
                           
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-warehouse fa-3x"></i>
                <p><a href="#">Hall</a></p>
              </div>                            
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-envelope-open-text fa-3x"></i>
                <p><a href="#">Cards</a></p>
              </div>                            
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-headset fa-3x"></i>
                <p><a href="#">DJ</a></p>
              </div>                            
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 10px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-store fa-3x"></i>
                <p><a href="#">Booth</a></p> 
              </div>                           
            </div>
          </div>

        </div>
      </div> -->
    <!-- </div> -->
    <!---------------------------------------------------------------------------------- About Section End -->

    <!-- Category Section Start -->
    <div id="cate" class="section-padding pattern">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2></h2><br><br>
            <!-- <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s" style="color:black;">Vendors</h2> -->
            <p class="tajuk" style="opacity: 0.9; margin-left:11%; margin-bottom:5%;">Find your favorite vendors and explore more
            about their background and offered wedding packages here.</p><br>
          </div>
        </div>
        
        <div class="row" style="margin-right: -250px!important;margin-left: 50px;">
          
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 40px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fas fa-bars fa-4x"></i>
              <p><a href="{{ url('/listvendor') }}">All</a></p> 
              </div>                           
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 40px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-camera fa-4x"></i>
                <p><a href="#">Photo</a></p>
              </div> 
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 40px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-headset fa-4x"></i>
                <p><a href="#">DJ</a></p>
              </div>                            
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 40px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-utensils fa-4x"></i>
                <p><a href="#">Catering</a></p>
              </div>              
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 2px 40px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-couch fa-4x"></i>
                <p><a href="#">Pelamin</a></p>
              </div>                            
            </div>
          </div>         

        </div>

        <div class="row" style="margin-right: -250px!important;margin-left: 150px;">
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 20px 40px auto 40px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-tshirt fa-4x"></i>
                <p><a href="#">Dress</a></p> 
              </div>
                           
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 20px 40px auto 40px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-warehouse fa-4x"></i>
                <p><a href="#">Hall</a></p>
              </div>                            
            </div>
          </div>
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 20px 40px auto 40px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-envelope-open-text fa-4x"></i>
                <p><a href="#">Cards</a></p>
              </div>                            
            </div>
          </div>         
          <div class="col-lg-1 col-md-6 col-xs-12" style="margin: 20px 40px auto 40px;">
            <div class="about block text-center">
              <div class="icon-circle">
                <i class="fa fa-store fa-4x"></i>
                <p><a href="#">Booth</a></p> 
              </div>                           
            </div>
          </div>
          
        </div>

      </div>
    </div>
    <!----------------------------------------------------------------------- Category Section End -->

    <!-- Packages section Start --> 
    <section id="package" class="section-padding pattern">
      <div class="container" >
        <!-- section title -->
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s" style="color:black;">Packages</h2>
          </div>
        </div>
        <!-- END section title -->

        <!-- START section content style="background-color:rgba(255,255,255,0.8); border-radius:30px;"-->
        <div class="row" >
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="pricing-table-item" >
              <div class="plan-name">
                <h3>Istana Puteh</h3>
              </div>
              <div class="plan-price">
                <div class="price-value">RM 15,000</div>
                <div class="interval">(1000 pax)</div>
              </div>
              <div class="plan-list">
                <ul>
                  <li><i class="fa fa-check"></i>Hall Rental</li>
                  <li><i class="fa fa-check"></i>Pelamin</li>                  
                  <li><i class="fa fa-check"></i>1 Session Makeup</li>
                  <li><i class="fa fa-check"></i>Pair Of Dress (L&P)</li>
                  <li><i class="fa fa-check"></i>Photography & Videography</li>                  
                  <li><i class="fa fa-check"></i>Emcee</li>
                </ul>
              </div>
              <div class="plan-signup">
                <a href="#" class="btn btn-common">See more details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="pricing-table-item" >
              <div class="plan-name">
                <h3>Anggun Wedding</h3>
              </div>
              <div class="plan-price">
                <div class="price-value">RM 19,000 </div>
                <div class="interval">(1000 pax)</div>
              </div>
              <div class="plan-list">
                <ul>
                  <li><i class="fa fa-check"></i>Hall Rental</li>
                  <li><i class="fa fa-check"></i>Pelamin</li>
                  <li><i class="fa fa-check"></i>2 Session Makeup</li>
                  <li><i class="fa fa-check"></i>Pair Of Dress (L&P)</li>
                  <li><i class="fa fa-check"></i>Photography & Videography</li>
                  <li><i class="fa fa-check"></i>Emcee</li>
                </ul>
              </div>
              <div class="plan-signup">
                <a href="#" class="btn btn-common">See more details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="pricing-table-item" >
              <div class="plan-name">
                <h3>Veillaris</h3>
              </div>
              <div class="plan-price">
                <div class="price-value">RM 23,000 </div>
                <div class="interval">(1000 pax)</div>
              </div>
              <div class="plan-list">
                <ul>
                  <li><i class="fa fa-check"></i>Hall Rental</li>
                  <li><i class="fa fa-check"></i>Pelamin</li>
                  <li><i class="fa fa-check"></i>Pair Of Dress (L&P)</li>
                  <li><i class="fa fa-check"></i>Photography & Videography</li>
                  <li><i class="fa fa-check"></i>Emcee & Kompang</li>
                  <li><i class="fa fa-check"></i>PA System & Sound</li>
                </ul>
              </div>
              <div class="plan-signup">
                <a href="#" class="btn btn-common">See more details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- END section content -->

        <!-- MORE button  -->
        <div class="row">
          <div class="col-md-12">                   
           <button class="pakejbutton" id="btn-pakej"><span> More Packages </span></button>
          </div>
        </div>


      </div>
    </section>
    <!------------------------------------------------------------------------ Packages Table Section End -->

    <!-- Event Section Start -->
    <div id="event" class="section-padding pattern">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s" style="color:black;">Upcoming Events</h2>
          </div>
        </div>
        
        <div class="w3-content w3-section" style="max-width:50%, height:20%;">
          <img class="mySlides" src="{{asset('myasset/img/event1.jpg')}}" style="width:100%">
          <img class="mySlides" src="{{asset('myasset/img/event2.jpg')}}" style="width:100%">          
        </div>

        <!-- MORE button  -->
        <div class="row">
          <div class="col-md-12">                   
           <button class="pakejbutton" id="btn-promo"><span>More Events </span></button>
          </div>
        </div>

      </div>
    </div>
    <!----------------------------------------------------------------------- Event Section End -->   

	  <!-- Footer Section -->
    <footer class="footer">
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row section">
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
            <h3 class="small-title">
              SAVETHEDATE
            </h3>
            <ul>
              <li><a href="">About</a></li>
              <li><a href="">Members</a></li>
            </ul>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
            <h3 class="small-title">
             PRODUCT
            </h3>
            <ul>
              <li><a href="">Features</a></li>
              <li><a href="">Marketplace</a></li>
            </ul>            
                        
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
            <h3 class="small-title">
             DISCOVER
            </h3>
            <ul>
              <li><a href="">Terms & Conditions</a></li>
              <li><a href="">Pricing</a></li>
            </ul>

          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".8s">
            <h3 class="small-title">
              READ MORE
            </h3>
            <div class="contact-us">
              <div class="social-footer">
              <a href="#"><i class="fab fa-facebook icon-round"></i></a>
              <a href="#"><i class="fab fa-twitter icon-round"></i></a>
              <a href="#"><i class="fab fa-instagram icon-round"></i></a>
            </div>              
            </div>
          </div>
          <!-- Footer Widget Ends -->
        </div>
        <!-- Row Ends -->
      </div>
      <!-- Container Ends -->

      <!-- Copyright -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <p class="copyright-text">All copyrights reserved © 2019 - Designed &amp; Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a>
              </p>
            </div>            
          </div>
        </div>
      </div>
      <!-- Copyright  End-->

    </footer>
    <!------------------------------------------------------------------------ Footer Section End-->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-arrow-up"></i>
    </a>
    
    @include('templates.footer')

    <!-- Javascript  -->
    <script type="text/javascript">

      $('.icon-circle').click(function(){
        window.location.replace("{{ url('/listvendor') }}");
      });

      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
      }

      var myCount=0;
      slide();
      function slide(){
        var j;
        var y = document.getElementsByClassName("slider");
        for(j=0; j<y.length; j++){
          y[j].style.display="none";
        }
        myCount++;
        if(myCount > y.length){myCount=1}
        y[myCount-1].style.display="block";
        setTimeout(slide,2000);
      }


        $('#btn-register').click(function(){
          window.location.replace("{{ route('register') }}");
        });

        $('#btn-pakej').click(function(){
          window.location.replace("{{ url('/packages') }}");
        });

        $('#btn-promo').click(function(){
          window.location.replace("{{ url('/events') }}");
        });
     
    </script>

  </body>
</html>
