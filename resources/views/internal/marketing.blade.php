<!DOCTYPE html>
<html>
<head>
	<title>Marketing</title>
	@include('templates.header')

	<link rel="stylesheet" type="text/css" href="{{asset('myasset/std_rating/std_rating.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/summernote-master/summernote/summernote-lite-bs3.css')}}">

	<style type="text/css">
		.grey-background {
			/*background: #EEE;*/
			background: url("{{asset('myasset/img/bg1y.jpg')}}");
			background-repeat: no-repeat;
        	background-size: cover;
		}
		.half-vertical {
			width: 100%;
			height: 50%;
			position: relative;
		}
		.info-company {
			padding: 20px 40px;
			background: #fff;
			display: flex;
			justify-content: space-between;
		}
		.info-content {
			text-align: left;
		}
		.info-panel {
			margin-left: 300px;
			/*background: blue;*/
		}
		.section-header {
			margin-top: 20px;
			height: 300px;
			/*background: yellow;*/
		}
		.section-sub-header {
			height: 40%;
			/*background: #ff0068;*/
			background: #fff;
		}
		.std_info {
			font-weight: bold;
		}
		.std-label {
			opacity: 0.8;
			font-style: italic;
			font-size: 0.9em;
		}
		.vend_pic{
	    	height: 200px;
	    	width: 200px;
	    	border-radius: 50%;
	    	border: 10px solid #fff;
	    	object-fit: cover;
	    }
	    .header_content {
	    	display: flex;
	    	flex-direction: row;
	    	justify-content: space-between;
	    	width: 100%;
	    	border-bottom: 0.05em solid #d4af37;
	    	padding: 10px 0;
	    }
	    .add_promotion_container {
	    	display: none;
	    	position: fixed;
	    	top: 0;
	    	left: 0;
	    	width: 100%;
	    	height: 100%;
	    	background: rgba(255,255,255,0.6);
	    	z-index: 999;
	    }
	    .close_promotion_form {
	    	width: 50px;
	    	cursor: pointer;
	    	text-align: right;
	    }
	    .close_promotion_form:hover {
	    	opacity: 0.8;
	    }
	    .add_promotion_form {
	    	position: absolute;
	    	top: 50%;
	    	left: 50%;
	    	width: 60%;
	    	height: auto;
	    	/*max-height: 500px;*/
	    	transform: translate(-50%, -50%);
	    	background: #fff;
	    	border-radius: 10px;
	    	-moz-box-shadow: 0 0 30px #888;
	        -webkit-box-shadow: 0 0 30px#888;
	        box-shadow: 0 0 30px #888;
	        display: flex;
	        flex-direction: column;
	        justify-content: flex-start;
	        padding: 5px 15px;
	    	z-index: 999999;
	    }
	    .add_promotion_form_header {
	    	width: 100%;
	    	padding: 10px 0;
	    	border-bottom: 0.05em solid #d4af37;
	    	display: flex;
	    	flex-direction: row;
	    	justify-content: space-between;
	    }
	    .add_promotion_form_content {
	    	width: 100%;
	    	height: 100%;
	    	padding: 15px 0;
	    }
	    .add_promotion_form_table {
	    	height: 100%;
	    	width: 100%;
	    }
	    .add_promotion_form_table td {
	    	border: 0.05em solid #dcdcdc;
	    	vertical-align: top;
	    	overflow-y: scroll;
	    	height: 100%;
	    }
	    .promotion_package_card {
	    	height: 50px;
	    	width: 100%;
	    	padding: 10px 15px;
	    	display: flex;
	    	flex-direction: column;
	    	justify-content: space-around;
	    	/*background-color: pink;*/
	    	border-bottom: 0.05em solid #dcdcdc;
	    	cursor: pointer;
	    }
	    .promotion_package_card:hover {
	    	background: #f2f2f2;
	    }
	    .new_promotion_form {
	    	display: flex;
	    	flex-direction: column;
	    	justify-content: flex-start;
	    	width: 100%;
	    	padding: 4px 15px;
	    }
	    .npf_label {
	    	width: 100%;
	    	margin-top: 10px;
	    	margin-bottom: 5px;
	    }
	    .npf_form_input {
	    	padding: 5px 10px;
	    	border: 0.05em solid #dcdcdc;
	    	width: 100%;
	    }
	    .npf_btn {
	    	width: 100%;
	    	cursor: pointer;
	    	text-align: center;
	    	padding: 10px 0;
	    	/*font-weight: 600;*/
	    	color: #fff;
	    	background: green;
	    	margin-top: 20px;
	    	margin-bottom: 10px;
	    	border-radius: 5px;
	    }
	    .npf_btn:hover {
	    	opacity: 0.8;
	    }
	    .add_promotion_loader {
	    	position: absolute;
	    	top: 50%;
	    	left: 50%;
	    	transform: translate(-50%,-50%);
	    	width: 98%;
	    	height: 95%;
	    	background: rgba(255,255,255,0.7);
	    	display: none;
	    }
	    #loader_ {
	    	position: absolute;
	    	top: 50%;
	    	left: 50%;
	    	transform: translate(-50%,-50%);
	    	width: 4%!important;
	    }
	</style>
