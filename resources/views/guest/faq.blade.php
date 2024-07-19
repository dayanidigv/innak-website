@extends('layout.app')
@section('content')


<style>
/* Banner */
.banner {
    background-position: 50% 120%;
}

/* Help */
.help {
    background-position: 50% -20%;
}

/* Assistance */
.assistance .iconbox .btn-underlined:before {
    background-color: #efefef;
}

.assistance .iconbox .btn-underlined:after {
    background-color: var(--lqd-color-secondary);
}

@media (max-width: 991px) {
    .assistance {
        padding-bottom: 45px;
    }
}
</style>



<section class="lqd-section case-studies banner pt-100 pb-80 border-bottom border-black-10 bg-no-repeat"
    data-section-luminosity="light">

    <div class="w-full h-full absolute top-0 left-0">
        <div class="ld-particles-container lqd-particles-as-bg w-full h-full absolute top-0 left-0">
            <div class="ld-particles-inner w-full h-full absolute top-0 left-0 pointer-events-auto"
                id="lqd-banner-particle-1" data-particles="true"
                data-particles-options="{&quot;particles&quot;:{&quot;number&quot;:{&quot;value&quot;:4},&quot;color&quot;:{&quot;value&quot;:[&quot;#fdc14c&quot;,&quot;#fda44c&quot;,&quot;#4cfd89&quot;,&quot;#0fbbb4&quot;]},&quot;shape&quot;:{&quot;type&quot;:[&quot;circle&quot;]},&quot;size&quot;:{&quot;value&quot;:4},&quot;move&quot;:{&quot;enable&quot;:true,&quot;direction&quot;:&quot;right&quot;,&quot;speed&quot;:1,&quot;random&quot;:true,&quot;out_mode&quot;:&quot;out&quot;}},&quot;interactivity&quot;:[],&quot;retina_detect&quot;:true}">
                <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="494"
                    height="546"></canvas>
            </div>
        </div>
    </div>
    <div class="w-full h-full absolute top-0 left-0">
        <div class="ld-particles-container lqd-particles-as-bg w-full h-full absolute top-0 left-0">
            <div class="ld-particles-inner w-full h-full absolute top-0 left-0 pointer-events-auto"
                id="lqd-banner-particle-2" data-particles="true"
                data-particles-options="{&quot;particles&quot;:{&quot;number&quot;:{&quot;value&quot;:6},&quot;color&quot;:{&quot;value&quot;:&quot;#f7fbfc&quot;},&quot;shape&quot;:{&quot;type&quot;:[&quot;circle&quot;,&quot;image&quot;],&quot;image&quot;:{&quot;src&quot;:&quot;https:\/\/hub.liquid-themes.com\/wp-content\/uploads\/2019\/11\/cloud-1.svg&quot;,&quot;width&quot;:110,&quot;height&quot;:62}},&quot;size&quot;:{&quot;value&quot;:52,&quot;random&quot;:true,&quot;anim&quot;:{&quot;enable&quot;:true,&quot;size_min&quot;:80,&quot;speed&quot;:1}},&quot;move&quot;:{&quot;enable&quot;:true,&quot;direction&quot;:&quot;right&quot;,&quot;speed&quot;:1,&quot;random&quot;:true,&quot;out_mode&quot;:&quot;out&quot;}},&quot;interactivity&quot;:[],&quot;retina_detect&quot;:true}">
                <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;"></canvas>
            </div>
        </div>
    </div>
    <div class="container pt-100 " style="--lqd-row-gutter-x :30px ;">
        <div class="row">
            <div class="col col-12 text-center">
                <div class="mb-25 lqd-imggrp-single block relative">
                    <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                        <figure class="w-full relative">
                            <img width="54" height="54" src="./images/demo/start-hub-3/shape-Message-1.svg"
                                alt="message icon">
                        </figure>
                    </div>
                </div>
                <div class="ld-fancy-heading relative">
                    <h4 class="ld-fh-element mb-0/5em inline-block relative text-slate-600">Frequently Asked Questions
                    </h4>
                </div>
                <div class="ld-fancy-heading relative">
                    <p class="ld-fh-element mb-0/5em inline-block relative text-18 text-text">
                        Embark on a dynamic journey through INNAK's Project Evolution.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="lqd-sticky-sentinel invisible absolute pointer-events-none"></div>
</section>

