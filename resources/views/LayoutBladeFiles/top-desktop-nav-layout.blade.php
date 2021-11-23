
  <!-- HEADER -->
  <header class="header">
    <!-- HEADER ACTIONS -->
    <div class="header-actions">
      <!-- HEADER BRAND -->
      <div class="header-brand">
        <!-- LOGO -->
        <div class="logo">
          <!-- ICON LOGO VIKINGER -->
          <img src="/assets/img/logo/logo.png" alt="" class="icon-logo-vikinger small">
          <!-- /ICON LOGO VIKINGER -->
        </div>
        <!-- /LOGO -->

        <!-- HEADER BRAND TEXT -->
        <h1 class="header-brand-text">Kilimofy</h1>
        <!-- /HEADER BRAND TEXT -->
      </div>
      <!-- /HEADER BRAND -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions">
      <!-- SIDEMENU TRIGGER -->
      <div class="sidemenu-trigger navigation-widget-trigger">
        <!-- ICON GRID -->
        <svg class="icon-grid">
          <use xlink:href="#svg-grid"></use>
        </svg>
        <!-- /ICON GRID -->
      </div>
      <!-- /SIDEMENU TRIGGER -->

      <!-- MOBILEMENU TRIGGER -->
      <div class="mobilemenu-trigger navigation-widget-mobile-trigger">
        <!-- BURGER ICON -->
        <div class="burger-icon inverted">
          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->

          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->

          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->
        </div>
        <!-- /BURGER ICON -->
      </div>
      <!-- /MOBILEMENU TRIGGER -->

      <!-- NAVIGATION -->
      <nav class="navigation">
        <!-- MENU MAIN -->
        <ul class="menu-main">
          <!-- MENU MAIN ITEM -->
          <li class="menu-main-item">
            <!-- MENU MAIN ITEM LINK -->
            <a class="menu-main-item-link" href="#">Home</a>
            <!-- /MENU MAIN ITEM LINK -->
          </li>
          <!-- /MENU MAIN ITEM -->

          <!-- MENU MAIN ITEM -->
          <li class="menu-main-item">
            <!-- MENU MAIN ITEM LINK -->
            <!-- <a class="menu-main-item-link" href="#">Careers</a> -->
            <!-- /MENU MAIN ITEM LINK -->
          </li>
          <!-- /MENU MAIN ITEM -->

          <!-- MENU MAIN ITEM -->
          <li class="menu-main-item">
            <!-- MENU MAIN ITEM LINK -->
            <!-- <a class="menu-main-item-link" href="#">Faqs</a> -->
            <!-- /MENU MAIN ITEM LINK -->
          </li>
          <!-- /MENU MAIN ITEM -->


        </ul>
        <!-- /MENU MAIN -->
      </nav>
      <!-- /NAVIGATION -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions search-bar">
      <!-- INTERACTIVE INPUT -->
      <div class="interactive-input dark">
        <input type="text" id="search-main" name="search_main" placeholder="Search here for people or groups">
        <!-- INTERACTIVE INPUT ICON WRAP -->
        <div class="interactive-input-icon-wrap">
          <!-- INTERACTIVE INPUT ICON -->
          <svg class="interactive-input-icon icon-magnifying-glass">
            <use xlink:href="#svg-magnifying-glass"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ICON WRAP -->

        <!-- INTERACTIVE INPUT ACTION -->
        <div class="interactive-input-action">
          <!-- INTERACTIVE INPUT ACTION ICON -->
          <svg class="interactive-input-action-icon icon-cross-thin">
            <use xlink:href="#svg-cross-thin"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ACTION ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ACTION -->
      </div>
      <!-- /INTERACTIVE INPUT -->


    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions">
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
        <div id="logged-user-level" class="progress-stat-bar"></div>
        <!-- /PROGRESS STAT BAR -->
      </div>
      <!-- /PROGRESS STAT -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions">

    @if(Auth::user()->user_ocupation == 'Mkulima')
    <!-- USER STATUS AVATAR -->
    <a href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->name}}">
      <div class="user-status-avatar" >
        <!-- USER AVATAR -->
        <div class="user-avatar small no-outline online" >
          <!-- USER AVATAR CONTENT -->
          <div class="user-avatar-content">
            <!-- HEXAGON -->
            <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{Auth::user()->avatar}}"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR CONTENT -->

          <!-- USER AVATAR PROGRESS -->
          <div class="user-avatar-progress">
            <!-- HEXAGON -->
            <div class="hexagon-progress-40-44"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR PROGRESS -->

          <!-- USER AVATAR PROGRESS BORDER -->
          <div class="user-avatar-progress-border">
            <!-- HEXAGON -->
            <div class="hexagon-border-40-44"></div>
            <!-- /HEXAGON -->
          </div>
          <!-- /USER AVATAR PROGRESS BORDER -->


        </div>
        <!-- /USER AVATAR -->
      </div>
    </a>
    <!-- /USER STATUS AVATAR -->
    @endif

      <!-- ACTION ITEM WRAP -->
      <div class="action-item-wrap">
        <!-- ACTION ITEM -->
        <div class="action-item dark header-settings-dropdown-trigger">
          <!-- ACTION ITEM ICON -->
          <svg class="action-item-icon icon-settings">
            <use xlink:href="#svg-settings"></use>
          </svg>
          <!-- /ACTION ITEM ICON -->
        </div>
        <!-- /ACTION ITEM -->

        <!-- DROPDOWN NAVIGATION -->
        <div class="dropdown-navigation header-settings-dropdown">
          <!-- DROPDOWN NAVIGATION HEADER -->
          <div class="dropdown-navigation-header">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->name}}-in-Kilimofy-Platform">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-border">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-40-44" data-src="/Uploads/avatars/{{Auth::user()->avatar}}"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->
              </a>
              <!-- /USER STATUS AVATAR -->
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><span class="bold">Hi {{Auth::user()->name}}!</span></p>
              <!-- /USER STATUS TITLE -->


            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /DROPDOWN NAVIGATION HEADER -->

          <!-- DROPDOWN NAVIGATION CATEGORY -->
          <p class="dropdown-navigation-category">Quick Settings</p>
          <!-- /DROPDOWN NAVIGATION CATEGORY -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link popup-review-trigger">
           <img src="/assets/img/user_icon/switch.png" alt="" style="width:24px; height:24px;">&nbsp; Switch Account
          </a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link popup-change-profile-trigger">
           <img src="/assets/img/user_icon/user.png" alt="">Change Profile
          </a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION CATEGORY -->
          <p class="dropdown-navigation-category">All Settings</p>
          <!-- /DROPDOWN NAVIGATION CATEGORY -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link " href="/kilimofy/UserAccount-Profile-Settings/{{Auth::user()->id}}">
           <img src="/assets/img/user_icon/settings.png" alt="" style="width:24px; height:24px;">&nbsp; General Settings
          </a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
        <!-- /DROPDOWN NAVIGATION -->
      </div>
      <!-- /ACTION ITEM WRAP -->
    </div>
    <!-- /HEADER ACTIONS -->
  </header>
  <!-- /HEADER -->

<!-- POPUP BOX -->
@include('LayoutBladeFiles.switch-account-form')
<!-- /POPUP BOX -->

<!-- POPUP BOX -->
@include('LayoutBladeFiles.change-profile-form')
<!-- /POPUP BOX -->
