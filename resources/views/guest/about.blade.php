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


</style>



<!-- Start Our Vision -->
<section class="lqd-section our-vision pt-50 mt-100  pb-390" id="solutions">
    <div class="absolute w-full max-w-full bottom-0 ltr-left-0">
        <div class="lqd-throwable-scene relative pointer-events-none overflow-hidden" data-lqd-throwable-scene>
            <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none module-text-1"
                data-lqd-throwable-el>
                <span
                    class="lqd-throwable-element-rot inline-block text-22 font-semibold leading-1/8em py-0/25em px-1/5em text-black rounded-100 bg-orange-200">Innovative
                    Solutions</span>
            </p>
            <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none module-text-2"
                data-lqd-throwable-el>
                <span
                    class="lqd-throwable-element-rot inline-block text-22 font-semibold leading-1/8em py-0/25em px-1/5em text-black rounded-100 bg-blue-100 sm:text-18">Cutting-edge
                    Technology</span>
            </p>
            <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none module-text-3"
                data-lqd-throwable-el>
                <span
                    class="lqd-throwable-element-rot inline-block text-22 font-semibold leading-1/8em py-0/25em px-1/5em text-black rounded-100 bg-green-200 sm:text-18">Personalized
                    Service</span>
            </p>
            <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none module-text-4"
                data-lqd-throwable-el>
                <span
                    class="lqd-throwable-element-rot inline-block text-22 font-semibold leading-1/8em py-0/25em px-1/5em text-black rounded-100 bg-blue-300 sm:text-18">Affordable
                    Quality</span>
            </p>
            <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none module-text-5"
                data-lqd-throwable-el>
                <span
                    class="lqd-throwable-element-rot inline-block text-22 font-semibold leading-1/8em py-0/25em px-1/5em text-black rounded-100 bg-blue-200 sm:text-18">Client
                    focused</span>
            </p>
            <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none module-text-6"
                data-lqd-throwable-el>
                <span
                    class="lqd-throwable-element-rot inline-block text-22 font-semibold leading-1/8em py-0/25em px-1/5em text-black rounded-100 bg-green-300 sm:text-18">High
                    Standards
                </span>
            </p>
            <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none module-text-7"
                data-lqd-throwable-el>
                <span
                    class="lqd-throwable-element-rot inline-block text-22 font-semibold leading-1/8em py-0/25em px-1/5em text-black rounded-100 bg-orange-300 sm:text-18">Confidentiality
                </span>
            </p>
            <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none module-text-8"
                data-lqd-throwable-el>
                <span
                    class="lqd-throwable-element-rot inline-block text-22 font-semibold leading-1/8em py-0/25em px-1/5em text-black rounded-100 bg-green-500 sm:text-18">Clear
                    Communication</span>
            </p>
        </div>
    </div>

    <div class="container-fluid relative xl:p-0">
        <div class="absolute max-w-full -top-45 z-1 module-shape">
            <figure id="lqd-draw-shape-our-vision" class="lqd-draw-shape" data-lqd-draw-shape="true"
                data-draw-shape-options='{"drawSVG": "0% 0%", "stagger" : 0 , "start": "top bottom", "end": "center center", "scrub" : 1 , "ease": "linear"}'>
                <svg xmlns="http://www.w3.org/2000/svg" width="189.901" height="106.01" viewBox="0 0 189.901 106.01">
                    <path
                        d="M42.52,277.026c5.189-4.909,24.683-30.293,31.134-29.451s-1.473,34.921,7.573,34.5,38.848-41.513,46.7-37.025-7.082,62.9.421,63.952,34.5-63.6,44.6-57.641,7.433,92.492,15.988,93.4,29.451-73.278,35.342-87.934"
                        transform="translate(-38.279 -241.761)" fill="none" stroke="#c78bdd" stroke-linecap="round"
                        stroke-width="6"></path>
                </svg>
            </figure>
        </div>
        <div class="lqd-section-flow flex-wrap" data-lqd-section-flow="true">
            <div class="lqd-section-flow-panel lqd-section-flow-panel-start col-12 col-lg-6 px-0">
                <div class="lqd-section-flow-panel-start-inner sticky top-0 left-0">
                    <div class="lqd-section-flow-item absolute top-0 left-0 w-full overflow-hidden">
                        <div class="h-vh-100 lqd-section-flow-item-inner">
                            <img class="h-full object-cover" decoding="async"
                                src="https://img.freepik.com/premium-photo/close-up-human-eye-with-high-tech-vision-concept-ai-generated_768733-17125.jpg"
                                title="section-flow-11" alt="section-flow-11" />
                        </div>
                    </div>
                    <div class="lqd-section-flow-item absolute top-0 left-0 w-full overflow-hidden">
                        <div class="h-vh-100 lqd-section-flow-item-inner">
                            <img class="h-full object-cover" decoding="async"
                                src="https://www.horizon.ac.uk/wp-content/uploads/2020/10/mission-700x467.jpg"
                                title="img-3" alt="img-3" />
                        </div>
                    </div>
                    <div class="lqd-section-flow-item absolute top-0 left-0 w-full overflow-hidden">
                        <div class="h-vh-100 lqd-section-flow-item-inner">
                            <img class="h-full object-cover" decoding="async"
                                src="https://media.assettype.com/analyticsinsight%2Fimport%2Fwp-content%2Fuploads%2F2021%2F12%2FIndian-Tech-Industry-in-2022-Heading-the-Disruptive-Tech-Market.jpg"
                                title="section-flow-11" alt="section-flow-11" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="lqd-section-flow-panel lqd-section-flow-panel-end col-12 col-lg-6">
                <div class="lqd-section-flow-item flex items-center">
                    <div class="lqd-section-flow-item-inner">
                        <div class="lqd-section-flow-content-mobile">
                            <img decoding="async"
                                src="https://img.freepik.com/premium-photo/close-up-human-eye-with-high-tech-vision-concept-ai-generated_768733-17125.jpg"
                                title="section-flow-11" alt="section-flow-11" />
                        </div>
                        <div class="flex flex-wrap py-10percent" data-custom-animations="true"
                            data-ca-options='{"animationTarget": "h2, .animation-element, .iconbox, .btn", "duration" : 1000 , "startDelay" : 300 , "delay" : 100 , "ease": "expo.out", "initValues": {"x": "60px", "opacity" : 0} , "animations": {"x": "0px", "opacity" : 1}}'>
                            <div class="flex flex-wrap pb-200 module-content">
                                <div
                                    class="m-0 px-10 rounded-6 bg-slate-200 ld-fancy-heading relative animation-element">
                                    <h6
                                        class="ld-fh-element inline-block relative mb-0/5em text-12 -tracking-0/5 text-slate-500">
                                        Our vision
                                    </h6>
                                </div>
                                <div class="ld-fancy-heading relative">
                                    <h2 class="ld-fh-element relative lqd-highlight-custom lqd-highlight-custom-2 mt-0/25em mb-0/75em text-38"
                                        data-inview="true" data-transition-delay="true"
                                        data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                        Create a world where
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">tech meets human needs.</span>
                                            <span class="-bottom-10 left-0 lqd-highlight-inner bg-purple-100">
                                                <svg class="lqd-highlight-pen" width="51" height="51"
                                                    viewBox="0 0 51 51" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z" />
                                                </svg>
                                                <svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2"
                                                    width="233" height="13" viewBox="0 0 233 13"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    preserveAspectRatio="none">
                                                    <path
                                                        d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z"
                                                        fill="#7150E8" />
                                                </svg>
                                            </span>
                                        </mark>
                                        and
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">supports sustainability.</span>
                                            <span class="-bottom-10 left-0 lqd-highlight-inner bg-purple-100">
                                                <svg class="lqd-highlight-pen" width="51" height="51"
                                                    viewBox="0 0 51 51" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z" />
                                                </svg>
                                                <svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2"
                                                    width="233" height="13" viewBox="0 0 233 13"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    preserveAspectRatio="none">
                                                    <path
                                                        d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z"
                                                        fill="#7150E8" />
                                                </svg>
                                            </span>
                                        </mark>
                                    </h2>
                                </div>
                            </div>
                            <a href="./page-asymmetric-agency-case-studies.html"
                                class="text-black btn btn-underlined border-thin btn-icon-right btn-hover-reveal text-black before:bg-black">
                                <span class="btn-icon">
                                    <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lqd-section-flow-item flex items-center">
                    <div class="lqd-section-flow-item-inner">
                        <div class="lqd-section-flow-content-mobile">
                            <img decoding="async"
                                src="https://www.horizon.ac.uk/wp-content/uploads/2020/10/mission-700x467.jpg"
                                title="img-3" alt="img-3" />
                        </div>
                        <div class="flex flex-wrap py-10percent" data-custom-animations="true"
                            data-ca-options='{"animationTarget": "h2, .animation-element, .iconbox, .btn", "duration" : 1000 , "startDelay" : 300 , "delay" : 100 , "ease": "expo.out", "initValues": {"x": "60px", "opacity" : 0} , "animations": {"x": "0px", "opacity" : 1}}'>
                            <div class="flex flex-wrap pb-200 module-content">
                                <div
                                    class="m-0 px-10 rounded-6 bg-slate-200 ld-fancy-heading relative animation-element">
                                    <h6 class="ld-fh-element relative mb-0/5em text-12 -tracking-0/5 text-slate-500">
                                        Our Mission
                                    </h6>
                                </div>
                                <div class="ld-fancy-heading relative">
                                    <h2 class="ld-fh-element relative lqd-highlight-custom lqd-highlight-custom-2 mt-0/25em mb-0/75em text-38"
                                        data-inview="true" data-transition-delay="true"
                                        data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                        We create tech solutions that
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">serve human needs</span>
                                            <span class="-bottom-10 left-0 lqd-highlight-inner bg-purple-100">
                                                <svg class="lqd-highlight-pen" width="51" height="51"
                                                    viewBox="0 0 51 51" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z" />
                                                </svg>
                                                <svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2"
                                                    width="233" height="13" viewBox="0 0 233 13"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    preserveAspectRatio="none">
                                                    <path
                                                        d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z"
                                                        fill="#7150E8" />
                                                </svg>
                                            </span>
                                        </mark>
                                        and
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">promote global sustainability</span>
                                            <span class="-bottom-10 left-0 lqd-highlight-inner bg-purple-100">
                                                <svg class="lqd-highlight-pen" width="51" height="51"
                                                    viewBox="0 0 51 51" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z" />
                                                </svg>
                                                <svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2"
                                                    width="233" height="13" viewBox="0 0 233 13"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    preserveAspectRatio="none">
                                                    <path
                                                        d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z"
                                                        fill="#7150E8" />
                                                </svg>
                                            </span>
                                        </mark>
                                        through innovation.
                                    </h2>
                                </div>
                            </div>
                            <a href="./page-asymmetric-agency-case-studies.html"
                                class="text-black btn btn-underlined border-thin btn-icon-right btn-hover-reveal text-black before:bg-black">
                                <span class="btn-icon">
                                    <i aria-hidden="true" class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lqd-section-flow-item flex items-center">
                    <div class="lqd-section-flow-item-inner">
                        <div class="lqd-section-flow-content-mobile">
                            <img decoding="async"
                                src="https://media.assettype.com/analyticsinsight%2Fimport%2Fwp-content%2Fuploads%2F2021%2F12%2FIndian-Tech-Industry-in-2022-Heading-the-Disruptive-Tech-Market.jpg"
                                title="section-flow-11" alt="section-flow-11" />
                        </div>
                        <div class="flex flex-wrap py-10percent" data-custom-animations="true"
                            data-ca-options='{"animationTarget": "h2, .animation-element, .iconbox, .btn", "duration" : 1000 , "startDelay" : 300 , "delay" : 100 , "ease": "expo.out", "initValues": {"x": "60px", "opacity" : 0} , "animations": {"x": "0px", "opacity" : 1}}'>
                            <div class="flex flex-wrap pb-200 module-content">
                                <div
                                    class="m-0 px-10 rounded-6 bg-slate-200 ld-fancy-heading relative animation-element">
                                    <h6 class="ld-fh-element relative mb-0/5em text-12 -tracking-0/5 text-slate-500">
                                        Why Innak?
                                    </h6>
                                </div>
                                <div class="ld-fancy-heading relative">
                                    <h2 class="ld-fh-element relative lqd-highlight-custom lqd-highlight-custom-2 mt-0/25em mb-0/75em text-38"
                                        data-inview="true" data-transition-delay="true"
                                        data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                                        Sick of generic solutions? Innak
                                        <mark class="lqd-highlight">
                                            <span class="lqd-highlight-txt">customizes solutions </span>
                                            <span class="-bottom-10 left-0 lqd-highlight-inner bg-purple-100">
                                                <svg class="lqd-highlight-pen" width="51" height="51"
                                                    viewBox="0 0 51 51" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z" />
                                                </svg>
                                                <svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2"
                                                    width="233" height="13" viewBox="0 0 233 13"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    preserveAspectRatio="none">
                                                    <path
                                                        d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z"
                                                        fill="#7150E8" />
                                                </svg>
                                            </span>
                                        </mark>just for you.
                                    </h2>
                                </div>
                                <div class="mb-30 iconbox flex flex-grow-1 relative iconbox-circle iconbox-icon-ripple">
                                    <div class="iconbox-icon-wrap mr-25">
                                        <div
                                            class="iconbox-icon-container inline-flex relative z-1 rounded-full text-24 w-30 h-30 text-accent bg-white shadow-md">
                                            <i aria-hidden="true" class="lqd-icn-ess icon-lqd-circle"></i>
                                        </div>
                                    </div>
                                    <p class="text-13 leading-16 m-0 lqd-iconbox-heading">
                                        <strong>Innovative Solutions: </strong>
                                        We love solving tough tech challenges with fresh ideas.
                                    </p>
                                </div>
                                <div class="mb-30 iconbox flex flex-grow-1 relative iconbox-circle iconbox-icon-ripple">
                                    <div class="iconbox-icon-wrap mr-25">
                                        <div
                                            class="iconbox-icon-container inline-flex relative z-1 rounded-full text-24 w-30 h-30 text-accent bg-white shadow-md">
                                            <i aria-hidden="true" class="lqd-icn-ess icon-lqd-circle"></i>
                                        </div>
                                    </div>
                                    <p class="text-13 leading-16 m-0 lqd-iconbox-heading">
                                        <strong>Client-Focused: </strong>
                                        Your needs shape our solutions. We listen and adapt to match your vision.
                                    </p>
                                </div>
                                <div class="mb-30 iconbox flex flex-grow-1 relative iconbox-circle iconbox-icon-ripple">
                                    <div class="iconbox-icon-wrap mr-25">
                                        <div
                                            class="iconbox-icon-container inline-flex relative z-1 rounded-full text-24 w-30 h-30 text-accent bg-white shadow-md">
                                            <i aria-hidden="true" class="lqd-icn-ess icon-lqd-circle"></i>
                                        </div>
                                    </div>
                                    <p class="text-13 leading-16 m-0 lqd-iconbox-heading">
                                        <strong>Affordable Quality: </strong>
                                        Top-notch services at great prices, ensuring value for your investment.
                                    </p>
                                </div>
                                <div class="mb-30 iconbox flex flex-grow-1 relative iconbox-circle iconbox-icon-ripple">
                                    <div class="iconbox-icon-wrap mr-25">
                                        <div
                                            class="iconbox-icon-container inline-flex relative z-1 rounded-full text-24 w-30 h-30 text-accent bg-white shadow-md">
                                            <i aria-hidden="true" class="lqd-icn-ess icon-lqd-circle"></i>
                                        </div>
                                    </div>
                                    <p class="text-13 leading-16 m-0 lqd-iconbox-heading">
                                        <strong>Personalized Service: </strong>
                                        Advanced technology with a personal touch, ensuring human interaction.
                                    </p>
                                </div>
                                <div class="mb-30 iconbox flex flex-grow-1 relative iconbox-circle iconbox-icon-ripple">
                                    <div class="iconbox-icon-wrap mr-25">
                                        <div
                                            class="iconbox-icon-container inline-flex relative z-1 rounded-full text-24 w-30 h-30 text-accent bg-white shadow-md">
                                            <i aria-hidden="true" class="lqd-icn-ess icon-lqd-circle"></i>
                                        </div>
                                    </div>
                                    <p class="text-13 leading-16 m-0 lqd-iconbox-heading">
                                        <strong>Clear Communication: </strong>
                                        We communicate clearly and effectively for smooth collaboration.
                                    </p>
                                </div>
                                <div class="mb-30 iconbox flex flex-grow-1 relative iconbox-circle iconbox-icon-ripple">
                                    <div class="iconbox-icon-wrap mr-25">
                                        <div
                                            class="iconbox-icon-container inline-flex relative z-1 rounded-full text-24 w-30 h-30 text-accent bg-white shadow-md">
                                            <i aria-hidden="true" class="lqd-icn-ess icon-lqd-circle"></i>
                                        </div>
                                    </div>
                                    <p class="text-13 leading-16 m-0 lqd-iconbox-heading">
                                        <strong>Confidentiality: </strong>
                                        Strict non-disclosure protects your project and ideas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Vision -->


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