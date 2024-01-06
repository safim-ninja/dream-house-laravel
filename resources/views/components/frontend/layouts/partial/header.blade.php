<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark blue py-3 shadow-sm fixed-top">
            <a href="{{ route('home') }}" class="navbar-brand font-weight-bold mr-auto"><i class='bx bx-home'></i> Dream
                House</a>
            <div id="navbarContent" class="collapse navbar-collapse order-sm-12 order-lg-1">
                <ul class="navbar-nav ml-auto">
                    {{-- Megamenu --}}
                    <li class="nav-item"><a href="{{ route('home') }}"
                            class="nav-link font-weight-bold text-uppercase">Home</a>
                    </li>
                    <li class="nav-item dropdown megamenu"><a id="megamenu" href="" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            class="nav-link dropdown-toggle font-weight-bold text-uppercase">Services</a>
                        <div aria-labelledby="megamenu" class="dropdown-menu border-0 p-0 m-0">
                            <div class="container-fluid">
                                <div class="row blue text-light rounded-0 m-0 shadow-sm">
                                    <div class="col-12">
                                        <div class="p-4">
                                            <div class="row">
                                                <div class="col-sm-6 col-lg-3 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Rent</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a
                                                                href="{{ route('home.searchCategory', ['category' => 'Family']) }}"
                                                                class="nav-link text-small pb-0">Family</a></li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('home.searchCategory', ['category' => 'Sub-Let']) }}"
                                                                class="nav-link text-small pb-0 ">Sub-Let</a>
                                                        </li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('home.searchCategory', ['category' => 'Bachelor']) }}"
                                                                class="nav-link text-small pb-0 ">Bachelor</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-lg-3 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Sell</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a href=""
                                                                class="nav-link text-small pb-0 ">Apartment</a>
                                                        </li>
                                                        <li class="nav-item"><a href=""
                                                                class="nav-link text-small pb-0 ">Flat</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-lg-3 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Others</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="" class="nav-link text-small pb-0 ">Dish /
                                                                Internet Contact</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="" class="nav-link text-small pb-0 ">Truck
                                                                Contact</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item"><a href="#price" class="nav-link font-weight-bold text-uppercase">Price</a>
                    </li>
                    <li class="nav-item"><a href="#about" class="nav-link font-weight-bold text-uppercase">About
                            us</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link font-weight-bold text-uppercase">Contact
                            us</a>
                    </li>

                    @if (!Auth::user())
                        <div class="User_option">
                            <li class="">
                                <a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign
                                    Up</a>
                                <a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>
                                    Login</a>
                            </li>
                        </div>
                    @else
                        <div class="User_option">

                            <a href="{{ route('owner.dashboard') }}"
                                class="glyphicon glyphicon-log-in">{{ Auth::user()->name }}</a></a>
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
