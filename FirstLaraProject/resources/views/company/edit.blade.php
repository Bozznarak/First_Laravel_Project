@extends('layouts.app')
@section('content')

<div style="border: 1px solid black">
    <h1 style="text-align: center">Editiere eine Company</h1>
    <p style="text-align: center"></p>
</div>

<div>

    <form action="/company/{{ $company->id }}" method="POST">

        @csrf
        @method('PUT')

        <input style="width:250px;margin-top: 50px;"
        type="text" placeholder="Company Name" name="name" value="{{ $company->name }}"><br>


        <input style="width:250px; padding-bottom:80px;margin-top: 15px;"
        type="text" placeholder="Company Beschreibung" name="description" value="{{ $company->description }}"> <br>

        <input style="margin-top: 50px;" type="submit" placeholder="Editieren">

    </form>

</div>

    
@endsection