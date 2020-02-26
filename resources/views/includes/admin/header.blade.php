    <section style="width: calc(100% - 250px); margin-left: 250px;">
        <header style="background-color: #022043; height: 78px;">
            <div class="col-12 py-4 h-100 d-flex justify-content-between align-items-center text-white">
                <div class="left">
                    <i class="fas fa-bars fa-lg"></i>
                </div>
                
                @php
                    $notifications = Auth::user()->notifications;
                @endphp

                <div class="right d-flex justify-content-end align-items-center">
                    <div class="position-relative">
                        <i class="fas fa-lg fa-envelope" id="messages-controller" data-toggle="collapse" data-target="#messages" aria-expanded="false" aria-controls="messages"></i>
                        <span class="badge rounded-circle badge-danger text-white position-relative p-1" style="top: -10px; left: -10px; font-size: 50%;">{{ count($notifications) }}</span>
                        <div class="card collapse position-absolute text-dark" id="messages" style="width: 18rem; right: 0; z-index: 1200;">
                            <div class="card-header py-2 px-3">
                                You have {{ count($notifications) }} messages
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach ($notifications as $notification)
                                <li class="list-group-item py-2 px-3">
                                    <div>
                                        <h5 class="d-inline">Newsletter</h5>
                                        <span class="float-right small text-muted">
                                            {{ $notification->created_at }}
                                        </span>
                                        <div class="text-muted text-truncate">
                                            New subscriber : <strong>{{ $notification->data['email'] }}</strong>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <a href="#" class="card-footer small p-2 text-center">
                                View all messages
                            </a>
                        </div>
                    </div>
                    
                    <div class="position-relative">
                        <i class="fas fa-lg fa-bell" id="notifications-controller" data-toggle="collapse" data-target="#notifications" aria-expanded="false" aria-controls="notifications"></i>
                        <span class="badge rounded-circle badge-warning bg-orange text-white position-relative p-1" style="top: -10px; left: -10px; font-size: 50%;">{{ count($notifications) }}</span>
                        <div class="card collapse position-absolute text-dark" id="notifications" style="width: 18rem; right: 0; z-index: 1200;">
                            <div class="card-header py-2 px-3">
                                You have {{ count($notifications) }} notifications
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach ($notifications as $notification)
                                <li class="list-group-item py-2 px-3">
                                    <div class="text-truncate">
                                        <i class="text-danger fa fa-bell"></i> New subscriber : <strong>{{ $notification->data['email'] }}</strong>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <a href="#" class="card-footer small p-2 text-center">
                                View all notifications
                            </a>
                        </div>
                    </div>
                    
                    <div class="position-relative">
                        <i class="fas fa-2x fa-cog text-success" id="menu-controller" data-toggle="collapse" data-target="#menu" aria-expanded="false" aria-controls="menu"></i>
                        <div class="card collapse position-absolute text-dark" id="menu" style="width: 10rem; right: 0; z-index: 1200;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="text-dark" href="{{ url('profile') }}"><i class="fa fa-user mr-2"></i>Profile</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="text-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off mr-2"></i>Sign out</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>