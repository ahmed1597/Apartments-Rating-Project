@extends('layouts.app')

@section('page-title','Password Reset')

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
                    <a href="/login" class="home-auth-section__login-btn">
                        Login
                    </a>
                </div>
                <div class="col-lg-6 col-12 home-auth-section__row__right-col">
                    <h2 >Reset password </h2>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <label class="input-container ">
                            <div class="input-container__svg-container">
                                <img src="{{ asset('img/user.svg') }}" alt="user image">
                            </div>
                            <input type="email"  name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="Email">
                            
                        </label>
                        <label class="input-container">
                            <div class="input-container__svg-container">
                                <img src="{{ asset('img/password.svg') }}" alt="user password">
                                <div class="d-flex" class="input-container__svg-container__show-btn">
                                    <img class="input-container__svg-container__show-btn" src="{{ asset('img/eye.svg') }}" alt="eye icon">
                                </div>
                            </div>
                            <input  type="password" placeholder="New Password" class="input-container__input-password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </label>
                        <label class="input-container">
                            <div class="input-container__svg-container">
                                <img src="{{ asset('img/password.svg') }}" alt="user password">
                                <div class="d-flex" class="input-container__svg-container__show-btn">
                                    <img class="input-container__svg-container__show-btn" src="{{ asset('img/eye.svg') }}" alt="eye icon">
                                </div>
                            </div>
                            <input  type="password" placeholder="Confirm Password"  name="password_confirmation" required autocomplete="new-password">
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
                        
                        <button type="submit" class="sign-up-btn">
                            Reset
                        </button>
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
