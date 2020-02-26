@extends('layouts.app')

@php
    $jsonString = file_get_contents(base_path('content.json'));
    $contentFile = json_decode($jsonString, true);
    $content = $contentFile['posts']['reports'];
@endphp

@section('content')
    <header class="py-5 bg-image-full bg-image-contact">
        <div class="layer">
            <h2 style="font-size: 40px;">{!! $content['title'][session('lang')] !!}</h2>
        </div>
    </header>
    <div class="container blog top-30 bottom-30" >
        <p class="lead">{!! $content['content'][session('lang')] !!}</p>
        <div class="py-5">
            <div class="row py-5">
                @foreach ($posts as $post)
                <div class="col-md-4" style="padding-bottom: 20px;">
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
                                    <h1 class="title"><a href="#">{{ session('lang') == 'en' ? $post->title_en : $post->title_fr }}</a></h1>
                                    <p class="text">{!! str_limit(session('lang') == 'en' ? $post->content_en : $post->content_fr) !!}</p>
                                    <span class="author">{{ session('lang') == 'en' ? 'published by' : 'publié par' }} {{ $post->user->name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection