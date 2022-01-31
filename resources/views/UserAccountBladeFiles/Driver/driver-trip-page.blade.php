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
          <p class="section-pretitle">Safari</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Andaa Safari</h2>
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
        <div class="create-entity-box">
          <!-- CREATE ENTITY BOX COVER -->
          <div class="create-entity-box-cover"></div>
          <!-- /CREATE ENTITY BOX COVER -->

          <!-- CREATE ENTITY BOX AVATAR -->
          <div class="create-entity-box-avatar">
            <!-- CREATE ENTITY BOX AVATAR ICON -->
            <svg class="create-entity-box-avatar-icon icon-group">
              <use xlink:href="#svg-group"></use>
            </svg>
            <!-- /CREATE ENTITY BOX AVATAR ICON -->
          </div>
          <!-- /CREATE ENTITY BOX AVATAR -->

          <!-- CREATE ENTITY BOX INFO -->
          <div class="create-entity-box-info">
            <!-- CREATE ENTITY BOX TITLE -->
            <p class="create-entity-box-title">Andaa Safari</p>
            <!-- /CREATE ENTITY BOX TITLE -->

            <!-- CREATE ENTITY BOX TEXT -->
            <p class="create-entity-box-text">Share your trip with others!</p>
            <!-- /CREATE ENTITY BOX TEXT -->

            <!-- BUTTON -->
            <p class="button secondary full popup-make-trip-trigger">Andaa Safari</p>
            <!-- /BUTTON -->
          </div>
          <!-- /CREATE ENTITY BOX INFO -->
        </div>
        <!-- /CREATE ENTITY BOX -->

      @forelse($user_account_trip_details as $trip)
      <!-- USER PREVIEW -->
      <div class="user-preview small fixed-height-medium">
        <!-- USER PREVIEW COVER -->
        <figure class="user-preview-cover liquid">
          <img src="/assets/img/DriverImg/driver.png" alt="cover-29">
        </figure>
        <!-- /USER PREVIEW COVER -->

        <!-- USER PREVIEW INFO -->
        <div class="user-preview-info">
          <!-- USER SHORT DESCRIPTION -->
          <div class="user-short-description small">
            <!-- USER SHORT DESCRIPTION AVATAR -->
            <a class="user-short-description-avatar user-avatar no-stats" href="group-timeline.html">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-100-108"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->

              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-84-92" data-src="/assets/img/DriverImg/kirikuu.jpeg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /USER SHORT DESCRIPTION AVATAR -->

            <!-- USER SHORT DESCRIPTION TITLE -->
            <p class="user-short-description-title small"><a href="group-timeline.html">{{$trip->From}} <span style="color:red">-></span> {{$trip->To}}</a></p>
            <!-- /USER SHORT DESCRIPTION TITLE -->

          </div>

         <div class="user-preview-actions">
           <!-- BUTTON -->
           <a href="/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/Edit-Trip/{{$trip->id}}" class="button secondary full " style="padding:2px; margin:4px;">Edit Trip</a>
           <!-- /BUTTON -->
           <!-- BUTTON -->
           <a href="/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/Delete-Trip/{{$trip->id}}" class="button full" style="padding:2px; background-color: red; margin:4px;">Delete Trip</a>
         </div>

        </div>
        <!-- /USER PREVIEW INFO -->
      </div>
      <!-- /USER PREVIEW -->
      @empty
      <p></p>
      @endforelse
      </div>
      <!-- /GRID -->
    </div>
    <!-- /GRID COLUMN -->
  </div>
  <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->

