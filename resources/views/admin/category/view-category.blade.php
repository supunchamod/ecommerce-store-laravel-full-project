@extends('admin.layouts.main')
@section('content')

  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Category</div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Category Details</li>
            </ol>
          </nav>
        </div>
      </div>
      <!--end breadcrumb-->

      <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-medium flex-wrap font-text1">
        <a href="javascript:;"><span class="me-1">All</span><span class="text-secondary">(88754)</span></a>
      </div>

      <div class="row g-3">
        <div class="col-auto">
          <div class="position-relative">
            <input class="form-control px-5" type="search" placeholder="Search Category">
            <span
              class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
          </div>
        </div>
        <div class="col-auto flex-grow-1 overflow-auto">
          <div class="btn-group position-static">
            <div class="btn-group position-static">
              
            </div>
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center gap-2 justify-content-lg-end">
            <button class="btn btn-filter px-4"><i class="bi bi-box-arrow-right me-2"></i>Export</button>
            <a href="/admin/add-category"><button class="btn btn-primary px-4"><i class="bi bi-plus-lg me-2"></i>Add Category</button></a>
          </div>
        </div>
      </div><!--end row-->

                     @if(session('success'))
                            <div class="alert alert-success border-0 bg-grd-success alert-dismissible fade show" style="margin-top: 20px;">
									<div class="d-flex align-items-center">
										<div class="font-35 text-white"><span class="material-icons-outlined fs-2">check_circle</span>
										</div>
										<div class="ms-3">
                                        {{ session('success') }}
										</div>
									</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
                      @endif		
      
                                
      <div class="card mt-4">
        <div class="card-body">
          <div class="product-table">
            <div class="table-responsive white-space-nowrap">
              <table class="table align-middle">
                <thead class="table-light">
                  <tr>
                    <th>
                      <input class="form-check-input" type="checkbox">
                    </th>
                    <th>Images</th>
                    <th>Category Id</th>
                    <th>Category Name</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($categery as $data )
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box">
                          <img src="{{ asset('assets/images/' . $data->image) }}" width="70" class="rounded-3" alt="">
                        </div>
                        <div class="product-info">
                          <a href="javascript:;" class="product-title"></a>
                          <p class="mb-0 product-category"></p>
                        </div>
                      </div>
                    </td>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>456</td>
                    <td>{{$data->created_at}}</td>
                    <td>
                     <form action="{{ route('category.destroy', $data->id) }}" method="POST" style="display: inline-block;">
                      @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-grd btn-grd-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


    </div>
  </main>
  <!--end main wrapper-->


@endsection