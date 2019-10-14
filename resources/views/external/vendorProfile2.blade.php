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

      h2 {
    font-size: 26px;
    margin: 20px 0;
    text-align: center;
    }
  
    .responsive-table li{
      border-radius: 5px;
      padding: 20px 30px;
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;      
    }

    .table-row {
      background-color: rgba(255,255,255,0.8);
      box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
      height: 150px !important;
    }

    .responsive-table .col-1 {
      flex-basis: 25%;
      text-align: center;
    }
    .responsive-table .col-2 {
      flex-basis: 30%;
      text-align: center;
    }
    .responsive-table .col-3 {
      flex-basis: 30%;
      text-align: center;
    }
  
    .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
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
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('myasset/img/logo2.png')}}" alt="" style="width: 85% !important;"></a>
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
      <div class="container pattern">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="{{asset('myasset/vendors/ain.png')}}" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                               <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">Ain Ayunni Photography</a></h2>
                                    <h6 class="d-block"><a href="javascript:void(0)">1,500</a> Video Uploads</h6>
                                    <h6 class="d-block"><a href="javascript:void(0)">300</a> Blog Posts</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Our Packages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="basicInfo-tab" data-toggle="tab" href="#" role="tab" aria-controls="basicInfo" aria-selected="true">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="basicInfo-tab" data-toggle="tab" href="#" role="tab" aria-controls="basicInfo" aria-selected="true">Contact Us</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Owner's Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Ain Ayunni
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Establish</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                May, 2016.
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Address</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Damansara, Kuala Lumpur
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Instagram account</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                @ainayunni.photography
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Facebook account</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                ainayunni.photography
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Gallery</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <table class="w3-table">
                                                    <tr>
                                                        <td><img src="{{asset('myasset/vendors/img2.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                        <td><img src="{{asset('myasset/vendors/img1.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                        <td><img src="{{asset('myasset/vendors/img5.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{asset('myasset/vendors/img4.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                        <td><img src="{{asset('myasset/vendors/img3.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                        <td><img src="{{asset('myasset/vendors/img8.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{asset('myasset/vendors/img11.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                        <td><img src="{{asset('myasset/vendors/img6.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                        <td><img src="{{asset('myasset/vendors/img9.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{asset('myasset/vendors/img10.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                        <td><img src="{{asset('myasset/vendors/img7.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                        <td><img src="{{asset('myasset/vendors/img12.jpg')}}" style="max-width: 250px; height: 180px"/></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <hr />

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                        Facebook, Google, Twitter Account that are connected to this account
                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
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

    <script>
        document.getElementById("vend1").onclick = function () {
            location.href = "profile_vendor2.html";
        };

        document.getElementById("vend2").onclick = function () {
            location.href = "profile_vendor.html";
        };
    </script>
      
  </body>
</html>
