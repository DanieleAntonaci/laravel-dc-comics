@extends('layout.main-layout')

@section('form-edit')
<h1>
    Update person 
</h1>
<form action="{{route('person.update', $person)}}" method="POST">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" value="{{$person -> name }}">
        <br>
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" value="{{$person -> lastName }}">
        <br>
    <label for="dateOfBirth">date of birth</label>
    <input type="date" name="dateOfBirth" value="{{$person -> dateOfBirth }}">
        <br>
    <label for="height">height</label>
    <input type="number" name="height" value="{{$person -> height }}">
        <br>
    <input type="submit" value="Update person">
</form>
@endsection