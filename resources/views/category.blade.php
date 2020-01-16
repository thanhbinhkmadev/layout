@extends('home')
@section('page-title', $cate_name)
@section('page', 'category')
@section('main')
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 category-list post-list">
                    <div class="block-content">
                        <!-- Start latest-post Area -->
                        <div class="latest-post-wrap">
                            <h4 class="cat-title">{{$cate_name}}</h4>

                            @foreach ($list_category as $news)
                                <div class="single-latest-post row align-items-center">
                                    <div class="col-lg-5 post-left">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="lazyload img-fluid" data-src="{{$news['image']}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li>
                                                <a href="{{url('/')}}/{{$cat_slug}}">{{$cate_name}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7 post-right">
                                        <a href="{{url('/')}}/{{$news['slug']}}">
                                            <h4>{{$news['title']}}</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="fa fa-user-o"></span>{{$news['domain']}}</a>
                                            </li>
                                            <li><a href="#"><span class="fa fa-calendar"></span>{{$news['time']}}
                                                </a></li>
                                            <li><a href="#"><span class="fa fa-commenting-o"></span>0 Comments</a></li>
                                        </ul>
                                        <p class="excert">
                                            {{$news['description']}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <?php
                        $count_s = count($list_category);
                        if ($count_s > 10) {
                        ?>
                        <div class="col-xs-12 pagination text-center">
                            <button class="btn btn-loadmore show" id="bt_loadmore" data-page="1"
                                    data-total="{{$total_page}}" data-type="@yield('page')">
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
                        <?php }?>
                    </div>

                </div>

                <div class="col-lg-4">
                    @include("sidebar");
                </div>
            </div>

        </div>
    </section>
@endsection