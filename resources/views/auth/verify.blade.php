@extends('skeleton::public')

@section('page-title', __('Email Verification'))
@section('page-description', __('Verify Your Email Address.'))

@section('content')
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>

    <hr class="divider" />

    <p class="text-center">{{ __('If you did not receive the email') }}</p>

    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit">{{ __('click here to request another') }}</button>
    </form>
@endsection

@section('footer')
    <a href="{{ route('login') }}">{{ __('Back to login') }}</a>
@endsection
