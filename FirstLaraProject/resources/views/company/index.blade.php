@extends('layouts.app')
@section('content')
<div>
    <a class="border-2" 
    href="company/create"> Erstelle eine neue Company</a>
    <br>

    <div class="text-center">
        <h1 class="text-5xl font-bold underline">Companies</h1>
    </div>



    @foreach ($companies as $company)
    <div>
        <h2 class="text-3xl text-bold pb-5">{{ $company->name }}</h1>
        <p> {{  $company->description }}</p>
        <p><a href="company/{{ $company->id }}/edit"> Editiere  {{ $company->name}}</a></p>

    </div>
        <div>
            <h2>Users</h2>
            <p>... hier die Aufzählung der User</p>
        </div>
        <div class="mb-5">
            <h2>Jobs</h2>
            <p>... hier die Aufzählung der Jobs</p>
        </div>

        
        <div>
            <p>
                <a class="underline bg-green-300" 
                href="company/{{ $company->id }}/edit"> Editiere  {{ $company->name}}</a>
            </p>

            <form class="mt-3 mb-5" action="/company/{{ $company->id}}" method="POST">
                @csrf
                @method('delete')

                <button class="underline bg-red-300"
                type="submit">Lösch diese Firma!</button>
            </form>
        </div>
        <hr class="mb-10">
    
    @endforeach



</div>
@endsection