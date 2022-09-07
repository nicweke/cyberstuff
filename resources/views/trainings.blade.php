@extends('layouts.extend')

@section('content')
    <div data-w-id="4921e478-89de-f7be-0c9d-f2beba6d4dfd" class="demo-outer wf-section">
        <div class="demo" style="background-image: url('assets/images/vortex.gif')">
            <div class="container-common relative w-container">
                <div data-w-id="4921e478-89de-f7be-0c9d-f2beba6d4dff" class="pointer-events-all">
                    <h3 class="demo-title" style="color: #0DFAFA">Cyber Security Awareneness Training</h3>

                    <div
                        style="margin-top: 24px;
                    margin-bottom: 30px;
                    font-size: 18px;
                    line-height: 28px;
                    text-align:center">
                        Improve, develop, and master these essentials cyber security skills
                        to enable you counter cyber attacks directed to you</div>
                    <div class="div-block-36"><a
                            href="https://slack.com/oauth/v2/authorize?scope=app_mentions:read,channels:join,channels:manage,channels:read,chat:write,commands,groups:write,groups:read,im:history,im:read,im:write,mpim:write,team:read,users:read,users:read.email,reactions:read&amp;user_scope=chat:write,identify&amp;client_id=265432257396.1623561701347&amp;redirect_uri=https://api.matterapp.com/oauth/slack?inapp=false"
                            target="_blank" class="button-common medium sia-cta-button cta-banner-v1 w-inline-block"><img
                                src="{{ asset('assets/images/icons/courses.png') }}" loading="lazy" height="24"
                                width="24" alt="Slack" class="ms-teams-icon sia-cta-button cta-banner-v1" />
                            <div class="text-block-6 sia-cta-button cta-banner-v1">Go to Courses</div>
                        </a>
                     
                    </div>
                </div>

            </div>

        </div>
    </div>
   
    <div data-w-id="8a6db4ec-4b58-617c-6fc0-27edb2830204" class="section-item js-parallax wf-section">
        <div class="container-common w-container">
            <div class="columns reverse w-row">
                <div data-w-id="8a6db4ec-4b58-617c-6fc0-27edb2830207" style="opacity:1" class="column w-col w-col-6">
                    <div class="preview">
                        <div class="preview-shape"></div>
                        <div class="preview-item fb-1">
                            <div data-depth=".025" class="layer">
                                <img src="{{ asset('assets/images/concept.png') }}" loading="lazy"
                                    srcset="{{ asset('assets/images/concept.png') }} 500w, {{ asset('assets/images/concept.png') }} 1168w"
                                    width="584"
                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 43vw, (max-width: 1279px) 45vw, 584px"
                                    alt="" class="preview-ui-image" />
                            </div>
                        </div>
                    </div>
                </div>
                <div data-w-id="8a6db4ec-4b58-617c-6fc0-27edb283020f" style="opacity:1"
                    class="column push-right w-col w-col-6">
                    <div class="column-inner size-m">
                        <h2 class="h2-common" style="color:#7A8450">World-class Awareness Training</h2>
                        <p class="subtitle-s">We have partnered with world class cyber security training specialists,
                            CyberHoot, to offer you world class cyber security training.</p>
                        <p class="subtitle-s mt-28">Together, we help you secure yourself and your organization by offering
                            Security Awareness Training, Phish Testing, Policy Compliance Tracking, Cyber Security Maturity
                            Surveys, Deep Web Monitoring and Detailed reporting.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    






    <div class="home-section section-hero js-parallax section-hero-demo-page wf-section">
        <div class="container-common w-container">
            <div class="section-columns w-row">
                <div class="section-column mobile-mb-40 w-col w-col-5">
                    <div class="section-block wider">
                        {{-- <div class="hairline-s">DEMO</div> --}}
                        <h1 class="h1-common h1-2-common h1-2-feedback" style="color:#7A8450">See Us in action</h1>
                        <div class="subtitle-s feedback-subtitle">Whether you are conducting a basic survey or an in-depth
                            risk assessment, our assessment tool puts the power in your hands. <br> Together with CyberHoot, we performs dark web scans and alerts you if any of your users are found in a breach. Receive automated report emails containing which accounts have been found in a breach</div>
                    </div>
                    <div class="div-block-107"><a
                            href="https://slack.com/oauth/v2/authorize?scope=app_mentions:read,channels:join,channels:manage,channels:read,chat:write,commands,groups:write,groups:read,im:history,im:read,im:write,mpim:write,team:read,users:read,users:read.email,reactions:read&amp;user_scope=chat:write,identify&amp;client_id=265432257396.1623561701347&amp;redirect_uri=https://api.matterapp.com/oauth/slack?inapp=false"
                            target="_blank"
                            class="button-common medium sia-cta-button all-cta-demo-page w-inline-block"><img
                                src="{{ asset('assets/images/icons/courses.png') }}"
                                loading="lazy" height="24" width="24" alt="Slack"
                                class="ms-teams-icon sia-cta-button all-cta-demo-page" />
                            <div class="text-block-6 sia-cta-button all-cta-demo-page">Check Out Video Courses</div>
                        </a></div>
                    
                </div>
                <div class="section-column w-col w-col-7">
                    <div class="hero-content pointer-events-all">
                        <div class="video-2 w-video w-embed"> <img src="{{ asset('assets/images/roller.gif') }}"
                                loading="lazy"
                                srcset="{{ asset('assets/images/roller.gif') }} 500w, {{ asset('assets/images/roller.gif') }} 1168w"
                                width="584"
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 43vw, (max-width: 1279px) 45vw, 584px"
                                alt="" class="preview-ui-image" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
