<section class="find_section ">
    <div class="container">
        <form action="{{ route('home.search') }}" method="POST">
            @csrf
            <div class=" form-row">
                <div class="col-md-3">
                    {{-- <select id="country" class="form-control">
                        <option value="">Select Categories</option>
                        <option value="324">Family</option>
                        <option value="486">Sub-let</option>
                        <option value="520">Bachelor</option>
                    </select> --}}
                </div>
                <div class="col-md-4">
                    <select name="area" class="form-control">
                        <option value="">Select Location</option>
                        <option value="Uttara">Uttara</option>
                        <option value="Khilkhet">Khilkhet</option>
                        <option value="Banani">Banani</option>
                        <option value="Dhanmondi">Dhanmondi</option>
                        <option value="Gulshan">Gulshan</option>
                        <option value="Airport">Airport</option>
                        <option value="Jatrabari">Jatrabari</option>
                        <option value="Mohammadpur">Mohammadpur</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="">
                        search
                    </button>
                </div>
            </div>

        </form>
    </div>
</section>
