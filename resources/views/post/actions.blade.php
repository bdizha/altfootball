<div class="_35O2p _29Okg _24GTO">
    <a class="_2Oo2A rF2QA" href="{{ route('post.show', ['slug' => $post->slug]) }}#tackles">
      <span class="_35FcZ _13DRk">
        ﻿<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" width="24" height="24">
            <g id="surface1">
                <path fill="rgba(103, 143, 185, 0.6)" style=" " d="M 3 6 L 3 26 L 12.585938 26 L 16 29.414063 L 19.414063 26 L 29 26 L 29 6 Z M 5 8 L 27 8 L 27 24 L 18.585938 24 L 16 26.585938 L 13.414063 24 L 5 24 Z M 9 11 L 9 13 L 23 13 L 23 11 Z M 9 15 L 9 17 L 23 17 L 23 15 Z M 9 19 L 9 21 L 19 21 L 19 19 Z "/>
            </g>
        </svg>
        <span class="_34IO">
        {{ ++$post->views }}
        </span>
      </span>
    </a>
    <div class="_8m6WC rF2QA">
        <span class="_35FcZ _13DRk">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" width="24" height="24">
                <g id="surface1">
                    <path fill="rgba(103, 143, 185, 0.6)" d="M 5 7 L 0 12 L 4 12 L 4 25 L 21 25 L 19 23 L 6 23 L 6 12 L 10 12 Z M 9 7 L 11 9 L 24 9 L 24 20 L 20 20 L 25 25 L 30 20 L 26 20 L 26 7 Z "/>
                </g>
            </svg>
            <span class="_34IO">
            {{ ++$post->views }}
            </span>
        </span>
    </div>
    <dribbles params='count: {!! $post->dribbles->count() !!}, type_id: {{ $post->id }}, has_dribble: {{ $post->has_dribble }}, type: "post"'></dribbles>
</div>