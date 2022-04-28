@extends('layouts.app')

@section('content')
<div class="container">
    
    <table>
        <tbody>
    
    @foreach ($comics as $comic)
    
    <tr>
        <td>
            {{$comic->title}}
        </td>
        <td>
            {{$comic->price}}
        </td>
        <td>
            {{$comic->series}}
        </td>
        <td>
            {{$comic->type}}
        </td>
        <td>
           <a href="{{route('comics.show',$comic->id ) }}">visualizza</a>
        </td>
        <td>
            <a href="{{route('comics.edit',$comic->id ) }}">modifica</a>
         </td>
         <td>
             <form action="{{route('comics.destroy',$comic)}}" method="POST">
                @method('DELETE')
                @csrf
    
                <button type='submit' onclick="return confirm('sei sicuro ?')">
                    Delete
                </button>
    
            </form>
         </td>
         
    </tr>
        
    @endforeach
    
        </tbody>
    </table>
</div>



@endsection