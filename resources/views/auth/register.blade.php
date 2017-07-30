@extends('layouts.auth')

@section('title', 'Join')

@section('content')
    <div id="register-view-template">
        {!! Form::open(['route' => 'register', 'role' => 'form', 'method' => 'POST', 'class' => '_2rf1'] ) !!}
        <h1 class="bWRAm">This is all things football sign in</h1>
        <div>
            {!! Form::text('nickname', null, ['class' => '_12n1y', 'placeholder' => 'NICKNAME', 'data-bind' => 'value: nickname, event: { change: enableRegisterContinue, blur: showAllMessages }']) !!}
            @if ($errors->has('nickname'))
                <span class="_1u7op">{{ $errors->first('nickname') }}</span>
            @endif
            {!! Form::email('email', null, ['class' => '_12n1y', 'data-bind' => 'value: email, event: { change: enableRegisterContinue, blur: showAllMessages }', 'placeholder' => 'EMAIL ADDRESS', 'required']) !!}
            @if ($errors->has('email'))
                <span class="_1u7op">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <button class="M13JP _1geYT" data-bind="enable: canRegisterContinue">Continue</button>
        {!! Form::close() !!}
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(function() {

            var viewRegisterModel = {
                nickname: ko.observable().extend({
                    required: {
                        message: 'Nickname is required.'
                    }
                }),
                email: ko.observable().extend({
                    required: {
                        message: 'Email is required.'
                    }
                }).extend({
                    email: {
                        message: 'Email is invalid.'
                    }
                }),
                canRegisterContinue: ko.observable(false),
                enableRegisterContinue: function(){
                    this.canRegisterContinue(viewRegisterModel.errors.length == 0);
                },
                showAllMessages: function(){
                    console.log("showAllMessages");
                    viewRegisterModel.errors.showAllMessages();
                }
            };

            viewRegisterModel.errors = ko.validation.group(viewRegisterModel);

            ko.applyBindings(viewRegisterModel, document.getElementById('register-view-template'));
        });
    </script>
@endsection