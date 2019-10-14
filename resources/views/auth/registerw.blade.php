<!DOCTYPE html>
<html lang="en">
<head>
	<title>SaveTheDate | REGISTER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{asset('myasset/img/loginimg/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/loginvendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/fonts/loginfonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/fonts/loginfonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/loginvendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/loginvendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/loginvendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/css/login/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/css/login/main.css')}}">
<!--===============================================================================================-->
<style>
	#logo{
		background-image: url("{{asset('myasset/img/loginimg/bg1.jpg' )}}" );
	}
	
	.invalid-feedback{
		color: red;
		opacity: 0.6;

	}
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" id="logo">
			<div class="wrap-login100 p-t-190 p-b-10">
				<div id="form-container">

					<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">

						@csrf

						<div class="login100-form-avatar" onclick="goHome()">
							<img src="{{asset('myasset/img/loginimg/logo2.png')}}" alt="AVATAR">
						</div>

						@if ($errors->has('name'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
						@endif

						@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif

						@if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif

						<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
							<input class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Name">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
							
							<input class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="Email Address">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
							
							<input class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-unlock"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
								<input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required placeholder="Confirm Password">
                                
								<!-- <input class="input100 form-control" type="password_confirmation" name="pass" > -->
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock"></i>
							</span>
						</div>

						<div class="container-login100-form-btn p-t-10">
							<button type="submit" class="login100-form-btn">
								Register
							</button>
						</div>

						<div class="text-center w-full p-t-25">
							<p>Already have account?  <a href="#" class="txt1">Sign in</a> </p>
														
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<!-- <script src="{{asset('myasset/loginvendor/jquery/jquery-3.2.1.min.js')}}"></script> -->
<!--===============================================================================================-->
<script src="{{asset('myasset/loginvendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('myasset/loginvendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('myasset/loginvendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<!-- <script src="{{asset('myasset/js/loginjs/main.js')}}"></script> -->

<script type="text/javascript">
	function goHome(){
		window.location.replace("{{ url('/') }}");
	}
</script>

</body>
</html>