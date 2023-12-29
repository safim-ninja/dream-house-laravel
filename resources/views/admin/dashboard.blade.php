<x-admin.layouts.master>
    <div class="container">
        <h3>Owners</h3>
        <table class="table border rounded">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">verification</th>
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
                            @if ($user->confirmation)
                            <a href="{{ route('admin.verify-owner', ['id' => $user->id]) }}">
                                <span class="text-success">Approved</span>
                            </a>
                            @elseif ($user->submitted)
                                <a href="{{ route('admin.verify-owner', ['id' => $user->id]) }}">
                                    <span class="text-warning">Submitted</span>
                                </a>
                            @else
                                <span class="text-danger">Not submitted yet</span>
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
