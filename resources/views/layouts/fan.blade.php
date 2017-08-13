<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="dns-prefetch" href="https://images.altfootball.com">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-navbutton-color" content="#ffffff">
    <meta name="apple-mobile-web-app-title" content="ALTFOOTBALL">
    <link rel="stylesheet" type="text/css" href="/css/af.css">
    <link rel="icon" type="image/png" href="http://altfootball.dev/images/logo.png">
    <link rel="icon" type="image/png" href="http://altfootball.dev/images/logo.png" sizes="192x192">
    <link rel="apple-touch-icon" href="http://altfootball.dev/images/logo.png">
    <meta name="fb:app_id" property="fb:app_id" content="1932873593602036">
    <meta name="og:locale" property="og:locale" content="en_US">
    <meta name="og:ttl" property="og:ttl" content="345600">
    <meta name="og:site_name" property="og:site_name" content="ALTFOOTBALL">
    <meta name="twitter:site" property="twitter:site" content="@ALTFOOTBALL">
    <meta name="twitter:creator" property="twitter:creator" content="@ALTFOOTBALL">
    <meta property="al:ios:url" content="altfootball:///">
    <meta property="al:ios:app_store_id" content="1164159977">
    <meta property="al:ios:app_name" content="ALTFOOTBALL'">
    <meta property="al:android:url" content="altfootball:///">
    <meta property="al:android:app_name" content="ALTFOOTBALL">
    <meta property="al:android:package" content="com.altfootball">
    <meta name="apple-itunes-app" content="app-id=1164159977">
    @yield('meta')
    <script src="/js/vendors.js"></script>
    <script src="/js/af.js"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1932873593602036";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="root">
    <div id="{{ $id }}">
        <div>
            <div>
                <div class="_1A3CD" data-bind="css: { active: showSettingsPopup() || showEditPopup() }">
                    <div class="_1V79j" data-bind="click: closeSettingsPopup, css: { active: showSettingsPopup() || showEditPopup() }"></div>
                    <header class="_3XXLi">
                        <nav class="R1XAV" id="header">
                            <div class="_2H55B"><a class="" href="/">
                                    <img src="/images/logo.png" alt="AltFootball">
                                </a>
                                <form class="ra77F" action="">
                                    <div class="_1YqNB _1eF7g _3TYH2">
                                        <input type="search" value=""
                                               placeholder="Search AltFootball"
                                               class="_3vbhf l4oHd"
                                             >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="42"
                                             viewBox="0 0 40 42" class="_2-OFE _1_FTk _3ZPAz">
                                            <path fill="#00AFFF" fill-rule="evenodd"
                                                  d="M34.2 37.01l-7.96-7.88c.56-.43 1.1-.89 1.6-1.4l.14-.15 7.87 7.78-1.64 1.65zM7.25 25.4a12.76 12.76 0 0 1-3.8-9.06 12.75 12.75 0 0 1 3.71-9.1 12.77 12.77 0 0 1 9.07-3.8h.06c3.4 0 6.62 1.32 9.04 3.72a12.76 12.76 0 0 1 3.8 9.06A12.86 12.86 0 0 1 7.24 25.4zm32.25 8.73l-9.39-9.28a16.14 16.14 0 0 0 2.45-8.64 16.17 16.17 0 0 0-4.81-11.5A16.17 16.17 0 0 0 16.28 0h-.07A16.17 16.17 0 0 0 4.7 4.82 16.17 16.17 0 0 0 0 16.35a16.18 16.18 0 0 0 4.82 11.5 16.18 16.18 0 0 0 11.46 4.7h.07A16.2 16.2 0 0 0 23.23 31L33 40.66a1.71 1.71 0 0 0 2.43-.01l4.06-4.1a1.72 1.72 0 0 0-.01-2.42z"
                                                ></path>
                                        </svg>
                                    </div>
                                    <button type="reset" class="_1C5MC">Cancel</button>
                                </form>
                            </div>
                            <div class="_3BBJg">
                                <a class="_13sKJ" href="/fanbases">FANBASES</a>
                                @if(Auth::guard()->check() && Auth::user()->is_active)
                                    <?php $user = Auth::user() ?>
                                    <button class="_13sKJ">
                                        <span class="T3zZE">Alerts</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" class="_8e7Ip">
                                            <g fill="none" fill-rule="evenodd" stroke="#00AFFF" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke-width="1.5" d="M13.85 9.37v2.26l1 2.34H.75l.97-2.37V6.81a6.06 6.06 0 0 1 12.13 0v2.56z"></path>
                                                <path d="M10.76 14.3L7.8 17.25l-2.94-2.94"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <a class="_3KPPV" href="/u/{{ $user->slug }}">
                                        <div class="_1Bm3M">{{ $user->nickname }}</div>
                                        <div class="_25jNX X4CNn">
                                            <div class="N3r_f">
                                                <div class="_38L6D" style="padding-bottom: 100%;">
                                                    <img alt="" role="presentation" src="https://drivetribe.imgix.net/IoJw-6Y0TwiDcrnGGL2679?w=200&amp;h=200&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges" class="_214e9 b00q8" width="60" height="60">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <button class="BJ1bO" data-bind="click: showJoinPopup">Sign in</button>
                                    <button class="_6UUFH" data-bind="click: showJoinPopup">Join</button>
                                @endif
                            </div>
                        </nav>
                        <div class="_3GUPV -hkpO">
                            <div class="_2Ruh1"style="opacity: 0; transform: translateY(-75px) translateZ(-40px);">
                                <nav class="_3GkHt _3AKLf">
                                    <button class="zxDoM undefined"><!-- react-text: 32 -->Activity
                                        <!-- /react-text --><!-- react-empty: 33 --></button>
                                    <button class="_3UwsA zxDoM"><!-- react-text: 35 -->Invites
                                        <!-- /react-text --><!-- react-empty: 36 --></button>
                                </nav>
                                <div class="_1ese_">
                                    <div>
                                        <ul class="_3XxoM"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_BrFp"></div>
                    </header>
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
                @include('fan.edit')
                @if(!empty($view) && $view == 'show')
                    <div class="_1L5ou" data-bind="css: { active: showSettingsPopup}">
                        <div>
                            <div class="_1rglo"></div>
                            <div>
                                <div class="_1zDR7" data-bind="css: { active: showSettingsPopup}">
                                    <div class="_3rM3S">
                                        <button class="_1VKWj _29zpU" style="opacity: 1; transform: translateY(0px) translateZ(0px);" data-bind="click: openEditPopup">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="bWSPJ">
                                                <g fill="none" fill-rule="evenodd" stroke="#00AFFF" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke-width="1.5" d="M5.65 9.07l-.58 3.78 3.78-.58 8.32-8.32-3.2-3.2-1.37 1.37z"></path>
                                                    <path d="M15.1 5.67l-3.02-3.03M9.3 11.5L6.26 8.46"></path>
                                                    <path stroke-width="1.5" d="M13.69 12.14v5.11H.75V4.31h5.04"></path>
                                                </g>
                                            </svg>
                                            Edit Profile
                                        </button>
                                        <a class="_27Mgd _1VKWj _29zpU" href="/terms" style="opacity: 1; transform: translateY(0px) translateZ(0px);">Terms &amp; Privacy Policy</a>
                                        <button class="_1VKWj _29zpU" style="opacity: 1; transform: translateY(0px) translateZ(0px);">
                                            Get Help
                                            <form id="fan-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </button>
                                        <a class="_27Mgd _1VKWj _29zpU" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('fan-logout-form').submit();"
                                           style="opacity: 1; transform: translateY(0px) translateZ(0px);">Sign Out</a>
                                        </div>
                                    <div class="rTjpd" style="transform: translateX(18.5px) rotate(45deg); top: -7px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<script>
    window.serverPerf = {
        router: 418,
        render: 43
    };
</script>
@yield('js')
</body>
</html>