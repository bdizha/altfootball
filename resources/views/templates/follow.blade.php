<template id="follow-template">
    <button data-bind="attr: { class: cssClass() }, click: save, css: { 'FYAkp': isActive, 'b9xa-': isInactive, 'b9xa-': isUser }">
        <span data-bind="visible: isInactive, text: inactiveText"></span>
        <span data-bind="visible: isActive, text: activeText"></span>
        <!-- ko if: !isList() -->
        <span class="_3xWuC">
            <svg data-bind="visible: isInactive" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"><path fill="#FFF" stroke="#FFF" stroke-width="1" fill-rule="evenodd" d="M 11 5 L 11 11 L 5 11 L 5 13 L 11 13 L 11 19 L 13 19 L 13 13 L 19 13 L 19 11 L 13 11 L 13 5 Z "></path></svg>
            <svg data-bind="visible: isActive" width="12" height="9" viewBox="0 0 12 9"><path fill="#fff" fill-rule="evenodd" d="M9.4 1L11 2.6 4.87 8.73 1 4.86l1.6-1.59 2.27 2.27z"></path></svg>
        </span>
        <!-- /ko -->
    </button>
</template>