@extends('LayoutBladeFiles.app-layout')
@section('title', 'Post')

<div class="content-grid">

  <!-- GRID -->
  <div class="grid  centered">

    @foreach($event as $event)
    <!-- EVENT PREVIEW -->
    <div class="event-preview">
      <!-- POPUP CLOSE BUTTON -->
      <div class="popup-close-button popup-event-information-trigger">
        <!-- POPUP CLOSE BUTTON ICON -->
        <svg class="popup-close-button-icon icon-cross">
          <use xlink:href="#svg-cross"></use>
        </svg>
        <!-- /POPUP CLOSE BUTTON ICON -->
      </div>
      <!-- /POPUP CLOSE BUTTON -->

      <!-- POPUP EVENT COVER -->
      <figure class="event-preview-cover liquid">
        <img src="/Uploads/BwanaShambaEventCoverPage/{{$event->event_cover_photo}}" alt="cover-23">
      </figure>
      <!-- /POPUP EVENT COVER -->

      <!-- POPUP EVENT INFO -->
      <div class="popup-event-info">
        <!-- POPUP EVENT TITLE -->
        <p class="popup-event-title">CosWorld 2019 After Party</p>
        <!-- /POPUP EVENT TITLE -->

        <!-- DECORATED FEATURE LIST -->
        <div class="decorated-feature-list">
          <!-- DECORATED FEATURE -->
          <div class="decorated-feature">
            <!-- DECORATED FEATURE ICON -->
            <svg class="decorated-feature-icon icon-events">
              <use xlink:href="#svg-events"></use>
            </svg>
            <!-- /DECORATED FEATURE ICON -->

            <!-- DECORATED FEATURE INFO -->
            <div class="decorated-feature-info">
              <!-- DECORATED FEATURE TITLE -->
              <p class="decorated-feature-title">Sunday, August 26th - 2019</p>
              <!-- /DECORATED FEATURE TITLE -->

              <!-- DECORATED FEATURE TEXT -->
              <p class="decorated-feature-text">8:30 AM</p>
              <!-- /DECORATED FEATURE TEXT -->
            </div>
            <!-- /DECORATED FEATURE INFO -->
          </div>
          <!-- /DECORATED FEATURE -->

          <!-- DECORATED FEATURE -->
          <div class="decorated-feature">
            <!-- DECORATED FEATURE ICON -->
            <svg class="decorated-feature-icon icon-pin">
              <use xlink:href="#svg-pin"></use>
            </svg>
            <!-- /DECORATED FEATURE ICON -->

            <!-- DECORATED FEATURE INFO -->
            <div class="decorated-feature-info">
              <!-- DECORATED FEATURE TITLE -->
              <p class="decorated-feature-title">CosWorld Arena</p>
              <!-- /DECORATED FEATURE TITLE -->

              <!-- DECORATED FEATURE TEXT -->
              <p class="decorated-feature-text">Alchemists Avenue 310 - NY 10001 New York - USA</p>
              <!-- /DECORATED FEATURE TEXT -->
            </div>
            <!-- /DECORATED FEATURE INFO -->
          </div>
          <!-- /DECORATED FEATURE -->

          <!-- DECORATED FEATURE -->
          <div class="decorated-feature">
            <!-- DECORATED FEATURE ICON -->
            <svg class="decorated-feature-icon icon-ticket">
              <use xlink:href="#svg-ticket"></use>
            </svg>
            <!-- /DECORATED FEATURE ICON -->

            <!-- DECORATED FEATURE INFO -->
            <div class="decorated-feature-info">
              <!-- DECORATED FEATURE TITLE -->
              <p class="decorated-feature-title">$12 U$D</p>
              <!-- /DECORATED FEATURE TITLE -->

              <!-- DECORATED FEATURE TEXT -->
              <p class="decorated-feature-text">Entry Price</p>
              <!-- /DECORATED FEATURE TEXT -->
            </div>
            <!-- /DECORATED FEATURE INFO -->
          </div>
          <!-- /DECORATED FEATURE -->
        </div>
        <!-- /DECORATED FEATURE LIST -->

        <!-- POPUP EVENT SUBTITLE -->
        <p class="popup-event-subtitle">Description</p>
        <!-- /POPUP EVENT SUBTITLE -->

        <!-- POPUP EVENT TEXT -->
        <p class="popup-event-text">Join us at the CosWorld after party! We'll be eating, drinking and having a great time exchanging experiences from the convention</p>
        <!-- /POPUP EVENT TEXT -->

        <!-- POPUP EVENT SUBTITLE -->
        <p class="popup-event-subtitle">Will Assist</p>
        <!-- /POPUP EVENT SUBTITLE -->

        <!-- USER AVATAR LIST -->
        <div class="user-avatar-list reverse medium">
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
              <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
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
              <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
              <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
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
              <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
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
              <div class="hexagon-image-30-32" data-src="img/avatar/06.jpg"></div>
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
              <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
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
              <div class="hexagon-image-30-32" data-src="img/avatar/13.jpg"></div>
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
              <div class="hexagon-image-30-32" data-src="img/avatar/08.jpg"></div>
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
              <div class="hexagon-image-30-32" data-src="img/avatar/16.jpg"></div>
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
              <div class="hexagon-image-30-32" data-src="/assets/img/avatar/23.jpg"></div>
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
              <div class="hexagon-image-30-32" data-src="/assets/img/avatar/11.jpg"></div>
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
              <p class="user-avatar-overlay-content-text">+31</p>
              <!-- /USER AVATAR OVERLAY CONTENT TEXT -->
            </div>
            <!-- /USER AVATAR OVERLAY CONTENT -->
          </a>
          <!-- /USER AVATAR -->
        </div>
        <!-- /USER AVATAR LIST -->

        <!-- POPUP EVENT SUBTITLE -->
        <p class="popup-event-subtitle">Google Map</p>
        <!-- /POPUP EVENT SUBTITLE -->

        <!-- GOOGLE MAP -->
        <div id="g-map" class="g-map"></div>
        <!-- /GOOGLE MAP -->

        <!-- POPUP EVENT BUTTON -->
        <p class="popup-event-button button tertiary popup-event-information-trigger">Remove from Calendar</p>
        <!-- /POPUP EVENT BUTTON -->
      </div>
      <!-- /POPUP EVENT INFO -->

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
                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/happy.png" alt="reaction-happy">
                <!-- /REACTION IMAGE -->

                <!-- SIMPLE DROPDOWN -->
                <div class="simple-dropdown padded reaction-item-dropdown">
                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
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
                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/love.png" alt="reaction-love">
                <!-- /REACTION IMAGE -->

                <!-- SIMPLE DROPDOWN -->
                <div class="simple-dropdown padded reaction-item-dropdown">
                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
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
                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/like.png" alt="reaction-like">
                <!-- /REACTION IMAGE -->

                <!-- SIMPLE DROPDOWN -->
                <div class="simple-dropdown padded reaction-item-dropdown">
                  <!-- SIMPLE DROPDOWN TEXT -->
                  <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
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
                  <p class="simple-dropdown-text"><span class="bold">and 2 more...</span></p>
                  <!-- /SIMPLE DROPDOWN TEXT -->
                </div>
                <!-- /SIMPLE DROPDOWN -->
              </div>
              <!-- /REACTION ITEM -->
            </div>
            <!-- /META LINE LIST -->

            <!-- META LINE TEXT -->
            <p class="meta-line-text">12</p>
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
                  <div class="hexagon-image-18-20" data-src="img/avatar/09.jpg"></div>
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
                  <div class="hexagon-image-18-20" data-src="img/avatar/08.jpg"></div>
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
                  <div class="hexagon-image-18-20" data-src="img/avatar/12.jpg"></div>
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
                  <div class="hexagon-image-18-20" data-src="img/avatar/16.jpg"></div>
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
                  <div class="hexagon-image-18-20" data-src="img/avatar/06.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
              </div>
              <!-- /USER AVATAR -->
            </div>
            <!-- /META LINE LIST -->

            <!-- META LINE TEXT -->
            <p class="meta-line-text">14 Participants</p>
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
            <p class="meta-line-link">1 Comments</p>
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
              <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
              <!-- /REACTION OPTION IMAGE -->
            </div>
            <!-- /REACTION OPTION -->

            <!-- REACTION OPTION -->
            <div class="reaction-option text-tooltip-tft" data-title="Love">
              <!-- REACTION OPTION IMAGE -->
              <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
              <!-- /REACTION OPTION IMAGE -->
            </div>
            <!-- /REACTION OPTION -->

            <!-- REACTION OPTION -->
            <div class="reaction-option text-tooltip-tft" data-title="Dislike">
              <!-- REACTION OPTION IMAGE -->
              <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike">
              <!-- /REACTION OPTION IMAGE -->
            </div>
            <!-- /REACTION OPTION -->

            <!-- REACTION OPTION -->
            <div class="reaction-option text-tooltip-tft" data-title="Happy">
              <!-- REACTION OPTION IMAGE -->
              <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
              <!-- /REACTION OPTION IMAGE -->
            </div>
            <!-- /REACTION OPTION -->

            <!-- REACTION OPTION -->
            <div class="reaction-option text-tooltip-tft" data-title="Funny">
              <!-- REACTION OPTION IMAGE -->
              <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
              <!-- /REACTION OPTION IMAGE -->
            </div>
            <!-- /REACTION OPTION -->

            <!-- REACTION OPTION -->
            <div class="reaction-option text-tooltip-tft" data-title="Wow">
              <!-- REACTION OPTION IMAGE -->
              <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
              <!-- /REACTION OPTION IMAGE -->
            </div>
            <!-- /REACTION OPTION -->

            <!-- REACTION OPTION -->
            <div class="reaction-option text-tooltip-tft" data-title="Angry">
              <!-- REACTION OPTION IMAGE -->
              <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
              <!-- /REACTION OPTION IMAGE -->
            </div>
            <!-- /REACTION OPTION -->

            <!-- REACTION OPTION -->
            <div class="reaction-option text-tooltip-tft" data-title="Sad">
              <!-- REACTION OPTION IMAGE -->
              <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
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
        <div class="post-comment">
          <!-- USER AVATAR -->
          <a class="user-avatar small no-outline" href="profile-timeline.html">
            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
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
          <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Destroy Dex</a>Can't wait to see everyone at the party! Last year's was incredible and I'm hoping this year will be even better!</p>
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
                    <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/happy.png" alt="reaction-happy">
                    <!-- /REACTION IMAGE -->

                    <!-- SIMPLE DROPDOWN -->
                    <div class="simple-dropdown padded reaction-item-dropdown">
                      <!-- SIMPLE DROPDOWN TEXT -->
                      <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
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
                    <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/like.png" alt="reaction-like">
                    <!-- /REACTION IMAGE -->

                    <!-- SIMPLE DROPDOWN -->
                    <div class="simple-dropdown padded reaction-item-dropdown">
                      <!-- SIMPLE DROPDOWN TEXT -->
                      <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
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
                    <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Love">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Happy">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Funny">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Wow">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Angry">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                    <!-- /REACTION OPTION IMAGE -->
                  </div>
                  <!-- /REACTION OPTION -->

                  <!-- REACTION OPTION -->
                  <div class="reaction-option text-tooltip-tft" data-title="Sad">
                    <!-- REACTION OPTION IMAGE -->
                    <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
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
                <p class="meta-line-timestamp">15 minutes ago</p>
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

        <!-- POST COMMENT FORM -->
        <div class="post-comment-form">
          <!-- USER AVATAR -->
          <div class="user-avatar small no-outline">
            <!-- USER AVATAR CONTENT -->
            <div class="user-avatar-content">
              <!-- HEXAGON -->
              <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div>
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
                  <label for="event-reply">Your Reply</label>
                  <input type="text" id="event-reply" name="event_reply">
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
      <!-- /POST COMMENT LIST -->
    </div>
    <!-- /EVENT PREVIEW -->
    @endforeach
  </div>

</div>
