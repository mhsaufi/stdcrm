<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Merchant Centre</title>

    @include('templates.header')

    <link rel="stylesheet" type="text/css" href="{{asset('myasset/css/animate-std.css')}}">

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

     
      .inline-text {
        display: inline;
      }

      .inline-text > .fas {
        color: green;
        margin-right: 20px;
      }

      .merchant-option {
        position: absolute;
        top: 5%;
        /*background: yellow;*/
        background-image: url("{{asset('myasset/img/silk2.jpg')}}");
        background-repeat: no-repeat;
        background-attachment: fixed;
      	background-size: cover;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 95%;
        width: 100%;
      }

      .merchant-section {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        /* background: yellow; */
        align-items: center;
        height: 100%;
        width: 80%;
      }

      .navbar-expand-lg .navbar-nav .nav-link {
        color: black !important;
        opacity: 0.5;
      }
      .navbar-expand-lg .navbar-nav .nav-link:active{
        color: gold !important;
        opacity: 0.5;
      }

      .std-v-icon {
        width: 30%!important;
        margin-bottom: 30px;
      }

      #pm {
        -webkit-transition: transform 1s;
      }

      #pm:hover {
        transform: rotate(60deg);
      }

      #reg-btn {
        padding: 15px 20px;
        color: white;
        /* background: #3498db; */
        background: #d4af37;
        border: none;
        border-radius: 2%;
        cursor: pointer;
      }

      #reg-btn:hover {
        /* background: #5dade2; */
        background:#bb9928;
      }
     	  
    </style>
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->

    <div class="merchant-option">

      <div class="merchant-section">
        <div style="width: 30%; margin-top:-7%;"><img src="{{asset('myasset/img/pm.png')}}" id="pm" class="animated rollIn fast" /></div>

        <div style="width: 70%;" class="animated fadeIn slow" >
          <p>Client relationships are extremely important for vendors to master. The experience you provide for them often determines how smooth the event completion is. Not only that, but how clients feel about your service stand to greatly impact your reputation with future customers.</p>
          <p>That’s not to say that vendors are solely responsible for managing the client. Clients also have a duty to be clear in what they expect so that there can be no miscommunication going forward.</p>
          <p>In order to help your business, we’ve set a standard ways to manage your clients straight via our service.</p>
          <div style="width: 100%;display: flex;flex-direction: row;justify-content: flex-end;margin-top: 5%;" class="animated fadeInRight fast" >
            <button id="reg-btn">Register Now</button>
          </div>
        </div>

      </div>
    </div>

    
    @include('templates.footer')

    <script type="text/javascript">

      function redirection(rs){
        window.location.replace("{{ url('/step_1') }}?tid=" + rs);
      }

      $('#reg-btn').click(function(){

        var url = '{{ url("/form") }}';
        window.location.replace(url);
      });

    </script>
      
  </body>
</html>
