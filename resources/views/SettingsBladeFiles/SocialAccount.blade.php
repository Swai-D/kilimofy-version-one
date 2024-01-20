@extends('LayoutBladeFiles.settingsLayout')

@section('discription-title')
 Akaunti ya {{Auth::user()->name}}
@endsection

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
  @if(session()->has('Message'))
    <div class="alert alert" role = "alert">
      <p class="lead" style="color: #f33155">
        {{session()->get('Message')}}
      </p>
    </div>
  @endif
  <!-- GRID COLUMN -->
  <div class="grid-column">

    <!-- FORM -->
    <form class="form" action="/kilimofy/UserAccount-Social-Account-Settings/Update-Social-Link/{{Auth::user()->id}}" method="post">
      @csrf
    <!-- WIDGET BOX -->
    <div class="widget-box">
      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Your Social Accounts</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">

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

                <label for="social-account-facebook">Facebook Link</label>
                <input type="text" id="social-account-facebook" name="facebook" value="{{old('facebook') ?? Auth::user()->facebook }}">
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

                <label for="social-account-twitter">Twitter Link</label>
                <input type="text" id="social-account-twitter" name="twitter" value="{{old('twitter') ?? Auth::user()->twitter }}"twitter>
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

                <label for="social-account-instagram">Instagram Link</label>
                <input type="text" id="social-account-instagram" name="instagram" value="{{old('instagram') ?? Auth::user()->instagram }}">
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

                <label for="social-account-twitch">Youtube Link</label>
                <input type="text" id="social-account-twitch" name="youtube" value="{{old('youtube') ?? Auth::user()->youtube }}">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

      </div>
      <!-- WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
     <br>
    <!-- WIDGET BOX -->
    <div class="widget-box">
      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Social Link</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- SWITCH OPTION -->
        <div class="switch-option">
          <!-- SWITCH OPTION TITLE -->
          <p class="switch-option-title">Enable Social Link</p>
          <!-- /SWITCH OPTION TITLE -->

          <!-- SWITCH OPTION TEXT -->
          <p class="switch-option-text">Turn on this switch to show your  social account in your profile page</p>
          <!-- /SWITCH OPTION TEXT -->

          <!-- FORM SWITCH -->
          <div class="form-switch active">
            <!-- FORM SWITCH BUTTON -->
            <div class="form-switch-button"></div>
            <!-- /FORM SWITCH BUTTON -->
          </div>
          <!-- /FORM SWITCH -->

          <!-- BUTTON -->
          <button type="submit" class="button twitter" >
            <!-- BUTTON ICON -->
            <svg class="button-icon spaced icon-twitter">
              <use xlink:href="#svg-share"></use>
            </svg>
            <!-- /BUTTON ICON -->
            Share Your Accounts
          </button>
          <!-- /BUTTON -->

          <!-- SWITCH OPTION META -->
          <p class="switch-option-meta">Account For: <span class="bold" style="color:green;">@ {{Auth::user()->username}}</span></p>
          <!-- /SWITCH OPTION META -->
        </div>
        <!-- /SWITCH OPTION -->
      </div>
      <!-- WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
  </div>
  <!-- /GRID COLUMN -->
</form>
<!-- /FORM -->

</div>
<!-- /GRID COLUMN -->
@endsection
