@extends('layouts.app')

@php
    $jsonString = file_get_contents(base_path('content.json'));
    $contentFile = json_decode($jsonString, true);
    $content = $contentFile['news'];
@endphp

@section('content')
    {{-- {!! session('lang') === 'fr' ? $page->content_fr : $page->content_en !!} --}}
    <header class="py-5 bg-image-full bg-image-contact">
        <div class="layer">
            <h2 style="font-size: 40px;">{!! $content['title'][session('lang')] !!}</h2>
        </div>
    </header>
    <div class="container blog top-30 bottom-30" >
        <div class="row">
            <div class="col-md-8">
                <div class="blog-post">
                    <h3 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum diam ut lectus pulvinar dignissim. </h3>
                    <span class="posted-by">Posted by Admin</span>
                    <span style="float: right" class="nav-social">
                                            <span class="follow-us-nav text-right">Share:</span>
                                        <a href="http://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
                                        <a href="http://www.twitter.com"><i class="fa fa-twitter-square"></i></a>
                                        <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
                                        <a href="http://www.linkedin.com"><i class="fa fa-linkedin-square"></i></a>
                                        </span>
                    <div id="myCarousel" class="carousel slide top-10" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/assets/images/gallery-image.png" alt="Los Angeles">
                                <div class="date">
                                    <span><i class="fa fa-calendar"></i></span>
                                    <span class="day">4th</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="date">
                                    <span><i class="fa fa-calendar"></i></span>
                                    <span class="day">4th</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <img src="/assets/images/gallery-image.png" alt="Los Angeles">
                            </div>
                            <div class="item">
                                <div class="date">
                                    <span><i class="fa fa-calendar"></i></span>
                                    <span class="day">4th</span>
                                    <span class="month">Nov</span>
                                    <span class="year">2019</span>
                                </div>
                                <img src="/assets/images/gallery-image.png" alt="Los Angeles">
                            </div>
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
                    <div class="clearfix top-30">
                        @foreach ($content['paragraphs'] as $paragraph)
                        <h4><b>{!! $paragraph['title'][session('lang')] !!}</b></h4>
                        {!! $paragraph['content'][session('lang')] !!}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Enter a keyword">
                    <span class="input-group-btn">
                    <button class="btn-search" type="button">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    </span>
                </div>
                <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                <div id="calendar"></div>
                <h3>Ads Title</h3>
                <img src="/assets/images/Rectangle-64.png" class="img-responsive">
                <h3>Follow us on Facebook</h3>
                <img src="/assets/images/facebook-page.JPG" class="img-responsive">
                <h3>Recent post</h3>
                <div style="background-image: url(assets/images/Recent-post.png)" class="recent-post">
                    <h3>Visiting Our offices</h3>
                </div>
                <h3>Our youtube video</h3>
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/THymiwMZjDI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection