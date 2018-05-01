<div class="sc-gzOgki eetbSx">
    <button class="sc-gxMtzJ gwBfwM" data-tracking="post - bump - add">
        <a class="_1_VaP" href="{{ route('post.show', ['slug' => $post->slug]) }}#tackles">
            <div class="_TYRW3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1" width="33px" height="33px" class="_3gymQ">
                    <g fill="rgba(125, 160, 177, 0.75)" fill-rule="evenodd">
                        <path d="M16 13.33H5.2a.76.76 0 0 0-.4.11l-3.3 1.99V1.5H16v11.83zM16.75 0h-16A.75.75 0 0 0 0 .75v16a.75.75 0 0 0 1.14.64l4.26-2.56h11.35c.41 0 .75-.33.75-.75V.75a.75.75 0 0 0-.75-.75z"></path>
                        <path d="M4.75 6.48h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0 0 1m0 3h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0 0 1"></path>
                    </g>
                </svg>
            </div>
            <span class="sc-dfVpRl lkOqlM">{{ $post->comments->count() }}</span>
        </a>
    </button>
    <button class="sc-gxMtzJ gwBfwM" data-tracking="post - bump - add">
        <div class="_1_VaP">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1" width="33px" height="33px">
                <g class="style-scope yt-icon">
                    <path fill="rgba(125, 160, 177, 0.75)"
                          d="M7 7h10v3l4-4-4-4v3H5v6h2V7zm10 10H7v-3l-4 4 4 4v-3h12v-6h-2v4z"
                          class="style-scope yt-icon"></path>
                </g>
            </svg>
            <span class="sc-dfVpRl lkOqlM">{{ $post->dribbles->count() }}</span>
        </div>
    </button>
    <button class="sc-gxMtzJ gwBfwM" data-tracking="post - bump - add">
        <div class="_1_VaP">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                 version="1.1" width="33px" height="33px">
                <g id="surface1">
                    <path style=" fill:rgba(125, 160, 177, 0.75);"
                          d="M 24 34 L 42 14 L 6 14 Z "></path>
                </g>
            </svg>
            <span class="sc-dfVpRl lkOqlM">0</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                 version="1.1" width="33px" height="33px">
                <g id="surface1">
                    <path style=" fill:rgba(125, 160, 177, 0.75);"
                          d="M 24 14 L 42 34 L 6 34 Z "></path>
                </g>
            </svg>
        </div>
    </button>
</div>