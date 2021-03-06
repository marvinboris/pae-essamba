@extends('layouts.app')

@section('content')
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(assets/images/slider/slider-01.jpg);">
                    <div class="slider-layer">
                        <div style="width: 100%;" class="slider-text">
                            <h1 style="text-align: left">Welcome to Pae Essamba</h1>
                            <h3>The <span>Student support</span></h3>
                            <h3><span>program </span>website</h3>
                            <div style="padding-top: 1%;">
                                <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i>
                                </a>
                                <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image:url(assets/images/slider/Digital-marketing-expert.jpg);">
                    <div class="slider-layer" style="position: relative">
                        <div style="width: 100%;" class="slider-text">
                            <h1 style="text-align: left">Welcome to Pae Essamba</h1>
                            <h3>The <span>Student support</span></h3>
                            <h3><span>program </span>website</h3>
                            <div style="padding-top: 1%;">
                                <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i>
                                </a>
                                <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(assets/images/slider/slider-01.jpg);">
                    <div class="slider-layer" style="position: relative">
                        <div style="width: 100%;" class="slider-text">
                            <h1 style="text-align: left">Welcome to Pae Essamba</h1>
                            <h3>The <span>Student support</span></h3>
                            <h3><span>program </span>website</h3>
                            <div style="padding-top: 1%;">
                                <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i>
                                </a>
                                <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="container" style="padding-top: 30px;">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12">
                    <h3 class="breadcrumbs"><i class="fa fa-map" aria-hidden="true"></i>&nbsp;Recent Activities</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised
                        in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum. <br> <br>
                    </p>
                </div>
                <div class="col-md-12" style="padding-top: 1%;">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
                            </div>
                            <div class="item">
                                <img src="/assets/images/gallery-image.png" alt="Los Angeles">
                            </div>
                            <div class="item">
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
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Enter a keyword">
                        <span class="input-group-btn">
                            <button class="btn-search" type="button">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>
                    <div>
                        <h4 id="calendar-tittle"><i class="fa fa-calendar"></i> Calendar of events</h4>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumbs"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Recent News</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised
                    in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum. <br> <br>
                </p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="example-2 card">
                    <div class="wrapper"
                        style="background:url(assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                                <p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release
                                    of the Survive soundtrack, out today.</p>
                                <span class="author">published by Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="example-2 card">
                    <div class="wrapper"
                        style="background:url(assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                                <p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release
                                    of the Survive soundtrack, out today.</p>
                                <span class="author">published by Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="example-2 card">
                    <div class="wrapper"
                        style="background:url(assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                                <p class="text">The antsy bingers of Netflix will eagerly anticipate the digital release
                                    of the Survive soundtrack, out today.</p>
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
                    <p><a href="tel:+237123456789">+237 123 456 789</a></p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <i class="fa fa-phone-square"></i>
                    <span>Email Us</span>
                    <p style="font-size: 25px;"><a href="mailto:infos@pae-essamba.net">infos@pae-essamba.net</a> </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <i class="fa fa-map"></i>
                    <span>Find Us On</span>
                    <p style="font-size: 25px;"><a href="#"> Google Maps</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #00000012;">
        <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumbs"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Our Team</h3>
                    <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Aenean
                        bibendum diam ut lectus pulvinar dignissim. Mauris eu nibh eu dolor cursus fringilla.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="team">
                        <div class="wrapper"
                            style="background:url(assets/images/team/team-01.png) center/cover no-repeat;">
                            <div class="test">
                                <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a
                                        href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                            class="fa fa-instagram"></i></a></div>
                                <div class="data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                        <!--<a class="view-profile">View profile &nbsp;<i class="fa fa-arrow-right"></i> </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team">
                        <div class="wrapper"
                            style="background:url(assets/images/team/team-02.png) center/cover no-repeat;">
                            <div class="test">
                                <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a
                                        href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                            class="fa fa-instagram"></i></a></div>
                                <div class="data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                        <!--<a class="view-profile">View profile &nbsp;<i class="fa fa-arrow-right"></i> </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team">
                        <div class="wrapper"
                            style="background:url(assets/images/team/team-03.png) center/cover no-repeat;">
                            <div class="test">
                                <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a
                                        href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                            class="fa fa-instagram"></i></a></div>
                                <div class="data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team">
                        <div class="wrapper"
                            style="background:url(assets/images/team/team-04.png) center/cover no-repeat;">
                            <div class="test">
                                <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a
                                        href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                            class="fa fa-instagram"></i></a></div>
                                <div class="data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="#" class="view-more">View full team list &nbsp; <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumbs"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Focal Point
                        Activities</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" id="projects">
                    <div style="border: 1px solid #74737396;">
                        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                            <div class="btn-group" role="group">
                                <button type="button" id="stars" class="btn project-active btn-white" href="#tab1"
                                    data-toggle="tab">
                                    <div class="hidden-xs">Saker <br>Project</div>
                                </button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" id="favorites" class="btn btn-white" href="#tab2"
                                    data-toggle="tab">
                                    <div class="hidden-xs">Trainee<br>student project</div>
                                </button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" id="following" class="btn btn-white" href="#tab3"
                                    data-toggle="tab">
                                    <div class="hidden-xs">Needy<br>student project</div>
                                </button>
                            </div>
                        </div>
                        <div class="well"
                            style="background-color: #EEEEEE; background-image: none;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1">
                                    <h3>Title of the main project</h3>
                                    <span class="dot"></span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. <br>It has survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged. It was popularised in
                                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p>
                                    <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                </div>
                                <div class="tab-pane fade in" id="tab2">
                                    <h3>Title of the main project 2</h3>
                                    <span class="dot"></span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. <br> It has survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged. It was popularised in
                                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p>
                                    <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                </div>
                                <div class="tab-pane fade in" id="tab3">
                                    <h3>Title of the main project 3</h3>
                                    <span class="dot"></span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.<br> It has survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged. It was popularised in
                                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                        and more recently with desktop publishing software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p>
                                    <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="#" class="view-more">View full list &nbsp; <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #00000012;">
        <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumbs"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Our Partners</h3>
                    <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Aenean
                        bibendum diam ut lectus pulvinar dignissim. Mauris eu nibh eu dolor cursus fringilla.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="Carousel" class="carousel slide">

                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                            <li data-target="#Carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-2 col-xs-4"><a
                                            href="http://reg.thonburi-u.ac.th/registrar/home.asp" class="thumbnail"><img
                                                src="https://tmaxtech.co.th/images/Partner/1.jpg" alt="Image"
                                                style="height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="http://www.spu.ac.th/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/2.jpg"
                                                alt="Image" style="height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="http://www.spu.ac.th/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/3.png"
                                                alt="Image" style="height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="https://www.mahidol.ac.th/th/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/4.jpg"
                                                alt="Image" style="height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="http://www.kkopenzoo.com/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/5.jpg"
                                                alt="Image" style="height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="http://www.songkhlazoo.com/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/6.jpg"
                                                alt="Image" style="height:80px;"></a></div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-2 col-xs-4"><a href="http://www.zoothailand.org/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/7.jpg"
                                                alt="Image" style="max-height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="http://www.diw.go.th/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/17.png"
                                                alt="Image" style="max-height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="http://www.dss.go.th/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/9.png"
                                                alt="Image" style="max-height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="http://www.dip.go.th/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/10.png"
                                                alt="Image" style="max-height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="http://www.dpim.go.th/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/11.png"
                                                alt="Image" style="max-height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="http://www.nstda.or.th/index.php"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/12.jpg"
                                                alt="Image" style="max-height:80px;"></a></div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-2 col-xs-4"><a href="http://www.oaep.go.th/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/13.png"
                                                alt="Image" style="max-height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="http://www.ops.go.th/"
                                            class="thumbnail"><img src="https://tmaxtech.co.th/images/Partner/14.jpg"
                                                alt="Image" style="max-height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="/www.tisi.go.th" class="thumbnail"><img
                                                src="https://tmaxtech.co.th/images/Partner/15.png" alt="Image"
                                                style="max-height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="/www.oie.go.th/" class="thumbnail"><img
                                                src="https://tmaxtech.co.th/images/Partner/16.png" alt="Image"
                                                style="max-height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a
                                            href="http://reg.thonburi-u.ac.th/registrar/home.asp" class="thumbnail"><img
                                                src="https://tmaxtech.co.th/images/Partner/1.jpg" alt="Image"
                                                style="max-height:80px;"></a></div>
                                    <div class="col-md-2 col-xs-4"><a href="http://www.spu.ac.th" class="thumbnail"><img
                                                src="https://tmaxtech.co.th/images/Partner/2.jpg" alt="Image"
                                                style="height:80px;"></a></div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <a href="#" class="view-more">View full list &nbsp; <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
