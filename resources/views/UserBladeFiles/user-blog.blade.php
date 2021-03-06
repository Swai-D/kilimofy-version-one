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
      <h2 class="section-title">Blog Posts <span class="highlighted">{{$user_blog_post_count}}</span></h2>
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

  @if($user_blog_post_count > 0)
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
  @endif

  @if(session()->has('Message'))
    <div class="alert alert" role = "alert">
      <p class="lead" style="color: #f33155">
        {{session()->get('Message')}}
      </p>
    </div>
  @endif
  
  <!-- GRID -->
  <div class="grid grid-4-4-4 centered">

    @forelse($user_blog_post as $blog)
    <!-- POST PREVIEW -->
    <div class="post-preview">
      <!-- POST PREVIEW IMAGE -->
      <figure class="post-preview-image liquid">
        <img src="{{$blog->cover_image}}" alt="cover-07">
      </figure>
      <!-- /POST PREVIEW IMAGE -->

      <!-- POST PREVIEW INFO -->
      <div class="post-preview-info fixed-height">
        <!-- POST PREVIEW INFO TOP -->
        <div class="post-preview-info-top">
          <!-- POST PREVIEW TIMESTAMP -->
          <p class="post-preview-timestamp">{{$blog->created_at->diffForHumans()}}</p>
          <!-- /POST PREVIEW TIMESTAMP -->

          <!-- POST PREVIEW TITLE -->
          <p class="post-preview-title">{{$blog->title}}</p>
          <!-- /POST PREVIEW TITLE -->
        </div>
        <!-- /POST PREVIEW INFO TOP -->

        <!-- POST PREVIEW INFO BOTTOM -->
        <div class="post-preview-info-bottom">
          <!-- POST PREVIEW TEXT -->
          <p class="post-preview-text">{!! \Illuminate\Support\Str::limit($blog->body, 150, '...') !!} </p>
          <!-- /POST PREVIEW TEXT -->

          <!-- POST PREVIEW LINK -->
          <a class="post-preview-link" href="/kilimofy/Blog/Blog-Post/{{$blog->id}}">Read more...</a>
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
        <!-- <a href="/kilimofy/Blog/Edit-Blog-Post/{{$blog->id}}" class="button secondary full " style="padding:2px; margin:2px;">Edit </a> -->
        <!-- /BUTTON -->
        <!-- BUTTON -->
        <a href="/kilimofy/Blog/Delete-Blog-Post/{{$blog->id}}" class="button full" style="padding:2px; background-color: red; margin:2px;">Delete </a>
      </div>
      <br>
    </div>
    <!-- /POST PREVIEW -->
    @empty
    <p class="text-danger"> Hujachapisha Makala Yeyote kwa sasa !</p>
    @endforelse
  </div>
  <!-- /GRID -->

  <!-- include('LayoutBladeFiles.page-bar') -->
</section>
<!-- /SECTION -->
@endsection
@endforeach

<!-- POPUP BOX -->
@include('LayoutBladeFiles.summernote-form')
<!-- /POPUP BOX -->
