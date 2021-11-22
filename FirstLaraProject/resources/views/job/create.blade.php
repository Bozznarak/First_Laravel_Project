@extends('layouts.app')
@section('content')

<div>
    <h1 class="text-center text-5xl font-bold underline mb-15">Erstelle einen Job</h1>
    <p></p>
</div>

<div>

    <form action="/job" method="POST">

        @csrf

        <input class="shadow border-2 mb-5"
        type="text" placeholder="Job Name" name="name"><br>


        <input class="shadow border-2 mb-5"
        type="text" placeholder="Job Beschreibung" name="description"> <br>

        <input type="submit" placeholder="Erstellen">

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