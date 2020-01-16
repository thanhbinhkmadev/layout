@extends('home')
@section('page-title', $blogtitle)
@section('page', 'home')
@section('main')
    <!-- End heading-news-section -->
    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row small-gutters">
                    <div class="col-lg-8 col-xs-8 top-post-left">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <?php
                            $thumb = $heading_news[0]['image'];
                            list($width, $height) = getimagesize($heading_news[0]['image_raw']);
                            if($width>=800){
                                $image = str_replace('300', '800', $thumb);
                            }else{
                                $image = $heading_news[0]['image_raw'];
                            }
                            ?>
                            <div class="thumbnail">
                                <img class="lazyload img-fluid" data-src="{{$image}}" alt="">
                            </div>

                        </div>
                        <div class="top-post-details">
                            <ul class="tags">
                                <li>
                                    <a href="{{url('/')}}/{{$heading_news[0]['category_slug']}}">{{$heading_news[0]['category_name']}}</a>
                                </li>
                            </ul>
                            <a href="{{url('/')}}/{{$heading_news[0]['slug']}}">
                                <h3>{{$heading_news[0]['title']}}</h3>
                            </a>
                            <ul class="meta">
                                <li><a href="#"><span class="fa fa-user-o"></span> {{$heading_news[0]['domain']}}</a>
                                </li>
                                <li><a href="#"><span class="fa fa-calendar"></span> {{$heading_news[0]['time']}}</a>
                                </li>
                                <li><a href="#"><span class="fa fa-commenting-o"></span> 0 Comments</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-4 top-post-right">
                        <div class="single-top-post">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <?php
                                $thumb = $heading_news[1]['image'];
                                list($width, $height) = getimagesize($heading_news[0]['image_raw']);
                                if($width>=400){
                                    $image = str_replace('300', '400', $thumb);
                                }else{
                                    $image = $heading_news[0]['image_raw'];
                                }
                                ?>
                                <div class="thumbnail">
                                    <img class="lazyload img-fluid" data-src="{{$image}}" alt="">
                                </div>
                            </div>
                            <div class="top-post-details">
                                <ul class="tags">
                                    <li>
                                        <a href="{{url('/')}}/{{$heading_news[1]['category_slug']}}">{{$heading_news[1]['category_name']}}</a>
                                    </li>
                                </ul>
                                <a href="{{url('/')}}/{{$heading_news[1]['slug']}}">
                                    <h4>{{$heading_news[1]['title']}}</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="fa fa-user-o"></span> {{$heading_news[1]['domain']}}</a>
                                    </li>
                                    <li><a href="#"><span class="fa fa-calendar"></span> {{$heading_news[1]['time']}}</a>
                                    </li>
                                    <li><a href="#"><span class="fa fa-commenting-o"></span> 0 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-top-post mt-10">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <?php
                                $thumb = $heading_news[2]['image'];
                                list($width, $height) = getimagesize($heading_news[0]['image_raw']);
                                if($width>=400){
                                    $image = str_replace('300', '400', $thumb);
                                }else{
                                    $image = $heading_news[0]['image_raw'];
                                }
                                ?>
                                <div class="thumbnail">
                                    <img class="lazyload img-fluid" data-src="{{$image}}" alt="">
                                </div>
                            </div>
                            <div class="top-post-details">
                                <ul class="tags">
                                    <li>
                                        <a href="{{url('/')}}/{{$heading_news[1]['category_slug']}}">{{$heading_news[2]['category_name']}}</a>
                                    </li>
                                </ul>
                                <a href="{{url('/')}}/{{$heading_news[2]['slug']}}">
                                    <h4>{{$heading_news[2]['title']}}</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="fa fa-user-o"></span> {{$heading_news[2]['domain']}}</a>
                                    </li>
                                    <li><a href="#"><span class="fa fa-calendar"></span> {{$heading_news[2]['time']}}</a>
                                    </li>
                                    <li><a href="#"><span class="fa fa-commenting-o"></span> 0 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <div class="news-tracker-wrap">
                            <h6><span>Breaking News:</span>
                                <marquee>
                                    @foreach ($heading_news as $news)
                                        <span class="time-news">{{$news['time']}}</span> <a
                                                href="{{url('/')}}/{{$news['slug']}}">{{$news['title']}}</a>
                                    @endforeach
                                </marquee>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End top-post Area -->

        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">
                        <!-- Start latest-post Area -->
                        <div class="latest-post-wrap">
                            <div class="wrap-content">
                                <h4 class="cat-title">Latest News</h4>

                                @foreach ($heading_news as $news)
                                    <div class="single-latest-post row align-items-center">
                                        <div class="col-lg-5 post-left">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="lazyload img-fluid" data-src="{{$news['image']}}" alt="">
                                            </div>
                                            <ul class="tags">
                                                <li>
                                                    <a href="{{url('/')}}/{{$news['category_slug']}}">{{$news['category_name']}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7 post-right">
                                            <a href="{{url('/')}}/{{$news['slug']}}">
                                                <h4>{{$news['title']}}</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="fa fa-user-o"></span> {{$news['domain']}}
                                                    </a>
                                                </li>
                                                <li><a href="#"><span
                                                                class="fa fa-calendar"></span> {{$news['time']}}
                                                    </a></li>
                                                <li><a href="#"><span class="fa fa-commenting-o"></span> 0 Comments</a>
                                                </li>
                                            </ul>
                                            <p class="excert">
                                                {{$news['description']}}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if($total_page > $limit)
                                <div class="load-more">
                                    <button class="btn primary-btn btn-loadmore show" id="bt_loadmore" data-page="1"
                                            data-total="{{$total_page}}" data-limit="{{$limit}}"
                                            data-type="@yield('page')">
                                        Load More
                                    </button>
                                    <div class="lds-roller hide">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>

                    <div class="col-lg-4">
                        @include("sidebar")
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection