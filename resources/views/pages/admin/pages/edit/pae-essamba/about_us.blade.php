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
                        <a class="nav-link" id="en_v-pills-sliders-tab" data-toggle="pill" href="#en_v-pills-sliders" role="tab" aria-controls="en_v-pills-sliders" aria-selected="false">Sliders</a>
                        <a class="nav-link" id="en_v-pills-vision-tab" data-toggle="pill" href="#en_v-pills-vision" role="tab" aria-controls="en_v-pills-vision" aria-selected="false">Vision</a>
                        <a class="nav-link" id="en_v-pills-values-tab" data-toggle="pill" href="#en_v-pills-values" role="tab" aria-controls="en_v-pills-values" aria-selected="false">Values</a>
                        <a class="nav-link" id="en_v-pills-contact-tab" data-toggle="pill" href="#en_v-pills-contact" role="tab" aria-controls="en_v-pills-contact" aria-selected="false">Another text</a>
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
                                                <label for="en_slider_{{ $key }}_content" class="control-label">Content</label>
                                                <textarea name="pae-essamba+about_us+sliders+{{ $key }}+content+en" id="en_summernote_slider_{{ $key }}_content">{!! $content['sliders'][$key]['content']['en'] !!}</textarea>
                                                <div class="custom-file mt-3">
                                                    <input type="file" class="custom-file-input" name="pae-essamba+about_us+sliders+{{ $key }}+img_url" id="en_slider_{{ $key }}">
                                                    <label for="en_slider_{{ $key }}_file" class="custom-file-label">Choose image</label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-4">
                                            <img src="{{ url('/assets/images/' . $slider['img_url']) }}" class="img-fluid rounded shadow-sm" alt="slider {{ $key }}">
                                        </div>
                                    </div>
                                </div>   
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="en_v-pills-vision" role="tabpanel" aria-labelledby="en_v-pills-vision-tab">
                                <h3>Vision</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="en_vision_title" class="control-label h5">Title</label>
                                    <input type="text" name="pae-essamba+about_us+vision+title+en" id="en_vision_title" value="{{ $content['title']['en'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="en_vision_content" class="control-label h5">Content</label>
                                    <textarea name="pae-essamba+about_us+vision+content+en" id="en_summernote_vision_content">{!! $content['vision']['content']['en'] !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="en_vision_quote" class="control-label h5">Quote</label>
                                    <textarea name="pae-essamba+about_us+vision+quote+en" id="en_summernote_vision_quote">{!! $content['vision']['quote']['en'] !!}</textarea>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="en_v-pills-values" role="tabpanel" aria-labelledby="en_v-pills-values-tab">
                                <h3>Values</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="en_values_title" class="control-label h5">Title</label>
                                    <input type="text" name="pae-essamba+about_us+values+title+en" id="en_values_title" value="{{ $content['values']['title']['en'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="en_values_content" class="control-label h5">Content</label>
                                    <textarea name="pae-essamba+about_us+values+content+en" id="en_summernote_values_content">{!! $content['values']['content']['en'] !!}</textarea>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="en_v-pills-contact" role="tabpanel" aria-labelledby="en_v-pills-contact-tab">
                                <h3>Another text</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="en_another_text_title" class="control-label h5">Title</label>
                                    <input type="text" name="pae-essamba+about_us+another_text+title+en" id="en_another_text_title" value="{{ $content['another_text']['title']['en'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="en_another_text_content" class="control-label h5">Content</label>
                                    <textarea name="pae-essamba+about_us+another_text+content+en" id="en_summernote_another_text_content">{!! $content['another_text']['content']['en'] !!}</textarea>
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
                        <a class="nav-link" id="fr_v-pills-vision-tab" data-toggle="pill" href="#fr_v-pills-vision" role="tab" aria-controls="fr_v-pills-vision" aria-selected="false">Vision</a>
                        <a class="nav-link" id="fr_v-pills-values-tab" data-toggle="pill" href="#fr_v-pills-values" role="tab" aria-controls="fr_v-pills-values" aria-selected="false">Values</a>
                        <a class="nav-link" id="fr_v-pills-contact-tab" data-toggle="pill" href="#fr_v-pills-contact" role="tab" aria-controls="fr_v-pills-contact" aria-selected="false">Another text</a>
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
                                                <label for="fr_slider_{{ $key }}_content" class="control-label">Content</label>
                                                <textarea name="pae-essamba+about_us+sliders+{{ $key }}+content+fr" id="fr_summernote_slider_{{ $key }}_content">{!! $content['sliders'][$key]['content']['fr'] !!}</textarea>
                                            </div> 
                                        </div>
                                        <div class="col-4">
                                            <img src="{{ url('/assets/images/'. $slider['img_url']) }}" class="img-fluid rounded shadow-sm" alt="slider {{ $key }}">
                                        </div>
                                    </div>
                                </div>   
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="fr_v-pills-vision" role="tabpanel" aria-labelledby="fr_v-pills-vision-tab">
                                <h3>Vision</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="fr_vision_title" class="control-label h5">Title</label>
                                    <input type="text" name="pae-essamba+about_us+vision+title+fr" id="fr_vision_title" value="{{ $content['title']['fr'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fr_vision_content" class="control-label h5">Content</label>
                                    <textarea name="pae-essamba+about_us+vision+content+fr" id="fr_summernote_vision_content">{!! $content['vision']['content']['fr'] !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="fr_vision_quote" class="control-label h5">Quote</label>
                                    <textarea name="pae-essamba+about_us+vision+quote+fr" id="fr_summernote_vision_quote">{!! $content['vision']['quote']['fr'] !!}</textarea>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="fr_v-pills-values" role="tabpanel" aria-labelledby="fr_v-pills-values-tab">
                                <h3>Values</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="fr_values_title" class="control-label h5">Title</label>
                                    <input type="text" name="pae-essamba+about_us+values+title+fr" id="fr_values_title" value="{{ $content['values']['title']['fr'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fr_values_content" class="control-label h5">Content</label>
                                    <textarea name="pae-essamba+about_us+values+content+fr" id="fr_summernote_values_content">{!! $content['values']['content']['fr'] !!}</textarea>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="fr_v-pills-contact" role="tabpanel" aria-labelledby="fr_v-pills-contact-tab">
                                <h3>Another text</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="fr_another_text_title" class="control-label h5">Title</label>
                                    <input type="text" name="pae-essamba+about_us+another_text+title+fr" id="fr_another_text_title" value="{{ $content['another_text']['title']['fr'] }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fr_another_text_content" class="control-label h5">Content</label>
                                    <textarea name="pae-essamba+about_us+another_text+content+fr" id="fr_summernote_another_text_content">{!! $content['another_text']['content']['fr'] !!}</textarea>
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
                $('#en_summernote_vision_content, #en_summernote_vision_quote, #en_summernote_values_content, #en_summernote_contact_content, #en_summernote_another_text_content, #en_summernote_vision_slider_1_content, #en_summernote_vision_slider_2_content, #en_summernote_vision_slider_3_content').summernote();
                
                $('#fr_summernote_slider_1_content, #fr_summernote_slider_2_content, #fr_summernote_slider_3_content').summernote();
                $('#fr_summernote_vision_content, #fr_summernote_vision_quote, #fr_summernote_values_content, #fr_summernote_contact_content, #fr_summernote_another_text_content, #fr_summernote_vision_slider_1_content, #fr_summernote_vision_slider_2_content, #fr_summernote_vision_slider_3_content').summernote();
            });
        });
    </script>
@endsection