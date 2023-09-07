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
                      <form action="" method="POST">
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
                                type="text"
                                class="form-control"
                                id="product_price"
                                name="product_price"
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
                                id="product_quantity"
                                name="product_quantity"
                                placeholder="Enter Product Quantity"/>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Short Description</label>
                          <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                          <textarea class="form-control" id="product_shortdescription" name="product_shortdescription" placeholder="Enter Product Short Description" rows="3"></textarea>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Long Description</label>
                          <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                          <textarea class="form-control" id="product_longdescription" name="product_longdescription" placeholder="Enter Product Long Description" rows="3"></textarea>
                            </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Category Name </label>
                        <div class="col-sm-10">
                        <select id="defaultSelect" class="form-select">
                          <option>Select Category Name</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Sub Category Name </label>
                        <div class="col-sm-10">
                        <select id="defaultSelect" class="form-select">
                          <option>Select Sub Category Name</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Image</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <input class="form-control" type="file" id="formFileMultiple" multiple />
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