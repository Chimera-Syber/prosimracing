@extends('layouts.login')

@section('content')
<div class="login__form">
    
    <div class="login__form-title login__form-title_margin">{{ __('Register') }}</div>

    <div class="login__form-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="login__form-row login__form-row_margin">
                <label for="name" class="login__form-label login__form-label_margin">{{ __('Name') }}</label>

                <div class="login__form-input-container">
                    <input id="name" type="text" class="login__form-control @error('name') login_form-control-is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Name placeholder') }}" autofocus>

                    @error('name')
                        <span class="login__form-invalid-feedback login__form-invalid-feedback_margin" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="login__form-row login__form-row_margin">
                <label for="email" class="login__form-label login__form-label_margin">{{ __('E-Mail Address') }}</label>

                <div class="login__form-input-container">
                    <input id="email" type="email" class="login__form-control @error('email') login_form-control-is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email placeholder') }}">

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
                    <input id="password" type="password" class="login__form-control @error('password') login_form-control-is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password placeholder') }}">

                    @error('password')
                        <span class="login__form-invalid-feedback login__form-invalid-feedback_margin" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="login__form-row login__form-row_margin">
                <label for="password-confirm" class="login__form-label login__form-label_margin">{{ __('Confirm Password') }}</label>

                <div class="login__form-input-container">
                    <input id="password-confirm" type="password" class="login__form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Password confirm placeholder') }}">
                </div>
            </div>

            <div class="login__form-row login__form-row_margin">
                <div class="login__form-input-container login__form-input-container_row">
                    <button type="submit" class="login__btn-submit">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
          
</div>
@endsection
