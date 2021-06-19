@extends('layouts.app')

@section('content')
<div class="logincontainer">
    <h1 class="login-header">{{ __('Login') }}</h1>
    <div class="login-body">
        <form action="{{ route('login') }}">
            
            <div class="form-group">
                <label for="email" class="">{{ __('E-Mail Address') }}</label>
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
                <label for="password" class="">{{ __('Password') }}</label>
                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="">
                    @error('password')
                    <span class="" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <button type="submit">
                {{ __('Login') }}
            </button>
        </form>
    </div>
</div>
@endsection