@extends('layouts.auth')

@section('title', 'Join')

@section('content')
    @include('auth.templates.form')
    <join-form></join-form>
@endsection