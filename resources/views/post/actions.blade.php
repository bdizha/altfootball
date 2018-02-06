<div class="_35O2p _29Okg _24GTO">
    <div class="_2Oo2A rF2QA" href="{{ route('post.show', ['slug' => $post->slug]) }}#tackles">
        <span class="_35FcZ _13DRk">
            <div class="_GSL7C">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1" width="24" height="24" class="_3gymQ">
                    <g fill="rgba(51, 74, 108, 0.45)" fill-rule="evenodd">
                        <path d="M16 13.33H5.2a.76.76 0 0 0-.4.11l-3.3 1.99V1.5H16v11.83zM16.75 0h-16A.75.75 0 0 0 0 .75v16a.75.75 0 0 0 1.14.64l4.26-2.56h11.35c.41 0 .75-.33.75-.75V.75a.75.75 0 0 0-.75-.75z"></path>
                        <path d="M4.75 6.48h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0 0 1m0 3h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0 0 1"></path>
                    </g>
                </svg>
            </div>
            <span class="_34IO">
                {{ ++$post->views }}
            </span>
        </span>
    </div>
    <div class="_8m6WC rF2QA">
        <span class="_35FcZ _13DRk">
            <div class="_GSL7C">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1" width="24" height="24">
                    <g class="style-scope yt-icon">
                        <path fill="rgba(51, 74, 108, 0.45)" d="M7 7h10v3l4-4-4-4v3H5v6h2V7zm10 10H7v-3l-4 4 4 4v-3h12v-6h-2v4z" class="style-scope yt-icon"></path>
                    </g>
                </svg>
            </div>
            <span class="_34IO">
            {{ ++$post->views }}
            </span>
        </span>
    </div>
    <dribbles params='count: {!! $post->dribbles->count() !!}, type_id: {{ $post->id }}, has_dribble: {{ $post->has_dribble }}, type: "post"'></dribbles>
</div>