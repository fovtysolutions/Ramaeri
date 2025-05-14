<div class="modal fade" id="registermodel" tabindex="-1" aria-labelledby="registermodelLabel" aria-hidden="true"
    data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form class="tt-login-form-wrap text-center forms" action="https://www.ramaeri.com/nested/register"
                method="POST" id="register-form">
                <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed" autocomplete="off">
                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-681e3b8befa9b">
                <h2 class="head">
                    Register Now for Exclusive offers &nbsp; <img
                        src="https://www.ramaeri.com/storage/app/public/images/Component2.png" alt="Arrow Icon"
                        class="btn-arrow">
                </h2>

                <div class="mb-3">
                    <input type="text" id="fullname" name="name" placeholder="Enter your name" class="theme-input"
                        required>
                </div>
                <div class="mb-3">
                    <input type="email" id="email" name="email" placeholder="Enter Email" class="theme-input" required>
                </div>
                <div class="mb-3">
                    <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" class="theme-input"
                        pattern="\d{10}" minlength="10" maxlength="10"
                        oninput="this.value=this.value.slice(0,10).replace(/[^0-9]/g, '')" required>
                </div>

                <div class="mb-3">
                    <div class="position-relative">
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="theme-input form-control" required>
                        <span class="position-absolute end-0 top-50 translate-middle-y me-3" style="cursor: pointer;"
                            onclick="togglePassword('password')">
                            <img src="https://www.ramaeri.com/storage/app/public/images/Vector.png" alt="Show Password">
                        </span>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="position-relative">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Confirm Password" class="theme-input form-control" required>
                        <span class="position-absolute end-0 top-50 translate-middle-y me-3" style="cursor: pointer;"
                            onclick="togglePassword('password_confirmation')">
                            <img src="https://www.ramaeri.com/storage/app/public/images/Vector.png" alt="Show Password">
                        </span>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">

                    <a href="#" class="pt-4 forget" onclick="openForgotPasswordModal()">Forgot Password ?</a>

                </div>
                <br>
                <button type="btn" id="register_id" class="submitAuth-button">Sign Up &nbsp;</button>
                <br>
                <!-- <p class="mt-4 text-center">Don&#039;t have an Account? <a href="https://www.ramaeri.com/nested/register">Sign Up</a></p> -->
                <div class="mt-3">
                    <a href="https://www.ramaeri.com/auth/google" class="">
                        <img src="https://www.ramaeri.com/storage/app/public/images/g8.png" alt="Image Description">
                        <span class="user-span">or sign up with</span>
                    </a>
                </div>
                <div class="mt-5">
                    <span class="user-span">Already user -
                        <a href="#" onclick="loginmodel()" class="regis-span">Signin</a>
                    </span>
                </div>
            </form>

        </div>

        <div class="col-lg-6 d-none d-lg-block tt-login-img">
            <div class="welcome-content text-center text-white">
                <h3 class="wlc">Welcome</h3>
                <img src="https://www.ramaeri.com/storage/app/public/images/Frame@2x.png" alt="Brand Logo"
                    class="blog-image">
                <div>
                    <span class="para">Complete your purchase and let the glow begin.</span>
                </div>
                <div class="features d-flex justify-content-around text-white">
                    <div class="d-flex flex-column" style="gap:10px">
                        <a href=""><img src="https://www.ramaeri.com/storage/app/public/images/Group205.png"
                                alt="Nature" class="g5"></a>
                        <span class="feature">Nature</span>
                    </div>
                    <div class="d-flex flex-column" style="gap:10px">
                        <a href=""><img src="https://www.ramaeri.com/storage/app/public/images/Group206.png"
                                alt="Modern Science" class="g5"></a>
                        <span class="feature">Modern Science</span>
                    </div>
                    <div class="d-flex flex-column" style="gap:10px">
                        <a href=""><img src="https://www.ramaeri.com/storage/app/public/images/Group207.png"
                                alt="Beauty" class="g5"></a>
                        <span class="feature">Beauty</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function togglePassword(inputId) {
        var passwordInput = document.getElementById(inputId);

        // Toggle between password and text types
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    }
</script>