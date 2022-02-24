@extends('LayoutBladeFiles.app-layout')
@section('title', 'Post')

<div class="content-grid">

  <!-- GRID -->
  <div class="grid grid-5-5-2 centered">

    @foreach($event as $event)
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
          <p class="event-preview-title popup-event-information-trigger">{!! \Illuminate\Support\Str::limit($event->event_name, 15, '...') !!}</p>
          <!-- /EVENT PREVIEW TITLE -->

          <!-- EVENT PREVIEW TIMESTAMP -->
          <p class="event-preview-timestamp"><span class="bold">{{$event->event_start}}</span> {{$event->event_start_time_annotation}} - <span class="bold">{{$event->event_end}}</span> {{$event->event_end_time_annotation}}</p>
          <!-- /EVENT PREVIEW TIMESTAMP -->

          <!-- EVENT PREVIEW TEXT -->
          <p class="event-preview-text">{!! \Illuminate\Support\Str::limit($event->event_description, 70, '...') !!}</p>
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
              </div>
              <!-- /USER AVATAR -->
            </div>
            <!-- /META LINE LIST -->

            <!-- META LINE TEXT -->
            <p class="meta-line-text">+{{mt_rand(5,32)}} will assist</p>
            <!-- /META LINE TEXT -->
          </div>
          <!-- /META LINE -->
          <br>
          <!-- BUTTON -->
          <a href="/kilimofy/Mkulima/Bwana-Shamba/Event-View-Page/{{$event->id}}" class="button secondary white-tertiary popup-event-information-trigger">View from Calendar</a>
          <!-- /BUTTON -->
        </div>
        <!-- /EVENT PREVIEW INFO BOTTOM -->
        <br>
      </div>
      <!-- /EVENT PREVIEW INFO -->
    </div>
    <!-- /EVENT PREVIEW -->
    @foreach
  </div>

</div>
