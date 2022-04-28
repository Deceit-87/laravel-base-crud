@extends('layouts.app')

@section('content')

<main>

    <form action="{{route('comics.update',$comic->id )}}" method="POST">
        @method('PUT')
        @csrf
    
        <div>
    
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{$comic->title}}" placeholder="Inserisci il titolo del fumetto">
    
        </div>
        <div>
    
            <label for="description">Descrizione</label>
            <textarea  name="description" id="description" value="{{$comic->description}}">{{$comic->description}}</textarea>
        
    
        </div>
        <div>
    
            <label for="thumb">Ulr img</label>
            <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}" placeholder="url">
    
        </div>
        <div>
    
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value="{{$comic->price}}">
            
        </div>
        <div>
    
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" value="{{$comic->series}}" placeholder="Inserisci la serie del fumetto">
            
        </div>
        
        <button type="submit">
            aggiungi fumetto
    
        </button>
      
    
    </form>
</main>
@endsection