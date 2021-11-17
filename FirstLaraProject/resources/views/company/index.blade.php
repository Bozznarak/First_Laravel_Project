@extends('layouts.app')
@section('content')
<div>
    <a href="company/create"> Erstelle eine neue Company</a>
    <br>

    <div style="text-align: center"><h1>Companys</h1></div>

    @foreach ($companys as $company)
    <div>
        <h2 style="text-align: center;">{{ $company->name }}</h1>
        <p style="text-align: center;"> {{  $company->description }}</p>
        <p style="text-align: center;"><a href="company/{{ $company->id }}/edit"> Editiere  {{ $company->name}}</a></p>

    </div>
        <div>
            <h2>Users</h2>
            <p>... hier die Aufzählung der User</p>
        </div>
        <div>
            <h2>Jobs</h2>
            <p>... hier die Aufzählung der Jobs</p>
        </div>

        <br>
        <br>
        <form action="/company/{{ $company->id}}" method="POST">
            @csrf
            @method('delete')

            <button style="background-color:red;" type="submit">Lösch diese Firma!</button>
        </form>
        <hr>
    
    @endforeach



</div>
@endsection