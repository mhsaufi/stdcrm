  $('.drawable_menu_trigger').click(function(){

    $('.drawable_mobile_menu').toggle('fast');

  });

  $('#login_page').click(function(){
    window.location.replace(LOGIN);
  });

  $('#dashboard_page').click(function(){
    window.location.replace(APP_URL + '/home');
  });

  $('#vendor_page').click(function(){
    window.location.replace(APP_URL + '/listvendor');
  });

  $('#package_page').click(function(){
    window.location.replace(APP_URL + '/packages');
  });

  $('#event_page').click(function(){
    window.location.replace(APP_URL + '/events');
  });

  $('#islamic_page').click(function(){
    window.location.replace(APP_URL + '/iaffair');
  });

  $('#about_page').click(function(){
    window.location.replace(APP_URL + '/aboutSTD');
  });

  $('#feature_page').click(function(){
    window.location.replace(APP_URL + '/features');
  });

  $('#member_page').click(function(){
    window.location.replace(APP_URL + '/members');
  });

  $('#features').click(function(){
    window.location.replace(APP_URL + '/features');
  });

  $('#logout').click(function(){
    $('#logout-form').submit();
  });