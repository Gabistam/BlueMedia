@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<h1 class="text-center text-5xl font-bold mt-10"> Bienvenue sur {{ config('app.name') }} </h1>
<div class="flex justify-center my-8">
    <p>Ce site de streaming de films et de séries TV est en cours de développement.</p>
</div>
@endsection
