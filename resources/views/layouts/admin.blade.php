@include('includes.admin.head')

<main class="text-white">
    <div class="col-12 p-4" style="background-color: #001226; height: 111px;">
        @yield('section-title')
    </div>
    
    <div class="col-12 min-vh-100" style="background-color: #001731">
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </div>
</main>

@include('includes.admin.foot')