@extends('LayoutBladeFiles.app-layout')
@section('title','Pembejeo Na Viwatilifu')

@section('mini-user-pembejeo-active')
style="fill:yellow "
@endsection

@section('menu-status-growth','active')
@section('discription-title','Pata Pembejeo Hapo Hapo Ulipo')
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
      <h2 class="section-title">Wauzaji wa Viwatilifu na Pembejeo <span class="highlighted">({{$user_location_pembejeo_na_viwatilifu_sellers_count}})</span></h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->


  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar v1">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FORM ROW -->
      <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item">
          <!-- FORM SELECT -->
          <div class="form-select">
            <label for="rating-reason">Tafuta ?</label>
            <select class="for" name="user_location">
              <option value="" selected disabled>Mkoa &amp; Wilaya Nyingine? </option>

              @foreach($places as $place)
                <option value="{{$place->Region}}, {{$place->District}}">{{$place->Region}} ({{$place->District}}) </option>
              @endforeach

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
          <p class="filter-tab-text">Newest Seller</p>
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

  <!-- GRID -->
  <div class="grid grid-3-3-3-3 centered">

    @forelse($user_location_pembejeo_na_viwatilifu_sellers as $bidhaa_info)
      <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/shopping-cart/{{$bidhaa_info->id}}">
          <figure class="product-preview-image liquid">
            <img src="/Uploads/ItemImages/{{$bidhaa_info->item_image}}" alt="item-01">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">Tsh</span> {{number_format($bidhaa_info->item_price)}} /=</p>
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/shopping-cart/{{$bidhaa_info->id}}">{{$bidhaa_info->item_name}}</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/shopping-cart/{{$bidhaa_info->id}}">{{$bidhaa_info->item_category}}</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->

          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">{{$bidhaa_info->item_description}}</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->

        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="/kilimofy/UserAccount/about_user_page/{{$bidhaa_info->seller_id}}-About-{{$bidhaa_info->seller_name}}-in-Kilimofy-Platform">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="/Uploads/avatars/{{$bidhaa_info->seller_image_location}}"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="/kilimofy/UserAccount/about_user_page/{{$bidhaa_info->seller_id}}-About-{{$bidhaa_info->seller_name}}-in-Kilimofy-Platform">{{$bidhaa_info->seller_name}}</a></p>
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
      @empty
      <p class="lead text-center text-danger"> Hatuna Muuzaji wa pembejeo na Viwatilifu kutoka {{$user_location}} ndani ya mfumo wetu kwa sasa !</p>
    @endforelse
  </div>
  <!-- /GRID -->

  @if($user_location_pembejeo_na_viwatilifu_sellers_count != 0)
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
