@extends('skeleton::public')

@section('page-title', __('Register'))
@section('page-description', __("It's simple! Just fill the fields below to create your account and sign in."))

@section('content')
    <form method="POST" action="{{ route('register') }}" autocomplete="off">
        @csrf

        <div class="form-group">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="false" placeholder="{{ __('Name') }}" autofocus>
            @error('name')
            <small class="invalid-feedback" role="alert">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="false" placeholder="{{ __('Email') }}" autofocus>
            @error('email')
            <small class="invalid-feedback" role="alert">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
            @error('password')
            <small class="invalid-feedback" role="alert">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
    </form>
@endsection

@section('footer')
    <a href="{{ route('login') }}">{{ __('Back to login') }}</a>
@endsection
