@extends('layouts.admin')

@section('section-title')
    <i class="fas fa-3x fa-edit mr-3 text-success"></i><span class="h5 font-weight-700 text-white">Projects</span>
@endsection

@section('content')
    @if (Session::has('created_project'))
        <div class="alert alert-success">{{ session('created_project') }}</div>
    @endif
    @if (Session::has('updated_project'))
        <div class="alert alert-primary">{{ session('updated_project') }}</div>
    @endif
    @if (Session::has('deleted_project'))
        <div class="alert alert-danger">{{ session('deleted_project') }}</div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-tree">
                <div class="p-3 d-flex justify-content-between align-items-center">
                    <div class="left">
                        <i class="fas fa-2x fa-edit mr-3 text-black-50"></i>
                        <span class="h4 font-weight-700 text-white">Projects</span>
                    </div>

                    <div class="right">
                        <a href="{{ route('admin.projects.create') }}" class="btn-group font-weight-700 h4">
                            <button class="btn btn-lg rounded-0 btn-dark text-white">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button class="btn btn-lg rounded-0 btn-light bg-white text-tree">Add</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 p-0 bg-white table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title (EN / FR)</th>
                            <th>Content (EN)</th>
                            <th>Content (FR)</th>
                            <th>Start date</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $project->title_en }} (EN)<br><br>{{ $project->title_fr }} (FR)</td>
                                <td>
                                    {!! str_limit($project->content_en) !!}
                                </td>
                                <td>
                                    {!! str_limit($project->content_fr) !!}
                                </td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->author->name }}</td>
                                <td class="small">
                                    <div class="btn-group">
                                        <button class="btn btn-danger rounded-0 px-2 py-0"><i class="fas fa-times"></i></button>
                                        <button class="btn btn-link"><i class="fas text-decoration-none fa-edit text-primary"></i></button>
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

            {{ $projects->links() }}

            <div class="col-12 py-3 d-flex justify-content-end align-items-center">
                <button class="btn btn-link font-weight-700 text-success text-decoration-none">
                    <i class="fas fa-arrow-left mr-3"></i>
                    Previous page
                </button>

                <button class="btn font-weight-700 btn-success text-white rounded-0">1</button>
                <button class="btn font-weight-700 btn-link text-secondary">2</button>
                <button class="btn font-weight-700 btn-link text-secondary">3</button>

                <button class="btn btn-link text-success font-weight-700 text-decoration-none">
                    Next page
                    <i class="fas fa-arrow-right ml-3"></i>
                </button>
            </div>
        </div>
    </div>
@endsection