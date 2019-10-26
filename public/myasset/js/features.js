$(document).ready(function(){
	
	if(localStorage.getItem('fcp') === null){

		$('.features_content').load('myasset/templates/features/customer/registration.blade.php',function(){
			
		});

		localStorage.setItem('fcp','myasset/templates/features/customer/registration.blade.php');
		localStorage.setItem('fcpa','#registration');
		$('.directory').removeClass('directory_active');
		$('#registration').addClass('directory_active');

	}else{

		$('.features_content').load(localStorage.getItem('fcp'),function(){
			
		});
		$('.directory').removeClass('directory_active');
		$(localStorage.getItem('fcpa')).addClass('directory_active');
	}
});

$('#registration').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/registration.blade.php');
	localStorage.setItem('fcpa','#registration');

	$('.features_content').fadeOut('fast');
	$('.features_content').fadeIn('fast');
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
});

$('#login').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/login.blade.php');
	localStorage.setItem('fcpa','#login');

	$('.features_content').fadeOut('fast');
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});


$('#profile').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/profile.blade.php');
	localStorage.setItem('fcpa','#profile');

	$('.features_content').fadeOut('fast');
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#start').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/start.blade.php');
	localStorage.setItem('fcpa','#start');

	$('.features_content').fadeOut('fast');
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#dashboard').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/dashboard.blade.php');
	localStorage.setItem('fcpa','#dashboard');

	$('.features_content').fadeOut('fast');
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#timeline').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/timeline.blade.php');
	localStorage.setItem('fcpa','#timeline');

	$('.features_content').fadeOut('fast');
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#feedback').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/feedback.blade.php');
	localStorage.setItem('fcpa','#feedback');

	$('.features_content').fadeOut('fast');
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});


