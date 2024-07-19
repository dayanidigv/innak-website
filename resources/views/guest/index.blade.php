@extends('layout.app')
@section('content')


<style>
/* ***** Carousel Text ***** */
.lqd-fade-sides.carousel-container {
    mask-image: none;
    -webkit-mask-image: none;
}

.lqd-fade-sides.carousel-container .flickity-viewport {
    mask-image: linear-gradient(to right, transparent 0%, #000 20%, #000 80%, transparent 100%);
    -webkit-mask-image: linear-gradient(to right, transparent 0%, #000 20%, #000 80%, transparent 100%);
}

.carousel-text .ld-fancy-heading .ld-fh-txt-outline {
    -webkit-text-stroke-color: rgba(0, 0, 0, 0.33);
    -webkit-text-stroke-width: 1px;
}

@media (max-width: 991px) {
    .carousel-text .ld-fancy-heading h2 {
        font-size: 10vw;
    }
}

.carousel-item.has-one-child .carousel-item-content>article,
.carousel-item.has-one-child .carousel-item-content>div {

    flex-grow: 1;
    max-width: 100%;
}

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

/*  Text Carousel  */
.text-carousel .module-first {
    margin-bottom: 1.5%;
}

.text-carousel .carousel-item-content>* {
    white-space: nowrap;
}

@media(max-width: 1199px) {
    .text-carousel {
        padding-top: 70px;
    }

    .text-carousel .carousel-item-content {
        font-size: 5vw;
    }
}

@media(max-width: 767px) {
    .text-carousel {
        padding: 0;
    }

    .text-carousel .carousel-item-content {
        font-size: 8vw;
    }
}

/* ***** Blog ***** */
@media (max-width: 1199px) {
    .blog {
        padding: 60px 0 90px 0;
    }

    .blog .module-blog {
        margin-right: -20px;
        margin-left: -20px;
    }

    .blog .module-col {
        padding-right: 20px;
        padding-left: 20px;
    }
}

@media (max-width: 767px) {
    .blog {
        padding: 30px 0 60px 0;
    }

    .blog .module-blog {
        margin-right: 0;
        margin-left: 0;
    }

    .blog .module-col {
        padding-right: 0;
        padding-left: 0;
    }
}


</style>

<!-- Start Banner -->
<section class="lqd-section banner px-40 z-2" id="banner">
    <div class="right-60 left-auto lqd-fancy-menu lqd-custom-menu lqd-sticky-menu lqd-sticky-menu-floating-vertical">
        <ul class="link-black reset-ul inline-ul" data-localscroll="true"
            data-localscroll-options='{"itemsSelector": ">li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
            <li class="mb-10">
                <a href="#banner">
                    <span class="link-txt text-gold ">Home </span>
                </a>
            </li>
            <li class="mb-10">
                <a href="#services">
                    <span class="link-txt text-gold">Services </span>
                </a>
            </li>
            <li class="mb-10">
                <a href="#works">
                    <span class="link-txt text-gold">Works </span>
                </a>
            </li>
            <li class="mb-10">
                <a href="#testimonials">
                    <span class="link-txt text-gold">Testimonials </span>
                </a>
            </li>
            <li class="">
                <a href="#blog">
                    <span class="link-txt text-gold">Blog </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="module-section flex items-center  justify-center rounded-30 bg-bottom-left bg-no-repeat bg-cover py-5percent "
        style="background-image: url(./images/demo/start-hub/banner-bg.jpg);">
        <div class="container h-full">
            <div class="row h-full content-between justify-center">
                <div class="col col-12"></div>
                <div class="col col-12 col-xl-10 self-center text-center">
                    <div class="relative w-full flex flex-wrap" data-custom-animations="true"
                        data-ca-options='{"animationTarget": "figure", "duration" : 1000 , "delay" : 100 , "ease": "expo.out", "initValues": {"y": "80px", "scaleX" : 0.8 , "scaleY" : 0.8 , "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1 , "scaleY" : 1 , "opacity" : 1}}'>
                        <div class="absolute z-1 right-0 module-shape-1">
                            <div class="lqd-imggrp-single block relative">
                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                    <figure class="w-full relative">
                                        <img width="369" height="435" src="./images/demo/start-hub/shape-Path.svg"
                                            alt="shape" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute z-1 top-40 -left-15percent module-shape-2 ld-module-trigger lqd-module-trigger-txt-left">
                            <div class="lqd-imggrp-single block relative">
                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                    <figure class="w-full relative ld-module-trigger-icon">
                                        <img width="57" height="54" src="./images/demo/start-hub/shape-Path-141907.svg"
                                            alt="shape" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="absolute z-1 top-40 -right-10percent module-shape-3">
                            <div class="lqd-imggrp-single block relative">
                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                    <figure class="w-full relative">
                                        <img width="49" height="14" src="./images/demo/start-hub/shape-Path-141908.svg"
                                            alt="shape" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="absolute z-1 top-170 -right-10percent module-shape-4">
                            <div class="lqd-imggrp-single block relative">
                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                    <figure class="w-full relative">
                                        <img width="21" height="68" src="./images/demo/start-hub/shape-Path-141909.svg"
                                            alt="shape" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="ld-fancy-heading relative mask-text" data-custom-animations="true"
                            data-ca-options='{"animationTarget": ".lqd-split-words .lqd-words .split-inner, .lqd-adv-txt-fig", "duration" : 1000 , "startDelay" : 200 , "delay" : 70 , "ease": "expo.out", "initValues": {"y": "120px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                            <h1 class="ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-bottom lqd-highlight-reset-onhover lqd-split-words mb-0/5em leading-1/1em"
                                data-inview="true" data-split-text="true" data-split-options='{"type": "words"}'>
                                <span class="lqd-adv-txt-item text-#000">
                                    Creating Tomorrow's Tech, Turning
                                    <mark class="lqd-highlight">
                                        <span class="lqd-highlight-txt ">
                                            Ideas into Reality</span>
                                        <span class="lqd-highlight-inner bg-gold bottom-0/1em left-0"></span>
                                    </mark>
                                    with Innovation and Excellence.
                                </span>
                            </h1>
                        </div>
                        <div class="absolute bottom-0 right-35percent">
                            <figure id="lqd-draw-shape-banner" class="lqd-draw-shape" data-lqd-draw-shape="true"
                                data-draw-shape-options='{"drawSVG": "0% 0%", "stagger" : 0 , "start": "top center", "end": "center 35%", "scrub" : 1 , "ease": "linear"}'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="154.927" height="26.983"
                                    viewBox="0 0 154.927 26.983">
                                    <path
                                        d="M703.5,516.869c.808,1.5,1.533,2.858,2.276,4.21s1.5,2.686,2.562,4.593c.991-1.553,1.734-2.516,2.264-3.585,1.844-3.72,3.561-7.5,5.439-11.2a18.688,18.688,0,0,1,2.626-3.911c2.571-2.9,6.385-2.963,8.474.349,2.866,4.544,5.085,9.494,7.614,14.253.645,1.214,1.413,2.362,2.527,4.207,1.642-3.08,3-5.506,4.243-7.992,1.26-2.529,2.164-5.27,3.671-7.633a13.794,13.794,0,0,1,4.717-4.865c2.622-1.371,5.6.438,7.54,4.1,2.175,4.11,4.138,8.333,6.221,12.492.544,1.088,1.192,2.123,2.1,3.72,1.01-1.569,1.81-2.6,2.381-3.741,1.669-3.34,3.188-6.756,4.885-10.081a26.579,26.579,0,0,1,2.914-4.622c2.426-3.006,6.209-3.163,8.506-.07a64.655,64.655,0,0,1,4.92,8.622c1.16,2.2,2.093,4.524,3.216,6.747a30.7,30.7,0,0,0,2.068,3.031c1.041-1.726,1.925-2.994,2.607-4.362,1.889-3.792,3.546-7.707,5.583-11.414,1.3-2.365,2.811-4.8,6.157-4.732,3.406.067,4.939,2.547,6.27,5.02,2.007,3.726,3.7,7.62,5.573,11.419.615,1.246,1.378,2.419,2.378,4.152a40.1,40.1,0,0,0,2.37-3.627c1.742-3.489,3.378-7.031,5.08-10.541a22.719,22.719,0,0,1,1.558-2.841c3.274-4.836,7.43-4.954,10.736-.169,1.541,2.23,5.976,12.3,7.3,14.677"
                                        transform="translate(-699.438 -501.797)" fill="none" stroke="#F1CE3D"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="6"></path>
                                </svg>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col col-12 flex flex-row gap-20 justify-between items-end sm:flex-wrap"
                    data-custom-animations="true"
                    data-ca-options='{"animationTarget": ".animation-element", "duration" : 1000 , "startDelay" : 1300 , "delay" : 100 , "ease": "expo.out", "initValues": {"scaleX" : 0.7 , "scaleY" : 0.7 , "rotationY" : 10 , "opacity" : 0} , "animations": {"scaleX" : 1 , "scaleY" : 1 , "rotationY" : 0 , "opacity" : 1}}'>
                    <div class="w-350 max-w-full sm:w-full">
                        <div class="transition-all hover:scale-1/1 animation-element">
                            <div class="iconbox flex flex-grow-1 relative mb-20 text-start items-start">
                                <div class="iconbox-icon-wrap mr-20">
                                    <div class="iconbox-icon-container inline-flex w-40 text-40 text-primary">
                                        <svg class="w-1em h-auto" xmlns="http://www.w3.org/2000/svg" width="40.472"
                                            height="40.472" viewBox="0 0 40.472 40.472">
                                            <rect width="40.472" height="40.472" fill="none"></rect>
                                            <path
                                                d="M10.529,8h6.745A2.529,2.529,0,0,1,19.8,10.529v1.686a2.529,2.529,0,0,1-2.529,2.529H10.529A2.529,2.529,0,0,1,8,12.216V10.529A2.529,2.529,0,0,1,10.529,8ZM25.706,28.236h6.745a2.529,2.529,0,0,1,2.529,2.529v1.686a2.529,2.529,0,0,1-2.529,2.529H25.706a2.529,2.529,0,0,1-2.529-2.529V30.765A2.529,2.529,0,0,1,25.706,28.236Z"
                                                transform="translate(-1.255 -1.255)" fill-rule="evenodd"></path>
                                            <path
                                                d="M10.529,18.118h6.745A2.529,2.529,0,0,1,19.8,20.647v11.8a2.529,2.529,0,0,1-2.529,2.529H10.529A2.529,2.529,0,0,1,8,32.452v-11.8A2.529,2.529,0,0,1,10.529,18.118ZM25.706,8h6.745a2.529,2.529,0,0,1,2.529,2.529v11.8a2.529,2.529,0,0,1-2.529,2.529H25.706a2.529,2.529,0,0,1-2.529-2.529v-11.8A2.529,2.529,0,0,1,25.706,8Z"
                                                transform="translate(-1.255 -1.255)" fill-rule="evenodd" opacity="0.3">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="lqd-iconbox-heading text-17 mb-0/7em leading-20">
                                    Innovative Tech: Leading in AR, AI, and more to set new standards.
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="w-350 max-w-full sm:w-full">
                        <div class="transition-all hover:scale-1/1 animation-element">
                            <div class="iconbox flex flex-grow-1 relative mb-20 text-start items-start">
                                <div class="iconbox-icon-wrap mr-20">
                                    <div class="iconbox-icon-container inline-flex w-40 text-40 text-primary">
                                        <svg class="w-1em h-auto" xmlns="http://www.w3.org/2000/svg" width="34.36"
                                            height="34.36" viewBox="0 0 34.36 34.36">
                                            <rect width="34.36" height="34.36" fill="none"></rect>
                                            <path
                                                d="M27.265,18.588l-1,5.991,0,.021A1.432,1.432,0,0,1,24.6,25.752L8.322,22.793A1.432,1.432,0,0,1,7.2,21.778L4.589,12.634a1.432,1.432,0,0,1,1.377-1.825H25.617l.878-3.762A1.689,1.689,0,0,1,28.14,5.741H31.1a1.689,1.689,0,0,1,0,3.378H29.48Z"
                                                transform="translate(-1.289 -1.632)" fill-rule="evenodd" opacity="0.3">
                                            </path>
                                            <path
                                                d="M12.147,40.295a2.147,2.147,0,1,1,2.147-2.147A2.147,2.147,0,0,1,12.147,40.295Zm12.885,0a2.147,2.147,0,1,1,2.147-2.147A2.147,2.147,0,0,1,25.032,40.295Z"
                                                transform="translate(-2.842 -10.23)" fill-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="lqd-iconbox-heading text-17 mb-0/7em leading-20">
                                    Customer Focus: Custom web development and automation for real-world problems.
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="w-350 max-w-full sm:w-full">
                        <div class="transition-all hover:scale-1/1 animation-element">
                            <div class="iconbox flex flex-grow-1 relative mb-20 text-start items-start">
                                <div class="iconbox-icon-wrap mr-20">
                                    <div class="iconbox-icon-container inline-flex w-40 text-40 text-primary">
                                        <svg class="w-1em h-auto" xmlns="http://www.w3.org/2000/svg" width="39.638"
                                            height="39.638" viewBox="0 0 39.638 39.638">
                                            <rect width="39.638" height="39.638" fill="none"></rect>
                                            <path
                                                d="M24.494,9.848a30.811,30.811,0,0,1,2.96,3.554s-6.757,9.91-14.864,9.91q-.77,0-1.494-.065Z"
                                                transform="translate(7.23 6.417)"></path>
                                            <path
                                                d="M22,6.817l-4.137,4.137A4.955,4.955,0,0,0,12.91,15.91L7.173,21.646A18.035,18.035,0,0,1,3,15.91S7.054,6,17.864,6A11.478,11.478,0,0,1,22,6.817Z"
                                                transform="translate(1.955 3.91)"></path>
                                            <rect width="31.38" height="3.303"
                                                transform="translate(8.423 30.447) rotate(-45)" opacity="0.3"></rect>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="lqd-iconbox-heading text-17 mb-0/7em leading-20">
                                    Top Quality: Delivering top-notch products and services with a commitment to
                                    quality.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Start Counter -->
<section class="lqd-section counter pt-100" data-custom-animations="true"
    data-ca-options='{"triggerHandler":"inview","animationTarget":".col","duration":"1800","delay":"150","ease":"power4.out","direction":"forward","initValues":{"scaleX":0.75,"scaleY":0.7,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"scaleX":1,"scaleY":1,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'
    data-section-luminosity="light">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col col-6 col-md-3 innak-font">
                <div class="lqd-counter lqd-counter-default relative z-1 mb-20 text-black hover:inner-text-primary">
                    <div class="lqd-counter-element relative mb-5 text-50 font-bold leading-1/15em transition-color inner-text-primary hover:text-gold"
                        data-enable-counter="true" data-counter-options='{"targetNumber":"16+"}'>
                        <span class="hover:text-gold">16+</span>
                    </div>
                    <span class="lqd-counter-text lqd-text-bottom ">Projects Completed</span>
                </div>
            </div>
            <div class="col col-6 col-md-3 hover:text-gold innak-font">
                <div class="lqd-counter lqd-counter-default relative z-1 mb-0 text-black hover:inner-text-primary">
                    <div class="lqd-counter-element relative mb-5 text-50 font-bold leading-1/15em transition-color inner-text-primary hover:text-gold"
                        data-enable-counter="true" data-counter-options='{"targetNumber":"6+","startDelay":"150"}'>
                        <span class="hover:text-gold">6+</span>
                    </div>
                    <span class="lqd-counter-text lqd-text-bottom ">Happy Customer</span>
                </div>
            </div>
            <div class="col col-6 col-md-3 innak-font">
                <div class="lqd-counter lqd-counter-default relative z-1 mb-0 text-black hover:inner-text-primary">
                    <div class="lqd-counter-element relative mb-5 text-50 font-bold leading-1/15em transition-color inner-text-primary hover:text-gold"
                        data-enable-counter="true" data-counter-options='{"targetNumber":"2+","startDelay":"300"}'>
                        <span class="hover:text-gold">2+</span>
                    </div>
                    <span class="lqd-counter-text lqd-text-bottom ">Open Source Projects</span>
                </div>
            </div>
            <div class="col col-6 col-md-3 innak-font">
                <div class="lqd-counter lqd-counter-default relative z-1 mb-0 text-black hover:inner-text-primary">
                    <div class="lqd-counter-element relative mb-5 text-50 font-bold leading-1/15em transition-color inner-text-primary hover:text-gold"
                        data-enable-counter="true" data-counter-options='{"targetNumber":"9k+","startDelay":"450"}'>
                        <span class="hover:text-gold">9k+</span>
                    </div>
                    <span class="lqd-counter-text lqd-text-bottom">Hours of</span>
                </div>
                <p class="ld-fh-element mb-1em text-black">Coding Time</p>
            </div>
        </div>
    </div>
</section>
<!-- End Counter -->


<!-- Start Services -->
<section class="lqd-section counter pt-100 bg-top-center bg-cover transition-all bg-no-repeat" id="services"
    style="background-image: url('./images/demo/start-hub-2/bg/bg.svg');">
    <div class="absolute w-auto top-30percent module-shape animation-element" data-parallax="true"
        data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
        data-parallax-from='{"y": "115px", "rotationZ" : 60}' data-parallax-to='{"y": "-170px", "rotationZ" : -60}'>
        <img class="w-50" width="5" height="5" src="./images/demo/start-hub/shape-Path-141907.svg" alt="">
    </div>
    <div class=" design-services" data-custom-animations="true"
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
                        <h6 class="ld-fh-element relative text-12 uppercase tracking-1 text-slate-500 m-0 innak-font">
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
                        <p class="ld-fh-element relative lqd-split-lines text-17  leading-1/3em" data-split-text="true"
                            data-split-options='{"type": "lines"}'>
                            Experience unparalleled solutions designed for your unique needs. We don't just meet
                            industry
                            standards, we redefine them.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center justify-center">
            <div class="col col-12 pt-30"></div>
            <div class="col col-12 col-md-4 mb-30 border-right border-dark relative sm:border-0">
                <div class="px-35 transition-all relative lg:p-0">
                    <div class="relative iconbox flex flex-grow-1 relative flex-col iconbox-default">
                        <div class="iconbox-icon-wrap mb-45">
                            <div class="iconbox-icon-container inline-flex">
                                <img class="w-175" src="./images/services/web.jpeg" alt="Web Development">
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="text-20 mb-0/5em lqd-iconbox-heading">Web Development </h3>
                            <p class="text-justify md:px-15 ">We build custom websites that look great and work
                                perfectly. From stunning designs to
                                smooth functionality, our sites leave a lasting impression.</p>
                        </div>
                    </div>
                </div>
                <div class="lqd-imggrp-single block absolute right-0 top-10percent sm:hidden" data-parallax="true"
                    data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                    data-parallax-from='{"y": "0px"}' data-parallax-to='{"y": "165px"}'>
                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                        <figure class="w-full relative">
                            <img width="3" height="22" src="./images/demo/start-hub-2/3D/Line-8664.svg"
                                alt="3D shape line">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-4 mb-30 border-right border-lightgray relative sm:border-0">
                <div class="px-35 transition-all relative lg:p-0">
                    <div class="relative iconbox flex flex-grow-1 relative flex-col iconbox-default">
                        <div class="iconbox-icon-wrap mb-45">
                            <div class="iconbox-icon-container inline-flex">
                                <img class="w-175" src="/images/services/app.jpeg" alt="App Development">
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="text-20 mb-0/5em lqd-iconbox-heading">App Development </h3>
                            <p class="text-justify md:px-15 ">Develop custom mobile apps for iOS and Android. Our apps
                                are user-friendly, fast, and
                                reliable, designed to meet your specific needs.</p>
                        </div>
                    </div>
                </div>
                <div class="lqd-imggrp-single block absolute right-0 -bottom-5percent sm:hidden" data-parallax="true"
                    data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                    data-parallax-from='{"y": "0px"}' data-parallax-to='{"y": "-165px"}'>
                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                        <figure class="w-full relative">
                            <img width="3" height="22" src="./images/demo/start-hub-2/3D/Line-8664.svg"
                                alt="3D shape line">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-4 mb-30">
                <div class="px-35 transition-all relative lg:p-0">
                    <div class="relative iconbox flex flex-grow-1 relative flex-col iconbox-default">
                        <div class="iconbox-icon-wrap mb-45">
                            <div class="iconbox-icon-container inline-flex">
                                <img class="w-175" src="/images/services/AR.jpeg" alt="Augmented Reality">
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="text-20 mb-0/5em lqd-iconbox-heading">Augmented Reality </h3>
                            <p class="text-justify md:px-15 ">Enhance reality with our AR solutions. From education to
                                entertainment, we bring your
                                ideas to life with interactive and engaging experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-4 mb-30 border-right border-lightgray relative sm:border-0">
                <div class="px-35 transition-all relative lg:p-0">
                    <div class="relative iconbox flex flex-grow-1 relative flex-col iconbox-default">
                        <div class="iconbox-icon-wrap mb-45">
                            <div class="iconbox-icon-container inline-flex">
                                <img class="w-175" src="/images/services/automation.jpeg" alt="Automation">
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="text-20 mb-0/5em lqd-iconbox-heading">Automation </h3>
                            <p class="text-justify md:px-15 ">Boost productivity with our automation solutions. We
                                streamline your processes, saving
                                you time and reducing errors.</p>
                        </div>
                    </div>
                </div>
                <div class="lqd-imggrp-single block absolute right-0 top-10percent sm:hidden" data-parallax="true"
                    data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                    data-parallax-from='{"y": "0px"}' data-parallax-to='{"y": "165px"}'>
                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                        <figure class="w-full relative">
                            <img width="3" height="22" src="./images/demo/start-hub-2/3D/Line-8664.svg"
                                alt="3D shape line">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-4 mb-30 border-right border-lightgray relative sm:border-0">
                <div class="px-35 transition-all relative lg:p-0">
                    <div class="relative iconbox flex flex-grow-1 relative flex-col iconbox-default">
                        <div class="iconbox-icon-wrap mb-45">
                            <div class="iconbox-icon-container inline-flex">
                                <img class="w-175" src="/images/services/web-scraping.jpeg" alt="Web Scraping">
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="text-20 mb-0/5em lqd-iconbox-heading">Web Scraping </h3>
                            <p class="text-justify md:px-15 ">Extract and utilize web data effortlessly. Our web
                                scraping services help you gather
                                insights, monitor prices, and stay ahead.</p>
                        </div>
                    </div>
                </div>
                <div class="lqd-imggrp-single block absolute right-0 -bottom-5percent sm:hidden" data-parallax="true"
                    data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                    data-parallax-from='{"y": "0px"}' data-parallax-to='{"y": "-165px"}'>
                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                        <figure class="w-full relative">
                            <img width="3" height="22" src="./images/demo/start-hub-2/3D/Line-8664.svg"
                                alt="3D shape line">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-4 mb-30">
                <div class="px-35 transition-all relative lg:p-0">
                    <div class="relative iconbox flex flex-grow-1 relative flex-col iconbox-default">
                        <div class="iconbox-icon-wrap mb-45">
                            <div class="iconbox-icon-container inline-flex">
                                <img class="w-175" src="/images/services/ML.jpeg" alt="Machine Learning">
                            </div>
                        </div>
                        <div class="contents">
                            <h3 class="text-20 mb-0/5em lqd-iconbox-heading">Machine Learning </h3>
                            <p class="text-justify md:px-15 ">Unlock AI's potential with our machine learning solutions.
                                From predictive analytics to
                                image recognition, we turn data into actionable insights.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About -->

<!-- Start Text Carousel -->
<section class="lqd-section text-carousel pt-100">
    <div class="container-fluid">
        <div class="row innak-font">
            <div class="col col-12 module-first">
                <div class="carousel-container relative carousel-nav-shaped">
                    <div class="carousel-items relative -mr-50 -ml-50"
                        data-lqd-flickity='{"marquee": true, "percentPosition": false, "columnsAutoWidth": true, "draggable": false, "equalHeightCells": true, "middleAlignContent": true, "marqueeTickerSpeed": "1", "pauseAutoPlayOnHover": false}'>
                        <div class="flickity-viewport relative w-full overflow-hidden">
                            <div class="flickity-slider flex w-full h-full relative">
                                <div class="carousel-item flex flex-col justify-center items-center px-50">
                                    <div class="carousel-item-inner relative w-full">
                                        <div
                                            class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                            <p>For Your Brand. Made by Innak.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item flex flex-col justify-center items-center px-50">
                                    <div class="carousel-item-inner relative w-full">
                                        <div
                                            class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                            <p>Innovate. Integrate. Inspire.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item flex flex-col justify-center items-center px-50">
                                    <div class="carousel-item-inner relative w-full">
                                        <div
                                            class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                            <p>Where Ideas Become Reality</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12">
                <div class="carousel-container relative carousel-nav-shaped">
                    <div class="carousel-items relative -mr-50 -ml-50"
                        data-lqd-flickity='{"marquee": true, "percentPosition": false, "columnsAutoWidth": true, "draggable": false, "marqueeTickerSpeed": "1", "equalHeightCells": true, "middleAlignContent": true, "rightToLeft": true, "pauseAutoPlayOnHover": false}'>
                        <div class="flickity-viewport relative w-full overflow-hidden">
                            <div class="flickity-slider flex w-full h-full relative">
                                <div class="carousel-item flex flex-col justify-center items-center px-50">
                                    <div class="carousel-item-inner relative w-full">
                                        <div
                                            class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                            <p class="ld-gradient-heading"
                                                style="background-image: linear-gradient(to bottom right, #80D0C7, #A6E7B8);">
                                                Development</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item flex flex-col justify-center items-center px-50">
                                    <div class="carousel-item-inner relative w-full">
                                        <div
                                            class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                            <p class="ld-gradient-heading"
                                                style="background-image: linear-gradient(to bottom right, #FFC3A0, #FFAFBD);">
                                                Consultation</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item flex flex-col justify-center items-center px-50">
                                    <div class="carousel-item-inner relative w-full">
                                        <div
                                            class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700 module-gradient">
                                            <p class="ld-gradient-heading"
                                                style="background-image: linear-gradient(to bottom right, #B9D9EB, #E0C3C3);">
                                                Innovation</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item flex flex-col justify-center items-center px-50">
                                    <div class="carousel-item-inner relative w-full">
                                        <div
                                            class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                            <p class="ld-gradient-heading"
                                                style="background-image: linear-gradient(to bottom right, #A4B0F5, #E2A1F1);">
                                                Collaboration</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item flex flex-col justify-center items-center px-50">
                                    <div class="carousel-item-inner relative w-full">
                                        <div
                                            class="carousel-item-content relative w-full text-3vw font-bold leading-1/2em text-green-700">
                                            <p class="ld-gradient-heading"
                                                style="background-image: linear-gradient(to bottom right, #B0EAD9, #E7D9B1);">
                                                Solutions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Text Carousel -->





<!-- Start Testimonials -->
<!-- <section class="lqd-section testimonials py-90" id="testimonials">
    <div class="absolute max-w-full top-145 module-shape-1 sm:hidden">
        <figure id="lqd-draw-shape-8a1e8a2" class="lqd-draw-shape" data-lqd-draw-shape="true"
            data-draw-shape-options='{"ease": "linear", "start": "top bottom", "end": "bottom top"}'>
            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="70" viewBox="0 0 124 70" fill="none">
                <path
                    d="M3 24.5L22 4.5L27.5 28L57.5 3L59 44.5L86.5 7C90.5 27.3333 98.5 67.9 98.5 67.5C98.5 67.1 113.5 29.3333 121 10.5"
                    stroke="url(#paint0_linear_9_4)" stroke-width="5" stroke-linecap="round" stroke-linejoin="round">
                </path>
                <defs>
                    <linearGradient id="paint0_linear_9_4" x1="3.27765e-07" y1="23.5" x2="123.5" y2="15.5"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#FFBC5C"></stop>
                        <stop offset="1" stop-color="#DF2EAC"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </figure>
    </div>
    <div class="absolute max-w-full top-210 module-shape-2">
        <figure id="lqd-draw-shape-0edcc08" class="lqd-draw-shape" data-lqd-draw-shape="true"
            data-draw-shape-options='{"ease": "linear", "start": "top bottom", "end": "bottom top"}'>
            <svg xmlns="http://www.w3.org/2000/svg" width="130" viewBox="0 0 273 59" fill="none">
                <path
                    d="M9.07199 47.295C9.07199 47.295 28.196 9 55.436 9C82.676 9 78.603 45.336 107.331 45.336C136.059 45.336 143.537 14.3454 171.031 12.909C198 11.5 192.661 49.287 222.631 49.287C246.364 49.287 263.718 15.108 263.718 15.108"
                    stroke="url(#paint0_linear_22_3)" stroke-width="18" stroke-linecap="round"></path>
                <defs>
                    <linearGradient id="paint0_linear_22_3" x1="136.395" y1="9" x2="136.395" y2="49.287"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#FFED00"></stop>
                        <stop offset="1" stop-color="#FF00FF"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </figure>
    </div>
    <div class="container-fluid">
        <div class="row justify-center">
            <div class="col col-12 col-md-8 mb-60 p-0 text-center" data-custom-animations="true"
                data-ca-options='{"animationTarget": ".animation-element, figure, .lqd-split-lines .lqd-lines .split-inner", "duration" : 1000 , "delay" : 100 , "ease": "expo.out", "initValues": {"y": "60px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                <div class="flex flex-col items-center px-20">
                    <div class="ld-fancy-heading relative mask-text">
                        <p class="ld-fh-element relative lqd-split-lines text-18 mb-1/5em text-slate-400"
                            data-split-text="true" data-split-options='{"type": "lines"}'>
                            Trusted by these amazing companies
                        </p>
                    </div>
                    <div class="ld-fancy-heading relative mask-text">
                        <h2 class="mb-0 ld-fh-element relative lqd-split-lines" data-split-text="true"
                            data-split-options='{"type": "lines"}'>
                            Testimonials
                        </h2>
                    </div>
                    <div class="ld-fancy-heading relative mask-text">
                        <h2 class="ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-lines h2 mb-0/75em"
                            data-split-text="true" data-split-options='{"type": "lines"}'>
                            <span class="lqd-adv-txt-item">People</span>
                            <span class="relative z-3 lqd-adv-txt-item">
                                <span class="relative inline-flex rounded-full vertical-top -mr-30">
                                    <img class="lqd-adv-txt-fig w-55 border-5 border-white rounded-full"
                                        decoding="async" width="58" height="58"
                                        src="/images/demo/start-hub/Shape-avatar-1.jpg" alt="testimonials avatar" />
                                </span>
                            </span>
                            <span class="relative z-2 lqd-adv-txt-item">
                                <span class="relative inline-flex rounded-full vertical-top -mr-35">
                                    <img class="lqd-adv-txt-fig w-55 border-5 border-white rounded-full"
                                        decoding="async" width="58" height="58"
                                        src="/images/demo/start-hub/Shape-avatar-2.jpg" alt="testimonials avatar" />
                                </span>
                            </span>
                            <span class="relative z-1 lqd-adv-txt-item">
                                <span class="relative inline-flex rounded-full vertical-top">
                                    <img class="lqd-adv-txt-fig w-55 border-5 border-white rounded-full"
                                        decoding="async" width="58" height="58"
                                        src="/images/demo/start-hub/Shape-avatar-1.jpg" alt="testimonials avatar" />
                                </span>
                            </span>
                            <span class="lqd-adv-txt-item">are talking.</span>
                        </h2>
                    </div>
                    <div class="flex py-10 pr-15 pl-25 items-center bg-gray-100 rounded-6 animation-element sm:w-full">
                        <div class="max-w-full w-30 lqd-imggrp-single block relative">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img width="30" height="30" src="/images/demo/start-hub/g2.png" alt="g2 shape" />
                                </figure>
                            </div>
                        </div>
                        <div class="ml-10 ld-fancy-heading relative animation-element">
                            <p class="ld-fh-element relative text-14 font-medium m-0 text-slate-600">
                                Trustpilot reviews
                            </p>
                        </div>
                        <div class="star-rating pl-10 text-slate-600 animation-element" title="5/5">
                            <i class="star-full">&#9733;</i>
                            <i class="star-full">&#9733;</i>
                            <i class="star-full">&#9733;</i>
                            <i class="star-full">&#9733;</i>
                            <i class="star-full">&#9733;</i>
                            <span class="sr-only">5/5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12" data-custom-animations="true"
                data-ca-options='{"animationTarget": ".carousel-container .carousel-item-inner", "duration" : 1000 , "delay" : 100 , "ease": "expo.out", "initValues": {"x": "30px", "opacity" : 0} , "animations": {"x": "0px", "opacity" : 1}}'>
                <div class="carousel-container carousel-dots-style4 carousel-dots-mobile-outside carousel-dots-mobile-center"
                    id="ld-testimonial-carousel">
                    <div class="carousel-items relative"
                        data-lqd-flickity='{"cellAlign": "center", "groupCells": true, "wrapAround": true, "pageDots": true, "prevNextButtons": false, "dotsIndicator": "dots", "dotsAppendTo": "self"}'>
                        <div class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <div
                                        class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-green-100 module-content">
                                        <div class="lqd-testi-quote text-green-600">
                                            <blockquote>
                                                <p class="text-18">
                                                    Bring your ideas to life an intuitive visual
                                                    editor. Create, edit, and customize your
                                                    site visually and see the changes instantly.
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="lqd-testi-info flex flex-wrap justify-between mb-1em">
                                            <div class="lqd-testi-details flex items-center">
                                                <figure class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em">
                                                    <img decoding="async" class="rounded-full"
                                                        src="/images/demo/start-hub/testi-avatar-1.png"
                                                        alt="Daniel Sans" />
                                                </figure>
                                                <div class="pl-1/5">
                                                    <h3 class="text-green-600 text-18">
                                                        Daniel Sans,
                                                    </h3>
                                                    <h4 class="font-weight-light text-green-600 text-16">
                                                        Envato CEO
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <div
                                        class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-orange-100 module-content">
                                        <div class="lqd-testi-quote text-orange-600">
                                            <blockquote>
                                                <p class="text-18">
                                                    Incredible theme and fantastic support!
                                                    Every time I had a question, they got back
                                                    to you so quickly and fixed your problem! Im
                                                    so impressed! Thank you guys again for your
                                                    precious help! Your customer support is
                                                    amazing!
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="lqd-testi-info flex flex-wrap justify-between mb-1em">
                                            <div class="lqd-testi-details flex items-center">
                                                <figure class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em">
                                                    <img decoding="async" class="rounded-full"
                                                        src="/images/demo/start-hub/testi-avatar-2.png"
                                                        alt="ritamjahed" />
                                                </figure>
                                                <div class="pl-1/5">
                                                    <h3 class="text-orange-600 text-18">
                                                        ritamjahed
                                                    </h3>
                                                    <h4 class="font-weight-light text-orange-600 text-16">
                                                        Envato CEO
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <div
                                        class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-blue-100 module-content">
                                        <div class="lqd-testi-quote text-blue-600">
                                            <blockquote>
                                                <p class="text-18">
                                                    I'm early on in the process of building my
                                                    website; however, I'm already impressed by
                                                    customer support's response time. Great
                                                    customer support ratings is something I
                                                    consider before purchasing a theme.
                                                    <br />
                                                    Thank you LiquidThemes!
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="lqd-testi-info flex flex-wrap justify-between mb-1em">
                                            <div class="lqd-testi-details flex items-center">
                                                <figure class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em">
                                                    <img decoding="async" class="rounded-full"
                                                        src="/images/demo/start-hub/testi-avatar-3.png"
                                                        alt="myadesigns" />
                                                </figure>
                                                <div class="pl-1/5">
                                                    <h3 class="text-blue-600 text-18">
                                                        myadesigns
                                                    </h3>
                                                    <h4 class="font-weight-light text-blue-600 text-16">
                                                        Envato CEO
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <div
                                        class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-yellow-100 module-content">
                                        <div class="lqd-testi-quote text-yellow-600">
                                            <blockquote>
                                                <p class="text-18">
                                                    Simply perfect! Theme and support are
                                                    amazing! Frank thanks for the help, always
                                                    fast and efficient! The best theme and
                                                    support I've had!
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="lqd-testi-info flex flex-wrap justify-between mb-1em">
                                            <div class="lqd-testi-details flex items-center">
                                                <figure class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em">
                                                    <img decoding="async" class="rounded-full"
                                                        src="/images/demo/start-hub/testi-avatar-4.png"
                                                        alt="leandroMariotto" />
                                                </figure>
                                                <div class="pl-1/5">
                                                    <h3 class="text-yellow-600 text-18">
                                                        leandroMariotto
                                                    </h3>
                                                    <h4 class="font-weight-light text-yellow-600 text-16">
                                                        Envato CEO
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <div
                                        class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-green-100 module-content">
                                        <div class="lqd-testi-quote text-green-600">
                                            <blockquote>
                                                <p class="text-18">
                                                    Bring your ideas to life an intuitive visual
                                                    editor. Create, edit, and customize your
                                                    site visually and see the changes instantly.
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="lqd-testi-info flex flex-wrap justify-between mb-1em">
                                            <div class="lqd-testi-details flex items-center">
                                                <figure class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em">
                                                    <img decoding="async" class="rounded-full"
                                                        src="/images/demo/start-hub/testi-avatar-1.png"
                                                        alt="Daniel Sans" />
                                                </figure>
                                                <div class="pl-1/5">
                                                    <h3 class="text-green-600 text-18">
                                                        Daniel Sans,
                                                    </h3>
                                                    <h4 class="font-weight-light text-green-600 text-16">
                                                        Envato CEO
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <div
                                        class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-orange-100 module-content">
                                        <div class="lqd-testi-quote text-orange-600">
                                            <blockquote>
                                                <p class="text-18">
                                                    Incredible theme and fantastic support!
                                                    Every time I had a question, they got back
                                                    to you so quickly and fixed your problem! Im
                                                    so impressed! Thank you guys again for your
                                                    precious help! Your customer support is
                                                    amazing!
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="lqd-testi-info flex flex-wrap justify-between mb-1em">
                                            <div class="lqd-testi-details flex items-center">
                                                <figure class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em">
                                                    <img decoding="async" class="rounded-full"
                                                        src="/images/demo/start-hub/testi-avatar-2.png"
                                                        alt="ritamjahed" />
                                                </figure>
                                                <div class="pl-1/5">
                                                    <h3 class="text-orange-600 text-18">
                                                        ritamjahed
                                                    </h3>
                                                    <h4 class="font-weight-light text-orange-600 text-16">
                                                        Envato CEO
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <div
                                        class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-blue-100 module-content">
                                        <div class="lqd-testi-quote text-blue-600">
                                            <blockquote>
                                                <p class="text-18">
                                                    I' m early on in the process of building my
                                                    website; however, I'm already impressed by
                                                    customer support's response time. Great
                                                    customer support ratings is something I
                                                    consider before purchasing a theme.
                                                    <br />
                                                    Thank you LiquidThemes!
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="lqd-testi-info flex flex-wrap justify-between mb-1em">
                                            <div class="lqd-testi-details flex items-center">
                                                <figure class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em">
                                                    <img decoding="async" class="rounded-full"
                                                        src="/images/demo/start-hub/testi-avatar-3.png"
                                                        alt="myadesigns" />
                                                </figure>
                                                <div class="pl-1/5">
                                                    <h3 class="text-blue-600 text-18">
                                                        myadesigns
                                                    </h3>
                                                    <h4 class="font-weight-light text-blue-600 text-16">
                                                        Envato CEO
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-5 px-30 col-md-6 col-12 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <div
                                        class="lqd-testi relative lqd-testi-style-1 flex flex-col-reverse lqd-testi-shadow-xs lqd-testi-details-lg lqd-testi-quote-18 lqd-testi-avatar-72 rounded-20 py-30 px-35 bg-yellow-100 module-content">
                                        <div class="lqd-testi-quote text-yellow-600">
                                            <blockquote>
                                                <p class="text-18">
                                                    Simply perfect! Theme and support are
                                                    amazing! Frank thanks for the help, always
                                                    fast and efficient! The best theme and
                                                    support I've had!
                                                </p>
                                            </blockquote>
                                        </div>
                                        <div class="lqd-testi-info flex flex-wrap justify-between mb-1em">
                                            <div class="lqd-testi-details flex items-center">
                                                <figure class="lqd-testi-avatar rounded-full overflow-hidden mr-1/5em">
                                                    <img decoding="async" class="rounded-full"
                                                        src="/images/demo/start-hub/testi-avatar-4.png"
                                                        alt="leandroMariotto" />
                                                </figure>
                                                <div class="pl-1/5">
                                                    <h3 class="text-yellow-600 text-18">
                                                        leandroMariotto
                                                    </h3>
                                                    <h4 class="font-weight-light text-yellow-600 text-16">
                                                        Envato CEO
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Testimonials -->

<!-- Start Clients -->
<!-- <section class="lqd-section clients pt-100 pb-140" data-custom-animations="true"
    data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner, .carousel-container", "duration" : 1000 , "delay" : 100 , "ease": "expo.out", "initValues": {"y": "60px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-12 text-center">
                <div class="ld-fancy-heading relative mask-text">
                    <p class="ld-fh-element relative lqd-split-lines h3 leading-1/5em text-24 mb-2em"
                        data-split-text="true" data-split-options='{"type": "lines"}'>
                        Trusted by global brands.
                        <span class="text-slate-400">Join Millions of customers around the globe.</span>
                    </p>
                </div>
            </div>
            <div class="col col-12">
                <div class="carousel-container relative carousel-nav-shaped">
                    <div class="carousel-items relative"
                        data-lqd-flickity='{"marquee": true, "marqueeTickerSpeed": "1", "pauseAutoPlayOnHover": false}'>
                        <div class="col col-6 col-xl-3 px-30 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <img width="96" height="29" src="/images/demo/start-hub/client-amazon.svg"
                                        alt="amazon" />
                                </div>
                            </div>
                        </div>
                        <div class="col col-6 col-xl-3 px-30 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <img width="87" height="20" src="/images/demo/start-hub/client-amd-logo.svg"
                                        alt="amd" />
                                </div>
                            </div>
                        </div>
                        <div class="col col-6 col-xl-3 px-30 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <img width="127" height="24" src="/images/demo/start-hub/client-dropcam.svg"
                                        alt="dropcam" />
                                </div>
                            </div>
                        </div>
                        <div class="col col-6 col-xl-3 px-30 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <img width="84" height="36" src="/images/demo/start-hub/client-marvel.svg"
                                        alt="marvel" />
                                </div>
                            </div>
                        </div>
                        <div class="col col-6 col-xl-3 px-30 carousel-item flex flex-col justify-center">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <img width="76" height="27" src="/images/demo/start-hub/client-nike.svg"
                                        alt="nike" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Clients -->


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


<section
    class="lqd-section services flex items-center justify-center bg-center bg-norepeat pt-90 pb-30 md:items-start pp-section ca-initvalues-applied lqd-animations-done active lqd-stack-moving-down"
    id="services" data-tooltip="Services" data-section-luminosity="light" data-custom-animations="true"
    data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.col&quot;,&quot;duration&quot;:&quot;1200&quot;,&quot;delay&quot;:&quot;150&quot;,&quot;ease&quot;:&quot;power4.out&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;y&quot;:43,&quot;transformOriginX&quot;:50,&quot;transformOriginY&quot;:50,&quot;transformOriginZ&quot;:&quot;0px&quot;,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;y&quot;:0,&quot;transformOriginX&quot;:50,&quot;transformOriginY&quot;:50,&quot;transformOriginZ&quot;:&quot;0px&quot;,&quot;opacity&quot;:1}}"
    style="background-image: url(./assets/images/demo/modern-business/bg-dots.png);" data-anchor="services">
