@extends('layouts.app')

@php
    $jsonString = file_get_contents(base_path('content.json'));
    $contentFile = json_decode($jsonString, true);
    $content = $contentFile['pae-essamba']['about_us'];
@endphp

@section('content')
    {{-- {!! session('lang') === 'fr' ? $page->content_fr : $page->content_en !!} --}}
    <header class="py-5 bg-image-full bg-image-about">
        <div class="layer">
            <h2>{{ $content['title'][session('lang')] }}</h2>
        </div>
    </header>
    <div class="container" style="padding-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h3 class="breadcrumbs">Who we are</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8" style="padding-top: 1%;">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            @foreach ($content['sliders'] as $key => $slider)
                            <div class="item {{ +$key === 1 ? "active" : "" }}">
                                <img src="/assets/images/{{ $slider['img_url'] }}" alt="{{ $slider['content'][session('lang')] }}">
                                <div class="header-text hidden-xs">
                                    <div class="col-md-12 text-center">
                                        <h2>
                                            {{ $slider['content'][session('lang')] }}
                                        </h2>
                                    </div>
                                </div><!-- /header-text -->
                            </div>
                            @endforeach
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 id="calendar-tittle"><i class="fa fa-calendar"></i> &nbsp;Calendar of events</h4>
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bottom-30" style="padding-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8 about-content">
                    <h3>{{ $content['vision']['title'][session('lang')] }}</h3>
                    {!! $content['vision']['content'][session('lang')] !!}
                    <h3>{{ $content['values']['title'][session('lang')] }}</h3>
                    {!! $content['values']['content'][session('lang')] !!}
                    <h3>{{ $content['another_text']['title'][session('lang')] }}</h3>
                    {!! $content['another_text']['content'][session('lang')] !!}
                </div>
                <div class="col-md-4">
                    <h3>Ads Title</h3>
                    <img src="/assets/images/Rectangle-64.png" class="img-responsive">
                    <h3>Follow us on Facebook</h3>
                    <img src="/assets/images/facebook-page.JPG" class="img-responsive">
                    <h3>Recent post</h3>
                    <div style="background-image: url(assets/images/Recent-post.png)" class="recent-post">
                        <!--<div class="layer">-->
                            <!--<img src="/assets/images/Recent-post.png" class="img-responsive">-->
                            <h3>Visiting Our offices</h3>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid know-us">
        <div class="container">
            <div class="row">
                <h3>&nbsp;Need to <b>know more?</b></h3>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <i class="fa fa-phone-square"></i>
                    <span>Call Us</span>
                    <p>+237 123 456 789</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <i class="fa fa-phone-square"></i>
                    <span>Email Us</span>
                    <p style="font-size: 25px;">infos@pae-essamba.net </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <i class="fa fa-map"></i>
                    <span>Find Us On</span>
                    <p style="font-size: 25px;">Google Maps</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumbs"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Recent News</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="example-2 card" >
                    <div class="wrapper" style="background:url(assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
                        <div class="header">
                            <div class="date">
                                <i class="fa fa-calendar"></i>
                                <span class="day">4th</span>
                                <span class="month">Nov</span>
                                <span class="year">2019</span>
                            </div>
                        </div>
                        <div class="data">
                            <div class="content">
                                <h1 class="title"><a href="#">Ceremony of youth day</a></h1>
                                <p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release of the Survive soundtrack, out today.</p>
                                <span class="author">published by Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="example-2 card" >
                    <div class="wrapper" style="background:url(assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
                        <div class="header">
                            <div class="date">
                                <i class="fa fa-calendar"></i>
                                <span class="day">4th</span>
                                <span class="month">Nov</span>
                                <span class="year">2019</span>
                            </div>
                        </div>
                        <div class="data">
                            <div class="content">
                                <h1 class="title"><a href="#">Ceremony of youth day</a></h1>
                                <p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release of the Survive soundtrack, out today.</p>
                                <span class="author">published by Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="example-2 card" >
                    <div class="wrapper" style="background:url(assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
                        <div class="header">
                            <div class="date">
                                <i class="fa fa-calendar"></i>
                                <span class="day">4th</span>
                                <span class="month">Nov</span>
                                <span class="year">2019</span>
                            </div>
                        </div>
                        <div class="data">
                            <div class="content">
                                <h1 class="title"><a href="#">Ceremony of youth day</a></h1>
                                <p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release of the Survive soundtrack, out today.</p>
                                <span class="author">published by Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a href="#" class="view-more">View List &nbsp; <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endsection