@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <div class="comic-show container">
        <h1>{{$comic->title}}</h1>
        <div class="d-flex">
             <div class="w-50">
                <h4>{{$comic->series}}</h4>
                <p class="pb">{{$comic->description}}</p>

                <span class="pb">{{$comic->price}} {{$comic->sale_date}}</span>

                <div class="d-flex">
                    <div class="w-50">
                        <p>Artisti:</p>
                        <span>{{$comic->artists}}</span>
                    </div>
                    <div class="w-50">
                        <p>Scrittori:</p>
                        <span>{{$comic->writers}}</span>
                    </div>
                </div>
                
                <div class="d-flex justify-content-end mt-3">
                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-outline-primary">Modifica</a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="ms-3">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">Elimina</button>
                    </form>
                </div>
             </div>
             <div class="w-50">
                <figure>
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
                </figure>
             </div>
        </div>
    </div>
@endsection