@extends('LayoutBladeFiles.app-layout')
@section('title','Usafirishaji wa Bidhaa')
@section('menu-status-transport','active')

@section('discription-title')
 Akaunti ya {{Auth::user()->user_name}}
@endsection

@section('discription-details','kilimofy')

<!-- CONTENT GRID -->
<div class="content-grid">

  <!-- SECTION BANNER -->
  @include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

  <!-- GRID -->
  <div class="grid grid-3-9 medium-space">
    <!-- GRID COLUMN -->
    <div class="account-hub-sidebar">
      <!-- SIDEBAR BOX -->
      <div class="sidebar-box no-padding">
        <!-- SIDEBAR MENU -->
        <div class="sidebar-menu round-borders">
          <!-- SIDEBAR MENU ITEM -->
          <div class="sidebar-menu-item">
            <!-- SIDEBAR MENU HEADER -->
            <div class="sidebar-menu-header accordion-trigger-linked">
              <!-- SIDEBAR MENU HEADER ICON -->
              <svg class="sidebar-menu-header-icon icon-profile">
                <use xlink:href="#svg-profile"></use>
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
              <p class="sidebar-menu-header-title">My Profile</p>
              <!-- /SIDEBAR MENU HEADER TITLE -->

              <!-- SIDEBAR MENU HEADER TEXT -->
              <p class="sidebar-menu-header-text">Change your avatar &amp; cover, accept friends, read messages and more!</p>
              <!-- /SIDEBAR MENU HEADER TEXT -->
            </div>
            <!-- /SIDEBAR MENU HEADER -->

            <!-- SIDEBAR MENU BODY -->
            <div class="sidebar-menu-body accordion-content-linked">
              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-profile-info.html">Profile Info</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-profile-social.html">Social &amp; Stream</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-profile-notifications.html">Notifications</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-profile-messages.html">Messages</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-profile-requests.html">Friend Requests</a>
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
        <div class="product-preview fixed-height">
          <!-- PRODUCT PREVIEW IMAGE -->
          <a href="marketplace-product.html">
            <figure class="product-preview-image liquid">
              <img src="img/marketplace/items/01.jpg" alt="item-01">
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

            <!-- BUTTON -->
            <p class="button white full popup-manage-item-trigger">Edit Item</p>
            <!-- /BUTTON -->
          </div>
          <!-- /PRODUCT PREVIEW INFO -->
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
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="/assets/img/marketplace/items/04.jpg" alt="item-10">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <!-- <p class="text-sticker"><span class="highlighted">$</span> 26.00</p> -->
          <!-- /TEXT STICKER -->

          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">Duka Langu la,</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="marketplace-category.html">Pembejeo na Viwatilifu</a></p>
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
          <p class="sidebar-menu-link " style="color:green; font-size:16px;">Maelezo Juu ya kuposti Bidhaa</p>
          <!-- /SIDEBAR MENU LINK -->
          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link ">1.Picha iwe na Maudhui ya Kilimo</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">2.Picha iwe na Ubora mzuri</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">3.Maelwzo yawe Fasaha</p>
          <!-- /SIDEBAR MENU LINK -->

        </div>
        <!-- /SIDEBAR MENU BODY -->
      </div>
      <!-- /SIDEBAR MENU ITEM -->

    </div>
    <!-- /POPUP BOX SIDEBAR -->

    <!-- POPUP BOX CONTENT -->
    <div class="popup-box-content limited" data-simplebar>
      <!-- WIDGET BOX -->
      <div class="widget-box">
        <!-- WIDGET BOX TITLE -->
        <p class="widget-box-title">Taarifa ya Bidhaa</p>
        <!-- /WIDGET BOX TITLE -->

        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
          <!-- FORM -->

          <form class="form" action="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/post-item-page/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="item-name">Jina La Bidhaa</label>
                  <input type="text" id="item-name" name="item_name" value="{{old('item_name')}}" >
                  <input type="hidden" id="item-name" name="seller_id" value="{{Auth::user()->id}}">
                  <input type="hidden" id="item-name" name="seller_name" value="{{Auth::user()->user_name}}">
                  <input type="hidden" id="item-name" name="seller_image_location" value="{{Auth::user()->avatar}}">
                </div>
                <!-- /FORM INPUT -->
               <div class="text-danger">{{$errors->first('item_name')}}</div>
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="item-category">Aina ya Bidhaa</label>
                  <select id="item-category" name="item_category">
                    <option selected disabled>--Chagua--</option>
                    <option value="Pembejeo">Pembejeo</option>
                    <option value="Kiwatilifu">Kiwatilifu</option>
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
            <div class="text-danger">{{$errors->first('item_category')}}</div>
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="item-url">Gara Ya Bidhaa</label>
                  <input type="number" id="item-url" name="item_price" value="{{old('item_name')}}">
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            <div class="text-danger">{{$errors->first('item_price')}}</div>
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="item-url">Picha ya Bidhaa</label>
                  <input type="file" id="item-url" name="item_image"  style="">
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            <div class="text-danger">{{$errors->first('item_image')}}</div>
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small mid-textarea">
                  <textarea id="item-tags" name="item_description" placeholder="Andika maelezo mafupi ukielezea biashara yako, yasiyozidi maneno(30)..."></textarea>
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->
            <br>
            <!-- POPUP BOX SIDEBAR FOOTER -->
            <div class="popup-box-sidebar-footer">
              <!-- BUTTON -->

            <div class="row">
              <div class="col-6">
                  <button type="submit" class="button primary  popup-manage-item-trigger" style="background-color:green">Tuma</button>
              </div>
              <div class="col-6">
                  <button type="reset" class="button white  popup-manage-item-trigger" style="background-color:red">Futa</button>
              </div>
            </div>
              <!-- /BUTTON -->

              <!-- BUTTON -->

              <!-- /BUTTON -->
            </div>
            <!-- /POPUP BOX SIDEBAR FOOTER -->

          </form>
          <!-- /FORM -->
        </div>
        <!-- WIDGET BOX CONTENT -->
      </div>
      <!-- /WIDGET BOX -->
    </div>
    <!-- /POPUP BOX CONTENT -->
  </div>
  <!-- /POPUP BOX BODY -->
</div>
<!-- /POPUP BOX -->
