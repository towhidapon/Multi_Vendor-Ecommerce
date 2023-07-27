@extends('vendor.layout.master')
@section('panel')

<div class="wrapper">
    <!--sidebar wrapper -->
    @include('vendor.partial.sidebar')
    <!--end sidebar wrapper -->
    <!--start header -->
    @include('vendor.partial.header')
    <!--end header -->
    <!--start page wrapper -->
    @yield('content')
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
            class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    @include('vendor.partial.footer')
</div>

@endsection
