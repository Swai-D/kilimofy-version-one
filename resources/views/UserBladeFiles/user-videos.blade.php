@extends('LayoutBladeFiles.user-account-layout')
@foreach($user as $user)

@section('title')
{{$user->name}}'s Videos
@endsection
@section('videos-menu-active', 'active')

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
          <h2 class="section-title">Videos <span class="highlighted">{{$user_latest_video_count}}</span></h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->

      @if(Auth::user()->id == $user->id)
        <!-- SECTION HEADER ACTIONS -->
        <div class="section-header-actions">
          <!-- SECTION HEADER ACTION -->
          <p class="section-header-action">Add Video +</p>
          <!-- /SECTION HEADER ACTION -->
        </div>
        <!-- /SECTION HEADER ACTIONS -->

     @endif
      </div>
      <!-- /SECTION HEADER -->

      <!-- GRID -->
      <div class="grid grid-4-4-4 centered">
        @foreach($user_latest_video as $user_latest_video)
        <!-- VIDEO BOX -->
        <div class="video-box">
          <!-- VIDEO BOX COVER -->
          <div class="video-box">
            <!-- VIDEO BOX COVER IMAGE -->
            <video  style="width:100%;"  autoplay muted loop controls>
                  <source src="/Uploads/PostVideos/{{$user_latest_video->Video}}" type="video/mp4" >
           </video>
            <!-- /VIDEO BOX COVER IMAGE -->

          </div>
          <!-- /VIDEO BOX COVER -->

          <!-- VIDEO BOX INFO -->
          <div class="video-box-info">
            <!-- VIDEO BOX TITLE -->
            <p class="video-box-title">Mochi's Island Story Mode</p>
            <!-- /VIDEO BOX TITLE -->

            <!-- VIDEO BOX TEXT -->
            <p class="video-box-text">1 hour ago</p>
            <!-- /VIDEO BOX TEXT -->
          </div>
          <!-- /VIDEO BOX INFO -->
        </div>
        <!-- /VIDEO BOX -->
        @endforeach
      </div>
      <!-- /GRID -->
    </section>
    <!-- /SECTION -->
  </div>
  <!-- /CONTENT GRID -->

  @if($user_latest_video_count != 0)
    @include('LayoutBladeFiles.page-bar')
  @endif
  <!-- POPUP VIDEO -->
  <div class="popup-video">
    <!-- POPUP CLOSE BUTTON -->
    <div class="popup-close-button popup-video-trigger">
      <!-- POPUP CLOSE BUTTON ICON -->
      <svg class="popup-close-button-icon icon-cross">
        <use xlink:href="#svg-cross"></use>
      </svg>
      <!-- /POPUP CLOSE BUTTON ICON -->
    </div>
    <!-- /POPUP CLOSE BUTTON -->

    <!-- IFRAME WRAP -->
    <div class="iframe-wrap">
      <iframe src="https://www.youtube.com/embed/6ErE27RNLDQ?start=200" allowfullscreen></iframe>
    </div>
    <!-- /IFRAME WRAP -->
  </div>
  <!-- /POPUP VIDEO -->

@endsection
@endforeach
