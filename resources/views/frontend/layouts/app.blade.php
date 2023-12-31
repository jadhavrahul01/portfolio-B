<!doctype html>
<html lang="en">

<head>
    <title> Portfolio - B | @yield('title') </title>
    @include('frontend.layouts.header')
</head>

<body>
    <!-- Preloader Start -->
    <section>
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="P" class="letters-loading">P</span>
                        <span data-text-preloader="o" class="letters-loading">o</span>
                        <span data-text-preloader="r" class="letters-loading">r</span>
                        <span data-text-preloader="t" class="letters-loading">t</span>
                        <span data-text-preloader="f" class="letters-loading">f</span>
                        <span data-text-preloader="o" class="letters-loading">o</span>
                        <span data-text-preloader="l" class="letters-loading">l</span>
                        <span data-text-preloader="i" class="letters-loading">i</span>
                        <span data-text-preloader="o" class="letters-loading">o</span>
                        <span data-text-preloader="-" class="letters-loading">-</span>
                        <span data-text-preloader="B" class="letters-loading">B</span>
                    </div>
                </div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </section>
    <!-- Preloader End -->


    @include('frontend.layouts.nav')

    @yield('page')

    @include('frontend.layouts.footer')


    <!-- Mobile Nav Sidebar Content Start -->
    <div class="mobile-nav-wrapper">
        <div class="mobile-nav-overlay mobile-nav-toggler"></div>
        <div class="mobile-nav-content">
            <a href="#" class="mobile-nav-close mobile-nav-toggler">
                <span></span>
                <span></span>
            </a>
            <div class="logo-box">
                <a href="index-2.html" aria-label="logo image">
                    <img src="{{ asset('frontend/images/logo-light.svg')}}" width="165" height="72" alt="logo" />
                </a>
            </div>
                <div class="mobile-nav-container nav-height">
                    <ul class="bar-nav mobile-menu-list responsive-home">
                    <li>
                        <a href="/">Home</a>

                    </li>
                    <li>
                        <a href="/services">Services</a>

                    </li>
                    <li>
                        <a href="/project">Projects</a>
                    </li>
                    <li>
                        <a href="/about">About Us</a>

                    </li>
                    <li>
                        <a href="/contact"> Contact US</a>

                    </li>

                </ul>
            </div>

            <ul class="list-items mobile-sidebar-contact">
                <li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>121 King Street, Australia</li>
                <li><span class="fas fa-envelope mrr-10 text-primary-color"></span><a
                        href="mailto:example@gmail.com">example@gmail.com</a></li>
                <li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span><a href="tel:123456789">+12 345 666
                        789</a></li>
            </ul>
            <ul class="social-list list-primary-color">
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Mobile Nav Sidebar Content End -->

    <!-- Header Search Popup Start -->
    <div class="search-popup">
        <div class="search-popup-overlay search-toggler"></div>
        <div class="search-popup-content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="base-icon-search-1"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Header Search Popup End -->

    <!-- Back to Top Start -->
    <div class="anim-scroll-to-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to Top end -->


    <!-- Integrated important scripts here -->
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.event.move.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.twentytwenty.js') }}"></script>
    <script src="{{ asset('frontend/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/backtotop.js') }}"></script>
    <script src="{{ asset('frontend/js/trigger.js') }}"></script>

</body>

</html>
