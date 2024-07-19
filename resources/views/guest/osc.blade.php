@extends('layout.app')
@section('content')

<style>
/* ***** Text Box Image ***** */
.text-box-image .lqd-imggrp-single[data-float] {
    --float-animate-from: -2%;
    --float-animate-to: 1%;
    --float-delay: 0s;
    --float-animation-ease: ease-in-out;
}

.text-box-image .lqd-iconbox-scale:hover .iconbox-icon-container {
    color: #FFFFFF;
    background-color: #2A63EB;
}

@media (max-width: 1199px) {
    .text-box-image {
        padding: 60px 14px;
    }

    .text-box-image .lqd-imggrp-single {
        margin: -40px 0 -80px 0;
    }
}

@media (max-width: 767px) {
    .text-box-image {
        padding: 60px 20px 80px 20px;
    }

    .text-box-image .module-section {
        margin-top: 60px;
    }

    .text-box-image .ld-fancy-heading h2 {
        font-size: 32px;
    }

    .text-box-image .lqd-imggrp-single {
        margin: -40px 0 -40px 0;
    }
}
</style>


<!-- Start Text Box Image -->
<section class="lqd-section case-studies text-box-image ">
    <div class="container  sm:pt-50 pt-100 pt-100">
        <div class="row items-center">
            <div class="col col-12 col-md-6">
                <div class="flex flex-wrap mr-120 ml-40 lg:m-0">
                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-circle w-full mb-20">
                        <div class="-mb-35 iconbox-icon-wrap">
                            <span
                                class="btn btn-solid btn-has-label text-15 rounded-20 bg-green-100 text-green-500 module-btn-xs">
                                <!-- <img src="./images/logo/innak-only-logo.png" alt="icon" width="50px" class="iconbox-icon-img" /> -->

                            </span>
                            <a href="#"
                                class="btn btn-solid text-15 rounded-20 py-5 px-10 bg-green-100 text-green-700 hover:currentColor module-btn-xs"
                                data-localscroll="true">
                                <span class="btn-txt" data-text="Support">Open Source Contribution</span>
                            </a>
                        </div>
                    </div>
                    <div class="my-20 ld-fancy-heading relative">
                        <h2 class="ld-fh-element inline-block lqd-highlight-custom lqd-highlight-custom-2 mt-0/25em mb-0/75em text-38"
                            data-inview="true" data-transition-delay="true"
                            data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                            <mark class="lqd-highlight">
                                <span class="lqd-highlight-txt">Our Commitment</span>
                                <span class="-bottom-10 left-0 lqd-highlight-inner bg-purple-100">
                                    <svg class="lqd-highlight-pen" width="51" height="51" viewBox="0 0 51 51"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z" />
                                    </svg>
                                    <svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2" width="233"
                                        height="13" viewBox="0 0 233 13" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true" preserveAspectRatio="none">
                                        <path
                                            d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z"
                                            fill="#7150E8" />
                                    </svg>
                                </span>
                            </mark>
                            to Open Source
                        </h2>
                    </div>
                    <div class="mb-20 ld-fancy-heading relative">
                        <p class="leading-25 ld-fh-element inline-block relative mb-0/5em">At INNAK, we believe in the
                            transformative power of open source. It fuels innovation, fosters collaboration, and drives
                            progress across industries. That's why we actively contribute to open-source projects and
                            integrate open-source technologies into our solutions.</p>
                    </div>
                    <div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
                        <div class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
                            <div class="iconbox-icon-wrap">
                                <div
                                    class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
                                    <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                </div>
                            </div>
                            <h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">Sharing knowledge
                            </h3>
                        </div>
                    </div>
                    <div class="w-full mb-20 lqd-iconbox-scale transition-all hover:scale-1/1">
                        <div class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
                            <div class="iconbox-icon-wrap">
                                <div
                                    class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
                                    <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                </div>
                            </div>
                            <h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">Building a community.
                                Videos </h3>
                        </div>
                    </div>
                    <div class="w-full lqd-iconbox-scale transition-all hover:scale-1/1">
                        <div class="iconbox flex-grow-1 relative flex-wrap items-center iconbox-inline iconbox-circle">
                            <div class="iconbox-icon-wrap">
                                <div
                                    class="w-25 h-25 bg-blue-100 iconbox-icon-container inline-flex relative z-1 rounded-full text-14 text-blue-600 bg-blue-100">
                                    <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-checkmark"></i>
                                </div>
                            </div>
                            <h3 class="text-14 font-medium m-0 text-secondary lqd-iconbox-heading">Improving technology for everyone.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-6 p-0 ">
                <div class="module-section flex items-center justify-center transition-all p-20 lg:p-0">
                    <div class="flex items-center justify-center bg-center bg-no-repeat bg-contain"
                        style="background-image: url('./images/demo/start-hub-1/shape-ellipse.png');">
                        <div class="lqd-imggrp-single block relative -mt-70 -mb-90" data-float="ease-in-out">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img width="1102" height="1040"
                                        src="/images/osc/main-image.png"
                                        alt="Open Source Contribution">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Text Box Image -->

<section class="lqd-section case-studies ">
    <div class="container  sm:pt-50 pt-100 pt-100">
        <div class="row items-center">
            <div class="col col-12 text-center">
                <a href="#"
                    class="btn btn-solid text-15 rounded-20 py-5 px-10 bg-green-100 text-green-700 hover:currentColor module-btn-xs"
                    data-localscroll="true">
                    <span class="btn-txt" data-text="Support">Open Source Projects</span>
                </a>
            </div>
            <div class="col col-12 text-center">
            <div class="my-20 ld-fancy-heading relative">
                        <h2 class="ld-fh-element inline-block lqd-highlight-custom lqd-highlight-custom-2 mt-0/25em mb-0/75em text-38"
                            data-inview="true" data-transition-delay="true"
                            data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                            <mark class="lqd-highlight">
                                <span class="lqd-highlight-txt">Coming Soon...</span>
                                <span class="-bottom-10 left-0 lqd-highlight-inner bg-purple-100">
                                    <svg class="lqd-highlight-pen" width="51" height="51" viewBox="0 0 51 51"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z" />
                                    </svg>
                                    <svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2" width="233"
                                        height="13" viewBox="0 0 233 13" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true" preserveAspectRatio="none">
                                        <path
                                            d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z"
                                            fill="#7150E8" />
                                    </svg>
                                </span>
                            </mark>
                        </h2>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Text Box Image -->
@endsection