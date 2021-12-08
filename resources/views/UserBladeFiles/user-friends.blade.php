@extends('LayoutBladeFiles.user-account-layout')
@foreach($user as $user)

@section('title')
{{$user->name}}'s Friends
@endsection
@section('friends-menu-active', 'active')

@section('mini-user-profile-active')
 style="fill:yellow "
@endsection

@section('user-data')
<section class="section">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
          <!-- SECTION PRETITLE -->
          <p class="section-pretitle">{{$user->name}}'s Friends</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Friends <span class="highlighted">{{$users_count}}</span></h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
      </div>
      <!-- /SECTION HEADER -->

      <!-- SECTION FILTERS BAR -->
      <div class="section-filters-bar v1">
        <!-- SECTION FILTERS BAR ACTIONS -->
        <div class="section-filters-bar-actions">
          <!-- FORM -->
          <form class="form">
            <!-- FORM INPUT -->
            <div class="form-input small with-button">
              <label for="friends-search">Search Friends</label>
              <input type="text" id="friends-search" name="friends_search">
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


      </div>
      <!-- /SECTION FILTERS BAR -->

      <!-- GRID -->
      <div class="grid grid-3-3-3-3 centered">
        @forelse($users as $user_friendlist)
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
              <a class="user-short-description-avatar user-avatar" href="">
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
                  <div class="hexagon-image-68-74" data-src="/Uploads/avatars/{{$user_friendlist->avatar}}"></div>
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
              <p class="user-short-description-title"><a href="profile-timeline.html">{{$user_friendlist->name}}</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->

              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text"><a href="#">@ {{strtolower($user_friendlist->name)}}</a></p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->

            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">874</p>
                <!-- /USER STAT TITLE -->

                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->

              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">60</p>
                <!-- /USER STAT TITLE -->

                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->

              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">3.9k</p>
                <!-- /USER STAT TITLE -->

                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->

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
                 {{$user->user_phone_number}}
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
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->

            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
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
        <p class="progress-arc-summary-subtitle text-center text-danger"> Hakuna rafiki wa kushabiana nae kwa sasa!</p>
      @endforelse
      </div>
      <!-- /GRID -->

    @include('LayoutBladeFiles.page-bar')
    </section>
    <!-- /SECTION -->
@endsection

@endforeach
