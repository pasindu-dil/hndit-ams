@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
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
    </div>
@endsection
