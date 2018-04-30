@foreach($range as $key)
    <?php if(empty($posts["sibling"][$key])) continue; ?>
    <?php $post = $posts["sibling"][$key] ?>
    <div class="_1XEbE">
        <div class="_1DRo">
            <div class="_38L6D" >
                <img alt="{{ $post->title }}" role="presentation" src="{{ $post->small_x }}"
                     class="_214e9 b00q8">
            </div>
        </div>
        <div class="_1wjeD">
            <div class="grsTy">{{ $post->title }}</div>
        </div>
        <a class="ZE8ka" href="/p/{{ $post->slug }}"></a>
        @include('post.user')
    </div>
@endforeach