@extends('LayoutBladeFiles.app-layout')
@section('title','Mashine Za Kilimo')
@section('menu-status-mashine','active')
@section('discription-title','Mashine za Kilimo')
@section('discription-details','Pata Mashine Aina zote za kilimo popote ulipo')
<div class="content-grid">
@include('LayoutBladeFiles.title-layout')
<section class="section">
  <!-- SECTION HEADER -->
  <div class="section-header">
    <!-- SECTION HEADER INFO -->
    <div class="section-header-info">

      <!-- DECORATED TEXT -->
      <div class="decorated-text">
        <!-- DECORATED TEXT ICON -->
        <svg class="decorated-text-icon icon-pin" style="fill:red;">
          <use xlink:href="#svg-pin"></use>
        </svg>
        <!-- /DECORATED TEXT ICON -->

        <!-- DECORATED TEXT CONTENT -->
        <p class="decorated-text-content">{{$user_location}}</p>
        <!-- /DECORATED TEXT CONTENT -->
      </div>
      <!-- /DECORATED TEXT -->

      <!-- SECTION TITLE -->
      <h2 class="section-title">Mashine za kilimo</h2>

      <!-- SECTION PRETITLE -->
      <!-- <p class="section-pretitle" style="color:#f33155">{{$user_location}}</p> -->
      <!-- /SECTION PRETITLE -->
    </div>
    <!-- /SECTION HEADER INFO -->

    <!-- SECTION HEADER ACTIONS -->
    <div class="section-header-actions">
      <!-- SECTION HEADER ACTION -->
      <!-- <p class="section-header-action popup-album-creation-trigger">Create Album +</p> -->
      <!-- /SECTION HEADER ACTION -->

      <!-- SECTION HEADER ACTION -->
      <!-- <a class="section-header-action" href="profile-photos-inside.html">See All</a> -->
      <!-- /SECTION HEADER ACTION -->
    </div>
    <!-- /SECTION HEADER ACTIONS -->
  </div>
  <!-- /SECTION HEADER -->

  <!-- GRID -->
  <div class="grid grid-3-3-3-3 centered">

    @foreach($mashines as $mashine)
    <!-- ALBUM PREVIEW -->
    <a class="album-preview" href="/kilimofy/Mkulima/mashime_za_kilimo_cart/shopping-cart/{{$mashine->id}}">
      <!-- ALBUM PREVIEW IMAGE -->
      <figure class="album-preview-image liquid">
        <img src="/Uploads/MashineImage/{{$mashine->Mashine_Image}}" alt="album-image-01">
      </figure>
      <!-- /ALBUM PREVIEW IMAGE -->

      <!-- TEXT STICKER -->
      <p class="text-sticker small negative">{{number_format($mashine->Mashine_Price)}}</p>
      <!-- /TEXT STICKER -->

      <!-- ALBUM PREVIEW INFO -->
      <div class="album-preview-info">
        <!-- ALBUM PREVIEW TITLE -->
        <p class="album-preview-title">{{$mashine->Mashine_Name}}</p>
        <!-- /ALBUM PREVIEW TITLE -->

        <!-- ALBUM PREVIEW TEXT -->
        <p class="album-preview-text">{{$mashine->created_at->diffForHumans()}}</p>
        <!-- /ALBUM PREVIEW TEXT -->
      </div>
      <!-- /ALBUM PREVIEW INFO -->
    </a>
    @endforeach


  </div>
  <!-- /GRID -->

   {{ $mashines->links('vendor.pagination.custom') }}
</section>

</div>
