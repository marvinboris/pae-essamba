@php
    $allNavItems = App\NavItem::all();
    $allPages = App\Page::all();
    $navItems = [];
    $pages = [];
    if (session('lang') === null) Session::put('lang', 'en');
    foreach ($allNavItems as $navItem) {
        if (session('lang') === 'en') $navItems[$navItem->title_en] = $navItem->title_en;
        elseif (session('lang') === 'fr') $navItems[$navItem->title_en] = $navItem->title_fr;
    }
    foreach ($allPages as $item) {
        if (session('lang') === 'en') $pages[$item->title_en] = $item->title_en;
        elseif (session('lang') === 'fr') $pages[$item->title_en] = $item->title_fr;
    }
@endphp
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
                            <div class="col-md-12" style="padding-right: 0px; padding-left: 143px;">
                                <span class="header-email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;
                                    <a href="mailto:infos@pae-essamba.net" style="text-transform: lowercase;">infos@pae-essamba.net</a>
                                </span>
                                <span class="header-email" style="padding-left: 10px;">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;
                                    <a href="#">+237 123 456 789</a>
                                </span>
                                <span style="float: right" class="nav-social">
                                    <span class="follow-us-nav text-right">{{ session('lang') === 'fr' ? 'Suivez-nous' : 'Follow us' }}:</span>
                                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </span>
                            </div>
                            <div class="col-md-12">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="{{ !Request::segment(1) ? "active" : "" }}"><a href="{{ route('welcome') }}" style="font-size: 14px;"><i class="fa fa-home"
                                                aria-hidden="true"></i>&nbsp;{{ $navItems['Home'] }}</a></li>
                                    <li class="dropdown {{ in_array(Request::segment(1), ['about', 'blog', 'partners']) ? "active" : "" }}"><a class="dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" style="font-size: 14px;" href="#">Pae Essamba <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a style="font-size: 14px;" href="{{ route('pae-essamba.about') }}">{{ $pages['About Us'] }}</a></li>
                                            <li><a style="font-size: 14px;" href="{{ route('pae-essamba.blog') }}">{{ $pages['Our Blog'] }}</a></li>
                                            <li><a style="font-size: 14px;" href="#">
                                                {{-- {{ $pages['Partners'] }} --}}
                                            </a></li>
                                            <li><a style="font-size: 14px;" href="#">
                                                {{-- {{ $pages['Project Components'] }} --}}
                                            </a></li>
                                        </ul>
                                    </li>
                                    <!--<li><a style="font-size: 14px;" href="#">Posts</a></li>-->
                                    <li class="dropdown {{ in_array(Request::segment(1), ['reports', 'articles', 'echo', 'procedure']) ? "active" : "" }}"><a class="dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" style="font-size: 14px;" href="#">{{ $navItems['Posts'] }} <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a style="font-size: 14px;" href="{{ route('posts.reports') }}">{{ $pages['Reports'] }}</a></li>
                                            <li><a style="font-size: 14px;" href="{{ route('posts.articles') }}">{{ $pages['Articles'] }}</a></li>
                                            <li><a style="font-size: 14px;" href="{{ route('posts.essamba-echo') }}">{{ $pages['Essamba Echo'] }}</a></li>
                                            <li><a style="font-size: 14px;" href="{{ route('posts.procedure') }}">{{ $pages['Annual procedure'] }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::segment(1) === "news" ? "active" : "" }}"><a style="font-size: 14px;" href="{{ route('news') }}">News</a></li>
                                    <li class="dropdown {{ in_array(Request::segment(1), ['luj', 'seminar',  'conference', 'evaluation']) }}"><a class="dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" style="font-size: 14px;" href="#">{{ $navItems['Pae Events'] }} <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a style="font-size: 14px;" href="{{ route('pae-events.luj') }}">{{ $pages['LUJ'] }}</a></li>
                                            <li><a style="font-size: 14px;" href="{{ route('pae-events.seminar') }}">{{ $pages['Training Seminar'] }}</a></li>
                                            <li><a style="font-size: 14px;" href="{{ route('pae-events.conference') }}">{{ $pages['Conference'] }}</a></li>
                                            <li><a style="font-size: 14px;" href="{{ route('pae-events.evaluation') }}">{{ $pages['Evaluation'] }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::segment(1) === "contact" ? "active" : "" }}"><a style="font-size: 14px;" href="{{ route('contact') }}">{{ $navItems['Contacts'] }}</a></li>
                                    <li class="dropdown">
                                        <div class="flag-dropdown">
                                            @if (session('lang') === 'en')
                                                <a href="/en" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false"><img src="/assets/images/US-Eng-logo.png" alt="English" style="height: 14px; width: 14px; border-radius: 50%; position: relative; top: -2px;" class="icon-small">&nbsp;|&nbsp;<span style="font-size: 14px;">En</span><span class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a id="navBan" href="/fr" class="language"> <img src="/assets/images/1200px-Flag_of_France.svg.png" style="height: 14px; width: 14px; border-radius: 50%; position: relative; top: -2px;" alt="Français" class="img-thumbnail icon-small"><span style="font-size: 14px;">&nbsp;|&nbsp;Français</span></a></li>
                                                </ul>
                                            @else
                                                @if (session('lang') === 'fr')                                                    
                                                    <a href="/fr" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false"><img src="/assets/images/1200px-Flag_of_France.svg.png" alt="English" style="height: 14px; width: 14px; border-radius: 50%; position: relative; top: -2px;" class="icon-small">&nbsp;|&nbsp;<span style="font-size: 14px;">Fr</span><span class="caret"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a id="navBan" href="/en" class="language"> <img src="/assets/images/US-Eng-logo.png" style="height: 14px; width: 14px; border-radius: 50%; position: relative; top: -2px;" alt="English" class="img-thumbnail icon-small"><span style="font-size: 14px;">&nbsp;|&nbsp;English</span></a></li>
                                                    </ul>
                                                @endif
                                            @endif
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

@if (isset($page))
    @if ($page->banner)
    <header class="py-5 bg-image-full bg-image-contact">
        <div class="layer">
            <h2>{{ session('lang') === 'fr' ? $page->title_fr : $page->title_en }}</h2>
        </div>
    </header>
    @endif
@endif
