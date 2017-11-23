@extends('layouts.app')

@section('title', 'Altfootball')

@section('meta')
    @include('includes.meta', $post->getMeta())
@endsection

@section('content')
    <div class="_W78U">
        <?php $tacklesCount = $post->comments->count() ?>
        <?php $dribblesCount = $post->dribbles->count() ?>
        <?php $postId = $post->id ?>
        <article>
            <div class="j-W_D _1iE2V">
                <div class="_1Y7kL">
                    <div class="_1veAI _1iE2V">
                        <div class="_1-sfe _29LD-">
                            <h1 class="_12F3w iAiuJ">{{ $post->title }}</h1>
                        </div>
                    </div>
                    <div class="vowHC _1KXFt">
                        <div class="_23p6h">
                            <picture>
                                <source
                                        media="(min-width: 1000px)"
                                        srcset="https://altfootball.imgix.net{{ $post->image }}?w=1236&h=695&fit=crop&crop=faces&q=100">
                                <source
                                        media="(min-width: 900px)"
                                        srcset="https://altfootball.imgix.net{{ $post->image }}?w=1000&h=695&fit=crop&crop=faces&q=100">
                                <source
                                        media="(min-width: 650px)"
                                        srcset="https://altfootball.imgix.net{{ $post->image }}?w=900&h=580&fit=crop&crop=faces&q=100">
                                <source
                                        media="(min-width: 465px)"
                                        srcset="https://altfootball.imgix.net{{ $post->image }}?w=650&h=480&fit=crop&crop=faces&q=100">
                                <source
                                        media="(min-width: 260px)"
                                        srcset="https://altfootball.imgix.net{{ $post->image }}?w=360&h=240&fit=crop&crop=faces&q=100">
                                <img
                                        src="https://altfootball.imgix.net{{ $post->image }}?w=1000&h=695&fit=crop&crop=faces&q=100"
                                        alt="a cute kitten">
                            </picture>
                        </div>
                    </div>
                </div>

                <div class="_1Q_Pu">
                    <div class="_1Fx1P _1iE2V _1Ov3j">
                        <div class="_1-sfe CDTi0">
                            <div class="_1l_wG _29Okg">
                                @include('post.actions')
                            </div>
                            <div class="_3o2ca">
                                <a class="_2Q0fU p1Di1" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($post->share_url) }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                        <path fill="#FFF" fill-rule="evenodd"
                                              d="M4.16 0c1.83 0 2.6.22 2.6.22l-.37 1.84s-.6-.15-1.16-.15c-.57 0-1.07.17-1.07.66v1.4h2.3l-.15 1.8H4.16V12H1.45V5.76H0v-1.8h1.45v-1.2c0-.53.01-1.35.46-1.86C2.4.37 3.04 0 4.16 0"></path>
                                    </svg>
                                </a>
                                <a class="_2Q0fU _3cqrr" href="https://twitter.com/intent/tweet?url={{ urlencode($post->share_url) }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                                        <path fill="#FFF" fill-rule="evenodd"
                                              d="M10.24 0c.83 0 1.58.34 2.13.9h.05c.4 0 1.2-.1 1.98-.66 0 0 .04.64-1.23 1.63 0 0 1.18-.1 1.66-.45 0 0-.11.41-1.54 1.7 0 0 .48 7.01-6.87 8.73 0 0-.72.15-1.75.15A7.78 7.78 0 0 1 0 10.61s.37.07.93.07c.96 0 2.47-.2 3.49-1.32-.08 0-2.07-.02-2.7-2.07 0 0 .29.06.62.06.21 0 .43-.03.61-.1 0 0-2.32-.49-2.28-3.02 0 0 .53.39 1.05.39l.14-.01s-2.09-1.78-.8-4c0 0 2.65 3.13 5.99 3.13l.3-.01A2.99 2.99 0 0 1 10.25 0"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_3BzB6 _1Fx1P _1iE2V _3wPPl">
                    <div>
                        <div class="_1YCPS cB9oA _2kPxQ">
                            <a class="_2aEHr" href="/f/{{ $post->fanbase->slug }}">
                                <div class="_1Gyo9 HkQZ5" data-stamp="{{ $post->fanbase->stamp }}"></div>
                            </a>
                            <h2 class="_1BxZT">{{ $post->title }}</h2>
                            @include('post.actions')
                            <span class="_1NHvQ _2DoBA">
                                <a href="/u/{{ $post->user->slug }}">
                                    {{ $post->user->name }}
                                </a>
                                <span>
                                    <span>
                                        shared in <br>
                                    </span>
                                    <a class="_1XNRF"
                                       href="/f/{{ $post->fanbase->slug }}">
                                                {{ $post->fanbase->name }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18" class="_1z7Hy">
                                            <g fill="none" fill-rule="evenodd">
                                                <path fill="#33BB66" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                                <path fill="#FFF"
                                                      d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </span>
                            </span>
                            <div class="_3VduI">
                                <div class="_2xDj1 _3o2ca">
                                    <button class="_2Q0fU p1Di1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                            <path fill="#FFF" fill-rule="evenodd" d="M4.16 0c1.83 0 2.6.22 2.6.22l-.37 1.84s-.6-.15-1.16-.15c-.57 0-1.07.17-1.07.66v1.4h2.3l-.15 1.8H4.16V12H1.45V5.76H0v-1.8h1.45v-1.2c0-.53.01-1.35.46-1.86C2.4.37 3.04 0 4.16 0"></path>
                                        </svg>
                                    </button>
                                    <button class="_2Q0fU _3cqrr">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                                            <path fill="#FFF" fill-rule="evenodd" d="M10.24 0c.83 0 1.58.34 2.13.9h.05c.4 0 1.2-.1 1.98-.66 0 0 .04.64-1.23 1.63 0 0 1.18-.1 1.66-.45 0 0-.11.41-1.54 1.7 0 0 .48 7.01-6.87 8.73 0 0-.72.15-1.75.15A7.78 7.78 0 0 1 0 10.61s.37.07.93.07c.96 0 2.47-.2 3.49-1.32-.08 0-2.07-.02-2.7-2.07 0 0 .29.06.62.06.21 0 .43-.03.61-.1 0 0-2.32-.49-2.28-3.02 0 0 .53.39 1.05.39l.14-.01s-2.09-1.78-.8-4c0 0 2.65 3.13 5.99 3.13l.3-.01A2.99 2.99 0 0 1 10.25 0"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_1Q_Pu">
                        <p class="_25BgE">
                            <span><span>{{ $post->summary }}</span></span>
                             @if(!empty($post->credit))
                            <span class="_2cAm4"><span>CREDIT:</span> <a target="_blank" href="{{ $post->external_url }}">{{ $post->url_x }}</a></span>
                            @endif
                        </p>
                        <div class="_3tkuf">
                            <div class="_1drt2 _9fE1R NasRD">
                                <div>
                                    <h2>LIKE {{ $post->fanbase->name }}?</h2>
                                </div>
                                <div class="_3OD4J _1yV5F _1MC-v _1h78h">
                                    JOIN ALTFOOTBALL
                                </div>
                            </div>
                        </div>
                        {!! $post->getHtmlContent() !!}
                    </div>
                    <div class="_3tkuf _23YI">
                        <div class="_1drt2 _9fE1R NasRD">
                            <div>
                                <h2>Never miss a post</h2>
                            </div>
                            <div class="_3OD4J _1yV5F _1MC-v _1h78h">
                               Join {{ $post->fanbase->name }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_2xoE4 NasRD _3QYjF">
                    <button class="_1Zj5n _1cG70 _2YLzg">
                        <svg width="10" height="10">
                            <path fill="none" stroke="rgba(103, 143, 185, 0.85)" stroke-linecap="square" stroke-width="2"
                                  d="M1.64 1.6L8.3 8.26M8.16 1.6L1.51 8.26"></path>
                        </svg>
                    </button>
                    <div class="_2pnaG NasRD">
                        <h2>Like this?</h2>
                        <div class="_3Cj79 _1geYT">Get more</div>
                    </div>
                </div>
            </div>
            <div class="dqbp5">
                @include('post.meta')
            </div>
        </article>
        <div id="tackles" class="jwlFt _1zwKC">
            <div class="_1gLAu _1iE2V">
                <div class="_1-sfe">
                    <comments params='comments: {!! $comments !!}, type_id: {{ $postId }}, user: {!! $user !!}, level: 0, root: $root, is_list: false'></comments>
                </div>
            </div>
        </div>
        <div class="_11QMn">
            <div class="_5M-3F">
                <div>
                    <div class="_2H69I">YOU MIGHT ALSO LIKE_</div>
                    <div class="_9T4R2">
                        @foreach($siblingPosts as $post)
                            <div class="_1XEbE">
                                <div class="_1DRo">
                                    <div class="_38L6D" style="padding-bottom: 50%;">
                                        <img alt="{{ $post->title }}" role="presentation" src="{{ $post->small_x }}" class="_214e9 b00q8">
                                    </div>
                                </div>
                                <div class="_1wjeD">
                                    <div class="grsTy">{{ $post->title }}</div>
                                </div>
                                <a class="ZE8ka"
                                   href="/p/{{ $post->slug }}"></a>
                                <div class="zFsq3 _1iE2V _2ilqp">
                                    <a class="" href="/u/{{ $post->user->slug }}">
                                        <div class="_25jNX _3Y-3q" style="width: 40px; height: 40px;">
                                            <div class="N3r_f">
                                                <div class="_38L6D" style="padding-bottom: 100%;">
                                                    <img alt="{{ $post->user->name  }}" role="presentation" src="{{ $post->user->thumb_x }}" class="_214e9 b00q8">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="_2bDpH">
                                        <p class="_2nWjU _31dto KTIgi">
                                            <a class="_2XyXQ" href="/u/{{ $post->user->slug }}">
                                                {{ $post->user->name }}
                                            </a>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 18 18"
                                                 class="_1z7Hy _1NCGm RyyhO">
                                                <g fill="none" fill-rule="evenodd">
                                                    <path fill="#33BB66" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                                    <path fill="#FFF"
                                                          d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                                </g>
                                            </svg>
                                        </p>
                                        <div class="_1HPk2">
                                            <a class="_25LcG" href="/f/{{ $post->fanbase->slug }}">
                                                {{ $post->fanbase->name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <div class="_2H69I">EXPLORE MORE FANBASES_</div>
                    <div class="_1z1Ga">
                        @foreach($fanbases as $fanbase)
                            <a class="_1mWot _2uakq _2cP6X" href="/f/{{ $fanbase->slug }}">
                                <div class="ZD12l _1iE2V _16e0f">
                                    <div class="_1KG3g">
                                        <div class="gzgzI">{{ $fanbase->stamp }}</div>
                                    </div>
                                    <div class="_2lssz">
                                        <div class="_38L6D" style="padding-bottom: 100%;">
                                            <img alt="" role="presentation" src="{{ $fanbase->thumb_x }}" class="_214e9 b00q8" width="200" height="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="_1KQuz _1-YRL">
                                    <h3 class="_2o06m _1oBl0">
                                    <span class="_1QEWe">{{ $fanbase->name }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 18 18" class="_1z7Hy aX-51"><g fill="none"
                                                                                         fill-rule="evenodd"><path
                                                        fill="#33BB66" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path
                                                        fill="#FFF"
                                                        d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg></span>
                                    </h3>
                                    <div class="_1TvPX">
                                        <div class="_1Ct87">
                                            <span>
                                                <span class="CrE3q">{{ rand(10, 100) }}K</span>
                                                <span>Dribbles</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('templates.dribbles')
        @include('templates.comments')
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            window._USER = {!! $user !!};
            console.log(">>>>>> ......");
            console.log(window._USER);
        });
    </script>
@endsection