</head>
<body class="grey-background">
	<!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>

    @include('templates.vendor_profile_header')

	<div class="container" style="margin-top: -160px!important;">
		<div class="section-header">
	    	<div class="section-sub-header">
	    		<div class="header-company">
	    			<div class="header-company-tab" onclick="profilemenu('0')">PERSONAL INFO</div>
	    			<div class="header-company-tab" onclick="profilemenu('1')">BUSINESS INFO</div>
	    			<div class="header-company-tab" onclick="profilemenu('2')">GALLERY</div>
	    			<div class="header-company-tab" onclick="profilemenu('3')">PACKAGES</div>
	    			<div class="header-company-tab-active" onclick="profilemenu('4')">MARKETING</div>
	    		</div>
	    		<div class="info-company" style="background: #fff;">

	    			<div class="header_content">
	    				<div></div>
	    				<div><button class="btn_style btn-six" id="open_promotion_form"><i class="fas fa-bullhorn"></i>&nbspADD PROMOTION</button></div>
	    			</div>
	    			
	    		</div>
	    	</div>
	    </div>
	</div>

	<div class="add_promotion_container">
		<div class="add_promotion_form">
			<div class="add_promotion_form_header">
				<div>Add new promotion</div>
				<div class="close_promotion_form"><i class="fas fa-times"></i></div>
			</div>
			<div class="add_promotion_form_content">
				<table class="add_promotion_form_table">
					<tr>
						<td class="dropable_space" style="width: 30%;">
							@foreach($result as $pack)
							<div class="promotion_package_card" data-id="{{ $pack['package_id'] }}">
								<div>{{ $pack['package_title'] }}</div>
								<div style="opacity: 0.8;font-size: 12px;">RM {{ $pack['package_price'] }}</div>
							</div>
							@endforeach
						</td>
						<td class="dropable_space" style="width: 70%;">
							<div class="new_promotion_form">
								<div class="npf_label">Title</div>
								<div class="npf_input"><input type="text" id="promo_title" class="npf_form_input"></div>
								<div class="npf_label">Price</div>
								<div class="npf_input"><input type="text" id="promo_price" class="npf_form_input"></div>
								<div class="npf_label">Pax</div>
								<div class="npf_input"><input type="text" id="promo_pax" class="npf_form_input"></div>
								<div class="npf_label">Detail</div>
								<div class="npf_input"><textarea id="editor"></textarea></div>
								<div class="npf_btn">Release Promotion</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="add_promotion_loader">
				<img src="{{ asset('myasset/img/carrier/ajax-loader.gif') }}" id="loader_">
			</div>
		</div>
	</div>


    @include('templates.footer')

    <script src="{{asset('myasset/summernote-master/summernote/summernote-lite.js')}}"></script>
    <script src="{{asset('myasset/summernote-master/summernote/summernote-ext-print.js')}}"></script>

   <script>
   		var token = '{{ csrf_token() }}';
		var APP_URL = '{!! url("/") !!}';
		var url = '';

		$('#open_promotion_form,.close_promotion_form').click(function(){
			$('.add_promotion_container').fadeToggle('fast');

			$('#promo_title').val('');
			$('#promo_price').val('');
			$('#promo_pax').val('');
			$('#editor').summernote('code', '');
		});

		$('#editor').summernote({
            height: 50,                 // set editor height
            minHeight: 50,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true
        });

        $('.promotion_package_card').each(function(){

        	var url = APP_URL + '/packagedata';

        	var pc = $(this);

        	pc.click(function(){

        		var pid = pc.data('id');

        		$.post(url,{_token:token,pid:pid},function(result){

        			var obj = JSON.parse(result);

        			$('#promo_title').val(obj.package_title);
        			$('#promo_price').val(obj.package_price);
        			$('#promo_pax').val(obj.package_pax);
        			$('#editor').summernote("code",atob(obj.package_detail));

        		});

        	});

        });

    	function profilemenu(id){

    		var urlPersonal = '{{ url("/profile") }}';
    		var urlCompany = '{{ url("/profile/business") }}';
    		var urlGallery = '{{ url("/profile/gallery") }}';
    		var urlPackage = '{{ url("/profile/package") }}';
    		var urlMarketing = '{{ url("/profile/marketing") }}';

    		if(id == 1)
    		{
    			window.location.replace(urlCompany);
    		}
    		else if(id == 0)
    		{
    			window.location.replace(urlPersonal);
    		}
    		else if(id == 2)
    		{
    			window.location.replace(urlGallery);
    		}
    		else if(id == 3)
    		{
    			window.location.replace(urlPackage);
    		}
    		else
    		{
    			window.location.replace(urlMarketing);
    		}
    	}

    	$('.npf_btn').click(function(){

    		$('.add_promotion_loader').show();

    		var ptitle = $('#promo_title').val();
    		var pprice = $('#promo_price').val();
    		var ppax = $('#promo_pax').val();
    		var pdetail = $('#editor').summernote('code');
    		var url = APP_URL + '/newpromotion';
    		var company = '{{ Auth::user()->company_id }}';

    		$.post(url,{_token:token,ptitle:ptitle,pprice:pprice,ppax:ppax,pdetail:pdetail,company:company},function(result){

    			location.reload();

    		});

    	});
    </script>
</body>
</html>