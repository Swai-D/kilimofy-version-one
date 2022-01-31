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
      <a class="user-avatar small no-outline" href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->user_name}}-in-Kilimofy-Platform">
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
      <p class="navigation-widget-info-title"><a href="/kilimofy/UserAccount/about_user_page/{{Auth::user()->id}}-about-{{Auth::user()->user_name}}-in-Kilimofy-Platform">{{Auth::user()->name}}</a></p>
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
        Pembejeo
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
    <li class="menu-item @yield('menu-status-shipment')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Usafirisaji/Usafiri">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/shipment.png" alt="" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        <!-- Badges -->
        Usafirishaji
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
     <!-- MENU ITEM -->
     <li class="menu-item @yield('menu-status-marketplace')">
       <!-- MENU ITEM LINK -->
       <a class="menu-item-link" href="/kilimofy/Market-place-index-page">
         <!-- MENU ITEM LINK ICON -->
         <img src="/assets/img/user_icon/market.png" alt="" style="width:44; height:44;">

         <!-- /MENU ITEM LINK ICON -->
         <!-- Quests -->
         Masoko
       </a>
       <!-- /MENU ITEM LINK -->
     </li>
     <!-- /MENU ITEM -->

     <br>
      <!-- MENU ITEM -->
      <li class="menu-item @yield('menu-status-tool-box')">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="/kilimofy/Mkulima/Fundi-Wa-Mashine-Shamba">
          <!-- MENU ITEM LINK ICON -->
          <img src="/assets/img/user_icon/tool-box.png" alt="" style="width:44; height:44;">

          <!-- /MENU ITEM LINK ICON -->
          <!-- Quests -->
          Fundi
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <!-- /MENU ITEM -->

      <br>
       <!-- MENU ITEM -->
       <li class="menu-item @yield('menu-status-education')">
         <!-- MENU ITEM LINK -->
         <a class="menu-item-link" href="/kilimofy/Mkulima/Mtaalam-Wa-Kilimo">
           <!-- MENU ITEM LINK ICON -->
           <img src="/assets/img/user_icon/education.png" alt="" style="width:44; height:44;">

           <!-- /MENU ITEM LINK ICON -->
           <!-- Quests -->
           Mtaalam wa Kilimo
         </a>
         <!-- /MENU ITEM LINK -->
       </li>
       <!-- /MENU ITEM -->

       <br>
        <!-- MENU ITEM -->
        <li class="menu-item @yield('menu-status-workers')">
          <!-- MENU ITEM LINK -->
          <a class="menu-item-link" href="/kilimofy/Mkulima/Vibarua">
            <!-- MENU ITEM LINK ICON -->
            <img src="/assets/img/user_icon/workers.png" alt="" style="width:44; height:44;">

            <!-- /MENU ITEM LINK ICON -->
            <!-- Quests -->
            Vibarua
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
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-gardener')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Afisa-Ugavi/home-page">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/gardener.png" alt="Dereva" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        Bwana Shamba
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
   <br>
    <!-- MENU ITEM -->
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
  @elseif(Auth::user()->user_ocupation == 'Muuza_Pembejeo')
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
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-store')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/shopkeeper.png" alt="Dereva" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        Muuza Pembejeo
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
   <br>
    <!-- MENU ITEM -->
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


  @elseif(Auth::user()->user_ocupation == 'Dereva')
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
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-driver')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/home-page">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/seatbelt.png" alt="Dereva" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        Dereva
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
   <br>
    <!-- MENU ITEM -->
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


  @elseif(Auth::user()->user_ocupation == 'Mashine_Za_Kilimo')
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
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-driver')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/home-page">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/tractors.png" alt="pembejeo" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        Mashine
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
   <br>
    <!-- MENU ITEM -->
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

  @elseif(Auth::user()->user_ocupation == 'Fundi')
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
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-mashine')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Fundi-Wa-Mashine-Za-Kilimo/home-page">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/tool-box.png" alt="Fundi" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        Fundi
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
   <br>
    <!-- MENU ITEM -->
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

  @elseif(Auth::user()->user_ocupation == 'Mtaalam')
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
    <!-- MENU ITEM -->
    <li class="menu-item @yield('menu-status-education')">
      <!-- MENU ITEM LINK -->
      <a class="menu-item-link" href="/kilimofy/Mtaalam-Wa-Kilimo/home-page">
        <!-- MENU ITEM LINK ICON -->
        <img src="/assets/img/user_icon/education.png" alt="Fundi" style="width:44; height:44;">
        <!-- /MENU ITEM LINK ICON -->
        Mtaalam wa Kilimo
      </a>
      <!-- /MENU ITEM LINK -->
    </li>
    <!-- /MENU ITEM -->
   <br>
    <!-- MENU ITEM -->
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


</nav>

<!-- POPUP BOX -->
@include('LayoutBladeFiles.switch-account-form')
<!-- /POPUP BOX -->
