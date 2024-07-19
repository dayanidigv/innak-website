@extends('layout.app')
@section('content')


<style>


/* ***** Bananas Banner ***** */
.bananas-banner .lqd-bnr-bnns .module-sticky {
    inset-inline-start: 0;
    top: 0;
}

.bananas-banner .lqd-bnr-bnns-h {
    font-size: 5vw;
}

/* Ensure the element is hidden by default */
.lqd-section.carousel-button {
    display: none;
}

/* Show the element on small screens (mobile devices) */
@media (max-width: 639px) {
    .sm\:block {
        display: block !important;
    }
}

/* Hide the element on medium screens */
@media (min-width: 640px) and (max-width: 1023px) {
    .md\:hidden {
        display: none;
    }
}

/* Hide the element on large screens */
@media (min-width: 1024px) {
    .lg\:hidden {
        display: none;
    }
}


/* ***** Solutions ***** */
.solutions .lqd-section-scroll-dots {
    flex-direction: column;
}

.solutions .lqd-section-scroll-dot {
    justify-content: center;
    align-items: center;
    border-radius: 50em;
}

.solutions .lqd-overlay {
    display: block;
}

.solutions .module-img-1 .block-revealer__element {
    background-color: #F0EBFF;
}

.solutions .module-img-2 .block-revealer__element {
    background-color: #EBF3FF;
}

.solutions .module-img-3 .block-revealer__element {
    background-color: #FFEBEB;
}

.solutions .module-img-4 .block-revealer__element {
    background-color: #EFFFFA;
}

.solutions .module-img-5 .block-revealer__element {
    background-color: #FFF7E9;
}

.solutions .module-img-6 .block-revealer__element {
    background-color: #FFEFF6;
}


