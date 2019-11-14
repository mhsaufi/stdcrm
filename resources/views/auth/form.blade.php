<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 

    <title>Merchant Centre</title>

    @include('templates.header')

    <link rel="stylesheet" type="text/css" href="{{asset('myasset/select2/dist/css/select2.css')}}">

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

      .icon-circle{
        background-color: #fff  ; /*#f2f4f4; */
        color:  #5d6d7e  ; /*#aeb6bf ;*/
        border: 1px solid lightgrey;
        height: 95px;
        width: 95px;
        padding-top: 17px;
        border-radius: 50%;
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
        /*background: yellow;*/
        align-items: center;
        height: 100%;
        width: 80%;
      }

      #form_frame {
        height: 70%;
        width: 100%;
        background: white;
      }

      .form_header {
        width: 12%;
        background: black;
        padding: 0.8% 2%;
        color: white;
        font-size: 15px;
        font-stretch: expanded;
      }

      /*#FFCA28 biru*/
      /*#FFCA28*/

      .form_header_a {
        background: linear-gradient(to bottom left,#eaeded 0%,#eaeded 50%,#FFCA28 50%,#FFCA28 0%);
      }

      .form_header_a_swap {
        background: linear-gradient(to bottom left,#FFCA28 0%,#FFCA28 50%,#eaeded 50%,#eaeded 0%);
      }

      .form_header_b {
        background: linear-gradient(to bottom left,white 50%,white 50%,#eaeded 50%,#eaeded 0%);
      }

      .form_header_b_swap {
        background: linear-gradient(to bottom left,white 50%,white 50%,#FFCA28 50%,#FFCA28 0%);
      }

      .form_r_btn {
        padding: 10px 20px;
        margin-left: 15px;
        border: none;
      }

      .form_r_btn_f_cancel {
        padding: 5px 15px;
        margin-left: 15px;
        border: none;
        border-radius: 5%;
        background: #e74c3c;
        cursor: pointer;
        color: white;
      }

      .form_r_btn_f_agree {
        padding: 5px 15px;
        margin-left: 15px;
        border: none;
        border-radius: 5%;
        background: #2ecc71;
        cursor: pointer;
        color: white;
      }

      .form_r_btn_f_agree_disabled {
        padding: 5px 15px;
        margin-left: 15px;
        border: none;
        border-radius: 5%;
        cursor: not-allowed;
        background: #cdcdcd;
        color: white;
      }

      #form_personal {
        display: flex;
        flex-direction: row;
        padding: 20px 20px;
        position: absolute;
        height: 90%;
        /*background: orange;*/
        width: 100%;
      }

      #form_company {
        padding: 20px 20px;
        position: absolute;
        height: 90%;
        background: #fff;
        width: 100%;
        display: none;
      }

      .form_std {
        padding: 5px 10px;
        height: 30px;
        border: 0.01em solid #cdcdcd;
        margin-left: 15px;
        margin-right: 25px;
      }

      .form-std-select {
        padding: 5px 10px;
        height: 30px;
        border: 0.01em solid #cdcdcd;
        margin-left: 15px;
      }

      .form_std_textarea {
        border: 0.01em solid #cdcdcd;
        width: 60%;
      }

      .width-normal {
        width: 90%!important;
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
        background: #3498db;
        border: none;
        border-radius: 2%;
      }

      #reg-btn:hover {
        background: #5dade2;
      }

      .next_btn {
        background: #696969;
        color: white;
        cursor: pointer;
      }

      .next_btn_disabled {
        opacity: 0.4;
        background: #a9a9a9;
        color: white;
        cursor: not-allowed;
      }

      .signup_btn {
        background: #3ccb5f;
        color: white;
        cursor: pointer;
      }

      .signup_btn_disabled {
        opacity: 0.4;
        background: #a9a9a9;
        color: white;
        cursor: not-allowed;
      }

      #termandcondition {
        position: fixed;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        top: 25%;
        left: 20%;
        width: 60%;
        height: 50%;
        background: white;
        padding: 20px 20px;
        border-radius: 5px;
        -moz-box-shadow: 0 0 30px #888;
        -webkit-box-shadow: 0 0 30px#888;
        box-shadow: 0 0 30px #888;
        z-index: 999;
      }

      #tnc_container {
        position: relative;
        display: none;
        height: 100vh;
        width: 100vh;
        background: rgba(255,255,255, 0.7);
      }

      #content_termandcondition {
        background: #f1f1f1;
        width: 100%;
        height: 85%;
        border: 0.05em solid #b3b3b3;
        padding: 10px 10px;
        overflow-x: scroll;
      }

      #check_termandcondition {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        /*background: #a9a9a9;*/
        width: 100%;
        height: 10%;
      }

      #email_tick > img {
          width: 100%!important;
      }

      #email_tick {
          position: absolute;
          right: 12%!important;
          top: 0;
          height: 100%;
          width: 6%;
          display: flex;
          flex-direction: row;
          justify-content: space-around;
          align-items: center;
          border-top-right-radius: 4px;
          border-bottom-right-radius: 4px;
          padding: 1.3% 1.3%;
      }

      .error_text {
        font-size: 12px;
        font-weight: bold;
        font-style: italic;
        color: red;
        opacity: 0.8;
        margin-left: 20px;
      }

      #label_pw, #label_email {
        display: none;
      }

      .phone_prefix {
        position: absolute;
        height: 100%;
        width: 10%;
        background: #dcdcdc;
        top: 0;
        left: 0;
        text-align: center;
        font-size: 18px;
        padding: 2.5% 1%;
      }

      .phone_carrier {
        position: absolute;
        height: 100%;
        width: 10%;
        background: white;
        top: 0;
        right: 20%;
        text-align: center;
        font-size: 18px;
        padding: 2.5% 1%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
      }

      #phone {
        padding-left: 13%;
      }

      #carrier_logo_img {
        width: 50%!important;
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
        <div id="form_frame">
          <div style="height: 8%;width: 100%;display: flex;flex-direction: row;justify-content: flex-start;" class="animated fadeInLeft fast">
            <div class="form_header" style="background: #FFCA28;" id="a1">
              PERSONAL
            </div>
            <div id="a" class="form_header_a" style="width: 3%;"></div>
            <div class="form_header" style="background: #eaeded;" id="a2">
              COMPANY
            </div>
            <div id="b" class="form_header_b" style="width: 3%;"></div>
          </div>

          <div style="position:relative;display: flex;flex-direction: column;justify-content: space-between;height: 90%;width: 100%;" class="animated fadeInUp fast">
            <div id="form_personal">
              <div style="width: 50%;">
                <label id="label_fullname">Fullname</label><span class="error_text" id="fullname_error"></span>
                <input type="text" class="form-control width-normal" name="" id="fullname" />
                <input type="hidden" id="fullname_" value="b" />
                <label>Email <span id="label_email" style='color: red;font-size: 12px;font-weight: bold;opacity: 0.5;'><em>Invalid email given</em></span></label>
                
                <div style="position: relative;">
                  <input type="email" class="form-control width-normal" name="" id="email"/>
                  <input type="hidden" id="email_" value="b" />
                  <div id="email_tick">
                    <img src="" id="email_tick_img"/>
                  </div>
                </div>

                <label id="label_name">Name / Nickname</label><span class="error_text" id="name_error"></span>
                <input type="text" class="form-control width-normal" name="name" id="name" />
                <input type="hidden" id="name_" value="b"/>
              </div>
              <div style="width: 50%;">

                <label id="label_phone">Phone Number</label><span class="error_text" id="phone_error"></span>
                <div style="position: relative;">
                  <input type="text" class="form-control width-normal" name="" id="phone" style="width: 70%!important;"/>
                  <input type="hidden" id="phone_" value="b"/>
                  <div class="phone_prefix">
                      +6
                  </div>
                  <div class="phone_carrier">
                    <img src="" id="carrier_logo_img">
                  </div>
                </div>
                <label id="label_phone">Password <span id="label_pw" style='color: red;font-size: 12px;font-weight: bold;opacity: 0.5;'><em>Password doesnt match</em></span></label>

                <input type="password" class="form-control width-normal" name="" id="pw1" style="width: 100%!important;"/>

                <label id="label_phone">Re-Enter Password</label>

                <input type="password" class="form-control width-normal" name="" id="pw2" style="width: 100%!important;"/>

                <input type="hidden" id="pw_" value="b" />
              </div>
              
            </div>
            <div id="form_company">
              <label><input type="radio" class="huey" name="company_option" value="old" checked> Select from registered company</label>
              <select class="form-std-select c_info" id="list_company">
                <option value="0"></option>
                @foreach($company_data as $company)
                <option value="{{ $company['company_id'] }}">{{ $company['company_name'] }}</option>
                @endforeach
              </select><br><br>
              <label><input type="radio" class="huey c_info" name="company_option" value="new"> or register your new company</label>
              <div>
                Name* <input type="text" name="" id="company_name" class="form_std optional c_info">
                Contact <input type="text" name="" id="company_phone" class="form_std optional c_info">
                Email* <input type="text" name="" id="company_email" class="form_std optional c_info" style="width: 30%;"> <span id="label_c_email" style='color: red;font-size: 12px;font-weight: bold;opacity: 0.5;'><em>Invalid</em></span>
                <br><br>
                SSM* <em>(optional)</em> <input type="text" name="" id="company_ssm" class="form_std optional c_info"> 
                <span style="margin-right: 15px;">Category</span> 
                <select class="form-std-select" id="select_company_category" multiple="multiple" style="border: 0.05em solid #888!important;">
                  @foreach($categoy_data as $category)
                    <option value="{{ $category['cc_id'] }}">{{ $category['cc_title'] }}</option>
                  @endforeach
                </select>
                <br><br>
                Company Website (Optional) <input type="text" name="site" id="company_website" class="form_std optional c_info">
                <br><br>
                Address <br><textarea class="form_std_textarea optional c_info" rows="3" id="company_address"></textarea>
              </div>
            </div>
            <div style="position: absolute;bottom:0;height: 15%;width: 98%;display: flex;flex-direction: row;justify-content: flex-end;padding-bottom: 24px;z-index: 999;">
              <button class="form_r_btn next_btn_disabled" id="next">NEXT</button>
              <button class="form_r_btn signup_btn_disabled" id="signup">PROCEED</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mobile_alert_view">
      <div class="mobile_alert_view_content">
        <p>We are very sorry, merchant registration via mobile view is not allowed. Swith to desktop application to register as merchant.</p>
      </div>
    </div>

    <div id="tnc_container">
      <div id="termandcondition">
        <div id="content_termandcondition">
          @include('templates.tnc')
        </div>
        <div id="check_termandcondition">
          <div>
            <input type="checkbox" name="tnc" id="agreetnc"> I Agree to <span style="opacity: 0.6;"><b>The Terms & Conditions</b></span>
          </div>
          <div>
            <button class="form_r_btn_f_cancel" style="" id="cancel_signup">Cancel</button>
            <button class="form_r_btn_f_agree_disabled" style="" data-item-name="Register" data-content-category="Sign Up" id="agree_signup">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    
    @include('templates.footer')
    <script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>
    <script src="{{asset('myasset/js/merchant_form2.js')}}"></script>
    <script src="{{asset('myasset/select2/dist/js/select2.js')}}"></script>
    <script src="{{asset('myasset/js/email_validator.js')}}"></script>
    <script type="text/javascript">

      if($(window).width() < 600){
          $('.merchant-option').hide();
      }


      $('#signup').attr("disabled",true);
      $('#next').attr("disabled",true).addClass('next_btn_disabled');
      $('#agreetnc').prop('checked', false);
      $('#agree_signup').attr("disabled",true);
      $('#select_company_category').select2();

      $('#cancel_signup').click(function(){

        $('#tnc_container').fadeToggle();
      });

      $('#signup').click(function(){

        $('#tnc_container').fadeToggle();
      });


      $('#next').click(function(){

        var btnval = $('#next').text();

        if(btnval == 'NEXT'){

          $('#form_company').toggle().effect('slide',{direction:"right"},300);

          $('#a').removeClass('form_header_a').addClass('form_header_a_swap');
          $('#b').removeClass('form_header_b').addClass('form_header_b_swap');
          $('#a1').css("background","#eaeded");
          $('#a2').css("background","#FFCA28");

          $('#next').html("PREV");

        }else{

          $('#form_company').hide();
          $('#a').removeClass('form_header_a_swap').addClass('form_header_a');
          $('#b').removeClass('form_header_b_swap').addClass('form_header_b');
          $('#a2').css("background","#eaeded");
          $('#a1').css("background","#FFCA28");
          $('#next').html("NEXT");
        }
      });

      $('#reg-btn').click(function(){

        var url = '{{ url("/form") }}';

        window.location.replace(url);

      });

      $("#agreetnc").click(function(){ 

          if($("#agreetnc").is(":checked")){ 

              $('#agree_signup').removeClass('form_r_btn_f_agree_disabled').addClass('form_r_btn_f_agree');
              $('#agree_signup').addClass('goal_registration_vendor');

          }else{ 

              $('#agree_signup').removeClass('form_r_btn_f_agree').addClass('form_r_btn_f_agree_disabled');
              $('#agree_signup').removeClass('goal_registration_vendor');
          } 
      }); 

      function redirection(rs){

        window.location.replace("{{ url('/step_1') }}?tid=" + rs);

      }

      $('#select_company_category').change(function(){
        var cc = $( "#select_company_category" ).val();

        console.log(cc);
      });

      function register(fullname, phone, name, email, pw1, c_name, c_email, c_ssm, c_address, c_phone, cid, c_type, c_website){

        var url = '{{ url("/submit") }}';
        var token = '{{ csrf_token() }}';
        var cc = $( "#select_company_category" ).val();

        var data = {_token:token,fullname:fullname,c_website:c_website,phone:phone,cc:cc,name:name,email:email,pw:pw1,c_name:c_name,c_email:c_email,c_ssm:c_ssm,c_address:c_address,c_phone:c_phone,cid:cid, c_type:c_type};

        console.log(cc);

        $.post(url,data,function(result){

          var home = '{{ url("/home") }}';

          window.location.replace(home);
        });

      }
    </script>
      
  </body>
</html>
