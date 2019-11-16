// load calendar
var d = new Date();
var n = d.getMonth();
var last_month = 0;
var last_year = 0;
url = APP_URL + '/load_t';

// when page load, auto call for data for forecast calendar ========================================================================================================================================
$.post(url,function(result){

  var data = JSON.parse(result); // convert response from server to JSON

  var string = ''; // defined empty string to build HTML string later

  // iterate each data in JSON received
  $.each(data, function(index, value){

    // build HTML string 
    string += '<div class="col-forecast"><div class="header-forecast forecast-first main-forecast">';
    string += '<span class="title-forecast">'+ value.month_text +'</span>';
    string += '<span class="sub-title-forecast">'+ value.timeline_count +' event(s)</span></div>';

    if(value.prev_btn == 0){

      $('#minus').hide();

    }else{

      $('#minus').show();
    }

    // to check if this month got timeline or not
    if(value.timeline_count != 0){
      
      $.each(value.timeline, function(ind, val){

        string += '<div class="content-forecast" onclick="viewTimeline('+ val.we_id +')">';
        string += '<div class="timeline-title-div"><span class="timeline-title">'+ val.subject +'</span>';

        if(val.status != '2'){

          string += '<span style="color:red"><i class="fas fa-exclamation-circle"></i></span>';

        }else{

          if(val.wet_payment == 0){
             

          }else{

            string += '<span style="color:green"><i class="fas fa-sort-amount-up-alt"></i></span>';
          }

        }


        string += '</div>';
        string += '<span class="event-date">'+ val.datetime +'</span><br>';
        string += '<span class="event-title">'+ val.we_title +'</span> ';
        string += '<span class="event-date"><em><small>'+ val.we_date+'</small></em></span><br>';
        // string += '<span class="event-venue">'+ val.we_venue +'</span>';
        string += '</div>';

      });

    }else{

        string += '<div class="content-forecast-empty">';
        string += '</div>';

    }

    string += '</div>';

    // console.log(string);

    last_month = value.month_digit; // assign last month to variable so that can use arrow next and prev month
    last_year = value.year;
    $('#year_label').html(value.year_text);
  });

  // $('#event_cal').html(string).effect('slide','fast'); // replace empty div event_cal with HTML string currently built
  $('#event_cal').html(string).addClass('bounceInLeft').one('animationend',function(){

    $(this).removeClass('bounceInLeft');

  });


  $('#timepicker').timepicker(); // init timepicker

  $('#dashboard_loading').hide();
});

// when clicked plus ===============================================================================================================================================================================

$('#plus').click(function(){

  $.post(url,{'lm':last_month,'ly':last_year,'ld':'plus',_token:token},function(result){

    url = APP_URL + '/load_t';

    // console.log(result);
    var data = JSON.parse(result);
    var string = '';

    $.each(data, function(index, value){

      string += '<div class="col-forecast"><div class="header-forecast forecast-first main-forecast">';
      string += '<span class="title-forecast">'+ value.month_text +'</span>';
      string += '<span class="sub-title-forecast">'+ value.timeline_count +' event(s)</span></div>';

      if(value.prev_btn == 0){

        $('#minus').hide();

      }else{

        $('#minus').show();
      }

      if(value.timeline_count != 0){
        
        $.each(value.timeline, function(ind, val){

          string += '<div class="content-forecast" onclick="viewTimeline('+ val.we_id +')">';
          string += '<div class="timeline-title-div"><span class="timeline-title">'+ val.subject +'</span>';

          if(val.status != '2'){

            string += '<span style="color:red"><i class="fas fa-exclamation-circle"></i></span>';
          }else{

          if(val.wet_payment == 0){
             

          }else{

            string += '<span style="color:green"><i class="fas fa-sort-amount-up-alt"></i></span>';
          }

        }


          string += '</div>';
          string += '<span class="event-date">'+ val.datetime +'</span><br>';
          string += '<span class="event-title">'+ val.we_title +'</span> ';
          string += '<span class="event-date"><em><small>'+ val.we_date+'</small></em></span><br>';
          // string += '<span class="event-venue">'+ val.we_venue +'</span>';
          string += '</div>';
        });

      }else{

          string += '<div class="content-forecast-empty">';
          string += '</div>';

      }

      string += '</div>';

      last_month = value.month_digit;
      last_year = value.year;
      $('#year_label').html(value.year_text);

    });

    // $('#event_cal').html(string).effect('slide',{direction:"right"},'fast');
    $('#event_cal').html(string).addClass('bounceInRight').one('animationend',function(){

      $(this).removeClass('bounceInRight');

    });

  });
});

// when clicked minus ==============================================================================================================================================================================

$('#minus').click(function(){

  url = APP_URL + '/load_t';

  $.post(url,{'lm':last_month,'ly':last_year,'ld':'minus',_token:token},function(result){

    // console.log(result);
    var data = JSON.parse(result);
    var string = '';

    $.each(data, function(index, value){

      string += '<div class="col-forecast"><div class="header-forecast forecast-first main-forecast">';
      string += '<span class="title-forecast">'+ value.month_text +'</span>';
      string += '<span class="sub-title-forecast">'+ value.timeline_count +' event(s)</span></div>';

      if(value.prev_btn == 0){

        $('#minus').hide();

      }else{

        $('#minus').show();
      }

      if(value.timeline_count != 0){
        
        $.each(value.timeline, function(ind, val){

          string += '<div class="content-forecast" onclick="viewTimeline('+ val.we_id +')">';
          string += '<div class="timeline-title-div"><span class="timeline-title">'+ val.subject +'</span>';

          if(val.status != '2'){

            string += '<span style="color:red"><i class="fas fa-exclamation-circle"></i></span>';
          }else{

          if(val.wet_payment == 0){
             

          }else{

            string += '<span style="color:green"><i class="fas fa-sort-amount-up-alt"></i></span>';
          }

        }


          string += '</div>';
          string += '<span class="event-date">'+ val.datetime +'</span><br>';
          string += '<span class="event-title">'+ val.we_title +'</span> ';
          string += '<span class="event-date"><em><small>'+ val.we_date+'</small></em></span><br>';
          // string += '<span class="event-venue">'+ val.we_venue +'</span>';
          string += '</div>';
        });
      }else{

          string += '<div class="content-forecast-empty">';
          string += '</div>';

      }

      string += '</div>';

      last_month = value.month_digit;
      last_year = value.year;
      $('#year_label').html(value.year_text);
    });

    // $('#event_cal').html(string).effect('slide','fast');
    $('#event_cal').html(string).addClass('bounceInLeft').one('animationend',function(){

      $(this).removeClass('bounceInLeft');

    });
  });
});
