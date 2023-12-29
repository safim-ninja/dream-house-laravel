<x-admin.layouts.master>
    {{-- @dd($owner->id) --}}

    <div class="container mb-5 p-5">
        <div class="d-flex justify-content-between">
            <div class="col-6">
                <h3 class="text-center">NID</h3>
                {{-- <img src="{{ asset('images/verification') }}/{{ $owner->nid }}" class="rounded float-start" alt="...">
        <img src="{{ asset('images/verification') }}/{{ $owner->bill }}" class="rounded float-end" alt="..."> --}}
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/verification') }}/{{ $owner->advertisement->nid }}" class="rounded float-start"
                    alt="...">
            </div>
            <div class="col-6">
                <h3 class="text-center">BILL</h3>
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/verification') }}/{{ $owner->advertisement->bill }}" class="rounded float-end"
                    alt="...">
            </div>
        </div>
        <div>
            <br>
            <h3> Advertiment </h3>
            <div>
                <h3 class="text-center">BILL</h3>
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/ads') }}/{{ $owner->advertisement->photo1 }}" class="rounded float-end"
                    alt="...">
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/ads') }}/{{ $owner->advertisement->photo2 }}" class="rounded float-end"
                    alt="...">
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/ads') }}/{{ $owner->advertisement->photo3 }}" class="rounded float-end"
                    alt="...">
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/ads') }}/{{ $owner->advertisement->photo4 }}"
                    {{ $owner->advertisement->photo4 ?: 'hidden' }} class="rounded float-end" alt="...">
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/ads') }}/{{ $owner->advertisement->photo5 }}"
                    {{ $owner->advertisement->photo5 ?: 'hidden' }} class="rounded float-end" alt="...">


                <div>
                    Bed: {{ $owner->advertisement->bed }}<br>
                    Bath: {{ $owner->advertisement->bath }}<br>
                    Rent: {{ $owner->advertisement->rent }}<br>
                    Address: {{ $owner->advertisement->address }} {{ $owner->advertisement->area }}<br>
                </div>

            </div>
        </div>
        {{-- @dd($owner) --}}
        <a class="btn mt-3 text-white" href="{{ route('admin.confirm-owner', ['id' => $owner->id]) }}">Approve</a>
    </div>


</x-admin.layouts.master>
