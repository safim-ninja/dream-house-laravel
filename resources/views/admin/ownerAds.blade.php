<x-admin.layouts.master>
    {{-- @dd($owner->id) --}}

    @if ($owner->ad_count == 0)
        <div class="container p-5">
            <h3>This user has no ads</h3>
        </div>
    @else
        @foreach ($ads as $ad)
            <div class="card container mb-5 p-5">
                <div class="d-flex justify-content-between">
                    <div class="col-6">
                        <h3 class="">NID</h3>
                        {{-- <img src="{{ asset('public/images/verification') }}/{{ $owner->nid }}" class="rounded float-start" alt="...">
        <img src="{{ asset('public/images/verification') }}/{{ $owner->bill }}" class="rounded float-end" alt="..."> --}}
                        <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                            src="{{ asset('public/images/verification') }}/{{ $ad->nid }}" class="rounded float-start"
                            alt="...">
                    </div>
                    <div class="col-6">
                        <h3 class="">BILL</h3>
                        <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                            src="{{ asset('public/images/verification') }}/{{ $ad->bill }}" class="rounded float-end"
                            alt="...">
                    </div>
                </div>
                <div>
                    <br>
                    <h3 class="ml-4">Advertiment </h3>
                    <div class="container">
                        <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                            src="{{ asset('public/images/ads') }}/{{ $ad->photo1 }}" class="rounded float-end"
                            alt="...">
                        <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                            src="{{ asset('public/images/ads') }}/{{ $ad->photo2 }}" class="rounded float-end"
                            alt="...">
                        <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                            src="{{ asset('public/images/ads') }}/{{ $ad->photo3 }}" class="rounded float-end"
                            alt="...">
                        @if ($ad->photo4)
                            <img class="shadow bg-secondary"
                                style="height: 100px; width: 200px"src="{{ asset('public/images/ads') }}/{{ $ad->photo4 }}"
                                class="rounded float-end">
                        @endif
                        @if ($ad->photo5)
                            <img class="shadow bg-secondary"
                                style="height: 100px; width: 200px"src="{{ asset('public/images/ads') }}/{{ $ad->photo5 }}"
                                class="rounded float-end">
                        @endif

                        <div class="card p-4 mt-4 col-md-6" style="width: auto">
                            Bed: {{ $ad->bed }}<br>
                            Bath: {{ $ad->bath }}<br>
                            Rent: {{ $ad->rent }}<br>
                            Address: {{ $ad->address }} {{ $ad->area }}<br>
                        </div>

                    </div>
                </div>
                {{-- @dd($owner) --}}
                @if ($ad->confirmation)
                    <a class="btn mt-3 col-4 text-white bg-danger btn-danger"
                        href="{{ route('admin.deleteAd', ['id' => $ad->id]) }}">Delete</a>
                @else
                    <a class="btn mt-3 col-4 text-white"
                        href="{{ route('admin.confirmAd', ['id' => $ad->id]) }}">Approve</a>
                @endif
            </div>
        @endforeach

    @endif

</x-admin.layouts.master>
