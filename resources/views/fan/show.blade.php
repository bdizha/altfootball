@extends('layouts.fan', ['view' => 'show'])

@section('title', $user->name)

@section('content')
    <div class="">
        <div>
            <div class="_2KNH4">
                <div class="_1jbho">
                    <div class="Cu7qw">
                        <div class="_1KeJ_">
                            <button class="_32k0z" data-bind="click: openSettingsForm">
                                <div class="_13Js3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                         class="_13Js3">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="#00AFFF"
                                                  d="M2.31 14.9l-1.03.63-.77 1.6.62.62 1.57-.8.38-.69 5.89-5.89-1.14-.99zM10.3 4.8L8.83 6.29l3.1 3.21 1.53-1.52 4.55-4.55L14.85.26 10.3 4.8zm0 1.8l4.26-4.26.43.44-4.26 4.26-.44-.43zm.99 1l4.26-4.26.44.43-4.27 4.27-.43-.44z"></path>
                                            <path stroke="#00AFFF" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="1.5"
                                                  d="M14.75 16.51l-8.2-7.87-1.2-1.07A3.5 3.5 0 0 1 .85 3.43l1.97 1.9c1.61.04 2.4-.84 2.43-2.26L3.04.97A3.5 3.5 0 0 1 7.6 5.3l2.29 2.2 7.03 6.75-2.16 2.25z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                            <div class="_25jNX">
                                <div class="N3r_f">
                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                        <img alt="{{ $user->name }}" role="presentation" src="{{ $user->small_image }}" class="_214e9 b00q8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_1Wugc undefined">
                            <span class="_2MwKG">
                                {{ $user->name }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                     class="_1z7Hy _2JeVL"><g fill="none" fill-rule="evenodd"><path fill="#00AFFF"
                                                                                                    d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path
                                                fill="#FFF"
                                                d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg></span><span
                                    class="_1nCpf"><!-- react-text: 4460 -->James<!-- /react-text --><br>
                                <!-- react-text: 4462 -->May<!-- /react-text --><svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="18" height="18"
                                                                                     viewBox="0 0 18 18"
                                                                                     class="_1z7Hy _2JeVL"><g
                                            fill="none" fill-rule="evenodd"><path fill="#00AFFF"
                                                                                  d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path
                                                fill="#FFF"
                                                d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg></span>
                            @if($user->bio)
                                <p class="_14d4a">{{ $user->bio }}</p>
                            @endif
                            @if($user->website)
                                <a rel="nofollow" target="_blank" class="_30-Mx" href="{{ $user->website }}"></a>
                            @endif
                            <div class="_2aOYp">
                            @if(!$user->is_self)
                                <follow params="follower: {{ $user->follower->toJson() }}, active_text: 'unfollow', inactive_text: 'follow', class: 'user'"></follow>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="GHC_I">
                        <p class="_177zr">{{ $user->bio }}</p>
                        @if(!empty($user->website))
                            <a rel="nofollow" target="_blank" class="Y5qEv"
                               href="{{ $user->website }}">{{ $user->getDomain() }}</a>
                        @endif
                    </div>
                </div>
                <div class="_3XlGZ">
                    <div class="_12g8o Pb65u"><span><span class="DdJUj">dribbles</span><span class="-DD7c">113.7K</span></span>
                    </div>
                    <div class="Pb65u">
                        <a class="" href="/u/{{ $user->slug }}/requested"><span
                                    class="DdJUj">Following</span><span class="C6GXY">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="7"><path
                                            d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path>
                                </svg>
                            </span>
                            <span class="-DD7c">
                                {{ $user->requested->count() }}
                            </span>
                        </a>
                    </div>
                    <div class="GrqoM Pb65u">
                        <a class="" href="/u/{{ $user->slug }}/requesters">
                            <span class="DdJUj">Followers</span>
                            <span class="C6GXY">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7"><path
                                            d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path>
                                </svg>
                            </span>
                            <span class="-DD7c">{{ $user->requesters->count() }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="_14963">
                <div class="_3hdBv">
                    <div class="_3yl6Y">
                        <a class="" href="/u/{{ $user->slug }}/fanbases">
                            {{ $user->nickname }}'s Fanbases <span class="aPjG8">
                                <span class="_2aiW-">({{ $user->fanbases->count() }})</span>
                            </span>
                        </a>
                        <button class="_2EVp5" data-bind="click: openFanbaseForm">
                            Create a fanbase
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                <path fill="#FFF" fill-rule="evenodd" d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="Gp5Eg _2QjgM">
                        <div class="_3h6Wn">
                            <div class="_3dj9E">
                                <div class="_3nlN8">
                                    <div class="owl-carousel owl-four owl-theme">
                                        @foreach($user->fanbases as $k => $fanbase)
                                            <a class="_1mWot" href="/f/{{ $fanbase->slug }}">
                                                <div class="ZD12l _1iE2V">
                                                    <div class="_2lssz">
                                                        <div class="_38L6D" style="padding-bottom: 100%;">
                                                            <img alt="" role="presentation"
                                                                 src="{{ $fanbase->thumb_image }}" class="_214e9 b00q8"
                                                                 width="200" height="200">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_1KQuz @if($fanbase->is_owner) fFpBH @endif">
                                                    <h3 class="_2o06m _1oBl0">
                                                        <span class="_1QEWe">
                                                            {{ $fanbase->name }}
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                                 viewBox="0 0 18 18" class="_1z7Hy aX-51"><g fill="none"
                                                                                                             fill-rule="evenodd"><path
                                                                            fill="#00AFFF"
                                                                            d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path
                                                                            fill="#FFF"
                                                                            d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg>
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
                        </div>
                    </div>
                </div>
                <span class="_2i9BG"></span>
                <div>
                    <nav class="_3GkHt _11gfn">
                        <button class="zxDoM undefined">
                            Posted
                        </button>
                        <button class="_3UwsA zxDoM">
                            dribbled
                        </button>
                    </nav>
                    <div class="_1RYG9">
                        <div id="feed" class="">
                            <div>
                                <div class="_2u6Ki _1iE2V">

                                </div>
                                <div class="_2L2jX"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <fanbase-form></fanbase-form>
    @include('templates.follow')
    @include('fanbase.templates.form')
    @include('templates.dribbles')
    @include('templates.comments')
    @include('templates.posts')
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            {{--window.settings = {!! $user->toJson() !!};--}}
        });
    </script>
@endsection