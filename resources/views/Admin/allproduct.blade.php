@extends('Admin.layouts.template')
@section('page_title')
Dashboard-All-Product
@endsection
@section('content')

<div class="container">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Product </h4>
<div class="card">
                <h5 class="card-header">All Product Information</h5>
                <div class="table-responsive text-nowrap">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                      {{session()->get('message')}}
                    </div>
                    @endif
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Category Count</th>
                        <th>Sub Category Count</th>
                        <th>Product Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->product_category_name}}</td>
                            <td>{{$product->product_subcategory_name}}</td>
                            <td>{{$product->product_img}}</td>
                            <td>
                                  <a class="btn btn-primary" href=""><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                  <a class="btn btn-danger" href=""><i class="bx bx-trash me-1"></i> Delete</a>
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
