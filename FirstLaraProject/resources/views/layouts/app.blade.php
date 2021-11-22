<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<nav class="ml-15 mt-15 mb-15">
    <ul>
        <li><a class="hover:bg-blue-700 underline" href="http://127.0.0.1:8000/job">Hier der weg zu Jobs</a></li><br>
        <li><a class="hover:bg-blue-700 underline" href="http://127.0.0.1:8000/company">Hier der Weg zu Company</a></li><br>
        <li><a class="hover:bg-blue-700 underline" href="http://127.0.0.1:8000/myuser">Hier der Weg zu User</a></li>
    </ul>
</nav>

<body class="ml-15">


    @yield('content')
    
</body>
</html>