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
                                    <img src="{{ asset('public/images') }}/users/{{ Auth::user()->photo }}" alt="User"
                                        class="rounded-circle">
                                    {{-- <img src="public/images/user.png') }}" alt="Admin" class="rounded-circle"> --}}
                                    <div class="mt-3">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <p class="text-secondary mb-1">Full Stack Developer</p>
                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                        {{-- <button class="btn btn-primary">Follow</button>
                                        <button class="btn btn-outline-primary">Message</button> --}}
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

                            {{-- @dd($ads) --}}
                            {{-- @if (Auth::user()->confirmation) --}}
                            @foreach ($ads as $ad)
                                <div class="card mb-3 mt-3">
                                    {{-- <img src="public/images/ads/{{ $ad->photo1 }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ Auth::user()->name }}</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div> --}}
                                    <div class="box p-3">
                                        {{-- <a href=""> --}}
                                        <div class="img-box">
                                            <div id="myCarousel" class="carousel slide" data-bs-ride="true">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        {{-- <img class="d-block w-100" src="public/images/ads/{{ $ad->photo1 }}"
                                                            alt="First slide"> --}}
                                                        <img style="height: 320px;"
                                                            src="public/images/ads/{{ $ad->photo1 }}"
                                                            alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        {{-- <img class="d-block w-100" src="public/images/ads/{{ $ad->photo2 }}"
                                                            alt="Second slide"> --}}
                                                        <img style="height: 320px;"
                                                            src="public/images/ads/{{ $ad->photo2 }}"
                                                            alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        {{-- <img class="d-block w-100" src="public/images/ads/{{ $ad->photo3 }}"
                                                            alt="Third slide"> --}}
                                                        <img style="height: 320px;"
                                                            src="public/images/ads/{{ $ad->photo3 }}"
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
                                            {{-- <script>
                                                    $('.carousel').carousel({
                                                        interval: 2000
                                                    });
                                                </script> --}}
                                            {{-- <img style="height: 320px;" src="public/images/ads/{{ $ad->photo1 }}"
                                                    alt=""> --}}
                                        </div>
                                        <div class="detail-box">
                                            <h6>
                                                {{ $ad->area }}
                                            </h6>
                                            <h6>
                                                BDT {{ $ad->rent }}
                                            </h6>
                                            <h6>
                                                Cell: {{ Auth::user()->phone }}
                                            </h6>
                                            <div class="icon">
                                                <i class='bx bx-bed'><span>{{ $ad->bed }}</span></i>
                                                <i class='bx bx-bath'><span>{{ $ad->bath }}</span></i>
                                            </div>
                                        </div>
                                        {{-- </a> --}}
                                    </div>
                                </div>
                            @endforeach

                            {{-- @elseif (Auth::user()->submitted)
                                <div class="login container mt-5">
                                <div class="card mb-3 ml-3 mt-3 p-3">

                                    <h4>
                                        Your advertisement has been submitted for review.<br>
                                        Please wait for admin approval.
                                    </h4>
                                </div>
                            @else --}}
                            @if (Auth::user()->ad_count >= 1 && Auth::user()->payment_status != 2)
                                You get 1 free ad.
                                <a href="{{ route('owner.payment') }}">Please make payment of <span
                                        class="text-bolder">1000Tk</span>
                                    to post more ads</a>
                            @else
                                <div class="login container mt-5">
                                    <div class="login-container">
                                        <h2>Place an advertisement</h2>
                                        <!-- Ad Form -->
                                        <form action="{{ route('owner.placead', ['id' => Auth::user()->id]) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <span>Bed</span>
                                            <input type="text" name="bed" id="bed"
                                                placeholder="Bed numbers" required>

                                            <span>Bath</span>
                                            <input type="text" name="bath" id="bath"
                                                placeholder="Bathrooms" required>

                                            <span>Rent</span>
                                            <input type="text" name="rent" id="rent"
                                                placeholder="TK Rent per month" required>


                                            <span>Category</span>
                                            <select name="category" id="category" class="form-control">
                                                <option value="" disabled>Select Category</option>
                                                <option value="Family">Family</option>
                                                <option value="Sub-Let">Sub-Let</option>
                                                <option value="Bachelor">Bachelor</option>
                                            </select>

                                            <span>Photos of house<br><i>min 3, max 5</i></span>
                                            <input type="file" name="photo1" id="photo1" required>
                                            <input type="file" name="photo2" id="photo2" required>
                                            <input type="file" name="photo3" id="photo3" required>
                                            <input style="display: none" type="file" name="photo4"
                                                id="photo4">
                                            <input style="display: none" type="file" name="photo5   "
                                                id="photo5">
                                            <button type="button" id="btn1" class="btn col-4"
                                                onclick="morePhoto()">Add more</button>
                                            <br>



                                            <span>Location</span>
                                            <select name="area" id="location" class="form-control">
                                                <option value="" disabled>Select Location</option>
                                                <option value="Uttara">Uttara</option>
                                                <option value="Khilkhet">Khilkhet</option>
                                                <option value="Banani">Banani</option>
                                                <option value="Dhanmondi">Dhanmondi</option>
                                                <option value="Gulshan">Gulshan</option>
                                                <option value="Airport">Airport</option>
                                                <option value="Jatrabari">Jatrabari</option>
                                                <option value="Mohammadpur">Mohammadpur</option>
                                            </select>

                                            {{-- </div> --}}
                                            <br>
                                            <span>Address</span>
                                            <input type="text" name="address" id="address"
                                                placeholder="Home Address" required>

                                            <span>NID</span>
                                            <input type="file" name="nid" id="nid" required>

                                            <span>Bill</span>
                                            <input type="file" name="bill" id="bill" required>

                                            <span class="text-danger">NID and Bill copy is needed for verification
                                                purpose. <br>We will never use you information for any other
                                                use.</span><br>

                                            <input type="submit" value="Place ad" class="button">
                                        </form>
                                        <script>
                                            function morePhoto() {
                                                var p4 = document.getElementById("photo4");
                                                var p5 = document.getElementById("photo5");
                                                var btn = document.getElementById("btn1");
                                                p4.style.display = "block";
                                                p5.style.display = "block";
                                                btn.style.display = "none";
                                            }
                                        </script>
                                    </div>
                                    <!-- Log In Image -->
                                    <div class="login-image">
                                        <img src="public/images/sign-up.png" alt="">
                                    </div>
                                </div>
                            @endif


                            {{-- @endif --}}

                            <!-- unaproved -->
                            {{-- <div class="card p-3 mt-3">

                                @if (Auth::user()->verification)
                                    Place an Advertisement.
                                    <form action="" method="post">
                                        <label for="bed">Number of Bedroom</label>
                                        <input type="number" name="bed" id=""><br>
                                        <label for="bath">Bathroom</label>
                                        <input type="number" name="bath" id=""><br>
                                        <label for="area">The area of the house</label>
                                        <input type="text" name="area" id=""><br>
                                        <label for="rent">Rent per month</label>
                                        <input type="text" name="rent" id="">
                                    </form>
                                @else
                                    @if (Auth::user()->submitted)
                                        Please wait for admin authorization
                                    @else
                                        <h2 class="text-danger"><i>Not verified</i></h2>
                                        <p class="text-danger"><i>Please provide your NID copy and Electricity
                                                bill<br>for
                                                verification</i></p>
                                        <form action="{{ route('owner.verification', ['id' => Auth::user()->id]) }}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="" class="form-label">NID</label>
                                                <input type="file" class="form-control p-1" name="nid"
                                                    id="" placeholder="NID">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Electricity Bill</label>
                                                <input type="file" class="mb-3 p-1 form-control" name="bill"
                                                    id="" placeholder="Bill">
                                            </div>

                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                        </form>
                                    @endif
                                @endif
                            </div> --}}

                            <!-- approved ads -->
                            {{-- <div class="card mb-3 mt-3">
                                    <img src="public/images/h-1.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>

                                <div class="card mb-3 mt-3">
                                    <img src="public/images/h-2.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="row gutters-sm">
                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3"><i
                                                class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                        <small>Web Design</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <small>Website Markup</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 72%" aria-valuenow="72" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <small>One Page</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 89%" aria-valuenow="89" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <small>Mobile Template</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <small>Backend API</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 66%" aria-valuenow="66" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3"><i
                                                class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                        <small>Web Design</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <small>Website Markup</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 72%" aria-valuenow="72" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <small>One Page</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 89%" aria-valuenow="89" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <small>Mobile Template</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <small>Backend API</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 66%" aria-valuenow="66" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        </div>
                    </div>

                </div>
            </div>











            {{-- <div class="container">
            Name: {{ Auth::user()->name }}<br>
            Role: {{ Auth::user()->role }}<br><br>

            @if (Auth::user()->verification)
                Place an Advertisement.
                <form action="" method="post">
                    <label for="bed">Number of Bedroom</label>
                    <input type="number" name="bed" id=""><br>
                    <label for="bath">Bathroom</label>
                    <input type="number" name="bath" id=""><br>
                    <label for="area">The area of the house</label>
                    <input type="text" name="area" id=""><br>
                    <label for="rent">Rent per month</label>
                    <input type="text" name="rent" id="">
                </form>
            @else
                <h2 class="text-danger"><i>Not verified</i></h2>
                <p class="text-danger"><i>Please provide your NID copy and Electricity bill<br>for verification</i></p>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id=""
                            placeholder="Address for rent">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">NID</label>
                        <input type="file" class="form-control" name="nid" id="" placeholder="NID">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Electricity Bill</label>
                        <input type="file" class="form-control" name="bill" id=""
                            placeholder="Bill">
                    </div>
                </form>
            @endif
        </div> --}}
        </div>


</x-frontend.layouts.master>
