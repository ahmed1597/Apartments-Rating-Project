<!-- TOP BAR -->
<div class="top-bar">
        <div class="container">
            <div class="top-bar__row row">
                <div class="col-3 col-md-3 col-lg-3 col-xl-6 col-md-3">
                    <a href="/" class="top-bar__logo">Logo</a>
                </div>
                <div class="col-12 col-md-5 col-lg-5 col-xl-3 top-bar__row__nav-col">
                    <ul class='top-bar__nav-menu'>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/about">About Us</a>
                        </li>
                        <li>
                            <a href="/contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
                @auth
                <div class="col-md-4 col-lg-4 col-xl-3 col-7 top-bar__menu">
                    <div class="top-bar__user">
                        <a href="/user">
                            <p class="top-bar__user-name">@foreach (explode(' ',Auth::user()->name) as $sent) @if ($loop->index < 1) {{ $sent }} @break @endif @endforeach</p>
                            <img src="{{ asset('uploads/user/'. Auth::user()->img) }}" alt="{{ Auth::user()->name }} photo">
                        </a>
                    </div>
                    <ul>
                        <li>
                    <a class="xs-btn xs-btn-login" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                        </li>
                    </ul>
                </div>
                @endauth
                @guest
                <div class="col-md-3 col-lg-3 col-7 top-bar__menu">
                    <ul>
                        <li>
                            <a class="xs-btn xs-btn-login" href='/login'>
                                Login
                            </a>
                        </li>
                        <li>
                            <a class="xs-btn xs-btn-signup" href='/register'>
                                Signup
                            </a>
                        </li>
                    </ul>
                </div>
                @endguest
            </div>
        </div>
                    
    <button class="burger-menu">
        <span></span>
    </button>
    </div>