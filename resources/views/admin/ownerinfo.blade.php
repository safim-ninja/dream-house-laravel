<x-admin.layouts.master>
    {{-- @dd($owner->id) --}}

    <div class="container mb-5 p-5">
        <div class="d-flex justify-content-between">
            <div class="col-6">
                <h3 class="text-center">NID</h3>
                {{-- <img src="{{ asset('images/verification') }}/{{ $owner->nid }}" class="rounded float-start" alt="...">
        <img src="{{ asset('images/verification') }}/{{ $owner->bill }}" class="rounded float-end" alt="..."> --}}
                <img src="{{ asset('images/verification/1702568260-2-nid.jpg') }}" class="rounded float-start"
                    alt="...">
            </div>
            <div class="col-6">
                <h3 class="text-center">BILL</h3>
                <img src="{{ asset('images/verification/1702568260-2-bill.jpg') }}" class="rounded float-end"
                    alt="...">
            </div>
        </div>
        <a class="btn mt-3 text-white" href="{{ route('admin.confirm-owner', ['id' => $owner->id]) }}">Approve</a>
    </div>


</x-admin.layouts.master>
