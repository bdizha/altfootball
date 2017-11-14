@extends('layouts.app')

@section('meta')
    @include('includes.meta', $fanbase->getMeta())
@endsection

@section('content')
    <div class="_1Ladt" data-reactid="63">
        <div class="-hOD9 _1KXFt">
            <div class="_23p6h">
                <div class="_34TYI"></div>
                <img src="{{ $fanbase->cover_x }}" role="presentation" alt="" class="_2PoG-" width="1905" height="476" style="opacity: 1;">
            </div>
        </div>
        <div class="_3asg7 _38P1C" data-reactid="65">
            <h1 class="_1xaT_ SqxHJ" data-reactid="66">
                {{ $fanbase->name }}
            </h1>
        </div>
    </div>
    <div>
        <div class="_1YCPS _1YoJe _210LR">
            <div class="_3ScM5">
                <div class="_1p_jQ">
                    <div class="_2QqZ9">
                        <div class="_3icdW">
                            <div class="_38L6D" style="padding-bottom: 100%;">
                                <img alt="" role="presentation" src="{{ $fanbase->thumb_x }}" class="_214e9 b00q8" width="32" height="32">
                            </div>
                        </div>
                        <div class="vklpv">
                            <div class="lt6XA">
                                {{ $fanbase->name }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18" class="_1z7Hy">
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="#5B9EEC" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                        <path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                    </g>
                                </svg>
                            </div>
                            <a class="_37ior" href="/u/{{ $fanbase->user->slug }}">
                                {{ $fanbase->user->name }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18" class="_1z7Hy">
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="#5B9EEC" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                        <path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="_3vhE-">
                    <div class="_1bRKx">
                        <nav class="_3GkHt _1R2o8">
                            <a class="zxDoM _3rBNC _2sG6-" href="/f/{{ $fanbase->slug }}">
                                Posts
                            </a>
                        </nav>
                    </div>
                </div>
                <follow params="follower: {{ $fanbase->follower->toJson() }}, inactive_text: 'Join fanbase', active_text: 'Joined', class: 'fanbase'"></follow>
            </div>
        </div>
    </div>
    <div class="_3WhNf">
        <div class="ytyuy _38P1C">
            <div class="rks9Y">
                <div class="T1M_q">
                    <div class="LPTvp _3Xaa0 _1KXFt">
                        <div class="_23p6h">
                            <img alt="" role="presentation" src="{{ $fanbase->thumb_x }}" class="_214e9 b00q8" width="200" height="200">
                        </div>
                    </div>
                    <div class="_2UPZy" data-stamp="{{ $fanbase->stamp }}"></div>
                </div>
                <div class="_2DLtu">
                    @if($fanbase->is_owner)
                        <button class="O6y0Q _1h78h _8eFus" data-bind="click: openFanbaseForm">
                            Edit Fanbase
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <path d="M15.1 4.95L12.96 2.8l1.01-1 2.14 2.13-1 1zm-9.13 7l.38-2.53.09-.09 2.14 2.14-.09.1-2.52.38zm3.32-1.18L7.15 8.63l5.1-5.11 2.15 2.14-5.11 5.1zM17.7 3.4L14.5.21a.77.77 0 0 0-1.06 0L5.12 8.54a.75.75 0 0 0-.21.41l-.58 3.78a.75.75 0 0 0 .86.85l3.77-.57c.16-.03.3-.1.42-.21l8.32-8.33c.3-.3.3-.77 0-1.06z"></path>
                                    <path d="M13.69 11.38a.75.75 0 0 0-.75.75v4.36H1.5V5.06h4.29a.75.75 0 0 0 0-1.5H.75A.75.75 0 0 0 0 4.3v12.93c0 .42.34.75.75.75h12.94c.41 0 .75-.33.75-.75v-5.1a.75.75 0 0 0-.75-.76"></path>
                                </g>
                            </svg>
                        </button>
                    @else
                        <follow params="follower: {{ $fanbase->follower->toJson() }}, inactive_text: 'Join fanbase', active_text: 'Joined', class: 'fanbase'"></follow>
                    @endif
                </div>
                <div class="sZVC2">
                    <h1 class="_1xaT_ SqxHJ">
                        {{ $fanbase->name }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18"
                             class="_1z7Hy _8SyER">
                            <g fill="none" fill-rule="evenodd">
                                <path fill="#33BB66" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                <path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                    ></path>
                            </g>
                        </svg>
                    </h1>
                    <button class="_1VJcf">
                        <div class="_32tSU">
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="18" viewBox="0 0 3 17"
                                 class="_32tSU">
                                <g fill="#00AFFF" fill-rule="evenodd">
                                    <path d="M2.2.69a1.15 1.15 0 1 1-2.1.92A1.15 1.15 0 0 1 2.2.7M2.2 7.87a1.15 1.15 0 1 1-2.1.92 1.15 1.15 0 0 1 2.1-.92M2.2 15.04a1.15 1.15 0 1 1-2.1.93 1.15 1.15 0 0 1 2.1-.93"></path>
                                </g>
                            </svg>
                        </div>
                    </button>
                </div>
                <div class="_3p0RC">
                    <div class="_1OwiL _126V6">
                        <div class="zFsq3 _1iE2V _3jt-p">
                            <a class="" href="/u/{{ $fanbase->user->slug }}">
                                <div class="_25jNX _3Y-3q" style="width:35px;height:35px;">
                                    <div class="N3r_f">
                                        <div style="padding-bottom:100%;" class="_38L6D">
                                            {!! $fanbase->user->thumb_x !!}
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="RDrYv _2bDpH">
                                <p class="_2nWjU _2YnA3 KTIgi">
                                    <a class="_2XyXQ" href="/u/{{ $fanbase->user->slug }}">
                                        {{ $fanbase->user->name }}
                                    </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18"
                                         class="_1z7Hy _1NCGm">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="#33BB66" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                                ></path>
                                            <path fill="#FFF"
                                                  d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                                ></path>
                                        </g>
                                    </svg>
                                </p>
                                <div class="_1HPk2 TzCC1">
                                    <span>Fanbase Leader</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_1i-5m">{{ $fanbase->description }}</div>
                    <div class="_16scH _23-G3">
                        <a class="nXDDw _4wu2M" href="//f/{{ $fanbase->slug }}/members">
                            ﻿<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26 26" version="1.1" width="24" height="24">
                                <g id="surface1">
                                    <path fill="#00AFFF" d="M 17.53125 1 C 15.734375 1 14.164063 1.925781 13.46875 3.6875 C 14.929688 4.890625 15.9375 6.753906 15.9375 9.28125 C 15.9375 11.976563 14.664063 14.441406 13.34375 16.03125 C 15.449219 16.828125 18.746094 18.425781 19.6875 20.875 C 23.003906 20.691406 25.96875 20.023438 25.96875 18.125 L 25.96875 17.5 C 25.96875 15.761719 22.933594 14.058594 20.25 13.15625 C 20.128906 13.117188 19.359375 12.929688 19.84375 11.4375 C 21.105469 10.121094 21.96875 7.992188 21.96875 5.90625 C 21.96875 2.695313 19.972656 1 17.53125 1 Z M 8.96875 4.09375 C 6.367188 4.09375 4.125 5.871094 4.125 9.28125 C 4.125 11.511719 5.183594 13.789063 6.53125 15.1875 C 7.054688 16.585938 6.101563 17.582031 5.90625 17.65625 C 3.1875 18.652344 0 20.453125 0 22.25 L 0 22.9375 C 0 25.386719 4.671875 25.9375 9 25.9375 C 13.335938 25.9375 17.96875 25.386719 17.96875 22.9375 L 17.96875 22.25 C 17.96875 20.398438 14.761719 18.617188 11.90625 17.65625 C 11.773438 17.613281 10.953125 16.742188 11.46875 15.15625 L 11.4375 15.15625 C 12.777344 13.753906 13.9375 11.503906 13.9375 9.28125 C 13.9375 5.871094 11.566406 4.09375 8.96875 4.09375 Z "/>
                                </g>
                            </svg>
                            <span class="_2OsaV">{{ rand(1, 100) }}K</span>
                        </a>
                        <div class="nXDDw _2Ngcr">
                            ﻿<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" width="24" height="24">
                                <g id="surface1">
                                    <path stroke="#00AFFF" stroke-width="2" fill="#FFFFFF" d="M 22.5 5 C 19.609375 5 17.171875 6.804688 16 7.855469 C 14.828125 6.804688 12.390625 5 9.5 5 C 5.363281 5 2 8.363281 2 12.5 C 2 15.089844 4.363281 17.445313 4.460938 17.539063 L 16 29.082031 L 27.535156 17.546875 C 27.636719 17.445313 30 15.089844 30 12.5 C 30 8.363281 26.636719 5 22.5 5 Z "/>
                                </g>
                            </svg>
                            <span class="_2OsaV">{{ rand(1, 100) }}K</span>
                        </div>
                        <div class="nXDDw">
                            ﻿<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1" width="24" height="24">
                                <g id="surface1">
                                    <path fill="#00AFFF" d="M 12 5 C 6 5 1.386719 11.105469 1.1875 11.40625 C 0.886719 11.804688 0.886719 12.195313 1.1875 12.59375 C 1.386719 12.894531 6 19 12 19 C 18 19 22.613281 12.894531 22.8125 12.59375 C 23.113281 12.195313 23.113281 11.804688 22.8125 11.40625 C 22.613281 11.105469 18 5 12 5 Z M 12 7 C 14.800781 7 17 9.199219 17 12 C 17 14.800781 14.800781 17 12 17 C 9.199219 17 7 14.800781 7 12 C 7 9.199219 9.199219 7 12 7 Z M 12 9.5 C 10.621094 9.5 9.5 10.621094 9.5 12 C 9.5 13.378906 10.621094 14.5 12 14.5 C 13.378906 14.5 14.5 13.378906 14.5 12 C 14.5 10.621094 13.378906 9.5 12 9.5 Z "/>
                                </g>
                            </svg>
                            <span class="_2OsaV">{{ $fanbase->views  }}M</span>
                        </div>
                    </div>
                    <div class="hXKYZ">
                        <div class="_2qTcl">ALTFOOTBALL Members</div>
                        <div class="_2qTcl">Email</div>
                        <div class="_2qTcl">Copy the link</div>
                    </div>
                </div>
            </div>
            <div class="gld7a">
                <div class="_3JxnF _38P1C">
                    <div class="_1bRKx">
                        <nav class="_3GkHt _1R2o8">
                            <a class="zxDoM _3TznZ _3rBNC _3vwB1 _2sG6-"  href="/f/{{ $fanbase->slug }}">
                                Posts
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div>
                <div class="_1YCPS _369Aa _2kPxQ">
                    <div class="_3ScM5">
                        <div class="_2QqZ9 _1p_jQ">
                            <div class="_3icdW">
                                <div style="padding-bottom:100%;" class="_38L6D"role="presentation"
                                                                                                         src="https://ALTFOOTBALL.imgix.net/AobBsUgsQc6DkZiEab5vKg?w=100&amp;h=100&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges"
                                                                                                         class="_214e9 b00q8"
                                                                                                         width="32"
                                                                                                         height="32"
                                                                                                       >
                                </div>
                            </div>
                            <div class="vklpv">
                                <div class="lt6XA">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18"
                                         class="_1z7Hy">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="#33BB66" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                                ></path>
                                            <path fill="#FFF"
                                                  d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                                ></path>
                                        </g>
                                    </svg>
                                </div>
                                <a class="_37ior" href="/u/{{ $fanbase->user->slug }}">
                                    {{ $fanbase->user->name }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18"
                                         class="_1z7Hy">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="#33BB66" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                                ></path>
                                            <path fill="#FFF"
                                                  d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                                ></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="_3vhE-">
                            <div class="_1bRKx">
                                <nav class="_3GkHt _1R2o8">
                                    <a class="zxDoM _3rBNC _2sG6-" href="/f/{{ $fanbase->slug }}#posts">
                                        Posts
                                    </a>
                                </nav>
                            </div>
                        </div>
                        <button class="_2qvTq _1MC-v _1h78h _2yZ_n _1odcZ">
                            <span>Join fanbase</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 24 24">
                                <path fill="#FFF" fill-rule="evenodd" d="M 11 5 L 11 11 L 5 11 L 5 13 L 11 13 L 11 19 L 13 19 L 13 13 L 19 13 L 19 11 L 13 11 L 13 5 Z "></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="_3P2x7">
                <div id="feed" class="_3slpw abgKc">
                    @if($fanbase->is_owner && $posts->count() == 0)
                        <div class="_3SC7_">
                            <div class="BiosM">
                                <p class="A8eM3">Create a post_</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" class="_1IqO5">
                                    <g fill="none" fill-rule="evenodd" stroke="rgba(103, 143, 185, 0.4)">
                                        <path stroke-width="4" d="M26.95 52c13.77 0 24.94-11.2 24.94-25S40.72 2 26.95 2C13.17 2 2 13.2 2 27s11.17 25 24.95 25z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M26.96 17.46l-.03 18.98m-9.47-9.48l18.97-.02"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="_2mTBY">
                                <svg width="38" height="38" viewBox="0 0 38 38">
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="#da1a35" d="M18.62 37.24a18.62 18.62 0 1 0 0-37.24 18.62 18.62 0 0 0 0 37.24z"></path>
                                        <path transform="scale(0.3) translate(22, 22)" fill="#FFF" d="M39 1C18 1 1 18 1 39s17 38 38 38 38-17 38-38S60 1 39 1zm32.6 28.6l-4.7 8.1h-13l-6.3-10.9 7-12.2h7.8c4.3 4.1 7.5 9.2 9.2 15zM23.2 63.4h-7.7c-4.2-4.1-7.4-9.2-9.1-15l4.6-8h13.1l6.2 10.8-7.1 12.2zm-7.7-48.8h7.7l7.2 12.3-6.2 10.8h-13l-4.7-8.1c1.6-5.8 4.8-11 9-15zm32.9-8.2l3.9 6.8-7.1 12.2H32.7l-7.1-12.2 3.9-6.8c3-.9 6.2-1.4 9.5-1.4 3.3.1 6.4.6 9.4 1.4zM29.5 71.5l-3.9-6.7 7.1-12.2h12.7l7.1 12.2-3.9 6.7c-3 .9-6.2 1.4-9.6 1.4-3.3 0-6.5-.5-9.5-1.4zm33-8.1h-7.7l-7.1-12.3 6.2-10.8H67l4.6 8c-1.7 5.9-4.9 11.1-9.1 15.1z"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    @endif
                    <div>
                        <div class="_2u6Ki _1iE2V">
                            <div class="_3gFQj _3LtPT">
                                @foreach($posts as $k => $post)
                                    @if(fmod($k, 2))
                                        @include('post.item')
                                    @endif
                                @endforeach
                                <posts params='page: 0, fanbase: {{ $fanbase->id }}, show_callback: openItem'></posts>
                            </div>
                            <div class="_3gFQj _3LtPT">
                                @foreach($posts as $k => $post)
                                    @if(fmod($k + 1, 2))
                                        @include('post.item')
                                    @endif
                                @endforeach
                                <posts params='page: 1, fanbase: {{ $fanbase->id }}, show_callback: openItem'></posts>
                            </div>
                        </div>
                        <div class="_2L2jX"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <fanbase-form params="{{ $toJson }}"></fanbase-form>
    @include('templates.dribbles')
    @include('templates.comments')
    @include('templates.posts')
    @include('fanbase.templates.form')
    @include('templates.follow')
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {
            {{--window._USER = {!! $user !!};--}}
        });
    </script>
@endsection