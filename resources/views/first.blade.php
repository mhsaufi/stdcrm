<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SaveTheDate | HOME</title>

    @include('templates.header')

    <style type="text/css">
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
        /* opacity: 0.5; */
      }
      .navbar-expand-lg .navbar-nav .nav-link:active{
        color: gold !important;
        /* opacity: 0.5; */
      }       

      #cate{
      /* background-image: url("{{asset('myasset/img/bg1y.jpg')}}"); */
      background-repeat: no-repeat;
        background-size: cover;     
    }

    #event{
      /* background-image: url("{{asset('myasset/img/bg1z.jpg')}}"); */
      background-repeat: no-repeat;
        background-size: cover;     
    }

    #package{
      /* background-image: url("{{asset('myasset/img/bg1.jpg')}}"); */
      background-repeat: no-repeat;
        background-size: cover;       
    }

    #btn-pakej:hover, #btn-promo:hover {
      cursor:pointer;
    }

    .pricing-table-item{
      background-color:rgba(255,255,255);
      color:black;
      font-weight:bold;
      border: 2px inset #d4af37;      
    }

    .tajuk{
      font-size: 18px;
    }

    /* ================================== more pakej button =========================== */
    .pakejbutton {
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
/* ================================== end more pakej button =========================== */

#tekan{
        margin-left: 3%;
        width: 300px;
      	border-radius: 50px;
      	height: 40px;
        background-color: #d4af37;
        border: 3px outset #fff;
      	color: #fff;
        font-weight: bold;
      }

      #tekan:hover{
        cursor: pointer;
        background-color: rgba(212,175,55);
        border: 4px outset #000;
        color: #000;
        font-weight:bold;
        z-index: 99;
      }

/* =========================================================================================== */
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  background-repeat:no-repeat;
  min-width: 100%; 
  min-height: 100%;
  opacity:0.8;  
}

.movgcontent {
  position:absolute;
  top:0;
  max-width:100%;
  max-height:100%;
  /* background: rgba(255,255,255,0.5); */
  border-left:483px solid transparent;
  border-bottom:700px solid rgba(255,255,255,0.8);
  /* rgba(212,175,55,0.5) */
  height:0;
  color: #000;
  width: auto;
  left:34%;
  /* padding: 20px; */
  box-sizing: border-box;
  z-index:1;
}

#std_logo {
  width:60%; 
  margin-top:45%!important;
  margin-left:-78%!important;
  filter:drop-shadow(5px 5px 8px grey);
  -webkit-transition: margin-left 1s, width 1s, margin-top 1s, filter 1s;
}

#std_logo_text {
  width: auto;
  position: absolute;
  top: 500;
  left: 20;
  font-size:1.2em; 
  font-family: Andale Mono, AndaleMono, monospace; 
  font-size: 15px; 
  font-style: normal; 
  font-variant: normal; 
  font-weight: bold; 
  line-height: 18.5667px;
  margin-top:60%!important;
  margin-left:-40%!important;
  z-index: 99;
  -webkit-transition: margin-left 1s, opacity 1s;
  opacity: 0;
}

#std_logo:hover {
  margin-left:-105%!important;
  filter:drop-shadow(-7px -5px 6px grey);
}

#std_logo:hover ~ #std_logo_text {
  margin-left: 12%!important;
  opacity: 1;
}

/*#std_logo_text:hover {
  margin-left:-10%!important;
  opacity: 0.5;
}*/

/* ============================================================================================ */
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
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

/* =========================================================================================== */
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
   padding-top:5px;
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
.navcolumn {
  /* padding: 10px; */
  border-right: 2px dotted #d4af37;
  display: flex;
  flex-direction: column;
  justify-content: flex-start !important;
  text-align: left !important;
  /* background: blue; */
}

