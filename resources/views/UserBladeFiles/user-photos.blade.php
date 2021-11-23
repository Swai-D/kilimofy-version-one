@extends('LayoutBladeFiles.user-account-layout')
@foreach($user as $user)

@section('title')
{{$user->name}}'s Photos
@endsection

@section('photos-menu-active', 'active')

@section('user-data')
<section class="section">
     <!-- SECTION HEADER -->
     <div class="section-header">
       <!-- SECTION HEADER INFO -->
       <div class="section-header-info">
         <!-- SECTION PRETITLE -->
         <p class="section-pretitle">Browse {{$user->name}}'s</p>
         <!-- /SECTION PRETITLE -->

         <!-- SECTION TITLE -->
         <h2 class="section-title">Kilimofy Photo(s) </h2>
         <!-- /SECTION TITLE -->
       </div>
       <!-- /SECTION HEADER INFO -->

       <!-- SECTION HEADER ACTIONS -->
     @if(Auth::user()->id == $user->id)
     <div class="section-header-actions">
       <!-- SECTION HEADER ACTION -->

       <p class="section-header-action popup-album-creation-trigger">Create Album +</p>
       <!-- /SECTION HEADER ACTION -->

       <!-- SECTION HEADER ACTION -->
       <a class="section-header-action" href="profile-photos-inside.html">See All</a>
       <!-- /SECTION HEADER ACTION -->
     </div>
     @endif
       <!-- /SECTION HEADER ACTIONS -->
     </div>
     <!-- /SECTION HEADER -->

     <!-- GRID -->
     <div class="grid grid-3-3-3-3 centered">
       @foreach($user_photo_gallery as $user_photo)
         @if($user_photo->Photo !=NULL)
         <!-- ALBUM PREVIEW -->
         <a class="album-preview" href="profile-photos-inside.html">
           <!-- ALBUM PREVIEW IMAGE -->
           <figure class="album-preview-image liquid">
             <img src="/Uploads/PostPhotos/{{$user_photo->Photo}}" alt="album-image-">
           </figure>
           <!-- /ALBUM PREVIEW IMAGE -->

           <!-- TEXT STICKER -->
           <p class="text-sticker small negative">{{$loop->iteration}}</p>
           <!-- /TEXT STICKER -->

           <!-- ALBUM PREVIEW INFO -->
           <div class="album-preview-info">
             <!-- ALBUM PREVIEW TITLE -->
             <p class="album-preview-title">{{$user_photo->Caption}}</p>
             <!-- /ALBUM PREVIEW TITLE -->

             <!-- ALBUM PREVIEW TEXT -->
             <p class="album-preview-text">Updated {{$user_photo->created_at->diffForHumans()}}</p>
             <!-- /ALBUM PREVIEW TEXT -->
           </div>
           <!-- /ALBUM PREVIEW INFO -->
         </a>
         <!-- /ALBUM PREVIEW -->
         @endif
        @endforeach
     </div>
     <!-- /GRID -->
   @include('LayoutBladeFiles.page-bar')
   </section>
   <!-- /SECTION -->
 </div>
 <!-- /CONTENT GRID -->

 <!-- POPUP BOX -->
 <div class="popup-box popup-album-creation">
   <!-- POPUP CLOSE BUTTON -->
   <div class="popup-close-button popup-album-creation-trigger">
     <!-- POPUP CLOSE BUTTON ICON -->
     <svg class="popup-close-button-icon icon-cross">
       <use xlink:href="#svg-cross"></use>
     </svg>
     <!-- /POPUP CLOSE BUTTON ICON -->
   </div>
   <!-- /POPUP CLOSE BUTTON -->

   <!-- POPUP BOX TITLE -->
   <p class="popup-box-title">Create Album +</p>
   <!-- /POPUP BOX TITLE -->

   <!-- FORM -->
   <form class="form">
     <!-- FORM ROW -->
     <div class="form-row">
       <!-- FORM ITEM -->
       <div class="form-item">
         <!-- FORM INPUT -->
         <div class="form-input small">
           <label for="album-name">Album Name</label>
           <input type="text" id="album-name" name="album_name">
         </div>
         <!-- /FORM INPUT -->
       </div>
       <!-- /FORM ITEM -->
     </div>
     <!-- /FORM ROW -->

     <!-- FORM UPLOADABLES -->
     <div class="form-uploadables" data-simplebar>
       <!-- UPLOAD ITEM LIST -->
       <div class="upload-item-list">
         <!-- UPLOAD ITEM -->
         <div class="upload-item">
           <svg class="icon-plus">
             <use xlink:href="#svg-plus"></use>
           </svg>
         </div>
         <!-- /UPLOAD ITEM -->

         <!-- UPLOAD ITEM -->
         <div class="upload-item">
           <!-- UPLOAD ITEM IMAGE -->
           <figure class="upload-item-image liquid">
             <img src="/assets/img/cover/23.jpg" alt="upload-item-23">
           </figure>
           <!-- /UPLOAD ITEM IMAGE -->

           <!-- FORM INPUT -->
           <div class="form-input small">
             <label for="album-photo-description-01">Description</label>
             <textarea id="album-photo-description-01" name="album_photo_description_01"></textarea>
           </div>
           <!-- /FORM INPUT -->

           <!-- CHECKBOX WRAP -->
           <div class="checkbox-wrap small">
             <input type="radio" id="album-set-photo-cover-01" name="album_set_photo_cover" value="cover-01" checked>
             <!-- CHECKBOX BOX -->
             <div class="checkbox-box">
               <!-- ICON CROSS -->
               <svg class="icon-cross">
                 <use xlink:href="#svg-cross"></use>
               </svg>
               <!-- /ICON CROSS -->
             </div>
             <!-- /CHECKBOX BOX -->
             <label for="album-set-photo-cover-01">Set as album cover</label>
           </div>
           <!-- /CHECKBOX WRAP -->
         </div>
         <!-- /UPLOAD ITEM -->

         <!-- UPLOAD ITEM -->
         <div class="upload-item">
           <!-- UPLOAD ITEM IMAGE -->
           <figure class="upload-item-image liquid">
             <img src="/assets/img/cover/32.jpg" alt="upload-item-32">
           </figure>
           <!-- /UPLOAD ITEM IMAGE -->

           <!-- FORM INPUT -->
           <div class="form-input small">
             <label for="album-photo-description-02">Description</label>
             <textarea id="album-photo-description-02" name="album_photo_description_02"></textarea>
           </div>
           <!-- /FORM INPUT -->

           <!-- CHECKBOX WRAP -->
           <div class="checkbox-wrap small">
             <input type="radio" id="album-set-photo-cover-02" name="album_set_photo_cover" value="cover-02">
             <!-- CHECKBOX BOX -->
             <div class="checkbox-box">
               <!-- ICON CROSS -->
               <svg class="icon-cross">
                 <use xlink:href="#svg-cross"></use>
               </svg>
               <!-- /ICON CROSS -->
             </div>
             <!-- /CHECKBOX BOX -->
             <label for="album-set-photo-cover-02">Set as album cover</label>
           </div>
           <!-- /CHECKBOX WRAP -->
         </div>
         <!-- /UPLOAD ITEM -->

         <!-- UPLOAD ITEM -->
         <div class="upload-item">
           <!-- UPLOAD ITEM IMAGE -->
           <figure class="upload-item-image liquid">
             <img src="/assets/img/cover/36.jpg" alt="upload-item-36">
           </figure>
           <!-- /UPLOAD ITEM IMAGE -->

           <!-- FORM INPUT -->
           <div class="form-input small">
             <label for="album-photo-description-03">Description</label>
             <textarea id="album-photo-description-03" name="album_photo_description_03"></textarea>
           </div>
           <!-- /FORM INPUT -->

           <!-- CHECKBOX WRAP -->
           <div class="checkbox-wrap small">
             <input type="radio" id="album-set-photo-cover-03" name="album_set_photo_cover" value="cover-03">
             <!-- CHECKBOX BOX -->
             <div class="checkbox-box">
               <!-- ICON CROSS -->
               <svg class="icon-cross">
                 <use xlink:href="#svg-cross"></use>
               </svg>
               <!-- /ICON CROSS -->
             </div>
             <!-- /CHECKBOX BOX -->
             <label for="album-set-photo-cover-03">Set as album cover</label>
           </div>
           <!-- /CHECKBOX WRAP -->
         </div>
         <!-- /UPLOAD ITEM -->

         <!-- UPLOAD ITEM -->
         <div class="upload-item">
           <!-- UPLOAD ITEM IMAGE -->
           <figure class="upload-item-image liquid">
             <img src="/assets/img/cover/38.jpg" alt="upload-item-38">
           </figure>
           <!-- /UPLOAD ITEM IMAGE -->

           <!-- FORM INPUT -->
           <div class="form-input small">
             <label for="album-photo-description-04">Description</label>
             <textarea id="album-photo-description-04" name="album_photo_description_04"></textarea>
           </div>
           <!-- /FORM INPUT -->

           <!-- CHECKBOX WRAP -->
           <div class="checkbox-wrap small">
             <input type="radio" id="album-set-photo-cover-04" name="album_set_photo_cover" value="cover-04">
             <!-- CHECKBOX BOX -->
             <div class="checkbox-box">
               <!-- ICON CROSS -->
               <svg class="icon-cross">
                 <use xlink:href="#svg-cross"></use>
               </svg>
               <!-- /ICON CROSS -->
             </div>
             <!-- /CHECKBOX BOX -->
             <label for="album-set-photo-cover-04">Set as album cover</label>
           </div>
           <!-- /CHECKBOX WRAP -->
         </div>
         <!-- /UPLOAD ITEM -->

         <!-- UPLOAD ITEM -->
         <div class="upload-item">
           <!-- UPLOAD ITEM IMAGE -->
           <figure class="upload-item-image liquid">
             <img src="/assets/img/cover/37.jpg" alt="upload-item-37">
           </figure>
           <!-- /UPLOAD ITEM IMAGE -->

           <!-- FORM INPUT -->
           <div class="form-input small">
             <label for="album-photo-description-05">Description</label>
             <textarea id="album-photo-description-05" name="album_photo_description_05"></textarea>
           </div>
           <!-- /FORM INPUT -->

           <!-- CHECKBOX WRAP -->
           <div class="checkbox-wrap small">
             <input type="radio" id="album-set-photo-cover-05" name="album_set_photo_cover" value="cover-05">
             <!-- CHECKBOX BOX -->
             <div class="checkbox-box">
               <!-- ICON CROSS -->
               <svg class="icon-cross">
                 <use xlink:href="#svg-cross"></use>
               </svg>
               <!-- /ICON CROSS -->
             </div>
             <!-- /CHECKBOX BOX -->
             <label for="album-set-photo-cover-05">Set as album cover</label>
           </div>
           <!-- /CHECKBOX WRAP -->
         </div>
         <!-- /UPLOAD ITEM -->

         <!-- UPLOAD ITEM -->
         <div class="upload-item">
           <!-- UPLOAD ITEM IMAGE -->
           <figure class="upload-item-image liquid">
             <img src="/assets/img/cover/39.jpg" alt="upload-item-39">
           </figure>
           <!-- /UPLOAD ITEM IMAGE -->

           <!-- FORM INPUT -->
           <div class="form-input small">
             <label for="album-photo-description-06">Description</label>
             <textarea id="album-photo-description-06" name="album_photo_description_06"></textarea>
           </div>
           <!-- /FORM INPUT -->

           <!-- CHECKBOX WRAP -->
           <div class="checkbox-wrap small">
             <input type="radio" id="album-set-photo-cover-06" name="album_set_photo_cover" value="cover-06">
             <!-- CHECKBOX BOX -->
             <div class="checkbox-box">
               <!-- ICON CROSS -->
               <svg class="icon-cross">
                 <use xlink:href="#svg-cross"></use>
               </svg>
               <!-- /ICON CROSS -->
             </div>
             <!-- /CHECKBOX BOX -->
             <label for="album-set-photo-cover-06">Set as album cover</label>
           </div>
           <!-- /CHECKBOX WRAP -->
         </div>
         <!-- /UPLOAD ITEM -->
       </div>
       <!-- /UPLOAD ITEM LIST -->
     </div>
     <!-- /FORM UPLOADABLES -->

     <!-- POPUP BOX ACTIONS -->
     <div class="popup-box-actions">
       <!-- POPUP BOX ACTION -->
       <p class="popup-box-action button white popup-album-creation-trigger">Discard All</p>
       <!-- /POPUP BOX ACTION -->

       <!-- POPUP BOX ACTION -->
       <button class="popup-box-action button secondary">Post Album!</button>
       <!-- /POPUP BOX ACTION -->
     </div>
     <!-- /POPUP BOX ACTIONS -->
   </form>
   <!-- /FORM -->
 </div>
 <!-- /POPUP BOX -->

 <!-- POPUP PICTURE -->
 <div class="popup-picture">
   <!-- POPUP CLOSE BUTTON -->
   <div class="popup-close-button popup-picture-trigger">
     <!-- POPUP CLOSE BUTTON ICON -->
     <svg class="popup-close-button-icon icon-cross">
       <use xlink:href="#svg-cross"></use>
     </svg>
     <!-- /POPUP CLOSE BUTTON ICON -->
   </div>
   <!-- /POPUP CLOSE BUTTON -->

   <!-- WIDGET BOX -->
   <div class="widget-box no-padding">
     <!-- WIDGET BOX SCROLLABLE -->
     <div class="widget-box-scrollable" data-simplebar>
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
             <p class="simple-dropdown-link">Edit Post</p>
             <!-- /SIMPLE DROPDOWN LINK -->

             <!-- SIMPLE DROPDOWN LINK -->
             <p class="simple-dropdown-link">Delete Post</p>
             <!-- /SIMPLE DROPDOWN LINK -->

             <!-- SIMPLE DROPDOWN LINK -->
             <p class="simple-dropdown-link">Make it Featured</p>
             <!-- /SIMPLE DROPDOWN LINK -->

             <!-- SIMPLE DROPDOWN LINK -->
             <p class="simple-dropdown-link">Report Post</p>
             <!-- /SIMPLE DROPDOWN LINK -->

             <!-- SIMPLE DROPDOWN LINK -->
             <p class="simple-dropdown-link">Report Author</p>
             <!-- /SIMPLE DROPDOWN LINK -->
           </div>
           <!-- /SIMPLE DROPDOWN -->
         </div>
         <!-- /POST SETTINGS WRAP -->
       </div>
       <!-- /WIDGET BOX SETTINGS -->

       <!-- WIDGET BOX STATUS -->
       <div class="widget-box-status">
         <!-- WIDGET BOX STATUS CONTENT -->
         <div class="widget-box-status-content">
           <!-- USER STATUS -->
           <div class="user-status">
             <!-- USER STATUS AVATAR -->
             <a class="user-status-avatar" href="profile-timeline.html">
               <!-- USER AVATAR -->
               <div class="user-avatar small no-outline">
                 <!-- USER AVATAR CONTENT -->
                 <div class="user-avatar-content">
                   <!-- HEXAGON -->
                   <div class="hexagon-image-30-32" data-src="/assets/img/avatar/01.jpg"></div>
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
                   <p class="user-avatar-badge-text">24</p>
                   <!-- /USER AVATAR BADGE TEXT -->
                 </div>
                 <!-- /USER AVATAR BADGE -->
               </div>
               <!-- /USER AVATAR -->
             </a>
             <!-- /USER STATUS AVATAR -->

             <!-- USER STATUS TITLE -->
             <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Marina Valentine</a></p>
             <!-- /USER STATUS TITLE -->

             <!-- USER STATUS TEXT -->
             <p class="user-status-text small">29 minutes ago</p>
             <!-- /USER STATUS TEXT -->
           </div>
           <!-- /USER STATUS -->

           <!-- WIDGET BOX STATUS TEXT -->
           <p class="widget-box-status-text">Here's a sneak peek of the official box cover art for <a href="#">Machine Wasteland II</a>! Remember that I'll be having a stream showing a preview tommorrow at 9PM PCT!</p>
           <!-- /WIDGET BOX STATUS TEXT -->

           <!-- TAG LIST -->
           <div class="tag-list">
             <!-- TAG ITEM -->
             <a class="tag-item secondary" href="newsfeed.html">Cover</a>
             <!-- /TAG ITEM -->

             <!-- TAG ITEM -->
             <a class="tag-item secondary" href="newsfeed.html">Preview</a>
             <!-- /TAG ITEM -->

             <!-- TAG ITEM -->
             <a class="tag-item secondary" href="newsfeed.html">Art</a>
             <!-- /TAG ITEM -->

             <!-- TAG ITEM -->
             <a class="tag-item secondary" href="newsfeed.html">Machine</a>
             <!-- /TAG ITEM -->

             <!-- TAG ITEM -->
             <a class="tag-item secondary" href="newsfeed.html">Wasteland</a>
             <!-- /TAG ITEM -->
           </div>
           <!-- /TAG LIST -->

           <!-- CONTENT ACTIONS -->
           <div class="content-actions">
             <!-- CONTENT ACTION -->
             <div class="content-action">
               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LIST -->
                 <div class="meta-line-list reaction-item-list">
                   <!-- REACTION ITEM -->
                   <div class="reaction-item">
                     <!-- REACTION IMAGE -->
                     <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/love.png" alt="reaction-love">
                     <!-- /REACTION IMAGE -->

                     <!-- SIMPLE DROPDOWN -->
                     <div class="simple-dropdown padded reaction-item-dropdown">
                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Destroy Dex</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">The Green Goo</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Bearded Wonder</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Sandra Strange</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Matt Parker</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">James Murdock</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text"><span class="bold">and 14 more...</span></p>
                       <!-- /SIMPLE DROPDOWN TEXT -->
                     </div>
                     <!-- /SIMPLE DROPDOWN -->
                   </div>
                   <!-- /REACTION ITEM -->

                   <!-- REACTION ITEM -->
                   <div class="reaction-item">
                     <!-- REACTION IMAGE -->
                     <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/wow.png" alt="reaction-wow">
                     <!-- /REACTION IMAGE -->

                     <!-- SIMPLE DROPDOWN -->
                     <div class="simple-dropdown padded reaction-item-dropdown">
                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/wow.png" alt="reaction-wow"> <span class="bold">Wow</span></p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Jett Spiegel</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->
                     </div>
                     <!-- /SIMPLE DROPDOWN -->
                   </div>
                   <!-- /REACTION ITEM -->

                   <!-- REACTION ITEM -->
                   <div class="reaction-item">
                     <!-- REACTION IMAGE -->
                     <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/like.png" alt="reaction-like">
                     <!-- /REACTION IMAGE -->

                     <!-- SIMPLE DROPDOWN -->
                     <div class="simple-dropdown padded reaction-item-dropdown">
                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Neko Bebop</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Nick Grissom</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Sarah Diamond</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->
                     </div>
                     <!-- /SIMPLE DROPDOWN -->
                   </div>
                   <!-- /REACTION ITEM -->
                 </div>
                 <!-- /META LINE LIST -->

                 <!-- META LINE TEXT -->
                 <p class="meta-line-text">24</p>
                 <!-- /META LINE TEXT -->
               </div>
               <!-- /META LINE -->
             </div>
             <!-- /CONTENT ACTION -->

             <!-- CONTENT ACTION -->
             <div class="content-action">
               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LINK -->
                 <p class="meta-line-link">13 Comments</p>
                 <!-- /META LINE LINK -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE TEXT -->
                 <p class="meta-line-text">0 Shares</p>
                 <!-- /META LINE TEXT -->
               </div>
               <!-- /META LINE -->
             </div>
             <!-- /CONTENT ACTION -->
           </div>
           <!-- /CONTENT ACTIONS -->
         </div>
         <!-- /WIDGET BOX STATUS CONTENT -->
       </div>
       <!-- /WIDGET BOX STATUS -->

       <!-- POST OPTIONS -->
       <div class="post-options">
         <!-- POST OPTION WRAP -->
         <div class="post-option-wrap">
           <!-- POST OPTION -->
           <div class="post-option no-text reaction-options-dropdown-trigger">
             <!-- POST OPTION ICON -->
             <svg class="post-option-icon icon-thumbs-up">
               <use xlink:href="#svg-thumbs-up"></use>
             </svg>
             <!-- /POST OPTION ICON -->
           </div>
           <!-- /POST OPTION -->

           <!-- REACTION OPTIONS -->
           <div class="reaction-options small reaction-options-dropdown">
             <!-- REACTION OPTION -->
             <div class="reaction-option text-tooltip-tft" data-title="Like">
               <!-- REACTION OPTION IMAGE -->
               <img class="reaction-option-image" src="/assets/img/reaction/like.png" alt="reaction-like">
               <!-- /REACTION OPTION IMAGE -->
             </div>
             <!-- /REACTION OPTION -->

             <!-- REACTION OPTION -->
             <div class="reaction-option text-tooltip-tft" data-title="Love">
               <!-- REACTION OPTION IMAGE -->
               <img class="reaction-option-image" src="/assets/img/reaction/love.png" alt="reaction-love">
               <!-- /REACTION OPTION IMAGE -->
             </div>
             <!-- /REACTION OPTION -->

             <!-- REACTION OPTION -->
             <div class="reaction-option text-tooltip-tft" data-title="Dislike">
               <!-- REACTION OPTION IMAGE -->
               <img class="reaction-option-image" src="/assets/img/reaction/dislike.png" alt="reaction-dislike">
               <!-- /REACTION OPTION IMAGE -->
             </div>
             <!-- /REACTION OPTION -->

             <!-- REACTION OPTION -->
             <div class="reaction-option text-tooltip-tft" data-title="Happy">
               <!-- REACTION OPTION IMAGE -->
               <img class="reaction-option-image" src="/assets/img/reaction/happy.png" alt="reaction-happy">
               <!-- /REACTION OPTION IMAGE -->
             </div>
             <!-- /REACTION OPTION -->

             <!-- REACTION OPTION -->
             <div class="reaction-option text-tooltip-tft" data-title="Funny">
               <!-- REACTION OPTION IMAGE -->
               <img class="reaction-option-image" src="/assets/img/reaction/funny.png" alt="reaction-funny">
               <!-- /REACTION OPTION IMAGE -->
             </div>
             <!-- /REACTION OPTION -->

             <!-- REACTION OPTION -->
             <div class="reaction-option text-tooltip-tft" data-title="Wow">
               <!-- REACTION OPTION IMAGE -->
               <img class="reaction-option-image" src="/assets/img/reaction/wow.png" alt="reaction-wow">
               <!-- /REACTION OPTION IMAGE -->
             </div>
             <!-- /REACTION OPTION -->

             <!-- REACTION OPTION -->
             <div class="reaction-option text-tooltip-tft" data-title="Angry">
               <!-- REACTION OPTION IMAGE -->
               <img class="reaction-option-image" src="/assets/img/reaction/angry.png" alt="reaction-angry">
               <!-- /REACTION OPTION IMAGE -->
             </div>
             <!-- /REACTION OPTION -->

             <!-- REACTION OPTION -->
             <div class="reaction-option text-tooltip-tft" data-title="Sad">
               <!-- REACTION OPTION IMAGE -->
               <img class="reaction-option-image" src="/assets/img/reaction/sad.png" alt="reaction-sad">
               <!-- /REACTION OPTION IMAGE -->
             </div>
             <!-- /REACTION OPTION -->
           </div>
           <!-- /REACTION OPTIONS -->
         </div>
         <!-- /POST OPTION WRAP -->

         <!-- POST OPTION -->
         <div class="post-option no-text active">
           <!-- POST OPTION ICON -->
           <svg class="post-option-icon icon-comment">
             <use xlink:href="#svg-comment"></use>
           </svg>
           <!-- /POST OPTION ICON -->
         </div>
         <!-- /POST OPTION -->

         <!-- POST OPTION -->
         <div class="post-option no-text">
           <!-- POST OPTION ICON -->
           <svg class="post-option-icon icon-share">
             <use xlink:href="#svg-share"></use>
           </svg>
           <!-- /POST OPTION ICON -->
         </div>
         <!-- /POST OPTION -->
       </div>
       <!-- /POST OPTIONS -->

       <!-- POST COMMENT LIST -->
       <div class="post-comment-list">
         <!-- POST COMMENT -->
         <div class="post-comment">
           <!-- USER AVATAR -->
           <a class="user-avatar small no-outline" href="profile-timeline.html">
             <!-- USER AVATAR CONTENT -->
             <div class="user-avatar-content">
               <!-- HEXAGON -->
               <div class="hexagon-image-30-32" data-src="/assets/img/avatar/05.jpg"></div>
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
               <p class="user-avatar-badge-text">12</p>
               <!-- /USER AVATAR BADGE TEXT -->
             </div>
             <!-- /USER AVATAR BADGE -->
           </a>
           <!-- /USER AVATAR -->

           <!-- POST COMMENT TEXT -->
           <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Neko Bebop</a>It's always a pleasure to do this streams with you! If we have at least half the fun than last time it will be an incredible success!</p>
           <!-- /POST COMMENT TEXT -->

           <!-- CONTENT ACTIONS -->
           <div class="content-actions">
             <!-- CONTENT ACTION -->
             <div class="content-action">
               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LIST -->
                 <div class="meta-line-list reaction-item-list small">
                   <!-- REACTION ITEM -->
                   <div class="reaction-item">
                     <!-- REACTION IMAGE -->
                     <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/happy.png" alt="reaction-happy">
                     <!-- /REACTION IMAGE -->

                     <!-- SIMPLE DROPDOWN -->
                     <div class="simple-dropdown padded reaction-item-dropdown">
                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Marcus Jhonson</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->
                     </div>
                     <!-- /SIMPLE DROPDOWN -->
                   </div>
                   <!-- /REACTION ITEM -->

                   <!-- REACTION ITEM -->
                   <div class="reaction-item">
                     <!-- REACTION IMAGE -->
                     <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/like.png" alt="reaction-like">
                     <!-- /REACTION IMAGE -->

                     <!-- SIMPLE DROPDOWN -->
                     <div class="simple-dropdown padded reaction-item-dropdown">
                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Neko Bebop</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Nick Grissom</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Sarah Diamond</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->
                     </div>
                     <!-- /SIMPLE DROPDOWN -->
                   </div>
                   <!-- /REACTION ITEM -->
                 </div>
                 <!-- /META LINE LIST -->

                 <!-- META LINE TEXT -->
                 <p class="meta-line-text">4</p>
                 <!-- /META LINE TEXT -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LINK -->
                 <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                 <!-- /META LINE LINK -->

                 <!-- REACTION OPTIONS -->
                 <div class="reaction-options small reaction-options-small-dropdown">
                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Like">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/like.png" alt="reaction-like">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Love">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/love.png" alt="reaction-love">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/dislike.png" alt="reaction-dislike">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Happy">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/happy.png" alt="reaction-happy">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Funny">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/funny.png" alt="reaction-funny">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Wow">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/wow.png" alt="reaction-wow">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Angry">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/angry.png" alt="reaction-angry">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Sad">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/sad.png" alt="reaction-sad">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->
                 </div>
                 <!-- /REACTION OPTIONS -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LINK -->
                 <p class="meta-line-link light">Reply</p>
                 <!-- /META LINE LINK -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE TIMESTAMP -->
                 <p class="meta-line-timestamp">15 min ago</p>
                 <!-- /META LINE TIMESTAMP -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line settings">
                 <!-- POST SETTINGS WRAP -->
                 <div class="post-settings-wrap">
                   <!-- POST SETTINGS -->
                   <div class="post-settings post-settings-dropdown-trigger">
                     <!-- POST SETTINGS ICON -->
                     <svg class="post-settings-icon icon-more-dots">
                       <use xlink:href="#svg-more-dots"></use>
                     </svg>
                     <!-- /POST SETTINGS ICON -->
                   </div>
                   <!-- /POST SETTINGS -->

                   <!-- SIMPLE DROPDOWN -->
                   <div class="simple-dropdown post-settings-dropdown">
                     <!-- SIMPLE DROPDOWN LINK -->
                     <p class="simple-dropdown-link">Report Post</p>
                     <!-- /SIMPLE DROPDOWN LINK -->
                   </div>
                   <!-- /SIMPLE DROPDOWN -->
                 </div>
                 <!-- /POST SETTINGS WRAP -->
               </div>
               <!-- /META LINE -->
             </div>
             <!-- /CONTENT ACTION -->
           </div>
           <!-- /CONTENT ACTIONS -->
         </div>
         <!-- /POST COMMENT -->

         <!-- POST COMMENT -->
         <div class="post-comment unread reply-2">
           <!-- USER AVATAR -->
           <a class="user-avatar small no-outline" href="profile-timeline.html">
             <!-- USER AVATAR CONTENT -->
             <div class="user-avatar-content">
               <!-- HEXAGON -->
               <div class="hexagon-image-30-32" data-src="/assets/img/avatar/03.jpg"></div>
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
           </a>
           <!-- /USER AVATAR -->

           <!-- POST COMMENT TEXT -->
           <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Nick Grissom</a>I wouldn't miss it for anything!! Love both streams!</p>
           <!-- /POST COMMENT TEXT -->

           <!-- CONTENT ACTIONS -->
           <div class="content-actions">
             <!-- CONTENT ACTION -->
             <div class="content-action">
               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LIST -->
                 <div class="meta-line-list reaction-item-list small">
                   <!-- REACTION ITEM -->
                   <div class="reaction-item">
                     <!-- REACTION IMAGE -->
                     <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/like.png" alt="reaction-like">
                     <!-- /REACTION IMAGE -->

                     <!-- SIMPLE DROPDOWN -->
                     <div class="simple-dropdown padded reaction-item-dropdown">
                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                       <!-- /SIMPLE DROPDOWN TEXT -->

                       <!-- SIMPLE DROPDOWN TEXT -->
                       <p class="simple-dropdown-text">Neko Bebop</p>
                       <!-- /SIMPLE DROPDOWN TEXT -->
                     </div>
                     <!-- /SIMPLE DROPDOWN -->
                   </div>
                   <!-- /REACTION ITEM -->
                 </div>
                 <!-- /META LINE LIST -->

                 <!-- META LINE TEXT -->
                 <p class="meta-line-text">1</p>
                 <!-- /META LINE TEXT -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LINK -->
                 <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                 <!-- /META LINE LINK -->

                 <!-- REACTION OPTIONS -->
                 <div class="reaction-options small reaction-options-small-dropdown">
                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Like">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/like.png" alt="reaction-like">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Love">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/love.png" alt="reaction-love">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/dislike.png" alt="reaction-dislike">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Happy">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/happy.png" alt="reaction-happy">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Funny">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/funny.png" alt="reaction-funny">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Wow">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/wow.png" alt="reaction-wow">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Angry">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/angry.png" alt="reaction-angry">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Sad">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/sad.png" alt="reaction-sad">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->
                 </div>
                 <!-- /REACTION OPTIONS -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LINK -->
                 <p class="meta-line-link light">Reply</p>
                 <!-- /META LINE LINK -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE TIMESTAMP -->
                 <p class="meta-line-timestamp">2 min ago</p>
                 <!-- /META LINE TIMESTAMP -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line settings">
                 <!-- POST SETTINGS WRAP -->
                 <div class="post-settings-wrap">
                   <!-- POST SETTINGS -->
                   <div class="post-settings post-settings-dropdown-trigger">
                     <!-- POST SETTINGS ICON -->
                     <svg class="post-settings-icon icon-more-dots">
                       <use xlink:href="#svg-more-dots"></use>
                     </svg>
                     <!-- /POST SETTINGS ICON -->
                   </div>
                   <!-- /POST SETTINGS -->

                   <!-- SIMPLE DROPDOWN -->
                   <div class="simple-dropdown post-settings-dropdown">
                     <!-- SIMPLE DROPDOWN LINK -->
                     <p class="simple-dropdown-link">Report Post</p>
                     <!-- /SIMPLE DROPDOWN LINK -->
                   </div>
                   <!-- /SIMPLE DROPDOWN -->
                 </div>
                 <!-- /POST SETTINGS WRAP -->
               </div>
               <!-- /META LINE -->
             </div>
             <!-- /CONTENT ACTION -->
           </div>
           <!-- /CONTENT ACTIONS -->
         </div>
         <!-- /POST COMMENT -->

         <!-- POST COMMENT -->
         <div class="post-comment">
           <!-- USER AVATAR -->
           <a class="user-avatar small no-outline" href="profile-timeline.html">
             <!-- USER AVATAR CONTENT -->
             <div class="user-avatar-content">
               <!-- HEXAGON -->
               <div class="hexagon-image-30-32" data-src="/assets/img/avatar/02.jpg"></div>
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
               <p class="user-avatar-badge-text">19</p>
               <!-- /USER AVATAR BADGE TEXT -->
             </div>
             <!-- /USER AVATAR BADGE -->
           </a>
           <!-- /USER AVATAR -->

           <!-- POST COMMENT TEXT -->
           <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Destroy Dex</a>YEAHHH!! <a href="profile-timeline.html">@MarinaValentine</a> I really enjoyed your last stream and it also was really funny! Can't wait!</p>
           <!-- /POST COMMENT TEXT -->

           <!-- CONTENT ACTIONS -->
           <div class="content-actions">
             <!-- CONTENT ACTION -->
             <div class="content-action">
               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LINK -->
                 <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                 <!-- /META LINE LINK -->

                 <!-- REACTION OPTIONS -->
                 <div class="reaction-options small reaction-options-small-dropdown">
                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Like">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/like.png" alt="reaction-like">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Love">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/love.png" alt="reaction-love">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/dislike.png" alt="reaction-dislike">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Happy">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/happy.png" alt="reaction-happy">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Funny">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/funny.png" alt="reaction-funny">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Wow">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/wow.png" alt="reaction-wow">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Angry">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/angry.png" alt="reaction-angry">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Sad">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/sad.png" alt="reaction-sad">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->
                 </div>
                 <!-- /REACTION OPTIONS -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LINK -->
                 <p class="meta-line-link light">Reply</p>
                 <!-- /META LINE LINK -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE TIMESTAMP -->
                 <p class="meta-line-timestamp">27 min ago</p>
                 <!-- /META LINE TIMESTAMP -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line settings">
                 <!-- POST SETTINGS WRAP -->
                 <div class="post-settings-wrap">
                   <!-- POST SETTINGS -->
                   <div class="post-settings post-settings-dropdown-trigger">
                     <!-- POST SETTINGS ICON -->
                     <svg class="post-settings-icon icon-more-dots">
                       <use xlink:href="#svg-more-dots"></use>
                     </svg>
                     <!-- /POST SETTINGS ICON -->
                   </div>
                   <!-- /POST SETTINGS -->

                   <!-- SIMPLE DROPDOWN -->
                   <div class="simple-dropdown post-settings-dropdown">
                     <!-- SIMPLE DROPDOWN LINK -->
                     <p class="simple-dropdown-link">Report Post</p>
                     <!-- /SIMPLE DROPDOWN LINK -->
                   </div>
                   <!-- /SIMPLE DROPDOWN -->
                 </div>
                 <!-- /POST SETTINGS WRAP -->
               </div>
               <!-- /META LINE -->
             </div>
             <!-- /CONTENT ACTION -->
           </div>
           <!-- /CONTENT ACTIONS -->
         </div>
         <!-- /POST COMMENT -->

         <!-- POST COMMENT -->
         <div class="post-comment">
           <!-- USER AVATAR -->
           <a class="user-avatar small no-outline" href="profile-timeline.html">
             <!-- USER AVATAR CONTENT -->
             <div class="user-avatar-content">
               <!-- HEXAGON -->
               <div class="hexagon-image-30-32" data-src="/assets/img/avatar/07.jpg"></div>
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
               <p class="user-avatar-badge-text">26</p>
               <!-- /USER AVATAR BADGE TEXT -->
             </div>
             <!-- /USER AVATAR BADGE -->
           </a>
           <!-- /USER AVATAR -->

           <!-- POST COMMENT TEXT -->
           <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Sarah Diamond</a>That sounds awesome Marina! And also thanks a lot for the art sneak peek! I went to the GameCon last week and had a great time playing the game's open demo.</p>
           <!-- /POST COMMENT TEXT -->

           <!-- CONTENT ACTIONS -->
           <div class="content-actions">
             <!-- CONTENT ACTION -->
             <div class="content-action">
               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LINK -->
                 <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                 <!-- /META LINE LINK -->

                 <!-- REACTION OPTIONS -->
                 <div class="reaction-options small reaction-options-small-dropdown">
                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Like">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/like.png" alt="reaction-like">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Love">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/love.png" alt="reaction-love">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/dislike.png" alt="reaction-dislike">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Happy">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/happy.png" alt="reaction-happy">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Funny">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/funny.png" alt="reaction-funny">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Wow">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/wow.png" alt="reaction-wow">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Angry">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/angry.png" alt="reaction-angry">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->

                   <!-- REACTION OPTION -->
                   <div class="reaction-option text-tooltip-tft" data-title="Sad">
                     <!-- REACTION OPTION IMAGE -->
                     <img class="reaction-option-image" src="/assets/img/reaction/sad.png" alt="reaction-sad">
                     <!-- /REACTION OPTION IMAGE -->
                   </div>
                   <!-- /REACTION OPTION -->
                 </div>
                 <!-- /REACTION OPTIONS -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE LINK -->
                 <p class="meta-line-link light">Reply</p>
                 <!-- /META LINE LINK -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line">
                 <!-- META LINE TIMESTAMP -->
                 <p class="meta-line-timestamp">39 min ago</p>
                 <!-- /META LINE TIMESTAMP -->
               </div>
               <!-- /META LINE -->

               <!-- META LINE -->
               <div class="meta-line settings">
                 <!-- POST SETTINGS WRAP -->
                 <div class="post-settings-wrap">
                   <!-- POST SETTINGS -->
                   <div class="post-settings post-settings-dropdown-trigger">
                     <!-- POST SETTINGS ICON -->
                     <svg class="post-settings-icon icon-more-dots">
                       <use xlink:href="#svg-more-dots"></use>
                     </svg>
                     <!-- /POST SETTINGS ICON -->
                   </div>
                   <!-- /POST SETTINGS -->

                   <!-- SIMPLE DROPDOWN -->
                   <div class="simple-dropdown post-settings-dropdown">
                     <!-- SIMPLE DROPDOWN LINK -->
                     <p class="simple-dropdown-link">Report Post</p>
                     <!-- /SIMPLE DROPDOWN LINK -->
                   </div>
                   <!-- /SIMPLE DROPDOWN -->
                 </div>
                 <!-- /POST SETTINGS WRAP -->
               </div>
               <!-- /META LINE -->
             </div>
             <!-- /CONTENT ACTION -->
           </div>
           <!-- /CONTENT ACTIONS -->
         </div>
         <!-- /POST COMMENT -->

         <!-- POST COMMENT HEADING -->
         <p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
         <!-- /POST COMMENT HEADING -->
       </div>
       <!-- /POST COMMENT LIST -->
     </div>
     <!-- /WIDGET BOX SCROLLABLE -->

     <!-- POST COMMENT FORM -->
     <div class="post-comment-form border-top">
       <!-- USER AVATAR -->
       <div class="user-avatar small no-outline">
         <!-- USER AVATAR CONTENT -->
         <div class="user-avatar-content">
           <!-- HEXAGON -->
           <div class="hexagon-image-30-32" data-src="/assets/img/avatar/01.jpg"></div>
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
           <p class="user-avatar-badge-text">24</p>
           <!-- /USER AVATAR BADGE TEXT -->
         </div>
         <!-- /USER AVATAR BADGE -->
       </div>
       <!-- /USER AVATAR -->

       <!-- FORM -->
       <form class="form">
         <!-- FORM ROW -->
         <div class="form-row">
           <!-- FORM ITEM -->
           <div class="form-item">
             <!-- FORM INPUT -->
             <div class="form-input small">
               <label for="popup-post-reply">Your Reply</label>
               <input type="text" id="popup-post-reply" name="popup_post_reply">
             </div>
             <!-- /FORM INPUT -->
           </div>
           <!-- /FORM ITEM -->
         </div>
         <!-- /FORM ROW -->
       </form>
       <!-- /FORM -->
     </div>
     <!-- /POST COMMENT FORM -->
   </div>
   <!-- /WIDGET BOX -->

   <!-- POPUP PICTURE IMAGE WRAP -->
   <div class="popup-picture-image-wrap">
     <!-- POPUP PICTURE IMAGE -->
     <figure class="popup-picture-image">
       <img src="/assets/img/cover/04.jpg" alt="cover-04">
     </figure>
     <!-- /POPUP PICTURE IMAGE -->
   </div>
   <!-- /POPUP PICTURE IMAGE WRAP -->
 </div>
 <!-- /POPUP PICTURE -->
@endsection

@endforeach
