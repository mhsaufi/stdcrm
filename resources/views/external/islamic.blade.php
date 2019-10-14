
<!DOCTYPE html>
<html>
<head>
	<title>SaveTheDate | Islamic Affairs</title>
	 @include('templates.header')

	 <style>
	  .navbar-expand-lg .navbar-nav .nav-link {
        color: black !important;
        opacity: 0.5;
      }
      .navbar-expand-lg .navbar-nav .nav-link:active{
        color: gold !important;
        opacity: 0.5;
      }
      .pattern{
      	background-image: url("{{asset('myasset/img/img_2412.jpg')}}");
      	background-repeat: no-repeat;
        background-attachment: fixed;
      	background-size: cover;
      	height: 250px !important;
      }
      		
		th, td {
		padding: 15px;
		border-bottom: 1px solid rgba(212,175,55,0.5);
		}

		.tint{
			width: 100%;
			border: 2px solid #000;
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
	<section class="section-padding">
		<div class="container">

			<div class="card-container">
				<h5>Islamic Affairs</h5>
				<p>Why hired <b>Wedding Planner ?</b> Wedding planner will help you
				to manage your wedding planning including dealing with your vendors yang you nak laa.<br>
				Wedding planner will help you
				to manage your wedding planning including dealing with your vendors yang you nak laa.
				</p><br>
			</div>

			<div class="major">
				<div class="minor-left">
					<p>Testing testing huhuhuhuhuhuh</p>

					<ul>
						<li><a id="point-one">Official Jabatan Agama Page & Pre-marriage Timetable</a></li>
						<li><a id="point-two">Fiqh Munaqahat</a></li>
						<li><a id="point-three">Info from Jabatan Pendaftaran Negara</a></li>
						<li><a id="point-four">FAQ</a></li>
					</ul>
				</div>

				<div class="minor-right">
					<p>Testing testing testtttt huhuhuhuhuh</p>
					
					<div class="container" id="first-col">	
						<table class="tint">
							<!-- <tr><th>State</th></tr> -->
							<tr id="johor"><td>Johor</td></tr>
							<tr class="info-state" id="info-johor">
								<td>
									<div>
										<a href="https://jainj.johor.gov.my/e-undang-undang-syariah-encr-nikah-kursus-pra-perkahwinan/" target="_blank">Pre-Marriage Courses Timetable</a><br>
										<a href="" target="_blank">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="kedah"><td>Kedah</td></tr>
							<tr class="info-state" id="info-kedah">
								<td>
									<div>
										<a href="" target="_blank">Pre-Marriage Courses Timetable</a><br>
										<a href="http://www.jaik.gov.my/?page_id=2413" target="_blank">More details</a>
									</div>
								</td>
							</tr>

							<tr id="kelantan"><td>Kelantan</td></tr>
							<tr class="info-state" id="info-kelantan">
								<td>
									<div>
										<a target="_blank" href="http://www.jaheaik.gov.my/v6/index.php?option=com_jdownloads&view=download&id=40:jadual-kursus-praperkahwinan-2019&Itemid=359&lang=ms">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="http://www.jaheaik.gov.my/v6/index.php?lang=ms">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="melaka"><td>Melaka</td></tr>
							<tr class="info-state" id="info-melaka">
								<td>
									<div>
										<a target="_blank" href="http://www.jaim.gov.my/Media/Jadual-Kursus-Pra-Perkahwinan-Kekeluargaan-Islam-Tahun-2019">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="http://www.jaim.gov.my/">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="negeri"><td>Negeri Sembilan</td></tr>
							<tr class="info-state" id="info-negeri">
								<td>
									<div>
										<a target="_blank" href="">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="http://www.mains.gov.my/urusan-nikah-cerai-rujuk">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="pahang"><td>Pahang</td></tr>
							<tr class="info-state" id="info-pahang">
								<td>
									<div>
										<a target="_blank" href="">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="perak"><td>Perak</td></tr>
							<tr class="info-state" id="info-perak">
								<td>
									<div>
										<a target="_blank" href="http://jaipk.perak.gov.my/index.php/berita-terkini/35-koleksi-artikel/arkib/makluman/357-kursus-pra-perkahwinan-islam">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="perlis"><td>Perlis</td></tr>
							<tr class="info-state" id="info-perlis">
								<td>
									<div>
										<a target="_blank" href="">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="pulau"><td>Pulau Pinang</td></tr>
							<tr class="info-state" id="info-pulau">
								<td>
									<div>
										<a target="_blank" href="http://emunakahat.penang.gov.my/v2/index.php?tab=kursuspra#tab_jadual">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="http://emunakahat.penang.gov.my/v2/index.php?tab=perkahwinan">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="sabah"><td>Sabah</td></tr>
							<tr class="info-state" id="info-sabah">
								<td>
									<div>
										<a target="_blank" href="">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="http://www.jheains.sabah.gov.my/index.php/perkhidmatan/perkahwinan">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="sarawak"><td>Sarawak</td></tr>
							<tr class="info-state" id="info-sarawak">
								<td>
									<div>
										<a target="_blank" href="https://e-munakahat.sarawak.gov.my/web/web/home/course_list/">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="https://e-munakahat.sarawak.gov.my/web/">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="selangor"><td>Selangor</td></tr>
							<tr class="info-state" id="info-selangor">
								<td>
									<div>
										<a target="_blank" href="https://www.jais.gov.my/v2/index.php">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="https://ncr.jais.gov.my/">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="tereng"><td>Terengganu</td></tr>
							<tr class="info-state" id="info-tereng">
								<td>
									<div>
										<a target="_blank" href="http://www.terengganu.gov.my/maxc2020/emunakahat/jadualkursus.php?fromfile=">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="http://jheatweb.terengganu.gov.my/index.php/j-stuff/kursus-pra-perkahwinan">More details</a>									
									</div>
								</td>
							</tr>

							<tr id="wilayah"><td>Wilayah Persekutuan</td></tr>
							<tr class="info-state" id="info-wilayah">
								<td>
									<div>
										<a target="_blank" href="http://www.sppim.gov.my/sppim/home">Pre-Marriage Courses Timetable</a><br>
										<a target="_blank" href="http://jawi.gov.my/index.php/my/">More details</a>									
									</div>
								</td>
							</tr>

						</table>
					</div>

					<div class="container" id="second-col">
						<p>tak cari isi lagi</p>
					</div>

					<div class="container" id="third-col">
						<p>tak cari isi lagiiiiiii</p>
					</div>

					<div class="container" id="fourth-col">
						<p>tak cari isi lagiiiiiiiiiiiiiiiiiiii</p>
					</div>

				</div>
			</div>

			
			
		</div>
	</section>		
	

    @include('templates.footer')

	<script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>
	
	<script>

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
	</script>

</body>
</html>