<header class="navbar navbar-expand-md sticky-top flex-md-nowrap p-1 bg-primary shadow" data-bs-theme="light">
    {{-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary"> --}}
        <div class="container-fluid">

            <a class="navbar-brand" href="#">Brand Name</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav mb-md-0 mb-2 me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-4">
                        <div class="dropdown bd-mode-toggle">
                            <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                              <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
                              <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                              <li>
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                                  Light
                                  <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                                </button>
                              </li>
                              <li>
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                                  Dark
                                  <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                                </button>
                              </li>
                              <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
                                  Auto
                                  <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                                </button>
                              </li>
                            </ul>
                          </div>
                        </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-primary" title="Logout"><i
                                class="bi bi-power"></i></button>
                    </div>
                </div>

            </div>
        </div>
    {{-- </nav> --}}
</header>
