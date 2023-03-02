@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <div class="container">
        <h1 class="text-center">Modifica un fumetto</h1>
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col px-4 mb-3">
                    
                    <div class="d-flex">
                        <div class="me-5">
                            <label for="title" class="d-block">Titolo</label>
                            <input type="text" value="{{old('title', $comic->title)}}" name="title" id="title" class="mb-1">
                        </div>
    
                        <div class="me-5">
                            <label for="series" class="d-block">Serie</label>
                            <input type="text" value="{{old('series', $comic->series)}}" name="series" id="series" class="mb-1">
                        </div>
                    </div>

                    <div>
                        <label for="thumb" class="d-block">Immagine</label>
                        <input type="url" value="{{old('thumb', $comic->thumb)}}" name="thumb" id="thumb" class="mb-1 w-75">
                    </div>

                    <div class="d-flex">
                        <div class="me-5">
                            <label for="price" class="d-block">Prezzo</label>
                            <input type="text" value="{{old('price', $comic->price)}}" name="price" id="price" class="mb-1">
                        </div>
                        <div class="me-5">
                            <label for="sale_date" class="d-block">Data di vendita</label>
                            <input type="text" value="{{old('sale_date', $comic->sale_date)}}" name="sale_date" id="sale_date" class="mb-1">
                        </div>
                    </div>

                    <div class="me-5">
                        <label for="type" class="d-block">Tipo</label>
                        <input type="text" value="{{old('type', $comic->type)}}" name="type" id="type" class="mb-1">
                    </div>
                </div>
                    
                <div class="col px-4 mb-3">
                    <div>
                        <label for="description" class="d-block">Descrizione</label>
                        <textarea name="description" id="description" class="mb-1 w-100">{{old('description', $comic->description)}}</textarea>
                    </div>       
                    <div>
                        <label for="artists" class="d-block">Artisti</label>
                        <textarea name="artists" id="artists" class="mb-1 w-100"> {{old('artists', $comic->artists)}}</textarea>
                    </div>   
                    <div>
                        <label for="writers" class="d-block">Scrittori</label>
                        <textarea name="writers" id="writers" class="mb-1 w-100"> {{old('writers', $comic->writers)}}</textarea>
                    </div>           
                </div>

                <div class="text-center mb-4">
                    <button class="btn btn-primary w-25 text-uppercase">Salva</a>
                </div>
            </div>
        </form>
    </div>
@endsection