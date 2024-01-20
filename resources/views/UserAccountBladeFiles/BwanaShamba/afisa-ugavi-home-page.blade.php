@extends('LayoutBladeFiles.app-layout')

@section('location-header')
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
@endsection

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

  @forelse($user_account_event_details as $event)
  <!-- EVENT PREVIEW -->
  <div class="event-preview">
    <!-- EVENT PREVIEW COVER -->
    <figure class="event-preview-cover liquid">
      <img src="/Uploads/BwanaShambaEventCoverPage/{{$event->event_cover_photo}}" alt="cover-23">
    </figure>
    <!-- /EVENT PREVIEW COVER -->

    <!-- EVENT PREVIEW INFO -->
    <div class="event-preview-info">
      <!-- EVENT PREVIEW INFO TOP -->
      <div class="event-preview-info-top">
        <!-- DATE STICKER -->
        <div class="date-sticker">
          <!-- DATE STICKER DAY -->
          <p class="date-sticker-day">{{date('d', strtotime($event->event_date))}}</p>
          <!-- /DATE STICKER DAY -->

          <!-- DATE STICKER MONTH -->
          <p class="date-sticker-month">{{date('M', strtotime($event->event_date))}}</p>
          <!-- /DATE STICKER MONTH -->
        </div>
        <!-- /DATE STICKER -->

        <!-- EVENT PREVIEW TITLE -->
        <p class="event-preview-title popup-event-information-trigger">{{$event->event_name}}</p>
        <!-- /EVENT PREVIEW TITLE -->

        <!-- EVENT PREVIEW TIMESTAMP -->
        <p class="event-preview-timestamp"><span class="bold">{{$event->event_start}}</span> {{$event->event_start_time_annotation}} - <span class="bold">{{$event->event_end}}</span> {{$event->event_end_time_annotation}}</p>
        <!-- /EVENT PREVIEW TIMESTAMP -->

        <!-- EVENT PREVIEW TEXT -->
        <p class="event-preview-text">{{$event->event_description}}</p>
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
          <p class="decorated-text-content">{{$event->event_location}}</p>
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
            </div>!
            <!-- /USER AVATAR -->
          </div>
          <!-- /META LINE LIST -->

          <!-- META LINE TEXT -->
          <p class="meta-line-text">+17 will assist</p>
          <!-- /META LINE TEXT -->
        </div>
        <!-- /META LINE -->
        <br>
        <div class="user-preview-actions">
          <!-- BUTTON -->
          <a class="button secondary full" style="color:white;  margin:4px;">Edit Event</a>
          <!-- /BUTTON -->

          <!-- BUTTON -->
          <a class="button white white-tertiary" style="color:white; background-color: red; margin:4px;">Remove Event</a>
          <!-- /BUTTON -->
        </div>

      </div>
      <!-- /EVENT PREVIEW INFO BOTTOM -->
      <br>
    </div>
    <!-- /EVENT PREVIEW INFO -->
  </div>
  <!-- /EVENT PREVIEW -->
  @empty
  <p class="text-danger"> Huna Event Yeyote kwa sasa !</p>
  @endforelse

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
  <form class="form" action="/kilimofy/Afisa-Ugavi/create-event" method="post" enctype="multipart/form-data">
    @csrf
    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="event-category">Category</label>
          <select id="event-category" name="event_category">
            <option value="Small Events">Small Events</option>
            <option value="Big Events">Big Events</option>
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
            <input type="text" id="pac-input" name="event_location">
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
            <input type="date" id="event-date" name="event_date">
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
          <select id="event-time-start" name="event_start">
            <option value="1:00">1:00</option>
            <option value="2:00">2:00</option>
            <option value="3:00">3:00</option>
            <option value="4:00">4:00</option>
            <option value="5:00">5:00</option>
            <option value="6:00">6:00</option>
            <option value="7:00">7:00</option>
            <option value="8:00">8:00</option>
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
          <select id="event-time-annotation" name="event_start_time_annotation">
            <option value="PM">PM</option>
            <option value="AM">AM</option>
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
      <div class="form-item split join-on-mobile medium">
        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="event-time-start">End Time</label>
          <select id="event-time-start" name="event_end">
            <option value="1:00">1:00</option>
            <option value="2:00">2:00</option>
            <option value="3:00">3:00</option>
            <option value="4:00">4:00</option>
            <option value="5:00">5:00</option>
            <option value="6:00">6:00</option>
            <option value="7:00">7:00</option>
            <option value="8:00">8:00</option>
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
          <select id="event-time-annotation" name="event_end_time_annotation">
            <option value="PM">PM</option>
            <option value="AM">AM</option>
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
          <input type="hidden" id="event-add-end-time" name="user_id" value="{{Auth::user()->id}}">
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
          <label for="event-cover-photo">Event Cover Photo</label>
          <div class="form-input small">
            <input type="file" id="event-cover-photo" name="event_cover_photo">
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
      <button type="submit" class="popup-box-action full button secondary">Create Event!</button>
      <!-- /POPUP BOX ACTION -->
    </div>
    <!-- /POPUP BOX ACTIONS -->
  </form>
  <!-- /FORM -->
</div>
<!-- /POPUP BOX -->
@section('location-footer')
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initAutocomplete&libraries=places&v=weekly" async></script>

@endsection
