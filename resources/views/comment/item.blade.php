<li class="gEjmr" id="comment-{{ $comment->id }}">
    <div class="_CFG34">
        @include('comment.user')
    </div>
    <div class="_56KHY">
        <div class="_GJ585">
            <a class="_FGE34" href="/u/{{ $comment->user->slug }}">
                <span class="_23GTY">{{ $comment->user->name }}</span>
                <span class="_D45RT"></span>
                <time class="_FVT43">{{ $comment->published_at }}</time>
            </a>
            <div class="_FRGTI">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                    <g id="Bounding_Boxes">
                        <path fill="none" d="M0,0h24v24H0V0z"></path>
                    </g>
                    <g fill="rgba(125, 160, 177, 0.75)" id="Sharp">
                        <path d="M12,8c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2S10.9,8,12,8z M12,10c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S13.1,10,12,10z
		                    M12,16c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S13.1,16,12,16z"></path>
                    </g>
                </svg>
            </div>
        </div>
        <div class="_ETY90">
            <div class="_89RTY">
                <div class="_43HGJ">
                    <div class="_23RTY">
                        <div class="_98HTY">
                            {{ $comment->content }}
                        </div>
                    </div>
                    <div class="_YURM4">
                        <div class="sc-gzOgki eetbSx">
                            <button class="sc-gxMtzJ gwBfwM">
                                <div class="_1_VaP">
                                    <div class="_TYRW3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1" width="24px" height="24px" class="_3gymQ">
                                            <g style=" fill:rgba(125, 160, 177, 0.75);">
                                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="sc-dfVpRl lkOqlM">0</span>
                                </div>
                            </button>
                            <button class="sc-gxMtzJ gwBfwM">
                                <div class="_1_VaP">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1" width="24px" height="24px">
                                        <g style=" fill:rgba(125, 160, 177, 0.75);">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 7h10v3l4-4-4-4v3H5v6h2V7zm10 10H7v-3l-4 4 4 4v-3h12v-6h-2v4z"></path>
                                        </g>
                                    </svg>
                                    <span class="sc-dfVpRl lkOqlM">0</span>
                                </div>
                            </button>
                            <button class="sc-gxMtzJ gwBfwM">
                                <div class="_1_VaP">
                                    <svg class="svgIcon-use" width="24" height="24" viewBox="0 0 25 25">
                                        <g fill="rgba(125, 160, 177, 0.75)">
                                            <path d="M11.739 0l.761 2.966L13.261 0z"></path>
                                            <path d="M14.815 3.776l1.84-2.551-1.43-.471z"></path>
                                            <path d="M8.378 1.224l1.84 2.551L9.81.753z"></path>
                                            <path d="M20.382 21.622c-1.04 1.04-2.115 1.507-3.166 1.608.168-.14.332-.29.492-.45 2.885-2.886 3.456-5.982 1.69-9.211l-1.101-1.937-.955-2.02c-.315-.676-.235-1.185.245-1.556a.836.836 0 0 1 .66-.16c.342.056.66.28.879.605l2.856 5.023c1.179 1.962 1.379 5.119-1.6 8.098m-13.29-.528l-5.02-5.02a1 1 0 0 1 .707-1.701c.255 0 .512.098.707.292l2.607 2.607a.442.442 0 0 0 .624-.624L4.11 14.04l-1.75-1.75a.998.998 0 1 1 1.41-1.413l4.154 4.156a.44.44 0 0 0 .624 0 .44.44 0 0 0 0-.624l-4.152-4.153-1.172-1.171a.998.998 0 0 1 0-1.41 1.018 1.018 0 0 1 1.41 0l1.172 1.17 4.153 4.152a.437.437 0 0 0 .624 0 .442.442 0 0 0 0-.624L6.43 8.222a.988.988 0 0 1-.291-.705.99.99 0 0 1 .29-.706 1 1 0 0 1 1.412 0l6.992 6.993a.443.443 0 0 0 .71-.501l-1.35-2.856c-.315-.676-.235-1.185.246-1.557a.85.85 0 0 1 .66-.16c.342.056.659.28.879.606L18.628 14c1.573 2.876 1.067 5.545-1.544 8.156-1.396 1.397-3.144 1.966-5.063 1.652-1.713-.286-3.463-1.248-4.928-2.714zM10.99 5.976l2.562 2.562c-.497.607-.563 1.414-.155 2.284l.265.562-4.257-4.257a.98.98 0 0 1-.117-.445c0-.267.104-.517.292-.706a1.023 1.023 0 0 1 1.41 0zm8.887 2.06c-.375-.557-.902-.916-1.486-1.011a1.738 1.738 0 0 0-1.342.332c-.376.29-.61.656-.712 1.065a2.1 2.1 0 0 0-1.095-.562 1.776 1.776 0 0 0-.992.128l-2.636-2.636a1.883 1.883 0 0 0-2.658 0 1.862 1.862 0 0 0-.478.847 1.886 1.886 0 0 0-2.671-.012 1.867 1.867 0 0 0-.503.909c-.754-.754-1.992-.754-2.703-.044a1.881 1.881 0 0 0 0 2.658c-.288.12-.605.288-.864.547a1.884 1.884 0 0 0 0 2.659l.624.622a1.879 1.879 0 0 0-.91 3.16l5.019 5.02c1.595 1.594 3.515 2.645 5.408 2.959a7.16 7.16 0 0 0 1.173.098c1.026 0 1.997-.24 2.892-.7.279.04.555.065.828.065 1.53 0 2.969-.628 4.236-1.894 3.338-3.338 3.083-6.928 1.738-9.166l-2.868-5.043z"></path>
                                        </g>
                                    </svg>            <span class="sc-dfVpRl lkOqlM">0</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @if($comment->comments->count() > 0)
                @include("comment.list", ["comments" => $comment->comments])
            @endif
        </div>
    </div>
</li>