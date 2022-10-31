@extends('layouts.login')

@section('content')
<div class="login__form">
    
    <div class="login__form-title login__form-title_margin">{{ __('Confirm Password') }}</div>

    <div class="login__form-body">
        <div class="login__form-text login__form-text_margin">{{ __('Please confirm your password before continuing.') }}</div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="login__form-row login__form-row_margin">
                <label for="password" class="login__form-label login__form-label_margin">{{ __('Password') }}</label>

                <div class="login__form-input-container">
                    <input id="password" type="password" class="login__form-control @error('password') login_form-control-is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password placeholder') }}">

                    @error('password')
                        <span class="login__form-invalid-feedback login__form-invalid-feedback_margin" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="login__form-row login__form-row_margin">
                <div class="login__form-input-container login__form-input-container_row">
                    <button type="submit" class="login__btn-submit login__btn-submit_font-size-change">
                        {{ __('Confirm Password') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="login__forgot-password-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
      
</div>
@endsection
