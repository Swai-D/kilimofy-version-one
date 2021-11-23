@extends('LayoutBladeFiles.app-layout')
@section('title','Mashine Za Kilimo')
@section('menu-status-gardener','active')
@section('discription-title','Magari ya Usafirishaji Na Mashine za Kilimo')
<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- PROFILE HEADER -->
  <div class="profile-header">
    <!-- PROFILE HEADER COVER -->
    <figure class="profile-header-cover liquid">
      <img src="/assets/img/cover/01.jpg" alt="cover-01">
    </figure>
    <!-- /PROFILE HEADER COVER -->

    <!-- PROFILE HEADER INFO -->
    <div class="profile-header-info">
      <!-- USER SHORT DESCRIPTION -->
      <div class="user-short-description big">
        <!-- USER SHORT DESCRIPTION AVATAR -->
        <a class="user-short-description-avatar user-avatar big" href="profile-timeline.html">
          <!-- USER AVATAR BORDER -->
          <div class="user-avatar-border">
            <!-- HEXAGON -->
            <div class="hexagon-148-164"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR BORDER -->

          <!-- USER AVATAR CONTENT -->
          <div class="user-avatar-content">
            <!-- HEXAGON -->
            <div class="hexagon-image-100-110" data-src="/assets/img/avatar/01.jpg"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR CONTENT -->

          <!-- USER AVATAR PROGRESS -->
          <div class="user-avatar-progress">
            <!-- HEXAGON -->
            <div class="hexagon-progress-124-136"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR PROGRESS -->

          <!-- USER AVATAR PROGRESS BORDER -->
          <div class="user-avatar-progress-border">
            <!-- HEXAGON -->
            <div class="hexagon-border-124-136"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR PROGRESS BORDER -->

          <!-- USER AVATAR BADGE -->
          <div class="user-avatar-badge">
            <!-- USER AVATAR BADGE BORDER -->
            <div class="user-avatar-badge-border">
              <!-- HEXAGON -->
              <div class="hexagon-40-44"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BADGE BORDER -->

            <!-- USER AVATAR BADGE CONTENT -->
            <div class="user-avatar-badge-content">
              <!-- HEXAGON -->
              <div class="hexagon-dark-32-34"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BADGE CONTENT -->

            <!-- USER AVATAR BADGE TEXT -->
            <p class="user-avatar-badge-text">24</p>
            <!-- /USER AVATAR BADGE TEXT -->
          </div>
          <!-- /USER AVATAR BADGE -->
        </a>
        <!-- /USER SHORT DESCRIPTION AVATAR -->

        <!-- USER SHORT DESCRIPTION AVATAR -->
        <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium" href="profile-timeline.html">
          <!-- USER AVATAR BORDER -->
          <div class="user-avatar-border">
            <!-- HEXAGON -->
            <div class="hexagon-120-132"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR BORDER -->

          <!-- USER AVATAR CONTENT -->
          <div class="user-avatar-content">
            <!-- HEXAGON -->
            <div class="hexagon-image-82-90" data-src="img/avatar/01.jpg"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR CONTENT -->

          <!-- USER AVATAR PROGRESS -->
          <div class="user-avatar-progress">
            <!-- HEXAGON -->
            <div class="hexagon-progress-100-110"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR PROGRESS -->

          <!-- USER AVATAR PROGRESS BORDER -->
          <div class="user-avatar-progress-border">
            <!-- HEXAGON -->
            <div class="hexagon-border-100-110"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR PROGRESS BORDER -->

          <!-- USER AVATAR BADGE -->
          <div class="user-avatar-badge">
            <!-- USER AVATAR BADGE BORDER -->
            <div class="user-avatar-badge-border">
              <!-- HEXAGON -->
              <div class="hexagon-32-36"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BADGE BORDER -->

            <!-- USER AVATAR BADGE CONTENT -->
            <div class="user-avatar-badge-content">
              <!-- HEXAGON -->
              <div class="hexagon-dark-26-28"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BADGE CONTENT -->

            <!-- USER AVATAR BADGE TEXT -->
            <p class="user-avatar-badge-text">24</p>
            <!-- /USER AVATAR BADGE TEXT -->
          </div>
          <!-- /USER AVATAR BADGE -->
        </a>
        <!-- /USER SHORT DESCRIPTION AVATAR -->

        <!-- USER SHORT DESCRIPTION TITLE -->
        <p class="user-short-description-title"><a href="profile-timeline.html">{{Auth::user()->user_name}}</a></p>
        <!-- /USER SHORT DESCRIPTION TITLE -->

        <!-- USER SHORT DESCRIPTION TEXT -->
        <p class="user-short-description-text"><a href="#">www.gamehuntress.com</a></p>
        <!-- /USER SHORT DESCRIPTION TEXT -->
      </div>
      <!-- /USER SHORT DESCRIPTION -->

      <!-- PROFILE HEADER SOCIAL LINKS WRAP -->
      <div class="profile-header-social-links-wrap">
        <!-- PROFILE HEADER SOCIAL LINKS -->
        <div id="profile-header-social-links-slider" class="profile-header-social-links">
          <div class="profile-header-social-link">
            <!-- SOCIAL LINK -->
            <a class="social-link facebook" href="#">
              <!-- ICON FACEBOOK -->
              <svg class="icon-facebook">
                <use xlink:href="#svg-facebook"></use>
              </svg>
              <!-- /ICON FACEBOOK -->
            </a>
            <!-- /SOCIAL LINK -->
          </div>

          <div class="profile-header-social-link">
            <!-- SOCIAL LINK -->
            <a class="social-link twitter" href="#">
              <!-- ICON TWITTER -->
              <svg class="icon-twitter">
                <use xlink:href="#svg-twitter"></use>
              </svg>
              <!-- /ICON TWITTER -->
            </a>
            <!-- /SOCIAL LINK -->
          </div>

          <div class="profile-header-social-link">
            <!-- SOCIAL LINK -->
            <a class="social-link instagram" href="#">
              <!-- ICON INSTAGRAM -->
              <svg class="icon-instagram">
                <use xlink:href="#svg-instagram"></use>
              </svg>
              <!-- /ICON INSTAGRAM -->
            </a>
            <!-- /SOCIAL LINK -->
          </div>

          <div class="profile-header-social-link">
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

        </div>
        <!-- /PROFILE HEADER SOCIAL LINKS -->

        <!-- SLIDER CONTROLS -->
        <div id="profile-header-social-links-slider-controls" class="slider-controls">
          <!-- SLIDER CONTROL -->
          <div class="slider-control left">
            <!-- SLIDER CONTROL ICON -->
            <svg class="slider-control-icon icon-small-arrow">
              <use xlink:href="#svg-small-arrow"></use>
            </svg>
            <!-- /SLIDER CONTROL ICON -->
          </div>
          <!-- /SLIDER CONTROL -->

          <!-- SLIDER CONTROL -->
          <div class="slider-control right">
            <!-- SLIDER CONTROL ICON -->
            <svg class="slider-control-icon icon-small-arrow">
              <use xlink:href="#svg-small-arrow"></use>
            </svg>
            <!-- /SLIDER CONTROL ICON -->
          </div>
          <!-- /SLIDER CONTROL -->
        </div>
        <!-- /SLIDER CONTROLS -->
      </div>
      <!-- /PROFILE HEADER SOCIAL LINKS WRAP -->

      <!-- USER STATS -->
      <div class="user-stats">
        <!-- USER STAT -->
        <div class="user-stat big">
          <!-- USER STAT TITLE -->
          <p class="user-stat-title">930</p>
          <!-- /USER STAT TITLE -->

          <!-- USER STAT TEXT -->
          <p class="user-stat-text">posts</p>
          <!-- /USER STAT TEXT -->
        </div>
        <!-- /USER STAT -->


        <!-- /USER STAT -->

        <!-- USER STAT -->

        <!-- /USER STAT -->

        <!-- USER STAT -->

        <!-- /USER STAT -->
      </div>
      <!-- /USER STATS -->

      <!-- PROFILE HEADER INFO ACTIONS -->

      <!-- /PROFILE HEADER INFO ACTIONS -->
    </div>
    <!-- /PROFILE HEADER INFO -->
  </div>
  <!-- /PROFILE HEADER -->

  <!-- SECTION NAVIGATION -->
  <nav class="section-navigation">
    <!-- SECTION MENU -->
    <div id="section-navigation-slider" class="section-menu">
      <!-- SECTION MENU ITEM -->
      <a class="section-menu-item active" href="profile-about.html">
        <!-- SECTION MENU ITEM ICON -->
        <svg class="section-menu-item-icon icon-profile">
          <use xlink:href="#svg-profile"></use>
        </svg>
        <!-- /SECTION MENU ITEM ICON -->

        <!-- SECTION MENU ITEM TEXT -->
        <p class="section-menu-item-text">About</p>
        <!-- /SECTION MENU ITEM TEXT -->
      </a>
      <!-- /SECTION MENU ITEM -->

      <!-- SECTION MENU ITEM -->
      <a class="section-menu-item" href="profile-photos.html">
        <!-- SECTION MENU ITEM ICON -->
        <svg class="section-menu-item-icon icon-photos">
          <use xlink:href="#svg-photos"></use>
        </svg>
        <!-- /SECTION MENU ITEM ICON -->

        <!-- SECTION MENU ITEM TEXT -->
        <p class="section-menu-item-text">Photos</p>
        <!-- /SECTION MENU ITEM TEXT -->
      </a>

    </div>
    <!-- /SECTION MENU -->

    <!-- SLIDER CONTROLS -->
    <div id="section-navigation-slider-controls" class="slider-controls">
      <!-- SLIDER CONTROL -->
      <div class="slider-control left">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->

      <!-- SLIDER CONTROL -->
      <div class="slider-control right">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->
    </div>
    <!-- /SLIDER CONTROLS -->
  </nav>
  <!-- /SECTION NAVIGATION -->

  <!-- GRID -->
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
        <p class="widget-box-title">About Me</p>
        <!-- /WIDGET BOX TITLE -->

        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
          <!-- PARAGRAPH -->
          <p class="paragraph">Hi! My name is Marina but some people may know me as GameHuntress! I have a Twitch channel where I stream, play and review all the newest games.</p>
          <!-- /PARAGRAPH -->

          <!-- INFORMATION LINE LIST -->
          <div class="information-line-list">
            <!-- INFORMATION LINE -->
            <div class="information-line">
              <!-- INFORMATION LINE TITLE -->
              <p class="information-line-title">Joined</p>
              <!-- /INFORMATION LINE TITLE -->

              <!-- INFORMATION LINE TEXT -->
              <p class="information-line-text">March 26th, 2017</p>
              <!-- /INFORMATION LINE TEXT -->
            </div>
            <!-- /INFORMATION LINE -->

            <!-- INFORMATION LINE -->
            <div class="information-line">
              <!-- INFORMATION LINE TITLE -->
              <p class="information-line-title">City</p>
              <!-- /INFORMATION LINE TITLE -->

              <!-- INFORMATION LINE TEXT -->
              <p class="information-line-text">Los Angeles, California</p>
              <!-- /INFORMATION LINE TEXT -->
            </div>
            <!-- /INFORMATION LINE -->

            <!-- INFORMATION LINE -->
            <div class="information-line">
              <!-- INFORMATION LINE TITLE -->
              <p class="information-line-title">Country</p>
              <!-- /INFORMATION LINE TITLE -->

              <!-- INFORMATION LINE TEXT -->
              <p class="information-line-text">United States</p>
              <!-- /INFORMATION LINE TEXT -->
            </div>
            <!-- /INFORMATION LINE -->

            <!-- INFORMATION LINE -->
            <div class="information-line">
              <!-- INFORMATION LINE TITLE -->
              <p class="information-line-title">Age</p>
              <!-- /INFORMATION LINE TITLE -->

              <!-- INFORMATION LINE TEXT -->
              <p class="information-line-text">32 Years</p>
              <!-- /INFORMATION LINE TEXT -->
            </div>
            <!-- /INFORMATION LINE -->

            <!-- INFORMATION LINE -->
            <div class="information-line">
              <!-- INFORMATION LINE TITLE -->
              <p class="information-line-title">Web</p>
              <!-- /INFORMATION LINE TITLE -->

              <!-- INFORMATION LINE TEXT -->
              <p class="information-line-text"><a href="#">www.gamehuntress.com</a></p>
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
              <p class="timeline-information-text">Lead Costume Designer for the "Amazzo Costumes" agency. I'm in charge of a ten person group, overseeing all the proyects and talking to potential clients. I also handle some face to face interviews for new candidates.</p>
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
              <p class="timeline-information-text">Costume Designer for the "Jenny Taylors" agency. Was in charge of working side by side with the best designers in order to complete and perfect orders.</p>
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
              <p class="timeline-information-text">Intern for the "Jenny Taylors" agency. Was in charge of the communication with the clients and day-to-day chores.</p>
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
              <p class="timeline-information-text">Bachelor of Costume Design in the Antique College. It was a five years intensive career, plus a course about Cosplays. Average: A+</p>
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
  <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->
