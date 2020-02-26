@extends('layouts.admin')

@section('section-title')
    <i class="fas fa-3x fa-book-open mr-3 text-success"></i><span class="h5 font-weight-700 text-white">Pages</span>
@endsection

@section('content')
    @if (Session::has('created_page'))
        <div class="alert alert-success">{{ session('created_page') }}</div>
    @endif
    @if (Session::has('updated_page'))
        <div class="alert alert-primary">{{ session('updated_page') }}</div>
    @endif
    @if (Session::has('deleted_page'))
        <div class="alert alert-danger">{{ session('deleted_page') }}</div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-tree">
                <div class="p-3 d-flex justify-content-between align-items-center">
                    <div class="left">
                        <i class="fas fa-2x fa-book-open mr-3 text-black-50"></i>
                        <span class="h4 font-weight-700 text-white">Pages</span>
                    </div>

                    {{-- <div class="right">
                        <a href="{{ route('admin.pages.create') }}" class="btn-group font-weight-700 h4">
                            <button class="btn btn-lg rounded-0 btn-dark text-white">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button class="btn btn-lg rounded-0 btn-light bg-white text-tree">Add</button>
                        </a>
                    </div> --}}
                    
                </div>
            </div>

            <div class="col-12 p-0 bg-white table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Pages</th>
                            <th>Content (EN)</th>
                            <th>Content (FR)</th>
                            <th>Top Menu</th>
                            <th>Parent Menu</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($pages as $page)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $page->title_en }} (EN)<br><br>{{ $page->title_fr }} (FR)</td>
                                <td>
                                    {!! str_limit($page->content_en) !!}
                                </td>
                                <td>
                                    {!! str_limit($page->content_fr) !!}
                                </td>
                                <td>{{ $page->top_menu ? "Yes" : "No" }}</td>
                                <td>{{ $page->top_menu ? "/" : ($page->nav_item ? $page->nav_item->title_en : "") }}</td>
                                <td class="small">
                                    <div class="btn-group">
                                        <button class="btn btn-danger rounded-0 px-2 py-0"><i class="fas fa-times"></i></button>
                                        <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-link"><i class="fas text-decoration-none fa-edit text-primary"></i></a>
                                        <button class="btn btn-link"><i class="far text-decoration-none fa-eye text-warning"></i></button>
                                        <button class="btn btn-link"><i class="fas text-decoration-none fa-trash text-purple"></i></button>
                                    </div>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection