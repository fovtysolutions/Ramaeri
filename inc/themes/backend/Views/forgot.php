<div class="form-card mb-5">
    <div class="form-card_body">
        <div class="text-center">
            <div class="mb-5">
                <h1 class="display-4 mt-0 font-weight-semi-bold"><?php echo display('forgot_password') ?>
                </h1>
                <p><?php echo display('receover_password') ?></p>
            </div>
        </div>
        <div class="form-group" id="main_email">
            <input type="hidden" id="base_url" value="<?=base_url()?>">
            <label class="input-label font-weight-bold" for="inputEmail"><?php echo display('y_mail') ?></label>
            <input type="email" name="email" autocomplete="off" id="inputEmail" placeholder="<?php echo display('email') ?>" required autofocus class="form-control">
        </div>
        <div class="mb-5" id="sent">
            <p id="msg_email"></p>
        </div>
        <div class="form-group" id="sent1">
            <label class="input-label font-weight-bold" for="code"><?php echo display('enter_code') ?></label>
            <input type="text" name="code" autocomplete="off" id="code" placeholder="<?php echo display('enter_code') ?>" required autofocus class="form-control">
        </div>
        <div class="form-group" id="new_password">
            <label class="input-label font-weight-bold" for="new_pass"><?php echo display('new_pass') ?></label>
            <input type="password" name="new_pass" autocomplete="off" id="new_pass" placeholder="<?php echo display('new_pass') ?>" required autofocus class="form-control">
            <input type="hidden" name="hemail" autocomplete="off" id="hemail" placeholder="<?php echo display('hemail') ?>" required autofocus class="form-control">
        </div>
        <div class="form-group mb-5">
            <!-- capta part -->
            <button onclick="forgot_password()" type="submit" id="email_btn" class="right forgot-content forgot-custom-btn btn-blue-th"><?php echo display('submit') ?></button>
            <button onclick="submit_code()" type="submit" id="otp_btn" class="right forgot-content forgot-custom-btn btn btn-blue-th"><?php echo display('submit') ?></button>
            <button onclick="reset_password()" type="submit" id="reset_btn" class="right forgot-content forgot-custom-btn btn btn-blue-th"><?php echo display('submit') ?></button>
            <button type="submit" id="login_btn" class="right forgot-content forgot-custom-btn btn btn-blue-th"><a style="color: #fff;" href='login'><?php echo display('login') ?></a></button>
        </div>
    </div>
</div>