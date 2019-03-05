@extends('frontend.layout')


@section('content')
    <section class="box-slider">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('frontend/images/slider/slider1.jpg')}}" alt=""/>
                </div>
                <div class="carousel-item">
                    <img src="{{url('frontend/images/slider/slider1.jpg')}}" alt=""/>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slider" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slider" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>
    <section class="box-home-fulpage">
        <div class="full-img">
            <img src="{{url('frontend/images/banner-product/banner-product-1.jpg')}}" alt=""/>
        </div>
        <div class="text-link">
            <a href="#" title="Tuyệt phẩm từ thiên nhiên">Tuyệt phẩm <br/>từ thiên nhiên</a>
            <a href="#" title="Giảm khô hạn">Giảm<br/> khô hạn</a>
            <a href="#" title="Tăng kích thước vòng 1">Tăng kích thước<br/> vòng 1</a>
        </div>
        <div class="readmore">
            <a href="{{ url('mam-hoa-xuan.html') }}" title="Xem thêm"></a>
        </div>
    </section>
    <section class="box-home-fulpage">
        <div class="full-img">
            <img src="{{url('frontend/images/banner-product/banner-product-2.jpg')}}" alt=""/>
        </div>
        <div class="readmore readmore-abs">
            <a href="{{ url('sam-to-nu.html') }}" title="Đọc thêm"></a>
        </div>
    </section>
    <section class="box-product-home">
        <div class="container">
            <div class="box-header">
                <h2>Uống trắng da</h2>
                <div class="logo">
                    <img src="{{url('frontend/images/logo-product/while-plus.png')}}" alt=""/>
                </div>
            </div>
            <div class="banner-product">
                <img src="{{url('frontend/images/banner-product/banner-product-3.jpg')}}" alt=""/>
            </div>
            <div class="item-product">
                <div class="thumb">
                    <a href="" title="">
                        <img src="{{url('frontend/images/product/product-1.jpg')}}" alt=""/>
                    </a>
                </div>
                <div class="product-info">
                    <p>Sản phẩm không thể bỏ lỡ của phái đẹp </p>
                    <p class="xc">Trắng, căng, mịn bật tông chỉ sau 1 liệu trình</p>
                    <div class="readmore">
                        <a href="{{ url('white-plus.html') }}" title=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.box_news_homepage')

@endsection