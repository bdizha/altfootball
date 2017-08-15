@extends('layouts.app')

@section('title', $fanbase->name)

@section('content')
    <!-- react-empty: 43 -->
    <div class="_2q1KC">
        <div class="_3asg6"></div>
        <div class="_3asg7 _38P1C">
            <h1 class="_1xaT_ SqxHJ">
                {{ $fanbase->name }}
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="_1z7Hy _8SyER"
                   >
                    <g fill="none" fill-rule="evenodd">
                        <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                        <path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                            ></path>
                    </g>
                </svg>
            </h1>
        </div>
    </div>
    <div class="_2F06s">
        <div class="IEF7x _38P1C">
            <div class="_1bRKx">
                <nav class="_3GkHt _1R2o8">
                    <a class="zxDoM _3rBNC _2sG6-" href="/f/{{ $fanbase->slug }}"
                     >
                        <!-- react-text: 57 -->Posts<!-- /react-text -->
                    </a>
                    <a style="display: none;" class="_3UwsA zxDoM _3rBNC" href="/f/{{ $fanbase->slug }}"
                     >
                        <!-- react-text: 59 -->Discussions<!-- /react-text --><span class="_2-WMb _2aPX0"
                                                                                  ><span
                                    class="_1a2gI">28</span></span>
                    </a>
                </nav>
                <div class="_2Y2eP">
                    <button class="_1VJcf">
                        <div class="_32tSU">
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="18" viewBox="0 0 3 17"
                                 class="_32tSU">
                                <g fill="#00AFFF" fill-rule="evenodd">
                                    <path d="M2.2.69a1.15 1.15 0 1 1-2.1.92A1.15 1.15 0 0 1 2.2.7M2.2 7.87a1.15 1.15 0 1 1-2.1.92 1.15 1.15 0 0 1 2.1-.92M2.2 15.04a1.15 1.15 0 1 1-2.1.93 1.15 1.15 0 0 1 2.1-.93"
                                        ></path>
                                </g>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="_1YCPS _1YoJe _2kPxQ">
            <div class="_3ScM5">
                <div class="_2QqZ9 _1p_jQ">
                    <div class="_3icdW">
                        <div style="padding-bottom:100%;" class="_38L6D">
                            <img alt="" role="presentation"
                                 src="https://drivetribe.imgix.net/AobBsUgsQc6DkZiEab5vKg?w=100&amp;h=100&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges"
                                 class="_214e9 b00q8" width="32" height="32">
                        </div>
                    </div>
                    <div class="vklpv">
                        <div class="lt6XA">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                 class="_1z7Hy">
                                <g fill="none" fill-rule="evenodd">
                                    <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                        ></path>
                                    <path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                        ></path>
                                </g>
                            </svg>
                        </div>
                        <a class="_37ior" href="/u/{{ $fanbase->user->slug }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                 class="_1z7Hy">
                                <g fill="none" fill-rule="evenodd">
                                    <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                        ></path>
                                    <path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                        ></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="_3vhE-">
                    <div class="_1bRKx">
                        <nav class="_3GkHt _1R2o8">
                            <a class="zxDoM _3rBNC _2sG6-" href="/f/{{ $fanbase->slug }}"
                             >
                                Posts
                            </a>
                            <a class="_3UwsA zxDoM _3rBNC"
                               href="/f/{{ $fanbase->slug }}?page=discussions">
                                Discussions
                                <span>
                                    <span class="_2-WMb _2aPX0" class="_1a2gI">{{ rand(1, 40) }}</span>
                                </span>
                            </a>
                        </nav>
                    </div>
                </div>
                <button class="_2qvTq _1MC-v _1h78h _2yZ_n _1odcZ">
                    <span>Join fanbase</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                        <path fill="#FFF" fill-rule="evenodd" d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"
                            ></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="_3WhNf">
        <div class="ytyuy _38P1C">
            <div class="rks9Y">
                <div class="T1M_q">
                    <div class="LPTvp _3Xaa0 _1KXFt">
                        <div class="_23p6h">
                            <img alt="" role="presentation" src="{{ $fanbase->resized_image }}" class="_214e9 b00q8" width="200" height="200">
                        </div>
                    </div>
                    <div class="_2UPZy" data-initials="{{ $fanbase->initials }}"></div>
                </div>
                <div class="_2DLtu">
                    <button class="_2qvTq _1MC-v _1h78h _2yZ_n _8eFus">
                        <span>Join fanbase</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8"
                           >
                            <path fill="#FFF" fill-rule="evenodd" d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"
                                ></path>
                        </svg>
                    </button>
                </div>
                <div class="sZVC2">
                    <h1 class="_1xaT_ SqxHJ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                             class="_1z7Hy _8SyER">
                            <g fill="none" fill-rule="evenodd">
                                <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
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
                                            {!! $fanbase->user->resized_image !!}
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="RDrYv _2bDpH">
                                <p class="_2nWjU _2YnA3 KTIgi">
                                    <a class="_2XyXQ" href="/u/{{ $fanbase->user->slug }}">
                                        {{ $fanbase->user->name }}
                                    </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                         class="_1z7Hy _1NCGm">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
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
                        <a class="nXDDw _4wu2M" href="/t/PgtD-TRMTVSO3dJmDa8Lkw/members">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14"
                               >
                                <path fill-rule="evenodd"
                                      d="M6.7 1.5C8 1.5 9 2.5 9 4c0 1.3-1 2.4-2.3 2.4-1.4 0-2.5-1-2.5-2.4s1-2.5 2.5-2.5M9.2 7c1-.7 1.4-1.8 1.4-3 0-2.2-1.8-4-4-4-2 0-4 1.8-4 4 0 1.2.7 2.3 1.5 3-2 1-3.5 3-4 5.8 0 .4.2.8.6.8.4 0 .8-.2 1-.6.4-3 2.6-5 5-5 2.5 0 4.7 2 5.2 5 0 .4.4.7.8.7.5 0 .8-.5.7-1-.5-2.6-2-4.7-4-5.7m4.8 0c.6-.8 1-1.7 1-2.7 0-2.2-1.8-4-4-4-.5 0-.8.4-.8.8 0 .5.3 1 .8 1 1.3 0 2.4 1 2.4 2.3 0 1-.4 1.7-1.2 2.2-.4.2-.5.6-.3 1 .3.2.5.4.8.4 1.8.5 3.3 2.4 3.7 4.6 0 .4.4.6.7.6h.2c.4 0 .7-.4.6-.8C17.5 10 16 8 14.2 7"
                                    ></path>
                            </svg>
                            <span class="_2OsaV">{{ rand(1, 100) }}K</span>
                        </a>
                        <div class="nXDDw _2Ngcr">
                            <svg width="24" height="23" viewBox="-3 -3 23 24">
                                <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75L13.5 0zm-.1 1.87l3.1 2.58V8.3L9 14.55 1.5 8.3V4.45l3.1-2.58L9 4.8l4.4-2.93z"
                                      fill="#00AFFF" fill-rule="evenodd" opacity="1"></path>
                                <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75" fill="#00AFFF" fill-rule="evenodd"
                                      opacity="0"></path>
                            </svg>
                            <span class="_2OsaV">{{ rand(1, 100) }}K</span>
                        </div>
                        <div class="nXDDw">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15"
                               >
                                <g fill="none" fill-rule="evenodd">
                                    <path fill="#FFF" d="M11.31 7.16a2.4 2.4 0 1 1-4.78 0 2.4 2.4 0 0 1 4.78 0"
                                        ></path>
                                    <path fill="#00AFFF"
                                          d="M8.92 5.27a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 0 0 0-3.8m0 4.79a2.9 2.9 0 1 1 0-5.8 2.9 2.9 0 0 1 0 5.8"
                                        ></path>
                                    <path fill="#00AFFF"
                                          d="M1.6 7.36c1.98 3.43 4.69 5.47 7.32 5.47s5.34-2.04 7.3-5.47c-2.08-3.68-4.8-5.86-7.3-5.86S3.7 3.68 1.6 7.36m7.3 6.97c-3.27 0-6.57-2.47-8.82-6.61A.75.75 0 0 1 .1 7c2.38-4.38 5.68-7 8.83-7 3.14 0 6.44 2.62 8.83 7 .12.23.12.5 0 .72-2.25 4.14-5.55 6.6-8.83 6.6"
                                        ></path>
                                </g>
                            </svg>
                            <span class="_2OsaV">{{ rand(1, 11) }}M</span>
                        </div>
                    </div>
                    <div class="DZpu2">
                        <div class="_2K1XH">
                            <div class="xPwPM">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="21" height="16" viewBox="0 0 21 16" class="_3QdfW">
                                    <defs>
                                        <path id="a" d="M3.74.82h3v6h-6v-6z"></path>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <path stroke="#00AFFF" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5" d="M11.69 2.33H.88V14.8h18V9.3"
                                            ></path>
                                        <path stroke="#00AFFF" stroke-linecap="round" stroke-linejoin="round"
                                              d="M3.32 4.78l6.31 6.3 4.91-4.91M3.32 12.35l3.8-3.79M16.43 12.35l-4.04-4.03"
                                            ></path>
                                        <g transform="translate(14 -.66)">
                                            <mask id="b" fill="#fff">
                                                <use xlink:href="#a"></use>
                                            </mask>
                                            <path fill="#00AFFF"
                                                  d="M6 3.07H4.5v-1.5a.75.75 0 0 0-1.5 0v1.5H1.5a.75.75 0 0 0 0 1.5H3v1.5a.75.75 0 1 0 1.5 0v-1.5H6a.75.75 0 0 0 0-1.5"
                                                  mask="url(#b)"></path>
                                        </g>
                                    </g>
                                </svg>
                                <span class="_2i-9F">Invite friends</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" class="j5L9g"
                                   >
                                    <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path>
                                </svg>
                            </div>
                        </div>
                        <button class="_22wPT">
                            <div class="xPwPM">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="21" height="16" viewBox="0 0 21 16" class="_3QdfW">
                                    <defs>
                                        <path id="a" d="M3.74.82h3v6h-6v-6z"></path>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <path stroke="#00AFFF" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5" d="M11.69 2.33H.88V14.8h18V9.3"
                                            ></path>
                                        <path stroke="#00AFFF" stroke-linecap="round" stroke-linejoin="round"
                                              d="M3.32 4.78l6.31 6.3 4.91-4.91M3.32 12.35l3.8-3.79M16.43 12.35l-4.04-4.03"
                                            ></path>
                                        <g transform="translate(14 -.66)">
                                            <mask id="b" fill="#fff">
                                                <use xlink:href="#a"></use>
                                            </mask>
                                            <path fill="#00AFFF"
                                                  d="M6 3.07H4.5v-1.5a.75.75 0 0 0-1.5 0v1.5H1.5a.75.75 0 0 0 0 1.5H3v1.5a.75.75 0 1 0 1.5 0v-1.5H6a.75.75 0 0 0 0-1.5"
                                                  mask="url(#b)"></path>
                                        </g>
                                    </g>
                                </svg>
                                <span class="_2i-9F">Invite friends</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" class="j5L9g"
                                   >
                                    <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div class="hXKYZ">
                        <div class="_2qTcl">DRIVETRIBE Members</div>
                        <div class="_2qTcl">Email</div>
                        <div class="_2qTcl">Copy the link</div>
                    </div>
                </div>
                <!-- react-empty: 190 -->
            </div>
            <div class="_2F06s">
                <div class="_3JxnF _38P1C">
                    <div class="_1bRKx">
                        <nav class="_3GkHt _1R2o8">
                            <a class="zxDoM _3rBNC _2sG6-" href="/t/jeremy-clarksons-tribe-PgtD-TRMTVSO3dJmDa8Lkw"
                             >
                                <!-- react-text: 196 -->Posts<!-- /react-text -->
                            </a>
                            <a class="_3UwsA zxDoM _3rBNC"
                               href="/t/jeremy-clarksons-tribe-PgtD-TRMTVSO3dJmDa8Lkw/discussions">
                                <!-- react-text: 198 -->Discussions<!-- /react-text --><span class="_2-WMb _2aPX0"
                                                                                           ><span
                                            class="_1a2gI">28</span></span>
                            </a>
                        </nav>
                        <div class="_2Y2eP">
                            <button class="_1VJcf">
                                <div class="_32tSU">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="18" viewBox="0 0 3 17"
                                         class="_32tSU">
                                        <g fill="#00AFFF" fill-rule="evenodd">
                                            <path d="M2.2.69a1.15 1.15 0 1 1-2.1.92A1.15 1.15 0 0 1 2.2.7M2.2 7.87a1.15 1.15 0 1 1-2.1.92 1.15 1.15 0 0 1 2.1-.92M2.2 15.04a1.15 1.15 0 1 1-2.1.93 1.15 1.15 0 0 1 2.1-.93"
                                                ></path>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="_1YCPS _369Aa _2kPxQ">
                    <div class="_3ScM5">
                        <div class="_2QqZ9 _1p_jQ">
                            <div class="_3icdW">
                                <div style="padding-bottom:100%;" class="_38L6D"role="presentation"
                                                                                                         src="https://drivetribe.imgix.net/AobBsUgsQc6DkZiEab5vKg?w=100&amp;h=100&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges"
                                                                                                         class="_214e9 b00q8"
                                                                                                         width="32"
                                                                                                         height="32"
                                                                                                       >
                                </div>
                            </div>
                            <div class="vklpv">
                                <div class="lt6XA">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                         class="_1z7Hy">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                                ></path>
                                            <path fill="#FFF"
                                                  d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                                ></path>
                                        </g>
                                    </svg>
                                </div>
                                <a class="_37ior" href="/u/{{ $fanbase->user->slug }}">
                                    <!-- react-text: 222 -->Jeremy Clarkson<!-- /react-text -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                         class="_1z7Hy">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
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
                                    <a class="zxDoM _3rBNC _2sG6-"
                                       href="/t/jeremy-clarksons-tribe-PgtD-TRMTVSO3dJmDa8Lkw">
                                        <!-- react-text: 231 -->Posts<!-- /react-text -->
                                    </a>
                                    <a class="_3UwsA zxDoM _3rBNC"
                                       href="/t/jeremy-clarksons-tribe-PgtD-TRMTVSO3dJmDa8Lkw/discussions"
                                     >
                                        <!-- react-text: 233 -->Discussions<!-- /react-text --><span
                                                class="_2-WMb _2aPX0">28</span></span>
                                    </a>
                                </nav>
                            </div>
                        </div>
                        <button class="_2qvTq _1MC-v _1h78h _2yZ_n _1odcZ">
                            <span>Join tribe</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8"
                               >
                                <path fill="#FFF" fill-rule="evenodd" d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"
                                    ></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="_3P2x7">
                <div id="feed" class="_3slpw abgKc">
                    <!-- react-empty: 242 -->
                    <div>
                        <div class="_2u6Ki _1iE2V">
                            <div class="_3gFQj _3LtPT">
                                @foreach($posts as $k => $post)
                                    @if(fmod($k, 2))
                                        @include('post.item')
                                    @endif
                                @endforeach
                            </div>
                            <div class="_3gFQj _3LtPT">
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
    @include('templates.dribble')
    @include('templates.comments')
    @include('templates.posts')
@endsection
