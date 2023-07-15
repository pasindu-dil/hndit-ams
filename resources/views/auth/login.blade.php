@extends('layouts.app')

@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <form class="card" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="card card-plain mt-8">
                                    <div class="card-header pb-0 text-left bg-transparent">
                                        <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                        <p class="mb-0">Enter your email and password to sign in</p>
                                    </div>
                                    <div class="card-body">
                                        <form role="form">
                                            <label>Email</label>
                                            <div class="mb-3">
                                                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                                    placeholder="Email" aria-label="Email" aria-describedby="email-addon"
                                                    @error('email') is-invalid @enderror">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <label>Password</label>
                                            <div class="mb-3">
                                                <input type="password" name="password" class="form-control"
                                                    @error('password') is-invalid @enderror" placeholder="Password"
                                                    aria-label="Password" aria-describedby="password-addon">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="rememberMe"
                                                    checked="">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign
                                                    in</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-4 text-sm mx-auto">
                                            Don't have an account?
                                            <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign
                                                up</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card-body">
                    <form class="card" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-body p-6">
                            <div class="card-title">Login to your account</div>

                            <div class="form-group">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Password
                                    <a href="/forgot-password.html" class="float-right small">I forgot password</a>
                                </label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" />
                                    <span class="custom-control-label">Remember me</span>
                                </label>
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                        </div>
                    </form>

                    <div class="text-center text-muted">
                        Don't have account yet? <a href="/register.html">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
