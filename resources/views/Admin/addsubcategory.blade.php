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
                      <form action="{{route('storesubcategory')}}" method="POST">
                        @csrf
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
                        <select class="form-select" name="category_id" id="category_id">
                          <option>Select Category Name</option>
                          @foreach ($categories as $category )
                          <option value="{{$category->id}}">{{$category->category_name}}</option>
                          @endforeach
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
