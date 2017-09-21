<div class="_1pPnu">
    <div class="_2VAHq">
        <a href="{{ $post->slug }}">
            <div class="_1yAXU">
                <div style="padding-bottom:100%;" class="_38L6D">
                    <img alt="" role="presentation" src="{{ $post->user->thumb_x }}" class="_214e9 b00q8">
                    <div class="_HY8RT">
                    </div>
                </div>
            </div>
        </a>
        <span class="_1NHvQ _3Xf-w">
            <a href="/u/{{ $post->user->slug }}">
               {{ $post->user->name }}
                @include('svg.approved')
            </a>
            <span>
               <span>
                   shared in <br>
               </span>
               <a class="_1XNRF" href="/f/{{ $post->fanbase->slug }}">
                 {{ '@' . $post->fanbase->slug }}
               </a>
            </span>
         </span>
    </div>
</div>