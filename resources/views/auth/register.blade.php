@extends('layouts.app')

@section('page-title','Register')

@section('stylesheets')
<link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="home-auth-section home-auth-section_signup">
        <div class="container">
            <div class="home-auth-section__row row">
                <div class="col-lg-6 col-12 home-auth-section__row__left-col">
                    <h1>Company Name</h1>
                    <h2 class="main-page-heading">Welcome!</h2>
                    <p class="main-page-paragraph">Lorem Ispum is simply dummy text of the printing and<br> typesetting industry</p>
                    <a href="/login" class="home-auth-section__login-btn">
                        Login
                    </a>
                </div>
                <div class="col-lg-6 col-12 home-auth-section__row__right-col">
                    <h2>Register</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label class="input-container">
                            <div class="input-container__svg-container">
                                <img src="{{ asset('img/user.svg') }}" alt="user image">
                            </div>
                            <input type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </label>
                        <div class="@error('name') is-invalid @enderror"></div>
                        @error('name')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                        @enderror
                        <label class="input-container">
                            <div class="input-container__svg-container">
                                <img src="{{ asset('img/email.svg') }}" alt="email image">
                            </div>
                            <input type="email" placeholder="Email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        </label>
                        <div class="@error('email') is-invalid @enderror"></div>
                        @error('email')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                        @enderror
                        <label class="input-container">
                            <div class="input-container__svg-container">
                                <img src="{{ asset('img/phone.svg') }}" alt="phone image">
                            </div>
                            <input type="number" placeholder="Phone Number" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="email">
                            
                        </label>
                        <div class="@error('phone') is-invalid @enderror"></div>
                        @error('phone')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                        @enderror
                        <label class="input-container">
                            <div class="input-container__svg-container">
                                <img src="{{ asset('img/password.svg') }}" alt="user password">
                                <div class="d-flex" class="input-container__svg-container__show-btn">
                                    <img class="input-container__svg-container__show-btn" src="{{ asset('img/eye.svg') }}" alt="eye icon">
                                </div>
                            </div>
                            <input type="password" placeholder="Password" class="input-container__input-password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </label>
                        <div class="@error('password') is-invalid @enderror"></div>
                        @error('password')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                        @enderror
                        <button type="submit" class="sign-up-btn">
                            Signup
                        </button>
                        <div class="social-signup-container">
                            <a href='/login/facebook' class="social-signup-container__button social-signup-container__button_facebook" >
                                <img src="{{ asset('img/facebook.svg') }}" alt="facebook icon">
                                <p>Signup with Facebook</p>
                            </a>
                            <a href='/login/google' class="social-signup-container__button social-signup-container__button_google">
                                <img src="{{ asset('img/google-cloud-search.svg') }}" alt="google icon">
                                <p>Signup with Google</p>
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
