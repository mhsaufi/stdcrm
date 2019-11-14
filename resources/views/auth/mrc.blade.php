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

      .merchant-section-1 {
        width: 20%;
      }

      .merchant-section-2 {
        width: 70%;
      }

      .merchant-section-btn {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        margin-top: 5%;
      }

      @media (max-width: 600px){
        .merchant-option {
          position: absolute;
          top: 6%;
          /*background: yellow;*/
          /*background-image: url("{{asset('myasset/img/silk2.jpg')}}");*/
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
          display: flex;
          flex-direction: column;
          align-items: center;
          height: auto!important;
          width: 100%;
        }

        .merchant-section {
          display: flex;
          flex-direction: column!important;
          justify-content: flex-start!important;
          align-items: center;
          height: auto;
          width: 90%;
          padding-top: 50px!important;
          margin-bottom: 40px!important;
        }

        .merchant-section-1 {
          width: 100%;
          margin-left: -10%;
          margin-bottom: 20px;
        }

        .merchant-section-2 {
          width: 100%;
        }

        .merchant-section-btn {
          width: 100%;
          display: flex;
          flex-direction: row;
          justify-content: flex-end;
          margin-top: 20px;
        }

        #reg-btn {
          padding: 15px 20px;
          color: white;
          width: 100%;
          /* background: #3498db; */
          background: #d4af37;
          border: none;
          border-radius: 2%;
          cursor: pointer;
        }
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

     
      .inline-text {
        display: inline;
      }

      .inline-text > .fas {
        color: green;
        margin-right: 20px;
      }

      .merchant-option {
        /*background: yellow;*/
        /*background-image: url("{{asset('myasset/img/silk2.jpg')}}");*/
        background-repeat: no-repeat;
        background-attachment: fixed;
      	background-size: cover;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        height: 100vh;
        width: 100%;
      }

      .merchant-section {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        height: 100%;
        width: 80%;
        padding-top: 5%;
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
        <div class="merchant-section-1"><img src="{{asset('myasset/img/pm.png')}}" id="pm" class="animated rollIn slow" /></div>

        <div class="merchant-section-2" class="animated fadeIn slow" >
          <p>Client relationships are extremely important for vendors to master. The experience you provide for them often determines how smooth the event completion is. Not only that, but how clients feel about your service stand to greatly impact your reputation with future customers.</p>
          <p>That’s not to say that vendors are solely responsible for managing the client. Clients also have a duty to be clear in what they expect so that there can be no miscommunication going forward.</p>
          <p>In order to help your business, we’ve set a standard ways to manage your clients straight via our service.</p>
          <div class="merchant-section-btn" style="" class="animated fadeInDown fast" >
            <button id="reg-btn">Register Now</button>
          </div>
        </div>

      </div>

      @include('templates.external_footer')
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
