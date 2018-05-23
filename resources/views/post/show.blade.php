@extends('layouts.app', ['class'=> '_3RTYI'])

@section('title', 'Altfootball')

@section('meta')
    @include('includes.meta', $post->getMeta())
@endsection

@section('content')
    <div class="sc-jQMNup gOlyXF">
        <div class="sc-bJHhxl kIfuXn">
            <div class="sc-TuwoP ciGfof">
                <div class="sc-cFlXAS bWrukB sc-kafWEX fZwvCP" style="display: block;">
                    <div class="sc-feJyhm keidcv"
                         style="position: sticky; top: 123px; bottom: auto; height: auto; justify-content: flex-start;">
                        <div class="sc-iELTvK dWbSTj">
                            <div class="sc-iHhHRJ hLRQek">
                                <div class="_TY876">
                                    <div class="_2H69I">UP NEXT_</div>
                                    @include("post.hot")
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc-izvnbC ZnxSI">
                    <div class="sc-dPPMrM bJPofi">
                        <div class="sc-rBLzX SsCsq _23FRT">
                            <?php $tacklesCount = $post->comments->count() ?>
                            <?php $dribblesCount = $post->dribbles->count() ?>
                            <?php $postId = $post->id ?>
                            <div class="_3BzB6 _1Fx1P _1iE2V _3wPPl">
                                <div class="_1Q_Pu">
                                    <div class="_1Y7kL">
                                        <div class="_1veAI _1iE2V">
                                            <div class="_1-sfe _29LD-">
                                                <h1 class="_12F3w iAiuJ">{{ $post->title }}</h1>
                                                @include('post.user')
                                                <div class="_23p6h">
                                                    <img src="http://altfootball.com/images/{{ $post->image }}"
                                                         alt="{{ $post->title }}"/>
                                                </div>
                                                <div class="_76TYH">
                                                    <div class="_1Fx1P _1iE2V _1Ov3j">
                                                        <div class="_1-sfe CDTi0">
                                                            <div class="imgSwy">
                                                                <div class="sc-lkqHmb jPrmng">
                                                                    @include('post.actions')
                                                                </div>
                                                            </div>
                                                            <div class="_89HJT">
                                                                {!! $post->summary !!}
                                                            </div>
                                                            <div class="_3o2ca">
                                                                <a class="_2Q0fU p1Di1"
                                                                   href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($post->share_url) }}"
                                                                   target="_blank">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="7"
                                                                         height="12"
                                                                         viewBox="0 0 7 12">
                                                                        <path fill="rgba(255, 255, 255, 1)"
                                                                              fill-rule="evenodd"
                                                                              d="M4.16 0c1.83 0 2.6.22 2.6.22l-.37 1.84s-.6-.15-1.16-.15c-.57 0-1.07.17-1.07.66v1.4h2.3l-.15 1.8H4.16V12H1.45V5.76H0v-1.8h1.45v-1.2c0-.53.01-1.35.46-1.86C2.4.37 3.04 0 4.16 0"></path>
                                                                    </svg>
                                                                </a>
                                                                <a class="_2Q0fU _3cqrr"
                                                                   href="https://twitter.com/intent/tweet?url={{ urlencode($post->share_url) }}"
                                                                   target="_blank">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                         height="12"
                                                                         viewBox="0 0 15 12">
                                                                        <path fill="rgba(255, 255, 255, 1)"
                                                                              fill-rule="evenodd"
                                                                              d="M10.24 0c.83 0 1.58.34 2.13.9h.05c.4 0 1.2-.1 1.98-.66 0 0 .04.64-1.23 1.63 0 0 1.18-.1 1.66-.45 0 0-.11.41-1.54 1.7 0 0 .48 7.01-6.87 8.73 0 0-.72.15-1.75.15A7.78 7.78 0 0 1 0 10.61s.37.07.93.07c.96 0 2.47-.2 3.49-1.32-.08 0-2.07-.02-2.7-2.07 0 0 .29.06.62.06.21 0 .43-.03.61-.1 0 0-2.32-.49-2.28-3.02 0 0 .53.39 1.05.39l.14-.01s-2.09-1.78-.8-4c0 0 2.65 3.13 5.99 3.13l.3-.01A2.99 2.99 0 0 1 10.25 0"></path>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_67FRT">
                                        <div class="_345GT">
                                            {!! $post->getHtmlContent() !!}
                                        </div>
                                        <div class="_3tkuf _23YI">
                                            <div class="_1drt2 _9fE1R NasRD">
                                                <div class="_TY894">
                                                    <h2>CREDIT</h2>
                                                </div>
                                                <a class="_3OD4J _1yV5F _1MC-v _1h78h" target="_blank"
                                                   href="{{ $post->external_url }}">{{ $post->url_x }}</a>
                                            </div>
                                        </div>
                                        <div id="tackles" class="jwlFt _1zwKC">
                                            <div class="_1gLAu _1iE2V">
                                                <div class="_1-sfe">
                                                    <comments
                                                            params='comments: {!! $comments !!}, type_id: {{ $postId }}, user: {!! $user !!}, level: 0, root: $root, is_list: false'></comments>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_2H69I">FROM THIS FANBASE_</div>
                            <div class="_9T4R2">
                                <div class="owl-carousel owl-five owl-theme">
                                    @include("post.siblings")
                                </div>
                            </div>
                            <div class="_2H69I">EXPLORE MORE FANBASES_</div>
                            <div class="VDPbh">
                                <div class="_1fZBx">
                                    <div class="owl-carousel owl-five owl-theme">
                                        @foreach($bases as $k => $base)
                                            @include('fanbase.base')
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            window._USER = {!! $user !!};
        });
    </script>
@endsection