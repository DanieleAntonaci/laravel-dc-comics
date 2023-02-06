@extends('layout.main-layout')

@section('person')
    <h1>
        {{$person -> name}} {{$person -> lastName}}
    </h1>
    <h2>
        {{$person -> dateOfBirth}}
    </h2>
    <h3>
        {{$person -> height}}
    </h3>
@endsection