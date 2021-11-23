@extends('LayoutBladeFiles.app-layout')


<div class="content-grid">

  <!-- GRID -->
  <div class="grid grid-5-5-2 centered">
    <!-- GRID COLUMN -->
    <div class="grid-column">
      <!-- WIDGET BOX -->
      @foreach($post_details as $post_detail)
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
      @foreach($author as $author)
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
                    <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{$author->avatar}}"></div>
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

              <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">{{$author->user_name}}</a></p>
              @endforeach
              <!-- /USER STATUS TITLE -->

              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">{{$post_detail->created_at->diffForHumans()}}</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->

            <!-- WIDGET BOX STATUS TEXT -->
            <p class="widget-box-status-text">{{$post_detail->Caption}}</p>
            <!-- /WIDGET BOX STATUS TEXT -->
          </div>
          <!-- /WIDGET BOX STATUS CONTENT -->

           @if($post_detail->Photo != NULL)

           <!-- WIDGET BOX PICTURE -->
           <figure class="widget-box-picture popup-picture-trigger">
             <img src="/Uploads/PostPhotos/{{$post_detail->Photo}}" alt="cover-04" style="width:100%; height:auto;">
           </figure>
           <!-- /WIDGET BOX PICTURE -->

           @endif

          <!-- WIDGET BOX STATUS CONTENT -->
          <div class="widget-box-status-content">
            <!-- TAG LIST -->
            <div class="tag-list">
              <!-- TAG ITEM -->
              @if($post_detail->Tag1 != null)
              <a class="tag-item secondary" href="newsfeed.html">#{{$post_detail->Tag1}}</a>
              @endif
              <!-- /TAG ITEM -->

              <!-- TAG ITEM -->
              @if($post_detail->Tag2 != null)
              <a class="tag-item secondary" href="newsfeed.html">#{{$post_detail->Tag2}}</a>
              @endif                <!-- /TAG ITEM -->

              <!-- TAG ITEM -->
              @if($post_detail->Tag3 != null)
              <a class="tag-item secondary" href="newsfeed.html">#{{$post_detail->Tag3}}</a>
              @endif                <!-- /TAG ITEM -->

              <!-- TAG ITEM -->
              @if($post_detail->Tag4 != null)
              <a class="tag-item secondary" href="newsfeed.html">#{{$post_detail->Tag4}}</a>
              @endif                <!-- /TAG ITEM -->
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
                  <p class="meta-line-text">{{$post_detail->Likes}}</p>
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
                    @foreach($post_detail->comments as $post_comment)
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
                  <p class="meta-line-text">19 Participants</p>
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
                  <p class="meta-line-link">{{$post_detail->comments->count()}} Comments</p>
                  <!-- /META LINE LINK -->
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
          <div class="post-option active">
            <!-- POST OPTION ICON -->
            <svg class="post-option-icon icon-comment">
              <use xlink:href="#svg-comment"></use>
            </svg>
            <!-- /POST OPTION ICON -->

            <!-- POST OPTION TEXT -->
            <p class="post-option-text">Comment</p>
            <!-- /POST OPTION TEXT -->
          </div>
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

        <!-- POST COMMENT LIST -->
        <div class="post-comment-list">


            <!-- POST COMMENT -->

              @foreach($post_detail->comments as $post_comment)
              <div class="post-comment">

                <!-- USER AVATAR -->
                <a class="user-avatar small no-outline" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{$post_comment->user_avatar}}"></div>
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

                </a>
                <!-- /USER AVATAR -->

                <!-- POST COMMENT TEXT -->
                <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">{{$post_comment->user_name}}</a>{{$post_comment->comment}}</p>
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
                      <a href="/kilimofy/Blog/reply_comment/{{$post_comment->id}}">
                          <p class="meta-line-link light">Reply</p>
                      </a>

                      <!-- /META LINE LINK -->
                    </div>
                    <!-- /META LINE -->

                    <!-- META LINE -->
                    <div class="meta-line">
                      <!-- META LINE TIMESTAMP -->
                      <p class="meta-line-timestamp">{{$post_comment->created_at->diffForHumans()}}</p>
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
              @foreach( $post_comment->replies as $comment_replies)

              <div class="post-comment unread reply-2">
                <!-- USER AVATAR -->
                <a class="user-avatar small no-outline" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{$comment_replies->user_avatar}}"></div>
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

                </a>
                <!-- /USER AVATAR -->

                <!-- POST COMMENT TEXT -->
                <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">{{$comment_replies->user_name}}</a>{{$comment_replies-> reply}}</p>
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
                      <a href="/kilimofy/Blog/reply_comment/{{$post_comment->id}}">
                          <p class="meta-line-link light">Reply</p>
                      </a>

                      <!-- /META LINE LINK -->
                    </div>
                    <!-- /META LINE -->

                    <!-- META LINE -->
                    <div class="meta-line">
                      <!-- META LINE TIMESTAMP -->
                      <p class="meta-line-timestamp">{{$comment_replies->created_at->diffForHumans()}}</p>
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

              @endforeach
             @endforeach

          <!-- POST COMMENT FORM -->
          <br>
          <div class="post-comment-form">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{Auth::user()->avatar}}"></div>
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

            <!-- FORM -->
            <form class="form" action="/kilimofy/Blog/send_comments" method="post">
              @csrf
              <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- INTERACTIVE INPUT -->
                  <div class="interactive-input small">
                    <input type="text" id="chat-widget-message-text-2" name="comment" placeholder="Write a message...">
                    <input type="hidden" id="chat-widget-message-text-2" name="post_id" value="{{$post_detail->id}}">
                    <input type="hidden" id="chat-widget-message-text-2" name="name" value="{{Auth::user()->name}}">
                    <input type="hidden" id="chat-widget-message-text-2" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" id="chat-widget-message-text-2" name="user_avatar" value="{{Auth::user()->avatar}}">
                    <!-- INTERACTIVE INPUT ICON WRAP -->
                    <div class="interactive-input-icon-wrap actionable">
                      <!-- TOOLTIP WRAP -->
                      <div class="tooltip-wrap text-tooltip-tft" data-title="Send Photo">
                        <!-- INTERACTIVE INPUT ICON -->
                        <!-- <svg class="interactive-input-icon icon-camera">
                          <use xlink:href="#svg-camera"></use>
                        </svg> -->
                        <!-- /INTERACTIVE INPUT ICON -->
                      </div>
                      <!-- /TOOLTIP WRAP -->
                    </div>
                    <!-- /INTERACTIVE INPUT ICON WRAP -->

                  </div>
                  <!-- /INTERACTIVE INPUT -->
                </div>
                <!-- /FORM ITEM -->

                <!-- FORM ITEM -->
                <div class="form-item auto-width">
                  <!-- BUTTON -->
                  <button type="submit" class="button primary padded">
                    <!-- BUTTON ICON -->
                    <svg class="button-icon no-space icon-send-message">
                      <use xlink:href="#svg-send-message"></use>
                    </svg>
                    <!-- /BUTTON ICON -->
                  </button>
                  <!-- /BUTTON -->
                </div>
                <!-- /FORM ITEM -->
              </div>
              <!-- /FORM ROW -->
            </form>
            <!-- /FORM -->
          </div>
          <!-- /POST COMMENT FORM -->
        </div>
        <!-- /POST COMMENT LIST -->
      </div>
      @endforeach
      <!-- /WIDGET BOX -->

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

    </div>
  <!-- /GRID -->

</div>