<section class="lqd-section case-studies help bg-no-repeat pt-85 pb-15" data-section-luminosity="light">
    <div class="lqd-imggrp-container absolute -top-45 left-10percent pointer-events-none element-was-moved"
        data-move-element="{ &quot;target&quot;: &quot;.ld-container&quot;, &quot;type&quot;: &quot;insertBefore&quot; }"
        data-parallax="true" data-parallax-from="{&quot;y&quot;:48}" data-parallax-to="{&quot;y&quot;:-175}"
        data-parallax-options="{&quot;overflowHidden&quot;:false,&quot;ease&quot;:&quot;linear&quot;,&quot;start&quot;:&quot;top bottom&quot;}"
        style="transform: translate3d(0px, -69.7935px, 0px); will-change: transform;">
        <div class="lqd-imggrp-inner">
            <div class="lqd-imggrp-single">
                <div class="lqd-imggrp-img-container">
                    <figure class="loaded">
                        <img width="1" height="1" src="/images/demo/hub/faq/help.svg" alt="shape">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-3">
        <div class="row justify-center">
            <div class="col col-12 col-lg-8">
                <div class="accordion accordion-md accordion-title-underlined accordion-expander-lg mb-2em"
                    id="lqd-accordion-help" role="tablist" aria-multiselectable="true">
                    <div class="accordion-item panel mb-15">
                        <div class="accordion-heading" role="tab" id="heading-item-1" data-id="lqd-help-item-1">
                            <h4 class="accordion-title text-18 font-semibold text-blue-700"
                                data-bs-controls="lqd-help-item-1">
                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#lqd-accordion-help"
                                    href="#lqd-help-item-1" aria-expanded="false" aria-controls="lqd-help-item-1">
                                    1. What services does INNAK offer?
                                    <span class="accordion-expander text-22 text-blue-400">
                                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id="lqd-help-item-1" class="accordion-collapse collapse" role="tabpanel"
                            aria-labelledby="heading-item-1" data-bs-parent="#lqd-accordion-help" style="">
                            <div class="accordion-content">
                                <p class="m-0">
                                    <span class="text-17 leading-30">INNAK focuses on software services. We offer Web
                                        Development, App Development, Augmented Reality, Machine Learning, Automation,
                                        Internet of Things (IoT), and Artificial Intelligence (AI). Our team excels in
                                        providing innovative digital solutions tailored to your business needs.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item panel mb-15">
                        <div class="accordion-heading" role="tab" id="heading-item-2" data-id="lqd-help-item-2">
                            <h4 class="accordion-title text-18 font-semibold text-blue-700"
                                data-bs-controls="lqd-help-item-2">
                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#lqd-accordion-help"
                                    href="#lqd-help-item-2" aria-expanded="false" aria-controls="lqd-help-item-2">
                                    2. Why should I choose INNAK for my tech projects?
                                    <span class="accordion-expander text-22 text-blue-400">
                                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id="lqd-help-item-2" class="accordion-collapse collapse" role="tabpanel"
                            aria-labelledby="heading-item-2" data-bs-parent="#lqd-accordion-help">
                            <div class="accordion-content">
                                <p class="m-0">
                                    <span class="text-16 leading-30">Choose INNAK for expert, innovative, and
                                        quality-driven tech solutions. We deliver cost-effective, high-quality results
                                        on time and offer continuous support, ensuring your satisfaction.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item panel mb-15">
                        <div class="accordion-heading" role="tab" id="heading-item-3" data-id="lqd-help-item-3">
                            <h4 class="accordion-title text-18 font-semibold text-blue-700"
                                data-bs-controls="lqd-help-item-3">
                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#lqd-accordion-help"
                                    href="#lqd-help-item-3" aria-expanded="false" aria-controls="lqd-help-item-3">
                                    3. How does INNAK ensure the quality of its products and services?
                                    <span class="accordion-expander text-22 text-blue-400">
                                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id="lqd-help-item-3" class="accordion-collapse collapse" role="tabpanel"
                            aria-labelledby="heading-item-3" data-bs-parent="#lqd-accordion-help">
                            <div class="accordion-content">
                                <p class="m-0">
                                    <span class="text-17 leading-30">Quality is central to INNAK. We perform thorough
                                        quality checks at each development stage, using the latest technologies to meet
                                        high standards of excellence.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item panel mb-15">
                        <div class="accordion-heading" role="tab" id="heading-item-4" data-id="lqd-help-item-4">
                            <h4 class="accordion-title text-18 font-semibold text-blue-700"
                                data-bs-controls="lqd-help-item-4">
                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#lqd-accordion-help"
                                    href="#lqd-help-item-4" aria-expanded="false" aria-controls="lqd-help-item-4">
                                    4. How does INNAK incorporate automation into its services?

                                    <span class="accordion-expander text-22 text-blue-400">
                                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id="lqd-help-item-4" class="accordion-collapse collapse" role="tabpanel"
                            aria-labelledby="heading-item-4" data-bs-parent="#lqd-accordion-help">
                            <div class="accordion-content">
                                <p class="m-0">
                                    <span class="text-17 leading-30">We offer advanced automation solutions like Robotic
                                        Process Automation (RPA) for tasks such as data entry and workflow management.
                                        Our marketing automation includes automated email campaigns to enhance your
                                        marketing efforts.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item panel mb-15">
                        <div class="accordion-heading" role="tab" id="heading-item-5" data-id="lqd-help-item-5">
                            <h4 class="accordion-title text-18 font-semibold text-blue-700"
                                data-bs-controls="lqd-help-item-5">
                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#lqd-accordion-help"
                                    href="#lqd-help-item-5" aria-expanded="false" aria-controls="lqd-help-item-5">
                                    5. Is INNAK's pricing competitive?

                                    <span class="accordion-expander text-22 text-blue-400">
                                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id="lqd-help-item-5" class="accordion-collapse collapse" role="tabpanel"
                            aria-labelledby="heading-item-5" data-bs-parent="#lqd-accordion-help">
                            <div class="accordion-content">
                                <p class="m-0">
                                    <span class="text-17 leading-30">Yes, we provide top-notch services at competitive
                                        prices. Our business models are designed to offer cost-effective solutions
                                        without sacrificing quality, ensuring great value for your investment.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item panel mb-15">
                        <div class="accordion-heading" role="tab" id="heading-item-6" data-id="lqd-help-item-6">
                            <h4 class="accordion-title text-18 font-semibold text-blue-700"
                                data-bs-controls="lqd-help-item-6">
                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#lqd-accordion-help"
                                    href="#lqd-help-item-6" aria-expanded="false" aria-controls="lqd-help-item-6">
                                    6. How does INNAK handle client communication and project updates?

                                    <span class="accordion-expander text-22 text-blue-400">
                                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id="lqd-help-item-6" class="accordion-collapse collapse" role="tabpanel"
                            aria-labelledby="heading-item-6" data-bs-parent="#lqd-accordion-help">
                            <div class="accordion-content">
                                <p class="m-0">
                                    <span class="text-17 leading-30">Clear and transparent communication is a priority
                                        at INNAK. We keep you informed at every project stage, ensuring a smooth and
                                        collaborative experience.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item panel mb-15">
                        <div class="accordion-heading" role="tab" id="heading-item-6" data-id="lqd-help-item-7">
                            <h4 class="accordion-title text-18 font-semibold text-blue-700"
                                data-bs-controls="lqd-help-item-7">
                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#lqd-accordion-help"
                                    href="#lqd-help-item-7" aria-expanded="false" aria-controls="lqd-help-item-7">
                                    7. How does INNAK ensure the quality of its technology solutions?

                                    <span class="accordion-expander text-22 text-blue-400">
                                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id="lqd-help-item-7" class="accordion-collapse collapse" role="tabpanel"
                            aria-labelledby="heading-item-6" data-bs-parent="#lqd-accordion-help">
                            <div class="accordion-content">
                                <p class="m-0">
                                    <span class="text-17 leading-30">Quality is at the heart of INNAK. We conduct
                                        rigorous checks at each development stage to ensure our solutions are robust and
                                        efficient. Our expert team is dedicated to delivering exceptional results.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item panel mb-15">
                        <div class="accordion-heading" role="tab" id="heading-item-6" data-id="lqd-help-item-8">
                            <h4 class="accordion-title text-18 font-semibold text-blue-700"
                                data-bs-controls="lqd-help-item-8">
                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#lqd-accordion-help"
                                    href="#lqd-help-item-8" aria-expanded="false" aria-controls="lqd-help-item-8">
                                    8. Does INNAK offer internship opportunities?
                                    <span class="accordion-expander text-22 text-blue-400">
                                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id="lqd-help-item-8" class="accordion-collapse collapse" role="tabpanel"
                            aria-labelledby="heading-item-6" data-bs-parent="#lqd-accordion-help">
                            <div class="accordion-content">
                                <p class="m-0">
                                    <span class="text-17 leading-30">Yes, we offer exciting internships for aspiring
                                        tech professionals. Get hands-on experience and mentorship in fields like web
                                        development, AR, and AI. Contact us for more information.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item panel mb-15">
                        <div class="accordion-heading" role="tab" id="heading-item-6" data-id="lqd-help-item-9">
                            <h4 class="accordion-title text-18 font-semibold text-blue-700"
                                data-bs-controls="lqd-help-item-9">
                                <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#lqd-accordion-help"
                                    href="#lqd-help-item-9" aria-expanded="false" aria-controls="lqd-help-item-9">
                                    9. How does INNAK support sustainable and inclusive technology development?

                                    <span class="accordion-expander text-22 text-blue-400">
                                        <i class="lqd-icn-ess icon-ion-ios-add"></i>
                                        <i class="lqd-icn-ess icon-ion-ios-remove"></i>
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id="lqd-help-item-9" class="accordion-collapse collapse" role="tabpanel"
                            aria-labelledby="heading-item-6" data-bs-parent="#lqd-accordion-help">
                            <div class="accordion-content">
                                <p class="m-0">
                                    <span class="text-17 leading-30">INNAK is committed to sustainable and inclusive
                                        technology. We create solutions that enhance lives, empower communities, and
                                        contribute to a sustainable future with interconnected technologies that cater
                                        to diverse needs.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection