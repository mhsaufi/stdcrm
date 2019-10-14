<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Vendors Form</title>

    @include('templates.header')

    <style type="text/css">

      label {
      	opacity: 0.7;
      }

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

      #form-btn {
      	padding: 7px 23px;
      	border-radius: 5px;
      	background: #00CC33;
      	color: white;
      	border: none;
      	float: right;
      	cursor: pointer;
      }

      #form-btn:hover {
      	padding: 7px 23px;
      	background: #00CC66;
      	color: white;
      	border: none;
      	float: right;
      }

      .card{
        background-color: rgba (255,255,55,0.6)!important;
      }

      .ps-text {
        font-style: italic;
        opacity: 0.7;
      }
    
     #form-spaces {
     	padding: 20px 60px!important;
     	border-radius: 8px;
     }

    #event{
      /*background-image: url("{{asset('myasset/img/bg1.jpg')}}");*/
    }

    </style>
  </head>
  <body style="background-color: #ecf0f1;">

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
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('myasset/img/logo2.png')}}" alt="" style="width: 80% !important;"></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">

              <li class="nav-item">
                <a class="nav-link black" href="#event">
                  Events
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link black" href="#package">
                  Packages
                </a>
              </li>

              <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/merchant') }}">
                      <i class="fas fa-mosque"></i> Islamic Center
                      </a>
                    </li> 
                            
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
                      <a class="nav-link black" href="{{ url('/home') }}">
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
    </header>
    <!-- Header Area wrapper End -->

     <!-- Feature Section Start -->
    <div id="event" class="section-padding">
      <div class="container" id="form-spaces" style="margin-top: 40px;background-color: white;">
      	<div class="row">
      		<h5> Step 2 : Your new credential info <i class="fa fa-briefcase"></i></h5>
      	</div>
      	<form action="{{ url('/155428') }}" method="POST">
      		@csrf
        <div class="row" style="margin-top: 15px;">
        	<div class="col-lg-6 col-md-6 col-sm-6" style="padding-right: 20px;border-right: 0.01em solid grey;">
        		<label for="fullname">Username</label>
        		<input type="text" id="" name="username" class="form-control" required/>

        		<label for="fullname">Password</label>
        		<input type="password" id="" name="password" class="form-control" placeholder="" required/>

        		<label for="fullname">Retype Password</label>
        		<input type="password" id="" name="retypepassword" class="form-control" required/>
            <br><br>
            <button id="form-btn" type="submit">Register</button>
        	</div>
        	<div class="col-lg-6 col-md-6 col-sm-6">
            <p class="ps-text">
              Bar in mind that, once you are registered with this <span style="font-weight: bold;color: green;">Save The Date</span> , <br>
              you are held responsible on your own action towards anyone on this platform.
            </p>
        	</div>
        </div>
        </form>
      </div>
    </div>
    <!-- Feature Section End -->    

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <!-- <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div> -->
    <!-- End Preloader -->
    
    @include('templates.footer')
      
  </body>
</html>
