<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mailbox</title>

    @include('templates.header')
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/air-datepicker-master/dist/css/datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/summernote-master/summernote/summernote-lite-bs3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('myasset/quick-access/quick-access.css')}}">
    <style type="text/css">

      .navbar-expand-lg .navbar-nav .nav-link {
        color: black !important;
        opacity: 0.5;
      }
      .navbar-expand-lg .navbar-nav .nav-link:active{
        color: gold !important;
        opacity: 0.5;
      }

      .pattern{
        /*background-image: url("{{asset('myasset/img/bg1.jpg')}}");*/
        background-repeat: no-repeat;
        background-size: cover;
        height: 250px !important;
      }

      .std-row {
        margin-top: 20px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }

      .std-row:nth-child(1) {
        padding-bottom: 10px;
        border-bottom: 2px solid #FFCA28;
      }

      .std-btn {
        padding: 10px 20px;
        background: #09ce61;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        margin-right: 10px;
        float: left;
        height: 100%;
      }

      .std-btn:hover {
        background: #09bf5a;
      }

      .std_btn_cancel {
        padding: 10px 20px;
        background: #e3623a;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        margin-right: 20px;
        height: 100%;
      }

      .std_btn_cancel:hover {
        background: #e14617;
      }

      .view-btn {
        padding: 10px 12px;
        border-top: 0.05em solid #cfd8dc;
        border-bottom: 0.05em solid #cfd8dc;
        border-right: 0.05em solid #cfd8dc;
        cursor: pointer;
        float: left;
        background: #ffff;
      }

      .view-btn-history {
        border: 0.05em solid #cfd8dc;
        float: left;
        margin-right: 10px;
        opacity: 1.0;
        cursor: pointer;
        padding: 10px 20px;
        background: #ffff;
      }

      .active-view {
        background: #dfdfdf;
        cursor: default!important;
      }

      .active-view:hover {
        background: #dfdfdf!important;
      }

      .view-btn:hover {
        background: #fffde7;
      }

      .view-btn-history:hover {
        opacity: 0.9;
        background: #fffde7;
      }

      #event{
        background-image: url("{{asset('myasset/img/bg1.jpg')}}");
      }

      /*--------------------------------------------------------------*/

      .mailbox_container {
        /*background: blue;*/
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
      }

      .mailbox_container > div {
        margin-bottom: 10px;
      }

      .mailbox_header_container {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center!important;
      }

      .mailbox_header_container > div {
        margin-right: 20px;
      }

      .mailbox_btn {
        border: 0.05em solid #cfd8dc;
        opacity: 1.0;
        cursor: pointer;
        padding: 5px 10px;
        background: #ffff;
      }

      .mailbox_btn:hover {
        opacity: 0.9;
        background: #fffde7;
      }

      #mailbox_content_table {
        width: 100%;
      }

      #mailbox_content_table th,#mailbox_content_table td {
        border: 0.05em solid #dcdcdc;
        padding: 5px 10px
      }

      .mailbox_content_row {
        font-weight: 500!important;
        cursor: pointer;
      }

      .unread {
        font-weight: bold!important;
        cursor: pointer;
      }

      .mailbox_content_row:hover {
        background: #dcdcdc;
      }

      .mailbox_content_row_unread:hover {
        background: #dcdcdc;
      }

      .view_mailbox_container {
        display: none;
        position: fixed;
        top: 20%;
        left: 15%;
        width: 70%;
        height: 40%;
        background: white;
        -moz-box-shadow: 0 0  30px #888;
        -webkit-box-shadow: 0 0  30px #888;
        box-shadow: 0 0  30px #888;
        padding: 15px 20px;
        border-radius: 5px;
      }

      .view_mailbox_content {
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
      }

      #subject_row {
        padding: 5px 0;
        font-weight: bold;
        border-bottom: 0.05em solid #dcdcdc;
        height: 10%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }

      #content_row {
        padding: 15px 0;
        margin-bottom: 20px;
        height: 70%;
      }

      #mailbox_content_function_row {
        width: 50%;
        height: 20%;
      }

      #mailbox_content_function_row td {
        padding: 1px 0;
        width: 20%;
      }
      
    </style>
  </head>
  <body class="pattern">

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      @include('templates.navbar')
    </header>
    <!-- Header Area wrapper End -->
    <br>
    @include('templates.create_event_form')
     <!-- Feature Section Start -->
    <div class="section-padding">
      <div class="container" style="min-height: 100%!important;position: relative;">
        <div class="row std-row">
          <div>
            <button class="view-btn-history" id="add_event_btn"><i class="fas fa-plus"></i> New Event</button> 
            <div class="view-btn-history" id="list_timeline"><i class="fas fa-calendar-alt"></i> Timeline</div>
            <div class="view-btn-history" id="list_event">
              <i class="fas fa-th-list"></i> Events 
              @if($count_inbox > 0)

                <span id="count_inbox_badge">{{ $count_inbox }}</span>

              @endif
            </div>
            <div class="view-btn-history"><i class="fas fa-history"></i> Past Events</div>
          </div>
        </div>
        <br>     
        <div class="mailbox_container">
          <div class="mailbox_header_container">
            <div>
              <input type="checkbox" id="mailbox_select_all" style="margin-right: 10px;"> with selected
            </div>
            <div>
              <button class="mailbox_btn" id="mark_read"><i class="far fa-envelope-open"></i> Mark Read</button>
            </div>
            <div>
              <button class="mailbox_btn" id="mark_unread"><i class="far fa-envelope"></i> Mark Unread</button>
            </div>
            <div>
              <button class="mailbox_btn" id="mark_delete"><i class="far fa-trash-alt"></i> Delete</button>
            </div>
          </div>
          <div></div>
          <div>
            <table id="mailbox_content_table" border="1">
              <tr style="color: #ab9d00;">
                <th style="width: 3%"></th>
                <th style="width: 12%">Recipient</th>
                <th style="width: 85%">Subject</th>
              </tr>
              @foreach($mailbox_data as $mailbox)

              @if($mailbox['i_status_id'] == 0)
                <tr class="mailbox_content_row unread" data-mail-id="{{ $mailbox['i_id'] }}">
              @else
                <tr class="mailbox_content_row" data-mail-id="{{ $mailbox['i_id'] }}">
              @endif
                
                  <td class="mailbox_check"><input type="checkbox" name="" class="mailbox_data" value="{{ $mailbox['i_id'] }}"></td>
                  <td class="viewable_row" data-mail-id="{{ $mailbox['i_id'] }}">{{ $mailbox['i_sender_id'] }}</td>
                  <td class="viewable_row" data-mail-id="{{ $mailbox['i_id'] }}">{{ $mailbox['i_subject'] }}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>

      <div class="view_mailbox_container">
        <div class="view_mailbox_content">
          <div id="subject_row">
            <div id="mailbox_subject"></div>
            <div id="mailbox_close" style="cursor: pointer;"><i class="fas fa-times"></i></div>
          </div>
          <div id="content_row">
            This is somehow a content for this mail. None of this content is subject for anything unless it just a creation merely for display purpose. 
          </div>
          <div id="function_row">
            <table id="mailbox_content_function_row">
              <tr>
                <td style="font-weight: bold;">Sender</td><td id="mailbox_sender"></td>
              </tr>
              <tr>
                <td style="font-weight: bold;">Date</td><td id="mailbox_date"></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
     
      @include('templates.quick-access')

    </div>
    <!-- Feature Section End --> 

    <div id="loader_screen">
      <div class="loader"></div>
    </div>

    @include('templates.footer')

    <script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>
    <script src="{{asset('myasset/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('myasset/air-datepicker-master/dist/js/datepicker.min.js')}}"></script>
    <script src="{{asset('myasset/air-datepicker-master/dist/js/i18n/datepicker.en.js')}}"></script>
    <script src="{{asset('myasset/summernote-master/summernote/summernote-lite.js')}}"></script>
    <script src="{{asset('myasset/quick-access/quick-access.js')}}"></script>
    <script>
      var token = '{{ csrf_token() }}';
      var APP_URL = '{!! url("/") !!}';
      var url = '';
      
      $(document).ready(function(){

        globalNotification();

        $(document).on('mouseup',':not(.view_mailbox_container)',function (e){

        var container = $(".view_mailbox_container");

        if (!container.is(e.target) && container.has(e.target).length === 0){

          container.fadeOut('fast');
          
        }
      });


        $('#mailbox_select_all').click(function(){

          if($(this).prop('checked')){

            $('.mailbox_data').prop('checked',true);

          }else{

            $('.mailbox_data').prop('checked',false);
          }

        });

        $('#mark_read').click(function(){

          var checked = [];
          url = APP_URL + '/markread';

          $(".mailbox_data:checked").each(function(){

              checked.push($(this).val());

              $(this).parents('.mailbox_content_row').removeClass('unread');
          });

          $.post(url,{_token:token,checked:checked},function(){

            dataToLoad();
          });

        });

        $('#mark_unread').click(function(){

          var checked = [];
          url = APP_URL + '/markunread';

          $(".mailbox_data:checked").each(function(){

              checked.push($(this).val());

              $(this).parents('.mailbox_content_row').addClass('unread');
          });

          $.post(url,{_token:token,checked:checked},function(){

            dataToLoad();
          });

        });

        $('#mark_delete').click(function(){

          var checked = [];
          url = APP_URL + '/markdelete';

          $(".mailbox_data:checked").each(function(){

              checked.push($(this).val());

              $(this).parents('.mailbox_content_row').fadeOut();
          });

          $.post(url,{_token:token,checked:checked},function(){

            dataToLoad();
          });

        });

        $('#mailbox_close').click(function(){

          $('.view_mailbox_container').fadeToggle();
        });

        $('#list_event').click(function(){

          url  = APP_URL + '/all';

          window.location.replace(url);
        });

        $('#list_timeline').click(function(){

          url  = APP_URL + '/home';

          window.location.replace(url);
        });

        $('.viewable_row').each(function(){

          var selected_row = $(this);
          url = APP_URL + '/viewmail';

          selected_row.click(function(){

            var i_id = $(this).data('mail-id');

            $(this).parent().removeClass('unread');

            $.post(url,{i_id:i_id,_token:token},function(data){

              var obj = JSON.parse(data);

              $('#mailbox_sender').html(obj.i_sender_id);
              $('#mailbox_subject').html(obj.i_subject);
              $('#content_row').html(obj.i_content);

              $('.view_mailbox_container').fadeToggle('fast');

              dataToLoad();

            });

          });

        });

      });

      function viewTimeline(id){

        window.location.replace("{{ url('/timeline?ax=') }}"+id);
      }

    </script>
    <script src="{{asset('myasset/js/global_notification.js')}}"></script> 
    <script src="{{asset('myasset/create_event_form/create_event_form.js')}}"></script>
  </body>
</html>
