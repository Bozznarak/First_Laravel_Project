@extends('layouts.app')
@section('content')

<div style="border: 1px solid black">
    <h1 style="text-align: center">Erstellen eine Company</h1>
    <p style="text-align: center"></p>
</div>

<div>

    <form action="/company" method="POST">

        @csrf

        <input style="width:250px;margin-top: 50px;"
        type="text" placeholder="Company Name" name="name"><br>


        <input style="width:250px; padding-bottom:80px;margin-top: 15px;"
        type="text" placeholder="Company Beschreibung" name="description"> <br>

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