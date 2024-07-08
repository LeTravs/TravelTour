<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    @stack('style-alt')
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="{{ route('homepage') }}" class="nav__logo">
                <i class="bx bxs-map"></i> BYAHENG BOHOL
            </a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                            <i class="bx bx-home-alt"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                            <i class="bx bx-building-house"></i>
                            <span>Package Travel</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                            <i class="bx bx-phone"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="nav__buttons">
                <a href="{{ route('booking.create') }}" target="_blank" class="button nav__button">Book Now</a>
            </div>
        </nav>
    </header>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="{{ route('admin.profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>{{ __('Users') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.guests.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>{{ __('Guests') }}</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('admin.bookings.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>{{ __('Booking') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.travel_packages.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-suitcase-rolling"></i>
                        <p>{{ __('Travel Package') }}</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer section">
        <div class="footer__container container grid">
            <div>
                <a href="{{ route('homepage') }}" class="footer__logo">
                    C&G<i class="bx bxs-map"></i> TRAVEL
                </a>
                <p class="footer__description">
                    Our vision is to help people find the <br />
                    best places to travel with high security
                </p>
            </div>
            <div>
                <h3 class="footer__title">Follow us</h3>

                <ul class="footer__social">
                    <a href="#" class="footer__social-link">
                        <i class="bx bxl-facebook-circle"></i>
                    </a>
                    <a href="#" class="footer__social-link">
                        <i class="bx bxl-instagram-alt"></i>
                    </a>
                    <a href="#" class="footer__social-link">
                        <i class="bx bxl-pinterest"></i>
                    </a>
                </ul>
            </div>
        </div>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="bx bx-chevrons-up"></i>
    </a>

    <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @stack('script-alt')
</body>
</html>
