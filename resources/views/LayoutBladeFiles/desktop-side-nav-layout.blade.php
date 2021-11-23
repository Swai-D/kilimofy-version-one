<!-- Check Auth -->
@if(Auth::user()->user_ocupation == 'Mkulima')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">

  <!-- MENU -->
  <ul class="menu small">
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-newsfeed')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/home-page" data-title="Habari">
        <img src="/assets/img/user_icon/news.png" alt="Habari" style="width:34; height:34;">
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
   <hr >
   <li class="menu-item @yield('menu-status-chat')" >
   <!-- MENU ITEM LINK -->
   <a class="menu-item-link " href="/kilimofy/Forum/Forum-Category-List"  data-title="Chat">
     <!-- MENU ITEM LINK ICON -->
   <img src="/assets/img/user_icon/chat.png" alt="" style="width:34; height:34;">
     <!-- /MENU ITEM LINK ICON -->
   </a>
   <!-- /MENU ITEM LINK -->
 </li>
 <!-- /MENU ITEM -->
 <hr >

   <!-- MENU ITEM -->
   <li class="menu-item @yield('menu-status-growth')">
     <!-- MENU ITEM LINK -->
     <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu" data-title="Pembejeo & Viwatilifu" style="width:44; height:44;">
       <img src="/assets/img/user_icon/growth.png" alt="pembejeo" style="width:34; height:34;">
     </a>
     <!-- /MENU ITEM LINK -->
   </li>
   <!-- /MENU ITEM -->

    <hr>

    <li class="menu-item @yield('menu-status-gardener')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Bwana-Shamba" data-title="Bwana Shamba">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/gardener.png" alt="" style="width:34; height:34;">
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <hr>


    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-shipping')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Usafirisaji/Usafiri" data-title="Usafirisaji">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/shipment.png" alt="" style="width:34; height:34;">
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <hr>
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-mashine')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Mashine-za-kilimo" data-title="Mashine za kilimo">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/tractor.png" alt="" style="width:34; height:34;">
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <hr><br>
    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-title="logout">
          <img src="/assets/img/user_icon/power-off.png" alt="logout" style="width:24; height:24;">
        </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  </ul>
  <!-- /MENU -->
</nav>


<!-- Check If Auth -->
@elseif(Auth::user()->user_ocupation == 'Muuzaji_Wa_pembejeo_Na_Viwatilifu')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- USER AVATAR -->
  <a class="user-avatar small no-outline online" href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-About-{{Auth::user()->name}}-in-Kilimofy-Platform">
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

  <!-- MENU -->
  <ul class="menu small">
    <hr>
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-newsfeed')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/home-page" data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/news.png" alt="" style="width:34; height:34;">
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <!-- /MENU ITEM -->
   <hr >
   <li class="menu-item @yield('menu-status-chat')" >
   <!-- MENU ITEM LINK -->
   <a class="menu-item-link " href="/kilimofy/Forum/Forum-Category-List"  data-title="Chat">
     <!-- MENU ITEM LINK ICON -->
   <img src="/assets/img/user_icon/chat.png" alt="" style="width:34; height:34;">
     <!-- /MENU ITEM LINK ICON -->
   </a>
   <!-- /MENU ITEM LINK -->
 </li>
 <!-- /MENU ITEM -->
 <hr >
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-store')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page/{{Auth::user()->id}}" data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/store.png" alt="" style="width:34; height:34;">
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <hr>
  <br><br>
    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <img src="/assets/img/user_icon/power-off.png" alt="logout" style="width:34; height:34;">
        </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  </ul>
  <!-- /MENU -->
</nav>


