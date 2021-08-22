@extends('layouts.app')

@section('content')

<div class="loginpage">
    <div class="logincontainer">
        <h1 class="login-header">{{ __('Opret Bruger') }}</h1>
            <div class="login-body">
                <form action="{{ route('auth.create') }}" method="post">
                @csrf
                    
                        <div class="form-group">
                            <label for="password" class="">{{ __('Fulde navn:') }}</label> <br>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Indtast dit navn">
                            @error('name')
                                    <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="">{{ __('E-Mail:') }}</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Indtast e-mail">
                            @error('email')
                                    <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="">{{ __('Kodeord:') }}</label> <br>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Indtast kodeord">
                            @error('password')
                                    <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <button type="submit" >
                            Opret
                        </button>
                        <div>
                            <a href="login">Har du allerede en konto?</a>
                        </div>
                </form>
            </div>
        </div>
</div>  
@endsection