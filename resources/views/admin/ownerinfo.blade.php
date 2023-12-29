<x-admin.layouts.master>
    {{-- @dd($owner->id) --}}

    <div class="container mb-5 p-5">
        <div class="d-flex justify-content-between">
            <div class="col-6">
                <h3 class="">NID</h3>
                {{-- <img src="{{ asset('images/verification') }}/{{ $owner->nid }}" class="rounded float-start" alt="...">
        <img src="{{ asset('images/verification') }}/{{ $owner->bill }}" class="rounded float-end" alt="..."> --}}
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/verification') }}/{{ $owner->advertisement->nid }}" class="rounded float-start"
                    alt="...">
            </div>
            <div class="col-6">
                <h3 class="">BILL</h3>
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/verification') }}/{{ $owner->advertisement->bill }}" class="rounded float-end"
                    alt="...">
            </div>
        </div>
        <div>
            <br>
            <h3 class="ml-4">Advertiment </h3>
            <div class="container">
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/ads') }}/{{ $owner->advertisement->photo1 }}" class="rounded float-end"
                    alt="...">
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/ads') }}/{{ $owner->advertisement->photo2 }}" class="rounded float-end"
                    alt="...">
                <img class="shadow bg-secondary" style="height: 100px; width: 200px"
                    src="{{ asset('images/ads') }}/{{ $owner->advertisement->photo3 }}" class="rounded float-end"
                    alt="...">
                @if ($owner->advertisement->photo4)
                    <img class="shadow bg-secondary"
                        style="height: 100px; width: 200px"src="{{ asset('images/ads') }}/{{ $owner->advertisement->photo4 }}"
                        class="rounded float-end">
                @endif
                @if ($owner->advertisement->photo5)
                    <img class="shadow bg-secondary"
                        style="height: 100px; width: 200px"src="{{ asset('images/ads') }}/{{ $owner->advertisement->photo5 }}"
                        class="rounded float-end">
                @endif

                <div class="card p-4 mt-4 col-md-6" style="width: auto">
                    Bed: {{ $owner->advertisement->bed }}<br>
                    Bath: {{ $owner->advertisement->bath }}<br>
                    Rent: {{ $owner->advertisement->rent }}<br>
                    Address: {{ $owner->advertisement->address }} {{ $owner->advertisement->area }}<br>
                </div>

            </div>
        </div>
        {{-- @dd($owner) --}}
        @if ($owner->confirmation)
            <a class="btn mt-3 text-white bg-danger btn-danger"
                href="{{ route('admin.advertisement.delete', ['id' => $owner->id]) }}">Delete</a>
        @elseif ($owner->submitted)
            <a class="btn mt-3 text-white" href="{{ route('admin.confirm-owner', ['id' => $owner->id]) }}">Approve</a>
        @endif
    </div>


</x-admin.layouts.master>
