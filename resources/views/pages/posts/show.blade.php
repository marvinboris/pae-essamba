@extends('layouts.app')

@section('content')
    {{-- {!! session('lang') === 'fr' ? $page->content_fr : $page->content_en !!} --}}
    <header class="py-5 bg-image-full bg-image-contact">
        <div class="layer">
            <h2 style="font-size: 40px;">{!! session('lang') == 'en' ? $post->title_en : $post->title_fr !!}</h2>
        </div>
    </header>
    <div class="container blog top-30 bottom-30" >
        <div class="row">
            <div class="col-md-8">
                {!! session('lang') == 'en' ? $post->content_en : $post->content_fr !!}
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