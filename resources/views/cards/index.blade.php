@extends('layout')

@section('content')

 <h1>Meus Cards</h1>

@foreach($cards as $card)

    <h3><a href="../cards/{{ $card->id }}">{{ $card->title }}</a></h1>

@endforeach

@stop