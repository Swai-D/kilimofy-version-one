@extends('LayoutBladeFiles.app-layout')
@section('title','Usafirishaji Wa Mizigo')
@section('menu-status-shipment','active')
@section('discription-title','Usafirishaji')
@section('discription-details','Chagua Usafiri')
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
          <p class="section-pretitle">Safari</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Angalia Safari Zote</h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
      </div>
      <!-- /SECTION HEADER -->

      <!-- SECTION FILTERS BAR -->
      <div class="section-filters-bar v2">
        <!-- FORM -->
        <form class="form" action="/kilimofy/Usafirisaji/Tafuta-Usafiri" method="post">
          @csrf
          <!-- FORM ITEM -->
          <div class="form-item split medium">
            <!-- FORM SELECT -->
            <div class="form-select">
              <label for="rating-reason">Akauti Mpya</label>
              <select class="for" name="kutoka">
                <option value="" selected disabled>Mkoa &amp; Wilaya ? </option>

                @foreach($places as $place)
                  <option value="{{$place->Region}}, {{$place->District}}">{{$place->Region}} ({{$place->District}}) </option>
                @endforeach

              </select>
              <!-- FORM SELECT ICON -->
              <svg class="form-select-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
              </svg>
              <!-- /FORM SELECT ICON -->
                {{$errors->first('kutoka')}}
            </div>
            <!-- /FORM SELECT -->

            <!-- FORM SELECT -->
            <div class="form-select">
              <label for="rating-reason">Akauti Mpya</label>
              <select class="for" name="kwenda">
                <option value="" selected disabled>Mkoa &amp; Wilaya ? </option>

                @foreach($places as $place)
                  <option value="{{$place->Region}}, {{$place->District}}">{{$place->Region}} ({{$place->District}}) </option>
                @endforeach

              </select>
              <!-- FORM SELECT ICON -->
              <svg class="form-select-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
              </svg>
              <!-- /FORM SELECT ICON -->
                {{$errors->first('kwenda')}}
            </div>
            <!-- /FORM SELECT -->

            <!-- FORM SELECT -->
            <div class="form-select">
            </div>
            <!-- /FORM SELECT -->
            <!-- /FORM SELECT -->

            <!-- BUTTON -->
            <button type="submit" class="button secondary">Tafuta</button>
            <!-- /BUTTON -->
          </div>
          <!-- /FORM ITEM -->
        </form>
        <!-- /FORM -->
      </div>
      <!-- /SECTION FILTERS BAR -->



      <div class="grid grid-4-4-4 centered">

      @if(count($trip) > 0 )
        @foreach($trip as $safari)
        <!-- QUEST ITEM -->
          <div class="quest-item">
            <!-- QUEST ITEM COVER -->
            <figure class="quest-item-cover liquid">
              <img src="/assets/img/quest/cover/02.png" alt="cover-02">
            </figure>
            <!-- /QUEST ITEM COVER -->

            <!-- TEXT STICKER -->
            <p class="text-sticker small-text">
              <!-- TEXT STICKER ICON -->
              <svg class="text-sticker-icon icon-plus-small">
                <use xlink:href="#svg-plus-small"></use>
              </svg>
              <!-- TEXT STICKER ICON -->
              Posted {{$safari->created_at->format('M d, Y')}}
            </p>
            <!-- /TEXT STICKER -->

            <!-- QUEST ITEM INFO -->
            <div class="quest-item-info">
              <!-- QUEST ITEM BADGE -->
              <div class="quest-item-badge">
                <img src="/assets/img/user_icon/shipment.png" alt="completedq-b">
              </div>
              <!-- /QUEST ITEM BADGE -->
              <!-- CALENDAR EVENTS PREVIEW -->
              <div class="calendar-events-preview">
                <!-- CALENDAR EVENTS PREVIEW TITLE -->
                <p class="calendar-events-preview-title text-center" style="color:green;">{{$loop->iteration}}.  Taarifa ya Safari</p>
                <br><br>
                <p class="calendar-events-preview-text" ><span style="color:red;">Aina ya Gari:</span> <span style="color:green;">{{$safari->CarType}}</span> </p>
                <br>
                <p class="calendar-events-preview-text" ><span style="color:red;">Namba ya Gari:</span> <span style="color:green;text-transform: uppercase;">{{$safari->CarAdress}}</span> </p>
                <br>
                <p class="calendar-events-preview-text" ><span style="color:red;">Kutoka:</span> <span style="color:green;">{{$safari->From}}</span> </p>
                <br>
                <p class="calendar-events-preview-text" > <span style="color:red;">Kwenda: </span><span style="color:green;">{{$safari->To}}</span> </p>
                <br>
                <p class="calendar-events-preview-text" > <span style="color:red;">Tarehe: </span><span style="color:green;">{{$safari->Date}}</span> </p>
                <br>
                <p class="calendar-events-preview-text" > <span style="color:red;">Muda wa Kutoka: </span><span style="color:green;">{{$safari->Time}}</span> </p>
                <br>
                <p class="calendar-events-preview-text" > <span style="color:red;">Nafasi Ya: </span><span style="color:green;">Mzigo | Watu : 2 </span></p>
                <br>
                <p class="calendar-events-preview-text" > <span style="color:red;">Garama: </span><span style="color:green;">Makubaliano na Dereva</span></p>
                <!-- /CALENDAR EVENTS PREVIEW TITLE -->

                <br>
                <hr>
                <!-- CALENDAR EVENTS PREVIEW TITLE -->
                <p class="calendar-events-preview-title text-center" style="color:red;">Safar Ni {{$safari->TripType}}</p>
                <!-- /CALENDAR EVENTS PREVIEW TITLE -->

              </div>
              <!-- /CALENDAR EVENTS PREVIEW -->
              </div>
              <!-- /PROGRESS STAT -->
              <br>
              <!-- SOCIAL LINKS -->
              <div class="social-links small">
                <!-- SOCIAL LINK -->
                <p style="font-size:16px;">
                  <!-- SOCIAL LINK ICON -->
                  {{$safari->DriverPhoneNumber}}
                  <!-- /SOCIAL LINK ICON -->
                </p>

              </div>
              <!-- /SOCIAL LINKS -->

              <!-- QUEST ITEM META -->
              <div class="quest-item-meta">
                <!-- USER AVATAR LIST -->
                <div class="user-avatar-list">

                  <!-- USER AVATAR -->
                  <div class="user-avatar micro no-stats" style="margin-left:20px;">
                    <!-- USER AVATAR BORDER -->
                    <div class="user-avatar-border">
                      <!-- HEXAGON -->
                      <div class="hexagon-22-24"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BORDER -->

                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-18-20" data-src="/Uploads/avatars/{{$safari->DriverImageName}}"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                  </div>
                  <!-- /USER AVATAR -->
                </div>
                <!-- /USER AVATAR LIST -->

                <!-- QUEST ITEM META INFO -->
                <div class="quest-item-meta-info">
                  <!-- QUEST ITEM META TITLE -->

                  <p class="quest-item-meta-title">Posted by</p>
                  <!-- /QUEST ITEM META TITLE -->

                  <!-- QUEST ITEM META TEXT -->
                  <p class="quest-item-meta-text">{{$safari->DriverName}}</p>
                  <!-- /QUEST ITEM META TEXT -->
                </div>
                <!-- /QUEST ITEM META INFO -->
              </div>
              <!-- /QUEST ITEM META -->
            </div>
            <!-- /QUEST ITEM INFO -->
        @endforeach
      </div>
      <!-- /GRID -->

    @else


        @foreach($usafiri as $safari)
        <!-- QUEST ITEM -->
        <div class="quest-item">
          <!-- QUEST ITEM COVER -->
          <figure class="quest-item-cover liquid">
            <img src="/assets/img/quest/cover/02.png" alt="cover-02">
          </figure>
          <!-- /QUEST ITEM COVER -->

          <!-- TEXT STICKER -->
          <p class="text-sticker small-text">
            <!-- TEXT STICKER ICON -->
            <svg class="text-sticker-icon icon-plus-small">
              <use xlink:href="#svg-plus-small"></use>
            </svg>
            <!-- TEXT STICKER ICON -->
            Posted {{$safari->created_at->format('M d, Y')}}
          </p>
          <!-- /TEXT STICKER -->

          <!-- QUEST ITEM INFO -->
          <div class="quest-item-info">
            <!-- QUEST ITEM BADGE -->
            <div class="quest-item-badge">
              <img src="/assets/img/user_icon/shipment.png" alt="completedq-b">
            </div>
            <!-- /QUEST ITEM BADGE -->
            <!-- CALENDAR EVENTS PREVIEW -->
            <div class="calendar-events-preview">
              <!-- CALENDAR EVENTS PREVIEW TITLE -->
              <p class="calendar-events-preview-title text-center" style="color:green;">{{$loop->iteration}}.  Taarifa ya Safari</p>
              <br><br>
              <p class="calendar-events-preview-text" ><span style="color:red;">Aina ya Gari:</span> <span style="color:green;">{{$safari->CarType}}</span> </p>
              <br>
              <p class="calendar-events-preview-text" ><span style="color:red;">Namba ya Gari:</span> <span style="color:green;text-transform: uppercase;">{{$safari->CarAdress}}</span> </p>
              <br>
              <p class="calendar-events-preview-text" ><span style="color:red;">Kutoka:</span> <span style="color:green;">{{$safari->From}}</span> </p>
              <br>
              <p class="calendar-events-preview-text" > <span style="color:red;">Kwenda: </span><span style="color:green;">{{$safari->To}}</span> </p>
              <br>
              <p class="calendar-events-preview-text" > <span style="color:red;">Tarehe: </span><span style="color:green;">{{$safari->Date}}</span> </p>
              <br>
              <p class="calendar-events-preview-text" > <span style="color:red;">Muda wa Kutoka: </span><span style="color:green;">{{$safari->Time}}</span> </p>
              <br>
              <p class="calendar-events-preview-text" > <span style="color:red;">Nafasi Ya: </span><span style="color:green;">Mzigo | Watu : 2 </span></p>
              <br>
              <p class="calendar-events-preview-text" > <span style="color:red;">Garama: </span><span style="color:green;">Makubaliano na Dereva</span></p>
              <!-- /CALENDAR EVENTS PREVIEW TITLE -->

              <br>
              <hr>
              <!-- CALENDAR EVENTS PREVIEW TITLE -->
              <p class="calendar-events-preview-title text-center" style="color:red;">Safar Ni {{$safari->TripType}}</p>
              <!-- /CALENDAR EVENTS PREVIEW TITLE -->

            </div>
            <!-- /CALENDAR EVENTS PREVIEW -->
            </div>
            <!-- /PROGRESS STAT -->
            <br>
            <!-- SOCIAL LINKS -->
            <div class="social-links small">
              <!-- SOCIAL LINK -->
              <p style="font-size:16px;">
                <!-- SOCIAL LINK ICON -->
                {{$safari->DriverPhoneNumber}}
                <!-- /SOCIAL LINK ICON -->
              </p>

            </div>
            <!-- /SOCIAL LINKS -->

            <!-- QUEST ITEM META -->
            <div class="quest-item-meta">
              <!-- USER AVATAR LIST -->
              <div class="user-avatar-list">

                <!-- USER AVATAR -->
                <div class="user-avatar micro no-stats" style="margin-left:20px;">
                  <!-- USER AVATAR BORDER -->
                  <div class="user-avatar-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BORDER -->

                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-18-20" data-src="/Uploads/avatars/{{$safari->DriverImageName}}"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->
              </div>
              <!-- /USER AVATAR LIST -->

              <!-- QUEST ITEM META INFO -->
              <div class="quest-item-meta-info">
                <!-- QUEST ITEM META TITLE -->

                <p class="quest-item-meta-title">Posted by</p>
                <!-- /QUEST ITEM META TITLE -->

                <!-- QUEST ITEM META TEXT -->
                <p class="quest-item-meta-text">{{$safari->DriverName}}</p>
                <!-- /QUEST ITEM META TEXT -->
              </div>
              <!-- /QUEST ITEM META INFO -->
            </div>
            <!-- /QUEST ITEM META -->
          </div>
          <!-- /QUEST ITEM INFO -->

        @endforeach
        </div>
        <!-- /GRID -->
    @endif
</div>
<!-- /CONTENT GRID -->
