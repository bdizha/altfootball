@extends('layouts.app')

@section('meta')
    @include('includes.meta', $tag->getMeta())
@endsection

@section('content')
    <div class="_3LeFV">
        <h1 class="_35Eoh">#{{ $tag->content }}</h1>
        <h2 class="_1Honn">The best {{ $tag->content }} content on ALTFOOTBALL</h2>
        @if(!Auth::guard()->check())
            <div class="_2cfq3"><span class="_3OQAJ">Join ALTFOOTBALL to get posts directly to your inbox</span>
                <div class="_1KXd6">
                    <a href="/register" class="_1ssnS _35Ns5">Sign in with Email</a>
                    <span class="_1iBcU">Or</span>
                    <a href="/fb" class="MAYYh _35Ns5">Sign in with Facebook</a>
                </div>
            </div>
        @endif
        <div class="_26DkX">
            <h3 class="_3MbTo">Top Bases</h3>
            <div class="_1SVpA _2QjgM">
                <div class="">
                    <div class="_1ht8_">
                        <div class="_3FaZ4">
                            <div class="owl-carousel owl-five owl-theme">
                                @foreach($bases as $k => $base)
                                    <a class="_38Ked" href="/f/{{ $base->slug }}">
                                        <div class="_271kZ">
                                            <div class="">
                                                <div class="_38L6D" style="padding-bottom: 100%;">
                                                    <img alt="" role="presentation" src="{{ $base->small_x }}" class="_214e9 b00q8" width="200" height="200">
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
                </div>
                <div class="">
                    <div class="_2BZH3">
                        <div class="_28Zwg LYLB_" style="transform: scaleX(0) translateZ(0px);"></div>
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
    @include('templates.dribbles')
    @include('templates.comments')
    @include('templates.posts')
@endsection
