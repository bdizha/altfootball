@extends('layouts.app')

@section('title', 'Altfootball')

@section('meta')
    @include('includes.meta', $meta)
@endsection

@section('content')
    <div class="">
        <div>
            <div class="_1U_qv">
                <div class="_2QjgM">
                    <div class="_14sEb _1z2cn">
                        <div class="_3ohNX">
                            <div class="_373gh">
                                <div class="_166mk"></div>
                                @include("tag.list")
                            </div>
                        </div>
                    </div>
                    <div class="_2v6JB">
                        <div class="_2BZH3 E7_yx">
                            <button class="_1JesO _2tGOx" disabled="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12"
                                     class="v_hd1">
                                    <path fill-rule="evenodd" d="M7 12L0 6l7-6v1.86L2.16 6 7 10.14"
                                        ></path>
                                </svg>
                            </button>
                            <div class="_28Zwg LYLB_"style="transform: scaleX(0) translateZ(0px);"></div>
                            <button class="_1JesO kJtIm _2tGOx" disabled="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12"
                                     class="_2V0Xh">
                                    <path fill-rule="evenodd" d="M7 12L0 6l7-6v1.86L2.16 6 7 10.14"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @if(Auth::guard()->check() && Auth::user()->is_active)
                <div class="_1-0JF">
                    <div class="_2jNUh _8kqds"></div>
                    <div class="_2_Chk">
                        <section class="_116es _17c3x">
                            <h3 class="_3F7tI">Fanbases recommended for you</h3>
                            <div class="_7YHcU">Join the Fanbases you like to tune your feed</div>
                            <div class="VDPbh">
                                <div class="_1fZBx">
                                    @foreach($fanbases as $k => $fanbase)
                                    <a class="_pRC7 _46Jbt @if($k >= 6)_45VFC @endif" data-stamp="{{ $fanbase->stamp }}" href="/f/{{ $fanbase->slug }}">
                                        <div class="_3BoA_">
                                            <div style="padding-bottom:100%;" class="_38L6D">
                                                <img role="presentation" src="{{ $fanbase->thumb_x }}" class="_214e9 b00q8" width="200" height="200">
                                            </div>
                                        </div>
                                        <p class="_2mbtl">{{ $fanbase->name }}</p>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                        <section class="_380IN _17c3x">
                            <h3 class="_3F7tI">Popular posts</h3>
                            <div class="_7YHcU">See what everyone's talking about</div>
                            <div class="VDPbh">
                                @foreach($popularPosts as $post)
                                    <a class="_3c_ba _9DqWK" href="/p/{{ $post->slug }}">
                                        <div class="_1nAwr">
                                            <div class="WCfW6">
                                                <div class="_1ZxE5">
                                                    <div style="padding-bottom:100%;" class="_38L6D">
                                                        <img alt="{{ $post->title }}" role="presentation" src="{{ $post->thumb_x }}" class="_214e9 b00q8">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2ll1m">
                                                <span class="_3bbo_">
                                                    {{ str_limit($post->title, 60) }}
                                                </span>
                                                <span class="FMK9E">{{ str_limit($post->summary, 30) }}</span>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </section>
                        <section class="dncIF _17c3x">
                            <h3 class="_3F7tI">Most influential people</h3>
                            <div class="_7YHcU">Follow the people making an impact</div>
                            <div class="VDPbh">
                                @foreach($fans as $fan)
                                    <a class="_Kj1Z _3JzN1" href="/u/{{ $fan->slug }}">
                                        <div class="_25jNX" style="width:66px;height:66px;">
                                            <div class="N3r_f">
                                                <div style="padding-bottom:100%;" class="_38L6D">
                                                    <img alt="{{ $fan->name }}" role="presentation" src="{{ $fan->thumb_x }}" class="_214e9 b00q8">
                                                </div>
                                            </div>
                                        </div>
                                        <p class="_3RaY_ _13Iad">
                                            {{ $fan->name }}
                                        </p>
                                    </a>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
            @else
                <div class="GLLyX">
                    <div class="_323ok _3Xaa0">
                        @foreach($fanbases as $fanbase)
                            <a class="_2_Gw9" data-stamp="{{ $fanbase->stamp }}" href="/f/{{ $fanbase->slug }}"
                             >
                                <div class="_204wR">
                                    <div style="padding-bottom:100%;" class="_38L6D">
                                        <img alt="" role="presentation" src="{{ $fanbase->thumb_x }}" class="_214e9 b00q8" width="200" height="200">
                                    </div>
                                </div>
                                <p class="Dpcfa">{{ $fanbase->name }}</p>
                            </a>
                        @endforeach
                    </div>
                    <div class="_1Rj2S _3Xaa0">
                        <div>
                            <form class="_37Oy_">
                                <img src="/images/text.png" title="altfootball" alt="altfootball">
                                <h1 class="bWRAm _3Khdi" dKhdireactid="123">The only place where everything
                                    is football
                                </h1>
                                <input type="email" name="email" placeholder="EMAIL ADDRESS" value=""
                                       class="_12n1y">
                                <button class="M13JP _1geYT">
                                    Join AltFootball
                                </button>
                            </form>
                            <a href="https://www.facebook.com/v2.9/dialog/oauth?client_id=516295178554349&amp;redirect_uri=http://altfootball.dev/fb-sign-in&amp;response_type=token&amp;scope=public_profile, email"
                               class="ahXq_">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                     viewBox="0 0 18 18" class="_2tOI2">
                                    <path fill="#FEFEFE" fill-rule="evenodd"
                                          d="M17 0H1a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1H9.6v-6.97H7.27V8.3H9.6v-2c0-2.33 1.42-3.6 3.5-3.6 1 0 1.85.08 2.1.12v2.43h-1.44c-1.13 0-1.35.53-1.35 1.32V8.3h2.69l-.35 2.72h-2.34V18h4.59a1 1 0 0 0 .99-1V1a1 1 0 0 0-1-1"
                                        ></path>
                                </svg>
                                Or <span class="_24mzx">sign up with Facebook</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            <div id="feed" class="_1RYG9">
                <div>
                    <div class="_2u6Ki _1iE2V">
                        <div class="_3gFQj">
                            @foreach($posts as $k => $post)
                                @if(fmod($k, 2))
                                    @include('post.item')
                                @endif
                            @endforeach
                            <posts params='page: 0, fanbase: ""'></posts>
                        </div>
                        <div class="_3gFQj">
                            @foreach($posts as $k => $post)
                                @if(fmod($k + 1, 2))
                                    @include('post.item')
                                @endif
                            @endforeach
                            <posts params='page: 1, fanbase: ""'></posts>
                        </div>
                        <div class="p32Iu">
                            <div class="_3bxb0">
                                <div class="_2hvwD">
                                    <script src="//cdn.playbuzz.com/widget/feed.js"></script><div class="pb_feed" data-comments="false" data-game-info="false" data-item="2b7291a8-b33e-469b-99b5-1b8c013ce6ec" data-embed-by="ab03eebd-4805-4de5-a97a-610ca3aa958d" data-version="2" ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_2L2jX"></div>
                </div>
            </div>
        </div>
    </div>
    @include('templates.dribbles')
    @include('templates.comments')
    @include('templates.posts')
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            RootViewModel.currentUser(ko.utils.parseJson({!! $user !!}));
        });
    </script>
@endsection