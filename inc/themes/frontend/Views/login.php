<!-- Login Model -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true"
  data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered login_model">
    <div class="modal-content">
      <form class="tt-login-form-wrap text-center forms" action="https://www.ramaeri.com/login" method="POST"
        id="login-form">
        <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed" autocomplete="off"> <input
          type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-681e3ac064226">
        <h2 class="head">
          Log In to Continue &nbsp; <img src="https://www.ramaeri.com/storage/app/public/images/Component2.png"
            alt="Arrow Icon" class="btn-arrow">
        </h2>

        <div class="mb-3">
          <input type="email" id="email" name="email" placeholder="Enter user name or phone number" class="theme-input "
            required>
        </div>

        <div class="mb-3">
          <div class="position-relative">
            <input type="password" name="password" id="password" placeholder="Password" class="theme-input form-control"
              required>
            <span class="position-absolute end-0 top-50 translate-middle-y me-3" style="cursor: pointer;"
              onclick="togglePassword('password')">
              <img src="https://www.ramaeri.com/storage/app/public/images/Vector.png" alt="Show Password">
            </span>
          </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="container mt-5 text-lg-left text-left">
            <a href="#" class="pt-4 forget text-[#4285F4]" data-bs-toggle="modal"
              data-bs-target="#forgotPasswordModal">Forgot Password?</a>
          </div>
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
            <!-- Button to Open Modal -->
            <button type="button" class="" style="color: #476947; font-size: 14px;" data-bs-toggle="modal"
              data-bs-target="#demoModal">
              Create account
            </button>
            <!-- <a href="javascript:void(0);" onclick="registermodel()" class="regis-span">Create account</a> -->
          </span>
        </div>
      </form>
    </div>
    <div class="col-lg-6 d-none d-lg-block tt-login-img">
      <div class="welcome-content text-center text-white">
        <h3 class="wlc">Welcome</h3>
        <img src="https://www.ramaeri.com/storage/app/public/images/Frame@2x.png" alt="Brand Logo" class="blog-image">
        <div>
          <span class="para">Complete your purchase and let the glow begin.</sapn>
        </div>
        <div class="features d-flex justify-content-around text-white">

          <div class="d-flex flex-column" style="gap:10px">
            <a href="">
              <img src="https://www.ramaeri.com/storage/app/public/images/Group205.png" alt="Brand Logo" class="g5">
            </a>
            <span class="feature">Nature</sapn>
          </div>

          <div class="d-flex flex-column" style="gap:10px">
            <a href="">
              <img src="https://www.ramaeri.com/storage/app/public/images/Group206.png" alt="Brand Logo" class="g5">
            </a>
            <span class="feature">Modern Science</span>
          </div>
          <div class="d-flex flex-column" style="gap:10px">
            <a href="">
              <img src="https://www.ramaeri.com/storage/app/public/images/Group207.png" alt="Brand Logo" class="g5">
            </a>
            <span class="feature">Beauty</span>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!--For Register Form-->
<!-- Modal Structure -->
<div class="modal fade" id="demoModal" tabindex="-1" aria-labelledby="demoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form class="tt-login-form-wrap text-center forms" action="https://www.ramaeri.com/nested/register" method="POST"
        id="register-form">
        <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed" autocomplete="off"> <input
          type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-681e3ac064f29">
        <!--Scipr for form-->


        <h2 class="head">
          Register Now for Exclusive offers &nbsp; <img
            src="https://www.ramaeri.com/storage/app/public/images/Component2.png" alt="Arrow Icon" class="btn-arrow">
        </h2>

        <div class="mb-3">
          <input type="text" id="fullname" name="name" placeholder="Enter your name" class="theme-input" required>
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
            <input type="password" name="password" id="password" placeholder="Password" class="theme-input form-control"
              required>
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
          <!-- Trigger Link -->
          <div class="container mt-5 text-lg-left text-left">
            <a href="#" class="pt-4 forget text-[#4285F4]" data-bs-toggle="modal"
              data-bs-target="#forgotPasswordModal">Forgot Password?</a>
          </div>
        </div>
        <br>
        <button type="btn" id="register_id" class="submitAuth-button">Sign Up &nbsp;</button>
        <br>
        <!-- <p class="mt-4 text-center">Don&#039;t have an Account? <a href="https://www.ramaeri.com/nested/register">Sign Up</a></p> -->
        <div class="mt-3">
          <a href="#" class="">
            <img src="https://www.ramaeri.com/storage/app/public/images/g8.png" alt="Image Description">
            <span class="user-span">or sign up with</span>
          </a>
        </div>
        <div class="mt-5">
          <span class="user-span">Already user -
            <a href="javascript:void(0);" target="loginFrame" id="loginFrame" onclick="loginmodel()">
              Sign In
            </a>
          </span>
        </div>
      </form>

    </div>

    <div class="col-lg-6 d-none d-lg-block tt-login-img">
      <div class="welcome-content text-center text-white">
        <h3 class="wlc">Welcome</h3>
        <img src="https://www.ramaeri.com/storage/app/public/images/Frame@2x.png" alt="Brand Logo" class="blog-image">
        <div>
          <span class="para">Complete your purchase and let the glow begin.</span>
        </div>
        <div class="features d-flex justify-content-around text-white">
          <div class="d-flex flex-column" style="gap:10px">
            <a href=""><img src="https://www.ramaeri.com/storage/app/public/images/Group205.png" alt="Nature"
                class="g5"></a>
            <span class="feature">Nature</span>
          </div>
          <div class="d-flex flex-column" style="gap:10px">
            <a href=""><img src="https://www.ramaeri.com/storage/app/public/images/Group206.png" alt="Modern Science"
                class="g5"></a>
            <span class="feature">Modern Science</span>
          </div>
          <div class="d-flex flex-column" style="gap:10px">
            <a href=""><img src="https://www.ramaeri.com/storage/app/public/images/Group207.png" alt="Beauty"
                class="g5"></a>
            <span class="feature">Beauty</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Forgot Password Modal -->
