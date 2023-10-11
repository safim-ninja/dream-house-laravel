<x-frontend.layouts.master>
    <!-- Sign Up -->
    <div class="login container mt-5">
        <div class="login-container">
            <h2>Welcome , Let's get started</h2>
            <p>Already have account <a href="{{ route('login') }}">Log In</a></p>
            <!-- Login Form -->
            <form action="{{ route('signup') }}" method="POST">
                @csrf
                <span>Full Name</span>
                <input type="text" name="name" id="name" placeholder="Your Name" required>

                <span>Date of Birth</span>
                <input type="date" name="dob" id="dob" placeholder="Birth date" required>

                <span>Enter your email address</span>
                <input type="email" name="email" id="email" placeholder="yourmail@gmail.com" required>

                <span>Phone</span>
                <input type="text" name="phone" id="phone" placeholder="Enter your number" required>

                <span>NId copy</span>
                <input type="file" name="nid" id="nid" required>

                <span>Enter new password</span>
                <input type="password" name="password" id="password" placeholder="At least 8" required>

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
