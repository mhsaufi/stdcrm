$(document).ready(function(){

	$("#radio_1").prop("checked", true);

	$('#edit_info,.close-action-icon,#cancel_button1').click(function(){

      $("#std-timeline-banner-option-popup").fadeOut('fast');
      $('#create_event_form').fadeToggle('fast');
      $('#package').val('{{ $data_event["package_id"] }}');

    });

    if($('#involve_payment').is(':checked')){
        
      $('#payment_input').fadeToggle('fast');

    }else{
      
      $('#payment_input').fadeToggle('fast');
    }

    if($('#involve_payment_edit').is(':checked')){
        
      $('#payment_input_edit').fadeToggle('fast');

    }else{
      
      $('#payment_input_edit').fadeToggle('fast');
    }

    $('#okey_update').click(function(){

      location.reload();

    });

    $('#date_t').datepicker({
      language: 'en',
      minDate: new Date()
    });

    function getFormattedDate(date) {
      	var year = date.getFullYear(),
        month = date.getMonth() + 1,
        date = date.getDate();
        
        return year + '.' + month + '.' + date;
    }

    $('#my-element').datepicker({
      language: 'en',
      minDate: new Date()
    });

    $('.container').on('mouseup',':not(#std-timeline-banner-option-popup)',function (e){

      var container = $("#std-timeline-banner-option-popup");

      if (!container.is(e.target) && container.has(e.target).length === 0){

        container.fadeOut('fast');
        
      }
    }); 

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

    $('#edit-icon').click(function(e){

      e.stopPropagation();
      $('#std-timeline-banner-option-popup').fadeToggle('fast');

    });

    $('#std-timeline-banner-option-popup').focusout(function(){
      $(this).fadeToggle('fast');
    });

    $('#form-switch').click(function(){
      $('#std_timline_form').slideToggle(function(){

        if($(this).is(":hidden")){

          $('#arrow_icon').removeClass( "fa-angle-up" ).addClass( "fa-angle-down" );
          $('#form-switch-text').html("View timeline form");

        }else if($(this).is(":visible")){

          $('#arrow_icon').removeClass( "fa-angle-down" ).addClass( "fa-angle-up" );
          $('#form-switch-text').html("Hide timeline form");
        }

      });
    });

    $('#involve_payment').change(function(){

      if($(this).is(':checked')){
        
        $('#payment_input').fadeToggle('fast');

      }else{
        
        $('#payment_input').fadeToggle('fast');
      }

    });

    $('#involve_payment_edit').change(function(){

      if($(this).is(':checked')){
        
        $('#payment_input_edit').fadeToggle('fast');

      }else{
        
        $('#payment_input_edit').fadeToggle('fast');
      }

    });


    $('#add_vendors_btn').click(function(){

      $('#invite_form').fadeToggle('fast');
    });

    $('#cancel_invite').click(function(){
      $('#invite_form').fadeToggle('fast');
    });

    $('#select_opt').select2();

    $('#select_client').select2();

    $('#select_add_vendors').select2({
      placeholder: {multiple:true},
    });


    $('#select_vendor, .filter_type_radio').change(function(){

      var selectedVendor = $(this).children("option:selected").val();
      var selectedFilter = $('input[name=filter_type]:checked').val(); 

      $.post(url,{we_id:we_id,vid:selectedVendor,filter:selectedFilter},function(result){

        if(JSON.parse(result).length == 0){

          $('#myTimeline').addClass('no_timeline');
          $('#myTimeline').html('<br><span>No timeline have been added yet</span><br><br>');
          
        }else{

          $('#myTimeline').albeTimeline(JSON.parse(result), {
            effect: 'fadeInUp',
            showGroup: false,
            formatDate: 'DD d MMMM, at std'
          });

        }

      });

    });

    $('#add-timeline-btn').click(function(){
      var category = $( "#category option:selected" ).text();
      var datetime = $('#date_t').val();
      var content = $('#editor').val();
      var subject = $('#subject').val();


      if(category == ''){

        $('#category').effect( "shake",{'direction':'left','distance':'5'} );

      }else if(datetime == ''){

        $('#datetime').effect( "shake",{'direction':'left','distance':'5'} );

      }else if(content == ''){

        $('#editor_container').effect( "shake",{'direction':'left','distance':'5'} );
        
      }else if(subject == ''){

        $('#subject').effect( "shake",{'direction':'left','distance':'5'} );

      }else{

        $('#send_alert').show();
      }
    });

    $('#cancel_send').click(function(){
      $('#send_alert').hide();
    });

    $('#proceed_invite').click(function(){

      $('#send_alert_invite').fadeToggle();

    });

    $('#cancel_send_invite').click(function(){
      $('#send_alert_invite').fadeToggle();
    });

    $('#close_end_event').click(function(){
	    $('#end_event_container').fadeToggle('fast');
	});

	$('#close_tdetail').click(function(){

		$('#view_timeline_content').fadeToggle('fast');
	})

	$('#close_edit_modal').click(function(){
	$('#edit_timeline').fadeToggle();
	});

	$('#sub_contain').hide();

	$('#cancel_reject_btn').click(function(){

		$('#reject_remark_container').fadeToggle('fast');
	});

	$('#reject_reject_btn').click(function(){

		url = APP_URL + '/disapprovet';
		var wet_id = $('#rejected_timeline_id').val();
		var remark = $('#remark').val();

		$.post(url,{wet_id:wet_id,remark:remark,_token:token},function(){

		    location.reload();
		});

		url = '';
	});

	$('#close_add_contact').click(function(){
		$('#add_contact_form_container').fadeToggle('fast');
	});





  $('#cancel_event').click(function(data){

    $('#eec_2').show();

    $.post(APP_URL + '/eeinfo',{_token:token,we_id:we_id},function(data){

      var obj = JSON.parse(data);
      var str = '';

      $.each(obj.main_data,function(key, value){

        str += '<div class="eec_1_content">';

        if(value.dp == '' || value.dp === null){

          str += '<div><img src="myasset/img/default.png"/></div>';

        }else{

          str += '<div><img src="storage/' + value.dp + '"/></div>';
        }
        
        str += '<div>'+ value.name +'</div>';

        if(value.type == 'company'){

          if(value.id == company_id){

            if(value.agreement_data.party_agree == 0){

              str += '<div><button class="btn_end_vote" data-id="'+ value.id+'" data-type="'+ value.type +'")>Vote</button></div>';

            }else{

              str += '<div class="voted">Voted <i class="fas fa-check"></i></div>';

            }

          }else{

            if(value.agreement_data.party_agree == 0){

              str += '<div>Not voted yet</div>';

            }else{

              str += '<div class="voted">Voted <i class="fas fa-check"></i></div>';

            }

          }

        }else{

          if(value.id == self_id){

            if(value.agreement_data.party_agree == 0){

              str += '<div><button class="btn_end_vote" data-id="'+ value.id+'" data-type="'+ value.type +'">Vote</button></div>';

            }else{

              str += '<div class="voted">Voted <i class="fas fa-check"></i></div>';

            }

          }else{

            if(value.agreement_data.party_agree == 0){

              str += '<div>Not voted yet</div>';

            }else{

              str += '<div class="voted">Voted <i class="fas fa-check"></i></div>';

            }

          }

        }

        str += '</div>';

      });

      $('#eec_2').hide();

      $('#eec_1').html(str);

      $('#eec_1').show();

    });

    $('#end_event_container').fadeToggle('fast');

  });

  $(document).on('click','.btn_end_vote', function(){

    var id = $(this).data('id');
    var type = $(this).data('type');

    $('#vote_id').val(id);
    $('#vote_type').val(type);

    $('#eec_1').hide();

    $('#eec_3').show('fade',500);
  });

  $('#undo_vote').click(function(){

      $('#eec_3').hide();

      $('#eec_1').show('fade',500);

  });

  $('#confim_end_event').click(function(){

    var vote_url = APP_URL + "/end";
    var id = $('#vote_id').val();
    var vote_type = $('#vote_type').val();
    var remark = $('#vote_reason').val();

    $.post(vote_url,{_token:token,we_id:we_id,id:id,vote_type:vote_type,remark:remark},function(result){

      location.reload();

    });

  });

});