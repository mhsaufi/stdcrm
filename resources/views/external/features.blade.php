<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Save The Date | Features </title>

    @include('templates.header')

    <meta name="page_site" content="savethedate-my.com">
    <meta name="page_language" content="English">
    <meta name="page_type" content="Features">
    <meta name="page_title" content="How It Works">
    <meta name="page_content" content="How It Works">

    <style type="text/css">
      .features_container {
        width: 100%;
        min-height: auto!important;
        /*background: pink;*/
        padding: 10% 10% 0 10%;
      }

      .features_container_child {
        width: 100%;
        height: auto;
        /*background: purple;*/
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
      }

      .features_container_header {
        position: fixed;
        width: 100%;
        height: 10%;
        font-size: 30px!important;
        opacity: 0.8;
        /*background: red;*/
        letter-spacing: 2px!important;
      }

      .features_container_body {
        width: 100%;
        height: auto!important;
        position: relative;
        /*background: green;*/
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .features_directory {
        position: fixed;
        width: 15%;
        margin-top: 5%;
        /*background: blue;*/
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding: 1% 1%;
      }

      @media (max-width: 600px){
        .features_container_body {
          width: 100%;
          height: auto;
          position: relative;
          /*background: green;*/
          display: flex;
          flex-direction: column!important;
          justify-content: flex-start;
        }

        .features_directory {
          position: initial;
          width: 100%;
          margin-top: 20%;
          /*background: blue;*/
          height: auto;
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
          padding: 1% 1%;
          margin-bottom: 20px;
          /*background: blue;*/
        }

        .features_content {
          width: 100%!important;
          /*background: yellow;*/
          margin: 0!important;
          padding: 1% 0!important;
        }

        .features_container {
          width: 100%;
          min-height: auto!important;
          /*background: pink;*/
          padding: 10% 5%;
        }

        .features_container_child {
          width: 100%;
          height: auto;
          /*background: purple;*/
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
        }
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
        /*background: yellow;*/
        height: auto!important;
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
        <div class="features_container_header animated fadeInDown fast">
          <h3>How it works?</h3>
        </div>
        <div class="features_container_body">
          <div class="features_directory animated fadeInLeft fast">
            <div class="features_directory_main">
              <div class="directory_active"><a href="{{ url('/features') }}">Customers</a></div>
              <div><a href="{{ url('/vendorfeatures') }}">Vendors</a></div>
            </div>
            <div class="features_directory_child">
              <div id="registration" class="directory">Registration</div>
              <div id="login" class="directory">Login</div>
              <div id="profile" class="directory">Profile</div>
              <div id="start" class="directory">Start Planning</div>
              <div id="dashboard" class="directory">Dashboard</div>
              <!-- <div id="feedback" class="directory">Feedback</div> -->
            </div>
          </div>
          <div class="features_content animated fadeIn fast">
            
          </div>
        </div>
      </div>
    </div>

    @include('templates.external_footer')

    <script src="{{ asset('myasset/js/features.js') }}"></script>  
    <script src="{{asset('myasset/mobile_menu/mobile_menu.js')}}"></script>
    <script type="text/javascript">         
      $(document).ready(function(){
	
        if(localStorage.getItem('fcp') === null){

          $('.features_content').load('myasset/templates/features/customer/registration.blade.php',function(){
            
          });

          localStorage.setItem('fcp','myasset/templates/features/customer/registration.blade.php');
          localStorage.setItem('fcpa','#registration');
          $('.directory').removeClass('directory_active');
          $('#registration').addClass('directory_active');

        }else{

          $('.features_content').load(localStorage.getItem('fcp'),function(){
            
          });
          $('.directory').removeClass('directory_active');
          $(localStorage.getItem('fcpa')).addClass('directory_active');
        }
      });
     
    </script>
  </body>
</html>
