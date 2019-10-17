
function emailValidator(email){

	var API_KEY = '6ab2824c21df3e8b08fd90d1ed3a088b';
	var endpoint = 'http://apilayer.net/api/check?access_key='+ API_KEY +'&email='+ email +'&smtp=1&format=1';
	var status = 0;

	$('#email_tick_img').attr('src','myasset/img/carrier/ajax-loader.gif');

	$.get(endpoint, function(data){

		if(data.format_valid === true){
			
			if(data.smtp_check === true){

				$('#error_email').html('');
            	$('#email_tick_img').attr('src','myasset/img/carrier/correct.png');

            	$('#c_email').val('1');

			}else{

				status = 1;
				$('#email_tick_img').attr('src','');
                $('#error_email').html('Invalid email is given');

                $('#c_email').val('0');
			}

		}else{

			status = 1;
			$('#email_tick_img').attr('src','');
            $('#error_email').html('Invalid email is given');

            $('#c_email').val('0');
		}

		enable();

	});

	return status;
}

function phoneValidator(phone){

	var API_KEY = '7B0A974D1A1E445E8120D99A4B4DF910';
	var endpoint = 'https://api.veriphone.io/v1/verify?phone=+6'+ phone +'&key='+ API_KEY;

	$('#carrier_logo_img').attr('src','myasset/img/carrier/ajax-loader.gif');

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
			result.type = data.phone_type;

			$('#c_phone').val('1');

		}else{

			result.status = 1;
			result.type = 0;
			result.logo = 0;

			$('#c_phone').val('0');
		}

		if(result.status == '0'){

			$('#error_phone').html('');
            $('#carrier_logo_img').attr('src','myasset/img/carrier/' + result.logo);

        }else{

            $('#error_phone').html('Invalid number');
            $('#carrier_logo_img').attr('src','');
        }

        enable();
        
	});	

}
