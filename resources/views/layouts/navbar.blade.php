<header>
    <nav class="navbar navbar-expand bg-dark navbar-dark">
        <ul class="navbar-nav mr-auto">
            <a class="navbar-brand" href="{{url('/home')}}">e-Campaign</a>
            <li class="nav-item" id="home">
                <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item" id="vote">
                <a class="nav-link" href="{{url('/vote')}}">Vote!</a>
            </li>
            <li class="nav-item" id="meet">
                <a class="nav-link" href="{{url('/candidates')}}">Meet the Candidates</a>
            </li>
            <li class="nav-item" id="campaign">
                <a class="nav-link" href="{{url('/campaigns')}}">Campaigns</a>
            </li>
            <li class="nav-item" id="forum">
                <a class="nav-link" href="{{url('/forum')}}">Forum</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item" style="color:rgba(255,255,255,.5);">
                Location: West Jakarta, Jakarta
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
