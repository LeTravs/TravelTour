@extends('layouts.guest')

@section('content')
<style>
    .login-box-msg {
        font-size: 1.5em;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
    }
    .btn {
        border: none;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.2s;
    }
    .btn-primary {
        background: linear-gradient(145deg, #007bff, #0056b3);
    }
    .btn-primary:hover {
        background: linear-gradient(145deg, #0056b3, #007bff);
        transform: scale(1.05);
    }
    .btn-secondary {
        background: linear-gradient(145deg, #6c757d, #343a40);
    }
    .btn-secondary:hover {
        background: linear-gradient(145deg, #343a40, #6c757d);
        transform: scale(1.05);
    }
    .role-buttons {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .role-buttons button {
        width: 48%;
    }
</style>

<div class="login-wrapper">
    <div class="card-body login-card-body">
        <p class="login-box-msg">{{ __('Login') }}</p>

        <div class="role-buttons">
            <a href="{{ route('admin.login') }}" class="btn btn-primary">{{ __('Are you an Admin?') }}</a>
            <a href="{{ route('guest.login') }}" class="btn btn-secondary">{{ __('Are you a Guest?') }}</a>
        </div>

        @if (Route::has('password.request'))
            <p class="mb-1">
                <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            </p>
        @endif
    </div>
</div>
@endsection
