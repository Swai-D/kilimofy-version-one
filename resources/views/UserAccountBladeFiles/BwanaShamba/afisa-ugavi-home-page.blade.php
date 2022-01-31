@extends('LayoutBladeFiles.app-layout')

@section('meta-token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('fullcalendar-header-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js" ></script>
@endsection

@section('title','Afisa Ugavi (Bwana Shamba)')
@section('menu-status-gardener','active')

@section('discription-title')
 Akaunti ya {{Auth::user()->name}}
@endsection

@section('discription-details','kilimofy')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION BANNER -->
  @include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

  <!-- GRID -->
  <div class="grid grid-3-9 medium-space">
    <!-- GRID COLUMN -->
    <div class="account-hub-sidebar">
      <!-- SIDEBAR BOX -->
      <div class="sidebar-box no-padding">
        <!-- SIDEBAR MENU -->
        <div class="sidebar-menu round-borders">

          <!-- SIDEBAR MENU ITEM -->
          <div class="sidebar-menu-item">
            <!-- SIDEBAR MENU HEADER -->
            <div class="sidebar-menu-header accordion-trigger-linked">
              <!-- SIDEBAR MENU HEADER ICON -->
              <svg class="sidebar-menu-header-icon icon-store">
                <use xlink:href="#svg-store"></use>
              </svg>
              <!-- /SIDEBAR MENU HEADER ICON -->

              <!-- SIDEBAR MENU HEADER CONTROL ICON -->
              <div class="sidebar-menu-header-control-icon">
                <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                  <use xlink:href="#svg-minus-small"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                  <use xlink:href="#svg-plus-small"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
              </div>
              <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

              <!-- SIDEBAR MENU HEADER TITLE -->
              <p class="sidebar-menu-header-title">My Store</p>
              <!-- /SIDEBAR MENU HEADER TITLE -->

              <!-- SIDEBAR MENU HEADER TEXT -->
              <p class="sidebar-menu-header-text">Review your account, manage products check stats and much more!</p>
              <!-- /SIDEBAR MENU HEADER TEXT -->
            </div>
            <!-- /SIDEBAR MENU HEADER -->

            <!-- SIDEBAR MENU BODY -->
            <div class="sidebar-menu-body accordion-content-linked accordion-open">
              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-store-account.html">My Account</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link active" href="/kilimofy/Afisa-Ugavi/home-page">Bwana Shamba </a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <!-- <a class="sidebar-menu-link active" href="hub-store-items.html">Bidhaa Sokoni</a> -->
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <!-- <a class="sidebar-menu-link" href="hub-store-downloads.html">Downloads</a> -->
              <!-- /SIDEBAR MENU LINK -->
            </div>
            <!-- /SIDEBAR MENU BODY -->
          </div>
          <!-- /SIDEBAR MENU ITEM -->
        </div>
        <!-- /SIDEBAR MENU -->
      </div>
      <!-- /SIDEBAR BOX -->
    </div>
    <!-- /GRID COLUMN -->

    <!-- GRID COLUMN -->
    <div class="account-hub-content">

      <!-- GRID COLUMN -->
      <div class="account-hub-content">
        <!-- SECTION HEADER -->
        <div class="section-header">
          <!-- SECTION HEADER INFO -->
          <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle">Magrupu (Makundi)</p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            <h2 class="section-title">Unda Grupu (Kundi)</h2>
            <!-- /SECTION TITLE -->
          </div>
          <!-- /SECTION HEADER INFO -->
        </div>
        <!-- /SECTION HEADER -->

        <!-- GRID -->
        <div class="grid grid-3-3-3 centered-on-mobile">
          <!-- CREATE ENTITY BOX -->
          <div class="create-entity-box">
            <!-- CREATE ENTITY BOX COVER -->
            <div class="create-entity-box-cover"></div>
            <!-- /CREATE ENTITY BOX COVER -->

            <!-- CREATE ENTITY BOX AVATAR -->
            <div class="create-entity-box-avatar">
              <!-- CREATE ENTITY BOX AVATAR ICON -->
              <svg class="create-entity-box-avatar-icon icon-group">
                <use xlink:href="#svg-group"></use>
              </svg>
              <!-- /CREATE ENTITY BOX AVATAR ICON -->
            </div>
            <!-- /CREATE ENTITY BOX AVATAR -->

            <!-- CREATE ENTITY BOX INFO -->
            <div class="create-entity-box-info">
              <!-- CREATE ENTITY BOX TITLE -->
              <p class="create-entity-box-title">New Grupu </p>
              <!-- /CREATE ENTITY BOX TITLE -->

              <!-- CREATE ENTITY BOX TEXT -->
              <p class="create-entity-box-text">Share your Passion with others!</p>
              <!-- /CREATE ENTITY BOX TEXT -->

              <!-- BUTTON -->
              <p class="button secondary full popup-make-trip-trigger">+Grupu</p>
              <!-- /BUTTON -->
            </div>
            <!-- /CREATE ENTITY BOX INFO -->
          </div>
          <!-- /CREATE ENTITY BOX -->

          @forelse($user_groups as $group)
          <!-- USER PREVIEW -->
          <div class="user-preview small fixed-height-medium">
            <!-- USER PREVIEW COVER -->
            <figure class="user-preview-cover liquid">
              <img src="/Uploads/GroupProfile/{{$group->Group_Image}}" alt="cover-29">
            </figure>
            <!-- /USER PREVIEW COVER -->

            <!-- USER PREVIEW INFO -->
            <div class="user-preview-info">
              <!-- USER SHORT DESCRIPTION -->
              <div class="user-short-description small">
                <!-- USER SHORT DESCRIPTION AVATAR -->
                <a class="user-short-description-avatar user-avatar no-stats" href="">
                  <!-- USER AVATAR BORDER -->
                  <div class="user-avatar-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-100-108"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BORDER -->

                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-84-92" data-src="/Uploads/GroupProfile/{{$group->Group_Image}}"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </a>
                <!-- /USER SHORT DESCRIPTION AVATAR -->

                <!-- USER SHORT DESCRIPTION TITLE -->
                <p class="user-short-description-title small"><a href="">{{$group->Group_Name}}</a></p>
                <!-- /USER SHORT DESCRIPTION TITLE -->

                <!-- USER SHORT DESCRIPTION TEXT -->
                <p class="user-short-description-text regular">{{$group->Tagline}}</p>
                <!-- /USER SHORT DESCRIPTION TEXT -->
              </div>
              <!-- /USER SHORT DESCRIPTION -->

             <div class="user-preview-actions">
               <!-- BUTTON -->
               <a href="/kilimofy/Group/Edit-Group/{{$group->id}}"  class="button secondary full ">+Edit</a>

               <a href="/kilimofy/Group/Delete-Group/{{$group->id}}" class="button  full " style="background-color:red;">Delete</a>
               <!-- /BUTTON -->

             </div>
            </div>
            <!-- /USER PREVIEW INFO -->
          </div>
          <!-- /USER PREVIEW -->
          @empty
            <p class="text-danger"> Hakuna Kundi (Grupu) Ulilo unda kwa sasa !</p>
          @endforelse
        </div>
        <!-- /GRID -->
      </div>
      <!-- /GRID COLUMN -->

      </div>
    <!-- /GRID COLUMN -->

  </div>
  <!-- /GRID -->


  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Get a quick look!</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Events Calendar</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar v6">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FORM -->
      <form class="form">
        <!-- FORM ITEM -->
        <div class="form-item split">
          <!-- FORM INPUT -->
          <div class="form-input small">
            <label for="events-search">Search Events</label>
            <input type="text" id="events-search" name="events_search">
          </div>
          <!-- /FORM INPUT -->

          <!-- BUTTON -->
          <button class="button primary">
            <!-- ICON MAGNIFYING GLASS -->
            <svg class="icon-magnifying-glass">
              <use xlink:href="#svg-magnifying-glass"></use>
            </svg>
            <!-- /ICON MAGNIFYING GLASS -->
          </button>
          <!-- /BUTTON -->
        </div>
        <!-- /FORM ITEM -->
      </form>
      <!-- /FORM -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- BUTTON -->
      <p class="button secondary popup-event-creation-trigger">+ Add New Event</p>
      <!-- /BUTTON -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->

  <!-- CALENDAR WIDGET -->
  <div class="calendar-widget">
    <!-- CALENDAR WIDGET HEADER -->
    <div class="calendar-widget-header">
      <!-- CALENDAR WIDGET HEADER ACTIONS -->
      <div class="calendar-widget-header-actions">
        <!-- SLIDER CONTROLS -->
        <div class="slider-controls">
          <!-- SLIDER CONTROL -->
          <div class="slider-control left">
            <!-- SLIDER CONTROL ICON -->
            <svg class="slider-control-icon icon-big-arrow">
              <use xlink:href="#svg-big-arrow"></use>
            </svg>
            <!-- /SLIDER CONTROL ICON -->
          </div>
          <!-- /SLIDER CONTROL -->

          <!-- SLIDER CONTROL -->
          <div class="slider-control right">
            <!-- SLIDER CONTROL ICON -->
            <svg class="slider-control-icon icon-big-arrow">
              <use xlink:href="#svg-big-arrow"></use>
            </svg>
            <!-- /SLIDER CONTROL ICON -->
          </div>
          <!-- /SLIDER CONTROL -->
        </div>
        <!-- /SLIDER CONTROLS -->

        <!-- CALENDAR WIDGET TITLE -->
        <p class="calendar-widget-title">August 2019</p>
        <!-- /CALENDAR WIDGET TITLE -->
      </div>
      <!-- /CALENDAR WIDGET HEADER ACTIONS -->

      <!-- CALENDAR WIDGET HEADER ACTIONS -->
      <div class="calendar-widget-header-actions">
        <!-- VIEW ACTIONS -->
        <div class="view-actions">
          <!-- VIEW ACTION -->
          <a class="view-action text-tooltip-tft-medium active" href="events.html" data-title="Monthly">
            <!-- VIEW ACTION ICON -->
            <svg class="view-action-icon icon-events-monthly">
              <use xlink:href="#svg-events-monthly"></use>
            </svg>
            <!-- /VIEW ACTION ICON -->
          </a>
          <!-- /VIEW ACTION -->

          <!-- VIEW ACTION -->
          <a class="view-action text-tooltip-tft-medium" href="" data-title="Weekly">
            <!-- VIEW ACTION ICON -->
            <svg class="view-action-icon icon-events-weekly">
              <use xlink:href="#svg-events-weekly"></use>
            </svg>
            <!-- /VIEW ACTION ICON -->
          </a>
          <!-- /VIEW ACTION -->

          <!-- VIEW ACTION -->
          <a class="view-action text-tooltip-tft-medium" href="" data-title="Daily">
            <!-- VIEW ACTION ICON -->
            <svg class="view-action-icon icon-events-daily">
              <use xlink:href="#svg-events-daily"></use>
            </svg>
            <!-- /VIEW ACTION ICON -->
          </a>
          <!-- /VIEW ACTION -->
        </div>
        <!-- /VIEW ACTIONS -->
      </div>
      <!-- /CALENDAR WIDGET HEADER ACTIONS -->
    </div>
    <!-- /CALENDAR WIDGET HEADER -->

    <!-- CALENDAR -->
    <div class="calendar full">
      <!-- CALENDAR WEEK -->
      <div class="calendar-week">
        <!-- CALENDAR WEEK DAY -->
        <p class="calendar-week-day"><span class="week-day-short">Sun</span><span class="week-day-long">Sunday</span></p>
        <!-- /CALENDAR WEEK DAY -->

        <!-- CALENDAR WEEK DAY -->
        <p class="calendar-week-day"><span class="week-day-short">Mon</span><span class="week-day-long">Monday</span></p>
        <!-- /CALENDAR WEEK DAY -->

        <!-- CALENDAR WEEK DAY -->
        <p class="calendar-week-day"><span class="week-day-short">Tue</span><span class="week-day-long">Tuesday</span></p>
        <!-- /CALENDAR WEEK DAY -->

        <!-- CALENDAR WEEK DAY -->
        <p class="calendar-week-day"><span class="week-day-short">Wed</span><span class="week-day-long">Wednesday</span></p>
        <!-- /CALENDAR WEEK DAY -->

        <!-- CALENDAR WEEK DAY -->
        <p class="calendar-week-day"><span class="week-day-short">Thu</span><span class="week-day-long">Thursday</span></p>
        <!-- /CALENDAR WEEK DAY -->

        <!-- CALENDAR WEEK DAY -->
        <p class="calendar-week-day"><span class="week-day-short">Fri</span><span class="week-day-long">Friday</span></p>
        <!-- /CALENDAR WEEK DAY -->

        <!-- CALENDAR WEEK DAY -->
        <p class="calendar-week-day"><span class="week-day-short">Sat</span><span class="week-day-long">Saturday</span></p>
        <!-- /CALENDAR WEEK DAY -->
      </div>
      <!-- /CALENDAR WEEK -->

      <!-- CALENDAR DAYS -->
      <div class="calendar-days">
        <!-- CALENDAR DAY ROW -->
        <div class="calendar-day-row">
          <!-- CALENDAR DAY -->
          <div class="calendar-day inactive">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">29</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day inactive">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">30</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day inactive">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">31</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">1</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">2</p>
            <!-- /CALENDAR DAY NUMBER -->

            <!-- CALENDARY DAY EVENTS -->
            <div class="calendar-day-events">
              <!-- CALENDAR DAY EVENT -->
              <p class="calendar-day-event primary popup-event-information-trigger"><span class="calendar-day-event-text">Dex's Birthday</span></p>
              <!-- /CALENDAR DAY EVENT -->

              <!-- CALENDAR DAY EVENT -->
              <p class="calendar-day-event secondary popup-event-information-trigger"><span class="calendar-day-event-text">Sara's Big Stream</span></p>
              <!-- /CALENDAR DAY EVENT -->

              <!-- CALENDAR DAY EVENT -->
              <p class="calendar-day-event secondary popup-event-information-trigger"><span class="calendar-day-event-text">Striker GO Release</span></p>
              <!-- /CALENDAR DAY EVENT -->
            </div>
            <!-- /CALENDARY DAY EVENTS -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">3</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">4</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->
        </div>
        <!-- /CALENDAR DAY ROW -->

        <!-- CALENDAR DAY ROW -->
        <div class="calendar-day-row">
          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">5</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">6</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day current">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">7</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">8</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">9</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">10</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">11</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->
        </div>
        <!-- /CALENDAR DAY ROW -->

        <!-- CALENDAR DAY ROW -->
        <div class="calendar-day-row">
          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">12</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day active">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">13</p>
            <!-- /CALENDAR DAY NUMBER -->

            <!-- CALENDARY DAY EVENTS -->
            <div class="calendar-day-events">
              <!-- CALENDAR DAY EVENT -->
              <p class="calendar-day-event secondary popup-event-information-trigger"><span class="calendar-day-event-text">Breakfast with Neko</span></p>
              <!-- /CALENDAR DAY EVENT -->

              <!-- CALENDAR DAY EVENT -->
              <p class="calendar-day-event primary popup-event-information-trigger"><span class="calendar-day-event-text">Streaming Party</span></p>
              <!-- /CALENDAR DAY EVENT -->
            </div>
            <!-- /CALENDAR DAY EVENTS -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">14</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">15</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">16</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">17</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">18</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->
        </div>
        <!-- /CALENDAR DAY ROW -->

        <!-- CALENDAR DAY ROW -->
        <div class="calendar-day-row">
          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">19</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">20</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">21</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">22</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">23</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">24</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">25</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->
        </div>
        <!-- /CALENDAR DAY ROW -->

        <!-- CALENDAR DAY ROW -->
        <div class="calendar-day-row">
          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">26</p>
            <!-- /CALENDAR DAY NUMBER -->

            <!-- CALENDARY DAY EVENTS -->
            <div class="calendar-day-events">
              <!-- CALENDAR DAY EVENT -->
              <p class="calendar-day-event primary popup-event-information-trigger"><span class="calendar-day-event-text">CosWorld 2019 After...</span></p>
              <!-- /CALENDAR DAY EVENT -->
            </div>
            <!-- /CALENDARY DAY EVENTS -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">27</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">28</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">29</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">30</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day inactive">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">1</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->

          <!-- CALENDAR DAY -->
          <div class="calendar-day inactive">
            <!-- CALENDAR DAY NUMBER -->
            <p class="calendar-day-number">2</p>
            <!-- /CALENDAR DAY NUMBER -->
          </div>
          <!-- /CALENDAR DAY -->
        </div>
        <!-- /CALENDAR DAY ROW -->
      </div>
      <!-- /CALENDAR DAYS -->
    </div>
    <!-- /CALENDAR -->

    <!-- CALENDAR EVENTS PREVIEW -->
    <div class="calendar-events-preview">
      <!-- CALENDAR EVENTS PREVIEW TITLE -->
      <p class="calendar-events-preview-title">Monday, August 13th - 2019</p>
      <!-- /CALENDAR EVENTS PREVIEW TITLE -->

      <!-- CALENDAR EVENT PREVIEW LIST -->
      <div class="calendar-event-preview-list">
        <!-- CALENDAR EVENT PREVIEW -->
        <div class="calendar-event-preview secondary">
          <!-- CALENDAR EVENT PREVIEW START TIME -->
          <div class="calendar-event-preview-start-time">
            <!-- CALENDAR EVENT PREVIEW START TIME TITLE -->
            <p class="calendar-event-preview-start-time-title">8:30</p>
            <!-- /CALENDAR EVENT PREVIEW START TIME TITLE -->

            <!-- CALENDAR EVENT PREVIEW START TIME TEXT -->
            <p class="calendar-event-preview-start-time-text">AM</p>
            <!-- /CALENDAR EVENT PREVIEW START TIME TEXT -->
          </div>
          <!-- /CALENDAR EVENT PREVIEW START TIME -->

          <!-- CALENDAR EVENT PREVIEW INFO -->
          <div class="calendar-event-preview-info">
            <!-- CALENDAR EVENT PREVIEW TITLE -->
            <p class="calendar-event-preview-title popup-event-information-trigger">Breakfast with Neko</p>
            <!-- /CALENDAR EVENT PREVIEW TITLE -->

            <!-- CALENDAR EVENT PREVIEW TEXT -->
            <p class="calendar-event-preview-text">Hi Neko! I'm creating this event to invite you to have breakfast before work. Meet me at Coffebucks.</p>
            <!-- /CALENDAR EVENT PREVIEW TEXT -->

            <!-- CALENDAR EVENT PREVIEW TITLE -->
            <p class="calendar-event-preview-time"><span class="bold">8:30</span> AM</p>
            <!-- /CALENDAR EVENT PREVIEW TITLE -->
          </div>
          <!-- /CALENDAR EVENT PREVIEW INFO -->
        </div>
        <!-- /CALENDAR EVENT PREVIEW -->

        <!-- CALENDAR EVENT PREVIEW -->
        <div class="calendar-event-preview primary">
          <!-- CALENDAR EVENT PREVIEW START TIME -->
          <div class="calendar-event-preview-start-time">
            <!-- CALENDAR EVENT PREVIEW START TIME TITLE -->
            <p class="calendar-event-preview-start-time-title">10:00</p>
            <!-- /CALENDAR EVENT PREVIEW START TIME TITLE -->

            <!-- CALENDAR EVENT PREVIEW START TIME TEXT -->
            <p class="calendar-event-preview-start-time-text">PM</p>
            <!-- /CALENDAR EVENT PREVIEW START TIME TEXT -->
          </div>
          <!-- /CALENDAR EVENT PREVIEW START TIME -->

          <!-- CALENDAR EVENT PREVIEW INFO -->
          <div class="calendar-event-preview-info">
            <!-- CALENDAR EVENT PREVIEW TITLE -->
            <p class="calendar-event-preview-title popup-event-information-trigger">Streaming Party</p>
            <!-- /CALENDAR EVENT PREVIEW TITLE -->

            <!-- CALENDAR EVENT PREVIEW TEXT -->
            <p class="calendar-event-preview-text">The biggest party for Twitch streamers! Come and join us at Shenron Arena.</p>
            <!-- /CALENDAR EVENT PREVIEW TEXT -->

            <!-- CALENDAR EVENT PREVIEW TITLE -->
            <p class="calendar-event-preview-time"><span class="bold">10:00</span> PM - <span class="bold">11:30</span> PM</p>
            <!-- /CALENDAR EVENT PREVIEW TITLE -->
          </div>
          <!-- /CALENDAR EVENT PREVIEW INFO -->
        </div>
        <!-- /CALENDAR EVENT PREVIEW -->
      </div>
      <!-- /CALENDAR EVENT PREVIEW LIST -->
    </div>
    <!-- /CALENDAR EVENTS PREVIEW -->
  </div>
  <!-- /CALENDAR WIDGET -->

  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">See what's next!</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Upcoming Events</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- GRID -->
  <div class="grid grid-3-3-3-3 centered">
    <!-- EVENT PREVIEW -->
    <div class="event-preview">
      <!-- EVENT PREVIEW COVER -->
      <figure class="event-preview-cover liquid">
        <img src="/assets/img/cover/47.jpg" alt="cover-47">
      </figure>
      <!-- /EVENT PREVIEW COVER -->

      <!-- EVENT PREVIEW INFO -->
      <div class="event-preview-info">
        <!-- EVENT PREVIEW INFO TOP -->
        <div class="event-preview-info-top">
          <!-- DATE STICKER -->
          <div class="date-sticker">
            <!-- DATE STICKER DAY -->
            <p class="date-sticker-day">13</p>
            <!-- /DATE STICKER DAY -->

            <!-- DATE STICKER MONTH -->
            <p class="date-sticker-month">Aug</p>
            <!-- /DATE STICKER MONTH -->
          </div>
          <!-- /DATE STICKER -->

          <!-- EVENT PREVIEW TITLE -->
          <p class="event-preview-title popup-event-information-trigger">Breakfast with Neko</p>
          <!-- /EVENT PREVIEW TITLE -->

          <!-- EVENT PREVIEW TIMESTAMP -->
          <p class="event-preview-timestamp"><span class="bold">8:30</span> AM</p>
          <!-- /EVENT PREVIEW TIMESTAMP -->

          <!-- EVENT PREVIEW TEXT -->
          <p class="event-preview-text">Hi Neko! I'm creating this event to invite you to have breakfast before work. Meet me at Coffebucks.</p>
          <!-- /EVENT PREVIEW TEXT -->
        </div>
        <!-- /EVENT PREVIEW INFO TOP -->

        <!-- EVENT PREVIEW INFO BOTTOM -->
        <div class="event-preview-info-bottom">
          <!-- DECORATED TEXT -->
          <div class="decorated-text">
            <!-- DECORATED TEXT ICON -->
            <svg class="decorated-text-icon icon-pin">
              <use xlink:href="#svg-pin"></use>
            </svg>
            <!-- /DECORATED TEXT ICON -->

            <!-- DECORATED TEXT CONTENT -->
            <p class="decorated-text-content">Downtown Coffeebucks</p>
            <!-- /DECORATED TEXT CONTENT -->
          </div>
          <!-- /DECORATED TEXT -->

          <!-- META LINE -->
          <div class="meta-line">
            <!-- META LINE LIST -->
            <div class="meta-line-list user-avatar-list">
              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/05.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/01.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->
            </div>
            <!-- /META LINE LIST -->

            <!-- META LINE TEXT -->
            <p class="meta-line-text">will assist</p>
            <!-- /META LINE TEXT -->
          </div>
          <!-- /META LINE -->

          <!-- BUTTON -->
          <p class="button white white-tertiary">Remove from Calendar</p>
          <!-- /BUTTON -->

        </div>
        <!-- /EVENT PREVIEW INFO BOTTOM -->
      </div>
      <!-- /EVENT PREVIEW INFO -->
    </div>
    <!-- /EVENT PREVIEW -->

    <!-- EVENT PREVIEW -->
    <div class="event-preview">
      <!-- EVENT PREVIEW COVER -->
      <figure class="event-preview-cover liquid">
        <img src="/assets/img/cover/23.jpg" alt="cover-23">
      </figure>
      <!-- /EVENT PREVIEW COVER -->

      <!-- EVENT PREVIEW INFO -->
      <div class="event-preview-info">
        <!-- EVENT PREVIEW INFO TOP -->
        <div class="event-preview-info-top">
          <!-- DATE STICKER -->
          <div class="date-sticker">
            <!-- DATE STICKER DAY -->
            <p class="date-sticker-day">13</p>
            <!-- /DATE STICKER DAY -->

            <!-- DATE STICKER MONTH -->
            <p class="date-sticker-month">Aug</p>
            <!-- /DATE STICKER MONTH -->
          </div>
          <!-- /DATE STICKER -->

          <!-- EVENT PREVIEW TITLE -->
          <p class="event-preview-title popup-event-information-trigger">Streaming Party</p>
          <!-- /EVENT PREVIEW TITLE -->

          <!-- EVENT PREVIEW TIMESTAMP -->
          <p class="event-preview-timestamp"><span class="bold">10:00</span> PM - <span class="bold">11:30</span> PM</p>
          <!-- /EVENT PREVIEW TIMESTAMP -->

          <!-- EVENT PREVIEW TEXT -->
          <p class="event-preview-text">The biggest party for Twitch streamers! Come and join us at Shenron Arena.</p>
          <!-- /EVENT PREVIEW TEXT -->
        </div>
        <!-- /EVENT PREVIEW INFO TOP -->

        <!-- EVENT PREVIEW INFO BOTTOM -->
        <div class="event-preview-info-bottom">
          <!-- DECORATED TEXT -->
          <div class="decorated-text">
            <!-- DECORATED TEXT ICON -->
            <svg class="decorated-text-icon icon-pin">
              <use xlink:href="#svg-pin"></use>
            </svg>
            <!-- /DECORATED TEXT ICON -->

            <!-- DECORATED TEXT CONTENT -->
            <p class="decorated-text-content">Shenron Arena</p>
            <!-- /DECORATED TEXT CONTENT -->
          </div>
          <!-- /DECORATED TEXT -->

          <!-- META LINE -->
          <div class="meta-line">
            <!-- META LINE LIST -->
            <div class="meta-line-list user-avatar-list">
              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/09.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/08.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/12.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/16.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/06.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->
            </div>
            <!-- /META LINE LIST -->

            <!-- META LINE TEXT -->
            <p class="meta-line-text">+31 will assist</p>
            <!-- /META LINE TEXT -->
          </div>
          <!-- /META LINE -->

          <!-- BUTTON -->
          <p class="button white white-tertiary">Remove from Calendar</p>
          <!-- /BUTTON -->
        </div>
        <!-- /EVENT PREVIEW INFO BOTTOM -->
      </div>
      <!-- /EVENT PREVIEW INFO -->
    </div>
    <!-- /EVENT PREVIEW -->

    <!-- EVENT PREVIEW -->
    <div class="event-preview">
      <!-- EVENT PREVIEW COVER -->
      <figure class="event-preview-cover liquid">
        <img src="/assets/img/cover/33.jpg" alt="cover-33">
      </figure>
      <!-- /EVENT PREVIEW COVER -->

      <!-- EVENT PREVIEW INFO -->
      <div class="event-preview-info">
        <!-- EVENT PREVIEW INFO TOP -->
        <div class="event-preview-info-top">
          <!-- DATE STICKER -->
          <div class="date-sticker">
            <!-- DATE STICKER DAY -->
            <p class="date-sticker-day">26</p>
            <!-- /DATE STICKER DAY -->

            <!-- DATE STICKER MONTH -->
            <p class="date-sticker-month">Aug</p>
            <!-- /DATE STICKER MONTH -->
          </div>
          <!-- /DATE STICKER -->

          <!-- EVENT PREVIEW TITLE -->
          <p class="event-preview-title popup-event-information-trigger">CosWorld 2019 After Party</p>
          <!-- /EVENT PREVIEW TITLE -->

          <!-- EVENT PREVIEW TIMESTAMP -->
          <p class="event-preview-timestamp"><span class="bold">11:00</span> PM</p>
          <!-- /EVENT PREVIEW TIMESTAMP -->

          <!-- EVENT PREVIEW TEXT -->
          <p class="event-preview-text">Join us at the CosWorld after party! We'll be eating, drinking and having a great time exchanging experiences...</p>
          <!-- /EVENT PREVIEW TEXT -->
        </div>
        <!-- /EVENT PREVIEW INFO TOP -->

        <!-- EVENT PREVIEW INFO BOTTOM -->
        <div class="event-preview-info-bottom">
          <!-- DECORATED TEXT -->
          <div class="decorated-text">
            <!-- DECORATED TEXT ICON -->
            <svg class="decorated-text-icon icon-pin">
              <use xlink:href="#svg-pin"></use>
            </svg>
            <!-- /DECORATED TEXT ICON -->

            <!-- DECORATED TEXT CONTENT -->
            <p class="decorated-text-content">CosWorld Arena</p>
            <!-- /DECORATED TEXT CONTENT -->
          </div>
          <!-- /DECORATED TEXT -->

          <!-- META LINE -->
          <div class="meta-line">
            <!-- META LINE LIST -->
            <div class="meta-line-list user-avatar-list">
              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/06.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/07.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/02.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/10.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/05.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->
            </div>
            <!-- /META LINE LIST -->

            <!-- META LINE TEXT -->
            <p class="meta-line-text">+24 will assist</p>
            <!-- /META LINE TEXT -->
          </div>
          <!-- /META LINE -->

          <!-- BUTTON -->
          <p class="button white white-tertiary">Remove from Calendar</p>
          <!-- /BUTTON -->
        </div>
        <!-- /EVENT PREVIEW INFO BOTTOM -->
      </div>
      <!-- /EVENT PREVIEW INFO -->
    </div>
    <!-- /EVENT PREVIEW -->

    <!-- EVENT PREVIEW -->
    <div class="event-preview">
      <!-- EVENT PREVIEW COVER -->
      <figure class="event-preview-cover liquid">
        <img src="/assets/img/cover/40.jpg" alt="cover-40">
      </figure>
      <!-- /EVENT PREVIEW COVER -->

      <!-- EVENT PREVIEW INFO -->
      <div class="event-preview-info">
        <!-- EVENT PREVIEW INFO TOP -->
        <div class="event-preview-info-top">
          <!-- DATE STICKER -->
          <div class="date-sticker">
            <!-- DATE STICKER DAY -->
            <p class="date-sticker-day">9</p>
            <!-- /DATE STICKER DAY -->

            <!-- DATE STICKER MONTH -->
            <p class="date-sticker-month">Sep</p>
            <!-- /DATE STICKER MONTH -->
          </div>
          <!-- /DATE STICKER -->

          <!-- EVENT PREVIEW TITLE -->
          <p class="event-preview-title popup-event-information-trigger">Artistic Painting Course</p>
          <!-- /EVENT PREVIEW TITLE -->

          <!-- EVENT PREVIEW TIMESTAMP -->
          <p class="event-preview-timestamp"><span class="bold">6:00</span> PM</p>
          <!-- /EVENT PREVIEW TIMESTAMP -->

          <!-- EVENT PREVIEW TEXT -->
          <p class="event-preview-text">Come to have a great time with us at our artistic painting course! Begginers and experts welcome!</p>
          <!-- /EVENT PREVIEW TEXT -->
        </div>
        <!-- /EVENT PREVIEW INFO TOP -->

        <!-- EVENT PREVIEW INFO BOTTOM -->
        <div class="event-preview-info-bottom">
          <!-- DECORATED TEXT -->
          <div class="decorated-text">
            <!-- DECORATED TEXT ICON -->
            <svg class="decorated-text-icon icon-pin">
              <use xlink:href="#svg-pin"></use>
            </svg>
            <!-- /DECORATED TEXT ICON -->

            <!-- DECORATED TEXT CONTENT -->
            <p class="decorated-text-content">Xavier's Art Center</p>
            <!-- /DECORATED TEXT CONTENT -->
          </div>
          <!-- /DECORATED TEXT -->

          <!-- META LINE -->
          <div class="meta-line">
            <!-- META LINE LIST -->
            <div class="meta-line-list user-avatar-list">
              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/13.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/12.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/11.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/03.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->

              <!-- USER AVATAR -->
              <div class="user-avatar micro no-stats">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-22-24"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/assets/img/avatar/04.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->
            </div>
            <!-- /META LINE LIST -->

            <!-- META LINE TEXT -->
            <p class="meta-line-text">+17 will assist</p>
            <!-- /META LINE TEXT -->
          </div>
          <!-- /META LINE -->

          <!-- BUTTON -->
          <p class="button white white-tertiary">Remove from Calendar</p>
          <!-- /BUTTON -->
        </div>
        <!-- /EVENT PREVIEW INFO BOTTOM -->
      </div>
      <!-- /EVENT PREVIEW INFO -->
    </div>
    <!-- /EVENT PREVIEW -->
  </div>
  <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->

<!-- POPUP BOX -->
<div class="popup-box mid popup-make-trip">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button popup-make-trip-trigger">
    <!-- POPUP CLOSE BUTTON ICON -->
    <svg class="popup-close-button-icon icon-cross">
      <use xlink:href="#svg-cross"></use>
    </svg>
    <!-- /POPUP CLOSE BUTTON ICON -->
  </div>
  <!-- /POPUP CLOSE BUTTON -->

  <!-- POPUP BOX BODY -->
  <div class="popup-box-body">
    <!-- POPUP BOX SIDEBAR -->
    <div class="popup-box-sidebar">
      <!-- USER PREVIEW -->
      <div class="user-preview small">
        <!-- USER PREVIEW COVER -->
        <figure class="user-preview-cover liquid">
          <img src="img/cover/29.jpg" alt="cover-29">
        </figure>
        <!-- /USER PREVIEW COVER -->

        <!-- USER PREVIEW INFO -->
        <div class="user-preview-info">
          <!-- USER SHORT DESCRIPTION -->
          <div class="user-short-description small">
            <!-- USER SHORT DESCRIPTION AVATAR -->
            <a class="user-short-description-avatar user-avatar no-stats" href="group-timeline.html">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-100-108"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->

              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-84-92" data-src="/Uploads/avatars/{{Auth::user()->avatar}}"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /USER SHORT DESCRIPTION AVATAR -->

            <!-- USER SHORT DESCRIPTION TITLE -->
            <p class="user-short-description-title small"><a href="group-timeline.html">{{Auth::user()->user_name}}</a></p>
            <!-- /USER SHORT DESCRIPTION TITLE -->

            <!-- USER SHORT DESCRIPTION TEXT -->
            <p class="user-short-description-text regular">Group Organizer</p>
            <!-- /USER SHORT DESCRIPTION TEXT -->
          </div>
          <!-- /USER SHORT DESCRIPTION -->
        </div>
        <!-- /USER PREVIEW INFO -->
      </div>
      <!-- /USER PREVIEW -->

      <!-- SIDEBAR MENU ITEM -->
      <div class="sidebar-menu-item">
        <!-- SIDEBAR MENU BODY -->
        <div class="sidebar-menu-body secondary">
          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link active">Group Info</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">Avatar and Cover</p> -->
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">Social Networks</p> -->
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">Settings</p> -->
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">Members</p> -->
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">Delete Group</p> -->
          <!-- /SIDEBAR MENU LINK -->
        </div>
        <!-- /SIDEBAR MENU BODY -->
      </div>
      <!-- /SIDEBAR MENU ITEM -->
     <form class="form" action="/kilimofy/Group/Create-Group" method="post" enctype="multipart/form-data">
       @csrf
      <!-- POPUP BOX SIDEBAR FOOTER -->
      <div class="popup-box-sidebar-footer">
        <!-- BUTTON -->
        <button type="submit" class="button secondary full popup-make-trip-trigger">Save!</>
        <!-- /BUTTON -->

        <!-- BUTTON -->
        <button type="reset" class="button white full popup-make-trip-trigger" style="background-color:red;">Delete</button>
        <!-- /BUTTON -->
      </div>
      <!-- /POPUP BOX SIDEBAR FOOTER -->
    </div>
    <!-- /POPUP BOX SIDEBAR -->

    <!-- POPUP BOX CONTENT -->
    <div class="popup-box-content">
      <!-- WIDGET BOX -->
      <div class="widget-box">
        <!-- WIDGET BOX TITLE -->
        <p class="widget-box-title">Group Info</p>
        <!-- /WIDGET BOX TITLE -->

        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
          <!-- FORM -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="group-name">Jina la Grupu</label>
                  <input type="text" id="group-name" name="Group_Name" >
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="group-tagline">Ujumbe wa Grupu</label>
                  <input type="text" id="group-tagline" name="Tagline" >
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small mid-textarea">
                  <textarea id="group-description" name="Description" placeholder="Andika maelezo mafupi kuhusu grupu..."></textarea>
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->



            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="item-category">Status ya Grupu</label>
                  <select id="item-category" name="Status">
                    <option selected disabled>--Chagua--</option>
                    <option value="Public">Public</option>
                    <option value="Private">Private</option>

                  </select>
                  <!-- FORM SELECT ICON -->
                  <svg class="form-select-icon icon-small-arrow">
                    <use xlink:href="#svg-small-arrow"></use>
                  </svg>
                  <!-- /FORM SELECT ICON -->
                </div>
                <!-- /FORM SELECT -->
              </div>
              <!-- /FORM ITEM -->
            <div class="text-danger">{{$errors->first('item_category')}}</div>
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="group-tagline">Profile ya Grupu</label>
                  <input type="file" id="group-tagline" name="Group_Image" >
                  <input type="hidden"  name="Creator_Name" value="{{Auth::user()->name}}" >
                  <input type="hidden"  name="Creator_Id" value="{{Auth::user()->id}}" >
                  <input type="hidden"  name="Creator_Image_Path" value="{{Auth::user()->avatar}}" >
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->
          </form>
          <!-- /FORM -->
        </div>
        <!-- WIDGET BOX CONTENT -->
      </div>
      <!-- /WIDGET BOX -->
    </div>
    <!-- /POPUP BOX CONTENT -->
  </div>
  <!-- /POPUP BOX BODY -->
</div>
<!-- /POPUP BOX -->

<!-- POPUP BOX -->
<div class="popup-box small popup-event-creation">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button popup-event-creation-trigger">
    <!-- POPUP CLOSE BUTTON ICON -->
    <svg class="popup-close-button-icon icon-cross">
      <use xlink:href="#svg-cross"></use>
    </svg>
    <!-- /POPUP CLOSE BUTTON ICON -->
  </div>
  <!-- /POPUP CLOSE BUTTON -->

  <!-- POPUP BOX TITLE -->
  <p class="popup-box-title">+ Add New Event</p>
  <!-- /POPUP BOX TITLE -->

  <!-- FORM -->
  <form class="form">
    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="event-category">Category</label>
          <select id="event-category" name="event_category">
            <option value="0">Big Events</option>
            <option value="1">Small Events</option>
            <option value="2">Gaming Events</option>
            <option value="3">Cosplay Events</option>
          </select>
          <!-- FORM SELECT ICON -->
          <svg class="form-select-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /FORM SELECT ICON -->
        </div>
        <!-- /FORM SELECT -->
      </div>
      <!-- /FORM ITEM -->
    </div>
    <!-- /FORM ROW -->

    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM INPUT -->
        <div class="form-input small">
          <label for="event-name">Event Name</label>
          <input type="text" id="event-name" name="event_name">
        </div>
        <!-- /FORM INPUT -->
      </div>
      <!-- /FORM ITEM -->
    </div>
    <!-- /FORM ROW -->

    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM INPUT DECORATED -->
        <div class="form-input-decorated">
          <!-- FORM INPUT -->
          <div class="form-input small">
            <label for="event-location">Event Location</label>
            <input type="text" id="event-location" name="event_location">
          </div>
          <!-- /FORM INPUT -->

          <!-- FORM INPUT ICON -->
          <svg class="form-input-icon icon-pin">
            <use xlink:href="#svg-pin"></use>
          </svg>
          <!-- /FORM INPUT ICON -->
        </div>
        <!-- /FORM INPUT DECORATED -->
      </div>
      <!-- /FORM ITEM -->
    </div>
    <!-- /FORM ROW -->

    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM INPUT DECORATED -->
        <div class="form-input-decorated">
          <!-- FORM INPUT -->
          <div class="form-input small">
            <label for="event-date">Event Date</label>
            <input type="text" id="event-date" name="event_date">
          </div>
          <!-- /FORM INPUT -->

          <!-- FORM INPUT ICON -->
          <svg class="form-input-icon icon-events">
            <use xlink:href="#svg-events"></use>
          </svg>
          <!-- /FORM INPUT ICON -->
        </div>
        <!-- /FORM INPUT DECORATED -->
      </div>
      <!-- /FORM ITEM -->
    </div>
    <!-- /FORM ROW -->

    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item split join-on-mobile medium">
        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="event-time-start">Start Time</label>
          <select id="event-time-start" name="event_time-start">
            <option value="0">1:00</option>
            <option value="1">2:00</option>
            <option value="2">3:00</option>
            <option value="3">4:00</option>
            <option value="4">5:00</option>
            <option value="5">6:00</option>
            <option value="6">7:00</option>
            <option value="7">8:00</option>
          </select>
          <!-- FORM SELECT ICON -->
          <svg class="form-select-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /FORM SELECT ICON -->
        </div>
        <!-- /FORM SELECT -->

        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="event-time-annotation">AM - PM</label>
          <select id="event-time-annotation" name="event_time-annotation">
            <option value="0">PM</option>
            <option value="1">AM</option>
          </select>
          <!-- FORM SELECT ICON -->
          <svg class="form-select-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /FORM SELECT ICON -->
        </div>
        <!-- /FORM SELECT -->
      </div>
      <!-- /FORM ITEM -->
    </div>
    <!-- /FORM ROW -->

    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- CHECKBOX WRAP -->
        <div class="checkbox-wrap">
          <input type="checkbox" id="event-add-end-time" name="event_add-end-time">
          <!-- CHECKBOX BOX -->
          <div class="checkbox-box">
            <!-- ICON CROSS -->
            <svg class="icon-cross">
              <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /ICON CROSS -->
          </div>
          <!-- /CHECKBOX BOX -->
          <label for="event-add-end-time">Add End Time</label>
        </div>
        <!-- /CHECKBOX WRAP -->
      </div>
      <!-- /FORM ITEM -->
    </div>
    <!-- /FORM ROW -->

    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM INPUT -->
        <div class="form-input small">
          <label for="event-description">Event Description</label>
          <textarea id="event-description" name="event_description"></textarea>
        </div>
        <!-- /FORM INPUT -->
      </div>
      <!-- /FORM ITEM -->
    </div>
    <!-- /FORM ROW -->

    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM INPUT DECORATED -->
        <div class="form-input-decorated">
          <!-- FORM INPUT -->
          <div class="form-input small">
            <label for="event-cover-photo">Event Cover Photo</label>
            <input type="text" id="event-cover-photo" name="event_cover_photo">
          </div>
          <!-- /FORM INPUT -->

          <!-- FORM INPUT ICON -->
          <svg class="form-input-icon icon-photos">
            <use xlink:href="#svg-photos"></use>
          </svg>
          <!-- /FORM INPUT ICON -->
        </div>
        <!-- /FORM INPUT DECORATED -->
      </div>
      <!-- /FORM ITEM -->
    </div>
    <!-- /FORM ROW -->

    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ADD ITEMS -->
      <div class="form-add-items">
        <!-- FORM ADD ITEMS TITLE -->
        <p class="form-add-items-title">Invite Friends</p>
        <!-- /FORM ADD ITEMS TITLE -->

        <!-- FORM ADD ITEMS INFO -->
        <div class="form-add-items-info">
          <!-- FORM ADD ITEMS BUTTON -->
          <div class="form-add-items-button">
            <!-- FORM ADD ITEMS BUTTON ICON -->
            <svg class="form-add-items-button-icon icon-plus">
              <use xlink:href="#svg-plus"></use>
            </svg>
            <!-- /FORM ADD ITEMS BUTTON ICON -->
          </div>
          <!-- /FORM ADD ITEMS BUTTON -->

          <!-- USER AVATAR LIST -->
          <div class="user-avatar-list reverse medium">
            <!-- USER AVATAR -->
            <div class="user-avatar smaller no-stats">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-34-36"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->

              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </div>
            <!-- /USER AVATAR -->

            <!-- USER AVATAR -->
            <div class="user-avatar smaller no-stats">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-34-36"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->

              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </div>
            <!-- /USER AVATAR -->

            <!-- USER AVATAR -->
            <div class="user-avatar smaller no-stats">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-34-36"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->

              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </div>
            <!-- /USER AVATAR -->

            <!-- USER AVATAR -->
            <div class="user-avatar smaller no-stats">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-34-36"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->

              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </div>
            <!-- /USER AVATAR -->

            <!-- USER AVATAR -->
            <div class="user-avatar smaller no-stats">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-34-36"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->

              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/06.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </div>
            <!-- /USER AVATAR -->

            <!-- USER AVATAR -->
            <div class="user-avatar smaller no-stats">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-34-36"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->

              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/23.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </div>
            <!-- /USER AVATAR -->
          </div>
          <!-- /USER AVATAR LIST -->
        </div>
        <!-- /FORM ADD ITEMS INFO -->
      </div>
      <!-- /FORM ADD ITEMS -->
    </div>
    <!-- /FORM ROW -->

    <!-- POPUP BOX ACTIONS -->
    <div class="popup-box-actions medium void">
      <!-- POPUP BOX ACTION -->
      <button class="popup-box-action full button secondary">Create Event!</button>
      <!-- /POPUP BOX ACTION -->
    </div>
    <!-- /POPUP BOX ACTIONS -->
  </form>
  <!-- /FORM -->
</div>
<!-- /POPUP BOX -->

<script type="text/javascript">

$(document).ready(function() {
  $.ajaxSetup(
    headers:{
      'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content');
    }
  );

  var calendar = $('#calendar-widget').fullcalendar();
});
</script>
