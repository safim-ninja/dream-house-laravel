<x-frontend.layouts.master>
    <!-- Log In -->
    <div class="login container">
        <section class="login">
            <div class="login-container">
                <h2>Login To Continue</h2>
                <p>Log in with your data that you entered <br>during your registration</p>
                <!-- Login Form -->
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <span>Enter your email address</span>
                    <input type="email" name="email" id="email" placeholder="yourmail@gmail.com" required>
                    <span>Enter your password</span>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <input type="submit" value="Log In" class="button">
                    <a href="#">Forget Password?</a>
                </form>
                <br>
                <p class="">Don't have an account? Please<a href="{{ route('signup') }}"> Sign up!</a></p>
            </div>
        </section>
        <!-- Log In Image -->
        <div class="login-image">
            <img src="images/login.png" alt="Log In">
        </div>
    </div>
</x-frontend.layouts.master>
