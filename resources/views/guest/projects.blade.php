@extends('layout.app')
@section('content')

<section class="lqd-section case-studies py-100 ca-initvalues-applied lqd-animations-done" id="works"
    data-custom-animations="true"
    data-ca-options="{&quot;animationTarget&quot;: &quot;.animation-element, .lqd-split-lines .lqd-lines .split-inner&quot;, &quot;duration&quot; : 1000 , &quot;delay&quot; : 100 , &quot;ease&quot;: &quot;expo.out&quot;, &quot;initValues&quot;: {&quot;y&quot;: &quot;50px&quot;, &quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;y&quot;: &quot;0px&quot;, &quot;opacity&quot; : 1}}">
    <div class="absolute top-40percent z-1 module-shape-1" data-parallax="true"
        data-parallax-options="{&quot;start&quot;: &quot;top bottom&quot;, &quot;end&quot;: &quot;bottom top&quot;}"
        data-parallax-from="{&quot;y&quot;: &quot;100px&quot;, &quot;rotationZ&quot;:30}"
        data-parallax-to="{&quot;y&quot;: &quot;-130px&quot;, &quot;rotationZ&quot;:0}"
        style="transform: translate3d(0px, 45.2485px, 0px) rotate(22.8585deg); will-change: transform;">
        <div class="lqd-imggrp-single block relative">
            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                <!-- <figure class="w-full relative">
                    <img width="229" height="242" src="/images/demo/start-hub/shape-obj-1.svg" alt="shape">
                </figure> -->
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 z-1 module-shape-2" data-parallax="true"
        data-parallax-options="{&quot;start&quot;: &quot;top bottom&quot;, &quot;end&quot;: &quot;bottom top&quot;}"
        data-parallax-from="{&quot;y&quot;: &quot;100px&quot;, &quot;rotationZ&quot;:30}"
        data-parallax-to="{&quot;y&quot;: &quot;-130px&quot;, &quot;rotationZ&quot;:0}"
        style="transform: translate(0px, 100px) rotate(30deg); will-change: auto;">
        <div class="lqd-imggrp-single block relative">
            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                <figure class="w-full relative">
                    <img width="121" height="108" src="/images/demo/start-hub/shape-obj2.svg" alt="shape">
                </figure>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-center">
            <div class="col col-12 col-lg-6 col-md-8 text-center mb-20">
                <div class="ld-fancy-heading relative mask-text">
                    <h6 class="ld-fh-element relative lqd-split-lines text-12 mb-1em tracking-1 uppercase text-slate-700 split-text-applied"
                        data-split-text="true" data-split-options="{&quot;type&quot;: &quot;lines&quot;}" style="">
                        <div class="split-unit lqd-lines"
                            style="display: block; text-align: center; position: relative; --lines-index: 5; --lines-last-index: 0;">
                            <span class="split-inner"> SELECTED PROJECTS</span></div>
                    </h6>
                </div>
                <div class="ld-fancy-heading relative mask-text">
                    <h2 class="ld-fh-element relative mb-0/5em lqd-split-lines split-text-applied"
                        data-split-text="true" data-split-options="{&quot;type&quot;: &quot;lines&quot;}" style="">
                        <div class="split-unit lqd-lines"
                            style="display: block; text-align: center; position: relative; --lines-index: 10; --lines-last-index: 1;">
                            <span class="split-inner"> Some of the projects </span></div>
                        <div class="split-unit lqd-lines"
                            style="display: block; text-align: center; position: relative; --lines-index: 11; --lines-last-index: 0;">
                            <span class="split-inner">we're proud of.</span></div>
                    </h2>
                </div>
            </div>
            <div class="col col-12 ca-initvalues-applied lqd-animations-done" data-custom-animations="true"
                data-ca-options="{&quot;animationTarget&quot;: &quot;.lqd-pf-item&quot;, &quot;duration&quot; : 1200 , &quot;startDelay&quot; : 200 , &quot;delay&quot; : 100 , &quot;ease&quot;: &quot;expo.out&quot;, &quot;initValues&quot;: {&quot;y&quot;: &quot;80px&quot;, &quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;y&quot;: &quot;0px&quot;, &quot;opacity&quot; : 1}}">
                <div class="lqd-pf-grid relative">
                    <div class="absolute -top-120 w-130 max-w-full z-1 module-shape-3">
                        <div class="lqd-imggrp-single block relative">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img width="130" height="130" src="/images/demo/start-hub/shape-Img.png"
                                        alt="shape">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="liquid-filter-items items-center justify-between">
                        <div class="liquid-filter-items-inner flex-grow-1">
                            <span class="liquid-filter-items-label size-md">Filter by</span>
                            <ul class="text-15 filter-list filter-list-inline size-custom items-center md:hidden"
                                id="pf-filter-case-studies-works">
                                <li class="active text-15" data-filter="*">
                                    All
                                    <sup class="lqd-filter-counter">
                                        <!-- <span>4</span> -->
                                    </sup>
                                </li>
                                <li class="text-15" data-filter=".branding">
                                    Branding
                                    <sup class="lqd-filter-counter">
                                        <!-- <span>2</span> -->
                                    </sup>
                                </li>
                                <li class="text-15" data-filter=".custom-print">
                                    Custom Print
                                    <sup class="lqd-filter-counter">
                                        <!-- <span>1</span> -->
                                    </sup>
                                </li>
                                <li class="text-15" data-filter=".digital-design">
                                    Digital Design
                                    <sup class="lqd-filter-counter">
                                        <!-- <span>2</span> -->
                                    </sup>
                                </li>
                                <li class="text-15" data-filter=".ecommerce">
                                    Ecommerce
                                    <sup class="lqd-filter-counter">
                                        <!-- <span>2</span> -->
                                    </sup>
                                </li>
                            </ul>
                            <div class="lqd-filter-dropdown hidden md:block"
                                data-form-options="{ &quot;dropdownAppendTo&quot;:  &quot;self&quot; }">
                                <select name="lqd-filter-dropdown-pf-filter-case-studies-works"
                                    id="lqd-filter-dropdown-pf-filter-case-studies-works" style="display: none;">
                                    <option selected="" data-filter="*" value="*">All</option>
                                    <option data-filter=".branding" value=".branding">Branding</option>
                                    <option data-filter=".custom-print" value=".custom-print">Custom Print</option>
                                    <option data-filter=".digital-design" value=".digital-design">Digital Design
                                    </option>
                                    <option data-filter=".ecommerce" value=".ecommerce">Ecommerce</option>
                                </select>
                                <div class="lqd-select-dropdown">
                                    <div class="ui-selectmenu-menu ui-front"
                                        style="position: relative; top: 0.184907px; left: 0px;">
                                        <ul aria-hidden="true"
                                            aria-labelledby="lqd-filter-dropdown-pf-filter-case-studies-works-button"
                                            id="lqd-filter-dropdown-pf-filter-case-studies-works-menu" role="listbox"
                                            tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"
                                            aria-activedescendant="ui-id-11" aria-disabled="false"
                                            style="width: 201px;">
                                            <li class="ui-menu-item">
                                                <div id="ui-id-11" tabindex="-1" role="option"
                                                    class="ui-menu-item-wrapper">All</div>
                                            </li>
                                            <li class="ui-menu-item">
                                                <div id="ui-id-12" tabindex="-1" role="option"
                                                    class="ui-menu-item-wrapper">Branding</div>
                                            </li>
                                            <li class="ui-menu-item">
                                                <div id="ui-id-13" tabindex="-1" role="option"
                                                    class="ui-menu-item-wrapper">Custom Print</div>
                                            </li>
                                            <li class="ui-menu-item">
                                                <div id="ui-id-14" tabindex="-1" role="option"
                                                    class="ui-menu-item-wrapper">Digital Design</div>
                                            </li>
                                            <li class="ui-menu-item">
                                                <div id="ui-id-15" tabindex="-1" role="option"
                                                    class="ui-menu-item-wrapper">Ecommerce</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><span tabindex="0" id="lqd-filter-dropdown-pf-filter-case-studies-works-button"
                                    role="combobox" aria-expanded="false" aria-autocomplete="list"
                                    aria-owns="lqd-filter-dropdown-pf-filter-case-studies-works-menu"
                                    aria-haspopup="true"
                                    class="ui-selectmenu-button ui-button ui-widget ui-selectmenu-button-closed ui-corner-all"
                                    aria-activedescendant="ui-id-11" aria-labelledby="ui-id-11"
                                    aria-disabled="false"><span
                                        class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span
                                        class="ui-selectmenu-text">All</span></span>
                            </div>
                            <a href="./page-start-hub-8-projects.html"
                                class="btn btn-naked btn-icon-right btn-hover-swp text-black" target="_blank">
                                <span class="btn-txt" data-text="Start a project">Start a project</span>
                                <span class="btn-icon">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                                <span class="btn-icon mr-10">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="lqd-pf-row row flex flex-wrap -mr-10 -ml-10" data-liquid-masonry="true"
                        data-masonry-options="{ &quot;filtersID&quot;:  &quot;#pf-filter-case-studies-works&quot; ,  &quot;filtersCounter&quot;:  true }"
                        style="position: relative; height: 480.013px;">
                        <div class="lqd-pf-column col-md-6 col-sm-6 col-xs-12 masonry-item digital-design ecommerce portfolio-single px-10"
                            style="position: absolute; left: 0px; top: 0px;">
                            <article
                                class="lqd-pf-item lqd-pf-item-style-1 lqd-pf-dark pf-details-h-end relative overflow-hidden liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-digital-design liquid-portfolio-category-ecommerce liquid-portfolio-category-portfolio-single lqd-unit-animation-done"
                                style="">
                                <div class="lqd-pf-item-inner">
                                    <div class="lqd-pf-img">
                                        <figure class="w-full">
                                            <img width="1132" height="540"
                                                src="/images/demo/start-hub/case-study-1.jpg"
                                                alt="case-studies">
                                        </figure>
                                    </div>
                                    <div class="lqd-pf-details flex flex-wrap relative">
                                        <span class="lqd-pf-overlay-bg lqd-overlay flex"></span>
                                        <div
                                            class="lqd-pf-info flex flex-wrap items-center justify-between w-full py-1/5em px-1/5em bg-white rounded-4">
                                            <h2 class="lqd-pf-title mt-0 mb-0 text-18 tracking-0">AirPlane</h2>
                                            <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                <li>
                                                    <a href="#">Digital Design</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="./page-start-hub-8-projects.html"
                                        class="lqd-overlay flex lqd-pf-overlay-link"></a>
                                </div>
                            </article>
                        </div>
                        <div class="lqd-pf-column col-md-6 col-sm-6 col-xs-12 masonry-item ecommerce masonry portfolio-single px-10"
                            style="position: absolute; left: 490px; top: 0px;">
                            <article
                                class="lqd-pf-item lqd-pf-item-style-1 lqd-pf-dark pf-details-h-end relative overflow-hidden liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-ecommerce liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single lqd-unit-animation-done"
                                style="">
                                <div class="lqd-pf-item-inner">
                                    <div class="lqd-pf-img">
                                        <figure class="w-full">
                                            <img width="1130" height="1106"
                                                src="/images/demo/start-hub/case-study-4.jpg"
                                                alt="case studies">
                                        </figure>
                                    </div>
                                    <div class="lqd-pf-details flex flex-wrap relative">
                                        <span class="lqd-pf-overlay-bg lqd-overlay flex"></span>
                                        <div
                                            class="lqd-pf-info flex flex-wrap items-center justify-between w-full py-1/5em px-1/5em bg-white rounded-4">
                                            <h2 class="lqd-pf-title mt-0 mb-0 text-18 tracking-0">Aliens do 3D
                                                Automobile</h2>
                                            <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                <li>
                                                    <a href="#">Ecommerce</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="./page-start-hub-8-projects.html"
                                        class="lqd-overlay flex lqd-pf-overlay-link" target="_blank"></a>
                                </div>
                            </article>
                        </div>
                        <div class="lqd-pf-column col-md-3 col-sm-6 col-xs-12 masonry-item branding custom-print masonry portfolio-single px-10"
                            style="position: absolute; left: 0px; top: 244px;">
                            <article
                                class="lqd-pf-item lqd-pf-item-style-1 lqd-pf-dark pf-details-h-end relative overflow-hidden liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-custom-print liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single lqd-unit-animation-done"
                                style="">
                                <div class="lqd-pf-item-inner">
                                    <div class="lqd-pf-img">
                                        <figure class="w-full">
                                            <img width="550" height="520"
                                                src="/images/demo/start-hub/case-study-2.jpg"
                                                alt="case studies">
                                        </figure>
                                    </div>
                                    <div class="lqd-pf-details flex flex-wrap relative">
                                        <span class="lqd-pf-overlay-bg lqd-overlay flex"></span>
                                        <div
                                            class="lqd-pf-info flex flex-wrap items-center justify-between w-full py-1/5em px-1/5em bg-white rounded-4">
                                            <h2 class="lqd-pf-title mt-0 mb-0 text-18 tracking-0">Photo Retouching</h2>
                                            <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                <li>
                                                    <a href="#">Branding</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="./page-start-hub-8-projects.html"
                                        class="lqd-overlay flex lqd-pf-overlay-link" target="_blank"></a>
                                </div>
                            </article>
                        </div>
                        <div class="lqd-pf-column col-md-3 col-sm-6 col-xs-12 masonry-item branding digital-design masonry portfolio-single px-10"
                            style="position: absolute; left: 245px; top: 244px;">
                            <article
                                class="lqd-pf-item lqd-pf-item-style-1 lqd-pf-dark pf-details-h-end relative overflow-hidden liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-digital-design liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single lqd-unit-animation-done"
                                style="">
                                <div class="lqd-pf-item-inner">
                                    <div class="lqd-pf-img">
                                        <figure class="w-full">
                                            <img width="550" height="520"
                                                src="/images/demo/start-hub/case-study-3.jpg"
                                                alt="case studies">
                                        </figure>
                                    </div>
                                    <div class="lqd-pf-details flex flex-wrap relative">
                                        <span class="lqd-pf-overlay-bg lqd-overlay flex"></span>
                                        <div
                                            class="lqd-pf-info flex flex-wrap items-center justify-between w-full py-1/5em px-1/5em bg-white rounded-4">
                                            <h2 class="lqd-pf-title mt-0 mb-0 text-18 tracking-0">Kontrast</h2>
                                            <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                                <li>
                                                    <a href="#">Branding</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="./page-start-hub-8-projects.html"
                                        class="lqd-overlay flex lqd-pf-overlay-link" target="_blank"></a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection