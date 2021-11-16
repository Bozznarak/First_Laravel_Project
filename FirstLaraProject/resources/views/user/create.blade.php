@extends('layouts.app')
@section('content')

<div style="border: 1px solid black">
    <h1 style="text-align: center">Erstellen eines Users</h1>
    <p style="text-align: center"></p>
</div>

<div>

    <form action="/user" method="POST">

        @csrf

        <input style="width:250px;margin-top: 50px;"
        type="text" placeholder="Benutzername" name="name"><br>

{{-- password müsste gehasht werden, aus Übersichts und Benutzungszwecken wird hier darauf verzichtet --}}
        <input style="width:250px; padding-bottom:80px;margin-top: 15px;"
        type="password" placeholder="*******" name="password"> <br>

        <input style="margin-top: 50px;" type="submit" placeholder="Erstellen">

    </form>
    
    
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        
    @endif

</div>

    
@endsection