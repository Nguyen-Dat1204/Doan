@extends('admin.login')

@section('title')
    Đăng nhập
@endsection
@section('content')
<div id="logreg-forms">
    <form class="form-signin"  method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Đăng nhập</h1>
        <div class="social-login">
            <a href="{{ url('/auth/redirect/facebook') }}" style="padding: 6px 12px" class="d-inline-block btn facebook-btn social-btn"><span class="h6"><i class="fa-brands fa-facebook-f"></i> Sign in with Facebook</span></a>
            <a href="{{ url('/auth/redirect/google') }}" style="padding: 6px 12px" class="d-inline-block btn google-btn social-btn"><span class="h6"><i class="fa-brands fa-google"></i> Sign in with Google+</span></a>
        </div>
        <p style="text-align:center"> OR  </p>
        <input id="email" type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  placeholder="Email" autocomplete="email" autofocus>
        
        @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  placeholder="Password" autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="row mb-3">
            <div class="ml-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label ml-4" for="remember">
                        &nbsp;{{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-block">
            <i class="fas fa-sign-in-alt"></i> {{ __('Đăng nhập') }}
        </button>
        @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
        <hr>
        <!-- <p>Don't have an account!</p>  -->
        <a class="btn btn-primary btn-block" style="color:#fff;" href="{{ route('register') }}">
            <i class="fas fa-user-plus"></i> {{ __('Đăng ký') }}
        </a>
        </form>
</div>
@endsection
