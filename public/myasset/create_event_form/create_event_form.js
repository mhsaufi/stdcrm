$('#add_event_btn,.close-action-icon,#cancel_button1').click(function(){

  $('#create_event_form').fadeToggle('fast');
  $('.form-std').val('');

});

$('#my-element').datepicker({
  minDate: new Date()
});

$('#reg_event').click(function(){

  var package = $("#package option:selected").val();
  var title = $('#title').val();
  var desc = $('#description').val();
  var address = $('#address').val();
  var date = $('#date').val();
  var time1 = $('#timepicker').val();
  var time2 = $('#timepicker2').val();
  var url = APP_URL + '/regEvent';

  if(package == ''){
    $( "#package" ).effect( "shake",{'direction':'up','distance':'3'} );
  }else if(title == ''){
    $( "#title" ).effect( "shake",{'direction':'up','distance':'3'} );
  }else if(desc == ''){
    $( "#description" ).effect( "shake",{'direction':'up','distance':'3'} );
  }else if(address == ''){
    $( "#address" ).effect( "shake",{'direction':'up','distance':'3'} );
  }else if(date == ''){
    $( "#date" ).effect( "shake",{'direction':'up','distance':'3'} );
  }else if(time1 == ''){
    $( "#timepicker" ).effect( "shake",{'direction':'up','distance':'3'} );
  }else if(time2 == ''){
    $( "#timepicker2" ).effect( "shake",{'direction':'up','distance':'3'} );
  }else{

    dataLayer.push({
      'event': 'create_event',
      'wetitle':title
    });

    $.ajax({
      url:url,
      type:'POST',
      data:{package:package,title:title,desc:desc,address:address,date:date,time1:time1,time2:time2,_token:token},
        beforeSend: function() {
          $('#loader_screen').attr("display","");
        }
      }).done(function(data){location.reload()});
  }
});

