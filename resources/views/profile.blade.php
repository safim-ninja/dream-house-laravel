<x-frontend.layouts.master>
    <div class="m-5 p-5">
        <div class="col-1 ">
            <img src="{{ Auth::user()->photo }}" alt="{{ Auth::user()->name }}">
        </div>
        @php

            // # code...
            // }
            // for ($i = 1; $n % 360; $i++) {
            $n = $x = 1;

            $i = 1;
            while ($n % 360 != 0) {
                $n += $x;
                $i++;
                // echo 360 % $n;
            }

            echo $i;

            $a = Auth::user();
        @endphp
        {{-- {{ $a += Auth::user() }} --}}
        {{-- {{ $a }} --}}
        @if (!Auth::user()->verification)
            <div>
                <h4 class="text-danger">Unverified</h4>
                <p>To post ad you must verify.</p>
                <form action="" method="POST" >
                    @csrf
                    <div class="container container-fluid">
                        <div class="col-4">
                            <label for="bill">Recent Electricity bill of the house</label>
                            <input class="form-control" type="file" name="bill" id="bill" value="fsd"><br>
                        </div>
                    </div>
                    <div class="container container-fluid">
                        <div class="col-4">
                            <label for="NID">Clear photo of your NID card</label>
                            <input class="form-control" type="file" name="NID" id="NID">
                        </div>
                    </div>
                </form>
            </div>
        @else
            <div>
                <h4 class="text-success">Verified</h4>
            </div>
        @endif
        {{-- @dump(Auth::user()->verification) --}}
    </div>
</x-frontend.layouts.master>
