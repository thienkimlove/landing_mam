<!DOCTYPE html>
<html>
<head>
    <title>{{$meta_title}}</title>
    <meta property="og:title" content="{{$meta_title}}">
    <meta property="og:description" content="{{$meta_desc}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{$meta_url}}">
    <meta property="og:image" content="{{$meta_image}}">
    <meta property="og:site_name" content="{{$meta_title}}">

    <meta name="twitter:card" content="Card">
    <meta name="twitter:url" content="{{$meta_url}}">
    <meta name="twitter:title" content="{{$meta_title}}">
    <meta name="twitter:description" content="{{$meta_desc}}">
    <meta name="twitter:image" content="{{$meta_image}}">


    <meta itemprop="name" content="{{$meta_title}}">
    <meta itemprop="description" content="{{$meta_desc}}">
    <meta itemprop="image" content="{{$meta_image}}">

    <meta name="ABSTRACT" content="{{$meta_desc}}"/>
    <meta http-equiv="REFRESH" content="1200"/>
    <meta name="REVISIT-AFTER" content="1 DAYS"/>
    <meta name="DESCRIPTION" content="{{$meta_desc}}"/>
    <meta name="KEYWORDS" content="{{$meta_keywords}}"/>
    <meta name="ROBOTS" content="index,follow"/>
    <meta name="AUTHOR" content="{{$meta_title}}"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="COPYRIGHT" content="Copyright 2013 by Goethe"/>
    <meta name="Googlebot" content="index,follow,archive" />
    <meta name="RATING" content="GENERAL"/>

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('frontend/css/lightslider.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('frontend/css/responsive.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{url('frontend/js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{url('frontend/js/lightslider.js')}}" type="text/javascript"></script>
    <script src="{{url('frontend/js/script.js')}}" type="text/javascript"></script>
</head>
<body>
<header>
    <button class="show-menu-mobile"></button>
    <div class="container">
        <div class="logo">
            <a href="" title="">
                <img src="{{url('frontend/images/logo.png')}}" alt=""/>
            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{url('/')}}" title="Trang chủ">Trang chủ</a></li>
                <li><a href="{{url('tin-tuc')}}" title="Tin tức">Tin tức</a></li>
                <li><a href="{{url('lien-he')}}" title="Liên hệ">Liên hệ</a></li>
                <li><a href="#" title="Mua hàng">Mua hàng</a></li>
                <li><span class="hotline">Hotline: : 0934.35.35.87</span></li>
            </ul>
        </div>
    </div>
</header>



@yield('content')




<section class="box-tag">
    <div class="container">
        <a href="#" title="">Mầm đậu nành nguyên xơ Hoa Xuân</a>
        <a href="#" title="">Mầm đậu nành Hoa Xuân sâm tố nữ</a>
        <a href="#" title="">Uống trắng da White+</a>
    </div>
</section>
<footer>
    <div class="container">
        <p>
            <a href="" title="">
                <img src="{{url('frontend/images/logo.png')}}" alt=""/>
            </a>
        </p>
        <div class="content">
            <p>Công ty TNHH Đầu tư Thương mại & Dịch vụ Vạn Thịnh Phát</p>
            <p>Địa chỉ: 1506CT1 Bắc Hà, Mỗ Lao, Hà Đông, Hà Nội</p>
            <p class="sm">Copyright NicdarkThemes.com 2016</p>
        </div>
    </div>
</footer>
</body>
</html>
