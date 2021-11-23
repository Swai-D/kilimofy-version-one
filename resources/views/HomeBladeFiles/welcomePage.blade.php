<!DOCTYPE html>
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
    <div class="landing-info">
      <!-- LOGO -->
      <div class="logo">
        <!-- ICON LOGO VIKINGER -->
        <img src="/assets/img/logo/logo_white.png" alt="" style="width:30%;height:30%;">
        <!-- /ICON LOGO VIKINGER -->
      </div>
      <!-- /LOGO -->

      <!-- LANDING INFO PRETITLE -->
      <h2 class="landing-info-pretitle">Karibu</h2>
      <!-- /LANDING INFO PRETITLE -->

      <!-- LANDING INFO TITLE -->
      <!-- <h1 class="landing-info-title">Kilimofy</h1> -->
      <!-- /LANDING INFO TITLE -->

      <!-- LANDING INFO TEXT -->
      <p class="landing-info-text">Ulimwengu wa kidijitale</p>
      <!-- /LANDING INFO TEXT -->

      <!-- TAB SWITCH -->
      <div class="tab-switch">
        <!-- TAB SWITCH BUTTON -->
        <p class="tab-switch-button login-register-form-trigger">ingia</p>
        <!-- /TAB SWITCH BUTTON -->

        <!-- TAB SWITCH BUTTON -->
        <p class="tab-switch-button login-register-form-trigger">jiunge</p>
        <!-- /TAB SWITCH BUTTON -->
      </div>
      <!-- /TAB SWITCH -->
    </div>
    <!-- /LANDING INFO -->

    <!-- LANDING FORM -->
    <div class="landing-form">
      <!-- FORM BOX -->
      <div class="form-box login-register-form-element">
        <!-- FORM BOX DECORATION -->
        <!-- <img class="form-box-decoration overflowing" src="/assets/img/landing/rocket.png" alt="rocket"> -->
        <!-- /FORM BOX DECORATION -->

        <!-- FORM BOX TITLE -->
        <h2 class="form-box-title">Account Login</h2>
        <!-- /FORM BOX TITLE -->

        <!-- FORM -->

        <form class="form" method="POST" action="{{ route('login') }}">
          @csrf

          @if($errors->any())
          <h4 class="form-box-title text-danger">{{$errors->first()}}</h4>
          @endif
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="login-username">Jina</label>
                <input type="text" id="login-username" name="name" value="{{old('name')}}">
                <p class="lead" style="color: #f33155">
                  {{$errors->first('name')}}
                </p>
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
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="login-password">Neno la siri</label>
                <input type="password" id="login-password" name="password">
                <p class="lead" style="color: #f33155">
                  {{$errors->first('password')}}
                </p>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row space-between">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- CHECKBOX WRAP -->
              <div class="checkbox-wrap">
                <input type="checkbox" id="login-remember" name="remember" checked>
                <!-- CHECKBOX BOX -->
                <div class="checkbox-box">
                  <!-- ICON CROSS -->
                  <svg class="icon-cross">
                    <use xlink:href="#svg-cross"></use>
                  </svg>
                  <!-- /ICON CROSS -->
                </div>
                <!-- /CHECKBOX BOX -->
                <label for="login-remember">Weka Kumbukumbu</label>
              </div>
              <!-- /CHECKBOX WRAP -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM LINK -->
              <a class="form-link" href="#">Umesahau neno la siri?</a>
              <!-- /FORM LINK -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- BUTTON -->
              <button type="submit" class="button medium secondary">Ingia!</button>
              <!-- /BUTTON -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
        </form>
        <!-- /FORM -->

        <!-- LINED TEXT -->
        <p class="lined-text">Login with your Social Account</p>
        <!-- /LINED TEXT -->

        <!-- SOCIAL LINKS -->
        <div class="social-links">
          <!-- SOCIAL LINK -->
          <a class="social-link facebook" href="#">
            <!-- ICON FACEBOOK -->
            <svg class="icon-facebook">
              <use xlink:href="#svg-facebook"></use>
            </svg>
            <!-- /ICON FACEBOOK -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->
          <a class="social-link twitter" href="#">
            <!-- ICON TWITTER -->
            <svg class="icon-twitter">
              <use xlink:href="#svg-twitter"></use>
            </svg>
            <!-- /ICON TWITTER -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->
          <a class="social-link twitch" href="#">
            <!-- ICON TWITCH -->
            <svg class="icon-twitch">
              <use xlink:href="#svg-twitch"></use>
            </svg>
            <!-- /ICON TWITCH -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->
          <a class="social-link youtube" href="#">
            <!-- ICON YOUTUBE -->
            <svg class="icon-youtube">
              <use xlink:href="#svg-youtube"></use>
            </svg>
            <!-- /ICON YOUTUBE -->
          </a>
          <!-- /SOCIAL LINK -->
        </div>
        <!-- /SOCIAL LINKS -->
      </div>
      <!-- /FORM BOX -->
    <br>
      <!-- FORM BOX -->
      <div class="form-box login-register-form-element">

        <!-- FORM BOX TITLE -->
        <h2 class="form-box-title">Create your Account!</h2>
        <!-- /FORM BOX TITLE -->

        <!-- FORM -->
        <form class="form" method="POST" action="/kilimofy/user/register_form">
          @csrf
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="register-email">Jina kamili <span style="font-size:16px; color:red;">*</span> </label>
                <input type="text" id="register-email" name="name" value="{{old('name')}}">
                <p class="lead" style="color: #f33155">
                  {{$errors->first('name')}}
                </p>
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
              <!-- FORM INPUT -->
              <div class="form-select">
                <label for="register-username">Unajishuhulisha na? <span style="font-size:16px; color:red;">*</span></label>
                <select class="for" name="user_ocupation">
                  <option  selected disabled>Kazi ?</option>
                  <option value="Mkulima">Mkulima</option>
                  <option value="Muuzaji_Wa_pembejeo_Na_Viwatilifu">Muuzaji wa pembejeo Na Viwatilifu</option>
                  <option value="Bwana_Shamba">Bwana Shamba (Afisa Ugavi)</option>
                  <option value="Fundi_Na_Mashine_Za_Kilimo">Fundi &amp; Mashine Za Kilimo</option>
                  <option value="Msafirishaji">Usafirishaji Wa Bidhaa za Kilimo</option>
                </select>
                <p class="lead" style="color: #f33155">
                  {{$errors->first('user_occupation')}}
                </p>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>

          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM SELECT -->
              <div class="form-select">
                <label for="rating-reason">Kutokea ?<span style="font-size:16px; color:red;">*</span></label>
                <select class="for" name="user_location">
                  <option value="" selected disabled>Mkoa &amp; Wilaya ? </option>

                  @foreach($places as $place)
                    <option value="{{$place->Region}}, {{$place->District}}">{{$place->Region}} ({{$place->District}}) </option>
                  @endforeach

                </select>
                <!-- FORM SELECT ICON -->
                <svg class="form-select-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /FORM SELECT ICON -->
                <p class="lead" style="color: #f33155">
                  {{$errors->first('user_location')}}
                </p>
              </div>
              <!-- /FORM SELECT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="register-username">Nambari ya Simu <span style="font-size:16px; color:red;">*</span></label>
                <input type="number" id="register-username" name="user_phone_number"  value="{{old('user_phone_number')}}"/>
                <p class="lead" style="color: #f33155">
                  {{$errors->first('user_phone_number')}}
                </p>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>


          <!-- /FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="register-username">Neno la siri <span style="font-size:16px; color:red;">*</span></label>
                <input type="password" id="register-username" name="password">
                <p class="lead" style="color: #f33155">
                  {{$errors->first('password')}}
                </p>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>

          <!-- FORM ROW -->
          <!-- /FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="register-username">Rudia tena Neno la siri <span style="font-size:16px; color:red;">*</span></label>
                <input type="password" id="register-username" name="password_confirmation">
                <p class="lead" style="color: #f33155">
                  {{$errors->first('password_confirmation')}}
                </p>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- FORM ROW -->


          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- BUTTON -->
              <button type="submit" class="button medium secondary">Jiunge sasa!</button>
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