.lalu:hover {
  cursor:pointer;
  color: #d4af37;
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
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <!-- <a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('myasset/img/logo2.png')}}" alt="" style="width: 100% !important;"></a> -->
          </div>
          <div class="collapse navbar-collapse" id="main-navbar" >
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix" style="margin-right:10%!important;">
                
                <div class="drpdown">
                  <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/events') }}">
                      Vendors <i class="fa fa-angle-down"></i>
                      </a> 
                      <!-- Category Section Start -->
                      <div id="cate" class="drpdown-content fade-in section-padding" style="background:white;padding-bottom:25px !important;">
                      <div class="container">
                          
                          <div class="row" style="margin-right:-50px!important;margin-left: 50px; margin-top:-30px;">
                          
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
                                      <i class="fa fa-headset fa-3x"></i>
                                      <p><a href="#">DJ</a></p>
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
                                      <i class="fa fa-store fa-3x"></i>
                                      <p><a href="#">Booth</a></p> 
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
                      
                      <div class="container" >
                      
                          <!-- START section content style="background-color:rgba(255,255,255,0.8); border-radius:30px;"-->
                          <div class="row" style="margin-top:-35px; ">                          

                          <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="navcolumn" >                                
                              <h6>Istana Puteh</h6>
                              <p>RM 15,000 </p>
                              <p> (1000 pax)</p>
                              <!-- <a href="#" class=" btn-common" id="tekan">See more details</a> -->                                
                            </div>
                          </div>

                          <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="navcolumn" >                                
                              <h6>Istana Puteh</h6>
                              <p>RM 15,000 </p>
                              <p> (1000 pax)</p>
                              <!-- <a href="#" class="btn " id="tekan">See more details</a> -->                                
                            </div>
                          </div>

                          <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="navcolumn" >                                
                              <h6>Istana Puteh</h6>
                              <p>RM 15,000 </p>
                              <p> (1000 pax)</p>
                              <!-- <a href="#" class="btn " id="tekan">See more details</a> -->                                
                            </div>
                          </div>

                          <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="navcolumn" >
                              <p></p>
                              <span><br><a href="{{ url('/packages') }}">More packages</a></span>
                              <p></p>
                              <!-- <p>Browse all packages</p> -->
                              <!-- <p>RM 15,000</p>
                              <p> (1000 pax)</p> -->
                              <!-- <a href="#" class="btn btn-common" id="tekan">See more details</a><br> -->
                            </div>
                          </div>
                          <!-- END section content -->

                          <!-- MORE button  -->
                          <!-- <div class="row">
                            <div class="col-md-12">                   
                              <button class="pakejbutton" id="btn-pakej"><span> More Packages </span></button>
                            </div>
                          </div> -->


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
                      <!-- Event Section Start -->
                      <!-- <div id="event" class="drpdown-content fade-in section-padding"> -->

                        <section id="event" class="drpdown-content fade-in section-padding" style="background:white;padding-bottom:2px!important;padding-top:2px;">
                        
                          <div class="container">

                              <div class="row" style="margin-top:-35px; ">                          

                                  <div class="col-lg-3 col-md-6 col-xs-12">
                                    <div class="navcolumn" >                                
                                      <h6>Nama Event Apa</h6>
                                      <p>Date: 09/09/2020 </p>
                                      <p>Time: 10am-10pm</p>
                                      <!-- <a href="#" class=" btn-common" id="tekan">See more details</a> -->                                
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-md-6 col-xs-12">
                                    <div class="navcolumn" >                                
                                      <h6>Nama Event Apa</h6>
                                      <p>Date: 09/09/2020 </p>
                                      <p>Time: 10am-10pm</p>
                                      <!-- <a href="#" class=" btn-common" id="tekan">See more details</a> -->                                
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-md-6 col-xs-12">
                                    <div class="navcolumn" >                                
                                      <h6>Nama Event Apa</h6>
                                      <p>Date: 09/09/2020 </p>
                                      <p>Time: 10am-10pm</p>
                                      <!-- <a href="#" class=" btn-common" id="tekan">See more details</a> -->                                
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-md-6 col-xs-12">
                                    <div class="navcolumn" >                                
                                    <p></p>
                                    <span><br><a id="btn-promo" href="{{ url('/events') }}"> More upcoming events</a></span>                                
                                    </div>
                                  </div>

                              </div>                        
                              
                              <!-- <div class="w3-content w3-section" style="max-width:50%, height:20%;">
                                <img class="mySlides" src="{{asset('myasset/img/event1.jpg')}}" style="width:100%">
                                <img class="mySlides" src="{{asset('myasset/img/event2.jpg')}}" style="width:100%">          
                              </div> -->

                              <!-- MORE button  -->
                              <!-- <div class="row">
                                <div class="col-md-12">                   
                                  <button class="pakejbutton" id="btn-promo"><span>More Events </span></button>
                                </div>
                              </div> -->

                          </div>

                        </section>
                      <!-- </div> -->
                      <!----------------------------------------------------------------------- Event Section End --> 
                  </li>
                </div>            
            

                <div class="drpdown">
                  <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/islamic_center') }}">
                      <i class="fas fa-mosque"></i> Islamic Center <i class="fa fa-angle-down"></i>
                      </a>

                      <section id="islcenter" class="drpdown-content fade-in section-padding" style="background:white;padding-bottom:5px!important;padding-top:2px;">
                        
                          <div class="container">

                              <div class="row" style="margin-top:-35px; ">                          

                                  <div class="col-lg-3 col-md-6 col-xs-12">
                                    <div class="navcolumn" >
                                      <p></p>                                
                                      <h6 class="lalu">Pre-marriage Courses</h6>                       
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-md-6 col-xs-12">
                                    <div class="navcolumn" >
                                      <p></p>                                
                                      <h6 class="lalu">Related Document</h6>                         
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-md-6 col-xs-12">
                                    <div class="navcolumn" >
                                    <p></p>                                
                                      <h6  class="lalu">Nearest Pejabat Agama</h6>                        
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-md-6 col-xs-12">
                                    <div class="navcolumn" >                                
                                    <p></p>
                                    <br>
                                    <span><a id="btn-islcenter" href="{{ url('/islamic_center') }}"> More details</a></span>                                
                                    </div>
                                  </div>

                              </div>   

                          </div>

                        </section>
                  </li>
                </div> 
                            
              @if (Route::has('login'))                
                  @auth
                    <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/home') }}">
                        <i class="fas fa-columns"></i>
                        Dashboard
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/home') }}">
                        <i class="far fa-address-book"></i>
                        Contact
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/profile') }}">
                      <i class="fas fa-user-circle"></i> Profile
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
                        <!-- <i class="fas fa-sign-out-alt"></i> -->
                      </a>
                    </li>
                  @else          
              
                    <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/merchant') }}">
                      <i class="fas fa-briefcase"></i> Merchant Center
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link black" href="{{ route('login') }}">
                      <i class="fas fa-sign-in-alt"></i> Login
                      </a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link black" href="{{ route('register') }}">
                      <i class="fas fa-edit"></i> Signup
                      </a>
                    </li>
                  @endauth               
              @endif
              
            </ul>
          </div>
        </div>
      </nav>
    <!-- Navbar End -->
      
      <div class="row" style="margin-right:0!important;">
        <video autoplay muted loop id="myVideo">
          <source src="{{asset('myasset/img/vid.mp4')}}" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>

        <div class="movgcontent">         
          <img src="{{asset('myasset/img/logo.png')}}" class="slide-text animated fadeIn" id="std_logo" /> 
                <span id="std_logo_text">Every love story is beautiful, <br>but yours should be unique.<br>Let us help you design your perfect wedding event.</span>      
            
        </div>
        
      </div>
    </header>
    <!------------------------------------------------------------------------------ Header Area wrapper End -->     

    <div class="credit">
        <!-- Container Starts -->
        <div class="container" style="padding:2px;">
          <!-- Row Starts -->
          <div class="row section" style="padding:1px;">
            <!-- Footer Widget Starts -->
            <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
              <h5 class="small-tajuk">
                SAVETHEDATE
              </h5>
              <ul>
                <li><a href="" class="small-isi">About</a></li>
                
              </ul>
            </div>
            <!-- Footer Widget Ends -->

            <!-- Footer Widget Starts -->
            <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
              <h5 class="small-tajuk">
              PRODUCT
              </h5>
              <ul>
                <li><a href="" class="small-isi">Features</a></li>
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
                <li><a href="" class="small-isi">Members</a></li>
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
                <li><a href="" class="small-isi">Terms & Conditions</a></li>
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
    <!------------------------------------------------------------------------ Footer Section End-->

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

        #std_logo:hover #std_logo
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

        $('#btn-islcenter').click(function(){
          window.location.replace("{{ url('/islamic_center') }}");
        });
     
    </script>

  </body>
</html>
