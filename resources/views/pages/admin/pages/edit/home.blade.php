@extends('layouts.admin')

@section('styles')
    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
@endsection

@section('section-title')
    <i class="fas fa-3x fa-book-open mr-3 text-success"></i><span class="h5 font-weight-700 text-white">Pages</span>
@endsection

@section('content')
    <form action="{{ route('admin.pages.update', $page->id) }}" method="post" enctype="multipart/form-data" class="pt-3">
        @csrf
        @method('put')
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">English</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">French</a>
            </div>
        </nav>
        <div class="tab-content bg-white rounded-bottom rounded-right text-dark p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <div class="col-2">
                        <div class="nav flex-column nav-pills" id="en_v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="en_v-pills-title-tab" data-toggle="pill" href="#en_v-pills-title" role="tab" aria-controls="en_v-pills-title" aria-selected="true">Title</a>
                        <a class="nav-link" id="en_v-pills-sliders-tab" data-toggle="pill" href="#en_v-pills-sliders" role="tab" aria-controls="en_v-pills-sliders" aria-selected="false">Sliders</a>
                        <a class="nav-link" id="en_v-pills-activities-tab" data-toggle="pill" href="#en_v-pills-activities" role="tab" aria-controls="en_v-pills-activities" aria-selected="false">Activities</a>
                        <a class="nav-link" id="en_v-pills-news-tab" data-toggle="pill" href="#en_v-pills-news" role="tab" aria-controls="en_v-pills-news" aria-selected="false">News</a>
                        <a class="nav-link" id="en_v-pills-contact-tab" data-toggle="pill" href="#en_v-pills-contact" role="tab" aria-controls="en_v-pills-contact" aria-selected="false">Contact</a>
                        <a class="nav-link" id="en_v-pills-team-tab" data-toggle="pill" href="#en_v-pills-team" role="tab" aria-controls="en_v-pills-team" aria-selected="false">Team</a>
                        <a class="nav-link" id="en_v-pills-events-tab" data-toggle="pill" href="#en_v-pills-events" role="tab" aria-controls="en_v-pills-events" aria-selected="false">Events</a>
                        <a class="nav-link" id="en_v-pills-partners-tab" data-toggle="pill" href="#en_v-pills-partners" role="tab" aria-controls="en_v-pills-partners" aria-selected="false">Partners</a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="en_v-pills-tabContent">
                            <div class="tab-pane fade show active" id="en_v-pills-title" role="tabpanel" aria-labelledby="en_v-pills-title-tab">
                                <div class="form-group">
                                    <label for="title_en" class="control-label h3">Title</label>
                                    <hr>
                                    <input type="text" name="title_en" id="title_en" class="form-control" value="{{ $page->title_en }}" required autofocus>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="en_v-pills-sliders" role="tabpanel" aria-labelledby="en_v-pills-sliders-tab">
                                <h3>Sliders</h3>
                                <hr>
                                @foreach ($content['sliders'] as $key => $slider)
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="en_slider_{{ $key }}" class="control-label h5">Slider {{ $key }}</label>
                                                <label for="en_summernote_slider_{{ $key }}_content" class="control-label">Content</label>
                                                <textarea name="home+sliders+{{ $key }}+content+en" id="en_summernote_slider_{{ $key }}_content">{!! $content['sliders'][$key]['content']['en'] !!}</textarea>
                                                <div class="custom-file mt-3">
                                                    <input type="file" class="custom-file-input" name="home+sliders+{{ $key }}+img_url" id="home+sliders+{{ $key }}+img_url">
                                                    <label for="home+sliders+{{ $key }}+img_url" class="custom-file-label">Choose image</label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-4">
                                            <img src="{{ url('/assets/images/'. $slider['img_url']) }}" class="img-fluid rounded shadow-sm" alt="slider {{ $key }}">
                                        </div>
                                    </div>
                                </div>   
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="en_v-pills-activities" role="tabpanel" aria-labelledby="en_v-pills-activities-tab">
                                <h3>Activities</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="en_activities_title" class="control-label h5">Title</label>
                                    <input type="text" name="home+activities+title+en" id="en_activities_title" value="{{ $content['activities']['title']['en'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="en_summernote_activities_content" class="control-label h5">Content</label>
                                    <textarea name="home+activities+content+en" id="en_summernote_activities_content">{!! $content['activities']['content']['en'] !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="en_activities_sliders" class="control-label h5">Sliders</label>
                                    @foreach ($content['activities']['sliders'] as $key => $slider)
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="en_activities_slider_{{ $key }}" class="control-label h6">Activities - Slider {{ $key }}</label>
                                                <label for="en_summernote_activities_slider_{{ $key }}_content" class="control-label">Content</label>
                                                <textarea name="home+activities+sliders+{{ $key }}+content+en" id="en_summernote_activities_slider_{{ $key }}_content">{!! $slider['content']['en'] !!}</textarea>
                                                <div class="custom-file mt-3">
                                                    <input type="file" class="custom-file-input" name="home+activities+sliders+{{ $key }}+img_url" id="home+activities+sliders+{{ $key }}+img_url">
                                                    <label for="home+activities+sliders+{{ $key }}+img_url" class="custom-file-label">Choose image</label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-4">
                                            <img src="{{ url('/assets/images/' . $slider['img_url']) }}" class="img-fluid rounded shadow-sm" alt="activities slider {{ $key }}">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="en_v-pills-news" role="tabpanel" aria-labelledby="en_v-pills-news-tab">
                                <h3>News</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="en_news_title" class="control-label h5">Title</label>
                                    <input type="text" name="home+news+title+en" id="en_news_title" value="{{ $content['news']['title']['en'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="en_summernote_news_content" class="control-label h5">Content</label>
                                    <textarea name="home+news+content+en" id="en_summernote_news_content">{!! $content['news']['content']['en'] !!}</textarea>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="en_v-pills-contact" role="tabpanel" aria-labelledby="en_v-pills-contact-tab">
                                <h3>Contact</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="en_contact_title" class="control-label h5">Title</label>
                                    <input type="text" name="home+contact+title+en" id="en_contact_title" value="{{ $content['contact']['title']['en'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="en_contact_phone" class="control-label h5">Phone</label>
                                    <input type="tel" name="home+contact+phone" id="en_contact_phone" value="{{ $content['contact']['phone'] }}" class="form-control">
                                </div>
                            </div>

                            <div class="tab-pane fade" id="en_v-pills-team" role="tabpanel" aria-labelledby="en_v-pills-team-tab">
                                <h3>Team</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="en_team_title" class="control-label h5">Title</label>
                                    <input type="text" name="home+team+title+en" id="en_team_title" value="{{ $content['team']['title']['en'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="en_summernote_team_content" class="control-label h5">Content</label>
                                    <textarea name="home+team+content+en" id="en_summernote_team_content">{!! $content['team']['content']['en'] !!}</textarea>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="en_v-pills-events" role="tabpanel" aria-labelledby="en_v-pills-events-tab">
                                <h3>Events</h3>
                                <hr>
                                @foreach ($content['events'] as $key => $event)
                                <div class="form-group">
                                    <label for="en_event_{{ $key }}" class="control-label h5">Event {{ $key }}</label>
                                    <div class="form-group">
                                        <label for="en_summernote_event_{{ $key }}_slider_title" class="control-label">Slider's title</label>
                                        <textarea name="home+events+{{ $key }}+slider_title+en" id="en_summernote_event_{{ $key }}_slider_title">{!! $content['events'][$key]['slider_title']['en'] !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="en_summernote_event_{{ $key }}_title" class="control-label">Title</label>
                                        <textarea name="home+events+{{ $key }}+title+en" id="en_summernote_event_{{ $key }}_title">{!! $content['events'][$key]['title']['en'] !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="en_summernote_event_{{ $key }}_content" class="control-label">Content</label>
                                        <textarea name="home+events+{{ $key }}+content+en" id="en_summernote_event_{{ $key }}_content">{!! $content['events'][$key]['content']['en'] !!}</textarea>
                                    </div>
                                </div>    
                                @endforeach
                            </div>

                            <div class="tab-pane fade" id="en_v-pills-partners" role="tabpanel" aria-labelledby="en_v-pills-partners-tab">
                                <h3>Partners</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="en_partners_title" class="control-label h5">Title</label>
                                    <input type="text" name="home+partners+title+en" id="en_partners_title" value="{{ $content['partners']['title']['en'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="en_summernote_partners_content" class="control-label h5">Content</label>
                                    <textarea name="home+partners+content+en" id="en_summernote_partners_content">{!! $content['partners']['content']['en'] !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label for="summernote_en" class="control-label">English content</label>
                    <textarea name="content_en" id="summernote_en" rows="10">{!! $page->content_en !!}</textarea>
                    <div id="summernote"></div>
                </div> --}}                
            </div>

            {{-- French part --}}
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <div class="col-2">
                        <div class="nav flex-column nav-pills" id="fr_v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="fr_v-pills-title-tab" data-toggle="pill" href="#fr_v-pills-title" role="tab" aria-controls="fr_v-pills-title" aria-selected="true">Title</a>
                        <a class="nav-link" id="fr_v-pills-sliders-tab" data-toggle="pill" href="#fr_v-pills-sliders" role="tab" aria-controls="fr_v-pills-sliders" aria-selected="false">Sliders</a>
                        <a class="nav-link" id="fr_v-pills-activities-tab" data-toggle="pill" href="#fr_v-pills-activities" role="tab" aria-controls="fr_v-pills-activities" aria-selected="false">Activities</a>
                        <a class="nav-link" id="fr_v-pills-news-tab" data-toggle="pill" href="#fr_v-pills-news" role="tab" aria-controls="fr_v-pills-news" aria-selected="false">News</a>
                        <a class="nav-link" id="fr_v-pills-contact-tab" data-toggle="pill" href="#fr_v-pills-contact" role="tab" aria-controls="fr_v-pills-contact" aria-selected="false">Contact</a>
                        <a class="nav-link" id="fr_v-pills-team-tab" data-toggle="pill" href="#fr_v-pills-team" role="tab" aria-controls="fr_v-pills-team" aria-selected="false">Team</a>
                        <a class="nav-link" id="fr_v-pills-events-tab" data-toggle="pill" href="#fr_v-pills-events" role="tab" aria-controls="fr_v-pills-events" aria-selected="false">Events</a>
                        <a class="nav-link" id="fr_v-pills-partners-tab" data-toggle="pill" href="#fr_v-pills-partners" role="tab" aria-controls="fr_v-pills-partners" aria-selected="false">Partners</a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="fr_v-pills-tabContent">
                            <div class="tab-pane fade show active" id="fr_v-pills-title" role="tabpanel" aria-labelledby="fr_v-pills-title-tab">
                                <div class="form-group">
                                    <label for="title_fr" class="control-label h3">Title</label>
                                    <hr>
                                    <input type="text" name="title_fr" id="title_fr" class="form-control" value="{{ $page->title_fr }}" required autofocus>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="fr_v-pills-sliders" role="tabpanel" aria-labelledby="fr_v-pills-sliders-tab">
                                <h3>Sliders</h3>
                                <hr>
                                @foreach ($content['sliders'] as $key => $slider)
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="fr_slider_{{ $key }}" class="control-label h5">Slider {{ $key }}</label>
                                                <label for="fr_summernote_slider_{{ $key }}_content" class="control-label">Content</label>
                                                <textarea name="home+sliders+{{ $key }}+content+fr" id="fr_summernote_slider_{{ $key }}_content">{!! $content['sliders'][$key]['content']['fr'] !!}</textarea>
                                            </div> 
                                        </div>
                                        <div class="col-4">
                                            <img src="{{ url('/assets/images/'. $slider['img_url']) }}" class="img-fluid rounded shadow-sm" alt="slider {{ $key }}">
                                        </div>
                                    </div>
                                </div>   
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="fr_v-pills-activities" role="tabpanel" aria-labelledby="fr_v-pills-activities-tab">
                                <h3>Activities</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="fr_activities_title" class="control-label h5">Title</label>
                                    <input type="text" name="home+activities+title+fr" id="fr_activities_title" value="{{ $content['title']['fr'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fr_summernote_activities_content" class="control-label h5">Content</label>
                                    <textarea name="home+activities+content+fr" id="fr_summernote_activities_content">{!! $content['activities']['content']['fr'] !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="fr_activities_sliders" class="control-label h5">Sliders</label>
                                    @foreach ($content['activities']['sliders'] as $key => $slider)
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="fr_activities_slider_{{ $key }}" class="control-label h6">Activities - Slider {{ $key }}</label>
                                                <label for="fr_summernote_activities_slider_{{ $key }}_content" class="control-label">Content</label>
                                                <textarea name="home+activities+sliders+{{ $key }}+content+fr" id="fr_summernote_activities_slider_{{ $key }}_content">{!! $slider['content']['fr'] !!}</textarea>
                                            </div> 
                                        </div>
                                        <div class="col-4">
                                            <img src="{{ url('/assets/images/' . $slider['img_url']) }}" class="img-fluid rounded shadow-sm" alt="activities slider {{ $key }}">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="fr_v-pills-news" role="tabpanel" aria-labelledby="fr_v-pills-news-tab">
                                <h3>News</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="fr_news_title" class="control-label h5">Title</label>
                                    <input type="text" name="home+news+title+fr" id="fr_news_title" value="{{ $content['news']['title']['fr'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fr_news_content" class="control-label h5">Content</label>
                                    <textarea name="home+news+content+fr" id="fr_summernote_news_content">{!! $content['news']['content']['fr'] !!}</textarea>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="fr_v-pills-contact" role="tabpanel" aria-labelledby="fr_v-pills-contact-tab">
                                <h3>Contact</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="fr_contact_title" class="control-label h5">Title</label>
                                    <input type="text" name="home+contact+title+fr" id="fr_contact_title" value="{{ $content['contact']['title']['fr'] }}" class="form-control">
                                </div>
                            </div>

                            <div class="tab-pane fade" id="fr_v-pills-team" role="tabpanel" aria-labelledby="fr_v-pills-team-tab">
                                <h3>Team</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="fr_team_title" class="control-label h5">Title</label>
                                    <input type="text" name="home+team+title+fr" id="fr_team_title" value="{{ $content['team']['title']['fr'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fr_summernote_team_content" class="control-label h5">Content</label>
                                    <textarea name="home+team+content+fr" id="fr_summernote_team_content">{!! $content['team']['content']['fr'] !!}</textarea>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="fr_v-pills-events" role="tabpanel" aria-labelledby="fr_v-pills-events-tab">
                                <h3>Events</h3>
                                <hr>
                                @foreach ($content['events'] as $key => $event)
                                <div class="form-group">
                                    <label for="fr_event_{{ $key }}" class="control-label h5">Event {{ $key }}</label>
                                    <div class="form-group">
                                        <label for="fr_summernote_event_{{ $key }}_slider_title" class="control-label">Slider's title</label>
                                        <textarea name="home+events+{{ $key }}+slider_title+fr" id="fr_summernote_event_{{ $key }}_slider_title">{!! $content['events'][$key]['slider_title']['fr'] !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="fr_summernote_event_{{ $key }}_title" class="control-label">Title</label>
                                        <textarea name="home+events+{{ $key }}+title+fr" id="fr_summernote_event_{{ $key }}_title">{!! $content['events'][$key]['title']['fr'] !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="fr_summernote_event_{{ $key }}_content" class="control-label">Content</label>
                                        <textarea name="home+events+{{ $key }}+content+fr" id="fr_summernote_event_{{ $key }}_content">{!! $content['events'][$key]['content']['fr'] !!}</textarea>
                                    </div>
                                </div>    
                                @endforeach
                            </div>

                            <div class="tab-pane fade" id="fr_v-pills-partners" role="tabpanel" aria-labelledby="fr_v-pills-partners-tab">
                                <h3>Partners</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="fr_partners_title" class="control-label h5">Title</label>
                                    <input type="text" name="home+partners+title+fr" id="fr_partners_title" value="{{ $content['partners']['title']['fr'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fr_summernote_partners_content" class="control-label h5">Content</label>
                                    <textarea name="home+partners+content+fr" id="fr_summernote_partners_content">{!! $content['partners']['content']['fr'] !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="form-group">
                    <label for="summernote_fr" class="control-label">French content</label>
                    <textarea name="content_fr" id="summernote_fr" rows="10">{!! $page->content_fr !!}</textarea>
                    <div id="summernote"></div>
                </div> --}}
            </div>
        </div>

        <div class="form-group"><button class="btn btn-primary mt-3">Edit</button></div>
    </form>
@endsection

@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js" defer></script>
    <script>
        // var description = new Jodit('#description');
        window.addEventListener('load', function () {
            $(document).ready(function() {
                $('#en_summernote_slider_1_content, #en_summernote_slider_2_content, #en_summernote_slider_3_content').summernote();
                $('#en_summernote_activities_content, #en_summernote_news_content, #en_summernote_team_content, #en_summernote_partners_content, #en_summernote_activities_slider_1_content, #en_summernote_activities_slider_2_content, #en_summernote_activities_slider_3_content').summernote();
                $('#en_summernote_event_1_content, #en_summernote_event_1_slider_title, #en_summernote_event_1_title').summernote();
                $('#en_summernote_event_2_content, #en_summernote_event_2_slider_title, #en_summernote_event_2_title').summernote();
                $('#en_summernote_event_3_content, #en_summernote_event_3_slider_title, #en_summernote_event_3_title').summernote();
                
                $('#fr_summernote_slider_1_content, #fr_summernote_slider_2_content, #fr_summernote_slider_3_content').summernote();
                $('#fr_summernote_activities_content, #fr_summernote_news_content, #fr_summernote_team_content, #fr_summernote_partners_content, #fr_summernote_activities_slider_1_content, #fr_summernote_activities_slider_2_content, #fr_summernote_activities_slider_3_content').summernote();
                $('#fr_summernote_event_1_content, #fr_summernote_event_1_slider_title, #fr_summernote_event_1_title').summernote();
                $('#fr_summernote_event_2_content, #fr_summernote_event_2_slider_title, #fr_summernote_event_2_title').summernote();
                $('#fr_summernote_event_3_content, #fr_summernote_event_3_slider_title, #fr_summernote_event_3_title').summernote();
            });
        });
    </script>
@endsection