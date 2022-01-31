@extends('LayoutBladeFiles.app-layout')
@foreach($group as $group_details)

@section('title')
  {{$group_details->Group_Name }}'s Timeline
@endsection

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- PROFILE HEADER -->
  @include('LayoutBladeFiles.group-profile-header')
  <!-- /PROFILE HEADER -->

  <!-- SECTION NAVIGATION -->
  @include('LayoutBladeFiles.group-nav-section')
  <!-- /SECTION NAVIGATION -->

  <!-- GRID -->

  @yield('usegroup-data')

  <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->
@endforeach
