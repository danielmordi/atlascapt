@extends('layouts.base')

@section('title')
Send Broadcast
@endsection

@section('content')
<!-- Begin page -->
<div id="layout-wrapper">

  @include('includes.header')
  @include('includes.admin-navbar')

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

    <div class="page-content">
      <div class="container-fluid">
        <h2 class="mb-2">Broadcast</h2>
        <form method="post" class="hideInput">
          @csrf
          <div id="sentAlert"></div>
          <div id="mail_sent" class="text-center text-success d-none" style="font-size: 8em">
            <i class="mdi mdi-email-send"></i>
          </div>
          <div class="mb-2">
            <input type="text" name="subject" class="bg-white form-control" placeholder="Subject">
          </div>
          <div class="mb-2">
            <style>
              .ck-editor__editable_inline {
                  min-height: 500px !important;
              }
            </style>
            <textarea name="msg" id="editor" placeholder="Email body" style="color: #000 !important"></textarea>
          </div>
          <button class="btn btn-primary" type="submit" id="sendBroadcast">Send Broadcast
          </button>
        </form>
      </div>
    </div>

  </div>
  <!-- End Page-content -->


  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <script>
            document.write(new Date().getFullYear())
          </script>
          © {{ config('app.name') }}
        </div>
      </div>
    </div>
  </footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

@include('includes.script')
@endsection

@push('scripts')
<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then(editor => {
      theEditor = editor;
    })
    .catch( error => {
        console.error( error );
    } );

    function getDataFromTheEditor() {
      return theEditor.getData();
    }
</script>

<script>
  $(document).ready(function () {
    $("#sendBroadcast").click(function (e) {
      e.preventDefault();
      alert('hi');
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      })

      let formData = {
        subject: $('input[name="subject"]').val(),
        msg: getDataFromTheEditor(),
      };

      let type = 'POST';
      let url = 'send/broadcast';

      console.log(formData.msg);
      $.ajax({
        type: type,
        url: url,
        data: formData,
        dataType: "json",
        success: function (response) {
          console.log(response);
          const email = $("#sentAlert");
          email.addClass('text-success');
          email.html(response.success);
          $('input[name="subject"]').hide();
          $('.ck').hide();
          $('#mail_sent').removeClass('d-none');
          setTimeout(function () {
            $("#success").hide().html('');
            location.reload();
          }, 1500);
        },
        error: function (response) {
          console.log(response);
        }
      });
    });
  });
</script>
@endpush
