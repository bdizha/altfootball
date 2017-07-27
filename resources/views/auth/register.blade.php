@extends('layouts.auth')

@section('title', 'Join')

@section('content')
    {!! Form::open(['route' => 'register', 'role' => 'form', 'method' => 'POST'] ) !!}
    <h1 class="bWRAm">This is all things football sign in</h1>
    <div>
        {!! Form::text('nickname', null, ['class' => '_12n1y', 'placeholder' => 'NICKNAME', 'data-bind' => 'value: nickname, event: { change: enableRegisterContinue }']) !!}
        @if ($errors->has('nickname'))
            <span class="_1u7op">{{ $errors->first('nickname') }}</span>
        @endif
        {!! Form::email('email', null, ['class' => '_12n1y', 'data-bind' => 'value: email, event: { change: enableRegisterContinue }', 'placeholder' => 'EMAIL ADDRESS', 'required']) !!}
        @if ($errors->has('email'))
            <span class="_1u7op">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <button class="M13JP _1geYT" data-bind="enable: canRegisterContinue">Continue</button>
    {!! Form::close() !!}
@endsection