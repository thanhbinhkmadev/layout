@foreach ($post_category as $news)
    <div class="news-post article-post">
        <div class="row">
            <div class="col-sm-5">
                <div class="post-gallery">
                    <img alt="{{$news['title']}}" data-src="{{$news['image']}}" class="lazyload"/>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="post-content">
                    <h2><a href="/{{$news['slug']}}">{{$news['title']}}</a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i>{{$news['time']}}</li>
                        <li><i class="fa fa-user"></i>by <a href="#">{{$news['author']}}</a></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                        <li><i class="fa fa-eye"></i>872</li>
                    </ul>
                    <p>{{$news['meta_description']}}</p>
                    <a href="/{{$news['slug']}}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                </div>
            </div>
        </div>
    </div>
@endforeach

