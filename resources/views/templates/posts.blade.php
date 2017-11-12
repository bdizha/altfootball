<template id="posts-template">
    <div data-bind="foreach: posts, infiniteScroll: fetchPosts">
        <post params="post: $data, show_item: showItem"></post>
    </div>
</template>