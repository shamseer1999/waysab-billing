@include('mngr.layouts.header')

<body>
    <div class="d-flex">
        @include('mngr.layouts.header')
        <div class="content w-100">
            @include('mngr.layouts.sidenav')
            @include('mngr.layouts.topnav')
            <div class="container mt-4">
                <h1>@yield('page-title')</h1>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('mngr.layouts.footer')
</body>

</html>
