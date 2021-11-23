<!-- FLOATY BAR -->
<aside class="floaty-bar">
  <!-- BAR ACTIONS -->
  <div class="bar-actions">
    <!-- PROGRESS STAT -->
    <div class="progress-stat">
      <!-- BAR PROGRESS WRAP -->
      <div class="bar-progress-wrap">
        <!-- BAR PROGRESS INFO -->
        <p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>
        <!-- /BAR PROGRESS INFO -->
      </div>
      <!-- /BAR PROGRESS WRAP -->

      <!-- PROGRESS STAT BAR -->
      <div id="logged-user-level-cp" class="progress-stat-bar"></div>
      <!-- /PROGRESS STAT BAR -->
    </div>
    <!-- /PROGRESS STAT -->
  </div>
  <!-- /BAR ACTIONS -->

  <!-- BAR ACTIONS -->
  <div class="bar-actions">
    <!-- ACTION LIST -->
    <div class="action-list dark">
      <!-- ACTION LIST ITEM -->
      <a class="action-list-item @yield('mini-user-shop-active')" href="/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu">
        <!-- ACTION LIST ITEM ICON -->
        <svg class="action-list-item-icon icon-shopping-bag">
          <use xlink:href="#svg-shopping-bag"></use>
        </svg>
        <!-- /ACTION LIST ITEM ICON -->
      </a>
      <!-- /ACTION LIST ITEM -->

      <!-- ACTION LIST ITEM -->
      <a class="action-list-item @yield('mini-user-chat-menu')" href="/kilimofy/Group/Group-Lists">
        <!-- ACTION LIST ITEM ICON -->
        <svg class="action-list-item-icon icon-group">
          <use xlink:href="#svg-group"></use>
        </svg>
        <!-- /ACTION LIST ITEM ICON -->
      </a>
      <!-- /ACTION LIST ITEM -->

      <!-- ACTION LIST ITEM -->
      <a class="action-list-item @yield('mini-user-forum-active')" href="/kilimofy/Forum/Forum-Category-List">
        <!-- ACTION LIST ITEM ICON -->
        <svg class="action-list-item-icon icon-messages">
          <use xlink:href="#svg-messages"></use>
        </svg>
        <!-- /ACTION LIST ITEM ICON -->
      </a>
      <!-- /ACTION LIST ITEM -->

      <!-- ACTION LIST ITEM -->
      <a class="action-list-item @yield('mini-user-settings-active')" href="/kilimofy/UserAccount-General-Settings/{{Auth::user()->id}}">
        <!-- ACTION LIST ITEM ICON -->
        <svg class="action-list-item-icon icon-settings">
          <use xlink:href="#svg-settings"></use>
        </svg>
        <!-- /ACTION LIST ITEM ICON -->
      </a>
      <!-- /ACTION LIST ITEM -->

      <!-- ACTION LIST ITEM -->
      <a class="action-list-item @yield('mini-user-profile-active')" href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->name}}-of-kilimofy">
        <!-- ACTION LIST ITEM ICON -->
        <svg class="action-list-item-icon icon-profile">
          <use xlink:href="#svg-profile"></use>
        </svg>
        <!-- /ACTION LIST ITEM ICON -->
      </a>
      <!-- /ACTION LIST ITEM -->

        </div>
        <!-- /ACTION LIST -->

  </div>
  <!-- /BAR ACTIONS -->
</aside>
<!-- /FLOATY BAR -->

<!-- POPUP BOX -->
@include('LayoutBladeFiles.switch-account-form')
<!-- /POPUP BOX -->
