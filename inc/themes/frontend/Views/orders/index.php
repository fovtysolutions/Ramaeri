<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/order.css'); ?>">
<?php echo $this->endSection(); ?>

<section class="categories-section">
    <div class="containerssss">
        <div class="row">
            <!-- Left Contact Section -->
            <div class="col-lg-7 col-md-12 contact-section">
                <div aria-label="breadcrumbss">
                    <ul class="breadcrumbss">
                        <li><a href="./productCart.html" class="cart">Cart</a></li>
                        <li><a href="./Info.html" class="cart">Information</a></li>
                        <li><a href="./OrderView.html">Payment</a></li>
                    </ul>
                </div>
                <h3 class="section-title">Select Payment Method</h3>

                <!-- Contact and Shipping Info -->
                <div class="payment-method detail-b">
                    <div class="container">
                        <div class="info-block b-bottom">
                            <div class="col-md-2 col-2">
                                <div class="c-title-form">Contact</div>
                            </div>
                            <div class="col-md-7 col-7">9981715909</div>
                            <div class="col-md-3 col-3" style="text-align: right;">
                                <a onclick=(history.back()) style="color:#2a7eae;">Change</a>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="info-block pt-2">
                            <div class="col-md-2">
                                <div class="c-title-form">Ship to</div>
                            </div>
                            <div class="col-md-7" id="shipping_add">546, ee, 406 Indore - Dhar Rd</div>
                            <div class="col-md-3" style="text-align: right;"><a onclick=(history.back())
                                    style="color:#2a7eae">Change</a></div>
                        </div>
                    </div>
                </div>
                <div class="payment-sec">
                    <h4 style="">Payment</h4>
                    <p>All transactions are secure and encrypted</p>
                </div>
                <!-- Payment Options -->
                <div class="payment-sec-txt">
                    <div class="payment-option">
                        <label for="razorpay" style="width:100%">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <div class="d-flex">
                                        <input type="radio" id="razorpay" name="payment" value="rozerpay" checked>
                                        <label for="simpl" style="font-weight:700; ">
                                        </label>
                                        <div class="option-title">
                                            Razorpay Secure (UPI, Cards, Wallets, Net Banking)
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6" style="text-align:right">
                                    <div class="payment-icons">
                                        <img src="https://ramaeri.com/storage/app/public/images/visa-icon.png"
                                            alt="Visa" style="">
                                        <img src="https://ramaeri.com/storage/app/public/images/mster.png" alt="RuPay"
                                            style="">
                                        <img src="https://ramaeri.com/storage/app/public/images/mastercard-icon.png"
                                            alt="MasterCard" style="">
                                        <span>and more...</span>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="option-description d-flex flex-column text-center payment-method"
                        style="background-color: #f3faee; padding:2rem;">
                        <img src="https://ramaeri.com/storage/app/public/images/redirect-icon.png" alt="Redirect Icon"
                            class="w-25">
                        <p style="margin-bottom: 0;padding: 0px 27px;">
                            After clicking “Complete order”, you will be redirected to Razorpay Secure
                            (UPI, Cards, Wallets, NetBanking) to complete your purchase securely.
                        </p>
                    </div>
                    <div class="payment-method pay-later d-flex gap-2">
                        <input type="radio" id="simpl" name="payment" value="simple">
                        <label for="simpl" style="font-weight:700;">
                            Simple Payments (Pay with Pay Later, Pay in 3, UPI)
                        </label>
                    </div>

                    <div class="payment-method cod d-flex gap-2">
                        <input type="radio" id="cod" name="payment" value="cod">
                        <label for="cod" style="font-weight:700;">
                            COD
                        </label>
                    </div>
                </div>
                <!-- Billing Address -->
                <div class="billing-title">
                    <h4>Billing address</h4>
                    <p>Select the address that matches your card or payment method.</p>
                </div>
                <div class="payment-sec-txt">
                    <div class="address-option">
                        <input type="radio" name="billing-address" id="same-address" checked>
                        <label for="same-address">Same as shipping address</label>
                    </div>
                    <div class="address-option pay-later">
                        <input type="radio" name="billing-address" id="different-address">
                        <label for="different-address">Use a different billing address</label>
                    </div>
                </div>
            </div>
            <!-- Right Cart Section -->
            <div class="col-lg-5 col-md-12 cart-section cart-checkout"
                style="background-color: #e9efe4; border-top-left-radius: 4rem;">
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
                                <button type="button" class="btn-minus decrease"><span>-</span></button>
                                <input type="text" readonly value="1" class="cart-input">
                                <button type="button" class="btn-plus increase">+</button>
                            </div>

                            <div class="price-container pb-5">

                                <p class="price">
                                    ₹1,300.00
                                </p>
                                <button type="button">
                                    <img src="https://ramaeri.com/storage/app/public/images/trash1.png"
                                        class="img-fluid" style="width:16.77px;height:21.33px">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--below if condition responsible to not render coupan section during render so that i comment it out-->

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


                <div class="pricing-info pt-9" id="pricing_del">
                    <div class="subtotalss">Total:</div>
                    <div class="subtotalss sub-total-price" id='total-price'>₹1,300.00</div>
                </div>
                <div class="row align-items-center up-and-down" id="below_del">
                    <div class="col-12 col-lg-8 pt-8 pb-8" style="display: flex; gap: 16px;">
                        <img src="https://ramaeri.com/storage/app/public/images/Group1.png" alt="Protection Icon"
                            class="protection-icon" style="width:30px; height:27px;">
                        <p class="mb-0 hand-heading">100% Purchase Protection</p>
                    </div>

                    <div class="col-12 col-lg-4 pt-8 pb-8 down-and-up">
                        <form action="https://ramaeri.com/checkout-complete" method="POST" id="chk_complete_form">
                            <input type="hidden" name="_token" value="dqrFvYC1CWBBD1KW03WMo2pxYGZXqIyD6Z7AcP83"
                                autocomplete="off"> <input type="hidden" name="name" value="Aakash Mehra">
                            <input type="hidden" name="email" value="aakashmehrafs@gmail.com">
                            <input type="hidden" name="phone" value="">
                            <input type="hidden" name="shipping_address_id" id="shipping_address_id" value="197">
                            <input type="hidden" name="billing_address_id" id="billing_address_id">
                            <input type="hidden" name="billing_same" id="billing_same" value="1">
                            <a href="javascript:void(0)">
                                <button type="button" class="hand-button" data-bs-toggle="modal" data-bs-target="#thanks">
                                    Continue
                                    <img src="https://ramaeri.com/storage/app/public/images/Component1.png"
                                        alt="Arrow Icon" class="btn-arrow" style="height:20px;width:20px">
                                </button></a>
                        </form>
                    </div>
                </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            </div>
        </div>
    </div>
</section>

 <!-- Modal -->
<div class="modal fade" id="thanks" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
    <div class="modal-content text-center p-4 p-md-5" style="color: #267a2d;">
      <div class="fireworks-icon">
        <img style="width: 100px; height:100px;" src="./assets/flower.jpg" class="img-fluid" alt="Fireworks Icon">
        <h2 class="m-2" style="color: #476947;" id="thankYouModalLabel">Thank You For Order!</h2>
      </div>
      <hr class="dividernew" id="hrLine">
      <p class="additional-text m-2">Order has been placed Successfully</p>
      <p>If you have any questions or queries then feel free to get in contact with us.</p>
      <p class="company-signature">All the best</p>
      <div class="company-logo">
        <img src="https://ramaeri.com/storage/app/public/images/logo.png" class="img-fluid" alt="Ramaeri Logo" style="width: 128px; height: 40px;">
      </div>
      <div class="text-center continue-link mt-4" style="font-weight: 500;">
        <a href="./Products.html" style="color: #4A6437;"><span>Click Here To Continue</span></a>
      </div>
    </div>
  </div>
</div>
<?php echo $this->section('script'); ?>
<?php echo $this->endSection(); ?>