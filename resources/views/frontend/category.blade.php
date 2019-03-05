@extends('frontend.layout')

@section('content')
    <section class="box-news-list">
        <div class="container">
            <div class="box-breadcrum">
                <a href="{{url('/')}}" title="Trang chủ">Trang chủ</a><i>›</i>
                <a href="{{url('tin-tuc')}}" title="Tin tức">Tin tức</a>
            </div>
            <h1>Tin tức</h1>
            <div class="list-item">
                @if ($firstPost = $posts->shift())
                <div class="item-big">
                    <div class="img">
                        <a href="">
                            <img src="{{$firstPost->image}}" alt=""/>
                        </a>
                    </div>
                    <h3><a href="{{url($firstPost->slug.'.html')}}" title="{{$firstPost->name}}">{{$firstPost->name}}</a></h3>
                    <p>{{$firstPost->desc}}</p>
                </div>
                @endif


                @foreach ($posts as $post)
                    <div class="item-sm">
                    <div class="thumb">
                        <a href="{{url($post->slug.'.html')}}" title="{{$post->name}}">
                            <img src="{{$post->image}}" alt="{{$post->name}}"/>
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="{{url($post->slug.'.html')}}" title="{{$post->name}}">{{$post->name}}</a></h3>
                        <p>{{$post->desc}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="box-page">
                @include('frontend.pagination', ['paginate' => $posts])
            </div>
        </div>
    </section>
@endsection