@media (max-width: 1199px) {
    .solutions {
        padding: 40px;
    }

    .solutions .lqd-section-scroll-inner {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .solutions .module-col {
        padding: 10px;
    }
}

@media (max-width: 767px) {
    .solutions {
        padding: 40px 20px;
    }
}

.lqd-section-scroll-dots {
    top: 50%;
    left: 65px;
    transform: translateY(-50%);
    counter-reset: section-scroll-dots;
}
</style>

<!-- Start Services -->
<section class="lqd-section design-services pt-100 pb-40" id="services" data-custom-animations="true"
    data-ca-options='{"animationTarget": ".animation-element, figure, .lqd-split-lines .lqd-lines .split-inner", "duration" : 1100 , "startDelay" : 200 , "delay" : 100 , "ease": "expo.out", "initValues": {"y": "80px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
    <div class="absolute top-0">
        <div class="ld-particles-container relative w-full">
            <div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-design-services"
                data-particles="true"
                data-particles-options='{"particles": {"number": {"value" : 5} , "color": {"value" : ["#604CFD", "#F85976", "#FDA44C", "#A2B2C9"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 2} , "move": {"enable": true, "direction": "right", "random": true, "out_mode": "out"}} , "interactivity": {"detect_on": "window", "events": {"onhover": {"enable": true, "mode" : ["bubble"]}} , "modes": {"bubble": {"size" : 15}}} , "retina_detect": true}'>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="w-450 flex flex-col relative items-center max-w-full text-center mx-auto">
                <div class="ld-fancy-heading relative w-auto py-5 px-15 bg-gray rounded-100 animation-element">
                    <h6 class="ld-fh-element relative text-12 uppercase tracking-1 text-slate-500 m-0">
                        services
                    </h6>
                </div>
                <div class="ld-fancy-heading relative mask-text">
                    <h2 class="ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-bottom lqd-highlight-reset-onhover lqd-split-lines mb-0/5em mt-0/25em"
                        data-inview="true" data-transition-delay="true"
                        data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                        data-split-text="true" data-split-options='{"type": "lines"}'>
                        New
                        <mark class="lqd-highlight">
                            <span class="lqd-highlight-txt ">ways</span>
                            <span class="bottom-0 left-0 lqd-highlight-inner bg-gold"></span>
                        </mark>
                        to build.
                    </h2>
                </div>
                <div class="absolute -top-5percent module-shape">
                    <div class="lqd-imggrp-single block relative">
                        <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                            <figure class="w-full relative">
                                <img width="67" height="73" src="/images/demo/start-hub/Shape.svg" alt="shape" />
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="ld-fancy-heading relative mask-text">
                    <p class="ld-fh-element relative lqd-split-lines text-17 leading-1/3em" data-split-text="true"
                        data-split-options='{"type": "lines"}'>
                        Experience unparalleled solutions designed for your unique needs. We don't just meet industry
                        standards, we redefine them.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services -->

<!-- Start Solutions -->
<section class="lqd-section solutions bg-white transition-all lqd-section-scroll-activated" id="solutions"
    data-lqd-section-scroll="true" data-section-scroll-options='{"itemsSelector":  ".lqd-section-scroll-inner"}'>
    <div class="container p-0">
        <!-- Web Development -->
        <div class="lqd-section-scroll-inner module-img-1">
            <div class="container">
                <div class="row min-h-100vh items-center">
                    <div class="col col-12 col-xl-6">
                        <div class="lqd-imggrp-single block relative perspective" data-hover3d="true">
                            <div
                                class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                <figure class="w-full relative" data-stacking-factor="1" data-reveal="true"
                                    data-reveal-options='{"direction": "tb"}'>
                                    <img width="1048" height="1006" src="/images/services/web.jpeg"
                                        alt="Web Development">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-xl-6 p-0" data-custom-animations="true"
                        data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "35px", "rotationY" : -35, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
                        <div class="flex flex-wrap py-10 pr-160 pl-80 module-col">

                            <div class="ld-fancy-heading relative animation-element">
                                <h2 class="text-48 tracking-1 ld-fh-element mb-0/5em inline-block relative"
                                    data-inview="true" data-transition-delay="true"
                                    data-delay-options=' {"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                    Web Development
                                </h2>
                            </div>
                            <div class="ld-fancy-heading relative animation-element">
                                <p class="text-16 tracking-0 ld-fh-element mb-0/5em inline-block relative">We build
                                    custom websites that look great and work perfectly. From stunning designs to smooth
                                    functionality, our sites leave a lasting impression.</p>
                            </div>

                            <div class="spacer w-full animation-element">
                                <div class="w-full h-50"></div>
                            </div>
                            <div class="w-full animation-element">
                                <a href="#pricing"
                                    class="btn btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y  btn-icon-right text-13 w-240 h-55 rounded-6 bg-purple-200 text-purple-500 hover:text-black "
                                    data-localscroll="true">
                                    <span class="btn-txt" data-text="Read More" data-split-text="true"
                                        data-split-options='{"type":  "chars, words"}'>Read More</span>
                                    <span class="btn-icon text-1em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- App Development -->
        <div class="lqd-section-scroll-inner module-img-2">
            <div class="container">
                <div class="row min-h-100vh items-center">
                    <div class="col col-12 col-xl-6">
                        <div class="lqd-imggrp-single block relative perspective" data-hover3d="true">
                            <div
                                class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                <figure class="w-full relative" data-stacking-factor="1" data-reveal="true"
                                    data-reveal-options='{"direction": "tb"}'>
                                    <img width="1048" height="1006" src="/images/services/app.jpeg"
                                        alt="App Development">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-xl-6 p-0" data-custom-animations="true"
                        data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "35px", "rotationY" : -35, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
                        <div class="flex flex-wrap py-10 pr-160 pl-80 module-col">
                            <div class="ld-fancy-heading relative animation-element">
                                <h2 class="text-48 tracking-1  ld-fh-element mb-0/5em inline-block relative"
                                    data-inview="true" data-transition-delay="true"
                                    data-delay-options=' {"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                    <mark class="lqd-highlight">
                                        <span class="lqd-highlight-txt">App</span>
                                        <span class="bottom-0 left-0 lqd-highlight-inner bg-blue-200"></span>
                                    </mark> Development
                                </h2>
                            </div>
                            <div class="ld-fancy-heading relative animation-element">
                                <p class="text-16 tracking-0 ld-fh-element mb-0/5em inline-block relative">Develop
                                    custom mobile apps for iOS and Android. Our apps are user-friendly, fast, and
                                    reliable, designed to meet your specific needs.</p>
                            </div>
                            <div class="spacer w-full animation-element">
                                <div class="w-full h-50"></div>
                            </div>
                            <div class="w-full animation-element">
                                <a href="#pricing"
                                    class="btn  btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-custom-size btn-icon-right text-13 w-240 h-55 rounded-6 bg-purple-200 text-purple-500 hover:text-black "
                                    data-localscroll="true">
                                    <span class="btn-txt" data-text="Read More" data-split-text="true"
                                        data-split-options='{"type":  "chars, words"}'>Read More</span>
                                    <span class="btn-icon text-1em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- AR -->
        <div class="lqd-section-scroll-inner module-img-3">
            <div class="container">
                <div class="row min-h-100vh items-center">
                    <div class="col col-12 col-xl-6">
                        <div class="lqd-imggrp-single block relative perspective" data-hover3d="true">
                            <div
                                class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                <figure class="w-full relative" data-stacking-factor="1" data-reveal="true"
                                    data-reveal-options='{"direction": "tb"}'>
                                    <img width="1048" height="1006" src="/images/services/AR.jpeg"
                                        alt="Augmented Reality">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-xl-6 p-0" data-custom-animations="true"
                        data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "35px", "rotationY" : -35, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
                        <div class="flex flex-wrap py-10 pr-160 pl-80 module-col">
                            <div class="ld-fancy-heading relative animation-element">
                                <h2 class="text-48 tracking-1  ld-fh-element mb-0/5em inline-block relative"
                                    data-inview="true" data-transition-delay="true"
                                    data-delay-options=' {"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                    <mark class="lqd-highlight">
                                        <span class="lqd-highlight-txt">Augmented </span>
                                        <span class="bottom-0 left-0 lqd-highlight-inner bg-red-200"></span>
                                    </mark> Reality
                                </h2>
                            </div>
                            <div class="ld-fancy-heading relative animation-element">
                                <p class="text-16 tracking-0 ld-fh-element mb-0/5em inline-block relative">Enhance
                                    reality with our AR solutions. From education to entertainment, we bring your ideas
                                    to life with interactive and engaging experiences.</p>
                            </div>
                            <div class="spacer w-full animation-element">
                                <div class="w-full h-50"></div>
                            </div>
                            <div class="w-full animation-element">
                                <a href="#pricing"
                                    class="btn  btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-custom-size btn-icon-right text-13 w-240 h-55 rounded-6 bg-purple-200 text-purple-500 hover:text-black "
                                    data-localscroll="true">
                                    <span class="btn-txt" data-text="Read More" data-split-text="true"
                                        data-split-options='{"type":  "chars, words"}'>Read More</span>
                                    <span class="btn-icon text-1em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Automation -->
        <div class="lqd-section-scroll-inner module-img-4">
            <div class="container">
                <div class="row min-h-100vh items-center">
                    <div class="col col-12 col-xl-6">
                        <div class="lqd-imggrp-single block relative perspective" data-hover3d="true">
                            <div
                                class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                <figure class="w-full relative" data-stacking-factor="1" data-reveal="true"
                                    data-reveal-options='{"direction": "tb"}'>
                                    <img width="1048" height="1006" src="/images/services/automation.jpeg"
                                        alt="Automation">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-xl-6 p-0" data-custom-animations="true"
                        data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "35px", "rotationY" : -35, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
                        <div class="flex flex-wrap py-10 pr-160 pl-80 module-col">
                            <div class="ld-fancy-heading relative animation-element">
                                <h2 class="text-48 tracking-1  ld-fh-element mb-0/5em inline-block relative"
                                    data-inview="true" data-transition-delay="true"
                                    data-delay-options=' {"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                    <mark class="lqd-highlight">
                                        <span class="lqd-highlight-txt">Automation</span>
                                        <span class="bottom-0 left-0 lqd-highlight-inner bg-red-200"></span>
                                    </mark>
                                </h2>
                            </div>
                            <div class="ld-fancy-heading relative animation-element">
                                <p class="text-16 tracking-0 ld-fh-element mb-0/5em inline-block relative">Boost
                                    productivity with our automation solutions. We streamline your processes, saving you
                                    time and reducing errors.</p>
                            </div>
                            <div class="spacer w-full animation-element">
                                <div class="w-full h-50"></div>
                            </div>
                            <div class="w-full animation-element">
                                <a href="#pricing"
                                    class="btn  btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-custom-size btn-icon-right text-13 w-240 h-55 rounded-6 bg-purple-200 text-purple-500 hover:text-black "
                                    data-localscroll="true">
                                    <span class="btn-txt" data-text="Read More" data-split-text="true"
                                        data-split-options='{"type":  "chars, words"}'>Read More</span>
                                    <span class="btn-icon text-1em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Web Scraping -->
        <div class="lqd-section-scroll-inner module-img-5">
            <div class="container">
                <div class="row min-h-100vh items-center">
                    <div class="col col-12 col-xl-6">
                        <div class="lqd-imggrp-single block relative perspective" data-hover3d="true">
                            <div
                                class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                <figure class="w-full relative" data-stacking-factor="1" data-reveal="true"
                                    data-reveal-options='{"direction": "tb"}'>
                                    <img width="1048" height="1006" src="/images/services/web-scraping.jpeg"
                                        alt="Web Scraping">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-xl-6 p-0" data-custom-animations="true"
                        data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "35px", "rotationY" : -35, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
                        <div class="flex flex-wrap py-10 pr-160 pl-80 module-col">
                            <div class="ld-fancy-heading relative animation-element">
                                <h2 class="text-48 tracking-1  ld-fh-element mb-0/5em inline-block relative"
                                    data-inview="true" data-transition-delay="true"
                                    data-delay-options=' {"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                    <mark class="lqd-highlight">
                                        <span class="lqd-highlight-txt">Web</span>
                                        <span class="bottom-0 left-0 lqd-highlight-inner bg-red-200"></span>
                                    </mark>
                                    Scraping
                                </h2>
                            </div>
                            <div class="ld-fancy-heading relative animation-element">
                                <p class="text-16 tracking-0 ld-fh-element mb-0/5em inline-block relative">Extract and
                                    utilize web data effortlessly. Our web scraping services help you gather insights,
                                    monitor prices, and stay ahead.</p>
                            </div>
                            <div class="spacer w-full animation-element">
                                <div class="w-full h-50"></div>
                            </div>
                            <div class="w-full animation-element">
                                <a href="#pricing"
                                    class="btn  btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-custom-size btn-icon-right text-13 w-240 h-55 rounded-6 bg-purple-200 text-purple-500 hover:text-black "
                                    data-localscroll="true">
                                    <span class="btn-txt" data-text="Read More" data-split-text="true"
                                        data-split-options='{"type":  "chars, words"}'>Read More</span>
                                    <span class="btn-icon text-1em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ML -->
        <div class="lqd-section-scroll-inner module-img-6">
            <div class="container">
                <div class="row min-h-100vh items-center">
                    <div class="col col-12 col-xl-6">
                        <div class="lqd-imggrp-single block relative perspective" data-hover3d="true">
                            <div
                                class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                <figure class="w-full relative" data-stacking-factor="1" data-reveal="true"
                                    data-reveal-options='{"direction": "tb"}'>
                                    <img width="1048" height="1006" src="/images/services/ML.jpeg"
                                        alt="Machine Learning">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-xl-6 p-0" data-custom-animations="true"
                        data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "35px", "rotationY" : -35, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
                        <div class="flex flex-wrap py-10 pr-160 pl-80 module-col">
                            <div class="ld-fancy-heading relative animation-element">
                                <h2 class="text-48 tracking-1  ld-fh-element mb-0/5em inline-block relative"
                                    data-inview="true" data-transition-delay="true"
                                    data-delay-options=' {"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                    <mark class="lqd-highlight">
                                        <span class="lqd-highlight-txt">Machine</span>
                                        <span class="bottom-0 left-0 lqd-highlight-inner bg-red-200"></span>
                                    </mark>
                                    Learning
                                </h2>
                            </div>
                            <div class="ld-fancy-heading relative animation-element">
                                <p class="text-16 tracking-0 ld-fh-element mb-0/5em inline-block relative">Unlock AI's
                                    potential with our machine learning solutions. From predictive analytics to image
                                    recognition, we turn data into actionable insights.</p>
                            </div>
                            <div class="spacer w-full animation-element">
                                <div class="w-full h-50"></div>
                            </div>
                            <div class="w-full animation-element">
                                <a href="#pricing"
                                    class="btn  btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-custom-size btn-icon-right text-13 w-240 h-55 rounded-6 bg-purple-200 text-purple-500 hover:text-black "
                                    data-localscroll="true">
                                    <span class="btn-txt" data-text="Read More" data-split-text="true"
                                        data-split-options='{"type":  "chars, words"}'>Read More</span>
                                    <span class="btn-icon text-1em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Solutions -->

<!-- Start Bananas Banner -->
<section class="lqd-section bananas-banner mt-100 mb-100 py-100 md:hidden md:mt-0" data-section-luminosity="light">
    <div class="container">
        <div class="row">
            <div class="col col-lg-12">
                <div class="lqd-bnr-bnns text-center relative">
                    <div class="lqd-bnr-bnns-inner flex-wrap lqd-overlay flex">
                        <div class="lqd-bnr-bnns-h-wrap lqd-bnr-bnns-h-wrap-first w-full" data-parallax="true"
                            data-parallax-from='{"opacity" : 0 , "y" : 100}' data-parallax-to='{"opacity" : 1, "y" : 0}'
                            data-parallax-options='{"addWillChange": true, "start": "top top", "end": "+=60%"}'>
                            <h2 class="lqd-bnr-bnns-h">For Your Brand.</h2>
                        </div>
                        <div class="fullwidth absolute h-full">
                            <div class="lqd-bnr-bnns-media fullwidth h-vh-100 lqd-css-sticky module-sticky">
                                <div class="lqd-bnr-media-inner" data-parallax="true"
                                    data-parallax-from='{"scale" : 1, "y" : 0}'
                                    data-parallax-to='{"scale" : 0.75, "y" : 100}'
                                    data-parallax-options='{"addWillChange": true, "start": "top top", "end": "+=50%"}'>
                                    <figure>
                                        <img width="2080" height="1123" src="./images/custom/coding-1.webp"
                                            alt="bananas banner">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="lqd-bnr-bnns-h-wrap lqd-bnr-bnns-h-wrap-last flex items-center justify-center h-vh-100 lqd-css-sticky text-center w-full"
                            data-parallax="true" data-parallax-from='{"opacity" : 1, "y" : 0}'
                            data-parallax-to='{"opacity" : 0 , "y" : 150}'
                            data-parallax-options='{"addWillChange": true, "start": "top top", "end": "+=50%"}'>
                            <h2 class="m-0 lqd-bnr-bnns-h-inner" style="color:#F0CC3A;">Made by Innak.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Bananas Banner -->

@endsection