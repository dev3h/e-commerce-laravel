@extends('customer_layout')
@push('share_facebook')
    <meta property="og:image" content="{{ $facebook_share_img }}" />
    <meta property="og:site_name" content="http://127.0.0.1:8000/" />
    <meta property="og:description" content="{{ $facebook_share_description }}" />
    <meta property="og:title" content="{{ $facebook_share_title }}" />
    <meta property="og:url" content="{{ $facebook_share_url }}" />
    <meta property="og:type" content="website" />
@endpush
@push('sidebar')
    @include('layouts.customer.sidebar')
@endpush
@section('content')
    <div class="product-details">
        <!--product-details-->
        <div class="col-sm-5">
            <div class="view-product">
                <img src="{{ asset('uploads/products/' . $details_product->image) }}" alt="" />
                <h3>ZOOM</h3>
            </div>
            <div id="similar-product" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <a href=""><img src="{{ asset('frontend/images/similar1.jpg') }}" alt=""></a>
                        <a href=""><img src="{{ asset('frontend/images/similar2.jpg') }}" alt=""></a>
                        <a href=""><img src="{{ asset('frontend/images/similar3.jpg') }}" alt=""></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="{{ asset('frontend/images/similar2.jpg') }}" alt=""></a>
                        <a href=""><img src="{{ asset('frontend/images/similar1.jpg') }}" alt=""></a>
                        <a href=""><img src="{{ asset('frontend/images/similar3.jpg') }}" alt=""></a>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left item-control" href="#similar-product" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right item-control" href="#similar-product" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>

        </div>
        <div class="col-sm-7">
            <div class="product-information">
                <!--/product-information-->
                <img src="{{ asset('frontend/images/new.jpg') }}" class="newarrival" alt="" />
                <h2>{{ $details_product->name }}</h2>
                <p>M?? s???n ph???m: {{ $details_product->id }}</p>
                <img src="{{ asset('frontend/images/rating.png') }}" alt="" />
                <span>
                    <span>{{ number_format($details_product->price) }}??</span>
                    <label>S??? l?????ng:</label>
                    {{-- <input name="product_id" type="hidden" value="{{ $details_product->id }}" /> --}}
                    <form class="add-to-cart-form">
                        <input name="qty" class="cart_quantity_input" type="number" min="1" value="1" />
                        <button class="btn btn-fefault cart add-to-cart" value="{{ $details_product->id }}">
                            <i class="fa fa-shopping-cart"></i>
                            Th??m gi??? h??ng
                        </button>
                    </form>
                </span>
                <p><b>T??nh tr???ng:</b> C??n h??ng</p>
                <p><b>??i???u ki???n:</b> M???i 100%</p>
                <p><b>Th????ng hi???u:</b> {{ $details_product->brand_name }}</p>
                <p><b>Danh m???c:</b> {{ $details_product->category_name }}</p>
                {{-- <a href=""><img src="{{ asset('frontend/images/share.png') }}" class="share img-responsive"
                        alt="" /></a> --}}
                <div class="flex-row">
                    <div class="fb-share-button" data-href="{{ $url_canonical }}" data-layout="" data-size=""><a
                            target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?u={{ $url_canonical }}&amp;src=sdkpreparse"
                            class="fb-xfbml-parse-ignore">Chia s???</a></div>
                    <div class="fb-like" data-href="{{ $url_canonical }}" data-width="" data-layout="" data-action=""
                        data-size="" data-share="false"></div>
                </div>
            </div>
            <!--/product-information-->
        </div>
    </div>
    <!--/product-details-->

    <div class="category-tab shop-details-tab">
        <!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#details" data-toggle="tab">M?? t??? s???n ph???m</a></li>
                <li><a href="#companyprofile" data-toggle="tab">Chi ti???t s???n ph???m</a></li>
                <li><a href="#reviews" data-toggle="tab">????nh gi??</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="details">
                <p>{!! $details_product->description !!}</p>
            </div>

            <div class="tab-pane fade" id="companyprofile">
                <p>{!! $details_product->content !!}</p>
            </div>

            <div class="tab-pane fade" id="reviews">
                <div class="col-sm-12">
                    {{-- <ul>
                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.</p>
                    <p><b>Write Your Review</b></p>

                    <form action="#">
                        <span>
                            <input type="text" placeholder="Your Name" />
                            <input type="email" placeholder="Email Address" />
                        </span>
                        <textarea name=""></textarea>
                        <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                        <button type="button" class="btn btn-default pull-right">
                            Submit
                        </button>
                    </form> --}}
                    <div class="fb-comments" data-href="{{ $url_canonical }}" data-width="" data-numposts="5"></div>
                </div>
            </div>

        </div>
    </div>
    <!--/category-tab-->

    <div class="recommended_items">
        <!--recommended_items-->
        <h2 class="title text-center">S???n ph???m li??n quan</h2>

        @if (count($related_products) > 0)
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    {{-- create a count when have three col in div have class is item, create new div class item  --}}
                    @php
                        $count = 0;
                    @endphp
                    @foreach ($related_products as $related)
                        @if ($count % 3 == 0)
                            <div class="item {{ $count == 0 ? 'active' : '' }}">
                        @endif
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('uploads/products/' . $related->image) }}" alt="" />
                                        <h2>{{ number_format($related->price) }}</h2>
                                        <p>{{ $related->name }}</p>
                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Th??m gi??? h??ng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($count % 3 == 2)
                </div>
        @endif
        @php
            $count++;
        @endphp
        @endforeach
    </div>

    {{-- <div class="item active">
            @foreach ($related_products as $related)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{ asset('uploads/products/' . $related->image) }}"
                                    alt="" />
                                <h2>{{ number_format($related->price) }}</h2>
                                <p>{{ $related->name }}</p>
                                <button type="button" class="btn btn-default add-to-cart"><i
                                        class="fa fa-shopping-cart"></i>Th??m gi??? h??ng</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="item">
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ asset('frontend/images/recommend2.jpg') }}" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button type="button" class="btn btn-default add-to-cart"><i
                                    class="fa fa-shopping-cart"></i>Th??m gi??? h??ng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}
    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
    </div>
@else
    <h3>Kh??ng c?? s???n ph???m n??o</h3>
    @endif
    </div>
    <!--/recommended_items-->

    @push('add-to-cart')
        {{-- <script src="{{ asset('frontend/js/ajax/addToCart.js') }}"></script> --}}
        @include('pages.customer.ajaxBlade.addToCart')
    @endpush
@endsection
