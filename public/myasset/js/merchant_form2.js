$('#fullname').blur(function(){

	if($(this).val() == ''){

		$('#fullname_error').html('Required');
		$('#fullname_').val('a');

	}else{

		$('#fullname_error').html('');
		$('#fullname_').val('b');
	}
});

$('#name').blur(function(){

	if($(this).val() == ''){

		$('#name_error').html('Required');
		$('#name_').val('a');

	}else{

		$('#name_error').html('');
		$('#name_').val('b');
	}
});

$('#pw2').blur(function(){

	if($(this).val() == $('#pw1').val()){

		$('#pw_').val('a');
		$('#label_pw').hide();

	}else{

		$('#pw_').val('b');
		$('#label_pw').hide();
	}
});

$('#email').blur(function(){

	var endpoint = 'https://api.trumail.io/v2/lookups/json?email=' + $(this).val();

	$('#email_tick_img').attr('src','myasset/img/carrier/loading4.gif');

	$.get(endpoint, function(data){

		if(data.validFormat === true){
			
			if(data.deliverable === true){

				$('#label_email').hide('');
            	$('#email_tick_img').attr('src','myasset/img/carrier/correct.png');

            	$('#email_').val('a');

			}else{

				$('#email_tick_img').attr('src','');
                $('#label_email').show();

                $('#email_').val('b');
			}

		}else{

			$('#email_tick_img').attr('src','');
            $('#label_email').show();

            $('#email_').val('b');
		}
	});
});

$('#phone').blur(function(){

	var API_KEY = '7B0A974D1A1E445E8120D99A4B4DF910';
	var endpoint = 'https://api.veriphone.io/v1/verify?phone=+6'+ $(this).val() +'&key='+ API_KEY;

	$('#carrier_logo_img').attr('src','myasset/img/carrier/loading4.gif');

	$.get(endpoint, function(data){

		var result = new Object();

		if(data.phone_valid === true){

			if(data.phone_type == 'mobile'){

				if(data.carrier == 'Maxis'){

					result.logo = 'maxis.jpg';

				}else if(data.carrier == 'Celcom'){

					result.logo = 'celcom.png';

				}else if(data.carrier == 'DiGi'){

					result.logo = 'digi.jpg';

				}else if(data.carrier == 'U Mobile'){

					result.logo = 'umobile.png';
				}

			}else{

				result.logo = 'landline.jpg';
			}

			result.status = 0;

			$('#phone_').val('a');

		}else{

			result.status = 1;

			$('#phone_').val('b');
		}

		if(result.status == '0'){

			$('#phone_error').html('');
            $('#carrier_logo_img').attr('src','myasset/img/carrier/' + result.logo);

        }else{

            $('#phone_error').html('Invalid number');
            $('#carrier_logo_img').attr('src','');
        }
        
	});	
});

$('.width-normal').blur(function(){

	var a = $('name_').val();
	var b = $('fullname_').val();
	var c = $('phone_').val();
	var d = $('email_').val();
	var e = $('pw_').val();

	var last_satus = a + '' + b + '' + c + '' + d + '' + e;

	if(last_satus == 'aaaaa'){

		$('#next').removeClass('next_btn_disabled').addClass('next_btn');
        $('#next').attr("disabled",false);

	}else{

		$('#next').removeClass('next_btn').addClass('next_btn_disabled');
		$('#next').attr("disabled",true);
	}
});

