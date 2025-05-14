<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true"
    data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form class="tt-login-form-wrap text-center forms" action="https://www.ramaeri.com/login" method="POST"
                id="login-form">
                <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed" autocomplete="off">
                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-681e3b8beeb8d">
                <h2 class="head">
                    Log In to Continue &nbsp; <img
                        src="https://www.ramaeri.com/storage/app/public/images/Component2.png" alt="Arrow Icon"
                        class="btn-arrow">
                </h2>

                <div class="mb-3">
                    <input type="email" name="email" placeholder="Enter user name or phone number"
                        class="theme-input " required>
                </div>

                <div class="mb-3">
                    <div class="position-relative">
                        <input type="password" name="password" placeholder="Password"
                            class="theme-input form-control" required>
                        <span class="position-absolute end-0 top-50 translate-middle-y me-3" style="cursor: pointer;"
                            onclick="togglePassword('password')">
                            <img src="https://www.ramaeri.com/storage/app/public/images/Vector.png" alt="Show Password">
                        </span>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <a href="#" class="pt-4 forget" onclick="openForgotPasswordModal()">Forgot Password ?</a>
                </div>
                <br>
                <button type="submit" class="submitAuth-button">Sign In &nbsp;</button>
                <br>
                <div class="mt-3">
                    <a href="https://www.ramaeri.com/auth/google" class="">
                        <svg width="25px" height="25px" viewBox="-3 0 262 262" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid">
                            <path
                                d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"
                                fill="#4285F4" />
                            <path
                                d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"
                                fill="#34A853" />
                            <path
                                d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"
                                fill="#FBBC05" />
                            <path
                                d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"
                                fill="#EB4335" />
                        </svg>
                        <span class="user-span">or sign up with</span>
                    </a>
                </div>
                <div class="mt-5">
                    <span class="user-span">New user -
                        <a href="#" onclick="registermodel()" class="regis-span">Create account</a>
                    </span>
                </div>
            </form>
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