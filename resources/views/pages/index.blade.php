@extends('layout.main-layout')

@section('list-person')
<a href="{{route('person.create')}}">Create new perosn</a>
    <ul>
        @foreach ($people as $person)
        <li>
            <a href="{{route('person.show', $person)}}">
                {{$person -> name}} {{$person -> lastName}}
            </a>
            -
            <a href="{{route('person.destroy', $person)}}">Delete</a>
            -
            <a href="{{route('person.edit',$person)}}">Update</a>
        </li>
        @endforeach
    </ul>
@endsection