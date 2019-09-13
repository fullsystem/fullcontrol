@extends('skeleton::public')

@section('page-title', __('Login'))
@section('page-description', __('Welcome back! Please fill email and password to access your account.'))

@section('content')
    <form method="POST" action="{{ route('login') }}" autocomplete="off">
        @csrf

        <div class="form-group">
            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" autofocus/>
            @error('email')
            <small class="form-text text-muted">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}"/>
            @error('password')
            <small class="form-text text-muted">{{ $message }}</small>
            @enderror
        </div>

        <div class="grid">
            <div class="icheck-primary icheck-inline">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                <label for="remember">{{ __('Remember Me') }}</label>
            </div>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">{{ __('I forgot my password') }}</a>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Sign In') }}</button>
    </form>
@endsection

@section('footer')
    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="text-center">{{ __("Register a new membership") }}</a>
    @endif
@endsection
