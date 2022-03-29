<!-- Check Auth -->
@auth

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
    <li class="menu-item @yield('menu-status-shipment')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Usafirisaji/Usafiri" data-title="Usafirishaji">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/shipment.png" alt="" style="width:34; height:34;">
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <hr>
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-marketplace')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Market-place-index-page" data-title="Masoko">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/market.png" alt="" style="width:34; height:34;">
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

    <hr>
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-tool-box')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Fundi-Wa-Mashine-Shamba" data-title="Fundi">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/tool-box.png" alt="" style="width:34; height:34;">
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <!-- MENU ITEM -->

    <hr>

    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-education')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Mtaalam-Wa-Kilimo" data-title="Mtaalam wa kilimo">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/education.png" alt="" style="width:34; height:34;">
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <!-- MENU ITEM -->


    <hr>

    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-workers')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Vibarua" data-title="Vibarua">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/workers.png" alt="" style="width:34; height:34;">
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <!-- MENU ITEM -->


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
@elseif(Auth::user()->user_ocupation == 'Muuza_Pembejeo')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- USER AVATAR -->
  <a class="user-avatar small no-outline online" href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-About-{{Auth::user()->name}}-in-Kilimofy-Platform">
    <!-- USER AVATAR CONTENT -->
    <div class="user-avatar-content">
      <!-- HEXAGON -->
      <div class="hexagon-image-30-32" data-src="{{Auth::user()->avatar}}"></div>
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
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page" data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/shopkeeper.png" alt="" style="width:34; height:34;">
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
  <a class="user-avatar small no-outline online" href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-About-{{Auth::user()->name}}-in-Kilimofy-Platform">
    <!-- USER AVATAR CONTENT -->
    <div class="user-avatar-content">
      <!-- HEXAGON -->
      <div class="hexagon-image-30-32" data-src="{{Auth::user()->avatar}}"></div>
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
    <li class="menu-item @yield('menu-status-gardener')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Afisa-Ugavi/home-page" data-title="Bwana_Shamba">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/gardener.png" alt="" style="width:34; height:34;">
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


<!-- Check Auth -->
@elseif(Auth::user()->user_ocupation == 'Dereva')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- USER AVATAR -->
  <a class="user-avatar small no-outline online" href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-About-{{Auth::user()->name}}-in-Kilimofy-Platform">
    <!-- USER AVATAR CONTENT -->
    <div class="user-avatar-content">
      <!-- HEXAGON -->
      <div class="hexagon-image-30-32" data-src="{{Auth::user()->avatar}}"></div>
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
    <li class="menu-item @yield('menu-status-driver')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/home-page" data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/seatbelt.png" alt="" style="width:34; height:34;">
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


<!-- Check Auth -->
@elseif(Auth::user()->user_ocupation == 'Fundi')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- USER AVATAR -->
  <a class="user-avatar small no-outline online" href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-About-{{Auth::user()->name}}-in-Kilimofy-Platform">
    <!-- USER AVATAR CONTENT -->
    <div class="user-avatar-content">
      <!-- HEXAGON -->
      <div class="hexagon-image-30-32" data-src="{{Auth::user()->avatar}}"></div>
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
    <li class="menu-item @yield('menu-status-mashine')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Fundi-Wa-Mashine-Za-Kilimo/home-page" data-title="Newsfeed">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/tool-box.png" alt="" style="width:34; height:34;">
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


@elseif(Auth::user()->user_ocupation == 'Mashine_Za_Kilimo')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- USER AVATAR -->
  <a class="user-avatar small no-outline online" href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-About-{{Auth::user()->name}}-in-Kilimofy-Platform">
    <!-- USER AVATAR CONTENT -->
    <div class="user-avatar-content">
      <!-- HEXAGON -->
      <div class="hexagon-image-30-32" data-src="{{Auth::user()->avatar}}"></div>
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
    <li class="menu-item @yield('menu-status-mashine')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/home-page" data-title="Mashine">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/tractors.png" alt="" style="width:34; height:34;">
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

@elseif(Auth::user()->user_ocupation == 'Mtaalam')
<nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">
  <!-- USER AVATAR -->
  <a class="user-avatar small no-outline online" href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-About-{{Auth::user()->name}}-in-Kilimofy-Platform">
    <!-- USER AVATAR CONTENT -->
    <div class="user-avatar-content">
      <!-- HEXAGON -->
      <div class="hexagon-image-30-32" data-src="{{Auth::user()->avatar}}"></div>
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
    <li class="menu-item @yield('menu-status-education')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mtaalam-Wa-Kilimo/home-page" data-title="Mtaalam wa Kilimo">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/education.png" alt="" style="width:34; height:34;">
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
@endif

<!-- POPUP BOX -->
@include('LayoutBladeFiles.change-profile-form')
<!-- /POPUP BOX -->
@endauth

@guest
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
    <li class="menu-item @yield('menu-status-shipment')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Usafirisaji/Usafiri" data-title="Usafirishaji">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/shipment.png" alt="" style="width:34; height:34;">
        <!-- /MENU ITEM LINK ICON -->
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->

    <hr>
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-marketplace')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Market-place-index-page" data-title="Masoko">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/market.png" alt="" style="width:34; height:34;">
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

    <hr>
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-tool-box')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Fundi-Wa-Mashine-Shamba" data-title="Fundi">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/tool-box.png" alt="" style="width:34; height:34;">
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <!-- MENU ITEM -->

    <hr>

    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-education')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Mtaalam-Wa-Kilimo" data-title="Mtaalam wa kilimo">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/education.png" alt="" style="width:34; height:34;">
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <!-- MENU ITEM -->


    <hr>

    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-workers')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link text-tooltip-tfr" href="/kilimofy/Mkulima/Vibarua" data-title="Vibarua">
        <!-- MENU ITEM LINK ICON -->
      <img src="/assets/img/user_icon/workers.png" alt="" style="width:34; height:34;">
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
    <!-- MENU ITEM -->


    </ul>
  <!-- /MENU -->
</nav>

<!-- POPUP BOX -->
@include('LayoutBladeFiles.change-profile-form')
<!-- /POPUP BOX -->
@endguest
