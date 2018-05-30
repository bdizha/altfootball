@extends('layouts.app')

@section('meta')
    @include('includes.meta', $user->getMeta())
@endsection

@section('content')
    <div class="sc-jQMNup gOlyXF">
        <div class="sc-bJHhxl kIfuXn">
            <div class="sc-TuwoP ciGfof">
                <div class="sc-cFlXAS bWrukB sc-kafWEX fZwvCP" style="display: block;">
                    <div class="sc-feJyhm keidcv"
                         style="position: sticky; top: 121px; bottom: auto; height: auto; justify-content: flex-start;">
                        <div class="sc-iELTvK dWbSTj">
                            <div class="sc-gMcBNU bVsJja">
                                <div class="sc-dYzWWc fZBlIg">
                                    <div class="sc-iLVFha efawYm _1KXFt">
                                        <div class="_23p6h">
                                            <img src="{{ $user->thumb_x }}" role="presentation" alt="" class="_2PoG-"
                                                 width="165"
                                                 height="165" style="opacity: 1;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-iHhHRJ hLRQek">
                                <section class="sc-dXfzlN glYIFw">
                                    <div class="sc-isBZXS cvlUzR">
                                        <div class="sc-cJSrbW">
                                            <div class="sc-ksYbfQ dbOCGf" data-reactid="106">
                                                <span class="sc-frDJqD lXCHc"
                                                      data-reactid="108">{{ $user->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="sc-dXfzlN glYIFw">
                                    <div class="sc-isBZXS cvlUzR">
                                        <div class="_YU783">
                                            Bio
                                        </div>
                                        <div class="_76TYH">
                                            @if(empty($user->bio))
                                                {{ "A huge football enthusiast. Lively discussions and some occasional banter..." }}
                                            @endif
                                            {{ $user->bio }}
                                        </div>
                                    </div>
                                </section>
                                <section class="sc-dXfzlN glYIFw">
                                    <div class="sc-fCPvlr hGwjDc">
                                        <span class="sc-gAmQfK hKaISF">
                                            <a class="" href="/u/{{ $user->slug }}/members">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                     viewBox="0 0 18 14" class="sc-cCVOAp eVkXGE">
                                                    <path fill="rgba(125, 160, 177, 0.85)" fill-rule="evenodd"
                                                          d="M6.7 1.5C8 1.5 9 2.5 9 4c0 1.3-1 2.4-2.3 2.4-1.4 0-2.5-1-2.5-2.4s1-2.5 2.5-2.5M9.2 7c1-.7 1.4-1.8 1.4-3 0-2.2-1.8-4-4-4-2 0-4 1.8-4 4 0 1.2.7 2.3 1.5 3-2 1-3.5 3-4 5.8 0 .4.2.8.6.8.4 0 .8-.2 1-.6.4-3 2.6-5 5-5 2.5 0 4.7 2 5.2 5 0 .4.4.7.8.7.5 0 .8-.5.7-1-.5-2.6-2-4.7-4-5.7m4.8 0c.6-.8 1-1.7 1-2.7 0-2.2-1.8-4-4-4-.5 0-.8.4-.8.8 0 .5.3 1 .8 1 1.3 0 2.4 1 2.4 2.3 0 1-.4 1.7-1.2 2.2-.4.2-.5.6-.3 1 .3.2.5.4.8.4 1.8.5 3.3 2.4 3.7 4.6 0 .4.4.6.7.6h.2c.4 0 .7-.4.6-.8C17.5 10 16 8 14.2 7"></path>
                                                </svg>
                                                129.2K
                                            </a>
                                        </span>
                                        <span class="sc-gAmQfK hKaISF">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                 viewBox="0 0 18 15" class="sc-cfWELz eVkXGE">
                                                <g fill="none" fill-rule="evenodd">
                                                    <path fill="#FFF"
                                                          d="M11.31 7.16a2.4 2.4 0 1 1-4.78 0 2.4 2.4 0 0 1 4.78 0"></path>
                                                    <path fill="rgba(125, 160, 177, 0.85)"
                                                          d="M8.92 5.27a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 0 0 0-3.8m0 4.79a2.9 2.9 0 1 1 0-5.8 2.9 2.9 0 0 1 0 5.8"></path>
                                                    <path fill="rgba(125, 160, 177, 0.85)"
                                                          d="M1.6 7.36c1.98 3.43 4.69 5.47 7.32 5.47s5.34-2.04 7.3-5.47c-2.08-3.68-4.8-5.86-7.3-5.86S3.7 3.68 1.6 7.36m7.3 6.97c-3.27 0-6.57-2.47-8.82-6.61A.75.75 0 0 1 .1 7c2.38-4.38 5.68-7 8.83-7 3.14 0 6.44 2.62 8.83 7 .12.23.12.5 0 .72-2.25 4.14-5.55 6.6-8.83 6.6"></path>
                                                </g>
                                            </svg>
                                            45.5K
                                        </span>
                                        <span class="sc-gAmQfK hKaISF ffPLas">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1"
                                                 width="24px" height="24px" class="sc-cfWELz eVkXGE">
                                                <g style=" fill:rgba(125, 160, 177, 0.85);">
                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                    <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"></path>
                                                </g>
                                            </svg>
                                            775.5K
                                        </span>
                                    </div>
                                </section>
                                <section class="sc-dXfzlN glYIFw">
                                    <div class="sc-dvpmds jHgdae">
                                        <div class="sc-cJSrbW hDKkOF">
                                            <div class="sc-ksYbfQ dbOCGf" data-reactid="106">
                                                <span class="sc-hmzhuo gqKiYI" data-reactid="107">Fanbases</span>
                                            </div>
                                        </div>
                                        <div class="_1ht8_">
                                            <div class="_1ht8_">
                                                <div class="_3FaZ4">
                                                    <div class="owl-carousel owl-five owl-theme">
                                                        @foreach($user->fanbases as $k => $base)
                                                            @include('fanbase.base')
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc-izvnbC ZnxSI">
                    <nav class="sc-hCaUpS gsjplB">
                        <div class="sc-bSbAYC SQrrC">
                            <div class="sc-dHIava ewTGPx">
                                <div class="sc-jhaWeW fKnQYk _1KXFt">
                                    <div class="_23p6h">
                                        <img src="https://drivetribe.imgix.net/erhM64oNT6CJIgvHi_9axg?w=100&amp;h=100&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges"
                                             role="presentation" alt="" class="_2PoG-" width="35" height="35"
                                             style="opacity: 1;">
                                    </div>
                                </div>
                            </div>
                            <h4 class="sc-sPYgB wnKAA">{{ $user->name }}</h4>
                        </div>
                        <div class="sc-guztPN XmkOi">
                            <a class="sc-koErNt fiUhFF" href="/u/{{ $user->slug }}">Stories</a>
                            <button class="sc-cNnxps kxvlui">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="3" viewBox="0 0 18 3">
                                    <path fill="#666" fill-rule="evenodd"
                                          d="M2.88 1.44a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0zm7.2 0a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0zm7.2 0a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </nav>
                    <div class="sc-dPPMrM bJPofi">
                        <div class="sc-rBLzX SsCsq">
                            <nav class="_sc-imABML hnPypn">
                                <button class="zxDoM undefined">
                                    Stories
                                </button>
                                <button class="_3UwsA zxDoM">
                                    Chat
                                </button>
                            </nav>
                            <div class="sc-itybZL QJDdz">
                                <div class="sc-dTdPqK hQzEkt">
                                    <posts params="page: 0, fanbase: {{ $user->fanbase_id }}, show_callback: openItem"></posts>
                                </div>
                            </div>
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