<!-- Check if Auth -->
@elseif(Auth::user()->user_ocupation == 'Bwana_Shamba')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- USER AVATAR -->
  <a class="user-avatar small no-outline online navigation-widget-mobile-trigger" >
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

  <!-- MENU -->
  <ul class="menu small">

        <!-- MENU ITEM -->
        <li class="menu-item @yield('menu-status-newsfeed')">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/home-page" data-title="Habari">
            <img src="/assets/img/user_icon/news.png" alt="Habari" style="width:34; height:34;">
          </a>
          <!-- /MENU ITEM LINK -->
        </li>
        <!-- /MENU ITEM -->
       <hr>

    <li class="menu-item @yield('menu-status-chat')">
    <!-- MENU ITEM LINK -->
    <a class="menu-item-link " href="/kilimofy/Forum/Forum-Category-List"  data-title="Chat">
      <!-- MENU ITEM LINK ICON -->
    <img src="/assets/img/user_icon/chat.png" alt="" style="width:34; height:34;">
      <!-- /MENU ITEM LINK ICON -->
    </a>
    <!-- /MENU ITEM LINK -->
  </li>
  <!-- /MENU ITEM -->
  <hr>
  <li class="menu-item @yield('menu-status-gardener')">
  <!-- MENU ITEM LINK -->
  <a class="menu-item-link " href="/kilimofy/Bwana-Shamba/home-page"  data-title="Bwana Shamba">
    <!-- MENU ITEM LINK ICON -->
  <img src="/assets/img/user_icon/gardener.png" alt="" style="width:34; height:34;">
    <!-- /MENU ITEM LINK ICON -->
  </a>
  <!-- /MENU ITEM LINK -->
</li>
<!-- /MENU ITEM -->

    <br><hr>
    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <img src="/assets/img/user_icon/power-off.png" alt="logout" style="width:34; height:34;">
        </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  </ul>
  <!-- /MENU -->
</nav>


<!-- Check Auth -->
@elseif(Auth::user()->user_ocupation == 'Watoaji_Huduma_Za_Usafiri')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">

  <!-- USER AVATAR -->
  <a class="user-avatar small no-outline online" href="profile-timeline.html">
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

  <!-- MENU -->
  <ul class="menu small">
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-newsfeed')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/home/index-page" data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-newsfeed">
          <use xlink:href="#svg-newsfeed"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-overview')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Items/items-index" data-title="Overview">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-overview">
          <use xlink:href="#svg-overview"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->


    <li class="menu-item @yield('menu-status-marketplace')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/MarketPlace/market-place-index" data-title="Marketplace">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-marketplace">
          <use xlink:href="#svg-marketplace"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

  </ul>
  <!-- /MENU -->
</nav>
<!-- Check Auth -->
@elseif(Auth::user()->user_ocupation == 'Muuzaji_wa_Mashine_Za_Kilimo')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- USER AVATAR -->
  <a class="user-avatar small no-outline online" href="profile-timeline.html">
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

  <!-- MENU -->
  <ul class="menu small">
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-newsfeed')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/home/index-page" data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-newsfeed">
          <use xlink:href="#svg-newsfeed"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-overview')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Items/items-index" data-title="Overview">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-overview">
          <use xlink:href="#svg-overview"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="overview.html" data-title="Overview"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-overview"> -->
          <!-- <use xlink:href="#svg-overview"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="groups.html" data-title="Groups"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-group"> -->
          <!-- <use xlink:href="#svg-group"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="members.html" data-title="Members"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-members"> -->
          <!-- <use xlink:href="#svg-members"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="badges.html" data-title="Badges"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-badges"> -->
          <!-- <use xlink:href="#svg-badges"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="quests.html" data-title="Quests"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-quests"> -->
          <!-- <use xlink:href="#svg-quests"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="streams.html" data-title="Streams"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-streams"> -->
          <!-- <use xlink:href="#svg-streams"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="events.html" data-title="Events"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-events"> -->
          <!-- <use xlink:href="#svg-events"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <!-- <li class="menu-item"> -->
      <!-- MENU ITEM LINK -->
      <!-- <a class="menu-item-link text-tooltip-tfr" href="forums.html" data-title="Forums"> -->
        <!-- MENU ITEM LINK ICON -->
        <!-- <svg class="menu-item-link-icon icon-forums"> -->
          <!-- <use xlink:href="#svg-forums"></use> -->
        <!-- </svg> -->
        <!-- /MENU ITEM LINK ICON -->
      <!-- </a> -->
      <!-- /MENU ITEM LINK -->
    <!-- </li> -->
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-marketplace')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/MarketPlace/market-place-index" data-title="Marketplace">
        <!-- MENU ITEM LINK ICON -->
        <svg class="menu-item-link-icon icon-marketplace">
          <use xlink:href="#svg-marketplace"></use>
        </svg>
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <!-- MENU ITEM -->
    <li class="menu-item">
      <!-- MENU ITEM LINK -->
      <button class="button secondary" data-title="logout">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="/assets/img/landing/power.png" alt="logout" ></a>
      </button>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
  </ul>
  <!-- /MENU -->
</nav>
@endif

<!-- POPUP BOX -->
@include('LayoutBladeFiles.change-profile-form')
<!-- /POPUP BOX -->
