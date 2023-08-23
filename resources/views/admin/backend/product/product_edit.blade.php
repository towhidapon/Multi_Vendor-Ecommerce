@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Edit Product</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Edit Product</h5>
                    <hr />

                    <form id="myForm" method="post" action="{{ route('update.product') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $products->id }}">

                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="border border-3 p-4 rounded">


                                        <div class="form-group mb-3">
                                            <label for="inputProductTitle" class="form-label">Product Name</label>
                                            <input type="text" name="product_name" class="form-control"
                                                id="inputProductTitle" value="{{ $products->product_name }}"
                                                placeholder="Enter product title">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="inputProductTitle" class="form-label">Product Tags</label>
                                            <input type="text" name="product_tags" class="form-control visually-hidden"
                                                data-role="tagsinput" value="{{ $products->product_tags }}">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="inputProductTitle" class="form-label">Product Size</label>
                                            <input type="text" name="product_size" class="form-control visually-hidden"
                                                data-role="tagsinput" value="{{ $products->product_size }}">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="inputProductTitle" class="form-label">Product Color</label>
                                            <input type="text" name="product_color" class="form-control visually-hidden"
                                                data-role="tagsinput" value="{{ $products->product_color }}">
                                        </div>



                                        <div class="form-group mb-3">
                                            <label for="inputProductDescription" class="form-label">Short
                                                Description</label>
                                            <textarea name="short_descp" class="form-control" id="inputProductDescription" rows="3" value="">
                                                {{ $products->short_descp }}
                                                </textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="inputProductDescription" class="form-label">Long Description</label>
                                            <textarea id="mytextarea" name="long_descp" value="">{{ $products->long_descp }}</textarea>
                                        </div>






                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="inputPrice" class="form-label">Product Price</label>
                                                <input type="text" name="selling_price" class="form-control"
                                                    id="inputPrice" placeholder="00.00"
                                                    value="{{ $products->selling_price }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputCompareatprice" class="form-label">Discount Price </label>
                                                <input type="text" name="discount_price" class="form-control"
                                                    id="inputCompareatprice" placeholder="00.00"
                                                    value="{{ $products->discount_price }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputCostPerPrice" class="form-label">Product Code</label>
                                                <input type="text" name="product_code" class="form-control"
                                                    id="inputCostPerPrice" placeholder="00.00"
                                                    value="{{ $products->product_code }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputStarPoints" class="form-label">Product Quantity</label>
                                                <input type="text" name="product_qty" class="form-control"
                                                    id="inputStarPoints" placeholder="00.00"
                                                    value="{{ $products->product_qty }}">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputProductType" class="form-label">Product Brand</label>
                                                <select name="brand_id" class="form-select" id="inputProductType">
                                                    <option></option>
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}"
                                                            {{ $brand->id == $products->brand_id ? 'selected' : '' }}>
                                                            {{ $brand->brand_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputVendor" class="form-label">Product Category</label>
                                                <select name="category" class="form-select" id="category">
                                                    <option></option>
                                                    @foreach ($categories as $cat)
                                                        <option value="{{ $cat->id }}"
                                                            {{ $cat->id == $products->category_id ? 'selected' : '' }}>
                                                            {{ $cat->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputCollection" class="form-label">Product
                                                    SubCategory</label>
                                                <select name="subcategory_id" class="form-select" id="subcategory">
                                                    <option></option>
                                                    @foreach ($subcategory as $subcat)
                                                        <option value="{{ $subcat->id }}"
                                                            {{ $subcat->id == $products->subcategory_id ? 'selected' : '' }}>
                                                            {{ $subcat->subcategory_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputCollection" class="form-label">Select Vendor</label>
                                                <select name="vendor_id" class="form-select" id="inputCollection">
                                                    <option></option>
                                                    @foreach ($activeVendor as $vendor)
                                                        <option value="{{ $vendor->id }}"
                                                            {{ $vendor->id == $products->vendor_id ? 'selected' : '' }}>
                                                            {{ $vendor->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">

                                                <div class="row g-3">

                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="hot_deals"
                                                                type="checkbox" value="1" id="flexCheckDefault"
                                                                {{ $products->hot_deals == 1 ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="flexCheckDefault"> Hot
                                                                Deals</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="featured"
                                                                type="checkbox" value="1" id="flexCheckDefault"
                                                                {{ $products->featured == 1 ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="flexCheckDefault">Featured</label>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="special_offer"
                                                                type="checkbox" value="1" id="flexCheckDefault"
                                                                {{ $products->special_offer == 1 ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="flexCheckDefault">Special
                                                                Offer</label>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="special_deals"
                                                                type="checkbox" value="1" id="flexCheckDefault"
                                                                {{ $products->special_deals == 1 ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="flexCheckDefault">Special
                                                                Deals</label>
                                                        </div>
                                                    </div>



                                                </div> <!-- // end row  -->

                                            </div>

                                            <hr>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">Save Product</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </form>
                </div>

                <!-- /// Main Image Thumbnail Update ////// -->

                <div class="page-content">
                    <h6 class="mb-0 text-uppercase">Update Main Image Thumbnail </h6>
                    <hr>
                    <div class="card">
                        <form method="post" action="{{ route('update.product.thumbnail') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $products->id }}">
                            <input type="hidden" name="old_img" value="{{ $products->product_thumbnail }}">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Chose Thumbnail Image </label>
                                    <input name="product_thumbnail" class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label"> </label>
                                    <img src="{{ asset($products->product_thumbnail) }}"
                                        style="width:100px; height:100px">
                                </div>
                                <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                            </div>
                        </form>
                    </div>
                </div>

                <!-- /// End Main Image Thumbnail Update ////// -->


                <!-- /// Update Multi Image  ////// -->

                <div class="page-content">
                    <h6 class="mb-0 text-uppercase">Update Multi Image </h6>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#Sl</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Change Image </th>
                                        <th scope="col">Delete </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <form method="post" action="{{ route('update.product.multiimage') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        @foreach ($multiImgs as $key => $img)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td> <img src="{{ asset($img->photo_name) }}"
                                                        style="width:70; height: 40px;"> </td>
                                                <td> <input type="file" class="form-group"
                                                        name="multi_img[{{ $img->id }}]"> </td>
                                                <td>
                                                    <input type="submit" class="btn btn-primary px-4"
                                                        value="Update Image " />
                                                    <a href="{{ route('product.multiimg.delete', $img->id) }}"
                                                        class="btn btn-danger" id="delete"> Delete </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <!-- /// End Update Multi Image  ////// -->

            </div>

        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#myForm').validate({
                    rules: {
                        product_name: {
                            required: true,
                        },
                        short_descp: {
                            required: true,
                        },
                        product_Thumbnail: {
                            required: true,
                        },
                        multi_img: {
                            required: true,
                        },
                        selling_price: {
                            required: true,
                        },
                        product_code: {
                            required: true,
                        },
                        product_qty: {
                            required: true,
                        },
                        brand_id: {
                            required: true,
                        },
                        category_id: {
                            required: true,
                        },
                        subcategory_id: {
                            required: true,
                        },
                    },
                    messages: {
                        product_name: {
                            required: 'Please Enter Product Name',
                        },
                        short_descp: {
                            required: 'Please Enter Short Description',
                        },
                        product_thumbnail: {
                            required: 'Please Select Product Thumbnail Image',
                        },
                        multi_img: {
                            required: 'Please Select Product Multi Image',
                        },
                        selling_price: {
                            required: 'Please Enter Selling Price',
                        },
                        product_code: {
                            required: 'Please Enter Product Code',
                        },
                        product_qty: {
                            required: 'Please Enter Product Quantity',
                        },
                    },
                    errorElement: 'span',
                    errorPlacement: function(error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    },
                });
            });
        </script>

        <script type="text/javascript">
            function mainThumUrl(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#mainThmb').attr('src', e.target.result).width(80).height(80);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>


        <script>
            $(document).ready(function() {
                $('#multiImg').on('change', function() { //on file input change
                    if (window.File && window.FileReader && window.FileList && window
                        .Blob) //check File API supported browser
                    {
                        var data = $(this)[0].files; //this file data

                        $.each(data, function(index, file) { //loop though each file
                            if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                                    .type)) { //check supported file type
                                var fRead = new FileReader(); //new filereader
                                fRead.onload = (function(file) { //trigger function on successful read
                                    return function(e) {
                                        var img = $('<img/>').addClass('thumb').attr('src',
                                                e.target.result).width(100)
                                            .height(80); //create image element
                                        $('#preview_img').append(
                                            img); //append image to output element
                                    };
                                })(file);
                                fRead.readAsDataURL(file); //URL representing the file's data.
                            }
                        });

                    } else {
                        alert("Your browser doesn't support File API!"); //if File API is absent
                    }
                });
            });
        </script>

        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                const categorySelect = document.getElementById('category');
                const subcategorySelect = document.getElementById('subcategory');

                categorySelect.addEventListener('change', function() {
                    const categoryId = this.value;
                    if (categoryId) {
                        fetch(`/get-subcategories/${categoryId}`)
                            .then(response => response.json())
                            .then(data => {
                                subcategorySelect.innerHTML =
                                    '<option value="">Select a Subcategory</option>';
                                data.forEach(subcategory => {
                                    const option = document.createElement('option');
                                    option.value = subcategory.id;
                                    option.innerText = subcategory.subcategory_name;
                                    subcategorySelect.appendChild(option);
                                });
                            });
                    } else {
                        alert('danger');
                    }
                });
            });
        </script>
    @endsection
