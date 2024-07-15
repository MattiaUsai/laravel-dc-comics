@extends('layouts.app')

@section('page-title')
    Fumetti
@endsection

@section('main')
<div class="backgroung-img w-100 object-fit-cover" style="height: 300px">
    <img class="w-100 h-100" src="{{ Vite::asset('resources/img/img-background.jpg') }}" alt=""> 
</div>

<div class=" bg-dark">
    <div class="container py-5">
        <div class="row mx-auto  ">
            @foreach ($comics as $comic)              
                <div class="col-sm-2 mb-3 mb-sm-0">
                    <div class="card">
                        
                        <a class="w-100" href="{{route('comics.show', $comic->id)}}" >
                            <img class="w-100 " src="{{$comic->thumb}}" alt=""> 
                        </a>
                        

                                                
                        <p class="card-title">{{$comic ->title}}</p>                          
                                                    
                    </div>
                </div>
            @endforeach
            
            

        </div>
    </div>
</div>
@endsection