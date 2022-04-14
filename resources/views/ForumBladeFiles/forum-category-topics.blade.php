@extends('LayoutBladeFiles.app-layout')
@include('LayoutBladeFiles.summernote')
@section('title','Jukwaani')


@section('menu-status-chat','active')
@section('discription-title','Mada Jukwaani')
@section('discription-details','kilimofy')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION BANNER -->
  @include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

@foreach($forum_selected as $forum)
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Karibu katika Jukwaa la</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">{{$forum->Category}}</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar v7">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- SECTION FILTERS BAR INFO -->
      <div class="section-filters-bar-info">
        <!-- SECTION FILTERS BAR TITLE -->
        <p class="section-filters-bar-title"><a href="">Jukwaa</a><span class="separator"></span><a href="forums-category.html">{{$forum->Category}}</a></p>
        <!-- /SECTION FILTERS BAR TITLE -->

        <!-- SECTION FILTERS BAR TEXT -->

        @foreach($last_discussions_created_at as $last_created_at)
        <div class="section-filters-bar-text small-space">
          Last post by
          <!-- USER AVATAR -->
          <a class="user-avatar micro no-stats" href="profile-timeline.html">
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
              <div class="hexagon-image-18-20" data-src="{{$last_created_at->Author_Image_Name}}"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </a>
          <!-- /USER AVATAR -->
          <a class="bold" href="profile-timeline.html">{{$last_created_at->Author_Name}}</a>
          {{$last_created_at->created_at->diffForHumans()}}
        </div>
        @endforeach
        <!-- /SECTION FILTERS BAR TEXT -->
      </div>
      <!-- /SECTION FILTERS BAR INFO -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FORM -->
      <form class="form">
        <!-- FORM ITEM -->
        <div class="form-item split">
          <!-- FORM INPUT -->
          <div class="form-input small">
            <label for="forum-search">Search Forums</label>
            <input type="text" id="forum-search" name="forum_search">
          </div>
          <!-- /FORM INPUT -->

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
        <!-- /FORM ITEM -->
      </form>
      <!-- /FORM -->

      <!-- BUTTON -->
      <p class="button secondary popup-create-discussion-trigger">+ Create Discussion</p>
      <!-- /BUTTON -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->

  <!-- TABLE -->
  <div class="table table-forum-category">
    <!-- TABLE HEADER -->
    <div class="table-header">
      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Category</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Topics</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Posts</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column padded-big-left">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Recent Topics</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->
    </div>
    <!-- /TABLE HEADER -->

    <!-- TABLE BODY -->
    <div class="table-body">
      <!-- TABLE ROW -->
      <div class="table-row big">
        <!-- TABLE COLUMN -->
        <div class="table-column">
          <!-- FORUM CATEGORY -->
          <div class="forum-category">
            <!-- FORUM CATEGORY IMAGE -->
            <a href="forums-category.html">
              <img class="forum-category-image" src="{{$forum->Category_Image}}" alt="category-07">
            </a>
            <!-- /FORUM CATEGORY IMAGE -->

            <!-- FORUM CATEGORY INFO -->
            <div class="forum-category-info">
              <!-- FORUM CATEGORY TITLE -->
              <p class="forum-category-title"><a href="#">{{$forum->Category}}</a></p>
              <!-- /FORUM CATEGORY TITLE -->

              <!-- FORUM CATEGORY TEXT -->
              <p class="forum-category-text">{{$forum->Category_Description}}</p>
              <!-- /FORUM CATEGORY TEXT -->
            </div>
            <!-- /FORUM CATEGORY INFO -->
          </div>
          <!-- /FORUM CATEGORY -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">{{$forum->Topics}}</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">{{$forum->Posts}}</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column padded-big-left">
          @foreach($forum->discussions as $recent_discussions)
           @if($loop->index < 3)
           <!-- TABLE LINK -->
           <a class="table-link" href="/kilimofy/Forum/Forum-Discussion/{{$recent_discussions->id}}">{{$recent_discussions->Topic}}</a>
           <!-- /TABLE LINK -->
           @endif
          @endforeach
        </div>
        <!-- /TABLE COLUMN -->
      </div>
      <!-- /TABLE ROW -->
    </div>
    <!-- /TABLE BODY -->
  </div>
  <!-- /TABLE -->

  <!-- TABLE -->
  <div class="table table-forum-discussion">
    <!-- TABLE HEADER -->
    <div class="table-header">
      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Discussion</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Voices</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column centered padded-medium">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Replies</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->

      <!-- TABLE HEADER COLUMN -->
      <div class="table-header-column padded-big-left">
        <!-- TABLE HEADER TITLE -->
        <p class="table-header-title">Activity</p>
        <!-- /TABLE HEADER TITLE -->
      </div>
      <!-- /TABLE HEADER COLUMN -->
    </div>
    <!-- /TABLE HEADER -->

    <!-- TABLE BODY -->
    <div class="table-body">
     @foreach($discussions as $discussions)
      <!-- TABLE ROW -->
      <div class="table-row medium">
        <!-- TABLE COLUMN -->
        <div class="table-column">
          <!-- DISCUSSION PREVIEW -->
          <div class="discussion-preview">
            <!-- DISCUSSION PREVIEW TITLE -->
            <a class="discussion-preview-title" href="/kilimofy/Forum/Forum-Discussion/{{$discussions->id}}">{{$discussions->Topic}}</a>
            <!-- /DISCUSSION PREVIEW TITLE -->

            <!-- DISCUSSION PREVIEW META -->
            <div class="discussion-preview-meta">
              <!-- DISCUSSION PREVIEW META TEXT -->
              <p class="discussion-preview-meta-text">Started by</p>
              <!-- /DISCUSSION PREVIEW META TEXT -->

              <!-- USER AVATAR -->
              <a class="user-avatar micro no-border" href="/kilimofy/UserAccount/about_user_page/{{$discussions->Author_ID}}-about-{{$discussions->Author_Name}}-in-Kilimofy-Platform">
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-18-20" data-src="/Uploads/avatars/{{$discussions->Author_Image_Name}}"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </a>
              <!-- /USER AVATAR -->

              <!-- DISCUSSION PREVIEW META TEXT -->
              <p class="discussion-preview-meta-text"><a href="/kilimofy/UserAccount/about_user_page/{{$discussions->Author_ID}}-about-{{$discussions->Author_Name}}-in-Kilimofy-Platform">{{$discussions->Author_Name}}</a> {{$discussions->created_at->diffForHumans()}}</p>
              <!-- /DISCUSSION PREVIEW META TEXT -->
            </div>
            <!-- /DISCUSSION PREVIEW META -->
          </div>
          <!-- /DISCUSSION PREVIEW -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">19</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">24</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column padded-big-left">
          <!-- USER STATUS -->
          <div class="user-status">
            <!-- USER STATUS AVATAR -->
            <a class="user-status-avatar" href="profile-timeline.html">
              <!-- USER AVATAR -->
              <div class="user-avatar small no-outline">
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-30-32" data-src="{{$discussions->Author_Image_Name}}"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->

                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-40-44"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->

                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-40-44"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->

                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->

                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-16-18"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->

                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">16</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </div>
              <!-- /USER AVATAR -->
            </a>
            <!-- /USER STATUS AVATAR -->

            <!-- USER STATUS TITLE -->
            <p class="user-status-title"><a class="bold" href="profile-timeline.html">{{$discussions->Author_Name}}</a></p>
            <!-- /USER STATUS TITLE -->

            <!-- USER STATUS TEXT -->
            <p class="user-status-text small">{{$discussions->created_at->diffForHumans()}}</p>
            <!-- /USER STATUS TEXT -->
          </div>
          <!-- /USER STATUS -->
        </div>
        <!-- /TABLE COLUMN -->
      </div>
      <!-- /TABLE ROW -->
     @endforeach

    </div>
    <!-- /TABLE BODY -->

  </div>
  <!-- /TABLE -->

  <!-- SECTION PAGER BAR -->
  <div class="section-pager-bar">
    <!-- SECTION PAGER -->
    <div class="section-pager">
      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item active">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">01</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">02</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">03</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">04</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">05</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->

      <!-- SECTION PAGER ITEM -->
      <div class="section-pager-item">
        <!-- SECTION PAGER ITEM TEXT -->
        <p class="section-pager-item-text">06</p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>
      <!-- /SECTION PAGER ITEM -->
    </div>
    <!-- /SECTION PAGER -->

    <!-- SECTION PAGER CONTROLS -->
    <div class="section-pager-controls">
      <!-- SLIDER CONTROL -->
      <div class="slider-control left disabled">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->

      <!-- SLIDER CONTROL -->
      <div class="slider-control right">
        <!-- SLIDER CONTROL ICON -->
        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
        <!-- /SLIDER CONTROL ICON -->
      </div>
      <!-- /SLIDER CONTROL -->
    </div>
    <!-- /SECTION PAGER CONTROLS -->
  </div>
  <!-- /SECTION PAGER BAR -->
</div>
<!-- /CONTENT GRID -->


<!-- POPUP BOX -->
@include('LayoutBladeFiles.forum-discusion-form')
<!-- /POPUP BOX -->

<!-- POPUP BOX -->
<div class="popup-box large ">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button ">
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
          <img src="/assets/img/landing/landing-background.jpg" alt="cover-29">
        </figure>
        <!-- /USER PREVIEW COVER -->

        <!-- USER PREVIEW INFO -->
        <div class="user-preview-info">
          <!-- USER SHORT DESCRIPTION -->
          <div class="user-short-description small">
            <!-- USER SHORT DESCRIPTION AVATAR -->
            <a class="user-short-description-avatar user-avatar no-stats" href="">
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
                <div class="hexagon-image-40-44" data-src="{{Auth::user()->avatar}}"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /USER SHORT DESCRIPTION AVATAR -->

            <!-- USER SHORT DESCRIPTION TITLE -->
            <p class="user-short-description-title small"><a href="">{{Auth::user()->username}}</a></p>
            <!-- /USER SHORT DESCRIPTION TITLE -->

            <!-- USER SHORT DESCRIPTION TEXT -->
            <p class="user-short-description-text regular">Discussion Organizer</p>
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
          <p class="sidebar-menu-link active">Muongozo</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">1.Zingatia Maudhui</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">2.Zingatia Maadili</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <p class="sidebar-menu-link">3.Tumia Lugha fasaha</p>
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">4.Members</p> -->
          <!-- /SIDEBAR MENU LINK -->

          <!-- SIDEBAR MENU LINK -->
          <!-- <p class="sidebar-menu-link">5.Delete Group</p> -->
          <!-- /SIDEBAR MENU LINK -->
        </div>
        <!-- /SIDEBAR MENU BODY -->
      </div>
      <!-- /SIDEBAR MENU ITEM -->

      <!-- FORM -->
      <form class="form" action="/kilimofy/Forum/Create-Discussion" method="post" enctype="multipart/form-data">
        @csrf
      <!-- POPUP BOX SIDEBAR FOOTER -->
      <div class="popup-box-sidebar-footer">
        <!-- BUTTON -->
        <button  type="submit" class="button secondary full ">Create Discussion!</button>
        <!-- /BUTTON -->

        <!-- BUTTON -->
        <button type="reset" class="button white full popup-create-discussion-trigger">Delete</button>
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
        <p class="widget-box-title">Discussion Info</p>
        <!-- /WIDGET BOX TITLE -->

        <!-- WIDGET BOX CONTENT -->
        <div class="widget-box-content">

            <!-- FORM ROW -->
              <div class="form-row">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM SELECT -->
                  <div class="form-select">
                    <label for="rating-reason">Jukwa la ?</label>
                    <select class="for" name="Forum_Category_Name">
                      <option value="{{$forum->Category}}" selected >{{$forum->Category}}</option>
                    </select>

                    <!-- /FORM SELECT ICON -->
                    <input type="hidden" name="forum_id" value="{{$forum->id}}">
                    <input type="hidden" name="Author_Name" value="{{Auth::user()->name}}">
                    <input type="hidden" name="Author_Username" value="{{Auth::user()->username}}">
                    <input type="hidden" name="Author_ID" value="{{Auth::user()->id}}">
                    <input type="hidden" name="Author_Image_Name" value="{{Auth::user()->avatar}}">
                  </div>
                  <!-- /FORM SELECT -->
                </div>
                <!-- /FORM ITEM -->
              </div>
              <!-- /FORM ROW -->

              <!-- FORM ROW -->
              <div class="form-row">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM INPUT -->
                  <div class="form-input">
                    <label for="login-username">Mada/Swali la Mjadala ?</label>
                    <input type="text" id="login-username" name="username" value="{{old('username')}}">
                    <p class="lead" style="color: #f33155">
                      {{$errors->first('username')}}
                    </p>
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
                   <textarea class="form-control" name="body" id="summernote"></textarea>
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
@endforeach
