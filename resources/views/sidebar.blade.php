<!-- sidebar -->
<div class="sidebar">
    <div class="sidebars-area">
        <?php
            foreach ($socials_link as $social){
                $option_name = $social->option_name;
                if(strpos($option_name,'facebook')){
                    $social_facebook = $social->value;
                }
                if(strpos($option_name,'twitter')){
                    $social_twitter = $social->value;
                }
                if(strpos($option_name,'youtube')){
                    $social_youtube = $social->value;
                }
                if(strpos($option_name,'linkedin')){
                    $social_linkedin = $social->value;
                }
            }
        ?>
        <div class="single-sidebar-widget social-network-widget">
            <h6 class="title">Social Networks</h6>
            <ul class="social-list">
                <li class="d-flex justify-content-between align-items-center fb">
                    <div class="icons d-flex flex-row align-items-center">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <p>983 Likes</p>
                    </div>
                    <a href="{{$social_facebook}}">Like our page</a>
                </li>
                <li class="d-flex justify-content-between align-items-center tw">
                    <div class="icons d-flex flex-row align-items-center">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <p>983 Followers</p>
                    </div>
                    <a href="{{$social_twitter}}">Follow Us</a>
                </li>
                <li class="d-flex justify-content-between align-items-center yt">
                    <div class="icons d-flex flex-row align-items-center">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        <p>983 Subscriber</p>
                    </div>
                    <a href="{{$social_youtube}}">Subscribe</a>
                </li>
                <li class="d-flex justify-content-between align-items-center rs">
                    <div class="icons d-flex flex-row align-items-center">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        <p>983 Subscribe</p>
                    </div>
                    <a href="{{$social_linkedin}}">Subscribe</a>
                </li>
            </ul>
        </div>

        <div class="single-sidebar-widget editors-pick-widget">
            <h6 class="title">Editor’s Pick</h6>
            <div class="editors-pick-post">
                <div class="feature-img-wrap relative">
                    <div class="feature-img relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="lazyload img-fluid" data-src="{{$random_news[0]['image']}}" alt="">
                    </div>
                    <ul class="tags">
                        <li><a href="/{{$random_news[0]['category_slug']}}">{{$random_news[0]['category_name']}}</a>
                        </li>
                    </ul>
                </div>

                <div class="details">
                    <a href="/{{$random_news[0]['slug']}}">
                        <h4 class="mt-20">{{$random_news[0]['title']}}</h4>
                    </a>
                    <ul class="meta">
                        <li><a href="#"><span class="fa fa-user-o"></span> {{$random_news[0]['domain']}}</a></li>
                        <li><a href="#"><span class="fa fa-calendar"></span> {{$random_news[0]['time']}}</a></li>
                        <li><a href="#"><span class="fa fa-commenting-o"></span> 0 Comments</a></li>
                    </ul>
                    <p class="excert">
                        {{$random_news[0]['description']}}
                    </p>
                </div>

                <div class="post-lists">

                    @foreach($random_news as $news)
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <?php
                                $image = $news['image'];
                                $image = str_replace('300', '100', $image);
                                ?>
                                <img data-src="{{$image}}" class="lazyload" alt="">
                            </div>
                            <div class="detail">
                                <a href="/{{$news['slug']}}">
                                    <h6>{{$news['title']}}</h6>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="fa fa-calendar"></span> {{$news['time']}}
                                        </a></li>
                                    <li><a href="#"><span class="fa fa-commenting-o"></span> 0 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End sidebar -->