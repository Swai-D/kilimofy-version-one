@extends('LayoutBladeFiles.app-layout')
@section('title','Mabwana Shamaba')
@section('menu-status-gardener','active')
@section('discription-title','Bwana Shamba ')
@section('discription-details','kilimofy')
<div class="content-grid">
@include('LayoutBladeFiles.title-layout')
<!-- SECTION -->

<section class="section">
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">

      <!-- DECORATED TEXT -->
      <div class="decorated-text">
        <!-- DECORATED TEXT ICON -->
        <svg class="decorated-text-icon icon-pin" style="fill:red;">
          <use xlink:href="#svg-pin"></use>
        </svg>
        <!-- /DECORATED TEXT ICON -->

        <!-- DECORATED TEXT CONTENT -->
        <p class="decorated-text-content">{{$user_location}}</p>
        <!-- /DECORATED TEXT CONTENT -->
      </div>
      <!-- /DECORATED TEXT -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Bwana Shamba <span class="highlighted">({{$total_bwana_shamba_list}})</span></h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

@if($total_bwana_shamba_list != 0)
  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar v1">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FORM -->
      <form class="form">
        <!-- FORM INPUT -->
        <div class="form-input small with-button">
          <label for="friends-search">Search</label>
          <input type="text" id="friends-search" name="tafuta_bwanashamba">
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
        <!-- /FORM INPUT -->


        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="friends-filter-category">Filter By</label>
          <select id="friends-filter-category" name="friends_filter_category">
            <option value="0">Recently Active</option>
            <option value="1">Newest Friends</option>
            <option value="2">Alphabetical</option>
          </select>
          <!-- FORM SELECT ICON -->
          <svg class="form-select-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /FORM SELECT ICON -->
        </div>
        <!-- /FORM SELECT -->
      </form>
      <!-- /FORM -->

      <!-- FILTER TABS -->
      <div class="filter-tabs">
        <!-- FILTER TAB -->
        <div class="filter-tab active">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">Recently Active</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->

        <!-- FILTER TAB -->
        <div class="filter-tab">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">Newest Friends</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->

        <!-- FILTER TAB -->
        <div class="filter-tab">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">Alphabetical</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->
      </div>
      <!-- /FILTER TABS -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->

    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->
