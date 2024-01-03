@extends('layouts.layout')
<body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">

    <section class="u-clearfix u-custom-color-3 u-section-1" id="carousel_b48b">
      <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-effect-hover-zoom u-image-contain u-layout-cell u-size-28 u-layout-cell-1"
              data-image-width="141" data-image-height="150" data-animation-name="customAnimationIn"
              data-animation-duration="1000">
              <div class="u-background-effect u-expanded">
                <div class="u-background-effect-image u-expanded u-image u-image-contain u-image-1" data-image-width="141"
                  data-image-height="150">
                </div>
              </div>
              <div class="u-background-effect u-expanded">
                <div class="u-background-effect-image u-expanded u-image u-image-contain u-image-1" data-image-width="141"
                  data-image-height="150">
                </div>
              </div>
              <div class="u-container-layout u-valign-middle u-container-layout-1">
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-size-32 u-white u-layout-cell-2"
              data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-align-center u-custom-font u-font-roboto-slab u-text u-text-grey-40 u-text-1"
                  data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X"><span
                    class="u-file-icon u-icon"><img src="assets\images\190411.png" alt=""></span>&nbsp;No
                  credit card needed
                </p>
                <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-2" data-animation-name="flipIn"
                  data-animation-duration="1000" data-animation-direction="X">Login</h2>
                <div class="custom-expanded u-align-left u-form u-form-1">
                  <!---------------------------------------------------------------------->
                  <!------------------------------- Form --------------------------------->
                  <!---------------------------------------------------------------------->

                  <form action="{{route('login')}}" method="POST" class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form" style="padding: 0px;">
                    @csrf
                    <div class="u-form-email u-form-group u-label-top">
                        <label for="email" class="u-label" wfd-invisible="true">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email"
                            name="email"
                            class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-3"
                            required="" maxlength="50">
                    </div>
                    <div class="u-form-group u-label-top u-form-group-4">
                        <label for="password" class="u-label">Password</label>
                        <input type="password" placeholder="Enter Your Password" id="password"
                            name="password"
                            class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-4"
                            required="required" maxlength="20">
                    </div>
                    <div class="u-align-right u-form-group u-label-top">
                      <a href="#" \\use button for PHP ,not link a
                        class="u-active-black u-border-none u-btn u-btn-submit u-btn-round u-button-style u-hover-black u-palette-3-base u-radius-7 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1">Login</a>
                      <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                    </div>
                    {{-- <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has
                      been sent. </div>
                    <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message.
                      Please fix errors then try again. </div> --}}
                    {{-- <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true"> --}}
                  </form>

                </div>
                <h6 class="u-align-center u-text u-text-3">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-4 u-text-hover-palette-2-base u-btn-2"
                    data-href="CreateAccount.html" href="CreateAccount.html"> Create account</a>
                </h6>
                <h6 class="u-align-center u-text u-text-grey-25 u-text-4"> By creating an account you accept our<br>
                </h6>
                <h6 class="u-align-center u-text u-text-grey-25 u-text-5">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-3"
                    data-href="#"> Terms of service</a>
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





  </body>
