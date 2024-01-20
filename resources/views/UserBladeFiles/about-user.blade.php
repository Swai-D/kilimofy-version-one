@extends('LayoutBladeFiles.user-account-layout')

@foreach($user as $user)

@section('title')
About {{$user->name}}
@endsection

@section('mini-user-profile-active')
 style="fill:yellow "
@endsection

@section('about-menu-active', 'active')
@section('user-data')
<div class="grid grid-3-9">
  <!-- GRID COLUMN -->
  <div class="grid-column">
    <!-- WIDGET BOX -->
    <div class="widget-box">
      <!-- WIDGET BOX SETTINGS -->
      <div class="widget-box-settings">
        <!-- POST SETTINGS WRAP -->
        <div class="post-settings-wrap">
          <!-- POST SETTINGS -->
          <div class="post-settings widget-box-post-settings-dropdown-trigger">
            <!-- POST SETTINGS ICON -->
            <svg class="post-settings-icon icon-more-dots">
              <use xlink:href="#svg-more-dots"></use>
            </svg>
            <!-- /POST SETTINGS ICON -->
          </div>
          <!-- /POST SETTINGS -->

          <!-- SIMPLE DROPDOWN -->
          <div class="simple-dropdown widget-box-post-settings-dropdown">
            <!-- SIMPLE DROPDOWN LINK -->
            <p class="simple-dropdown-link">Widget Settings</p>
            <!-- /SIMPLE DROPDOWN LINK -->
          </div>
          <!-- /SIMPLE DROPDOWN -->
        </div>
        <!-- /POST SETTINGS WRAP -->
      </div>
      <!-- /WIDGET BOX SETTINGS -->

      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">About {{$user->name}}</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- PARAGRAPH -->
        <p class="paragraph">{{$user->description}}</p>
        <!-- /PARAGRAPH -->

        <!-- INFORMATION LINE LIST -->
        <div class="information-line-list">
          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Joined</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">{{$user->created_at->format('M d, Y')}}</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">City</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">{{$user->user_location}}</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Country</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">Tanzania <img src="/assets/img/flag/tanzania.png" alt="" style="width:20px; height:20px;"> </p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->


          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Web</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text"><a href="https://kilimofy.herokuapp.com/">www.kilimofy.com</a></p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->
        </div>
        <!-- /INFORMATION LINE LIST -->
      </div>
      <!-- /WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->

  </div>
  <!-- /GRID COLUMN -->

  <!-- GRID COLUMN -->
  <div class="grid-column">

    <!-- WIDGET BOX -->
    <div class="widget-box">
      <!-- WIDGET BOX SETTINGS -->
      <div class="widget-box-settings">
        <!-- POST SETTINGS WRAP -->
        <div class="post-settings-wrap">
          <!-- POST SETTINGS -->
          <div class="post-settings widget-box-post-settings-dropdown-trigger">
            <!-- POST SETTINGS ICON -->
            <svg class="post-settings-icon icon-more-dots">
              <use xlink:href="#svg-more-dots"></use>
            </svg>
            <!-- /POST SETTINGS ICON -->
          </div>
          <!-- /POST SETTINGS -->

          <!-- SIMPLE DROPDOWN -->
          <div class="simple-dropdown widget-box-post-settings-dropdown">
            <!-- SIMPLE DROPDOWN LINK -->
            <p class="simple-dropdown-link">Widget Settings</p>
            <!-- /SIMPLE DROPDOWN LINK -->
          </div>
          <!-- /SIMPLE DROPDOWN -->
        </div>
        <!-- /POST SETTINGS WRAP -->
      </div>
      <!-- /WIDGET BOX SETTINGS -->

      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Job &amp; Experience</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- TIMELINE INFORMATION LIST -->
        <div class="timeline-information-list">
          <!-- TIMELINE INFORMATION -->
          <div class="timeline-information">
            <!-- TIMELINE INFORMATION TITLE -->
            <p class="timeline-information-title">{{$user->user_ocupation}}</p>
            <!-- /TIMELINE INFORMATION TITLE -->

            <!-- TIMELINE INFORMATION DATE -->
            <p class="timeline-information-date">{{$user->updated_at->format('Y')}} - NOW</p>
            <!-- /TIMELINE INFORMATION DATE -->

            <!-- TIMELINE INFORMATION TEXT -->
            <p class="timeline-information-text">Hellow !  Naitwa {{$user->name}} aka {{$user->username}} kutokea {{$user->user_location}} Tanzania. Mimi ni  {{$user->user_ocupation}}.  Nafurahi kuwa mwanafamilia wa <a href="https://kilimofy.herokuapp.com/">Kilimofy</a>  </p>
            <!-- /TIMELINE INFORMATION TEXT -->
          </div>
          <!-- /TIMELINE INFORMATION -->

        </div>
        <!-- /TIMELINE INFORMATION LIST -->

      </div>
      <!-- /WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
  </div>
  <!-- /GRID COLUMN -->

  <!-- GRID COLUMN -->


  <!-- /GRID COLUMN -->
</div>
@endsection

@endforeach
