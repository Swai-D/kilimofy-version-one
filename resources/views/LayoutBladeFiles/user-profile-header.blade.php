<div class="profile-header">
  <!-- PROFILE HEADER COVER -->
  <figure class="profile-header-cover liquid">
    <img src="/assets/img/landing/landing-background.jpg" alt="cover-01">
  </figure>
  <!-- /PROFILE HEADER COVER -->

  <!-- PROFILE HEADER INFO -->
  <div class="profile-header-info">
    <!-- USER SHORT DESCRIPTION -->
    <div class="user-short-description big">
      <!-- USER SHORT DESCRIPTION AVATAR -->
      <a class="user-short-description-avatar user-avatar big popup-change-profile-trigger" >
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
          <div class="hexagon-image-100-110" data-src="{{$user->avatar}}"></div>
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


      </a>
      <!-- /USER SHORT DESCRIPTION AVATAR -->

      <!-- USER SHORT DESCRIPTION AVATAR -->
      <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium" >
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
          <div class="hexagon-image-82-90" data-src="/Uploads/avatars/{{$user->avatar}}"></div>
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
      <p class="user-short-description-title"><a href="profile-timeline.html">{{$user->name}}</a></p>
      <!-- /USER SHORT DESCRIPTION TITLE -->

      <!-- USER SHORT DESCRIPTION TEXT -->
      <p class="user-short-description-text"><a href="#">{{$user->username}}</a></p>
      <!-- /USER SHORT DESCRIPTION TEXT -->
    </div>
    <!-- /USER SHORT DESCRIPTION -->

    <!-- PROFILE HEADER SOCIAL LINKS WRAP -->
    <div class="profile-header-social-links-wrap ">
      <!-- PROFILE HEADER SOCIAL LINKS -->
      <div id="profile-header-social-links-slider" class="profile-header-social-links">
        <div class="profile-header-social-link">
        @if(Auth::user()->facebook != 'NOTE SET')
        <!-- SOCIAL LINK -->
        <a class="social-link facebook" href="{{Auth::user()->facebook}}" target="_blank">
          <!-- ICON FACEBOOK -->
          <svg class="icon-facebook">
            <use xlink:href="#svg-facebook"></use>
          </svg>
          <!-- /ICON FACEBOOK -->
        </a>
        <!-- /SOCIAL LINK -->
        @else
        <!-- SOCIAL LINK -->
        <a class="social-link facebook" href="#">
          <!-- ICON FACEBOOK -->
          <svg class="icon-facebook">
            <use xlink:href="#svg-facebook"></use>
          </svg>
          <!-- /ICON FACEBOOK -->
        </a>
        <!-- /SOCIAL LINK -->
        @endif

        </div>

        <div class="profile-header-social-link">
          @if(Auth::user()->instagram != 'NOTE SET')
          <!-- SOCIAL LINK -->
          <a class="social-link instagram" href="{{Auth::user()->instagram}}" target="_blank">
            <!-- ICON FACEBOOK -->
            <svg class="icon-instagram">
              <use xlink:href="#svg-instagram"></use>
            </svg>
            <!-- /ICON FACEBOOK -->
          </a>
          <!-- /SOCIAL LINK -->
          @else
          <!-- SOCIAL LINK -->
          <a class="social-link instagram" href="#">
            <!-- ICON FACEBOOK -->
            <svg class="icon-instagram">
              <use xlink:href="#svg-instagram"></use>
            </svg>
            <!-- /ICON FACEBOOK -->
          </a>
          <!-- /SOCIAL LINK -->
          @endif

        </div>

        <div class="profile-header-social-link">
          @if(Auth::user()->twitter != 'NOTE SET')
          <!-- SOCIAL LINK -->
          <a class="social-link twitter" href="{{Auth::user()->twitter}}" target="_blank">
            <!-- ICON FACEBOOK -->
            <svg class="icon-twitter">
              <use xlink:href="#svg-twitter"></use>
            </svg>
            <!-- /ICON FACEBOOK -->
          </a>
          <!-- /SOCIAL LINK -->
          @else
          <!-- SOCIAL LINK -->
          <a class="social-link twitter" href="#">
            <!-- ICON FACEBOOK -->
            <svg class="icon-twitter">
              <use xlink:href="#svg-twitter"></use>
            </svg>
            <!-- /ICON FACEBOOK -->
          </a>
          <!-- /SOCIAL LINK -->
          @endif

        </div>



        <div class="profile-header-social-link">
          <!-- SOCIAL LINK -->
          @if(Auth::user()->youtube != 'NOTE SET')
          <!-- SOCIAL LINK -->
          <a class="social-link youtube" href="{{Auth::user()->youtube}}" target="_blank">
            <!-- ICON FACEBOOK -->
            <svg class="icon-youtube">
              <use xlink:href="#svg-youtube"></use>
            </svg>
            <!-- /ICON FACEBOOK -->
          </a>
          <!-- /SOCIAL LINK -->
          @else
          <!-- SOCIAL LINK -->
          <a class="social-link youtube" href="#">
            <!-- ICON FACEBOOK -->
            <svg class="icon-youtube">
              <use xlink:href="#svg-youtube"></use>
            </svg>
            <!-- /ICON FACEBOOK -->
          </a>
          <!-- /SOCIAL LINK -->
          @endif

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
        <p class="user-stat-title">{{$user_posts}}</p>
        <!-- /USER STAT TITLE -->

        <!-- USER STAT TEXT -->
        <p class="user-stat-text">posts</p>
        <!-- /USER STAT TEXT -->
      </div>
      <!-- /USER STAT -->

      <!-- USER STAT -->
      <div class="user-stat big">
        <!-- USER STAT TITLE -->
        <p class="user-stat-title">82</p>
        <!-- /USER STAT TITLE -->

        <!-- USER STAT TEXT -->
        <p class="user-stat-text">friends</p>
        <!-- /USER STAT TEXT -->
      </div>
      <!-- /USER STAT -->

      <!-- USER STAT -->
      <div class="user-stat big">
        <!-- USER STAT TITLE -->
        <p class="user-stat-title">5.7k</p>
        <!-- /USER STAT TITLE -->

        <!-- USER STAT TEXT -->
        <p class="user-stat-text">visits</p>
        <!-- /USER STAT TEXT -->
      </div>
      <!-- /USER STAT -->

      <!-- USER STAT -->
      <div class="user-stat big">
        <!-- USER STAT IMAGE -->
        <img class="user-stat-image" src="/assets/img/flag/tanzania.png" alt="flag-tz">
        <!-- /USER STAT IMAGE -->

        <!-- USER STAT TEXT -->
        <p class="user-stat-text">TZ</p>
        <!-- /USER STAT TEXT -->
      </div>
      <!-- /USER STAT -->
    </div>
    <!-- /USER STATS -->

    @if(Auth::user()->id != $user->id)
    <!-- PROFILE HEADER INFO ACTIONS -->
    <div class="profile-header-info-actions">
      <!-- PROFILE HEADER INFO ACTION -->
      <p class="profile-header-info-action button secondary"><span class="hide-text-mobile">Add</span> Friend +</p>
      <!-- /PROFILE HEADER INFO ACTION -->

      <!-- PROFILE HEADER INFO ACTION -->
      <a href="/Kilimofy-Messenger" class="profile-header-info-action button primary"><span class="hide-text-mobile">Send</span> Message</a>
      <!-- /PROFILE HEADER INFO ACTION -->
    </div>
    @endif
    <!-- /PROFILE HEADER INFO ACTIONS -->
  </div>
  <!-- /PROFILE HEADER INFO -->
</div>
