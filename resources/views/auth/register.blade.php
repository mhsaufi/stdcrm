<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SaveTheDate | Registration</title>
    <link rel="icon" href="{{asset('myasset/img/tab-icon2.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/loginvendor/bootstrap/css/bootstrap.min.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

         <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WM6WPDB');</script>
    <!-- End Google Tag Manager -->

    <style>
    	a:hover {
    		text-decoration: none;
    	}
    	.login-banner {
            position: absolute;
            display: flex;
            flex-flow: row wrap;
            align-items: center;
            justify-content: space-between;
    		box-shadow: 0 0 10px #888;
    		height: 100%;
    		background: rgba(255,255,255,0.9);
            width: 100%;
    	}

        .login-banner > div:nth-child(1){
            width: 5%;
        }

        .login-banner > div:nth-child(2){
            width: 45%;
        }

        .login-banner > div:nth-child(3){
            width: 45%;
        }

        .login-banner > div:nth-child(4){
            width: 5%;
        }

        @media (max-width: 600px){
            .login-banner {
                position: absolute;
                display: flex;
                flex-flow: column;
                align-items: flex-start;
                justify-content: flex-start;
                box-shadow: 0 0 0 #fff;
                height: auto;
                background: rgba(255,255,255,0.6);
                width: 100%;
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .login-banner > div:nth-child(1){
                width: 100%;
            }

            .login-banner > div:nth-child(2){
                width: 100%;
            }

            .login-banner > div:nth-child(3){
                width: 100%;
            }

            .std-login-banner {
                display: flex;
                flex-direction: column;
                justify-content: center;
                /*align-items: center;*/
                padding: 20px 20px;
                margin-left: 0!important;
                border-right: 0;
            }

            .std-login-banner-desc {
                padding-top: 0;
                padding-left: 0;
                text-align: center;
            }

            .pattern{
                background-image: url("{{asset('myasset/img/IMG_7092.jpg')}}");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: fixed!important;
                background-attachment: fixed; 
                min-height: 100vh!important;
            }

            #phone_prefix {
                position: absolute;
                left: 0;
                top: 0;
                height: 100%;
                width: 15%!important;
                background: #dcdcdc;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                border-top-left-radius: 4px;
                border-bottom-left-radius: 4px;
            }

            #phone {
                padding-left: 80px!important;
            }

            .phone_input_container {
                position: relative;
                padding-left: 40px!important;
            }

            #carrier_logo {
                position: fixed;
                right: 8px!important;
                top: 0;
                height: 40px!important;
                width: 30px!important;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px;
                padding: 0 4px!important;
            }

            #carrier_logo > img {
                width: 100%;
            }

            #email_tick {
                position: fixed;
                right: 10px!important;
                top: 0;
                height: 45px!important;
                width: 35px!important;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px;
                padding: 0 4px!important;
            }

            #email_tick > img {
                width: 100%;
            }
        }

    	.pattern{
	        background-image: url("{{asset('myasset/img/IMG_7092.jpg')}}");
	        background-repeat: no-repeat;
	        background-size: cover;
	        height: 100%;
            overflow-x: hidden;
	    }

        .std-label {
            opacity: 0.7;
            margin-top: 15px;
        }

    	.std-login-form {
    		padding: 20px 20px;
    	}
    	.std-login-form > input {
    		border-radius: 15px;
    	}
    	.std-login-btn {
    		padding: 5px 25px;
    		border: none;
    		border-radius: 3px;
    		color: white;
    		background: #d6002a;
    		float: right;
    		cursor: pointer;
    	}
    	.std-login-btn:hover {
    		background: #e9002e;
    	}
    	.std-login-banner {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
    		padding: 20px 20px;
    		margin-left: 10px;
            border-right: 0.09em solid #968e90;
    	}
    	.std-login-banner-desc {
    		padding-top: 20px;
    		padding-left: 20px;
    	}
    	.std-name {
    		font-weight: bold;
    		font-style: italic;
    		color: #CC0066;
    	}
    	.invalid-feedbacks {
    		color: red;
    		font-weight: bold;
    		font-size: 0.8em;
    	}

        .std-reg-btn {
            border: none;
            background: #27ae60;
            color: white;
            padding: 10px 15px;
            cursor: pointer;
        }

         .std-reg-btn:disabled {
            border: none;
            background: #dcdcdc;
            color: white;
            padding: 10px 15px;
            cursor: default;
        }

        .error {
            margin-left: 20px;
            color: #e74c3c;
            font-weight: 700;
            font-style: italic;
            font-size: 12px;
            opacity: 0.7;
            /*display: none;*/
        }

        .phone_input_container {
            position: relative;
        }

        .email_input_container {
            position: relative;
        }

        #phone_prefix {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 5%;
            background: #dcdcdc;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        #phone {
            padding-left: 6%!important;
        }

        #carrier_logo {
            position: absolute;
            right: 0!important;
            top: 0;
            height: 100%;
            width: 5%;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            padding: 1% 1%;
        }

        #carrier_logo > img {
            width: 100%!important;
        }
        #email_tick > img {
            width: 100%!important;
        }

        #email_tick {
            position: absolute;
            right: 0!important;
            top: 0;
            height: 100%;
            width: 5%;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            padding: 1.3% 1.3%;
        }


    </style>	
