<ul class="nav justify-content-center mx-5 nav-bar">
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
</ul>
