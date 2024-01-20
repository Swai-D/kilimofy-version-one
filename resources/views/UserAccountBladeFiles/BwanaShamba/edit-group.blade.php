@extends('LayoutBladeFiles.app-layout')
@section('title','Usafirishaji wa Bidhaa')
@section('menu-status-driver','active')

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
  <div class="grid grid-9 medium-space center">

    <!-- GRID COLUMN -->
    <div class="account-hub-content">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
          <!-- SECTION PRETITLE -->
          <p class="section-pretitle">Grupu (Kundi)</p>
          <!-- /SECTION PRETITLE -->

          <!-- SECTION TITLE -->
          <h2 class="section-title">Edit Grupu (Kundi)</h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
      </div>
      <!-- /SECTION HEADER -->

      <!-- GRID COLUMN -->
      <div class="grid-column">

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Edit Grupu</p>
          <!-- /WIDGET BOX TITLE -->

         @foreach($group_to_edit as $new_group)
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- FORM -->
            <form class="form" action="/kilimofy/Group/Edit-Group-Store/{{$new_group->id}}" method="post" enctype="multipart/form-data">
              @csrf
              <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM INPUT -->
                  <div class="form-input small active">
                    <label for="group-name">Jina la Grupu</label>
                    <input type="text" id="group-name" name="Group_Name"  value="{{old('Group_Name') ?? $new_group->Group_Name}}">
                  </div>
                  <!-- /FORM INPUT -->

                </div>
                <!-- /FORM ITEM -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                      <label for="group-tagline">Ujumbe wa Grupu</label>
                      <input type="text" id="group-tagline" name="Tagline" value="{{old('Tagline') ?? $new_group->Tagline}}">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
              </div>
              <!-- /FORM ROW -->
              <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM SELECT -->
                  <div class="form-select">
                    <label for="item-category">Status ya Grupu</label>
                    <select id="item-category" name="Status">
                      <option value="Public" {{ $new_group->Status == 'Public' ? 'selected' : '' }}>Public</option>
                      <option value="Private" {{ $new_group->Status == 'Private' ? 'selected' : '' }}>Private</option>

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

                <!-- /FORM ITEM -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                      <label for="group-tagline">Profile ya Grupu</label>
                      <input type="file" id="group-tagline" name="Group_Image" >
                      <input type="hidden"  name="Creator_Name" value="{{Auth::user()->name}}" >
                      <input type="hidden"  name="Creator_Id" value="{{Auth::user()->id}}" >
                      <input type="hidden"  name="Creator_Image_Path" value="{{Auth::user()->avatar}}" >
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
              </div>
              <!-- /FORM ROW -->

                <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- FORM INPUT -->
                  <div class="form-input small mid-textarea">
                    <textarea id="group-description" name="Description" placeholder="Andika maelezo mafupi kuhusu grupu..."></textarea>
                  </div>
                  <!-- /FORM INPUT -->
                </div>
                <!-- /FORM ITEM -->

              </div>
              <!-- /FORM ROW -->

              <!-- BUTTON -->
              <button type="submit" class="button small secondary add-field-button">+ Save Changes</button>
              <!-- /BUTTON -->
            </form>
            <!-- /FORM -->

          </div>
          <!-- WIDGET BOX CONTENT -->
          @endforeach
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID COLUMN -->

  </div>
  <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->
