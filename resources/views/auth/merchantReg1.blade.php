<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SaveTheDate | HOME</title>

    @include('templates.header')

    <style type="text/css">

      #label-category{
        background-color: white;
        align-self: flex-start;
        width: 18%;
        height: 60px;
        padding-top: 8px;
        margin-top: 5px;
        border-radius: 10px 10px 0 0;  
        border: none;     
      }
      
      #label-category p{
        font-weight: bold;
        opacity: 0.4;
      }

      .label-carousel{
      	width: 50%;
      	height: 270px;
      	background-color:  rgba(254, 249, 231, 0.8);
      	color: blue;
      	border-radius: 30px 0 30px 0;
      	margin-left: 620px;
      	margin-top: -30px;
      	padding: 10px;
      }

      .label-carousel img{
      	width: 200px;
      } 

      .icon-circle{
        background-color: #fff  ; /*#f2f4f4; */
        color:  #5d6d7e  ; /*#aeb6bf ;*/
        border: 1px solid lightgrey;
        height: 95px;
        width: 95px;
        padding-top: 17px;
        border-radius: 50%;
      } 

      .icon-circle:hover{
        background-color: white;
        color:  #d4ac0d ;
        border: 2px solid gold;
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
      	background-size: cover;
      	height: 250px !important;
      }

      #btn-register{
      	border-radius: 10px;
      	height: 40px;
      	background-color: green;
      	color: white;		
      }

      #btn-seemore{
      	border-radius: 10px;
      	height: 40px;
      	background-color: blue;
		color: white;
      }

      #reg_form{
          margin-top: 50px;
          background-color: rgba(255,255,255,0.6);
          border-radius: 5px;
          padding: 20px;
      }
      
      #nxt_btn{
        padding: 5px 20px;
        background-color:  #3498db ;
        color: white;
        border-radius: 5px;
        margin-top: 20px;
      }

      #nxt_btn:hover{
          cursor: pointer;
          background-color: #5dade2; 
      }

    </style>
  </head>
  <body class="pattern">

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo bg-white ">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('myasset/img/logo2.png')}}" alt="" style="width: 30% !important;"></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">

              <li class="nav-item">
                <a class="nav-link black" href="#about">
                  Events
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link black" href="#services">
                  Packages
                </a>
              </li>           
              
              <li class="nav-item">
                <a class="nav-link black" href="{{ route('register') }}">
                <i class="fas fa-briefcase"></i> Merchant Center
                </a>
              </li>
                            
              @if (Route::has('login'))                
                  @auth
                    <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/home') }}">
                        Dashboard
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

      <!-- sliders -->
      <div id="sliders">
        <div class="full-width">
          <!-- light slider -->
          <div id="light-slider" class="carousel slide">
            <div id="carousel-area">
              <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">

                  <div class="carousel-item active">
                    <img src="{{asset('myasset/img/slider/bg-1.jpg')}}" alt="" style="height:250px;margin-top: 55px;">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End sliders -->

    </header>
    <!-- Header Area wrapper End -->
    
    <div class="container" id="reg_form">
        <p>Let's start with choosing your business type:</p>
        <form class="login100-form" action="{{ url('/step_1') }}" method="GET">
        @csrf
            <div class="radio">
                <label><input type="radio" name="mtype" value="vendors"/> Vendors</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="mtype" value="planners"/> Wedding Planners</label>
            </div>

            <button id="nxt_btn" type="submit">Next</button>
        </form>
    </div>


    
    @include('templates.footer')
      
  </body>
</html>
