@extends('layouts.app')

@section('title', 'Followers of ' . $fan->name)

@section('content')
    <div class="">
        <div>
            <div class="_359eg">
                <a class="_1oI4U" href="/u/{{ $fan->slug }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12">
                        <path fill-rule="evenodd" d="M7 12L0 6l7-6v1.86L2.16 6 7 10.14"></path>
                    </svg>
                    {{ $fan->name }}'s profile
                </a>
            </div>
            <div>
                <nav class="_3GkHt _2z8Aq _1jrlD _2i__3 _1J_BZ jb9hx">
                    <a href="/u/{{ $fan->slug }}/followers" class="_3UwsA zxDoM">
                        Followers
                        <span class="_1yJKz">
                        ({{ rand(1, 10) }}k)
                        </span>
                    </a>
                    <a href="/u/{{ $fan->slug }}/following" class="zxDoM undefined">
                        Following
                        <span class="_1yJKz">
                        ({{ rand(1, 40) }})
                        </span>
                    </a>
                </nav>
                <div>
                    <section class="h6rik _1jrlD _2i__3 _1J_BZ jb9hx">
                        @foreach($fans as $user)
                            <li class="DcoLy _1iE2V _1fsZ8">
                                <a class="dgyZb" href="/u/{{ $user->slug }}">
                                    <div class="_25jNX _35OoN">
                                        <div class="N3r_f">
                                            <div class="_38L6D" style="padding-bottom: 100%;">
                                                {!! $user->resized_image !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_31RCK">
                                        <span>
                                            {{ $user->first_name }}
                                        </span>
                                        <span>
                                         {{ $user->last_name }}
                                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="_1z7Hy _3vjbC">
                                              <g fill="none" fill-rule="evenodd">
                                                 <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                                 <path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                              </g>
                                           </svg>
                                        </span>
                                    </div>
                                </a>
                                <button class="_3KPJA _1iAGF">Follow</button>
                            </li>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection