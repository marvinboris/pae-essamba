@extends('layouts.app')

@section('content')
<header class="py-5 bg-image-full bg-image-about">
        <div class="layer">
            <h2>About Us</h2>
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
                            <div class="item active">
                                <img src="/assets/images/gallery-image.png" alt="Los Angeles">
                                <div class="header-text hidden-xs">
                                    <div class="col-md-12 text-center">
                                        <h2>
                                            This is our gallery
                                        </h2>
                                    </div>
                                </div><!-- /header-text -->
                            </div>
                            <div class="item">
                                <img src="/assets/images/gallery-image.png" alt="Los Angeles">
                                <div class="header-text hidden-xs">
                                    <div class="col-md-12 text-center">
                                        <h2>
                                            This is our gallery 2
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="/assets/images/gallery-image.png" alt="Los Angeles">
                                <div class="header-text hidden-xs">
                                    <div class="col-md-12 text-center">
                                        <h2>
                                            This is our gallery 3
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></spas>
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
                    <h3>Our vision</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <blockquote>
                        <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                    </blockquote>
                    <h3>Our values</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h3>Another text</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                    <p style="font-size: 25px;">infos@pae-essambanet </p>
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