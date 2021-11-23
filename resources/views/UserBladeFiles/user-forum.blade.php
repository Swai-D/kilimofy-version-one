@extends('LayoutBladeFiles.user-account-layout')
@foreach($user as $user)

@section('title')
{{$user->name}}'s Forum
@endsection
@section('forum-menu-active', 'active')

@section('user-data')
<!-- SECTION -->
<section class="section">
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">{{$user->name}}'s</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Forum Discussions</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar v5">
    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FILTER TABS -->
      <div class="filter-tabs">
        <!-- FILTER TAB -->
        <div class="filter-tab active">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">Topics Started</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->

        <!-- FILTER TAB -->
        <div class="filter-tab">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">My Replies</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->

        <!-- FILTER TAB -->
        <div class="filter-tab">
          <!-- FILTER TAB TEXT -->
          <p class="filter-tab-text">Liked Topics</p>
          <!-- /FILTER TAB TEXT -->
        </div>
        <!-- /FILTER TAB -->
      </div>
      <!-- /FILTER TABS -->

      <!-- FORM -->
      <form class="form">
        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="forum-filter-category">Filter By</label>
          <select id="forum-filter-category" name="forum_filter_category">
            <option value="0">Topics Started</option>
            <option value="1">My Replies</option>
            <option value="2">Liked Topics</option>
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
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->

    <!-- SECTION FILTERS BAR ACTIONS -->
    <div class="section-filters-bar-actions">
      <!-- FORM -->
      <form class="form">
        <!-- FORM ITEM -->
        <div class="form-item split medium">
          <!-- FORM SELECT -->
          <div class="form-select small">
            <label for="forum-filter-order">Order By</label>
            <select id="forum-filter-order" name="forum_filter_order">
              <option value="0">Newest First</option>
              <option value="1">Oldest First</option>
            </select>
            <!-- FORM SELECT ICON -->
            <svg class="form-select-icon icon-small-arrow">
              <use xlink:href="#svg-small-arrow"></use>
            </svg>
            <!-- /FORM SELECT ICON -->
          </div>
          <!-- /FORM SELECT -->

          <!-- BUTTON -->
          <button class="button primary">Apply Filter</button>
          <!-- /BUTTON -->
        </div>
        <!-- /FORM ITEM -->
      </form>
      <!-- /FORM -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->

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
     @forelse($user_discussions as $discussions)
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
              <a class="user-avatar micro no-border" href="profile-timeline.html">
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
              <p class="discussion-preview-meta-text"><a href="profile-timeline.html">{{$discussions->Author_Name}}</a> {{$discussions->created_at->diffForHumans()}}</p>
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
                  <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{$discussions->Author_Image_Name}}"></div>
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
      @empty
      <p class="progress-arc-summary-subtitle text-center text-danger"> Huna Forum yoyote kwa sasa !</p>
    @endforelse
    </div>
    <!-- /TABLE BODY -->

  </div>
  <!-- /TABLE -->
</section>
<!-- /SECTION -->
@endsection

@endforeach
