<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="{{url('/home')}}">e-Campaign</a>
            <li class="nav-item" id="home">
                <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item" id="vote">
                <a class="nav-link" href="#">Vote!</a>
            </li>
            <li class="nav-item" id="meet">
                <a class="nav-link" href="#">Meet the Candidates</a>
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