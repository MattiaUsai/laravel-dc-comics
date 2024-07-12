@extends('layouts.app')

@section('page-title')
    Fumetto
@endsection

@section('main')
<div class="container">
    <div class="row">
        <h1>{{$comic->title}}</h1>
        <h2>{{$comic->type}} </h2>
    </div>
    <a href="/comicss">torna a comics</a>
</div>
@endsection