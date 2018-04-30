@foreach($range as $key)
    <?php if(empty($posts["sibling"][$key])) continue; ?>
    <?php $p = $posts["sibling"][$key] ?>
    <div class="_1XEbE">
        <div class="_1DRo">
            <div class="_38L6D" >
                <img alt="{{ $p->title }}" role="presentation" src="{{ $p->small_x }}"
                     class="_214e9 b00q8">
            </div>
        </div>
        <div class="_1wjeD">
            <div class="grsTy">{{ $p->title }}</div>
        </div>
        <a class="ZE8ka" href="/p/{{ $p->slug }}"></a>
        @include('post.user')
    </div>
@endforeach