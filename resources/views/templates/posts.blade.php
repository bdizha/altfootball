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
                                    <a class="_1XNRF" data-bind="attr: { href: '/f/' + fanbase.slug }, text: fanbase.name"></a>
                                </span>
                            </span>
                        </div>

                        <div class="_3qkzJ">
                            <p class="_2B25b">
                                <span class="_2jvdf" data-bind="text: published_at"></span>
                            </p>
                            <p class="_2B25b">
                                <span class="_2jvdf" data-bind="text: reading_time"></span>
                            </p>
                            <p class="TATrW" data-bind="text: views + ' views'"></p>
                        </div>
                    </div>
                    <div class="r9rA5">
                        <button class="_2KGdb _34-mC">
                            <div class="_1CwPf">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20">
                                    <path fill="#00AFFF" fill-rule="evenodd" stroke="#00AFFF" stroke-width=".5" d="M14.75 12.57c-1.04 0-1.96.49-2.55 1.25l-4.95-2.76a3.23 3.23 0 0 0 0-2.13l4.94-2.76a3.21 3.21 0 1 0-.48-.89L6.77 8.04a3.22 3.22 0 1 0 0 3.9l4.95 2.77a3.2 3.2 0 0 0 3.03 4.3 3.22 3.22 0 0 0 0-6.44zm0-10.56a2.21 2.21 0 1 1 0 4.42 2.21 2.21 0 0 1 0-4.42zM4.22 12.21a2.21 2.21 0 1 1 0-4.43 2.21 2.21 0 0 1 0 4.43zm10.53 5.78a2.21 2.21 0 1 1 0-4.42 2.21 2.21 0 0 1 0 4.42z"></path>
                                </svg>
                            </div>
                        </button>
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
                    <h3 class="_2hvwD _3VB1o _3duUm _2L6V9 _3DF9">
                        <span>
                            <span data-bind="html: summary"></span>
                        </span>
                    </h3>
                    <a class="_2hvwD _1kgtA _3DF9" data-bind="attr: { href: '/p/' + slug }">
                        Read story
                    </a>
                </div>
                <div class="_35O2p _29Okg">
                    <a class="_2Oo2A rF2QA" data-bind="attr: { href: '/p/' + slug + '#comments' }">
                <span class="_35FcZ">
                Tackles
                 <span class="_3HP-Q">
                     (<!--ko text: comments.length --><!--/ko-->)
                 </span>
                </span>
                    </a>
                    <div class="_8m6WC rF2QA"><span class="_35FcZ">Forward</span>
                    </div>
                    <dribbles params='count: dribbles.length, type_id: id, has_dribble: has_dribble, type: "post"'></dribbles>
                </div>
                <comments params='comments: limited_comments, type_id: id, level: 0, root: $root, class: "items"'></comments>
            </div>
        </div>
    </div>
</template>