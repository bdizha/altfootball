<template id="user-template">
    <div class="sc-bwCtUz bgTWiC">
        <span class="sc-hrWEMg fneZyH">
            <div class="sc-eTuwsz dDnmGN">
                <div  class="_38L6D">
                    <img data-bind="attr: { alt: user.name , src: user.thumb_x }" role="presentation"
                         class="_214e9 b00q8">
                </div>
            </div>
        </span>
        <div class="sc-epnACN YkbCv">
            <div class="_74oom">
                <a class="_eeohz" data-bind="attr: { href: _.isNull(user.fanbase) ? '/u/' +  user.slug : '/f/' + user.fanbase.slug }">
                    <span data-bind="text: _.isNull(user.fanbase) ? user.camel : user.fanbase.camel "></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"
                         class="_1z7Hy">
                        <g id="surface1">
                            <path style=" fill: transparent;" d="M 44 24 C 44 35.046875 35.046875 44 24 44 C 12.953125 44 4 35.046875 4 24 C 4 12.953125 12.953125 4 24 4 C 35.046875 4 44 12.953125 44 24 Z "></path>
                            <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 16 21 L 10 19 "></path>
                            <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 24 9 L 24 15 "></path>
                            <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 19 30 L 15 36 "></path>
                            <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 33 36 L 29 30 "></path>
                            <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 38 19 L 29 22 "></path>
                            <path style=" fill:#35C733;" d="M 16 21 L 24 15 L 32 21 L 29 30 L 19 30 Z M 29.984375 4.9375 C 28.09375 4.335938 26.089844 4 24 4 C 21.910156 4 19.90625 4.335938 18.015625 4.9375 L 16.375 7.8125 L 24 10 L 31 8 Z M 42 26 L 44 24 C 44 19.03125 42.179688 14.496094 39.179688 11 L 37 11.3125 L 37 19.4375 Z M 32.1875 34.8125 L 27.9375 41.5625 L 30.21875 43.003906 C 34.699219 41.535156 38.472656 38.527344 40.933594 34.605469 L 40.125 31.75 Z M 11.0625 19.4375 L 11 11.3125 L 8.820313 11 C 5.820313 14.496094 4 19.03125 4 24 L 6 26 Z M 7.875 31.75 L 7.066406 34.605469 C 9.527344 38.527344 13.296875 41.535156 17.78125 43 L 19.9375 41.4375 L 15.8125 34.8125 Z "></path>
                        </g>
                    </svg>
                </a>
                <div class="_csp04">
                    <!-- ko if: published_at.length > 0 -->
                    <span class="_2jvdf" data-bind="text: published_at"></span>
                    <!-- /ko -->
                </div>
            </div>
        </div>
        <div class="sc-krvtoX hzEOQv">
            <button class="sc-dUjcNx kXXKHw" data-tracking="post - tooltip - opened">
                <div class="_32tSU">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                        <g id="Bounding_Boxes">
                            <path fill="none" d="M0,0h24v24H0V0z" />
                        </g>
                            <g fill="rgba(125, 160, 177, 0.75)" id="Sharp">
                                <path d="M12,8c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2S10.9,8,12,8z M12,10c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S13.1,10,12,10z
                                M12,16c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S13.1,16,12,16z" />
                            </g>
                    </svg>
                </div>
            </button>
        </div>
    </div>
</template>