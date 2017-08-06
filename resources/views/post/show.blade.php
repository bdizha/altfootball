@extends('layouts.app')

@section('title', 'Altfootball')

@section('meta')
    @include('includes.meta', $post->getMeta($url))
@endsection

@section('content')
    <?php $tackles = rand(1, 23) ?>
    <?php $Dribbles = rand(1, 2777) ?>
    <article>
        <div class="j-W_D _1iE2V">
            <div class="_1veAI _1iE2V">
                <div class="_1lNSv _3Vb-u">
                    <a class="_2kQCw" href="/f/{{ $post->fanbase()->slug }}">
                        <div class="_1Gyo9 e_0uO" data-initials="{{ $post->fanbase()->initials }}"></div>
                        <p class="_3FTXM wcqil">
                            {{ $post->fanbase()->name }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                 class="G0duV">
                                <g fill="none" fill-rule="evenodd">
                                    <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                    <path fill="#FFF"
                                          d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                </g>
                            </svg>
                        </p>
                    </a>
                </div>
                <div class="_1-sfe _29LD-">
                    <h1 class="_12F3w iAiuJ">{{ $post->title }}</h1>
                    <div class="dqbp5">
                        <div class="_25jNX _3PwOQ">
                            <div class="N3r_f">
                                <div class="_38L6D" style="padding-bottom: 100%;">
                                    {!! $post->user->getImage() !!}
                                </div>
                            </div>
                        </div>
                        <div class="_1pPnu _2Nd08">
                            <div class="">
                                <span class="_1NHvQ _3Xf-w">
                                    <a class="" href="/u/{{ $post->user->slug }}">
                                        {{ $post->user->nickname }}
                                    </a>
                                    <span>
                                <span>
                            posted in <br></span>
                            <a class="_1XNRF"
                               href="/f/{{ $post->fanbase()->slug }}">
                                {{ $post->fanbase()->name }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                     class="_1z7Hy">
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                        <path fill="#FFF"
                                              d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                    </g>
                                </svg>
                            </a>
                            </span>
                            </span>
                            </div>
                            <div class="_3qkzJ">
                                <p class="_2B25b"><span class="_2jvdf">{{ $post->published_at }}</span></p>
                                <p class="TATrW">
                                    {{ $post->views }}K Views
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_1Fx1P _1iE2V _1Ov3j">
                <div class="_1-sfe CDTi0">
                    <div class="_1l_wG _29Okg">
                        <a class="_2Oo2A rF2QA" href="/p/{{ $post->slug }}#tackles">
                            <span class="_35FcZ">
                                Tackles
                            </span>
                            <span class="_3HP-Q">
                                ({{ $tackles }})
                            </span>
                        </a>
                        <div class="_8m6WC rF2QA"><span class="_35FcZ">Forward</span></div>
                        <button class="_3yFg8 rF2QA">
                            <div class="_1_VaP">
                                <span class="_35FcZ">Dribbles</span>
                                <span class="_3HP-Q">({{ $Dribbles }})</span>
                                <svg width="24" height="23" viewBox="-3 -3 23 24">
                                    <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75L13.5 0zm-.1 1.87l3.1 2.58V8.3L9 14.55 1.5 8.3V4.45l3.1-2.58L9 4.8l4.4-2.93z"
                                          fill="#000" fill-rule="evenodd" opacity="1" class="outline"
                                          transform="translate(0, 0) translate(-9, -8.25) scale(1, 1) translate(9, 8.25) rotate(0, 9, 8.25) skewX(0) skewY(0) "></path>
                                    <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75" fill="#00AFFF"
                                          fill-rule="evenodd" opacity="0" class="heart"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div class="_3o2ca">
                        <a class="_2Q0fU p1Di1" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                <path fill="#FFF" fill-rule="evenodd"
                                      d="M4.16 0c1.83 0 2.6.22 2.6.22l-.37 1.84s-.6-.15-1.16-.15c-.57 0-1.07.17-1.07.66v1.4h2.3l-.15 1.8H4.16V12H1.45V5.76H0v-1.8h1.45v-1.2c0-.53.01-1.35.46-1.86C2.4.37 3.04 0 4.16 0"></path>
                            </svg>
                        </a>
                        <a class="_2Q0fU _3cqrr" href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                                <path fill="#FFF" fill-rule="evenodd"
                                      d="M10.24 0c.83 0 1.58.34 2.13.9h.05c.4 0 1.2-.1 1.98-.66 0 0 .04.64-1.23 1.63 0 0 1.18-.1 1.66-.45 0 0-.11.41-1.54 1.7 0 0 .48 7.01-6.87 8.73 0 0-.72.15-1.75.15A7.78 7.78 0 0 1 0 10.61s.37.07.93.07c.96 0 2.47-.2 3.49-1.32-.08 0-2.07-.02-2.7-2.07 0 0 .29.06.62.06.21 0 .43-.03.61-.1 0 0-2.32-.49-2.28-3.02 0 0 .53.39 1.05.39l.14-.01s-2.09-1.78-.8-4c0 0 2.65 3.13 5.99 3.13l.3-.01A2.99 2.99 0 0 1 10.25 0"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="_1Xbrb _9fE1R NasRD">
                    <div class="_1QuY4">
                        <h2>LIKE {{ $post->fanbase()->name }}?</h2></div>
                    <div class="_2KK_J _1yV5F _1MC-v _1h78h">
                        JOIN ALTFOOTBALL
                    </div>
                </div>
            </div>
            <div class="_1Y7kL">
                <div class="vowHC _1KXFt">
                    <div class="_23p6h">
                        {!! $post->getImage("width=1236&height=695") !!}
                    </div>
                </div>
                <p class="_2cAm4">CREDIT: <a target="_blank" href="http://{{ $post->credit }}">{{ $post->credit }}</a></p>
            </div>
            <div class="_3BzB6 _1Fx1P _1iE2V _3wPPl">
                <div>
                    <div class="undefined _2-_Re _378qt">
                        <a class="_23nwS" href="/f/{{ $post->fanbase()->slug }}">
                            <div class="_1Gyo9 Ofajv" data-initials="{{ $post->fanbase()->initials }}"></div>
                        </a>
                        <h2 class="_3mNJn">{{ $post->title }}</h2>
                        <div class="_mHwf _29Okg">
                            <a class="_2Oo2A rF2QA"
                               href="/p/hammond-enjoys-night-out-after-Lag4Ra_iR6WLzgJC0dSaxQ#tackles">
                                <span class="_35FcZ">
                                    COMMENTS
                                    <span class="_3HP-Q">
                                         ({{ $tackles }})
                                    </span>
                                </span>
                            </a>
                            <div class="_8m6WC rF2QA"><span class="_35FcZ">Forward</span></div>
                            <button class="_3yFg8 rF2QA">
                                <div class="_1_VaP">
                                    <span class="_35FcZ">Dribbles</span>
                                    <span class="_3HP-Q"> ({{ $Dribbles }})</span>
                                    <svg width="24" height="23" viewBox="-3 -3 23 24">
                                        <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75L13.5 0zm-.1 1.87l3.1 2.58V8.3L9 14.55 1.5 8.3V4.45l3.1-2.58L9 4.8l4.4-2.93z"
                                              fill="#000" fill-rule="evenodd" opacity="1" class="outline"></path>
                                        <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75" fill="#00AFFF"
                                              fill-rule="evenodd" opacity="0" class="heart"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                        <div class="_1Sbj_">
                            <button class="mThhK">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20">
                                    <path fill="#000" fill-rule="evenodd" stroke="#000" stroke-width=".5"
                                          d="M14.75 12.57c-1.04 0-1.96.49-2.55 1.25l-4.95-2.76a3.23 3.23 0 0 0 0-2.13l4.94-2.76a3.21 3.21 0 1 0-.48-.89L6.77 8.04a3.22 3.22 0 1 0 0 3.9l4.95 2.77a3.2 3.2 0 0 0 3.03 4.3 3.22 3.22 0 0 0 0-6.44zm0-10.56a2.21 2.21 0 1 1 0 4.42 2.21 2.21 0 0 1 0-4.42zM4.22 12.21a2.21 2.21 0 1 1 0-4.43 2.21 2.21 0 0 1 0 4.43zm10.53 5.78a2.21 2.21 0 1 1 0-4.42 2.21 2.21 0 0 1 0 4.42z"></path>
                                </svg>
                            </button>
                            <div class="fHCTs _3o2ca">
                                <a class="_2Q0fU p1Di1" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                        <path fill="#FFF" fill-rule="evenodd"
                                              d="M4.16 0c1.83 0 2.6.22 2.6.22l-.37 1.84s-.6-.15-1.16-.15c-.57 0-1.07.17-1.07.66v1.4h2.3l-.15 1.8H4.16V12H1.45V5.76H0v-1.8h1.45v-1.2c0-.53.01-1.35.46-1.86C2.4.37 3.04 0 4.16 0"></path>
                                    </svg>
                                </a>
                                <a class="_2Q0fU _3cqrr" href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                                        <path fill="#FFF" fill-rule="evenodd"
                                              d="M10.24 0c.83 0 1.58.34 2.13.9h.05c.4 0 1.2-.1 1.98-.66 0 0 .04.64-1.23 1.63 0 0 1.18-.1 1.66-.45 0 0-.11.41-1.54 1.7 0 0 .48 7.01-6.87 8.73 0 0-.72.15-1.75.15A7.78 7.78 0 0 1 0 10.61s.37.07.93.07c.96 0 2.47-.2 3.49-1.32-.08 0-2.07-.02-2.7-2.07 0 0 .29.06.62.06.21 0 .43-.03.61-.1 0 0-2.32-.49-2.28-3.02 0 0 .53.39 1.05.39l.14-.01s-2.09-1.78-.8-4c0 0 2.65 3.13 5.99 3.13l.3-.01A2.99 2.99 0 0 1 10.25 0"></path>
                                    </svg>
                                </a>
                                {{--<button class="_2Q0fU _23g2_">--}}
                                {{--<svg xmlns="http://www.w3.org/2000/svg" width="18" height="3" viewBox="0 0 18 3">--}}
                                {{--<path fill="#666" fill-rule="evenodd"--}}
                                {{--d="M2.88 1.44a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0zm7.2 0a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0zm7.2 0a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z"></path>--}}
                                {{--</svg>--}}
                                {{--</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_1Q_Pu">
                    <p class="_25BgE">
                        <span><span>{{ $post->summary }}</span></span>
                    </p>
                    {!! $post->getHtmlContent() !!}
                    <div id="tackles" class="jwlFt _1zwKC">
                        <div class="_1gLAu _1iE2V">
                            <div class="_1-sfe">
                                <div>
                                    <div id="fb-root"></div>
                                    <div class="_3G-jr">Like us on facebook</div>
                                    <div class="_3Z0E3">
                                        <img src="/images/logo.png" alt="AltFootball" class="_1aThB">
                                        <div class="_3GhRl">
                                            <a class="zzDw5" href="https://www.facebook.com/altfootballdotcom/" rel="nofollow">ALTFOOTBALL</a>
                                            <div class="fb-like _1kDAA fb_iframe_widget"
                                                 data-href="https://www.facebook.com/altfootballdotcom" data-layout="button"
                                                 data-action="like" data-size="small" data-show-faces="false" data-share="false">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <comments params='comments: {!! $comments !!}, currentUser: {!! $user !!}, type_id: {{ $post->id }}'></comments>
                                <template id='comments-template'>
                                    <div>
                                        <h2 class="_1lisf">Join in</h2>
                                        <form class="_33rbn _2XbY_" data-bind="submit: saveComment">
                                            <div>
                                                <div>
                                                    <textarea placeholder="Want to add something?" class="_1FJkk _2u-lb" data-bind="value: newCommentText"></textarea>
                                                </div>
                                            </div>
                                            <div class="_3FA_l">
                                                <div class="_2A7z5 _29E8b">
                                                    <label for="Lag4Ra_iR6WLzgJC0dSaxQ" class="NOB1F">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path fill="#000"
                                                                      d="M16.5 13.1h-2.04A5.6 5.6 0 0 0 9 6.1a5.64 5.64 0 0 0-5.46 7H1.5V4.8h15v8.3zM9 15.87A4.14 4.14 0 1 1 9 7.6a4.14 4.14 0 0 1 0 8.28zM6.94 1.5h4.12l1.25 1.8H5.69l1.25-1.8zm10.31 1.8h-3.12L12.08.32a.75.75 0 0 0-.62-.32H6.54a.75.75 0 0 0-.62.32L3.87 3.3H.75a.75.75 0 0 0-.75.75v9.8c0 .41.34.75.75.75h3.4a5.63 5.63 0 0 0 9.7 0h3.4c.41 0 .75-.34.75-.75v-9.8a.75.75 0 0 0-.75-.75z"></path>
                                                                <path fill="#000"
                                                                      d="M9 13.23a1.5 1.5 0 1 1 0-2.99 1.5 1.5 0 0 1 0 3m0-4a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5"></path>
                                                            </g>
                                                        </svg>
                                                    </label>
                                                    <input type="file" name="Lag4Ra_iR6WLzgJC0dSaxQ" id="Lag4Ra_iR6WLzgJC0dSaxQ"
                                                           accept="image/*">
                                                </div>
                                                <button type="submit" class="_1kqns">Post</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="_2uxNN">
                                        Tackles(<span data-bind="text: commentsCount"></span>)
                                    </div>
                                    <ul class="_1RyqV" data-bind="foreach: comments, visible: comments().length > 0">
                                        <li class="gEjmr undefined">
                                            <span class="_3HYOY"></span>
                                            <div data-bind="if: parent">
                                                <quoted params='comment: $data'></quoted>
                                            </div>
                                            <div class="mkIC1">
                                                <a class="" data-bind="attr: { href: '/u/' + user.slug }">
                                                    <div class="_25jNX _3kBjx">
                                                        <div class="N3r_f">
                                                            <div class="_38L6D" style="padding-bottom: 100%;">
                                                                <img class="_214e9 b00q8" data-bind="attr: { src: user.image }">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="_1lUs3" data-bind="attr: { href: '/u/' + user.slug }, text: user.name"></a>
                                            </div>
                                            <p class="_2OqId">
                                                <span>
                                                    <span data-bind="text: content"></span>
                                                </span>
                                            </p>
                                            <div class="BNBMP">
                                                <div class="_1aSFb" data-bind="text: published_at"></div>
                                                <div class="_22SkP">
                                                    <button data-bind="click: $parent.reply">Reply</button>
                                                </div>
                                            </div>
                                            <div data-bind="if: is_replying">
                                                <reply-form params='comment: $data, currentUser: {!! $user !!}, callback: $parent.update'></reply-form>
                                            </div>
                                            <button class="_2MdIb">
                                                <div class="_1_VaP">
                                                    <svg width="24" height="23" viewBox="-3 -3 23 24">
                                                        <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75L13.5 0zm-.1 1.87l3.1 2.58V8.3L9 14.55 1.5 8.3V4.45l3.1-2.58L9 4.8l4.4-2.93z" fill="#000" fill-rule="evenodd" opacity="1" class="outline"></path>
                                                        <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75" fill="#00AFFF" fill-rule="evenodd" opacity="0" class="heart"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </li>
                                    </ul>
                                </template>
                                <template id='quoted-template'>
                                    <div class="_RG6wD">
                                        <div class="_TY7MN">
                                            <span class="_KI9WD" data-bind="text: comment().parent ? comment().user.name : ''"></span>
                                        </div>
                                        <div class="_MS1DF" data-bind="text: comment().parent ? comment().parent.content : ''"></div>
                                    </div>
                                </template>
                                <template id='reply-form-template'>
                                    <div class="ivfOh _3ZzkS">
                                        <div class="_1HA3l _3CHps">
                                            <div class="_25jNX _2l14J">
                                                <div class="N3r_f">
                                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                                        <img alt="" role="presentation" data-bind="attr: { src: currentUser().image }" class="_214e9 b00q8" width="60" height="60">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="_1bkDE" data-bind="text: currentUser().name"></div>
                                                <div class="BB62-">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" class="_3TxDq">
                                                        <path fill-rule="evenodd" d="M7 12L0 6l7-6v1.86L2.16 6 7 10.14"></path>
                                                    </svg>
                                                    <span data-bind="text: comment().user.name"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="_33rbn ODDw0" data-bind="submit: saveReply">
                                            <div class="sc-bdVaJa fBUmFc">
                                                <div>
                                                    <textarea placeholder="What are your thoughts?" data-bind="value: replyText" class="_3fi2B _2u-lb"></textarea>
                                                </div>
                                            </div>
                                            <div class="_3FA_l">
                                                <div class="_2A7z5 _29E8b">
                                                    <label for="media-upload" class="NOB1F">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="21" viewBox="0 0 27 21">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path stroke="#95A0AF" stroke-width="1.8" d="M9.93 1.32l-2.18 3.5H1.8c-.5 0-.9.4-.9.9V19.2c0 .5.4.9.9.9h22.9c.5 0 .9-.4.9-.9V5.72c0-.5-.4-.9-.9-.9h-5.95l-2.18-3.5A.9.9 0 0 0 15.8.9h-5.1a.9.9 0 0 0-.77.42z"></path>
                                                                <ellipse cx="13.25" cy="12.1" stroke="#95A0AF" stroke-width="1.8" rx="5.19" ry="5.15"></ellipse>
                                                                <path fill="#95A0AF" d="M20.95 8.9a.9.9 0 1 0 0-1.78c-.5 0-.9.4-.9.89s.4.89.9.89"></path>
                                                            </g>
                                                        </svg>
                                                    </label>
                                                    <input type="file" name="media-upload" id="media-upload" accept="image/*">
                                                </div>
                                                <button class="_2LRWs _1kqns" type="button">Cancel</button>
                                                <button type="submit" class="_1kqns">Post</button>
                                            </div>
                                        </form>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_3VSm9 _3bVUr _2GMT0">
                    <div class="_24kFo">
                        <div class="_3zT4K">TRENDING POSTS_</div>
                        <div class="_3broS">
                            @foreach($trendingPosts as $post)
                                <div class="_2Eh0V _2bbto YgLNn">
                                    <div class="_1XrlP _25JSo">
                                        <a class="_2xn_m _238kJ"
                                           href="/p/{{ $post->slug }}">
                                            <div class="_1w60_">
                                                <div class="_2pUFC _3Xaa0">
                                                    {!! $post->getImage("width=350&height=196") !!}
                                                </div>
                                            </div>
                                        </a>
                                        <div class="_2fUiv _3lJNV">
                                            <a class="_3H01F _135mL _38OvA" href="/p/{{ $post->slug }}">
                                                {{ $post->title }}
                                            </a>
                                            <div class="_3RbBo">
                                                <a class="" href="/u/{{ $post->user->slug }}">
                                                    <div class="_25jNX _3lGf-">
                                                        <div class="N3r_f">
                                                            <div class="_38L6D" style="padding-bottom: 100%;">
                                                                {!! $post->user->getImage() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="zv5pR E6O3i">
                                                    <a class="_3f32u _38OvA" href="/u/{{ $post->user->slug }}">
                                                        {{ $post->user->nickname }}
                                                    </a>
                                                    <a class="O0stn _38OvA"
                                                       href="/f/{{ $post->fanbase()->slug }}">
                                                        {{ $post->fanbase()->name }}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                             viewBox="0 0 18 18" class="_1z7Hy">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path fill="#64c431"
                                                                      d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                                                <path fill="#FFF"
                                                                      d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="_3tkuf">
                        <div class="_1drt2 _9fE1R NasRD">
                            <div>
                                <h2>Never miss a post</h2></div>
                            <div class="_3OD4J _1yV5F _1MC-v _1h78h">
                                Join {{  $post->fanbase()->name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_2xoE4 NasRD _3QYjF">
                <button class="_1Zj5n _1cG70 _2YLzg">
                    <svg width="10" height="10">
                        <path fill="none" stroke="#000" stroke-linecap="square" stroke-width="2"
                              d="M1.64 1.6L8.3 8.26M8.16 1.6L1.51 8.26"></path>
                    </svg>
                </button>
                <div class="_2pnaG NasRD">
                    <h2>Like this?</h2>
                    <div class="_3Cj79 _1geYT">Get more</div>
                </div>
            </div>
        </div>
    </article>
    <div class="_11QMn">
        <div class="_5M-3F">
            <div>
                <div class="_2H69I">YOU MIGHT ALSO LIKE_</div>
                <div class="_9T4R2">
                    @foreach($siblingPosts as $post)
                        <div class="_1XEbE">
                            <div class="">
                                <div class="_38L6D" style="padding-bottom: 50%;">
                                    {!! $post->getImage() !!}
                                </div>
                            </div>
                            <div class="_1wjeD">
                                <div class="grsTy">{{ $post->title }}</div>
                            </div>
                            <a class="ZE8ka"
                               href="/p/{{ $post->slug }}"></a>
                            <div class="zFsq3 _1iE2V _2ilqp">
                                <a class="" href="/u/{{ $post->user->slug }}">
                                    <div class="_25jNX _3Y-3q" style="width: 40px; height: 40px;">
                                        <div class="N3r_f">
                                            <div class="_38L6D" style="padding-bottom: 100%;">
                                                {!! $post->user->getImage() !!}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="_2bDpH">
                                    <p class="_2nWjU _31dto KTIgi">
                                        <a class="_2XyXQ" href="/u/{{ $post->user->slug }}">
                                            {{ $post->user->nickname }}
                                        </a>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 18 18"
                                             class="_1z7Hy _1NCGm RyyhO">
                                            <g fill="none" fill-rule="evenodd">
                                                <path fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                                <path fill="#FFF"
                                                      d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                            </g>
                                        </svg>
                                    </p>
                                    <div class="_1HPk2">
                                        <a class="_25LcG" href="/f/{{ $post->fanbase()->slug }}">
                                            {{ $post->fanbase()->name }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <div class="_2H69I">EXPLORE MORE FANBASES_</div>
                <div class="_1z1Ga">
                    @foreach($fanbases as $base)
                        <a class="_1mWot _2uakq _2cP6X" href="/f/{{ $base->slug }}">
                            <div class="ZD12l _1iE2V _16e0f">
                                <div class="_1KG3g">
                                    <div class="gzgzI">{{ $base->initials }}</div>
                                </div>
                                <div class="_2lssz">
                                    <div class="_38L6D" style="padding-bottom: 100%;">
                                        {!! $base->getImage() !!}
                                    </div>
                                </div>
                            </div>
                            <div class="_1KQuz _1-YRL">
                                <h3 class="_2o06m _1oBl0">
                                <span class="_1QEWe">{{ $base->name }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                         viewBox="0 0 18 18" class="_1z7Hy aX-51"><g fill="none"
                                                                                     fill-rule="evenodd"><path
                                                    fill="#64c431" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path><path
                                                    fill="#FFF"
                                                    d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path></g></svg></span>
                                </h3>
                                <div class="_1TvPX">
                                    <div class="_1Ct87">
                                        <span>
                                            <span class="CrE3q">{{ rand(10, 100) }}K</span>
                                            <span>Dribbles</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(function () {

            var commentsViewModel = function(params) {
                var self = this;

                self.currentUser = ko.observable(params.currentUser);
                self.type_id = ko.observable(params.type_id);
                self.comments = ko.observableArray(params.comments);
                self.prevIndex = ko.observable(0);
                self.commentsCount = ko.computed(function() {
                    applyHeights();
                    return self.comments().length;
                });
                self.newCommentText = ko.observable();

                // callback
                self.update = function(comment) {
                    self.comments.unshift(comment);
                };

                self.reply = function(comment){

                    var comments = self.comments();

                    console.log("previous comment: " + self.prevIndex());

                    if(self.comments.indexOf(comment) > -1){
                        console.log(comment.is_replying);

                        var index = self.comments.indexOf(comment);
                        comment.is_replying = comment.is_replying ? false : true;
                        comments[index] = comment;

                        if(self.prevIndex() > 0 &&  index !== self.prevIndex()){
                            var prevComment = comments[self.prevIndex()];
                            prevComment.is_replying = false;
                            comments[self.prevIndex()] = prevComment;
                        }

                        self.prevIndex(index);

                        console.log(comments);

                        self.comments([]);
                        self.comments(comments);
                    }
                };

                self.saveComment = function(){
                    var comment = {
                        user: self.currentUser(),
                        content: self.newCommentText(),
                        published_at: 'a sec ago'
                    };

                    self.newCommentText('');
                    self.comments.unshift(comment);

                    applyHeights();

                    $.post( "/comment", {
                        content: comment.content,
                        user_id: comment.user.id,
                        type_id: self.type_id()
                    }, function(data) {
                        console.log(">>>><<<<");
                        console.log(data);

                    }, "json");
                };
            };

            ko.components.register('comments', {
                viewModel: commentsViewModel,
                template: { element: 'comments-template' }
            });

            var replyFormViewModel = function(params) {
                var self = this;

                self.comment = ko.observable(params.comment);
                self.currentUser = ko.observable(params.currentUser);
                self.replyText = ko.observable('');
                self.callback = params.callback;

                self.saveReply = function(){
                    var reply = {
                        user: self.currentUser(),
                        content: self.replyText(),
                        published_at: 'a sec ago',
                        parent: self.comment()
                    };

                    self.replyText('');
                    reply.comment = self.comment();

                    console.log("comment");
                    console.log(self.comment());

                    $.post("/comment", {
                        content: reply.content,
                        user_id: reply.user.id,
                        parent_id: self.comment().id,
                        type_id: self.comment().type_id
                    }, function(data) {
                        console.log(">>>><<<<");
                        console.log(data);

                    }, "json");

                    // return result
                    self.callback(reply);

                    applyHeights();
                };
            };

            ko.components.register('reply-form', {
                viewModel: replyFormViewModel,
                template: { element: 'reply-form-template' }
            });

            var quotedViewModel = function(params) {
                var self = this;

                self.comment = ko.observable(params.comment);
            };

            ko.components.register('quoted', {
                viewModel: quotedViewModel,
                template: { element: 'quoted-template' }
            });

            ko.applyBindings();
        });

    </script>
@endsection