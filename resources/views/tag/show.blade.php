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
                            <div class="owl-carousel owl-theme">
                                @foreach($bases as $k => $base)
                                    @include('fanbase.base')
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
        <div id="feed" class="_2zNwx">
            <div class="sc-itybZL QJDdz">
                <div class="sc-dTdPqK hQzEkt">
                    <posts params="page: 0, fanbase: '', show_callback: openItem"></posts>
                </div>
            </div>
        </div>
    </div>
    @include('templates.dribbles')
    @include('templates.comments')
    @include('templates.posts')
@endsection
