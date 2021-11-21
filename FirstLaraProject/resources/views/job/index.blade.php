@extends('layouts.app')
@section('content')



<div>
    <a class="border-2"
    href="job/create"> Erstelle einen neuen Job</a>
    <br>

    <div>
        <h1 class="text-center text-5xl font-bold underline mb-15">Jobs</h1>
    </div>

    @foreach ($jobs as $job)
    <div>
        <h1 class="text-3xl text-bold pb-5">{{ $job->name }}</h1>
        <p> {{  $job->description }}</p>
    </div>

    <div>
        <h2>User</h2>
        <p>Dieser User hat den Job erstellt</p>
    </div>

    <div class="mb-5">
        <h2>Company</h2>
        <p>diese Company gehört zu diesem Job</p>
    </div>

    <div>
        <p><a class="underline bg-green-300"
            href="job/{{ $job->id }}/edit"> Editiere  {{ $job->name}}</a>
        </p>

        <form class="mt-3 mb-5"
        action="/job/{{ $job->id}}" method="POST">

            @csrf
            @method('delete')

            <button class="underline bg-red-300"
            type="submit">Lösch diesen Job</button>
        </form>
    </div>

    <hr class="mb-10">
    
    @endforeach



</div>
@endsection