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
    <p>
        {{ __('If you did not receive the email') }},

        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn-link">{{ __('click here to request another') }}</button>
        </form>
    </p>
@endsection
