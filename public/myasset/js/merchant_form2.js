var validator1 = 0;
var validator2 = 0;
var c_type = 0;
var fullname;
var phone;
var name;
var email;
var pw1;
var pw2;
var c_name;
var c_phone;
var c_email;
var c_ssm;
var c_address;
var c_website;
var selected_company;

$('#fullname').blur(function(){

	if($(this).val() == ''){

		$('#fullname_error').html('Required');
		$('#fullname_').val('b');

		// alert('kk');

	}else{

		$('#fullname_error').html('');
		$('#fullname_').val('a');
		fullname = $(this).val();
	}
});

$('#name').blur(function(){

	if($(this).val() == ''){

		$('#name_error').html('Required');
		$('#name_').val('b');

	}else{

		$('#name_error').html('');
		$('#name_').val('a');
		name = $(this).val();
	}
});

$('#pw2').blur(function(){

	var t1 = $('#pw1').val();
	var t2 = $('#pw2').val();

	if(t2 == '' || t1 == ''){

			$('#pw_').val('b');
			$('#label_pw').hide();

	}else{

		if(t1 === t2){

			$('#pw_').val('a');
			$('#label_pw').hide();
			pw1 = $('#pw1').val();
			pw2 = $(this).val();

		}else{

			$('#pw_').val('b');
			$('#label_pw').hide();
		}

	}
});

$('#email').blur(function(){

	var API_KEY = '7c6e86c98509070cd30c8fb585745d5e';
	var endpoint = 'http://apilayer.net/api/check?smtp=1&format=1&access_key=' + API_KEY + '&email=' + $(this).val();

	$('#email_tick_img').attr('src','myasset/img/carrier/loading4.gif');

	$.get(endpoint,function(data){

		if(data.format_valid === true){
			
			if(data.smtp_check === true){

				$('#label_email').hide('');
            	$('#email_tick_img').attr('src','myasset/img/carrier/correct.png');

            	$('#email_').val('a');
            	email = $('#email').val();

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
			phone = $('#phone').val();

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

	var c = $('#name_').val();
	var a = $('#fullname_').val();
	var d = $('#phone_').val();
	var b = $('#email_').val();
	var e = $('#pw_').val();

	var last_satus = a + '' + b + '' + c + '' + d + '' + e;

	console.log('CURRENT STATUS : ' + last_satus);

	if(last_satus == 'aaaaa'){

		$('#next').removeClass('next_btn_disabled').addClass('next_btn');
        $('#next').attr("disabled",false);
        validator1 = 1;

	}else{

		$('#next').removeClass('next_btn').addClass('next_btn_disabled');
		$('#next').attr("disabled",true);
	}
});


$('.c_info').blur(function(){

  var sel = $("input[name='company_option']:checked").val();
  c_name = $('#company_name').val();
  c_phone = $('#company_phone').val();
  c_email = $('#company_email').val();
  c_ssm = $('#company_ssm').val();
  c_address = $('#company_address').val();
  c_website = $('#company_website').val();
  selected_company = $('#list_company').val();

  if(sel == 'new'){

    c_type = 1;

    $("#list_company").prop('selectedIndex',0);
    $('.optional').attr("disabled",false);
    $('#list_company').attr("disabled",true);

    if(c_name != '' && c_email != ''){

       if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(c_email)){

          $('#label_c_email').hide();
          if(c_ssm != ''){

            validator2 = 1;

            if(validator2 == 1 && validator1 == 1){

              $('#signup').removeClass('signup_btn_disabled').addClass('signup_btn');
              $('#signup').attr("disabled",false);
              $('#agree_signup').attr("disabled",false);

            }else{

              $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
            }

          }else{

            $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
            validator2 = 0;
          }

       }else{

            $('#label_c_email').show();
            $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
            validator2 = 0;
       }

    }else{

      $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
      validator2 = 0;

      if(selected_company != 0){

        validator2 = 1;

        if(validator2 == 1 && validator1 == 1){

          $('#signup').removeClass('signup_btn_disabled').addClass('signup_btn');
          $('#signup').attr("disabled",false);
          $('#agree_signup').attr("disabled",false);
          }else{

            $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
          }

      }else{

        $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
        validator2 = 0;
      }

    }

  }else{

    c_type = 2;

    if(list_company != 0){

      validator2 = 1;

      $('.optional').attr("disabled",true);
      $('#list_company').attr("disabled",false);

      if(validator2 == 1 && validator1 == 1){

        $('#signup').removeClass('signup_btn_disabled').addClass('signup_btn');
        $('#signup').attr("disabled",false);
        $('#agree_signup').attr("disabled",false);
      }else{

        $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
      }

    }
  }
});

$('.optional').attr("disabled",true);

$('.huey').click(function(){

  $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
  validator2 = 0;

  var sel = $("input[name='company_option']:checked").val();

  if(sel == 'new'){

    c_type = 1;

    $("#list_company").prop('selectedIndex',0);
    $('.optional').attr("disabled",false);
    $('#list_company').attr("disabled",true);

    if(c_name != '' && c_email != ''){

       if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(c_email)){

          $('#label_c_email').hide();
          if(c_ssm != ''){

            validator2 = 1;

            if(validator2 == 1 && validator1 == 1){

              $('#signup').removeClass('signup_btn_disabled').addClass('signup_btn');
              $('#signup').attr("disabled",false);
              $('#agree_signup').attr("disabled",false);
            }else{

              $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
            }

          }else{

            $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
            validator2 = 0;
          }

       }else{

            $('#label_c_email').show();
            $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
            validator2 = 0;
       }

    }else{

      $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
      validator2 = 0;

      if(selected_company != 0){

        validator2 = 1;

        if(validator2 == 1 && validator1 == 1){

          $('#signup').removeClass('signup_btn_disabled').addClass('signup_btn');
          $('#signup').attr("disabled",false);
            
          }else{

            $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
          }

      }else{

        $('#signup').removeClass('signup_btn').addClass('signup_btn_disabled');
        validator2 = 0;
      }

    }

  }else{

    c_type = 2;

    $('.optional').attr("disabled",true);
    $('#list_company').attr("disabled",false);
  }
});

$('#agree_signup').click(function(){

  register(fullname, phone, name, email, pw1, c_name, c_email, c_ssm, c_address, c_phone, selected_company,c_type, c_website);

});

