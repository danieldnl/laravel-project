@extends('layout')

@section('content')

@foreach($cards as $card)

    <h1><a href="../cards/{{ $card->id }}">{{ $card->title }}</a></h1>

@endforeach

@stop