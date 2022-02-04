<div class="popup-box popup-album-creation">
  <!-- POPUP CLOSE BUTTON -->
  <div class="popup-close-button popup-album-creation-trigger">
    <!-- POPUP CLOSE BUTTON ICON -->
    <svg class="popup-close-button-icon icon-cross">
      <use xlink:href="#svg-cross"></use>
    </svg>
    <!-- /POPUP CLOSE BUTTON ICON -->
  </div>
  <!-- /POPUP CLOSE BUTTON -->

  <!-- POPUP BOX TITLE -->
  <p class="popup-box-title">Create Blog  +</p>
  <!-- /POPUP BOX TITLE -->

  <!-- FORM -->
  <form class="form" action="/kilimofy/Blog/User-Create-Blog-Post" method="post" enctype="multipart/form-data">
    @csrf
  <!-- FORM UPLOADABLES -->
    <div class="row">

       <div class="col-md-12">
         <div class="card card-outline card-info">
           <div class="card-header">
             <h3 class="card-title">
               Blog Post
             </h3>
           </div>
           <!-- /.card-header -->
           <!-- FORM ROW -->


           <!-- /FORM ROW -->

           <div class="card-body">
             <div class="form-input ">
                <label for="account-current-password">Title</label>
                <input type="text" id="account-current-password" name="title">
              </div>
              <br>
             <input type="hidden" name="user_name" value="{{Auth::user()->name}}">
             <input type="hidden" name="avatar" value="{{Auth::user()->avatar}}">
             <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

              <textarea class="form-control" name="body" id="summernote"></textarea>
           </div>
           <div class="card-footer">

           </div>
         </div>
       </div>

      <!-- /.col-->
    </div>
    <!-- ./row -->
    <!-- /FORM UPLOADABLES -->

    <!-- POPUP BOX ACTIONS -->
    <div class="popup-box-actions">
      <!-- POPUP BOX ACTION -->
      <button type="reset" class="popup-box-action button white popup-album-creation-trigger">Discard All</button>
      <!-- /POPUP BOX ACTION -->

      <!-- POPUP BOX ACTION -->
      <button type="submit" class="popup-box-action button secondary">Post Blog!</button>
      <!-- /POPUP BOX ACTION -->
    </div>
    <!-- /POPUP BOX ACTIONS -->
  </form>
  <!-- /FORM -->
</div>
