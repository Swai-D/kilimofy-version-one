@extends('LayoutBladeFiles.app-layout')
@section('title','MarketPlace')
@section('discription-title','Sokoni')
@section('discription-details','chagua bidhaa uipendayo')
@section('menu-status-marketplace','active')
@section('content')
<div class="content-grid">
  <!-- SECTION BANNER -->
@include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Search what you want!</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Market Categories</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- GRID -->

  <div class="grid grid-3-3-3-3 centered">
    <!-- PRODUCT CATEGORY BOX -->
    <a class="product-category-box category-all" href="marketplace-category.html" >
      <!-- PRODUCT CATEGORY BOX TITLE -->
      <p class="product-category-box-title">Matunda</p>
      <!-- /PRODUCT CATEGORY BOX TITLE -->

      <!-- PRODUCT CATEGORY BOX TEXT -->
      <p class="product-category-box-text">Check out all items</p>
      <!-- /PRODUCT CATEGORY BOX TEXT -->

      <!-- PRODUCT CATEGORY BOX TAG -->
      <p class="product-category-box-tag">1360 items</p>
      <!-- /PRODUCT CATEGORY BOX TAG -->
    </a>
    <!-- /PRODUCT CATEGORY BOX -->

    <!-- PRODUCT CATEGORY BOX -->
    <a class="product-category-box category-featured" href="marketplace-category.html" >
      <!-- PRODUCT CATEGORY BOX TITLE -->
      <p class="product-category-box-title">Mboga Mboga</p>
      <!-- /PRODUCT CATEGORY BOX TITLE -->

      <!-- PRODUCT CATEGORY BOX TEXT -->
      <p class="product-category-box-text">Handpicked by us</p>
      <!-- /PRODUCT CATEGORY BOX TEXT -->

      <!-- PRODUCT CATEGORY BOX TAG -->
      <p class="product-category-box-tag">254 items</p>
      <!-- /PRODUCT CATEGORY BOX TAG -->
    </a>
    <!-- /PRODUCT CATEGORY BOX -->

    <!-- PRODUCT CATEGORY BOX -->
    <a class="product-category-box category-digital" href="marketplace-category.html" >
      <!-- PRODUCT CATEGORY BOX TITLE -->
      <p class="product-category-box-title">Nafaka</p>
      <!-- /PRODUCT CATEGORY BOX TITLE -->

      <!-- PRODUCT CATEGORY BOX TEXT -->
      <p class="product-category-box-text">Logos, banners...</p>
      <!-- /PRODUCT CATEGORY BOX TEXT -->

      <!-- PRODUCT CATEGORY BOX TAG -->
      <p class="product-category-box-tag">1207 items</p>
      <!-- /PRODUCT CATEGORY BOX TAG -->
    </a>
    <!-- /PRODUCT CATEGORY BOX -->

    <!-- PRODUCT CATEGORY BOX -->
    <a class="product-category-box category-physical" href="marketplace-category.html" >
      <!-- PRODUCT CATEGORY BOX TITLE -->
      <p class="product-category-box-title">Bidhaa zitokanazo na Wanyama</p>
      <!-- /PRODUCT CATEGORY BOX TITLE -->

      <!-- PRODUCT CATEGORY BOX TEXT -->
      <p class="product-category-box-text">Prints, joysticks...</p>
      <!-- /PRODUCT CATEGORY BOX TEXT -->

      <!-- PRODUCT CATEGORY BOX TAG -->
      <p class="product-category-box-tag">153 items</p>
      <!-- /PRODUCT CATEGORY BOX TAG -->
    </a>
    <!-- /PRODUCT CATEGORY BOX -->
    <!-- PRODUCT CATEGORY BOX -->
    <a class="product-category-box category-physical" href="marketplace-category.html">
      <!-- PRODUCT CATEGORY BOX TITLE -->
      <p class="product-category-box-title">Asali</p>
      <!-- /PRODUCT CATEGORY BOX TITLE -->

      <!-- PRODUCT CATEGORY BOX TEXT -->
      <p class="product-category-box-text">Prints, joysticks...</p>
      <!-- /PRODUCT CATEGORY BOX TEXT -->

      <!-- PRODUCT CATEGORY BOX TAG -->
      <p class="product-category-box-tag">153 items</p>
      <!-- /PRODUCT CATEGORY BOX TAG -->
    </a>
    <!-- /PRODUCT CATEGORY BOX -->
    <!-- PRODUCT CATEGORY BOX -->
    <a class="product-category-box category-physical" href="marketplace-category.html">
      <!-- PRODUCT CATEGORY BOX TITLE -->
      <p class="product-category-box-title">Bidhaa zitokanazo na Wanyama</p>
      <!-- /PRODUCT CATEGORY BOX TITLE -->

      <!-- PRODUCT CATEGORY BOX TEXT -->
      <p class="product-category-box-text">Prints, joysticks...</p>
      <!-- /PRODUCT CATEGORY BOX TEXT -->

      <!-- PRODUCT CATEGORY BOX TAG -->
      <p class="product-category-box-tag">153 items</p>
      <!-- /PRODUCT CATEGORY BOX TAG -->
    </a>
    <!-- /PRODUCT CATEGORY BOX -->
  </div>
  <!-- /GRID -->

  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">See what's new!</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Latest Items</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->

    <!-- SECTION HEADER ACTIONS -->
    <div class="section-header-actions">
      <!-- SECTION HEADER ACTION -->
      <a class="section-header-action" href="marketplace-category.html">Browse All Latest</a>
      <!-- /SECTION HEADER ACTION -->
    </div>
    <!-- /SECTION HEADER ACTIONS -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- GRID -->
  <div class="grid grid-3-3-3-3 centered">
    <!-- PRODUCT PREVIEW -->
  @foreach($market_items as $market_item)
    <div class="product-preview">
      <!-- PRODUCT PREVIEW IMAGE -->
      <a href="/kilimofy/MarketPlace/{{$market_item->id}}">
        <figure class="product-preview-image liquid">
          <img src="/assets/img/marketplace/items/09.jpg" alt="item-09">
        </figure>
      </a>
      <!-- /PRODUCT PREVIEW IMAGE -->

      <!-- PRODUCT PREVIEW INFO -->
      <div class="product-preview-info">
        <!-- TEXT STICKER -->
        <p class="text-sticker"><span class="highlighted">$</span> 5.00</p>
        <!-- /TEXT STICKER -->

        <!-- PRODUCT PREVIEW TITLE -->
        <p class="product-preview-title"><a href="marketplace-product.html">People Illustrations Pack 01</a></p>
        <!-- /PRODUCT PREVIEW TITLE -->

        <!-- PRODUCT PREVIEW CATEGORY -->
        <p class="product-preview-category digital"><a href="marketplace-category.html">Illustrations</a></p>
        <!-- /PRODUCT PREVIEW CATEGORY -->

        <!-- PRODUCT PREVIEW TEXT -->
        <p class="product-preview-text">Pack that includes 6 people illustrations made with PS vectors. Photoshop files...</p>
        <!-- /PRODUCT PREVIEW TEXT -->
      </div>
      <!-- /PRODUCT PREVIEW INFO -->

      <!-- PRODUCT PREVIEW META -->
      <div class="product-preview-meta">
        <!-- PRODUCT PREVIEW AUTHOR -->
        <div class="product-preview-author">
          <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
          <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-18-20" data-src="/assets/img/avatar/02.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </a>
          <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

          <!-- PRODUCT PREVIEW AUTHOR TITLE -->
          <p class="product-preview-author-title">Posted By</p>
          <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

          <!-- PRODUCT PREVIEW AUTHOR TEXT -->
          <p class="product-preview-author-text"><a href="profile-timeline.html">Destroy Dex</a></p>
          <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW AUTHOR -->

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
      <!-- /PRODUCT PREVIEW META -->
    </div>
    <!-- /PRODUCT PREVIEW -->
  @endforeach

  </div>
  <!-- /GRID -->

</div>
@endsection
