@extends('layouts.login')

@section('content')
<div class="login__form">
    <div class="login__form-title login__form-title_margin">{{ __('Reset Password') }}</div>
    <div class="login__form-body">
        @if (session('status'))
            <div class="login__alert login__alert_success login__alert_margin" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="login__form-row login__form-row_margin">
                <label for="email" class="login__form-label login__form-label_margin">{{ __('E-Mail Address') }}</label>

                <div class="login__form-input-container">
                    <input id="email" type="email" class="login__form-control @error('email') login_form-control-is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="login__form-invalid-feedback login__form-invalid-feedback_margin" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="login__form-input-container">
                <button type="submit" class="login__btn-submit">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>    
</div>
@endsection
