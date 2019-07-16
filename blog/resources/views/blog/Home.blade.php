<html>
    <head>Ini Home</head>
    <body>
        <h1>Haloo Ini Home</h1>
        <hr>
        @foreach ($blogs as $v )
    <li><a href="/blog/{{$v->id}}">{{$v->title}}</a></li>
        @endforeach
    </body>
    <footer>
        copyright by iqbalcakep.com
    </footer>
</html>