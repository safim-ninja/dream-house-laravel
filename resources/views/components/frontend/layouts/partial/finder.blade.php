<section class="find_section ">
    <div class="container">
        <form action="{{ route('home.search') }}" method="POST">
            @csrf
            <div class=" form-row">
                <div class="col-md-3">
                    <select name="category" id="category" class="form-control">
                        <option value="Family" disabled selected>Select Category</option>
                        <option value="Family">Family</option>
                        <option value="Sub-Let">Sub-Let</option>
                        <option value="Bachelor">Bachelor</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="area" class="form-control">
                        <option value="Uttara" disabled selected>Select Location</option>
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
