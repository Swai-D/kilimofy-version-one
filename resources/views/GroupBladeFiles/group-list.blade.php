@extends('LayoutBladeFiles.app-layout')
@section('title','Group List')

@section('mini-user-chat-menu')
style="fill:yellow "
@endsection

@section('menu-status-chat','active')
@section('discription-title','Magrupu')
@section('discription-details','kilimofy')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION BANNER -->
  @include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar v1">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FORM -->
      <form class="form">
        <!-- FORM INPUT -->
        <div class="form-input small with-button">
          <label for="groups-search">Search Groups</label>
          <input type="text" id="groups-search" name="groups_search">
          <!-- BUTTON -->
          <button class="button primary">
            <!-- ICON MAGNIFYING GLASS -->
            <svg class="icon-magnifying-glass">
              <use xlink:href="#svg-magnifying-glass"></use>
            </svg>
            <!-- /ICON MAGNIFYING GLASS -->
          </button>
          <!-- /BUTTON -->
        </div>
        <!-- /FORM INPUT -->

        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="groups-filter-category">Filter By</label>
          <select id="groups-filter-category" name="groups_filter_category">
            <option value="0">Newly Created</option>
            <option value="1">Most Members</option>
            <option value="2">Alphabetical</option>
          </select>
          <!-- FORM SELECT ICON -->
          <svg class="form-select-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /FORM SELECT ICON -->
        </div>
        <!-- /FORM SELECT -->
      </form>
      <!-- /FORM -->

      <!-- FILTER TABS -->
      <div class="filter-tabs">
        <!-- FILTER TAB -->
        <div class="filter-tab active">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">Newly Created</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->

        <!-- FILTER TAB -->
        <div class="filter-tab">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">Most Members</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->

        <!-- FILTER TAB -->
        <div class="filter-tab">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">Alphabetical</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->
      </div>
      <!-- /FILTER TABS -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- VIEW ACTIONS -->
      <div class="view-actions">
        <!-- VIEW ACTION -->
        <div class="view-action text-tooltip-tft-medium active" data-title="Big Grid">
          <!-- VIEW ACTION ICON -->
          <svg class="view-action-icon icon-big-grid-view">
            <use xlink:href="#svg-big-grid-view"></use>
          </svg>
          <!-- /VIEW ACTION ICON -->
        </div>
        <!-- /VIEW ACTION -->

        <!-- VIEW ACTION -->
        <div class="view-action text-tooltip-tft-medium" data-title="Small Grid">
          <!-- VIEW ACTION ICON -->
          <svg class="view-action-icon icon-small-grid-view">
            <use xlink:href="#svg-small-grid-view"></use>
          </svg>
          <!-- /VIEW ACTION ICON -->
        </div>
        <!-- /VIEW ACTION -->

        <!-- VIEW ACTION -->
        <div class="view-action text-tooltip-tft-medium" data-title="List">
          <!-- VIEW ACTION ICON -->
          <svg class="view-action-icon icon-list-grid-view">
            <use xlink:href="#svg-list-grid-view"></use>
          </svg>
          <!-- /VIEW ACTION ICON -->
        </div>
        <!-- /VIEW ACTION -->
      </div>
      <!-- /VIEW ACTIONS -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->

  <!-- GRID -->
  <div class="grid grid-4-4-4 centered">

    @foreach($group_lists as $group)
    <!-- USER PREVIEW -->
    <div class="user-preview">
      <!-- USER PREVIEW COVER -->
      <figure class="user-preview-cover liquid">
        <img src="/Uploads/GroupProfile/{{$group->Group_Image}}" alt="cover-29">
      </figure>
      <!-- /USER PREVIEW COVER -->

      <!-- USER PREVIEW INFO -->
      <div class="user-preview-info">
        @if($group->Status == "Public")
        <!-- TAG STICKER -->
        <div class="tag-sticker">
          <!-- TAG STICKER ICON -->
          <svg class="tag-sticker-icon icon-public">
            <use xlink:href="#svg-public"></use>
          </svg>
          <!-- /TAG STICKER ICON -->
        </div>
        <!-- /TAG STICKER -->
        @else

        <!-- TAG STICKER -->
        <div class="tag-sticker">
          <!-- TAG STICKER ICON -->
          <svg class="tag-sticker-icon icon-private">
            <use xlink:href="#svg-private"></use>
          </svg>
          <!-- /TAG STICKER ICON -->
        </div>
        <!-- /TAG STICKER -->
        @endif
        <!-- USER SHORT DESCRIPTION -->
        <div class="user-short-description">
          <!-- USER SHORT DESCRIPTION AVATAR -->
          <a class="user-short-description-avatar user-avatar medium no-stats" href="group-timeline.html">
            <!-- USER AVATAR BORDER -->
            <div class="user-avatar-border">
              <!-- HEXAGON -->
              <div class="hexagon-120-130"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BORDER -->

            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-100-110" data-src="/Uploads/avatars/{{$group->Creator_Image_Path}}"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </a>
          <!-- /USER SHORT DESCRIPTION AVATAR -->

          <!-- USER SHORT DESCRIPTION TITLE -->
          <p class="user-short-description-title"><a href="group-timeline.html">{{$group->Tagline}}</a></p>
          <!-- /USER SHORT DESCRIPTION TITLE -->

          <!-- USER SHORT DESCRIPTION TEXT -->
          <p class="user-short-description-text">{{$group->Description}}</p>
          <!-- /USER SHORT DESCRIPTION TEXT -->
        </div>
        <!-- /USER SHORT DESCRIPTION -->

        <!-- USER STATS -->
        <div class="user-stats">
          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">{{$group->Members}}</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">members</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->

          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">{{$group->Post}}</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">posts</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->

          <!-- USER STAT -->
          <div class="user-stat">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">{{$group->Vistors}}</p>
            <!-- /USER STAT TITLE -->

            <!-- USER STAT TEXT -->
            <p class="user-stat-text">visits</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->
        </div>
        <!-- /USER STATS -->

        <!-- USER AVATAR LIST -->
        <div class="user-avatar-list medium reverse centered">
          <!-- USER AVATAR -->
          <div class="user-avatar smaller no-stats">
            <!-- USER AVATAR BORDER -->
            <div class="user-avatar-border">
              <!-- HEXAGON -->
              <div class="hexagon-34-36"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BORDER -->

            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-30-32" data-src="/assets/img/avatar/03.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </div>
          <!-- /USER AVATAR -->

          <!-- USER AVATAR -->
          <div class="user-avatar smaller no-stats">
            <!-- USER AVATAR BORDER -->
            <div class="user-avatar-border">
              <!-- HEXAGON -->
              <div class="hexagon-34-36"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BORDER -->

            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-30-32" data-src="/assets/img/avatar/05.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </div>
          <!-- /USER AVATAR -->

          <!-- USER AVATAR -->
          <div class="user-avatar smaller no-stats">
            <!-- USER AVATAR BORDER -->
            <div class="user-avatar-border">
              <!-- HEXAGON -->
              <div class="hexagon-34-36"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BORDER -->

            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-30-32" data-src="/assets/img/avatar/10.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </div>
          <!-- /USER AVATAR -->

          <!-- USER AVATAR -->
          <div class="user-avatar smaller no-stats">
            <!-- USER AVATAR BORDER -->
            <div class="user-avatar-border">
              <!-- HEXAGON -->
              <div class="hexagon-34-36"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BORDER -->

            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-30-32" data-src="/assets/img/avatar/02.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </div>
          <!-- /USER AVATAR -->

          <!-- USER AVATAR -->
          <div class="user-avatar smaller no-stats">
            <!-- USER AVATAR BORDER -->
            <div class="user-avatar-border">
              <!-- HEXAGON -->
              <div class="hexagon-34-36"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BORDER -->

            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-30-32" data-src="/assets/img/avatar/06.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </div>
          <!-- /USER AVATAR -->

          <!-- USER AVATAR -->
          <a class="user-avatar smaller no-stats" href="group-members.html">
            <!-- USER AVATAR BORDER -->
            <div class="user-avatar-border">
              <!-- HEXAGON -->
              <div class="hexagon-34-36"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR BORDER -->

            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-30-32" data-src="/assets/img/avatar/23.jpg"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->

            <!-- USER AVATAR OVERLAY -->
            <div class="user-avatar-overlay">
              <!-- HEXAGON -->
              <div class="hexagon-overlay-30-32"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR OVERLAY -->

            <!-- USER AVATAR OVERLAY CONTENT -->
            <div class="user-avatar-overlay-content">
              <!-- USER AVATAR OVERLAY CONTENT TEXT -->
              <p class="user-avatar-overlay-content-text">+132</p>
              <!-- /USER AVATAR OVERLAY CONTENT TEXT -->
            </div>
            <!-- /USER AVATAR OVERLAY CONTENT -->
          </a>
          <!-- /USER AVATAR -->
        </div>
        <!-- /USER AVATAR LIST -->

        <!-- USER PREVIEW ACTIONS -->
        <div class="user-preview-actions">
          <!-- BUTTON -->
          <p class="button secondary full">
            <!-- BUTTON ICON -->
            <svg class="button-icon icon-join-group">
              <use xlink:href="#svg-join-group"></use>
            </svg>
            <!-- /BUTTON ICON -->
            Join Group!
          </p>
          <!-- /BUTTON -->
        </div>
        <!-- /USER PREVIEW ACTIONS -->
      </div>
      <!-- /USER PREVIEW INFO -->
    </div>
    <!-- /USER PREVIEW -->
    @endforeach

  </div>
  <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->
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
                <div class="hexagon-image-84-92" data-src="img/avatar/24.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /USER SHORT DESCRIPTION AVATAR -->

            <!-- USER SHORT DESCRIPTION TITLE -->
            <p class="user-short-description-title small"><a href="group-timeline.html">Cosplayers of the World</a></p>
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
          <p class="sidebar-menu-link">Avatar and Cover</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">Social Networks</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">Settings</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">Members</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">Delete Group</p>
          <!-- /SIDEBAR MENU LINK -->
        </div>
        <!-- /SIDEBAR MENU BODY -->
      </div>
      <!-- /SIDEBAR MENU ITEM -->

      <!-- POPUP BOX SIDEBAR FOOTER -->
      <div class="popup-box-sidebar-footer">
        <!-- BUTTON -->
        <p class="button secondary full popup-manage-group-trigger">Save Changes!</p>
        <!-- /BUTTON -->

        <!-- BUTTON -->
        <p class="button white full popup-manage-group-trigger">Discard All</p>
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
          <form class="form">
            <!-- FORM ROW -->
            <div class="form-row">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="group-name">Group Name</label>
                  <input type="text" id="group-name" name="group_name" value="Cosplayers of the World">
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
                  <label for="group-tagline">Tagline</label>
                  <input type="text" id="group-tagline" name="group_tagline" value="All Cosplayers Welcome!">
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
                  <textarea id="group-description" name="group_description" placeholder="Write a little description about the group..."></textarea>
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
                  <label for="group-public-email">Public Email</label>
                  <input type="text" id="group-public-email" name="group_public_email" value="info@cosworld.com">
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
                  <label for="group-public-website">Public Website</label>
                  <input type="text" id="group-public-website" name="group_public_website">
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
