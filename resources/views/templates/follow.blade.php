<template id="follow-template">
    <div class="_2aOYp">
        <button class="_8GOLs _1h78h" data-bind="click: save, css: { 'b9xa-': isInactive, _1fDUg: isActive }">
            <span data-bind="if: isInactive">follow</span>
            <span data-bind="if: isActive">unfollow</span>
            <span class="_3xWuC">
               <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                    viewBox="0 0 8 8">
                   <path fill="#FFF" fill-rule="evenodd"
                         d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"></path>
               </svg>
            </span>
        </button>
    </div>
</template>