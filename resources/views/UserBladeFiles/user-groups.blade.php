@extends('LayoutBladeFiles.user-account-layout')
@foreach($user as $user)

@section('title')
{{$user->name}}'s Groups
@endsection
@section('group-menu-active', 'active')

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
         <h2 class="section-title">Groups <span class="highlighted">{{$group_lists_count}}</span></h2>
         <!-- /SECTION TITLE -->
       </div>
       <!-- /SECTION HEADER INFO -->
     </div>
     <!-- /SECTION HEADER -->

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


     </div>
     <!-- /SECTION FILTERS BAR -->

     <!-- GRID -->
     <div class="grid grid-4-4-4 centered">
       @forelse($group_lists as $group)
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
             <a class="user-short-description-avatar user-avatar medium no-stats" href="/kilimofy/Group/Group-Timeline">
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
             <p class="user-short-description-title"><a href="/kilimofy/Group/Group-Timeline">{{$group->Tagline}}</a></p>
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
       @empty
       <p class="progress-arc-summary-subtitle text-center text-danger"> Hakuna Group kwa sasa ! <button class="widget-box-button button small secondary popup-manage-group-trigger">Tengeneza ?</button>  </p>
     @endforelse
     </div>
     <!-- /GRID -->

    @if($group_lists_count != 0)
     @include('LayoutBladeFiles.page-bar')
    @endif
   </section>
   <!-- /SECTION -->
@endsection
@endforeach

<!-- POPUP BOX -->
@include('LayoutBladeFiles.create-group')
<!-- /POPUP BOX -->
