<!DOCTYPE html>
<html>
<head>
	<title>SaveTheDate | LOGIN</title>
    <link rel="icon" href="{{asset('myasset/img/tab-icon2.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/loginvendor/bootstrap/css/bootstrap.min.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
            justify-content: center;align-items: center;
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
        }
    </style>	
</head>
<body class="pattern">
	<div class="login-banner">
		<div style="width: 10%;"></div>
        <div style="width: 30%;">
            <div class="std-login-banner">
                <img src="{{asset('myasset/img/logo.png')}}" alt="" id="logo" style="width: 50% !important;cursor: pointer;"/>
                <br>
                <div class="std-login-banner-desc">
                    <p>It's free! Create an account and have your wedding ceremony fully organized. <span class="std-name">Save The Date</span> is your best deal 
                        for your reception arrangement. 
                    </p>

                    <p>If you are a vendors who wish to let us help you handling your events, proceed to our <a href="{{ url('/merchant') }}"><span class="std-name">Merchant Centre</span></a></p>
                </div>
                <span class="watermark">Copyright &copy; SaveTheDate2019</span>
            </div>
        </div>
		<div style="width: 50%;">
			<div class="std-login-form">
				<form method="POST" action="{{ route('register') }}">
					@csrf

                    <label class="std-label">Username</label>
                    <input type="text" name="name" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"/>

                    <label class="std-label">Fullname</label>
                    <input type="text" name="fullname" class="form-control"/>

                    <label class="std-label">Email</label>
                    <input type="text" name="email" class="form-control"/>

                    <label class="std-label">Password</label>
                    <input type="password" name="password" class="form-control"/>

                    <label class="std-label">Re-enter Password</label>
                    <input type="password" name="password_confirmation" class="form-control"/>

					<br>
                    <div id="error-message"></div><br>
                    <button class="std-reg-btn" id="reg-btn" type="submit">REGISTER</button><br>
                    
				</form>
			</div>
		</div>
        <div style="width: 10%;"></div>
	</div>

	<script src="{{asset('myasset/js/jquery-min.js')}}"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$('#logo').click(function(){
			window.location.replace("{{ url('/') }}");
		});
	</script>
</body>
</html>