<template id="post-template">
    <li class="sc-dqBHgY gEVQKf">
        <div class="_1Y7kL">
            <div class="_1veAI _1iE2V">
                <div class="_1-sfe _29LD-">
                    <user params="user: post.user, published_at: post.published_at"></user>
                    <a class="_23p6h" data-bind="attr: { href: '/p/' + post.slug }">
                        <img role="presentation" class="_HGT79"
                             data-bind="attr: { src: 'http://www.altfootball.com/images' + post.image, alt: post.title }"/>
                    </a>
                    <div class="_76TYH">
                        <a class="_12F3w iAiuJ" data-bind="attr: { href: '/p/' + post.slug }, text: post.title"></a>
                        <div class="_d35FR">
                            <span data-bind="html: post.summary_x"></span>
                            <a class="_23FRT" data-bind="html: post.reading_time, attr: { href: '/p/' + post.slug }"></a>
                        </div>
                        <div class="_1Fx1P _1iE2V _1Ov3j">
                            <div class="_1-sfe CDTi0">
                                <div class="imgSwy">
                                    <div class="sc-lkqHmb jPrmng">
                                        <div class="sc-gzOgki eetbSx">
                                            <button class="sc-gxMtzJ gwBfwM">
                                                <a class="_1_VaP"
                                                   href="http://altfootball.local/p/they-have-messi-alonso-rues-argentines-influence-against-chelsea#tackles">
                                                    <div class="_TYRW3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             version="1.1" width="24px" height="24px"
                                                             class="_3gymQ">
                                                            <g style=" fill:rgba(125, 160, 177, 0.75);">
                                                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                                                <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"/>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <span class="sc-dfVpRl lkOqlM">0</span>
                                                </a>
                                            </button>
                                            <button class="sc-gxMtzJ gwBfwM">
                                                <div class="_1_VaP">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                         version="1.1" width="24px" height="24px">
                                                        <g style=" fill:rgba(125, 160, 177, 0.75);">
                                                            <path d="M0 0h24v24H0z" fill="none"/>
                                                            <path d="M7 7h10v3l4-4-4-4v3H5v6h2V7zm10 10H7v-3l-4 4 4 4v-3h12v-6h-2v4z"/>
                                                        </g>
                                                    </svg>
                                                    <span class="sc-dfVpRl lkOqlM">0</span>
                                                </div>
                                            </button>
                                            <button class="sc-gxMtzJ gwBfwM">
                                                <div class="_1_VaP">
                                                    @include("svg.hand")
                                                    <span class="sc-dfVpRl lkOqlM">0</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_67FRT">
            {{--<div id="tackles" class="jwlFt _1zwKC">--}}
            {{--<div class="_1gLAu _1iE2V">--}}
            {{--<div class="_1-sfe">--}}
            {{--<comments params='{--}}
            {{--comments: post.comments,--}}
            {{--type_id: post.id,--}}
            {{--user: post.user,--}}
            {{--level: 0,--}}
            {{--root: $data,--}}
            {{--is_list: false--}}
            {{--}'></comments>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </li>
</template>