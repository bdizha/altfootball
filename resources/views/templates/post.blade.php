<template id="post-template">
    <li class="sc-dqBHgY gEVQKf" data-reactid="181">
        <a class="sc-gxMtzJ ljjFes" data-bind="click: openItem.bind(post)">
            <div class="rEYTKJ"></div>
            <div class="sc-eXEjpC gESGAG" data-reactid="183">
                <div class="sc-ibxdXY hKmwtp" data-reactid="184">
                    <div style="padding-bottom:100%;" class="_38L6D" data-reactid="185">
                        <img alt="" role="presentation" data-bind="attr: { src: post.thumb_x }" class="_214e9 b00q8"
                             width="200" height="200">
                    </div>
                    <div class="_3Xaa0"></div>
                </div>
            </div>
            <div class="sc-dfVpRl bcqOPV">
                <user params="user: post.user, published_at: post.published_at"></user>
                <h2 class="sc-esjQYD fPOHUM" data-bind="text: post.title_x"></h2>
                <div class="sc-kIPQKe jzIbtI" data-bind="text: post.summary_x"></div>
                <actions params="item: post"></actions>
            </div>
        </a>
    </li>
</template>