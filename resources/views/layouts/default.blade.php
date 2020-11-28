<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
                crossorigin="anonymous">
        <title>@yield('title') | e-Campaign</title>
    </head>
    <body onload="active(@yield('location'))">
        <header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <a class="navbar-brand" href="{{url('/')}}">e-Campaign</a>
                    <li class="nav-item" id="home">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item" id="vote">
                        <a class="nav-link" href="#">Vote!</a>
                    </li>
                    <li class="nav-item" id="meet">
                        <a class="nav-link" href="#">Meet our Candidates</a>
                    </li>
                    <li class="nav-item" id="forum">
                        <a class="nav-link" href="{{url('/forum')}}">Forum</a>
                    </li>
                </ul>
            </nav>
            <script>
                function active(id)
                {
                    id.className += " active";
                }
            </script>
        </header>
        @yield('content')
    </body>
</html>