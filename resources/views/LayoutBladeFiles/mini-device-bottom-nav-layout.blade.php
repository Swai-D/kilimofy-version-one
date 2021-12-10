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

@if(Auth::user()->user_ocupation == 'Mkulima')
<!-- BAR ACTIONS -->
<div class="bar-actions">
  <!-- ACTION LIST -->
  <div class="action-list dark">
    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-shopping-bag" @yield('mini-user-pembejeo-active')>
        <use xlink:href="#svg-shopping-bag"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Group/Group-Lists">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-group" @yield('mini-user-chat-menu')>
        <use xlink:href="#svg-group"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Group/Group-Lists">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-magnifying-glass" @yield('mini-user-chat-menu')>
        <use xlink:href="#svg-magnifying-glass"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/Kilimofy-Messenger">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-messages" @yield('mini-user-forum-active')>
        <use xlink:href="#svg-messages"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->



    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->name}}-of-kilimofy">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-profile" @yield('mini-user-profile-active')>
        <use xlink:href="#svg-profile"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

      </div>
      <!-- /ACTION LIST -->

</div>
<!-- /BAR ACTIONS -->
@elseif(Auth::user()->user_ocupation == 'Dereva')
<!-- BAR ACTIONS -->
<div class="bar-actions">
  <!-- ACTION LIST -->
  <div class="action-list dark">
    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/home-page">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-item" @yield('mini-user-fundi-active')>
        <use xlink:href="#svg-item"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Group/Group-Lists">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-group" @yield('mini-user-chat-menu')>
        <use xlink:href="#svg-group"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Group/Group-Lists">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-magnifying-glass" @yield('mini-user-chat-menu')>
        <use xlink:href="#svg-magnifying-glass"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->


    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/Kilimofy-Messenger">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-messages" @yield('mini-user-forum-active')>
        <use xlink:href="#svg-messages"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->



    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->name}}-of-kilimofy">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-profile" @yield('mini-user-profile-active')>
        <use xlink:href="#svg-profile"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

      </div>
      <!-- /ACTION LIST -->

</div>
<!-- /BAR ACTIONS -->
@elseif(Auth::user()->user_ocupation == 'Muuza_Pembejeo')
<!-- BAR ACTIONS -->
<div class="bar-actions">
  <!-- ACTION LIST -->
  <div class="action-list dark">
    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/home-page">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-item" @yield('mini-user-fundi-active')>
        <use xlink:href="#svg-item"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Group/Group-Lists">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-group" @yield('mini-user-chat-menu')>
        <use xlink:href="#svg-group"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Group/Group-Lists">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-magnifying-glass" @yield('mini-user-chat-menu')>
        <use xlink:href="#svg-magnifying-glass"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->


    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/Kilimofy-Messenger">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-messages" @yield('mini-user-forum-active')>
        <use xlink:href="#svg-messages"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->



    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->name}}-of-kilimofy">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-profile" @yield('mini-user-profile-active')>
        <use xlink:href="#svg-profile"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

      </div>
      <!-- /ACTION LIST -->

</div>
<!-- /BAR ACTIONS -->
@elseif(Auth::user()->user_ocupation == 'Bwana_Shamba')
<!-- BAR ACTIONS -->
<div class="bar-actions">
  <!-- ACTION LIST -->
  <div class="action-list dark">
    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/home-page">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-item" @yield('mini-user-fundi-active')>
        <use xlink:href="#svg-item"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Group/Group-Lists">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-group" @yield('mini-user-chat-menu')>
        <use xlink:href="#svg-group"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Group/Group-Lists">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-magnifying-glass" @yield('mini-user-chat-menu')>
        <use xlink:href="#svg-magnifying-glass"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->


    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/Kilimofy-Messenger">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-messages" @yield('mini-user-forum-active')>
        <use xlink:href="#svg-messages"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->



    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->name}}-of-kilimofy">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-profile" @yield('mini-user-profile-active')>
        <use xlink:href="#svg-profile"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

      </div>
      <!-- /ACTION LIST -->

</div>
<!-- /BAR ACTIONS -->
@elseif(Auth::user()->user_ocupation == 'Fundi')
<!-- BAR ACTIONS -->
<div class="bar-actions">
  <!-- ACTION LIST -->
  <div class="action-list dark">
    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/home-page">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-item" @yield('mini-user-fundi-active')>
        <use xlink:href="#svg-item"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Group/Group-Lists">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-group" @yield('mini-user-chat-menu')>
        <use xlink:href="#svg-group"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/Group/Group-Lists">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-magnifying-glass" @yield('mini-user-chat-menu')>
        <use xlink:href="#svg-magnifying-glass"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->


    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/Kilimofy-Messenger">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-messages" @yield('mini-user-forum-active')>
        <use xlink:href="#svg-messages"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->



    <!-- ACTION LIST ITEM -->
    <a class="action-list-item " href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->name}}-of-kilimofy">
      <!-- ACTION LIST ITEM ICON -->
      <svg class="action-list-item-icon icon-profile" @yield('mini-user-profile-active')>
        <use xlink:href="#svg-profile"></use>
      </svg>
      <!-- /ACTION LIST ITEM ICON -->
    </a>
    <!-- /ACTION LIST ITEM -->

      </div>
      <!-- /ACTION LIST -->

</div>
<!-- /BAR ACTIONS -->
@endif
</aside>
<!-- /FLOATY BAR -->

<!-- POPUP BOX -->
@include('LayoutBladeFiles.switch-account-form')
<!-- /POPUP BOX -->
