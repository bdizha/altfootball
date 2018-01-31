<div class="_35O2p _29Okg _24GTO">
    <div class="_2Oo2A rF2QA" href="{{ route('post.show', ['slug' => $post->slug]) }}#tackles">
        <span class="_35FcZ _13DRk">
            <div class="_GSL7C">
                ﻿<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" width="24" height="24">
                    <g id="surface1">
                        <path fill="rgba(56, 82, 119, 0.75)" style=" " d="M 3 6 L 3 26 L 12.585938 26 L 16 29.414063 L 19.414063 26 L 29 26 L 29 6 Z M 5 8 L 27 8 L 27 24 L 18.585938 24 L 16 26.585938 L 13.414063 24 L 5 24 Z M 9 11 L 9 13 L 23 13 L 23 11 Z M 9 15 L 9 17 L 23 17 L 23 15 Z M 9 19 L 9 21 L 19 21 L 19 19 Z "/>
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
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16" version="1.1" width="24" height="24">
                    <g class="style-scope yt-icon">
                        <path fill="rgba(56, 82, 119, 0.75)" d="M 2.75 3 C 1.789063 3 1 3.789063 1 4.75 L 1 7.25 C 1 8.210938 1.789063 9 2.75 9 L 5.25 9 C 5.519531 9 5.769531 8.933594 6 8.820313 L 6 9.5 C 6 9.832031 5.796875 10.507813 5.316406 11.042969 C 4.835938 11.574219 4.117188 12 3 12 L 3 13 C 4.382813 13 5.414063 12.425781 6.058594 11.707031 C 6.703125 10.992188 7 10.167969 7 9.5 L 7 4.75 C 7 3.789063 6.210938 3 5.25 3 Z M 10.75 3 C 9.789063 3 9 3.789063 9 4.75 L 9 7.25 C 9 8.210938 9.789063 9 10.75 9 L 13.25 9 C 13.519531 9 13.769531 8.933594 14 8.820313 L 14 9.5 C 14 9.832031 13.796875 10.507813 13.316406 11.042969 C 12.835938 11.574219 12.117188 12 11 12 L 11 13 C 12.382813 13 13.414063 12.425781 14.058594 11.707031 C 14.703125 10.992188 15 10.167969 15 9.5 L 15 4.75 C 15 3.789063 14.210938 3 13.25 3 Z M 2.75 4 L 5.25 4 C 5.667969 4 6 4.332031 6 4.75 L 6 7.25 C 6 7.667969 5.667969 8 5.25 8 L 2.75 8 C 2.332031 8 2 7.667969 2 7.25 L 2 4.75 C 2 4.332031 2.332031 4 2.75 4 Z M 10.75 4 L 13.25 4 C 13.667969 4 14 4.332031 14 4.75 L 14 7.25 C 14 7.667969 13.667969 8 13.25 8 L 10.75 8 C 10.332031 8 10 7.667969 10 7.25 L 10 4.75 C 10 4.332031 10.332031 4 10.75 4 Z "/>
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