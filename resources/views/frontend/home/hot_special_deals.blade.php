@php
    $hot_deals = App\Models\Product::where('hot_deals', 1)
        ->where('discount_price', '!=', null)
        ->orderBy('id', 'DESC')
        ->limit(3)
        ->get();
@endphp


<section class="section-padding mb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp"
                data-wow-delay="0">
                <h4 class="section-title style-1 mb-30 animated animated"> Hot Deals </h4>
                <div class="product-list-small animated animated">


                    @foreach ($hot_deals as $item)
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}"><img
                                        src="{{ asset($item->product_thumbnail) }}" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a
                                        href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}">{{ $item->product_name }}</a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                @if ($item->discount_price == null)
                                    <div class="product-price">
                                        <span>${{ $item->selling_price }}</span>

                                    </div>
                                @else
                                    <div class="product-price">
                                        <span>${{ $item->discount_price }}</span>
                                        <span class="old-price">${{ $item->selling_price }}</span>
                                    </div>
                                @endif
                            </div>
                        </article>
                    @endforeach

                </div>
            </div>


            @php
                $special_offer = App\Models\Product::where('special_offer', 1)
                    ->orderBy('id', 'DESC')
                    ->limit(3)
                    ->get();
            @endphp

            <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp"
                data-wow-delay=".1s">
                <h4 class="section-title style-1 mb-30 animated animated"> Special Offer </h4>
                <div class="product-list-small animated animated">


                    @foreach ($special_offer as $item)
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}"><img
                                        src="{{ asset($item->product_thumbnail) }}" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}">{{ $item->product_name }}
                                    </a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                @if ($item->discount_price == null)
                                    <div class="product-price">
                                        <span>${{ $item->selling_price }}</span>

                                    </div>
                                @else
                                    <div class="product-price">
                                        <span>${{ $item->discount_price }}</span>
                                        <span class="old-price">${{ $item->selling_price }}</span>
                                    </div>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>


            @php
                $new = App\Models\Product::where('status', 1)
                    ->orderBy('id', 'DESC')
                    ->limit(3)
                    ->get();

            @endphp
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp"
                data-wow-delay=".2s">
                <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                <div class="product-list-small animated animated">
                    @foreach ($new as $item)
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}"><img
                                        src="{{ asset($item->product_thumbnail) }}" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}">
                                        {{ $item->product_name }} </a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                @if ($item->discount_price == null)
                                    <div class="product-price">
                                        <span>${{ $item->selling_price }}</span>

                                    </div>
                                @else
                                    <div class="product-price">
                                        <span>${{ $item->discount_price }}</span>
                                        <span class="old-price">${{ $item->selling_price }}</span>
                                    </div>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>



            @php
                $special_deals = App\Models\Product::where('special_deals', 1)
                    ->orderBy('id', 'DESC')
                    ->limit(3)
                    ->get();
            @endphp
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp"
                data-wow-delay=".3s">
                <h4 class="section-title style-1 mb-30 animated animated"> Special Deals </h4>
                <div class="product-list-small animated animated">

                    @foreach ($special_deals as $item)
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}"><img
                                        src="{{ asset($item->product_thumbnail) }}" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}">
                                        {{ $item->product_name }} </a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                @if ($item->discount_price == null)
                                    <div class="product-price">
                                        <span>${{ $item->selling_price }}</span>

                                    </div>
                                @else
                                    <div class="product-price">
                                        <span>${{ $item->discount_price }}</span>
                                        <span class="old-price">${{ $item->selling_price }}</span>
                                    </div>
                                @endif
                            </div>
                        </article>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
