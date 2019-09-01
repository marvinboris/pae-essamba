<aside style="background-color: #020e1b; width: 250px; flex: 0 0 250px;" class="h-100 position-absolute">
    <div class="row">
        <div class="col-12 d-flex px-4 align-items-center" style="height: 78px;">
            <a href="{{ route('welcome') }}" class="col-12 text-decoration-none border-bottom border-secondary d-flex py-3 h-100">
                <img src={{ asset('assets/images/logo.png') }} alt="Logo Pae Essamba" class="mr-2 h-100">
                <div class="font-weight-bold h5" style="color: #6ec102;">
                    Pae<br>Essamba
                </div>
            </a>
        </div>

        <div class="col-12 d-flex mb-3 pt-3 px-4 align-items-center" style="height: 111px;">
            <div class="col-12 border-bottom border-secondary d-flex h-100">
                <div class="rounded-circle border-success border d-flex justify-content-center align-items-center mr-3" style="border-width: 2px !important; height: 60px; width: 60px;">
                    <img src={{ "https://placehold.it/100x100" }} alt="Felicity Doe" class="rounded-circle" style="object-fit: cover; object-position: center; height: 51px; width: 51px;">
                </div>
                <div class="py-2">
                    <div class="mr-2 text-white">
                        <strong class="font-family-montserrat">Felicity Doe</strong>
                    </div>
                    <div>
                        <i class="fas fa-circle small text-warning mr-2"></i>
                        <span class="text-success">
                            Admin
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-12">
            <nav class="text-white font-family-raleway">
                <a href={{ route('admin.dashboard') }} class="{{ "d-flex nav-item justify-content-between align-items-center text-reset text-decoration-none py-3 pr-4" . (!Request::segment(2) ? " active" : " pl-5") }}">
                    <div>
                        <i class="fas fa-tachometer-alt text-success" style="width: 30px;"></i>Dashboard
                    </div>
                </a>

                
                <a href={{ route('admin.pages.index') }} class="{{ "d-flex nav-item justify-content-between align-items-center text-reset text-decoration-none py-3 pr-4" . (Request::segment(2) === "pages" ? " active" : " pl-5") }}">
                    <div>
                            <i class="fas fa-book-open text-success" style="width: 30px;"></i>Pages
                    </div>
                </a>
    
                <a href={{ route('admin.events.index') }} class="{{ "d-flex nav-item justify-content-between align-items-center text-reset text-decoration-none py-3 pr-4" . (Request::segment(2) === "events" ? " active" : " pl-5") }}">
                    <div>
                        <i class="fas fa-calendar-check text-success" style="width: 30px;"></i>Pae Events
                    </div>
                </a>
    
                <a href={{ route('admin.projects.index') }} class="{{ "d-flex nav-item justify-content-between align-items-center text-reset text-decoration-none py-3 pr-4" . (Request::segment(2) === "projects" ? " active" : " pl-5") }}">
                    <div>
                        <i class="fas fa-edit text-success" style="width: 30px;"></i>Projects
                    </div>
                </a>
    
                <a href="#" class="{{ "d-flex nav-item justify-content-between align-items-center text-reset text-decoration-none py-3 pr-4" . (Request::segment(2) === "notifications" ? " active" : " pl-5") }}">
                    <div>
                        <i class="fas fa-comment text-success" style="width: 30px;"></i>Notifications
                    </div>
                </a>
    
                <a href="#" class="{{ "d-flex nav-item justify-content-between align-items-center text-reset text-decoration-none py-3 pr-4" . (Request::segment(2) === "queries" ? " active" : " pl-5") }}">
                    <div>
                        <i class="far fa-envelope text-success" style="width: 30px;"></i>Contact Queries
                    </div>
                </a>
    
                <div>
                    <div data-toggle="collapse" style="cursor: pointer;" data-target="#settings" class="{{ "d-flex nav-item justify-content-between align-items-center py-3 pr-4" . (Request::segment(2) === "settings" ? " active" : " pl-5") }}">
                        <div>
                            <i class="fas fa-cog text-success" style="width: 30px;"></i>Settings
                        </div>

                        <i class="fas fa-angle-down fa-lg"></i>
                    </div>
                    
                    <div class="border-top border-light collapse small p-3 position-relative" style="background-color: #021926" id="settings">
                        <div class="position-absolute bg-light" style="width: 1px; height: calc(100% - 4px); left: 40px; top: 0;"></div>

                        <a href="#" class="text-reset text-decoration-none d-block pl-5 py-1 position-relative">
                            <div class="bg-light position-absolute" style="height: 1px; width: 16px; left: 24px; top: calc(50% - .5px);"></div>
                            Company settings
                        </a>

                        <a href="#" class="text-reset text-decoration-none d-block pl-5 py-1 position-relative">
                            <div class="bg-light position-absolute" style="height: 1px; width: 16px; left: 24px; top: calc(50% - .5px);"></div>
                            Users settings
                        </a>

                        <a href="#" class="text-reset text-decoration-none d-block pl-5 py-1 position-relative">
                            <div class="bg-light position-absolute" style="height: 1px; width: 16px; left: 24px; top: calc(50% - .5px);"></div>
                            Language settings
                        </a>

                        <a href="#" class="text-reset text-decoration-none d-block pl-5 py-1 position-relative">
                            <div class="bg-light position-absolute" style="height: 1px; width: 16px; left: 24px; top: calc(50% - .5px);"></div>
                            Social settings
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</aside>
    