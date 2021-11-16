@extends('layouts.app')
@section('content')
<div>



    @foreach ($companys as $company)
    <div style="border: 1px solid black">
        <h1 style="text-align: center">{{ $company->name }}</h1>
        <p style="text-align: center"> {{  $company->description }}</p>
    </div>
        <div>
            <h2>Users</h2>
            <p>... hier die Aufzählung der User</p>
        </div>
        <div>
            <h2>Jobs</h2>
            <p>... hier die Aufzählung der Jobs</p>
        </div>
    
    @endforeach
    <div style="border: 1px solid black">
            <h1 style="text-align: center">Company</h1>
            <p style="text-align: center">kleine Company Beschreibung</p>
        </div>
            <div>
                <h2>Users</h2>
                <p>... hier die Aufzählung der User</p>
            </div>
            <div>
                <h2>Jobs</h2>
                <p>... hier die Aufzählung der Jobs</p>
            </div>
</div>
@endsection