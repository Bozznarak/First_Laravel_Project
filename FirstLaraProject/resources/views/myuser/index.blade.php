@extends('layouts.app')
@section('content')


{{-- Ändern zum Login des nutzers, danach verlinkung auf eine Profilseite oder ähnliches --}}


<div>
    <a class="border-2" 
    href="myuser/create"> Erstelle eines neuen Users</a>
    <br>

    <div>
        <h1 class="text-center text-5xl font-bold underline mb-15">Users</h1>
    </div>

    @foreach ($myUsers as $myUser)
        <div>
            <h2 class="text-3xl text-bold pb-5"
            >{{ $myUser->name }}</h2>
            <p> {{  $myUser->description }}</p>

        </div>

        <div>
            <h2>Company/s</h2>
            <p>... hier die Aufzählung der Company/s</p>
        </div>

        <div class="mb-5">
            <h2>Jobs</h2>
            <p>... hier die Aufzählung deiner Jobs</p>
        </div>
        
        <div>
            <p>
                <a class="underline bg-green-300"
                href="myuser/{{ $myUser->id }}/edit"> Editiere  {{ $myUser->name}}</a>
            </p>
            <form class="mt-3 mb-5" 
            action="/myuser/{{ $myUser->id}}" method="POST">
                @csrf
                @method('delete')

                <button class="underline bg-red-300"
                type="submit">Lösch diesen User!</button>
            </form>
                <hr class="mb-10">
        </div>
    @endforeach



</div>
@endsection