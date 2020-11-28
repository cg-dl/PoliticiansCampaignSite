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
                <!-- <ul class="navbar-nav ml-auto">
                    <li class="nav-item" id="login-user">
                        <a class="nav-link" href="#">Login as User</a>
                    </li>
                    <li class="nav-item" id="login-can">
                        <a class="nav-link" href="#">Login as Candidate</a>
                    </li>
                </ul> -->
            </nav>
            <script>
                function active(id)
                {
                    id.className += " active";
                }
            </script>
        </header>
        @yield('content')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    </body>
</html>