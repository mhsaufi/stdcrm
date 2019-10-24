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

$('#label_email').hide();
$('#label_c_email').hide(); 
$('#label_pw').hide();

$('.width-normal').blur(function(){

  fullname = $("#fullname").val();
  phone = $("#phone").val();
  name = $("#name").val();
  email = $("#email").val();
  pw1 = $('#pw1').val();
  pw2 = $('#pw2').val();

  if(fullname != '' && name != ''){

    if(phone != '' && email != ''){

      if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){

        if(pw1 != '' && pw2 != ''){

          if(pw1 == pw2){

            $('#label_email').hide();
            $('#label_pw').hide();
            $('#next').removeClass('next_btn_disabled').addClass('next_btn');
            $('#next').attr("disabled",false);

            validator1 = 1;

          }else{

            $('#label_pw').show();
            $('#next').removeClass('next_btn').addClass('next_btn_disabled');
            $('#next').attr("disabled",true);
            validator1 = 0;

          }

        }else{

          $('#next').removeClass('next_btn').addClass('next_btn_disabled');
          $('#next').attr("disabled",true);
          validator1 = 0;
        
        }

      }else{

        $('#label_email').show();
        validator1 = 0;
      
      }

    }else{

      $('#next').removeClass('next_btn').addClass('next_btn_disabled');
      $('#next').attr("disabled",true);
      validator1 = 0;

    }

  }else{

    $('#next').removeClass('next_btn').addClass('next_btn_disabled');
    $('#next').attr("disabled",true);
    validator1 = 0;

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