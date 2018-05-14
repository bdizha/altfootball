@extends('layouts.app')

@section('title', 'Altfootball')

@section('meta')
    @include('includes.meta', $meta)
@endsection

@section('content')
    <div class="">
        <div>
            <div class="_1U_qv">
                <div class="_2QjgM _GTYIO">
                    <div class="_14sEb _1z2cn">
                        <div class="_3ohNX">
                            <div class="_373gh">
                                <div class="owl-carousel owl-tags owl-theme">
                                    @include("tag.list")
                                </div>
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
            <div class="_1-0JF">
                <div class="_2_Chk">
                    @if(Auth::guard()->check())
                        <section class="_116es _17c3x">
                            <h3 class="_3F7tI">Fanbases recommended for you</h3>
                            <div class="_7YHcU">Join the Fanbases you like to tune your feed</div>
                            <div class="VDPbh">
                                <div class="_1fZBx">
                                    <div class="owl-carousel owl-five owl-theme">
                                        @foreach($bases as $k => $base)
                                            @include('fanbase.base')
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="dncIF _17c3x">
                            <h3 class="_3F7tI">Most influential people</h3>
                            <div class="_7YHcU">Follow the people making an impact</div>
                            <div class="VDPbh">
                                @foreach($fans as $fan)
                                    <a class="_Kj1Z _3JzN1" href="/u/{{ $fan->slug }}">
                                        <div class="_25jNX">
                                            <div class="N3r_f">
                                                <div class="_38L6D">
                                                    <img alt="{{ $fan->name }}" role="presentation"
                                                         src="{{ $fan->thumb_x }}" class="_214e9 b00q8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_13Iad">
                                            {{ $fan->name }}
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </section>
                    @else
                        <section class="_FTR56">
                            <div class="bHN0m">
                                <h1 class="O93cc" id="signInPanelHeader">Join the new home of footballing</h1>
                                <a href="/fb" class="MAYYh _35Ns5">Sign in with Facebook</a>
                                <a href="/register" class="_1ssnS _35Ns5">Sign in with Email</a>
                                <div class="d3Gx3">If you already have an account you can use the buttons above to log
                                    back in.
                                </div>
                                <ul class="sc-bZQynM iBpMqP">
                                    <li class="sc-gzVnrw fYnwAL"><span class="sc-htoDjs edZIuC">01</span>
                                        <p class="sc-dnqmqq juVprg"><strong>Exclusive</strong> access to your favourite
                                            footballers,
                                            clubs and fanbases</p></li>
                                    <li class="sc-gzVnrw fYnwAL"><span class="sc-htoDjs edZIuC">02</span>
                                        <p class="sc-dnqmqq juVprg"><strong>Talk</strong> to your favourite celebs in
                                            our live chat</p></li>
                                    <li class="sc-gzVnrw fYnwAL"><span class="sc-htoDjs edZIuC">03</span>
                                        <p class="sc-dnqmqq juVprg"><strong>Discuss</strong> and debate the day's big
                                            talking points in
                                            football</p></li>
                                </ul>
                                <p class="_3XRsF _1g8z0">
                                    By signing in you agree to our
                                    <a class="_3u2Sm" target="_blank" href="/terms">Terms of Use, Privacy Policy &amp;
                                        Use of Cookies</a>
                                </p>
                            </div>
                        </section>
                    @endif
                </div>
            </div>
            <div class="sc-fONwsr gDVFix">
                <div class="sc-hEsumM jUVmGT" data-reactid="43">
                    <div class="sc-ktHwxA lhpVsy" data-reactid="103">
                        <div class="sc-feJyhm XncZB sc-gGBfsJ dWPmPc">
                            <a class="sc-cJSrbW hDKkOF" href="/fanbases" data-reactid="105">
                                <div class="sc-ksYbfQ dbOCGf" data-reactid="106">
                                    <span class="sc-hmzhuo gqKiYI" data-reactid="107">Hot</span>
                                    <span class="sc-frDJqD lXCHc" data-reactid="108">Fanbases</span>
                                </div>
                                <span class="sc-kvZOFW fTNgKg">+ See more</span>
                            </a>
                            <div class="_1ht8_">
                                <div class="_1ht8_">
                                    <div class="_3FaZ4">
                                        <div class="owl-carousel owl-five owl-theme">
                                            @foreach($bases as $k => $base)
                                                @include('fanbase.base')
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_TY876">
                            <div class="sc-cJSrbW hDKkOF">
                                <div class="sc-ksYbfQ dbOCGf" data-reactid="106">
                                    <span class="sc-hmzhuo gqKiYI" data-reactid="107">Hot</span>
                                    <span class="sc-frDJqD lXCHc" data-reactid="108">Stories</span>
                                </div>
                            </div>
                            <ol class="_FGT65">
                                @foreach($posts['hot'] as $k => $post)
                                    <li class="_89GHT">
                                        <div class="_CFG34">{{ str_pad($k + 1, 2, "0", STR_PAD_LEFT) }}</div>
                                        <div class="_56KHY">
                                            <a class="_GJ585" href="/p/{{ $post->slug }}">
                                                <h3 class="_23GTY">{{ $post->title }}</h3>
                                            </a>
                                            <div class="_ETY90">
                                                <div class="_89RTY">
                                                    <div class="_43HGJ">
                                                        <div class="_23RTY">
                                                            <div class="_98HTY">
                                                                <span>Posted in</span>
                                                                <a class="_GTYKY"
                                                                   href="/f/{{ $post->fanbase->slug }}">{{ $post->fanbase->camel }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="_YURM4">
                                                            <div class="_TYMN3">
                                                                <time class="_FVT43">{{ $post->published_at }}</time>
                                                                <span class="_D45RT"></span>
                                                                <span class="_23FRT">{{ $post->reading_time }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="sc-rBLzX SsCsq">
                    <div class="sc-dTdPqK hQzEkt">
                        <div class="sc-krDsej eqEjAX sc-frDJqD epAMjP">
                            <div class="sc-kvZOFW jomFZs"><span class="sc-hqyNC dBwCTy">Top</span><span
                                        class="sc-jbKcbu fAtzSi">Stories</span></div>
                            <div class="sc-dliRfk dpeeXK">
                                <button class="sc-kLIISr cORlPk">Discover</button>
                                <button class="sc-kLIISr iUbryo">Inbox</button>
                            </div>
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
    <!-- ko if: showItem() -->
    <span data-bind="text: post().title_x"></span>
    <page-post params="post: post"></page-post>
    <!-- /ko -->
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            window._USER = {!! $user !!};
        });
    </script>
@endsection