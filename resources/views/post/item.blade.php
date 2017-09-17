<div class="p32Iu">
    <div class="_3bxb0">
        <div class="_2WwnI">
            @include('post.meta')
            <div class="r9rA5">
                <button class="_2KGdb _34-mC">
                    <div class="_1CwPf">
                        <div class="_GSL7C">
                            ﻿<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1" width="20" height="20">
                                <g id="surface1">
                                    <path fill="#FFFFFF" d="M 18 2 C 16.34375 2 15 3.34375 15 5 C 15 5.195313 15.027344 5.375 15.0625 5.5625 L 7.9375 9.71875 C 7.414063 9.273438 6.742188 9 6 9 C 4.34375 9 3 10.34375 3 12 C 3 13.65625 4.34375 15 6 15 C 6.742188 15 7.414063 14.726563 7.9375 14.28125 L 15.0625 18.4375 C 15.027344 18.625 15 18.804688 15 19 C 15 20.65625 16.34375 22 18 22 C 19.65625 22 21 20.65625 21 19 C 21 17.34375 19.65625 16 18 16 C 17.257813 16 16.585938 16.273438 16.0625 16.71875 L 8.9375 12.5625 C 8.972656 12.375 9 12.195313 9 12 C 9 11.804688 8.972656 11.625 8.9375 11.4375 L 16.0625 7.28125 C 16.585938 7.726563 17.257813 8 18 8 C 19.65625 8 21 6.65625 21 5 C 21 3.34375 19.65625 2 18 2 Z "/>
                                </g>
                            </svg>
                        </div>
                    </div>
                </button>
                <div class="_34TRY _39llS _23ERU">
                    <div class="_3rM3S">
                        <a class="_2KljY _1VKWj _29zpU" style="opacity: 1; transform: translateY(0px) translateZ(0px);" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($post->share_url) }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" class="bWSPJ">
                                <path fill="#FFF" fill-rule="evenodd" d="M4.16 0c1.83 0 2.6.22 2.6.22l-.37 1.84s-.6-.15-1.16-.15c-.57 0-1.07.17-1.07.66v1.4h2.3l-.15 1.8H4.16V12H1.45V5.76H0v-1.8h1.45v-1.2c0-.53.01-1.35.46-1.86C2.4.37 3.04 0 4.16 0"></path>
                            </svg>
                            Facebook
                        </a>
                        <a class="_2KljY _1VKWj _29zpU" style="opacity: 1; transform: translateY(0px) translateZ(0px);" href="https://twitter.com/intent/tweet?url={{ urlencode($post->share_url) }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" class="bWSPJ">
                                <path fill="#FFF" fill-rule="evenodd" d="M10.24 0c.83 0 1.58.34 2.13.9h.05c.4 0 1.2-.1 1.98-.66 0 0 .04.64-1.23 1.63 0 0 1.18-.1 1.66-.45 0 0-.11.41-1.54 1.7 0 0 .48 7.01-6.87 8.73 0 0-.72.15-1.75.15A7.78 7.78 0 0 1 0 10.61s.37.07.93.07c.96 0 2.47-.2 3.49-1.32-.08 0-2.07-.02-2.7-2.07 0 0 .29.06.62.06.21 0 .43-.03.61-.1 0 0-2.32-.49-2.28-3.02 0 0 .53.39 1.05.39l.14-.01s-2.09-1.78-.8-4c0 0 2.65 3.13 5.99 3.13l.3-.01A2.99 2.99 0 0 1 10.25 0"></path>
                            </svg>
                            Twitter
                        </a>
                    </div>
                    <div class="rTjpd" style="transform: translateX(281.5px) rotate(45deg); top: -7px;">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a class="_2hvwD" href="{{ route('post.show', ['slug' => $post->slug]) }}">
                <div class="_25bvT">
                    <div style="padding-bottom:56.25%;" class="_38L6D">
                        <img alt="{{ $post->title }}" role="presentation" src="{{ $post->small_x }}" class="_214e9 b00q8">
                    </div>
                </div>
                <div class="_3DF9">
                    <h2 class="_2DyJ3 _3duUm">{{ $post->title }}</h2>
                </div>
            </a>
            <h3 class="_2hvwD _3VB1o _3duUm _2L6V9 _3DF9">
                <span>
                    <span>{{ $post->summary }}</span>
                </span>
            </h3>
            <div class="_35O2p _29Okg _46OYH">
                <a class="_2hvwD _1kgtA"
                   href="{{ route('post.show', ['slug' => $post->slug]) }}">
                    Read story
                </a>
                <div class="_1_VaP">
                    <p class="_2B25b">
                        <span class="_2jvdf">{{ $post->published_at }}</span>
                    </p>
                    <p class="_2B25b">
                        <span class="_2jvdf">
                            {{ $post->reading_time }}
                        </span>
                    </p>
                    <p class="TATrW">
                        {{ ++$post->views }}K Views
                    </p>
                </div>
            </div>
        </div>
        <div class="_35O2p _29Okg _24GTO">
            <a class="_2Oo2A rF2QA" href="{{ route('post.show', ['slug' => $post->slug]) }}#tackles">
              <span class="_35FcZ">
                Tackles
                 <span class="_3HP-Q">
                     ({{ $post->comments->count() }})
                 </span>
              </span>
            </a>
            <div class="_8m6WC rF2QA"><span class="_35FcZ">Forward</span>
            </div>
            <dribbles params='count: {!! $post->dribbles->count() !!}, type_id: {{ $post->id }}, has_dribble: {{ $post->has_dribble }}, type: "post"'></dribbles>
        </div>
        <comments params='comments: {!! $post->limited_comments !!}, type_id: {{ $post->id }}, level: 0, root: $root, class: 'items''></comments>
    </div>
</div>