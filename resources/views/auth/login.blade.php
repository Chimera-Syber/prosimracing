@extends('layouts.login')

@section('content')
    <div class="login__form">
        
        <h1 class="login__form-title login__form-title_margin">{{ __('Login') }}</h1>

        <div class="login__form-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="login__form-row login__form-row_margin">
                    <label for="email" class="login__form-label login__form-label_margin">{{ __('E-Mail Address') }}</label>

                    <div class="login__form-input-container">
                        <input id="email" type="email" class="login__form-control @error('email')login_form-control-is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email placeholder') }}">

                        @error('email')
                            <span class="login__form-invalid-feedback login__form-invalid-feedback_margin" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="login__form-row login__form-row_margin">
                    <label for="password" class="login__form-label login__form-label_margin">{{ __('Password') }}</label>

                    <div class="login__form-input-container">
                        <input id="password" type="password" class="login__form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password placeholder') }}">

                        @error('password')
                            <span class="login__form-invalid-feedback login__form-invalid-feedback_margin" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="login__form-row login__form-row_margin">
                    <input class="login__form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="login__form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="login__form-row login__form-row_margin">
                    <div class="login__form-input-container login__form-input-container_row">
                        <button type="submit" class="login__btn-submit">
                            {{ __('Login') }}
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
