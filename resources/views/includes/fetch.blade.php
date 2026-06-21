<script>
  $(document).ready(function () {
    $("#update").click(function (e) {
      e.preventDefault();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      })

      let formData = {
        // wb_balance: $('input[name="wb_amount"]').val(),
        // bonus_balance: $('input[name="b_amount"]').val(),
        // hr_balance: $('input[name="hr_amount"]').val(),
        // package: $('select[name="package"]').val(),
        from: $('select[name="from"]').val(),
        typeOfTransaction: $('select[name="typeOfTransaction"]').val(),
        value: $('input[name="value"]').val(),
      };

      let type = 'PATCH';
      let url = 'view/update/' + {{ $user->id }};

      $.ajax({
        type: type,
        url: url,
        data: formData,
        dataType: "json",
        success: function (response) {
          console.log(response);
          $("#updateAlert").removeClass('text-danger');
          $("#updateAlert").addClass('text-success');
          $("#updateAlert").html(response.success);
          setTimeout(function () {
            $("#success").hide().html('');
            location.reload();
          }, 1000);
        },
        error: function (response) {
          console.log(response);
          $("#updateAlert").addClass('text-danger');
          $("#updateAlert").html(response.responseJSON);
        }
      });
    });
  });

  $(document).ready(function () {
    $("#walletBalanceBtn").click(function (e) {
      e.preventDefault();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      })

      let formData = {
        amount: $('input[name="wb_amount"]').val(),
      };

      let type = 'PATCH';
      let url = 'view/update/wb/' + {{ $user->id }};

      $.ajax({
        type: type,
        url: url,
        data: formData,
        dataType: "json",
        success: function (response) {
          console.log(response);
          $("#walletBalanaceAlert").addClass('text-success');
          $("#walletBalanaceAlert").html(response.success);
          setTimeout(function () {
            $("#success").hide().html('');
            location.reload();
          }, 1000);
        },
        error: function (response) {
          console.log(response);
        }
      });
    });
  });

  $(document).ready(function () {
    $("#hashRateBtn").click(function (e) {
      e.preventDefault();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      })

      let formData = {
        amount: $('input[name="hr_amount"]').val(),
      };

      let type = 'PATCH';
      let url = 'view/update/hr/' + {{ $user->id }};

      $.ajax({
        type: type,
        url: url,
        data: formData,
        dataType: "json",
        success: function (response) {
          console.log(response);
          $("#hashRateAlert").addClass('text-success');
          $("#hashRateAlert").html(response.success);
          setTimeout(function () {
            $("#success").hide().html('');
            location.reload();
          }, 1000);
        },
        error: function (response) {
          console.log(response);
        }
      });
    });
  });

  $(document).ready(function () {
    $("#bonusBtn").click(function (e) {
      e.preventDefault();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      })

      let formData = {
        amount: $('input[name="b_amount"]').val(),
      };

      let type = 'PATCH';
      let url = 'view/update/bonus/' + {{ $user->id }};

      $.ajax({
        type: type,
        url: url,
        data: formData,
        dataType: "json",
        success: function (response) {
          console.log(response);
          $("#bonusAlert").addClass('text-success');
          $("#bonusAlert").html(response.success);
          setTimeout(function () {
            $("#success").hide().html('');
            location.reload();
          }, 1000);
        },
        error: function (response) {
          console.log(response);
        }
      });
    });
  });

  $(document).ready(function () {
    $("#packageBtn").click(function (e) {
      e.preventDefault();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      })

      let formData = {
        p: $('select[name="package"]').val(),
      };

      let type = 'PATCH';
      let url = 'view/update/package/' + {{ $user->id }};

      $.ajax({
        type: type,
        url: url,
        data: formData,
        dataType: "json",
        success: function (response) {
          console.log(response);
          const pack = $("#PakageAlert");
          pack.addClass('text-success');
          pack.html(response.success);
          setTimeout(function () {
            $("#success").hide().html('');
            location.reload();
          }, 1000);
        },
        error: function (response) {
          console.log(response);
        }
      });
    });
  });

  $(document).ready(function () {
    $("#sendemail").click(function (e) {
      e.preventDefault();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      })

      let formData = {
        email: $('input[name="email"]').val(),
        subject: $('input[name="subject"]').val(),
        msg: getDataFromTheEditor(),
      };

      let type = 'POST';
      let url = 'send/mail';

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
          $('input[name="email"]').hide();
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