</section>

<!-- Start Blog -->
<section class="lqd-section blog pt-100 bg-transparent transition-all bg-center bg-norepeat"
    style="background-image: url(./images/bg/bg-1.png);"
    style="background-image: linear-gradient(180deg, #FAF9FE 0%, #fff 100%);" data-custom-animations="true"
    data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
    <div class="container">
        <div class="row items-end">
            <div class="col-12 col-md-6 animation-element">
                <div class="mb-15 ld-fancy-heading relative">
                    <h6
                        class="ld-fh-element m-0 inline-block relative label text-10 tracking-1 uppercase font-bold text-black bg-blue-200 trackink-1px py-5 px-15 rounded-100 innak-font">
                        Blog</h6>
                </div>
                <div class="ld-fancy-heading relative">
                    <h2 class="ld-fh-element mb-0/5em inline-block relative text-40 text-gray-600"><span
                            class="innak-font">INNAK</span> Insights</h2>
                </div>
            </div>
            <div class="col-12 col-md-6 animation-element">
                <div class="ld-fancy-heading relative">
                    <p class="ld-fh-element mb-0/5em inline-block relative leading-1/6em text-18 text-gray-500">Explore
                        the latest tech trends, tips, and innovations with INNAK Insights.</p>
                </div>
            </div>
            <div class="col col-12 animation-element">
                <div class="flex flex-wrap justify-center -mr-30 -ml-30 module-blog">
                    <div class="w-50percent flex px-30 my-30 md:w-50percent sm:w-full module-col">
                        <a href="{{route('blog1')}}">
                            <article
                                class="lqd-lp relative lqd-lp-style-6 lqd-lp-style-6-alt lqd-lp-hover-img-zoom lqd-lp-hover-img-zoom-out lqd-lp-animate-onhover rounded-4 overflow-hidden text-start post-5561 post type-post status-publish format-standard has-post-thumbnail hentry category-business category-culture tag-beauty tag-travel hover:inner-text-primary">
                                <div class="lqd-lp-img overflow-hidden">
                                    <a href="{{route('blog1')}}">
                                        <figure>
                                            <img class="w-full" width="640" height="364"
                                                src="{{asset('images/blog/the-future-of-web-development-trends-and-nnovations.png')}}"
                                                alt="5 reasons to purchase desktop computers">
                                        </figure>
                                    </a>
                                    <div class="lqd-lp-meta uppercase font-bold relative z-3">
                                        <span class="screen-reader-text">Tags </span>
                                        <ul
                                            class="lqd-lp-cat lqd-lp-cat-shaped lqd-lp-cat-solid reset-ul inline-ul font-bold uppercase tracking-0/1em">
                                            <li><a class="rounded-full" href="#" rel="category">web development</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <header class="lqd-lp-header pt-1/5em px-1em">
                                    <div class="lqd-lp-meta lqd-lp-meta-dot-between flex flex-wrap items-center">
                                        <div class="lqd-lp-author relative z-3">
                                            <div class="lqd-lp-author-info">
                                                <h3 class="mt-0 mb-0">
                                                    <a href="#">April 18, 2024</a>
                                                </h3>
                                            </div>
                                        </div>
                                        <time class="lqd-lp-date" datetime="2021-06-02T13:40:12+00:00">3 min read</time>
                                    </div>
                                    <a href="{{route('blog1')}}">
                                        <h2 class="entry-title lqd-lp-title mt-0/5em mb-0 h5">The Future of Web
                                            Development: Trends and Innovations</h2>
                                    </a>
                                </header>
                                <div class="lqd-lp-excerpt pt-1em px-1em">
                                    <p>Stay ahead in the evolving world of web development by exploring the latest
                                        trends and innovations shaping the future.</p>
                                </div>
                                <div class="w-full animation-element px-1em">
                                    <a href="#"
                                        class="btn btn-naked btn-hover-reveal btn-has-label font-family-inherit text-15 text-black">
                                        <span class="btn-txt" data-text="─ Read More">─ Read More</span>
                                        <span class="btn-icon">
                                            <i class="lqd-icn-ess icon-md-arrow-round-forward"></i>
                                        </span>
                                    </a>
                                    <a class="m-0 text-12 font-bold text-black bg-blue-200 py-5 px-15 rounded-100">
                                        <span class="btn-txt">Read More</span>
                                        <span class="btn-icon text-1em">
                                            <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                        </span>
                                    </a>
                                    <a href="{{route('blog1')}}"
                                        class="btn btn-primary justify-start btn-icon-right text-15 w-240 rounded-6 bg-purple-200 text-gold hover:text-black">
                                    </a>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="w-50percent flex px-30 my-30 md:w-50percent sm:w-full module-col">
                        <article
                            class="lqd-lp relative lqd-lp-style-6 lqd-lp-style-6-alt lqd-lp-hover-img-zoom lqd-lp-hover-img-zoom-out lqd-lp-animate-onhover rounded-4 overflow-hidden text-start post-5561 post type-post status-publish format-standard has-post-thumbnail hentry category-business category-culture tag-beauty tag-travel hover:inner-text-primary">
                            <div class="lqd-lp-img overflow-hidden">
                                <figure>
                                    <img class="w-full" width="640" height="364"
                                        src="{{asset('images/blog/transforming-business-with-automation-key-benefits-and-strategies.png')}}"
                                        alt="Utilizing mobile technology in the field">
                                </figure>
                                <div class="lqd-lp-meta uppercase font-bold relative z-3">
                                    <span class="screen-reader-text">Tags </span>
                                    <ul
                                        class="lqd-lp-cat lqd-lp-cat-shaped lqd-lp-cat-solid reset-ul inline-ul font-bold uppercase tracking-0/1em">
                                        <li><a class="rounded-full" href="#" rel="category">Automation</a></li>
                                    </ul>
                                </div>
                            </div>
                            <header class="lqd-lp-header pt-1/5em px-1em">
                                <div class="lqd-lp-meta lqd-lp-meta-dot-between flex flex-wrap items-center">
                                    <div class="lqd-lp-author relative z-3">
                                        <div class="lqd-lp-author-info">
                                            <h3 class="mt-0 mb-0">
                                                <a href="#">May 9, 2024</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <time class="lqd-lp-date" datetime="2021-06-02T13:40:12+00:00">3 min read</time>
                                </div>
                                <h2 class="entry-title lqd-lp-title mt-0/5em mb-0 h5">Transforming Business with
                                    Automation: Key Benefits and Strategies</h2>
                            </header>
                            <div class="lqd-lp-excerpt pt-1em px-1em">
                                <p>Discover how automation enhances efficiency, reduces costs, and improves accuracy.
                                    Learn key benefits and strategies for effective implementation in your business.</p>
                            </div>
                            <div class="w-full animation-element px-1em">
                                <a href="{{route('blog2')}}"
                                    class="btn btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-icon-right text-13 h-45 px-15 rounded-6 text-gold hover:text-black"
                                    data-localscroll="true">
                                    <span class="btn-txt" data-text="Read More" data-split-text="true"
                                        data-split-options='{"type":  "chars, words"}'>Read More</span>
                                    <span class="btn-icon text-1em">
                                        <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                    </span>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Blog -->

