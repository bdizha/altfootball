<template id="posts-template">
    <div data-bind="foreach: posts, infiniteScroll: fetchPosts">
        <div class="p32Iu">
            <div class="_3bxb0">
                <div class="_2WwnI">
                    <div class="_1pPnu">
                        <div class="_2VAHq">
                            <a data-bind="attr: { href: '/u/' + user.slug }">
                                <div class="_1yAXU">
                                    <div style="padding-bottom:100%;" class="_38L6D">
                                        <img role="presentation" class="_214e9 b00q8" data-bind="attr: { src: user.thumb_x }">
                                        <div class="_HY8RT" style="width: calc(100% + 10px); height: calc(100% + 10px); top:-5px; left:-5px">
                                            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.44615311,11.6601601 C6.57294867,5.47967718 12.9131553,1.5 19.9642857,1.5 C27.0154162,1.5 33.3556228,5.47967718 36.4824183,11.6601601 L37.3747245,11.2087295 C34.0793076,4.69494641 27.3961457,0.5 19.9642857,0.5 C12.5324257,0.5 5.84926381,4.69494641 2.55384689,11.2087295 L3.44615311,11.6601601 Z"></path><path d="M36.4824183,28.2564276 C33.3556228,34.4369105 27.0154162,38.4165876 19.9642857,38.4165876 C12.9131553,38.4165876 6.57294867,34.4369105 3.44615311,28.2564276 L2.55384689,28.7078582 C5.84926381,35.2216412 12.5324257,39.4165876 19.9642857,39.4165876 C27.3961457,39.4165876 34.0793076,35.2216412 37.3747245,28.7078582 L36.4824183,28.2564276 Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <span class="_1NHvQ _3Xf-w">
                                <a data-bind="attr: { href: '/u/' + user.slug }">
                                    <!-- ko text: user.name --><!--/ko-->)
                                   @include('svg.approved')
                                </a>
                                <span>
                                   <span>
                                       posted in <br>
                                   </span>
                                    <a class="_1XNRF" data-bind="attr: { href: '/f/' + fanbase.slug }, text: '@' + fanbase.slug"></a>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="r9rA5">
                        <button class="_2KGdb _34-mC">
                            <div class="_1CwPf">
                                <div class="_GSL7C">
                                    ﻿<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1" width="14" height="14">
                                        <g id="surface1">
                                            <path fill="#FFFFFF" d="M 18 2 C 16.34375 2 15 3.34375 15 5 C 15 5.195313 15.027344 5.375 15.0625 5.5625 L 7.9375 9.71875 C 7.414063 9.273438 6.742188 9 6 9 C 4.34375 9 3 10.34375 3 12 C 3 13.65625 4.34375 15 6 15 C 6.742188 15 7.414063 14.726563 7.9375 14.28125 L 15.0625 18.4375 C 15.027344 18.625 15 18.804688 15 19 C 15 20.65625 16.34375 22 18 22 C 19.65625 22 21 20.65625 21 19 C 21 17.34375 19.65625 16 18 16 C 17.257813 16 16.585938 16.273438 16.0625 16.71875 L 8.9375 12.5625 C 8.972656 12.375 9 12.195313 9 12 C 9 11.804688 8.972656 11.625 8.9375 11.4375 L 16.0625 7.28125 C 16.585938 7.726563 17.257813 8 18 8 C 19.65625 8 21 6.65625 21 5 C 21 3.34375 19.65625 2 18 2 Z "/>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </button>
                        <div class="_34TRY _39llS _23ERU">
                            <div class="_3rM3S">
                                <a class="_2KljY _1VKWj _29zpU" style="opacity: 1; transform: translateY(0px) translateZ(0px);" data-bind="attr: { href: 'https://www.facebook.com/sharer/sharer.php?u=' + share_url }" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" class="bWSPJ">
                                        <path fill="#FFF" fill-rule="evenodd" d="M4.16 0c1.83 0 2.6.22 2.6.22l-.37 1.84s-.6-.15-1.16-.15c-.57 0-1.07.17-1.07.66v1.4h2.3l-.15 1.8H4.16V12H1.45V5.76H0v-1.8h1.45v-1.2c0-.53.01-1.35.46-1.86C2.4.37 3.04 0 4.16 0"></path>
                                    </svg>
                                    Facebook
                                </a>
                                <a class="_2KljY _1VKWj _29zpU" style="opacity: 1; transform: translateY(0px) translateZ(0px);" data-bind="attr: { href: 'https://twitter.com/intent/tweet?url=' + share_url }" target="_blank">
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
                    <a class="_2hvwD" data-bind="attr: { href: '/p/' + slug }">
                        <div class="_25bvT">
                            <div style="padding-bottom:56.25%;" class="_38L6D">
                                <img role="presentation" class="_214e9 b00q8" data-bind="attr: { src: small_x }">
                            </div>
                        </div>
                        <div class="_3DF9">
                            <h2 class="_2DyJ3 _3duUm" data-bind="text: title"></h2>
                        </div>
                    </a>
                    <h3 class="_35O2p _3VB1o _3duUm _2L6V9">
                        <span>
                            <span data-bind="html: summary"></span>
                        </span>
                    </h3>
                    <div class="_35O2p _29Okg _46OYH">
                        <a class="_1kgtA _2Oo2A" data-bind="attr: { href: '/p/' + slug }, text: reading_time">
                        </a>
                        <div class="_8m6WC rF2QA">
                            <span class="_2jvdf" data-bind="text: published_at"></span>
                        </div>
                        <div class="_1_VaP">
                            <p class="TATrW" data-bind="text: views + ' views'"></p>
                        </div>
                    </div>
                </div>
                <div class="_35O2p _29Okg _24GTO">
                    <a class="_2Oo2A rF2QA" data-bind="attr: { href: '/p/' + slug + '#comments' }">
                        <span class="_35FcZ _13DRk">
                            ﻿<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" width="24" height="24">
                                <g id="surface1">
                                    <path fill="rgba(103, 143, 185, 0.6)" style=" " d="M 3 6 L 3 26 L 12.585938 26 L 16 29.414063 L 19.414063 26 L 29 26 L 29 6 Z M 5 8 L 27 8 L 27 24 L 18.585938 24 L 16 26.585938 L 13.414063 24 L 5 24 Z M 9 11 L 9 13 L 23 13 L 23 11 Z M 9 15 L 9 17 L 23 17 L 23 15 Z M 9 19 L 9 21 L 19 21 L 19 19 Z "/>
                                </g>
                            </svg>
                            <span class="_34IO">
                                <!--ko text: comments.length --><!--/ko-->
                            </span>
                        </span>
                    </a>
                    <div class="_8m6WC rF2QA">
                        <span class="_35FcZ">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" width="24" height="24">
                                <g id="surface1">
                                    <path fill="rgba(103, 143, 185, 0.6)" d="M 5 7 L 0 12 L 4 12 L 4 25 L 21 25 L 19 23 L 6 23 L 6 12 L 10 12 Z M 9 7 L 11 9 L 24 9 L 24 20 L 20 20 L 25 25 L 30 20 L 26 20 L 26 7 Z "/>
                                </g>
                            </svg>
                        </span>
                    </div>
                    <dribbles params='count: dribbles.length, type_id: id, has_dribble: has_dribble, type: "post"'></dribbles>
                </div>
                <comments params='comments: limited_comments, type_id: id, level: 0, root: $root, class: "items"'></comments>
            </div>
        </div>
    </div>
</template>