@extends('AdminLayoutFiles.admin-layout')

@section('title', 'User-Action-List')

@section('header')
<!-- Google Font: Source Sans Pro -->
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
            <h1>Kilimofy Users List</h1>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Kilimofy Users Table List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(session()->has('Message'))
                  <div class="alert alert" role = "alert">
                    <p class="lead text-center" style="color: #f33155;font-size:24px;">{{session()->get('Message')}}</p>
                  </div>
                @endif
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Ocupation(s)</th>
                    <th>Join</th>
                    <th>
                      &nbsp;
                      &nbsp;
                      Action
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($user_list as $user)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->user_ocupation}}</td>
                      <td>{{$user->created_at->diffForHumans()}}</td>
                      <td>
                        <a href="/kilimofy/Admin/view-user/{{$user->id}}" ><i class="fa fa-eye"></i></a>
                          &nbsp;
                          &nbsp;
                          &nbsp;
                        <a href="/kilimofy/Admin/comfirm-delete-user/{{$user->id}}" ><i class="fa fa-trash" style="color:red;"></i></a>
                          &nbsp;
                          &nbsp;
                          &nbsp;
                        <a href="/kilimofy/Admin/edit-user-info/{{$user->id}}" ><i class="fa fa-edit" style="color:#ff9900;"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>SN</th>
                      <th>Name</th>
                      <th>Ocupation(s)</th>
                      <th>Join</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
