<template id="join-form-template">
    <form method="POST" action="/register" accept-charset="UTF-8" class="_2rf1"
          data-bind="submit: proceed, css: { '_23KD': isSubmitted }">
        <img src="/images/text.png" title="altfootball" alt="altfootball">
        <input type="hidden" name="nickname"/>
        <input name="_token" data-bind="value: token" type="hidden">
        <h1 class="bWRAm">The only place where everything is football</h1>
        <div class="_34JK">
            <input class="_12n1y"
                   data-bind="value: email, valueUpdate: 'afterkeyup', event: { focus: focusEmail, blur: blurEmail }"
                   placeholder="EMAIL ADDRESS" name="email" type="email" title="Email is invalid."/>
        </div>
        <button class="M13JP _1geYT" type="submit"data-bind="enable: canGo()">Continue</button>
    </form>
    <div class="_JD9R" data-bind="css: { '_83JNY': isSubmitted }">
        <h1 class="_15nhh nNfqa" style="opacity: 1; transform: translateY(0px) translateZ(0px);">Great stuff.</h1>
        <p class="VnaIq nNfqa" style="opacity: 1; transform: translateY(0px) translateZ(0px);">
            We've sent an email to
            <br><span data-bind="text: email"></span></p>
        <p class="VnaIq nNfqa" style="opacity: 1; transform: translateY(0px) translateZ(0px);">Just open it, hit the link and you're good to go.</p>
        <p class="VnaIq nNfqa" style="opacity: 1; transform: translateY(0px) translateZ(0px);">Welcome to ALTFOOTBALL</p>
    </div>
</template>