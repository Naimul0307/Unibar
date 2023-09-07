@extends('Admin.layouts.template')
@section('page_title')
Dashboard-Add-SubCategory
@endsection
@section('content')

<div class="container">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Add Sub Category </h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Add New Sub Category</h5>
                      <small class="text-muted float-end">Add Sub Category Name</small>
                    </div>
                    <div class="card-body">
                      <form action="" method="POST">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="">Sub Category Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                class="form-control"
                                id="subcategory_name"
                                name="subcategory_name"
                                placeholder="Enter Sub Category Name"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Category Name Select</label>
                        <div class="col-sm-10">
                        <select id="defaultSelect" class="form-select">
                          <option>Select Category Name</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Sub Category</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
</div>

@endsection