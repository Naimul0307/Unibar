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
                      <tr>
                        <td>1</td>
                        <td>Jon</td>
                        <td>4</td>
                        <td>3</td>
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