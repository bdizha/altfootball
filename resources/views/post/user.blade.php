<div class="_2gXFy">
    <div class="_3PwOQ sc-jTzLTM kGoDGv">
        <div class="sc-fjdhpX dAAOAM">
            <div class="_38L6D" style="padding-bottom: 100%;">
                <img alt="{{ $post->title }}" role="presentation"
                     src="{{ $post->user->thumb_x }}" class="_214e9 b00q8"
                     width="60"
                     height="60">
            </div>
        </div>
    </div>
    <div class="_1pPnu _2Nd08">
       <span class="_1NHvQ _3Xf-w">
            <a class="_2XyXQ" href="/u/{{ $post->user->slug }}">
                {{ $post->user->name }}
                <span class="_3RTYJ">posted in</span>
            </a>
            <span>
                <a class="_1XNRF" href="/f/{{ $post->fanbase->slug }}">
                    {{ '@'.$post->fanbase->camel }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                         viewBox="0 0 18 18" class="_1z7Hy">
                        <g fill="none" fill-rule="evenodd">
                            <path fill="rgba(32, 198, 89, 1)"
                                  d="M0 9a9 9 0 1 0 18 0A9 9 0 0 0 0 9z"></path>
                            <path fill="rgba(255, 255, 255, 1)"
                                  d="M12.38 5.17l1.58 1.58-6.09 6.08L4.04 9l1.58-1.58 2.25 2.25"></path>
                        </g>
                    </svg>
                </a>
            </span>
        </span>
    </div>
</div>