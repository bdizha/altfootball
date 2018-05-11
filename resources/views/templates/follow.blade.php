<template id="follow-template">
    <button data-bind="attr: { class: cssClass() }, click: save, css: { 'FYAkp': isActive, 'b9xa-': isInactive, 'b9xa-': isUser }">
        <span data-bind="visible: isInactive, text: inactiveText"></span>
        <span data-bind="visible: isActive, text: activeText"></span>
        <!-- ko if: !isList() -->
        <span class="_3xWuC"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8"><path fill="#FFF" fill-rule="evenodd" d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"></path></svg></span>
        <!-- /ko -->
    </button>
</template>