<!-- POPUP BOX -->
<div class="popup-box mid popup-make-trip">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button popup-make-trip-trigger">
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
      <!-- USER PREVIEW -->
      <div class="user-preview small">
        <!-- USER PREVIEW COVER -->
        <figure class="user-preview-cover liquid">
          <img src="img/cover/29.jpg" alt="cover-29">
        </figure>
        <!-- /USER PREVIEW COVER -->

        <!-- USER PREVIEW INFO -->
        <div class="user-preview-info">
          <!-- USER SHORT DESCRIPTION -->
          <div class="user-short-description small">
            <!-- USER SHORT DESCRIPTION AVATAR -->
            <a class="user-short-description-avatar user-avatar no-stats" href="group-timeline.html">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-100-108"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->

              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-84-92" data-src="/Uploads/avatars/{{Auth::user()->avatar}}"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /USER SHORT DESCRIPTION AVATAR -->

            <!-- USER SHORT DESCRIPTION TITLE -->
            <p class="user-short-description-title small"><a href="group-timeline.html">{{Auth::user()->username}}</a></p>
            <!-- /USER SHORT DESCRIPTION TITLE -->

            <!-- USER SHORT DESCRIPTION TEXT -->
            <p class="user-short-description-text regular">Safari</p>
            <!-- /USER SHORT DESCRIPTION TEXT -->
          </div>
          <!-- /USER SHORT DESCRIPTION -->
        </div>
        <!-- /USER PREVIEW INFO -->
      </div>
      <!-- /USER PREVIEW -->

      <!-- SIDEBAR MENU ITEM -->
      <div class="sidebar-menu-item">
        <!-- SIDEBAR MENU BODY -->
        <div class="sidebar-menu-body secondary">
          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link active">Safari Info</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">Avatar and Cover</p> -->
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">Social Networks</p> -->
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">Settings</p> -->
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">Members</p> -->
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">Delete Group</p> -->
          <!-- /SIDEBAR MENU LINK -->
        </div>
        <!-- /SIDEBAR MENU BODY -->
      </div>
      <!-- /SIDEBAR MENU ITEM -->
     <form class="form" action="/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/Make-Trip" method="post" enctype="multipart/form-data">
       @csrf
      <!-- POPUP BOX SIDEBAR FOOTER -->
      <div class="popup-box-sidebar-footer">
        <!-- BUTTON -->
        <button type="submit" class="button secondary full popup-make-trip-trigger">Save!</>
        <!-- /BUTTON -->

        <!-- BUTTON -->
        <button type="reset" class="button white full popup-make-trip-trigger" style="background-color:red;">Delete</button>
        <!-- /BUTTON -->
      </div>
      <!-- /POPUP BOX SIDEBAR FOOTER -->
    </div>
    <!-- /POPUP BOX SIDEBAR -->

    <!-- POPUP BOX CONTENT -->
    <div class="popup-box-content">
      <!-- WIDGET BOX -->
      <div class="widget-box">
        <!-- WIDGET BOX TITLE -->
        <p class="widget-box-title">Safari Info</p>
        <!-- /WIDGET BOX TITLE -->

        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
          <!-- FORM -->


            <!-- FORM ROW -->
            <div class="form-row split">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="profile-job-1-year-started">Kutokea</label>
                  <select class="for" name="From">
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
                </div>
                <!-- /FORM SELECT -->
              </div>
              <!-- /FORM ITEM -->

              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="profile-job-1-year-ended">Kwenda</label>
                  <select class="for" name="To">
                    <option value="" selected disabled>Mkoa &amp; Wilaya ? </option>

                    @foreach($places as $place)
                      <option value="{{$place->Region}}, {{$place->District}}">{{$place->Region}} ({{$place->District}}) </option>
                    @endforeach

                  </select>
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

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <!-- FORM SELECT -->
              <div class="form-select">
                <label for="rating-reason">Usafir Gani ?</label>
                <select class="for" name="CarType">
                  <option value="" selected disabled>--Chagua Gari --</option>
                  <option value="Kirikuu">Kirikuu</option>
                  <option value="Kenta">Kenta</option>
                  <option value="Fuso">Fuso</option>
                </select>
                <!-- FORM SELECT ICON -->
                <svg class="form-select-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /FORM SELECT ICON -->
                </div>
              <!-- /FORM SELECT -->
                {{$errors->first('CarType')}}
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row split">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="group-tagline">Tarehe</label>
                  <input type="date" id="group-tagline" name="Date" value="{{old('Date')}}">
                </div>
                <!-- /FORM SELECT -->
                  {{$errors->first('Date')}}
              </div>
              <!-- /FORM ITEM -->

              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="group-tagline">Mda</label>
                  <input type="time" id="group-tagline" name="Time" value="{{old('Time')}}">
                </div>
                <!-- /FORM SELECT -->
                  {{$errors->first('Time')}}
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
                  <label for="group-tagline">Numba ya Gari</label>
                  <input type="text" id="group-tagline" name="CarAdress" style="text-transform: uppercase;" value="{{old('CarAdress')}}">
                </div>
                <!-- /FORM INPUT -->
              </div>
              <!-- /FORM ITEM -->
                {{$errors->first('CarAdress')}}
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="group-tagline">Numba ya Dereva</label>
                  <input type="number"  name="DriverPhoneNumber" min="0"  value="{{old('DriverPhoneNumber')}}">
                  </div>
                <!-- /FORM INPUT -->

              </div>
              <!-- /FORM ITEM -->
                {{$errors->first('DriverPhoneNumber')}}
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="item-category">Aina ya Sarafi</label>
                  <select id="item-category" name="TripType">
                    <option selected disabled>--Chagua--</option>
                    <option value="Kwenda Tu">Kwenda tu</option>
                    <option value="Kwena na Kurudi">Kwenda na Kurudi</option>

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
              <input type="hidden" name="DriverImageName" value="{{Auth::user()->avatar}}">
              <input type="hidden" name="DriverName" value="{{Auth::user()->username}}">
              <input type="hidden" name="Driver_ID" value="{{Auth::user()->id}}">
                {{$errors->first('TripType')}}
            </div>
            <!-- /FORM ROW -->


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
