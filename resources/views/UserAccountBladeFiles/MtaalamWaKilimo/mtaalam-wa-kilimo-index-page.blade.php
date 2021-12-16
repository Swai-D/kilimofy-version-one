@extends('LayoutBladeFiles.app-layout')
@section('title','Usafirishaji wa Bidhaa')
@section('menu-status-gardener','active')

@section('discription-title')
 Akaunti ya {{Auth::user()->name}}
@endsection

@section('discription-details','kilimofy')

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- SECTION BANNER -->
  @include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

  <!-- GRID -->
  <div class="grid grid-3-9 medium-space">
    <!-- GRID COLUMN -->
    <div class="account-hub-sidebar">
      <!-- SIDEBAR BOX -->
      <div class="sidebar-box no-padding">
        <!-- SIDEBAR MENU -->
        <div class="sidebar-menu round-borders">
          <!-- SIDEBAR MENU ITEM -->
          <div class="sidebar-menu-item">
            <!-- SIDEBAR MENU HEADER -->
            <div class="sidebar-menu-header accordion-trigger-linked">
              <!-- SIDEBAR MENU HEADER ICON -->
              <svg class="sidebar-menu-header-icon icon-profile">
                <use xlink:href="#svg-profile"></use>
              </svg>
              <!-- /SIDEBAR MENU HEADER ICON -->

              <!-- SIDEBAR MENU HEADER CONTROL ICON -->
              <div class="sidebar-menu-header-control-icon">
                <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                  <use xlink:href="#svg-minus-small"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                  <use xlink:href="#svg-plus-small"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
              </div>
              <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

              <!-- SIDEBAR MENU HEADER TITLE -->
              <p class="sidebar-menu-header-title">My Profile</p>
              <!-- /SIDEBAR MENU HEADER TITLE -->

              <!-- SIDEBAR MENU HEADER TEXT -->
              <p class="sidebar-menu-header-text">Change your avatar &amp; cover, accept friends, read messages and more!</p>
              <!-- /SIDEBAR MENU HEADER TEXT -->
            </div>
            <!-- /SIDEBAR MENU HEADER -->

            <!-- SIDEBAR MENU BODY -->
            <div class="sidebar-menu-body accordion-content-linked">
              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-profile-info.html">Profile Info</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-profile-social.html">Social &amp; Stream</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-profile-notifications.html">Notifications</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-profile-messages.html">Messages</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-profile-requests.html">Friend Requests</a>
              <!-- /SIDEBAR MENU LINK -->
            </div>
            <!-- /SIDEBAR MENU BODY -->
          </div>
          <!-- /SIDEBAR MENU ITEM -->

          <!-- SIDEBAR MENU ITEM -->
          <div class="sidebar-menu-item">
            <!-- SIDEBAR MENU HEADER -->
            <div class="sidebar-menu-header accordion-trigger-linked">
              <!-- SIDEBAR MENU HEADER ICON -->
              <svg class="sidebar-menu-header-icon icon-store">
                <use xlink:href="#svg-store"></use>
              </svg>
              <!-- /SIDEBAR MENU HEADER ICON -->

              <!-- SIDEBAR MENU HEADER CONTROL ICON -->
              <div class="sidebar-menu-header-control-icon">
                <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                  <use xlink:href="#svg-minus-small"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                  <use xlink:href="#svg-plus-small"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
              </div>
              <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

              <!-- SIDEBAR MENU HEADER TITLE -->
              <p class="sidebar-menu-header-title">My Trips Store</p>
              <!-- /SIDEBAR MENU HEADER TITLE -->

              <!-- SIDEBAR MENU HEADER TEXT -->
              <p class="sidebar-menu-header-text">Review your account, manage products check stats and much more!</p>
              <!-- /SIDEBAR MENU HEADER TEXT -->
            </div>
            <!-- /SIDEBAR MENU HEADER -->

            <!-- SIDEBAR MENU BODY -->
            <div class="sidebar-menu-body accordion-content-linked">
              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-store-account.html">My Account</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-store-statement.html">Sales Statement</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-store-items.html">Manage Items</a>
              <!-- /SIDEBAR MENU LINK -->

              <!-- SIDEBAR MENU LINK -->
              <a class="sidebar-menu-link" href="hub-store-downloads.html">Downloads</a>
              <!-- /SIDEBAR MENU LINK -->
            </div>
            <!-- /SIDEBAR MENU BODY -->
          </div>
          <!-- /SIDEBAR MENU ITEM -->
        </div>
        <!-- /SIDEBAR MENU -->
      </div>
      <!-- /SIDEBAR BOX -->
    </div>
    <!-- /GRID COLUMN -->
    <!-- GRID COLUMN -->
    <div class="account-hub-content">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
          <!-- SECTION PRETITLE -->
          <p class="section-pretitle">My Library</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Agriculture Documents </h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
      </div>
      <!-- /SECTION HEADER -->

      <!-- SECTION FILTERS BAR -->
      <div class="section-filters-bar v6 v6-2">
        <!-- SECTION FILTERS BAR ACTIONS -->
        <div class="section-filters-bar-actions">
          <!-- FORM -->
          <form class="form">
            <!-- FORM ITEM -->
            <div class="form-item split">
              <!-- FORM INPUT DECORATED -->
              <div class="form-input-decorated">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="statement-from-date">From Date</label>
                  <input type="text" id="statement-from-date" name="statement_from_date" value="02/22/2019">
                </div>
                <!-- /FORM INPUT -->

                <!-- FORM INPUT ICON -->
                <svg class="form-input-icon icon-events">
                  <use xlink:href="#svg-events"></use>
                </svg>
                <!-- /FORM INPUT ICON -->
              </div>
              <!-- /FORM INPUT DECORATED -->

              <!-- FORM INPUT DECORATED -->
              <div class="form-input-decorated">
                <!-- FORM INPUT -->
                <div class="form-input small active">
                  <label for="statement-to-date">To Date</label>
                  <input type="text" id="statement-to-date" name="statement_to_date" value="11/14/2019">
                </div>
                <!-- /FORM INPUT -->

                <!-- FORM INPUT ICON -->
                <svg class="form-input-icon icon-events">
                  <use xlink:href="#svg-events"></use>
                </svg>
                <!-- /FORM INPUT ICON -->
              </div>
              <!-- /FORM INPUT DECORATED -->

              <!-- BUTTON -->
              <button class="button primary">
                <!-- ICON MAGNIFYING GLASS -->
                <svg class="icon-magnifying-glass">
                  <use xlink:href="#svg-magnifying-glass"></use>
                </svg>
                <!-- /ICON MAGNIFYING GLASS -->
              </button>
              <!-- /BUTTON -->
            </div>
            <!-- /FORM ITEM -->
          </form>
          <!-- /FORM -->
        </div>
        <!-- /SECTION FILTERS BAR ACTIONS -->

        <!-- SECTION FILTERS BAR ACTIONS -->
        <div class="section-filters-bar-actions">
          <!-- BUTTON -->
          <p class="button secondary">Download Statement</p>
          <!-- /BUTTON -->
        </div>
        <!-- /SECTION FILTERS BAR ACTIONS -->
      </div>
      <!-- /SECTION FILTERS BAR -->

      <!-- TABLE WRAP -->
      <div class="table-wrap" data-simplebar>
        <!-- TABLE -->
        <div class="table table-sales">
          <!-- TABLE HEADER -->
          <div class="table-header">
            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Date</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column padded-left">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Name</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Type</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Code</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Price</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Cut</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column centered padded">
              <!-- TABLE HEADER TITLE -->
              <p class="table-header-title">Earning</p>
              <!-- /TABLE HEADER TITLE -->
            </div>
            <!-- /TABLE HEADER COLUMN -->

            <!-- TABLE HEADER COLUMN -->
            <div class="table-header-column padded-left"></div>
            <!-- /TABLE HEADER COLUMN -->
          </div>
          <!-- /TABLE HEADER -->

          <!-- TABLE BODY -->
          <div class="table-body same-color-rows">
            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 15th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Pixel Diamond Gaming Magazine</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">KMF-1287</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$26</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$13</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 15th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Twitch Stream UI Pack</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">KMF-1364</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$12</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$6</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 14th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Pixel Diamond Gaming Magazine</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">KMF-7638</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$26</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$13</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 14th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Twitch Stream UI Pack</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">KMF-7285</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$12</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$6</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row micro">
              <!-- TABLE COLUMN -->
              <div class="table-column">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">Nov 14th, 2019</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- TABLE LINK -->
                <a class="table-link" href="marketplace-product.html"><span class="highlighted">Twitch Stream UI Pack</span></a>
                <!-- /TABLE LINK -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">Sale</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">KMF-9673</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$12</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TEXT -->
                <p class="table-text"><span class="light">50%</span></p>
                <!-- /TABLE TEXT -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column centered padded">
                <!-- TABLE TITLE -->
                <p class="table-title">$6</p>
                <!-- /TABLE TITLE -->
              </div>
              <!-- /TABLE COLUMN -->

              <!-- TABLE COLUMN -->
              <div class="table-column padded-left">
                <!-- PERCENTAGE DIFF ICON WRAP -->
                <div class="percentage-diff-icon-wrap positive">
                  <!-- PERCENTAGE DIFF ICON -->
                  <svg class="percentage-diff-icon icon-plus-small">
                    <use xlink:href="#svg-plus-small"></use>
                  </svg>
                  <!-- /PERCENTAGE DIFF ICON -->
                </div>
                <!-- /PERCENTAGE DIFF ICON WRAP -->
              </div>
              <!-- /TABLE COLUMN -->
            </div>
            <!-- /TABLE ROW -->

          </div>
          <!-- /TABLE BODY -->
        </div>
        <!-- /TABLE -->
      </div>
      <!-- /TABLE WRAP -->

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
    </div>
    <!-- /GRID COLUMN -->

  </div>
  <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->
