@extends('skeleton::public')

@section('page-title', __('Reset your password'))
@section('page-description', __("Don't worry! Please fill email and we will email you a password reset link."))

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" autocomplete="off">
        @csrf

        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="false" placeholder="{{ __('your email') }}" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror

        <button type="submit">{{ __('Send reset link') }}</button>
    </form>
@endsection

@section('footer')
    <a href="{{ route('login') }}">{{ __('Back to login') }}</a>
@endsection