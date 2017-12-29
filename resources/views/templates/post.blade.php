<template id="post-template">
    <li class="sc-dqBHgY gEVQKf" data-reactid="181">
        <a class="sc-gxMtzJ ljjFes" data-bind="attr: { 'href': '/p/' + post.slug }">
            <div class="sc-eXEjpC gESGAG" data-reactid="183">
                <div class="sc-ibxdXY hKmwtp" data-reactid="184">
                    <div style="padding-bottom:100%;" class="_38L6D" data-reactid="185">
                        <img data-bind="attr: { src: post.thumb_x }" alt="" role="presentation" class="_214e9 b00q8" width="200" height="200" />
                    </div>
                </div>
            </div>
            <div class="sc-dfVpRl bcqOPV">
                <div class="sc-bwCtUz bgTWiC">
                    <span class="sc-hrWEMg fneZyH">
                        <div class="sc-eTuwsz dDnmGN">
                            <div style="padding-bottom:100%;" class="_38L6D">
                                <img role="presentation" data-bind="attr: { src: post.thumb_x }" class="_214e9 b00q8" width="20" height="20">
                            </div>
                        </div>
                        <span class="sc-hXRMBi lehvYd" data-bind="text: post.user.name"></span>
                    </span>
                    <span class="sc-bsbRJL OAKhl">in</span>
                    <div class="sc-epnACN YkbCv" data-bind="attr: { 'href': '/f/' + post.fanbase.slug }">
                        <span data-bind="text: post.fanbase.name"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 18 18" class="_1z7Hy">
                            <g fill="none" fill-rule="evenodd">
                                <path fill="rgba(32, 198, 89, 1)" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                                <path fill="rgba(255, 255, 255, 1)" d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <h2 class="sc-esjQYD fPOHUM" data-bind="text: post.title"></h2>
                <div class="sc-kIPQKe jzIbtI" data-bind="text: post.summary_x"></div>
                <dribbles params='count: post.dribbles.length, type_id: "sex", has_dribble: post.has_dribble, type: "post"'></dribbles>
            </div>
        </a>
    </li>
</template>