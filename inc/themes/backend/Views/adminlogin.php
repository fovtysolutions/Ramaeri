<div class="d-flex flex-column h-100 p-3">
    <div class="d-flex flex-column flex-grow-1">
        <div class="row h-100">
            <div class="col-xxl-12">
                <div class="row justify-content-center h-100">
                    <div class="col-lg-6 py-lg-5">
                        <div class="d-flex flex-column h-100 justify-content-center">
                                <div class="auth-logo mb-4">
                                    <a href="/" class="logo-dark">
                                        <img src="<?= base_url('assets/images/logo-dark.png') ?>" height="24" alt="logo dark">
                                    </a>

                                    <a href="/" class="logo-light">
                                        <img src="<?= base_url('assets/images/logo-light.png') ?>" height="24" alt="logo light">
                                    </a>
                                </div>

                                <h2 class="fw-bold fs-24">Sign In</h2>

                                <p class="text-muted mt-1 mb-4">Enter your email address and password to access admin panel.</p>

                                <div class="mb-5">
                                    <form method="POST" id="formsubmit" action="" class="authentication-form">

                                        <div class="mb-3">
                                            <label class="form-label" for="example-email">Email</label>
                                            <input type="email" id="example-email" name="email" value="user@demo.com" class="form-control bg-" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <a href="auth-password" class="float-end text-muted text-unline-dashed ms-1">Reset password</a>
                                            <label class="form-label" for="example-password">Password</label>
                                            <input type="password" id="example-password" name="password" value="password" class="form-control" placeholder="Enter your password">
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                            </div>
                                        </div>
                                         <div class="mb-1 text-center d-grid">
                                            <button class="btn btn-soft-primary" type="submit">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                                <p class="text-danger text-center">forgot password? <a href="<?= base_url('forgot-password') ?>" class="text-dark fw-bold ms-1">Forgot Password</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-5 d-none d-xxl-flex d-xxl-none">
                <div class="card h-100 mb-0 overflow-hidden">
                    <div class="d-flex flex-column h-100">
                        <img src="<?= base_url('assets/images/small/img-10.jpg') ?> " alt="" class="w-100 h-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="base_url" value="<?=base_url('login')?>">
<input type="hidden" id="successroute" value="<?=base_url('customer')?>">