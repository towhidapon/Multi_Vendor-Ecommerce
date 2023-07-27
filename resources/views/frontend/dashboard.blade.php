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




















    <section class="section-padding mb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp"
                    data-wow-delay="0">
                    <h4 class="section-title style-1 mb-30 animated animated"> Hot Deals </h4>
                    <div class="product-list-small animated animated">
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-1.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">Nestle Original Coffee-Mate Coffee
                                        Creamer</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-2.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">Nestle Original Coffee-Mate Coffee
                                        Creamer</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-3.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">Nestle Original Coffee-Mate Coffee
                                        Creamer</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".1s">
                    <h4 class="section-title style-1 mb-30 animated animated"> Special Offer </h4>
                    <div class="product-list-small animated animated">
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-4.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">Organic Cage-Free Grade A Large Brown
                                        Eggs</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-5.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">Seeds of Change Organic Quinoa, Brown, & Red
                                        Rice</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-6.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">Naturally Flavored Cinnamon Vanilla Light
                                        Roast Coffee</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp"
                    data-wow-delay=".2s">
                    <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                    <div class="product-list-small animated animated">
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-7.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">Pepperidge Farm Farmhouse Hearty White
                                        Bread</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-8.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">Organic Frozen Triple Berry Blend</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-9.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">Oroweat Country Buttermilk Bread</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp"
                    data-wow-delay=".3s">
                    <h4 class="section-title style-1 mb-30 animated animated"> Special Deals </h4>
                    <div class="product-list-small animated animated">
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-10.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">Foster Farms Takeout Crispy Classic Buffalo
                                        Wings</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-11.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty Kettle
                                        Corn</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-12.jpg"
                                        alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="shop-product-right.html">All Natural Italian-Style Chicken
                                        Meatballs</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-price">
                                    <span>$32.85</span>
                                    <span class="old-price">$33.8</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End 4 columns-->









    <!--Vendor List -->

    <div class="container">

        <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
            <h3 class="">All Our Vendor List </h3>
            <a class="show-all" href="shop-grid-right.html">
                All Vendors
                <i class="fi-rs-angle-right"></i>
            </a>
        </div>


        <div class="row vendor-grid">
            <div class="col-lg-3 col-md-6 col-12 col-sm-6 justify-content-center">
                <div class="vendor-wrap mb-40">
                    <div class="vendor-img-action-wrap">
                        <div class="vendor-img">
                            <a href="vendor-details-1.html">
                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/vendor/vendor-1.png" alt="" />
                            </a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="hot">Mall</span>
                        </div>
                    </div>
                    <div class="vendor-content-wrap">
                        <div class="d-flex justify-content-between align-items-end mb-30">
                            <div>
                                <div class="product-category">
                                    <span class="text-muted">Since 2012</span>
                                </div>
                                <h4 class="mb-5"><a href="vendor-details-1.html">Nature Food</a></h4>
                                <div class="product-rate-cover">

                                    <span class="font-small total-product">380 products</span>
                                </div>
                            </div>

                        </div>
                        <div class="vendor-info mb-30">
                            <ul class="contact-infor text-muted">

                                <li><img src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-contact.svg"
                                        alt="" /><strong>Call Us:</strong><span>(+91) -
                                        540-025-124553</span></li>
                            </ul>
                        </div>
                        <a href="vendor-details-1.html" class="btn btn-xs">Visit Store <i
                                class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!--end vendor card-->
            <div class="col-lg-3 col-md-6 col-12 col-sm-6 justify-content-center">
                <div class="vendor-wrap mb-40">
                    <div class="vendor-img-action-wrap">
                        <div class="vendor-img">
                            <a href="vendor-details-1.html">
                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/vendor/vendor-2.png" alt="" />
                            </a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="hot">Mall</span>
                        </div>
                    </div>
                    <div class="vendor-content-wrap">
                        <div class="d-flex justify-content-between align-items-end mb-30">
                            <div>
                                <div class="product-category">
                                    <span class="text-muted">Since 2012</span>
                                </div>
                                <h4 class="mb-5"><a href="vendor-details-1.html">Nature Food</a></h4>
                                <div class="product-rate-cover">

                                    <span class="font-small total-product">380 products</span>
                                </div>
                            </div>

                        </div>
                        <div class="vendor-info mb-30">
                            <ul class="contact-infor text-muted">

                                <li><img src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-contact.svg"
                                        alt="" /><strong>Call Us:</strong><span>(+91) -
                                        540-025-124553</span></li>
                            </ul>
                        </div>
                        <a href="vendor-details-1.html" class="btn btn-xs">Visit Store <i
                                class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!--end vendor card-->
            <div class="col-lg-3 col-md-6 col-12 col-sm-6 justify-content-center">
                <div class="vendor-wrap mb-40">
                    <div class="vendor-img-action-wrap">
                        <div class="vendor-img">
                            <a href="vendor-details-1.html">
                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/vendor/vendor-3.png" alt="" />
                            </a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="hot">Mall</span>
                        </div>
                    </div>
                    <div class="vendor-content-wrap">
                        <div class="d-flex justify-content-between align-items-end mb-30">
                            <div>
                                <div class="product-category">
                                    <span class="text-muted">Since 2012</span>
                                </div>
                                <h4 class="mb-5"><a href="vendor-details-1.html">Nature Food</a></h4>
                                <div class="product-rate-cover">

                                    <span class="font-small total-product">380 products</span>
                                </div>
                            </div>

                        </div>
                        <div class="vendor-info mb-30">
                            <ul class="contact-infor text-muted">

                                <li><img src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-contact.svg"
                                        alt="" /><strong>Call Us:</strong><span>(+91) -
                                        540-025-124553</span></li>
                            </ul>
                        </div>
                        <a href="vendor-details-1.html" class="btn btn-xs">Visit Store <i
                                class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!--end vendor card-->
            <div class="col-lg-3 col-md-6 col-12 col-sm-6 justify-content-center">
                <div class="vendor-wrap mb-40">
                    <div class="vendor-img-action-wrap">
                        <div class="vendor-img">
                            <a href="vendor-details-1.html">
                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/vendor/vendor-4.png" alt="" />
                            </a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="hot">Mall</span>
                        </div>
                    </div>
                    <div class="vendor-content-wrap">
                        <div class="d-flex justify-content-between align-items-end mb-30">
                            <div>
                                <div class="product-category">
                                    <span class="text-muted">Since 2012</span>
                                </div>
                                <h4 class="mb-5"><a href="vendor-details-1.html">Nature Food</a></h4>
                                <div class="product-rate-cover">

                                    <span class="font-small total-product">380 products</span>
                                </div>
                            </div>

                        </div>
                        <div class="vendor-info mb-30">
                            <ul class="contact-infor text-muted">

                                <li><img src="{{ asset('frontend') }}/assets/imgs/theme/icons/icon-contact.svg"
                                        alt="" /><strong>Call Us:</strong><span>(+91) -
                                        540-025-124553</span></li>
                            </ul>
                        </div>
                        <a href="vendor-details-1.html" class="btn btn-xs">Visit Store <i
                                class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <!--end vendor card-->

        </div>
    </div>


    <!--End Vendor List -->





</main>

@endsection
