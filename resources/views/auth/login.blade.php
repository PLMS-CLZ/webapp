@extends('layouts.app')

@section('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
@endsection

@section('content')
    <div class="container py-4" style="margin-top: 2%">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="body border-info">
                    <div class="card border-secondary bg-secondary overflow-hidden" style="height: 22rem;">
                        <p class="fw-bold d-flex p-0 m-auto mt-0" style="font-family: 'Montserrat', sans-serif;">
                            <img src="{{ asset('img/logo.png') }}" class="" style="">
                        </p>
                    </div>

                    <div class="card-body bg-secondary" style=";">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3 justify-content-center">
                                {{-- <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label> --}}

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email">
                                    @if ($errors->has('email'))
                                        <div class="error text-danger">{{ $errors->first('email') }}</div>

                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                {{-- <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                                <div class="col-md-8">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" value="{{ old('password') }}"
                                        placeholder="Password">
                                    @if ($errors->has('password'))
                                        <div class="error text-danger">{{ $errors->first('password') }}</div>

                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary bg-success px-4">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-info" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
