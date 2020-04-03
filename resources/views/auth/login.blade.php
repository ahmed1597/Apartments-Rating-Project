@extends('layouts.app')

@section('page-title','Login')

@section('stylesheets')
<link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')

    <section class="home-auth-section home-auth-section_login">
        <div class="container">
            <div class="home-auth-section__row row">
                <div class="col-lg-6 col-12 home-auth-section__row__left-col">
                    <h1>Company Name</h1>
                    <h2 class="main-page-heading">Welcome!</h2>
                    <p class="main-page-paragraph">Lorem Ispum is simply dummy text of the printing and<br> typesetting industry</p>
                    <a href="signup.html" class="home-auth-section__login-btn">
                        Signup
                    </a>
                </div>
                <div class="col-lg-6 col-12 home-auth-section__row__right-col">
                    <h2>Login to your account</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label class="input-container">
                            <div class="input-container__svg-container">
                                <img src="{{ asset('img/user.svg') }}" alt="user image">
                            </div>
                            <input type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            
                        </label>
                        <label class="input-container">
                            <div class="input-container__svg-container">
                                <img src="{{ asset('img/password.svg') }}" alt="user password">
                                <div class="d-flex" class="input-container__svg-container__show-btn">
                                    <img class="input-container__svg-container__show-btn" src="{{ asset('img/eye.svg') }}" alt="eye icon">
                                </div>
                            </div>
                            <input  type="password" placeholder="Password" class="input-container__input-password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </label>
                        <div class="@error('email') is-invalid @enderror"></div>
                        @error('email')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                        @enderror
                        <div class="@error('password') is-invalid @enderror"></div>
                        @error('password')
                                <p class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                        @enderror
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('password.request') }}" class='home-auth-section__forgot-password'>
                                Forgot password?
                            </a>
                        </div>
                        <button type="submit" class="sign-up-btn">
                            Login
                        </button>
                        <div class="social-signup-container">
                            <a href='/login/facebook' class="social-signup-container__button social-signup-container__button_facebook" >
                                <img src="{{ asset('img/facebook.svg') }}" alt="facebook icon">
                                <p>Login with Facebook</p>
                            </a>
                            <a href='/login/google' class="social-signup-container__button social-signup-container__button_google">
                                <img src="{{ asset('img/google-cloud-search.svg') }}" alt="google icon">
                                <p>Login with Google</p>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/password-input.js') }}"></script>
@endsection
