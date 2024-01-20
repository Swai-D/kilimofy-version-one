@extends('LayoutBladeFiles.app-layout')
@section('title','Pembejeo')
@section('discription-title','Pembejeo mbalimbali')
@section('discription-details','Chagua pembejeo yako ndani ya kilimofy')
@section('menu-status-overview','active')
@section('content')
<!-- CONTENT GRID -->
  <div class="content-grid">
    <!-- SECTION BANNER -->
    <div class="section-banner">
      <!-- SECTION BANNER ICON -->
      <img class="section-banner-icon" src="/assets/img/banner/accounthub-icon.png" alt="accounthub-icon">
      <!-- /SECTION BANNER ICON -->

      <!-- SECTION BANNER TITLE -->
      <p class="section-banner-title">Account Hub</p>
      <!-- /SECTION BANNER TITLE -->

      <!-- SECTION BANNER TEXT -->
      <p class="section-banner-text">Profile info, messages, settings and much more!</p>
      <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- GRID -->
    <div class="grid grid-3-9 medium-space">
      <!-- GRID COLUMN -->
      <div class="account-hub-sidebar">
        <!-- SIDEBAR BOX -->
        <div class="sidebar-box no-padding">
          <!-- SIDEBAR MENU -->
          <div class="sidebar-menu round-borders">
            <div class="sidebar-menu-item">
              <!-- SIDEBAR MENU HEADER -->
              <div class="sidebar-menu-header accordion-trigger-linked">
                <!-- SIDEBAR MENU HEADER ICON -->
                <svg class="sidebar-menu-header-icon icon-store">
                  <use xlink:href="#svg-store"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER ICON -->

                <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                <div class="sidebar-menu-header-control-icon">
                  <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                  <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                    <use xlink:href="#svg-minus-small"></use>
                  </svg>
                  <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                  <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                  <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                </div>
                <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                <!-- SIDEBAR MENU HEADER TITLE -->
                <p class="sidebar-menu-header-title">My Store</p>
                <!-- /SIDEBAR MENU HEADER TITLE -->

                <!-- SIDEBAR MENU HEADER TEXT -->
                <p class="sidebar-menu-header-text">Review your account, manage products check stats and much more!</p>
                <!-- /SIDEBAR MENU HEADER TEXT -->
              </div>
              <!-- /SIDEBAR MENU HEADER -->

              <!-- SIDEBAR MENU BODY -->
              <div class="sidebar-menu-body accordion-content-linked accordion-open">
                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link" href="hub-store-account.html">My Account</a>
                <!-- /SIDEBAR MENU LINK -->

                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link" href="hub-store-statement.html">Sales Statement</a>
                <!-- /SIDEBAR MENU LINK -->

                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link active" href="hub-store-items.html">Manage Items</a>
                <!-- /SIDEBAR MENU LINK -->

                <!-- SIDEBAR MENU LINK -->
                <a class="sidebar-menu-link" href="hub-store-downloads.html">Downloads</a>
                <!-- /SIDEBAR MENU LINK -->
              </div>
              <!-- /SIDEBAR MENU BODY -->
            </div>
            <!-- /SIDEBAR MENU ITEM -->
          </div>
          <!-- /SIDEBAR MENU -->
        </div>
        <!-- /SIDEBAR BOX -->
      </div>
      <!-- /GRID COLUMN -->

      <!-- GRID COLUMN -->
      <div class="account-hub-content">
        <!-- SECTION HEADER -->
        <div class="section-header">
          <!-- SECTION HEADER INFO -->
          <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle">My Store</p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            <h2 class="section-title">Manage Items</h2>
            <!-- /SECTION TITLE -->
          </div>
          <!-- /SECTION HEADER INFO -->
        </div>
        <!-- /SECTION HEADER -->

        <!-- GRID -->
        <div class="grid grid-3-3-3 centered-on-mobile">
          <!-- CREATE ENTITY BOX -->
          <div class="create-entity-box v2">
            <!-- CREATE ENTITY BOX COVER -->
            <div class="create-entity-box-cover"></div>
            <!-- /CREATE ENTITY BOX COVER -->

            <!-- CREATE ENTITY BOX AVATAR -->
            <div class="create-entity-box-avatar primary">
              <!-- CREATE ENTITY BOX AVATAR ICON -->
              <svg class="create-entity-box-avatar-icon icon-item">
                <use xlink:href="#svg-item"></use>
              </svg>
              <!-- /CREATE ENTITY BOX AVATAR ICON -->
            </div>
            <!-- /CREATE ENTITY BOX AVATAR -->

            <!-- CREATE ENTITY BOX INFO -->
            <div class="create-entity-box-info">
              <!-- CREATE ENTITY BOX TITLE -->
              <p class="create-entity-box-title">Your Item Name Here</p>
              <!-- /CREATE ENTITY BOX TITLE -->

              <!-- CREATE ENTITY BOX CATEGORY -->
              <p class="create-entity-box-category">Category</p>
              <!-- /CREATE ENTITY BOX CATEGORY -->

              <!-- BUTTON -->
              <p class="button primary full popup-manage-item-trigger">Create New Item!</p>
              <!-- /BUTTON -->
            </div>
            <!-- /CREATE ENTITY BOX INFO -->
          </div>
          <!-- /CREATE ENTITY BOX -->

          <!-- PRODUCT PREVIEW -->
         @foreach($items as $item)
         <div class="product-preview fixed-height">
           <!-- PRODUCT PREVIEW IMAGE -->
           <a href="marketplace-product.html">
             <figure class="product-preview-image liquid">
               <img src="/Uploads/ItemsImages/{{$item->item_image}}" alt="item-01">
             </figure>
           </a>
           <!-- /PRODUCT PREVIEW IMAGE -->

           <!-- PRODUCT PREVIEW INFO -->
           <div class="product-preview-info">
             <!-- TEXT STICKER -->
             <p class="text-sticker"><span class="highlighted">$</span> 12.00</p>
             <!-- /TEXT STICKER -->

             <!-- PRODUCT PREVIEW TITLE -->
             <p class="product-preview-title"><a href="">Twitch Stream UI Pack</a></p>
             <!-- /PRODUCT PREVIEW TITLE -->

             <!-- PRODUCT PREVIEW CATEGORY -->
             @if($item->stats != null)
                <p class="product-preview-category digital"><a href="marketplace-category.html" style="color: #f33155">{{$item->stats}}</a></p>
             @endif
             <!-- /PRODUCT PREVIEW CATEGORY -->

             <!-- BUTTON -->
             <p class="button white full popup-manage-item-trigger">Edit Item</p>
             <!-- /BUTTON -->
           </div>
           <!-- /PRODUCT PREVIEW INFO -->
         </div>
         @endforeach

          </div>
          <!-- /PRODUCT PREVIEW -->
        </div>
        <!-- /GRID -->
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

  <!-- POPUP BOX -->
  <div class="popup-box mid popup-manage-item">
    <!-- POPUP CLOSE BUTTON -->
    <div class="popup-close-button popup-manage-item-trigger">
      <!-- POPUP CLOSE BUTTON ICON -->
      <svg class="popup-close-button-icon icon-cross">
        <use xlink:href="#svg-cross"></use>
      </svg>
      <!-- /POPUP CLOSE BUTTON ICON -->
    </div>
    <!-- /POPUP CLOSE BUTTON -->

    <!-- POPUP BOX BODY -->
    <div class="popup-box-body">
      <!-- POPUP BOX SIDEBAR -->
      <div class="popup-box-sidebar">
        <!-- PRODUCT PREVIEW -->
        <div class="product-preview">

          <!-- PRODUCT PREVIEW INFO -->
          <div class="product-preview-info">
            <!-- TEXT STICKER -->
            <!-- <p class="text-sticker"><span class="highlighted">$</span> 26.00</p> -->
            <!-- /TEXT STICKER -->

            <!-- PRODUCT PREVIEW TITLE -->
            <p class="product-preview-title"><a href="marketplace-product.html">Pixel Diamond Gaming Magazine</a></p>
            <!-- /PRODUCT PREVIEW TITLE -->

            <!-- PRODUCT PREVIEW CATEGORY -->
            <p class="product-preview-category digital"><a href="marketplace-category.html">HTML Templates</a></p>
            <!-- /PRODUCT PREVIEW CATEGORY -->
          </div>
          <!-- /PRODUCT PREVIEW INFO -->
        </div>
        <!-- /PRODUCT PREVIEW -->

        <!-- SIDEBAR MENU ITEM -->
        <div class="sidebar-menu-item">
          <!-- SIDEBAR MENU BODY -->
          <div class="sidebar-menu-body">
            <!-- SIDEBAR MENU LINK -->
            <p class="sidebar-menu-link active">Taarifa ya Bidhaa</p>
            <!-- /SIDEBAR MENU LINK -->

            <!-- SIDEBAR MENU LINK -->
            <p class="sidebar-menu-link">Preview Images</p>
            <!-- /SIDEBAR MENU LINK -->

            <!-- SIDEBAR MENU LINK -->
            <p class="sidebar-menu-link">Description</p>
            <!-- /SIDEBAR MENU LINK -->

            <!-- SIDEBAR MENU LINK -->
            <p class="sidebar-menu-link">Pack Files</p>
            <!-- /SIDEBAR MENU LINK -->
          </div>
          <!-- /SIDEBAR MENU BODY -->
        </div>
        <!-- /SIDEBAR MENU ITEM -->

        <!-- POPUP BOX SIDEBAR FOOTER -->

        <!-- /POPUP BOX SIDEBAR FOOTER -->
      </div>
      <!-- /POPUP BOX SIDEBAR -->

      <!-- POPUP BOX CONTENT -->
      <div class="popup-box-content limited" data-simplebar>
        <form class="form" action="/kilimofy/Item/add-item" method="post" enctype="multipart/form-data">
            @csrf
          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Taarifa ya Bidhaa</p>
            <!-- /WIDGET BOX TITLE -->

            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- FORM -->

                <!-- FORM ROW -->
                <div class="form-row">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                      <label for="item-name">Jina la Bidhaa</label>
                      <input type="text" id="item-name" name="item_name"  value="{{old('item_name')}}"/>
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                      <p class="lead" style="color: #f33155">
                        {{$errors->first('item_name')}}
                      </p>
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM SELECT -->
                    <div class="form-select">
                      <label for="item-category">--Kundi la Bidhaa--</label>
                      <select id="item-category" name="item_category" value="{{old('item_category')}}">
                        <option value="" selected disabled>--Chagu--</option>
                        <option value="matuda">Matunda</option>
                        <option value="mboga_mboga">Mboga Mboga</option>
                        <option value="Nafaka">Nafaka</option>
                        <option value="Asali">Asali</option>
                        <option value="bidhaa_zitokanazo_na_wanyamya">Bidhaa zitokanazo na wanyama</option>

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
                <p class="lead" style="color: #f33155">
                    {{$errors->first('item_name')}}
                  </p>
              </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM COUNTER WRAP -->
                    <div class="form-counter-wrap">
                      <label>Garama ya Bidhaa</label>
                      <!-- FORM COUNTER -->
                      <div class="form-item">
                        <!-- FORM INPUT -->
                        <div class="form-input small active">
                          <label for="item-name"></label>
                          <input type="number" id="item-name" name="item_price"/ value="{{old('item_price')}}" class="form-input" style="border:1px solid black;">
                        </div>
                        <!-- /FORM INPUT -->
                      </div>
                      <!-- /FORM COUNTER -->
                    </div>
                    <!-- /FORM COUNTER WRAP -->
                    <!-- /FORM ITEM -->
                    <p class="lead" style="color: #f33155">
                        {{$errors->first('item_name')}}
                    </p>
                  </div>
                  <!-- /FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM COUNTER WRAP -->
                    <div class="form-counter-wrap">
                      <label>Eneo Bidhaa Ipo</label>
                      <!-- FORM COUNTER -->
                      <div class="form-item">
                        <!-- FORM INPUT -->
                        <div class="form-input small active">
                          <label for="item-name"></label>
                          <input type="text" id="item-name" name="item_location"/ value="{{old('item_location')}}">
                        </div>
                        <!-- /FORM INPUT -->
                      </div>
                      <!-- /FORM COUNTER -->
                    </div>
                    <!-- /FORM COUNTER WRAP -->
                    <p class="lead" style="color: #f33155">
                        {{$errors->first('item_name')}}
                    </p>
                  </div>

                </div>
                <!-- /FORM ROW -->
                <!-- FORM ROW -->
                <!-- /FORM ROW -->
                <div class="form-row">
                    <p class="sidebar-box-title"><b>Garama za Usafirishaji</b></p>
                    <br>
                  <div class="checkbox-wrap">
                    <input type="radio" id="payment-paypal" name="item_trasport_cost" value="mteja_atalipia" checked>
                    <!-- CHECKBOX BOX -->
                    <div class="checkbox-box round"></div>
                    <!-- /CHECKBOX BOX -->
                    <label class="accordion-trigger-linked" for="payment-paypal">Mteja</label>

                    <!-- CHECKBOX INFO -->
                    <div class="checkbox-info accordion-content-linked accordion-open">
                      <!-- CHECKBOX INFO TEXT -->
                      <p class="checkbox-info-text">Mteja atalipia mwenyewe garama zote za usafirishaji wa bidhaa yake</p>
                      <!-- /CHECKBOX INFO TEXT -->
                    </div>
                    <!-- /CHECKBOX INFO -->
                  </div>
                  <!-- /CHECKBOX WRAP -->

                  <!-- CHECKBOX WRAP -->
                  <div class="checkbox-wrap">
                    <input type="radio" id="payment-debit-credit" name="item_trasport_cost" value="muuzaji_atalipia">
                    <!-- CHECKBOX BOX -->
                    <div class="checkbox-box round"></div>
                    <!-- /CHECKBOX BOX -->
                    <label class="accordion-trigger-linked" for="payment-debit-credit">Muuzaji</label>

                    <!-- CHECKBOX INFO -->
                    <div class="checkbox-info accordion-content-linked">
                      <!-- CHECKBOX INFO TEXT -->
                      <p class="checkbox-info-text">Muuzaji atalipia mwenyewe garama zote za usafirishaji wa bidhaa</p>
                      <!-- /CHECKBOX INFO TEXT -->
                    </div>
                    <!-- /CHECKBOX INFO -->
                  </div>
                </div>
                <!-- FORM ROW -->
                <div class="form-row">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small mid-textarea">
                      <textarea id="item-tags" name="item_description" placeholder="maelezo kuusu bidhaa"></textarea>
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small mid-textarea">
                      <input type="file" id="item-files" name="item_image"/>
                      <input type="hidden" id="item-files" name="seller_id" value="{{Auth::user()->id}}"/>
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                  <p class="lead" style="color: #f33155">
                      {{$errors->first('item_name')}}
                  </p>
                </div>
                <!-- /FORM ROW -->
                <div class="popup-box-actions medium void">
                  <!-- POPUP BOX ACTION -->
                  <button class="popup-box-action  button secondary" type="reset">Futa</button>
                  <button class="popup-box-action  button secondary" type="submit">Tuma</button>
                  <!-- /POPUP BOX ACTION -->
                </div>

            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->
        </form>
      <!-- /FORM -->
      </div>
      <!-- /POPUP BOX CONTENT -->
    </div>
    <!-- /POPUP BOX BODY -->
  </div>
  <!-- /POPUP BOX -->
  @endsection
