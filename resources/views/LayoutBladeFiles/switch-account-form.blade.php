<div class="popup-box small popup-review">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button popup-review-trigger">
    <!-- POPUP CLOSE BUTTON ICON -->
    <svg class="popup-close-button-icon icon-cross">
      <use xlink:href="#svg-cross"></use>
    </svg>
    <!-- /POPUP CLOSE BUTTON ICON -->
  </div>
  <!-- /POPUP CLOSE BUTTON -->

  <!-- POPUP BOX TITLE -->
  <p class="popup-box-title">Badilisha Akaunti ?</p>
  <!-- /POPUP BOX TITLE -->

  <!-- FORM -->
  <form class="form" action="/kilimofy/Change-Account/{{Auth::user()->id}}" method="post">
    @csrf
    <!-- FORM ROW -->
    <div class="form-row">
      <!-- FORM ITEM -->
      <div class="form-item">
        <!-- FORM RATING WRAP -->
        <div class="form-rating-wrap">
          <label>Kwa sasa Tunakutambua kama: <span style="color:Green;">{{Auth::user()->user_ocupation}}</span> </label>
        </div>
        <!-- /FORM RATING WRAP -->
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
          <label for="rating-reason">Akauti Mpya</label>
          <select class="for" name="user_ocupation">
            <option  selected disabled>Kazi ?</option>
            <option value="Mkulima">Mkulima</option>
            <option value="Muuza_Pembejeo">Muuzaji wa pembejeo Na Viwatilifu</option>
            <option value="Bwana_Shamba">Bwana Shamba (Afisa Ugavi)</option>
            <option value="Fundi">Fundi Wa Mashine Za Kilimo (Fundi)</option>
            <option value="Mashine_Za_Kilimo">Muuzaji Wa Mashine Za Kilimo</option>
            <option value="Dereva">Usafirishaji Wa Bidhaa Za Kilimo (Dereva)</option>
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
      <button type="submit" class="popup-box-action full button secondary">Save</button>
      <!-- /POPUP BOX ACTION -->

      <!-- POPUP BOX ACTION TEXT -->
      <p class="popup-box-action-text">Taarifa zako zote za Akaunti ya awali zitahifadhiwa, unaweza kuzipata wakati wowote utakapo rudia akaunti yako ya awali!</p>
      <!-- /POPUP BOX ACTION TEXT -->
    </div>
    <!-- /POPUP BOX ACTIONS -->
  </form>
  <!-- /FORM -->
</div>
