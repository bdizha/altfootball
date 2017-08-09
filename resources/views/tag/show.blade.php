@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="_3LeFV">
        <h1 class="_35Eoh">#{{ $tag->content }}</h1>
        <h2 class="_1Honn">The best {{ $tag->content }} content on ALTFOOTBALL</h2>
        <div class="_2cfq3"><span class="_3OQAJ">Join ALTFOOTBALL to get posts directly to your inbox</span>
            <div class="_1KXd6"><a href="/signin" class="_2LrKA KyQLW">With email</a><span class="_1iBcU">Or</span>
                <a href="https://www.facebook.com/v2.9/dialog/oauth?client_id=516295178554349&amp;redirect_uri=https://drivetribe.com/fb-sign-in&amp;response_type=token&amp;scope=public_profile, email"
                   class="_1S4og KyQLW">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path fill="#FEFEFE" fill-rule="evenodd"
                              d="M17 0H1a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1H9.6v-6.97H7.27V8.3H9.6v-2c0-2.33 1.42-3.6 3.5-3.6 1 0 1.85.08 2.1.12v2.43h-1.44c-1.13 0-1.35.53-1.35 1.32V8.3h2.69l-.35 2.72h-2.34V18h4.59a1 1 0 0 0 .99-1V1a1 1 0 0 0-1-1"></path>
                    </svg>
                    With Facebook
                </a>
            </div>
        </div>
        <div class="_26DkX">
            <h3 class="_3MbTo">Top Bases</h3>
            <div class="_1SVpA _2QjgM">
                <div class="">
                    <div class="_1ht8_">
                        <div class="_3FaZ4">
                            @foreach($bases as $k => $base)
                                <a class="_38Ked" href="/f/{{ $base->slug }}">
                                    <div class="_271kZ">
                                        <div class="">
                                            <div class="_38L6D" style="padding-bottom: 100%;">
                                                {!! $base->resized_image !!}
                                            </div>
                                        </div>
                                        <button class="_1Szys _1MC-v _1h78h">Join</button>
                                    </div>
                                    <h3 class="_1G1nd">{{ $base->name }}</h3>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="_2BZH3">
                        <button class="_1JesO JcKTU" disabled="">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="10" height="18" viewBox="0 0 10 18">
                                <defs>
                                    <path id="a" d="M9.78 18V0H0v18z"></path>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <mask id="b" fill="#fff">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#a"></use>
                                    </mask>
                                    <path fill="#000"
                                          d="M9.56 16.72L1.81 8.97 9.5 1.28A.75.75 0 1 0 8.44.22L.22 8.44c-.3.3-.3.77 0 1.06l8.28 8.28a.75.75 0 0 0 1.06-1.06"
                                          mask="url(#b)"></path>
                                </g>
                            </svg>
                        </button>
                        <div class="_28Zwg LYLB_" style="transform: scaleX(0) translateZ(0px);"></div>
                        <button class="_1JesO _3ovrL LmPde undefined">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="10" height="18" viewBox="0 0 10 18" class="_3_fQN">
                                <defs>
                                    <path id="a" d="M9.78 18V0H0v18z"></path>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <mask id="b" fill="#fff">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#a"></use>
                                    </mask>
                                    <path fill="#000"
                                          d="M9.56 16.72L1.81 8.97 9.5 1.28A.75.75 0 1 0 8.44.22L.22 8.44c-.3.3-.3.77 0 1.06l8.28 8.28a.75.75 0 0 0 1.06-1.06"
                                          mask="url(#b)"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="_1BusK _3MbTo">Top Posts</h3>
        <div class="_1RYG9">
            <div id="feed">
                <div>
                    <div class="_2u6Ki _1iE2V">
                        <div class="_3gFQj">
                            @foreach($posts as $k => $post)
                                @if(fmod($k, 2))
                                    @include('post.item')
                                @endif
                            @endforeach
                            <div class="_2L2jX"></div>
                        </div>
                        <div class="_3gFQj">
                            @foreach($posts as $k => $post)
                                @if(fmod($k + 1, 2))
                                    @include('post.item')
                                @endif
                            @endforeach
                            <div class="_2L2jX"></div>
                        </div>
                    </div>
                    <div class="_2L2jX"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
