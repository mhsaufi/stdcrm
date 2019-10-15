
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
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
			padding: 10vh 5%;
		}

		.contact_container {
			border-top: 0.05em solid #d4af37;
			width: auto;
			min-height: 100%;
			/*background: red;*/
			margin: 2% 0;
			padding: 2% 0;
		}

		.tab_contact {
			padding: 8px 10px;
			border: 0.05em solid #dcdcdc;
			width: 100%;
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			cursor: pointer;
		}

		.tab_contact:hover {
			border-left: 2px solid #dcdcdc;
		}

		.replacable_content {
			position: relative;
		}

		#container_vendor {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: green;	
			display: none;	
		}

		#container_client {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: blue;	
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
    		<div class="row">
    			<div class="col-lg-2 col-md-2 col-sm-12" style="display: flex;flex-direction: column;justify-content: flex-start;align-items: flex-start;">
    				<div class="tab_contact" id="client_tab"><span>Clients</span><span><i class="fas fa-caret-right"></i></span></div>
    				<div class="tab_contact" id="partner_tab"><span>Partners</span></div>
    			</div>
    			<div class="col-lg-10 col-md-10 col-sm-12 replacable_content" style="background: blue;">
    				<div id="container_client">
    					HAHAHAHAHAAA
    				</div>
    				<div id="container_vendor">
    					HUHUHUHUHUHUHUH
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
	

    @include('templates.footer')

	<script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>

	
	<script>
		$(document).ready(function(){

		});

		$('#client_tab').click(function(){

			$('#container_vendor').fadeOut('fast');
			$('#container_client').fadeIn('fast');

			if($('#client_tab span').length != 2){
				$(this).append('<span><i class="fas fa-caret-right"></i></span>');
			}

			if($('#partner_tab span').length > 1){
			   $('#partner_tab span').last().remove();
			}
		})

		$('#partner_tab').click(function(){

			$('#container_client').fadeOut('fast');
			$('#container_vendor').fadeIn('fast');

			if($('#partner_tab span').length != 2){
				$(this).append('<span><i class="fas fa-caret-right"></i></span>');
			}

			if($('#client_tab span').length > 1){
			   $('#client_tab span').last().remove();
			}
		})
	</script>
</body>
</html>