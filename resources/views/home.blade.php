@extends('layouts.layout')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets\css\Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="Docs/JS/jquery.js" defer=""></script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="Include/Libraries/intlTelInput/">
</head>


<body data-home-page="index.html" data-home-page-title="Home" data-path-to-root="./" data-include-products="false"
    class="u-body u-xl-mode" data-lang="en">


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

    <section class="u-clearfix u-video u-video-cover u-section-1" id="sec-ad09">
        <div class="u-background-video u-expanded">
            <div class="embed-responsive">
                <video class="embed-responsive-item" data-autoplay="1" loop="" muted="1"
                    autoplay="autoplay" playsinline="">
                    <source src="https://edesigninteractive.com/attachments/HomeSlider/9/main/video-2-desktop.mp4"
                        type="video/mp4">
                    <p>Your browser does not support HTML5 video.</p>
                </video>
            </div>
            <div class="u-video-shading"></div>
        </div>
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-sheet-1">
            <h2 class="u-align-left u-text u-text-default u-text-1">Sample Headline</h2>
            <h6 class="u-align-left u-custom-font u-font-georgia u-text u-text-2"> Sample text. Lorem ipsum dolor sit
                amet,
                consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</h6>
            <div class="u-form u-form-1">
                <form action="#" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email"
                    name="form" style="padding: 10px;">
                    <div class="u-form-group u-form-message">
                        <label for="email-b0ec" class="u-label"></label>
                        <textarea placeholder="Describe your legal issue here ...." id="email-b0ec" name="text"
                            class="u-input u-input-rectangle" required="required"></textarea>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-btn u-btn-submit u-button-style u-btn-1">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors
                        then try
                        again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                </form>
            </div>
            <a href="#carousel_1a63"
                class="u-btn u-btn-round u-button-style u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-2">Ask</a>
            <a href="#carousel_5d9a"
                class="u-btn u-btn-round u-button-style u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-3">Find</a>
            <a href="#carousel_3975"
                class="u-btn u-btn-round u-button-style u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-4">Hire</a>
            <a href="#carousel_2b06"
                class="u-btn u-btn-round u-button-style u-dialog-link u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-5">Explore</a>
        </div>
    </section>

    <section class="u-clearfix u-image u-section-2" id="sec-a20d" data-image-width="1920" data-image-height="758">
        <img class="u-image u-image-contain u-image-default u-image-1" src="assets\images\bubbe49.webp"
            alt="" data-image-width="367" data-image-height="300" data-animation-name="customAnimationIn"
            data-animation-duration="2000">
        <img class="u-image u-image-contain u-image-default u-image-2" src="assets\images\light-shadow.png"
            alt="" data-image-width="500" data-image-height="499" data-animation-name="customAnimationIn"
            data-animation-duration="1000" data-animation-delay="1500">
        <img class="u-image u-image-contain u-image-default u-image-3" src="assets\images\light-1.png" alt=""
            data-image-width="274" data-image-height="445" data-animation-name="customAnimationIn"
            data-animation-duration="1000">
        <img class="u-image u-image-contain u-image-default u-image-4" src="assets\images\bubbe47.webp"
            alt="" data-image-width="820" data-image-height="560">
        <img class="u-image u-image-contain u-image-default u-image-5" src="assets\images\bubbe48.webp"
            alt="" data-image-width="320" data-image-height="300" data-animation-name="customAnimationIn"
            data-animation-duration="2000">
        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-6"
            src="assets\images\photoshop.png" alt="" data-image-width="176" data-image-height="155"
            data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="1500">
        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-7"
            src="assets\images\photos2hop.png" alt="" data-image-width="176" data-image-height="155"
            data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="500">
        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-8"
            src="assets\images\photosh23op.png" alt="" data-image-width="159" data-image-height="155"
            data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="1000">
        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-9"
            src="assets\images\phot2oshop1.png" alt="" data-image-width="191" data-image-height="216"
            data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="750">
        <img class="u-image u-image-contain u-image-default u-image-10" src="assets\images\dim12ond.png"
            alt="" data-image-width="281" data-image-height="120" data-animation-name="customAnimationIn"
            data-animation-duration="1000" data-animation-delay="1250">
        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-11"
            src="assets\images\dim223ond.png" alt="" data-image-width="174" data-image-height="167"
            data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="1750">
        <h2
            class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-text u-text-default u-text-1">
            Sample Headline</h2>
        <p class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-text u-text-2">
            Sample
            text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.
        </p>
        <a href="#" class="u-btn u-btn-round u-button-style u-radius-50 u-btn-1">learn more</a>
    </section>
    <section class="u-clearfix u-custom-color-5 u-section-3" id="sec-b59c" style="background-color: #ef4c5b;">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1"
                            src="">
                            <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1"
                                src="">
                                <img class="u-image u-image-contain u-image-default u-image-1"
                                    src="assets\images\branding-violet.webp" alt="" data-image-width="401"
                                    data-image-height="476" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">
                                <img class="u-image u-image-contain u-image-default u-image-2"
                                    src="assets\images\branding-black.webp" alt="" data-image-width="527"
                                    data-image-height="536" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-delay="500">
                                <img class="u-image u-image-contain u-image-default u-image-3"
                                    src="assets\images\branding-white.webp" alt="" data-image-width="474"
                                    data-image-height="557" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-delay="1000">
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-uploaded-video u-layout-cell-2"
                            src="">
                            <div class="u-container-layout u-container-layout-2">
                                <img class="custom-expanded u-image u-image-contain u-image-default u-image-4"
                                    src="assets\images\red-bubble-1.webp" alt="" data-image-width="709"
                                    data-image-height="373" data-animation-name="customAnimationIn"
                                    data-animation-duration="2000">
                                <img class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-contain u-image-default u-image-5"
                                    src="assets\images\red-bubble-2.webp" alt="" data-image-width="820"
                                    data-image-height="560">
                                <h2
                                    class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-text u-text-default u-text-1">
                                    Sample Headline</h2>
                                <p
                                    class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-text u-text-2">
                                    Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc
                                    justo sagittis
                                    suscipit ultrices.</p>
                                <a href="#"
                                    class="u-align-right u-btn u-btn-round u-button-style u-radius-50 u-btn-1">learn
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-section-4" id="carousel_2db9" data-image-width="1920"
        data-image-height="761">
        <div class="u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h5 class="u-text u-text-default u-text-grey-50 u-text-1" data-animation-name="pulse"
                                    data-animation-duration="1000" data-animation-direction=""> DevOps &amp; Website
                                    Support Services</h5>
                                <h2 class="u-text u-text-default u-text-2" data-animation-name="flipIn"
                                    data-animation-duration="1000" data-animation-direction="X"> We provide brands
                                    with long term website support and maintenance.</h2>
                            </div>
                        </div>
                        <div class="u-container-style u-image u-image-contain u-layout-cell u-size-30 u-image-1"
                            data-image-width="848" data-image-height="681" data-animation-name="customAnimationIn"
                            data-animation-duration="1000">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div
                            class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs u-container-layout-3">
                            <img alt=""
                                class="u-expanded-width u-image u-image-contain u-image-default u-image-2"
                                data-image-width="300" data-image-height="90" src="assets\images\/1.svg">
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div
                            class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs u-container-layout-4">
                            <img alt=""
                                class="u-expanded-width u-image u-image-contain u-image-default u-image-3"
                                data-image-width="300" data-image-height="90" src="assets\images\logo-amazon.svg">
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div
                            class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs u-container-layout-5">
                            <img alt=""
                                class="u-expanded-width u-image u-image-contain u-image-default u-image-4"
                                data-image-width="300" data-image-height="63" src="assets\images\evga.svg">
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div
                            class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs u-container-layout-6">
                            <img alt=""
                                class="u-expanded-width u-image u-image-contain u-image-default u-image-5"
                                data-image-width="300" data-image-height="39" src="assets\images\tesla-9.svg">
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        <div
                            class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs u-container-layout-7">
                            <img alt=""
                                class="u-expanded-width u-image u-image-contain u-image-default u-image-6"
                                data-image-width="300" data-image-height="54" src="assets\images\sony-logo.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-custom-color-6 u-section-5" style="background-color: #8106ce;" id="sec-95aa">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <img class="u-image u-image-default u-image-1" src="assets\images\mobile-app-11.webp"
                                    alt="" data-image-width="452" data-image-height="658"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000">
                                <img class="u-image u-image-default u-image-2" src="assets\images\mobile-app-2.webp"
                                    alt="" data-image-width="326" data-image-height="197"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-delay="750">
                                <img class="u-image u-image-default u-image-3" src="assets\images\mobile-app-3.webp"
                                    alt="" data-image-width="325" data-image-height="174"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-delay="1250">
                                <img class="u-image u-image-default u-image-4" src="assets\images\mobile-app-4.webp"
                                    alt="" data-image-width="315" data-image-height="169"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"
                                    data-animation-delay="2000">
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-2"
                            data-animation-name="customAnimationIn" data-animation-duration="1000">
                            <div class="u-container-layout u-container-layout-2">
                                <img class="u-image u-image-contain u-image-default u-image-5"
                                    src="assets\images\violet-bubble-blur.webp" alt="" data-image-width="820"
                                    data-image-height="560">
                                <h5 class="u-align-right u-text u-text-default u-text-grey-50 u-text-1"
                                    data-animation-name="pulse" data-animation-duration="1000"
                                    data-animation-direction=""> DevOps &amp; Website Support Services</h5>
                                <h2 class="u-align-right u-text u-text-default u-text-2" data-animation-name="flipIn"
                                    data-animation-duration="1000" data-animation-direction="X"> We provide brands
                                    with long term website
                                    support and maintenance.</h2>
                                <img class="u-image u-image-contain u-image-default u-image-6"
                                    src="assets\images\violet-bubble.webp" alt="" data-image-width="709"
                                    data-image-height="372" data-animation-name="customAnimationIn"
                                    data-animation-duration="2000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-image u-section-6" id="carousel_e650" data-image-width="1920"
        data-image-height="760">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
            <img class="custom-expanded u-image u-image-contain u-image-default u-image-1"
                src="assets\images\bl53.webp" alt="" data-image-width="441" data-image-height="421"
                data-animation-name="customAnimationIn" data-animation-duration="2000">
            <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <img class="custom-expanded u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-image u-image-contain u-image-default u-image-2"
                                    src="assets\images\red-bubble-2.webp" alt="" data-image-width="820"
                                    data-image-height="560">
                                <img class="u-image u-image-contain u-image-default u-image-3"
                                    src="assets\images\bl51.webp" alt="" data-image-width="779"
                                    data-image-height="421" data-animation-name="customAnimationIn"
                                    data-animation-duration="2000">
                                <h5 class="u-text u-text-default u-text-grey-50 u-text-1" data-animation-name="pulse"
                                    data-animation-duration="1000" data-animation-direction=""> DevOps &amp; Website
                                    Support Services</h5>
                                <h2 class="u-text u-text-default u-text-2" data-animation-name="flipIn"
                                    data-animation-duration="1000" data-animation-direction="X"> We provide brands
                                    with long term website support and maintenance.</h2>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2"
                            data-animation-name="customAnimationIn" data-animation-duration="1000">
                            <div class="u-container-layout u-container-layout-2">
                                <img class="u-image u-image-contain u-image-default u-image-4"
                                    src="assets\images\disk-img.webp" alt="" data-image-width="390"
                                    data-image-height="168" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-delay="1500">
                                <img class="u-image u-image-contain u-image-default u-image-5"
                                    src="assets\images\dart.webp" alt="" data-image-width="63"
                                    data-image-height="437" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-delay="2000">
                                <img class="u-image u-image-contain u-image-default u-image-6"
                                    src="assets\images\disk-img.webp" alt="" data-image-width="390"
                                    data-image-height="168" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">
                                <img class="u-image u-image-contain u-image-default u-image-7"
                                    src="assets\images\dart.webp" alt="" data-image-width="63"
                                    data-image-height="437" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-delay="500">
                                <img class="u-image u-image-contain u-image-default u-image-8"
                                    src="assets\images\disk-img.webp" alt="" data-image-width="390"
                                    data-image-height="168" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-delay="2500">
                                <img class="u-image u-image-contain u-image-default u-image-9"
                                    src="assets\images\dart.webp" alt="" data-image-width="63"
                                    data-image-height="437" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000" data-animation-delay="3000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-container-align-center u-image u-section-7" id="sec-9dee" data-image-width="3200"
        data-image-height="1006">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-image u-parallax u-section-8" id="sec-7563" data-image-width="1920"
        data-image-height="1331">
        <img class="u-expanded-width u-image u-image-default u-image-1" src="assets\images\parallax_top.png"
            alt="" data-image-width="1920" data-image-height="611">
        <div class="u-align-center u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                        <h4 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-hover-feature u-text u-text-body-alt-color u-text-default u-text-1"
                            data-href="index.html">Home</h4>
                        <h4
                            class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-hover-feature u-text u-text-body-alt-color u-text-default u-text-1">
                            Services</h4>
                        <h4
                            class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-hover-feature u-text u-text-body-alt-color u-text-default u-text-1">
                            Our Hubs</h4>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-2">
                        <h4 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-hover-feature u-text u-text-body-alt-color u-text-default u-text-1"
                            data-href="{{route('contact')}}">Contact Us</h4>
                        <h4 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-hover-feature u-text u-text-body-alt-color u-text-default u-text-1"
                            data-href="{{route('about')}}">About Us</h4>
                        <h4
                            class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-hover-feature u-text u-text-body-alt-color u-text-default u-text-1">
                            PortFolio</h4>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
                        <h4
                            class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-hover-feature u-text u-text-body-alt-color u-text-default u-text-1">
                            Your rights</h4>
                        <h4 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-hover-feature u-text u-text-body-alt-color u-text-default u-text-1"
                            data-href="Includes/Languages/English/Help-center.html">Help Center</h4>
                        <h4 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-hover-feature u-text u-text-body-alt-color u-text-default u-text-1"
                            data-href="Includes/Languages/English/new-services.html">New services</h4>
                    </div>
                </div>
            </div>
        </div>
        <p class="u-align-center u-small-text u-text u-text-body-alt-color u-text-variant u-text-10"> © 2023 Pecoden.
            All
            rights reserved.</p>
    </section>







    <span
        style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; right: 20px; bottom: 20px;"
        class="u-back-to-top u-file-icon u-icon u-opacity u-opacity-60 u-text-palette-4-light-1" data-href="#"><img
            src="assets\images\ed26a672.png" alt=""></span>
    <section
        class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-12"
        id="carousel_1a63" data-dialog-show-on="click">
        <div class="u-align-center u-container-style u-dialog u-image u-radius-13 u-shape-round u-image-1"
            data-image-width="1434" data-image-height="1100">
            <div class="u-container-layout u-container-layout-1">
                <h2 class="u-align-center u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-1"> Who do
                    you want to
                    ask?<br>
                </h2>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-1">Lawyer</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-2">
                    accountant</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-3">
                    transportation company</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-4">
                    Engineering consultant</a><span
                    class="u-align-center u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-1"></span>
            </div><button class="u-dialog-close-button u-icon u-text-white u-icon-2"><svg class="u-svg-link"
                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 492 492">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-51a0"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 492 492" x="0px" y="0px" id="svg-51a0"
                    style="enable-background:new 0 0 492 492;">
                    <g>
                        <g>
                            <path
                                d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z">
                            </path>
                        </g>
                    </g>
                </svg></button>
        </div>
    </section>
    <style>
        .u-dialog-section-12 .u-image-1 {
            width: 428px;
            height: 559px !important;
            box-shadow: 9px 9px 4px 0 rgba(0, 0, 0, 0.2);
            background-image: url("Layout/Default/images/fdfddf.jpg");
            background-position: 50% 50%;
            height: auto;
            margin: 113px auto 19px;
        }

        .u-dialog-section-12 .u-container-layout-1 {
            padding: 39px 0 0;
        }

        .u-dialog-section-12 .u-text-1 {
            text-transform: uppercase;
            font-size: 3.75rem;
            font-weight: 700;
            font-family: Oswald, sans-serif;
            margin: 0 50px;
        }

        .u-dialog-section-12 .u-btn-1 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 59px auto 0;
            padding: 10px 116px 10px 115px;
        }

        .u-dialog-section-12 .u-btn-2 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 94px 10px 93px;
        }

        .u-dialog-section-12 .u-btn-3 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 32px;
        }

        .u-dialog-section-12 .u-btn-4 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 37px;
        }

        .u-dialog-section-12 .u-icon-1 {
            height: 100px;
            width: 133px;
            color: rgb(235, 186, 22) !important;
            margin: 31px auto 0;
        }

        .u-dialog-section-12 .u-icon-2 {
            width: 27px;
            height: 27px;
            left: auto;
            top: 17px;
            position: absolute;
            right: 16px;
        }

        @media (max-width: 991px) {
            .u-dialog-section-12 .u-container-layout-1 {
                padding-top: 30px;
                padding-left: 50px;
                padding-right: 50px;
            }

            .u-dialog-section-12 .u-btn-1 {
                margin-left: 44px;
                width: 300px;
            }

            .u-dialog-section-12 .u-btn-2 {
                margin-left: 192px;
                width: 300px;
            }

            .u-dialog-section-12 .u-btn-3 {
                margin-left: 130px;
                width: 301px;
            }

            .u-dialog-section-12 .u-btn-4 {
                margin-left: 135px;
                width: 301px;
            }
        }

        @media (max-width: 767px) {
            .u-dialog-section-12 .u-container-layout-1 {
                padding-top: 45px;
                padding-left: 45px;
                padding-right: 45px;
            }

            .u-dialog-section-12 .u-btn-1 {
                margin-left: 2px;
            }

            .u-dialog-section-12 .u-btn-2 {
                margin-left: 148px;
            }

            .u-dialog-section-12 .u-btn-3 {
                margin-left: 86px;
            }

            .u-dialog-section-12 .u-btn-4 {
                margin-left: 91px;
            }
        }

        @media (max-width: 575px) {
            .u-dialog-section-12 .u-image-1 {
                width: 340px;
            }

            .u-dialog-section-12 .u-container-layout-1 {
                padding: 50px 25px 26px;
            }

            .u-dialog-section-12 .u-text-1 {
                font-size: 2.25rem;
                margin-left: 6px;
                margin-right: 6px;
            }

            .u-dialog-section-12 .u-btn-1 {
                margin-left: 78px;
            }

            .u-dialog-section-12 .u-btn-2 {
                margin-left: 56px;
            }

            .u-dialog-section-12 .u-btn-3 {
                margin-left: -3px;
                margin-right: -3px;
            }

            .u-dialog-section-12 .u-btn-4 {
                margin-left: -1px;
            }
        }
    </style>
    <section
        class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-13"
        id="carousel_5d9a">
        <div class="u-align-center u-container-style u-dialog u-image u-radius-13 u-shape-round u-image-1"
            data-image-width="1434" data-image-height="1100">
            <div class="u-container-layout u-valign-top u-container-layout-1">
                <h2 class="u-align-center u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-1"> Who do
                    you want to
                    find ?<br>
                </h2>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-1">Lawyer</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-2">
                    accountant</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-3">
                    transportation company</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-4">
                    Engineering consultant</a><span
                    class="u-align-center u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-1"></span>
            </div><button class="u-dialog-close-button u-icon u-text-white u-icon-2"><svg class="u-svg-link"
                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 492 492">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-51a0"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 492 492" x="0px" y="0px" id="svg-51a0"
                    style="enable-background:new 0 0 492 492;">
                    <g>
                        <g>
                            <path
                                d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z">
                            </path>
                        </g>
                    </g>
                </svg></button>
        </div>
    </section>
    <style>
        .u-dialog-section-13 .u-image-1 {
            width: 636px;
            box-shadow: 9px 9px 4px 0 rgba(0, 0, 0, 0.2);
            background-image: url("Layout/Default/images/fdfddf.jpg");
            background-position: 50% 50%;
            margin: 113px auto 60px calc(((100% - 1140px) / 2) + 217px);
            height: 550px;
        }

        .u-dialog-section-13 .u-container-layout-1 {
            padding: 39px 50px;
        }

        .u-dialog-section-13 .u-text-1 {
            text-transform: uppercase;
            font-size: 3.75rem;
            font-weight: 700;
            font-family: Oswald, sans-serif;
            margin: 0;
        }

        .u-dialog-section-13 .u-btn-1 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 59px auto 0;
            padding: 10px 116px 10px 115px;
        }

        .u-dialog-section-13 .u-btn-2 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 94px 10px 93px;
        }

        .u-dialog-section-13 .u-btn-3 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 32px;
        }

        .u-dialog-section-13 .u-btn-4 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 37px;
        }

        .u-dialog-section-13 .u-icon-1 {
            height: 100px;
            width: 133px;
            color: rgb(235, 186, 22) !important;
            margin: 31px auto 0;
        }

        .u-dialog-section-13 .u-icon-2 {
            width: 27px;
            height: 27px;
            left: auto;
            top: 17px;
            position: absolute;
            right: 16px;
        }

        @media (max-width: 1199px) {
            .u-dialog-section-13 .u-image-1 {
                height: auto;
                margin-left: calc(((100% - 940px) / 2) + 217px);
                min-height: 612px;
            }
        }

        @media (max-width: 991px) {
            .u-dialog-section-13 .u-image-1 {
                margin-left: calc(((100% - 720px) / 2) + 84px);
            }

            .u-dialog-section-13 .u-container-layout-1 {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        }

        @media (max-width: 767px) {
            .u-dialog-section-13 .u-image-1 {
                width: 540px;
                margin-left: auto;
            }

            .u-dialog-section-13 .u-container-layout-1 {
                padding-top: 45px;
                padding-left: 45px;
                padding-right: 45px;
            }

            .u-dialog-section-13 .u-text-1 {
                font-size: 2.25rem;
            }
        }

        @media (max-width: 575px) {
            .u-dialog-section-13 .u-image-1 {
                width: 340px;
            }

            .u-dialog-section-13 .u-container-layout-1 {
                padding: 50px 25px 26px;
            }

            .u-dialog-section-13 .u-text-1 {
                font-size: 1.875rem;
            }
        }
    </style>
    <section
        class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-14"
        id="carousel_3975">
        <div class="u-align-center u-container-style u-dialog u-image u-radius-13 u-shape-round u-image-1"
            data-image-width="1434" data-image-height="1100">
            <div class="u-container-layout u-container-layout-1">
                <h2 class="u-align-center u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-1"> Who do
                    you want to
                    hire ?<br>
                </h2>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-1">Lawyer</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-2">
                    accountant</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-3">
                    transportation company</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-4">
                    Engineering consultant</a><span
                    class="u-align-center u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-1"></span>
            </div><button class="u-dialog-close-button u-icon u-text-white u-icon-2"><svg class="u-svg-link"
                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 492 492">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-51a0"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 492 492" x="0px" y="0px" id="svg-51a0"
                    style="enable-background:new 0 0 492 492;">
                    <g>
                        <g>
                            <path
                                d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z">
                            </path>
                        </g>
                    </g>
                </svg></button>
        </div>
    </section>
    <style>
        .u-dialog-section-14 .u-image-1 {
            width: 636px;
            height: 559px !important;
            box-shadow: 9px 9px 4px 0 rgba(0, 0, 0, 0.2);
            background-image: url("Layout/Default/images/fdfddf.jpg");
            background-position: 50% 50%;
            margin: 113px auto 60px calc(((100% - 1140px) / 2) + 217px);
        }

        .u-dialog-section-14 .u-container-layout-1 {
            padding: 39px 50px 40px;
        }

        .u-dialog-section-14 .u-text-1 {
            text-transform: uppercase;
            font-size: 3.75rem;
            font-weight: 700;
            font-family: Oswald, sans-serif;
            margin: 0;
        }

        .u-dialog-section-14 .u-btn-1 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 59px auto 0;
            padding: 10px 116px 10px 115px;
        }

        .u-dialog-section-14 .u-btn-2 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 94px 10px 93px;
        }

        .u-dialog-section-14 .u-btn-3 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 32px;
        }

        .u-dialog-section-14 .u-btn-4 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 37px;
        }

        .u-dialog-section-14 .u-icon-1 {
            height: 100px;
            width: 133px;
            color: rgb(235, 186, 22) !important;
            margin: 31px auto 0;
        }

        .u-dialog-section-14 .u-icon-2 {
            width: 27px;
            height: 27px;
            left: auto;
            top: 17px;
            position: absolute;
            right: 16px;
        }

        @media (max-width: 1199px) {
            .u-dialog-section-14 .u-image-1 {
                height: auto;
                margin-left: calc(((100% - 940px) / 2) + 217px);
            }
        }

        @media (max-width: 991px) {
            .u-dialog-section-14 .u-image-1 {
                margin-left: calc(((100% - 720px) / 2) + 84px);
            }

            .u-dialog-section-14 .u-container-layout-1 {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        }

        @media (max-width: 767px) {
            .u-dialog-section-14 .u-image-1 {
                width: 540px;
                min-height: 615px;
                margin-left: auto;
            }

            .u-dialog-section-14 .u-container-layout-1 {
                padding-top: 45px;
                padding-left: 45px;
                padding-right: 45px;
            }

            .u-dialog-section-14 .u-text-1 {
                font-size: 2.25rem;
            }
        }

        @media (max-width: 575px) {
            .u-dialog-section-14 .u-image-1 {
                width: 340px;
                min-height: 600px;
            }

            .u-dialog-section-14 .u-container-layout-1 {
                padding: 50px 25px 26px;
            }

            .u-dialog-section-14 .u-text-1 {
                font-size: 1.875rem;
            }
        }
    </style>
    <section
        class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-15"
        id="carousel_2b06">
        <div class="u-align-center u-container-style u-dialog u-image u-radius-13 u-shape-round u-image-1"
            data-image-width="1434" data-image-height="1100">
            <div class="u-container-layout u-container-layout-1">
                <h2 class="u-align-center u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-1"> Who do
                    you want to
                    Explore ?<br>
                </h2>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-1">Lawyer</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-2">
                    accountant</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-3">
                    transportation company</a>
                <a href="#"
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-4">
                    Engineering consultant</a><span
                    class="u-align-center u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-1"></span>
            </div><button class="u-dialog-close-button u-icon u-text-white u-icon-2"><svg class="u-svg-link"
                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 492 492">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-51a0"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 492 492" x="0px" y="0px" id="svg-51a0"
                    style="enable-background:new 0 0 492 492;">
                    <g>
                        <g>
                            <path
                                d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z">
                            </path>
                        </g>
                    </g>
                </svg></button>
        </div>
    </section>

    <style>
        .u-dialog-section-15 .u-image-1 {
            width: 636px;
            box-shadow: 9px 9px 4px 0 rgba(0, 0, 0, 0.2);
            background-image: url("Layout/Default/images/fdfddf.jpg");
            background-position: 50% 50%;
            margin: 113px auto 60px calc(((100% - 1140px) / 2) + 217px);
            height: 565px;
        }

        .u-dialog-section-15 .u-container-layout-1 {
            padding: 39px 50px 40px;
        }

        .u-dialog-section-15 .u-text-1 {
            text-transform: uppercase;
            font-size: 3.75rem;
            font-weight: 700;
            font-family: Oswald, sans-serif;
            margin: 0;
        }

        .u-dialog-section-15 .u-btn-1 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 59px auto 0;
            padding: 10px 116px 10px 115px;
        }

        .u-dialog-section-15 .u-btn-2 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 94px 10px 93px;
        }

        .u-dialog-section-15 .u-btn-3 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 32px;
        }

        .u-dialog-section-15 .u-btn-4 {
            --radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 1px;
            margin: 25px auto 0;
            padding: 10px 37px;
        }

        .u-dialog-section-15 .u-icon-1 {
            height: 100px;
            width: 133px;
            color: rgb(235, 186, 22) !important;
            margin: 31px auto 0;
        }

        .u-dialog-section-15 .u-icon-2 {
            width: 27px;
            height: 27px;
            left: auto;
            top: 17px;
            position: absolute;
            right: 16px;
        }

        @media (max-width: 1199px) {
            .u-dialog-section-15 .u-image-1 {
                height: auto;
                margin-left: calc(((100% - 940px) / 2) + 217px);
                min-height: 612px;
            }
        }

        @media (max-width: 991px) {
            .u-dialog-section-15 .u-image-1 {
                margin-left: calc(((100% - 720px) / 2) + 84px);
            }

            .u-dialog-section-15 .u-container-layout-1 {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        }

        @media (max-width: 767px) {
            .u-dialog-section-15 .u-image-1 {
                width: 540px;
                min-height: 615px;
                margin-left: auto;
            }

            .u-dialog-section-15 .u-container-layout-1 {
                padding-top: 45px;
                padding-left: 45px;
                padding-right: 45px;
            }

            .u-dialog-section-15 .u-text-1 {
                font-size: 2.25rem;
            }
        }

        @media (max-width: 575px) {
            .u-dialog-section-15 .u-image-1 {
                width: 340px;
                min-height: 600px;
            }

            .u-dialog-section-15 .u-container-layout-1 {
                padding: 50px 25px 26px;
            }

            .u-dialog-section-15 .u-text-1 {
                font-size: 1.875rem;
            }
        }
    </style>
</body>
