<nav id="navbar" class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top bg-primary px-lg-0">

    <div class="container position-relative">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/home/logo_pardis.jpg') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            {{--<span class="navbar-toggler-icon"></span>--}}
            <span>
                <i class="fa fa-bars text-white fa-lg"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mr-3">
                    <span class="nav-title nav-link">شبکه آزمایشگاهی پردیس</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#about-us">درباره ما</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">خدمات و کالا</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('company.membership') }}">شرکت‌های عضو</a>
                        <a class="dropdown-item" href="{{ route('company.service') }}">خدمات</a>
                        <a class="dropdown-item" href="{{ route('company.categories') }}">محصولات</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('plans') }}">طرح‌های تشویقی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-us') }}">تماس با ما</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-lg-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">ورود</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">ثبت‌نام</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('panel') }}">{{ __('پنل مدیریت') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('خروج') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>

</nav>
