@extends('layouts.app')

@section('page-title')
    Fumetti
@endsection

@section('main')


<div class=" ">
    <div class="container py-5">
        <div class="row mx-auto  ">
            <ul>
            @foreach ($comics as $comic)              
                <li>             
                    <p class="card-title">{{$comic ->title}} - <a class="text-danger" href="{{route('comics.edit', $comic->id)}}"> Modifica</a></p>                          
                </li>                                     
                  
            @endforeach
            </ul>
            

        </div>
    </div>
</div>
@endsection