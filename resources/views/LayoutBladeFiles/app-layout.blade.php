@include('LayoutBladeFiles.header-layout')
  <!-- /PAGE LOADER -->

  <!-- NAVIGATION WIDGET -->
@include('LayoutBladeFiles.desktop-side-nav-layout')
  <!-- /NAVIGATION WIDGET -->

  <!-- NAVIGATION WIDGET -->
@include('LayoutBladeFiles.mini-mobile-device-collapse-nav-layout')
  <!-- /NAVIGATION WIDGET -->

  <!-- NAVIGATION WIDGET -->
@include('LayoutBladeFiles.desktop-colapse-nav-layout')
  <!-- /NAVIGATION WIDGET -->

  <!-- CHAT WIDGET -->
<!-- include('ChatsBladeFiles.aside-chat-layout') -->
  <!-- /CHAT WIDGET -->

  <!-- CHAT WIDGET -->
<!-- include('ChatsBladeFiles.text-content-layout') -->
  <!-- /CHAT WIDGET -->

  <!-- HEADER -->
@include('LayoutBladeFiles.top-desktop-navbar-layout')
  <!-- /HEADER -->

  <!-- FLOATY BAR -->
@include('LayoutBladeFiles.mini-device-bottom-nav-layout')

@yield('content')
<!-- app -->
@include('LayoutBladeFiles.footer-scripts-layout')
