@extends('layouts.layout')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('assets/css/About.css') }}" media="screen">

    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">



    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="About">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <header class="u-clearfix u-grey-90 u-header u-sticky u-sticky-4895 u-header" id="sec-d068">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="index.html" class="u-image u-logo u-image-1" title="Home" data-image-width="500"
                data-image-height="500">
                <img src="assets\images\cdcf1c32-01b4-4af7-9cbb-add5a6bfc572-removebg-preview.png"
                    class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 400;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px"
                            y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('home') }}" style="padding: 10px 20px;">Home</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                style="padding: 10px 20px;">Find A Hub</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-48 u-nav u-unstyled u-v-spacing-11">
                                    <li class="u-nav-item"><a
                                            class="u-button-style u-nav-link u-text-hover-custom-color-6 u-white">Layer</a>
                                    </li>
                                    <li class="u-nav-item"><a
                                            class="u-button-style u-nav-link u-text-hover-custom-color-6 u-white">accountant</a>
                                    </li>
                                    <li class="u-nav-item"><a
                                            class="u-button-style u-nav-link u-text-hover-custom-color-6 u-white">Transportation
                                            companies</a>
                                    </li>
                                    <li class="u-nav-item"><a
                                            class="u-button-style u-nav-link u-text-hover-custom-color-6 u-white">Engineering
                                            consultant</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('about') }}" style="padding: 10px 20px;">About</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('contact') }}" style="padding: 10px 20px;">Contact</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('login') }}" style="padding: 10px 20px;">Login</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                style="padding: 10px 20px;">عربي</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link">Find A Hub</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-48 u-nav u-unstyled u-v-spacing-11">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Layer</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link">accountant</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Transportation
                                                    companies</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Engineering
                                                    consultant</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{ route('about') }}">About</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{ route('contact') }}">Contact</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link">عربي</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
        <style class="u-sticky-style" data-style-id="4895">
            .u-sticky-fixed.u-sticky-4895,
            .u-body.u-sticky-fixed .u-sticky-4895 {
                box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.4) !important
            }
        </style>
    </header>
    <section class="u-align-center u-clearfix u-section-1" id="carousel_8b18">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-1"
                        data-animation-name="customAnimationIn" data-animation-duration="1250">
                        <div class="u-container-layout u-similar-container u-container-layout-1"><span
                                class="u-custom-item u-file-icon u-icon u-icon-rounded u-palette-1-base u-radius-20 u-text-white u-icon-1"><img
                                    src="assets\images\system-regular-33-speed.gif" alt=""></span>
                            <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-1-base u-text-1"
                                data-animation-name="customAnimationIn" data-animation-duration="1500"
                                data-animation-delay="500"> Research</h3>
                            <p class="u-text u-text-2" data-animation-name="customAnimationIn"
                                data-animation-duration="1750" data-animation-delay="500"
                                data-animation-direction="Left">Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                            </p>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-2"
                        data-animation-name="customAnimationIn" data-animation-duration="1250"
                        data-animation-delay="0">
                        <div class="u-container-layout u-similar-container u-container-layout-2"><span
                                class="u-custom-item u-file-icon u-icon u-icon-rounded u-palette-1-base u-radius-20 u-text-white u-icon-2"><img
                                    src="assets\images\system-regular-63-settings-cog.gif" alt=""></span>
                            <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-1-base u-text-3"
                                data-animation-name="customAnimationIn" data-animation-duration="1500"
                                data-animation-delay="500"> Strategy</h3>
                            <p class="u-text u-text-4" data-animation-name="customAnimationIn"
                                data-animation-duration="1750" data-animation-delay="500"
                                data-animation-direction="Left">Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                            </p>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-3"
                        data-animation-name="customAnimationIn" data-animation-duration="1250">
                        <div class="u-container-layout u-similar-container u-container-layout-3"><span
                                class="u-custom-item u-file-icon u-icon u-icon-rounded u-palette-1-base u-radius-20 u-text-white u-icon-3"><img
                                    src="assets\images\system-regular-46-notification-bell.gif" alt=""></span>
                            <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-1-base u-text-5"
                                data-animation-name="customAnimationIn" data-animation-duration="1500"
                                data-animation-delay="500">Design</h3>
                            <p class="u-text u-text-6" data-animation-name="customAnimationIn"
                                data-animation-duration="1750" data-animation-direction="Left"
                                data-animation-delay="500">Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-1-base u-text-7">About</h2>
            <p class="u-align-left u-custom-font u-font-montserrat u-text u-text-8">Oh feel if up to till like.&nbsp;He
                an thing rapid these after going drawn or. Timed she his law the spoil round defer. In surprise concerns
                informed betrayed he learning is ye. Ignorant formerly so ye blessing.&nbsp;<br>
                <br>
                <span style="font-weight: 700;">He as spoke avoid given downs money on we. Of properly carriage
                    shutters ye as wandered up repeated moreover.</span>
            </p>
        </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-4ac8">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-638c" data-image-width="1920"
        data-image-height="1331">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1"> © 2023 Pecoden. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
