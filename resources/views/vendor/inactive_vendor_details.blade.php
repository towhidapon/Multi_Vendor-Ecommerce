@extends('vendor.layout.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Inactive Vendor Details</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Inactive Vendor Details</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">

                </div>
            </div>
            <!--end breadcrumb-->
            <div class="container">
                <div class="main-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">



                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">User Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" class="form-control" name="username"
                                                    value="{{ $inactiveVendorDetails->username }}" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Shop Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ $inactiveVendorDetails->name }}" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Vendor Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="email" name="email" class="form-control"
                                                    value="{{ $inactiveVendorDetails->email }}" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Vendor Phone </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="phone" class="form-control"
                                                    value="{{ $inactiveVendorDetails->phone }}" />
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Vendor Address</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="address" class="form-control"
                                                    value="{{ $inactiveVendorDetails->address }}" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Vendor Join</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="vendor_join" class="form-control"
                                                    value="{{ $inactiveVendorDetails->vendor_join }}" />
                                            </div>
                                        </div>




                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Vendor Info</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <textarea name="vendor_short_info" class="form-control" id="inputAddress2" placeholder="Vendor Info " rows="3">
                                                {{ $inactiveVendorDetails->vendor_short_info }}</textarea>
                                            </div>
                                        </div>



                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Vendor Photo</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <img id="showImage"
                                                    src="{{ !empty($inactiveVendorDetails->photo) ? url('vendor/upload/' . $inactiveVendorDetails->photo) : url('vendor/upload/no_image.jpg') }}"
                                                    alt="Vendor" style="width:100px; height: 100px;">
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <a href="{{ route('active.vendor.status', $inactiveVendorDetails->id)}}" class="btn btn-success">Active</a>
                                            </div>
                                        </div>






                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
