@extends('LayoutBladeFiles.app-layout')
@section('title','Mashine za Kilimo')
@section('menu-status-mashine','active')
@section('discription-title','Duka la Mashine')
@section('discription-details','kilimofy')

<!-- CONTENT GRID -->
<div class="content-grid">

  <!-- SECTION BANNER -->
  @include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

@foreach($bidhaa_info as $bidhaa)
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Mashine Ya Kilimo</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">{{$bidhaa->Mashine_Name}}</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->

    <!-- SECTION HEADER ACTIONS -->
    <div class="section-header-actions">
      <!-- SECTION HEADER SUBSECTION -->
      <a class="section-header-subsection" href="#">Sokoni</a>
      <!-- /SECTION HEADER SUBSECTION -->

      <!-- SECTION HEADER SUBSECTION -->
      <a class="section-header-subsection" href="#">Bidhaa Mtandaoni</a>
      <!-- /SECTION HEADER SUBSECTION -->

      <!-- SECTION HEADER SUBSECTION -->
      <p class="section-header-subsection">{{$bidhaa->Mashine_Name}}</p>
      <!-- /SECTION HEADER SUBSECTION -->
    </div>
    <!-- /SECTION HEADER ACTIONS -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- GRID -->
  <div class="grid grid-9-3">
    <!-- MARKETPLACE CONTENT -->
    <div class="marketplace-content grid-column">
      <!-- SLIDER PANEL -->
      <div class="slider-panel">
        <!-- SLIDER PANEL SLIDES -->
        <div id="product-box-slider-items" class="slider-panel-slides">
          <!-- SLIDER PANEL SLIDE -->
          <div class="slider-panel-slide">
            <!-- SLIDER PANEL SLIDE IMAGE -->
            <figure class="slider-panel-slide-image liquid">
              <img src="/Uploads/MashineImage/{{$bidhaa->Mashine_Image}}" alt="item-10">
            </figure>
            <!-- /SLIDER PANEL SLIDE IMAGE -->
          </div>
          <!-- /SLIDER PANEL SLIDE -->

        </div>
        <!-- /SLIDER PANEL SLIDES -->

        <!-- SLIDER PANEL ROSTER -->
        <div class="slider-panel-roster">
          <!-- SLIDER CONTROLS -->
          <div id="product-box-slider-controls" class="slider-controls">
            <!-- SLIDER CONTROL -->
            <div class="slider-control left">
              <!-- SLIDER CONTROL ICON -->
              <svg class="slider-control-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
              </svg>
              <!-- /SLIDER CONTROL ICON -->
            </div>
            <!-- /SLIDER CONTROL -->

            <!-- SLIDER CONTROL -->
            <div class="slider-control right">
              <!-- SLIDER CONTROL ICON -->
              <svg class="slider-control-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
              </svg>
              <!-- /SLIDER CONTROL ICON -->
            </div>
            <!-- /SLIDER CONTROL -->
          </div>
          <!-- /SLIDER CONTROLS -->

          <!-- BUTTON -->
          <a class="button secondary" href="" target="_blank">Live Preview</a>
          <!-- /BUTTON -->

          <!-- ROSTER PICTURES -->
          <div id="product-box-slider-roster" class="roster-pictures">
            <!-- ROSTER PICTURE -->
            <div class="roster-picture">
              <!-- ROSTER PICTURE IMAGE -->
              <figure class="roster-picture-image liquid">
                <img src="img/marketplace/items/10.jpg" alt="item-10">
              </figure>
              <!-- /ROSTER PICTURE IMAGE -->
            </div>
            <!-- /ROSTER PICTURE -->

            <!-- ROSTER PICTURE -->
            <div class="roster-picture">
              <!-- ROSTER PICTURE IMAGE -->
              <figure class="roster-picture-image liquid">
                <img src="img/marketplace/items/15.jpg" alt="item-15">
              </figure>
              <!-- /ROSTER PICTURE IMAGE -->
            </div>
            <!-- /ROSTER PICTURE -->

            <!-- ROSTER PICTURE -->
            <div class="roster-picture">
              <!-- ROSTER PICTURE IMAGE -->
              <figure class="roster-picture-image liquid">
                <img src="img/marketplace/items/16.jpg" alt="item-16">
              </figure>
              <!-- /ROSTER PICTURE IMAGE -->
            </div>
            <!-- /ROSTER PICTURE -->

            <!-- ROSTER PICTURE -->
            <div class="roster-picture">
              <!-- ROSTER PICTURE IMAGE -->
              <figure class="roster-picture-image liquid">
                <img src="img/marketplace/items/17.jpg" alt="item-17">
              </figure>
              <!-- /ROSTER PICTURE IMAGE -->
            </div>
            <!-- /ROSTER PICTURE -->

            <!-- ROSTER PICTURE -->
            <div class="roster-picture">
              <!-- ROSTER PICTURE IMAGE -->
              <figure class="roster-picture-image liquid">
                <img src="img/marketplace/items/18.jpg" alt="item-18">
              </figure>
              <!-- /ROSTER PICTURE IMAGE -->
            </div>
            <!-- /ROSTER PICTURE -->

            <!-- ROSTER PICTURE -->
            <div class="roster-picture">
              <!-- ROSTER PICTURE IMAGE -->
              <figure class="roster-picture-image liquid">
                <img src="img/marketplace/items/19.jpg" alt="item-19">
              </figure>
              <!-- /ROSTER PICTURE IMAGE -->
            </div>
            <!-- /ROSTER PICTURE -->

            <!-- ROSTER PICTURE -->
            <div class="roster-picture">
              <!-- ROSTER PICTURE IMAGE -->
              <figure class="roster-picture-image liquid">
                <img src="img/marketplace/items/20.jpg" alt="item-20">
              </figure>
              <!-- /ROSTER PICTURE IMAGE -->
            </div>
            <!-- /ROSTER PICTURE -->
          </div>
          <!-- /ROSTER PICTURES -->
        </div>
        <!-- /SLIDER PANEL ROSTER -->
      </div>
      <!-- /SLIDER PANEL -->

      <!-- TAB BOX -->
      <div class="tab-box">
        <!-- TAB BOX OPTIONS -->
        <div class="tab-box-options">
          <!-- TAB BOX OPTION -->
          <div class="tab-box-option">
            <!-- TAB BOX OPTION TITLE -->
            <p class="tab-box-option-title">Description</p>
            <!-- /TAB BOX OPTION TITLE -->
          </div>
          <!-- /TAB BOX OPTION -->

          <!-- TAB BOX OPTION -->
          <div class="tab-box-option">
            <!-- TAB BOX OPTION TITLE -->
            <p class="tab-box-option-title">Comments <span class="highlighted">4</span></p>
            <!-- /TAB BOX OPTION TITLE -->
          </div>
          <!-- /TAB BOX OPTION -->

          <!-- TAB BOX OPTION -->
          <div class="tab-box-option">
            <!-- TAB BOX OPTION TITLE -->
            <p class="tab-box-option-title">Reviews <span class="highlighted">3</span></p>
            <!-- /TAB BOX OPTION TITLE -->
          </div>
          <!-- /TAB BOX OPTION -->
        </div>
        <!-- /TAB BOX OPTIONS -->

        <!-- TAB BOX ITEMS -->
        <div class="tab-box-items">
          <!-- TAB BOX ITEM -->
          <div class="tab-box-item">
            <!-- TAB BOX ITEM CONTENT -->
            <div class="tab-box-item-content">
              <!-- TAB BOX ITEM TITLE -->
              <p class="tab-box-item-title">{{$bidhaa->Mashine_Name}}</p>
              <!-- /TAB BOX ITEM TITLE -->

              <!-- TAB BOX ITEM PARAGRAPH -->
              <p class="tab-box-item-paragraph">{{$bidhaa->Mashine_Description}}</p>
              <!-- /TAB BOX ITEM PARAGRAPH -->

              <!-- TAB BOX ITEM TITLE -->
              <p class="tab-box-item-title">Garama ya {{$bidhaa->Mashine_Name}} ni {{number_format($bidhaa->Mashine_Price)}}</p>
              <br><br>
              <!-- /TAB BOX ITEM TITLE -->
              <p class="tab-box-item-title" style="color:red"> Tunashauri Yafuatayo:</p>
              <!-- BULLET ITEM LIST -->
              <ul class="bullet-item-list">
                <!-- BULLET ITEM -->
                <li class="bullet-item">
                  <!-- BULLET ITEM ICON -->
                  <svg class="bullet-item-icon icon-check">
                    <use xlink:href="#svg-check"></use>
                  </svg>
                  <!-- /BULLET ITEM ICON -->

                  <!-- BULLET ITEM TEXT -->
                  <p class="bullet-item-text">Jirizishe kwanza kuiona bidhaa na kuihakiki kisha ndo ufanye malipo (Malipo yawe ni Cash)</p>
                  <!-- /BULLET ITEM TEXT -->
                </li>
                <!-- /BULLET ITEM -->
                 <br>
                <!-- BULLET ITEM -->
                <li class="bullet-item">
                  <!-- BULLET ITEM ICON -->
                  <svg class="bullet-item-icon icon-check">
                    <use xlink:href="#svg-check"></use>
                  </svg>
                  <!-- /BULLET ITEM ICON -->

                  <!-- BULLET ITEM TEXT -->
                  <p class="bullet-item-text">Kilimofy Haipokei Pesa Kutoka kwamtaja, bali Inarahisisha Mawasiliano kati ya Muuzaji na Mnunuli </p>
                  <!-- /BULLET ITEM TEXT -->
                </li>
                <!-- /BULLET ITEM -->
                 <br>
                <!-- BULLET ITEM -->
                <li class="bullet-item">
                  <!-- BULLET ITEM ICON -->
                  <svg class="bullet-item-icon icon-check">
                    <use xlink:href="#svg-check"></use>
                  </svg>
                  <!-- /BULLET ITEM ICON -->

                  <!-- BULLET ITEM TEXT -->
                  <p class="bullet-item-text">Tuna thamini Usalama wa Mteja</p>
                  <!-- /BULLET ITEM TEXT -->
                </li>
                <!-- /BULLET ITEM -->

              </ul>
              <!-- /BULLET ITEM LIST -->
            </div>
            <!-- /TAB BOX ITEM CONTENT -->
          </div>
          <!-- /TAB BOX ITEM -->

          <!-- TAB BOX ITEM -->
          <div class="tab-box-item">
            <!-- POST COMMENT LIST -->
            <div class="post-comment-list no-border-top">
              <!-- POST COMMENT -->
              <div class="post-comment">
                <!-- USER AVATAR -->
                <a class="user-avatar small no-outline" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="/assets/img/avatar/04.jpg"></div>
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
                    <p class="user-avatar-badge-text">6</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                  </div>
                  <!-- /USER AVATAR BADGE -->
                </a>
                <!-- /USER AVATAR -->

                <!-- POST COMMENT TEXT -->
                <p class="post-comment-text user-tag purchased"><a class="post-comment-text-author" href="profile-timeline.html">Bearded Wonder</a></p>
                <!-- /POST COMMENT TEXT -->

                <!-- POST COMMENT TEXT -->
                <p class="post-comment-text">Hi! I just purchased this item and I have a question, does it have the PSD files included? Thanks!</p>
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

              <!-- POST COMMENT -->
              <div class="post-comment unread reply-2">
                <!-- USER AVATAR -->
                <a class="user-avatar small no-outline" href="profile-timeline.html">
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
                </a>
                <!-- /USER AVATAR -->

                <!-- POST COMMENT TEXT -->
                <p class="post-comment-text user-tag author"><a class="post-comment-text-author" href="profile-timeline.html">Marina Valentine</a></p>
                <!-- /POST COMMENT TEXT -->

                <!-- POST COMMENT TEXT -->
                <p class="post-comment-text">Yes! They are all included in the pack!</p>
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
                          <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/like.png" alt="reaction-like">
                          <!-- /REACTION IMAGE -->

                          <!-- SIMPLE DROPDOWN -->
                          <div class="simple-dropdown padded reaction-item-dropdown">
                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/like.png" alt="reaction-like"> <span class="bold">Like</span></p>
                            <!-- /SIMPLE DROPDOWN TEXT -->

                            <!-- SIMPLE DROPDOWN TEXT -->
                            <p class="simple-dropdown-text">Bearded Wonder</p>
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

            </div>
            <!-- /POST COMMENT LIST -->
          </div>
          <!-- /TAB BOX ITEM -->

          <!-- TAB BOX ITEM -->
          <div class="tab-box-item">
            <!-- POST COMMENT LIST -->
            <div class="post-comment-list no-border-top">
              <!-- POST COMMENT -->
              <div class="post-comment">
                <!-- USER AVATAR -->
                <a class="user-avatar small no-outline" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
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

                <!-- POST COMMENT TEXT WRAP -->
                <div class="post-comment-text-wrap">
                  <!-- RATING LIST -->
                  <div class="rating-list medium">
                    <!-- RATING -->
                    <div class="rating medium filled">
                      <!-- RATING ICON -->
                      <svg class="rating-icon medium icon-star">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                      <!-- /RATING ICON -->
                    </div>
                    <!-- /RATING -->

                    <!-- RATING -->
                    <div class="rating medium filled">
                      <!-- RATING ICON -->
                      <svg class="rating-icon medium icon-star">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                      <!-- /RATING ICON -->
                    </div>
                    <!-- /RATING -->

                    <!-- RATING -->
                    <div class="rating medium filled">
                      <!-- RATING ICON -->
                      <svg class="rating-icon medium icon-star">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                      <!-- /RATING ICON -->
                    </div>
                    <!-- /RATING -->

                    <!-- RATING -->
                    <div class="rating medium filled">
                      <!-- RATING ICON -->
                      <svg class="rating-icon medium icon-star">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                      <!-- /RATING ICON -->
                    </div>
                    <!-- /RATING -->

                    <!-- RATING -->
                    <div class="rating medium">
                      <!-- RATING ICON -->
                      <svg class="rating-icon medium icon-star">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                      <!-- /RATING ICON -->
                    </div>
                    <!-- /RATING -->
                  </div>
                  <!-- /RATING LIST -->

                  <!-- POST COMMENT TEXT -->
                  <p class="post-comment-text"><span class="bold">Reason:</span> <span class="highlighted">Item Quality</span></p>
                  <!-- /POST COMMENT TEXT -->
                </div>
                <!-- /POST COMMENT TEXT WRAP -->

                <!-- POST COMMENT TEXT -->
                <p class="post-comment-text">Main reason would pretty much be all, nice clean code, easy to customise and work with. Commenting on each section is great, could not really ask for anything better. Top work!</p>
                <!-- /POST COMMENT TEXT -->

                <!-- CONTENT ACTIONS -->
                <div class="content-actions">
                  <!-- CONTENT ACTION -->
                  <div class="content-action">
                    <!-- META LINE -->
                    <div class="meta-line">
                      <!-- META LINE TEXT -->
                      <p class="meta-line-text"><a href="profile-timeline.html">Nick Grissom</a></p>
                      <!-- /META LINE TEXT -->
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
                          <p class="simple-dropdown-link">Report Review</p>
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

            </div>
            <!-- /POST COMMENT LIST -->
          </div>
          <!-- /TAB BOX ITEM -->
        </div>
        <!-- /TAB BOX ITEMS -->
      </div>
      <!-- /TAB BOX -->
    </div>
    <!-- /MARKETPLACE CONTENT -->

    <!-- MARKETPLACE SIDEBAR -->
    <div class="marketplace-sidebar">
      <!-- SIDEBAR BOX -->
      <div class="sidebar-box">
        <!-- SIDEBAR BOX ITEMS -->
        <div class="sidebar-box-items">
          <!-- PRICE TITLE -->
          <br>
          <p class="price-title small"><span class="currency">Tsh</span> <span style="color:red">{{number_format($bidhaa->Mashine_Price)}}</span> /=</p>
          <!-- /PRICE TITLE -->



          <!-- BUTTON -->
          <a href="#" class="button primary">Nunua!</a>
          <!-- /BUTTON -->

          <!-- USER STATS -->
          <div class="user-stats">
            <!-- USER STAT -->
            <div class="user-stat big">
              <!-- USER STAT TITLE -->
              <p class="user-stat-title">1.360</p>
              <!-- /USER STAT TITLE -->

              <!-- USER STAT TEXT -->
              <p class="user-stat-text">sales</p>
              <!-- /USER STAT TEXT -->
            </div>
            <!-- /USER STAT -->

            <!-- USER STAT -->
            <div class="user-stat big">
              <!-- USER STAT TITLE -->
              <p class="user-stat-title">4.2/5</p>
              <!-- /USER STAT TITLE -->

              <!-- RATING LIST -->
              <div class="rating-list">
                <!-- RATING -->
                <div class="rating filled">
                  <!-- RATING ICON -->
                  <svg class="rating-icon icon-star">
                    <use xlink:href="#svg-star"></use>
                  </svg>
                  <!-- /RATING ICON -->
                </div>
                <!-- /RATING -->

                <!-- RATING -->
                <div class="rating filled">
                  <!-- RATING ICON -->
                  <svg class="rating-icon icon-star">
                    <use xlink:href="#svg-star"></use>
                  </svg>
                  <!-- /RATING ICON -->
                </div>
                <!-- /RATING -->

                <!-- RATING -->
                <div class="rating filled">
                  <!-- RATING ICON -->
                  <svg class="rating-icon icon-star">
                    <use xlink:href="#svg-star"></use>
                  </svg>
                  <!-- /RATING ICON -->
                </div>
                <!-- /RATING -->

                <!-- RATING -->
                <div class="rating filled">
                  <!-- RATING ICON -->
                  <svg class="rating-icon icon-star">
                    <use xlink:href="#svg-star"></use>
                  </svg>
                  <!-- /RATING ICON -->
                </div>
                <!-- /RATING -->

                <!-- RATING -->
                <div class="rating">
                  <!-- RATING ICON -->
                  <svg class="rating-icon icon-star">
                    <use xlink:href="#svg-star"></use>
                  </svg>
                  <!-- /RATING ICON -->
                </div>
                <!-- /RATING -->
              </div>
              <!-- /RATING LIST -->
            </div>
            <!-- /USER STAT -->
          </div>
          <!-- /USER STATS -->
        </div>
        <!-- /SIDEBAR BOX ITEMS -->
         <hr>
        <!-- SIDEBAR BOX TITLE -->
        <p class="sidebar-box-title medium-space">Muuzaji</p>
        <!-- /SIDEBAR BOX TITLE -->

        <!-- SIDEBAR BOX ITEMS -->
        <div class="sidebar-box-items">
          <!-- USER STATUS -->
          <div class="user-status">
            <!-- USER STATUS AVATAR -->
            <a class="user-status-avatar" href="/kilimofy/UserAccount/about_user_page/{{$bidhaa->Seller_Id}}-About-{{$bidhaa->Seller_Name}}-in-Kilimofy-Platform">
              <!-- USER AVATAR -->
              <div class="user-avatar small no-outline">
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-30-32" data-src="/Uploads/avatars/{{$bidhaa->Seller_Image_Path}}"></div>
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
                  <p class="user-avatar-badge-text">{{$total_user_item_list}}</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </div>
              <!-- /USER AVATAR -->
            </a>
            <!-- /USER STATUS AVATAR -->

            <!-- USER STATUS TITLE -->
            <p class="user-status-title"><a class="bold" href="/kilimofy/UserAccount/about_user_page/{{$bidhaa->Seller_Id}}-About-{{$bidhaa->Seller_Name}}-in-Kilimofy-Platform">{{$bidhaa->Seller_Name}}</a></p>
            <!-- /USER STATUS TITLE -->

            <!-- USER STATUS TEXT -->
            <p class="user-status-text small">Bidhaa {{$total_user_item_list}} Sokoni</p>
            <!-- /USER STATUS TEXT -->
          </div>
          <!-- /USER STATUS -->

          <!-- BADGE LIST -->
          <div class="badge-list small align-left">

            @foreach($user_item_list as $item)
            <!-- BADGE ITEM -->
            <a href="/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/shopping-cart/{{$item->id}}">
              <div class="badge-item text-tooltip-tft" data-title="{{$item->item_name}}">
                <img src="/Uploads/MashineImage/{{$item->Mashine_Image}}" alt="{{$item->Mashine_Name}}" style="width:120%; height:120%; border-radius:70%;">
              </div>
            </a>

            <!-- /BADGE ITEM -->
            @endforeach

          </div>
          <!-- /BADGE LIST -->

        <hr>
        </div>
        <!-- /SIDEBAR BOX ITEMS -->

        <!-- SIDEBAR BOX TITLE -->
        <p class="sidebar-box-title medium-space">Taarifa ya Bidhaa</p>
        <!-- /SIDEBAR BOX TITLE -->

        <!-- SIDEBAR BOX ITEMS -->
        <div class="sidebar-box-items">
          <!-- INFORMATION LINE LIST -->
          <div class="information-line-list">
            <!-- INFORMATION LINE -->
            <div class="information-line">
              <!-- INFORMATION LINE TITLE -->
              <p class="information-line-title">Jina</p>
              <!-- /INFORMATION LINE TITLE -->

              <!-- INFORMATION LINE TEXT -->
              <p class="information-line-text"><span class="bold">{{$bidhaa->Mashine_Name}}</span></p>
              <!-- /INFORMATION LINE TEXT -->
            </div>
            <!-- /INFORMATION LINE -->

            <!-- INFORMATION LINE -->
            <div class="information-line">
              <!-- INFORMATION LINE TITLE -->
              <p class="information-line-title">Aina</p>
              <!-- /INFORMATION LINE TITLE -->

              <!-- INFORMATION LINE TEXT -->
              <p class="information-line-text"><span class="bold">Mashine Ya Kilimo</span></p>
              <!-- /INFORMATION LINE TEXT -->
            </div>
            <!-- /INFORMATION LINE -->

            <!-- INFORMATION LINE -->
            <div class="information-line">
              <!-- INFORMATION LINE TITLE -->
              <p class="information-line-title">Garama</p>
              <!-- /INFORMATION LINE TITLE -->

              <!-- INFORMATION LINE TEXT -->
              <p class="information-line-text"><a href="">Tsh {{number_format($bidhaa->Mashine_Price)}} /=</a></p>
              <!-- /INFORMATION LINE TEXT -->
            </div>
            <!-- /INFORMATION LINE -->

            <!-- INFORMATION LINE -->
            <div class="information-line">
              <!-- INFORMATION LINE TITLE -->
              <p class="information-line-title">Mahali</p>
              <!-- /INFORMATION LINE TITLE -->

              <!-- INFORMATION LINE TEXT -->
              <p class="information-line-text"><span class="bold">Arusha, Arusha Mjini</span></p>
              <!-- /INFORMATION LINE TEXT -->
            </div>
            <!-- /INFORMATION LINE -->

            <!-- INFORMATION LINE -->
            <div class="information-line">
              <!-- INFORMATION LINE TITLE -->
              <p class="information-line-title">Nambari ya Simu</p>
              <!-- /INFORMATION LINE TITLE -->

              <!-- INFORMATION LINE TEXT -->
              <p class="information-line-text"><span class="bold">0767265780</span></p>
              <!-- /INFORMATION LINE TEXT -->
            </div>
            <!-- /INFORMATION LINE -->


          </div>
          <!-- /INFORMATION LINE LIST -->
        </div>
        <!-- /SIDEBAR BOX ITEMS -->

        <!-- SIDEBAR BOX TITLE -->
        <p class="sidebar-box-title medium-space text-center" >Asante !</p>
        <!-- /SIDEBAR BOX TITLE -->

      </div>
      <!-- /SIDEBAR BOX -->
    </div>
    <!-- /MARKETPLACE SIDEBAR -->
  </div>
  <!-- /GRID -->
  @endforeach
</div>
<!-- /CONTENT GRID -->
