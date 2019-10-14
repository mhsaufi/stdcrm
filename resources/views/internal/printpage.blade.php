<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Print Document</title>

    @include('templates.header')

    <link rel="stylesheet" type="text/css" href="{{asset('myasset/summernote-master/summernote/summernote-lite-bs3.css')}}">

  </head>
  <body>
    <div style="position: absolute;top: 0;left: 0;height: 100%;width: 100%;background: blue;">
      <textarea id="editor" disabled></textarea>
    </div>
      

    @include('templates.footer')

    <script src="{{asset('myasset/jqueryui/jquery-ui.js')}}"></script>
    <script src="{{asset('myasset/summernote-master/summernote/summernote-lite.js')}}"></script>
    <script src="{{asset('myasset/summernote-master/summernote/summernote-ext-print.js')}}"></script>
    
    <script>
      
      $(document).ready(function(){

        $('#editor').summernote({      // set editor height
          minHeight: 100,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor
          focus: true,
          disableDragAndDrop:false,
          toolbar: [
            ['print']
          ]
        });

        $('#editor').summernote('fullscreen.toggle');

        var url = '{{ url("/tpdata") }}';
        var token = '{{ csrf_token() }}';
        var wet_id = '{{ $wet_id }}';

        $.post(url,{_token:token,wet_id:wet_id},function(result){

          var obj = JSON.parse(result);

          // console.log(obj);

          $('#editor').summernote("code",atob(obj.header) + atob(obj.content.wet_desc) + atob(obj.footer));

          $('#print_subject').html("SUBJECT : " + obj.content.wet_subject);
          $('#print_pic').html("PIC : " + obj.content.picfull);
          $('#print_date').html("DATE & TIME : "+obj.content.wet_datetime_f);
          $('#print_year').html(obj.print_year);
          $('#print_printed_date').html(obj.print_date);
          $(".note-editable").attr("contenteditable","false")
        });

      });

    </script>
  </body>
</html>
