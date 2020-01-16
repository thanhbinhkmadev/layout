<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/iv.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="{{$blogdescription}}">
    <link rel=”canonical” href="{{url('/')}}"/>
    <!-- meta character set -->
    <meta charset="UTF-8">
    @if($robots == 'no-robot')
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
    @endif
    <!-- Site Title -->
    <title>@yield('page-title')</title>
    @if(!empty($header_setting))
        <?php echo $header_setting;?>
    @endif

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>
<body>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
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
                    <ul>
                        <li><a href="{{$social_facebook}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{$social_twitter}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$social_youtube}}"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="{{$social_linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                    <ul class="hidden-xs">
                        <li>
                            <span class="city-weather color-white">London, United Kingdom</span>
                        </li>
                        <li>
                            <span class="time-now color-white">
                                <?php
                                date_default_timezone_set('Europe/London');
                                $sTime = date("l d F Y | H:i");
                                echo $sTime;
                                ?>
                            </span>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                    <a href="{{ url('/') }}">
                        <h3 class="logo">interpretalab.org</h3>
                    </a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">

                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu" id="main-menu">
        <button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i><span class="menu-title">Menu</span>
        </button>
        <div class="row align-items-center justify-content-between">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
                    @foreach ($categories as $cate)
                        <li>
                            <a href="{{url('/')}}/{{$cate['slug']}}">{{$cate['name']}}</a>
                        </li>
                    @endforeach
                    <li><a href="{{ url('/') }}/about">About</a></li>

                </ul>
            </nav><!-- #nav-menu-container -->
            <div class="navbar-right">
                <div class="Search">
                    <input type="text" class="form-control Search-box" name="Search-box" id="Search-box"
                           placeholder="Search">
                    <label for="Search-box" class="Search-box-label">
                        <span class="fa fa-search"></span>
                    </label>
                    <span class="Search-close">
                        <span class="fa fa-times"></span>
                    </span>
                </div>
            </div>
        </div>
        <nav id="mobile-nav">
            <ul class="" style="touch-action: pan-y;" id="">
                <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
                @foreach ($categories as $cate)
                    <li>
                        <a href="{{url('/')}}/{{$cate['slug']}}">{{$cate['name']}}</a>
                    </li>
                @endforeach
                <li><a href="{{ url('/') }}/about">About</a></li>

            </ul>
        </nav>
        <div id="mobile-body-overly"></div>
    </div>

</header>
