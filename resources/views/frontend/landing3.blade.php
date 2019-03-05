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
    <link href="{{url('frontend/css/ldg-while-plus.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{url('frontend/js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{url('frontend/js/lightslider.js')}}" type="text/javascript"></script>
    <script src="{{url('frontend/js/ldg-while-plus.js')}}" type="text/javascript"></script>
</head>
<body>
<div class='all-page'>
    <section class="banner">
        <img src="{{url('frontend/images/landingpage-while-plus/banner.jpg')}}" alt=""/>
    </section>
    <section class='box-ldg-1'>
        <div class='container-fluid'>
            <div class='content'>
                <h2>Mọi phụ nữ Việt đều</h2>
                <h3>có vấn đề về làn da</h3>
                <div class='list-item'>
                    <ul>
                        <li>Da sậm màu</li>
                        <li>Da khô</li>
                        <li>Da không đều màu</li>
                        <li>Da nhăn, chảy xệ</li>
                        <li>Da bị nám sạm</li>
                        <li>Da bị mụn, không mịn màng</li>
                        <li>Da nhờn, nhạy cảm – Da yếu</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class='box-ldg-2'>
        <div class='container'>
            <div class='thumb-mobile'>
                <img src="{{url('frontend/images/landingpage-while-plus/bg-box-3.png')}}" alt=""/>
            </div>
            <p>
                <img src="{{url('frontend/images/landingpage-while-plus/logo-while-plus.png')}}" alt=""/>
            </p>
            <h2>Giải pháp không thể thiếu</h2>
            <h3>Vê da của mọi phụ nữ</h3>
            <ul class='list-item'>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  sed do  sed do  sed do </li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  sed do  sed do  sed do </li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  sed do  sed do  sed do </li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  sed do  sed do  sed do </li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  sed do  sed do  sed do </li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  sed do  sed do  sed do </li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  sed do  sed do  sed do ß</li>
            </ul>
        </div>
    </section>
    <section class='box-ldg-3'>
        <div class='container'>
            <p>
                <img src="{{url('frontend/images/landingpage-while-plus/img-product.png')}}" alt=""/>
            </p>
            <div class="price">Giá 495,000đ/hộp</div>
            <div class='readmore'>
                <a href='#' title=''></a>
            </div>
            <div class='list-feedback'>
                <ul id='ldg-while-feedback'>
                    <li><img src="{{url('frontend/images/landingpage-while-plus/feedback.jpg')}}" alt=""/></li>
                    <li><img src="{{url('frontend/images/landingpage-while-plus/feedback.jpg')}}" alt=""/></li>
                    <li><img src="{{url('frontend/images/landingpage-while-plus/feedback.jpg')}}" alt=""/></li>
                    <li><img src="{{url('frontend/images/landingpage-while-plus/feedback.jpg')}}" alt=""/></li>
                    <li><img src="{{url('frontend/images/landingpage-while-plus/feedback.jpg')}}" alt=""/></li>
                    <li><img src="{{url('frontend/images/landingpage-while-plus/feedback.jpg')}}" alt=""/></li>
                </ul>
            </div>
        </div>
    </section>
    <section class='box-ldg-4'>
        <div class='container'>
            <div class='thumb-mobile'>
                <img src="{{url('frontend/images/landingpage-while-plus/bg-box-5.jpg')}}" alt=""/>
            </div>
            <div class="content">
                <h2>Thành phần</h2>
                <ul>
                    <li>Glutathinol</li>
                    <li>Collagen</li>
                    <li>Isaflavone</li>
                    <li>Acid Hyaluaronic: </li>
                    <li>Aloe vera extract: </li>
                    <li>Vitamin C 10mg</li>
                    <li>Vitamin E: 20IU</li>
                    <li>L Cystine: 150mg</li>
                    <li>Chiết xuất Dương xỉ </li>
                </ul>
            </div>
        </div>
    </section>
    <section class='box-ldg-5'>
        <div class='container'>
            <div class='content'>
                <h2>Công dụng của Glutathinol </h2>
                <div class='item'>
                    <span>Glutathinone Siêu phẩm trắng da an toàn từ bên trong</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                </div>
                <div class='item'>
                    <span>Glutathinone Siêu phẩm trắng da an toàn từ bên trong</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                </div>
                <div class='item'>
                    <span>Glutathinone Siêu phẩm trắng da an toàn từ bên trong</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                </div>
                <div class='item'>
                    <span>Glutathinone Siêu phẩm trắng da an toàn từ bên trong</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                </div>
                <div class='item'>
                    <span>Glutathinone Siêu phẩm trắng da an toàn từ bên trong</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                </div>
                <div class='item'>
                    <span>Glutathinone Siêu phẩm trắng da an toàn từ bên trong</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                </div>
                <div class='item'>
                    <span>Glutathinone Siêu phẩm trắng da an toàn từ bên trong</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                </div>
                <div class='item'>
                    <span>Glutathinone Siêu phẩm trắng da an toàn từ bên trong</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                </div>
                <div class='item'>
                    <span>Glutathinone Siêu phẩm trắng da an toàn từ bên trong</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                </div>

            </div>
        </div>
    </section>
    <section class='box-ldg-6'>
        <div class='container'>
            <div class="content">
                <h3>Chiết xuất Dương xỉ <br/>thảo dược chống nắng diệu kỳ</h3>
                <p>Các nhà khoa học Mỹ đã nghiên cứu ra tác dụng chống nắng tuyệt vời của cây Dương xỉ. Chiết xuất dương xỉ (Polypodium Leucotomos) là một thành phần thực vật tự nhiên đã được sử dụng trong hơn 30 năm qua như một loại thảo dược giúp điều trị bệnh vẩy nến. Các nghiên cứu gần đây chỉ ra rằng chiết xuất dương xỉ giúp tạo ra các tác dụng siêu bảo vệ có thể giúp làm giảm tổn thương da gây ra bởi việc tiếp xúc quá mức với bức xạ tia cực tím mặt trời (ánh nắng mặt trời). Bằng chứng đáng tin cậy cho thấy rằng chiết xuất từ cây dương xỉ có cả chất chống oxy hóa và chất chống viêm, và những tác dụng này ít nhất cũng góp phần vào hiệu quả bảo vệ da.</p>
            </div>
        </div>
    </section>
    <section class='box-ldg-7'>
        <div class='container'>
            <h2>Quy trình sản xuất</h2>
            <h3>tiêu chuẩn quốc tế <br/>chuẩn GMP</h3>
            <div class='video'>
                <div class="thumb">
                    <img src="{{url('frontend/images/landingpage-while-plus/videos.jpg')}}" alt=""/>
                    <div class="icon-play"></div>
                </div>
            </div>
        </div>
    </section>
    <section class='box-ldg-8'>
        <div class='container'>
            <h2>95% khách hàng</h2>
            <h3>công nhận da trắng mịn căng</h3>
            <h4>ngay sau 1 liệu trình</h4>
            <div class='list-customer'>
                <div class='item item-left'>
                    <div class='thumb'>
                        <img src="{{url('frontend/images/landingpage-while-plus/customer-1.jpg')}}" alt=""/>
                    </div>
                    <div class='info'>
                        <span>Nguyễn Thị Nụ</span>
                        <small>Hải Phỏng – 35 tuổi</small>
                        <p>Da tôi sạm đen đi nhiều sau hai lần sinh nở. Sử dụng White+ đều đặn sau 1 tháng ai cũng khen tôi trẻ đẹp rạng rõ hẳn ra. Giờ đi làm tôi không cần phải sử dụng những lớp trang điểm dày để che đi khuyết điểm nữa rồi”</p>
                    </div>
                </div>
                <div class='item item-right'>
                    <div class='thumb'>
                        <img src="{{url('frontend/images/landingpage-while-plus/customer-1.jpg')}}" alt=""/>
                    </div>
                    <div class='info'>
                        <span>Nguyễn Thị Nụ</span>
                        <small>Hải Phỏng – 35 tuổi</small>
                        <p>Da tôi sạm đen đi nhiều sau hai lần sinh nở. Sử dụng White+ đều đặn sau 1 tháng ai cũng khen tôi trẻ đẹp rạng rõ hẳn ra. Giờ đi làm tôi không cần phải sử dụng những lớp trang điểm dày để che đi khuyết điểm nữa rồi”</p>
                    </div>
                </div>
                <div class='item item-left'>
                    <div class='thumb'>
                        <img src="{{url('frontend/images/landingpage-while-plus/customer-1.jpg')}}" alt=""/>
                    </div>
                    <div class='info'>
                        <span>Nguyễn Thị Nụ</span>
                        <small>Hải Phỏng – 35 tuổi</small>
                        <p>Da tôi sạm đen đi nhiều sau hai lần sinh nở. Sử dụng White+ đều đặn sau 1 tháng ai cũng khen tôi trẻ đẹp rạng rõ hẳn ra. Giờ đi làm tôi không cần phải sử dụng những lớp trang điểm dày để che đi khuyết điểm nữa rồi”</p>
                    </div>
                </div>
            </div>
            <div class='list-screen-feedback'>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{url('frontend/images/landingpage-while-plus/facebook-feedback-1.jpg')}}" alt=""/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{url('frontend/images/landingpage-while-plus/facebook-feedback-1.jpg')}}" alt=""/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{url('frontend/images/landingpage-while-plus/facebook-feedback-1.jpg')}}" alt=""/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{url('frontend/images/landingpage-while-plus/facebook-feedback-1.jpg')}}" alt=""/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{url('frontend/images/landingpage-while-plus/facebook-feedback-1.jpg')}}" alt=""/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{url('frontend/images/landingpage-while-plus/facebook-feedback-1.jpg')}}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class='logo-sologan'>
                <p>
                    <img src="{{url('frontend/images/landingpage-while-plus/log-footer.png')}}" alt=""/>
                </p>
            </div>
            <div class='product'>
                <p>
                    <img src="{{url('frontend/images/landingpage-while-plus/img-product.png')}}" alt=""/>
                </p>
                <div class='price'>Giá 495,000đ/hộp</div>
                <div class='readmore'>
                    <a href='{{url('lien-he')}}' title='Xem thêm'></a>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
