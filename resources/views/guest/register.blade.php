@extends('layouts.guest')

@section('content')
<style>
    .register-box-msg {
        font-size: 1.5em;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
    }
    .input-group {
        position: relative;
    }
    .input-group .form-control {
        border-radius: 5px;
        box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .input-group .input-group-text {
        border-radius: 5px;
        background: #007bff;
        color: #fff;
    }
    .btn-primary {
        background: linear-gradient(145deg, #007bff, #0056b3);
        border: none;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 123, 255, 0.3);
        width: 100%;
    }
    .btn-primary:hover {
        background: linear-gradient(145deg, #0056b3, #007bff);
    }
    .error.invalid-feedback {
        font-size: 0.875em;
        color: #e74c3c;
    }
    .mb-1 a {
        color: #007bff;
    }
    .mb-1 a:hover {
        text-decoration: underline;
    }
</style>

<div class="register-wrapper">
    <div class="card-body register-card-body">
        <p class="register-box-msg">{{ __('Register as Guest') }}</p>

        <form action="{{ route('guest.register') }}" method="POST"> <!-- Ensure method is POST -->
            @csrf

            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" required autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                @error('name')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="{{ __('Username') }}" required>
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
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
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

            <div class="input-group mb-3">
                <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                </div>
            </div>
        </form>

        <p class="mb-1">
            <a href="{{ route('guest.login') }}">{{ __('Already have an account? Login') }}</a>
        </p>
    </div>
</div>
@endsection
