@extends('Admin.layouts.template')
@section('page_title')
Dashboard-All-SubCategory
@endsection
@section('content')
<div class="container">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Sub Category </h4>
<div class="card">
                <h5 class="card-header">All Sub Category Information</h5>
                <div class="table-responsive text-nowrap">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                      {{session()->get('message')}}
                    </div>
                    @endif
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th>Sub Category Id</th>
                        <th>Sub Category Name</th>
                        <th>Category Count</th>
                        <th>Product Count</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ( $allsubcategories as $subcategory)
                      <tr>
                        <td>{{$subcategory->id}}</td>
                        <td>{{$subcategory->subcategory_name}}</td>
                        <td>{{$subcategory->category_name}}</td>
                        <td>{{$subcategory->product_count}}</td>
                        <td>
                              <a class="btn btn-primary" href="{{route('editsubcategory', $subcategory->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="btn btn-danger" href="{{route('deleteubcategory', $subcategory->id)}}"><i class="bx bx-trash me-1"></i> Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
</div>
</div>
@endsection
