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
<!-- Theme style -->
<link rel="stylesheet" href="/admin-assets/dist/css/adminlte.min.css">@endsection

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
                @if(session()->has('Message'))
                  <div class="alert alert" role = "alert">
                    <p class="lead text-center" style="color: #f33155;font-size:24px;">{{session()->get('Message')}}</p>
                  </div>
                  @else
                  <div class="alert alert" role = "alert">
                    <p class="lead text-center" style="color: #f33155;font-size:24px;">Are You Sure You Want To Perform This Action ? User Information Will Be Permanet Lost !</p>
                  </div>
                @endif

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
                    <br>
                    <tr>
                      <th><a href="/kilimofy/Admin/users-action-list" class="btn btn-lg btn-primary ">Cancel</a></th>
                      <th><a href="/kilimofy/Admin/delete-user/{{$user->id}}" class="btn btn-lg btn-danger">Delete</a> </th>
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
<!-- AdminLTE App -->
<script src="/admin-assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin-assets/dist/js/demo.js"></script>
@endsection
@endforeach
