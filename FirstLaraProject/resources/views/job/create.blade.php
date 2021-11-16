@extends('layouts.app')
@section('content')

<div style="border: 1px solid black">
    <h1 style="text-align: center">Erstelle einen Job</h1>
    <p style="text-align: center"></p>
</div>

<div>

    <form action="/job" method="POST">

        @csrf

        <input style="width:250px;margin-top: 50px;"
        type="text" placeholder="Job Name" name="name"><br>


        <input style="width:250px; padding-bottom:80px;margin-top: 15px;"
        type="text" placeholder="Job Beschreibung" name="description"> <br>

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