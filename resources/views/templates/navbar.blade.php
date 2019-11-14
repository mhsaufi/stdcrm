<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="imagetoolbar" content="no" />

<!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo bg-white animated fadeInDown faster" 
    style="height: 80px!important;">
    <div class="navbar-container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a href="{{ url('/') }}" class="navbar-brand animated zoomIn fast"><img src="{{asset('myasset/img/logo.png')}}" alt=""></a>
      </div>

      <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
          <li class="nav-item">
            <a class="nav-link black" href="{{ url('/listvendor') }}" data-list-name="Our Vendors" data-content-category="Header">Vendors</a>
          </li> 

          <li class="nav-item">
            <a class="nav-link black" href="{{ url('/packages') }}">
              Packages
            </a>
          </li> 

          <li class="nav-item">
            <a class="nav-link black" href="{{ url('/events') }}">
              Events
            </a>
          </li>            

          <li class="nav-item">
              <a class="nav-link black" href="{{ url('/features') }}" data-list-name="How it works" data-content-category="Header">
              <i class="fas fa-question-circle"></i> How it works
              </a>
          </li>             

          <li class="nav-item">
            <a class="nav-link black" href="{{ url('/iaffair') }}" data-list-name="iAffair" data-content-category="Header">
            <i class="fas fa-mosque"></i> Islamic Affairs
            </a>
          </li> 
                        
          @if (Route::has('login'))                
              @auth

                @if(Auth::user()->role_id == 3)

                  @if(Auth::user()->status_id == 1)

                    <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/insider') }}">
                        <i class="fas fa-sitemap"></i> 
                        Insider
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link black" href="{{ url('/contact') }}">
                        <i class="fas fa-address-book"></i>  
                        Contact
                      </a>
                    </li>

                  @endif   

                @endif

                <li class="nav-item">
                  @if(Auth::user()->role_id == 5)
                  <a class="nav-link black" href="{{ url('/dashboard') }}">
                  @else
                  <a class="nav-link black" href="{{ url('/home') }}">
                  @endif
                    <i class="fas fa-columns"></i>
                    Dashboard <span class="badge_notification" id="global_notification">.</span>
                  </a>
                </li>

                <li class="nav-item">
                  @if(Auth::user()->status_id == 1)
                    <a class="nav-link black" href="{{ url('/profile') }}">
                  @else
                    <a class="nav-link black" href="{{ url('/home') }}">
                  @endif

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

    <div class="drawable_mobile_menu">
      <div class="drawable_mobile_menu_content">
        <div class="drawable_mobile_menu_content_list">

          @if (Route::has('login'))  

          @auth
          <div id="dashboard_page">Dashboard</div>
          @else 
          <div id="login_page">Login</div>
          @endauth

          @endif
          <div id="vendor_page">Our Vendors</div>
          <div id="package_page">Packages</div>
          <div id="event_page">Events</div>
          <div id="islamic_page">Islamic Affair</div>
          <div style="height: 15px;width:100%;border-bottom: 0.05em solid white;"></div>
          <div id="features">How It Works</div>
          <div id="about_page">About</div>
          <!-- <div id="feature_page">Features</div>
          <div id="member_page">Members</div> -->
          @if (Route::has('login'))  

          @auth
          <div id="logout">Logout <i class="fas fa-sign-out-alt"></i></div>
          @else 

          @endauth

          @endif
        </div>
      </div>
    </div>

    <script>
      var LOGOUT = '{{ route("logout") }}';
      var APP_URL = '{{ url("/") }}';
      var LOGIN = '{{ route("login") }}';
      var REGISTER = '{{ route("register") }}';
    </script>
