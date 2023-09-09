@extends('Admin.layouts.template')
@section('page_title')
Dashboard-Add-Product
@endsection
@section('content')
<div class="container">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Product </h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Add New Product</h5>
                      <small class="text-muted float-end">Add New Product</small>
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
                      <form action="{{route('storeproduct')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                class="form-control"
                                id="product_name"
                                name="product_name"
                                placeholder="Enter Product Name"/>
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
                                placeholder="Enter Product Price"/>
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
                                placeholder="Enter Product Quantity"/>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Short Description</label>
                          <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                          <textarea class="form-control" id="product_short_des" name="product_short_des" placeholder="Enter Product Short Description" rows="3"></textarea>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Long Description</label>
                          <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                          <textarea class="form-control" id="product_long_des" name="product_long_des" placeholder="Enter Product Long Description" rows="3"></textarea>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Category Name </label>
                        <div class="col-sm-10">
                        <select id="product_category_id" name="product_category_id" class="form-select">
                          <option>Select Category Name</option>
                          @foreach ($categories as $category )
                          <option value="{{$category->id}}">{{$category->category_name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Sub Category Name </label>
                        <div class="col-sm-10">
                        <select id="product_subcategory_id" name="product_subcategory_id" class="form-select">
                          <option>Select Sub Category Name</option>
                          @foreach ($subcategories as $subcategory )
                          <option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Image</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <input class="form-control" type="file" id="product_img" name="product_img" multiple />
                            </div>
                          </div>
                        </div>

                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
</div>
@endsection
