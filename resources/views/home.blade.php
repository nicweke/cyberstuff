@extends('layouts.top')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}




<div data-w-id="c9a575d4-2a8d-5fbb-6477-740b0bc8f388" class="home-section js-parallax wf-section">
    <div class="container-common w-container">
        <div class="section-columns w-row">
            <div data-w-id="c9a575d4-2a8d-5fbb-6477-740b0bc8f38b"
                class="section-column mobile-mb-40 w-col w-col-6">
                <div class="section-block">
                    <h2 class="h2-common">We are here to<br> <b style="color: #0DFAFA">PROTECT</b><br>You</h2>
                    {{-- <div class="subtitle-s">We deliver confidence in Security</div> --}}
                </div>
            </div>
            <div data-w-id="c9a575d4-2a8d-5fbb-6477-740b0bc8f391" class="section-column w-col w-col-6">
                <div class="preview-ui"><img
                        src="{{asset('assets/images/point.png')}}"
                        loading="lazy"
                        srcset="{{asset('assets/images/point.png')}} 500w, {{asset('assets/images/point.png')}} 1168w"
                        width="584"
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 43vw, (max-width: 1279px) 45vw, 584px"
                        alt="" class="preview-ui-image" />
              
                </div>
            </div>
        </div>
    </div>
</div>


<div class="hero-content pointer-events-all">
    <h2 class="h1-common h1-hero">At Cyberstuff, we protect organizational &amp; personal data by preventing, mitigating, defending &amp; responding to cyber threats
    </h2>
    {{-- <ul role="list" class="list-check w-list-unstyled">
        <li class="list-item-2"><img
                src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/614dc489fd559b9671a67121_Path.svg"
                loading="lazy" alt="" class="list-check_icon" />
            <div class="list-check-text">Free To Try</div>
        </li>
        <li class="list-item-2"><img
                src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/614dc489fd559b9671a67121_Path.svg"
                loading="lazy" alt="" class="list-check_icon" />
            <div class="list-check-text">Easy Setup</div>
        </li>
        <li class="list-item-2"><img
                src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/614dc489fd559b9671a67121_Path.svg"
                loading="lazy" alt="" class="list-check_icon" />
            <div class="list-check-text">Unlimited Access</div>
        </li>
        <li class="list-item-2"><img
                src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/614dc489fd559b9671a67121_Path.svg"
                loading="lazy" alt="" class="list-check_icon" />
            <div class="list-check-text">No Credit Card Required</div>
        </li>
    </ul> --}}
    
    <div class="hero-slack"><a
            href="{{route('trainings')}}"
            target="_blank"
            class="button-common large sia-cta-button all-cta-home-page w-inline-block"><img
                src="{{asset('assets/images/icons/training.png')}}"
                loading="lazy" height="20" width="20" alt="Slack"
                class="ms-teams-icon sia-cta-button all-cta-home-page" />
            <div class="text-block-6 sia-cta-button large all-cta-home-page">For Cybersecurity Training</div>
        </a>
        <a href="https://api.matterapp.com/oauth/teams" target="_blank"
            class="button-common large ms-teams-cta-button-large w-inline-block"><img
                src="{{asset('assets/images/icons/detect.png')}}"
                loading="lazy" height="20" width="20" alt="" class="ms-teams-icon" />
            <div class="text-block-6 sia-cta-button large all-cta-home-page">For Threat Detection</div>
        </a>
    </div>
    {{-- <div class="div-block-145">
        <div class="text-block-65"><a href="/demo" class="link-6">Watch demo video or schedule demo</a>
        </div>
    </div> --}}
</div>





<div data-w-id="6c1c7f46-9099-11ab-97e1-06e05752bd9e" class="home-section js-parallax wf-section">
    <div class="container-common w-container">
        <div class="section-columns reverse w-row">
            <div data-w-id="6c1c7f46-9099-11ab-97e1-06e05752bda1" class="section-column w-col w-col-6">
                <div class="rewards"><img
                        src="{{asset('assets/images/cyborg.png')}}"
                        loading="lazy" alt="" class="rewards-participation_image" style="border-radius: 2em"/>
                   
                </div>
            </div>
            <div data-w-id="6c1c7f46-9099-11ab-97e1-06e05752bdc6" class="section-column right w-col w-col-6">
                <div class="section-block right">
                    <h2 class="h2-common">Unmatched attack prevention methods</h2>
                    <div class="subtitle-s">We employ complex technologies and machine-learning models to identify and mitigate cyber attacks</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div data-w-id="cea94812-50b8-c115-9481-fc4f3814bbb2" class="home-section js-parallax wf-section">
    <div class="container-common w-container">
        <div class="section-columns w-row">
            <div data-w-id="cea94812-50b8-c115-9481-fc4f3814bbb5"
                class="section-column mobile-mb-40 w-col w-col-6">
                <div class="section-block wide pointer-events-all">
                    <h2 class="h2-common">Experts You Can Hold Accountable</h2>
                    <div class="subtitle-s">Attackers never rest, why should we? Our Team works for you all day and night, to ensure you are secure.
                    </div>
                    <div class="div-block-21"><a
                            href=""
                            {{-- target="_blank" --}}
                            class="button-common medium sia-cta-button all-cta-home-page w-inline-block"><img
                                src="{{asset('assets/images/icons/contact.png')}}"
                                loading="lazy" height="24" width="24" alt="Slack"
                                class="ms-teams-icon sia-cta-button all-cta-home-page" />
                            <div class="text-block-6 sia-cta-button all-cta-home-page">Contact Us</div>
                        </a></div>
                    
                </div>
            </div>
            <div data-w-id="cea94812-50b8-c115-9481-fc4f3814bbc0" class="section-column w-col w-col-6">
                <div class="level-up"><img
                        src="{{asset('assets/images/work.png')}}"
                        loading="lazy" class="rewards-participation_image" style="border-radius: 2em"
                        alt="" />
                   
                </div>
            </div>
        </div>
    </div>
