@extends('AdminLayoutFiles.admin-layout')
@section('content-header', 'Items')
@section('content-parent', 'Item')
@section('content-details', 'Item Feedback')
@section('admin-content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-xl-9">
      <div class="row">
        <div class="col-sm-12">
          <form class="theme-form" action="/kilimofy/Admin/items-feedback-update" method="post">
            @csrf
            <div class="card">
              <div class="card-header">
                <h5>Feedback Kuhusu Bidhaa</h5><span>Maelezo haya yata mrudia mteja kuusu bidhaa yake aliyoiost kwa  marekebisho zaidi</span>
              </div>
              <div class="card-body">

                  <div class="mb-3">
                    <label class="col-form-label pt-0" for="exampleInputEmail1">Email address</label>
                        <input type="hidden" name="feedback_id" value="{{$feedback_id}}">
                        <textarea class="form-control" name="feedback" rows="8" cols="30">
                    </textarea>
                  </div>

              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tuma</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
