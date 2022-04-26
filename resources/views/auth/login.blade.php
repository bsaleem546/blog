@extends('layouts.log')

@section('content')

    <div class="col-lg-6">
        <div class="login-sec">
            <ul class="sign-control">
                <li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>
                <li data-tab="tab-2"><a href="#" title="">Sign up</a></li>
            </ul>
            <div class="sign_in_sec current" id="tab-1">
                <h3>Sign in</h3>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 no-pdd">
                            <div class="sn-field">
                                <input id="email" type="email" name="email" required autocomplete="email" autofocus placeholder="Email">
                                <i class="la la-user"></i>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 no-pdd">
                            <div class="sn-field">
                                <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                                <i class="la la-lock"></i>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 no-pdd">
                            <div class="checky-sec">
                                <div class="fgt-sec">
                                    <input type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">
                                        <span></span>
                                    </label>
                                    <small>Remember me</small>
                                </div>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12 no-pdd">
                            <button type="submit">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="sign_in_sec" id="tab-2">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 no-pdd">
                            <div class="sn-field">
                                <input id="name" type="text" name="name" value="{{ old('name') }}"
                                       placeholder="Full Name" required autocomplete="name" autofocus>
                                <i class="la la-user"></i>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 no-pdd">
                            <div class="sn-field">
                                <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <i class="la la-globe"></i>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 no-pdd">
                            <div class="sn-field">
                                <input id="password" type="password" name="password" required autocomplete="new-password">
                                <i class="la la-lock"></i>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 no-pdd">
                            <div class="sn-field">
                                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                                <i class="la la-lock"></i>
                            </div>
                        </div>
                        <div class="col-lg-12 no-pdd">
                            <button type="submit" value="submit">Get Started</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
