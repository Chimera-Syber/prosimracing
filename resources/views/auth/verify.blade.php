@extends('layouts.login')

@section('content')
<div class="login__form">
    
    <div class="login__form-title login__form-title_margin">{{ __('Verify Your Email Address') }}</div>

    <div class="login__form-body">
        @if (session('resent'))
            <div class="login__alert login__alert_success login__alert_margin" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif

        <div class="login__form-text login__form-text_margin">{{ __('Before proceeding, please check your email for a verification link.') }}</div>
        <div class="login__form-text login__form-text_margin">{{ __('If you did not receive the email click below to request another') }}</div>
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="login__btn-submit">{{ __('Send verification email') }}</button>.
        </form>
    </div>
     
</div>
@endsection