</div>

<div data-w-id="6c1c7f46-9099-11ab-97e1-06e05752bd9e" class="home-section js-parallax wf-section">
    <div class="container-common w-container">
        <div class="section-columns reverse w-row">
            <div data-w-id="6c1c7f46-9099-11ab-97e1-06e05752bda1" class="section-column w-col w-col-6">
                <div class="rewards"><img
                        src="{{asset('assets/images/hand.png')}}"
                        loading="lazy" alt="" style="border-radius: 2em" class="rewards-participation_image" />
                </div>
            </div>
            <div data-w-id="6c1c7f46-9099-11ab-97e1-06e05752bdc6" class="section-column right w-col w-col-6">
                <div class="section-block right">
                    <h2 class="h2-common">We Better return on investment</h2>
                    <div class="subtitle-s">We and our partners take time in engineering the complexity out of security to offer solutions to reduce risk at a lower total cost</div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div class="home-section with-scroll wf-section">
    <div class="container-common w-container">
        <div class="section-columns stretch w-row">
            <div class="section-column w-col w-col-6">
                <div class="section-block sticky">
                    <h2 data-w-id="5966612c-c5df-2c21-49f5-0fb24b447bfd" class="h2-common">Experts You Can Hold Accountable</h2>
                </div>
            </div>
            <div class="section-column w-col w-col-6">
                <div data-w-id="5966612c-c5df-2c21-49f5-0fb24b447c00" class="team-quotes hide-scrollbar">
                    <div class="team-quotes-collection">
                        <div class="collection-list">
                            <div class="collection-item bg-3">
                                <div class="collection-item-inner div-block-58">
                                    <blockquote class="block-quote">“The setup was extremely easy. It had good UX
                                        and interface – people knew how to intuitively use it. The channel got
                                        popular in the first two weeks.&quot;</blockquote>
                                    <div class="div-block-56">
                                        <div class="div-block-57"><img loading="lazy"
                                                src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/6307d9e847998b27fc8c1f6d_Mathis%20Bogen%20-%20Headshot.jpeg"
                                                alt="" class="image-34" /></div>
                                        <div>
                                            <div class="text-block-13">Mathis Bogen</div>
                                            <div class="text-block-14">Head of Internal Communications | <a
                                                    href="/customer-stories/bolt">Customer Story</a></div>
                                            <div class="company-logo"><img
                                                    src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/6307d98304ce5aa901ea785a_Bolt_logo.svg"
                                                    loading="lazy" width="Auto" alt=""
                                                    class="image-46" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collection-item bg-1">
                                <div class="collection-item-inner div-block-58">
                                    <blockquote class="block-quote">&quot;Matter isn’t just about kudos – it’s a
                                        complete feedback tool. Not only give feedback or kudos, but also
                                        constructive feedback that helps teammates improve specific skills,
                                        especially with continuous feedback relationships.&quot;</blockquote>
                                    <div class="div-block-56">
                                        <div class="div-block-57"><img loading="lazy"
                                                src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/62df5f58a34b9f7041095691_Lucas%20Veyrines.png"
                                                alt="" class="image-34" /></div>
                                        <div>
                                            <div class="text-block-13">Lucas Veyrines</div>
                                            <div class="text-block-14">Human Resources | <a
                                                    href="/customer-stories/sport-heroes">Customer Story</a></div>
                                            <div class="company-logo"><img
                                                    src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/62df5e8c8c33b8702094f5b4_Sports%20Heroes%20Logo.png"
                                                    loading="lazy" width="Auto" alt=""
                                                    class="image-46" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collection-item bg-2">
                                <div class="collection-item-inner div-block-58">
                                    <blockquote class="block-quote">&quot;Feedback is something that’s not always
                                        easy to share, but with Matter, we now have a way, with valuable guidelines
                                        and considerations, to create a feedback culture.&quot;</blockquote>
                                    <div class="div-block-56">
                                        <div class="div-block-57"><img loading="lazy"
                                                src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/62df635a45e33d7d9dc70d01_Citlalli%20Amador.png"
                                                alt="" class="image-34" /></div>
                                        <div>
                                            <div class="text-block-13">Citlalli Amador</div>
                                            <div class="text-block-14">Human Resources BP | <a
                                                    href="/customer-stories/yaydoo">Customer Story</a></div>
                                            <div class="company-logo"><img
                                                    src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/62df636c0b55da82d21b0471_Yaydoo%20Logo.png"
                                                    loading="lazy" width="Auto"
                                                    srcset="https://assets-global.website-files.com/60b9220d74f790a1191230c9/62df636c0b55da82d21b0471_Yaydoo%20Logo-p-500.png 500w, https://assets-global.website-files.com/60b9220d74f790a1191230c9/62df636c0b55da82d21b0471_Yaydoo%20Logo.png 762w"
                                                    sizes="100vw" alt="" class="image-46" /></div>
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
</div> --}}




    
@endsection
