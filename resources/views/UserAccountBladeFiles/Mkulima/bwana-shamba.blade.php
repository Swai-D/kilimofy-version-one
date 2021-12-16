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
          <label for="friends-search">Tafuta Bwanashamba</label>
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
  <div class="section-pager-bar">
    <!-- SECTION PAGER -->
    <div class="section-pager">
      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item active">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">01</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">02</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">03</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">04</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">05</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">06</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->
    </div>
    <!-- /SECTION PAGER -->

    <!-- SECTION PAGER CONTROLS -->
    <div class="section-pager-controls">
      <!-- SLIDER CONTROL -->
      <div class="slider-control left disabled">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->

      <!-- SLIDER CONTROL -->
      <div class="slider-control right">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->
    </div>
    <!-- /SECTION PAGER CONTROLS -->
  </div>
  <!-- /SECTION PAGER BAR -->
  @endif
</section>
<!-- /SECTION -->

</div>
