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
                    <h2 class="mb-5">Request password reset link</h2>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <label class="input-container ">
                            <div class="input-container__svg-container">
                                <img src="{{ asset('img/user.svg') }}" alt="user image">
                            </div>
                            <input type="email"   name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            
                        </label>
                        <div class="@error('email') is-invalid @enderror mb-3"></div>
                        @error('email')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                        @enderror
                        <div class="d-flex justify-content-center mb-5">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="sign-up-btn">
                            Submit
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
