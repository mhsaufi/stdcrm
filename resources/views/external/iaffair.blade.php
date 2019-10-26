
<!DOCTYPE html>
<html>
<head>
	<title>SaveTheDate | Islamic Affairs</title>
	<meta name="page_site" content="savethedate-my.com">
	<meta name="page_language" content="English">
	<meta name="page_type" content="iAffair">
	<meta name="page_title" content="iAffair">
	<meta name="page_content" content="iAffair">
	 @include('templates.header')

	<link rel="stylesheet" href="{{ asset('myasset/socialsharekit/dist/css/social-share-kit.css') }}" type="text/css">

	<style>
		.main_container {
			padding: 8vh 100px;
		}

		.islamic_container {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: space-between;
			width: 100%;
			height: 100%;
		}

		.big_container_header {
			padding: 20px 0;
			border-bottom: 0.05em solid #d4af37;
			margin-bottom: 30px;
		}

		@media (max-width: 600px){
			.main_container {
				padding: 10% 0;
			}

			.big_container {
				width: 100%;
				min-height: 100%;
				background: #fff;
				display: flex;
				flex-direction: column;
				justify-content: flex-start;
				padding: 10%  0!important;
			}

			.big_container_header {
				text-align: center;
			}

			.islamic_container {
				display: flex;
				flex-direction: column;
				/*flex-wrap: wrap;*/
				align-items: center;
				justify-content: space-between;
				width: 100%;
				height: 100%;
			}

			#directory_col {
				width: 100%!important;margin-bottom: 100px;
				/*background: green;*/
				display: flex;
				flex-direction: column;
				justify-content: flex-start;
				align-items: center;
				text-align: center;
			}

			#content_col {
				width: 100%;
				/*background: blue;*/
				display: flex;
				flex-direction: column;
				justify-content: flex-start;
			}
		}

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
			/*background-image: url("{{asset('myasset/img/img_2412.jpg')}}");*/
			background-image: url("{{asset('myasset/img/geometry.jpg')}}");
			background-repeat: repeat;
			background-size:75px 75px;
			background-attachment: fixed;
			height: 250px !important;
		}

		.big_container {
			width: 100%;
			min-height: 100vh;
			background: #fff;
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			padding: 40px 200px;
		}

		.title_text {
			font-family: Avant Garde, Avantgarde, Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
			font-size: 40px; 
			font-style: normal; 
			font-variant: normal; 
			font-weight: 500; 
			line-height: 15.4px;
			opacity: 0.7;
		}

		.title_text_medium {
			font-family: Avant Garde, Avantgarde, Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
			font-size: 20px; 
			font-style: normal; 
			font-variant: normal; 
			font-weight: 500; 
			line-height: 15.4px;
			opacity: 0.7;
		}
      		
		th, td {
		padding: 15px;
		border-bottom: 1px solid rgba(212,175,55,0.5);
		}

		.tint{
			width: 100%;
			/*border: 2px solid #000;*/
			background: rgba(255,255,255,0.9);
			text-align:center;
		}

		.tint tr:hover {
			background: rgba(212,175,55,0.5);
			cursor:pointer;
		}

		.info-state{
			display:none;
			background: rgba(0,0,0,0.3);
		}

		.info-state a {
			color: black !important;
		}

		.info-state a:hover{
			color: #fff !important;
		}

		.info-state:hover{
			background: rgba(0,0,0,0.3) !important;
			color: #d4af37 !important;
		}

		.card-container{
			/* border-top: 1px solid #d4af37; */
			text-align: center;
			width:100%;
			margin-top:2%;
			margin-bottom: 1%;
			/* margin-left:8.9%; */
			background: rgba(255,255,255,0.7);
			padding-top:20px;
      	}

		.major{
			background:yellow;
			width:100%;			
		}

		.minor-left{
			position:absolute;
			background:white;
			width:25%;
			left:9.3%;
			padding: 10px;
		}

		.minor-left a:hover{
			cursor:pointer;
			color: #d4af37 !important;
		}

		.minor-right{
			position:absolute;
			background: rgba(255,255,255,0.8);
			width:55.5%;
			left:35%;
			padding: 10px;
		}

		#first-col, #second-col, #third-col, #fourth-col{
			display:none;
		}

		#directory_col {
			width: 30%;
			/*background: green;*/
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
		}

		#content_col {
			width: 65%;
			/*background: blue;*/
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
		}
		.directory {
			padding: 8px 0;
			font-size: 15px;
			opacity: 0.7;
		}

		.active_directory {
			font-weight: bold;
			font-size: 14px;
		}

		.directory:hover {
			opacity: 0.9;
			color: #d4af37;
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

    <!--  Section Start -->
	<div class="main_container">
		<!-- <div class="container"> -->

			<div class="big_container">
				<div class="big_container_header">
					<span class="title_text">Islamic Affairs</span>
				</div>
				<div class="islamic_container">
					<div id="directory_col">
						<div class="directory active_directory" id="jabatan_agama" data-list-name="Official Jabatan Agama" data-content-category="iAffair Navigation">Official Jabatan Agama Page & Pre-marriage Timetable</div>
						<div class="directory" id="info_jpn" data-list-name="Info JPN" data-content-category="iAffair Navigation">Info from Jabatan Pendaftaran Negara</div>
						<div class="directory" id="fiqh_munaqahat" data-list-name="Fiqh Munaqahat" data-content-category="iAffair Navigation">Fiqh Munaqahat</div>
						<div class="directory" id="faq" data-list-name="FAQ" data-content-category="iAffair Navigation">FAQ</div>
						<div class="directory" id="download" data-list-name="Downloadable Documents" data-content-category="iAffair Navigation">Downloadable Documents</div>
					</div>
					<div id="content_col">
							
						<div style="width: 100%;margin-bottom: 20px;">
							<div class="title_text_medium" id="title_text_replacable">Jabatan Agama Page & Pre-marriage Timetable</div>
						</div>
						<div id="replacable_content">
							
						</div>

					</div>
				</div>
			</div>

			
			
		<!-- </div> -->
	</div>		

	<div class="ssk-sticky ssk-left ssk-center ssk-lg">
        <a href="" class="ssk ssk-facebook"></a>
        <a href="" class="ssk ssk-twitter"></a>
        <a href="" class="ssk ssk-linkedin"></a>
        <a href="" class="ssk ssk-google-plus"></a>
        <a href="" class="ssk ssk-pinterest"></a>
    </div>	

    @include('templates.footer')

	<script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>
	<script type="text/javascript" src="{{ asset('myasset/socialsharekit/dist/js/social-share-kit.js') }}"></script>

	<script>

		SocialShareKit.init();

		$('#jabatan_agama').click(function(){

			$('#replacable_content').fadeIn('slow').load('myasset/templates/iaffair/jabatanagama.blade.php',function(){
				
			});
			$('#title_text_replacable').html("Official Jabatan Agama Page & Pre-marriage Timetable");
			$('.directory').removeClass('active_directory');
			$(this).addClass('active_directory');

		});

		$('#fiqh_munaqahat').click(function(){

			$('#replacable_content').load('myasset/templates/iaffair/munaqahat.blade.php').fadeIn();
			$('#title_text_replacable').html("Soal jawab Fiqh Munaqahat");
			$('.directory').removeClass('active_directory');
			$(this).addClass('active_directory');

		});

		$('#info_jpn').click(function(){

			$('#replacable_content').load('myasset/templates/iaffair/infojpn.blade.php').fadeIn();
			$('#title_text_replacable').html("Info Jabatan Pendaftaran Negara mengenai Perkahwinan");
			$('.directory').removeClass('active_directory');
			$(this).addClass('active_directory');

		});

		$('#faq').click(function(){

			$('#replacable_content').load('myasset/templates/iaffair/jabatanagama.blade.php').fadeIn();
			$('#title_text_replacable').html("Soalan-soalan lazim institusi perkahwinan");
			$('.directory').removeClass('active_directory');
			$(this).addClass('active_directory');

		});

		$('#download').click(function(){

			$('#replacable_content').load('myasset/templates/iaffair/downloadable.blade.php').fadeIn();
			$('#title_text_replacable').html("Wedding Checklist");
			$('.directory').removeClass('active_directory');
			$(this).addClass('active_directory');

		});

		// ========================================= script for minor-column
		$("#point-one").click(function(){
			$("#first-col").fadeToggle(1000);
		});

		$("#point-two").click(function(){
			$("#second-col").fadeToggle(1000);
		});

		$("#point-three").click(function(){
			$("#third-col").fadeToggle(1000);
		});

		$("#point-four").click(function(){
			$("#fourth-col").fadeToggle(1000);
		});

		// ========================================== script for minor-content

		$(document).ready(function(){

			$('#replacable_content').load('myasset/templates/iaffair/jabatanagama.blade.php').effect('slide');

			$("#johor").click(function(){
				$("#info-johor").slideToggle();
			});
			$("#kedah").click(function(){
				$("#info-kedah").slideToggle();
			});
			$("#kelantan").click(function(){
				$("#info-kelantan").slideToggle();
			});
			$("#melaka").click(function(){
				$("#info-melaka").slideToggle();
			});
			$("#negeri").click(function(){
				$("#info-negeri").slideToggle();
			});
			$("#pahang").click(function(){
				$("#info-pahang").slideToggle();
			});
			$("#perak").click(function(){
				$("#info-perak").slideToggle();
			});
			$("#perlis").click(function(){
				$("#info-perlis").slideToggle();
			});
			$("#pulau").click(function(){
				$("#info-pulau").slideToggle();
			});
			$("#sabah").click(function(){
				$("#info-sabah").slideToggle();
			});
			$("#sarawak").click(function(){
				$("#info-sarawak").slideToggle();
			});
			$("#selangor").click(function(){
				$("#info-selangor").slideToggle();
			});
			$("#tereng").click(function(){
				$("#info-tereng").slideToggle();
			});
			$("#wilayah").click(function(){
				$("#info-wilayah").slideToggle();
			});

		});
	</script>

	<script src="{{asset('myasset/js/jabatanagama.js')}}"></script>

</body>
</html>