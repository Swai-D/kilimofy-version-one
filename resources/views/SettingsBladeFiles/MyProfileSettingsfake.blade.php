@extends('LayoutBladeFiles.settingsLayout')
@section('mini-user-settings-active', 'unread')
@section('profile-accordion-open', 'accordion-open')
@section('sidebar-profile-link-active', 'active')
@section('settings-content')
<!-- GRID COLUMN -->
<div class="account-hub-content">
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">
      <!-- SECTION PRETITLE -->
      <p class="section-pretitle">My Profile</p>
      <!-- /SECTION PRETITLE -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Profile Info</h2>
      <!-- /SECTION TITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- GRID COLUMN -->
  <div class="grid-column">
    <!-- GRID -->
    <div class="grid grid-3-3-3 centered">
      <!-- USER PREVIEW -->
      <div class="user-preview small fixed-height">
        <!-- USER PREVIEW COVER -->
        <figure class="user-preview-cover liquid">
          <img src="img/cover/01.jpg" alt="cover-01">
        </figure>
        <!-- /USER PREVIEW COVER -->

        <!-- USER PREVIEW INFO -->
        <div class="user-preview-info">
          <!-- USER SHORT DESCRIPTION -->
          <div class="user-short-description small">
            <!-- USER SHORT DESCRIPTION AVATAR -->
            <div class="user-short-description-avatar user-avatar">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-100-110"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->

              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-68-74" data-src="/Uploads/avatars/{{Auth::user()->avatar}}"></div>
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

            </div>
            <!-- /USER SHORT DESCRIPTION AVATAR -->
          </div>
          <!-- /USER SHORT DESCRIPTION -->
        </div>
        <!-- /USER PREVIEW INFO -->
      </div>
      <!-- /USER PREVIEW -->

      <!-- UPLOAD BOX -->
      <div class="upload-box">
        <!-- UPLOAD BOX ICON -->
        <svg class="upload-box-icon icon-members">
          <use xlink:href="#svg-members"></use>
        </svg>
        <!-- /UPLOAD BOX ICON -->

        <!-- UPLOAD BOX TITLE -->
        <p class="upload-box-title">Change Profile</p>
        <!-- /UPLOAD BOX TITLE -->

        <!-- UPLOAD BOX TEXT -->
        <p class="upload-box-text">110x110px size minimum</p>
        <!-- /UPLOAD BOX TEXT -->
      </div>
      <!-- /UPLOAD BOX -->

      <!-- UPLOAD BOX -->
      <div class="upload-box">
        <!-- UPLOAD BOX ICON -->
        <svg class="upload-box-icon icon-photos">
          <use xlink:href="#svg-photos"></use>
        </svg>
        <!-- /UPLOAD BOX ICON -->

        <!-- UPLOAD BOX TITLE -->
        <p class="upload-box-title">Change Cover</p>
        <!-- /UPLOAD BOX TITLE -->

        <!-- UPLOAD BOX TEXT -->
        <p class="upload-box-text">1184x300px size minimum</p>
        <!-- /UPLOAD BOX TEXT -->
      </div>
      <!-- /UPLOAD BOX -->
    </div>
    <!-- /GRID -->

    <!-- WIDGET BOX -->
    <div class="widget-box">
      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">About Your Profile</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- FORM -->
        <form class="form">
          <!-- FORM ROW -->
          <div class="form-row split">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small active">
                <label for="profile-name">Profile Name ({{Auth::user()->user_name}})</label>
                <input type="text" id="profile-name" name="profile_name" >
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM SELECT -->
              <div class="form-select">
                <label for="profile-city">Phone N0.</label>
                <input type="number" id="profile-name" name="profile_name" min="0">
              </div>
              <!-- /FORM SELECT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row split">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small full">
                <textarea id="profile-description" name="profile_description" placeholder="Write a little description about you..."></textarea>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM SELECT -->
              <div class="form-select">
                <label for="profile-city">Occupation</label>
                <select id="profile-city" name="profile_city">
                  <option value="0">Select your City</option>
                  <option value="1" selected>New York</option>
                </select>
                <!-- FORM SELECT ICON -->
                <svg class="form-select-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /FORM SELECT ICON -->
              </div>
              <!-- /FORM SELECT -->

              <!-- FORM INPUT DECORATED -->
              <div class="form-input-decorated">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="profile-birthday">Birthday</label>
                  <input type="date" id="profile-birthday" name="profile_birthday">
                </div>
                <!-- /FORM INPUT -->

              </div>
              <!-- /FORM INPUT DECORATED -->

              <!-- FORM SELECT -->
              <div class="form-select">
                <label for="profile-city">Birthday Place</label>
                <select id="profile-city" name="profile_city">
                  <option value="0">Select your City</option>
                  <option value="1" selected>New York</option>
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
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row split">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small active">
                <label for="profile-name">Password</label>
                <input type="password" id="profile-name" name="profile_name" >
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small active">
                <label for="profile-name">Comfirm Password</label>
                <input type="password" id="profile-name" name="profile_name" >
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
        </form>
        <!-- /FORM -->
      </div>
      <!-- WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->

    <!-- WIDGET BOX -->
    <div class="widget-box">
      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Interests</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- FORM -->
        <form class="form">
          <!-- FORM ROW -->
          <div class="form-row split">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small mid-textarea active">
                <label for="profile-favourite-shows">Favourite TV Shows</label>
                <textarea id="profile-favourite-shows" name="profile_favourite_shows">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy, The Last Windbender, Game of Wars.</textarea>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small mid-textarea active">
                <label for="profile-favourite-music">Favourite Music Bands / Artists</label>
                <textarea id="profile-favourite-music" name="profile_favourite_music">Iron Maid, DC/AC, Megablow, Kung Fighters, System of a Revenge, Rammstown.</textarea>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row split">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small mid-textarea active">
                <label for="profile-favourite-movies">Favourite Movies</label>
                <textarea id="profile-favourite-movies" name="profile_favourite_movies">The Revengers Saga, The Scarred Wizard and the Fire Crown, Crime Squad, Metal Man, The Dark Rider, Watchers, The Impossible Heist.</textarea>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small mid-textarea active">
                <label for="profile-favourite-books">Favourite Books</label>
                <textarea id="profile-favourite-books" name="profile_favourite_books">The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water</textarea>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row split">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small mid-textarea active">
                <label for="profile-favourite-games">Favourite Games</label>
                <textarea id="profile-favourite-games" name="profile_favourite_games">The First of Us, Assassin's Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto</textarea>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small mid-textarea">
                <label for="profile-hobbies">My Hobbies</label>
                <textarea id="profile-hobbies" name="profile_hobbies"></textarea>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
        </form>
        <!-- /FORM -->
      </div>
      <!-- WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->

    <!-- WIDGET BOX -->
    <div class="widget-box">
      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Jobs &amp; Education</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- FORM -->
        <form class="form">
          <!-- FORM ROW -->
          <div class="form-row split">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small active">
                <label for="profile-job-1-title">Title or Place</label>
                <input type="text" id="profile-job-1-title" name="profile_job_1_title" value="Lead Costume Designer">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ROW -->
            <div class="form-row split">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="profile-job-1-year-started">Year Started</label>
                  <select id="profile-job-1-year-started" name="profile_job_1_year_started">
                    <option value="0">Select Year</option>
                    <option value="1" selected>2015</option>
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

              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="profile-job-1-year-ended">Year Ended</label>
                  <select id="profile-job-1-year-ended" name="profile_job_1_year_ended">
                    <option value="0">Select Year</option>
                    <option value="1" selected>Now</option>
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
            </div>
            <!-- /FORM ROW -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small mid-textarea active">
                <label for="profile-job-1-description">Description</label>
                <textarea id="profile-job-1-description" name="profile_job_1_description">Lead Costume Designer for the "Amazzo Costumes" agency. I’m in charge of a ten person group, overseeing all the proyects and talking to potential clients. I also handle some face to face interviews for new candidates.</textarea>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row split">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small">
                <label for="profile-job-2-title">Title or Place</label>
                <input type="text" id="profile-job-2-title" name="profile_job_2_title">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->

            <!-- FORM ROW -->
            <div class="form-row split">
              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="profile-job-2-year-started">Year Started</label>
                  <select id="profile-job-2-year-started" name="profile_job_2_year_started">
                    <option value="0">Select Year</option>
                    <option value="1" selected>2019</option>
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

              <!-- FORM ITEM -->
              <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                  <label for="profile-job-2-year-ended">Year Ended</label>
                  <select id="profile-job-2-year-ended" name="profile_job_2_year_ended">
                    <option value="0">Select Year</option>
                    <option value="1" selected>2019</option>
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
            </div>
            <!-- /FORM ROW -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small mid-textarea">
                <label for="profile-job-2-description">Description</label>
                <textarea id="profile-job-2-description" name="profile_job_2_description"></textarea>
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
        </form>
        <!-- /FORM -->

        <!-- BUTTON -->
        <p class="button small white add-field-button">+ Add New Field</p>
        <!-- /BUTTON -->
      </div>
      <!-- WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->





  </div>
  <!-- /GRID COLUMN -->
</div>
<!-- /GRID COLUMN -->
@endsection
