@include('LayoutBladeFiles.header-layout')

<!-- NAVIGATION WIDGET -->
@include('LayoutBladeFiles.desktop-side-nav-layout')
<!-- /NAVIGATION WIDGET -->

<!-- NAVIGATION WIDGET -->
@include('LayoutBladeFiles.mini-mobile-device-collapse-nav-layout')
<!-- /NAVIGATION WIDGET -->

<!-- NAVIGATION WIDGET -->
@include('LayoutBladeFiles.desktop-colapse-nav-layout')
<!-- /NAVIGATION WIDGET -->


  <!-- HEADER -->
  <header class="header">
    <!-- HEADER ACTIONS -->
    <div class="header-actions">
      <!-- HEADER BRAND -->
      <div class="header-brand">
        <!-- LOGO -->
        <div class="logo">
          <!-- ICON LOGO VIKINGER -->
          <svg class="icon-logo-vikinger small">
            <use xlink:href="#svg-logo-vikinger"></use>
          </svg>
          <!-- /ICON LOGO VIKINGER -->
        </div>
        <!-- /LOGO -->

        <!-- HEADER BRAND TEXT -->
        <h1 class="header-brand-text">Vikinger</h1>
        <!-- /HEADER BRAND TEXT -->
      </div>
      <!-- /HEADER BRAND -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions">
      <!-- SIDEMENU TRIGGER -->
      <div class="sidemenu-trigger navigation-widget-trigger">
        <!-- ICON GRID -->
        <svg class="icon-grid">
          <use xlink:href="#svg-grid"></use>
        </svg>
        <!-- /ICON GRID -->
      </div>
      <!-- /SIDEMENU TRIGGER -->

      <!-- MOBILEMENU TRIGGER -->
      <div class="mobilemenu-trigger navigation-widget-mobile-trigger">
        <!-- BURGER ICON -->
        <div class="burger-icon inverted">
          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->

          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->

          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->
        </div>
        <!-- /BURGER ICON -->
      </div>
      <!-- /MOBILEMENU TRIGGER -->

      <!-- NAVIGATION -->
      <nav class="navigation">
        <!-- MENU MAIN -->
        <ul class="menu-main">
          <!-- MENU MAIN ITEM -->
          <li class="menu-main-item">
            <!-- MENU MAIN ITEM LINK -->
            <a class="menu-main-item-link" href="#">Home</a>
            <!-- /MENU MAIN ITEM LINK -->
          </li>
          <!-- /MENU MAIN ITEM -->

          <!-- MENU MAIN ITEM -->
          <li class="menu-main-item">
            <!-- MENU MAIN ITEM LINK -->
            <a class="menu-main-item-link" href="#">Careers</a>
            <!-- /MENU MAIN ITEM LINK -->
          </li>
          <!-- /MENU MAIN ITEM -->

          <!-- MENU MAIN ITEM -->
          <li class="menu-main-item">
            <!-- MENU MAIN ITEM LINK -->
            <a class="menu-main-item-link" href="#">Faqs</a>
            <!-- /MENU MAIN ITEM LINK -->
          </li>
          <!-- /MENU MAIN ITEM -->

          <!-- MENU MAIN ITEM -->
          <li class="menu-main-item">
            <!-- MENU MAIN ITEM LINK -->
            <p class="menu-main-item-link">
              <!-- ICON DOTS -->
              <svg class="icon-dots">
                <use xlink:href="#svg-dots"></use>
              </svg>
              <!-- /ICON DOTS -->
            </p>
            <!-- /MENU MAIN ITEM LINK -->

            <!-- MENU MAIN -->
            <ul class="menu-main">
              <!-- MENU MAIN ITEM -->
              <li class="menu-main-item">
                <!-- MENU MAIN ITEM LINK -->
                <a class="menu-main-item-link" href="#">About Us</a>
                <!-- /MENU MAIN ITEM LINK -->
              </li>
              <!-- /MENU MAIN ITEM -->

              <!-- MENU MAIN ITEM -->
              <li class="menu-main-item">
                <!-- MENU MAIN ITEM LINK -->
                <a class="menu-main-item-link" href="#">Our Blog</a>
                <!-- /MENU MAIN ITEM LINK -->
              </li>
              <!-- /MENU MAIN ITEM -->

              <!-- MENU MAIN ITEM -->
              <li class="menu-main-item">
                <!-- MENU MAIN ITEM LINK -->
                <a class="menu-main-item-link" href="#">Contact Us</a>
                <!-- /MENU MAIN ITEM LINK -->
              </li>
              <!-- /MENU MAIN ITEM -->

              <!-- MENU MAIN ITEM -->
              <li class="menu-main-item">
                <!-- MENU MAIN ITEM LINK -->
                <a class="menu-main-item-link" href="#">Privacy Policy</a>
                <!-- /MENU MAIN ITEM LINK -->
              </li>
              <!-- /MENU MAIN ITEM -->
            </ul>
            <!-- /MENU MAIN -->
          </li>
          <!-- /MENU MAIN ITEM -->
        </ul>
        <!-- /MENU MAIN -->
      </nav>
      <!-- /NAVIGATION -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions search-bar">
      <!-- INTERACTIVE INPUT -->
      <div class="interactive-input dark">
        <input type="text" id="search-main" name="search_main" placeholder="Search here for people or groups">
        <!-- INTERACTIVE INPUT ICON WRAP -->
        <div class="interactive-input-icon-wrap">
          <!-- INTERACTIVE INPUT ICON -->
          <svg class="interactive-input-icon icon-magnifying-glass">
            <use xlink:href="#svg-magnifying-glass"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ICON WRAP -->

        <!-- INTERACTIVE INPUT ACTION -->
        <div class="interactive-input-action">
          <!-- INTERACTIVE INPUT ACTION ICON -->
          <svg class="interactive-input-action-icon icon-cross-thin">
            <use xlink:href="#svg-cross-thin"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ACTION ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ACTION -->
      </div>
      <!-- /INTERACTIVE INPUT -->

      <!-- DROPDOWN BOX -->
      <div class="dropdown-box padding-bottom-small header-search-dropdown">
        <!-- DROPDOWN BOX CATEGORY -->
        <div class="dropdown-box-category">
          <!-- DROPDOWN BOX CATEGORY TITLE -->
          <p class="dropdown-box-category-title">Members</p>
          <!-- /DROPDOWN BOX CATEGORY TITLE -->
        </div>
        <!-- /DROPDOWN BOX CATEGORY -->

        <!-- DROPDOWN BOX LIST -->
        <div class="dropdown-box-list small no-scroll">
          <!-- DROPDOWN BOX LIST ITEM -->
          <a class="dropdown-box-list-item" href="profile-timeline.html">
            <!-- USER STATUS -->
            <div class="user-status notification">
              <!-- USER STATUS AVATAR -->
              <div class="user-status-avatar">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
                </div>
                <!-- /USER AVATAR -->
              </div>
              <!-- /USER STATUS AVATAR -->

              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><span class="bold">Neko Bebop</span></p>
              <!-- /USER STATUS TITLE -->

              <!-- USER STATUS TEXT -->
              <p class="user-status-text">1 friends in common</p>
              <!-- /USER STATUS TEXT -->

              <!-- USER STATUS ICON -->
              <div class="user-status-icon">
                <!-- ICON FRIEND -->
                <svg class="icon-friend">
                  <use xlink:href="#svg-friend"></use>
                </svg>
                <!-- /ICON FRIEND -->
              </div>
              <!-- /USER STATUS ICON -->
            </div>
            <!-- /USER STATUS -->
          </a>
          <!-- /DROPDOWN BOX LIST ITEM -->

          <!-- DROPDOWN BOX LIST ITEM -->
          <a class="dropdown-box-list-item" href="profile-timeline.html">
            <!-- USER STATUS -->
            <div class="user-status notification">
              <!-- USER STATUS AVATAR -->
              <div class="user-status-avatar">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="/assets/img/avatar/15.jpg"></div>
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
                    <p class="user-avatar-badge-text">7</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                  </div>
                  <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->
              </div>
              <!-- /USER STATUS AVATAR -->

              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><span class="bold">Tim Rogers</span></p>
              <!-- /USER STATUS TITLE -->

              <!-- USER STATUS TEXT -->
              <p class="user-status-text">4 friends in common</p>
              <!-- /USER STATUS TEXT -->

              <!-- USER STATUS ICON -->
              <div class="user-status-icon">
                <!-- ICON FRIEND -->
                <svg class="icon-friend">
                  <use xlink:href="#svg-friend"></use>
                </svg>
                <!-- /ICON FRIEND -->
              </div>
              <!-- /USER STATUS ICON -->
            </div>
            <!-- /USER STATUS -->
          </a>
          <!-- /DROPDOWN BOX LIST ITEM -->
        </div>
        <!-- /DROPDOWN BOX LIST -->

        <!-- DROPDOWN BOX CATEGORY -->
        <div class="dropdown-box-category">
          <!-- DROPDOWN BOX CATEGORY TITLE -->
          <p class="dropdown-box-category-title">Groups</p>
          <!-- /DROPDOWN BOX CATEGORY TITLE -->
        </div>
        <!-- /DROPDOWN BOX CATEGORY -->

        <!-- DROPDOWN BOX LIST -->
        <div class="dropdown-box-list small no-scroll">
          <!-- DROPDOWN BOX LIST ITEM -->
          <a class="dropdown-box-list-item" href="group-timeline.html">
            <!-- USER STATUS -->
            <div class="user-status notification">
              <!-- USER STATUS AVATAR -->
              <div class="user-status-avatar">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-border">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-40-44" data-src="/assets/img/avatar/24.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->
              </div>
              <!-- /USER STATUS AVATAR -->

              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><span class="bold">Cosplayers of the World</span></p>
              <!-- /USER STATUS TITLE -->

              <!-- USER STATUS TEXT -->
              <p class="user-status-text">139 members</p>
              <!-- /USER STATUS TEXT -->

              <!-- USER STATUS ICON -->
              <div class="user-status-icon">
                <!-- ICON GROUP -->
                <svg class="icon-group">
                  <use xlink:href="#svg-group"></use>
                </svg>
                <!-- /ICON GROUP -->
              </div>
              <!-- /USER STATUS ICON -->
            </div>
            <!-- /USER STATUS -->
          </a>
          <!-- /DROPDOWN BOX LIST ITEM -->
        </div>
        <!-- /DROPDOWN BOX LIST -->

        <!-- DROPDOWN BOX CATEGORY -->
        <div class="dropdown-box-category">
          <!-- DROPDOWN BOX CATEGORY TITLE -->
          <p class="dropdown-box-category-title">Marketplace</p>
          <!-- /DROPDOWN BOX CATEGORY TITLE -->
        </div>
        <!-- /DROPDOWN BOX CATEGORY -->

        <!-- DROPDOWN BOX LIST -->
        <div class="dropdown-box-list small no-scroll">
          <!-- DROPDOWN BOX LIST ITEM -->
          <a class="dropdown-box-list-item" href="marketplace-product.html">
            <!-- USER STATUS -->
            <div class="user-status no-padding-top">
              <!-- USER STATUS AVATAR -->
              <div class="user-status-avatar">
                <!-- PICTURE -->
                <figure class="picture small round liquid">
                  <img src="/assets/img/marketplace/items/07.jpg" alt="item-07">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /USER STATUS AVATAR -->

              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><span class="bold">Mercenaries White Frame</span></p>
              <!-- /USER STATUS TITLE -->

              <!-- USER STATUS TEXT -->
              <p class="user-status-text">By Neko Bebop</p>
              <!-- /USER STATUS TEXT -->

              <!-- USER STATUS ICON -->
              <div class="user-status-icon">
                <!-- ICON MARKETPLACE -->
                <svg class="icon-marketplace">
                  <use xlink:href="#svg-marketplace"></use>
                </svg>
                <!-- /ICON MARKETPLACE -->
              </div>
              <!-- /USER STATUS ICON -->
            </div>
            <!-- /USER STATUS -->
          </a>
          <!-- /DROPDOWN BOX LIST ITEM -->
        </div>
        <!-- /DROPDOWN BOX LIST -->
      </div>
      <!-- /DROPDOWN BOX -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions">
      <!-- PROGRESS STAT -->
      <div class="progress-stat">
        <!-- BAR PROGRESS WRAP -->
        <div class="bar-progress-wrap">
          <!-- BAR PROGRESS INFO -->
          <p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>
          <!-- /BAR PROGRESS INFO -->
        </div>
        <!-- /BAR PROGRESS WRAP -->

        <!-- PROGRESS STAT BAR -->
        <div id="logged-user-level" class="progress-stat-bar"></div>
        <!-- /PROGRESS STAT BAR -->
      </div>
      <!-- /PROGRESS STAT -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions">
      <!-- ACTION LIST -->
      <div class="action-list dark">
        <!-- ACTION LIST ITEM WRAP -->
        <div class="action-list-item-wrap">
          <!-- ACTION LIST ITEM -->
          <div class="action-list-item header-dropdown-trigger">
            <!-- ACTION LIST ITEM ICON -->
            <svg class="action-list-item-icon icon-shopping-bag">
              <use xlink:href="#svg-shopping-bag"></use>
            </svg>
            <!-- /ACTION LIST ITEM ICON -->
          </div>
          <!-- /ACTION LIST ITEM -->

          <!-- DROPDOWN BOX -->
          <div class="dropdown-box no-padding-bottom header-dropdown">
            <!-- DROPDOWN BOX HEADER -->
            <div class="dropdown-box-header">
              <!-- DROPDOWN BOX HEADER TITLE -->
              <p class="dropdown-box-header-title">Shopping Cart <span class="highlighted">3</span></p>
              <!-- /DROPDOWN BOX HEADER TITLE -->
            </div>
            <!-- /DROPDOWN BOX HEADER -->

            <!-- DROPDOWN BOX LIST -->
            <div class="dropdown-box-list scroll-small no-hover" data-simplebar>
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- CART ITEM PREVIEW -->
                <div class="cart-item-preview">
                  <!-- CART ITEM PREVIEW IMAGE -->
                  <a class="cart-item-preview-image" href="marketplace-product.html">
                    <!-- PICTURE -->
                    <figure class="picture medium round liquid">
                      <img src="img/marketplace/items/01.jpg" alt="item-01">
                    </figure>
                    <!-- /PICTURE -->
                  </a>
                  <!-- /CART ITEM PREVIEW IMAGE -->

                  <!-- CART ITEM PREVIEW TITLE -->
                  <p class="cart-item-preview-title"><a href="marketplace-product.html">Twitch Stream UI Pack</a></p>
                  <!-- /CART ITEM PREVIEW TITLE -->

                  <!-- CART ITEM PREVIEW TEXT -->
                  <p class="cart-item-preview-text">Regular License</p>
                  <!-- /CART ITEM PREVIEW TEXT -->

                  <!-- CART ITEM PREVIEW PRICE -->
                  <p class="cart-item-preview-price"><span class="highlighted">$</span> 12.00 x 1</p>
                  <!-- /CART ITEM PREVIEW PRICE -->

                  <!-- CART ITEM PREVIEW ACTION -->
                  <div class="cart-item-preview-action">
                    <!-- ICON DELETE -->
                    <svg class="icon-delete">
                      <use xlink:href="#svg-delete"></use>
                    </svg>
                    <!-- /ICON DELETE -->
                  </div>
                  <!-- /CART ITEM PREVIEW ACTION -->
                </div>
                <!-- /CART ITEM PREVIEW -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- CART ITEM PREVIEW -->
                <div class="cart-item-preview">
                  <!-- CART ITEM PREVIEW IMAGE -->
                  <a class="cart-item-preview-image" href="marketplace-product.html">
                    <!-- PICTURE -->
                    <figure class="picture medium round liquid">
                      <img src="img/marketplace/items/11.jpg" alt="item-11">
                    </figure>
                    <!-- /PICTURE -->
                  </a>
                  <!-- /CART ITEM PREVIEW IMAGE -->

                  <!-- CART ITEM PREVIEW TITLE -->
                  <p class="cart-item-preview-title"><a href="marketplace-product.html">Gaming Coin Badges Pack</a></p>
                  <!-- /CART ITEM PREVIEW TITLE -->

                  <!-- CART ITEM PREVIEW TEXT -->
                  <p class="cart-item-preview-text">Regular License</p>
                  <!-- /CART ITEM PREVIEW TEXT -->

                  <!-- CART ITEM PREVIEW PRICE -->
                  <p class="cart-item-preview-price"><span class="highlighted">$</span> 6.00 x 1</p>
                  <!-- /CART ITEM PREVIEW PRICE -->

                  <!-- CART ITEM PREVIEW ACTION -->
                  <div class="cart-item-preview-action">
                    <!-- ICON DELETE -->
                    <svg class="icon-delete">
                      <use xlink:href="#svg-delete"></use>
                    </svg>
                    <!-- /ICON DELETE -->
                  </div>
                  <!-- /CART ITEM PREVIEW ACTION -->
                </div>
                <!-- /CART ITEM PREVIEW -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- CART ITEM PREVIEW -->
                <div class="cart-item-preview">
                  <!-- CART ITEM PREVIEW IMAGE -->
                  <a class="cart-item-preview-image" href="marketplace-product.html">
                    <!-- PICTURE -->
                    <figure class="picture medium round liquid">
                      <img src="img/marketplace/items/10.jpg" alt="item-10">
                    </figure>
                    <!-- /PICTURE -->
                  </a>
                  <!-- /CART ITEM PREVIEW IMAGE -->

                  <!-- CART ITEM PREVIEW TITLE -->
                  <p class="cart-item-preview-title"><a href="marketplace-product.html">Twitch Stream UI Pack</a></p>
                  <!-- /CART ITEM PREVIEW TITLE -->

                  <!-- CART ITEM PREVIEW TEXT -->
                  <p class="cart-item-preview-text">Regular License</p>
                  <!-- /CART ITEM PREVIEW TEXT -->

                  <!-- CART ITEM PREVIEW PRICE -->
                  <p class="cart-item-preview-price"><span class="highlighted">$</span> 26.00 x 1</p>
                  <!-- /CART ITEM PREVIEW PRICE -->

                  <!-- CART ITEM PREVIEW ACTION -->
                  <div class="cart-item-preview-action">
                    <!-- ICON DELETE -->
                    <svg class="icon-delete">
                      <use xlink:href="#svg-delete"></use>
                    </svg>
                    <!-- /ICON DELETE -->
                  </div>
                  <!-- /CART ITEM PREVIEW ACTION -->
                </div>
                <!-- /CART ITEM PREVIEW -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- CART ITEM PREVIEW -->
                <div class="cart-item-preview">
                  <!-- CART ITEM PREVIEW IMAGE -->
                  <a class="cart-item-preview-image" href="marketplace-product.html">
                    <!-- PICTURE -->
                    <figure class="picture medium round liquid">
                      <img src="img/marketplace/items/04.jpg" alt="item-04">
                    </figure>
                    <!-- /PICTURE -->
                  </a>
                  <!-- /CART ITEM PREVIEW IMAGE -->

                  <!-- CART ITEM PREVIEW TITLE -->
                  <p class="cart-item-preview-title"><a href="marketplace-product.html">Generic Joystick Pack</a></p>
                  <!-- /CART ITEM PREVIEW TITLE -->

                  <!-- CART ITEM PREVIEW TEXT -->
                  <p class="cart-item-preview-text">Regular License</p>
                  <!-- /CART ITEM PREVIEW TEXT -->

                  <!-- CART ITEM PREVIEW PRICE -->
                  <p class="cart-item-preview-price"><span class="highlighted">$</span> 16.00 x 1</p>
                  <!-- /CART ITEM PREVIEW PRICE -->

                  <!-- CART ITEM PREVIEW ACTION -->
                  <div class="cart-item-preview-action">
                    <!-- ICON DELETE -->
                    <svg class="icon-delete">
                      <use xlink:href="#svg-delete"></use>
                    </svg>
                    <!-- /ICON DELETE -->
                  </div>
                  <!-- /CART ITEM PREVIEW ACTION -->
                </div>
                <!-- /CART ITEM PREVIEW -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
            </div>
            <!-- /DROPDOWN BOX LIST -->

            <!-- CART PREVIEW TOTAL -->
            <div class="cart-preview-total">
              <!-- CART PREVIEW TOTAL TITLE -->
              <p class="cart-preview-total-title">Total:</p>
              <!-- /CART PREVIEW TOTAL TITLE -->

              <!-- CART PREVIEW TOTAL TEXT -->
              <p class="cart-preview-total-text"><span class="highlighted">$</span> 60.00</p>
              <!-- /CART PREVIEW TOTAL TEXT -->
            </div>
            <!-- /CART PREVIEW TOTAL -->

            <!-- DROPDOWN BOX ACTIONS -->
            <div class="dropdown-box-actions">
              <!-- DROPDOWN BOX ACTION -->
              <div class="dropdown-box-action">
                <!-- BUTTON -->
                <a class="button secondary" href="marketplace-cart.html">Shopping Cart</a>
                <!-- /BUTTON -->
              </div>
              <!-- /DROPDOWN BOX ACTION -->

              <!-- DROPDOWN BOX ACTION -->
              <div class="dropdown-box-action">
                <!-- BUTTON -->
                <a class="button primary" href="marketplace-checkout.html">Go to Checkout</a>
                <!-- /BUTTON -->
              </div>
              <!-- /DROPDOWN BOX ACTION -->
            </div>
            <!-- /DROPDOWN BOX ACTIONS -->
          </div>
          <!-- /DROPDOWN BOX -->
        </div>
        <!-- /ACTION LIST ITEM WRAP -->

        <!-- ACTION LIST ITEM WRAP -->
        <div class="action-list-item-wrap">
          <!-- ACTION LIST ITEM -->
          <div class="action-list-item header-dropdown-trigger">
            <!-- ACTION LIST ITEM ICON -->
            <svg class="action-list-item-icon icon-friend">
              <use xlink:href="#svg-friend"></use>
            </svg>
            <!-- /ACTION LIST ITEM ICON -->
          </div>
          <!-- /ACTION LIST ITEM -->

          <!-- DROPDOWN BOX -->
          <div class="dropdown-box header-dropdown">
            <!-- DROPDOWN BOX HEADER -->
            <div class="dropdown-box-header">
              <!-- DROPDOWN BOX HEADER TITLE -->
              <p class="dropdown-box-header-title">Friend Requests</p>
              <!-- /DROPDOWN BOX HEADER TITLE -->

              <!-- DROPDOWN BOX HEADER ACTIONS -->
              <div class="dropdown-box-header-actions">
                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Find Friends</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->

                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Settings</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->
              </div>
              <!-- /DROPDOWN BOX HEADER ACTIONS -->
            </div>
            <!-- /DROPDOWN BOX HEADER -->

            <!-- DROPDOWN BOX LIST -->
            <div class="dropdown-box-list no-hover" data-simplebar>
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status request">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/16.jpg"></div>
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
                        <p class="user-avatar-badge-text">14</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Ginny Danvers</a></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">6 friends in common</p>
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

                    <!-- ACTION REQUEST -->
                    <div class="action-request decline">
                      <!-- ACTION REQUEST ICON -->
                      <svg class="action-request-icon icon-remove-friend">
                        <use xlink:href="#svg-remove-friend"></use>
                      </svg>
                      <!-- /ACTION REQUEST ICON -->
                    </div>
                    <!-- /ACTION REQUEST -->
                  </div>
                  <!-- ACTION REQUEST LIST -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status request">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/14.jpg"></div>
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
                        <p class="user-avatar-badge-text">3</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Paul Lang</a></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">2 friends in common</p>
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

                    <!-- ACTION REQUEST -->
                    <div class="action-request decline">
                      <!-- ACTION REQUEST ICON -->
                      <svg class="action-request-icon icon-remove-friend">
                        <use xlink:href="#svg-remove-friend"></use>
                      </svg>
                      <!-- /ACTION REQUEST ICON -->
                    </div>
                    <!-- /ACTION REQUEST -->
                  </div>
                  <!-- ACTION REQUEST LIST -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status request">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/11.jpg"></div>
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
                        <p class="user-avatar-badge-text">9</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Cassie May</a></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">4 friends in common</p>
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

                    <!-- ACTION REQUEST -->
                    <div class="action-request decline">
                      <!-- ACTION REQUEST ICON -->
                      <svg class="action-request-icon icon-remove-friend">
                        <use xlink:href="#svg-remove-friend"></use>
                      </svg>
                      <!-- /ACTION REQUEST ICON -->
                    </div>
                    <!-- /ACTION REQUEST -->
                  </div>
                  <!-- ACTION REQUEST LIST -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
            </div>
            <!-- /DROPDOWN BOX LIST -->

            <!-- DROPDOWN BOX BUTTON -->
            <a class="dropdown-box-button secondary" href="hub-profile-requests.html">View all Requests</a>
            <!-- /DROPDOWN BOX BUTTON -->
          </div>
          <!-- /DROPDOWN BOX -->
        </div>
        <!-- /ACTION LIST ITEM WRAP -->

        <!-- ACTION LIST ITEM WRAP -->
        <div class="action-list-item-wrap">
          <!-- ACTION LIST ITEM -->
          <div class="action-list-item header-dropdown-trigger">
            <!-- ACTION LIST ITEM ICON -->
            <svg class="action-list-item-icon icon-messages">
              <use xlink:href="#svg-messages"></use>
            </svg>
            <!-- /ACTION LIST ITEM ICON -->
          </div>
          <!-- /ACTION LIST ITEM -->

          <!-- DROPDOWN BOX -->
          <div class="dropdown-box header-dropdown">
            <!-- DROPDOWN BOX HEADER -->
            <div class="dropdown-box-header">
              <!-- DROPDOWN BOX HEADER TITLE -->
              <p class="dropdown-box-header-title">Messages</p>
              <!-- /DROPDOWN BOX HEADER TITLE -->

              <!-- DROPDOWN BOX HEADER ACTIONS -->
              <div class="dropdown-box-header-actions">
                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Mark all as Read</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->

                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Settings</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->
              </div>
              <!-- /DROPDOWN BOX HEADER ACTIONS -->
            </div>
            <!-- /DROPDOWN BOX HEADER -->

            <!-- DROPDOWN BOX LIST -->
            <div class="dropdown-box-list medium" data-simplebar>
              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/04.jpg"></div>
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
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Bearded Wonder</span></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Great! Then will meet with them at the party...</p>
                  <!-- /USER STATUS TEXT -->

                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">29 mins ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Neko Bebop</span></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Awesome! I'll see you there!</p>
                  <!-- /USER STATUS TEXT -->

                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">54 mins ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
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
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Can you stream that new game?</p>
                  <!-- /USER STATUS TEXT -->

                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
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
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Sarah Diamond</span></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">I'm sending you the latest news of the release...</p>
                  <!-- /USER STATUS TEXT -->

                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">16 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/12.jpg"></div>
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
                        <p class="user-avatar-badge-text">10</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">James Murdock</span></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Great! Then will meet with them at the party...</p>
                  <!-- /USER STATUS TEXT -->

                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">7 days ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
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
                        <p class="user-avatar-badge-text">5</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">The Green Goo</span></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Can you stream that new game?</p>
                  <!-- /USER STATUS TEXT -->

                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">10 days ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->
            </div>
            <!-- /DROPDOWN BOX LIST -->

            <!-- DROPDOWN BOX BUTTON -->
            <a class="dropdown-box-button primary" href="hub-profile-messages.html">View all Messages</a>
            <!-- /DROPDOWN BOX BUTTON -->
          </div>
          <!-- /DROPDOWN BOX -->
        </div>
        <!-- /ACTION LIST ITEM WRAP -->

        <!-- ACTION LIST ITEM WRAP -->
        <div class="action-list-item-wrap">
          <!-- ACTION LIST ITEM -->
          <div class="action-list-item unread header-dropdown-trigger">
            <!-- ACTION LIST ITEM ICON -->
            <svg class="action-list-item-icon icon-notification">
              <use xlink:href="#svg-notification"></use>
            </svg>
            <!-- /ACTION LIST ITEM ICON -->
          </div>
          <!-- /ACTION LIST ITEM -->

          <!-- DROPDOWN BOX -->
          <div class="dropdown-box header-dropdown">
            <!-- DROPDOWN BOX HEADER -->
            <div class="dropdown-box-header">
              <!-- DROPDOWN BOX HEADER TITLE -->
              <p class="dropdown-box-header-title">Notifications</p>
              <!-- /DROPDOWN BOX HEADER TITLE -->

              <!-- DROPDOWN BOX HEADER ACTIONS -->
              <div class="dropdown-box-header-actions">
                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Mark all as Read</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->

                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Settings</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->
              </div>
              <!-- /DROPDOWN BOX HEADER ACTIONS -->
            </div>
            <!-- /DROPDOWN BOX HEADER -->

            <!-- DROPDOWN BOX LIST -->
            <div class="dropdown-box-list" data-simplebar>
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item unread">
                <!-- USER STATUS -->
                <div class="user-status notification">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
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
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a> posted a comment on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp">2 minutes ago</p>
                  <!-- /USER STATUS TIMESTAMP -->

                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON COMMENT -->
                    <svg class="icon-comment">
                      <use xlink:href="#svg-comment"></use>
                    </svg>
                    <!-- /ICON COMMENT -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status notification">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
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
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Sarah Diamond</a> left a like <img class="reaction" src="img/reaction/like.png" alt="reaction-like"> reaction on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp">17 minutes ago</p>
                  <!-- /USER STATUS TIMESTAMP -->

                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON THUMBS UP -->
                    <svg class="icon-thumbs-up">
                      <use xlink:href="#svg-thumbs-up"></use>
                    </svg>
                    <!-- /ICON THUMBS UP -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status notification">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
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
                        <p class="user-avatar-badge-text">13</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy Dex</a> posted a comment on your <a class="highlighted" href="profile-photos.html">photo</a></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp">31 minutes ago</p>
                  <!-- /USER STATUS TIMESTAMP -->

                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON COMMENT -->
                    <svg class="icon-comment">
                      <use xlink:href="#svg-comment"></use>
                    </svg>
                    <!-- /ICON COMMENT -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status notification">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
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
                        <p class="user-avatar-badge-text">5</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green Goo</a> left a love <img class="reaction" src="img/reaction/love.png" alt="reaction-love"> reaction on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->

                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON THUMBS UP -->
                    <svg class="icon-thumbs-up">
                      <use xlink:href="#svg-thumbs-up"></use>
                    </svg>
                    <!-- /ICON THUMBS UP -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->

              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status notification">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->

                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a> posted a comment on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->

                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp">3 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->

                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON COMMENT -->
                    <svg class="icon-comment">
                      <use xlink:href="#svg-comment"></use>
                    </svg>
                    <!-- /ICON COMMENT -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
            </div>
            <!-- /DROPDOWN BOX LIST -->

            <!-- DROPDOWN BOX BUTTON -->
            <a class="dropdown-box-button secondary" href="hub-profile-notifications.html">View all Notifications</a>
            <!-- /DROPDOWN BOX BUTTON -->
          </div>
          <!-- /DROPDOWN BOX -->
        </div>
        <!-- /ACTION LIST ITEM WRAP -->
      </div>
      <!-- /ACTION LIST -->

      <!-- ACTION ITEM WRAP -->
      <div class="action-item-wrap">
        <!-- ACTION ITEM -->
        <div class="action-item dark header-settings-dropdown-trigger">
          <!-- ACTION ITEM ICON -->
          <svg class="action-item-icon icon-settings">
            <use xlink:href="#svg-settings"></use>
          </svg>
          <!-- /ACTION ITEM ICON -->
        </div>
        <!-- /ACTION ITEM -->

        <!-- DROPDOWN NAVIGATION -->
        <div class="dropdown-navigation header-settings-dropdown">
          <!-- DROPDOWN NAVIGATION HEADER -->
          <div class="dropdown-navigation-header">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="profile-timeline.html">
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
              </a>
              <!-- /USER STATUS AVATAR -->

              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><span class="bold">Hi Marina!</span></p>
              <!-- /USER STATUS TITLE -->

              <!-- USER STATUS TEXT -->
              <p class="user-status-text small"><a href="profile-timeline.html">@marinavalentine</a></p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /DROPDOWN NAVIGATION HEADER -->

          <!-- DROPDOWN NAVIGATION CATEGORY -->
          <p class="dropdown-navigation-category">My Profile</p>
          <!-- /DROPDOWN NAVIGATION CATEGORY -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-profile-info.html">Profile Info</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-profile-social.html">Social &amp; Stream</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-profile-notifications.html">Notifications</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-profile-messages.html">Messages</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-profile-requests.html">Friend Requests</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION CATEGORY -->
          <p class="dropdown-navigation-category">Account</p>
          <!-- /DROPDOWN NAVIGATION CATEGORY -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-account-info.html">Account Info</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-account-password.html">Change Password</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-account-settings.html">General Settings</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION CATEGORY -->
          <p class="dropdown-navigation-category">Groups</p>
          <!-- /DROPDOWN NAVIGATION CATEGORY -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-group-management.html">Manage Groups</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-group-invitations.html">Invitations</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION CATEGORY -->
          <p class="dropdown-navigation-category">My Store</p>
          <!-- /DROPDOWN NAVIGATION CATEGORY -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-store-account.html">My Account <span class="highlighted">$250,32</span></a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-store-statement.html">Sales Statement</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-store-items.html">Manage Items</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-store-downloads.html">Downloads</a>
          <!-- /DROPDOWN NAVIGATION LINK -->

          <!-- DROPDOWN NAVIGATION BUTTON -->
          <p class="dropdown-navigation-button button small secondary">Logout</p>
          <!-- /DROPDOWN NAVIGATION BUTTON -->
        </div>
        <!-- /DROPDOWN NAVIGATION -->
      </div>
      <!-- /ACTION ITEM WRAP -->
    </div>
    <!-- /HEADER ACTIONS -->
  </header>
  <!-- /HEADER -->

  <!-- FLOATY BAR -->
  <aside class="floaty-bar">
    <!-- BAR ACTIONS -->
    <div class="bar-actions">
      <!-- PROGRESS STAT -->
      <div class="progress-stat">
        <!-- BAR PROGRESS WRAP -->
        <div class="bar-progress-wrap">
          <!-- BAR PROGRESS INFO -->
          <p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>
          <!-- /BAR PROGRESS INFO -->
        </div>
        <!-- /BAR PROGRESS WRAP -->

        <!-- PROGRESS STAT BAR -->
        <div id="logged-user-level-cp" class="progress-stat-bar"></div>
        <!-- /PROGRESS STAT BAR -->
      </div>
      <!-- /PROGRESS STAT -->
    </div>
    <!-- /BAR ACTIONS -->

    <!-- BAR ACTIONS -->
    <div class="bar-actions">
      <!-- ACTION LIST -->
      <div class="action-list dark">
        <!-- ACTION LIST ITEM -->
        <a class="action-list-item" href="marketplace-cart.html">
          <!-- ACTION LIST ITEM ICON -->
          <svg class="action-list-item-icon icon-shopping-bag">
            <use xlink:href="#svg-shopping-bag"></use>
          </svg>
          <!-- /ACTION LIST ITEM ICON -->
        </a>
        <!-- /ACTION LIST ITEM -->

        <!-- ACTION LIST ITEM -->
        <a class="action-list-item" href="hub-profile-requests.html">
          <!-- ACTION LIST ITEM ICON -->
          <svg class="action-list-item-icon icon-friend">
            <use xlink:href="#svg-friend"></use>
          </svg>
          <!-- /ACTION LIST ITEM ICON -->
        </a>
        <!-- /ACTION LIST ITEM -->

        <!-- ACTION LIST ITEM -->
        <a class="action-list-item" href="hub-profile-messages.html">
          <!-- ACTION LIST ITEM ICON -->
          <svg class="action-list-item-icon icon-messages">
            <use xlink:href="#svg-messages"></use>
          </svg>
          <!-- /ACTION LIST ITEM ICON -->
        </a>
        <!-- /ACTION LIST ITEM -->

        <!-- ACTION LIST ITEM -->
        <a class="action-list-item unread" href="hub-profile-notifications.html">
          <!-- ACTION LIST ITEM ICON -->
          <svg class="action-list-item-icon icon-notification">
            <use xlink:href="#svg-notification"></use>
          </svg>
          <!-- /ACTION LIST ITEM ICON -->
        </a>
        <!-- /ACTION LIST ITEM -->
      </div>
      <!-- /ACTION LIST -->

      <!-- ACTION ITEM WRAP -->
      <a class="action-item-wrap" href="hub-profile-info.html">
        <!-- ACTION ITEM -->
        <div class="action-item dark">
          <!-- ACTION ITEM ICON -->
          <svg class="action-item-icon icon-settings">
            <use xlink:href="#svg-settings"></use>
          </svg>
          <!-- /ACTION ITEM ICON -->
        </div>
        <!-- /ACTION ITEM -->
      </a>
      <!-- /ACTION ITEM WRAP -->
    </div>
    <!-- /BAR ACTIONS -->
  </aside>
  <!-- /FLOATY BAR -->

  <!-- CONTENT GRID -->
  <div class="content-grid full">
    <!-- POST OPEN -->
    <article class="post-open">
      <!-- POST OPEN COVER -->
      <figure class="post-open-cover liquid">
        <img src="/assets/img/cover/19.jpg" alt="cover-19">
      </figure>
      <!-- /POST OPEN COVER -->

      <!-- POST OPEN BODY -->
      <div class="post-open-body">
        <!-- POST OPEN HEADING -->
        <div class="post-open-heading">
          <!-- POST OPEN TIMESTAMP -->
          <p class="post-open-timestamp"><span class="highlighted">2 days ago</span>5 mins read</p>
          <!-- /POST OPEN TIMESTAMP -->

          <!-- POST OPEN TITLE -->
          <h2 class="post-open-title">Here's the how and why did I became a full time Gaming Streamer</h2>
          <!-- /POST OPEN TITLE -->
        </div>
        <!-- /POST OPEN HEADING -->

        <!-- POST OPEN CONTENT -->
        <div class="post-open-content">
          <!-- POST OPEN CONTENT SIDEBAR -->
          <div class="post-open-content-sidebar">
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

            <!-- POST OPEN SIDEBAR TITLE -->
            <p class="post-open-sidebar-title">Share!</p>
            <!-- /POST OPEN SIDEBAR TITLE -->

            <!-- SOCIAL LINKS -->
            <div class="social-links vertical">
              <!-- SOCIAL LINK -->
              <a class="social-link void facebook" href="#">
                <!-- ICON FACEBOOK -->
                <svg class="icon-facebook">
                  <use xlink:href="#svg-facebook"></use>
                </svg>
                <!-- /ICON FACEBOOK -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link void twitter" href="#">
                <!-- ICON TWITTER -->
                <svg class="icon-twitter">
                  <use xlink:href="#svg-twitter"></use>
                </svg>
                <!-- /ICON TWITTER -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /SOCIAL LINKS -->
          </div>
          <!-- /POST OPEN CONTENT SIDEBAR -->

          <!-- POST OPEN CONTENT BODY -->
          <div class="post-open-content-body">
            <!-- POST OPEN PARAGRAPH -->
            <p class="post-open-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <!-- /POST OPEN PARAGRAPH -->

            <!-- POST OPEN PARAGRAPH -->
            <p class="post-open-paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
            <!-- /POST OPEN PARAGRAPH -->

            <!-- POST OPEN IMAGE -->
            <figure class="post-open-image liquid">
              <img src="/assets/img/cover/06.jpg" alt="cover-06">
            </figure>
            <!-- /POST OPEN IMAGE -->

            <!-- POST OPEN IMAGE INFO -->
            <p class="post-open-image-caption">Elemental Witches is the first game with which I started streaming</p>
            <!-- /POST OPEN IMAGE INFO -->

            <!-- POST OPEN PARAGRAPH -->
            <p class="post-open-paragraph">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas estias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
            <!-- /POST OPEN PARAGRAPH -->

            <!-- TAG LIST -->
            <div class="tag-list">
              <!-- TAG ITEM -->
              <a class="tag-item secondary" href="newsfeed.html">Streamer</a>
              <!-- /TAG ITEM -->

              <!-- TAG ITEM -->
              <a class="tag-item secondary" href="newsfeed.html">Gaming</a>
              <!-- /TAG ITEM -->

              <!-- TAG ITEM -->
              <a class="tag-item secondary" href="newsfeed.html">Job</a>
              <!-- /TAG ITEM -->

              <!-- TAG ITEM -->
              <a class="tag-item secondary" href="newsfeed.html">Life</a>
              <!-- /TAG ITEM -->

              <!-- TAG ITEM -->
              <a class="tag-item secondary" href="newsfeed.html">Experience</a>
              <!-- /TAG ITEM -->
            </div>
            <!-- /TAG LIST -->
          </div>
          <!-- /POST OPEN CONTENT BODY -->
        </div>
        <!-- /POST OPEN CONTENT -->

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
                  <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/happy.png" alt="reaction-happy">
                  <!-- /REACTION IMAGE -->

                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown padded reaction-item-dropdown">
                    <!-- SIMPLE DROPDOWN TEXT -->
                    <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
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
                  <img class="reaction-image reaction-item-dropdown-trigger" src="/assets/img/reaction/love.png" alt="reaction-love">
                  <!-- /REACTION IMAGE -->

                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown padded reaction-item-dropdown">
                    <!-- SIMPLE DROPDOWN TEXT -->
                    <p class="simple-dropdown-text"><img class="reaction" src="/assets/img/reaction/love.png" alt="reaction-love"> <span class="bold">Love</span></p>
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
                    <div class="hexagon-image-18-20" data-src="/assets/img/avatar/09.jpg"></div>
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
                    <div class="hexagon-image-18-20" data-src="/assets/img/avatar/12.jpg"></div>
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
                    <div class="hexagon-image-18-20" data-src="/assets/img/avatar/16.jpg"></div>
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
                    <div class="hexagon-image-18-20" data-src="/assets/img/avatar/06.jpg"></div>
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
              <p class="meta-line-link">3 Comments</p>
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
        <div id="comments" class="post-comment-list">
          <!-- POST COMMENT -->
          <div class="post-comment">
            <!-- USER AVATAR -->
            <a class="user-avatar small no-outline" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-30-32" data-src="img/avatar/04.jpg"></div>
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
            <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Bearded Wonder</a>It's really inspiring to read about this and how you managed to get all up and running! Super awesome! Congratz <a href="profile-timeline.html">@MarinaValentine</a>!</p>
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
                <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
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
                <p class="user-avatar-badge-text">5</p>
                <!-- /USER AVATAR BADGE TEXT -->
              </div>
              <!-- /USER AVATAR BADGE -->
            </a>
            <!-- /USER AVATAR -->

            <!-- POST COMMENT TEXT -->
            <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">The Green Goo</a>Yeah!! Totally agree!</p>
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
                  <p class="meta-line-timestamp">2 minutes ago</p>
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

            <!-- POST COMMENT TEXT -->
            <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Nick Grissom</a>I also started streaming with a simmilar game! I'm very excited to see what's next on your streams and for your next projects</p>
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
                  <p class="meta-line-timestamp">27 minutes ago</p>
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
                <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
            <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Neko Bebop</a>It was great to start this with you and keep streming together! I'm hoping that we can do this for many years to come...and for everyone else, keep posted because we have lots of surprises, including a sneak peek of upcoming games and new DLCs</p>
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
                  <p class="meta-line-timestamp">39 minutes ago</p>
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
          <p class="post-comment-heading">Load More Comments <span class="highlighted">1+</span></p>
          <!-- /POST COMMENT HEADING -->

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
                    <label for="post-reply">Your Reply</label>
                    <input type="text" id="post-reply" name="post_reply">
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
      <!-- /POST OPEN BODY -->
    </article>
    <!-- /POST OPEN -->
  </div>
  <!-- /CONTENT GRID -->

  <!-- CONTENT GRID -->
  <div class="content-grid medium">
    <!-- SECTION HEADER -->
    <div class="section-header medium">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Browse Other</p>
        <!-- /SECTION PRETITLE -->

        <!-- SECTION TITLE -->
        <h2 class="section-title">Related Posts</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- GRID -->
    <div class="grid grid-4-4 centered">
      <!-- POST PREVIEW -->
      <div class="post-preview">
        <!-- POST PREVIEW IMAGE -->
        <figure class="post-preview-image liquid">
          <img src="img/cover/10.jpg" alt="cover-10">
        </figure>
        <!-- /POST PREVIEW IMAGE -->

        <!-- POST PREVIEW INFO -->
        <div class="post-preview-info fixed-height">
          <!-- POST PREVIEW INFO TOP -->
          <div class="post-preview-info-top">
            <!-- POST PREVIEW TIMESTAMP -->
            <p class="post-preview-timestamp">3 weeks ago</p>
            <!-- /POST PREVIEW TIMESTAMP -->

            <!-- POST PREVIEW TITLE -->
            <p class="post-preview-title">I spoke with the developers of RoBot SaMurai II at the 2019 GamingCon</p>
            <!-- /POST PREVIEW TITLE -->
          </div>
          <!-- /POST PREVIEW INFO TOP -->

          <!-- POST PREVIEW INFO BOTTOM -->
          <div class="post-preview-info-bottom">
            <!-- POST PREVIEW TEXT -->
            <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
            <!-- /POST PREVIEW TEXT -->

            <!-- POST PREVIEW LINK -->
            <a class="post-preview-link" href="profile-post.html">Read more...</a>
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
                  <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/happy.png" alt="reaction-happy">
                  <!-- /REACTION IMAGE -->

                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown padded reaction-item-dropdown">
                    <!-- SIMPLE DROPDOWN TEXT -->
                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
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
                    <p class="simple-dropdown-text">Marcus Jhonson</p>
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
                  <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/funny.png" alt="reaction-funny">
                  <!-- /REACTION IMAGE -->

                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown padded reaction-item-dropdown">
                    <!-- SIMPLE DROPDOWN TEXT -->
                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/funny.png" alt="reaction-funny"> <span class="bold">Funny</span></p>
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
                    <p class="simple-dropdown-text"><span class="bold">and 10 more...</span></p>
                    <!-- /SIMPLE DROPDOWN TEXT -->
                  </div>
                  <!-- /SIMPLE DROPDOWN -->
                </div>
                <!-- /REACTION ITEM -->
              </div>
              <!-- /REACTION ITEM LIST -->

              <!-- META LINE TEXT -->
              <p class="meta-line-text">21</p>
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
              <a class="meta-line-link" href="profile-post.html#comments">8 Comments</a>
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
      <!-- /POST PREVIEW -->

      <!-- POST PREVIEW -->
      <div class="post-preview">
        <!-- POST PREVIEW IMAGE -->
        <figure class="post-preview-image liquid">
          <img src="img/cover/20.jpg" alt="cover-20">
        </figure>
        <!-- /POST PREVIEW IMAGE -->

        <!-- POST PREVIEW INFO -->
        <div class="post-preview-info fixed-height">
          <!-- POST PREVIEW INFO TOP -->
          <div class="post-preview-info-top">
            <!-- POST PREVIEW TIMESTAMP -->
            <p class="post-preview-timestamp">4 weeks ago</p>
            <!-- /POST PREVIEW TIMESTAMP -->

            <!-- POST PREVIEW TITLE -->
            <p class="post-preview-title">I will be at this month's StreamCon with NekoBebop</p>
            <!-- /POST PREVIEW TITLE -->
          </div>
          <!-- /POST PREVIEW INFO TOP -->

          <!-- POST PREVIEW INFO BOTTOM -->
          <div class="post-preview-info-bottom">
            <!-- POST PREVIEW TEXT -->
            <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
            <!-- /POST PREVIEW TEXT -->

            <!-- POST PREVIEW LINK -->
            <a class="post-preview-link" href="profile-post.html">Read more...</a>
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
                  <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/happy.png" alt="reaction-happy">
                  <!-- /REACTION IMAGE -->

                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown padded reaction-item-dropdown">
                    <!-- SIMPLE DROPDOWN TEXT -->
                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/happy.png" alt="reaction-happy"> <span class="bold">Happy</span></p>
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
                    <p class="simple-dropdown-text">Marcus Jhonson</p>
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
                  </div>
                  <!-- /SIMPLE DROPDOWN -->
                </div>
                <!-- /REACTION ITEM -->
              </div>
              <!-- /REACTION ITEM LIST -->

              <!-- META LINE TEXT -->
              <p class="meta-line-text">8</p>
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
              <a class="meta-line-link" href="profile-post.html#comments">2 Comments</a>
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
      <!-- /POST PREVIEW -->
    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

<!-- app -->
<script src="/assets/js/app.bundle.min.js"></script>
</body>
</html>
