<div class="sc-bwCtUz bgTWiC">
    <span class="sc-hrWEMg fneZyH">
        <div class="sc-eTuwsz dDnmGN">
            <div style="padding-bottom:100%;" class="_38L6D">
                <img alt="{{ $post->user->name }}" role="presentation" src="{{ $post->thumb_x }}"
                     class="_214e9 b00q8" width="20" height="20">
            </div>
        </div>
    </span>
    <div class="sc-epnACN YkbCv" href="/f/{{ $post->fanbase->slug }}">
        <div class="_74oom">
            <div class="_eeohz">
                <span>{{ '@' . $post->fanbase->camel }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 18 18"
                     class="_1z7Hy">
                    <g fill="none" fill-rule="evenodd">
                        <path fill="rgba(32, 198, 89, 0.95)" d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                        <path fill="rgba(255, 255, 255, 1)"
                              d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                    </g>
                </svg>
            </div>
            <div class="_csp04">
                            <span class="_iuvin _ov9ai">
                                <button class="_qv64e _iokts _4tgw8 _njrw0">Follow</button>
                            </span>
                <span class="_2jvdf">{{ $post->published_at }}</span>
            </div>
        </div>
    </div>
</div>