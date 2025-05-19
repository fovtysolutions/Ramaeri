<footer class="bg-image">
    <div class="position-relative z-1 overflow-hidden">
        <div class="container">
            <div class="row g-5 g-90">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h5 class="footer-heading mb-4">Subscribe</h5>
                        <form style="display: flex; flex-direction: column; align-items: stretch;"
                            action="https://www.ramaeri.com/subscribers" class="subscribeForm" method="POST">
                            <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed"
                                autocomplete="off"> <input type="hidden" name="g-recaptcha-response"
                                id="g-recaptcha-response-681e3b8c024d3">
                                <div class="form-group col-lg-6">
                                <input type="email" name="email" placeholder="Email ID" autocomplete="off"
                                    style="color:#fff" class="email-input float-inputt mb-5" required>
                                <label for="email" class="float-labell">Email ID</label>
                            </div>
                            <button class="submit-button" id="submit-btn" type="submit">
                                <span class="submit-txt submittext" id="submit-text">Submit</span>
                                <svg class="icon-gap arrowround" stroke="currentColor" stroke-width="0"
                                    viewBox="0 0 512 512" height="11.91" width="11.91"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M210.7 147.6c7.5-7.5 19.8-7.5 27.3 0l95.4 95.7c7.3 7.3 7.5 19.1.6 26.6l-94 94.3c-3.8 3.8-8.7 5.7-13.7 5.7-4.9 0-9.9-1.9-13.6-5.6-7.5-7.5-7.6-19.7 0-27.3l79.9-81.1-81.9-81.1c-7.6-7.4-7.6-19.6 0-27.2z">
                                    </path>
                                    <path
                                        d="M48 256c0 114.9 93.1 208 208 208s208-93.1 208-208S370.9 48 256 48 48 141.1 48 256zm32 0c0-47 18.3-91.2 51.6-124.4C164.8 98.3 209 80 256 80s91.2 18.3 124.4 51.6C413.7 164.8 432 209 432 256s-18.3 91.2-51.6 124.4C347.2 413.7 303 432 256 432s-91.2-18.3-124.4-51.6C98.3 347.2 80 303 80 256z">
                                    </path>
                                </svg>
                                <svg class="snipper" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <g stroke="currentColor">
                                        <circle cx="12" cy="12" r="9.5" fill="none" stroke-linecap="round"
                                            stroke-width="3">
                                            <animate attributeName="stroke-dasharray" calcMode="spline" dur="1.5s"
                                                keySplines="0.42,0,0.58,1;0.42,0,0.58,1;0.42,0,0.58,1"
                                                keyTimes="0;0.475;0.95;1" repeatCount="indefinite"
                                                values="0 150;42 150;42 150;42 150" />
                                            <animate attributeName="stroke-dashoffset" calcMode="spline" dur="1.5s"
                                                keySplines="0.42,0,0.58,1;0.42,0,0.58,1;0.42,0,0.58,1"
                                                keyTimes="0;0.475;0.95;1" repeatCount="indefinite"
                                                values="0;-16;-59;-59" />
                                        </circle>
                                        <animateTransform attributeName="transform" dur="2s" repeatCount="indefinite"
                                            type="rotate" values="0 12 12;360 12 12" />
                                    </g>
                                </svg>
                                <span class="spinner" aria-hidden="true"></span>
                            </button>
                        </form>

                    </div>


                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h5 class="footer-heading mb-4">Important Links</h5>
                        <ul class="">
                            <!--                             <li><a
                                    href="https://www.ramaeri.com/pages/track-your-order">Track Your Order</a>
                            </li>
                         -->
                            <li><a class="footer-sub-heading click-effectssss" href="<?php echo base_url() ?>">Track your
                                    order</a></li>
                            <li><a class="footer-sub-heading click-effectssss" href="<?php echo base_url('pages/about-us') ?>">About Us</a></li>
                            <li><a class="footer-sub-heading click-effectssss" href="<?php echo base_url('pages/contact-us') ?>">Contact Us</a></li>
                            <li><a class="footer-sub-heading click-effectssss" href="<?php echo base_url('pages/privacy-policy') ?>">Privacy &amp;
                                    Policy</a></li>
                            <li><a class="footer-sub-heading click-effectssss" href="<?php echo base_url('pages/terms-condition') ?>">Terms &amp;
                                    Condition</a></li>

                            <li><a class="footer-sub-heading click-effectssss" href="<?php echo base_url('pages/return-policy') ?>">Return Policy</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h5 class="footer-heading mb-4">Shop</h5>

                        <ul class="">
                                <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed"
                                    autocomplete="off"> <input type="hidden" id="cat_i3" name="catId" value="3">
                                <input type="hidden" id="slug3" name="slug" value="Face-Wash">
                                <?php foreach ($productdata['category_details'] as $key => $value) { ?>
                                    <li>
                                <a class="footer-sub-heading click-effectssss" target="_blank"
                                    href="<?php echo base_url('./category'). '/' .$value->id ?>" onclick="onClickCategory3(event)"
                                    style=" cursor:pointer;" data-category="3" data-slug="Face Wash"><?php echo $value->name ?></a>
                            </li>
                               <?php } ?>
                            
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h5 class="footer-heading mb-4">Contact Us</h5>
                        <ul style="gap: 14px;display: flex;flex-direction: column;">
                            <!--<a href="+91 8920316704">-->
                            <a href="tel:+91 8920316704" class="click-effectssss" style="color:white">
                                <li class="footer-sub-heading pb-2 fs-xs"> <img
                                        src="https://www.ramaeri.com/storage/app/public/images/phone-icon.png"
                                        alt="Email Icon"
                                        style="width:21px;vertical-align: middle; margin-right: 15px;">(+91) -8920316704
                                </li>
                            </a>
                            <a href="mailto:info@ramaeri.com" class="click-effectssss" style="color:white">
                                <li class="footer-sub-heading pb-2 fs-xs"><img
                                        src="https://www.ramaeri.com/storage/app/public/images/email-icon.png"
                                        alt="Email Icon"
                                        style="width:21px;vertical-align: middle; margin-right: 15px;">info@ramaeri.com
                                </li>
                            </a>
                            <li class="footer-sub-heading pb-2 fs-xs">
                                <div style="display: flex;
    gap: 15px">
                                    <img src="https://www.ramaeri.com/storage/app/public/images/location-icon.png"
                                        alt="Location Icon"
                                        style="width:21px;height:22px;vertical-align: middle; margin-right: 5px;align-self: center;">
                                    <span>Ramaeri Ventures Second Floor, Goury Spare Parts, Jhansi Rd, Near Bank of
                                        Baroda, Vivekanand Colony, Dabra, Madhya Pradesh - 475110</span>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright" style="padding-top: 20px;">
            <!-- <span class="gradient-spacer d-block mb-3"></span> -->
            <div class="container">
                <div class="row align-items-center footer-bottom footer-widget">
                    <div class="col-lg-7 pr-0 pl-0 order-2 order-lg-1 pb-5 pb-lg-0">
                        <div class="logo-wrapper text-center d-flex align-items-center">
                            <div>
                                <a href="<?php echo base_url() ?>" class="logo"><img
                                        src="https://www.ramaeri.com/storage/app/public/images/Ramaerifooterlogo-svg"
                                        alt="footer logo" class="img-fluid" style="width: 124px;"></a>
                            </div>
                            <div class="pl-3 copyright-text">
                                <!-- © All Designed, Developed and 💕 by <b><font color="#ff9c00">Fovty Solutions</font></b> -->
                                All Rights Reserved © 2024
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 pr-0 pl-0 order-1 order-lg-2 pb-5 pb-lg-0">
                        <div class="footer-payments-info d-flex align-items-center justify-content-lg-end gap-2">
                            <div class="col d-flex justify-content-lg-end g-9">
                                <a href="https://www.youtube.com/@ramaericare" class="social-icon click-effectssss"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                    </svg>
                                </a>

                                <a href="https://www.facebook.com/ramaeri.nature/" class="social-icon click-effectssss"
                                    target="_blank"><i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/ramaeri.nature/" class="social-icon click-effectssss"
                                    target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
</footer>
