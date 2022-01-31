@extends('LayoutBladeFiles.app-layout')
@section('title','Fundi wa Mashine za Kilimo')
@section('menu-status-mashine','active')

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
  <div class="grid grid-3-6-3 medium-space">
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
              <p class="sidebar-menu-header-title">My Trips Store</p>
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
    <div class="grid-column">


      <!-- WIDGET BOX -->
      <div class="widget-box">
        <!-- WIDGET BOX SETTINGS -->
        <div class="widget-box-settings">
          <!-- POST SETTINGS WRAP -->
          <div class="post-settings-wrap">
            <!-- POST SETTINGS -->
            <div class="post-settings widget-box-post-settings-dropdown-trigger">
              <!-- POST SETTINGS ICON -->
              <svg class="post-settings-icon icon-more-dots">
                <use xlink:href="#svg-more-dots"></use>
              </svg>
              <!-- /POST SETTINGS ICON -->
            </div>
            <!-- /POST SETTINGS -->

            <!-- SIMPLE DROPDOWN -->
            <div class="simple-dropdown widget-box-post-settings-dropdown">
              <!-- SIMPLE DROPDOWN LINK -->
              <p class="simple-dropdown-link">Widget Settings</p>
              <!-- /SIMPLE DROPDOWN LINK -->
            </div>
            <!-- /SIMPLE DROPDOWN -->
          </div>
          <!-- /POST SETTINGS WRAP -->
        </div>
        <!-- /WIDGET BOX SETTINGS -->

        <!-- WIDGET BOX TITLE -->
        <p class="widget-box-title">Jobs &amp; Education</p>
        <!-- /WIDGET BOX TITLE -->

        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
          <!-- TIMELINE INFORMATION LIST -->
          <div class="timeline-information-list">
            <!-- TIMELINE INFORMATION -->
            <div class="timeline-information">
              <!-- TIMELINE INFORMATION TITLE -->
              <p class="timeline-information-title">Lead Costume Designer</p>
              <!-- /TIMELINE INFORMATION TITLE -->

              <!-- TIMELINE INFORMATION DATE -->
              <p class="timeline-information-date">2015 - NOW</p>
              <!-- /TIMELINE INFORMATION DATE -->

              <!-- TIMELINE INFORMATION TEXT -->
              <p class="timeline-information-text">Lead Costume Designer for the "Amazzo Costumes" agency. I'm in charge of a ten person group, overseeing all the proyects and talking to potential clients. I also handle some face to face interviews for new candidates.</p>
              <!-- /TIMELINE INFORMATION TEXT -->
            </div>
            <!-- /TIMELINE INFORMATION -->

            <!-- TIMELINE INFORMATION -->
            <div class="timeline-information">
              <!-- TIMELINE INFORMATION TITLE -->
              <p class="timeline-information-title">Costume Designer</p>
              <!-- /TIMELINE INFORMATION TITLE -->

              <!-- TIMELINE INFORMATION DATE -->
              <p class="timeline-information-date">2013 - 2015</p>
              <!-- /TIMELINE INFORMATION DATE -->

              <!-- TIMELINE INFORMATION TEXT -->
              <p class="timeline-information-text">Costume Designer for the "Jenny Taylors" agency. Was in charge of working side by side with the best designers in order to complete and perfect orders.</p>
              <!-- /TIMELINE INFORMATION TEXT -->
            </div>
            <!-- /TIMELINE INFORMATION -->

            <!-- TIMELINE INFORMATION -->
            <div class="timeline-information">
              <!-- TIMELINE INFORMATION TITLE -->
              <p class="timeline-information-title">Designer Intern</p>
              <!-- /TIMELINE INFORMATION TITLE -->

              <!-- TIMELINE INFORMATION DATE -->
              <p class="timeline-information-date">2012 - 2013</p>
              <!-- /TIMELINE INFORMATION DATE -->

              <!-- TIMELINE INFORMATION TEXT -->
              <p class="timeline-information-text">Intern for the "Jenny Taylors" agency. Was in charge of the communication with the clients and day-to-day chores.</p>
              <!-- /TIMELINE INFORMATION TEXT -->
            </div>
            <!-- /TIMELINE INFORMATION -->

            <!-- TIMELINE INFORMATION -->
            <div class="timeline-information">
              <!-- TIMELINE INFORMATION TITLE -->
              <p class="timeline-information-title">The Antique College of Design</p>
              <!-- /TIMELINE INFORMATION TITLE -->

              <!-- TIMELINE INFORMATION DATE -->
              <p class="timeline-information-date">2007 - 2012</p>
              <!-- /TIMELINE INFORMATION DATE -->

              <!-- TIMELINE INFORMATION TEXT -->
              <p class="timeline-information-text">Bachelor of Costume Design in the Antique College. It was a five years intensive career, plus a course about Cosplays. Average: A+</p>
              <!-- /TIMELINE INFORMATION TEXT -->
            </div>
            <!-- /TIMELINE INFORMATION -->
          </div>
          <!-- /TIMELINE INFORMATION LIST -->
        </div>
        <!-- /WIDGET BOX CONTENT -->
      </div>
      <!-- /WIDGET BOX -->
    </div>
    <!-- /GRID COLUMN -->

    <!-- GRID COLUMN -->
    <div class="grid-column">
    

      <!-- WIDGET BOX -->
      <div class="widget-box">
        <!-- WIDGET BOX SETTINGS -->
        <div class="widget-box-settings">
          <!-- POST SETTINGS WRAP -->
          <div class="post-settings-wrap">
            <!-- POST SETTINGS -->
            <div class="post-settings widget-box-post-settings-dropdown-trigger">
              <!-- POST SETTINGS ICON -->
              <svg class="post-settings-icon icon-more-dots">
                <use xlink:href="#svg-more-dots"></use>
              </svg>
              <!-- /POST SETTINGS ICON -->
            </div>
            <!-- /POST SETTINGS -->

            <!-- SIMPLE DROPDOWN -->
            <div class="simple-dropdown widget-box-post-settings-dropdown">
              <!-- SIMPLE DROPDOWN LINK -->
              <p class="simple-dropdown-link">Widget Settings</p>
              <!-- /SIMPLE DROPDOWN LINK -->
            </div>
            <!-- /SIMPLE DROPDOWN -->
          </div>
          <!-- /POST SETTINGS WRAP -->
        </div>
        <!-- /WIDGET BOX SETTINGS -->

        <!-- WIDGET BOX TITLE -->
        <p class="widget-box-title">More Stats</p>
        <!-- /WIDGET BOX TITLE -->

        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">
          <!-- STAT BLOCK LIST -->
          <div class="stat-block-list">
            <!-- STAT BLOCK -->
            <div class="stat-block">
              <!-- STAT BLOCK DECORATION -->
              <div class="stat-block-decoration">
                <!-- STAT BLOCK DECORATION ICON -->
                <svg class="stat-block-decoration-icon icon-friend">
                  <use xlink:href="#svg-friend"></use>
                </svg>
                <!-- /STAT BLOCK DECORATION ICON -->
              </div>
              <!-- /STAT BLOCK DECORATION -->

              <!-- STAT BLOCK INFO -->
              <div class="stat-block-info">
                <!-- STAT BLOCK TITLE -->
                <p class="stat-block-title">Last friend added</p>
                <!-- /STAT BLOCK TITLE -->

                <!-- STAT BLOCK TEXT -->
                <p class="stat-block-text">5 Days Ago</p>
                <!-- /STAT BLOCK TEXT -->
              </div>
              <!-- /STAT BLOCK INFO -->
            </div>
            <!-- /STAT BLOCK -->

            <!-- STAT BLOCK -->
            <div class="stat-block">
              <!-- STAT BLOCK DECORATION -->
              <div class="stat-block-decoration">
                <!-- STAT BLOCK DECORATION ICON -->
                <svg class="stat-block-decoration-icon icon-status">
                  <use xlink:href="#svg-status"></use>
                </svg>
                <!-- /STAT BLOCK DECORATION ICON -->
              </div>
              <!-- /STAT BLOCK DECORATION -->

              <!-- STAT BLOCK INFO -->
              <div class="stat-block-info">
                <!-- STAT BLOCK TITLE -->
                <p class="stat-block-title">Last post update</p>
                <!-- /STAT BLOCK TITLE -->

                <!-- STAT BLOCK TEXT -->
                <p class="stat-block-text">1 Day Ago</p>
                <!-- /STAT BLOCK TEXT -->
              </div>
              <!-- /STAT BLOCK INFO -->
            </div>
            <!-- /STAT BLOCK -->

            <!-- STAT BLOCK -->
            <div class="stat-block">
              <!-- STAT BLOCK DECORATION -->
              <div class="stat-block-decoration">
                <!-- STAT BLOCK DECORATION ICON -->
                <svg class="stat-block-decoration-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /STAT BLOCK DECORATION ICON -->
              </div>
              <!-- /STAT BLOCK DECORATION -->

              <!-- STAT BLOCK INFO -->
              <div class="stat-block-info">
                <!-- STAT BLOCK TITLE -->
                <p class="stat-block-title">Most commented post</p>
                <!-- /STAT BLOCK TITLE -->

                <!-- STAT BLOCK TEXT -->
                <p class="stat-block-text">56 Comments</p>
                <!-- /STAT BLOCK TEXT -->
              </div>
              <!-- /STAT BLOCK INFO -->
            </div>
            <!-- /STAT BLOCK -->

            <!-- STAT BLOCK -->
            <div class="stat-block">
              <!-- STAT BLOCK DECORATION -->
              <div class="stat-block-decoration">
                <!-- STAT BLOCK DECORATION ICON -->
                <svg class="stat-block-decoration-icon icon-thumbs-up">
                  <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /STAT BLOCK DECORATION ICON -->
              </div>
              <!-- /STAT BLOCK DECORATION -->

              <!-- STAT BLOCK INFO -->
              <div class="stat-block-info">
                <!-- STAT BLOCK TITLE -->
                <p class="stat-block-title">Most liked post</p>
                <!-- /STAT BLOCK TITLE -->

                <!-- STAT BLOCK TEXT -->
                <p class="stat-block-text">904 Likes</p>
                <!-- /STAT BLOCK TEXT -->
              </div>
              <!-- /STAT BLOCK INFO -->
            </div>
            <!-- /STAT BLOCK -->
          </div>
          <!-- /STAT BLOCK LIST -->
        </div>
        <!-- /WIDGET BOX CONTENT -->
      </div>
      <!-- /WIDGET BOX -->
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
