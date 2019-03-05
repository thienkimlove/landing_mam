<section class="box-news">
    <div class="container">
        <div class="box-header">
            <h2>Tin tức</h2>
        </div>
        <div class="content">
            <div class="row item-feature">

                <div class="col-md-7">
                    @if ($featurePost = $homePosts->shift())
                        <div class="item-big">
                            <a href="{{url($featurePost->slug.'.html')}}" title="{{ $featurePost->name }}">
                                <img src="{{url($featurePost->image)}}" alt="{{ $featurePost->name }}"/>
                            </a>
                            <h3><a href="" title="">{{ $featurePost->name }}</a></h3>
                            <p>{{ $featurePost->desc }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-md-5">

                    <div class="list-item">
                        @if ($secondItems = $homePosts->take(5))
                            @foreach ($secondItems as $post)
                                <div class="item">
                                    <a href="{{url($post->slug.'.html')}}" title="{{ $post->name }}">{{ $post->name }}</a>
                                    <p>{{ $post->desc }}</p>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    @if ($thirdItems = $homePosts->take(2))
                        @foreach ($thirdItems as $post)
                            <div class="item-news">
                                <h3><a href="{{url($post->slug.'.html')}}" title="{{$post->name}}">{{$post->name}}</a></h3>
                                <div class="info">
                                    <div class="thumb">
                                        <a href="{{url($post->slug.'.html')}}" title="{{$post->name}}">
                                            <img src="{{url($post->image)}}" alt="{{$post->name}}"/>
                                        </a>
                                    </div>
                                    <p>{{$post->desc}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="col-md-5">
                    @if ($fourthItems = $homePosts->take(4))
                        @foreach ($fourthItems as $post)
                            <div class="list-item">
                                <div class="item">
                                    <a href="{{url($post->slug.'.html')}}" title="{{$post->name}}">{{$post->name}}</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="{{url('tin-tuc')}}" class="readmore-news" title="">Xem thêm...</a>
                </div>
            </div>
        </div>
        <div class="box-videos">
            <div class="row">
                <div class="col-md-8">
                    @if ($firstVideos = $homeVideos->take(1))
                    @foreach ($firstVideos as $video)
                        <div class="item">
                            <div class="thumb">
                                {!! $video->getCodeByValues(643, 401) !!}
                            </div>
                            <h3><a href="#" title="">{{$video->name}}</a></h3>
                        </div>
                    @endforeach
                    @endif
                        @if ($first2Videos = $homeVideos->take(3))
                            @foreach ($first2Videos as $video)
                                <div class="item">
                                    <div class="thumb">
                                        {!! $video->getCodeByValues(207, 129) !!}
                                    </div>
                                    <h3><a href="#" title="">{{$video->name}}</a></h3>
                                </div>
                            @endforeach
                        @endif

                </div>
                <div class="col-md-4">
                    @if ($secondVideos = $homeVideos->take(2))
                        @foreach ($secondVideos as $video)
                            <div class="item">
                                <div class="thumb">
                                    {!! $video->getCodeByValues(300, 188) !!}
                                </div>
                                <h3><a href="#" title="">{{$video->name}}</a></h3>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="box-review">
            <div class="box-header">
                <h2>Sao review</h2>
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