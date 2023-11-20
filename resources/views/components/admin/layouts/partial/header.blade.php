<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark blue py-3 shadow-sm fixed-top">
            <a href="{{ route('home') }}" class="navbar-brand font-weight-bold mr-auto"><i class='bx bx-home'></i> Dream
                House</a>
            <div id="navbarContent" class="collapse navbar-collapse order-sm-12 order-lg-1">
                <ul class="navbar-nav ml-auto">

                    @if (!Auth::user())
                        <div class="User_option">
                            <li class="">
                                <a href="{{ route('signup') }}"><span class="glyphicon glyphicon-user"></span> Sign
                                    Up</a>
                                <a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>
                                    Login</a>
                            </li>
                        </div>
                    @else
                        <div class="User_option">
                            <li class="">
                                <a href="">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li class="">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                        <span class="glyphicon glyphicon-log-in">Logout</span></a>
                                </li>
                            </form>
                        </div>
                    @endif

                </ul>


            </div>
            <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars"
                aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler order-md-1">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</header>
