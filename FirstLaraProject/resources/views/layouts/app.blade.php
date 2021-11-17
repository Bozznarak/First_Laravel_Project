<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<nav style="margin: 20px 0px 50px 0px">
    <ul>
        <li><a href="http://127.0.0.1:8000/job">Hier der weg zu Jobs</a></li><br>
        <li><a href="http://127.0.0.1:8000/company">Hier der Weg zu Company</a></li><br>
        <li><a href="http://127.0.0.1:8000/user">Hier der Weg zu User</a></li>
    </ul>
</nav>

<body class="">


    @yield('content')
    
</body>
</html>