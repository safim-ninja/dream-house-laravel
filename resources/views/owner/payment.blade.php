<x-frontend.layouts.master>
    <br><br>
    <div class="container-fluid">
        <div class="container">
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <!-- profile -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ asset('images/users') }}/{{ Auth::user()->photo }}" alt="User"
                                        class="rounded-circle">
                                    <div class="mt-3">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <p class="text-secondary mb-1">Full Stack Developer</p>
                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                        <div class="User_option">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <li class="">
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                        <button class="btn btn-primary">Logout</button></a>
                                                </li>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- profile links -->
                        <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-globe mr-2 icon-inline">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path
                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                        </svg>Website</h6>
                                    <span class="text-secondary">https://bootdey.com</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-github mr-2 icon-inline">
                                            <path
                                                d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                            </path>
                                        </svg>Github</h6>
                                    <span class="text-secondary">bootdey</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-twitter mr-2 icon-inline text-info">
                                            <path
                                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                            </path>
                                        </svg>Twitter</h6>
                                    <span class="text-secondary">@bootdey</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-instagram mr-2 icon-inline text-danger">
                                            <rect x="2" y="2" width="20" height="20" rx="5"
                                                ry="5"></rect>
                                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                        </svg>Instagram</h6>
                                    <span class="text-secondary">bootdey</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-facebook mr-2 icon-inline text-primary">
                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                            </path>
                                        </svg>Facebook</h6>
                                    <span class="text-secondary">bootdey</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card bordered px-3">

                            <!-- advertisement -->

                            @if (Auth::user()->confirmation)
                                <div class="card mb-3 mt-3">
                                    <div class="box p-3">
                                        <div class="img-box">
                                            <div id="myCarousel" class="carousel slide" data-bs-ride="true">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img style="height: 320px;"
                                                            src="{{ asset('images/ads') }}/{{ Auth::user()->advertisement->photo1 }}"
                                                            alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img style="height: 320px;"
                                                            src="{{ asset('images/ads') }}/{{ Auth::user()->advertisement->photo2 }}"
                                                            alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img style="height: 320px;"
                                                            src="{{ asset('images/ads') }}/{{ Auth::user()->advertisement->photo3 }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#myCarousel" role="button"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon"
                                                        aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#myCarousel" role="button"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon"
                                                        aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
                                        </div>
                                        <div class="detail-box">
                                            <h6>
                                                {{ Auth::user()->advertisement->area }}
                                            </h6>
                                            <h6>
                                                BDT {{ Auth::user()->advertisement->rent }}
                                            </h6>
                                            <h6>
                                                Cell: {{ Auth::user()->phone }}
                                            </h6>
                                            <div class="icon">
                                                <i
                                                    class='bx bx-bed'><span>{{ Auth::user()->advertisement->bed }}</span></i>
                                                <i
                                                    class='bx bx-bath'><span>{{ Auth::user()->advertisement->bath }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif (Auth::user()->submitted)
                                <div class="card mb-3 ml-3">
                                    <h4>
                                        Your advertisement has been submitted for review.<br>
                                        Please wait for admin approval.
                                    </h4>
                                </div>
                            @else
                                <div class="login container">
                                    <div class="login-container">
                                        <h2>Please provide payment information below</h2>
                                        <!-- Ad Form -->
                                        <form action="{{ route('owner.payment.add', ['id' => Auth::user()->id]) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <span>Amount</span>
                                            <input type="text" name="amount" id="amount"
                                                placeholder="Paid amount" required>

                                            <span>Transaction ID</span>
                                            <input type="text" name="transaction" id="transaction"
                                                placeholder="Trx Id" required>

                                            <span>Phone</span>
                                            <input type="text" name="phone" id="phone"
                                                placeholder="Bkash / Nagad number" required>

                                            <span>Image of transaction<br><i>proof of payment</i></span>
                                            <input type="file" name="trximage" id="trximage" required>
                                            <br>

                                            <input type="submit" value="Submit" class="button">
                                        </form>
                                    </div>
                                    <!-- Log In Image -->
                                    <div class="login-image">
                                        <img src="images/sign-up.png" alt="">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.layouts.master>