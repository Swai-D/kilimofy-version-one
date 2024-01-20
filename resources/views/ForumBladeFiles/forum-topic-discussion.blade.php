@extends('LayoutBladeFiles.app-layout')
@section('title','Jukwaani')


@section('menu-status-chat','active')
@section('discription-title','Jukwaa')
@section('discription-details','kilimofy')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION BANNER -->
  @include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

 @foreach($discussions_topic_page as $discussion)
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">Jukwaa la Mjadala</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title pinned">{{$discussion->Topic}}</h2>
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
        <p class="section-filters-bar-title"><a href="forums.html">Mjadala</a><span class="separator"></span><a href="#">{{$discussion->Forum_Category_Name}}</a><span class="separator"></span><a href="">{{$discussion->Topic}}</a></p>
        <!-- /SECTION FILTERS BAR TITLE -->

      @foreach($last_participant_created_at as $last_participant_created_at)
        <!-- SECTION FILTERS BAR TEXT -->
        <div class="section-filters-bar-text small-space">
          Last post by
          <!-- USER AVATAR -->
          <a class="user-avatar micro no-stats" href="#">
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
              <div class="hexagon-image-18-20" data-src="{{$last_participant_created_at->Author_Image_Name}}"></div>
              <!-- /HEXAGON -->
            </div>
            <!-- /USER AVATAR CONTENT -->
          </a>
          <!-- /USER AVATAR -->
          <a class="bold" href="profile-timeline.html">{{$last_participant_created_at->Author_Name}}</a>
          {{$last_participant_created_at->created_at->diffForHumans()}}
        </div>
        <!-- /SECTION FILTERS BAR TEXT -->
      @endforeach
      </div>
      <!-- /SECTION FILTERS BAR INFO -->
    </div>
    <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>
  <!-- /SECTION FILTERS BAR -->

  <!-- GRID -->
  <div class="grid grid-9-3">
    <!-- FORUM CONTENT -->
    <div class="forum-content">

    @if($discussion->id != NULL)
      <!-- FORUM POST HEADER -->
      <div class="forum-post-header">
        <!-- FORUM POST HEADER TITLE -->
        <p class="forum-post-header-title">Author</p>
        <!-- /FORUM POST HEADER TITLE -->

        <!-- FORUM POST HEADER TITLE -->
        <p class="forum-post-header-title">Post</p>
        <!-- /FORUM POST HEADER TITLE -->
      </div>
      <!-- /FORUM POST HEADER -->


        <!-- FORUM POST LIST -->
        <div class="forum-post-list">
          <!-- FORUM POST -->
          <div class="forum-post">
            <!-- FORUM POST META -->
            <div class="forum-post-meta">
              <!-- FORUM POST TIMESTAMP -->
              <p class="forum-post-timestamp">{{$discussion->created_at->format('M d, Y')}}</p>
              <!-- /FORUM POST TIMESTAMP -->

              <!-- FORUM POST ACTIONS -->
              <div class="forum-post-actions">
                <!-- FORUM POST ACTION -->
                <p class="forum-post-action light">Report</p>
                <!-- /FORUM POST ACTION -->

                <!-- FORUM POST ACTION -->
                <p class="forum-post-action">Reply</p>
                <!-- /FORUM POST ACTION -->
              </div>
              <!-- /FORUM POST ACTIONS -->
            </div>
            <!-- /FORUM POST META -->

            <!-- FORUM POST CONTENT -->
            <div class="forum-post-content">
              <!-- FORUM POST USER -->
              <div class="forum-post-user">
                <!-- USER AVATAR -->
                <a class="user-avatar no-outline" href="">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-68-74" data-src="{{$discussion->Author_Image_Name}}"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->

                  <!-- USER AVATAR PROGRESS -->
                  <div class="user-avatar-progress">
                    <!-- HEXAGON -->
                    <div class="hexagon-progress-84-92"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS -->

                  <!-- USER AVATAR PROGRESS BORDER -->
                  <div class="user-avatar-progress-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-border-84-92"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS BORDER -->


                </a>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <a class="user-avatar small no-outline" href="">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="{{$discussion->Author_Image_Name}}"></div>
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

                <!-- FORUM POST USER TITLE -->
                <p class="forum-post-user-title"><a href="profile-timeline.html">{{$discussion->Author_Name}}</a></p>
                <!-- /FORUM POST USER TITLE -->

                <!-- FORUM POST USER TITLE -->
                <p class="forum-post-user-text"><a href="profile-timeline.html">@ {{strtolower($discussion->Author_Username)}}</a></p>
                <!-- /FORUM POST USER TITLE -->

                <!-- FORUM POST USER TAG -->
                <p class="forum-post-user-tag organizer">Kiongozi</p>
                <!-- /FORUM POST USER TAG -->
              </div>
              <!-- /FORUM POST USER -->

              <!-- FORUM POST INFO -->
              <div class="forum-post-info">
                <!-- FORUM POST PARAGRAPH -->
                <p class="forum-post-paragraph"><span class="bold">{{$discussion->Topic}}</span>
                  <br><br>
                   {{$discussion->Discussion_Content}}
                </p>
                <!-- /FORUM POST PARAGRAPH -->

                @if($discussion->Discussion_Image != NULL && $discussion->Discussion_Video == NULL)
                <!-- FORUM POST IMAGE -->
                <img class="forum-post-image" src="{{$discussion->Discussion_Image}}" alt="cover-01">
                <!-- /FORUM POST IMAGE -->

                @elseif($discussion->Discussion_Video != NULL && $discussion->Discussion_Image == NULL)
                <br>
                <!-- VIDEO BOX -->
                <div class="video-box">
                  <!-- VIDEO BOX COVER -->
                  <div class="video-box">
                    <!-- VIDEO BOX COVER IMAGE -->
                    <video  style="width:100%;"  autoplay muted loop controls>
                          <source src="{{$paticipant_reply->Discussion_Video}}" type="video/mp4" >
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
                @endif

                <!-- FORUM POST PARAGRAPH -->
                <!-- <p class="forum-post-paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p> -->
                <!-- /FORUM POST PARAGRAPH -->
              </div>
              <!-- /FORUM POST INFO -->
            </div>
            <!-- /FORUM POST CONTENT -->
          </div>
          <!-- /FORUM POST -->

         @foreach($paticipant_comments as $paticipant_reply)

         @if($paticipant_reply->Post_Image != NULL && $paticipant_reply->Post_Video == NULL)
          <!-- FORUM POST -->
          <div class="forum-post">
            <!-- FORUM POST META -->
            <div class="forum-post-meta">
              <!-- FORUM POST TIMESTAMP -->
              <p class="forum-post-timestamp">{{$paticipant_reply->created_at->diffForHumans()}}</p>
              <!-- /FORUM POST TIMESTAMP -->

              <!-- FORUM POST ACTIONS -->
              <div class="forum-post-actions">
                <!-- FORUM POST ACTION -->
                <p class="forum-post-action light">Report</p>
                <!-- /FORUM POST ACTION -->

                <!-- FORUM POST ACTION -->
                <p class="forum-post-action">Reply</p>
                <!-- /FORUM POST ACTION -->
              </div>
              <!-- /FORUM POST ACTIONS -->
            </div>
            <!-- /FORUM POST META -->


            <!-- FORUM POST CONTENT -->
            <div class="forum-post-content">
              <!-- FORUM POST USER -->
              <div class="forum-post-user">
                <!-- USER AVATAR -->
                <a class="user-avatar no-outline" href="">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-68-74" data-src="{{$paticipant_reply->Author_Image_Name}}"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->

                  <!-- USER AVATAR PROGRESS -->
                  <div class="user-avatar-progress">
                    <!-- HEXAGON -->
                    <div class="hexagon-progress-84-92"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS -->

                  <!-- USER AVATAR PROGRESS BORDER -->
                  <div class="user-avatar-progress-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-border-84-92"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS BORDER -->


                </a>
                <!-- /USER AVATAR -->

                <!-- USER AVATAR -->
                <a class="user-avatar small no-outline" href="">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="{{$paticipant_reply->Author_Image_Name}}"></div>
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

                <!-- FORUM POST USER TITLE -->
                <p class="forum-post-user-title"><a href="">{{$paticipant_reply->Author_Name}}</a></p>
                <!-- /FORUM POST USER TITLE -->

                <!-- FORUM POST USER TITLE -->
                <p class="forum-post-user-text"><a href="">@ {{strtolower($paticipant_reply->Author_Name)}}</a></p>
                <!-- /FORUM POST USER TITLE -->

                <!-- FORUM POST USER TAG -->
                <p class="forum-post-user-tag">Mshiriki</p>
                <!-- /FORUM POST USER TAG -->
              </div>
              <!-- /FORUM POST USER -->

              <!-- FORUM POST INFO -->
              <div class="forum-post-info">
                <!-- FORUM POST PARAGRAPH -->
                <p class="forum-post-paragraph">{{$paticipant_reply->Post_Content}}</p>
                <!-- /FORUM POST PARAGRAPH -->

                @if($paticipant_reply->Post_Image != NULL)
                <!-- FORUM POST IMAGE -->
                <img class="forum-post-image" src="{{$paticipant_reply->Post_Image}}" alt="cover-01">
                <!-- /FORUM POST IMAGE -->
                @endif
              </div>
              <!-- /FORUM POST INFO -->
            </div>
            <!-- /FORUM POST CONTENT -->

          </div>
          <!-- /FORUM POST -->
          @elseif($paticipant_reply->Post_Video != NULL && $paticipant_reply->Post_Image == NULL)
          <br>
          <!-- VIDEO BOX -->
          <div class="video-box">
            <!-- VIDEO BOX COVER -->
            <div class="video-box">
              <!-- VIDEO BOX COVER IMAGE -->
              <video  style="width:100%;"  autoplay muted loop controls>
                    <source src="{{$paticipant_reply->Post_Video}}" type="video/mp4" >
             </video>
              <!-- /VIDEO BOX COVER IMAGE -->

            </div>
            <!-- /VIDEO BOX COVER -->

            <!-- VIDEO BOX INFO -->
            <div class="video-box-info">
              <!-- VIDEO BOX TITLE -->
              <p class="video-box-title">{{$paticipant_reply->Post_Content}}</p>
              <!-- /VIDEO BOX TITLE -->

              <!-- VIDEO BOX TEXT -->
              <p class="video-box-text">{{$paticipant_reply->created_at->diffForHumans()}}</p>
              <p class="video-box-text">by {{strtolower($paticipant_reply->Author_Name)}}</p>
              <!-- /VIDEO BOX TEXT -->
            </div>
            <!-- /VIDEO BOX INFO -->
          </div>
          <!-- /VIDEO BOX -->

          @endif
          @endforeach

        </div>
        <!-- /FORUM POST LIST -->

      <!-- SECTION PAGER BAR WRAP -->
      <div class="section-pager-bar-wrap align-right">
        <!-- SECTION PAGER BAR -->
        <div class="section-pager-bar">
          <!-- SECTION PAGER -->
          <div class="section-pager">
            <!-- SECTION PAGER ITEM -->
            <div class="section-pager-item active">
              <!-- SECTION PAGER ITEM TEXT -->
              <p class="section-pager-item-text">01</p>
              <!-- /SECTION PAGER ITEM TEXT -->
            </div>
            <!-- /SECTION PAGER ITEM -->

            <!-- SECTION PAGER ITEM -->
            <div class="section-pager-item">
              <!-- SECTION PAGER ITEM TEXT -->
              <p class="section-pager-item-text">02</p>
              <!-- /SECTION PAGER ITEM TEXT -->
            </div>
            <!-- /SECTION PAGER ITEM -->

            <!-- SECTION PAGER ITEM -->
            <div class="section-pager-item">
              <!-- SECTION PAGER ITEM TEXT -->
              <p class="section-pager-item-text">03</p>
              <!-- /SECTION PAGER ITEM TEXT -->
            </div>
            <!-- /SECTION PAGER ITEM -->

            <!-- SECTION PAGER ITEM -->
            <div class="section-pager-item">
              <!-- SECTION PAGER ITEM TEXT -->
              <p class="section-pager-item-text">04</p>
              <!-- /SECTION PAGER ITEM TEXT -->
            </div>
            <!-- /SECTION PAGER ITEM -->

            <!-- SECTION PAGER ITEM -->
            <div class="section-pager-item">
              <!-- SECTION PAGER ITEM TEXT -->
              <p class="section-pager-item-text">05</p>
              <!-- /SECTION PAGER ITEM TEXT -->
            </div>
            <!-- /SECTION PAGER ITEM -->

            <!-- SECTION PAGER ITEM -->
            <div class="section-pager-item">
              <!-- SECTION PAGER ITEM TEXT -->
              <p class="section-pager-item-text">06</p>
              <!-- /SECTION PAGER ITEM TEXT -->
            </div>
            <!-- /SECTION PAGER ITEM -->
          </div>
          <!-- /SECTION PAGER -->

          <!-- SECTION PAGER CONTROLS -->
          <div class="section-pager-controls">
            <!-- SLIDER CONTROL -->
            <div class="slider-control left disabled">
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
          <!-- /SECTION PAGER CONTROLS -->
        </div>
        <!-- /SECTION PAGER BAR -->
      </div>
      <!-- /SECTION PAGER BAR WRAP -->

      @endif
      <!-- QUICK POST -->
      <div class="quick-post medium">
        <!-- QUICK POST HEADER -->
        <div class="quick-post-header">
          <!-- QUICK POST HEADER TITLE -->
          <p class="quick-post-header-title">Weka Maoni</p>
          <!-- /QUICK POST HEADER TITLE -->
        </div>
        <!-- /QUICK POST HEADER -->

      <form class="form" action="/kilimofy/Forum/Forum-Discussion/Join_Discussion" method="post" enctype="multipart/form-data">
          @csrf

          <!-- QUICK POST BODY -->
          <div class="quick-post-body">
            <!-- FORM -->

              <!-- FORM ROW -->
              <div class="form-row">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM TEXTAREA -->
                  <div class="form-textarea">
                    <textarea id="forum-post-text" name="Post_Content" placeholder="Habari {{Auth::user()->name}}! Changia ujumbe wako hapa..."></textarea>
                    <!-- FORM TEXTAREA LIMIT TEXT -->
                    <p class="form-textarea-limit-text">998/1000</p>
                    <!-- /FORM TEXTAREA LIMIT TEXT -->
                  </div>
                  <!-- /FORM TEXTAREA -->
                </div>
                <!-- /FORM ITEM -->
              </div>
              <!-- /FORM ROW -->

          </div>
          <!-- /QUICK POST BODY -->

          <!-- QUICK POST FOOTER -->
          <div class="quick-post-footer">
            <!-- QUICK POST FOOTER ACTIONS -->
            <div class="quick-post-footer-actions">
              <!-- QUICK POST FOOTER ACTION -->
              <div class="quick-post-footer-action text-tooltip-tft-medium image-upload" data-title="Insert Photo">
                <!-- QUICK POST FOOTER ACTION ICON -->
                <label for="photo-input">
                  <svg class="quick-post-footer-action-icon icon-camera" style="fill:black;">
                    <use xlink:href="#svg-camera"></use>
                  </svg>
                </label>
                <!-- /QUICK POST FOOTER ACTION ICON -->
                <input name="File" id="photo-input" type="file" />
                <input name="discussion_id"  type="hidden" value="{{$discussion->id}}" />
                <input name="Author_Name"  type="hidden" value="{{Auth::user()->name}}" />
                <input name="Author_ID"  type="hidden" value="{{Auth::user()->id}}" />
                <input name="Author_Image_Name"  type="hidden" value="{{Auth::user()->avatar}}" />
              </div>

              <!-- /QUICK POST FOOTER ACTION -->
            </div>
            <!-- /QUICK POST FOOTER ACTIONS -->

              <!-- QUICK POST FOOTER ACTIONS -->
              <div class="quick-post-footer-actions">
                <!-- BUTTON -->
                <p class="button void">Discard</p>
                <!-- /BUTTON -->

                <!-- BUTTON -->
                <button type="submit" class="button secondary">Reply</button>
                <!-- /BUTTON -->
              </div>
              <!-- /QUICK POST FOOTER ACTIONS -->
          </div>
          <!-- /QUICK POST FOOTER -->

        </form>

      </div>
      <!-- /QUICK POST -->

    </div>
    <!-- /FORUM CONTENT -->

    @if($discussion->id != Null)
    <!-- FORUM SIDEBAR -->
    <div class="forum-sidebar grid-column">
      <!-- STATS DECORATION -->
      <div class="stats-decoration secondary">
        <!-- STATS DECORATION ICON WRAP -->
        <div class="stats-decoration-icon-wrap">
          <!-- STATS DECORATION ICON -->
          <svg class="stats-decoration-icon icon-thumbs-up">
            <use xlink:href="#svg-thumbs-up"></use>
          </svg>
          <!-- /STATS DECORATION ICON -->
        </div>
        <!-- /STATS DECORATION ICON WRAP -->

        <!-- STATS DECORATION TITLE -->
        <p class="stats-decoration-title">{{$reply_count}}</p>
        <!-- /STATS DECORATION TITLE -->

        <!-- STATS DECORATION TEXT -->
        <p class="stats-decoration-text">Voices</p>
        <!-- /STATS DECORATION TEXT -->
      </div>
      <!-- /STATS DECORATION -->

      <!-- STATS DECORATION -->
      <div class="stats-decoration primary">
        <!-- STATS DECORATION ICON WRAP -->
        <div class="stats-decoration-icon-wrap">
          <!-- STATS DECORATION ICON -->
          <svg class="stats-decoration-icon icon-members">
            <use xlink:href="#svg-members"></use>
          </svg>
          <!-- /STATS DECORATION ICON -->
        </div>
        <!-- /STATS DECORATION ICON WRAP -->

        <!-- STATS DECORATION TITLE -->
        <p class="stats-decoration-title">{{$reply_count}}</p>
        <!-- /STATS DECORATION TITLE -->

        <!-- STATS DECORATION TEXT -->
        <p class="stats-decoration-text">Replies</p>
        <!-- /STATS DECORATION TEXT -->
      </div>
      <!-- /STATS DECORATION -->
    </div>
    <!-- /FORUM SIDEBAR -->
    @endif
  </div>
  <!-- /GRID -->
  @endforeach
</div>
<!-- /CONTENT GRID -->
