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
<div class="grid grid-3-6-3">
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
            <p class="information-line-text">{{$user->created_at->format('M d, Y') }}</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">City</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">{{$user->user_location }}</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Country</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">Tanzania</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Age</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">NOT SET</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Web</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text"><a href="#">NOT SET</a></p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Email</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text"><a href="" class="__cf_email__" data-cfemail="7a1d120f140e081f09093a03150f08171b131654191517">{{$user->email}}</a></p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

        @if($user->birthday != NULL)
        <!-- INFORMATION LINE -->
        <div class="information-line">
          <!-- INFORMATION LINE TITLE -->
          <p class="information-line-title">Birthday</p>
          <!-- /INFORMATION LINE TITLE -->

          <!-- INFORMATION LINE TEXT -->
          <p class="information-line-text">{{$user->birthday}}</p>
          <!-- /INFORMATION LINE TEXT -->
        </div>
        <!-- /INFORMATION LINE -->
        @else
        <!-- INFORMATION LINE -->
        <div class="information-line">
          <!-- INFORMATION LINE TITLE -->
          <p class="information-line-title">Birthday</p>
          <!-- /INFORMATION LINE TITLE -->

          <!-- INFORMATION LINE TEXT -->
          <p class="information-line-text">NOT SET</p>
          <!-- /INFORMATION LINE TEXT -->
        </div>
        <!-- /INFORMATION LINE -->
        @endif

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Occupation</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">{{$user->user_ocupation}}</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Status</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">{{$user->status}}</p>
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
      <p class="widget-box-title">Jobs &amp; Education</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- TIMELINE INFORMATION LIST -->
        <div class="timeline-information-list">
          <!-- TIMELINE INFORMATION -->
          <div class="timeline-information">
            <!-- TIMELINE INFORMATION TITLE -->
            <p class="timeline-information-title">Lead Costume Designer</p>
            <!-- /TIMELINE INFORMATION TITLE -->

            <!-- TIMELINE INFORMATION DATE -->
            <p class="timeline-information-date">2015 - NOW</p>
            <!-- /TIMELINE INFORMATION DATE -->

            <!-- TIMELINE INFORMATION TEXT -->
            <p class="timeline-information-text"></p>
            <!-- /TIMELINE INFORMATION TEXT -->
          </div>
          <!-- /TIMELINE INFORMATION -->

          <!-- TIMELINE INFORMATION -->
          <div class="timeline-information">
            <!-- TIMELINE INFORMATION TITLE -->
            <p class="timeline-information-title">Costume Designer</p>
            <!-- /TIMELINE INFORMATION TITLE -->

            <!-- TIMELINE INFORMATION DATE -->
            <p class="timeline-information-date">2013 - 2015</p>
            <!-- /TIMELINE INFORMATION DATE -->

            <!-- TIMELINE INFORMATION TEXT -->
            <p class="timeline-information-text"></p>
            <!-- /TIMELINE INFORMATION TEXT -->
          </div>
          <!-- /TIMELINE INFORMATION -->

          <!-- TIMELINE INFORMATION -->
          <div class="timeline-information">
            <!-- TIMELINE INFORMATION TITLE -->
            <p class="timeline-information-title">Designer Intern</p>
            <!-- /TIMELINE INFORMATION TITLE -->

            <!-- TIMELINE INFORMATION DATE -->
            <p class="timeline-information-date">2012 - 2013</p>
            <!-- /TIMELINE INFORMATION DATE -->

            <!-- TIMELINE INFORMATION TEXT -->
            <p class="timeline-information-text"></p>
            <!-- /TIMELINE INFORMATION TEXT -->
          </div>
          <!-- /TIMELINE INFORMATION -->

          <!-- TIMELINE INFORMATION -->
          <div class="timeline-information">
            <!-- TIMELINE INFORMATION TITLE -->
            <p class="timeline-information-title">The Antique College of Design</p>
            <!-- /TIMELINE INFORMATION TITLE -->

            <!-- TIMELINE INFORMATION DATE -->
            <p class="timeline-information-date">2007 - 2012</p>
            <!-- /TIMELINE INFORMATION DATE -->

            <!-- TIMELINE INFORMATION TEXT -->
            <p class="timeline-information-text"></p>
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
      <p class="widget-box-title">More Stats</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- STAT BLOCK LIST -->
        <div class="stat-block-list">
          <!-- STAT BLOCK -->
          <div class="stat-block">
            <!-- STAT BLOCK DECORATION -->
            <div class="stat-block-decoration">
              <!-- STAT BLOCK DECORATION ICON -->
              <svg class="stat-block-decoration-icon icon-friend">
                <use xlink:href="#svg-friend"></use>
              </svg>
              <!-- /STAT BLOCK DECORATION ICON -->
            </div>
            <!-- /STAT BLOCK DECORATION -->

            <!-- STAT BLOCK INFO -->
            <div class="stat-block-info">
              <!-- STAT BLOCK TITLE -->
              <p class="stat-block-title">Last friend added</p>
              <!-- /STAT BLOCK TITLE -->

              <!-- STAT BLOCK TEXT -->
              <p class="stat-block-text">5 Days Ago</p>
              <!-- /STAT BLOCK TEXT -->
            </div>
            <!-- /STAT BLOCK INFO -->
          </div>
          <!-- /STAT BLOCK -->

          <!-- STAT BLOCK -->
          <div class="stat-block">
            <!-- STAT BLOCK DECORATION -->
            <div class="stat-block-decoration">
              <!-- STAT BLOCK DECORATION ICON -->
              <svg class="stat-block-decoration-icon icon-status">
                <use xlink:href="#svg-status"></use>
              </svg>
              <!-- /STAT BLOCK DECORATION ICON -->
            </div>
            <!-- /STAT BLOCK DECORATION -->

            <!-- STAT BLOCK INFO -->
            <div class="stat-block-info">
              <!-- STAT BLOCK TITLE -->
              <p class="stat-block-title">Last post update</p>
              <!-- /STAT BLOCK TITLE -->

              <!-- STAT BLOCK TEXT -->
              <p class="stat-block-text">1 Day Ago</p>
              <!-- /STAT BLOCK TEXT -->
            </div>
            <!-- /STAT BLOCK INFO -->
          </div>
          <!-- /STAT BLOCK -->

          <!-- STAT BLOCK -->
          <div class="stat-block">
            <!-- STAT BLOCK DECORATION -->
            <div class="stat-block-decoration">
              <!-- STAT BLOCK DECORATION ICON -->
              <svg class="stat-block-decoration-icon icon-comment">
                <use xlink:href="#svg-comment"></use>
              </svg>
              <!-- /STAT BLOCK DECORATION ICON -->
            </div>
            <!-- /STAT BLOCK DECORATION -->

            <!-- STAT BLOCK INFO -->
            <div class="stat-block-info">
              <!-- STAT BLOCK TITLE -->
              <p class="stat-block-title">Most commented post</p>
              <!-- /STAT BLOCK TITLE -->

              <!-- STAT BLOCK TEXT -->
              <p class="stat-block-text">56 Comments</p>
              <!-- /STAT BLOCK TEXT -->
            </div>
            <!-- /STAT BLOCK INFO -->
          </div>
          <!-- /STAT BLOCK -->

          <!-- STAT BLOCK -->
          <div class="stat-block">
            <!-- STAT BLOCK DECORATION -->
            <div class="stat-block-decoration">
              <!-- STAT BLOCK DECORATION ICON -->
              <svg class="stat-block-decoration-icon icon-thumbs-up">
                <use xlink:href="#svg-thumbs-up"></use>
              </svg>
              <!-- /STAT BLOCK DECORATION ICON -->
            </div>
            <!-- /STAT BLOCK DECORATION -->

            <!-- STAT BLOCK INFO -->
            <div class="stat-block-info">
              <!-- STAT BLOCK TITLE -->
              <p class="stat-block-title">Most liked post</p>
              <!-- /STAT BLOCK TITLE -->

              <!-- STAT BLOCK TEXT -->
              <p class="stat-block-text">904 Likes</p>
              <!-- /STAT BLOCK TEXT -->
            </div>
            <!-- /STAT BLOCK INFO -->
          </div>
          <!-- /STAT BLOCK -->
        </div>
        <!-- /STAT BLOCK LIST -->
      </div>
      <!-- /WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
  </div>
  <!-- /GRID COLUMN -->
</div>
@endsection

@endforeach
