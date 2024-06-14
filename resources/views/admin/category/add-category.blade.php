@extends('admin.layouts.main')
@section('content')


  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Components</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Starter Page</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
        <div class="row">
          <div class="col-12 col-lg-12">
          <form action="{{ route('category.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
              <div class="card">
                 <div class="card-body">
                   <div class="mb-4">
                      <h5 class="mb-3">Category Name</h5>
                      <input type="text" class="form-control" name="name" id="name" placeholder="enter category name here....">
                   </div>
                   <div class="mb-4">
                    <h5 class="mb-3">Display images</h5>
                    <input id="fancy-file-upload" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" multiple>
                  </div>
                  
                  <div class="mb-4">
                  <button type="submit" class="btn btn-outline-success flex-fill"><i class="bi bi-cloud-download me-2"></i>Save Draft</button>
                  </div>
              </div>
         </form>
          </div> 
    </div>
  </main>
  <!--end main wrapper-->


@endsection