<!-- Start Contact Form -->
<section class="lqd-section contact-form bg-center bg-cover pt-70 pb-100" id="contact" style="
              background-image: url(/images/demo/start-hub/contact-form-bg.jpg);
            ">
    <div class="container">
        <div class="row items-end">
            <div class="w-45percent sm:w-full" data-custom-animations="true"
                data-ca-options='{"animationTarget": ".animation-element, figure, .lqd-split-lines .lqd-lines .split-inner", "duration" : 1000 , "delay" : 100 , "ease": "expo.out", "initValues": {"y": "95px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                <div class="relative w-full flex flex-col justify-end pb-40">
                    <div class="absolute -top-145percent ltr-left-0 module-shape-1 animation-element">
                        <div id="lqd-lottie-form-contact" class="lqd-lottie"></div>
                    </div>
                    <div class="absolute -top-55percent module-shape-2">
                        <div class="lqd-imggrp-single block relative">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img width="57" height="54" src="/images/demo/start-hub/shape-Path-141907.svg"
                                        alt="contact form shape" />
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-30percent module-shape-3">
                        <div class="lqd-imggrp-single block relative">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img width="49" height="14" src="/images/demo/start-hub/shape-Path-141908.svg"
                                        alt="contact form shape" />
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-85 module-shape-4">
                        <div class="lqd-imggrp-single block relative">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img width="21" height="68" src="/images/demo/start-hub/shape-Path-141875.svg"
                                        alt="contact form shape" />
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="ld-fancy-heading relative mask-text">
                        <h2 class="ld-fh-element inline-block relative lqd-split-lines mb-0/5em text-70"
                            data-split-text="true" data-split-options='{"type": "lines"}'>
                            Have a project in mind?👋
                        </h2>
                    </div>
                    <div class="ld-fancy-heading relative mask-text w-410 max-w-full">
                        <p class="ld-fh-element inline-block relative lqd-split-lines mb-0/5em text-16 leading-20"
                            data-split-text="true" data-split-options='{"type": "lines"}'>
                            Looking for collaboration? Send an email to
                            <a href="#" class="text-dark">info@liquid-themes.com</a>
                            to for vailable for enquires and collaborations,
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-50percent lg:w-55percent sm:w-full" data-custom-animations="true"
                data-ca-options='{"animationTarget": "h2, .animation-element", "duration" : 1000 , "startDelay" : 500 , "delay" : 100 , "ease": "expo.out", "initValues": {"y": "60px", "scaleX" : 0.8 , "scaleY" : 0.8 , "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1 , "scaleY" : 1 , "opacity" : 1}}'>
                <div class="ld-fancy-heading relative">
                    <h2 class="ld-fh-element relative mb-1em text-32">
                        Send a message
                    </h2>
                </div>
                <div
                    class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-block lqd-contact-form-button-circle lqd-contact-form-inputs-border-thick bg-white pt-45 pb-50 px-75 rounded-12 animation-element">
                    <div role="form">
                        <div class="screen-reader-response animation-element">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                        </div>
                        <form action="/php/mailer.php" method="post" class="lqd-cf-form" novalidate="novalidate"
                            data-status="init">
                            <div class="row -mr-15 -ml-15 flex-wrap">
                                <div class="col col-12 col-md-6 px-15">
                                    <p>
                                        <span class="lqd-form-control-wrap text">
                                            <input class="border-black-20 text-black text-13" type="text" name="name"
                                                value="" size="40" aria-required="true" aria-invalid="false"
                                                placeholder="What's your name?" />
                                        </span>
                                    </p>
                                </div>
                                <div class="col col-12 col-md-6 px-15">
                                    <p>
                                        <span class="lqd-form-control-wrap email">
                                            <input class="border-black-20 text-black text-13" type="email" name="email"
                                                value="" size="40" aria-required="true" aria-invalid="false"
                                                placeholder="Email Address" />
                                        </span>
                                    </p>
                                </div>
                                <div class="col col-12 col-md-6 px-15">
                                    <p>
                                        <span class="lqd-form-control-wrap tel">
                                            <input class="border-black-20 text-black text-13" type="text" name="topic"
                                                value="" size="40" aria-required="true" aria-invalid="false"
                                                placeholder="Select a Discussion Topic" />
                                        </span>
                                    </p>
                                </div>
                                <div class="col col-12 col-md-6 px-15">
                                    <p>
                                        <span class="lqd-form-control-wrap text">
                                            <input class="border-black-20 text-black text-13" type="text" name="budget"
                                                value="" size="40" aria-required="true" aria-invalid="false"
                                                placeholder="What's your budget?" />
                                        </span>
                                    </p>
                                </div>
                                <div class="col col-12 px-15">
                                    <p>
                                        <span class="lqd-form-control-wrap textarea">
                                            <textarea class="border-black-20 text-black text-13" name="message"
                                                cols="10" rows="6" aria-required="true" aria-invalid="false"
                                                placeholder="A brief description about your project/request/consultation"></textarea>
                                        </span>
                                    </p>
                                </div>
                                <div class="col col-12 px-15">
                                    <span class="lqd-form-control-wrap acceptance">
                                        <span class="lqd-cf-form-control lqd-cf-acceptance">
                                            <span class="lqd-cf-list-item">
                                                <label>
                                                    <input type="checkbox" name="acceptance" value="1"
                                                        aria-invalid="false" />
                                                    <span class="lqd-cf-list-item-label">I am bound by the terms of the
                                                        Service I
                                                        accept Privacy Policy</span>
                                                </label>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="col col-12 px-15">
                                    <input type="submit" value="— send message"
                                        class="lqd-cf-form-control lqd-cf-submit border-0 bg-black text-14 text-white" />
                                </div>
                            </div>
                        </form>
                        <div class="lqd-cf-response-output"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Form -->




@endsection