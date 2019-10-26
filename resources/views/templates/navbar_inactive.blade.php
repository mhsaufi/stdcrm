      <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo bg-white " 
    style="height: 80px!important;">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('myasset/img/logo.png')}}" alt=""></a>
      </div>

      <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
          <li class="nav-item">
            <a class="nav-link black" href="{{ url('/listvendor') }}" data-list-name="Our Vendors" data-content-category="Header">
	            	Vendors
	        </a>
          </li>

          <li class="nav-item">
            <a class="nav-link black" href="{{ url('/packages') }}">
              Packages
            </a>
          </li>             

          <li class="nav-item">
            <a class="nav-link black" href="{{ url('/events') }}" data-list-name="Events" data-content-category="Header">Events</a>
          </li>              

          <li class="nav-item">
            <a class="nav-link black" href="{{ url('/iaffair') }}" data-list-name="iAffair" data-content-category="Header">
            <i class="fas fa-mosque"></i> Islamic Affairs
            </a>
          </li> 
                        
          @if (Route::has('login'))                
              @auth

                <li class="nav-item">
                  <a class="nav-link black" href="{{ url('/home') }}">
                    <i class="fas fa-columns"></i>
                    Dashboard <span class="badge_notification" id="global_notification">.</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link black" href="#">
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
                  <a class="nav-link black" href="{{ route('login') }}" data-list-name="Sign In" data-content-category="Header">
                  <i class="fas fa-sign-in-alt"></i> Login
                  </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link black" href="{{ route('register') }}" data-list-name="Sign Up" data-content-category="Header">
                  <i class="fas fa-edit"></i> Signup
                  </a>
                </li>
              @endauth               
          @endif
          
        </ul>
      </div>
      <div class="drawable_menu_trigger">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->