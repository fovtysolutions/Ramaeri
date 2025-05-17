<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/info.css'); ?>">
<?php echo $this->endSection(); ?>

<section class="categories-section">
    <div class="containerssss">
        <div class="row">
            <!-- Left Contact Section -->
            <div class="col-lg-5 col-md-12 contact-section">
                <div aria-label="breadcrumbss">
                    <ul class="breadcrumbss">
                        <li><a href="./productCart.html" class="cart">Cart</a></li>
                        <li><a href="#">Information</a></li>
                        <li><a href="#" class="cart">Payment</a></li>
                    </ul>
                </div>
                <form action="https://ramaeri.com/new-address" method="POST">
                    <input type="hidden" name="_token" value="dqrFvYC1CWBBD1KW03WMo2pxYGZXqIyD6Z7AcP83"
                        autocomplete="off">
                    <div class="row">


                        <h3 class="checkout-heading">Contact</h3>
                        <div class="form-group col-lg-12">
                            <input type="email" id="email" name="email" placeholder="Enter email ID or phone number"
                                autocomplete="off" class="float-input mb-5" value="aakashmehrafs@gmail.com" required>
                            <label for="email" class="float-label">Enter email ID or phone number</label>
                        </div>
                        <h3 class="checkout-heading">Shipping address</h3>

                        <div class="form-group col-lg-6">
                            <input type="text" name="first_name" placeholder="First name" value="Aakash Mehra"
                                autocomplete="off" class="float-input mb-5" required>
                            <label for="name" class="float-label">First name</label>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" name="last_name" placeholder="Second name" value="" autocomplete="off"
                                class="float-input mb-5">
                            <label for="second_name" class="float-label">Second name</label>
                        </div>

                        <div class="form-group col-lg-12">
                            <input type="text" name="mobile" id="mobile" placeholder="Mobile" autocomplete="off"
                                class="float-input mb-5" required pattern="^[0-9]{10}$" maxlength="10" value="">
                            <label for="mobile" class="float-label">Mobile</label>
                            <small class="error-message" style="display: none; color: red;">Please enter a valid
                                10-digit mobile number.</small>
                        </div>

                        <div class="form-group col-lg-12">
                            <input type="text" name="building" placeholder="Enter your building" value=""
                                autocomplete="off" class="float-input mb-5" required>
                            <label for="building" class="float-label">Enter your building</label>
                        </div>

                        <div class="form-group col-lg-12">
                            <input type="text" name="street" placeholder="Enter your street" value="" autocomplete="off"
                                class="float-input mb-5" required>
                            <label for="street" class="float-label">Enter your street</label>
                        </div>

                        <div class="form-group col-lg-12">
                            <input type="text" name="landmark" placeholder="Enter your landmark" value=""
                                autocomplete="off" class="float-input mb-5" required>
                            <label for="landmark" class="float-label">Enter your landmark</label>
                        </div>


                        <div class="form-group col-lg-4">
                            <input id="pincodedata" oninput="enforcePincodeLength(event)" type="text" name="pincode"
                                placeholder="Pincode" autocomplete="off" class="float-input mb-5" value="" required>
                            <label for="pincode" class="float-label">Pincode</label>
                        </div>

                        <div class="form-group col-lg-4 ">
                            <select name="state_id" id="state-dropdown" class="mb-5" required>
                                <option value="1">Andaman and Nicobar Islands</option>
                                <option value="2">Andhra Pradesh</option>
                                <option value="3">Arunachal Pradesh</option>
                                <option value="4">Assam</option>
                                <option value="5">Bihar</option>
                                <option value="6">Chandigarh</option>
                                <option value="7">Chhattisgarh</option>
                                <option value="8">Dadra and Nagar Haveli</option>
                                <option value="9">Daman and Diu</option>
                                <option value="10">Delhi</option>
                                <option value="11">Goa</option>
                                <option value="12">Gujarat</option>
                                <option value="13">Haryana</option>
                                <option value="14">Himachal Pradesh</option>
                                <option value="15">Jammu and Kashmir</option>
                                <option value="16">Jharkhand</option>
                                <option value="17">Karnataka</option>
                                <option value="18">Kenmore</option>
                                <option value="19">Kerala</option>
                                <option value="20">Lakshadweep</option>
                                <option value="21">Madhya Pradesh</option>
                                <option value="22">Maharashtra</option>
                                <option value="23">Manipur</option>
                                <option value="24">Meghalaya</option>
                                <option value="25">Mizoram</option>
                                <option value="26">Nagaland</option>
                                <option value="27">Narora</option>
                                <option value="28">Natwar</option>
                                <option value="29">Odisha</option>
                                <option value="30">Paschim Medinipur</option>
                                <option value="31">Pondicherry</option>
                                <option value="32">Punjab</option>
                                <option value="33">Rajasthan</option>
                                <option value="34">Sikkim</option>
                                <option value="35">Tamil Nadu</option>
                                <option value="36">Telangana</option>
                                <option value="37">Tripura</option>
                                <option value="38">Uttar Pradesh</option>
                                <option value="39">Uttarakhand</option>
                                <option value="40">Vaishali</option>
                                <option value="41">West Bengal</option>
                            </select>
                            <label for="state_id" class="float-label">State</label>
                        </div>
                        <div class="form-group col-lg-4">
                            <select name="city_id" id="city-dropdown" class="mb-5" required>
                                <option value="1" selected>indore</option>
                                <option value="1" selected>Bhoapl</option>
                                <option value="1" selected>Pune</option>
                                <option value="1" selected>Noida</option>
                                <option value="1" selected>Ratlam</option>

                            </select>
                            <label for="city_idn" class="float-label">City</label>
                        </div>
                        <div style="display:flex; gap:8px; align-items:center;">
                            <input type="checkbox" id="saveInfo" style="width:17px; height:17px;"
                                class="custom-checkbox">
                            <label for="saveInfo" class="form-check-label">Save this information for next
                                time</label>
                        </div>
                        <div style="display:flex; gap:8px; align-items:center;">
                            <input type="checkbox" id="saveInfo" style="width:17px; height:17px;"
                                class="custom-checkbox" required>
                            <label for="saveInfo" class="form-check-label">I've read the privacy policy</label>
                        </div>

                        <!-- <div class="form-check mb-3 mt-3" style="display:flex;gap:8px;align-items: center;">
                      <input type="checkbox" class="form-check-input" id="privacyPolicy" style="width: 19px;
                height: 19px;" required>
                      <label class="form-check-label" for="privacyPolicy">I've read the privacy policy</label>
            </div> -->
                        <div class="d-flex justify-content-between align-items-center up-and-down"
                            style="padding:80px 12px 90px 12px" id="showdisplayagain">
                            <div class="down-and-up" style="display: flex;gap: 16px;">
                                <img src="https://ramaeri.com/storage/app/public/images/Group1.png"
                                    alt="Protection Icon" class="protection-icon"
                                    style="width:                       30px;height: 27px;">
                                <p class="mb-0 hand-heading">100% Purchase Protection</p>
                            </div>

                            <button type="submit" class="hand-button">
                                <a href="order" style="text-decoration: none; color: #fff;">Continue</a>
                                <img src="https://ramaeri.com/storage/app/public/images/Component1.png" alt="Arrow Icon"
                                    class="btn-arrow">
                            </button>
                        </div>

                    </div>
                </form>



            </div>

            <div class="col-lg-2 col-md-12"></div>

            <!-- Right Cart Section -->
            <div class="col-lg-5 col-md-12 cart-section cart-checkout"
                style="background-color: #e9efe4; border-top-left-radius: 4rem;padding: 4rem;">
                <style>
                    .scroll-checkout {
                        height: 50vh;
                        overflow-y: auto
                    }

                    .scroll-checkout::-webkit-scrollbar {
                        width: 3px;
                        /* Default scrollbar width */
                    }

                    .scroll-checkout::-webkit-scrollbar-track {
                        background-color: #DAE5D34D;
                        /* Scroll track background */
                        border-radius: 10px;
                        /* Round scroll track edges */
                    }

                    .scroll-checkout::-webkit-scrollbar-thumb {
                        background-color: #4A6437;
                        /* Scrollbar handle color */
                        border-radius: 10px;
                        /* Round scrollbar edges */
                        border: 2px solid #DAE5D34D;
                        /* Space between handle and track */
                    }

                    .Discount {
                        display: none;
                    }

                    .scroll-checkout::-webkit-scrollbar-thumb:hover {
                        background-color: #5a7650;
                        /* Darken handle on hover */
                    }

                    @media(max-width:500px) {
                        .down-and-up {
                            text-align: center !important;
                        }
                    }
                </style>




                <span class="cart-heading">Add to cart (1)</span>

                <div class="cart-item mb-3 pt-8 scroll-checkout">
                    <div class="cart-item-inner w-100">
                        <div>
                            <img src="https://ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png"
                                alt="Grape Glow Facewash" class="img-fluid">
                        </div>

                        <div class="w-100">
                            <h5 class="cart-item-inner-heading">Grape Glow Facewash
                            </h5>

                            <div class="add-item pb-5">
                                <button type="button" class="btn-minus decrease"
                                    onclick="handleCartItem('decrease', 899)"><span>-</span></button>
                                <input type="text" readonly value="1" class="cart-input">
                                <button type="button" class="btn-plus increase"
                                    onclick="handleCartItem('increase', 899)">+</button>
                            </div>

                            <div class="price-container pb-5">

                                <p class="price">
                                    ₹1,300.00
                                </p>
                                <button type="button" onclick="handleCartItem('delete', 899)">
                                    <img src="https://ramaeri.com/storage/app/public/images/trash1.png"
                                        class="img-fluid" style="width:16.77px;height:21.33px">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--below if condition responsible to not render coupan section during render so that i comment it out-->
                <form action="https://ramaeri.com/apply-coupon" method="POST" id='coupanform1'>
                    <input type="hidden" name="_token" value="dqrFvYC1CWBBD1KW03WMo2pxYGZXqIyD6Z7AcP83"
                        autocomplete="off">
                    <div class="discount-section pt-5 mb-8">

                        <input type="text" name='code' placeholder="Discount Code" class="form-control"
                            style="height:49px" required>
                        <button type="submit" class="apply-button" id='apply-coupan1'>Apply</button>

                    </div>
                </form>

                <div
                    style="padding-top: 20px; padding-bottom: 20px; border-top: 1px solid rgba(74, 100, 55, 0.5); border-bottom: 1px solid rgba(74, 100, 55, 0.5);">
                    <div class="pricing-info pt-3">
                        <div class="subtotal">Subtotal:</div>

                        <div class="subtotals sub-total-price">₹1,300.00</div>
                    </div>
                    <div class="pricing-info pt-3 Discount">
                        <div class="subtotal" id="discount-amount">Discount:</div>

                        <div class="subtotals sub-total-discount"></div>
                    </div>
                    <div class="pricing-info">
                        <div class="subtotal">Shipping:</div>
                        <div class="subtotals">
                            Free
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
</section>
<!-- Checkout Form End -->

<?php echo $this->section('script'); ?>
<script src="<?php echo base_url('assets/public/js/checkout.js') ?>"></script>
<?php echo $this->endSection(); ?>