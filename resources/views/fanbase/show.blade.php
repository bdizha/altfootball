@extends('layouts.app')

@section('meta')
    @include('includes.meta', $fanbase->getMeta())
@endsection

@section('content')
    <div class="sc-jQMNup gOlyXF">
        <div class="sc-bJHhxl kIfuXn">
            <header class="sc-cbMPqi jmwvyD" style="margin-top: 0px; opacity: 1;">
                <div class="sc-jtHxuu kMymTC _1KXFt">
                    <div class="_23p6h">
                        <img src="{{ $fanbase->cover_x }}" role="presentation" alt="" class="_2PoG-" width="1444" height="455" style="opacity: 1;">
                    </div>
                </div>
                <div class="sc-gMcBNU bVsJja">
                    <div class="sc-dYzWWc fZBlIg">
                        <div class="sc-iLVFha efawYm _1KXFt">
                            <div class="_23p6h">
                                <img src="{{ $fanbase->thumb_x }}" role="presentation" alt="" class="_2PoG-" width="165" height="165" style="opacity: 1;">
                            </div>
                        </div>
                    </div>
                    <h1 class="sc-cgzHhG jMqtqW">{{ $fanbase->name }}</h1>
                </div>
            </header>
            <div class="sc-TuwoP ciGfof">
                <div class="sc-cFlXAS bWrukB sc-kafWEX fZwvCP" style="display: block;">
                    <div class="sc-feJyhm keidcv" style="position: sticky; top: 123px; bottom: auto; height: auto; justify-content: flex-start;">
                        <div class="sc-iELTvK dWbSTj">
                            <section class="sc-hkbPbT bcrVrW">
                                <div>
                                    <h1 class="sc-lnrBVv lewgv">{{ $fanbase->name }}<a class="sc-eSePXt kgnzRz" href="/base-details/EuuMxnFdSN-CyMS3eTkC2w"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"><g fill="none" fill-rule="evenodd"><rect width="21.5" height="21.5" x=".75" y=".75" stroke="#1D1E20" stroke-width="1.5" rx="10.75"></rect><path fill="#1D1E20" d="M12.59 7.32c-.6 0-.9-.3-.9-.87 0-.34.08-.62.26-.82.17-.2.4-.31.7-.31.6 0 .9.3.9.88 0 .37-.1.65-.27.84a.9.9 0 0 1-.7.28zm-2.6 2.27l.14-.67H13l-1.09 5.14a9.27 9.27 0 0 0-.24 1.78c0 .54.18.8.53.8.31 0 .7-.13 1.15-.4l.3.46c-.75.64-1.47.96-2.17.96-.4 0-.72-.15-.96-.43a1.61 1.61 0 0 1-.37-1.09c0-.48.12-1.32.36-2.52l.62-2.93c.03-.17.05-.31.05-.42 0-.45-.33-.68-.98-.68H10z"></path></g></svg></a></h1>
                                    <p
                                            class="sc-OxbzP huGLRC">{{ $fanbase->description }}</p>
                                    <div class="sc-bYnzgO lbyJvT"><button class="sc-cPuPxo bxQWln sc-dphlzf cKoGdg" eventid="Click" data-tracking="base - leave">Joined</button>
                                        <div class="sc-fvLVrH duDvju sc-fCPvlr hGwjDc"><span class="sc-gAmQfK hKaISF"><a class="" href="/u/{{ $fanbase->user->slug }}/members"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" class="sc-cCVOAp eVkXGE"><path fill-rule="evenodd" d="M6.7 1.5C8 1.5 9 2.5 9 4c0 1.3-1 2.4-2.3 2.4-1.4 0-2.5-1-2.5-2.4s1-2.5 2.5-2.5M9.2 7c1-.7 1.4-1.8 1.4-3 0-2.2-1.8-4-4-4-2 0-4 1.8-4 4 0 1.2.7 2.3 1.5 3-2 1-3.5 3-4 5.8 0 .4.2.8.6.8.4 0 .8-.2 1-.6.4-3 2.6-5 5-5 2.5 0 4.7 2 5.2 5 0 .4.4.7.8.7.5 0 .8-.5.7-1-.5-2.6-2-4.7-4-5.7m4.8 0c.6-.8 1-1.7 1-2.7 0-2.2-1.8-4-4-4-.5 0-.8.4-.8.8 0 .5.3 1 .8 1 1.3 0 2.4 1 2.4 2.3 0 1-.4 1.7-1.2 2.2-.4.2-.5.6-.3 1 .3.2.5.4.8.4 1.8.5 3.3 2.4 3.7 4.6 0 .4.4.6.7.6h.2c.4 0 .7-.4.6-.8C17.5 10 16 8 14.2 7"></path></svg>129.2K</a></span>
                                            <span
                                                    class="sc-gAmQfK ffPLas"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15" class="sc-cfWELz eqSeMm"><g fill="none" fill-rule="evenodd"><path fill="#FFF" d="M11.31 7.16a2.4 2.4 0 1 1-4.78 0 2.4 2.4 0 0 1 4.78 0"></path><path fill="#000" d="M8.92 5.27a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 0 0 0-3.8m0 4.79a2.9 2.9 0 1 1 0-5.8 2.9 2.9 0 0 1 0 5.8"></path><path fill="#000" d="M1.6 7.36c1.98 3.43 4.69 5.47 7.32 5.47s5.34-2.04 7.3-5.47c-2.08-3.68-4.8-5.86-7.3-5.86S3.7 3.68 1.6 7.36m7.3 6.97c-3.27 0-6.57-2.47-8.82-6.61A.75.75 0 0 1 .1 7c2.38-4.38 5.68-7 8.83-7 3.14 0 6.44 2.62 8.83 7 .12.23.12.5 0 .72-2.25 4.14-5.55 6.6-8.83 6.6"></path></g></svg>475.5K</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="sc-iHhHRJ hLRQek">
                                <section class="sc-dXfzlN glYIFw">
                                    <div class="sc-isBZXS cvlUzR">
                                        <div class="sc-dKEPtC cmkzdN sc-frDJqD hfyEYu">
                                            <div class="sc-kvZOFW jomFZs"><span class="sc-hqyNC dBwCTy">base</span><span class="sc-jbKcbu fAtzSi">leader</span></div>
                                        </div>
                                        <a class="sc-aewfc bCHmiu" href="/u/KSEWWC_3S4W-FIi9USIRTw">
                                            <div class="sc-iIHjhz cxzHMn sc-jTzLTM kGoDGv">
                                                <div class="sc-fjdhpX dAAOAM">
                                                    <div class="_38L6D" style="padding-bottom: 100%;"><img alt="" role="presentation" src="https://graph.facebook.com/10211548695939804/picture?type=square&amp;width=200&amp;height=200" class="_214e9 b00q8" width="60" height="60"></div>
                                                </div>
                                            </div><span class="sc-jHZirH glCfih">Maximilian Funk</span></a>
                                    </div>
                                </section>
                                <section class="sc-dXfzlN glYIFw">
                                    <div class="sc-fCPvlr hGwjDc"><span class="sc-gAmQfK hKaISF"><a class="" href="/u/{{ $fanbase->user->slug }}/members"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" class="sc-cCVOAp eVkXGE"><path fill-rule="evenodd" d="M6.7 1.5C8 1.5 9 2.5 9 4c0 1.3-1 2.4-2.3 2.4-1.4 0-2.5-1-2.5-2.4s1-2.5 2.5-2.5M9.2 7c1-.7 1.4-1.8 1.4-3 0-2.2-1.8-4-4-4-2 0-4 1.8-4 4 0 1.2.7 2.3 1.5 3-2 1-3.5 3-4 5.8 0 .4.2.8.6.8.4 0 .8-.2 1-.6.4-3 2.6-5 5-5 2.5 0 4.7 2 5.2 5 0 .4.4.7.8.7.5 0 .8-.5.7-1-.5-2.6-2-4.7-4-5.7m4.8 0c.6-.8 1-1.7 1-2.7 0-2.2-1.8-4-4-4-.5 0-.8.4-.8.8 0 .5.3 1 .8 1 1.3 0 2.4 1 2.4 2.3 0 1-.4 1.7-1.2 2.2-.4.2-.5.6-.3 1 .3.2.5.4.8.4 1.8.5 3.3 2.4 3.7 4.6 0 .4.4.6.7.6h.2c.4 0 .7-.4.6-.8C17.5 10 16 8 14.2 7"></path></svg>129.2K</a></span>
                                        <span
                                                class="sc-gAmQfK ffPLas"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15" class="sc-cfWELz eqSeMm"><g fill="none" fill-rule="evenodd"><path fill="#FFF" d="M11.31 7.16a2.4 2.4 0 1 1-4.78 0 2.4 2.4 0 0 1 4.78 0"></path><path fill="#000" d="M8.92 5.27a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 0 0 0-3.8m0 4.79a2.9 2.9 0 1 1 0-5.8 2.9 2.9 0 0 1 0 5.8"></path><path fill="#000" d="M1.6 7.36c1.98 3.43 4.69 5.47 7.32 5.47s5.34-2.04 7.3-5.47c-2.08-3.68-4.8-5.86-7.3-5.86S3.7 3.68 1.6 7.36m7.3 6.97c-3.27 0-6.57-2.47-8.82-6.61A.75.75 0 0 1 .1 7c2.38-4.38 5.68-7 8.83-7 3.14 0 6.44 2.62 8.83 7 .12.23.12.5 0 .72-2.25 4.14-5.55 6.6-8.83 6.6"></path></g></svg>475.5K</span>
                                    </div>
                                </section>
                                <section class="sc-dXfzlN glYIFw">
                                    <div class="sc-dvpmds jHgdae">
                                        <h3 class="sc-dwztqd jmBYQQ"><span class="sc-fgrSAo HltCu">Tribe</span>Chat<a class="sc-jHXLhC cieSf" href="/u/{{ $fanbase->user->slug }}/chat">+ Go to Chat</a></h3>
                                        <a class="sc-bOCYYb jmYvBH" href="/u/{{ $fanbase->user->slug }}/chat">
                                            <ul class="sc-gisBJw hbNTXW"></ul>
                                            <ul class="sc-cNQqM llpnUz"></ul>
                                        </a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc-izvnbC ZnxSI">
                    <div class="sc-kAdXeD iDXYFq">
                        <nav class="sc-hCaUpS gsjplB">
                            <div class="sc-bSbAYC SQrrC">
                                <div class="sc-dHIava ewTGPx">
                                    <div class="sc-jhaWeW fKnQYk _1KXFt">
                                        <div class="_23p6h"><img src="https://drivetribe.imgix.net/erhM64oNT6CJIgvHi_9axg?w=100&amp;h=100&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges" role="presentation" alt="" class="_2PoG-" width="35" height="35" style="opacity: 1;"></div>
                                    </div>
                                </div>
                                <h4 class="sc-sPYgB wnKAA">{{ $fanbase->name }}</h4>
                            </div>
                            <div class="sc-guztPN XmkOi"><a class="sc-koErNt fiUhFF" href="/u/{{ $fanbase->user->slug }}">Stories</a><a class="sc-gJqsIT hXgfZV" href="/u/{{ $fanbase->user->slug }}/chat">Chat</a><button class="sc-cNnxps kxvlui"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="3" viewBox="0 0 18 3"><path fill="#666" fill-rule="evenodd" d="M2.88 1.44a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0zm7.2 0a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0zm7.2 0a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z"></path></svg></button></div>
                        </nav>
                    </div>
                    <div class="sc-dPPMrM bJPofi">
                        <posts params="page: 0, fanbase: '', show_callback: openItem"></posts>
                        <div></div>
                        <div class="sc-geAPOV jnThVp">
                            <div class="sc-bJTOcE esqHzl"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" class="sc-PLyBE bXNvfK"><g fill="none" fill-rule="evenodd" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round"><path stroke-width="1.5" d="M1.65 9.07l-.58 3.78 3.78-.58 8.32-8.32-3.2-3.2L8.6 2.12z"></path><path d="M11.1 5.67L8.09 2.64M5.3 11.49L2.25 8.46"></path></g></svg></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <fanbase-form params="{{ $toJson }}"></fanbase-form>
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            {{--window._USER = {!! $user !!};--}}
        });
    </script>
@endsection