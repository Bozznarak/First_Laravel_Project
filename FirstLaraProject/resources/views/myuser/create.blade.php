@extends('layouts.app')
@section('content')

<div>
    <h1 class="text-center text-5xl font-bold underline mb-15">Erstellen eines Users</h1>
    <p></p>
</div>

<div>

    <form action="/myuser" method="POST">

        @csrf

        <input class="shadow border-2 mb-5"
        type="text" placeholder="Benutzername" name="name"><br>

{{-- password müsste gehasht werden, aus Übersichts und Benutzungszwecken wird hier darauf verzichtet --}}

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