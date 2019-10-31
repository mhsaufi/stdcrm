<meta name="viewport" content="width=device-width, initial-scale=1">

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
                        
          @if (Route::has('login'))                
              @auth

                <li class="nav-item">
                  <a class="nav-link black" href="{{ url('/home') }}">
                    <i class="fas fa-columns"></i>
                    Dashboard <span class="badge_notification" id="global_notification">.</span>
                  </a>
                </li>

                <li class="nav-item">

                    <a class="nav-link black" href="{{ url('/home') }}">

                      <i class="fas fa-user-circle"></i> Administrator 
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
  
  <script>
    var LOGOUT = '{{ route("logout") }}';
    var APP_URL = '{{ url("/") }}';
    var LOGIN = '{{ route("login") }}';
    var REGISTER = '{{ route("register") }}';
  </script>
