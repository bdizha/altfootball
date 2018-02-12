<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="dns-prefetch" href="https://images.altfootball.com">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-navbutton-color" content="#ffffff">
    <meta name="apple-mobile-web-app-title" content="ALTFOOTBALL">
    <link rel="stylesheet" type="text/css" href="/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/af.css') }}">
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
    @yield('js')
    <script type="text/javascript" auth="{{ Auth::guard()->check() ? "true" : "false" }}">
        $(function () {
            window.isAuthenticated = {{ Auth::guard()->check() ? "true" : "false" }};
        });
    </script>
    <script src="{{ elixir('js/af.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body data-bind="css: { active: showOverlay() }">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1932873593602036";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="root">
    <div>
        <div>
            <div>
                <div class="{{ empty($class) ? "_1A3CD" : $class }}" data-bind="css: { active: showOverlay() }">
                    <div class="_1V79j" data-bind="click: closeSettingsForm, css: { active: showOverlay() }"></div>
                    @include('includes.header')
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
                @include('auth.templates.join')
                @include('templates.dribbles')
                @include('templates.comments')
                @include('templates.posts')
                @include('templates.post')
                @include('fanbase.templates.form')
                @include('templates.follow')
                @include('includes.styles')
                @yield('modal')
            </div>
        </div>
    </div>
</div>
</body>
</html>