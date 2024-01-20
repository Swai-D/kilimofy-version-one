@extends('LayoutBladeFiles.app-layout')


<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- PROFILE HEADER -->
  @include('LayoutBladeFiles.group-profile-header')
  <!-- /PROFILE HEADER -->

  <!-- SECTION NAVIGATION -->
  @include('LayoutBladeFiles.user-nav-section')
  <!-- /SECTION NAVIGATION -->

  <!-- GRID -->

  @yield('user-data')

  <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->
