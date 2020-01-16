@extends('home')
@section('page-title', 'Search results for '.$key_search)
@section('page', 'category')
@section('main')
    @if(!empty($value_search))
        <?php $count_s = count($value_search);?>
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">
                        <div class="block-content">
                            <div class="latest-post-wrap">
                                <h4 class="cat-title">Search results for {{$key_search}} ({{$count_s}} results)</h4>
                                @if($count_s > 0)
                                    @foreach ($value_search as $news)
                                        <div class="single-latest-post row align-items-center">
                                            <div class="col-lg-5 post-left">
                                                <div class="feature-img relative">
                                                    <div class="overlay overlay-bg"></div>
                                                    <img class="lazyload img-fluid" data-src="{{$news['image']}}"
                                                         alt="">
                                                </div>
                                                <ul class="tags">
                                                    <li>
                                                        <a href="/{{$news['category_slug']}}">{{$news['category_name']}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-7 post-right">
                                                <a href="/{{$news['slug']}}">
                                                    <h4>{{$news['title']}}</h4>
                                                </a>
                                                <ul class="meta">
                                                    <li><a href="#"><span
                                                                    class="fa fa-user-o"></span> {{$news['domain']}}</a>
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
                                @else
                                    <h3 style="color:#fff;text-align: center;">No results for {{$key_search}}</h3>
                                @endif
                            </div>

                            <?php
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
                            <?php
                            }
                            ?>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        @include("sidebar")
                    </div>

                </div>
            </div>
        </section>
    @endif
@endsection