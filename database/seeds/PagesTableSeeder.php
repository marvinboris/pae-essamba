<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Page::create([
            'nav_item_id' => 1,
            'title_en' => 'Home',
            'title_fr' => 'Accueil',
            'content_en' => '
            <div class="simple-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(/assets/images/slider/slider-01.jpg);">
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
                        style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
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
                    <div class="swiper-slide" style="background-image:url(/assets/images/slider/slider-01.jpg);">
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
                            Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,
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
                        Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,
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
                            style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                            style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                            style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                                style="background:url(/assets/images/team/team-01.png) center/cover no-repeat;">
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
                                style="background:url(/assets/images/team/team-02.png) center/cover no-repeat;">
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
                                style="background:url(/assets/images/team/team-03.png) center/cover no-repeat;">
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
                                style="background:url(/assets/images/team/team-04.png) center/cover no-repeat;">
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
                                            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an
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
                                            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an
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
                                            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an
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
            ',
            'content_fr' => '
            <div class="simple-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(/assets/images/slider/slider-01.jpg);">
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
                        style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
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
                    <div class="swiper-slide" style="background-image:url(/assets/images/slider/slider-01.jpg);">
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
                            Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,
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
                        Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,
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
                            style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                            style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                            style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                                style="background:url(/assets/images/team/team-01.png) center/cover no-repeat;">
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
                                style="background:url(/assets/images/team/team-02.png) center/cover no-repeat;">
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
                                style="background:url(/assets/images/team/team-03.png) center/cover no-repeat;">
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
                                style="background:url(/assets/images/team/team-04.png) center/cover no-repeat;">
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
                                            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an
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
                                            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an
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
                                            Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an
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
            ',
            'top_menu' => true,
            'url' => '/',
            'banner' => false,
            'route_name' => 'welcome'
        ]);

        // Pae Essamba pages
        Page::create([
            'nav_item_id' => 2,
            'title_en' => 'About Us',
            'title_fr' => 'A propos',
            'content_en' => '
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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <blockquote>
                            <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                        </blockquote>
                        <h3>Our values</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h3>Another text</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Ads Title</h3>
                        <img src="/assets/images/Rectangle-64.png" class="img-responsive">
                        <h3>Follow us on Facebook</h3>
                        <img src="/assets/images/facebook-page.JPG" class="img-responsive">
                        <h3>Recent post</h3>
                        <div style="background-image: url(/assets/images/Recent-post.png)" class="recent-post">
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
                        <div class="wrapper" style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                        <div class="wrapper" style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                        <div class="wrapper" style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
            ',
            'content_fr' => '
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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <blockquote>
                            <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                        </blockquote>
                        <h3>Our values</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h3>Another text</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Ads Title</h3>
                        <img src="/assets/images/Rectangle-64.png" class="img-responsive">
                        <h3>Follow us on Facebook</h3>
                        <img src="/assets/images/facebook-page.JPG" class="img-responsive">
                        <h3>Recent post</h3>
                        <div style="background-image: url(/assets/images/Recent-post.png)" class="recent-post">
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
                        <div class="wrapper" style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                        <div class="wrapper" style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
                        <div class="wrapper" style="background:url(/assets/images/news/IMG_20170602_152742_A0_Rectangle_55_pattern.png) center/cover no-repeat;background-size: auto;">
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
            ',
            'top_menu' => false,
            'url' => '/pae-essamba/about',
            'banner' => false,
            'route_name' => 'pae-essamba.about'
        ]);

        Page::create([
            'nav_item_id' => 2,
            'title_en' => 'Our Blog',
            'title_fr' => 'Notre Blog',
            'content_en' => '
            <div class="container blog top-30 bottom-30" >
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-post">
                        <h4 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum diam ut lectus pulvinar dignissim. </h4>
                        <span class="posted-by">Posted by Admin</span>
                        <span style="float: right" class="nav-social">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                    <div class="blog-post">
                        <h4 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum diam ut lectus pulvinar dignissim. </h4>
                        <span class="posted-by">Posted by Admin</span>
                        <span style="float: right" class="nav-social">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                            </span>
                        <div class="carousel slide top-10">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NwnaoMcs-f0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="clearfix top-30">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                    <div class="blog-post">
                        <h4 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum diam ut lectus pulvinar dignissim. </h4>
                        <span class="posted-by">Posted by Admin</span>
                        <span style="float: right" class="nav-social">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                    <div style="background-image: url(/assets/images/Recent-post.png)" class="recent-post">
                        <h3>Visiting Our offices</h3>
                    </div>
                    <h3>Our youtube video</h3>
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/THymiwMZjDI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-arrow-left"></i>&nbsp;Previous </a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next&nbsp;<i class="fa fa-arrow-right"></i> </a></li>
                </ul>
            </div>
        </div>
            ',
            'content_fr' => '
            <div class="container blog top-30 bottom-30" >
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-post">
                        <h4 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum diam ut lectus pulvinar dignissim. </h4>
                        <span class="posted-by">Posted by Admin</span>
                        <span style="float: right" class="nav-social">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                    <div class="blog-post">
                        <h4 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum diam ut lectus pulvinar dignissim. </h4>
                        <span class="posted-by">Posted by Admin</span>
                        <span style="float: right" class="nav-social">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                            </span>
                        <div class="carousel slide top-10">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NwnaoMcs-f0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="clearfix top-30">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                    <div class="blog-post">
                        <h4 class="blog-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum diam ut lectus pulvinar dignissim. </h4>
                        <span class="posted-by">Posted by Admin</span>
                        <span style="float: right" class="nav-social">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                    <div style="background-image: url(/assets/images/Recent-post.png)" class="recent-post">
                        <h3>Visiting Our offices</h3>
                    </div>
                    <h3>Our youtube video</h3>
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/THymiwMZjDI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-arrow-left"></i>&nbsp;Previous </a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next&nbsp;<i class="fa fa-arrow-right"></i> </a></li>
                </ul>
            </div>
        </div>
            ',
            'top_menu' => false,
            'url' => '/pae-essamba/blog',
            'banner' => true,
            'route_name' => 'pae-essamba.blog'
        ]);

        // Posts pages
        Page::create([
            'nav_item_id' => 3,
            'title_en' => 'Reports',
            'title_fr' => 'Rapports',
            'content_en' => '',
            'content_fr' => '',
            'top_menu' => false,
            'url' => '/posts/reports',
            'banner' => true,
            'route_name' => 'posts.reports'
        ]);

        Page::create([
            'nav_item_id' => 3,
            'title_en' => 'Articles',
            'title_fr' => 'Articles',
            'content_en' => '',
            'content_fr' => '',
            'top_menu' => false,
            'url' => '/posts/articles',
            'banner' => true,
            'route_name' => 'posts.articles'
        ]);

        Page::create([
            'nav_item_id' => 3,
            'title_en' => 'Essamba Echo',
            'title_fr' => 'Echo Essamba',
            'content_en' => '',
            'content_fr' => '',
            'top_menu' => false,
            'url' => '/posts/essamba-echo',
            'banner' => true,
            'route_name' => 'posts.essamba-echo'
        ]);

        Page::create([
            'nav_item_id' => 3,
            'title_en' => 'Annual procedure',
            'title_fr' => 'Procédure annuelle',
            'content_en' => '',
            'content_fr' => '',
            'top_menu' => false,
            'url' => '/posts/procedure',
            'banner' => true,
            'route_name' => 'posts.procedure'
        ]);
        

        // News page
        Page::create([
            'nav_item_id' => 4,
            'title_en' => 'News',
            'title_fr' => 'Actualités',
            'content_en' => '
            <header class="py-5 bg-image-full bg-image-contact">
            <div class="layer">
                <h2 style="font-size: 40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
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
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <blockquote>
                                <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                            </blockquote>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ul>
                                <li>For 50 years, WWF has been protecting the future of nature.</li>
                                <li>For 50 years, WWF has been protecting</li>
                                <li>the future of nature.</li>
                            </ul>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
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
            ',
            'content_fr' => '
            <header class="py-5 bg-image-full bg-image-contact">
            <div class="layer">
                <h2 style="font-size: 40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
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
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <blockquote>
                                <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                            </blockquote>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ul>
                                <li>For 50 years, WWF has been protecting the future of nature.</li>
                                <li>For 50 years, WWF has been protecting</li>
                                <li>the future of nature.</li>
                            </ul>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
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
            ',
            'top_menu' => true,
            'url' => '/news',
            'banner' => false,
            'route_name' => 'news'
        ]);


        // Pae Events pages
        Page::create([
            'nav_item_id' => 5,
            'title_en' => 'LUJ',
            'title_fr' => 'LUJ',
            'content_en' => '
            <div class="simple-slider">
            <div class="swiper-container horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-container vertical">
                            <div class="swiper-wrapper vertical">
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/slider-01.jpg);">
                                    <div class="slider-layer">
                                        <div style="width: 100%;" class="slider-text luv-slider-text">
                                            <h1 style="text-align: left">Welcome to Luv 2019</h1>
                                            <h3>The <span class="luv-slider-text">University support</span></h3>
                                            <h3><span class="luv-slider-text">program </span>website</h3>
                                            <div style="padding-top: 1%;">
                                                <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i> </a>
                                                <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination vertical"></div>
                        </div></div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <h4 class="luv-breadcrumb">Presentation of Luv<br>What is Luv?</h4>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8" style="padding-top: 1%;">
                        <span class="posted-by bottom-30">Posted by Admin</span>
                        <span style="float: right" class="nav-social blog ">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                            </span>
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
                                <span class="glyphicon glyphicon-chevron-left"></spas>
                                    <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="clearfix top-30">
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <blockquote>
                                <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                            </blockquote>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ul>
                                <li>For 50 years, WWF has been protecting the future of nature.</li>
                                <li>For 50 years, WWF has been protecting</li>
                                <li>the future of nature.</li>
                            </ul>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                        <div id="calendar"></div>
                        <h3>Committee</h3>
                        <div class="team" >
                            <div class="wrapper" style="background:url(/assets/images/team/team-03.png) center/cover no-repeat;">
                                <div class="data" id="luv-data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                        <h5><b>Email</b></h5>
                                        <h5><b>Telephone</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Presentation</h3>
                        <div class="panel panel-default" id="luv-document-panel">
                            <div class="panel-heading">Documents</div>
                            <div class="panel-body">
                                <ul>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="breadcrumbs"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Take part of the event</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="projects">
                        <div>
                            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" id="stars" class="btn" href="#tab1" data-toggle="tab">
                                        <div class="hidden-xs">Free <br>Offer</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="favorites" class="btn btn-white" href="#tab2" data-toggle="tab">
                                        <div class="hidden-xs">500<br>CFA</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="following" class="btn btn-white" href="#tab3" data-toggle="tab">
                                        <div class="hidden-xs">Needy<br>student project</div>
                                    </button>
                                </div>
                            </div>
                            <div class="well" style="background-color: #f8f8f8; background-image: none;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h3>Title of the main project</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="row top-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" id="luv-form-button" style="font-size: 16px;">Subscribe</button>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="tab2">
                                        <h3>Title of the main project 2</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                    <div class="tab-pane fade in" id="tab3">
                                        <h3>Title of the main project 3</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            ',
            'content_fr' => '
            <div class="simple-slider">
            <div class="swiper-container horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-container vertical">
                            <div class="swiper-wrapper vertical">
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/slider-01.jpg);">
                                    <div class="slider-layer">
                                        <div style="width: 100%;" class="slider-text luv-slider-text">
                                            <h1 style="text-align: left">Welcome to Luv 2019</h1>
                                            <h3>The <span class="luv-slider-text">University support</span></h3>
                                            <h3><span class="luv-slider-text">program </span>website</h3>
                                            <div style="padding-top: 1%;">
                                                <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i> </a>
                                                <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination vertical"></div>
                        </div></div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <h4 class="luv-breadcrumb">Presentation of Luv<br>What is Luv?</h4>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8" style="padding-top: 1%;">
                        <span class="posted-by bottom-30">Posted by Admin</span>
                        <span style="float: right" class="nav-social blog ">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                            </span>
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
                                <span class="glyphicon glyphicon-chevron-left"></spas>
                                    <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="clearfix top-30">
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <blockquote>
                                <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                            </blockquote>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ul>
                                <li>For 50 years, WWF has been protecting the future of nature.</li>
                                <li>For 50 years, WWF has been protecting</li>
                                <li>the future of nature.</li>
                            </ul>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                        <div id="calendar"></div>
                        <h3>Committee</h3>
                        <div class="team" >
                            <div class="wrapper" style="background:url(/assets/images/team/team-03.png) center/cover no-repeat;">
                                <div class="data" id="luv-data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                        <h5><b>Email</b></h5>
                                        <h5><b>Telephone</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Presentation</h3>
                        <div class="panel panel-default" id="luv-document-panel">
                            <div class="panel-heading">Documents</div>
                            <div class="panel-body">
                                <ul>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="breadcrumbs"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Take part of the event</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="projects">
                        <div>
                            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" id="stars" class="btn" href="#tab1" data-toggle="tab">
                                        <div class="hidden-xs">Free <br>Offer</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="favorites" class="btn btn-white" href="#tab2" data-toggle="tab">
                                        <div class="hidden-xs">500<br>CFA</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="following" class="btn btn-white" href="#tab3" data-toggle="tab">
                                        <div class="hidden-xs">Needy<br>student project</div>
                                    </button>
                                </div>
                            </div>
                            <div class="well" style="background-color: #f8f8f8; background-image: none;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h3>Title of the main project</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="row top-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" id="luv-form-button" style="font-size: 16px;">Subscribe</button>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="tab2">
                                        <h3>Title of the main project 2</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                    <div class="tab-pane fade in" id="tab3">
                                        <h3>Title of the main project 3</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            ',
            'top_menu' => false,
            'url' => '/pae-events/luj',
            'banner' => false,
            'route_name' => 'pae-events.luj'
        ]);

        
        Page::create([
            'nav_item_id' => 5,
            'title_en' => 'Training Seminar',
            'title_fr' => 'Séminaire de formation',
            'content_en' => '
            <div class="simple-slider">
            <div class="swiper-container horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-container vertical">
                            <div class="swiper-wrapper vertical">
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/slider-01.jpg);">
                                    <div class="slider-layer">
                                        <div style="width: 100%;" class="slider-text luv-slider-text">
                                            <h1 style="text-align: left">Welcome to Luv 2019</h1>
                                            <h3>The <span class="luv-slider-text">University support</span></h3>
                                            <h3><span class="luv-slider-text">program </span>website</h3>
                                            <div style="padding-top: 1%;">
                                                <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i> </a>
                                                <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination vertical"></div>
                        </div></div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <h4 class="luv-breadcrumb">Presentation of Luv<br>What is Luv?</h4>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8" style="padding-top: 1%;">
                        <span class="posted-by bottom-30">Posted by Admin</span>
                        <span style="float: right" class="nav-social blog ">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                            </span>
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
                                <span class="glyphicon glyphicon-chevron-left"></spas>
                                    <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="clearfix top-30">
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <blockquote>
                                <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                            </blockquote>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ul>
                                <li>For 50 years, WWF has been protecting the future of nature.</li>
                                <li>For 50 years, WWF has been protecting</li>
                                <li>the future of nature.</li>
                            </ul>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                        <div id="calendar"></div>
                        <h3>Committee</h3>
                        <div class="team" >
                            <div class="wrapper" style="background:url(/assets/images/team/team-03.png) center/cover no-repeat;">
                                <div class="data" id="luv-data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                        <h5><b>Email</b></h5>
                                        <h5><b>Telephone</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Presentation</h3>
                        <div class="panel panel-default" id="luv-document-panel">
                            <div class="panel-heading">Documents</div>
                            <div class="panel-body">
                                <ul>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="breadcrumbs"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Take part of the event</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="projects">
                        <div>
                            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" id="stars" class="btn" href="#tab1" data-toggle="tab">
                                        <div class="hidden-xs">Free <br>Offer</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="favorites" class="btn btn-white" href="#tab2" data-toggle="tab">
                                        <div class="hidden-xs">500<br>CFA</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="following" class="btn btn-white" href="#tab3" data-toggle="tab">
                                        <div class="hidden-xs">Needy<br>student project</div>
                                    </button>
                                </div>
                            </div>
                            <div class="well" style="background-color: #f8f8f8; background-image: none;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h3>Title of the main project</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="row top-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" id="luv-form-button" style="font-size: 16px;">Subscribe</button>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="tab2">
                                        <h3>Title of the main project 2</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                    <div class="tab-pane fade in" id="tab3">
                                        <h3>Title of the main project 3</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            ',
            'content_fr' => '
            <div class="simple-slider">
            <div class="swiper-container horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-container vertical">
                            <div class="swiper-wrapper vertical">
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/slider-01.jpg);">
                                    <div class="slider-layer">
                                        <div style="width: 100%;" class="slider-text luv-slider-text">
                                            <h1 style="text-align: left">Welcome to Luv 2019</h1>
                                            <h3>The <span class="luv-slider-text">University support</span></h3>
                                            <h3><span class="luv-slider-text">program </span>website</h3>
                                            <div style="padding-top: 1%;">
                                                <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i> </a>
                                                <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination vertical"></div>
                        </div></div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <h4 class="luv-breadcrumb">Presentation of Luv<br>What is Luv?</h4>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8" style="padding-top: 1%;">
                        <span class="posted-by bottom-30">Posted by Admin</span>
                        <span style="float: right" class="nav-social blog ">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                            </span>
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
                                <span class="glyphicon glyphicon-chevron-left"></spas>
                                    <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="clearfix top-30">
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <blockquote>
                                <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                            </blockquote>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ul>
                                <li>For 50 years, WWF has been protecting the future of nature.</li>
                                <li>For 50 years, WWF has been protecting</li>
                                <li>the future of nature.</li>
                            </ul>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                        <div id="calendar"></div>
                        <h3>Committee</h3>
                        <div class="team" >
                            <div class="wrapper" style="background:url(/assets/images/team/team-03.png) center/cover no-repeat;">
                                <div class="data" id="luv-data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                        <h5><b>Email</b></h5>
                                        <h5><b>Telephone</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Presentation</h3>
                        <div class="panel panel-default" id="luv-document-panel">
                            <div class="panel-heading">Documents</div>
                            <div class="panel-body">
                                <ul>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="breadcrumbs"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Take part of the event</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="projects">
                        <div>
                            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" id="stars" class="btn" href="#tab1" data-toggle="tab">
                                        <div class="hidden-xs">Free <br>Offer</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="favorites" class="btn btn-white" href="#tab2" data-toggle="tab">
                                        <div class="hidden-xs">500<br>CFA</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="following" class="btn btn-white" href="#tab3" data-toggle="tab">
                                        <div class="hidden-xs">Needy<br>student project</div>
                                    </button>
                                </div>
                            </div>
                            <div class="well" style="background-color: #f8f8f8; background-image: none;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h3>Title of the main project</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="row top-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" id="luv-form-button" style="font-size: 16px;">Subscribe</button>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="tab2">
                                        <h3>Title of the main project 2</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                    <div class="tab-pane fade in" id="tab3">
                                        <h3>Title of the main project 3</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            ',
            'top_menu' => false,
            'url' => '/pae-events/seminar',
            'banner' => false,
            'route_name' => 'pae-events.seminar'
        ]);

        
        Page::create([
            'nav_item_id' => 5,
            'title_en' => 'Conference',
            'title_fr' => 'Conférence',
            'content_en' => '
            <div class="simple-slider">
            <div class="swiper-container horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-container vertical">
                            <div class="swiper-wrapper vertical">
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/slider-01.jpg);">
                                    <div class="slider-layer">
                                        <div style="width: 100%;" class="slider-text luv-slider-text">
                                            <h1 style="text-align: left">Welcome to Luv 2019</h1>
                                            <h3>The <span class="luv-slider-text">University support</span></h3>
                                            <h3><span class="luv-slider-text">program </span>website</h3>
                                            <div style="padding-top: 1%;">
                                                <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i> </a>
                                                <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination vertical"></div>
                        </div></div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <h4 class="luv-breadcrumb">Presentation of Luv<br>What is Luv?</h4>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8" style="padding-top: 1%;">
                        <span class="posted-by bottom-30">Posted by Admin</span>
                        <span style="float: right" class="nav-social blog ">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                            </span>
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
                                <span class="glyphicon glyphicon-chevron-left"></spas>
                                    <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="clearfix top-30">
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <blockquote>
                                <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                            </blockquote>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ul>
                                <li>For 50 years, WWF has been protecting the future of nature.</li>
                                <li>For 50 years, WWF has been protecting</li>
                                <li>the future of nature.</li>
                            </ul>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                        <div id="calendar"></div>
                        <h3>Committee</h3>
                        <div class="team" >
                            <div class="wrapper" style="background:url(/assets/images/team/team-03.png) center/cover no-repeat;">
                                <div class="data" id="luv-data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                        <h5><b>Email</b></h5>
                                        <h5><b>Telephone</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Presentation</h3>
                        <div class="panel panel-default" id="luv-document-panel">
                            <div class="panel-heading">Documents</div>
                            <div class="panel-body">
                                <ul>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="breadcrumbs"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Take part of the event</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="projects">
                        <div>
                            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" id="stars" class="btn" href="#tab1" data-toggle="tab">
                                        <div class="hidden-xs">Free <br>Offer</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="favorites" class="btn btn-white" href="#tab2" data-toggle="tab">
                                        <div class="hidden-xs">500<br>CFA</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="following" class="btn btn-white" href="#tab3" data-toggle="tab">
                                        <div class="hidden-xs">Needy<br>student project</div>
                                    </button>
                                </div>
                            </div>
                            <div class="well" style="background-color: #f8f8f8; background-image: none;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h3>Title of the main project</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="row top-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" id="luv-form-button" style="font-size: 16px;">Subscribe</button>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="tab2">
                                        <h3>Title of the main project 2</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                    <div class="tab-pane fade in" id="tab3">
                                        <h3>Title of the main project 3</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            ',
            'content_fr' => '
            <div class="simple-slider">
            <div class="swiper-container horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-container vertical">
                            <div class="swiper-wrapper vertical">
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/slider-01.jpg);">
                                    <div class="slider-layer">
                                        <div style="width: 100%;" class="slider-text luv-slider-text">
                                            <h1 style="text-align: left">Welcome to Luv 2019</h1>
                                            <h3>The <span class="luv-slider-text">University support</span></h3>
                                            <h3><span class="luv-slider-text">program </span>website</h3>
                                            <div style="padding-top: 1%;">
                                                <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i> </a>
                                                <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination vertical"></div>
                        </div></div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <h4 class="luv-breadcrumb">Presentation of Luv<br>What is Luv?</h4>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8" style="padding-top: 1%;">
                        <span class="posted-by bottom-30">Posted by Admin</span>
                        <span style="float: right" class="nav-social blog ">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                            </span>
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
                                <span class="glyphicon glyphicon-chevron-left"></spas>
                                    <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="clearfix top-30">
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <blockquote>
                                <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                            </blockquote>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ul>
                                <li>For 50 years, WWF has been protecting the future of nature.</li>
                                <li>For 50 years, WWF has been protecting</li>
                                <li>the future of nature.</li>
                            </ul>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                        <div id="calendar"></div>
                        <h3>Committee</h3>
                        <div class="team" >
                            <div class="wrapper" style="background:url(/assets/images/team/team-03.png) center/cover no-repeat;">
                                <div class="data" id="luv-data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                        <h5><b>Email</b></h5>
                                        <h5><b>Telephone</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Presentation</h3>
                        <div class="panel panel-default" id="luv-document-panel">
                            <div class="panel-heading">Documents</div>
                            <div class="panel-body">
                                <ul>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="breadcrumbs"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Take part of the event</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="projects">
                        <div>
                            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" id="stars" class="btn" href="#tab1" data-toggle="tab">
                                        <div class="hidden-xs">Free <br>Offer</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="favorites" class="btn btn-white" href="#tab2" data-toggle="tab">
                                        <div class="hidden-xs">500<br>CFA</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="following" class="btn btn-white" href="#tab3" data-toggle="tab">
                                        <div class="hidden-xs">Needy<br>student project</div>
                                    </button>
                                </div>
                            </div>
                            <div class="well" style="background-color: #f8f8f8; background-image: none;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h3>Title of the main project</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="row top-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" id="luv-form-button" style="font-size: 16px;">Subscribe</button>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="tab2">
                                        <h3>Title of the main project 2</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                    <div class="tab-pane fade in" id="tab3">
                                        <h3>Title of the main project 3</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            ',
            'top_menu' => false,
            'url' => '/pae-events/conference',
            'banner' => false,
            'route_name' => 'pae-events.conference'
        ]);

        
        Page::create([
            'nav_item_id' => 5,
            'title_en' => 'Evaluation',
            'title_fr' => 'Evaluation',
            'content_en' => '
            <div class="simple-slider">
            <div class="swiper-container horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-container vertical">
                            <div class="swiper-wrapper vertical">
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/slider-01.jpg);">
                                    <div class="slider-layer">
                                        <div style="width: 100%;" class="slider-text luv-slider-text">
                                            <h1 style="text-align: left">Welcome to Luv 2019</h1>
                                            <h3>The <span class="luv-slider-text">University support</span></h3>
                                            <h3><span class="luv-slider-text">program </span>website</h3>
                                            <div style="padding-top: 1%;">
                                                <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i> </a>
                                                <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination vertical"></div>
                        </div></div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <h4 class="luv-breadcrumb">Presentation of Luv<br>What is Luv?</h4>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8" style="padding-top: 1%;">
                        <span class="posted-by bottom-30">Posted by Admin</span>
                        <span style="float: right" class="nav-social blog ">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                            </span>
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
                                <span class="glyphicon glyphicon-chevron-left"></spas>
                                    <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="clearfix top-30">
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <blockquote>
                                <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                            </blockquote>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ul>
                                <li>For 50 years, WWF has been protecting the future of nature.</li>
                                <li>For 50 years, WWF has been protecting</li>
                                <li>the future of nature.</li>
                            </ul>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                        <div id="calendar"></div>
                        <h3>Committee</h3>
                        <div class="team" >
                            <div class="wrapper" style="background:url(/assets/images/team/team-03.png) center/cover no-repeat;">
                                <div class="data" id="luv-data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                        <h5><b>Email</b></h5>
                                        <h5><b>Telephone</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Presentation</h3>
                        <div class="panel panel-default" id="luv-document-panel">
                            <div class="panel-heading">Documents</div>
                            <div class="panel-body">
                                <ul>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="breadcrumbs"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Take part of the event</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="projects">
                        <div>
                            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" id="stars" class="btn" href="#tab1" data-toggle="tab">
                                        <div class="hidden-xs">Free <br>Offer</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="favorites" class="btn btn-white" href="#tab2" data-toggle="tab">
                                        <div class="hidden-xs">500<br>CFA</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="following" class="btn btn-white" href="#tab3" data-toggle="tab">
                                        <div class="hidden-xs">Needy<br>student project</div>
                                    </button>
                                </div>
                            </div>
                            <div class="well" style="background-color: #f8f8f8; background-image: none;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h3>Title of the main project</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="row top-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" id="luv-form-button" style="font-size: 16px;">Subscribe</button>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="tab2">
                                        <h3>Title of the main project 2</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                    <div class="tab-pane fade in" id="tab3">
                                        <h3>Title of the main project 3</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            ',
            'content_fr' => '
            <div class="simple-slider">
            <div class="swiper-container horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-container vertical">
                            <div class="swiper-wrapper vertical">
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/slider-01.jpg);">
                                    <div class="slider-layer">
                                        <div style="width: 100%;" class="slider-text luv-slider-text">
                                            <h1 style="text-align: left">Welcome to Luv 2019</h1>
                                            <h3>The <span class="luv-slider-text">University support</span></h3>
                                            <h3><span class="luv-slider-text">program </span>website</h3>
                                            <div style="padding-top: 1%;">
                                                <a href="#" class="read-more">Read More<i class="fa-fw fa fa-arrow-circle-right"></i> </a>
                                                <a href="#" class="sign-up">Sign up<i class="fa-fw fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                                <div class="swiper-slide vertical" style="background-image:url(/assets/images/slider/Digital-marketing-expert.jpg);">
                                    <div class="col-md-12">
                                        <h1>Welcome to Pae Essamba</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination vertical"></div>
                        </div></div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <h4 class="luv-breadcrumb">Presentation of Luv<br>What is Luv?</h4>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8" style="padding-top: 1%;">
                        <span class="posted-by bottom-30">Posted by Admin</span>
                        <span style="float: right" class="nav-social blog ">
                                                <span class="follow-us-nav text-right">Share:</span>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                            </span>
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
                                <span class="glyphicon glyphicon-chevron-left"></spas>
                                    <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="clearfix top-30">
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <blockquote>
                                <p>For 50 years, WWF has been protecting the future of nature. The world\'s leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                            </blockquote>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <ul>
                                <li>For 50 years, WWF has been protecting the future of nature.</li>
                                <li>For 50 years, WWF has been protecting</li>
                                <li>the future of nature.</li>
                            </ul>
                            <h4><b>Paragraph Title</b></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                        <div id="calendar"></div>
                        <h3>Committee</h3>
                        <div class="team" >
                            <div class="wrapper" style="background:url(/assets/images/team/team-03.png) center/cover no-repeat;">
                                <div class="data" id="luv-data">
                                    <div class="content">
                                        <h4 class="title">John<span>&nbsp;Doe</span></h4>
                                        <h5>CEO and Founder</h5>
                                        <h5><b>Email</b></h5>
                                        <h5><b>Telephone</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Presentation</h3>
                        <div class="panel panel-default" id="luv-document-panel">
                            <div class="panel-heading">Documents</div>
                            <div class="panel-body">
                                <ul>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                    <li><i class="fa fa-download"></i>&nbsp;Presentation of Luv </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container" style="padding-top: 30px;padding-bottom: 35px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="breadcrumbs"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Take part of the event</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="projects">
                        <div>
                            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" id="stars" class="btn" href="#tab1" data-toggle="tab">
                                        <div class="hidden-xs">Free <br>Offer</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="favorites" class="btn btn-white" href="#tab2" data-toggle="tab">
                                        <div class="hidden-xs">500<br>CFA</div>
                                    </button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" id="following" class="btn btn-white" href="#tab3" data-toggle="tab">
                                        <div class="hidden-xs">Needy<br>student project</div>
                                    </button>
                                </div>
                            </div>
                            <div class="well" style="background-color: #f8f8f8; background-image: none;border-top-left-radius: 0px;border-top-right-radius: 0px;">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h3>Title of the main project</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <div class="row top-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Name & surname</label>
                                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-success" id="luv-form-button" style="font-size: 16px;">Subscribe</button>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="tab2">
                                        <h3>Title of the main project 2</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                    <div class="tab-pane fade in" id="tab3">
                                        <h3>Title of the main project 3</h3>
                                        <span class="dot"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            ',
            'top_menu' => false,
            'url' => '/pae-events/evaluation',
            'banner' => false,
            'route_name' => 'pae-events.evaluation'
        ]);


        // Contacts page
        Page::create([
            'nav_item_id' => 6,
            'title_en' => 'Contact Us',
            'title_fr' => 'Nous contacter',
            'content_en' => '
            <div class="container top-30 bottom-30">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="contact-us-title">Always happy to hear from you, feel free  to contact us any time for any quiries</h1>
                    <div class="col-md-7 top-30">
                        <div class="contact__address__inner">
                            <!-- Start Single Adress -->
                            <div class="single__contact__address">
                                <div class="contact__icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact__details">
                                    <p><span>Address</span> : <br> Douala - Cameroun , Akwa - Emilie Saker.
                                        <br>P.O. Box: 1234
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Adress -->
                        </div>
                        <div class="contact__address__inner">
                            <div class="single__contact__address">
                                <div class="contact__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact__details">
                                    <p><span>Phone</span> : +237 123 456 789
                                        <br>+237 123 456 789
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="contact__address__inner">
                            <div class="single__contact__address">
                                <div class="contact__icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="contact__details">
                                    <p><span>Email</span> : infos@pae-essamba.net
                                        <br>infos@pae-essamba.net
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 top-30">
                        <form class="form-horizontal" action=" " method="post"  id="contact_form">
                            <fieldset>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input name="email" placeholder="Your E-Mail Address" class="form-control"  type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input name="phone" placeholder="Your phone" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="comment" placeholder="Your message" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg pull-right"><span class="glyphicon glyphicon-send"></span>&nbsp;Send message</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container top-30 bottom-60">
            <div class="row">
                <div class="col-md-12">
                    <h3>Find us on google map</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2026078.574251953!2d11.1657063924212!3d7.333141364891164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10613753703e0f21%3A0x2b03c44599829b53!2sCameroon!5e0!3m2!1sen!2sbd!4v1554741802822!5m2!1sen!2sbd" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
            ',
            'content_fr' => '
            <div class="container top-30 bottom-30">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="contact-us-title">Always happy to hear from you, feel free  to contact us any time for any quiries</h1>
                    <div class="col-md-7 top-30">
                        <div class="contact__address__inner">
                            <!-- Start Single Adress -->
                            <div class="single__contact__address">
                                <div class="contact__icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact__details">
                                    <p><span>Address</span> : <br> Douala - Cameroun , Akwa - Emilie Saker.
                                        <br>P.O. Box: 1234
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Adress -->
                        </div>
                        <div class="contact__address__inner">
                            <div class="single__contact__address">
                                <div class="contact__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact__details">
                                    <p><span>Phone</span> : +237 123 456 789
                                        <br>+237 123 456 789
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="contact__address__inner">
                            <div class="single__contact__address">
                                <div class="contact__icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="contact__details">
                                    <p><span>Email</span> : infos@pae-essamba.net
                                        <br>infos@pae-essamba.net
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 top-30">
                        <form class="form-horizontal" action=" " method="post"  id="contact_form">
                            <fieldset>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input name="email" placeholder="Your E-Mail Address" class="form-control"  type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input name="phone" placeholder="Your phone" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="comment" placeholder="Your message" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg pull-right"><span class="glyphicon glyphicon-send"></span>&nbsp;Send message</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container top-30 bottom-60">
            <div class="row">
                <div class="col-md-12">
                    <h3>Find us on google map</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2026078.574251953!2d11.1657063924212!3d7.333141364891164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10613753703e0f21%3A0x2b03c44599829b53!2sCameroon!5e0!3m2!1sen!2sbd!4v1554741802822!5m2!1sen!2sbd" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
            ',
            'top_menu' => true,
            'url' => '/contact',
            'banner' => true,
            'route_name' => 'contact'
        ]);
    }
}
