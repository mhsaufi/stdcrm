<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Save The Date | Features </title>

    @include('templates.header')

    <style type="text/css">
      .features_container {
        width: 100%;
        height: auto;
        /*background: pink;*/
        padding: 10% 10%;
      }

      .features_container_child {
        width: 100%;
        height: 100vh;
        /*background: purple;*/
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
      }

      .features_container_header {
        width: 100%;
        height: 10%;
        font-size: 30px!important;
        opacity: 0.8;
        /*background: red;*/
        letter-spacing: 2px!important;
      }

      .features_container_body {
        width: 100%;
        height: 100vh;
        /*background: green;*/
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }

      .features_directory {
        position: fixed;
        width: 15%;
        /*background: blue;*/
        height: 200px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding: 1% 1%;
      }

      .features_directory_main {
        width: 100%;
        padding-bottom: 2%;
        border-bottom: 0.05em solid #d4af37;
      }

      .features_directory_child {
        padding-top: 2%;
      }

      .features_directory_main > div ,.features_directory_child > div {
        padding: 5px 0;
        font-size: 15px;
        opacity: 0.8;
        cursor: pointer;
      }

      .features_directory_main > div:hover ,.features_directory_child > div:hover {
        color: #d4af37;
      } 

      .features_content {
        width: 80%;
        /* background: yellow; */
        height: 200px;
        margin-left: 20%;
        padding: 1% 1%;
      }

      .directory_active {
        font-weight: bold;
        opacity: 0.9;
      }

    </style>

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      
    @include('templates.navbar')
    </header>

    <div class="features_container">
      <div class="features_container_child">
        <div class="features_container_header">
          <h3>How it works?</h3>
        </div>
        <div class="features_container_body">
          <div class="features_directory">
            <div class="features_directory_main">
              <div><a href="{{ url('/features') }}">Customers</a></div>
              <div class="directory_active"><a href="{{ url('/vendorfeatures') }}">Vendors</a></div>
            </div>
            <div class="features_directory_child">
              <div id="registration_v" class="directory">Registration</div>
              <div id="login_v" class="directory">Login</div>
              <div id="profile_v" class="directory">Profile</div>
              <div id="dashboard_v" class="directory">Dashboard</div>
              <div id="timeline_v" class="directory">Timeline</div>
              <div id="feedback_v" class="directory">Feedback</div>              
              <div id="insider_v" class="directory">Insider</div>
            </div>
          </div>
          <div class="features_content">
            
          </div>
        </div>
      </div>
    </div>
    
    @include('templates.footer')  

    <script src="{{ asset('myasset/js/features.js') }}"></script>  

    <!-- Javascript  -->
    <script type="text/javascript">         
      $(document).ready(function(){
	
        if(localStorage.getItem('fcpv') === null){

          $('.features_content').load('myasset/templates/features/vendor/registration_v.blade.php',function(){
            
          });

          localStorage.setItem('fcpv','myasset/templates/features/vendor/registration_v.blade.php');
          localStorage.setItem('fcpav','#registration_v');
          $('.directory').removeClass('directory_active');
          $('#registration_v').addClass('directory_active');

        }else{

          $('.features_content').load(localStorage.getItem('fcpv'),function(){
            
          });
          $('.directory').removeClass('directory_active');
          $(localStorage.getItem('fcpav')).addClass('directory_active');
        }
      });
     
    </script>

  </body>
</html>
