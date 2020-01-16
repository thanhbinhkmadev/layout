<!-- footer
			================================================== -->
<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>About us</h4>
                <p>
                    {{$blogdescription}}
                </p>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget hidden-xs">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 single-footer-widget hidden-xs">
                <h4>Hot Categories</h4>
                <ul>
                    <?php
                    ?>
                    @foreach ($categories as $cate)
                        <li>
                            <a href="{{url('/')}}/{{$cate['slug']}}">{{$cate['name']}}</a>
                        </li>

                        <?php
                        $counter++;
                        if ($counter == 7) {
                            $counter = 0;
                        }
                        ?>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>Instagram Feed</h4>
                <ul class="instafeed d-flex flex-wrap">
                    <li><img class="lazyload" data-src="{{asset('img/about/1.jpg')}}" alt=""></li>
                    <li><img class="lazyload" data-src="{{asset('img/about/2.jpg')}}" alt=""></li>
                    <li><img class="lazyload" data-src="{{asset('img/about/3.jpg')}}" alt=""></li>
                    <li><img class="lazyload" data-src="{{asset('img/about/4.jpg')}}" alt=""></li>
                    <li><img class="lazyload" data-src="{{asset('img/about/5.jpg')}}" alt=""></li>
                    <li><img class="lazyload" data-src="{{asset('img/about/6.jpg')}}" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom row align-items-center">
            <p class="footer-text m-0 col-lg-8 col-md-12">
                {{$copyright}}
            </p>
            <div class="col-lg-4 col-md-12 footer-social">
                <?php
                foreach ($socials_link as $social) {
                    $option_name = $social->option_name;
                    if (strpos($option_name, 'facebook')) {
                        $social_facebook = $social->value;
                    }
                    if (strpos($option_name, 'twitter')) {
                        $social_twitter = $social->value;
                    }
                    if (strpos($option_name, 'youtube')) {
                        $social_youtube = $social->value;
                    }
                    if (strpos($option_name, 'linkedin')) {
                        $social_linkedin = $social->value;
                    }
                }
                ?>
                <a href="{{$social_facebook}}"><i class="fa fa-facebook"></i></a>
                <a href="{{$social_twitter}}"><i class="fa fa-twitter"></i></a>
                <a href="{{$social_youtube}}"><i class="fa fa-youtube-play"></i></a>
                <a href="{{$social_linkedin}}"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->

<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/lazysizes.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>

    $("#mobile-nav-toggle").click(function () {
        if ($("#mobile-body-overly").hasClass('open')) {
            $("#mobile-body-overly").removeClass('open');
        } else {
            $("#mobile-body-overly").addClass('open');
        }
        if ($("#mobile-nav").hasClass('open')) {
            $("#mobile-nav").removeClass('open');
        } else {
            $("#mobile-nav").addClass('open');
        }
    });
    $("#mobile-body-overly").click(function () {

        $("#mobile-body-overly").removeClass('open');
        $("#mobile-nav").removeClass('open');

    });

</script>
</body>
</html>
