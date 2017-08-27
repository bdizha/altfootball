@extends('layouts.auth')

@section('title', 'Join')

@section('content')
    @include('auth.templates.form')
    <join-form params="_token: '{{ csrf_token() }}'"></join-form>
@endsection