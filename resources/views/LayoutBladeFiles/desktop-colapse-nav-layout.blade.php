@auth
<nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>
  <!-- NAVIGATION WIDGET COVER -->
  <figure class="navigation-widget-cover liquid">
    <img src="/assets/img/cover/01.jpg" alt="cover-01">
  </figure>
  <!-- /NAVIGATION WIDGET COVER -->

  <!-- USER SHORT DESCRIPTION -->
  <div class="user-short-description">
    <!-- USER SHORT DESCRIPTION AVATAR -->
    <a class="user-short-description-avatar user-avatar medium" href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->name}}">
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
        <div class="hexagon-image-82-90" data-src="/Uploads/avatars/{{Auth::user()->avatar}}"></div>
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


    </a>
    <!-- /USER SHORT DESCRIPTION AVATAR -->

    <!-- USER SHORT DESCRIPTION TITLE -->
    <p class="user-short-description-title"><a href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->name}}">{{Auth::user()->name}}</a></p>
    <!-- /USER SHORT DESCRIPTION TITLE -->

    <!-- USER SHORT DESCRIPTION TEXT -->
    <p class="user-short-description-text"><a href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->name}}">www.kilimofy/{{Auth::user()->name}}.com</a></p>
    <!-- /USER SHORT DESCRIPTION TEXT -->
  </div>
  <!-- /USER SHORT DESCRIPTION -->



  <!-- USER STATS -->
  <div class="user-stats">
    <!-- USER STAT -->
    <div class="user-stat">
      <!-- USER STAT TITLE -->
      <p class="user-stat-title">930</p>
      <!-- /USER STAT TITLE -->

      <!-- USER STAT TEXT -->
      <p class="user-stat-text">posts</p>
      <!-- /USER STAT TEXT -->
    </div>
    <!-- /USER STAT -->

    <!-- USER STAT -->
    <div class="user-stat">
      <!-- USER STAT TITLE -->
      <p class="user-stat-title">82</p>
      <!-- /USER STAT TITLE -->

      <!-- USER STAT TEXT -->
      <p class="user-stat-text">friends</p>
      <!-- /USER STAT TEXT -->
    </div>
    <!-- /USER STAT -->

    <!-- USER STAT -->
    <div class="user-stat">
      <!-- USER STAT TITLE -->
      <p class="user-stat-title">5.7k</p>
      <!-- /USER STAT TITLE -->

      <!-- USER STAT TEXT -->
      <p class="user-stat-text">visits</p>
      <!-- /USER STAT TEXT -->
    </div>
    <!-- /USER STAT -->
  </div>
  <!-- /USER STATS -->


</nav>
@endauth

@guest
<nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>
  <!-- NAVIGATION WIDGET COVER -->
  <figure class="navigation-widget-cover liquid">
    <img src="/assets/img/cover/01.jpg" alt="cover-01">
  </figure>
  <!-- /NAVIGATION WIDGET COVER -->

  <!-- USER SHORT DESCRIPTION -->
  <div class="user-short-description">
    <!-- USER SHORT DESCRIPTION AVATAR -->
    <a class="user-short-description-avatar user-avatar medium" href="/home">
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
        <div class="hexagon-image-82-90" data-src="/assets/img/user_icon/user.png"></div>
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


    </a>
    <!-- /USER SHORT DESCRIPTION AVATAR -->

    <!-- USER SHORT DESCRIPTION TITLE -->
    <p class="user-short-description-title"><a href="/home">{Mgeni</a></p>
    <!-- /USER SHORT DESCRIPTION TITLE -->

    <!-- USER SHORT DESCRIPTION TEXT -->
    <p class="user-short-description-text"><a href="/home">www.kilimofy.com</a></p>
    <!-- /USER SHORT DESCRIPTION TEXT -->
  </div>
  <!-- /USER SHORT DESCRIPTION -->



  <!-- USER STATS -->
  <div class="user-stats">
    <!-- USER STAT -->
    <div class="user-stat">
      <!-- USER STAT TITLE -->
      <p class="user-stat-title">930</p>
      <!-- /USER STAT TITLE -->

      <!-- USER STAT TEXT -->
      <p class="user-stat-text">posts</p>
      <!-- /USER STAT TEXT -->
    </div>
    <!-- /USER STAT -->

    <!-- USER STAT -->
    <div class="user-stat">
      <!-- USER STAT TITLE -->
      <p class="user-stat-title">82</p>
      <!-- /USER STAT TITLE -->

      <!-- USER STAT TEXT -->
      <p class="user-stat-text">friends</p>
      <!-- /USER STAT TEXT -->
    </div>
    <!-- /USER STAT -->

    <!-- USER STAT -->
    <div class="user-stat">
      <!-- USER STAT TITLE -->
      <p class="user-stat-title">5.7k</p>
      <!-- /USER STAT TITLE -->

      <!-- USER STAT TEXT -->
      <p class="user-stat-text">visits</p>
      <!-- /USER STAT TEXT -->
    </div>
    <!-- /USER STAT -->
  </div>
  <!-- /USER STATS -->


</nav>
@endguest
