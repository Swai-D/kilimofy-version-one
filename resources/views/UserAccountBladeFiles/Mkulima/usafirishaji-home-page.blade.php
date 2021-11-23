@extends('LayoutBladeFiles.app-layout')
@section('title','Usafirishaji Wa Mizigo')
@section('menu-status-shipping','active')
@section('discription-title','Usafirishaji')
@section('discription-details','Chagua Usafiri')
<!-- CONTENT GRID -->
<div class="content-grid">

  <!-- SECTION BANNER -->
  @include('LayoutBladeFiles.title-layout')
  <!-- /SECTION BANNER -->

  <!-- GRID -->
  <div class="grid grid-3-3-3-3 top-space centered">

    <!-- BADGE ITEM STAT -->
    <div class="badge-item-stat">
      <!-- TEXT STICKER -->
      <p class="text-sticker">
        <!-- TEXT STICKER ICON -->
        <svg class="text-sticker-icon icon-plus-small">
          <use xlink:href="#svg-plus-small"></use>
        </svg>
        <!-- TEXT STICKER ICON -->
        Tan 13
      </p>
      <!-- /TEXT STICKER -->

      <!-- BADGE ITEM STAT IMAGE PREVIEW -->
      <img class="badge-item-stat-image-preview" src="/assets/img/user_icon/guta.jpg" alt="badge-bronze-s" style="width:32px; height:32px;">
      <!-- /BADGE ITEM STAT IMAGE PREVIEW -->

      <!-- BADGE ITEM STAT IMAGE -->
      <img class="badge-item-stat-image" src="/assets/img/user_icon/guta.jpg" alt="badge-bronze-b" style="width:64px; height:64px;">
      <!-- /BADGE ITEM STAT IMAGE -->

      <!-- BADGE ITEM STAT TITLE -->
      <p class="badge-item-stat-title">Guta</p>
      <!-- /BADGE ITEM STAT TITLE -->

      <!-- BADGE ITEM STAT TEXT -->
      <p class="badge-item-stat-text">Has posted more than 1 post on their profile</p>
      <!-- /BADGE ITEM STAT TEXT -->

      <!-- PROGRESS STAT -->
      <div class="badge-item-stat">
        <!-- BUTTON -->
        <button class="button secondary popup-call-guta-trigger">Agiza Usafiri</button>
        <!-- /BUTTON -->

      </div>
      <!-- /PROGRESS STAT -->
    </div>
    <!-- /BADGE ITEM STAT -->

    <!-- BADGE ITEM STAT -->
    <div class="badge-item-stat">
      <!-- TEXT STICKER -->
      <p class="text-sticker">
        <!-- TEXT STICKER ICON -->
        <svg class="text-sticker-icon icon-plus-small">
          <use xlink:href="#svg-plus-small"></use>
        </svg>
        <!-- TEXT STICKER ICON -->
        20 Exp
      </p>
      <!-- /TEXT STICKER -->

      <!-- BADGE ITEM STAT IMAGE PREVIEW -->
      <img class="badge-item-stat-image-preview" src="/assets/img/user_icon/kirikuu.jpeg" alt="badge-bronze-s" style="width:32px; height:32px;">
      <!-- /BADGE ITEM STAT IMAGE PREVIEW -->

      <!-- BADGE ITEM STAT IMAGE -->
      <img class="badge-item-stat-image" src="/assets/img/user_icon/kirikuu.jpeg" alt="badge-bronze-b" style="width:64px; height:64px;">
      <!-- /BADGE ITEM STAT IMAGE -->

      <!-- BADGE ITEM STAT TITLE -->
      <p class="badge-item-stat-title">Kirikuu</p>
      <!-- /BADGE ITEM STAT TITLE -->

      <!-- BADGE ITEM STAT TEXT -->
      <p class="badge-item-stat-text">Has posted more than 1 post on their profile</p>
      <!-- /BADGE ITEM STAT TEXT -->

      <!-- PROGRESS STAT -->
      <div class="badge-item-stat">
        <!-- BUTTON -->
        <button class="button secondary popup-call-kirikuu-trigger">Agiza Usafiri</button>
        <!-- /BUTTON -->

      </div>
      <!-- /PROGRESS STAT -->
    </div>
    <!-- /BADGE ITEM STAT -->

    <!-- BADGE ITEM STAT -->
    <div class="badge-item-stat">
      <!-- TEXT STICKER -->
      <p class="text-sticker">
        <!-- TEXT STICKER ICON -->
        <svg class="text-sticker-icon icon-plus-small">
          <use xlink:href="#svg-plus-small"></use>
        </svg>
        <!-- TEXT STICKER ICON -->
        20 Exp
      </p>
      <!-- /TEXT STICKER -->

      <!-- BADGE ITEM STAT IMAGE PREVIEW -->
      <img class="badge-item-stat-image-preview" src="/assets/img/user_icon/guta.jpg" alt="badge-bronze-s" style="width:32px; height:32px;">
      <!-- /BADGE ITEM STAT IMAGE PREVIEW -->

      <!-- BADGE ITEM STAT IMAGE -->
      <img class="badge-item-stat-image" src="/assets/img/user_icon/shipment.png" alt="badge-bronze-b">
      <!-- /BADGE ITEM STAT IMAGE -->

      <!-- BADGE ITEM STAT TITLE -->
      <p class="badge-item-stat-title">Kenta</p>
      <!-- /BADGE ITEM STAT TITLE -->

      <!-- BADGE ITEM STAT TEXT -->
      <p class="badge-item-stat-text">Has posted more than 1 post on their profile</p>
      <!-- /BADGE ITEM STAT TEXT -->

      <!-- PROGRESS STAT -->
      <div class="badge-item-stat">
        <!-- BUTTON -->
        <button class="button secondary popup-call-kenta-trigger">Agiza Usafiri</button>
        <!-- /BUTTON -->

      </div>
      <!-- /PROGRESS STAT -->
    </div>
    <!-- /BADGE ITEM STAT -->

    <!-- BADGE ITEM STAT -->
    <div class="badge-item-stat">
      <!-- TEXT STICKER -->
      <p class="text-sticker">
        <!-- TEXT STICKER ICON -->
        <svg class="text-sticker-icon icon-plus-small">
          <use xlink:href="#svg-plus-small"></use>
        </svg>
        <!-- TEXT STICKER ICON -->
        Tan 13
      </p>
      <!-- /TEXT STICKER -->

      <!-- BADGE ITEM STAT IMAGE PREVIEW -->
      <img class="badge-item-stat-image-preview" src="/assets/img/user_icon/shipment.png" alt="badge-bronze-s" style="width:32px; height:32px;">
      <!-- /BADGE ITEM STAT IMAGE PREVIEW -->

      <!-- BADGE ITEM STAT IMAGE -->
      <img class="badge-item-stat-image" src="/assets/img/user_icon/shipment.png" alt="badge-bronze-b">
      <!-- /BADGE ITEM STAT IMAGE -->

      <!-- BADGE ITEM STAT TITLE -->
      <p class="badge-item-stat-title">Fuso</p>
      <!-- /BADGE ITEM STAT TITLE -->

      <!-- BADGE ITEM STAT TEXT -->
      <p class="badge-item-stat-text">Has posted more than 1 post on their profile</p>
      <!-- /BADGE ITEM STAT TEXT -->

      <!-- PROGRESS STAT -->
      <div class="badge-item-stat">
        <!-- BUTTON -->
        <button class="button secondary popup-call-fuso-trigger">Agiza Usafiri</button>
        <!-- /BUTTON -->

      </div>
      <!-- /PROGRESS STAT -->
    </div>
    <!-- /BADGE ITEM STAT -->

  </div>
  <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->

@include('LayoutBladeFiles.call-guta-form')
@include('LayoutBladeFiles.call-kirikuu-form')
@include('LayoutBladeFiles.call-kenta-form')
@include('LayoutBladeFiles.call-fuso-form')
