  $('.drawable_menu_trigger').click(function(){

    $('.drawable_mobile_menu').toggle('fast');

  });

  $('#login_page').click(function(){
    window.location.replace("{{ route('login') }}");
  });

  $('#vendor_page').click(function(){
    window.location.replace("{{ url('/listvendor') }}");
  });

  $('#package_page').click(function(){
    window.location.replace("{{ url('/packages') }}");
  });

  $('#event_page').click(function(){
    window.location.replace("{{ url('/events') }}");
  });

  $('#islamic_page').click(function(){
    window.location.replace("{{ url('/islamic_center') }}");
  });

  $('#about_page').click(function(){
    window.location.replace("{{ url('/aboutSTD') }}");
  });

  $('#feature_page').click(function(){
    window.location.replace("{{ url('/features') }}");
  });

  $('#member_page').click(function(){
    window.location.replace("{{ url('/members') }}");
  });