<html>
    <head>@yield('title')</head>
    <body>
        {{-- Menu --}}
        <nav>
            <li>
                <a href="#">Home</a>
                <a href="/blog">Blog</a>
            </li>
        </nav>

        {{-- Konten --}}
        @yield('konten')
    </body>
    <footer>
        Copyright @iqbalcakep.com 2019
    </footer>
</html>