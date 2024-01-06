<x-admin.layouts.master>
    {{-- @dd($owner->id) --}}

    <div class="container mb-5 p-5">
        @foreach ($payments as $payment)
            <div class="d-flex justify-content-start">
                <div class="col-6">
                    <h3 class="">Trx Image proof</h3>
                    <img class="shadow bg-secondary" style="height: 200px; width: 400px"
                        src="images/payments/{{ $payment->trximage }}" class="rounded float-start"
                        alt="...">
                </div>

                <div class="col-4">
                    <h3 class="">Name</h3>
                    <div class="card p-4 mt-4" style="width: auto">
                        amount: {{ $payment->amount }}<br>
                        transaction: {{ $payment->transaction }}<br>
                        phone: {{ $payment->phone }}<br>
                        {{-- trximage: {{ $payment->trximage }} {{ $owner->advertisement->area }}<br> --}}
                        {{-- </div>
                <div> --}}
                    </div>
                </div>
            </div>

            <br>
        @endforeach
        <a href="{{ route('admin.approvePayment', ['id' => $payment->user_id]) }}"
            class="btn btn-success bg-success col-3 ml-4">approve</a>
    </div>
    {{-- @dd($owner) --}}
    {{-- @if ($owner->confirmation)
        <a class="btn mt-3 text-white bg-danger btn-danger"
            href="{{ route('admin.advertisement.delete', ['id' => $owner->id]) }}">Delete</a>
    @elseif ($owner->submitted)
        <a class="btn mt-3 text-white" href="{{ route('admin.confirm-owner', ['id' => $owner->id]) }}">Approve</a>
    @endif --}}
    </div>


</x-admin.layouts.master>
