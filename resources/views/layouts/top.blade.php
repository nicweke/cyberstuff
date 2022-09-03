<!DOCTYPE html><!-- Last Published: Thu Aug 25 2022 21:07:46 GMT+0000 (Coordinated Universal Time) -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title></title>
    {{-- <meta
        content="Matter is a Slack app that creates a team recognition habit called Feedback Friday where team members recognize each other with kudos, rewards, and feedback."
        name="description" />
    <meta content="Matter: Create Team Recognition with Feedback Friday" property="og:title" />
    <meta
        content="Matter is a Slack app that creates a team recognition habit called Feedback Friday where team members recognize each other with kudos, rewards, and feedback."
        property="og:description" />
    <meta
        content="https://assets-global.website-files.com/60b9220d74f790a1191230c9/61afd92aff60955a7e6c9195_OG%20Image.png"
        property="og:image" />
    <meta content="Matter: Create Team Recognition with Feedback Friday" property="twitter:title" />
    <meta
        content="Matter is a Slack app that creates a team recognition habit called Feedback Friday where team members recognize each other with kudos, rewards, and feedback."
        property="twitter:description" />
    <meta
        content="https://assets-global.website-files.com/60b9220d74f790a1191230c9/61afd92aff60955a7e6c9195_OG%20Image.png"
        property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" /> --}}
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    {{-- -----------------------------Global Styles------------------- --}}
    <link href="{{ asset('assets/css/cyber.css') }}" rel="stylesheet" type="text/css" />

    {{-- -----------------------------Favicon------------------- --------- --}}
    <link href="" rel="shortcut icon" type="image/x-icon" />
    
    {{-- -----------------------------Bootstrap------------------- --------- --}}

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}

    <link
        href="https://assets-global.website-files.com/60b9220d74f790a1191230c9/617324e3858d1a5d6c3c8fc2_favicon-256px.png"
        rel="apple-touch-icon" />

    <link href="https://matterapp.com/" rel="canonical" />
    <style>
        @media (min-width:992px) {
            html.w-mod-js:not(.w-mod-ix) [data-w-id="5fbf85bf-5766-0a63-64df-dce0811a1d52"] {
                opacity: 0;
                -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(-15deg) rotateY(0) rotateZ(0) skew(0, 0);
                -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(-15deg) rotateY(0) rotateZ(0) skew(0, 0);
                -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(-15deg) rotateY(0) rotateZ(0) skew(0, 0);
                transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(-15deg) rotateY(0) rotateZ(0) skew(0, 0);
                transform-style: preserve-3d;
                display: none;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="5fbf85bf-5766-0a63-64df-dce0811a1d4f"] {
                color: rgb(107, 107, 111);
            }
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>


    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Inter:300,regular,500,600,700"]
            }
        });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>

    <style>
        .anti-flicker-hide {
            opacity: 0 !important
        }
    </style>
    <script type="text/javascript">
        (function(a, s, y, n, c, h, i, d, e) {
            s.className += ' ' + y;
            h.start = 1 * new Date;
            h.end = i = function() {
                s.className = s.className.replace(RegExp(' ?' + y), '')
            };
            (a[n] = a[n] || []).hide = h;
            setTimeout(function() {
                i();
                h.end = null
            }, c);
            h.timeout = c;
        })(window, document.documentElement, 'anti-flicker-hide', 'dataLayer', 4000, {
            'GTM-W54FR9V': true
        });
    </script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-114209589-1"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-114209589-1', {
            'anonymize_ip': false,
            'optimize_id': 'GTM-W54FR9V'
        });
    </script>
    <script type="text/javascript">
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.agent = 'plwebflow';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '708125222901689');
        fbq('track', 'PageView');
    </script><!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5WR2HFH');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="slack-app-id" content="A01JBGHLMA7">

    <!-- Additional global styles -->
    <style>
        body {
            position: relative;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .button-common {
            pointer-events: all;
        }

        h1:first-child,
        h2:first-child,
        h3:first-child,
        h4:first-child,
        h5:first-child,
        h6:first-child {
            margin-top: 0;
        }

        .w-embed+h1,
        .w-embed+h2,
        .w-embed+h3,
        .w-embed+h4,
        .w-embed+h5,
        .w-embed+h6 {
            margin-top: 34px;
        }

        .button-stroke.button-nav.main-nav-cta:hover {
            border-color: #0609C6 !important;
            background-color: #0609C6 !important;
            color: #fff !important;
        }

        @media screen and (max-width: 767px) {

            .w-embed+h1,
            .w-embed+h2,
            .w-embed+h3,
            .w-embed+h4,
            .w-embed+h5,
            .w-embed+h6 {
                margin-top: 24px;
            }
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        @media screen and (max-width: 991px) {

            .nav-layout::-webkit-scrollbar,
            body::-webkit-scrollbar {
                display: none;
            }

            .nav-layout,
            body {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .navbar-wrapper .w-nav-overlay {
                top: 0;
                max-height: 100vh;
            }

            .nav-layout {
                max-height: calc(100vh - 120px);
                overflow: auto;
            }
        }

        @media screen and (max-width: 767px) {
            .nav-layout {
                max-height: calc(100vh - 96px);
            }
        }

        @supports ((backdrop-filter: blur(10px)) or (-webkit-backdrop-filter: blur(10px))) {
            .backdrop-blur {
                -webkit-backdrop-filter: blur(20px);
                backdrop-filter: blur(20px);
            }
        }

        .pointer-events-all {
            pointer-events: all;
        }

        .layer {
            position: relative !important;
        }
    </style>

</head>

<body>
    <div data-w-id="2d6f8e8d-3c02-a70d-2287-7298d0f9ec3a" class="navbar-trigger"></div>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navbar-wrapper backdrop-blur w-nav">
        <div class="container-nav w-container">
            <a href="" aria-current="page" class="logo w-nav-brand w--current">
                <img loading="lazy"
                    src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/6139b2563144e512c42b1182_matter.svg"
                    alt="Matter" class="image-11" />
            </a>
            <div role="navigation" class="nav w-nav-menu">
                <div class="nav-layout">
                    <div data-w-id="5fbf85bf-5766-0a63-64df-dce0811a1d4e" class="nav-dropdown">
                        <div data-w-id="5fbf85bf-5766-0a63-64df-dce0811a1d4f" class="nav-link features">
                            <div>Features</div>
                        </div>
                        <div data-w-id="5fbf85bf-5766-0a63-64df-dce0811a1d52" class="nav-dropdown-list">
                            <div class="div-block-32"></div>
                            <div class="w-layout-grid grid-3"><a
                                    id="w-node-_5fbf85bf-5766-0a63-64df-dce0811a1d55-f82d6ca4" href="/feedback-friday"
                                    class="link-block-6 w-inline-block">
                                    <div class="div-block-26"><img width="112" loading="lazy"
                                            src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/6142ebb08e933d02b245d770_feedback-friday.png"
                                            alt="Feedback Friday" /></div>
                                    <div>
                                        <div class="text-block-10">Feedback Friday</div>
                                        <div class="text-block-11">Get your team on a weekly<br />feedback streak</div>
                                    </div>
                                </a><a href="/rewards" class="link-block-6 w-inline-block">
                                    <div class="div-block-26"><img width="40" height="40"
                                            src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/62756c1f5029765bf40f384a_rewards-icon.png"
                                            loading="lazy" alt="" /></div>
                                    <div>
                                        <div class="text-block-10">Rewards</div>
                                        <div class="text-block-11">Redeem coins for gift cards, company rewards &amp;
                                            donations</div>
                                    </div>
                                </a><a id="w-node-_5fbf85bf-5766-0a63-64df-dce0811a1d67-f82d6ca4" href="/kudos"
                                    class="link-block-6 w-inline-block">
                                    <div class="div-block-26"><img width="112" loading="lazy"
                                            src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/6142ebb1318cf4d9fb4b485b_kudos.png"
                                            alt="Kudos" /></div>
                                    <div>
                                        <div class="text-block-10">Kudos</div>
                                        <div class="text-block-11">Celebrate wins together</div>
                                    </div>
                                </a><a href="/feedback-surveys" class="link-block-6 w-inline-block">
                                    <div class="div-block-26"><img width="112" loading="lazy"
                                            src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/6142ebb18df054e5fe72bd90_feedback-surveys.png"
                                            alt="Feedback Surveys" /></div>
                                    <div>
                                        <div class="text-block-10">Feedback surveys</div>
                                        <div class="text-block-11">Gather feedback and level up your team</div>
                                    </div>
                                </a><a id="w-node-_5fbf85bf-5766-0a63-64df-dce0811a1d77-f82d6ca4" href="/analytics"
                                    class="link-block-6 w-inline-block">
                                    <div class="div-block-26"><img width="32" loading="lazy"
                                            src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/62756cc08ea47039b921e6ea_icon-analytics.png"
                                            alt="" /></div>
                                    <div>
                                        <div class="text-block-10">Analytics</div>
                                        <div class="text-block-11">Discover insights from recognition</div>
                                    </div>
                                </a><a href="/continuous-feedback" class="link-block-6 w-inline-block">
                                    <div class="div-block-26"><img width="112" loading="lazy"
                                            src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/6142ebb18e933d2c0845d771_continuous-feedback.png"
                                            alt="Continuous Feedback" /></div>
                                    <div>
                                        <div class="text-block-10">Continuous feedback</div>
                                        <div class="text-block-11">Grow regularly and intentionally</div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                    <div class="nav-group"><a href="/pricing" class="nav-link w-nav-link">Pricing</a><a
                            href="/demo" class="nav-link w-nav-link">Demo</a><a
                            href="https://app.matterapp.com/login"
                            class="nav-link nav-link-hidden nav-link-hidden-mobile w-nav-link">Sign in</a></div>
                </div>
            </div>
            <div class="sign"><a href="https://app.matterapp.com/login" class="sign-link w-nav-link">Sign in</a><a
                    href="https://slack.com/oauth/v2/authorize?scope=app_mentions:read,channels:join,channels:manage,channels:read,chat:write,commands,groups:write,groups:read,im:history,im:read,im:write,mpim:write,team:read,users:read,users:read.email,reactions:read&amp;user_scope=chat:write,identify&amp;client_id=265432257396.1623561701347&amp;redirect_uri=https://api.matterapp.com/oauth/slack?inapp=false"
                    target="_blank" class="button-stroke button-nav main-nav-cta all-cta-home-page w-button">Get
                    started — Free!</a></div>
            <div data-w-id="5fbf85bf-5766-0a63-64df-dce0811a1d95" class="burger w-nav-button">
                <div class="w-embed">
                    <style>
                        .burger.w--open rect {
                            y: 11;
                        }

                        .burger.w--open rect:first-child {
                            transform: rotate(45deg);
                        }

                        .burger.w--open rect:last-child {
                            transform: rotate(-45deg);
                        }

                        .burger rect {
                            transform-origin: center;
                            transition: all .2s;
                        }
                    </style>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <rect x="4" y="8" width="16" height="2" fill="#2E2E33"
                            rx="2" ry="2" />
                        <rect x="4" y="14" width="16" height="2" fill="#2E2E33"
                            rx="2" ry="2" />
                    </svg>
                </div>
            </div>
        </div>
    </div>



    <main class="py-4">
        @yield('content')
    </main>





    <footer class="footer-wrapper wf-section">
        <div class="container-common container-footer w-container">
            <div class="columns-3 w-row">
                <div class="column-61 w-col w-col-5 w-col-stack">
                    <a href="#" class="link-block-5 w-inline-block">
                        <img src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/6139b2563144e512c42b1182_matter.svg"
                            loading="lazy" alt="Matter" class="image-15" />
                    </a>
                    <a data-w-id="d30c5752-856e-7e22-6875-177d9409edfb"
                        href="https://slack.com/oauth/v2/authorize?scope=app_mentions:read,channels:join,channels:manage,channels:read,chat:write,commands,groups:write,groups:read,im:history,im:read,im:write,mpim:write,team:read,users:read,users:read.email,reactions:read&amp;user_scope=chat:write,identify&amp;client_id=265432257396.1623561701347&amp;redirect_uri=https://api.matterapp.com/oauth/slack?inapp=false"
                        target="_blank" class="link-block-4 sia-cta-button w-inline-block">
                        <div data-w-id="d30c5752-856e-7e22-6875-177d9409edfc" class="text-block-9 sia-cta-button">
                            Start Feedback Friday and create a feedback culture with kudos &amp; rewards</div>
                        <div class="div-block-25 sia-cta-button">
                            <h6 class="heading-8 sia-cta-button">Get started for free</h6><img
                                src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/61403f28c8e04920f77e1796_arrow-right.svg"
                                loading="lazy" data-w-id="d30c5752-856e-7e22-6875-177d9409ee01" alt="Arrow right"
                                class="sia-cta-button" />
                        </div><img
                            src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/61403f28608e62f60f8fbf53_slack-3d.png"
                            loading="lazy" width="170" alt="Slack 3D" class="image-16 sia-cta-button" />
                    </a>
                </div>
                <div class="column-62 w-col w-col-7 w-col-stack">
                    <div class="footer-menu">
                        <div class="footer-menu-col">
                            <h6 class="footer-title">Company</h6>
                            <ul role="list" class="footer-menu-list w-list-unstyled">
                                <li class="footer-menu-item"><a href="/about" class="footer-menu-link">About
                                        us</a></li>
                                <li class="footer-menu-item"><a href="/careers" class="footer-menu-link">Careers</a>
                                </li>
                                <li class="footer-menu-item"><a href="/pricing" class="footer-menu-link">Pricing</a>
                                </li>
                                <li class="footer-menu-item"><a href="/blog" class="footer-menu-link">Blog</a>
                                </li>
                                <li class="footer-menu-item"></li>
                            </ul>
                        </div>
                        <div class="footer-menu-col">
                            <h6 class="footer-title">Product</h6>
                            <ul role="list" class="footer-menu-list w-list-unstyled">
                                <li class="footer-menu-item"><a href="/feedback-friday"
                                        class="footer-menu-link">Feedback Friday</a></li>
                                <li class="footer-menu-item"><a href="/kudos" class="footer-menu-link">Kudos</a>
                                </li>
                                <li class="footer-menu-item"><a href="/analytics"
                                        class="footer-menu-link">Analytics</a></li>
                                <li class="footer-menu-item"><a href="/rewards" class="footer-menu-link">Rewards</a>
                                </li>

                            </ul>
                        </div>
                        <div class="footer-menu-col">
                            <h6 class="footer-title">Resources</h6>
                            <ul role="list" class="footer-menu-list w-list-unstyled">
                                <li class="footer-menu-item"><a href="/demo" class="footer-menu-link">Demo</a>
                                </li>
                                <li class="footer-menu-item"><a href="/skills" class="footer-menu-link">Develop
                                        skills</a></li>
                                <li class="footer-menu-item"><a href="https://get.matter.support/en/"
                                        class="footer-menu-link">Help center</a></li>
                                <li class="footer-menu-item"><a href="/admin-onboarding"
                                        class="footer-menu-link teams-waitlist-cta-button teams-waitlist-cta-button-footer">Admin
                                        onboarding</a></li>
                            </ul>
                        </div>
                        <div class="footer-menu-col">
                            <h6 class="footer-title">Legal</h6>
                            <ul role="list" class="footer-menu-list w-list-unstyled">
                                <li class="footer-menu-item"><a href="/legal/terms-of-service"
                                        class="footer-menu-link">Terms</a></li>
                                <li class="footer-menu-item"><a href="/legal/privacy"
                                        class="footer-menu-link">Privacy</a></li>
                                <li class="footer-menu-item"><a href="/legal/dpa" class="footer-menu-link">DPA</a>
                                </li>
                                <li class="footer-menu-item"><a href="/legal/copyright"
                                        class="footer-menu-link">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-block-27">
                <div class="text-block-12">© 2022 Cyberstuff</div>

                {{-- ------------------------Social Media links----------------------------------------- --}}
                <div class="div-block-28"><a href="https://twitter.com/" target="_blank"
                        class="link-block-7 w-inline-block"><img
                            src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/61407d2c77524c0b53f06e89_twitter.svg"
                            loading="lazy" alt="Twitter" class="image-19" /></a><a href="https://www.linkedin.com/"
                        target="_blank" class="link-block-7 w-inline-block"><img
                            src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/61407d2c2ef5970ccdf07260_linkedin.svg"
                            loading="lazy" alt="LinkEdin" class="image-18" /></a><a href="https://www.facebook.com/"
                        target="_blank" class="link-block-7 w-inline-block"><img
                            src="https://assets-global.website-files.com/60b9220d74f790a1191230c9/614dffbdc88051c13862196e_facebook.svg"
                            loading="lazy" alt="" class="image-17" /></a></div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}" type="text/javascript"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/cyber.js') }}" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WR2HFH" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ActiveCampaign site tracking -->
    <script type="text/javascript">
        (function(e, t, o, n, p, r, i) {
            e.visitorGlobalObjectAlias = n;
            e[e.visitorGlobalObjectAlias] = e[e.visitorGlobalObjectAlias] || function() {
                (e[e.visitorGlobalObjectAlias].q = e[e.visitorGlobalObjectAlias].q || []).push(arguments)
            };
            e[e.visitorGlobalObjectAlias].l = (new Date).getTime();
            r = t.createElement("script");
            r.src = o;
            r.async = true;
            i = t.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(r, i)
        })(window, document, "https://diffuser-cdn.app-us1.com/diffuser/diffuser.js", "vgo");
        vgo('setAccount', '90965704');
        vgo('setTrackByDefault', true);

        vgo('process');
    </script>

    <!-- Lock scroll when mobile menu is open -->
    <script>
        ! function(e, o) {
            if ("function" == typeof define && define.amd) define(["exports"], o);
            else if ("undefined" != typeof exports) o(exports);
            else {
                var t = {};
                o(t), e.bodyScrollLock = t
            }
        }(this, function(exports) {
            "use strict";
            Object.defineProperty(exports, "__esModule", {
                value: !0
            });
            var t = !1;
            if ("undefined" != typeof window) {
                var e = {
                    get passive() {
                        t = !0
                    }
                };
                window.addEventListener("testPassive", null, e), window.removeEventListener("testPassive", null, e)
            }
            var n = "undefined" != typeof window && window.navigator && window.navigator.platform && (/iP(ad|hone|od)/
                    .test(window.navigator.platform) || "MacIntel" === window.navigator.platform && 1 < window.navigator
                    .maxTouchPoints),
                i = [],
                d = !1,
                l = -1,
                c = void 0,
                s = void 0,
                u = void 0,
                a = function(o) {
                    return i.some(function(e) {
                        return !(!e.options.allowTouchMove || !e.options.allowTouchMove(o))
                    })
                },
                v = function(e) {
                    var o = e || window.event;
                    return !!a(o.target) || (1 < o.touches.length || (o.preventDefault && o.preventDefault(), !1))
                },
                r = function() {
                    void 0 !== u && (document.body.style.paddingRight = u, u = void 0), void 0 !== c && (document.body
                        .style.overflow = c, c = void 0)
                },
                f = function() {
                    if (void 0 !== s) {
                        var e = -parseInt(document.body.style.top, 10),
                            o = -parseInt(document.body.style.left, 10);
                        document.body.style.position = s.position, document.body.style.top = s.top, document.body.style
                            .left = s.left, window.scrollTo(o, e), s = void 0
                    }
                };
            exports.disableBodyScroll = function(r, e) {
                if (r) {
                    if (!i.some(function(e) {
                            return e.targetElement === r
                        })) {
                        var o = {
                            targetElement: r,
                            options: e || {}
                        };
                        i = [].concat(function(e) {
                            if (Array.isArray(e)) {
                                for (var o = 0, t = Array(e.length); o < e.length; o++) t[o] = e[o];
                                return t
                            }
                            return Array.from(e)
                        }(i), [o]), n ? window.requestAnimationFrame(function() {
                            if (void 0 === s) {
                                s = {
                                    position: document.body.style.position,
                                    top: document.body.style.top,
                                    left: document.body.style.left
                                };
                                var e = window,
                                    o = e.scrollY,
                                    t = e.scrollX,
                                    n = e.innerHeight;
                                document.body.style.position = "fixed", document.body.style.top = -o,
                                    document.body.style.left = -t, setTimeout(function() {
                                        return window.requestAnimationFrame(function() {
                                            var e = n - window.innerHeight;
                                            e && n <= o && (document.body.style.top = -(o + e))
                                        })
                                    }, 300)
                            }
                        }) : function(e) {
                            if (void 0 === u) {
                                var o = !!e && !0 === e.reserveScrollBarGap,
                                    t = window.innerWidth - document.documentElement.clientWidth;
                                if (o && 0 < t) {
                                    var n = parseInt(window.getComputedStyle(document.body).getPropertyValue(
                                        "padding-right"), 10);
                                    u = document.body.style.paddingRight, document.body.style.paddingRight = n +
                                        t + "px"
                                }
                            }
                            void 0 === c && (c = document.body.style.overflow, document.body.style.overflow =
                                "hidden")
                        }(e), n && (r.ontouchstart = function(e) {
                            1 === e.targetTouches.length && (l = e.targetTouches[0].clientY)
                        }, r.ontouchmove = function(e) {
                            var o, t, n, i;
                            1 === e.targetTouches.length && (t = r, i = (o = e).targetTouches[0].clientY -
                                l, !a(o.target) && (t && 0 === t.scrollTop && 0 < i ? v(o) : (n = t) &&
                                    n.scrollHeight - n.scrollTop <= n.clientHeight && i < 0 ? v(o) : o
                                    .stopPropagation()))
                        }, d || (document.addEventListener("touchmove", v, t ? {
                            passive: !1
                        } : void 0), d = !0))
                    }
                } else console.error(
                    "disableBodyScroll unsuccessful - targetElement must be provided when calling disableBodyScroll on IOS devices."
                )
            }, exports.clearAllBodyScrollLocks = function() {
                n && (i.forEach(function(e) {
                    e.targetElement.ontouchstart = null, e.targetElement.ontouchmove = null
                }), d && (document.removeEventListener("touchmove", v, t ? {
                    passive: !1
                } : void 0), d = !1), l = -1), n ? f() : r(), i = []
            }, exports.enableBodyScroll = function(o) {
                o ? (i = i.filter(function(e) {
                    return e.targetElement !== o
                }), n && (o.ontouchstart = null, o.ontouchmove = null, d && 0 === i.length && (document
                    .removeEventListener("touchmove", v, t ? {
                        passive: !1
                    } : void 0), d = !1)), n ? f() : r()) : console.error(
                    "enableBodyScroll unsuccessful - targetElement must be provided when calling enableBodyScroll on IOS devices."
                )
            }
        });
    </script>
    <script>
        var target = $('.nav-layout').get(0);
        if (target) {
            var burger = $('.burger');
            $(document).on('click', function() {
                if (burger.hasClass('w--open')) {
                    bodyScrollLock.enableBodyScroll(target);
                }
            });
            burger.on('click', function() {
                if ($(this).hasClass('w--open')) {
                    bodyScrollLock.enableBodyScroll(target);
                } else {
                    bodyScrollLock.disableBodyScroll(target);
                }
            });
        }
    </script><!-- Kudos Video -->
    <script>
        (function() {
            var videoContainer = $('.kudos-video');
            var videoMobile = $('.video-kudos-mobile');
            var videoDesktop = $('.video-kudos-desktop');
            var wnd = $(window);
            var offset = 120;
            wnd.scroll(function() {
                var scrollTop = wnd.scrollTop();
                var videoTop = videoContainer.offset().top;
                var videoHeight = videoContainer.height();
                var wndHeight = wnd.height();
                if ((scrollTop + wndHeight / 2 + offset) > (videoTop + videoHeight / 2)) {
                    if (wnd.width() <= 991) {
                        videoMobile.get(0).play();
                    } else {
                        videoDesktop.get(0).play();
                    }
                }
            });
        }());
    </script>
</body>

</html>
