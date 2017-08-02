@extends('layouts.auth')

@section('title', 'Join')

@section('content')
    <div id="register-view-template">
        {!! Form::open(['route' => 'register', 'role' => 'form', 'method' => 'POST', 'class' => '_2rf1', 'data-bind' => 'submit: submit'] ) !!}
        <input type="hidden" name="nickname" />
        <h1 class="bWRAm">This is all things football sign in</h1>
        <div>
            {!! Form::email('email', null, ['class' => '_12n1y', 'data-bind' => 'value: email, event: { change: updateRegisterContinue, blur: showAllMessages }', 'placeholder' => 'EMAIL ADDRESS']) !!}
            @if ($errors->has('email'))
                <span class="_1u7op">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <button class="M13JP _1geYT" type="submit" data-bind="enable: enabled">Continue</button>
        {!! Form::close() !!}
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(function() {

            var viewRegisterModel = {
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
                enabled: ko.observable(true),
                updateRegisterContinue: function(){
                    console.log(viewRegisterModel.errors().length);
                    this.canRegisterContinue(viewRegisterModel.errors().length === 0);
                },
                showAllMessages: function(){
                    console.log("showAllMessages");
                    viewRegisterModel.errors.showAllMessages();
                },
                submit: function(){
                    this.showAllMessages();

                    if(this.canRegisterContinue()){
                        this.enabled(false);
                    }
                    return this.canRegisterContinue();
                }
            };

            viewRegisterModel.errors = ko.validation.group(viewRegisterModel);

            ko.applyBindings(viewRegisterModel, document.getElementById('register-view-template'));
        });
    </script>
@endsection