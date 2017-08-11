@extends('layouts.app')

@section('title', $fanbase->name)

@section('content')
    <!-- react-empty: 43 -->
    <div class="_2q1KC">
        <div class="_3asg6"></div>
        <div class="_3asg7 _38P1C" data-reactid="45">
            <h1 class="_1xaT_ SqxHJ" data-reactid="46">
                {{ $fanbase->name }}
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="_1z7Hy _8SyER"
                     data-reactid="48">
                    <g fill="none" fill-rule="evenodd" data-reactid="49">
                        <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z" data-reactid="50"></path>
                        <path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                              data-reactid="51"></path>
                    </g>
                </svg>
            </h1>
        </div>
    </div>
    <div class="_2F06s" data-reactid="52">
        <div class="IEF7x _38P1C" data-reactid="53">
            <div class="_1bRKx" data-reactid="54">
                <nav class="_3GkHt _1R2o8" data-reactid="55">
                    <a class="zxDoM _3rBNC _2sG6-" href="/f/{{ $fanbase->slug }}"
                       data-reactid="56">
                        <!-- react-text: 57 -->Posts<!-- /react-text -->
                    </a>
                    <a style="display: none;" class="_3UwsA zxDoM _3rBNC" href="/f/{{ $fanbase->slug }}"
                       data-reactid="58">
                        <!-- react-text: 59 -->Discussions<!-- /react-text --><span class="_2-WMb _2aPX0"
                                                                                    data-reactid="60"><span
                                    class="_1a2gI" data-reactid="61">28</span></span>
                    </a>
                </nav>
                <div class="_2Y2eP" data-reactid="62">
                    <button class="_1VJcf" data-reactid="63">
                        <div class="_32tSU" data-reactid="64">
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="18" viewBox="0 0 3 17"
                                 class="_32tSU" data-reactid="65">
                                <g fill="#000" fill-rule="evenodd" data-reactid="66">
                                    <path d="M2.2.69a1.15 1.15 0 1 1-2.1.92A1.15 1.15 0 0 1 2.2.7M2.2 7.87a1.15 1.15 0 1 1-2.1.92 1.15 1.15 0 0 1 2.1-.92M2.2 15.04a1.15 1.15 0 1 1-2.1.93 1.15 1.15 0 0 1 2.1-.93"
                                          data-reactid="67"></path>
                                </g>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div data-reactid="68">
        <div class="_1YCPS _1YoJe _2kPxQ" data-reactid="69">
            <div class="_3ScM5" data-reactid="70">
                <div class="_2QqZ9 _1p_jQ" data-reactid="71">
                    <div class="_3icdW" data-reactid="72">
                        <div style="padding-bottom:100%;" class="_38L6D" data-reactid="73">
                            <img alt="" role="presentation"
                                 src="https://drivetribe.imgix.net/AobBsUgsQc6DkZiEab5vKg?w=100&amp;h=100&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges"
                                 class="_214e9 b00q8" width="32" height="32" data-reactid="74">
                        </div>
                    </div>
                    <div class="vklpv" data-reactid="75">
                        <div class="lt6XA" data-reactid="76">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                 class="_1z7Hy" data-reactid="78">
                                <g fill="none" fill-rule="evenodd" data-reactid="79">
                                    <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                          data-reactid="80"></path>
                                    <path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                          data-reactid="81"></path>
                                </g>
                            </svg>
                        </div>
                        <a class="_37ior" href="/u/{{ $fanbase->user->slug }}" data-reactid="82">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                 class="_1z7Hy" data-reactid="84">
                                <g fill="none" fill-rule="evenodd" data-reactid="85">
                                    <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                          data-reactid="86"></path>
                                    <path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                          data-reactid="87"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="_3vhE-" data-reactid="88">
                    <div class="_1bRKx" data-reactid="89">
                        <nav class="_3GkHt _1R2o8" data-reactid="90">
                            <a class="zxDoM _3rBNC _2sG6-" href="/f/{{ $fanbase->slug }}"
                               data-reactid="91">
                                Posts
                            </a>
                            <a class="_3UwsA zxDoM _3rBNC"
                               href="/f/{{ $fanbase->slug }}?page=discussions">
                                Discussions
                                <span>
                                    <span class="_2-WMb _2aPX0" class="_1a2gI" data-reactid="96">{{ rand(1, 40) }}</span>
                                </span>
                            </a>
                        </nav>
                    </div>
                </div>
                <button class="_2qvTq _1MC-v _1h78h _2yZ_n _1odcZ" data-reactid="97">
                    <span data-reactid="98">Join fanbase</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" data-reactid="99">
                        <path fill="#FFF" fill-rule="evenodd" d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"
                              data-reactid="100"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="_3WhNf" data-reactid="101">
        <div class="ytyuy _38P1C" data-reactid="102">
            <div class="rks9Y" data-reactid="103">
                <div class="T1M_q" data-reactid="104">
                    <div class="LPTvp _3Xaa0 _1KXFt">
                        <div class="_23p6h">
                            <img alt="" role="presentation" src="{{ $fanbase->resized_image }}" class="_214e9 b00q8" width="200" height="200">
                        </div>
                    </div>
                    <div class="_2UPZy" data-initials="{{ $fanbase->initials }}" data-reactid="106"></div>
                </div>
                <div class="_2DLtu" data-reactid="107">
                    <button class="_2qvTq _1MC-v _1h78h _2yZ_n _8eFus" data-reactid="108">
                        <span data-reactid="109">Join fanbase</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8"
                             data-reactid="110">
                            <path fill="#FFF" fill-rule="evenodd" d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"
                                  data-reactid="111"></path>
                        </svg>
                    </button>
                </div>
                <div class="sZVC2" data-reactid="112">
                    <h1 class="_1xaT_ SqxHJ" data-reactid="113">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                             class="_1z7Hy _8SyER" data-reactid="115">
                            <g fill="none" fill-rule="evenodd" data-reactid="116">
                                <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z" data-reactid="117"></path>
                                <path fill="#FFF" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                      data-reactid="118"></path>
                            </g>
                        </svg>
                    </h1>
                    <button class="_1VJcf">
                        <div class="_32tSU">
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="18" viewBox="0 0 3 17"
                                 class="_32tSU">
                                <g fill="#000" fill-rule="evenodd">
                                    <path d="M2.2.69a1.15 1.15 0 1 1-2.1.92A1.15 1.15 0 0 1 2.2.7M2.2 7.87a1.15 1.15 0 1 1-2.1.92 1.15 1.15 0 0 1 2.1-.92M2.2 15.04a1.15 1.15 0 1 1-2.1.93 1.15 1.15 0 0 1 2.1-.93"></path>
                                </g>
                            </svg>
                        </div>
                    </button>
                </div>
                <div class="_3p0RC" data-reactid="119">
                    <div class="_1OwiL _126V6" data-reactid="120">
                        <div class="zFsq3 _1iE2V _3jt-p" data-reactid="121">
                            <a class="" href="/u/{{ $fanbase->user->slug }}" data-reactid="122">
                                <div class="_25jNX _3Y-3q" style="width:35px;height:35px;" data-reactid="123">
                                    <div class="N3r_f" data-reactid="124">
                                        <div style="padding-bottom:100%;" class="_38L6D" data-reactid="125">
                                            {!! $fanbase->user->resized_image !!}
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="RDrYv _2bDpH" data-reactid="128">
                                <p class="_2nWjU _2YnA3 KTIgi" data-reactid="129">
                                    <a class="_2XyXQ" href="/u/{{ $fanbase->user->slug }}">
                                        {{ $fanbase->user->name }}
                                    </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                         class="_1z7Hy _1NCGm" data-reactid="131">
                                        <g fill="none" fill-rule="evenodd" data-reactid="132">
                                            <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                                  data-reactid="133"></path>
                                            <path fill="#FFF"
                                                  d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                                  data-reactid="134"></path>
                                        </g>
                                    </svg>
                                </p>
                                <div class="_1HPk2 TzCC1">
                                    <span>Fanbase Leader</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_1i-5m" data-reactid="137">{{ $fanbase->description }}</div>
                    <div class="_16scH _23-G3" data-reactid="138">
                        <a class="nXDDw _4wu2M" href="/t/PgtD-TRMTVSO3dJmDa8Lkw/members" data-reactid="139">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14"
                                 data-reactid="140">
                                <path fill-rule="evenodd"
                                      d="M6.7 1.5C8 1.5 9 2.5 9 4c0 1.3-1 2.4-2.3 2.4-1.4 0-2.5-1-2.5-2.4s1-2.5 2.5-2.5M9.2 7c1-.7 1.4-1.8 1.4-3 0-2.2-1.8-4-4-4-2 0-4 1.8-4 4 0 1.2.7 2.3 1.5 3-2 1-3.5 3-4 5.8 0 .4.2.8.6.8.4 0 .8-.2 1-.6.4-3 2.6-5 5-5 2.5 0 4.7 2 5.2 5 0 .4.4.7.8.7.5 0 .8-.5.7-1-.5-2.6-2-4.7-4-5.7m4.8 0c.6-.8 1-1.7 1-2.7 0-2.2-1.8-4-4-4-.5 0-.8.4-.8.8 0 .5.3 1 .8 1 1.3 0 2.4 1 2.4 2.3 0 1-.4 1.7-1.2 2.2-.4.2-.5.6-.3 1 .3.2.5.4.8.4 1.8.5 3.3 2.4 3.7 4.6 0 .4.4.6.7.6h.2c.4 0 .7-.4.6-.8C17.5 10 16 8 14.2 7"
                                      data-reactid="141"></path>
                            </svg>
                            <span class="_2OsaV" data-reactid="142">{{ rand(1, 100) }}K</span>
                        </a>
                        <div class="nXDDw _2Ngcr" data-reactid="143">
                            <svg width="24" height="23" viewBox="-3 -3 23 24" data-reactid="144">
                                <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75L13.5 0zm-.1 1.87l3.1 2.58V8.3L9 14.55 1.5 8.3V4.45l3.1-2.58L9 4.8l4.4-2.93z"
                                      fill="#000" fill-rule="evenodd" opacity="1" data-reactid="145"></path>
                                <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75" fill="#00AFFF" fill-rule="evenodd"
                                      opacity="0" data-reactid="146"></path>
                            </svg>
                            <span class="_2OsaV" data-reactid="147">{{ rand(1, 100) }}K</span>
                        </div>
                        <div class="nXDDw" data-reactid="148">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15"
                                 data-reactid="149">
                                <g fill="none" fill-rule="evenodd" data-reactid="150">
                                    <path fill="#FFF" d="M11.31 7.16a2.4 2.4 0 1 1-4.78 0 2.4 2.4 0 0 1 4.78 0"
                                          data-reactid="151"></path>
                                    <path fill="#000"
                                          d="M8.92 5.27a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 0 0 0-3.8m0 4.79a2.9 2.9 0 1 1 0-5.8 2.9 2.9 0 0 1 0 5.8"
                                          data-reactid="152"></path>
                                    <path fill="#000"
                                          d="M1.6 7.36c1.98 3.43 4.69 5.47 7.32 5.47s5.34-2.04 7.3-5.47c-2.08-3.68-4.8-5.86-7.3-5.86S3.7 3.68 1.6 7.36m7.3 6.97c-3.27 0-6.57-2.47-8.82-6.61A.75.75 0 0 1 .1 7c2.38-4.38 5.68-7 8.83-7 3.14 0 6.44 2.62 8.83 7 .12.23.12.5 0 .72-2.25 4.14-5.55 6.6-8.83 6.6"
                                          data-reactid="153"></path>
                                </g>
                            </svg>
                            <span class="_2OsaV" data-reactid="154">{{ rand(1, 11) }}M</span>
                        </div>
                    </div>
                    <div class="DZpu2" data-reactid="155">
                        <div class="_2K1XH" data-reactid="156">
                            <div class="xPwPM" data-reactid="157">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="21" height="16" viewBox="0 0 21 16" class="_3QdfW" data-reactid="158">
                                    <defs data-reactid="159">
                                        <path id="a" d="M3.74.82h3v6h-6v-6z" data-reactid="160"></path>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" data-reactid="161">
                                        <path stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5" d="M11.69 2.33H.88V14.8h18V9.3"
                                              data-reactid="162"></path>
                                        <path stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                              d="M3.32 4.78l6.31 6.3 4.91-4.91M3.32 12.35l3.8-3.79M16.43 12.35l-4.04-4.03"
                                              data-reactid="163"></path>
                                        <g transform="translate(14 -.66)" data-reactid="164">
                                            <mask id="b" fill="#fff" data-reactid="165">
                                                <use xlink:href="#a" data-reactid="166"></use>
                                            </mask>
                                            <path fill="#000"
                                                  d="M6 3.07H4.5v-1.5a.75.75 0 0 0-1.5 0v1.5H1.5a.75.75 0 0 0 0 1.5H3v1.5a.75.75 0 1 0 1.5 0v-1.5H6a.75.75 0 0 0 0-1.5"
                                                  mask="url(#b)" data-reactid="167"></path>
                                        </g>
                                    </g>
                                </svg>
                                <span class="_2i-9F" data-reactid="168">Invite friends</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" class="j5L9g"
                                     data-reactid="169">
                                    <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0" data-reactid="170"></path>
                                </svg>
                            </div>
                        </div>
                        <button class="_22wPT" data-reactid="171">
                            <div class="xPwPM" data-reactid="172">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="21" height="16" viewBox="0 0 21 16" class="_3QdfW" data-reactid="173">
                                    <defs data-reactid="174">
                                        <path id="a" d="M3.74.82h3v6h-6v-6z" data-reactid="175"></path>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" data-reactid="176">
                                        <path stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5" d="M11.69 2.33H.88V14.8h18V9.3"
                                              data-reactid="177"></path>
                                        <path stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                              d="M3.32 4.78l6.31 6.3 4.91-4.91M3.32 12.35l3.8-3.79M16.43 12.35l-4.04-4.03"
                                              data-reactid="178"></path>
                                        <g transform="translate(14 -.66)" data-reactid="179">
                                            <mask id="b" fill="#fff" data-reactid="180">
                                                <use xlink:href="#a" data-reactid="181"></use>
                                            </mask>
                                            <path fill="#000"
                                                  d="M6 3.07H4.5v-1.5a.75.75 0 0 0-1.5 0v1.5H1.5a.75.75 0 0 0 0 1.5H3v1.5a.75.75 0 1 0 1.5 0v-1.5H6a.75.75 0 0 0 0-1.5"
                                                  mask="url(#b)" data-reactid="182"></path>
                                        </g>
                                    </g>
                                </svg>
                                <span class="_2i-9F" data-reactid="183">Invite friends</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" class="j5L9g"
                                     data-reactid="184">
                                    <path d="M0 0l6 6.99L12 0h-1.87L6 4.82 1.86 0" data-reactid="185"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div class="hXKYZ" data-reactid="186">
                        <div class="_2qTcl" data-reactid="187">DRIVETRIBE Members</div>
                        <div class="_2qTcl" data-reactid="188">Email</div>
                        <div class="_2qTcl" data-reactid="189">Copy the link</div>
                    </div>
                </div>
                <!-- react-empty: 190 -->
            </div>
            <div class="_2F06s" data-reactid="191">
                <div class="_3JxnF _38P1C" data-reactid="192">
                    <div class="_1bRKx" data-reactid="193">
                        <nav class="_3GkHt _1R2o8" data-reactid="194">
                            <a class="zxDoM _3rBNC _2sG6-" href="/t/jeremy-clarksons-tribe-PgtD-TRMTVSO3dJmDa8Lkw"
                               data-reactid="195">
                                <!-- react-text: 196 -->Posts<!-- /react-text -->
                            </a>
                            <a class="_3UwsA zxDoM _3rBNC"
                               href="/t/jeremy-clarksons-tribe-PgtD-TRMTVSO3dJmDa8Lkw/discussions" data-reactid="197">
                                <!-- react-text: 198 -->Discussions<!-- /react-text --><span class="_2-WMb _2aPX0"
                                                                                             data-reactid="199"><span
                                            class="_1a2gI" data-reactid="200">28</span></span>
                            </a>
                        </nav>
                        <div class="_2Y2eP" data-reactid="201">
                            <button class="_1VJcf" data-reactid="202">
                                <div class="_32tSU" data-reactid="203">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="18" viewBox="0 0 3 17"
                                         class="_32tSU" data-reactid="204">
                                        <g fill="#000" fill-rule="evenodd" data-reactid="205">
                                            <path d="M2.2.69a1.15 1.15 0 1 1-2.1.92A1.15 1.15 0 0 1 2.2.7M2.2 7.87a1.15 1.15 0 1 1-2.1.92 1.15 1.15 0 0 1 2.1-.92M2.2 15.04a1.15 1.15 0 1 1-2.1.93 1.15 1.15 0 0 1 2.1-.93"
                                                  data-reactid="206"></path>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div data-reactid="207">
                <div class="_1YCPS _369Aa _2kPxQ" data-reactid="208">
                    <div class="_3ScM5" data-reactid="209">
                        <div class="_2QqZ9 _1p_jQ" data-reactid="210">
                            <div class="_3icdW" data-reactid="211">
                                <div style="padding-bottom:100%;" class="_38L6D" data-reactid="212"><img alt=""
                                                                                                         role="presentation"
                                                                                                         src="https://drivetribe.imgix.net/AobBsUgsQc6DkZiEab5vKg?w=100&amp;h=100&amp;fm=pjpg&amp;auto=compress&amp;fit=crop&amp;crop=faces,edges"
                                                                                                         class="_214e9 b00q8"
                                                                                                         width="32"
                                                                                                         height="32"
                                                                                                         data-reactid="213">
                                </div>
                            </div>
                            <div class="vklpv" data-reactid="214">
                                <div class="lt6XA" data-reactid="215">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                         class="_1z7Hy" data-reactid="217">
                                        <g fill="none" fill-rule="evenodd" data-reactid="218">
                                            <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                                  data-reactid="219"></path>
                                            <path fill="#FFF"
                                                  d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                                  data-reactid="220"></path>
                                        </g>
                                    </svg>
                                </div>
                                <a class="_37ior" href="/u/{{ $fanbase->user->slug }}" data-reactid="221">
                                    <!-- react-text: 222 -->Jeremy Clarkson<!-- /react-text -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                         class="_1z7Hy" data-reactid="223">
                                        <g fill="none" fill-rule="evenodd" data-reactid="224">
                                            <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"
                                                  data-reactid="225"></path>
                                            <path fill="#FFF"
                                                  d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"
                                                  data-reactid="226"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="_3vhE-" data-reactid="227">
                            <div class="_1bRKx" data-reactid="228">
                                <nav class="_3GkHt _1R2o8" data-reactid="229">
                                    <a class="zxDoM _3rBNC _2sG6-"
                                       href="/t/jeremy-clarksons-tribe-PgtD-TRMTVSO3dJmDa8Lkw" data-reactid="230">
                                        <!-- react-text: 231 -->Posts<!-- /react-text -->
                                    </a>
                                    <a class="_3UwsA zxDoM _3rBNC"
                                       href="/t/jeremy-clarksons-tribe-PgtD-TRMTVSO3dJmDa8Lkw/discussions"
                                       data-reactid="232">
                                        <!-- react-text: 233 -->Discussions<!-- /react-text --><span
                                                class="_2-WMb _2aPX0" data-reactid="234"><span class="_1a2gI"
                                                                                               data-reactid="235">28</span></span>
                                    </a>
                                </nav>
                            </div>
                        </div>
                        <button class="_2qvTq _1MC-v _1h78h _2yZ_n _1odcZ" data-reactid="236">
                            <span data-reactid="237">Join tribe</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8"
                                 data-reactid="238">
                                <path fill="#FFF" fill-rule="evenodd" d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"
                                      data-reactid="239"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="_3P2x7" data-reactid="240">
                <div id="feed" class="_3slpw abgKc" data-reactid="241">
                    <!-- react-empty: 242 -->
                    <div data-reactid="243">
                        <div class="_2u6Ki _1iE2V" data-reactid="244">
                            <div class="_3gFQj _3LtPT" data-reactid="245">
                                @foreach($posts as $k => $post)
                                    @if(fmod($k, 2))
                                        @include('post.item')
                                    @endif
                                @endforeach
                            </div>
                            <div class="_3gFQj _3LtPT" data-reactid="833">
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
@endsection
