<template id="post-template">
    <div class="p32Iu" data-bind="css: { active: isShowing }">
        <div class="_3bxb0">
            <div class="_2gXFy">
                <div class="_3PwOQ sc-jTzLTM kGoDGv">
                    <div class="sc-fjdhpX dAAOAM">
                        <div class="_38L6D" style="padding-bottom: 100%;">
                            <img role="presentation" data-bind="attr: { src: post.user.thumb_x }" class="_214e9 b00q8" width="60" height="60">
                        </div>
                    </div>
                </div>
                <div class="_1pPnu _2Nd08">
                    <div class="">
                        <span class="_1NHvQ _3Xf-w">
                            <a class="_2XyXQ" data-bind="attr: { 'href': '/u/' + post.user.slug }, text: post.user.name"></a>
                            <span>
                                <span>posted in<br></span>
                                <a class="_1XNRF" data-bind="attr: { 'href': '/f/' + post.fanbase.slug }">
                                    <span data-bind="text: post.fanbase.name"></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 18 18" class="_1z7Hy">
                                        <g fill="none" fill-rule="evenodd">
                                            <path fill="rgba(32, 198, 89, 1)" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                            <path fill="rgba(255, 255, 255, 1)" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                                        </g>
                                    </svg>
                                </a>
                            </span>
                        </span>
                    </div>
                </div>
                <span class="_2jvdf" data-bind="text: ' ~' + post.published_at"></span>
            </div>
            <div class="_4TYO">
                <a class="_2hvwD" data-bind="attr: { 'href': '/p/' + post.slug }">
                    <div class="_25bvT">
                        <div style="padding-bottom:60.25%;" class="_38L6D">
                            <img role="presentation" class="_214e9 b00q8" data-bind="attr: { src: post.small_x }">
                        </div>
                    </div>
                    <div class="_3DF9">
                        <h2 class="_2DyJ3 _3duUm" data-bind="text: post.title_x"></h2>
                    </div>
                </a>
                <h3 class="_35O2p _3VB1o _3duUm _2L6V9">
                    <span>
                        <span data-bind="html: post.summary_x"></span>
                        <a class="_1kgtA _2Oo2A" data-bind="attr: { href: '/p/' + post.slug }, text: post.reading_time"></a>
                    </span>
                </h3>
            </div>
            <div class="_35O2p _29Okg _24GTO">
                <a class="_2Oo2A rF2QA" data-bind="attr: { href: '/p/' + post.slug + '#comments' }">
                    <span class="_35FcZ _13DRk">
                        <div class="_GSL7C">
                            ﻿<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" width="24" height="24">
                                <g id="surface1">
                                    <path fill="rgba(103, 143, 185, 0.95)" style=" " d="M 3 6 L 3 26 L 12.585938 26 L 16 29.414063 L 19.414063 26 L 29 26 L 29 6 Z M 5 8 L 27 8 L 27 24 L 18.585938 24 L 16 26.585938 L 13.414063 24 L 5 24 Z M 9 11 L 9 13 L 23 13 L 23 11 Z M 9 15 L 9 17 L 23 17 L 23 15 Z M 9 19 L 9 21 L 19 21 L 19 19 Z "/>
                                </g>
                            </svg>
                        </div>
                        <span class="_34IO">
                            <!--ko text: post.comments.length --><!--/ko-->
                        </span>
                    </span>
                </a>
                <div class="_8m6WC rF2QA">
                    <span class="_35FcZ _13DRk">
                        <div class="_GSL7C">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" width="24" height="24">
                                <g id="surface1">
                                    <path fill="rgba(103, 143, 185, 0.95)" d="M 5 7 L 0 12 L 4 12 L 4 25 L 21 25 L 19 23 L 6 23 L 6 12 L 10 12 Z M 9 7 L 11 9 L 24 9 L 24 20 L 20 20 L 25 25 L 30 20 L 26 20 L 26 7 Z "/>
                                </g>
                            </svg>
                        </div>
                        <span class="_34IO">
                            <!--ko text: post.comments.length --><!--/ko-->
                        </span>
                    </span>
                </div>
                <dribbles params='count: post.dribbles.length, type_id: "sex", has_dribble: post.has_dribble, type: "post"'></dribbles>
            </div>
            <!--ko if: isShowing -->
            <div class="_1Q_Pu">
                <p class="_25BgE">
                    <span><span data-bind="html: post.summary"></span></span>
                </p>
                <div class="_3tkuf">
                    <div class="_1drt2 _9fE1R NasRD">
                        <div>
                            <h2 data-bind="html: 'LIKE ' + post.fanbase.name + '?'"></h2>
                        </div>
                        <div class="_3OD4J _1yV5F _1MC-v _1h78h">
                            JOIN ALTFOOTBALL
                        </div>
                    </div>
                </div>
                <div data-bind="html: post.content"></div>
            </div>
            <div class="_3tkuf _23YI">
                <div class="_1drt2 _9fE1R NasRD">
                    <div>
                        <h2>Never miss a post</h2>
                    </div>
                    <div class="_3OD4J _1yV5F _1MC-v _1h78h">
                        <span data-bind="html: 'Join ' + post.fanbase.name + '?'"></span>
                    </div>
                </div>
            </div>
            <!--/ko-->
        </div>
    </div>
</template>