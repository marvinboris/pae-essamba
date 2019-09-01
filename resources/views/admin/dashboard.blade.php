@extends('layouts.admin')

@section('section-title')
    <i class="fas fa-3x fa-tachometer-alt mr-3 text-success"></i><span class="h5 font-weight-700 text-white">Dashboard</span>
@endsection

@section('content')
    <div class="row">
        <div class=" col-xl-3 col-lg-4 col-md-6 pb-3">
            <div class="col-12 rounded-lg shadow-sm" style="background-image: linear-gradient(129deg, #0ca292 0%, #022043 100%);">
                <div class="py-3 row align-items-center m-0 h-100">
                    <div class="left position-relative border-right border-white h-100 pr-3" style="flex: 0 0 60%; width: 60%;">
                        <i class="fas fa-book-open fa-2x text-black-50"></i><br><span class="font-weight-bolder h6">Total<br>Pages</span>
                        <i class="fas fa-circle text-success position-absolute small" style="top: calc(50% - 5px); left: calc(100% - 5px);"></i>
                    </div>
                    <div class="right h1 text-center flex-fill h-100">
                        <div class="h-100 d-flex justify-content-center align-items-center font-weight-700">
                            {{ count($pages) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-xl-3 col-lg-4 col-md-6 pb-3">
            <div class="col-12 rounded-lg shadow-sm" style="background-color: #e39704">
                <div class="py-3 row align-items-center m-0 h-100">
                    <div class="left position-relative border-right border-white h-100 pr-3" style="flex: 0 0 60%; width: 60%;">
                        <i class="fas fa-calendar-check fa-2x text-black-50"></i><br><span class="font-weight-bolder h6">Total<br>Events</span>
                        <i class="fas fa-circle text-success position-absolute small" style="top: calc(50% - 5px); left: calc(100% - 5px);"></i>
                    </div>
                    <div class="right h1 text-center flex-fill h-100">
                        <div class="h-100 d-flex justify-content-center align-items-center font-weight-700">
                            {{ count($events) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-xl-3 col-lg-4 col-md-6 pb-3">
            <div class="col-12 rounded-lg shadow-sm" style="background-color: #477b04">
                <div class="py-3 row align-items-center m-0 h-100">
                    <div class="left position-relative border-right border-white h-100 pr-3" style="flex: 0 0 60%; width: 60%;">
                        <i class="fas fa-newspaper fa-2x text-black-50"></i><br><span class="font-weight-bolder h6">Total<br>News</span>
                        <i class="fas fa-circle text-success position-absolute small" style="top: calc(50% - 5px); left: calc(100% - 5px);"></i>
                    </div>
                    <div class="right h1 text-center flex-fill h-100">
                        <div class="h-100 d-flex justify-content-center align-items-center font-weight-700">
                            {{ count($news) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-xl-3 col-lg-4 col-md-6 pb-3">
            <div class="col-12 rounded-lg shadow-sm" style="background-color: #255585">
                <div class="py-3 row align-items-center m-0 h-100">
                    <div class="left position-relative border-right border-white h-100 pr-3" style="flex: 0 0 60%; width: 60%;">
                        <i class="fas fa-edit fa-2x text-black-50"></i><br><span class="font-weight-bolder h6">Total<br>Posts</span>
                        <i class="fas fa-circle text-success position-absolute small" style="top: calc(50% - 5px); left: calc(100% - 5px);"></i>
                    </div>
                    <div class="right h1 text-center flex-fill h-100">
                        <div class="h-100 d-flex justify-content-center align-items-center font-weight-700">
                            {{ count($posts) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-xl-3 col-lg-4 col-md-6 pb-3">
            <div class="col-12 rounded-lg shadow-sm bg-logo">
                <div class="py-3 row align-items-center m-0 h-100">
                    <div class="left position-relative border-right border-white h-100 pr-3" style="flex: 0 0 60%; width: 60%;">
                        <i class="far fa-user fa-2x text-black-50"></i><br><span class="font-weight-bolder h6">Total<br>Subscribers</span>
                        <i class="fas fa-circle text-success position-absolute small" style="top: calc(50% - 5px); left: calc(100% - 5px);"></i>
                    </div>
                    <div class="right h1 text-center flex-fill h-100">
                        <div class="h-100 d-flex justify-content-center align-items-center font-weight-700">
                            {{ count($users) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-xl-3 col-lg-4 col-md-6 pb-3">
            <div class="col-12 rounded-lg shadow-sm bg-pink">
                <div class="py-3 row align-items-center m-0 h-100">
                    <div class="left position-relative border-right border-white h-100 pr-3" style="flex: 0 0 60%; width: 60%;">
                        <i class="far fa-user fa-2x text-black-50"></i><br><span class="font-weight-bolder h6">Total<br>Users</span>
                        <i class="fas fa-circle text-success position-absolute small" style="top: calc(50% - 5px); left: calc(100% - 5px);"></i>
                    </div>
                    <div class="right h1 text-center flex-fill h-100">
                        <div class="h-100 d-flex justify-content-center align-items-center font-weight-700">
                            {{ count($users) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row py-3">
        <div class="col-lg-8 mb-4">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-4 bg-tree position-relative">
                        <i class="fas fa-calendar-alt fa-3x mr-3"></i><span class="h2">Calendar of activities</span>
                        <div class="position-absolute rounded-left px-3 py-2" style="top: 50%; right: 0%; background-color: rgba(0, 0, 0, .5); transform: translate(0, -50%);">Filter Mode <i class="fas fa-angle-down fa-lg ml-4"></i></div>
                    </div>

                    <div class="col-12 p-4 bg-white text-secondary">
                        <span class="lead">
                                January 24th, <strong class="font-weight-700">2019</strong>
                        </span>
                        <div class="d-flex justify-content-between align-items-center py-5">
                            <i class="far fa-2x fa-arrow-alt-circle-left" style="opacity: .5;"></i>
                            <span class="h1 font-weight-700">No Event</span>
                            <i class="far fa-2x fa-arrow-alt-circle-right" style="opacity: .5;"></i>
                        </div>

                        <div class="d-flex text-logo justify-content-end">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x fa-inverse"></i>
                            </span>

                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>

                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>

                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="col-12 bg-tree h-100">
                <div class="row">
                    <div class="col-12 bg-logo text-center py-3">
                        <div class="h2 font-weight-700">Today's Activity</div>
                        <span class="text-warning">January 24, 2019</span>
                    </div>

                    <div class="col-12 text-center border-bottom border-white p-3 h5 font-weight-700 m-0">
                            " Meeting with the 
                            university student for 
                            entrepreneurship 
                            conduct "
                    </div>

                    <div class="col-12 p-3">
                        <div class="d-flex pl-3">
                            <div class="left position-relative border-right border-white h-100 pr-3" style="flex: 0 0 60%; width: 60%;">
                                <i class="fas fa-circle text-success"></i><br><span class="lead">Total<br>Participants</span>
                            </div>
                            <div class="right h1 text-center flex-fill h-100">
                                <div class="h-100 d-flex justify-content-center align-items-center font-weight-700">
                                    <span class="p-3 rounded-circle border border-success">26</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 mb-4">
            <div class="px-5 py-4 bg-tree font-family-roboto">
                <div class="px-5">
                    <div class="h5 font-weight-normal">
                        Events Statistics
                    </div>
                    <div class="d-flex justify-content-end align-items-center small">
                        <div class="text-success">
                            <i class="fas fa-circle small mr-2"></i>
                            News Subscribers
                        </div>
                        
                        <div class="text-white ml-4">
                            <i class="fas fa-circle small mr-2"></i>
                            Old Subscribers
                        </div>
                    </div>
                    <div class="px-5">
                        <canvas width="100%" height="150" id="events-statistics"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="px-5 py-4 rounded bg-primary font-family-roboto">
                <div class="h5 mb-5 text-success font-weight-normal">
                    Profile Stats
                </div>
                <div class="h1 font-weight-normal text-white mb-5">859 Likes</div>
                <canvas width="100%" height="150" id="profile-stats"></canvas>
            </div>
        </div>
    </div>
@endsection
                    

@section('scripts')
<script>
    document.addEventListener('load', function () {
    var eventsStatistics = document.getElementById('events-statistics').getContext('2d');
    var chart1 = new Chart(eventsStatistics, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: '#a9ff39',
                borderColor: '#a9ff39',
                data: [20, 30, 10, 40, 35, 40, 42, 50, 46, 49, 41, 43]
            }]
        },

        // Configuration options go here
        options: {}
    });

    var profileStats = document.getElementById('profile-stats').getContext('2d');
    var chart2 = new Chart(profileStats, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            // labels: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: '#f7ef0d',
                borderColor: '#f7ef0d',
                data: [20, 30, 10, 40, 35, 40, 42, 50, 46, 49, 41, 43]
            }]
        },

        // Configuration options go here
        options: {}
    });
    });
</script>
@endsection