<template id="dribbles-template">
    <button data-bind="attr: { class: classId() + ' _13DRk' }, css: { _35GH: hasDribble() }, event: { focus: checkAuth }, click: save">
        <div class="_GSL7C" >
            ﻿<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1" width="24" height="24">
                <g id="surface1">
                    <path data-bind="attr: { fill: hasDribble() ? '#FFFFF' : 'rgba(103, 143, 185, 0.8)' }" d="M 16.375 9 C 10.117188 9 5 14.054688 5 20.28125 C 5 33.050781 19.488281 39.738281 24.375 43.78125 L 25 44.3125 L 25.625 43.78125 C 30.511719 39.738281 45 33.050781 45 20.28125 C 45 14.054688 39.882813 9 33.625 9 C 30.148438 9 27.085938 10.613281 25 13.0625 C 22.914063 10.613281 19.851563 9 16.375 9 Z M 16.375 11 C 19.640625 11 22.480469 12.652344 24.15625 15.15625 L 25 16.40625 L 25.84375 15.15625 C 27.519531 12.652344 30.359375 11 33.625 11 C 38.808594 11 43 15.144531 43 20.28125 C 43 31.179688 30.738281 37.289063 25 41.78125 C 19.261719 37.289063 7 31.179688 7 20.28125 C 7 15.144531 11.1875 11 16.375 11 Z "/>
                </g>
            </svg>
        </div>
        <span class="_34IO">
            <!--ko text: dribblesCount --><!--/ko-->
        </span>
    </button>
</template>