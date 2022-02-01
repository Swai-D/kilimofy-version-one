@extends('LayoutBladeFiles.app-layout')


@foreach($blog as $blog)

  @section('title')
    {{$blog->title}}
  @endsection

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
    <br>
    <!-- WIDGET BOX -->
    <div class="widget-box">
      <!-- WIDGET BOX TITLE -->
      <p class="widget-box-title">Edit Blog</p>
      <!-- /WIDGET BOX TITLE -->

      <!-- WIDGET BOX CONTENT -->
      <div class="widget-box-content">
        <!-- FORM -->
        <form class="form">

          <!-- FORM ROW -->
          <div class="form-row ">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input small">
                  <input type="text" id="profile-job-2-title" name="title" value="{{old('title') ?? $blog->title}}">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->


          </div>
          <!-- /FORM ROW -->

          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <input type="text" id="summernote" class="form-control" name="body" >
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
        </form>
        <!-- /FORM -->

        <!-- BUTTON -->
        <button class="button small secondary add-field-button">+ Save Changes</button>
        <!-- /BUTTON -->
      </div>
      <!-- WIDGET BOX CONTENT -->
    </div>
    <!-- /WIDGET BOX -->
  </div>
  <!-- /CONTENT GRID -->

  <script type="text/javascript">
    $('#summernote').summernote({
      placeholder: "{!!$blog->body!!}",
      tabsize: 2,
      height: 100
  }).summernote('code', `{!!$blog->body!!}`);
  </script>
  @include('LayoutBladeFiles.summernote')
@endforeach
