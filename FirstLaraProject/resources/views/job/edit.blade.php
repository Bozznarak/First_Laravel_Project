@extends('layouts.app')
@section('content')

{{-- only should be shown when the User equals the fkuser(foreign Key) of this job! --}} 

<div>
    <h1 class="text-center text-5xl font-bold underline mb-15">Editiere einen Job</h1>
    <p></p>
</div>

<div>

    <form action="/job/{{ $job->id }}" method="POST">

        @csrf
        @method('PUT')

        <input class="shadow border-2 mb-5"
        type="text" placeholder="job Name" name="name" value="{{ $job->name }}"><br>


        <input class="shadow border-2 mb-5"
        type="text" placeholder="Job Beschreibung" name="description" value="{{ $job->description }}"> <br>

        <input type="submit" placeholder="Editieren">

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