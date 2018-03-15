<template id="post-template">
    <li class="sc-dqBHgY gEVQKf" data-reactid="181">
        <a class="sc-gxMtzJ ljjFes" data-bind="attr: { href: '/p/' + post.slug }">
            <div class="rEYTKJ"></div>
            <div class="sc-eXEjpC gESGAG" data-reactid="183">
                <div class="sc-ibxdXY hKmwtp" data-reactid="184">
                    <div  class="_38L6D" data-reactid="185">
                        <figure class="filter">
                            <img alt="" role="presentation" data-bind="attr: { src: post.thumb_x }"
                                 >
                        </figure>
                    </div>
                    {{--<div class="_35KLTY"></div>--}}
                </div>
            </div>
            <div class="sc-dfVpRl bcqOPV">
                <user params="user: post.user, published_at: post.published_at"></user>
                <h2 class="sc-esjQYD fPOHUM" data-bind="text: post.title_x"></h2>
                <div class="sc-kIPQKe jzIbtI" data-bind="html: post.summary_x"></div>
                <actions params="item: post"></actions>
            </div>
        </a>
    </li>
</template>