@extends('skeleton::public')

@section('page-title', __('Reset your password'))
@section('page-description', __("Almost there! Please fill password and we will email you a password reset link."))

@section('content')
    <form method="POST" action="{{ route('login') }}" autocomplete="off">
        <input type="hidden" name="token" value="{{ $token }}"/>
        @csrf

        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="false" placeholder="{{ __('your email') }}" autofocus>
            @error('email')
            <small class="invalid-feedback" role="alert">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('your password') }}" required autocomplete="current-password">
            @error('password')
            <small class="invalid-feedback" role="alert">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="{{ __('confirm password') }}" required autocomplete="current-password">
            @error('password_confirmation')
            <small class="invalid-feedback" role="alert">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
    </form>
@endsection

@section('footer')
    <a href="{{ route('login') }}">{{ __('Back to login') }}</a>
@endsection
