@include('mngr.layouts.header')
<body>
    <div class="d-flex">
        @include('mngr.layouts.header')
        <div class="content w-100">
            @include('mngr.layouts.sidenav')
            @include('mngr.layouts.topnav')
            <div class="container mt-4">
                <h1>@yield('page-title')</h1>
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('mngr.layouts.footer')
</body>
</html>
