<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>kilimofy-Admin  | New Staff</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin-assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin-assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">

  <div class="register-box">

    @if(session()->has('Message'))
      <div class="alert alert" role = "alert">
          <p class="lead" style="color: #f33155; font-size:24px;">
            {{session()->get('Message')}}
          </p>

      </div>

      <div class="text-center ">
        <a href="/kilimofy/Admin/admin_index_page" class="btn  btn-success text-center mr-2">
          <i class="fab fa-home "></i>Back Home &nbsp;&nbsp;
        </a>
      </div>
    @else

    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Kilimo</b>fy</a>
      </div>

      <div class="card-body">
        <p class="login-box-msg">Register a new staff</p>

        <form action="/kilimofy/Admin/register-new-staff-store" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="Staff_Name" placeholder="Full name" value="{{old('Staff_Name')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <p class="lead" style="color: #f33155">
              {{$errors->first('Staff_Name')}}
            </p>
          </div>

          <div class="input-group mb-3">
            <select class="form-control" name="Staff_Role">
              <option selected disabled>--Select Staff Role--</option>
              <option value="1">Normal Staff One</option>
              <option value="2">Normal Staff Two</option>
              <option value="3">Normal Staff Three</option>

            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <p class="lead" style="color: #f33155">
              {{$errors->first('Staff_Role')}}
            </p>
          </div>

          <div class="input-group mb-3">
            <input type="email" class="form-control" name="Email" placeholder="Email" value="{{old('Email')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>

          </div>
          <p class="lead" style="color: #f33155">
            {{$errors->first('Email')}}
          </p>

          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <p class="lead" style="color: #f33155">
              {{$errors->first('password')}}
            </p>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <p class="lead" style="color: #f33155">
              {{$errors->first('password_confirmation')}}
            </p>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                 I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">

        </div>


      </div>
      @endif
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

<!-- jQuery -->
<script src="/admin-assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin-assets/dist/js/adminlte.min.js"></script>
</body>
</html>
