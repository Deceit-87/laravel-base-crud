@extends('layouts.app')

@section('content')

<main>

    <form action="{{route('comics.store')}}">
    
        <div>
    
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="Inserisci il titolo del fumetto">
    
        </div>
        <div>
    
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" placeholder="Inserisci il prezzo del fumetto">
            
        </div>
        <div>
    
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" placeholder="Inserisci la serie del fumetto">
            
        </div>
        
        <button type="submit">
            aggiungi fumetto
    
        </button>
      
    
    </form>
</main>
@endsection