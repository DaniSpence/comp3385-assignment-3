@extends('layouts.app')

@section('hideNavbar')
@endsection

@section('content')
<div class="login-page d-flex align-items-center justify-content-center">
    <div class="login-wrapper text-center">
        <div class="login-icon mx-auto mb-3">
            <span>📅</span>
        </div>

        <h2 class="login-title">Community Events Board</h2>
        <p class="login-subtitle">Sign in to manage and publish community events</p>

        <div class="login-card text-start mx-auto mt-4">
            <h4 class="mb-1">Sign In</h4>
            <p class="text-muted small mb-4">Enter your credentials to continue</p>

            @if($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ url('/login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="you@community.org"
                        value="{{ old('email') }}"
                    >
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <label class="form-label mb-1">Password</label>
                        <a href="#" class="small text-decoration-none forgot-link">Forgot password?</a>
                    </div>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Enter your password"
                    >
                </div>

                <button type="submit" class="btn login-btn w-100">Sign In</button>
            </form>
        </div>

        <p class="mt-4 small text-muted">
            Don't have an account?
            <a href="#" class="text-decoration-none forgot-link">Contact your admin</a>
        </p>
    </div>
</div>

<style>
    body {
        background-color: #eef7f4;
    }

    .login-page {
        min-height: 85vh;
    }

    .login-wrapper {
        width: 100%;
        max-width: 520px;
    }

    .login-icon {
        width: 44px;
        height: 44px;
        background-color: #0d9488;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 20px;
    }

    .login-title {
        font-size: 28px;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 6px;
    }

    .login-subtitle {
        color: #6b7280;
        font-size: 14px;
        margin-bottom: 0;
    }

    .login-card {
        max-width: 420px;
        background: #ffffff;
        border: 1px solid #dbe5e1;
        border-radius: 14px;
        padding: 28px;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
    }

    .login-card h4 {
        font-size: 22px;
        font-weight: 700;
        color: #1f2937;
    }

    .form-label {
        font-size: 13px;
        font-weight: 600;
        color: #374151;
    }

    .form-control {
        border-radius: 10px;
        padding: 12px 14px;
        border: 1px solid #d1d5db;
        font-size: 14px;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.15rem rgba(13, 148, 136, 0.15);
        border-color: #0d9488;
    }

    .login-btn {
        background-color: #0d9488;
        border: none;
        border-radius: 10px;
        padding: 12px;
        font-weight: 600;
    }

    .login-btn:hover {
        background-color: #0b7f76;
    }

    .forgot-link {
        color: #0d9488;
    }

    .forgot-link:hover {
        color: #0b7f76;
    }
</style>
@endsection
