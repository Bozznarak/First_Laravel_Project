@extends('layouts.app')
@section('content')
<div>
    <a href="job/create"> Erstelle einen neuen Job</a>
    <br>

    <div style="text-align: center"><h1>Jobs</h1></div>
    @foreach ($jobs as $job)
    <div>
        <h1 style="text-align: center;">{{ $job->name }}</h1>
        <p style="text-align: center;"> {{  $job->description }}</p>
        {{-- hier if Statement wenn fkuser mit aktuellem User übereinstimmt --}}
        <p style="text-align: center;"><a href="job/{{ $job->id }}/edit"> Editiere  {{ $job->name}}</a></p>

    </div>
        <div>
            <h2>User</h2>
            <p>Dieser User hat den Job erstellt</p>
        </div>
        <div>
            <h2>Company</h2>
            <p>diese Company gehört zu diesem Job</p>
        </div>

        <br>
        <br>
        <form action="/job/{{ $job->id}}" method="POST">
            @csrf
            @method('delete')


            {{-- hier if Statement wenn fkuser mit aktuellem User übereinstimmt --}}
            <button style="background-color:red;" type="submit">Lösch diesen Job</button>
        </form>
        <hr>
    
    @endforeach



</div>
@endsection