<!DOCTYPE html>
<html>
<head>

	<title>Packages</title>
	
	@include('templates.header')

	<link rel="stylesheet" type="text/css" href="{{asset('myasset/summernote-master/summernote/summernote-lite-bs3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/select2/dist/css/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('myasset/std_rating/std_rating.css')}}">
	<style type="text/css">
		.grey-background {
			background: #FFFBE5;
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
			flex-direction:column;
			justify-content: space-between;
		}
		.info-content {
			text-align: left;
		}
		.info-panel {
			margin-left: 300px;
			/*background: blue;*/
		}
		.rate-space {
			position: absolute;
			top: 0;
			right: 0;
			/*background: red;*/
			margin-top: 5px;
			margin-right: 40px;
			font-size: 1.1em;
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

		.btn-search {
			padding: 10px 20px;
			background: #d4af37;
			border: none;
			border-radius: 2px;
			cursor: pointer;
			color: #fff;
		}
		.btn-search:hover {
			background:#bb9928;
			opacity: 0.9;
		}

		.search-engine-panel {
			position:absolute;
			/* left:10; */
      		/* background:blue; */
			width:300px;
			padding: 10px 20px;
      	}

	  #query-input {
		  padding: 5px;      	
      	border-radius: 2px;
      	border: 1px solid darkgrey;
      	width: 90%;
      }
	  
	  #icon-search:hover{
		color: #fa8072;
		cursor:pointer;
	  }

		/* -------------------------------------- create pakej button */
		.pcontainer{
			display:flex;
			flex-direction:row;
			justify-content: space-between;
			border-bottom: 0.05em solid #fa8072;
			margin-bottom: 15px;
			padding: 10px 0;
			height: 70px;
		}

		.pbutton {
			transition: all 0.5s;
			cursor: pointer;
		}

		.pbutton:hover span:after{
			content:'  Add Package';
			position: absolute;
			transition: 1s;
			transition-timing-function: linear;
			color: white;			
		}		

		.pbutton span {
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
		}

		.pbutton:hover span{
			background:grey;
			color:white;
			border-radius:50px;
			width:120px;
			padding: 0 10px;
			transition: 0.5s;
			/* color: #d4af37; */			
			transition-timing-function: linear;
			padding-right:100px;
		}

		/* ------------------------------------------- Edit button  */
		.ebutton {
			transition: all 0.3s;
			cursor: pointer;
			margin-bottom:5px;
		}

		.ebutton:hover span{
			color: #fa8072;;
		}
		
		/* ----------------------------------------- create pakej form */
		
		.form-style-2{
			width: 100%;
			/* padding: 20px 5px 10px 5px; */
			font: 13px Arial, Helvetica, sans-serif;
		}
		
		.form-style-2-heading{
			/*font-weight: bold;*/
			/*font-style: italic;*/
			border-bottom: 0.05em solid #d4af37;
			margin-bottom: 20px;
			font-size: 15px;
			padding-bottom: 15px;
		}
		.form-style-2 label{
			display: block;
			margin: 0px 0px 10px 0px;
			/* background: red; */
		}
		.form-style-2 label > span{
			width: 22%;
			font-weight: bold;
			float: left;
			padding-top: 8px;
			padding-right: 5px;
			margin-left: 7%;
			/* background:blue; */
		}
		.form-style-2 span.required{
			color:red;
		}
		.form-style-2 input.input-field, .form-style-2 .select-field{
			width: 60%;
			display: inline-grid;
		}
		.select2-container {
			width: 60%!important;
			box-shadow: 1px 1px 4px #EBEBEB;
			-moz-box-shadow: 1px 1px 4px #EBEBEB;
			-webkit-box-shadow: 1px 1px 4px #EBEBEB;
		}
		.form-style-2 input.input-field, 
		.form-style-2 .tel-number-field, 
		.form-style-2 .textarea-field, 
		.form-style-2 .select-field{
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			border: 1px solid #C2C2C2;
			box-shadow: 1px 1px 4px #EBEBEB;
			-moz-box-shadow: 1px 1px 4px #EBEBEB;
			-webkit-box-shadow: 1px 1px 4px #EBEBEB;
			border-radius: 3px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			padding: 7px;
			/*outline: none;*/
		}
		.form-style-2 .input-field:focus, 
		.form-style-2 .tel-number-field:focus, 
		.form-style-2 .textarea-field:focus,  
		.form-style-2 .select-field:focus{
			border: 1px solid #0C0;
		}
		.form-style-2 .textarea-field{
			margin-left:10%;
			height:100px;
			width: 70%;
		}
		.form-style-2 input[type=submit]{
			border: none;
			padding: 8px 15px 8px 15px;
			background: #008000;
			color: #fff;
			box-shadow: 1px 1px 4px #DADADA;
			-moz-box-shadow: 1px 1px 4px #DADADA;
			-webkit-box-shadow: 1px 1px 4px #DADADA;
			border-radius: 3px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
		}
		.form-style-2 input[type=submit]:hover{
			background: #00b300;
			color: #fff;
		}

		.form-style-2 input[type=button]{
			border: none;
			padding: 8px 15px 8px 15px;
			background: lightgrey;
			color: #000;
			box-shadow: 1px 1px 4px #DADADA;
			-moz-box-shadow: 1px 1px 4px #DADADA;
			-webkit-box-shadow: 1px 1px 4px #DADADA;
			border-radius: 3px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
		}

		.form-style-2 input[type=button]:hover{
			background: grey;
			color: #fff;
		}

		.edit-container{
			position:absolute;
			top:50%;
			background:red;
			width: 50%;
			height:20%;
		}

		#myForm{
			display:none;
			background: #fff ;
			position: fixed;
			top:12.5%;
			left:8%;			
			width:100%;
			min-height:70%;			
			z-index:101;			
			border: 1px solid #d4af37;
			-moz-box-shadow:0 0 30px #888;
			-webkit-box-shadow:0 0 30px #888;
			box-shadow: 0 0 30px #888;
			overflow: auto;
		}
		
		 #editform{
			display:none;
			background: #fff ;
			position: fixed;
			top:12.5%;
			left:8%;			
			width:100%;
			min-height:73%;			
			z-index:101;			
			border: 1px solid #d4af37;
			-moz-box-shadow:0 0 30px #888;
			-webkit-box-shadow:0 0 30px #888;
			box-shadow: 0 0 30px #888;
			overflow: auto;
		}



		/* --------------------- existing pakej */
		.card-container{
			/* display:none; */
			display:flex;
			flex-flow: wrap;
			flex-direction: row;
			justify-content: center;
			width:100%;
		}

		.event-card {
			display:none;
			position:absolute;
			top:25%;
			left:35%;
      	text-align: center;
      	padding: 20px 20px;
      	border: 0.1em solid #d4af37;
      	border-radius: 5px;
      	background: #fff;
      	width: 30%;
      	/* margin: 10px 10px; */
        /* display:flex;
        justify-content:space-between; */
      }
      .event-card:hover {
      	border: 0.1em solid #d4af37;
      	/* background: #f8f5db; */
      }

	  .text-space{          
          /* background:blue; */
          width:100%;
      }

	  .button-space{
		  /* position:absolute; */
		  bottom:20px;
	  }

		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			border: 1px solid #dddddd;
			text-align: center;
			padding: 5px 10px;
		}

		thead, thead>td {
			background-color: #dddddd;
			border: 1px solid #000 !important;
		}

		#arrow_down {
			right: 12.5%;
			top: 5px;
			position: absolute;
			opacity: 0.6;
			z-index: 99999999;
		}

		#alert_delete {
			position: fixed;
			top: 30%;
			left: 40%;
			height: 17%;
			width: 20%;
			background: white;
			-moz-box-shadow:0 0 30px #888;
			-webkit-box-shadow:0 0 30px #888;
			box-shadow: 0 0 30px #888;
			z-index: 101;
			display: none;
		}

		.alert_delete_container, .alert_delete_container2 {
			height: 100%;
			width: 100%;
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			padding: 10px 20px;
		}

		#alert_delete2 {
			position: fixed;
			top: 30%;
			left: 40%;
			height: 15%;
			width: 20%;
			background: white;
			-moz-box-shadow:0 0 30px #888;
			-webkit-box-shadow:0 0 30px #888;
			box-shadow: 0 0 30px #888;
			z-index: 101;
			display: none;
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
	    			<div class="header-company-tab" onclick="profilemenu('4')">MARKETING</div>
	    		</div>

	    		<div class="info-company" style="background: #fff;">
	    		
					<div class="pcontainer">
						<div></div>

						@if(Auth::user()->role_id != 4)

						<button onclick="openForm()" class="btn_style btn-six"><i class="fas fa-plus"></i><span> ADD PACKAGE </span></button>

						@endif

	    				
						<div class="search-engine-panel">
							<div class="sep-search">
								<input type="text" name="query" placeholder="Search package ..." id="query-input" onkeyup="search()" />
								&nbsp<i class="fa fa-search icon"  id="icon-search"></i>
							</div>                            
							
						</div> 
						<!-- <button class="pbutton" style="vertical-align:middle" onclick="openForm()"><span>Add New Package</span></button> -->
					</div>

					<div class="container">	  					
							<table>
								<thead>
									<tr>
										<th>Package Title</th>
										<th>Price</th>
										<th>Details</th>
										@if(Auth::user()->role_id != 4)
										<th>Action</th>
										@endif										
									</tr>
								</thead>
								<tbody id="myTable">
								@foreach ($result as $r)
									<tr>
										<td style="vertical-align: top;padding-top: 20px;">{{$r['package_title']}}</td>
										<td style="vertical-align: top;padding-top: 20px;">RM {{$r['package_price']}} <br> ({{$r['package_pax']}} pax) </td>
										<td style="text-align:left!important;padding-left:20px;">											
											<div><p>{!! base64_decode( $r['package_detail'] ) !!}</p></div>
										</td>
										@if(Auth::user()->role_id != 4)
										<td style="width:15%;vertical-align: top;padding-top: 20px;">										
											<div style="margin-bottom: 15px;">												
												<button class="btn_style" style="margin-bottom: 15px;" onclick="editForm('{{ $r['package_id'] }}') "><i class="fa fa-edit" >&nbspEdit</i></button>
											</div>
											<div>												
												<button class="btn_style" onclick="deleteForm('{{ $r['package_id'] }}') "><i class="fa fa-trash-alt" >&nbspDelete</i></button>
											</div>
										</td>
										@endif								
									</tr>									
								@endforeach
								</tbody>
							</table>						
					</div>
					 
					<!-- END ALL PAKEJ -->
										
				</div>

				<div class="container" id="myForm" style="width:70%;padding:20px;margin-left:10%;">
					<div class="form-style-2">
						<div class="form-style-2-heading" style="display:flex;flex-direction:column;justify-content:flex-start;">
							Provide your package information
							<i class="fa fa-times" onclick="closeForm()" style="position:absolute;right:3%;"></i>
						</div>

							<!-- <form action=" " method="post"> -->
								<div>
									<label for="field1"><span>Package Title:<span class="required">*</span></span>
										<input type="text" class="input-field" id="ptitle" name="ptitle" value="" placeholder="Your package title is ..." />
									</label>
								</div>

								<div>
									<label for="field2"><span>Package Price:<span class="required">*</span> RM</span>
										<input type="text" class="input-field" id="pprice" name="pprice" value="" placeholder="Insert number only ..." />
									</label>
								</div>

								<div>
									<label for="field2"><span>No of Pax:<span class="required">*</span></span>
										<input type="text" class="input-field" id="ppax" name="ppax" value=""  placeholder="Insert number only ..."/>
									</label>
								</div>

								<div style="position: relative;">
									<label for="field2" style="background: yellow;"><span>Package Category:<span class="required">*</span></span>
										<!-- <input type="text" class="input-field" id="pcat" name="pcat" value="" placeholder="Select package category ..."/> -->
									</label>
									<span id="arrow_down"><i class="fas fa-sort-down"></i></span>
									<select multiple="multiple" id="pcat" class="select-field">
										<option value=""></option>
										@foreach($categories as $category)

										<option value="{{ $category['cc_id'] }}">{{ $category['cc_title'] }}</option>

										@endforeach
									</select>
								</div>
								<br>
								<div style="display:flex;flex-direction:row;justify-content:flex-start;height:50px;width:100%;">
									<div style="width:22%;height:20%;margin-left:7%;">
										<span><b>Package Details:</b><span class="required">*</span></span>
									</div>
									<div style="width:60%;">
										<textarea name="pdetail" class="textarea-field input-field" id="editor" ></textarea>
										<div>
											<label style="margin-top:5%;display:flex;flex-direction:row;justify-content:flex-end;"><span></span><input type="submit" id="submit" value="Upload"/></label>
											<!-- <label style="margin-top:-9%;margin-bottom:0;margin-right:17%;display:flex;flex-direction:row;justify-content:flex-end;"><span></span><input type="button" value="Cancel" onclick="closeForm()"/></label> -->
										</div>
										
									</div>
								</div>

							<!-- </form> -->
							<!-- ------------------ create pakej -->
						</div>
					</div><!-- END Form div -->	

				</div>

				<!-- EDIT FORM div -->
				<div class="form-style-2" id="editform"  style="width:70%;padding:20px;margin-left:10%;">
						<div class="form-style-2-heading" style="display:flex;flex-direction:column;justify-content:flex-start;">
							Edit your existing package information
							<i class="fa fa-times" onclick="closeEditForm()" style="position:absolute;right:3%;"></i>
						</div>

						<!-- <div class="container" id="" style="width:50%;padding:20px;margin-left:20%;"> -->
							<div>
								<label for="field1"><span>Package Title:<span class="required">*</span></span>						
									<input type="text" class="input-field" id="ptitle_edit" name="ptitle" value="" />
								</label>
							</div>

							<div>
								<label for="field2"><span>Package Price:<span class="required">*</span></span>
									<input type="text" class="input-field" id="pprice_edit" name="pprice" value="" />
								</label>
							</div>

							<div>
								<label for="field2"><span>No of Pax:<span class="required">*</span></span>
									<input type="text" class="input-field" id="ppax_edit" name="ppax" value="" />
								</label>
							</div>

							<div>
								<label for="field2"><span>Package Category:<span class="required">*</span></span>
									<input type="text" class="input-field" id="pcat_edit" name="pcat" value="" />
								</label>
							</div>

							<input type="hidden" id="pakej_id" value=""/>
							
							<div style="display:flex;flex-direction:row;justify-content:flex-start;height:50px;width:100%;">
									<div style="width:22%;height:20%;margin-left:7%;">
									<span>Package Details:<span class="required">*</span></span>
								</div>
								<div style="width:60%;">
									<textarea name="pdetail" class="textarea-field input-field" id="editor_edit"></textarea>
									<button class="btn_style" onclick="closeEditForm()" style="margin-top:10%;">Cancel</button>									
									<label style="margin-top:10%;display:flex;flex-direction:row;justify-content:flex-end;"><span></span><input type="submit" id="pupdate" value="Update"/></label>
									
								</div>
							</div>
						<!-- </div> -->
				</div>
				<!-- ------------------ END EDIT FORM -->

	    	</div>
	    </div>
	</div>

	<div id="alert_delete">
		<div class="alert_delete_container">
			<div style="height: 20%;border-bottom: 0.05em solid #d4af37;width: 100%;margin-bottom: 1%;padding-bottom: 5px;">
				Alert
			</div>
			<div>
				Are you sure you want to delete this package?
			</div>
			<div style="display: flex;flex-direction: row;justify-content: space-around;margin-top: 4%;">
				<button class="btn_style" id="delete_delete">Delete</button>
				<button class="btn_style" id="cancel_delete">Cancel</button>
			</div>
		</div>
	</div>

	<div id="alert_delete2">
		<div class="alert_delete_container2">
			<div style="height: 20%;border-bottom: 0.05em solid #d4af37;width: 100%;margin-bottom: 1%;padding-bottom: 5px;">
				Alert
			</div>
			<div id="error_message">
				
			</div>
			<div style="display: flex;flex-direction: row;justify-content: space-around;margin-top: 4%;">
				<button class="btn_style" id="okey">okey</button>
			</div>
		</div>
	</div>


    @include('templates.footer')
	<script src="{{asset('myasset/summernote-master/summernote/summernote-lite.js')}}"></script>
	<script src="{{asset('myasset/select2/dist/js/select2.min.js')}}"></script>
    <script>
    	var token = '{{ csrf_token() }}';
		var APP_URL = '{!! url("/") !!}';
		var url = '';


		$(document).ready(function(){

			globalNotification();

			$("#query-input").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});	

		$('#editor').summernote({
			height:150
		});

		$('#pcat').select2();

		function openForm() {
			// document.getElementById("myForm").style.display = "block";
			$('#myForm').fadeToggle('fast');
		}

		function closeForm() {
			// document.getElementById("myForm").style.display = "none";
			$('#myForm').fadeToggle('fast');
		}

		function closeEditForm() {
			// document.getElementById("myForm").style.display = "none";
			$('#editform').fadeToggle('fast');
		}		

		
		// send data from new form
		$('#submit').click(function(){
			var ptitle = $('#ptitle').val();
			var pprice = $('#pprice').val();
			var ppax = $('#ppax').val();
			var pcat = $('#pcat').val();
			var pdetail = $('#editor').summernote('code');
			url = APP_URL + '/profile/package/new';

			$.post(url, {title:ptitle,price:pprice,pax:ppax,category:pcat,detail:pdetail,_token:token} ,function(result){
				 alert('Package successfully added');
				 ptitle = $('#ptitle').val('');
				 pprice = $('#pprice').val('');
				 ppax = $('#ppax').val('');
				 pcat = $('#pcat').val('');
				 pdetail = $('#editor').summernote('code', '');
				 $('#myForm').fadeToggle(1000);				
			});			
		});

		//  edit data existing form
		function editForm(package_id){
			var url = '{{ url("/profile/package/edit") }}';
			var self = '{{ Auth::user()->id }}';

			$.post(url,{_token:token,p_id:package_id},function(result){
				var obj = JSON.parse(result);				

				$('#ptitle_edit').val(obj.package_title);			
				$('#pprice_edit').val(obj.package_price);
				$('#ppax_edit').val(obj.package_pax);
				$('#pcat_edit').val(obj.package_category);
				$('#pakej_id').val(obj.package_id);
				$('#editor_edit').summernote("code",atob(obj.package_detail));				
				$('#editform').fadeToggle('fast');
			});
		}

		// update the editing		
		$('#pupdate').click(function(){
			var ptitle = $('#ptitle_edit').val();
			var pprice = $('#pprice_edit').val();
			var ppax = $('#ppax_edit').val();
			var pcat = $('#pcat_edit').val();			
			var pdetail = $('#editor_edit').summernote('code');
			url = '{{ url("/profile/package/update") }}';
			var p_id = $('#pakej_id').val();
			var self = '{{ Auth::user()->id }}';

			$.post(url, {title:ptitle,price:pprice,pax:ppax,category:pcat,detail:pdetail,_token:token,package_id:p_id},function(result){
				 alert('Package successfully updated');				 
				 $('#editform').fadeToggle(1000);				
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

    	var package_id = '';

    	function deleteForm(id){

    		$('#alert_delete').fadeToggle('fast');
    		package_id = id;

    	}

    	$('#cancel_delete').click(function(){
    		$('#alert_delete').fadeToggle('fast');
    	});

    	$('#delete_delete').click(function(){

    		var url = '{{ url("/deletepackage") }}';

    		$.post(url,{_token:token,package_id:package_id},function(data){

    			if(data == 1){

    				$('#error_message').html("This package currently cannot be deleted");
    				$('#alert_delete2').fadeToggle();

    			}else{

    				$('#error_message').html("This package has been successfully deleted");
    				$('#alert_delete2').fadeToggle();
    			}

    		});

    	});

    	$('#okey').click(function(){
    		$('#alert_delete2').fadeToggle();
    		$('#alert_delete').fadeToggle();
    	});


    </script>

    <script src="{{asset('myasset/js/global_notification.js')}}"></script>
</body>
</html>