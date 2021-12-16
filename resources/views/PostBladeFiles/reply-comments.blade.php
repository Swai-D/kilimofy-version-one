@extends('LayoutBladeFiles.app-layout')

@section('content')

<div class="grid grid-3-6-3 mobile-prefer-content">
  <!-- GRID COLUMN -->
  <div class="grid-column"></div>
  <div class="grid-column">
      <div class="post-comment-list">
        <br><br><br>
        @foreach($comment_to_be_replied as $reply)
          @foreach($reply->replies as $replies)
            <div class="post-comment unread reply-2">
              <!-- USER AVATAR -->
              <a class="user-avatar small no-outline" href="#">
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

              </a>
              <!-- /USER AVATAR -->

              <!-- POST COMMENT TEXT -->
              <p class="post-comment-text"><a class="post-comment-text-author" href="#">{{$replies->name}}</a>{{$replies->reply}}</p>
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
                    <a href="/kilimofy/Blog/reply_comment/{{$reply->id}}">
                        <p class="meta-line-link light">Reply</p>
                    </a>

                    <!-- /META LINE LINK -->
                  </div>
                  <!-- /META LINE -->

                  <!-- META LINE -->
                  <div class="meta-line">
                    <!-- META LINE TIMESTAMP -->
                    <p class="meta-line-timestamp">{{$replies->created_at->diffForHumans()}}</p>
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


        <!-- POST COMMENT FORM -->
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
          <form class="form" action="/kilimofy/Blog/reply_comment_form" method="post">
            @csrf
            <!-- FORM ROW -->
            <div class="form-row split">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- INTERACTIVE INPUT -->
                <div class="interactive-input small">
                  <input type="text" id="chat-widget-message-text-2" name="reply_comment" placeholder="Write a message...">
                  <input type="hidden" id="chat-widget-message-text-2" name="reply_comment_id" value="{{$reply->id}}">
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
                <button type="submit" class="button danger padded">
                  <!-- BUTTON ICON -->
                  <svg class="button-icon no-space icon-delete">
                    <use xlink:href="#svg-delete"></use>
                  </svg>
                  <!-- /BUTTON ICON -->
                </button>
                <!-- /BUTTON -->
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
        @endforeach
      </div>
      <!-- /POST COMMENT LIST -->
    </div>
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
<!-- /CONTENT GRID -->
@endsection
