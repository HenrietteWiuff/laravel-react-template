@extends('layouts.app')

@section('content')
<div class="logincontainer">
    <h1 class="login-header">{{ __('Login') }}</h1>
    <div class="login-body">
        <form method="POST" action="{{ route('login') }}">
        @csrf
            
            <div class="form-group">
                <label for="email" class="">{{ __('E-Mail:') }}</label>
                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="">{{ __('Kodeord:') }}</label>
                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="">
                    @error('password')
                    <span class="" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                @if (Route::has('password.request'))
                    <a class="btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            <div>
                <button type="submit">
                    {{ __('Login') }}
                </button>
            </div>
            
        </form>
    </div>
</div>
@endsection