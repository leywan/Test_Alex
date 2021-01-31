@extends('base')

@section('title', config('app.name'))

@section('content')

        <h1>Bienvenue sur notre Callcenter</h1>

        <p>Il est {{date('H:i:s')}}.</p>

@endsection
