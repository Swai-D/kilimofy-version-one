<nav class="section-navigation">
  <!-- SECTION MENU -->
  <div id="section-navigation-slider" class="section-menu">
    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('about-menu-active')" href="/kilimofy/UserAccount/about_user_page/{{$user->id}}-About-{{$user->name}}-in-Kilimofy-Platform">
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
    <a class="section-menu-item @yield('timeline-menu-active')" href="/kilimofy/UserAccount/user_timeline_page/{{$user->id}}-{{$user->name}}'s-Timeline-in-Kilimofy-Platform">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-timeline">
        <use xlink:href="#svg-timeline"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Timeline</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('friends-menu-active')" href="/kilimofy/UserAccount/user_friends_page/{{$user->id}}-{{$user->name}}'s-Friends-in-Kilimofy-Platform">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-friend">
        <use xlink:href="#svg-friend"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Friends</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('group-menu-active')" href="/kilimofy/UserAccount/user_groups_page/{{$user->id}}-{{$user->name}}'s-Groups-in-Kilimofy-Platform">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-group">
        <use xlink:href="#svg-group"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Groups</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('photos-menu-active')" href="/kilimofy/UserAccount/user_photos_page/{{$user->id}}-{{$user->name}}'s-Photos-in-Kilimofy-Platform">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-photos">
        <use xlink:href="#svg-photos"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Photos</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('videos-menu-active')" href="/kilimofy/UserAccount/user_videos_page/{{$user->id}}-{{$user->name}}'s-Videos-in-Kilimofy-Platform">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-videos">
        <use xlink:href="#svg-videos"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Videos</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->


    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('blog-menu-active')" href="/kilimofy/UserAccount/user_blog_page/{{$user->id}}-{{$user->name}}'s-Blog-in-Kilimofy-Platform">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-blog-posts">
        <use xlink:href="#svg-blog-posts"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Blog</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('forum-menu-active')" href="/kilimofy/UserAccount/user_forum_page/{{$user->id}}-{{$user->name}}'s-Forum-in-Kilimofy-Platform">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-forum">
        <use xlink:href="#svg-forum"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Forum</p>
      <!-- /SECTION MENU ITEM TEXT -->
    </a>
    <!-- /SECTION MENU ITEM -->

    <!-- SECTION MENU ITEM -->
    <a class="section-menu-item @yield('store-menu-active')" href="/kilimofy/UserAccount/user_store_page/{{$user->id}}-{{$user->name}}'s-Store-in-Kilimofy-Platform">
      <!-- SECTION MENU ITEM ICON -->
      <svg class="section-menu-item-icon icon-store">
        <use xlink:href="#svg-store"></use>
      </svg>
      <!-- /SECTION MENU ITEM ICON -->

      <!-- SECTION MENU ITEM TEXT -->
      <p class="section-menu-item-text">Store</p>
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
