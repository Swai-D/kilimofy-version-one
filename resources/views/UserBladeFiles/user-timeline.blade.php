@extends('LayoutBladeFiles.user-account-layout')
@foreach($user as $user)

@section('title')
{{$user->name}}'s Timelines
@endsection

@section('timeline-menu-active', 'active')

@section('mini-user-profile-active')
 style="fill:yellow "
@endsection

@section('user-data')
<div class="grid grid-3-6-3 mobile-prefer-content">
  <!-- GRID COLUMN -->
  <div class="grid-column">
    <!-- WIDGET BOX -->
    <div class="widget-box">
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
            <p class="simple-dropdown-link">Widget Settings</p>
            <!-- /SIMPLE DROPDOWN LINK -->
          </div>
          <!-- /SIMPLE DROPDOWN -->
        </div>
        <!-- /POST SETTINGS WRAP -->
      </div>
      <!-- /WIDGET BOX SETTINGS -->

      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">About {{$user->name}}</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- PARAGRAPH -->
        <p class="paragraph">{{$user->description}}</p>
        <!-- /PARAGRAPH -->

        <!-- INFORMATION LINE LIST -->
        <div class="information-line-list">
          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Joined</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">{{$user->created_at->format('M d, Y')}}</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">City</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">{{$user->user_location}}</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->

          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Country</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text">Tanzania</p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->


          <!-- INFORMATION LINE -->
          <div class="information-line">
            <!-- INFORMATION LINE TITLE -->
            <p class="information-line-title">Web</p>
            <!-- /INFORMATION LINE TITLE -->

            <!-- INFORMATION LINE TEXT -->
            <p class="information-line-text"><a href="https://kilimofy.herokuapp.com/">www.kilimofy.com</a></p>
            <!-- /INFORMATION LINE TEXT -->
          </div>
          <!-- /INFORMATION LINE -->
        </div>
        <!-- /INFORMATION LINE LIST -->
      </div>
      <!-- /WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->


    <!-- WIDGET BOX -->
    <div class="widget-box">
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
            <p class="simple-dropdown-link">Widget Settings</p>
            <!-- /SIMPLE DROPDOWN LINK -->
          </div>
          <!-- /SIMPLE DROPDOWN -->
        </div>
        <!-- /POST SETTINGS WRAP -->
      </div>
      <!-- /WIDGET BOX SETTINGS -->

      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Friends <span class="highlighted">{{$users_count}}</span></p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">

        <!-- USER STATUS LIST -->
        <div class="user-status-list">
          @forelse($users as $user)
             @if($loop->index < 5)
            <!-- USER STATUS -->
            <div class="user-status request-small">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="/kilimofy/UserAccount/about_user_page/{{$user->id}}-about-{{$user->name}}">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{$user->avatar}}"></div>
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


                </div>
                <!-- /USER AVATAR -->
              </a>
              <!-- /USER STATUS AVATAR -->

              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><a class="bold" href="/kilimofy/UserAccount/about_user_page/{{$user->id}}-about-{{$user->name}}">{{$user->name}}</a></p>
              <!-- /USER STATUS TITLE -->

              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">2 friends in common</p>
              <!-- /USER STATUS TEXT -->

              <!-- ACTION REQUEST LIST -->
              <div class="action-request-list">
                <!-- ACTION REQUEST -->
                <div class="action-request accept">
                  <!-- ACTION REQUEST ICON -->
                  <svg class="action-request-icon icon-add-friend">
                    <use xlink:href="#svg-add-friend"></use>
                  </svg>
                  <!-- /ACTION REQUEST ICON -->
                </div>
                <!-- /ACTION REQUEST -->
              </div>
              <!-- ACTION REQUEST LIST -->
            </div>
            <!-- /USER STATUS -->
            @endif

          @empty
          <p class="progress-arc-summary-subtitle text-center text-danger">Hatuna Rafiki wakukupatia kwasasa !</p>

          @endforelse
        </div>
        <!-- /USER STATUS LIST -->

      </div>
      <!-- WIDGET BOX CONTENT -->

    @if($users_count > 0)
    <!-- WIDGET BOX BUTTON -->
    <a class="widget-box-button button small secondary" href="/kilimofy/UserAccount/user_friends_page">See all Friends</a>
    <!-- /WIDGET BOX BUTTON -->
    @endif
    </div>
    <!-- /WIDGET BOX -->

    <!-- WIDGET BOX -->
    <div class="widget-box">
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
            <p class="simple-dropdown-link">Widget Settings</p>
            <!-- /SIMPLE DROPDOWN LINK -->
          </div>
          <!-- /SIMPLE DROPDOWN -->
        </div>
        <!-- /POST SETTINGS WRAP -->
      </div>
      <!-- /WIDGET BOX SETTINGS -->

      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Videos <span class="highlighted">{{$user_latest_video_count}}</span></p>
      <!-- /WIDGET BOX TITLE -->

      @forelse($user_latest_video as $video)
      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- VIDEO BOX LIST -->
        <div class="video-box-list">
          <!-- VIDEO BOX -->
          <div class="video-box small">
            <!-- VIDEO BOX COVER -->
            <div class="video-box-cover popup-video-trigger">
              <!-- VIDEO BOX COVER IMAGE -->
              <figure class="video-box-cover-image liquid">
                <img src="/assets/img/cover/08.jpg" alt="cover-08">
              </figure>
              <!-- /VIDEO BOX COVER IMAGE -->

              <!-- PLAY BUTTON -->
              <div class="play-button">
                <!-- PLAY BUTTON ICON -->
                <svg class="play-button-icon icon-play">
                  <use xlink:href="#svg-play"></use>
                </svg>
                <!-- /PLAY BUTTON ICON -->
              </div>
              <!-- /PLAY BUTTON -->

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
            <!-- /VIDEO BOX COVER -->
          </div>
          <!-- /VIDEO BOX -->

        </div>
        <!-- /VIDEO BOX LIST -->
      </div>
      <!-- WIDGET BOX CONTENT -->
      @empty
      <br>
      <p class="progress-arc-summary-subtitle text-center text-danger">Huna Video kwasasa !</p>

      @endforelse
    </div>
    <!-- /WIDGET BOX -->

    <!-- WIDGET BOX -->
    <div class="widget-box">
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
            <p class="simple-dropdown-link">Widget Settings</p>
            <!-- /SIMPLE DROPDOWN LINK -->
          </div>
          <!-- /SIMPLE DROPDOWN -->
        </div>
        <!-- /POST SETTINGS WRAP -->
      </div>
      <!-- /WIDGET BOX SETTINGS -->

      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Blog Posts <span class="highlighted">5</span></p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- POST PEEK LIST -->
        <div class="post-peek-list">
          <!-- POST PEEK -->
          <div class="post-peek">
            <!-- POST PEEK IMAGE -->
            <a class="post-peek-image" href="profile-post.html">
              <figure class="picture small round liquid">
                <img src="/assets/img/cover/19.jpg" alt="cover-19">
              </figure>
            </a>
            <!-- /POST PEEK IMAGE -->

            <!-- POST PEEK TITLE -->
            <p class="post-peek-title"><a href="profile-post.html">Here's the how and why did I became a full time Gaming Streamer</a></p>
            <!-- /POST PEEK TITLE -->

            <!-- POST PEEK TEXT -->
            <p class="post-peek-text">6 days ago</p>
            <!-- /POST PEEK TEXT -->
          </div>
          <!-- /POST PEEK -->
        </div>
        <!-- /POST PEEK LIST -->
      </div>
      <!-- /WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
  </div>
  <!-- /GRID COLUMN -->

  <!-- GRID COLUMN -->
  <div class="grid-column">


    @foreach($posts as $post)

      <!-- WIDGET BOX -->
      <div class="widget-box no-padding">
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
          <!-- TAG STICKER -->
          <div class="tag-sticker">
            <!-- TAG STICKER ICON -->
            <svg class="tag-sticker-icon primary icon-pinned">
              <use xlink:href="#svg-pinned"></use>
            </svg>
            <!-- /TAG STICKER ICON -->
          </div>
          <!-- /TAG STICKER -->
          <!-- WIDGET BOX STATUS CONTENT -->
          <div class="widget-box-status-content">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="/kilimofy/UserAccount/about_user_page/{{$post->User_id}}-about-{{$post->name}}-in-Kilimofy-Platform">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-border">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-40-44" data-src="/Uploads/avatars/{{$post->User_Image_Profile}}"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->
              </a>
              <!-- /USER STATUS AVATAR -->

              <!-- USER STATUS TITLE -->
              <p class="user-status-title medium"><a class="bold" href="/kilimofy/UserAccount/about_user_page/{{$post->User_id}}-about-{{$post->username}}-in-Kilimofy-Platform">{{$post->username}}</a> shared a <span class="bold">post</span></p>
              <!-- /USER STATUS TITLE -->

              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">{{$post->created_at->diffForHumans()}}</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->

            @if($post->Photo == NULL && $post->Video == NULL)
            <!-- QUOTE BOX -->
            <blockquote class="quote-box">
              <!-- QUOTE BOX ICON -->
              <svg class="quote-box-icon icon-quote">
                <use xlink:href="#svg-quote"></use>
              </svg>
              <!-- /QUOTE BOX ICON -->

              <!-- QUOTE BOX TEXT -->
              <p class="quote-box-text">{{$post->Caption}}</p>
              <!-- /QUOTE BOX TEXT -->
            </blockquote>
            <!-- /QUOTE BOX -->


             @elseif($post->Photo != NULL && $post->Video == NULL)
             <!-- VIDEO STATUS -->
             <a class="video-status" href="/kilimofy/Post/read_comments/{{$post->id}}-about-{{$post->name}}'s-post" >
               <!-- VIDEO STATUS IMAGE -->
               <img class="video-status-image" src="/Uploads/PostPhotos/{{$post->Photo}}" alt="cover-51">
               <!-- /VIDEO STATUS IMAGE -->
             </a>
             <!-- /VIDEO STATUS -->
             <br>
             <!-- WIDGET BOX STATUS TEXT -->
             <p class="widget-box-status-text">{{$post->Caption}}</p>
             <!-- /WIDGET BOX STATUS TEXT -->
             @elseif($post->Video != Null && $post->Photo == Null)
             <!-- VIDEO BOX -->
             <br>
             <div class="video-box ">
               <!-- VIDEO BOX COVER -->
               <div class="video-box">
                 <!-- VIDEO BOX COVER IMAGE -->
                <a href="/kilimofy/Post/read_comments/{{$post->id}}-about-{{$post->name}}'s-post">
                  <video  style="width:100%;"  autoplay muted loop controls>
                        <source src="/Uploads/PostVideos/{{$post->Video}}" type="video/mp4" >
                 </video>
                </a>
                 <!-- /VIDEO BOX COVER IMAGE -->


                 <!-- VIDEO BOX INFO -->
                 <div class="video-box-info">
                   <!-- WIDGET BOX STATUS TEXT -->
                   <p class="widget-box-status-text">{{$post->Caption}}</p>
                   <!-- /WIDGET BOX STATUS TEXT -->

                   <!-- VIDEO BOX TEXT -->
                   <p class="video-box-text">{{$post->created_at->diffForHumans()}}</p>
                   <!-- /VIDEO BOX TEXT -->
                  </div>
                 <!-- /VIDEO BOX INFO -->

               </div>
               <!-- /VIDEO BOX COVER -->

             </div>
             <!-- /VIDEO BOX -->

             <br>


             @endif
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
                        <p class="simple-dropdown-text">Matt Parker</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->

                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">Destroy Dex</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->

                        <!-- SIMPLE DROPDOWN TEXT -->
                        <p class="simple-dropdown-text">The Green Goo</p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      </div>
                      <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /REACTION ITEM -->

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
                        <p class="simple-dropdown-text">Sandra Strange</p>
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
                        <p class="simple-dropdown-text"><span class="bold">and 6 more...</span></p>
                        <!-- /SIMPLE DROPDOWN TEXT -->
                      </div>
                      <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /REACTION ITEM -->
                  </div>
                  <!-- /META LINE LIST -->

                  <!-- META LINE TEXT -->
                  {{-- <p class="meta-line-text">{{$post->Likes}}</p> --}}
                  <p class="meta-line-text">332</p>
                  <!-- /META LINE TEXT -->
                </div>
                <!-- /META LINE -->

                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LIST -->
                  <div class="meta-line-list user-avatar-list">
                    <!-- USER AVATAR -->
                    <div class="user-avatar micro no-stats">
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
                        <div class="hexagon-image-18-20" data-src="/assets/img/avatar/07.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                    </div>
                    <!-- /USER AVATAR -->

                    <!-- USER AVATAR -->
                    <div class="user-avatar micro no-stats">
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
                        <div class="hexagon-image-18-20" data-src="/assets/img/avatar/13.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                    </div>
                    <!-- /USER AVATAR -->

                    <!-- USER AVATAR -->
                    <div class="user-avatar micro no-stats">
                      <!-- USER AVATAR BORDER -->
                      <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-22-24"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR BORDER -->

                      <!-- USER AVATAR CONTENT -->
                    @foreach($post->comments as $post_comment)
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-18-20" data-src="/Uploads/avatars/{{$post_comment->user_avatar}}"></div>
                      <!-- /HEXAGON -->
                    </div>
                    @endforeach
                      <!-- /USER AVATAR CONTENT -->
                    </div>
                    <!-- /USER AVATAR -->

                    <!-- USER AVATAR -->
                    <div class="user-avatar micro no-stats">
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
                        <div class="hexagon-image-18-20" data-src="/assets/img/avatar/10.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                    </div>
                    <!-- /USER AVATAR -->

                    <!-- USER AVATAR -->
                    <div class="user-avatar micro no-stats">
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
                        <div class="hexagon-image-18-20" data-src="/assets/img/avatar/08.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /META LINE LIST -->

                  <!-- META LINE TEXT -->

                  <p class="meta-line-text">{{$post->comments->count()  }} Participants</p>
                  <!-- /META LINE TEXT -->

                </div>
                <!-- /META LINE -->
              </div>
              <!-- /CONTENT ACTION -->

              <!-- CONTENT ACTION -->
            <a href="/kilimofy/Post/read_comments/{{$post->id}}-about-{{$post->name}}'s-post">

              <div class="content-action">
                <!-- META LINE -->
                <div class="meta-line">
                  <!-- META LINE LINK -->
                  <p class="meta-line-link">{{$post->comments->count()}} Comments</p>
                  <!-- /META LINE LINK -->
                </div>
                <!-- /META LINE -->

                </div>

            </a>
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
            <div class="post-option reaction-options-dropdown-trigger">
              <!-- POST OPTION ICON -->
              <svg class="post-option-icon icon-thumbs-up">
                <use xlink:href="#svg-thumbs-up"></use>
              </svg>
              <!-- /POST OPTION ICON -->

              <!-- POST OPTION TEXT -->
              <p class="post-option-text">React!</p>
              <!-- /POST OPTION TEXT -->
            </div>
            <!-- /POST OPTION -->

            <!-- REACTION OPTIONS -->
            <div class="reaction-options reaction-options-dropdown">
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

        <a href="/kilimofy/Post/read_comments/{{$post->id}}-about-{{$post->Caption}}">
          <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-comment">
              <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Comment</p>
            <!-- /POST OPTION TEXT -->
          </div>
        </a>
          <!-- /POST OPTION -->

          <!-- POST OPTION -->
          <div class="post-option">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-share">
              <use xlink:href="#svg-share"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Share</p>
            <!-- /POST OPTION TEXT -->
          </div>
          <!-- /POST OPTION -->
        </div>
        <!-- /POST OPTIONS -->
      </div>
      <!-- /WIDGET BOX -->
    @endforeach



  <!-- LOADER BARS -->
    <div class="loader-bars">
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
    </div>
    <!-- /LOADER BARS -->
  </div>
  <!-- /GRID COLUMN -->


  <!-- GRID COLUMN -->
  <div class="grid-column">
    <!-- WIDGET BOX -->
    <div class="widget-box no-padding">
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
            <p class="simple-dropdown-link">Widget Settings</p>
            <!-- /SIMPLE DROPDOWN LINK -->
          </div>
          <!-- /SIMPLE DROPDOWN -->
        </div>
        <!-- /POST SETTINGS WRAP -->
      </div>
      <!-- /WIDGET BOX SETTINGS -->

      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">YouTube Channel</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content small-margin-top">
        <!-- STREAM BOX -->
        <div class="stream-box no-video-radius">
          <!-- STREAM BOX VIDEO -->
          <div class="stream-box-video">
            <iframe src="https://youtube.com/channel/UCoRFQXKUUMNYhX64tj97k0Q" allowfullscreen></iframe>
          </div>
          <!-- /STREAM BOX VIDEO -->

          <!-- STREAM BOX IMAGE -->
          <div class="stream-box-image">
            <figure class="picture tiny circle liquid">
              <img src="/assets/img/social-media-avatars/youtube-avatar.jpg" alt="avatar-01-social">
            </figure>
          </div>
          <!-- /STREAM BOX IMAGE -->

          <!-- STREAM BOX INFO -->
          <div class="stream-box-info">
            <!-- STREAM BOX TITLE -->
            <p class="stream-box-title"><a href="https://youtube.com/channel/UCoRFQXKUUMNYhX64tj97k0Q">kilimofy YouTube Channel...</a></p>
            <!-- /STREAM BOX TITLE -->

            <!-- STREAM BOX TEXT -->
            <p class="stream-box-text"><a href="https://kilimofy.herokuapp.com/" target="_blank">kilimofy</a></p>
            <!-- /STREAM BOX TEXT -->
          </div>
          <!-- /STREAM BOX INFO -->
        </div>
        <!-- /STREAM BOX -->
      </div>
      <!-- WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->

    <!-- WIDGET BOX -->
    <div class="widget-box">
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
            <p class="simple-dropdown-link">Widget Settings</p>
            <!-- /SIMPLE DROPDOWN LINK -->
          </div>
          <!-- /SIMPLE DROPDOWN -->
        </div>
        <!-- /POST SETTINGS WRAP -->
      </div>
      <!-- /WIDGET BOX SETTINGS -->

      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Photos <span class="highlighted">{{$user_photo_gallery_count}}</span></p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- PICTURE ITEM LIST -->
        <div class="picture-item-list small">
          @foreach($user_photo_gallery as $photo)
          <!-- PICTURE ITEM -->
        <a href="/kilimofy/Post/read_comments/{{$photo->id}}-about-{{$user->name}}'s-post">
          <div class="picture-item">
            <!-- PICTURE -->
            <figure class="picture round liquid">
              <img src="/Uploads/PostPhotos/{{$photo->Photo}}" alt="avatar-01">
            </figure>
            <!-- /PICTURE -->
          </div>
        </a>
          <!-- /PICTURE ITEM -->
          @endforeach

         @if($user_photo_gallery_count > 11)
         <!-- PICTURE ITEM -->
         <a class="picture-item" href="/kilimofy/UserAccount/user_photos_page/{{$user->id}}-{{$user->name}}'s-Photos-in-Kilimofy-Platform">
           <!-- PICTURE -->
           <figure class="picture round liquid">
             <img src="/assets/img/cover/17.jpg" alt="avatar-17">
           </figure>
           <!-- /PICTURE -->

           <!-- PICTURE ITEM OVERLAY -->
           <div class="picture-item-overlay round">
             <!-- PICTURE ITEM OVERLAY TEXT -->
             <p class="picture-item-overlay-text">+{{$user_photo_gallery_count - 11}}</p>
             <!-- /PICTURE ITEM OVERLAY TEXT -->
           </div>
           <!-- /PICTURE ITEM OVERLAY -->
         </a>
         <!-- /PICTURE ITEM -->
         @endif

        </div>
        <!-- /PICTURE ITEM LIST -->
      </div>
      <!-- /WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->



    <!-- WIDGET BOX -->
    <div class="widget-box">
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
            <p class="simple-dropdown-link">Widget Settings</p>
            <!-- /SIMPLE DROPDOWN LINK -->
          </div>
          <!-- /SIMPLE DROPDOWN -->
        </div>
        <!-- /POST SETTINGS WRAP -->
      </div>
      <!-- /WIDGET BOX SETTINGS -->

      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Groups <span class="highlighted">7</span></p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- FILTERS -->
        <div class="filters">
          <!-- FILTER -->
          <p class="filter">Newest</p>
          <!-- /FILTER -->

          <!-- FILTER -->
          <p class="filter active">Popular</p>
          <!-- /FILTER -->

          <!-- FILTER -->
          <p class="filter">Active</p>
          <!-- /FILTER -->
        </div>
        <!-- /FILTERS -->

        <!-- USER STATUS LIST -->
        <div class="user-status-list">

          @foreach($group_lists as $group)
            <!-- USER STATUS -->
            <div class="user-status request-small">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="group-timeline.html">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-border">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-40-44" data-src="/Uploads/GroupProfile/{{$group->Group_Image}}"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->
              </a>
              <!-- /USER STATUS AVATAR -->

              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><a class="bold" href="group-timeline.html">{{$group->Group_Name}}</a></p>
              <!-- /USER STATUS TITLE -->

              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">{{$group->Members}} members</p>
              <!-- /USER STATUS TEXT -->

              <!-- ACTION REQUEST LIST -->
              <div class="action-request-list">
                <!-- ACTION REQUEST -->
                <div class="action-request accept">
                  <!-- ACTION REQUEST ICON -->
                  <svg class="action-request-icon icon-join-group">
                    <use xlink:href="#svg-join-group"></use>
                  </svg>
                  <!-- /ACTION REQUEST ICON -->
                </div>
                <!-- /ACTION REQUEST -->
              </div>
              <!-- ACTION REQUEST LIST -->
            </div>
            <!-- /USER STATUS -->
          @endforeach
        </div>
        <!-- /USER STATUS LIST -->

        <!-- WIDGET BOX BUTTON -->
        <a class="widget-box-button button small secondary " href="/kilimofy/Group/Group-Lists">Magrupu Zaidi!</a>
        <!-- /WIDGET BOX BUTTON -->
      </div>
      <!-- WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->

    <!-- WIDGET BOX -->

    <!-- /WIDGET BOX -->
  </div>

  <!-- /GRID COLUMN -->
</div>
<!-- /GRID -->
</div>
<!-- /CONTENT GRID -->

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
