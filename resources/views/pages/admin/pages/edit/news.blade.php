@extends('layouts.admin')

@section('styles')
    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
@endsection

@section('section-title')
    <i class="fas fa-3x fa-book-open mr-3 text-success"></i><span class="h5 font-weight-700 text-white">Pages</span>
@endsection

@section('content')
    <form action="{{ route('admin.pages.update', $page->id) }}" method="post" class="pt-3">
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
                        <a class="nav-link" id="en_v-pills-paragraphs-tab" data-toggle="pill" href="#en_v-pills-paragraphs" role="tab" aria-controls="en_v-pills-paragraphs" aria-selected="false">Paragraphs</a>
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

                            <div class="tab-pane fade" id="en_v-pills-paragraphs" role="tabpanel" aria-labelledby="en_v-pills-paragraphs-tab">
                                <h3>Paragraphs</h3>
                                <hr>
                                @foreach ($content['paragraphs'] as $key => $paragraph)
                                <div class="form-group">
                                    <label for="en_paragraph_{{ $key }}" class="control-label h5">Paragraph {{ $key }}</label>
                                    
                                    <label for="en_paragraph_{{ $key }}_title" class="control-label">Title</label>
                                    <input type="text" name="news+paragraphs+{{ $key }}+title+en" id="en_paragraph_{{ $key }}_title" value="{{ $paragraph['title']['en'] }}" class="form-control">
                                    
                                    <label for="en_paragraph_{{ $key }}_content" class="control-label">Content</label>
                                    <textarea name="news+paragraphs+{{ $key }}+content+en" id="en_summernote_paragraph_{{ $key }}_content">{!! $content['paragraphs'][$key]['content']['en'] !!}</textarea>
                                </div> 
                                @endforeach
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
                        <a class="nav-link" id="fr_v-pills-paragraphs-tab" data-toggle="pill" href="#fr_v-pills-paragraphs" role="tab" aria-controls="fr_v-pills-paragraphs" aria-selected="false">Sliders</a>
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

                            <div class="tab-pane fade" id="fr_v-pills-paragraphs" role="tabpanel" aria-labelledby="fr_v-pills-paragraphs-tab">
                                <h3>Paragraphs</h3>
                                <hr>
                                @foreach ($content['paragraphs'] as $key => $paragraph)
                                <div class="form-group">
                                    <label for="fr_paragraph_{{ $key }}" class="control-label h5">Paragraph {{ $key }}</label>
                                    
                                    <label for="fr_paragraph_{{ $key }}_title" class="control-label">Title</label>
                                    <input type="text" name="news+paragraphs+{{ $key }}+title+fr" id="fr_paragraph_{{ $key }}_title" value="{{ $paragraph['title']['fr'] }}" class="form-control">
                                    
                                    <label for="fr_paragraph_{{ $key }}_content" class="control-label">Content</label>
                                    <textarea name="news+paragraphs+{{ $key }}+content+fr" id="fr_summernote_paragraph_{{ $key }}_content">{!! $content['paragraphs'][$key]['content']['fr'] !!}</textarea>
                                </div> 
                                @endforeach
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
                $('#en_summernote_paragraph_1_content, #en_summernote_paragraph_2_content, #en_summernote_paragraph_3_content').summernote();
                
                $('#fr_summernote_paragraph_1_content, #fr_summernote_paragraph_2_content, #fr_summernote_paragraph_3_content').summernote();
            });
        });
    </script>
@endsection