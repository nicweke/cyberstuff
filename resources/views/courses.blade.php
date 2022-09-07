@extends('layouts.extend')


@section('content')
    <div data-w-id="92df3893-7ae1-38ef-eb92-85d055d32f20" class="wf-section"
        style="background-color: #000814;  position: relative;
z-index: 5;
overflow: hidden;
padding-top: 120px;
padding-bottom: 64px">
        <h1 class="h1-common pricing" style="color:#fff">Courses On Offer</h1>
        <div class="_30-day-trial-container pointer-events-all w-container">

            <div class="_30-day-trial-card">

                <img src="{{ asset('assets/images/cyberstuff.png') }}" loading="lazy"
                    srcset="{{ asset('assets/images/cyberstuff.png') }} 500w, {{ asset('assets/images/cyberstuff.png') }} 1168w"
                    width="584"
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 43vw, (max-width: 1279px) 45vw, 584px"
                    alt="" class="preview-ui-image" />

            </div>
        </div>
    </div>
    <div class="pricing-section wf-section">
        <div class="container-common-2 w-container">
            <h2 class="h2-common-2 center" style="color: #0DFAFA">What we offer</h2>
            <p class="paragraph-2 pro-pricing-paragraph-2" style="text-align: justify">
                {{-- <div class="check-list-text">Unlimited Cybersecurity Training Videos</div>
                <div class="check-list-text">Dark Web Monitoring priviledges</div>
                <div class="check-list-text">Automated Compliance Reporting</div>
                <div class="check-list-text">Unlimited Security Maturity Surveys</div>
                <div class="check-list-text">Unlimited Policy Compliance Tracking </div> --}}
                We offer an open platform that for 3 months cybersecurity training
                using videos. These videos are then followed with customized quizzes to test a user's
                knowledge on information acquired. Automated reminder emails are frequently sent to a user to ensure
                trainings are sufficiently covered. Additionally, you can upload custom training videos to test your peers.
            </p>

            <div class="container-common-2 container-common-3 w-container">
                <h2 class="h2-common-2 center" style="color: #0DFAFA">Pricing</h2>
                <p class="paragraph-2">Apply now to access course content</p>

            </div>
            <div class="pricing-tab annually">
                <div class="w-layout-grid " style="margin-left:34%">
                    <div id="w-node-ebf745a0-7163-747f-16fd-f88c543b7fa2-543b7f67" class="pricing-card">
                        <div class="pricing-card-top-wrapper">
                            <div class="member-numbers" style="text-align:center">Features</div>
                            <div class="billed-desc" style="font-family: CircularXX, sans-serif;color: #000;">
                                <ul>
                                    <li>All training content</li>
                                    <li>Unlimited phish testing</li>
                                    <li>Dark Web Monitoring</li>
                                    <li>Unlimited Security Maturity Surveys</li>
                                    <li>Automated compliance testing</li>

                                </ul>
                            </div>
                            <div class="member-number-unit">

                            </div>
                            <div class="price-number" style="font-size: 42px;
                            font-weight: 700;
                            color: #000;text-align:center">KES 3000 <span class="price-slash">/</span><span
                                    class="price-subscript">course</span></div>
                            {{-- <div class="additional-pricing-text">+ $200/mo for every additional 100 members</div> --}}
                        </div>
                        {{-- <div class="billed-desc" style="text-align: center">charged before commencement of course</div> --}}
                    </div>
                </div>
            </div>

        </div>

        <div class="container-common-2 container-common-3 w-container">
            <div class="div-block-36 div-block---startup-pricing"><a href="https://matterapp.typeform.com/startup-pricing"
                    target="_blank"
                    class="button-common medium old-cta-button cta-banner-v1 all-cta-pricing-page w-inline-block">
                    <div class="button-common-text old-cta-button cta-banner-v1 all-cta-pricing-page">Apply Now!</div>
                </a></div>
        </div>

    </div>
@endsection
