@extends('layout.main-layout')

@section('form-add')
    <form action="{{route('person.store')}}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name">
            <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName">
            <br>
        <label for="dateOfBirth">date of birth</label>
        <input type="date" name="dateOfBirth">
            <br>
        <label for="height">height</label>
        <input type="number" name="height">
            <br>
        <input type="submit" value="Create new person">
    </form>
@endsection