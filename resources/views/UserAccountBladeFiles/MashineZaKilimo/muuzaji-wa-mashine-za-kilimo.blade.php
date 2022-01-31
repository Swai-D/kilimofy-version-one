@extends('LayoutBladeFiles.app-layout')
@section('title','Usafirishaji wa Bidhaa')
@section('menu-status-mashine','active')

@section('mini-user-fundi-active')
<!-- style="fill:yellow " -->
@endsection

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
            <div class="sidebar-menu-body accordion-content-linked">
              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-store-account.html">My Account</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-store-statement.html">Sales Statement</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-store-items.html">Manage Items</a>
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
          <p class="section-pretitle">Duka la Mashine za kilimo Safari</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Weka Mashine Dukani</h2>
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
      <div class="grid  grid-4-4-4 centered-on-mobile">
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
            <p class="create-entity-box-title">Mashine Za Kilimo</p>
            <!-- /CREATE ENTITY BOX TITLE -->

            <!-- CREATE ENTITY BOX TEXT -->
            <p class="create-entity-box-text">Share your Mashines with others!</p>
            <!-- /CREATE ENTITY BOX TEXT -->

            <!-- BUTTON -->
            <p class="button secondary full popup-make-trip-trigger">+Mashine</p>
            <!-- /BUTTON -->
          </div>
          <!-- /CREATE ENTITY BOX INFO -->
        </div>
        <!-- /CREATE ENTITY BOX -->

      @forelse($my_mashine_store as $mashine)
      <!-- BADGE ITEM PREVIEW -->
      <div class="badge-item-preview">
        <!-- BADGE ITEM PREVIEW IMAGE -->
        <img class="badge-item-preview-image" src="/Uploads/MashineImage/{{$mashine->Mashine_Image}}" alt="badge-gold-b" style="border-radius:10px;">
        <!-- /BADGE ITEM PREVIEW IMAGE -->

        <!-- BADGE ITEM PREVIEW INFO -->
        <div class="badge-item-preview-info">
          <!-- BADGE ITEM PREVIEW TITLE -->
          <p class="badge-item-preview-title">{{$mashine->Mashine_Name}}</p>
          <!-- /BADGE ITEM PREVIEW TITLE -->

          <!-- BADGE ITEM PREVIEW TEXT -->
          <p class="badge-item-preview-text">{{$mashine->Mashine_Work}}</p>
          <!-- /BADGE ITEM PREVIEW TEXT -->

          <!-- BADGE ITEM PREVIEW TIMESTAMP -->
          <p class="badge-item-preview-timestamp">Posted {{$mashine->created_at->diffForHumans()}}</p>
          <!-- /BADGE ITEM PREVIEW TIMESTAMP -->

          <div class="user-preview-actions">
            <!-- BUTTON -->
            <a href="/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/Edit-Mashine-page/{{$mashine->id}}"  class="button secondary small " style="margin: 5px;">Edit</a>

            <a href="/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/Delete-Mashine/{{$mashine->id}}" class="button  small " style="background-color:red;">Delete</a>
            <!-- /BUTTON -->

          </div>

        </div>
        <!-- /BADGE ITEM PREVIEW INFO -->
      </div>
      <!-- /BADGE ITEM PREVIEW -->
      @empty
      <p class="text-danger"> Huna Mashine yeyote ulioposti Dukani kwako kwa sasa!</p>
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
            <p class="user-short-description-title small"><a href="group-timeline.html">{{Auth::user()->user_name}}</a></p>
            <!-- /USER SHORT DESCRIPTION TITLE -->

            <!-- USER SHORT DESCRIPTION TEXT -->
            <p class="user-short-description-text regular">Group Organizer</p>
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
          <p class="sidebar-menu-link active">Mashine Info</p>
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
     <form class="form" action="/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/uza-mashine-za-kilimo" method="post" enctype="multipart/form-data">
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
        <p class="widget-box-title">Mashine Info</p>
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
                  <label for="group-name">Jina la Mashine</label>
                  <input type="text" id="group-name" name="Mashine_Name" value="{{old('Mashine_Name')}}" >
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
                  <label for="group-name">Kazi ya Mashine</label>
                  <input type="text" id="group-name" name="Mashine_Work" value="{{old('Mashine_Work')}}" >
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
                  <label for="group-tagline">Garama</label>
                  <input type="number" id="group-tagline" name="Mashine_Price"  min="0" value="{{old('Mashine_Price')}}" >
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
                  <textarea id="group-description" name="Mashine_Description" placeholder="Andika maelezo mafupi kuhusu Mashine..."></textarea>
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
                  <label for="group-tagline">Picha ya Mashine</label>
                  <input type="file" id="group-tagline" name="Mashine_Image" >
                  <input type="hidden"  name="Seller_Name" value="{{Auth::user()->name}}" >
                  <input type="hidden"  name="Seller_Id" value="{{Auth::user()->id}}" >
                  <input type="hidden"  name="Seller_Image_Path" value="{{Auth::user()->avatar}}" >
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
    <!-- /POPUP BOX CONTENT -->
  </div>
  <!-- /POPUP BOX BODY -->
</div>
<!-- /POPUP BOX -->
