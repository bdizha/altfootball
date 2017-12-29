<template id="posts-template">
    <ul data-bind="foreach: posts, infiniteScroll: fetchPosts">
        <post params="post: $data, show_item: showItem"></post>
    </ul>
</template>