@endif
  <!-- GRID -->
  <div class="grid grid-3-3-3-3 centered">
    @forelse($bwana_shamba_list as $bwana_shamba)
    <!-- USER PREVIEW -->
    <div class="user-preview small">
      <!-- USER PREVIEW COVER -->
      <figure class="user-preview-cover liquid">
        <img src="/assets/img/landing/landing-background.jpg" alt="cover-04">
      </figure>
      <!-- /USER PREVIEW COVER -->

      <!-- USER PREVIEW INFO -->
      <div class="user-preview-info">
        <!-- USER SHORT DESCRIPTION -->
        <div class="user-short-description small">
          <!-- USER SHORT DESCRIPTION AVATAR -->
          <a class="user-short-description-avatar user-avatar" href="/kilimofy/UserAccount/about_user_page/{{$bwana_shamba->id}}-About-{{$bwana_shamba->name}}-in-Kilimofy-Platform">
            <!-- USER AVATAR BORDER -->
            <div class="user-avatar-border">
              <!-- HEXAGON -->
              <div class="hexagon-100-110"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BORDER -->

            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-68-74" data-src="/Uploads/avatars/{{$bwana_shamba->avatar}}"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->

            <!-- USER AVATAR PROGRESS -->
            <div class="user-avatar-progress">
              <!-- HEXAGON -->
              <div class="hexagon-progress-84-92"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS -->

            <!-- USER AVATAR PROGRESS BORDER -->
            <div class="user-avatar-progress-border">
              <!-- HEXAGON -->
              <div class="hexagon-border-84-92"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR PROGRESS BORDER -->
          </a>
          <!-- /USER SHORT DESCRIPTION AVATAR -->

          <!-- USER SHORT DESCRIPTION TITLE -->
          <p class="user-short-description-title"><a href="/kilimofy/UserAccount/about_user_page/{{$bwana_shamba->id}}-About-{{$bwana_shamba->name}}-in-Kilimofy-Platform">{{$bwana_shamba->name}}</a></p>
          <!-- /USER SHORT DESCRIPTION TITLE -->

          <!-- USER SHORT DESCRIPTION TEXT -->
          <p class="user-short-description-text"><a href="#">@ {{strtolower($bwana_shamba->name)}}</a></p>
          <!-- /USER SHORT DESCRIPTION TEXT -->
        </div>
        <!-- /USER SHORT DESCRIPTION -->




        <!-- SOCIAL LINKS -->
        <div class="social-links small">
          <!-- SOCIAL LINK -->
          <a class="social-link small twitter" href="#">
            <!-- SOCIAL LINK ICON -->
            <svg class="social-link-icon icon-twitter">
              <use xlink:href="#svg-twitter"></use>
            </svg>
            <!-- /SOCIAL LINK ICON -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->
          <a class="social-link small instagram" href="#">
            <!-- SOCIAL LINK ICON -->
            <svg class="social-link-icon icon-instagram">
              <use xlink:href="#svg-instagram"></use>
            </svg>
            <!-- /SOCIAL LINK ICON -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->
          <a class="social-link small youtube" href="#">
            <!-- SOCIAL LINK ICON -->
            <svg class="social-link-icon icon-youtube">
              <use xlink:href="#svg-youtube"></use>
            </svg>
            <!-- /SOCIAL LINK ICON -->
          </a>
          <!-- /SOCIAL LINK -->

          <!-- SOCIAL LINK -->
          <a class="social-link small facebook" href="#">
            <!-- SOCIAL LINK ICON -->
            <svg class="social-link-icon icon-facebook">
              <use xlink:href="#svg-facebook"></use>
            </svg>
            <!-- /SOCIAL LINK ICON -->
          </a>
          <!-- /SOCIAL LINK -->
        </div>
        <!-- /SOCIAL LINKS -->
        <!-- SOCIAL LINKS -->
        <div class="social-links small">
          <!-- SOCIAL LINK -->
          <p style="font-size:16px;">
            <!-- SOCIAL LINK ICON -->
             {{$bwana_shamba->user_phone_number}}
            <!-- /SOCIAL LINK ICON -->
          </p>

        </div>
        <!-- /SOCIAL LINKS -->
      </div>
      <!-- /USER PREVIEW INFO -->

      <!-- USER PREVIEW FOOTER -->
      <div class="user-preview-footer">
        <!-- USER PREVIEW FOOTER ACTION -->
        <div class="user-preview-footer-action">
          <!-- BUTTON -->
          <a href="/kilimofy/UserAccount/about_user_page/{{$bwana_shamba->id}}-About-{{$bwana_shamba->name}}-in-Kilimofy-Platform" class="button void void-secondary">
            <!-- BUTTON ICON -->
            <svg class="button-icon icon-add-friend">
              <use xlink:href="#svg-add-friend"></use>
            </svg>
            <!-- /BUTTON ICON -->
          </a>
          <!-- /BUTTON -->
        </div>
        <!-- /USER PREVIEW FOOTER ACTION -->

        <!-- USER PREVIEW FOOTER ACTION -->
        <div class="user-preview-footer-action">
          <!-- BUTTON -->
          <p class="button void void-primary">
            <!-- BUTTON ICON -->
          <a href="/Kilimofy-Messenger">
            <svg class="button-icon icon-comment">
              <use xlink:href="#svg-comment"></use>
            </svg>
          </a>
            <!-- /BUTTON ICON -->
          </p>
          <!-- /BUTTON -->
        </div>
        <!-- /USER PREVIEW FOOTER ACTION -->
      </div>
      <!-- /USER PREVIEW FOOTER -->
    </div>
    <!-- /USER PREVIEW -->
    @empty
    <p class="progress-arc-summary-subtitle text-center text-danger"> Hatuna Bwana Shamba kutoka {{$user_location}} kwa sasa !</p>
    @endforelse
  </div>
  <!-- /GRID -->

@if($total_bwana_shamba_list != 0)
  <!-- SECTION PAGER BAR -->
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

  @forelse($bwana_shamba_events_list as $event)
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
  @empty
  <p class="progress-arc-summary-subtitle text-center text-danger"> Hatuna Events Yeyote iliyo andaliwa na Bwana Shamba kwa sasa !</p>
  @endforelse

  </div>
  <!-- /GRID -->
  @endif
</section>
<!-- /SECTION -->

</div>
