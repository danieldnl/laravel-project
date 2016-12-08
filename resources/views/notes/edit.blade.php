@extends('layout')

@section('content')

    <h1>Editar Nota</h1>

        <form action="/notes/{{ $note->id }}" method="post">

            {{ method_field('PATCH') }}

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

            <div class="form-group">

                <textarea name="body" class="form-control">{{ $note->body }}</textarea>
            
            </div>

            <div class="form-group">
            
                <button type="submit" class="btn btn-primary">Atualizar Nota</button>
            
            </div>

        </form>

@stop