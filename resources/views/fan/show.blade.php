@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="" data-reactid="41">
        <div>
            <!-- react-empty: 4440 -->
            <div class="_2KNH4">
                <div class="_1jbho">
                    <div class="Cu7qw">
                        <div class="_1KeJ_">
                            <div class="_25jNX">
                                <div class="N3r_f">
                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                        <img alt="" role="presentation" src="https://drivetribe.imgix.net/SnDIkCLNTHaWJnwPHfnSZQ?w=700&amp;h=700&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges" class="_214e9 b00q8" width="350" height="350">
                                    </div>
                                </div>
                                <!-- react-empty: 4449 -->
                            </div>
                        </div>
                        <div class="_1Wugc undefined">
                            <span class="_2MwKG">
                                {{ $fan->nickname }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="_1z7Hy _2JeVL"><g fill="none" fill-rule="evenodd"><path fill="#5B9EEC" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg></span><span class="_1nCpf"><!-- react-text: 4460 -->James<!-- /react-text --><br><!-- react-text: 4462 -->May<!-- /react-text --><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="_1z7Hy _2JeVL"><g fill="none" fill-rule="evenodd"><path fill="#5B9EEC" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg></span>
                            <p class="_14d4a">{{ $fan->bio }}</p>
                            @if(!empty($fan->website))
                                <a rel="nofollow" target="_blank" class="_30-Mx" href="{{ $fan->website }}">{{ $fan->website }}</a>
                            @endif
                            <div class="_2aOYp">
                                <button class="b9xa- _8GOLs _1h78h undefined"><span>Follow</span><span class="_3xWuC"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8"><path fill="#FFF" fill-rule="evenodd" d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"></path></svg></span></button>
                                <button class="_32k0z">
                                    <div class="_32tSU">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="4" height="18" viewBox="0 0 3 17" class="_32tSU">
                                            <g fill="#000" fill-rule="evenodd">
                                                <path d="M2.2.69a1.15 1.15 0 1 1-2.1.92A1.15 1.15 0 0 1 2.2.7M2.2 7.87a1.15 1.15 0 1 1-2.1.92 1.15 1.15 0 0 1 2.1-.92M2.2 15.04a1.15 1.15 0 1 1-2.1.93 1.15 1.15 0 0 1 2.1-.93"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="GHC_I">
                        <p class="_177zr">{{ $fan->bio }}</p>
                        @if(!empty($fan->website))
                            <a rel="nofollow" target="_blank" class="Y5qEv" href="{{ $fan->website }}">{{ $fan->website }}</a>
                        @endif
                    </div>
                </div>
                <div class="_3XlGZ">
                    <div class="_12g8o Pb65u"><span><span class="DdJUj">Bumps</span><span class="-DD7c">113.7K</span></span>
                    </div>
                    <div class="Pb65u"><a class="" href="/u/gO8toa48SEOfqeWjhHNLoQ/following"><span class="DdJUj">Following</span><span class="C6GXY"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="7"><path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path></svg></span><span class="-DD7c">3</span></a></div>
                    <div class="GrqoM Pb65u"><a class="" href="/u/gO8toa48SEOfqeWjhHNLoQ/followers"><span class="DdJUj">Followers</span><span class="C6GXY"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="7"><path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path></svg></span><span class="-DD7c">20.2K</span></a></div>
                </div>
            </div>
            <div class="_14963">
                <div class="_3hdBv">
                    <div class="_3yl6Y">
                        <a class="" href="/u/{{ $fan->slug }}/fanbases">
                            {{ $fan->nickname }}'s Fanbases <span class="aPjG8">
                                <span class="_2aiW-">({{ $fan->fanbases->count() }})</span>
                            </span>
                        </a>
                    </div>
                    <div class="Gp5Eg _2QjgM">
                        <div class="_3h6Wn">
                            <div class="_3dj9E">
                                <div class="_3nlN8">
                                    @foreach($fanbases as $k => $fanbase)
                                        <a class="_1mWot" href="/fb/{{ $fanbase->slug }}">
                                            <div class="ZD12l _1iE2V">
                                                <div class="_2lssz">
                                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                                        {!! $fanbase->getImage() !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1KQuz @if($k == 0) fFpBH @endif">
                                                <h3 class="_2o06m _1oBl0">
                                                    <span class="_1QEWe">
                                                        {{ $fanbase->name }}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="_1z7Hy aX-51"><g fill="none" fill-rule="evenodd"><path fill="#5B9EEC" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg>
                                                    </span>
                                                </h3>
                                                <div class="_1TvPX">
                                                    <div class="_1Ct87">
                                                        <span><span class="CrE3q">Fanbase Leader</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="_2KkkC">
                            <div class="_2BZH3 _2niMs">
                                <button class="_1JesO" disabled="">Prev</button>
                                <div class="_28Zwg" style="transform: scaleX(0) translateZ(0px);"></div>
                                <button class="_1JesO undefined LmPde">Next</button>
                            </div>
                        </div>
                    </div>
                </div><span class="_2i9BG"></span>
                <div>
                    <nav class="_3GkHt _11gfn">
                        <button class="zxDoM undefined">
                            Posted
                        </button>
                        <button class="_3UwsA zxDoM">
                            Bumped
                        </button>
                    </nav>
                    <div class="_1RYG9">
                        <div id="feed" class="">
                            <div>
                                <div class="_2u6Ki _1iE2V">
                                    <div class="_3gFQj">
                                        @foreach($posts as $k => $post)
                                            @if(fmod($k, 2))
                                                @include('post.item')
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="_3gFQj">
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
            </div>
        </div>
    </div>
@endsection