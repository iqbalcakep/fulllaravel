<html>
    <head>Ini Home</head>
    <body>
        <h1>Haloo Ini Home</h1>
        <hr>
        @foreach ($blogs as $v )
            <li><a href="/blog/{{$v->id}}">{{$v->title}}</a></li>
            <form action="/blog/{{$v->id}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value="Hapus">
                {{ csrf_field() }}
            </form>
        @endforeach
    </body>
    <footer>
        copyright by iqbalcakep.com
    </footer>
</html>