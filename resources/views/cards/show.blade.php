@extends('layout')

@section('content')

    <div class="row">
    
        <div class="col-md-6 col-md-offset-3">
    
            <h1 style="text-align: center">{{ $card->title }}</h1>

            <ul class="list-group">
            
                @foreach($card->notes as $note)

                    <li class="list-group-item">
                    
                        {{ $note->body }}

                        <a href="#" style="float:right"> {{ $note->user->username }} </a>
                    
                    </li>

                @endforeach

            </ul>

                <hr>
                
                <h4>Adicionar nova nota</h4>

                <form action="/cards/{{ $card->id }}/notes" method="post">

                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                    <div class="form-group">

                        <textarea name="body" class="form-control">{{ old('body') }}</textarea>
                    
                    </div>

                    <div class="form-group">
                    
                        <button type="submit" class="btn btn-primary">Adicionar Nota</button>
                    
                    </div>

                </form>

                @if(count($errors))

                    <ul>
                    
                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach
                    
                    </ul>          

                @endif          

        </div>


    </div>

@stop