<!doctype html>
<html lang="Ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/nice-select.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}" />

    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{ config('app.name', 'Smart Attendance') }}</title>

    @livewireStyles
    <style>
        body::-webkit-scrollbar {
            width: 1em;
        }

        body::-webkit-scrollbar-track {
            /* box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3); */
        }

        body::-webkit-scrollbar-thumb {
            background-color: rgb(250, 33, 55);
            outline: 1px solid rgb(250, 33, 55);
            border-radius: 20px
        }

        .page-title-area {
            margin-top: 100px
        }

        .nice-select span {
            display: block;
            color: black;
        }

        span.odometer {
            direction: ltr;
        }
    </style>
    @stack('css')
</head>

<body>

    <div class="loader-wrapper">
        <div class="loader">
            <div class="dot-wrap">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>

    <div class="navbar-area navbar-area-two">


        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md">

                    <div class="collapse navbar-collapse mean-menu">

                        <ul class="navbar-nav m-auto">
                            @if (!auth('student')->check() && !auth('professor')->check() && !auth('admin')->check())
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        تسجيل دخول
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.login') }}" class="nav-link">الأدمن</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('professor.login') }}" class="nav-link">عضو هيئة
                                                التدريس</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('student.login') }}" class="nav-link">الطالب</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            @auth('admin')
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        {{ Auth::guard('admin')->user()->name }}
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.dashboard') }}" class="nav-link">لوحة التحكم</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.logout') }}" class="nav-link">خروج</a>
                                        </li>

                                    </ul>
                                </li>
                            @endauth
                            @auth('professor')
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        {{ Auth::guard('professor')->user()->name }}
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('professor.profile') }}" class="nav-link">البروفايل</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('professor.logout') }}" class="nav-link">خروج</a>
                                        </li>

                                    </ul>
                                </li>
                            @endauth
                            @auth('student')
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        {{ Auth::guard('student')->user()->name }}
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('student.profile') }}" class="nav-link">البروفايل</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('student.logout') }}" class="nav-link">خروج</a>
                                        </li>

                                    </ul>
                                </li>
                            @endauth
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('all.subjects') }}" class="nav-link">المواد</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('all.departments') }}" class="nav-link">الأقسام</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('search') }}" class="nav-link">بحث</a>
                            </li>
                        </ul>

                    </div>

                    <a class="navbar-brand" href="{{ route('home') }}" style="max-width: 130px">
                        <img src="{{ asset('img/logo.png') }}" class="main-logo" alt="Logo" />
                        <img src="{{ asset('img/logo-1.png') }}" class="white-logo" alt="Logo" />
                    </a>
                </nav>
            </div>
        </div>



        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="{{ asset('img/logo.png') }}" class="main-logo" alt="Logo" />
                <img src="{{ asset('img/logo-1.png') }}" class="white-logo" alt="Logo" />
            </a>
        </div>

    </div>

    @yield('main')


    <footer class="footer-bottom-area">
        <div class="container">
            <div class="copyright-wrap">
                <p>
                    2023 - 2022 <i class="bx bx-copyright"></i>
                    <a href="{{ route('home') }}" target="blank">Smart Attendance</a>
                </p>
            </div>
        </div>
    </footer>
    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
        <i class="bx bx-chevrons-up"></i>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('js/meanmenu.min.js') }}"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/wow.min.js') }}"></script>

    <script src="{{ asset('js/nice-select.min.js') }}"></script>

    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>

    <script src="{{ asset('js/jarallax.min.js') }}"></script>

    <script src="{{ asset('js/appear.min.js') }}"></script>

    <script src="{{ asset('js/odometer.min.js') }}"></script>

    <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>

    @livewireScripts
    @stack('js')
</body>


</html>
