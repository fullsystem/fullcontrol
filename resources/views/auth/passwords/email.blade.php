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

        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="false" placeholder="{{ __('your email') }}" autofocus>
            @error('email')
            <small class="invalid-feedback" role="alert">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Send reset link') }}</button>
    </form>
@endsection

@section('footer')
    <a href="{{ route('login') }}">{{ __('Back to login') }}</a>
@endsection
