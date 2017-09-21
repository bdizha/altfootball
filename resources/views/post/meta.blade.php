<div class="_1pPnu">
    <div class="_2VAHq">
        <a href="{{ $post->slug }}">
            <div class="_1yAXU">
                <div style="padding-bottom:100%;" class="_38L6D">
                    <img alt="" role="presentation" src="{{ $post->user->thumb_x }}" class="_214e9 b00q8">
                    <div class="_HY8RT" style="width: calc(100% + 10px); height: calc(100% + 10px); top:-5px; left:-5px">
                        <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.44615311,11.6601601 C6.57294867,5.47967718 12.9131553,1.5 19.9642857,1.5 C27.0154162,1.5 33.3556228,5.47967718 36.4824183,11.6601601 L37.3747245,11.2087295 C34.0793076,4.69494641 27.3961457,0.5 19.9642857,0.5 C12.5324257,0.5 5.84926381,4.69494641 2.55384689,11.2087295 L3.44615311,11.6601601 Z"></path><path d="M36.4824183,28.2564276 C33.3556228,34.4369105 27.0154162,38.4165876 19.9642857,38.4165876 C12.9131553,38.4165876 6.57294867,34.4369105 3.44615311,28.2564276 L2.55384689,28.7078582 C5.84926381,35.2216412 12.5324257,39.4165876 19.9642857,39.4165876 C27.3961457,39.4165876 34.0793076,35.2216412 37.3747245,28.7078582 L36.4824183,28.2564276 Z"></path>
                        </svg>
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
                   posted in <br>
               </span>
               <a class="_1XNRF" href="/f/{{ $post->fanbase->slug }}">
                 {{ '@' . $post->fanbase->slug }}
               </a>
            </span>
         </span>
    </div>
</div>