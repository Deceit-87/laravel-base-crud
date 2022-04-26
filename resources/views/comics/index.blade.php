@extends('layouts.app')

@section('content')


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
</tr>
    
@endforeach

    </tbody>
</table>


@endsection