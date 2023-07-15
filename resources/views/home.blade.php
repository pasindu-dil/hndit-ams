@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div>
        <div class="row row-cards">
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-green">
                            6%
                            <i class="fe fe-chevron-up"></i>
                        </div>
                        <div class="h1 m-0">43</div>
                        <div class="text-muted mb-4">New Tickets</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-red">
                            -3%
                            <i class="fe fe-chevron-down"></i>
                        </div>
                        <div class="h1 m-0">17</div>
                        <div class="text-muted mb-4">Closed Today</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-green">
                            9%
                            <i class="fe fe-chevron-up"></i>
                        </div>
                        <div class="h1 m-0">7</div>
                        <div class="text-muted mb-4">New Replies</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-green">
                            3%
                            <i class="fe fe-chevron-up"></i>
                        </div>
                        <div class="h1 m-0">27.3K</div>
                        <div class="text-muted mb-4">Followers</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-red">
                            -2%
                            <i class="fe fe-chevron-down"></i>
                        </div>
                        <div class="h1 m-0">$95</div>
                        <div class="text-muted mb-4">Daily Earnings</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-3 text-center">
                        <div class="text-right text-red">
                            -1%
                            <i class="fe fe-chevron-down"></i>
                        </div>
                        <div class="h1 m-0">621</div>
                        <div class="text-muted mb-4">Products</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Home</li>
                        <li class="breadcrumb-item" aria-current="page">
                            @yield('title')
                        </li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <form action="{{ route('google.store') }}" method="get">
                        @csrf
                        <input type="submit" value="Add Account">
                    </form>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
