@extends('layouts.app')

@section('content')
    <main class="container">

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div>

                <label for="title">Titolo</label>
                <input class="@error('title') is-invalid @enderror" type="text" name="title" id="title"
                    value="{{ old('title') }}" placeholder="Inserisci il titolo del fumetto">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div>

                <label for="description">Descrizione</label>
                <textarea name="description" id="description" value="{{ old('description') }}"
                    placeholder="inserisci qui la descrizione..."></textarea>


            </div>
            <div>

                <label for="thumb">Ulr img</label>
                <input type="text" name="thumb" id="thumb" value="{{ old('thumb') }}" placeholder="url">

            </div>
            <div>

                <label for="price">Prezzo</label>
                <input class="@error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{ old('price') }}"
                    placeholder="Inserisci il prezzo del fumetto">
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div>

                <label for="series">Serie</label>
                <input class="@error('series') is-invalid @enderror" type="text" name="series" id="series" value="{{ old('series') }}"
                    placeholder="Inserisci la serie del fumetto">
                    @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <button type="submit">
                aggiungi fumetto

            </button>


        </form>
    </main>
@endsection
