@foreach($tags as $tag)
    @include("tag.item", ['tag' => $tag])
@endforeach