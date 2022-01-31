@extends('AdminLayoutFiles.admin-layout')
@section('header')
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="/admin-assets/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/admin-assets/dist/css/adminlte.min.css">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Crops Price Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  @if(session()->has('Message'))
    <div class="alert alert" role = "alert">
      <p class="lead" style="color: #f33155">
        {{session()->get('Message')}}
      </p>
    </div>
@else
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid ">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Crops Price Updates Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/kilimofy/Admin/New-Forum-Category-Form-Store" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Crop Name</label>
                  <select class="form-control" name="Category" id="exampleInputEmail1" >
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input type="number" class="form-control" name="Price" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Category Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="Crop_Image" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Crop Image</label>
                    </div>
                    </div>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->



        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endif
</div>
<!-- /.content-wrapper -->
@endsection


@section('footer')
<!-- jQuery -->
<script src="/admin-assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="/admin-assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin-assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin-assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endsection
