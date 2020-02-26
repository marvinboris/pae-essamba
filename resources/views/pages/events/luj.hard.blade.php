@extends('layouts.app')

@section('content')
    <div class="simple-slider">
        <div class="swiper-container horizontal">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-container vertical">
                        <div class="swiper-wrapper vertical">
                            <div class="swiper-slide vertical" style="background-image:url(assets/images/slider/slider-01.jpg);">
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
                            <div class="swiper-slide vertical" style="background-image:url(assets/images/slider/Digital-marketing-expert.jpg);">
                                <div class="col-md-12">
                                    <h1>Welcome to Pae Essamba</h1>
                                </div>
                            </div>
                            <div class="swiper-slide vertical" style="background-image:url(assets/images/slider/Digital-marketing-expert.jpg);">
                                <div class="col-md-12">
                                    <h1>Welcome to Pae Essamba</h1>
                                </div>
                            </div>
                            <div class="swiper-slide vertical" style="background-image:url(assets/images/slider/Digital-marketing-expert.jpg);">
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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <blockquote>
                            <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
                        </blockquote>
                        <h4><b>Paragraph Title</b></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <ul>
                            <li>For 50 years, WWF has been protecting the future of nature.</li>
                            <li>For 50 years, WWF has been protecting</li>
                            <li>the future of nature.</li>
                        </ul>
                        <h4><b>Paragraph Title</b></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 id="calendar-tittle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Calendar of events</h4>
                    <div id="calendar"></div>
                    <h3>Committee</h3>
                    <div class="team" >
                        <div class="wrapper" style="background:url(assets/images/team/team-03.png) center/cover no-repeat;">
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
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                </div>
                                <div class="tab-pane fade in" id="tab3">
                                    <h3>Title of the main project 3</h3>
                                    <span class="dot"></span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p><a href="#">Read more&nbsp; <i class="fa fa-arrow-right"></i></a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection