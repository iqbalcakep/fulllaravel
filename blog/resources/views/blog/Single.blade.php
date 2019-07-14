<html>
    <head>Ini Home</head>
    <body>
    <h1>Haloo Ini Home {{$id}}</h1>
    @foreach ($users as $user )
        <li>{{$user}}</li>
    @endforeach
    </body>
    <footer>
        copyright by iqbalcakep.com
    </footer>
</html>