<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
            新的爸，父層！
        @show
 
        <div class="container">
            這是父層的CONTAINER
            @yield('content')
        </div>
    </body>
</html>