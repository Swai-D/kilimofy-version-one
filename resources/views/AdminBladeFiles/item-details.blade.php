@extends('AdminLayoutFiles.admin-layout')
@section('content-header', 'Items')
@section('content-parent', 'Item')
@section('content-details', 'Item Details')
@section('admin-content')
<!-- Container-fluid starts-->

@foreach($item_details as $item_detail)
<div class="container-fluid">
  <div>
    <div class="row product-page-main p-0">
        <div class="col-xl-4 xl-cs-65 box-col-12">
        <div class="card">
          <div class="card-body">
            <div class="product-slider owl-theme" id="sync1">
               <img src="/Uploads/ItemsImages/{{$item_detail->item_image}}" alt="" style="width:100%; height100%; border-radius:5px;">
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 xl-cs-35 box-col-6">
        <div class="card">
          <div class="card-body">
            <!-- side-bar colleps block stat-->
            <div class="filter-block">
              <h4>Bidhaa</h4>
              <ul>
                <li><b>Jina:</b> {{$item_detail->item_name}}</li>
                <li><b>Aina:</b> {{$item_detail->item_category}}</li>
                <li><b>Garama:</b> {{$item_detail->item_price}} </li>
                <li><b>Eneo:</b> {{$item_detail->item_location}}</li>
                <li><b>Status:</b> {{$item_detail->status}}</li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="collection-filter-block">
              <ul class="pro-services">
                <li>
                  <div class="media"><i data-feather="truck"></i>
                    <div class="media-body">
                      <h5>Shipping</h5>
                      <p>{{$item_detail->item_trasport_cost}}</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media"><i data-feather="clock"></i>
                    <div class="media-body">
                      <h5>24 X 7 Service</h5>
                      <p>Online Service For New Customer</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media"><i data-feather="gift"></i>
                    <div class="media-body">
                      <h5>Festival Offer</h5>
                      <p>New Online Special Festival</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media"><i data-feather="credit-card"></i>
                    <div class="media-body">
                      <h5>Online Payment</h5>
                      <p>Contrary To Popular Belief.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="m-t-10" style="display:flex;">

              @if($item_detail->status == 'Accepted')
                <a href="/kilimofy/Admin/items-feedback/{{$item_detail->id}}"class="btn btn-primary m-r-10" type="button" title="">Manage</a>
                <a href="/kilimofy/Admin/accept_item_to_market/{{$item_detail->id}}"class="btn btn-danger m-r-10" type="button" title=""></i>delete</a>
               @else
                 <a href="/kilimofy/Admin/items-feedback/{{$item_detail->id}}"class="btn btn-primary m-r-10" type="button" title="">Feedback</a>
                 <a href="/kilimofy/Admin/accept_item_to_market/{{$item_detail->id}}"class="btn btn-success m-r-10" type="button" title=""></i>Accept</a>
               @endif
            </div>
          </div>
          <!-- silde-bar colleps block end here-->
        </div>
      </div>
    </div>
  </div>

</div>
@endforeach

<!-- Container-fluid Ends-->
@endsection
