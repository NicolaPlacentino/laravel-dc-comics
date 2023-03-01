@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
<main>
    <div class="jumbo">
        <img src="{{asset('images/jumbotron.jpg')}}" alt="jumbotron">
    </div>
    <div class="my-container">
        <h2>Current series</h2>
        <div class="card-section">
            @foreach ($comics as $comic)
            <div class="my-card">
                <a href="{{route('comics.show', $comic->id)}}">
                    <figure>
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        <figcaption>{{$comic['series']}}</figcaption>
                    </figure>
                </a>
            </div>
            @endforeach

        </div>
        <div class="text-center">
            <a href="{{route('comics.create')}}" class="btn btn-primary rounded-0 text-uppercase mb-5">Aggiungi un fumetto</a>
        </div>
    </div>
</main>
@endsection