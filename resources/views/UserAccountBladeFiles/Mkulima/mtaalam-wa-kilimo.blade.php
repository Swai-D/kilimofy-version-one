@extends('LayoutBladeFiles.app-layout')
@section('title','Mtaalam wa Kilimo')
@section('menu-status-education','active')
@section('discription-title','Mtaalam')
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
        <p class="decorated-text-content">Tanzania <span><img src="/assets/img/flag/tanzania.png" alt="" style="width:16px; height:16px;"> </span> </p>
        <!-- /DECORATED TEXT CONTENT -->
      </div>
      <!-- /DECORATED TEXT -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Mtaalam  <span class="highlighted">({{$total_mtaalam_list}})</span></h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

@if($total_mtaalam_list != 0)
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
          <option value="0">Highest to Lowest</option>
          <option value="1">Lowest to Highest</option>
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
          <option value="0">12 Posts per Page</option>
          <option value="1">24 Posts per Page</option>
        </select>
        <!-- FORM SELECT ICON -->
        <svg class="form-select-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /FORM SELECT ICON -->
      </div>
      <!-- /FORM SELECT -->

      <!-- BUTTON -->
      <button class="button primary">Filter Posts</button>
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
    @forelse($mtaalam_list as $mtaalam)
    <!-- POST PREVIEW -->
    <div class="post-preview">
      <!-- POST PREVIEW IMAGE -->
      <figure class="post-preview-image liquid">
        <img src="/assets/img/cover/07.jpg" alt="cover-07">
      </figure>
      <!-- /POST PREVIEW IMAGE -->

      <!-- POST PREVIEW INFO -->
      <div class="post-preview-info fixed-height">
        <!-- POST PREVIEW INFO TOP -->
        <div class="post-preview-info-top">
          <!-- POST PREVIEW TIMESTAMP -->
          <p class="post-preview-timestamp">1 month ago</p>
          <!-- /POST PREVIEW TIMESTAMP -->

          <!-- POST PREVIEW TITLE -->
          <p class="post-preview-title">Old Super Mochi's Island is getting a remake!</p>
          <!-- /POST PREVIEW TITLE -->
        </div>
        <!-- /POST PREVIEW INFO TOP -->

        <!-- POST PREVIEW INFO BOTTOM -->
        <div class="post-preview-info-bottom">
          <!-- POST PREVIEW TEXT -->
          <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
          <!-- /POST PREVIEW TEXT -->

          <!-- POST PREVIEW LINK -->
          <a class="post-preview-link" href="/kilimofy/Mkulima/Mtaalam-Wa-Kilimo/blog-page">Read more...</a>
          <!-- /POST PREVIEW LINK -->
        </div>
        <!-- /POST PREVIEW INFO BOTTOM -->
      </div>
      <!-- /POST PREVIEW INFO -->

      <!-- CONTENT ACTIONS -->
      <div class="content-actions">
        <!-- CONTENT ACTION -->
        <div class="content-action">
          <!-- META LINE -->
          <div class="meta-line">
            <!-- META LINE LIST -->
            <div class="meta-line-list reaction-item-list">
              <!-- REACTION ITEM -->
              <div class="reaction-item">
                <!-- REACTION IMAGE -->
                <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/funny.png" alt="reaction-funny">
                <!-- /REACTION IMAGE -->

                <!-- SIMPLE DROPDOWN -->
                <div class="simple-dropdown padded reaction-item-dropdown">
                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/funny.png" alt="reaction-funny"> <span class="bold">Funny</span></p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Neko Bebop</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Nick Grissom</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Sarah Diamond</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Marcus Jhonson</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->
                </div>
                <!-- /SIMPLE DROPDOWN -->
              </div>
              <!-- /REACTION ITEM -->

              <!-- REACTION ITEM -->
              <div class="reaction-item">
                <!-- REACTION IMAGE -->
                <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/like.png" alt="reaction-like">
                <!-- /REACTION IMAGE -->

                <!-- SIMPLE DROPDOWN -->
                <div class="simple-dropdown padded reaction-item-dropdown">
                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Jett Spiegel</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Jane Rodgers</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->
                </div>
                <!-- /SIMPLE DROPDOWN -->
              </div>
              <!-- /REACTION ITEM -->

              <!-- REACTION ITEM -->
              <div class="reaction-item">
                <!-- REACTION IMAGE -->
                <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/love.png" alt="reaction-love">
                <!-- /REACTION IMAGE -->

                <!-- SIMPLE DROPDOWN -->
                <div class="simple-dropdown padded reaction-item-dropdown">
                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Neko Bebop</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Nick Grissom</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Sarah Diamond</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Jett Spiegel</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Marcus Jhonson</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Jane Rodgers</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text"><span class="bold">and 3 more...</span></p>
                  <!-- /SIMPLE DROPDOWN TEXT -->
                </div>
                <!-- /SIMPLE DROPDOWN -->
              </div>
              <!-- /REACTION ITEM -->
            </div>
            <!-- /REACTION ITEM LIST -->

            <!-- META LINE TEXT -->
            <p class="meta-line-text">15</p>
            <!-- /META LINE TEXT -->
          </div>
          <!-- /META LINE -->
        </div>
        <!-- /CONTENT ACTION -->

        <!-- CONTENT ACTION -->
        <div class="content-action">
          <!-- META LINE -->
          <div class="meta-line">
            <!-- META LINE LINK -->
            <a class="meta-line-link" href="profile-post.html#comments">9 Comments</a>
            <!-- /META LINE LINK -->
          </div>
          <!-- /META LINE -->

          <!-- META LINE -->
          <div class="meta-line">
            <!-- META LINE TEXT -->
            <p class="meta-line-text">0 Shares</p>
            <!-- /META LINE TEXT -->
          </div>
          <!-- /META LINE -->
        </div>
        <!-- /CONTENT ACTION -->
      </div>
      <!-- /CONTENT ACTIONS -->
    </div>
    <!-- /POST PREVIEW -->
    @empty
    <p class="progress-arc-summary-subtitle text-center text-danger"> Hatuna Mtaalam wa Maswala ya Kilimo kutoka {{$user_location}} kwa sasa !</p>
    @endforelse
  </div>
  <!-- /GRID -->

@if($total_mtaalam_list != 0)
  <!-- SECTION PAGER BAR -->
  @include('LayoutBladeFiles.page-bar')
  <!-- /SECTION PAGER BAR -->
  @endif
</section>
<!-- /SECTION -->

</div>
