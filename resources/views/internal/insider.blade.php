
<!DOCTYPE html>
<html>
<head>
	<title>Insider</title>
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
			min-height: 100vh;
			/*background: yellow;*/
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			padding: 5vh 15%;
		}

		.contact_container {
			/*border-top: 0.05em solid #d4af37;*/
			width: auto;
			min-height: 100%;
			/*background: red;*/
			margin: 2% 0;
			padding: 2% 0;
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
		}

		.contact_container > .header {
			position: relative;
			width: 100%;
			height: 200px!important;
			height: auto;
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			align-items: center;
			border-bottom: 0.05em solid #dcdcdc;
			margin-bottom: 20px;
		}

		.company_logo {
		  border-radius: 50%;
		  border: 0.05em solid white;
		  height: 150px;
		  width: 150px;
		}

		.insider {
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			width: 100%;
		}

		.insider_info {
			width: 100%;
			padding: 15px 20px;
			display: flex;
			flex-direction: row;
			justify-content: flex-start;
			align-items: center;
		}

		.insider_pic{
	    	height: 100px;
	    	width: 100px;
	    	border-radius: 50%;
	    	border: 10px solid #fff;
	    	object-fit: cover;
	    }

	    .insider_info_detail {
	    	padding: 15px 10px;
	    	width: 40%;
	    }

	    .insider_info_detail div {
	    	margin-bottom: 10px;
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
    		<div class="header">
    			<div>
    				<h4>{{ $company_info['company_name'] }}</h4>
    			</div>
				@if($company_info['company_logo'] == '')
				<div class="company_logo" style="background: url('{{ asset('myasset/img/null.jpg') }}');background-position: center;background-size: cover;"></div>
				@else
				<div class="company_logo" style="background: url('{{ asset('storage/'.$company_info['company_logo']) }}');background-position: center;background-size: cover;"></div>
      			@endif
    		</div>
    		<div class="insider">
    			@foreach($users as $user)
    			<div class="insider_info">
    				<div style="margin-right: 20px;">
    					@if($user['dp'] == '')
	    				<img class="insider_pic" src="{{asset('myasset/img/default.jpeg')}}">
	    				@else
	    				<img class="insider_pic" src="{{asset('storage/'.$user['dp'])}}">
	    				@endif
    				</div>
    				<div class="insider_info_detail">
    					<div><h5>{{ $user['name'] }}</h5></div>
    					<div><p>{{ $user['email'] }}</p></div>
    					<div>{{ $user['phone'] }}</div>
    				</div>
    				<div>
    					<h6>Status</h6>
    					<p>Active</p>
    				</div>
    			</div>
    			@endforeach
    		</div>
    	</div>
    </div>
	

    @include('templates.footer')

	<script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>

	
	<script>
		$(document).ready(function(){

		});


	</script>
</body>
</html>