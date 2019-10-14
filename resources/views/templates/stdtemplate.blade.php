<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard</title>

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

      .title-forecast {
        font-weight: bold;
        font-size: 0.9em;
        opacity: 0.8;
      }

      .card{
        background-color: rgba (255,255,55,0.6)!important;
      }

      .event-title {
        font-weight: bold;
        font-size: 1.1em;
      }

      .event-date {
        font-style: italic;
        opacity: 0.8;
      }

      .event-venue {
        opacity: 0.9;
      }

      .first {
        border-left: 0.05em solid #cfd8dc;
      }

      .header-forecast {
        display: flex;
        justify-content: space-between;
        margin-left: -29px!important;
        padding: 15px 20px;
        background-image: linear-gradient(#fff, #eceff1);
        border-top: 0.05em solid #cfd8dc;
        border-bottom: 0.05em solid #cfd8dc;
        border-right: 0.05em solid #cfd8dc;
      }

      .sub-title-forecast {
        font-style: italic;
        opacity: 0.7;
        font-size: 0.7em;
      }

      .content-forecast {
        margin-left: -30px!important;
        padding: 15px 20px;
        border: 0.05em solid #cfd8dc;
        cursor: pointer;
        background: #ffff;
      }

      .content-forecast:hover {
        background-image: linear-gradient(#fff,#fffde7);
      }

      .forecast-first {
        border-left: 0.05em solid #cfd8dc;
      }

      .form-control-std {
        padding: 9px;
        border-radius: 10px;
        border: 0.05em solid #cfd8dc;
      }

      .form-control-std:focus {
        border: 0.08em solid #c5cae9;
      }

      .std-row {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }

      .std-btn {
        padding: 10px 20px;
        background: #009900;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        margin-right: 20px;
        float: left;
      }

      .std-btn:hover {
        background: #009933;
      }

      .search-users {
        float: right;
        margin-right: 30px;
      }

      .view-btn {
        height: 39px;
        padding: 10px 10px;
        border-top: 0.05em solid #cfd8dc;
        border-bottom: 0.05em solid #cfd8dc;
        border-right: 0.05em solid #cfd8dc;
        cursor: pointer;
        float: left;
        background: #ffff;
      }

      .view-btn-history {
        border: 0.05em solid #cfd8dc;
        float: left;
        margin-left: 30px;
        opacity: 1.0;
        cursor: pointer;
        padding: 10px 20px;
        background: #ffff;
      }

      .active-view {
        background: #fffde7;
      }

      .view-btn:hover {
        background: #fffde7;
      }

      .view-btn-history:hover {
        opacity: 0.9;
        background: #fffde7;
        border-radius: 5px;
      }

      #event{
        background-image: url("{{asset('myasset/img/bg1.jpg')}}");
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
                <a class="nav-link black" href="#event">
                  Events
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link black" href="#package">
                  Packages
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
    <br>
     <!-- Feature Section Start -->
    <div class="section-padding">
      <div class="container">

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
