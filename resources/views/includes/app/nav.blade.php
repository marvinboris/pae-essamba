<nav class="navbar navbar-default navigation-clean" id="navbar">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="navbar-header"><a class="navbar-brand" href="{{ route('welcome') }}"><img
                                src="/assets/images/logo.png"></a><button class="navbar-toggle collapsed"
                            data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle
                                navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
                                class="icon-bar"></span></button></div>
                </div>
                <div class="col-md-9" style="margin-right: 0px;">
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <div class="row">
                            <div class="col-md-12" style="padding-right: 0px;">
                                <p class="header-email"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<a
                                        href="#">infos@pae-essamba.net</a>
                                    <span style="padding-left: 10px;"><i class="fa fa-phone-square"
                                            aria-hidden="true"></i>&nbsp;<a href="#">+237 123 456 789</a></span>
                                    <span style="float: right" class="nav-social">
                                        <span class="follow-us-nav text-right">Follow Us:</span>
                                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                                        <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#"><i class="fa fa-skype"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </span>
                            </div>
                            <div class="col-md-12">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="{{ !Request::segment(1) ? "active" : "" }}"><a href="{{ route('welcome') }}"><i class="fa fa-home"
                                                aria-hidden="true"></i>&nbsp;Home</a></li>
                                    <li class="dropdown {{ in_array(Request::segment(1), ['about', 'blog', 'partners']) ? "active" : "" }}"><a class="dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" href="#">Pae Essamba <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ route('pae-essamba.about') }}">About Us</a></li>
                                            <li><a href="{{ route('pae-essamba.blog') }}">Blog</a></li>
                                            <li><a href="#">Partners</a></li>
                                            <li><a href="#">Project Components</a></li>
                                        </ul>
                                    </li>
                                    <!--<li><a href="#">Posts</a></li>-->
                                    <li class="dropdown {{ in_array(Request::segment(1), ['reports', 'articles', 'echo', 'procedure']) ? "active" : "" }}"><a class="dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" href="#">Posts <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Reports</a></li>
                                            <li><a href="#">Articles</a></li>
                                            <li><a href="#">Essamba Echo</a></li>
                                            <li><a href="#">Procedure anual</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::segment(1) === "news" ? "active" : "" }}"><a href="{{ route('news') }}">News</a></li>
                                    <li class="dropdown {{ in_array(Request::segment(1), ['luj', 'seminar',  'conference', 'evaluation']) }}"><a class="dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" href="#">Pae Events <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ route('pae-events.luj') }}">LUJ</a></li>
                                            <li><a href="{{ route('pae-events.seminar') }}">Training Seminar</a></li>
                                            <li><a href="{{ route('pae-events.conference') }}">Conference</a></li>
                                            <li><a href="{{ route('pae-events.evaluation') }}">Evaluation</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::segment(1) === "contact" ? "active" : "" }}"><a href="{{ route('contact') }}">Contacts</a></li>
                                    <li class="dropdown">
                                        <div class="flag-dropdown">
                                            <a href="index" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false"><img src="/assets/images/US-Eng-logo.png" alt="English" class="img-thumbnail icon-small">&nbsp;|&nbsp;<span>En</span><span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a id="navBan" href="index?lang=bn" class="language"> <img src="/assets/images/US-Eng-logo.png" alt="Bengali" class="img-thumbnail icon-small"><span>&nbsp;|&nbsp;Spanish</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

@if ($page->banner)
    <header class="py-5 bg-image-full bg-image-contact">
        <div class="layer">
            <h2>{{ $page->title_en }}</h2>
        </div>
    </header>
@endif