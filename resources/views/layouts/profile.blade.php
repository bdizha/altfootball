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
            <div class="_34lyh3" @if(!empty($view) && $view == 'onboard') data-bind="css: { _7jk98: showJoinPopup }" @endif>
                <div class="_1A3CD">
                    <div class="container">
                        <header class="_3XXLi" data-reactid="6">
                            <nav class="R1XAV" id="header" data-reactid="7">
                                <div class="_2H55B" data-reactid="8">
                                    <a class="" href="/" data-reactid="9">
                                        <svg width="40" height="40" viewBox="0 0 40 40" class="_3YKuQ" data-reactid="10">
                                            <g fill="none" fill-rule="evenodd" data-reactid="11">
                                                <path fill="#000" d="M0 0h40v40H0z M2.5 2.5h35v35h-35z" data-reactid="12"></path>
                                                <path fill="#000" data-hover-invert="true" d="M22.8 9.75v3.7c0 2.66-1.63 4.2-4.17 4.2H14.9V5.62h3.8c2.53 0 4.1 1.48 4.1 4.13zm-4.2 5.75c1.15 0 1.8-.7 1.8-2.03v-3.7c0-1.3-.65-2-1.8-2h-1.25v7.73h1.25z" data-reactid="13"></path>
                                                <path fill="#000" data-hover-invert="true" id="activity-blinker" d="M24.36 18.5h8.6v1.52h-8.6" data-reactid="14"></path>
                                                <path fill="#000" data-hover-invert="true" d="M11.02 33.85H8.58v-9.83h-2.5v-2.2h7.46v2.2h-2.52" data-reactid="15"></path>
                                                <path fill="#000" data-hover-invert="true" d="M18.55 29.47h-1.32v4.37h-2.4V21.82h3.8c2.38 0 4 1.6 4 3.82 0 1.38-.7 2.55-1.85 3.17l2.1 5.05h-2.72l-1.6-4.38zm-.2-1.85c1.1 0 1.85-.8 1.85-1.86 0-1.07-.7-1.86-1.84-1.86h-1.1v3.7h1.08v.02z" data-reactid="16"></path>
                                                <path fill="#000" data-hover-invert="true" d="M28.58 21.82c2.1 0 3.42 1.3 3.42 3.06 0 1.18-.6 2.14-1.6 2.67 1.15.52 1.86 1.6 1.86 2.92 0 1.9-1.47 3.37-3.7 3.37h-4.28V21.82h4.3zm-.56 4.97c.96 0 1.56-.67 1.56-1.56 0-.9-.58-1.52-1.53-1.52H26.7v3.07h1.32zm.1 5.16c1.05 0 1.72-.74 1.72-1.73 0-1-.65-1.68-1.7-1.68H26.7v3.4h1.42z" data-reactid="17"></path>
                                            </g>
                                        </svg>
                                    </a>
                                    <form class="ra77F" action="" data-reactid="18">
                                        <div class="_1YqNB _1eF7g _3TYH2" data-reactid="19">
                                            <input type="search" value="" placeholder="Search drivetribe" class="_3vbhf l4oHd" id="headerSearch" data-reactid="20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="42" viewBox="0 0 40 42" class="_2-OFE _1_FTk _3ZPAz" data-reactid="21">
                                                <path fill="#000" fill-rule="evenodd" d="M34.2 37.01l-7.96-7.88c.56-.43 1.1-.89 1.6-1.4l.14-.15 7.87 7.78-1.64 1.65zM7.25 25.4a12.76 12.76 0 0 1-3.8-9.06 12.75 12.75 0 0 1 3.71-9.1 12.77 12.77 0 0 1 9.07-3.8h.06c3.4 0 6.62 1.32 9.04 3.72a12.76 12.76 0 0 1 3.8 9.06A12.86 12.86 0 0 1 7.24 25.4zm32.25 8.73l-9.39-9.28a16.14 16.14 0 0 0 2.45-8.64 16.17 16.17 0 0 0-4.81-11.5A16.17 16.17 0 0 0 16.28 0h-.07A16.17 16.17 0 0 0 4.7 4.82 16.17 16.17 0 0 0 0 16.35a16.18 16.18 0 0 0 4.82 11.5 16.18 16.18 0 0 0 11.46 4.7h.07A16.2 16.2 0 0 0 23.23 31L33 40.66a1.71 1.71 0 0 0 2.43-.01l4.06-4.1a1.72 1.72 0 0 0-.01-2.42z" data-reactid="22"></path>
                                            </svg>
                                        </div>
                                        <button type="reset" class="_1C5MC" data-reactid="23">Cancel</button>
                                    </form>
                                </div>
                                <div class="_3BBJg" data-reactid="24"><a class="_13sKJ" href="/tribes/your-tribes" data-reactid="25">Tribes</a>
                                    <button class="_13sKJ" data-reactid="26"><span class="T3zZE" data-reactid="27">Alerts</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" class="_8e7Ip" data-reactid="28">
                                            <g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-linejoin="round" data-reactid="29">
                                                <path stroke-width="1.5" d="M13.85 9.37v2.26l1 2.34H.75l.97-2.37V6.81a6.06 6.06 0 0 1 12.13 0v2.56z" data-reactid="30"></path>
                                                <path d="M10.76 14.3L7.8 17.25l-2.94-2.94" data-reactid="31"></path>
                                            </g>
                                        </svg>
                                        <!-- react-empty: 32 -->
                                    </button>
                                    <a class="_3KPPV" href="/u/Aj713AmYR--7O-9IJGCvBw" data-reactid="33">
                                        <div class="_1Bm3M" data-reactid="34">david jones</div>
                                        <div class="_25jNX X4CNn" data-reactid="35">
                                            <div class="N3r_f" data-reactid="36">
                                                <div style="padding-bottom:100%;" class="_38L6D" data-reactid="37"><img alt="" role="presentation" src="https://drivetribe.imgix.net/IoJw-6Y0TwiDcrnGGL2679?w=200&amp;h=200&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges" class="_214e9 b00q8" width="60" height="60" data-reactid="38"></div>
                                            </div>
                                            <!-- react-empty: 39 -->
                                        </div>
                                    </a>
                                </div>
                            </nav>
                            <div class="_3GUPV -hkpO" data-reactid="40" style="transform: scaleY(0) translateZ(0px);">
                                <div class="_2Ruh1" data-reactid="41" style="opacity: 0; transform: translateY(-75px) translateZ(-40px);">
                                    <nav class="_3GkHt _3AKLf" data-reactid="42">
                                        <button class="zxDoM undefined" data-reactid="43">
                                            <!-- react-text: 44 -->Activity
                                            <!-- /react-text -->
                                            <!-- react-empty: 45 -->
                                        </button>
                                        <button class="_3UwsA zxDoM" data-reactid="46">
                                            <!-- react-text: 47 -->Invites
                                            <!-- /react-text -->
                                            <!-- react-empty: 48 -->
                                        </button>
                                    </nav>
                                    <div class="_1ese_" data-reactid="49">
                                        <div data-reactid="50">
                                            <ul class="_3XxoM" data-reactid="51"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_BrFp" data-reactid="52"></div>
                        </header>
                        @yield('content')
                    </div>
                </div>
            </div>
            @if(!empty($view) && $view == 'onboard')
                <div class="ZZJJ0 _3Xaa0" data-bind="css: { active: showJoinPopup }">
                    <div class="_1Vurz" style="opacity: 0.6;"></div>
                    <div class="_2XWUY" style="opacity: 1; transform: translateY(0px) translateZ(0px);">
                        <div class="_3nouD" style="opacity: 1;">
                            <h4 class="_2zEgR">You haven't joined any fanbases</h4>
                            <p class="_38yXT _2emNd">Join at least one fanbase to get started</p>
                            <button class="zb4iR _1geYT" data-bind="click: ok">
                                Ok
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<script src="/js/vendors.js"></script>
<script src="/js/af.js"></script>
<script>
    window.serverPerf = {
        router: 418,
        render: 43
    };
</script>
@yield('js')
</body>
</html>