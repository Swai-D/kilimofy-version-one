@extends('LayoutBladeFiles.app-layout')
@section('title','Usafirishaji wa Bidhaa')
@section('menu-status-driver','active')

@section('discription-title')
 Akaunti ya {{Auth::user()->name}}
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
              <a class="sidebar-menu-link" href="">My Account</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link active" href="">Andaa Safari</a>
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
          <p class="section-pretitle">Item</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Edit Item</h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
      </div>
      <!-- /SECTION HEADER -->

      <!-- GRID COLUMN -->
      <div class="grid-column">

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Edit Item</p>
          <!-- /WIDGET BOX TITLE -->

         @foreach($item_to_edit as $new_item)
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- FORM -->
            <form class="form" action="/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page/Edit-Item-store/{{$new_item->id}}" method="post" enctype="multipart/form-data">
              @csrf
              <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM INPUT -->
                  <div class="form-input small active">
                    <label for="item-name">Jina La Bidhaa</label>
                    <input type="text" id="item-name" name="item_name" value="{{old('item_name') ?? $new_item->item_name }}" >
                    <input type="hidden" id="item-name" name="seller_id" value="{{Auth::user()->id}}">
                    <input type="hidden" id="item-name" name="seller_name" value="{{Auth::user()->name}}">
                    <input type="hidden" id="item-name" name="seller_image_location" value="{{Auth::user()->avatar}}">
                  </div>
                  <!-- /FORM INPUT -->

                </div>
                <!-- /FORM ITEM -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM SELECT -->
                    <div class="form-select">
                      <label for="item-category">Aina ya Bidhaa</label>
                      <select id="item-category" name="item_category">
                        <option selected disabled>--Chagua--</option>
                        <option value="Pembejeo" {{ $new_item->item_category == 'Pembejeo' ? 'selected' : '' }}>Pembejeo</option>
                        <option value="Kiwatilifu" {{ $new_item->item_category == 'Kiwatilifu' ? 'selected' : '' }}>Kiwatilifu</option>
                        <option value="Mashine" {{ $new_item->item_category == 'Mashine' ? 'selected' : '' }}>Mashine</option>
                        <option value="Mbegu" {{ $new_item->item_category == 'Mbegu' ? 'selected' : '' }}>Mbegu</option>
                        <option value="Mbolea" {{ $new_item->item_category == 'Mbolea' ? 'selected' : '' }}>Mbolea</option>
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
              </div>
              <!-- /FORM ROW -->

              <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM INPUT -->
                  <div class="form-input small active">
                    <label for="item-url">Garama Ya Bidhaa</label>
                    <input type="number" id="item-url" name="item_price" value="{{old('item_price') ?? $new_item->item_name }}">
                  </div>
                  <!-- /FORM INPUT -->
                </div>
                <!-- /FORM ITEM -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                      <label for="item-url">Picha ya Bidhaa</label>
                      <input type="file" id="item-url" name="item_image"  value="{{old('item_image') ?? $new_item->item_image }}">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
              </div>
              <!-- /FORM ROW -->


                <!-- FORM ROW -->
              <div class="form-row split">
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

              <!-- BUTTON -->
              <button type="submit" class="button small secondary add-field-button">+ Save Changes</button>
              <!-- /BUTTON -->
            </form>
            <!-- /FORM -->

          </div>
          <!-- WIDGET BOX CONTENT -->
          @endforeach
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID COLUMN -->

  </div>
  <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->
