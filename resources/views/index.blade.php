<x-frontend.layouts.master>

    {{-- slider section --}}
    <x-frontend.layouts.partial.slider />

    {{-- find section --}}
    <x-frontend.layouts.partial.finder />

    {{-- sale section --}}
    <section class="sale_section layout_padding-bottom">
        <div class="container-fluid">
            <div class="heading_container">
                <h2>
                    House For Sale
                </h2>
            </div>
            <div class="sale_container">
                {{-- @dd($ads) --}}
                @php $indx = 1 @endphp
                @foreach ($ads as $ad)
                    <div class="box card p-1">
                        {{-- <a href=""> --}}
                        <div class="img-box">
                            <div id="myCarousel{{ $indx }}" class="carousel slide" data-bs-ride="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        {{-- <img class="d-block w-100" src="{{ asset('public/images/ads') }}/{{ $ad->photo1 }}"
                                            alt="First slide"> --}}
                                        <img style="height: 320px;" src="{{ asset('public/images/ads') }}/{{ $ad->photo1 }}"
                                            alt="">
                                    </div>
                                    <div class="carousel-item">
                                        {{-- <img class="d-block w-100" src="{{ asset('public/images/ads') }}/{{ $ad->photo2 }}"
                                            alt="Second slide"> --}}
                                        <img style="height: 320px;" src="{{ asset('public/images/ads') }}/{{ $ad->photo2 }}"
                                            alt="">
                                    </div>
                                    <div class="carousel-item">
                                        {{-- <img class="d-block w-100" src="{{ asset('public/images/ads') }}/{{ $ad->photo3 }}"
                                            alt="Third slide"> --}}
                                        <img style="height: 320px;" src="{{ asset('public/images/ads') }}/{{ $ad->photo3 }}"
                                            alt="">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#myCarousel{{ $indx }}" role="button"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel{{ $indx++ }}" role="button"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
                            {{-- <script>
                                    $('.carousel').carousel({
                                        interval: 2000
                                    });
                                </script> --}}
                            {{-- <img style="height: 320px;" src="{{ asset('public/images/ads') }}/{{ $ad->photo1 }}"
                                    alt=""> --}}
                        </div>
                        <div class="detail-box">
                            <h6>
                                {{ $ad->user->name }}
                            </h6>
                            <h6>
                                {{ $ad->area }}
                            </h6>
                            <h6>
                                BDT {{ $ad->rent }}
                            </h6>
                            <h6>
                                Cell: {{ $ad->user->phone }}
                            </h6>
                            <div class="icon">
                                <i class='bx bx-bed'><span>{{ $ad->bed }}</span></i>
                                <i class='bx bx-bath'><span>{{ $ad->bath }}</span></i>
                            </div>
                        </div>
                        {{-- </a> --}}
                    </div>
                @endforeach

            </div>
            <div class="btn-box">
                <a href="#">
                    Find More
                </a>
            </div>
        </div>
    </section>

    {{-- about section --}}
    <x-frontend.layouts.partial.about />




    {{-- deal section --}}
    <x-frontend.layouts.partial.deal />

    {{-- us section --}}
    <x-frontend.layouts.partial.us />

    {{-- contact section --}}
    <x-frontend.layouts.partial.contact />

</x-frontend.layouts.master>
