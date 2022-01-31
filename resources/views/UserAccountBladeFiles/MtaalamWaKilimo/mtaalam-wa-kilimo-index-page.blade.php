@include('LayoutBladeFiles.summernote')

@extends('LayoutBladeFiles.app-layout')

@section('title','Mtaalamu wa Kilimo')
@section('menu-status-education','active')

@section('discription-title')
 Akaunti ya {{Auth::user()->name}}
@endsection

@section('discription-details','kilimofy')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION BANNER -->
  @include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->


  <!-- SECTION -->
  <section class="section">

    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Welcome to</p>
        <!-- /SECTION PRETITLE -->

        <!-- SECTION TITLE -->
        <h2 class="section-title">Animation Watchtower</h2>
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
          <p class="section-filters-bar-title"><a href="">Makala</a><span class="separator"></span><a href="">Makala Category</a></p>
          <!-- /SECTION FILTERS BAR TITLE -->

          <!-- SECTION FILTERS BAR TEXT -->
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
                <div class="hexagon-image-18-20" data-src="/Uploads/avatars/{{Auth::user()->avatar}}"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /USER AVATAR -->
            <a class="bold" href="profile-timeline.html">{{Auth::user()->username}}</a>
            2 minutes ago
          </div>
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
        <p class="button secondary popup-album-creation-trigger">+ Create Makala</p>
        <!-- /BUTTON -->
      </div>
      <!-- /SECTION FILTERS BAR ACTIONS -->
    </div>
    <!-- /SECTION FILTERS BAR -->

    <!-- GRID -->
    <div class="grid grid-4-4-4 centered">

      <!-- POST PREVIEW -->
      <div class="post-preview">
        <!-- POST PREVIEW IMAGE -->
        <figure class="post-preview-image liquid">
          <img src="/assets/img/cover/07.jpg" alt="cover-07">
        </figure>
        <!-- /POST PREVIEW IMAGE -->

        <!-- POST PREVIEW INFO -->
        <div class="post-preview-info fixed-height">
          <!-- POST PREVIEW INFO TOP -->
          <div class="post-preview-info-top">
            <!-- POST PREVIEW TIMESTAMP -->
            <p class="post-preview-timestamp">1 month ago</p>
            <!-- /POST PREVIEW TIMESTAMP -->

            <!-- POST PREVIEW TITLE -->
            <p class="post-preview-title">Old Super Mochi's Island is getting a remake!</p>
            <!-- /POST PREVIEW TITLE -->
          </div>
          <!-- /POST PREVIEW INFO TOP -->

          <!-- POST PREVIEW INFO BOTTOM -->
          <div class="post-preview-info-bottom">
            <!-- POST PREVIEW TEXT -->
            <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
            <!-- /POST PREVIEW TEXT -->

            <!-- POST PREVIEW LINK -->
            <a class="post-preview-link" href="profile-post.html">Read more...</a>
            <!-- /POST PREVIEW LINK -->
          </div>
          <!-- /POST PREVIEW INFO BOTTOM -->
        </div>
        <!-- /POST PREVIEW INFO -->

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
                  <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/funny.png" alt="reaction-funny">
                  <!-- /REACTION IMAGE -->

                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown padded reaction-item-dropdown">
                    <!-- SIMPLE DROPDOWN TEXT -->
                    <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/funny.png" alt="reaction-funny"> <span class="bold">Funny</span></p>
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
                    <p class="simple-dropdown-text">Jett Spiegel</p>
                    <!-- /SIMPLE DROPDOWN TEXT -->

                    <!-- SIMPLE DROPDOWN TEXT -->
                    <p class="simple-dropdown-text">Jane Rodgers</p>
                    <!-- /SIMPLE DROPDOWN TEXT -->
                  </div>
                  <!-- /SIMPLE DROPDOWN -->
                </div>
                <!-- /REACTION ITEM -->

                <!-- REACTION ITEM -->
                <div class="reaction-item">
                  <!-- REACTION IMAGE -->
                  <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/love.png" alt="reaction-love">
                  <!-- /REACTION IMAGE -->

                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown padded reaction-item-dropdown">

                  </div>
                  <!-- /SIMPLE DROPDOWN -->
                </div>
                <!-- /REACTION ITEM -->
              </div>
              <!-- /REACTION ITEM LIST -->

              <!-- META LINE TEXT -->
              <p class="meta-line-text">15</p>
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
              <a class="meta-line-link" href="profile-post.html#comments">9 Comments</a>
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

        <div class="user-preview-actions">
          <!-- BUTTON -->
          <a href="/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/Edit-Trip/" class="button secondary full " style="padding:2px; margin:2px;">Edit </a>
          <!-- /BUTTON -->
          <!-- BUTTON -->
          <a href="/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/Delete-Trip/" class="button full" style="padding:2px; background-color: red; margin:2px;">Delete </a>
        </div>
        <br>
      </div>
      <!-- /POST PREVIEW -->
    </div>
    <!-- /GRID -->
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
  <p class="popup-box-title ">+Create Makala</p>
  <!-- /POPUP BOX TITLE -->

  <!-- FORM -->
  <form class="form" action="/kilimofy/Blog/User-Create-Blog-Post" method="post" enctype="multipart/form-data">
    @csrf
  <!-- FORM UPLOADABLES -->
    <div class="row">

       <div class="col-md-12">
         <div class="card card-outline card-info">
           <div class="card-header">
             <h3 class="card-title center">
               Makala
             </h3>
           </div>
           <!-- /.card-header -->

           <div class="card-body">
           <br>
             <div class="form-row">
               <!-- FORM ITEM -->
               <div class="form-item">
                 <!-- FORM SELECT -->
                 <div class="form-select">
                   <label for="rating-reason">Usafir Gani ?</label>
                   <select class="for" name="CarType">
                     <option value="Kirikuu" >Kirikuu</option>
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
               </div>
               <!-- /FORM ITEM -->
               <input type="hidden" name="user_name" value="{{Auth::user()->name}}">
               <input type="hidden" name="avatar" value="{{Auth::user()->avatar}}">
               <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
             </div>

             <!-- FORM ROW -->
             <div class="form-row">
               <!-- FORM ITEM -->
               <div class="form-item">
                 <!-- FORM INPUT -->
                 <div class="form-input small mid-textarea">
                   <textarea id="item-tags" name="item_description" placeholder="Andika maelezo mafupi ukielezea biashara yako, yasiyozidi maneno(30)..."></textarea>
                 </div>
                 <!-- /FORM INPUT -->
               </div>
               <!-- /FORM ITEM -->
             </div>
             <!-- /FORM ROW -->
           </div>
           <div class="card-footer">

           </div>
         </div>
       </div>

      <!-- /.col-->
    </div>
    <!-- ./row -->
    <!-- /FORM UPLOADABLES -->

    <!-- POPUP BOX ACTIONS -->
    <div class="popup-box-actions">
      <!-- POPUP BOX ACTION -->
      <button type="reset" class="popup-box-action button white popup-album-creation-trigger">Discard All</button>
      <!-- /POPUP BOX ACTION -->

      <!-- POPUP BOX ACTION -->
      <button type="submit" class="popup-box-action button secondary">Post Makala!</button>
      <!-- /POPUP BOX ACTION -->
    </div>
    <!-- /POPUP BOX ACTIONS -->
  </form>
  <!-- /FORM -->
</div>
<!-- /POPUP BOX -->
