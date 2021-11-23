<nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden" data-simplebar>
  <!-- NAVIGATION WIDGET CLOSE BUTTON -->
  <div class="navigation-widget-close-button">
    <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
    <svg class="navigation-widget-close-button-icon icon-back-arrow">
      <use xlink:href="#svg-back-arrow"></use>
    </svg>
    <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
  </div>
  <!-- /NAVIGATION WIDGET CLOSE BUTTON -->

  <!-- NAVIGATION WIDGET INFO WRAP -->
  <div class="navigation-widget-info-wrap">
    <!-- NAVIGATION WIDGET INFO -->
    <div class="navigation-widget-info">
      <!-- USER AVATAR -->
      <a class="user-avatar small no-outline" href="/kilimofy/UserAccount/about_user_page">
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


      </a>
      <!-- /USER AVATAR -->

      <!-- NAVIGATION WIDGET INFO TITLE -->
      <p class="navigation-widget-info-title"><a href="/kilimofy/UserAccount/about_user_page">{{Auth::user()->name}}</a></p>
      <!-- /NAVIGATION WIDGET INFO TITLE -->

      <!-- NAVIGATION WIDGET INFO TEXT -->
      <p class="navigation-widget-info-text">Karibu!</p>
      <!-- /NAVIGATION WIDGET INFO TEXT -->
    </div>
    <!-- /NAVIGATION WIDGET INFO -->

    <!-- NAVIGATION WIDGET BUTTON -->

    <!-- /NAVIGATION WIDGET BUTTON -->
  </div>
  <!-- /NAVIGATION WIDGET INFO WRAP -->

  <!-- NAVIGATION WIDGET SECTION TITLE -->
  <p class="navigation-widget-section-title">Sections</p>
  <!-- /NAVIGATION WIDGET SECTION TITLE -->

  <!-- MENU -->
  @if(Auth::user()->user_ocupation == 'Mkulima')
  <ul class="menu">
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-newsfeed')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Mkulima/home-page">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/news.png" alt="Habari" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        Habari
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <br>

    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-chat')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Forum/Forum-Category-List">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/chat.png" alt="pembejeo" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        Chat
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
   <br>
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-growth')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/growth.png" alt="pembejeo" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        Pembejeo & Viwatilifu
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

  <br>
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-gardener')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Mkulima/Bwana-Shamba">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/gardener.png" alt="Bwana_Shamba" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        <!-- Members -->
        Bwana Shamba
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  <br>
    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Usafirisaji/Usafiri">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/shipment.png" alt="" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        <!-- Badges -->
        Usafirisaji
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
   <br>
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-mashine')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Mkulima/Mashine-za-kilimo">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/tractor.png" alt="" style="width:44; height:44;">

        <!-- /MENU ITEM LINK ICON -->
        <!-- Quests -->
        Mashine za Kilimo
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <br>
    <br>
    <p class="navigation-widget-section-title">logout</p>
    <hr>

    <!-- MENU ITEM -->

    <li class="menu-item">
      <div class="row">
        <div class="col-9">
          <!-- MENU ITEM LINK -->
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <img src="/assets/img/user_icon/power-off.png" alt="logout" style="width:44; height:44;">
            </a>


          <!-- /MENU ITEM LINK -->
        </div>

        <div class="col-3">
          <a class="popup-review-trigger">
           <img src="/assets/img/user_icon/exchange.png" alt="" style="width:44; height:44;">
          </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
      </div>
    </li>
    <!-- /MENU ITEM -->
  </ul>
  @elseif(Auth::user()->user_ocupation == 'Muuzaji_Wa_pembejeo_Na_Viwatilifu')
  <ul class="menu">
    <!-- <br> -->
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-store')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/store.png" alt="pembejeo" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        Dukani
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <br>
    <br>
    <p class="navigation-widget-section-title">logout</p>
    <hr>

    <!-- MENU ITEM -->

    <li class="menu-item">
      <div class="row">
        <div class="col-9">
          <!-- MENU ITEM LINK -->
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <img src="/assets/img/user_icon/power-off.png" alt="logout" style="width:44; height:44;">
            </a>


          <!-- /MENU ITEM LINK -->
        </div>

        <div class="col-3">
          <a class="popup-review-trigger">
           <img src="/assets/img/user_icon/exchange.png" alt="" style="width:44; height:44;">
          </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
      </div>
    </li>
    <!-- /MENU ITEM -->
  </ul>

  @elseif(Auth::user()->user_ocupation == 'Bwana_Shamba')
  <ul class="menu">
    <!-- <br> -->
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-gardener')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/gardener.png" alt="pembejeo" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        Bwana Shamba
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <br>
    <br>
    <p class="navigation-widget-section-title">logout</p>
    <hr>

    <!-- MENU ITEM -->

    <li class="menu-item">
      <div class="row">
        <div class="col-9">
          <!-- MENU ITEM LINK -->
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <img src="/assets/img/user_icon/power-off.png" alt="logout" style="width:44; height:44;">
            </a>


          <!-- /MENU ITEM LINK -->
        </div>

        <div class="col-3">
          <a class="popup-review-trigger">
           <img src="/assets/img/user_icon/exchange.png" alt="" style="width:44; height:44;">
          </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
      </div>
    </li>
    <!-- /MENU ITEM -->
  </ul>
  @endif
  <!-- /MENU -->

  <!-- NAVIGATION WIDGET SECTION TITLE -->
  <!-- <p class="navigation-widget-section-title">My Profile</p> -->
  <!-- /NAVIGATION WIDGET SECTION TITLE -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-profile-info.html">Profile Info</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-profile-social.html">Social &amp; Stream</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-profile-notifications.html">Notifications</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-profile-messages.html">Messages</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-profile-requests.html">Friend Requests</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION TITLE -->
  <!-- <p class="navigation-widget-section-title">Account</p> -->
  <!-- /NAVIGATION WIDGET SECTION TITLE -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-account-info.html">Account Info</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-account-password.html">Change Password</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-account-settings.html">General Settings</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION TITLE -->
  <!-- <p class="navigation-widget-section-title">Groups</p> -->
  <!-- /NAVIGATION WIDGET SECTION TITLE -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-group-management.html">Manage Groups</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-group-invitations.html">Invitations</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION TITLE -->
  <!-- <p class="navigation-widget-section-title">My Store</p> -->
  <!-- /NAVIGATION WIDGET SECTION TITLE -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-store-account.html">My Account <span class="highlighted">$250,32</span></a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-store-statement.html">Sales Statement</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-store-items.html">Manage Items</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="hub-store-downloads.html">Downloads</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION TITLE -->
  <!-- <p class="navigation-widget-section-title">Main Links</p> -->
  <!-- /NAVIGATION WIDGET SECTION TITLE -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="#">Home</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="#">Careers</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="#">Faqs</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="#">About Us</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="#">Our Blog</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="#">Contact Us</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->

  <!-- NAVIGATION WIDGET SECTION LINK -->
  <!-- <a class="navigation-widget-section-link" href="#">Privacy Policy</a> -->
  <!-- /NAVIGATION WIDGET SECTION LINK -->
</nav>

<!-- POPUP BOX -->
@include('LayoutBladeFiles.switch-account-form')
<!-- /POPUP BOX -->
