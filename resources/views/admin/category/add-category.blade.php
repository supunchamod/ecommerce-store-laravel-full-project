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
								<li class="breadcrumb-item active" aria-current="page">Add Category</li>
							</ol>
						</nav>
					</div>
				
				</div>
				<!--end breadcrumb-->
        <div class="row">
          <div class="col-12 col-lg-12">
          <form action="{{ route('category.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
              <div class="card">
                 <div class="card-body">
                   <div class="mb-3">
						<label class="form-label">Category Name:</label>
						<input type="text" class="form-control" name="name" id="name">
					</div>
                    <div class="mb-3">
						<label class="form-label">Display images:</label>
						<input type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" class="form-control">
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
    

<script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#fancy-file-upload').FancyFileUpload({
            params: {
                action: 'fileuploader'
            },
            maxfilesize: 1000000
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
    });
</script>
<script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/main.js') }}"></script>

@endsection