<div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form class="tt-login-form-wrap text-center forms" action="https://www.ramaeri.com/sent/forgot/otp/mail"
        method="POST" id="forgotP-form">
        <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed" autocomplete="off"> <input
          type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-681e3ac065ecf">
        <!--script for form-->


        <h2 class="head">
          Enter Your Mail &nbsp; <img src="https://www.ramaeri.com/storage/app/public/images/Component2.png"
            alt="Arrow Icon" class="btn-arrow">
        </h2>

        <div class="mb-3">

          <input type="email" id="emailf" name="email" placeholder="Enter your email" class="theme-input " value=""
            required>
          <input type="hidden" name="reset_with" value="email">
        </div>

        <div class='err-sces-msg' id="err-sces-msg"></div>
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div class="checkbox d-flex justify-content-between align-items-center gap-1">
            <input type="checkbox" id="save-password">
            <label for="save-password">Remember me</label>
          </div>

        </div>
        <br>
        <button type="button" id='reset_f_button' class="submitAuth-button">Reset Password &nbsp; </button>
        <br>
        <br>
        <a class="">
          <a href="#">
            <img src="https://www.ramaeri.com/storage/app/public/images/g8.png" alt="Image Description">
          </a>
          <span class="user-span">or sign up with</span>
        </a>
      </form>
    </div>
    <div class="col-lg-6 d-none d-lg-block tt-login-img">
      <div class="welcome-content text-center text-white">
        <h3 class="wlc">Welcome</h3>
        <img src="https://www.ramaeri.com/storage/app/public/images/Frame@2x.png" alt="Brand Logo" class="blog-image">
        <div>
          <span class="para">Complete your purchase and let the glow begin.</sapn>
        </div>
        <div class="features d-flex justify-content-around text-white">

          <div class="d-flex flex-column" style="gap:10px">
            <a href="">
              <img src="https://www.ramaeri.com/storage/app/public/images/Group205.png" alt="Brand Logo" class="g5">
            </a>
            <span class="feature">Nature</sapn>
          </div>

          <div class="d-flex flex-column" style="gap:10px">
            <a href="">
              <img src="https://www.ramaeri.com/storage/app/public/images/Group206.png" alt="Brand Logo" class="g5">
            </a>
            <span class="feature">Modern Science</span>
          </div>
          <div class="d-flex flex-column" style="gap:10px">
            <a href="">
              <img src="https://www.ramaeri.com/storage/app/public/images/Group207.png" alt="Brand Logo" class="g5">
            </a>
            <span class="feature">Beauty</span>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php echo $this->section('script'); ?>
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
<script>
  grecaptcha.ready(function () {
    grecaptcha.execute('6LdWivoqAAAAAG2NgW3tVefDleWodyRyCrTYn-Ya', { action: 'recaptcha_token' }).then(function (token) {
      document.getElementById('g-recaptcha-response-681e3ac064f29').value = token;
    });
  });
</script>
<script>
  grecaptcha.ready(function () {
    grecaptcha.execute('6LdWivoqAAAAAG2NgW3tVefDleWodyRyCrTYn-Ya', { action: 'recaptcha_token' }).then(function (token) {
      document.getElementById('g-recaptcha-response-681e3ac065ecf').value = token;
    });
  });
</script>
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
<script>
  "use strict"

  function loginmodel() {
    var thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'), {
      backdrop: true,
      keyboard: true
    });

    // Close the Register Modal if it's open
    var registerModalEl = document.getElementById('registermodel');
    var registerModalInstance = bootstrap.Modal.getInstance(registerModalEl);
    if (registerModalInstance) {
      registerModalInstance.hide();
    }

    thankYouModal.show();
  }
</script>
<script>
  var cartButton = document.querySelector('.cartButton');
  var cartOffcanvas = document.getElementById('cartOffcanvas');

  // Open cart when button is clicked
  cartButton.addEventListener('click', function (event) {
    event.stopPropagation();  // Prevent closing the cart when the button itself is clicked
    cartOffcanvas.classList.add('open');
  });

  // Close the cart if clicked outside of the cart
  window.addEventListener('click', function (event) {
    // Check if the click was outside the cartOffcanvas
    if (!cartOffcanvas.contains(event.target) && cartOffcanvas.classList.contains('open')) {
      cartOffcanvas.classList.remove('open');
    }
  });

</script>
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
<script>
  document.getElementById('phone').addEventListener('keypress', function (event) {
    // Prevent non-numeric characters
    if (!/[0-9]/.test(event.key)) {
      event.preventDefault();
    }
  });

  document.getElementById('phone').addEventListener('input', function (event) {
    // Ensure maximum 10 digits
    const input = event.target;
    if (input.value.length > 10) {
      input.value = input.value.slice(0, 10);
    }
  });
</script>
<?php echo $this->endSection(); ?>