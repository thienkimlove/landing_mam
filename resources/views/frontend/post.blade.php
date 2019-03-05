@extends('frontend.layout')

@section('content')
    <section class="box-news-detail">
        <div class="container">
            <div class="box-breadcrum">
                <a href="{{url('/')}}" title="Trang chủ">Trang chủ</a><i>›</i>
                <a href="{{url('tin-tuc')}}" title="Tin tức">Tin tức</a><i>›</i>
                <a href="{{url($mainPost->slug.'.html')}}" title="{{$mainPost->name}}">{{$mainPost->name}}</a>

            </div>
            <div class="content">
                <h1>{{$mainPost->name}}</h1>
                <time>{{$mainPost->updated_at->format('l jS \\of F Y')}}</time>
                <div class="sapo">{{$mainPost->desc}}</div>
                <article>
                    {!! $mainPost->content !!}
                </article>
                {{--<div class="author">
                    <span>Theo Bảo Thanh (Khám phá)</span>
                </div>--}}
                <div class="share">
                    <a href=""><img src="{{url('frontend/images/share/icon-tw.png')}}" alt=""/></a>
                    <a href=""><img src="{{url('frontend/images/share/facebook.png')}}" alt=""/></a>
                    <a href=""><img src="{{url('frontend/images/share/google-plus.png')}}" alt=""/></a>
                    <a href=""><img src="{{url('frontend/images/share/icon-rss.png')}}" alt=""/></a>
                </div>
            </div>

        </div>
    </section>
    <section class="box-related-news">
        <div class="container">
            <div class="box-review">
                <div class="box-header">
                    <h2>Tin liên quan</h2>
                </div>
                <div class="list-item">
                    <ul id="review">
                        <li>
                            <a href="" title="">
                                <img src="{{url('frontend/images/review/review-1.jpg')}}" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                                <img src="{{url('frontend/images/review/review-2.jpg')}}" alt=""/>
                            </a>
                        </li>
                    </ul>
                    <div onClick="prevSlide();" class="control control-prev"></div>
                    <div onClick="nextSlide();" class="control control-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-hot">
        <div class="container">
            <h2>Tin hay đừng bỏ lỡ</h2>

            <div class="box-news">
                <div class="content">
                    <div class="row">
                        <div class="col-md-6">
                            @if ($firstHots = $hotNews->take(5))
                            <div class="list-item">
                                @foreach ($firstHots as $hot)
                                    <div class="item">
                                        <a href="{{$hot->slug.'.html'}}" title="{{$hot->name}}">{{$hot->name}}</a>
                                    </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            @if ($secondHots = $hotNews->take(5))
                                <div class="list-item">
                                    @foreach ($secondHots as $hot)
                                        <div class="item">
                                            <a href="{{$hot->slug.'.html'}}" title="{{$hot->name}}">{{$hot->name}}</a>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{url('tin-tuc')}}" class="readmore-news" title="">Xem thêm...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection