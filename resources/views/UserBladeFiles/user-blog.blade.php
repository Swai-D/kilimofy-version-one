@extends('LayoutBladeFiles.user-account-layout')
@include('LayoutBladeFiles.summernote')

@foreach($user as $user)

@section('title')
{{$user->name}}'s Blog
@endsection

@section('blog-menu-active', 'active')

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
      <h2 class="section-title">Blog Posts <span class="highlighted">5</span></h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
    <!-- SECTION HEADER ACTIONS -->
  @if(Auth::user()->id == $user->id)
  <div class="section-header-actions">
    <!-- SECTION HEADER ACTION -->

    <p class="section-header-action  popup-album-creation-trigger"><span style="color:green;">Create Blog Post +</span> </p>
    <!-- /SECTION HEADER ACTION -->

    <!-- SECTION HEADER ACTION -->
    <!-- <a class="section-header-action" href="profile-photos-inside.html">See All</a> -->
    <!-- /SECTION HEADER ACTION -->
  </div>
  @endif
    <!-- /SECTION HEADER ACTIONS -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- SECTION FILTERS BAR -->
  <div class="section-filters-bar v2">
    <!-- FORM -->
    <form class="form">
      <!-- FORM ITEM -->
      <div class="form-item split medium">
        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="post-filter-category">Filter By</label>
          <select id="post-filter-category" name="post_filter_category">
            <option value="0">Reactions Received</option>
            <option value="1">Comment Count</option>
            <option value="2">Share Count</option>
          </select>
          <!-- FORM SELECT ICON -->
          <svg class="form-select-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /FORM SELECT ICON -->
        </div>
        <!-- /FORM SELECT -->

        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="post-filter-order">Order By</label>
          <select id="post-filter-order" name="post_filter_order">
            <option value="0">Highest to Lowest</option>
            <option value="1">Lowest to Highest</option>
          </select>
          <!-- FORM SELECT ICON -->
          <svg class="form-select-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /FORM SELECT ICON -->
        </div>
        <!-- /FORM SELECT -->

        <!-- FORM SELECT -->
        <div class="form-select">
          <label for="post-filter-show">Show</label>
          <select id="post-filter-show" name="post_filter_show">
            <option value="0">12 Posts per Page</option>
            <option value="1">24 Posts per Page</option>
          </select>
          <!-- FORM SELECT ICON -->
          <svg class="form-select-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /FORM SELECT ICON -->
        </div>
        <!-- /FORM SELECT -->

        <!-- BUTTON -->
        <button class="button primary">Filter Posts</button>
        <!-- /BUTTON -->
      </div>
      <!-- /FORM ITEM -->
    </form>
    <!-- /FORM -->
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
          <a class="post-preview-link" href="/kilimofy/UserAccount/user_blog_post_page/{{}}">Read more...</a>
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

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Neko Bebop</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Nick Grissom</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Sarah Diamond</p>
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
                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
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

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Jett Spiegel</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Marcus Jhonson</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text">Jane Rodgers</p>
                  <!-- /SIMPLE DROPDOWN TEXT -->

                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text"><span class="bold">and 3 more...</span></p>
                  <!-- /SIMPLE DROPDOWN TEXT -->
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
    </div>
    <!-- /POST PREVIEW -->

  </div>
  <!-- /GRID -->

  @include('LayoutBladeFiles.page-bar')
</section>
<!-- /SECTION -->
@endsection
@endforeach

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
  <p class="popup-box-title">Create Blog  +</p>
  <!-- /POPUP BOX TITLE -->

  <!-- FORM -->
  <form class="form" action="/kilimofy/Blog/User-Create-Blog-Post" method="post" enctype="multipart/form-data">
    @csrf
  <!-- FORM UPLOADABLES -->
    <div class="row">

       <div class="col-md-12">
         <div class="card card-outline card-info">
           <div class="card-header">
             <h3 class="card-title">
               Blog Post
             </h3>
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <input type="hidden" name="user_name" value="{{Auth::user()->name}}">
             <input type="hidden" name="avatar" value="{{Auth::user()->avatar}}">
             <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <textarea class="form-control" name="summernote" id="summernote"></textarea>
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
      <button type="submit" class="popup-box-action button secondary">Post Blog!</button>
      <!-- /POPUP BOX ACTION -->
    </div>
    <!-- /POPUP BOX ACTIONS -->
  </form>
  <!-- /FORM -->
</div>
<!-- /POPUP BOX -->
