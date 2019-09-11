@extends('skeleton::public')

@section('page-title', __('Reset your password'))
@section('page-description', __("Almost there! Please fill password and we will email you a password reset link."))

@section('content')
    <form method="POST" action="{{ route('login') }}" autocomplete="off">
        <input type="hidden" name="token" value="{{ $token }}"/>
        @csrf

        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="false" placeholder="{{ __('your email') }}" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror

        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="{{ __('your password') }}" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror

        <input id="password-confirm" type="password" class="@error('password') is-invalid @enderror" name="password_confirmation" placeholder="{{ __('confirm password') }}" required autocomplete="current-password">
        @error('password_confirmation')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror

        <button type="submit">{{ __('Reset Password') }}</button>
    </form>
@endsection

@section('footer')
    <a href="{{ route('login') }}">{{ __('Back to login') }}</a>
@endsection