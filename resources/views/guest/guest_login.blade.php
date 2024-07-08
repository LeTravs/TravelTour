@extends('layouts.guest')

@section('content')
<style>
    /* Styles go here */
</style>

<div class="login-wrapper">
    <div class="card-body login-card-body">
        <p class="login-box-msg">{{ __('Login as Guest') }}</p>

        <form id="guest-form" action="{{ route('guest.login') }}" method="post">
            @csrf

            <div class="input-group mb-3">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="{{ __('Username') }}" required autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                @error('username')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember-guest" name="remember">
                        <label for="remember-guest">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-secondary">{{ __('Login as Guest') }}</button>
                </div>
            </div>
        </form>

        <p class="mb-1">
            <a href="{{ route('guest.register') }}">{{ __('Register as a Guest') }}</a>
        </p>
    </div>
</div>
@endsection
