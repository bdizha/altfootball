<ol class="_FGT65">
    @foreach($posts["hot"] as $k => $p)
        <li class="_89GHT">
            <div class="_CFG34">
                <a class="_CFR45" href="/p/{{ $p->slug }}">
                    <img alt="{{ $p->title }}" role="presentation"
                         src="{{ $p->thumb_x }}"
                         class="_214e9 b00q8">
                </a>
            </div>
            <div class="_56KHY">
                <a class="_GJ585" href="/p/{{ $p->slug }}">
                    <h3 class="_23GTY">{{ $p->title }}</h3>
                </a>
                <div class="_ETY90">
                    <div class="_89RTY">
                        <div class="_43HGJ">
                            <div class="_23RTY">
                                <div class="_98HTY">
                                    <span>By</span>
                                    <a class="_GTYKY"
                                       href="/f/{{ $p->fanbase->slug }}">{{ $p->fanbase->camel }}</a>
                                </div>
                            </div>
                            <div class="_YURM4">
                                <div class="_TYMN3">
                                    <time class="_FVT43">{{ $p->published_at }}</time>
                                    <span class="_D45RT"></span>
                                    <span class="_23FRT">{{ $p->reading_time }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ol>