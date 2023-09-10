@extends('Admin.layouts.template')
@section('page_title')
Dashboard-Add-Product
@endsection
@section('content')
<div class="container">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Edit Image </h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Edit Image </h5>
                      <small class="text-muted float-end">Add New Image</small>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                         <ul>
                         @foreach ($errors->all() as $error)
                         <li>
                           {{ $error }}
                         </li>
                         @endforeach
                       </ul>
                     </div>
                     @endif
                      <form action="{{route('updateproductimg')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Previous Image </label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <img style="height:300px" src="{{asset($product_info->product_img)}}" alt="">
                            </div>
                          </div>
                        </div>

                        <div><input type="hidden" value="{{$product_info->id}}" name="id"></div>
                    <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Uploade New Image</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <input class="form-control" type="file" id="product_img" name="product_img" multiple />
                            </div>
                          </div>
                        </div>

                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Image</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
</div>
@endsection
