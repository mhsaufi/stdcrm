<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo bg-white " 
        style="height: 80px!important;">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('myasset/img/logo.png')}}" alt="" style="width: 100% !important;"></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item">
                <a class="nav-link black" href="{{ url('/listvendor') }}">Vendors <i class="fa fa-angle-down"></i></a>
              </li>

              <!-- <li class="nav-item">
                <a class="nav-link black" href="{{ url('/planner') }}">Wedding Planners <i class="fa fa-angle-down"></i></a>
              </li> -->

              <li class="nav-item">
                <a class="nav-link black" href="{{ url('/packages') }}">
                  Packages <i class="fa fa-angle-down"></i>
                </a>
              </li>             

              <li class="nav-item">
                <a class="nav-link black" href="{{ url('/events') }}">Events <i class="fa fa-angle-down"></i></a>
              </li>              

              
                            
              @if (Route::has('login'))                
                  @auth

                    <li class="nav-item">
                        <a class="nav-link black" href="{{ url('/islamic_center') }}">
                        <i class="fas fa-mosque"></i> I-Affairs
                        </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/home') }}">
                        <i class="fas fa-columns"></i>
                        Dashboard
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/cprofile') }}">
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
                        <!-- <i class="fas fa-sign-out-alt"></i> -->
                      </a>
                    </li>
                  @else          
                    <li class="nav-item">
                        <a class="nav-link black" href="{{ url('/islamic_center') }}">
                        <i class="fas fa-mosque"></i> Islamic Affairs
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
