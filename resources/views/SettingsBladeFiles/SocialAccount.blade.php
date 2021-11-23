@extends('LayoutBladeFiles.settingsLayout')
@section('mini-user-settings-active', 'unread')
@section('profile-accordion-open', 'accordion-open')
@section('sidebar-social-account-link-active', 'active')
@section('settings-content')
<!-- GRID COLUMN -->
<div class="account-hub-content">
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">My Profile</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Social Networks</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- GRID COLUMN -->
  <div class="grid-column">
    <!-- WIDGET BOX -->
    <div class="widget-box">
      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Your Social Accounts</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- FORM -->
        <form class="form">
          <!-- FORM ROW -->
          <div class="form-row split">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input social-input small active">
                <!-- SOCIAL LINK -->
                <div class="social-link no-hover facebook">
                  <!-- ICON FACEBOOK -->
                  <svg class="icon-facebook">
                    <use xlink:href="#svg-facebook"></use>
                  </svg>
                  <!-- /ICON FACEBOOK -->
                </div>
                <!-- /SOCIAL LINK -->

                <label for="social-account-facebook">Facebook Username</label>
                <input type="text" id="social-account-facebook" name="social_account_facebook" value="marinavalentine182">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input social-input small active">
                <!-- SOCIAL LINK -->
                <div class="social-link no-hover twitter">
                  <!-- ICON TWITTER -->
                  <svg class="icon-twitter">
                    <use xlink:href="#svg-twitter"></use>
                  </svg>
                  <!-- /ICON TWITTER -->
                </div>
                <!-- /SOCIAL LINK -->

                <label for="social-account-twitter">Twitter Username</label>
                <input type="text" id="social-account-twitter" name="social_account_twitter" value="dghuntress">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row split">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input social-input small active">
                <!-- SOCIAL LINK -->
                <div class="social-link no-hover instagram">
                  <!-- ICON INSTAGRAM -->
                  <svg class="icon-instagram">
                    <use xlink:href="#svg-instagram"></use>
                  </svg>
                  <!-- /ICON INSTAGRAM -->
                </div>
                <!-- /SOCIAL LINK -->

                <label for="social-account-instagram">Instagram Username</label>
                <input type="text" id="social-account-instagram" name="social_account_instagram" value="mvalentine">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input social-input small active">
                <!-- SOCIAL LINK -->
                <div class="social-link no-hover youtube">
                  <!-- ICON TWITCH -->
                  <svg class="icon-youtube">
                    <use xlink:href="#svg-youtube"></use>
                  </svg>
                  <!-- /ICON TWITCH -->
                </div>
                <!-- /SOCIAL LINK -->

                <label for="social-account-twitch">Youtube Username</label>
                <input type="text" id="social-account-twitch" name="social_account_twitch" value="gamehuntress">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
        </form>
        <!-- /FORM -->
      </div>
      <!-- WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->

    <!-- WIDGET BOX -->
    <div class="widget-box">
      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Twitter Feed</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- SWITCH OPTION -->
        <div class="switch-option">
          <!-- SWITCH OPTION TITLE -->
          <p class="switch-option-title">Enable Twitter Feed</p>
          <!-- /SWITCH OPTION TITLE -->

          <!-- SWITCH OPTION TEXT -->
          <p class="switch-option-text">Turn on this switch to show your connected twitter account in your profile page</p>
          <!-- /SWITCH OPTION TEXT -->

          <!-- FORM SWITCH -->
          <div class="form-switch active">
            <!-- FORM SWITCH BUTTON -->
            <div class="form-switch-button"></div>
            <!-- /FORM SWITCH BUTTON -->
          </div>
          <!-- /FORM SWITCH -->

          <!-- BUTTON -->
          <a class="button twitter" href="#">
            <!-- BUTTON ICON -->
            <svg class="button-icon spaced icon-twitter">
              <use xlink:href="#svg-twitter"></use>
            </svg>
            <!-- /BUTTON ICON -->
            Link your Twitter Account
          </a>
          <!-- /BUTTON -->

          <!-- SWITCH OPTION META -->
          <p class="switch-option-meta">Linked Account: <span class="bold">@dghuntress</span></p>
          <!-- /SWITCH OPTION META -->
        </div>
        <!-- /SWITCH OPTION -->
      </div>
      <!-- WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
  </div>
  <!-- /GRID COLUMN -->

</div>
<!-- /GRID COLUMN -->
@endsection
