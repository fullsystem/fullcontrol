@extends('skeleton::public')

@section('page-title', __('Register'))
@section('page-description', __("It's simple! Just fill the fields below to create your account and sign in."))

@section('content')
    <form method="POST" action="{{ route('register') }}" autocomplete="off">
        @csrf

        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="false" placeholder="{{ __('Name') }}" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror

        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="false" placeholder="{{ __('Email') }}" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror

        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror

        <button type="submit">{{ __('Register') }}</button>
    </form>
@endsection

@section('footer')
    <a href="{{ route('login') }}">{{ __('Back to login') }}</a>
@endsection
