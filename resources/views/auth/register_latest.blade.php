<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- jQuery  -->
	<script src="{{asset('myasset/js/jquery-min.js')}}"></script>
	<script src="{{asset('myasset/js/registerpage.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/css/bootstrap.min.css')}}" >

    <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css?family=Galada');

    	html, body {
    		height: 100%!important;
			margin: 0;
			overflow-x: hidden;
    	}

    	.fullscreen {
		    height: 100%!important;
		    background: rgba(255,204,255,0.5);
		}

    	#sign-up-now {
		    font-family: "Galada", cursive;
		    font-weight: bold;
		    text-align: center;
		    font-size: 45px;
		    letter-spacing: 3px;
		    word-spacing: 1px;
		    color: rgb(204, 0, 92);
		    background-color: rgb(255, 255, 255);
		    text-shadow: rgb(0, 0, 0) 0px 0px 0px;
		}

    	.pattern{
	      	background-image: url("{{asset('myasset/img/1.jpg')}}");
	      	background-repeat: no-repeat;
	        background-attachment: fixed;
	      	background-size: cover;
	      	height: 100%!important;
	    }

    	/*-----------------------------------------------------------*/

    	#error-message {
    		font-size: 0.8em;
    		font-style: italic;
    		font-weight: bold;
    		color: #d32e0b;
    		margin-top: 20px!important;
    		opacity: 0.8;
    	}

    	#logo {
    		margin-left: 20px;
    		margin-top: 10px;
    		/*box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);*/
    		-webkit-filter: drop-shadow(5px 5px 5px #222);
    		filter: drop-shadow(3px 3px 3px #888); 
    		cursor: pointer;
    	}

    	.left {
    		padding-left: 40px;
    		padding-top: 40px;
    	}

    	.reg-link {
    		font-weight: bold;
    		color: #ff0068;
    		font-size: 1.1em;
    		text-shadow:0 0 1px rgba(255, 255, 255, 1.0);
    		border: none;
    		padding: 10px 20px;
    		background: #fff;
    		border-radius: 10px;
    	}

    	.reg-link:hover {
    		text-decoration: none;
    		color: #fff;
    		background: #ff0068;
    	}

    	.right {
    		background: #fff;
    		-webkit-box-shadow:0 0 10px rgba(0, 0, 0, 0.5);
        	-moz-box-shadow:0 0 10px rgba(0, 0, 0, 0.5);
        	box-shadow:0 0 10px rgba(0, 0, 0, 0.7);
        	height: 100%!important;
        	padding: 40px 50px;
    	}

    	.std-input {
    		border: 0.05em solid #999;
    		border-radius: 3px;
    		margin-bottom: 10px;
    		padding: 8px 20px;
    		vertical-align: center;
    		width: 100%;
    	}

    	.std-input:focus {
    		background: #FAF098;
    	}

    	.std-label {
    		opacity: 0.8;
    	}

    	.std-reg-btn {
    		background: #ff0068;
    		border: none;
    		border-radius: 2px;
    		color: #fff;
    		cursor: pointer;
    		font-weight: bold;
    		letter-spacing: 4px;
    		opacity: 0.9;
    		padding: 8px 20px;
    		width: 100%;
    	}

    	.std-reg-btn:hover {
    		opacity: 1.0;
    	}

    	.std-reg-btn:disabled {
    		opacity: 0.5;
    		cursor: auto;
    	}

    	.watermark {
    		position: absolute;
    		bottom: 0;
    		left: 0;
    		margin-left: 140px;
    		margin-bottom: 20px;
    		font-size: 0.9em;
    		opacity: 0.8;
    	}

    	/*------------------------------------------------------------*/
    </style>
</head>
<body class="pattern">
	<div class="row fullscreen">
		<div class="col-md-8 col-sm-12 left">
			<img src="{{asset('myasset/img/logo.png')}}" height="30%" id="logo" onclick="goHome()">
			<br>
			<div class="row" style="margin-left: 30px;margin-top: 40px;">
				<div class="col-md-3">
					<a class="reg-link" href="{{ url('/merchant') }}">
	                	<i class="fas fa-mosque"></i> Islamic Center
	                </a>
				</div>
				<div class="col-md-3">
					<a class="reg-link" href="{{ url('/merchant') }}">
                    	<i class="fas fa-briefcase"></i> Merchant Center
                    </a>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 right">
			<form method="POST" action="{{ route('register') }}">
				@csrf
				<p id="sign-up-now">Sign Up Now!</p>
				<label class="std-label">Username</label>
				<input type="text" name="name" class="std-input"/>
				<label class="std-label">Email</label>
				<input type="text" name="email" class="std-input"/>
				<label class="std-label">Password</label>
				<input type="password" name="password" class="std-input"/>
				<label class="std-label">Re-enter Password</label>
				<input type="password" name="password_confirmation" class="std-input"/>
				<br>
				<div id="error-message"></div><br>
				<button class="std-reg-btn" id="reg-btn" type="submit">REGISTER</button><br>
				<span class="watermark">Copyright &copy; SaveTheDate2019</span>
			</form>
		</div>
	</div>

	<script type="text/javascript">
	function goHome(){
		window.location.replace("{{ url('/') }}");
	}
</script>
</body>
</html>