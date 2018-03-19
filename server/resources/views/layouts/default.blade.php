<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        <div>
            <div>
                @include('includes.header')
            </div>

            <div>
                @yield('content')
            </div>

            <footer>
                @include('includes.footer')
            </footer>

        </div>
    </body>
</html>