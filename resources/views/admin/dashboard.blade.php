<x-admin.layouts.master>
    <div class="container">
        <h3>Owners</h3>
        <table class="table border rounded">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Ads</th>
                    <th scope="col">Payment</th>
                    {{-- <th scope="col">Handle</th> --}}
                </tr>
            </thead>
            <tbody>
                @php
                    $user_i = 1;
                    $ad_i = 1;
                @endphp
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user_i++ }}</th>
                        <td>{{ $user->name }}</td>
                        <td>
                            {{-- @if ($user->confirmation) --}}
                            <a href="{{ route('admin.ownerAds',['id' => $user->id]) }}">
                                <span class="">{{ $user->ad_count }} Ads</span>
                            </a>
                            {{-- @elseif ($user->submitted) --}}
                            {{-- <a href="{{ route('admin.verify-owner', ['id' => $user->id]) }}">
                                    <span class="text-warning">Submitted</span>
                                </a>
                            @else --}}
                            {{-- <span class="text-danger">Not submitted yet</span> --}}
                            {{-- @endif --}}
                            {{-- {{ $user->verification }} --}}
                        </td>
                        <td>
                            @if ($user->payment_status == 2)
                                <a href="{{ route('admin.userPaymentList', ['id' => $user->id]) }}">
                                    <span class="text-success">Paid</span>
                                </a>
                            @elseif ($user->payment_status == 1)
                                <a href="{{ route('admin.userPaymentList', ['id' => $user->id]) }}">
                                    <span class="text-warning">Pending</span>
                                </a>
                            @else
                                <span class="text-danger">Unpaid</span>
                            @endif
                            {{-- {{ $user->verification }} --}}
                        </td>
                        {{-- <td>{{ $user->submitted }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layouts.master>
