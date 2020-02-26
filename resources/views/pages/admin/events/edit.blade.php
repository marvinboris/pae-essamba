@extends('layouts.admin')

@section('styles')
    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
@endsection

@section('section-title')
    <i class="fas fa-3x fa-calendar-check mr-3 text-success"></i><span class="h5 font-weight-700 text-white">Pae Events</span>
@endsection

@section('content')
    <form action="{{ route('admin.events.update', $event->id) }}" method="post" class="pt-3">
        @csrf
        <div class="form-group">
            <label for="title_en" class="control-label">English title</label>
            <input type="text" name="title_en" id="title_en" class="form-control" value="{{ $event->title_en }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="title_fr" class="control-label">French title</label>
            <input type="text" name="title_fr" id="title_fr" class="form-control" value="{{ $event->title_fr }}" required>
        </div>
        
        <div class="form-group">
            <label for="summernote_en" class="control-label">English content</label>
            <textarea name="content_en" id="summernote_en" rows="10">{!! $event->content_en !!}</textarea>
            {{-- <div id="summernote"></div> --}}
        </div>
        
        <div class="form-group">
            <label for="summernote_fr" class="control-label">French content</label>
            <textarea name="content_fr" id="summernote_fr" rows="10">{!! $event->content_fr !!}</textarea>
            {{-- <div id="summernote"></div> --}}
        </div>
        <div class="form-group"><button class="btn btn-primary">Modifier</button></div>
    </form>
@endsection

@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js" defer></script>
    <script>
        // var description = new Jodit('#description');
        window.addEventListener('load', function () {
            $(document).ready(function() {
                $('#summernote_en').summernote();
                $('#summernote_fr').summernote();
            });
        });
    </script>
@endsection