@extends('LayoutBladeFiles.app-layout')
@section('title','Pembejeo Na Viwatilifu')
@section('menu-status-growth','active')
@section('discription-title','Pata Pembejeo Hapo Hapo Ulipo')
@section('discription-details','kilimofy')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION BANNER -->
@include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Your Order</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Checkout</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->


  <!-- GRID -->
  <div class="grid grid-8-4 small-space">
    <!-- GRID COLUMN -->
    <div class="grid-column">
      <!-- WIDGET BOX -->
      <div class="widget-box">
        <!-- WIDGET BOX TITLE -->
        <p class="widget-box-title">Billing Details</p>
        <!-- /WIDGET BOX TITLE -->

        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
          <!-- FORM -->
          <form class="form">
            <!-- FORM ROW -->
            <div class="form-row split">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small">
                  <input type="text" id="billing-first-name" name="billing_first_name" value="{{Auth::user()->name}}">
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->

              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small">
                  <input type="text" id="billing-last-name" name="billing_last_name" value="{{Auth::user()->user_phone_number}}">
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->


            <!-- FORM ROW -->
            <div class="form-row split">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="billing-city">City</label>
                  <select id="billing-city" name="billing_city">
                    <option value="0">Select your City</option>
                    <option value="1">New York</option>
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

              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small">
                                  <input type="text" id="billing-zip-code" name="billing_zip_code" value="{{$item_number}}">
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
                <div class="form-input small">
                  <label for="billing-address">Full Address</label>
                  <input type="text" id="billing-address" name="billing_address">
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
                <div class="form-input small medium-textarea">
                  <textarea id="billing-details" name="billing_details" placeholder="Write any additional details here..."></textarea>
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->
          </form>
          <!-- /FORM -->
        </div>
        <!-- WIDGET BOX CONTENT -->
      </div>
      <!-- /WIDGET BOX -->
    </div>
    <!-- /GRID COLUMN -->

    <!-- GRID COLUMN -->
    <div class="grid-column">
      <!-- SIDEBAR BOX -->
      <div class="sidebar-box">
        <!-- SIDEBAR BOX TITLE -->
        <p class="sidebar-box-title">Order Summary</p>
        <!-- /SIDEBAR BOX TITLE -->

        <!-- SIDEBAR BOX ITEMS -->
        <div class="sidebar-box-items">
        @foreach($item_details as $item_details)
          <!-- TOTALS LINE LIST -->
          <div class="totals-line-list separator-bottom">
            <!-- TOTALS LINE -->
            <div class="totals-line">
              <!-- TOTALS LINE INFO -->
              <div class="totals-line-info">
                <!-- TOTALS LINE TITLE -->
                <p class="totals-line-title"><span class="bold">{{$item_details->item_name}}</span></p>
                <!-- /TOTALS LINE TITLE -->

                <!-- TOTALS LINE TEXT -->
                <p class="totals-line-text">{{$item_details->item_category}}</p>
                <!-- /TOTALS LINE TEXT -->
              </div>
              <!-- /TOTALS LINE INFO -->

              <!-- PRICE TITLE -->
              <p class="price-title"><span class="currency">Tsh</span> {{number_format($item_details->item_price)}} x 1</p>
              <!-- /PRICE TITLE -->
            </div>
            <!-- /TOTALS LINE -->

          </div>
          <!-- /TOTALS LINE LIST -->
        @endforeach
          <!-- PRICE TITLE -->
          <p class="price-title big separator-bottom"><span class="currency">Tsh</span> {{number_format($item_details->item_price)}}</p>
          <!-- /PRICE TITLE -->
        </div>
        <!-- /SIDEBAR BOX ITEMS -->

        <!-- SIDEBAR BOX TITLE -->
        <p class="sidebar-box-title">Payment Method</p>
        <!-- /SIDEBAR BOX TITLE -->

        <!-- SIDEBAR BOX ITEMS -->
        <div class="sidebar-box-items">
          <!-- FORM -->
          <form class="form">
            <!-- CHECKBOX WRAP -->
            <div class="checkbox-wrap">
              <input type="radio" id="payment-paypal" name="payment_type" value="payment-paypal" checked>
              <!-- CHECKBOX BOX -->
              <div class="checkbox-box round"></div>
              <!-- /CHECKBOX BOX -->
              <label class="accordion-trigger-linked" for="payment-paypal">Mobile Money</label>

              <!-- CHECKBOX INFO -->
              <div class="checkbox-info accordion-content-linked accordion-open">
                <!-- CHECKBOX INFO TEXT -->
                <p class="checkbox-info-text">Lipia kwa mitandao ya simu kama vile M-Pesa, Tigo-Pesa, Airtel-Money, Halo-Pesa na T-pesa, Ni raisi na salama zaidi.</p>
                <!-- /CHECKBOX INFO TEXT -->
              </div>
              <!-- /CHECKBOX INFO -->
            </div>
            <!-- /CHECKBOX WRAP -->

            <!-- CHECKBOX WRAP -->
            <div class="checkbox-wrap">
              <input type="radio" id="payment-debit-credit" name="payment_type" value="payment-debit-credit">
              <!-- CHECKBOX BOX -->
              <div class="checkbox-box round"></div>
              <!-- /CHECKBOX BOX -->
              <label class="accordion-trigger-linked" for="payment-debit-credit">Credit or Debit Card</label>

              <!-- CHECKBOX INFO -->
              <div class="checkbox-info accordion-content-linked">
                <!-- CHECKBOX INFO TEXT -->
                <p class="checkbox-info-text">Lipia kwa kadi ya Benki !.</p>
                <!-- /CHECKBOX INFO TEXT -->
              </div>
              <!-- /CHECKBOX INFO -->
            </div>
            <!-- /CHECKBOX WRAP -->
          </form>
          <!-- /FORM -->

          <!-- BUTTON -->
          <p class="button primary">Complete Order!</p>
          <!-- /BUTTON -->
        </div>
        <!-- /SIDEBAR BOX ITEMS -->
      </div>
      <!-- /SIDEBAR BOX -->
    </div>
    <!-- /GRID COLUMN -->
  </div>
  <!-- /GRID -->


</div>
<!-- /CONTENT GRID -->
