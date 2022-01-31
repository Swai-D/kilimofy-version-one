@extends('LayoutBladeFiles.app-layout')
@section('title','Pembejeo Na Viwatilifu')
@section('menu-status-store','active')
@section('discription-title')
Akaunti Ya {{Auth::user()->username}}
@endsection
@section('discription-details','kilimofy')
<div class="content-grid">
@include('LayoutBladeFiles.title-layout')
<!-- SECTION -->
<section class="section">
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Dukani kwa, <span style="color:#f33155"> {{Auth::user()->username}}</span></p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h5 class="section-title">Jumla ya Bidhaa <span class="highlighted">({{$total_items_in_my_store}})</span>, </h5>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

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
              <a class="sidebar-menu-link active" href="hub-store-statement.html">Bidhaa Sokoni</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <!-- <a class="sidebar-menu-link active" href="hub-store-items.html">Bidhaa Sokoni</a> -->
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <!-- <a class="sidebar-menu-link" href="hub-store-downloads.html">Downloads</a> -->
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
          <p class="section-pretitle">Dukani</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Manage Items</h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
      </div>
      <!-- /SECTION HEADER -->
      @if($errors->any())
      <h4 class="text-danger">{{$errors->first()}}</h4>
      @endif

      @if(session()->has('Message'))
        <div class="alert alert" role = "alert">
          <p class="lead" style="color: #f33155">
            {{session()->get('Message')}}
          </p>
        </div>
      @endif
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
            <!-- BUTTON -->
            <p class="button secondary full popup-manage-item-trigger">+Bidhaa</p>
            <!-- /BUTTON -->
          </div>
          <!-- /CREATE ENTITY BOX INFO -->
        </div>
        <!-- /CREATE ENTITY BOX -->

       @forelse($my_store as $store_details)
        <!-- PRODUCT PREVIEW -->
        <div class="product-preview fixed-height">
          <!-- PRODUCT PREVIEW IMAGE -->
          <a href="">
            <figure class="product-preview-image liquid">
              <img src="/Uploads/ItemImages/{{$store_details->item_image}}" alt="item-01">
            </figure>
          </a>
          <!-- /PRODUCT PREVIEW IMAGE -->

          <!-- PRODUCT PREVIEW INFO -->
          <div class="product-preview-info">
            <!-- TEXT STICKER -->
            <p class="text-sticker"><span class="highlighted">Tsh</span> {{number_format($store_details->item_price)}} /=</p>
            <!-- /TEXT STICKER -->

            <!-- PRODUCT PREVIEW TITLE -->
            <p class="product-preview-title"><a href="marketplace-product.html">{{$store_details->item_name}}</a></p>
            <!-- /PRODUCT PREVIEW TITLE -->

            <!-- PRODUCT PREVIEW CATEGORY -->
            <p class="product-preview-category digital"><a href="marketplace-category.html">{{$store_details->item_category}}</a></p>
            <!-- /PRODUCT PREVIEW CATEGORY -->

            <!-- USER PREVIEW ACTIONS -->
            <div class="user-preview-actions">
              <!-- BUTTON -->
              <a href="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page/Edit-Item/{{$store_details->id}}" class="button full secondary">Edit</a>
              <!-- /BUTTON -->

              <!-- BUTTON -->
              <a href="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page/Delete-Item/{{$store_details->id}}"class="button full " style="background-color:red;">Delete</a>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW ACTIONS -->

          </div>
          <!-- /PRODUCT PREVIEW INFO -->
        </div>
        @empty
        <p class="text-danger"> Hakuna bidhaa sokoni kwa sasa !</p>
      @endforelse
      </div>
      <!-- /GRID -->
    </div>
    <!-- /GRID COLUMN -->
  </div>
  <!-- /GRID -->

  {{ $my_store->links('vendor.pagination.custom')}}

</section>
<!-- /SECTION -->

</div>

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
          <p class="product-preview-title"><a href="">Duka Langu la,</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="">Pembejeo na Viwatilifu</a></p>
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
          <p class="sidebar-menu-link " style="color:green; font-size:16px;">Angalizo</p>
          <!-- /SIDEBAR MENU LINK -->
          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link ">1.Picha Nzuri</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">2.Maelezo Fasaha</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">3.Bidhaa yakweli na Uhakika</p>
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
                  <input type="hidden" id="item-name" name="seller_name" value="{{Auth::user()->name}}">
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
                    <option value="Mashine">Mashine</option>
                    <option value="Mbegu">Mbegu</option>
                    <option value="Mbolea">Mbolea</option>
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
                  <label for="item-url">Garama Ya Bidhaa</label>
                  <input type="number" id="item-url" name="item_price" value="{{old('item_price')}}">
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


<!-- POPUP BOX -->
<div class="popup-box mid popup-manage-edit-item">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button popup-manage-edit-item-trigger">
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
          <p class="product-preview-title"><a href="">Duka Langu la,</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->

          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="">Pembejeo na Viwatilifu</a></p>
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
                  <input type="hidden" id="item-name" name="seller_name" value="{{Auth::user()->name}}">
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
                    <option value="Mashine">Mashine</option>
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
                  <button type="submit" class="button primary  popup-manage-edit-item-trigger" style="background-color:green">Tuma</button>
              </div>
              <div class="col-6">
                  <button type="reset" class="button white  popup-manage-edit-item-trigger" style="background-color:red">Futa</button>
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
