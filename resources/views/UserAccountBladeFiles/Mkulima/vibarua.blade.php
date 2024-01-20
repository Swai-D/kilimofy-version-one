@extends('LayoutBladeFiles.app-layout')
@section('title','Vibarua')
@section('menu-status-workers','active')
@section('discription-title','Vibarua')
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
      <h2 class="section-title">Vibarua<span class="highlighted">({{$total_vibarua_list}})</span></h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

@if($total_vibarua_list != 0)
<!-- SECTION FILTERS BAR -->
<div class="section-filters-bar v2">
  <!-- FORM -->
  <form class="form">
    <!-- FORM ITEM -->
    <div class="form-item split medium">
      <!-- FORM SELECT -->
      <div class="form-select">
        <label for="post-filter-category">Filter By</label>
        <select id="post-filter-category" name="post_filter_category">
          <option value="0">Reactions Received</option>
          <option value="1">Comment Count</option>
          <option value="2">Share Count</option>
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
        <label for="post-filter-order">Order By</label>
        <select id="post-filter-order" name="post_filter_order">
          <option value="0">Highest Rating</option>
          <option value="1">Lowest Rating</option>
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
        <label for="post-filter-show">Show</label>
        <select id="post-filter-show" name="post_filter_show">
          <option value="0">12 Workers per Page</option>
          <option value="1">24 Workers per Page</option>
        </select>
        <!-- FORM SELECT ICON -->
        <svg class="form-select-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /FORM SELECT ICON -->
      </div>
      <!-- /FORM SELECT -->

      <!-- BUTTON -->
      <button class="button primary">Filter Workers</button>
      <!-- /BUTTON -->
    </div>
    <!-- /FORM ITEM -->
  </form>
  <!-- /FORM -->
</div>
<!-- /SECTION FILTERS BAR -->
@endif


  <!-- GRID -->
  <div class="grid grid-4-4-4 centered">
    @forelse($vibarua_list as $kibarua)

    <!-- BADGE ITEM PREVIEW -->
    <div class="badge-item-preview">
      <!-- BADGE ITEM PREVIEW IMAGE -->
      <img class="badge-item-preview-image" src="/Uploads/avatars/{{$kibarua->avatar}}" alt="kibarua-avatar" style="border-radius:50%; height:100px; width:100px;">
      <!-- /BADGE ITEM PREVIEW IMAGE -->

      <!-- BADGE ITEM PREVIEW INFO -->
      <div class="badge-item-preview-info">
        <!-- BADGE ITEM PREVIEW TITLE -->
        <p class="badge-item-preview-title">{{$kibarua->username}}</p>
        <!-- /BADGE ITEM PREVIEW TITLE -->

        <!-- USER STAT -->
        <div class="user-stat big">
          <!-- USER STAT TITLE -->
          <!-- <p class="user-stat-title">4.2/5</p> -->
          <!-- /USER STAT TITLE -->

          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->

            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /USER STAT -->
        <!-- BADGE ITEM PREVIEW TEXT -->
        <p class="badge-item-preview-text">Helped the team enforce the communty rules</p>
        <!-- /BADGE ITEM PREVIEW TEXT -->

        <!-- BADGE ITEM PREVIEW TIMESTAMP -->
        <p class="badge-item-preview-timestamp" style="color:red">{{$kibarua->user_phone_number}}</p>
        <!-- /BADGE ITEM PREVIEW TIMESTAMP -->
        <br>
        <!-- BADGE ITEM PREVIEW TIMESTAMP -->
        <p class="button  secondary full">Get</p>
        <!-- /BADGE ITEM PREVIEW TIMESTAMP -->
      </div>
      <!-- /BADGE ITEM PREVIEW INFO -->
    </div>
    <!-- /BADGE ITEM PREVIEW -->
    @empty
    <p class="progress-arc-summary-subtitle text-center text-danger"> Hatuna Vibarua kutoka {{$user_location}} kwa sasa !</p>
    @endforelse
  </div>
  <!-- /GRID -->

@if($total_vibarua_list != 0)
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
