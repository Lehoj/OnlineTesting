<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <strong><img src="{{ URL::to('images/exam7.png') }}" alt="exam" width="130" height="50"></strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0 " id="navbarSupportedContent-7">
            <ul class="navbar-nav text-right">
                <li class="nav-item ">
                    <a class="nav-link scroll" href="#index">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll" href="#Support">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll" href="#FAQ">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll" href="#contact">Contact</a>
                </li>

            </ul>
            <form class="align my-2 my-lg-0 ml-auto">
                <a class="btn btn-orange btn-md my-2 my-sm-0 ml-3" href="{{ url('/register_') }}">Register</a>
                <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" href="{{ url('/login_') }}">Log in</a>
            </form>
        </div>
    </div>
</nav>
