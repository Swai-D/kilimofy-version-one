<div class="popup-box small popup-call-guta">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button popup-call-guta-trigger">
    <!-- POPUP CLOSE BUTTON ICON -->
    <svg class="popup-close-button-icon icon-cross">
      <use xlink:href="#svg-cross"></use>
    </svg>
    <!-- /POPUP CLOSE BUTTON ICON -->
  </div>
  <!-- BADGE ITEM STAT -->
  <div class="badge-item-stat">

    <!-- BADGE ITEM STAT IMAGE PREVIEW -->
    <img class="badge-item-stat-image-preview" src="/assets/img/user_icon/shipment.png" alt="badge-bronze-s" style="width:32px; height:32px;">
    <!-- /BADGE ITEM STAT IMAGE PREVIEW -->

    <!-- BADGE ITEM STAT IMAGE -->
    <img class="badge-item-stat-image" src="/assets/img/user_icon/shipment.png" alt="badge-bronze-b">
    <!-- /BADGE ITEM STAT IMAGE -->

    <!-- BADGE ITEM STAT TITLE -->
    <p class="badge-item-stat-title">Guta</p>
    <!-- /BADGE ITEM STAT TITLE -->

    <!-- BADGE ITEM STAT TEXT -->
    <p class="badge-item-stat-text">Has posted more than 1 post on their profile</p>
    <!-- /BADGE ITEM STAT TEXT -->


  </div>
  <!-- /BADGE ITEM STAT -->

  <!-- FORM -->
  <form class="form" action="" method="">
    @csrf
    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="rating-reason">Kutokea ?</label>
          <select class="for" name="user_ocupation">
            <option value="" selected disabled>--Chagua Mkoa &amp; Wilaya--</option>

            @foreach($places as $place)
              <option value="{{$place->Region}},{{$place->District}}">{{$place->Region}} ({{$place->District}}) </option>
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
    <!-- PROGRESS STAT -->
    <div class="badge-item-stat">
      <!-- BUTTON -->
        <p class="badge-item-stat-title">Mpaka ?</p>
      <!-- /BUTTON -->

    </div>
    <!-- /PROGRESS STAT -->
    <div class="form-row">
      <div class="form-item">
        <input type="hidden" name="" value="">
      </div>
    </div>
    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="rating-reason">Mpaka ?</label>
          <select class="for" name="user_ocupation">
            <option value="" selected disabled>--Chagua Mkoa &amp; Wilaya--</option>

            @foreach($places as $place)
              <option value="{{$place->Region}},{{$place->District}}">{{$place->Region}} ({{$place->District}}) </option>
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


    <!-- POPUP BOX ACTIONS -->
    <div class="popup-box-actions full void">
      <!-- POPUP BOX ACTION -->
      <button type="submit" class="popup-box-action full button secondary">Call Guta</button>
      <!-- /POPUP BOX ACTION -->

      <!-- POPUP BOX ACTION TEXT -->
      <p class="popup-box-action-text">!</p>
      <!-- /POPUP BOX ACTION TEXT -->
    </div>
    <!-- /POPUP BOX ACTIONS -->
  </form>
  <!-- /FORM -->
</div>
