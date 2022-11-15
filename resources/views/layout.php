<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
    <header> <!-- A ne pas confondre avec <head> -->
            <h1>3iSystem</h1>
            <p>
                <a href="https://www.3il-ingenieurs.fr/" style="color:red;" target="_blank">3iL Academy</a>
            </p>
        </header>

 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>