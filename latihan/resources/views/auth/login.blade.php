{{-- resources/views/auth/login.blade.php --}}
@extends('layout.master')

@section('title', 'Login')

@section('content')
<div class="container" style="max-width: 400px; margin-top: 50px;">
    <h3 class="mb-4 text-center">Login</h3>

    {{-- Notifikasi error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input 
                type="email" 
                class="form-control" 
                id="email" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autofocus
            >
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input 
                type="password" 
                class="form-control" 
                id="password" 
                name="password" 
                required
            >
        </div>

        <div class="mb-3 form-check">
    <input 
        type="checkbox" 
        class="form-check-input" 
        id="remember" 
        name="remember" 
        @checked(old('remember'))
    >
    <label class="form-check-label" for="remember">Remember Me</label>
</div>


        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>

    <div class="mt-3 text-center">
        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
    </div>
</div>
@endsection
