@extends('frontend.layout.master')
@section('panel')
    <!-- Quick view -->
    @include('frontend.partial.quickview')
    <!-- Header  -->
    @include('frontend.partial.header')

    <!-- End Header  -->

    @include('frontend.partial.menu')
    <!--End header-->

    @yield('content')

    @include('frontend.partial.footer')

@endsection
