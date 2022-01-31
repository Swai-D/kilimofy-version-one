@extends('LayoutBladeFiles.user-account-layout')
@foreach($user as $user)

@section('title')
{{$user->name}}'s Videos
@endsection
@section('videos-menu-active', 'active')

@section('mini-user-profile-active')
 style="fill:yellow "
@endsection

@section('user-data')
<section class="section">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
          <!-- SECTION PRETITLE -->
          <p class="section-pretitle">{{$user->name}}'s</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Videos <span class="highlighted">{{$user_latest_video_count}}</span></h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->

      @if(Auth::user()->id == $user->id)
        <!-- SECTION HEADER ACTIONS -->
        <div class="section-header-actions">
          <!-- SECTION HEADER ACTION -->
          <p class="section-header-action">Add Video +</p>
          <!-- /SECTION HEADER ACTION -->
        </div>
        <!-- /SECTION HEADER ACTIONS -->

     @endif
      </div>
      <!-- /SECTION HEADER -->

      <!-- GRID -->
      <div class="grid grid-4-4-4 centered">
        @foreach($user_latest_video as $user_latest_video)
        <!-- VIDEO BOX -->
        <div class="video-box">
          <!-- VIDEO BOX COVER -->
          <div class="video-box">
            <!-- VIDEO BOX COVER IMAGE -->
            <video  style="width:100%;"  autoplay muted loop controls >
                  <source src="/Uploads/PostVideos/{{$user_latest_video->Video}}" type="video/mp4" >
           </video>
            <!-- /VIDEO BOX COVER IMAGE -->

          </div>
          <!-- /VIDEO BOX COVER -->

          <!-- VIDEO BOX INFO -->
          <div class="video-box-info">
            <!-- VIDEO BOX TITLE -->
            <p class="video-box-title">{{$user_latest_video->Caption}}</p>
            <!-- /VIDEO BOX TITLE -->

            <!-- VIDEO BOX TEXT -->
            <p class="video-box-text">{{$user_latest_video->created_at->diffForHumans()}}</p>
            <!-- /VIDEO BOX TEXT -->
          </div>
          <!-- /VIDEO BOX INFO -->
        </div>
        <!-- /VIDEO BOX -->
        @endforeach
      </div>
      <!-- /GRID -->
    </section>
    <!-- /SECTION -->
  </div>
  <!-- /CONTENT GRID -->

  @if($user_latest_video_count != 0)
    @include('LayoutBladeFiles.page-bar')
  @endif
  <!-- POPUP VIDEO -->
  <div class="popup-video">
    <!-- POPUP CLOSE BUTTON -->
    <div class="popup-close-button popup-video-trigger">
      <!-- POPUP CLOSE BUTTON ICON -->
      <svg class="popup-close-button-icon icon-cross">
        <use xlink:href="#svg-cross"></use>
      </svg>
      <!-- /POPUP CLOSE BUTTON ICON -->
    </div>
    <!-- /POPUP CLOSE BUTTON -->

    <!-- IFRAME WRAP -->
    <div class="iframe-wrap">
      <iframe src="https://www.youtube.com/embed/6ErE27RNLDQ?start=200" allowfullscreen></iframe>
    </div>
    <!-- /IFRAME WRAP -->
  </div>
  <!-- /POPUP VIDEO -->

@endsection
@endforeach

<!-- POPUP BOX -->
<div class="popup-box mid popup-manage-group">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button popup-manage-group-trigger">
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
          <p class="sidebar-menu-link active">Group Info</p>
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
     <form class="form" action="/kilimofy/Group/Create-Group" method="post" enctype="multipart/form-data">
       @csrf
      <!-- POPUP BOX SIDEBAR FOOTER -->
      <div class="popup-box-sidebar-footer">
        <!-- BUTTON -->
        <button type="submit" class="button secondary full popup-manage-group-trigger">Save!</>
        <!-- /BUTTON -->

        <!-- BUTTON -->
        <button type="reset" class="button white full popup-manage-group-trigger" style="background-color:red;">Delete</button>
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
        <p class="widget-box-title">Group Info</p>
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
                  <label for="group-name">Jina la Grupu</label>
                  <input type="text" id="group-name" name="Group_Name" >
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
                  <label for="group-tagline">Ujumbe wa Grupu</label>
                  <input type="text" id="group-tagline" name="Tagline" >
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
                  <textarea id="group-description" name="Description" placeholder="Andika maelezo mafupi kuhusu grupu..."></textarea>
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
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="item-category">Status ya Grupu</label>
                  <select id="item-category" name="Status">
                    <option selected disabled>--Chagua--</option>
                    <option value="Public">Public</option>
                    <option value="Private">Private</option>

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
                  <label for="group-tagline">Profile ya Grupu</label>
                  <input type="file" id="group-tagline" name="Group_Image" >
                  <input type="hidden"  name="Creator_Name" value="{{Auth::user()->name}}" >
                  <input type="hidden"  name="Creator_Id" value="{{Auth::user()->id}}" >
                  <input type="hidden"  name="Creator_Image_Path" value="{{Auth::user()->avatar}}" >
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
