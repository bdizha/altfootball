@extends('layouts.auth')

@section('content')
	<div class="">
		<h1 class="_15nhh nNfqa" style="opacity: 1; transform: translateY(0px) translateZ(0px);">Great stuff.</h1>
		<p class="VnaIq nNfqa" style="opacity: 1; transform: translateY(0px) translateZ(0px);">
			We've sent an email to
			<br><span>{{ $user->email }}</span></p>
		<p class="VnaIq nNfqa" style="opacity: 1; transform: translateY(0px) translateZ(0px);">Just open it, hit the link and you're good to go.</p>
		<p class="VnaIq nNfqa" style="opacity: 1; transform: translateY(0px) translateZ(0px);">Welcome to ALTFOOTBALL</p>
	</div>
@endsection