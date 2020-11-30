@extends('layouts.theme')

@section('content')

<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0">
                <div class="form-section clearfix">
                    <h3>Create an account</h3>
                    <div class="btn-section clearfix">
                        <a href="{{ route('login') }}" class="link-btn active btn-1 active-bg">{{ __('Login') }}</a>
                        <a href="{{ route('register') }}" class="link-btn btn-2 default-bg">Register</a>
                    </div>
                    <div class="clearfix"></div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group form-box">
                            <input id="name" type="text" class="input-text @error('name') is-invalid
                             @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-box">
                            <input id="email" type="email" class="input-text @error('email') is-invalid @enderror" 
                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-box clearfix">
                            <input id="password" type="password" class="input-text
                             @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group form-box clearfix">
                            <input id="password-confirm" type="password" class="input-text" 
                            name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    
                        </div>
                        <div class="form-group clearfix mb-0">
                            <button type="submit" class="btn-md btn-theme float-left">
                                {{ __('Register') }}
                            </button>
                         
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <div class="logo-2">
                        <a href="login.html">
                            <img src="img/logos/logo-2.png" class="cm-logo" alt="black-logo">
                        </a>
                    </div>
                    <h3>Welcome to efie online</h3>
                    <div class="social-list">
                        <a href="#" class="facebook-bg">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="twitter-bg">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="google-bg">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="#" class="linkedin-bg">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
