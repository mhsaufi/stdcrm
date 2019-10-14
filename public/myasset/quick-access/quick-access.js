// buttonjs for toggle create timeline form

$('#add_t, #cancel_add_t, #close_add_t').click(function(){

  $('#create_timeline_form').fadeToggle('fast');

});

// init summernote in create timeline form

$('#editor').summernote({
  height: 100,                 // set editor height
  minHeight: 100,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true,
  disableDragAndDrop:false,
  toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'underline', 'clear']],
    ['fontname', ['fontname']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['table', ['table']],
    ['insert', ['link', 'picture', 'video']],
    ['view', ['fullscreen', 'print', 'help']],
  ]
});

// prepare event select dropdown with list of all events under this current company

$(document).ready(dataToLoad);

function dataToLoad(){

  $.post(APP_URL + '/quickaccess',{_token:token},function(data){

    var cat_data = data.category;
    var eve_data = data.all_event;
    var mail = data.mailbox_data.count_mailbox;

    if(mail > 0){

      $('#inbox_icon').css('opacity','1');
      $('#inbox_icon').addClass('new_inbox');
      $('#inbox_icon_i').removeClass('far');
      $('#inbox_icon_i').addClass('fas');
      $('#inbox_text').removeClass('inbox_sliding_text').addClass('inbox_static_text');
      $('#inbox_text').html(mail + " new message(s)");

    }else{

      $('#inbox_icon').css('opacity','0.4');
      $('#inbox_icon').removeClass('new_inbox');
      $('#inbox_icon_i').addClass('far');
      $('#inbox_icon_i').removeClass('fas');
      $('#inbox_text').removeClass('inbox_static_text').addClass('inbox_sliding_text');
      $('#inbox_text').html("Mailbox");

    }

    var str_cat = '';
    var str_eve = '';

    $.each(eve_data, function(key, value){

      str_eve += '<option value="'+ value.we_id +'">'+ value.we_title +'</option>';

    });

    $('#event').append(str_eve);

    $.each(cat_data, function(key, value){

      str_cat += '<option value="'+ value.tc_id +'">'+ value.tc_title +'</option>';

    });

    $('#category').append(str_cat);

    $('#timeline_count').html(data.timeline_count);

  });


}

// link when clicked on inbox

$('#inbox').click(function(){

  url = APP_URL + '/mailbox';
  window.location.replace(url);
});

// to make sure everytime user change event in select dropdown, the change will reflect to assign to dropdown values

$('#event').on('change', function (e) {
    var event = $("option:selected", this);
    var event_id = this.value;
    var url = APP_URL + '/listeventvendor';
    var mystr = '';

    if(event_id != 0){

        $.post(url,{_token:token,event_id:event_id},function(result){

        var obj = JSON.parse(result);

          $.each(obj,function(key, value){
            mystr += '<option value=""></option>';
            mystr += '<optgroup label="' + value.name + '">';

            $.each(value.users, function(key1, value1){

              mystr += '<option value="' + value1.id + '">' + value1.name + '</option>';

            });

            mystr += '</optgroup>';

          });

          $('#select_content').replaceWith(mystr);

        });
    }
});

// to validate the input, in case submitting empty value and causing 500 Server error

$('#add-timeline-btn').click(function(){
    var event = $( "#event option:selected" ).val();
    var category = $( "#category option:selected" ).val();
    var datetime = $('#tdate').val();
    var content = $('#editor').val();
    var subject = $('#subject').val();
    var assign_to = $( "#assign_to option:selected" ).val();

    if(event == ''){

      $('#event_container').effect( "shake",{'direction':'left','distance':'3'} );

    }else if(category == ''){

      $('#category_container').effect( "shake",{'direction':'left','distance':'3'} );

    }else if(datetime == ''){

      $('#date_container').effect( "shake",{'direction':'left','distance':'3'} );

    }else if(assign_to == ''){

      $('#assign_to_container').effect( "shake",{'direction':'left','distance':'3'} );

    }else if(subject == ''){

      $('#subject').effect( "shake",{'direction':'left','distance':'3'} );

    }else if(content == ''){

      $('#editor_container').effect( "shake",{'direction':'left','distance':'3'} );
      
    }else{

      $('#send_alert').show();
    }
});

// clicked on cancel button

$('#cancel_send').click(function(){
    $('#send_alert').hide();
});

// clicked on yes proceed button

$('#proceed_send').click(function(){

  var we_id = $( "#event option:selected" ).val();
  var category = $( "#category option:selected" ).val();
  var datetime = $('#tdate').val();
  var subject = $('#subject').val();
  var user = $( "#assign_to option:selected" ).val();
  var content = $('#editor').summernote('code');
  var url = APP_URL + '/send_t';

  $.post(url,{category:category,user:user,subject:subject,datetime:datetime,content:content,_token:token,we_id:we_id},function(result){
    location.reload();
  });
});