<li class="sc-dqBHgY gEVQKf" data-reactid="181">
    <div class="sc-gxMtzJ ljjFes">
        <div class="sc-eXEjpC gESGAG" data-reactid="183">
            <div class="sc-ibxdXY hKmwtp" data-reactid="184">
                <div  class="_38L6D" data-reactid="185">
                    <img alt="{{ $post->title }}" role="presentation" src="{{ $post->thumb_x }}" role="presentation"
                         class="_214e9 b00q8" />
                </div>
            </div>
        </div>
        <div class="sc-dfVpRl bcqOPV">
            @include('post.user')
            <h2 class="sc-esjQYD fPOHUM">{{ $post->title_x }}</h2>
            <a class="sc-kIPQKe jzIbtI" href="/p/{{ $post->slug }}">{{ $post->summary_x }}</a>
        </div>
    </div>
</li>