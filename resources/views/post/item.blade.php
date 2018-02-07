<li class="sc-dqBHgY gEVQKf" data-reactid="181">
    @include('post.user')
    <a class="sc-gxMtzJ ljjFes" href="/p/{{ $post->slug }}">
        <div class="sc-eXEjpC gESGAG" data-reactid="183">
            <div class="sc-ibxdXY hKmwtp" data-reactid="184">
                <div style="padding-bottom:100%;" class="_38L6D" data-reactid="185">
                    <img alt="{{ $post->title }}" role="presentation" src="{{ $post->thumb_x }}" role="presentation" class="_214e9 b00q8" width="200" height="200"/>
                </div>
            </div>
        </div>
        <div class="sc-dfVpRl bcqOPV">
            <h2 class="sc-esjQYD fPOHUM">{{ $post->title_x }}</h2>
            <div class="sc-kIPQKe jzIbtI">{{ $post->summary_x }}</div>
            @include('post.actions')
        </div>
    </a>
</li>