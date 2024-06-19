@extends('admin.layouts.main')
@section('content')


  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Product</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Product</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
        <div class="row">
          <div class="col-12 col-lg-8">
              <div class="card">
                 <div class="card-body">
                 <form method="POST" class="row g-3" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="col-md-12">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control @error('productName') is-invalid @enderror" id="productName" name="productName" placeholder="Product Name" value="{{ old('productName') }}">
        @error('productName')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="productPrice" class="form-label">Product Price</label>
        <input type="text" class="form-control @error('productPrice') is-invalid @enderror" id="productPrice" name="productPrice" placeholder="Product Price" value="{{ old('productPrice') }}">
        @error('productPrice')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="productOldPrice" class="form-label">Product Old Price</label>
        <input type="text" class="form-control @error('productOldPrice') is-invalid @enderror" id="productOldPrice" name="productOldPrice" placeholder="Product Old Price" value="{{ old('productOldPrice') }}">
        @error('productOldPrice')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="productColor" class="form-label">Color</label>
        <input type="text" class="form-control @error('productColor') is-invalid @enderror" id="productColor" name="productColor" value="{{ old('productColor') }}">
        @error('productColor')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="productSize" class="form-label">Size</label>
        <input type="text" class="form-control @error('productSize') is-invalid @enderror" id="productSize" name="productSize" value="{{ old('productSize') }}">
        @error('productSize')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="discount" class="form-label">Discount %</label>
        <input type="text" class="form-control @error('discount') is-invalid @enderror" id="discount" name="discount" value="{{ old('discount') }}">
        @error('discount')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ old('stock') }}">
        @error('stock')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="condition" class="form-label">Product Condition</label>
        <select id="condition" name="condition" class="form-select @error('condition') is-invalid @enderror">
            <option value="default" {{ old('condition') == 'default' ? 'selected' : '' }}>Default</option>
            <option value="new" {{ old('condition') == 'new' ? 'selected' : '' }}>New</option>
            <option value="hot" {{ old('condition') == 'hot' ? 'selected' : '' }}>Hot</option>
        </select>
        @error('condition')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="status" class="form-label">Status</label>
        <select id="status" name="status" class="form-select @error('status') is-invalid @enderror">
            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
        @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="productCategory" class="form-label">Product Category</label>
        <select id="productCategory" name="cat_id" class="form-select @error('cat_id') is-invalid @enderror">
        @foreach($categery as $data)
            <option value='{{$data->id}}' {{ old('cat_id') == 1 ? 'selected' : '' }}>{{$data->name}}</option>
        @endforeach
        </select>
        @error('cat_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="productDescription" class="form-label">Product Description</label>
        <textarea class="form-control @error('productDescription') is-invalid @enderror" id="productDescription" name="productDescription" placeholder="Product Description ..." rows="3">{{ old('productDescription') }}</textarea>
        @error('productDescription')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="mainImage" class="form-label">Main Image</label>
        <input type="file" class="form-control @error('mainImage') is-invalid @enderror" id="mainImage" name="mainImage">
        @error('mainImage')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="subImages" class="form-label">Sub Images</label>
        <input type="file" class="form-control @error('subImages.*') is-invalid @enderror" id="subImages" name="subImages[]" multiple>
        @error('subImages.*')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-12">
        <div class="d-md-flex d-grid align-items-center gap-3">
            <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
            <button type="reset" class="btn btn-grd-royal px-4">Reset</button>
        </div>
    </div>
</form>


                 </div>
              </div>
          </div> 
         <div class="col-12 col-lg-4">             
                <div class="card">
                  <div class="card-body">
                    <h5 class="mb-3">Variants</h5>
                    <div class="row g-3">
                      <div class="col-12">
                        <label for="Brand" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="Brand" placeholder="Brand">
                       </div>
                      <div class="col-12">
                        <label for="SKU" class="form-label">SKU</label>
                        <input type="text" class="form-control" id="SKU" placeholder="SKU">
                       </div>
                       <div class="col-12">
                        <label for="Color" class="form-label">Color</label>
                        <input type="text" class="form-control" id="Color" placeholder="Color">
                       </div>
                       <div class="col-12">
                        <label for="Size" class="form-label">Size</label>
                        <input type="text" class="form-control" id="Size" placeholder="Size">
                       </div>
                        <div class="col-12">
                          <div class="d-grid">
                            <button type="button" class="btn btn-primary">Add Variants</button>
                          </div>
                        </div>
                      </div>
                  </div>
                 </div>
              </div>               
          
         </div><!--end row-->
    </div>
  </main>
  <!--end main wrapper-->



@endsection