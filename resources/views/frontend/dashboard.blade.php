@extends('frontend.layout.app')
@section('content')

<main class="main">

    @include('frontend.home.home_slider')
    <!--End hero slider-->

    @include('frontend.home.featured_category')
    <!--End category slider-->

    @include('frontend.home.home_banner')
    <!--End banners-->

    @include('frontend.home.new_products')
    <!--Products Tabs-->

    @include('frontend.home.featured_products')
    <!--End Best Sales-->

    <!-- TV Category -->
    @include('frontend.home.tv_category')
    <!--End TV Category -->

    <!-- Tshirt Category -->
    @include('frontend.home.tshirt_category')
    <!--End Tshirt Category -->

    <!-- Computer Category -->
    @include('frontend.home.computer_category')
    <!--End Computer Category -->

    @include('frontend.home.hot_special_deals')



    <!--End 4 columns-->



    <!--Vendor List -->

    @include('frontend.home.home_vendor_list')




    <!--End Vendor List -->





</main>

@endsection
