@extends('layouts.app')

@section('page-title','Apartments Rating')

@section('stylesheets')
<link href="{{ asset('css/auth.css') }}" rel="stylesheet">
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- SUB BAR -->
    <div class="sub-bar">
        <div class="container">
            <div class="sub-bar__row row">
                <div class="col-lg-2 col-sm-2 col-2 sub-bar__col">

                </div>
                <div class="col-lg-3 col-sm-3 col-2 sub-bar__col">

                </div>
                <div class="col-lg-3 col-sm-3 col-2 sub-bar__col ">

                </div>
                <div class="col-lg-2 col-sm-4 col-6 sub-bar__col sub-bar__col-review">
                    <a class="write-review__btn" href='write-review.html'>
                        Write a Review
                    </a>
                </div>
                <div class="col-lg-2 col-1 sub-bar__col ">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- HOME SEARCH SECTION -->
    <section class="home-search-section">
        <div class="container">
            <div class="home-search-section__container">
                <h1 class="home-search-section__title">
                    Every Review is an Experience!
                </h1>
                <p>Check Ratings of Apartments, Read & Reviews</p>
                <form action="#">
                    <label class="input-container">
                        <button type="submit" class="input-container__svg-container">
                            <img src="{{ asset('img/search.svg') }}" alt="search image">
                        </button>
                        <input type="text" placeholder="Search by location">
                    </label>
                </form>
            </div>   
        </div>
    </section>

    <!-- HOME INSTRUCTIONS SECTION -->
    <section class="home-instructions-section">
        <div class="container">
            <div class="home-insctructions__container">
                <h2 class="home-instructions__title">
                    Tip to Review a PROPERTY
                </h2>
                <div class="home-instructions__steps-container">
                    <div class="home-instructions__step">
                        <img src="{{ asset('img/group.svg')}}">
                        <span class="home-instructions__step-title">
                            Login to account
                        </span>
                        <p>
                            Lorem Ipsum is simply<br> dummy text of the printing<br>
                            any typesetting industry.
                        </p>
                    </div>
                    <div class="home-instructions__step">
                        <img src="{{ asset('img/choose.svg')}}">
                        <span class="home-instructions__step-title">
                            Submit Review
                        </span>
                        <p>
                            Lorem Ipsum is simply<br> dummy text of the printing<br>
                            any typesetting industry.
                        </p>
                    </div>
                    <div class="home-instructions__step">
                        <img src="{{ asset('img/group-5.svg')}}">
                        <span class="home-instructions__step-title">
                            Publish
                        </span>
                        <p>
                            Lorem Ipsum is simply<br> dummy text of the printing<br>
                            any typesetting industry.
                        </p>
                    </div>
                </div>
            </div>   
        </div>
    </section>

    <!-- HOME TRUST SECTION -->
    <section class="home-trust-section">
        <div class="container">
            <div class="home-trust-section__container row">
                <div class="col-2 col-0">

                </div>
                <div class="col-lg-4 col-12">
                    <div class="d-flex home-trust-section__title">
                        <img src="{{ asset('img/verified-protection.svg') }}">
                        <h3 class="home-trust-section__title">
                            How do I know I can<br> trust these reviews ?
                        </h3>
                    </div>
                    <ul class="home-trust-section__list">
                        <li>
                            Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem
                            Ipsum has been
                        </li>
                        <li>
                            Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem
                            Ipsum has been
                        </li>
                        <li>
                            Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem
                            Ipsum has been
                        </li>
                        <li>
                            Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem
                            Ipsum has been
                        </li>
                        <li>
                            Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem
                            Ipsum has been
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-8 col-12 home-trust-section__right-col">
                    <img src="{{ asset('img/home-services.jpg') }}" alt="trust reviews image">
                </div>
            </div>   
        </div>
    </section>
@endsection

@section('scripts')
<script src="{{ asset('js/script.js') }}"></script>
@endsection