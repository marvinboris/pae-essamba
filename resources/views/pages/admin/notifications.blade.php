@extends('layouts.admin')

@section('section-title')
    <i class="fas fa-3x fa-bell mr-3 text-success"></i><span class="h5 font-weight-700 text-white">Notifications</span>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-tree">
                <div class="p-3 d-flex justify-content-between align-items-center">
                    <div class="left">
                        <i class="fas fa-2x fa-bell mr-3 text-black-50"></i>
                        <span class="h4 font-weight-700 text-white">Notifications</span>
                    </div>
                </div>
            </div>

            <div class="col-12 p-0 bg-white table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Created at</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($notifications as $notification)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>New subscriber</td>
                                <td class="text-truncate">
                                    New subscriber : <strong>{{ $notification->data['email'] }}</strong>
                                </td>
                                <td>
                                    {{ $notification->created_at }}
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