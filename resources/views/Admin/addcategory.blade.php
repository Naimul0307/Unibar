@extends('Admin.layouts.template')
@section('page_title')
Dashboard-Add-Category
@endsection

@section('content')

<div class="container">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Category </h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Add Category</h5>
                      <small class="text-muted float-end">Add Category Name</small>
                    </div>
                    <div class="card-body">
                      <form action="" method="Post">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Category Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                class="form-control"
                                id="category_name"
                                name="category_name"
                                placeholder="Enter Category Name"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
</div>
@endsection