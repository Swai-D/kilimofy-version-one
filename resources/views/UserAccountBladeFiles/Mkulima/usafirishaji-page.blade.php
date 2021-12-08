@extends('LayoutBladeFiles.app-layout')
@section('title','Usafirishaji Wa Mizigo')
@section('menu-status-shipment','active')
@section('discription-title','Usafirishaji')
@section('discription-details','Chagua Usafiri')
<!-- CONTENT GRID -->
<div class="content-grid">

  <!-- SECTION BANNER -->
  @include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

      <!-- SECTION HEADER -->
      <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
          <!-- SECTION PRETITLE -->
          <p class="section-pretitle">Gain EXP and level up!</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Browse All Quests</h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
      </div>
      <!-- /SECTION HEADER -->

      <!-- SECTION FILTERS BAR -->
      <div class="section-filters-bar v2">
        <!-- FORM -->
        <form class="form">
          <!-- FORM ITEM -->
          <div class="form-item split medium">
            <!-- FORM SELECT -->
            <div class="form-select">
              <label for="quest-filter-show">Kutoka</label>
              <input type="text" name="" value="">

            </div>
            <!-- /FORM SELECT -->

            <!-- FORM SELECT -->
            <div class="form-select">
              <label for="quest-filter-criteria">Kwenda</label>
              <input type="text" name="" value="">

            </div>
            <!-- /FORM SELECT -->

            <!-- FORM SELECT -->
            <div class="form-select">
            </div>
            <!-- /FORM SELECT -->
            <!-- /FORM SELECT -->

            <!-- BUTTON -->
            <button class="button secondary">Tafuta</button>
            <!-- /BUTTON -->
          </div>
          <!-- /FORM ITEM -->
        </form>
        <!-- /FORM -->
      </div>
      <!-- /SECTION FILTERS BAR -->


      <!-- GRID -->
      <div class="grid grid-4-4-4 centered">


        <!-- QUEST ITEM -->
        <div class="quest-item">
          <!-- QUEST ITEM COVER -->
          <figure class="quest-item-cover liquid">
            <img src="/assets/img/quest/cover/02.png" alt="cover-02">
          </figure>
          <!-- /QUEST ITEM COVER -->

          <!-- TEXT STICKER -->
          <p class="text-sticker small-text">
            <!-- TEXT STICKER ICON -->
            <svg class="text-sticker-icon icon-plus-small">
              <use xlink:href="#svg-plus-small"></use>
            </svg>
            <!-- TEXT STICKER ICON -->
            Posted {{date('M d, Y')}}
          </p>
          <!-- /TEXT STICKER -->

          <!-- QUEST ITEM INFO -->
          <div class="quest-item-info">
            <!-- QUEST ITEM BADGE -->
            <div class="quest-item-badge">
              <img src="/assets/img/user_icon/shipment.png" alt="completedq-b">
            </div>
            <!-- /QUEST ITEM BADGE -->
            <!-- CALENDAR EVENTS PREVIEW -->
            <div class="calendar-events-preview">
              <!-- CALENDAR EVENTS PREVIEW TITLE -->
              <p class="calendar-events-preview-title" style="color:green;">Taarifa ya Safari</p>
              <br>
              <p class="calendar-events-preview-title" style="color:red;">Dar -> Mwanza</p>
              <p class="calendar-events-preview-text">Monday, August 13th - 2019</p>
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

                    <!-- CALENDAR EVENT PREVIEW TEXT -->
                    <p class="calendar-event-preview-time"><span class="bold">Jangwani (Dar)</span></p>
                    <!-- /CALENDAR EVENT PREVIEW TEXT -->

                  </div>
                  <!-- /CALENDAR EVENT PREVIEW INFO -->
                </div>
                <!-- /CALENDAR EVENT PREVIEW -->



              </div>
              <!-- /CALENDAR EVENT PREVIEW LIST -->
              <br>
              <hr>
              <!-- CALENDAR EVENTS PREVIEW TITLE -->
              <p class="calendar-events-preview-title text-center" style="color:red;">Safar Ni Kwenda na Kurudi</p>
              <!-- /CALENDAR EVENTS PREVIEW TITLE -->

            </div>
            <!-- /CALENDAR EVENTS PREVIEW -->
            </div>
            <!-- /PROGRESS STAT -->
            <br>
            <!-- SOCIAL LINKS -->
            <div class="social-links small">
              <!-- SOCIAL LINK -->
              <p style="font-size:16px;">
                <!-- SOCIAL LINK ICON -->
                 +255767265780
                <!-- /SOCIAL LINK ICON -->
              </p>

            </div>
            <!-- /SOCIAL LINKS -->

            <!-- QUEST ITEM META -->
            <div class="quest-item-meta">
              <!-- USER AVATAR LIST -->
              <div class="user-avatar-list">

                <!-- USER AVATAR -->
                <div class="user-avatar micro no-stats" style="margin-left:20px;">
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
              </div>
              <!-- /USER AVATAR LIST -->

              <!-- QUEST ITEM META INFO -->
              <div class="quest-item-meta-info">
                <!-- QUEST ITEM META TITLE -->

                <p class="quest-item-meta-title">Posted by</p>
                <!-- /QUEST ITEM META TITLE -->

                <!-- QUEST ITEM META TEXT -->
                <p class="quest-item-meta-text">Davy Swai</p>
                <!-- /QUEST ITEM META TEXT -->
              </div>
              <!-- /QUEST ITEM META INFO -->
            </div>
            <!-- /QUEST ITEM META -->
          </div>
          <!-- /QUEST ITEM INFO -->

      </div>
      <!-- /GRID -->

</div>
<!-- /CONTENT GRID -->
