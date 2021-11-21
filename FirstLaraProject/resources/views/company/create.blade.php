@extends('layouts.app')
@section('content')

<div>
    <h1 class="text-center text-5xl font-bold underline mb-15">Erstelle eine Company</h1>
    <p></p>
</div>

<div>

    <form action="/company" method="POST">

        @csrf

        <input class="shadow border-2 mb-5"
        type="text" placeholder="Company Name" name="name"><br>


        <input class="shadow border-2 mb-5 "
        type="text" placeholder="Company Beschreibung" name="description"> <br>

        <input class="shadow border-2 mb-5"
        type="submit" placeholder="Erstellen">

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