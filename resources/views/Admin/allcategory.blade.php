@extends('Admin.layouts.template')
@section('page_title')
Dashboard-All-Category
@endsection
@section('content')
<div class="container">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Category </h4>
<div class="card">
                <h5 class="card-header">All Category Information</h5>
                <div class="table-responsive text-nowrap">
                  @if(session()->has('message'))
                  <div class="alert alert-success">
                    {{session()->get('message')}}
                  </div>
                  @endif
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>Sub Category Count</th>
                        <th>Product Count</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>Jon</td>
                        <td>Jon</td>
                        <td>Jon</td>
                        <td>Jon</td>
                        <td>
                              <a class="btn btn-primary" href=""><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="btn btn-danger" href=""><i class="bx bx-trash me-1"></i> Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
</div>
</div>
@endsection