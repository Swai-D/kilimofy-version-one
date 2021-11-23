@extends('LayoutBladeFiles.user-account-layout')
@foreach($user as $user)

@section('title')
{{$user->name}}'s Store
@endsection
@section('store-menu-active', 'active')


@section('user-data')
<!-- SECTION -->
<section class="section">
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">{{$user->name}}'s</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Item Store <span class="highlighted">5</span></h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar centered v3">
    <!-- FILTER TABS -->
    <div class="filter-tabs">
      <!-- FILTER TAB -->
      <div class="filter-tab">
        <!-- FILTER TAB TEXT -->
        <p class="filter-tab-text">Best Sellers</p>
        <!-- /FILTER TAB TEXT -->
      </div>
      <!-- /FILTER TAB -->

      <!-- FILTER TAB -->
      <div class="filter-tab active">
        <!-- FILTER TAB TEXT -->
        <p class="filter-tab-text">Recently Added</p>
        <!-- /FILTER TAB TEXT -->
      </div>
      <!-- /FILTER TAB -->

      <!-- FILTER TAB -->
      <div class="filter-tab">
        <!-- FILTER TAB TEXT -->
        <p class="filter-tab-text">Best Rated</p>
        <!-- /FILTER TAB TEXT -->
      </div>
      <!-- /FILTER TAB -->

      <!-- FILTER TAB -->
      <div class="filter-tab">
        <!-- FILTER TAB TEXT -->
        <p class="filter-tab-text">Lowest Price</p>
        <!-- /FILTER TAB TEXT -->
      </div>
      <!-- /FILTER TAB -->

      <!-- FILTER TAB -->
      <div class="filter-tab">
        <!-- FILTER TAB TEXT -->
        <p class="filter-tab-text">Highest Price</p>
        <!-- /FILTER TAB TEXT -->
      </div>
      <!-- /FILTER TAB -->
    </div>
    <!-- /FILTER TABS -->

    <!-- FORM -->
    <form class="form">
      <!-- FORM SELECT -->
      <div class="form-select">
        <label for="store-filter-category">Filter By</label>
        <select id="store-filter-category" name="store_filter_category">
          <option value="0">Best Sellers</option>
          <option value="1">Recently Added</option>
          <option value="2">Best Rated</option>
          <option value="3">Lowest Price</option>
          <option value="4">Highest Price</option>
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
  </div>
  <!-- /SECTION FILTERS BAR -->

  <!-- GRID -->
  <div class="grid grid-3-3-3-3 centered">
    <!-- PRODUCT PREVIEW -->
    <div class="product-preview">
      <!-- PRODUCT PREVIEW IMAGE -->
      <a href="marketplace-product.html">
        <figure class="product-preview-image liquid">
          <img src="/assets/img/marketplace/items/01.jpg" alt="item-01">
        </figure>
      </a>
      <!-- /PRODUCT PREVIEW IMAGE -->

      <!-- PRODUCT PREVIEW INFO -->
      <div class="product-preview-info">
        <!-- TEXT STICKER -->
        <p class="text-sticker"><span class="highlighted">$</span> 12.00</p>
        <!-- /TEXT STICKER -->

        <!-- PRODUCT PREVIEW TITLE -->
        <p class="product-preview-title"><a href="marketplace-product.html">Twitch Stream UI Pack</a></p>
        <!-- /PRODUCT PREVIEW TITLE -->

        <!-- PRODUCT PREVIEW CATEGORY -->
        <p class="product-preview-category digital"><a href="marketplace-category.html">Stream Packs</a></p>
        <!-- /PRODUCT PREVIEW CATEGORY -->

        <!-- PRODUCT PREVIEW TEXT -->
        <p class="product-preview-text">Awesome hexagon themed stream pack, you can change all colors and...</p>
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
              <div class="hexagon-image-18-20" data-src="/assets/img/avatar/01.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </a>
          <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

          <!-- PRODUCT PREVIEW AUTHOR TITLE -->
          <p class="product-preview-author-title">Posted By</p>
          <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

          <!-- PRODUCT PREVIEW AUTHOR TEXT -->
          <p class="product-preview-author-text"><a href="profile-timeline.html">Marina Valentine</a></p>
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

    <!-- PRODUCT PREVIEW -->
    <div class="product-preview">
      <!-- PRODUCT PREVIEW IMAGE -->
      <a href="marketplace-product.html">
        <figure class="product-preview-image liquid">
          <img src="/assets/img/marketplace/items/03.jpg" alt="item-03">
        </figure>
      </a>
      <!-- /PRODUCT PREVIEW IMAGE -->

      <!-- PRODUCT PREVIEW INFO -->
      <div class="product-preview-info">
        <!-- TEXT STICKER -->
        <p class="text-sticker"><span class="highlighted">$</span> 40.00</p>
        <!-- /TEXT STICKER -->

        <!-- PRODUCT PREVIEW TITLE -->
        <p class="product-preview-title"><a href="marketplace-product.html">Flaming Skull Team Logo</a></p>
        <!-- /PRODUCT PREVIEW TITLE -->

        <!-- PRODUCT PREVIEW CATEGORY -->
        <p class="product-preview-category digital"><a href="marketplace-category.html">Logos &amp; Badges</a></p>
        <!-- /PRODUCT PREVIEW CATEGORY -->

        <!-- PRODUCT PREVIEW TEXT -->
        <p class="product-preview-text">Get this incredible horned skull logo! It's really easy to change colors with the...</p>
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
              <div class="hexagon-image-18-20" data-src="/assets/img/avatar/01.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </a>
          <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

          <!-- PRODUCT PREVIEW AUTHOR TITLE -->
          <p class="product-preview-author-title">Posted By</p>
          <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

          <!-- PRODUCT PREVIEW AUTHOR TEXT -->
          <p class="product-preview-author-text"><a href="profile-timeline.html">Marina Valentine</a></p>
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

    <!-- PRODUCT PREVIEW -->
    <div class="product-preview">
      <!-- PRODUCT PREVIEW IMAGE -->
      <a href="marketplace-product.html">
        <figure class="product-preview-image liquid">
          <img src="/assets/img/marketplace/items/02.jpg" alt="item-13">
        </figure>
      </a>
      <!-- /PRODUCT PREVIEW IMAGE -->

      <!-- PRODUCT PREVIEW INFO -->
      <div class="product-preview-info">
        <!-- TEXT STICKER -->
        <p class="text-sticker"><span class="highlighted">$</span> 24.00</p>
        <!-- /TEXT STICKER -->

        <!-- PRODUCT PREVIEW TITLE -->
        <p class="product-preview-title"><a href="marketplace-product.html">American Football Team Page</a></p>
        <!-- /PRODUCT PREVIEW TITLE -->

        <!-- PRODUCT PREVIEW CATEGORY -->
        <p class="product-preview-category digital"><a href="marketplace-category.html">HTML Templates</a></p>
        <!-- /PRODUCT PREVIEW CATEGORY -->

        <!-- PRODUCT PREVIEW TEXT -->
        <p class="product-preview-text">Perfect template for American Football teams, with all you need, like results...</p>
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
              <div class="hexagon-image-18-20" data-src="/assets/img/avatar/01.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </a>
          <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

          <!-- PRODUCT PREVIEW AUTHOR TITLE -->
          <p class="product-preview-author-title">Posted By</p>
          <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

          <!-- PRODUCT PREVIEW AUTHOR TEXT -->
          <p class="product-preview-author-text"><a href="profile-timeline.html">Marina Valentine</a></p>
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

  </div>
  <!-- /GRID -->
  @include('LayoutBladeFiles.page-bar')
</section>
<!-- /SECTION -->
@endsection

@endforeach
