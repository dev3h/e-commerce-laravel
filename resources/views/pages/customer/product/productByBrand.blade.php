@extends('customer_layout')
@push('sidebar')
    @include('layouts.customer.sidebar')
@endpush
@section('content')
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Thương hiệu {{ $brand_product_name }}</h2>
        @if (count($products) > 0)
            @foreach ($products as $product)
                <a href="{{route('customer.product_detail', $product->id)}}">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('uploads/products/' . $product->image) }}" alt="" />
                                    <h2>{{ number_format($product->price) }}</h2>
                                    <p>{{ $product->name }}</p>
                                    <a href="#" class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @else
            <h3>Không có sản phẩm nào</h3>
        @endif

    </div>
    <!--features_items-->
@endsection
