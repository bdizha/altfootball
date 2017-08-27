<template id="join-form-template">
    {!! Form::open(['route' => 'register', 'role' => 'form', 'method' => 'POST', 'class' => '_2rf1', 'data-bind' => 'submit: proceed'] ) !!}
    <input type="hidden" name="nickname" />
    <h1 class="bWRAm">This is all things football sign in</h1>
    <div>
        <input class="_12n1y" data-bind="value: email, event: { valueUpdate: 'afterkeyup', focus: focusEmail, blur: blurEmail }" placeholder="EMAIL ADDRESS" name="email" type="email" title="Email is invalid." />
        @if ($errors->has('email'))
            <span class="_1u7op">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <button class="M13JP _1geYT" type="submit" data-bind="enable: canGo">Continue</button>
    {!! Form::close() !!}
</template>