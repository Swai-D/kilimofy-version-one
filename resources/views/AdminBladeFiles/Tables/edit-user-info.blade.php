@extends('AdminLayoutFiles.admin-layout')

@foreach($user as $user)

@section('title')
  {{$user->username}}'s Details
@endsection


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
        <form class="form" action="/kilimofy/Admin/edit-user-info/{{$user->id}}" method="post">
          @csrf
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
                        <th colspan="2">Description</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Name</td>
                        <td colspan="2">
                          <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{old('name') ?? $user->name}}">
                        </td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Username</td>
                        <td colspan="2">
                          <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="{{old('username') ?? $user->username}}">
                        </td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Phone Number</td>
                        <td colspan="2">
                          <input type="number" name="user_phone_number" class="form-control" id="exampleInputEmail1" value="{{old('user_phone_number') ?? $user->user_phone_number}}">
                        </td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Ocupation</td>
                        <td colspan="2">
                          <select name="user_ocupation" class="form-control select2" style="width: 100%;">
                            <option value="Mkulima" {{ $user->user_ocupation == 'Mkulima' ? 'selected' : '' }}>Mkulima</option>
                            <option value="Dereva" {{ $user->user_ocupation == 'Dereva' ? 'selected' : '' }}>Dereva</option>
                            <option value="Mtaalam" {{ $user->user_ocupation == 'Mtaalam' ? 'selected' : '' }}>Mtaalam wa kilimo</option>
                            <option value="Bwana_Shamba" {{ $user->user_ocupation == 'Bwana_Shamba' ? 'selected' : '' }}>Bwana Shamba (Afisa Ugavi)</option>
                            <option value="Fundi" {{ $user->user_ocupation == 'Fundi' ? 'selected' : '' }}>Fundi Wa Mashine Za Kilimo (Fundi)</option>
                            <option value="Mashine_Za_Kilimo" {{ $user->user_ocupation == 'Mashine_Za_Kilimo' ? 'selected' : '' }}>Muuzaji Wa Mashine Za Kilimo</option>
                            <option value="Muuza_Pembejeo" {{ $user->user_ocupation == 'Muuza_Pembejeo' ? 'selected' : '' }}>Muuzaji wa pembejeo Na Viwatilifu</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>UserType</td>
                        <td colspan="2">
                          <select name="usertype" class="form-control select2" style="width: 100%;">
                            @if(Auth::user()->usertype == 'supper_admin')
                              <option value="normal_user">Normal User</option>
                              <option value="kilimofy_admin">Admin</option>
                              @else
                              <option value="normal_user">Normal User</option>
                              <option  disabled>Admin</option>
                            @endif

                          </select>
                        </td>
                      </tr>

                      <tr>
                        <td>6.</td>
                        <td>Location</td>
                        <td colspan="2">
                          <select name="user_location" class="form-control select2" style="width: 100%;">
                            @foreach($places as $place)
                            <option value="{{$place->Region}}, {{$place->District}}" > {{$place->Region}} ({{$place->District}}) </option>
                            @endforeach
                          </select>
                        </td>
                      </tr>


                      <tr>
                        <td>7.</td>
                        <td>Join</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                      </tr>

                      <tr>
                        <td>8.</td>
                        <td>Updated</td>
                        <td>{{$user->updated_at}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                      </tr>

                    </tbody>
                    <br>
                    <tfoot>
                      <br>
                      <tr>
                        <th><button type="submit" class="btn btn-success ">Update</button> </th>
                        <th><a href="/kilimofy/Admin/users-action-list" class="btn btn-primary ">Cancel</a></th>
                        <th></th>
                        <th></th>
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
        </form>
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
