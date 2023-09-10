@extends('Admin.layouts.template')
@section('page_title')
Dashboard-Add-Product
@endsection
@section('content')
<div class="container">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Update Product </h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Update Product</h5>
                      <small class="text-muted float-end">Update Product</small>
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
                      <form action="{{route('updateproduct')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$product_info->id}}">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                class="form-control"
                                id="product_name"
                                name="product_name"
                                value="{{$product_info->product_name}}"/>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Price</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                class="form-control"
                                id="price"
                                name="price"
                                value="{{$product_info->price}}"/>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Quantity</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                class="form-control"
                                id="quantity"
                                name="quantity"
                                value="{{$product_info->quantity}}"/>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Short Description</label>
                            <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <textarea class="form-control" id="product_short_des" name="product_short_des" colum="30" rows="10">{{$product_info->product_short_des}}
                            </textarea>
                              </div>
                            </div>
                          </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Long Description</label>
                          <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                          <textarea class="form-control" id="product_long_des" name="product_long_des" colum="30" rows="10">{{$product_info->product_long_des}}
                          </textarea>
                            </div>
                          </div>
                        </div>

                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
</div>
@endsection
