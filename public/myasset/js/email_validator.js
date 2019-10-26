
function emailValidator(email){

	var API_KEY = '7c6e86c98509070cd30c8fb585745d5e';
	var endpoint = 'http://apilayer.net/api/check?smtp=1&format=1&access_key=' + API_KEY + '&email=' + email;

	$('#email_tick_img').attr('src','myasset/img/carrier/ajax-loader.gif');

	$.get(endpoint, function(data){

		if(data.format_valid === true){
			
			if(data.smtp_check === true){

				$('#error_email').html('');
            	$('#email_tick_img').attr('src','myasset/img/carrier/correct.png');

            	$('#c_email').val('a');

			}else{

				$('#email_tick_img').attr('src','');
                $('#error_email').html('Invalid email is given');

                $('#c_email').val('b');
			}

		}else{

			$('#email_tick_img').attr('src','');
            $('#error_email').html('Invalid email is given');

            $('#c_email').val('b');
		}

		enable();

	});
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

			$('#c_phone').val('a');

		}else{

			result.status = 1;
			result.type = 0;
			result.logo = 0;

			$('#c_phone').val('b');
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
