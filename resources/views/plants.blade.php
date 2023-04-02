@extends('layout.plants')
@section('plantsContainer')
<div>
    @foreach ($plants as $plant)
    <h1 class="text-3xl">{{ $plant->name }}</h1>
    <br>
    <div>
        <h2 class="text-m font-bold">Scientific </h2>
        <p>Genus : {{ $plant->genus }}</p>
        <p>Species : {{ $plant->species }}</p>
        <p>Common Name : {{ $plant->common_name }}</p>
    </div>
    <div>
        <h2 class="text-m font-bold">Specification </h2>
        <p>Light : {{ $plant->light }}</p>
        <p>Temp : {{ $plant->temp }}</p>
        <p>Difficulty : {{ $plant->difficulty }}</p>
        <p>Usage : {{ $plant->usage }}</p>
    </div>
    <br>
    <p class="font-serif">{{ $plant->body }}</p>
    <br>
    @endforeach
</div>
@endsection