$(document).ready(function(){

	$('.features_content').load('myasset/templates/features/customer/registration.blade.php',function(){
		
	});

	$('#registration').addClass('directory_active');
});

$('#registration').click(function(){
	$('.features_content').fadeOut('fast');
	$('.features_content').fadeIn('fast');
	$('.features_content').load('myasset/templates/features/customer/registration.blade.php',function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');

});

$('#login').click(function(){
	$('.features_content').fadeOut('fast');
	$('.features_content').load('myasset/templates/features/customer/login.blade.php',function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});


$('#profile').click(function(){
	$('.features_content').fadeOut('fast');
	$('.features_content').load('myasset/templates/features/customer/profile.blade.php',function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#start').click(function(){
	$('.features_content').fadeOut('fast');
	$('.features_content').load('myasset/templates/features/customer/start.blade.php',function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#dashboard').click(function(){
	$('.features_content').fadeOut('fast');
	$('.features_content').load('myasset/templates/features/customer/dashboard.blade.php',function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#timeline').click(function(){
	$('.features_content').fadeOut('fast');
	$('.features_content').load('myasset/templates/features/customer/timeline.blade.php',function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#feedback').click(function(){
	$('.features_content').fadeOut('fast');
	$('.features_content').load('myasset/templates/features/customer/feedback.blade.php',function(){
		
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});


