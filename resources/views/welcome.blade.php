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
                            <div class="_28Zwg LYLB_" style="transform: scaleX(0) translateZ(0px);"></div>
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
            <a class="sc-jwKygS fibZwm" href="/p/{{ $post->slug }}"
               style="background-image: url(/images/{{ $post->image }});">
                <h1 class="sc-btzYZH cBqIJu">
                    {{ str_limit($post->title, 45) }}
                    <div class="sc-lhVmIH bfnJOq">
                        <button class="_3OD4J _1yV5F _1MC-v _1h78h">READ NOW</button>
                    </div>
                </h1>
            </a>
            <div class="_1-0JF" style="display: none;">
                <div class="_2jNUh _8kqds"></div>
                <div class="_2_Chk">
                    <section class="_116es _17c3x">
                        <h3 class="_3F7tI">Fanbases recommended for you</h3>
                        <div class="_7YHcU">Join the Fanbases you like to tune your feed</div>
                        <div class="VDPbh">
                            <div class="_1fZBx">
                                @foreach($bases as $k => $base)
                                    <a class="_pRC7 _46Jbt @if($k >= 6)_45VFC @endif" data-stamp="{{ $base->stamp }}"
                                       href="/f/{{ $base->slug }}">
                                        <div class="_3BoA_">
                                            <div style="padding-bottom:100%;" class="_38L6D">
                                                <img role="presentation" src="{{ $base->thumb_x }}" class="_214e9 b00q8"
                                                     width="200" height="200">
                                            </div>
                                        </div>
                                        <p class="_2mbtl">{{ $base->name }}</p>
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
                                                    <img alt="{{ $post->title }}" role="presentation"
                                                         src="{{ $post->thumb_x }}" class="_214e9 b00q8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2ll1m">
                                                <span class="_3bbo_">
                                                    {{ str_limit($post->title, 60) }}
                                                </span>
                                            <span class="FMK9E">{{ str_limit($post->summary, 28) }}</span>
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
                                                <img alt="{{ $fan->name }}" role="presentation"
                                                     src="{{ $fan->thumb_x }}" class="_214e9 b00q8">
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
            <div class="sc-fONwsr gDVFix" data-reactid="42">
                <div class="sc-hEsumM jUVmGT" data-reactid="43">
                    <div class="sc-ktHwxA lhpVsy" data-reactid="103">
                        <div class="sc-feJyhm XncZB sc-gGBfsJ dWPmPc">
                            <a class="sc-cJSrbW hDKkOF" href="/fanbases" data-reactid="105">
                                <div class="sc-ksYbfQ dbOCGf" data-reactid="106">
                                    <span class="sc-hmzhuo gqKiYI" data-reactid="107">Hot</span>
                                    <span class="sc-frDJqD lXCHc" data-reactid="108">Fanbases</span>
                                </div>
                                <span class="sc-kvZOFW fTNgKg" data-reactid="109">+ See more</span>
                            </a>
                            <ul class="sc-bbmXgH jOkXFw" wrap="true" data-reactid="110">
                                @foreach($bases as $k => $base)
                                    <li class="sc-hqyNC hcKELX" data-reactid="111">
                                        <a class="sc-jbKcbu gnullG" href="/f/{{ $base->slug }}" data-reactid="112">
                                            <div class="sc-dNLxif gSvadq" data-reactid="113">
                                                <div style="padding-bottom:100%;" class="_38L6D" data-reactid="114">
                                                    <img alt="{{ $base->name }}" role="presentation"
                                                         src="{{ $base->thumb_x }}" class="_214e9 b00q8" width="160"
                                                         height="160" data-reactid="115"/>
                                                </div>
                                            </div>
                                            <h4 class="sc-jqCOkK dfpDYt" data-reactid="116">{{ $base->name }}</h4>
                                            <div class="sc-uJMKN jbQyuy" data-reactid="117">{{ $base->description }}</div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sc-cmTdod iyxBpt" data-reactid="139"></div>
                    </div>
                </div>
                <div class="sc-rBLzX SsCsq" data-reactid="172">
                    <div class="sc-dTdPqK hQzEkt">
                        <div class="sc-krDsej eqEjAX sc-frDJqD epAMjP">
                            <div class="sc-kvZOFW jomFZs"><span class="sc-hqyNC dBwCTy">Top</span><span class="sc-jbKcbu fAtzSi">Stories</span></div>
                            <div class="sc-dliRfk dpeeXK"><button class="sc-kLIISr cORlPk">Discover</button><button class="sc-kLIISr iUbryo">My Feed</button></div>
                        </div>
                    </div>
                    <div class="sc-itybZL QJDdz">
                        <div class="sc-dTdPqK hQzEkt">
                            <posts params="page: 0, fanbase: '', show_callback: openItem"></posts>
                        </div>
                        <div></div>
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