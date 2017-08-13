<template id="post-dribbles-template">
    <button>
        <div class="_1_VaP">
            <span class="_35FcZ">Dribbles</span>
            <span class="_3HP-Q">
            (<!--ko text: dribblesCount --><!--/ko-->)
            </span>
            <svg width="24" height="23" viewBox="-3 -3 23 24" data-bind="click: save">
                <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75L13.5 0zm-.1 1.87l3.1 2.58V8.3L9 14.55 1.5 8.3V4.45l3.1-2.58L9 4.8l4.4-2.93z" fill="#00AFFF" fill-rule="evenodd" data-bind="attr: { opacity: initialOpacity }" class="outline" transform="translate(0, 0) translate(-9, -8.25) scale(1, 1) translate(9, 8.25) rotate(0, 9, 8.25) skewX(0) skewY(0) "></path>
                <path d="M13.5 0L9 3 4.5 0 0 3.75V9l9 7.5L18 9V3.75" fill="#F71700" data-bind="attr: { opacity: selectedOpacity }" fill-rule="evenodd" class="heart" transform="translate(0, 0) translate(-9, -8.25) translate(9, 8.25) rotate(0, 9, 8.25) skewX(0) skewY(0) scale(1, 1)"></path>
            </svg>
        </div>
    </button>
</template>