{{-- <ul class="nav justify-content-center mx-5 nav-bar">
    @if (Auth::user() && Auth::user()->hasRole('Super Admin') || Auth::user()->hasAnyPermission(['dashboard index']))
        <li class="nav-item {{ in_array(Route::currentRouteName(), ['dashboard.index']) ? 'active' : null }}">
            <a class="nav-link" aria-current="page" href="/">Dashboard</a>
        </li>
    @endif
    @if (Auth::user() && Auth::user()->hasRole('Super Admin') || Auth::user()->hasAnyPermission(['assignment index']))
        <li class="nav-item {{ in_array(Route::currentRouteName(), ['assignment.index']) ? 'active' : null }}">
            <a class="nav-link" aria-current="page" href="{{ route('assignment.index') }}">Assignmnet</a>
        </li>
    @endif
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
</ul> --}}


<div class="page-main">
    <div class="header py-4">
        <div class="container">
            <div class="d-flex">
                <a class="header-brand" href="./index.html">
                    <img src="./demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
                </a>
                <div class="d-flex order-lg-2 ml-auto">
                    <div class="nav-item d-none d-md-flex">
                        <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary"
                            target="_blank">Source code</a>
                    </div>
                    <div class="dropdown d-none d-md-flex">
                        <a class="nav-link icon" data-toggle="dropdown">
                            <i class="fe fe-bell"></i>
                            <span class="nav-unread"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar mr-3 align-self-center"
                                    style="background-image: url(demo/faces/male/41.jpg)"></span>
                                <div>
                                    <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                                    <div class="small text-muted">10 minutes ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar mr-3 align-self-center"
                                    style="background-image: url(demo/faces/female/1.jpg)"></span>
                                <div>
                                    <strong>Alice</strong> started new task: Tabler UI design.
                                    <div class="small text-muted">1 hour ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar mr-3 align-self-center"
                                    style="background-image: url(demo/faces/female/18.jpg)"></span>
                                <div>
                                    <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                                    <div class="small text-muted">2 hours ago</div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </div>
                </div>
                <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse"
                    data-target="#headerMenuCollapse">
                    <span class="header-toggler-icon"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 ml-auto">
                    <form class="input-icon my-3 my-lg-0">
                        <input type="search" class="form-control header-search" placeholder="Search&hellip;"
                            tabindex="1">
                        <div class="input-icon-addon">
                            <i class="fe fe-search"></i>
                        </div>
                    </form>
                </div>
                <div class="col-lg order-lg-first">
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.index') }}" class="nav-link"><i class="fe fe-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('assignment.index') }}" class="nav-link" data-toggle="dropdown"><i
                                    class="fe fe-box"></i> Assignment</a>
                            <div class="dropdown-menu dropdown-menu-arrow">
                                <a href="./cards.html" class="dropdown-item ">Cards design</a>
                                <a href="./charts.html" class="dropdown-item ">Charts</a>
                                <a href="./pricing-cards.html" class="dropdown-item ">Pricing cards</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ route('report.index') }}" class="nav-link" data-toggle="dropdown"><i
                                    class="fe fe-calendar"></i> Report</a>
                            <div class="dropdown-menu dropdown-menu-arrow">
                                <a href="./maps.html" class="dropdown-item ">Maps</a>
                                <a href="./icons.html" class="dropdown-item ">Icons</a>
                                <a href="./store.html" class="dropdown-item ">Store</a>
                                <a href="./blog.html" class="dropdown-item ">Blog</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('student.index') }}" class="nav-link" data-toggle="dropdown"><i
                                    class="fe fe-box"></i> Student</a>
                            <div class="dropdown-menu dropdown-menu-arrow">
                                <a href="./cards.html" class="dropdown-item ">Cards design</a>
                                <a href="./charts.html" class="dropdown-item ">Charts</a>
                                <a href="./pricing-cards.html" class="dropdown-item ">Pricing cards</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i
                                    class="fe fe-file"></i> Pages</a>
                            <div class="dropdown-menu dropdown-menu-arrow">
                                <a href="./profile.html" class="dropdown-item ">Profile</a>
                                <a href="./login.html" class="dropdown-item ">Login</a>
                                <a href="./register.html" class="dropdown-item ">Register</a>
                                <a href="./forgot-password.html" class="dropdown-item ">Forgot password</a>
                                <a href="./400.html" class="dropdown-item ">400 error</a>
                                <a href="./401.html" class="dropdown-item ">401 error</a>
                                <a href="./403.html" class="dropdown-item ">403 error</a>
                                <a href="./404.html" class="dropdown-item ">404 error</a>
                                <a href="./500.html" class="dropdown-item ">500 error</a>
                                <a href="./503.html" class="dropdown-item ">503 error</a>
                                <a href="./email.html" class="dropdown-item ">Email</a>
                                <a href="./empty.html" class="dropdown-item ">Empty page</a>
                                <a href="./rtl.html" class="dropdown-item ">RTL mode</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./form-elements.html" class="nav-link"><i class="fe fe-check-square"></i>
                                Forms</a>
                        </li>
                        <li class="nav-item">
                            <a href="./gallery.html" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="./docs/index.html" class="nav-link"><i class="fe fe-file-text"></i>
                                Documentation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
