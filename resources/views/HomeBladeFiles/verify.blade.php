r<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- bootstrap 4.3.1 -->
  <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
  <!-- styles -->
  <link rel="stylesheet" href="/assets/css/styles.min.css">
  <!-- favicon -->
  <link rel="icon" href="/assets/img/favicon.ico">
  <title>Kilimofy | Karibu</title>
</head>
<body>

  <!-- LANDING -->
  <div class="landing">
    <!-- LANDING DECORATION -->
    <div class="landing-decoration"></div>
    <!-- /LANDING DECORATION -->

    <!-- LANDING INFO -->

    <!-- /LANDING INFO -->

    <!-- LANDING FORM -->
    <div class="landing-form">
      <!-- FORM BOX -->
      <div class="form-box login-register-form-element">
        <!-- FORM BOX DECORATION -->
        <!-- <img class="form-box-decoration overflowing" src="/assets/img/landing/rocket.png" alt="rocket"> -->
        <!-- /FORM BOX DECORATION -->

        <!-- FORM BOX TITLE -->
        <h2 class="form-box-title">Tuna Hakiki Namba yako ya Simu</h2>
        <br>
        <!-- /FORM BOX TITLE -->
        @if($error == 1)
          <h4 class="text-danger form-box-title">Tarakimu ulizoingiza Sio Sahihi !</h4>
        @endif
      <!-- FORM -->
        <form class="form" method="POST" action="/kilimofy/user/verify_form">
          @csrf
          <!-- FORM ROW -->
          <div class="form-row">

            <h6 class="landing-info-text">Ingiza tarakimu <span style="color:red;">{{$message}}</span> </h6>
            <br>
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <input type="hidden" name="user_phone_number" value="{{$std_user_phone_number}}">
                <input type="number" id="login-username" name="verification_code">
              </div>
              <!-- /FORM INPUT -->
              </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- BUTTON -->
              <button type="submit" class="button medium secondary">Hakiki Namba!</button>
              <!-- /BUTTON -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
        </form>
        <!-- /FORM -->

      </div>
      <!-- /FORM BOX -->
    </div>
    <!-- /LANDING FORM -->
  </div>
  <!-- /LANDING -->

<!-- app -->
<script src="/assets/js/app.bundle.min.js"></script>
</body>
</html>
