@extends('base')

@section('title','A Propos | '. config('app.name'))

@section('content')

    <img src="{{asset('/images/logo.png')}}" alt="Lou-Ann Technologies">
    <p class="text-lg text-gray-300">We <span class="text-pink-500">&hearts;</span> work with Lou-Ann Technologies</p>

@endsection
