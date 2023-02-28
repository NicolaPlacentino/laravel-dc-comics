@extends('layouts.main')

@section('main-content')
<main>
    <div class="jumbo">
        <img src="{{asset('images/jumbotron.jpg')}}" alt="jumbotron">
    </div>
    <div class="container">
        <h2>Current series</h2>
        <div class="card-section">
            @foreach ($comics as $comic)
            <div class="card">
                <figure>
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <figcaption>{{$comic['series']}}</figcaption>
                </figure>
            </div>
            @endforeach

        </div>
        <div class="text-center">
            <button>Load More</button>
        </div>
    </div>
</main>
@endsection