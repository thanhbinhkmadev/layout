@foreach ($post_news as $news)
    <div class="single-latest-post row align-items-center">
        <div class="col-lg-5 post-left">
            <div class="feature-img relative">
                <div class="overlay overlay-bg"></div>
                <img class="img-fluid" src="{{$news['image']}}" alt="">
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
                <li><a href="#"><span class="fa fa-user-o"></span> {{$news['domain']}}</a>
                </li>
                <li><a href="#"><span class="fa fa-calendar"></span> {{$news['time']}}
                    </a></li>
                <li><a href="#"><span class="fa fa-commenting-o"></span> 0 Comments</a></li>
            </ul>
            <p class="excert">
                {{$news['description']}}
            </p>
        </div>
    </div>
@endforeach
