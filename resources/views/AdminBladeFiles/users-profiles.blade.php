@extends('AdminLayoutFiles.admin-layout')
@section('content-header', 'Items')
@section('content-parent', 'Post items')
@section('content-details', 'Items waiting List')
@section('admin-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">

    @foreach($users as $user)
      <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
      <div class="card custom-card">
        <div class="card-header"><img class="img-fluid" src="/admin-assets/images/user-card/1.jpg" alt=""></div>
        <div class="card-profile"><img class="rounded-circle" src="/Uploads/avatars/{{$user->avatar}}" alt=""></div>
        <ul class="card-social">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
        <div class="text-center profile-details">
          <h4>{{$user->user_name}}</h4>
          <h6>{{$user->user_ocupation}}</h6>
        </div>
        <div class="card-footer row">
          <div class="col-4 col-sm-4">
            <h6>Follower</h6>
            <h3 class="counter">9564</h3>
          </div>
          <div class="col-4 col-sm-4">
            <h6>Following</h6>
            <h3><span class="counter">49</span>K</h3>
          </div>
          <div class="col-4 col-sm-4">
            <h6>Total Post</h6>
            <h3><span class="counter">96</span>M</h3>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
