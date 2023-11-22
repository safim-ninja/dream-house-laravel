<x-frontend.layouts.master>
    <br><br>
    <div class="container-fluid">
        <div class="container">
            Name: {{ Auth::user()->name }}<br>
            Role: {{ Auth::user()->role }}<br><br>

            @if (Auth::user()->verification)
                good to go
            @else
                <p>you need to verify</p>
                <p class="text-danger"><i>Please provide your NID copy and Electricity bill<br>for verification</i></p>
                <form action="{{ route('') }}" method="post"></form>
            @endif
        </div>
    </div>
</x-frontend.layouts.master>
