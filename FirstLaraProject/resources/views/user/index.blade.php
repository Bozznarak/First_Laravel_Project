@extends('layouts.app')
@section('content')


{{-- Ändern zum Login des nutzers, danach verlinkung auf eine Profilseite oder ähnliches --}}


<div>
    <a href="user/create"> Erstelle eines neuen Users</a>
    <br>

    <div style="text-align: center"><h1>Users</h1></div>

    @foreach ($users as $user)
    <div>
        <h1 style="text-align: center;">{{ $user->name }}</h1>
        <p style="text-align: center;"> {{  $user->description }}</p>
        <p style="text-align: center;"><a href="user/{{ $user->id }}/edit"> Editiere  {{ $user->name}}</a></p>

    </div>
        <div>
            <h2>Company/s</h2>
            <p>... hier die Aufzählung der Company/s</p>
        </div>
        <div>
            <h2>Jobs</h2>
            <p>... hier die Aufzählung deiner Jobs</p>
        </div>

        <br>
        <br>
        <form action="/user/{{ $user->id}}" method="POST">
            @csrf
            @method('delete')

            <button style="background-color:red;" type="submit">Lösch diese Firma!</button>
        </form>
        <hr>
    
    @endforeach



</div>
@endsection