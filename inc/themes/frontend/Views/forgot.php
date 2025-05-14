<div class="modal fade" id="forgot-password" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form class="tt-login-form-wrap text-center forms" action="https://www.ramaeri.com/sent/forgot/otp/mail"
                method="POST" id="forgotP-form">
                <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed" autocomplete="off">
                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-681e3b8bf0ac9">
                <h2 class="head">
                    Enter Your Mail &nbsp; <img src="https://www.ramaeri.com/storage/app/public/images/Component2.png"
                        alt="Arrow Icon" class="btn-arrow">
                </h2>

                <div class="mb-3">

                    <input type="email" id="emailf" name="email" placeholder="Enter your email" class="theme-input "
                        value="" required>
                    <input type="hidden" name="reset_with" value="email">
                </div>

                <div class='err-sces-msg' id="err-sces-msg"></div>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="checkbox">
                        <input type="checkbox" id="save-password">
                        <label for="save-password">Remember me</label>
                    </div>

                </div>
                <br>
                <button type="button" id='reset_f_button' class="submitAuth-button">Reset Password &nbsp; </button>
                <!--<img src="https://www.ramaeri.com/storage/app/public/images/Component1.png" alt="Arrow Icon" class="btn-arrow">-->
                <br>
                <!-- <p class="mt-4 text-center">Don&#039;t have an Account? <a href="https://www.ramaeri.com/nested/register">Sign Up</a></p> -->
                <br>
                <a class="">
                    <a href="https://www.ramaeri.com/auth/google">
                        <img src="https://www.ramaeri.com/storage/app/public/images/g8.png" alt="Image Description">
                    </a>
                    <span class="user-span">or sign up with</span>
                </a>
                <div class="mt-5">
                    <span class="user-span">New user -
                        <a href="#" onclick="registermodel()" class="regis-span">Create account</a>
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
                    <span class="para">Complete your purchase and let the glow begin.</sapn>
                </div>
                <div class="features d-flex justify-content-around text-white">

                    <div class="d-flex flex-column" style="gap:10px">
                        <a href="">
                            <img src="https://www.ramaeri.com/storage/app/public/images/Group205.png" alt="Brand Logo"
                                class="g5">
                        </a>
                        <span class="feature">Nature</sapn>
                    </div>

                    <div class="d-flex flex-column" style="gap:10px">
                        <a href="">
                            <img src="https://www.ramaeri.com/storage/app/public/images/Group206.png" alt="Brand Logo"
                                class="g5">
                        </a>
                        <span class="feature">Modern Science</span>
                    </div>
                    <div class="d-flex flex-column" style="gap:10px">
                        <a href="">
                            <img src="https://www.ramaeri.com/storage/app/public/images/Group207.png" alt="Brand Logo"
                                class="g5">
                        </a>
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