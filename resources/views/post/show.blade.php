@extends('layouts.app')

@section('title', 'Altfootball')

@section('meta')
    @include('includes.meta', $post->getMeta($url))
@endsection

@section('content')
    <?php $tacklesCount = $post->comments->count() ?>
    <?php $dribblesCount = $post->dribbles->count() ?>
    <?php $postId = $post->id ?>
    <article>
        <div class="j-W_D _1iE2V">
            <div class="_1veAI _1iE2V">
                <div class="_1lNSv _3Vb-u">
                    <a class="_2kQCw" href="/f/{{ $post->fanbase->slug }}">
                        <div class="_1Gyo9 e_0uO" data-initials="{{ $post->fanbase->initials }}"></div>
                        <p class="_3FTXM wcqil">
                            {{ $post->fanbase->name }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                 class="G0duV">
                                <g fill="none" fill-rule="evenodd">
                                    <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                    <path fill="#FFF"
                                          d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                </g>
                            </svg>
                        </p>
                    </a>
                </div>
                <div class="_1-sfe _29LD-">
                    <h1 class="_12F3w iAiuJ">{{ $post->title }}</h1>
                    <div class="dqbp5">
                        <div class="_25jNX _3PwOQ">
                            <div class="N3r_f">
                                <div class="_38L6D" style="padding-bottom: 100%;">
                                    {!! $post->user->resized_image !!}
                                </div>
                            </div>
                        </div>
                        <div class="_1pPnu _2Nd08">
                            <div class="">
                                <span class="_1NHvQ _3Xf-w">
                                    <a class="" href="/u/{{ $post->user->slug }}">
                                        {{ $post->user->nickname }}
                                    </a>
                                    <span>
                                <span>
                            posted in <br></span>
                            <a class="_1XNRF"
                               href="/f/{{ $post->fanbase->slug }}">
                                {{ $post->fanbase->name }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                     class="_1z7Hy">
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                        <path fill="#FFF"
                                              d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                    </g>
                                </svg>
                            </a>
                            </span>
                            </span>
                            </div>
                            <div class="_3qkzJ">
                                <p class="_2B25b"><span class="_2jvdf">{{ $post->published_at }}</span></p>
                                <p class="TATrW">
                                    {{ $post->views }}K Views
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_1Fx1P _1iE2V _1Ov3j">
                <div class="_1-sfe CDTi0">
                    <div class="_1l_wG _29Okg">
                        <a class="_2Oo2A rF2QA" href="/p/{{ $post->slug }}#tackles">
                            <span class="_35FcZ">
                                Tackles
                            </span>
                            <span class="_3HP-Q">
                                ({{ $tacklesCount }})
                            </span>
                        </a>
                        <div class="_8m6WC rF2QA"><span class="_35FcZ">Forward</span></div>
                        <dribbles params='count: {!! $dribblesCount !!}, type_id: {{ $postId }}, has_dribble: {{ $post->has_dribble }}, type: "post"'></dribbles>
                    </div>
                    <div class="_3o2ca">
                        <a class="_2Q0fU p1Di1" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                <path fill="#FFF" fill-rule="evenodd"
                                      d="M4.16 0c1.83 0 2.6.22 2.6.22l-.37 1.84s-.6-.15-1.16-.15c-.57 0-1.07.17-1.07.66v1.4h2.3l-.15 1.8H4.16V12H1.45V5.76H0v-1.8h1.45v-1.2c0-.53.01-1.35.46-1.86C2.4.37 3.04 0 4.16 0"></path>
                            </svg>
                        </a>
                        <a class="_2Q0fU _3cqrr" href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                                <path fill="#FFF" fill-rule="evenodd"
                                      d="M10.24 0c.83 0 1.58.34 2.13.9h.05c.4 0 1.2-.1 1.98-.66 0 0 .04.64-1.23 1.63 0 0 1.18-.1 1.66-.45 0 0-.11.41-1.54 1.7 0 0 .48 7.01-6.87 8.73 0 0-.72.15-1.75.15A7.78 7.78 0 0 1 0 10.61s.37.07.93.07c.96 0 2.47-.2 3.49-1.32-.08 0-2.07-.02-2.7-2.07 0 0 .29.06.62.06.21 0 .43-.03.61-.1 0 0-2.32-.49-2.28-3.02 0 0 .53.39 1.05.39l.14-.01s-2.09-1.78-.8-4c0 0 2.65 3.13 5.99 3.13l.3-.01A2.99 2.99 0 0 1 10.25 0"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="_1Xbrb _9fE1R NasRD">
                    <div class="_1QuY4">
                        <h2>LIKE {{ $post->fanbase->name }}?</h2></div>
                    <div class="_2KK_J _1yV5F _1MC-v _1h78h">
                        JOIN ALTFOOTBALL
                    </div>
                </div>
            </div>
            <div class="_1Y7kL">
                <div class="vowHC _1KXFt">
                    <div class="_23p6h">
                        {!! $post->resized_image !!}
                    </div>
                </div>
                <p class="_2cAm4">CREDIT: <a target="_blank" href="http://{{ $post->credit }}">{{ $post->credit }}</a></p>
            </div>
            <div class="_3BzB6 _1Fx1P _1iE2V _3wPPl">
                <div>
                    <div class="undefined _2-_Re _378qt">
                        <a class="_23nwS" href="/f/{{ $post->fanbase->slug }}">
                            <div class="_1Gyo9 Ofajv" data-initials="{{ $post->fanbase->initials }}"></div>
                        </a>
                        <h2 class="_3mNJn">{{ $post->title }}</h2>
                        <div class="_mHwf _29Okg">
                            <a class="_2Oo2A rF2QA"
                               href="/p/hammond-enjoys-night-out-after-Lag4Ra_iR6WLzgJC0dSaxQ#tackles">
                                <span class="_35FcZ">
                                    TACKLES
                                    <span class="_3HP-Q">
                                         ({{ $tacklesCount }})
                                    </span>
                                </span>
                            </a>
                            <div class="_8m6WC rF2QA"><span class="_35FcZ">Forward</span></div>
                            <button class="_3yFg8 rF2QA">
                                <div class="_1_VaP">
                                    <span class="_35FcZ">Dribbles</span>
                                    <span class="_3HP-Q"> ({{ $dribblesCount }})</span>
                                    <svg width="24" height="23" viewBox="-3 -3 23 24">
                                        <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75L13.5 0zm-.1 1.87l3.1 2.58V8.3L9 14.55 1.5 8.3V4.45l3.1-2.58L9 4.8l4.4-2.93z"
                                              fill="#00AFFF" fill-rule="evenodd" opacity="1" class="outline"></path>
                                        <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75" fill="#00AFFF"
                                              fill-rule="evenodd" opacity="0" class="heart"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                        <div class="_1Sbj_">
                            <button class="mThhK">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20">
                                    <path fill="#00AFFF" fill-rule="evenodd" stroke="#00AFFF" stroke-width=".5"
                                          d="M14.75 12.57c-1.04 0-1.96.49-2.55 1.25l-4.95-2.76a3.23 3.23 0 0 0 0-2.13l4.94-2.76a3.21 3.21 0 1 0-.48-.89L6.77 8.04a3.22 3.22 0 1 0 0 3.9l4.95 2.77a3.2 3.2 0 0 0 3.03 4.3 3.22 3.22 0 0 0 0-6.44zm0-10.56a2.21 2.21 0 1 1 0 4.42 2.21 2.21 0 0 1 0-4.42zM4.22 12.21a2.21 2.21 0 1 1 0-4.43 2.21 2.21 0 0 1 0 4.43zm10.53 5.78a2.21 2.21 0 1 1 0-4.42 2.21 2.21 0 0 1 0 4.42z"></path>
                                </svg>
                            </button>
                            <div class="fHCTs _3o2ca">
                                <a class="_2Q0fU p1Di1" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                        <path fill="#FFF" fill-rule="evenodd"
                                              d="M4.16 0c1.83 0 2.6.22 2.6.22l-.37 1.84s-.6-.15-1.16-.15c-.57 0-1.07.17-1.07.66v1.4h2.3l-.15 1.8H4.16V12H1.45V5.76H0v-1.8h1.45v-1.2c0-.53.01-1.35.46-1.86C2.4.37 3.04 0 4.16 0"></path>
                                    </svg>
                                </a>
                                <a class="_2Q0fU _3cqrr" href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                                        <path fill="#FFF" fill-rule="evenodd"
                                              d="M10.24 0c.83 0 1.58.34 2.13.9h.05c.4 0 1.2-.1 1.98-.66 0 0 .04.64-1.23 1.63 0 0 1.18-.1 1.66-.45 0 0-.11.41-1.54 1.7 0 0 .48 7.01-6.87 8.73 0 0-.72.15-1.75.15A7.78 7.78 0 0 1 0 10.61s.37.07.93.07c.96 0 2.47-.2 3.49-1.32-.08 0-2.07-.02-2.7-2.07 0 0 .29.06.62.06.21 0 .43-.03.61-.1 0 0-2.32-.49-2.28-3.02 0 0 .53.39 1.05.39l.14-.01s-2.09-1.78-.8-4c0 0 2.65 3.13 5.99 3.13l.3-.01A2.99 2.99 0 0 1 10.25 0"></path>
                                    </svg>
                                </a>
                                {{--<button class="_2Q0fU _23g2_">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="18" height="3" viewBox="0 0 18 3">--}}
                                {{--<path fill="#666" fill-rule="evenodd"--}}
                                {{--d="M2.88 1.44a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0zm7.2 0a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0zm7.2 0a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z"></path>--}}
                                {{--</svg>--}}
                                {{--</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_1Q_Pu">
                    <p class="_25BgE">
                        <span><span>{{ $post->summary }}</span></span>
                    </p>
                    {!! $post->getHtmlContent() !!}
                </div>
                <div class="_3VSm9 _3bVUr _2GMT0">
                    <div class="_24kFo">
                        <div class="_3zT4K">TRENDING POSTS_</div>
                        <div class="_3broS">
                            @foreach($trendingPosts as $post)
                                <div class="_2Eh0V _2bbto YgLNn">
                                    <div class="_1XrlP _25JSo">
                                        <a class="_2xn_m _238kJ"
                                           href="/p/{{ $post->slug }}">
                                            <div class="_1w60_">
                                                <div class="_2pUFC _3Xaa0">
                                                    {!! $post->resized_image !!}
                                                </div>
                                            </div>
                                        </a>
                                        <div class="_2fUiv _3lJNV">
                                            <a class="_3H01F _135mL _38OvA" href="/p/{{ $post->slug }}">
                                                {{ $post->title }}
                                            </a>
                                            <div class="_3RbBo">
                                                <a class="" href="/u/{{ $post->user->slug }}">
                                                    <div class="_25jNX _3lGf-">
                                                        <div class="N3r_f">
                                                            <div class="_38L6D" style="padding-bottom: 100%;">
                                                                {!! $post->user->resized_image !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="zv5pR E6O3i">
                                                    <a class="_3f32u _38OvA" href="/u/{{ $post->user->slug }}">
                                                        {{ $post->user->nickname }}
                                                    </a>
                                                    <a class="O0stn _38OvA"
                                                       href="/f/{{ $post->fanbase->slug }}">
                                                        {{ $post->fanbase->name }}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                             viewBox="0 0 18 18" class="_1z7Hy">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path fill="#64c431"
                                                                      d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                                                <path fill="#FFF"
                                                                      d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="_3tkuf">
                        <div class="_1drt2 _9fE1R NasRD">
                            <div>
                                <h2>Never miss a post</h2></div>
                            <div class="_3OD4J _1yV5F _1MC-v _1h78h">
                                Join {{  $post->fanbase->name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_2xoE4 NasRD _3QYjF">
                <button class="_1Zj5n _1cG70 _2YLzg">
                    <svg width="10" height="10">
                        <path fill="none" stroke="#00AFFF" stroke-linecap="square" stroke-width="2"
                              d="M1.64 1.6L8.3 8.26M8.16 1.6L1.51 8.26"></path>
                    </svg>
                </button>
                <div class="_2pnaG NasRD">
                    <h2>Like this?</h2>
                    <div class="_3Cj79 _1geYT">Get more</div>
                </div>
            </div>
        </div>
    </article>
    <div id="tackles" class="jwlFt _1zwKC">
        <div class="_1gLAu _1iE2V">
            <div class="_1-sfe">
                <div>
                    <div id="fb-root"></div>
                    <div class="_3G-jr">Like us on facebook</div>
                    <div class="_3Z0E3">
                        <img src="/images/logo.png" alt="AltFootball" class="_1aThB">
                        <div class="_3GhRl">
                            <a class="zzDw5" href="https://www.facebook.com/altfootballdotcom/" rel="nofollow">ALTFOOTBALL</a>
                            <div class="fb-like _1kDAA fb_iframe_widget"
                                 data-href="https://www.facebook.com/altfootballdotcom" data-layout="button"
                                 data-action="like" data-size="small" data-show-faces="false" data-share="false">
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="">
                                <div class="_38L6D" style="padding-bottom: 50%;">
                                    {!! $post->resized_image !!}
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
                                                {!! $post->user->resized_image !!}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="_2bDpH">
                                    <p class="_2nWjU _31dto KTIgi">
                                        <a class="_2XyXQ" href="/u/{{ $post->user->slug }}">
                                            {{ $post->user->nickname }}
                                        </a>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 18 18"
                                             class="_1z7Hy _1NCGm RyyhO">
                                            <g fill="none" fill-rule="evenodd">
                                                <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
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
                                    <div class="gzgzI">{{ $fanbase->initials }}</div>
                                </div>
                                <div class="_2lssz">
                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                        <img alt="" role="presentation" src="{{ $fanbase->resized_image }}" class="_214e9 b00q8" width="200" height="200">
                                    </div>
                                </div>
                            </div>
                            <div class="_1KQuz _1-YRL">
                                <h3 class="_2o06m _1oBl0">
                                <span class="_1QEWe">{{ $fanbase->name }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 18 18" class="_1z7Hy aX-51"><g fill="none"
                                                                                     fill-rule="evenodd"><path
                                                    fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path
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
    @include('templates.dribble')
    @include('templates.comments')
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            window.currentUser = {!! $user !!};
            ko.applyBindings();
        });

    </script>
@endsection