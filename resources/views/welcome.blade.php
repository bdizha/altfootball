@extends('layouts.app')

@section('title', 'Altfootball')

@section('content')
    <div class="">
        <div data-reactid="42">
            <div class="_1U_qv" data-reactid="43">
                <div class="_2QjgM" data-reactid="44">
                    <div class="_14sEb _1z2cn" data-reactid="45">
                        <div class="_3ohNX" data-reactid="46">
                            <div class="_373gh" data-reactid="47">
                                <div class="_166mk" data-reactid="48"></div>
                                @include("tag.list")
                            </div>
                        </div>
                    </div>
                    <div class="_2v6JB" data-reactid="64">
                        <div class="_2BZH3 E7_yx" data-reactid="65">
                            <button class="_1JesO _2tGOx" disabled="" data-reactid="66">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12"
                                     class="v_hd1" data-reactid="67">
                                    <path fill-rule="evenodd" d="M7 12L0 6l7-6v1.86L2.16 6 7 10.14"
                                          data-reactid="68"></path>
                                </svg>
                            </button>
                            <div class="_28Zwg LYLB_" data-reactid="69"
                                 style="transform: scaleX(0) translateZ(0px);"></div>
                            <button class="_1JesO kJtIm _2tGOx" disabled="" data-reactid="70">
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
                <div class="_1-0JF" data-reactid="85">
                    <div class="_2jNUh _8kqds" data-reactid="86"></div>
                    <div class="_2_Chk" data-reactid="87">
                        <section class="_116es _17c3x" data-reactid="88">
                            <h3 class="_3F7tI">Fanbases recommended for you</h3>
                            <div class="_7YHcU">Join the Fanbases you like to tune your feed</div>
                            <div class="VDPbh">
                                <div class="_1fZBx">
                                    @foreach($fanbases as $fanbase)
                                    <a class="_pRC7 _46Jbt" data-initials="CC" href="/f/{{ $fanbase->slug }}">
                                        <div class="_3BoA_" data-reactid="94">
                                            <div style="padding-bottom:100%;" class="_38L6D">
                                                {!! $fanbase->getImage() !!}
                                            </div>
                                        </div>
                                        <p class="_2mbtl" data-reactid="97">{{ $fanbase->name }}</p>
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
                                                        {!! $post->getImage() !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2ll1m">
                                                <span class="_3bbo_">
                                                    {{ $post->title }}
                                                </span>
                                                <span class="FMK9E">{{ str_limit($post->summary, 30) }}</span>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </section>
                        <section class="dncIF _17c3x" data-reactid="161">
                            <h3 class="_3F7tI" data-reactid="162">Most influential people</h3>
                            <div class="_7YHcU" data-reactid="163">Follow the people making an impact</div>
                            <div class="VDPbh" data-reactid="164">
                                @foreach($fans as $fan)
                                    <a class="_Kj1Z _3JzN1" href="/u/{{ $fan->slug }}">
                                        <div class="_25jNX" style="width:66px;height:66px;">
                                            <div class="N3r_f" data-reactid="167">
                                                <div style="padding-bottom:100%;" class="_38L6D">
                                                    {!! $fan->getImage() !!}
                                                </div>
                                            </div>
                                        </div>
                                        <p class="_3RaY_ _13Iad" data-reactid="171">
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
                            <a class="_2_Gw9" data-initials="{{ $fanbase->initials }}" href="/f/{{ $fanbase->slug }}"
                               data-reactid="75">
                                <div class="_204wR">
                                    <div style="padding-bottom:100%;" class="_38L6D">
                                        {!! $fanbase->getImage() !!}
                                    </div>
                                </div>
                                <p class="Dpcfa" data-reactid="79">{{ $fanbase->name }}</p>
                            </a>
                        @endforeach
                    </div>
                    <div class="_1Rj2S _3Xaa0">
                        <div data-reactid="121">
                            <form class="_37Oy_">
                                <img src="/images/text.png" title="altfootball" alt="altfootball">
                                <h1 class="bWRAm _3Khdi" dKhdireactid="123">The only place where everything
                                    is football
                                </h1>
                                <input type="email" name="email" placeholder="EMAIL ADDRESS" value=""
                                       class="_12n1y" data-reactid="124">
                                <button class="M13JP _1geYT">
                                    Join AltFootball
                                </button>
                            </form>
                            <a href="https://www.facebook.com/v2.9/dialog/oauth?client_id=516295178554349&amp;redirect_uri=http://altfootball.dev/fb-sign-in&amp;response_type=token&amp;scope=public_profile, email"
                               class="ahXq_" data-reactid="126">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                     viewBox="0 0 18 18" class="_2tOI2">
                                    <path fill="#FEFEFE" fill-rule="evenodd"
                                          d="M17 0H1a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1H9.6v-6.97H7.27V8.3H9.6v-2c0-2.33 1.42-3.6 3.5-3.6 1 0 1.85.08 2.1.12v2.43h-1.44c-1.13 0-1.35.53-1.35 1.32V8.3h2.69l-.35 2.72h-2.34V18h4.59a1 1 0 0 0 .99-1V1a1 1 0 0 0-1-1"
                                          data-reactid="128"></path>
                                </svg>
                                Or <span class="_24mzx">sign up with Facebook</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            <div id="feed" class="_1RYG9" data-reactid="131">
                <!-- react-empty: 132 -->
                <div data-reactid="133">
                    <div class="_2u6Ki _1iE2V" data-reactid="134">
                        <div class="_3gFQj" data-reactid="135">
                            @foreach($posts as $k => $post)
                                @if(fmod($k, 2))
                                    @include('post.item')
                                @endif
                            @endforeach
                        </div>
                        <div class="_3gFQj" data-reactid="660">
                            @foreach($posts as $k => $post)
                                @if(fmod($k + 1, 2))
                                    @include('post.item')
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="_2L2jX"></div>
                </div>
            </div>
        </div>
    </div>
@endsection