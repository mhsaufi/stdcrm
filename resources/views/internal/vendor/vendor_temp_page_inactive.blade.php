
<!DOCTYPE html>
<html>
<head>
	<title>Inactive</title>
	 @include('templates.header')

	<link rel="stylesheet" href="{{ asset('myasset/socialsharekit/dist/css/social-share-kit.css') }}" type="text/css">

	<style>
	 	.navbar {
	 		-moz-box-shadow: 0 0 5px #888;
	        -webkit-box-shadow: 0 0 5px#888;
	        box-shadow: 0 0 2px #888;
	 	}
		.navbar-expand-lg .navbar-nav .nav-link {
			color: black !important;
			opacity: 0.5;
		}
		.navbar-expand-lg .navbar-nav .nav-link:active{
			color: gold !important;
			opacity: 0.5;
		}
		.pattern{
			background-repeat: repeat;
			background-size:75px 75px;
			background-attachment: fixed;
			height: 250px !important;
		}

		.big_container {
			width: 100%;
			height: 100%;
			/*background: yellow;*/
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			padding: 5vh 15%;
		}

		.contact_container {
			margin-top: 10%;
		}

	 </style>

</head>
<body class="pattern">

	<!-- Header Area wrapper Starts -->
    <header id="header-wrap">
    	@include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>

    <div class="big_container">
    	<div class="contact_container">

    		<p>We are very sorry because your account is currently <span style="color: red;font-weight: bold;">inactive</span>. Contact your company administrator to reactivate your account to access all the features</p>

    	</div>
    </div>
	

    @include('templates.footer')

	<script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>

	
	<script>

	</script>
</body>
</html>