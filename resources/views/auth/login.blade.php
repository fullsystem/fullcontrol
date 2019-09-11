@extends('skeleton::public')

@section('page-title', __('Login'))
@section('page-description', __('Welcome! Please fill email and password to access your account.'))

@section('content')
    <form method="POST" action="{{ route('login') }}" autocomplete="off">
        @csrf

        <input name="email" type="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="none" placeholder="{{ __('your email') }}" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror

        <input name="password" type="password" class="@error('password') is-invalid @enderror" placeholder="{{ __('your password') }}" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror

        @if (Route::has('password.request'))
            <div class="text-right">
                <a href="{{ route('password.request') }}">{{ __('I forgot my password') }}</a>
            </div>
        @endif

        <button type="submit">{{ __('Sign In') }}</button>
    </form>
@endsection

@section('footer')
    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="text-center">{{ __("Register a new membership") }}</a>
    @endif
@endsection
