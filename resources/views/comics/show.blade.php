@extends('layouts.main')

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

             </div>
             <div class="w-50">
                <figure>
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
                </figure>
             </div>
        </div>
    </div>
@endsection