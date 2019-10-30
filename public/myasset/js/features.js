

$('#registration').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/registration.blade.php');
	localStorage.setItem('fcpa','#registration');

	$('.features_content').hide();

	$('.features_content').load(localStorage.getItem('fcp'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
});

$('#login').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/login.blade.php');
	localStorage.setItem('fcpa','#login');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});


$('#profile').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/profile.blade.php');
	localStorage.setItem('fcpa','#profile');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#start').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/start.blade.php');
	localStorage.setItem('fcpa','#start');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#dashboard').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/dashboard.blade.php');
	localStorage.setItem('fcpa','#dashboard');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#timeline').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/timeline.blade.php');
	localStorage.setItem('fcpa','#timeline');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#feedback').click(function(){
	localStorage.setItem('fcp','myasset/templates/features/customer/feedback.blade.php');
	localStorage.setItem('fcpa','#feedback');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcp'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

// ------------------------------------------------------------------------ VENDOR

$('#registration_v').click(function(){
	localStorage.setItem('fcpv','myasset/templates/features/vendor/registration_v.blade.php');
	localStorage.setItem('fcpav','#registration_v');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcpv'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
});

$('#login_v').click(function(){
	localStorage.setItem('fcpv','myasset/templates/features/vendor/login_v.blade.php');
	localStorage.setItem('fcpav','#login_v');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcpv'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});


$('#profile_v').click(function(){
	localStorage.setItem('fcpv','myasset/templates/features/vendor/profile_v.blade.php');
	localStorage.setItem('fcpav','#profile_v');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcpv'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#dashboard_v').click(function(){
	localStorage.setItem('fcpv','myasset/templates/features/vendor/dashboard_v.blade.php');
	localStorage.setItem('fcpav','#dashboard_v');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcpv'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#timeline_v').click(function(){
	localStorage.setItem('fcpv','myasset/templates/features/vendor/timeline_v.blade.php');
	localStorage.setItem('fcpav','#timeline_v');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcpv'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#feedback_v').click(function(){
	localStorage.setItem('fcpv','myasset/templates/features/vendor/feedback_v.blade.php');
	localStorage.setItem('fcpav','#feedback_v');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcpv'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});

$('#insider_v').click(function(){
	localStorage.setItem('fcpv','myasset/templates/features/vendor/insider_v.blade.php');
	localStorage.setItem('fcpav','#insider_v');

	$('.features_content').hide();
	$('.features_content').load(localStorage.getItem('fcpv'),function(){
		$(this).fadeIn('fast');
	});
	$('.directory').removeClass('directory_active');
	$(this).addClass('directory_active');
	$('.features_content').fadeIn('fast');
});
