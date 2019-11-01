<!DOCTYPE html>
<html>
<head>
	<title>Save The Date | Control Center</title>
	@include('templates.header')
	<style type="text/css">
		.section-header {
			/*background: blue;*/
			width: 100%;
			height: 40px;
			display: flex;
			flex-direction: row;
			justify-content: space-around;
			align-items: center;
			border-bottom: 0.05em solid #d4af37;
		}

		.admin_menu {
			padding: 5px 10px;
			cursor: pointer;
			width: auto;
			height: 80%;
			/*background: red;*/
		}

		.admin_menu:hover {
			background: #f2f2f2;
		}

		.am_active {
			border-bottom: 0.2em solid red;
		}
	</style>
</head>
<body class="grey-background">
	<!-- Header Area wrapper Starts -->
    <header id="header-wrap">
     @include('templates.adminnavbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>

    <div class="section-padding">
    	<div class="container">
    		<div class="section-header">
    			<div class="admin_menu">Dashboard</div>
    			<div class="admin_menu am_active">Companies</div>
    			<div class="admin_menu">Registered Users</div>
    			<div class="admin_menu">Reports</div>
		    </div>
    	</div>
    </div>

    @include('templates.footer')

</body>
</html>