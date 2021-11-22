@extends('layouts.app')
@section('content')

<div>
    <h1 class="text-center text-5xl font-bold underline mb-15">Editiere eine Company</h1>
    <p></p>
</div>

<div>

    <form action="/company/{{ $company->id }}" method="POST">

        @csrf
        @method('PUT')

        <input class="shadow border-2 mb-5" type="text" placeholder="Company Name" name="name" value="{{ $company->name }}"><br>


        <input class="shadow border-2 mb-5" type="text" placeholder="Company Beschreibung" name="description" value="{{ $company->description }}"> <br>

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