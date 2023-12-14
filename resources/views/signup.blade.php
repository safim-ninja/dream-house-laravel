<x-frontend.layouts.master>
    <!-- Sign Up -->
    <div class="login container mt-5">
        <div class="login-container">
            <h2>Welcome , Let's get started</h2>
            <p>Already have account <a href="{{ route('login') }}">Log In</a></p>
            <!-- Login Form -->
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="role" class="form-label"><span>Register As:</span></label>
                    <select class="form-select form-select-lg" name="role" id="role">
                        <option value="owner" selected>Owner</option>
                        <option value="user">Tenant</option>
                    </select>
                </div>
                {{-- <select name="role" id="role" required>
                    <option value="1">Owner</option>
                    <option value="2">Tenant</option>
                </select><br> --}}

                <span>Full Name</span>
                <input type="text" name="name" id="name" placeholder="Your Name" required>

                <span>Date of Birth</span>
                <input type="date" name="dob" id="dob" placeholder="Birth date" required>

                <span>Enter your email address</span>
                <input type="email" name="email" id="email" placeholder="yourmail@gmail.com" required>

                <span>Phone</span>
                <input type="text" name="phone" id="phone" placeholder="Enter your number" required>

                <span>Enter new password</span>
                <input type="password" name="password" id="password" placeholder="At least 8" required>

                <span>Enter new password</span>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Repeat Password" required>
                <div>
                    <span>Remember Me</span>
                    <input type="checkbox" name="remember_token" id="remember_token">
                </div>
                <input type="submit" value="Sign Up" class="button">
                <a href="{{ route('login') }}">Already have account</a>
            </form>
        </div>
        <!-- Log In Image -->
        <div class="login-image">
            <img src="images/sign-up.png" alt="">
        </div>
    </div>
</x-frontend.layouts.master>
