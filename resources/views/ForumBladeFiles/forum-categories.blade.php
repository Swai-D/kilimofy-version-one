@extends('LayoutBladeFiles.app-layout')
@section('title','Jukwaani')
@section('mini-user-forum-active','unread')
@section('menu-status-chat','active')
@section('discription-title','Jukwaa la Mada')
@section('discription-details','kilimofy')

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
      <p class="section-pretitle">Karibu </p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">kilimofy Jukwaani</h2>
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
        <p class="section-filters-bar-title"><a href="#">Forums</a></p>
        <!-- /SECTION FILTERS BAR TITLE -->

        @foreach($forum_category_last_created as $forum_category_last_created)
        <!-- SECTION FILTERS BAR TEXT -->
        <p class="section-filters-bar-text">Last category added <a class="highlighted" href="/kilimofy/Forum/Forum-Category-Topics/{{$forum_category_last_created->id}}"> {{$forum_category_last_created->Category}}</a> {{$forum_category_last_created->created_at->diffForHumans()}}</p>
        <!-- /SECTION FILTERS BAR TEXT -->
        @endforeach
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

      @foreach($forum_category as $category)
      <!-- TABLE ROW -->
      <div class="table-row big">
        <!-- TABLE COLUMN -->
        <div class="table-column">
          <!-- FORUM CATEGORY -->
          <div class="forum-category">
            <!-- FORUM CATEGORY IMAGE -->
            <a href="/kilimofy/Forum/Forum-Category-Topics/{{$category->id}}">
              <img class="forum-category-image" src="/Uploads/ForumCategoryImage/{{$category->Category_Image}}" alt="category-01">
            </a>
            <!-- /FORUM CATEGORY IMAGE -->

            <!-- FORUM CATEGORY INFO -->
            <div class="forum-category-info">
              <!-- FORUM CATEGORY TITLE -->
              <p class="forum-category-title"><a href="/kilimofy/Forum/Forum-Category-Topics/{{$category->id}}">{{$category->Category}}</a></p>
              <!-- /FORUM CATEGORY TITLE -->

              <!-- FORUM CATEGORY TEXT -->
              <p class="forum-category-text">{{$category->Category_Description}}</p>
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
          <p class="table-title">{{$category->Topics}}</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column centered padded-medium">
          <!-- TABLE TITLE -->
          <p class="table-title">{{$category->Posts}}</p>
          <!-- /TABLE TITLE -->
        </div>
        <!-- /TABLE COLUMN -->

        <!-- TABLE COLUMN -->
        <div class="table-column padded-big-left">

          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            @foreach($category->discussions as $recent_discussions)
            <!-- TABLE LINK -->
            <a class="table-link" href="/kilimofy/Forum/Forum-Discussion/{{$recent_discussions->id}}">{{$recent_discussions->Topic}}</a>
            <!-- /TABLE LINK -->
            @endforeach
          </div>
          <!-- /TABLE COLUMN -->

      </div>
        <!-- /TABLE COLUMN -->
      </div>
      <!-- /TABLE ROW -->
      @endforeach
    </div>
    <!-- /TABLE BODY -->
  </div>
  <!-- /TABLE -->
</div>
<!-- /CONTENT GRID -->
