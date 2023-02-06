@extends('layout.main-layout')

@section('list-person')
<a class="new-person" href="{{route('person.create')}}">Create new perosn</a>
    <ul>
        @foreach ($people as $person)
        <li>
            <a href="{{route('person.show', $person)}}">
                {{$person -> name}} {{$person -> lastName}}
            </a>
            <div>

                <a class="delete-person" href="{{route('person.destroy', $person)}}">Delete</a>
                -
                <a class="update-person" href="{{route('person.edit',$person)}}">Update</a>
            </div>
        </li>
        @endforeach
    </ul>
@endsection