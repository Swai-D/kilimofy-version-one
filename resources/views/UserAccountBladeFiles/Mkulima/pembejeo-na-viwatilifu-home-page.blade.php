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

  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Get a quick look!</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Muongozo Wa Kilimo</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar v6">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FORM -->
      <form class="form">
        <!-- FORM ITEM -->
        <div class="form-item split">
          <!-- FORM INPUT -->
          <div class="form-input small">
            <label for="events-search">Tafuta Mkoa</label>
            <input type="text" id="events-search" name="events_search">
          </div>
          <!-- /FORM INPUT -->

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
        <!-- /FORM ITEM -->
      </form>
      <!-- /FORM -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- BUTTON -->
      <!-- <p class="button secondary popup-event-creation-trigger">+ Add New Event</p> -->
      <!-- /BUTTON -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->

<br>
  <!-- TABLE WRAP -->
  <div class="table-wrap" data-simplebar>
    <!-- TABLE -->
    <div class="table table-sales">
      <!-- TABLE HEADER -->
      <div class="table-header">
        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">SN</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->

        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column padded-left">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Mkoa</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->

        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column centered padded">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Wilaya</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->

        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column centered padded">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Zao la Chakula</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->

        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column centered padded">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Zao la Biashara</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->

        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column centered padded">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Udongo Ph</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->

        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column centered padded">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Aina ya Udongo</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->

        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column padded-left"></div>
        <!-- /TABLE HEADER COLUMN -->
      </div>
      <!-- /TABLE HEADER -->

      <!-- TABLE BODY -->
      <div class="table-body same-color-rows">
       @foreach($places as $place)
       <!-- TABLE ROW -->
       <div class="table-row micro">
         <!-- TABLE COLUMN -->
         <div class="table-column">
           <!-- TABLE TEXT -->
           <p class="table-text"><span class="light">{{$loop->iteration}}</span></p>
           <!-- /TABLE TEXT -->
         </div>
         <!-- /TABLE COLUMN -->

         <!-- TABLE COLUMN -->
         <div class="table-column padded-left">
           <!-- TABLE LINK -->
           <a class="table-link" href="#"><span class="highlighted">{{$place->Region}}</span></a>
           <!-- /TABLE LINK -->
         </div>
         <!-- /TABLE COLUMN -->

         <!-- TABLE COLUMN -->
         <div class="table-column centered padded">
           <!-- TABLE TITLE -->
           <p class="table-title">{{$place->District}}</p>
           <!-- /TABLE TITLE -->
         </div>
         <!-- /TABLE COLUMN -->

         <!-- TABLE COLUMN -->
         <div class="table-column centered padded">
          @if( $place->PriorityFoodCrops_1 != '')
           <!-- TABLE TEXT -->
           <p class="table-text"><span class="light">{{$place->PriorityFoodCrops_1}}</span></p>
           <!-- /TABLE TEXT -->
           @endif

           @if( $place->PriorityFoodCrops_2 != '')
            <!-- TABLE TEXT -->
            <p class="table-text"><span class="light">{{$place->PriorityFoodCrops_2}}</span></p>
            <!-- /TABLE TEXT -->
            @endif

            @if( $place->PriorityFoodCrops_3 != '')
             <!-- TABLE TEXT -->
             <p class="table-text"><span class="light">{{$place->PriorityFoodCrops_3}}</span></p>
             <!-- /TABLE TEXT -->
             @endif
         </div>
         <!-- /TABLE COLUMN -->

         <!-- TABLE COLUMN -->
         <div class="table-column centered padded">
         @if( $place->PriorityCashCrops_1 != '')
           <!-- TABLE TITLE -->
           <p class="table-title">{{$place->PriorityCashCrops_1}}</p>
           <!-- /TABLE TITLE -->
         @endif

         @if( $place->PriorityCashCrops_2 != '')
           <!-- TABLE TITLE -->
           <p class="table-title">{{$place->PriorityCashCrops_2}}</p>
           <!-- /TABLE TITLE -->
         @endif

         @if( $place->PriorityCashCrops_3 != '')
           <!-- TABLE TITLE -->
           <p class="table-title">{{$place->PriorityCashCrops_3}}</p>
           <!-- /TABLE TITLE -->
         @endif
         </div>
         <!-- /TABLE COLUMN -->

         <!-- TABLE COLUMN -->
         <div class="table-column centered padded">
           <!-- TABLE TEXT -->
           <p class="table-text"><span class="light">{{$place->SoilPh}}</span></p>
           <!-- /TABLE TEXT -->
         </div>
         <!-- /TABLE COLUMN -->

         <!-- TABLE COLUMN -->
         <div class="table-column centered padded">
           <!-- TABLE TITLE -->
           <p class="table-title">{{$place->SoilType}}</p>
           <!-- /TABLE TITLE -->
         </div>
         <!-- /TABLE COLUMN -->

         <!-- TABLE COLUMN -->
         <div class="table-column padded-left">
           <!-- PERCENTAGE DIFF ICON WRAP -->
           <div class="percentage-diff-icon-wrap positive">
             <!-- PERCENTAGE DIFF ICON -->
             <svg class="percentage-diff-icon icon-plus-small">
               <use xlink:href="#svg-plus-small"></use>
             </svg>
             <!-- /PERCENTAGE DIFF ICON -->
           </div>
           <!-- /PERCENTAGE DIFF ICON WRAP -->
         </div>
         <!-- /TABLE COLUMN -->

       </div>
       <!-- /TABLE ROW -->
       <br>
       @endforeach
      </div>
      <!-- /TABLE BODY -->
    </div>
    <!-- /TABLE -->
  </div>
  <!-- /TABLE WRAP -->

    {{ $places->links('vendor.pagination.custom') }}
  <br><br><br>
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

  <!-- GRID -->
  <div class="grid grid-3-3-3-3 centered">
  
    @forelse($user_location_pembejeo_na_viwatilifu_sellers as $key => $bidhaa_info)
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
  {{ $places->links('vendor.pagination.custom') }}
  <!-- /SECTION PAGER BAR -->
  @endif


</div>