</head>
<body class="pattern">
	<div class="login-banner">
		<div></div>
        <div>
            <div class="std-login-banner">
                <img src="{{asset('myasset/img/logo.png')}}" alt="" id="logo" style="width: 50% !important;cursor: pointer;"/>
                <div class="std-login-banner-desc">
                    <p>It's free! Create an account and have your wedding ceremony fully organized. <span class="std-name">Save The Date</span> is your best deal 
                        for your reception arrangement. 
                    </p>

                    <p>If you are a vendors who wish to let us help you handling your events, proceed to our <a href="{{ url('/merchant') }}"><span class="std-name">Merchant Centre</span></a></p>
                </div>
                <span class="watermark">Copyright &copy; SaveTheDate2019</span>
            </div>
        </div>
		<div>
			<div class="std-login-form">
				<form method="POST" action="{{ route('register') }}">
					@csrf

                    <label class="std-label">Username</label><span class="error" id="error_name"></span>
                    <input type="text" name="name" id="name" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"/>
                    <input type="hidden" id="c_name" name="">

                    <label class="std-label">Fullname</label><span class="error" id="error_fullname"></span>
                    <input type="text" name="fullname" id="fullname" class="form-control" />
                    <input type="hidden" id="c_fullname" name="">

                    <label class="std-label">Email</label><span class="error" id="error_email"></span>
                    <div class="email_input_container">
                        <input type="text" name="email" id="email" class="form-control"/>
                        <input type="hidden" id="c_email" name="">
                        <div id="email_tick"><img src="" id="email_tick_img"/></div>
                    </div>

                    <label class="std-label">Phone No</label><span class="error" id="error_phone"></span>
                    <div class="phone_input_container">
                        <div id="phone_prefix"> +6 </div>
                        <input type="text" name="phone" id="phone" class="form-control"/>
                        <input type="hidden" id="c_phone" name="">
                        <div id="carrier_logo"><img src="" id="carrier_logo_img"/></div>
                    </div>

                    <label class="std-label">Password</label><span class="error" id="error_password"></span>
                    <input type="password" name="password" id="password" class="form-control"/>
                    <input type="hidden" id="c_password" name="">

                    <label class="std-label">Re-enter Password</label><span class="error" id="error_password1"></span>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"/>
                    <input type="hidden" id="c_password_confirmation" name="">

					<br>
                    <div id="error-message"></div><br>
                    <button class="std-reg-btn" id="reg-btn" type="submit" data-item-name="Register" data-content-category="Sign Up" disabled>REGISTER</button><br>
                    
				</form>
			</div>
		</div>
        <div></div>
	</div>

	<script src="{{asset('myasset/js/jquery-min.js')}}"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="{{asset('myasset/js/email_validator.js')}}"></script>
	<script type="text/javascript">

        $(document).ready(function(){

            $('#name').val('');
            $('#fullname').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#password').val('');
            $('#password_confirmation').val('');

            $('#reg-btn').prop('disabled',true);
        });

		$('#logo').click(function(){
			window.location.replace("{{ url('/') }}");
		});

        $('#name').blur(function(){

            var name = $('#name').val();

            if(name == ''){

                $('#error_name').html('Required');

                $('#c_name').val('b');

            }else{

                $('#c_name').val('a');

                $('#error_name').html('');
            }

            enable();

        });

        $('#fullname').blur(function(){

             if(fullname == ''){

                 $('#error_fullname').html('Required');

                 $('#c_fullname').val('b');

            }else{

                $('#c_fullname').val('a');

                $('#error_fullname').html('');
            }

            enable();
        });

        $('#email').blur(function(){

            var email = $('#email').val();

            if(email == ''){

                $('#error_email').html('Required');

                $('#c_email').val('b');

            }else{

                $('#error_email').html('');

                emailValidator(email);
            }

            enable();
        });

        $('#phone').blur(function(){

            var phone = $('#phone').val();

            if(phone == ''){

                $('#error_phone').html('Required');

                $('#c_phone').val('b');

            }else{

                $('#error_phone').html('');

                phoneValidator(phone);
            }

            enable();
        });

        $('#password').blur(function(){

            var password = $('#password').val();

            if(password == ''){

                $('#error_password').html('Required');

                $('#c_password').val('b');

            }else{

                if(password.length < 8){

                    $('#error_password').html('Must be at least 8 character');
                    $('#c_password').val('b');

                }else{

                    $('#error_password').html('');
                    $('#c_password').val('a');

                }
            }

            enable();
        });

        $('#password_confirmation').blur(function(){

            var password = $('#password').val();
            var password_confirmation = $('#password_confirmation').val();

            if(password_confirmation == ''){

                $('#error_password').html('Required');
                $('#c_password_confirmation').val('b');

            }else{

                $('#error_password').html('');

                if(password == password_confirmation){

                    $('#error_password').html('');

                    $('#c_password_confirmation').val('a');

                }else{

                    $('#error_password').html('Password does not match');
                    $('#c_password_confirmation').val('b');

                }

            }

            enable();
        });

        function enable(){

            var a_error = $('#c_name').val();
            var b_error = $('#c_fullname').val();
            var c_error = $('#c_email').val();
            var e_error = $('#c_phone').val();
            var f_error = $('#c_password').val();
            var g_error = $('#c_password_confirmation').val();
            var total_error = a_error +''+ b_error +''+ c_error +''+ e_error +''+ f_error +''+ g_error;

            console.log("Current value for error : " + total_error);

            if(total_error == 'aaaaaa'){

                $('#reg-btn').prop('disabled',false);
                $('#reg-btn').addClass('goal_registration_customer');

            }else{

                $('#reg-btn').prop('disabled',true);
            }
        }
	</script>
</body>
</html>