<!DOCTYPE html>
<html>
<head>
	<title>SaveTheDate | LOGIN</title>

	<link rel="stylesheet" type="text/css" href="{{asset('myasset/loginvendor/bootstrap/css/bootstrap.min.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="{{asset('myasset/img/tab-icon2.png')}}">
    <style>
    	a:hover {
    		text-decoration: none;
    	}
    	.login-banner {
    		margin-top: 180px;
    		box-shadow: 0 0 10px #888;
    		height: 300px;
    		background: rgba(255,255,255,0.9);
    	}

    	.pattern{
	        background-image: url("{{asset('myasset/img/IMG_7092.jpg')}}");
	        background-repeat: no-repeat;
	        background-size: cover;
	        height: 250px !important;
	    }

    	.std-login-form {
    		padding: 20px 20px;
    		margin-left: 100px;
    		padding-right: 80px;
    		border-right: 0.09em solid #968e90;
    	}
    	.std-login-form > input {
    		border-radius: 15px;
    	}
    	.std-login-btn {
    		padding: 5px 25px;
    		border: none;
    		border-radius: 3px;
    		color: white;
    		background: #FFA726;
    		float: right;
    		cursor: pointer;
    	}
    	.std-login-btn:hover {
    		background: #FFB74D;
    	}
    	.std-login-banner {
            display: flex;
            flex-direction: column;
            justify-content: center;align-items: center;
    		padding: 20px 20px;
    		margin-left: 10px;
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
    </style>	
</head>
<body class="pattern">
	<div class="row login-banner">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<div class="std-login-form">
				<form method="POST" action="{{ route('login') }}">
					@csrf

					@if ($errors->has('email'))
                        <span class="invalid-feedbacks" role="alert">
                        	Invalid email and password combination
                        </span>
                    @else
                    	<label></label>
                    @endif
					<input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"  placeholder="Email" />

					@if ($errors->has('password'))
                        <label class="invalid-feedback" role="alert">
                            {{ $errors->first('password') }}
                        </label>
                    @else
                    	<label></label>
                    @endif
					<input type="password" name="password" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="password" /><br>

					<span style="float: left;margin-left: 20px;">
						<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me </span><button class="std-login-btn" type="submit">Sign In</button>
				</form>
			</div>
		</div>
		<div class="col-md-4">
			<div class="std-login-banner">
				<img src="{{asset('myasset/img/logo.png')}}" alt="" id="logo" style="width: 50% !important;cursor: pointer;"/>
				<br>
				<div class="std-login-banner-desc">
					<p>It's free! <a href="{{ route('register') }}">Create an account </a> and have your wedding ceremony fully organized. <span class="std-name">Save The Date</span> is your best deal 
						for your reception arrangement. 
					</p>
				</div>
			</div>
		</div>
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