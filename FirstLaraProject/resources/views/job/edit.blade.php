@extends('layouts.app')
@section('content')

{{-- only should be shown when the User equals the fkuser(foreign Key) of this job! --}} 

<div style="border: 1px solid black">
    <h1 style="text-align: center">Editiere einen Job</h1>
    <p style="text-align: center"></p>
</div>

<div>

    <form action="/job/{{ $job->id }}" method="POST">

        @csrf
        @method('PUT')

        <input style="width:250px;margin-top: 50px;"
        type="text" placeholder="job Name" name="name" value="{{ $job->name }}"><br>


        <input style="width:250px; padding-bottom:80px;margin-top: 15px;"
        type="text" placeholder="Job Beschreibung" name="description" value="{{ $job->description }}"> <br>

        <input style="margin-top: 50px;" type="submit" placeholder="Erstellen">

    </form>

</div>

    
@endsection