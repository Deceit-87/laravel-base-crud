@extends('layouts.app')

@section('content')

        {{$comic->title}}<hr>
        <img src="{{$comic->thumb}}" alt=""><br>


    
        €{{$comic->price}}<br>
  
        {{$comic->series}}<br>
 
        {{$comic->type}}<br>

  
</tr>
</tr>@endsection