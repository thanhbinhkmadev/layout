@section('page-title', $single_news['title'])
@section('page', 'single')
@include('header')

<section class="latest-post-area pb-120">
    <div class="container no-padding">
        <div class="row">

            <div class="col-lg-8 post-list">
                <!-- block content -->
                <div class="block-content">
                    <!-- single-post box -->
                    <div class="single-post-wrap">
                        @if(!empty($single_news['image']))
                        <div class="feature-img-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="lazyload img-fluid" data-src="{{$single_news['image']}}" alt="">
                        </div>
                        @endif
                        <div class="content-wrap">

                            <ul class="tags mt-10">
                                <li><a href="{{$single_news['category_slug']}}">{{$single_news['category']}}</a></li>
                            </ul>
                            <div class="title-post">
                                <h1 title="{{$single_news['title']}}">{{$single_news['title']}}</h1>
                            </div>

                            <ul class="meta pb-20">
                                <li><a href="#"><span class="fa fa-user-o"></span> {{$single_news['author']}}</a></li>
                                <li><a href="#"><span class="fa fa-calendar"></span> {{$single_news['time']}}</a></li>
                                <li><a href="#"><span class="fa fa-commenting-o"></span> 0</a></li>
                            </ul>

                            <div class="post-content">
                                {!! $single_news['body'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                @include("sidebar")
            </div>

        </div>
    </div>
</section>
@include('footer')

