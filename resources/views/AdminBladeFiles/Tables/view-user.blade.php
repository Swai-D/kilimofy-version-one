@extends('AdminLayoutFiles.admin-layout')

@foreach($user as $user)

@section('title')
  {{$user->username}}'s Details
@endsection


@section('header')
<<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="/admin-assets/plugins/fontawesome-free/css/all.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="/admin-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/admin-assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/admin-assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/admin-assets/dist/css/adminlte.min.css">
@endsection

@section('active-table', 'active')

@section('table-active-link', 'active')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$user->username}}'s Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card row">
              <div class="card-header">
                <div class="image ">
                  <img src="/Uploads/avatars/{{$user->avatar}}" class="img-circle elevation-2" alt="User Image" style="width:100px; height:100px;">
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">

                <table id="example1" class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th style="width: 40px">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Name</td>
                      <td>
                        {{$user->name}}
                      </td>
                    <td><span class="badge bg-success">Good</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Username</td>
                      <td>
                        {{$user->username}}
                      </td>
                      <td><span class="badge bg-success">Good</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Phone Number</td>
                      <td>{{$user->user_phone_number}}</td>
                      <td><span class="badge bg-success">Good</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Ocupation</td>
                      <td>{{$user->user_ocupation}}</td>
                      <td><span class="badge bg-success">Good</span></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Location</td>
                      <td>{{$user->user_location}}</td>
                      <td><span class="badge bg-success">Good</span></td>
                    </tr>

                    <tr>
                      <td>6.</td>
                      <td>Email</td>
                      <td>{{$user->email}}</td>
                      <td><span class="badge bg-primary">Normal</span></td>
                    </tr>

                    <tr>
                      <td>7.</td>
                      <td>Age</td>
                      <td>{{$user->age}}</td>
                      <td><span class="badge bg-primary">Normal</span></td>
                    </tr>
                    <tr>
                      <td>8.</td>
                      <td>Join</td>
                      <td>{{$user->created_at->diffForHumans()}}</td>
                      <td><span class="badge bg-success">Good</span></td>
                    </tr>

                  </tbody>
                  <br>
                  <tfoot>
                    <tr>
                      <th>SN</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('footer')
<!-- jQuery -->
<script src="/admin-assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/admin-assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/admin-assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/admin-assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/admin-assets/plugins/jszip/jszip.min.js"></script>
<script src="/admin-assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/admin-assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/admin-assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/admin-assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/admin-assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin-assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin-assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
@endforeach
