<template id="follow-template">
    <button class="_1MC-v _1h78h" data-bind="click: save, css: { 'FYAkp': isInactive, '_zrN-a _2P1mw': isList, '_2qvTq _2yZ_n _1odcZ': isItem }">
        <span data-bind="visible: isInactive, text: inactiveText"></span>
        <span data-bind="visible: isActive, text: activeText">Joined</span>
        <!-- ko if: isItem -->
            <svg data-bind="visible: isActive" xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8"><path fill="#FFF" fill-rule="evenodd" d="M3 3H0v2h3v3h2V5h3V3H5V0H3v3z"></path></svg>
            <svg data-bind="visible: isInactive" width="12" height="9" viewBox="0 0 12 9"><path fill="#fff" fill-rule="evenodd" d="M9.4 1L11 2.6 4.87 8.73 1 4.86l1.6-1.59 2.27 2.27z"></path></svg>
        <!-- /ko -->
    </button>
</template>