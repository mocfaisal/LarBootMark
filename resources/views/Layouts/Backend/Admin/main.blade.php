@include('Layouts.Backend.Admin.resources')
@include('Layouts.Backend.Admin.header')

<body>
   <!-- Featured Products -->
    {{-- <section class="section">
        <div class="is-fluid container">
            <div class="columns is-full">
            <div class="column">
                <div class="columns is-mobile is-gapless">
                    <div class="column is-one-fifth">

                    </div>
                    <div class="column">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- @include('Layouts.Backend.Admin.footer') --}}

    @include('Layouts.Backend.Admin.navbar')

    <div class="container-fluid">
        <div class="row">
            {{-- <div class="sidebar border-right col-md-3 col-lg-2 bg-body-tertiary border p-0">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary" id="sidebarMenu" tabindex="-1"
                    aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-md-flex flex-column pt-lg-3 overflow-y-auto p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active gap-2" aria-current="page"
                                    href="#">
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    Products
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    Customers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    Reports
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    Integrations
                                </a>
                            </li>
                        </ul>

                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center text-body-secondary text-uppercase mb-1 mt-4 px-3">
                            <span>Saved reports</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    Current month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    Last quarter
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    Social engagement
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    Year-end sale
                                </a>
                            </li>
                        </ul>

                        <hr class="my-3">

                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}

            @include('Layouts.Backend.Admin.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>



</body>

</html>

@yield('global.resources.footer')
@yield('global.javascript.code')

@yield('private.js.file')
@yield('private.js.code')
