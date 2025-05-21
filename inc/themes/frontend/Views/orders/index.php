<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/order.css'); ?>">
<?php echo $this->endSection(); ?>

<section class="categories-section">
    <div class="containerssss">
        <form id="final_order">
        <div class="row">
            <!-- Left Contact Section -->
            <div class="col-lg-7 col-md-12 contact-section">
                <div aria-label="breadcrumbss">
                    <ul class="breadcrumbss">
                        <li><a href="<?php echo base_url('carts') ?>" class="cart">Cart</a></li>
                        <li><a href="<?php echo base_url('info') ?>" class="cart">Information</a></li>
                        <li><a href="<?php echo base_url('order') ?>">Payment</a></li>
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
                            <div class="col-md-7 col-7"><?= $productdata['session_data']['number'] ?></div>
                            <div class="col-md-3 col-3" style="text-align: right;">
                                <a onclick="updateContact()" style="color:#2a7eae;">Change</a>
                                <!-- <a onclick=(history.back()) style="color:#2a7eae;">Change</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="info-block pt-2">
                            <div class="col-md-2">
                                <div class="c-title-form">Ship to</div>
                            </div>
                            <div class="col-md-7" id="shipping_add">
                                <?= $productdata['session_data']['building'] . ' ' . $productdata['session_data']['address'] . '.' . $productdata['session_data']['city'] . ' , ' . $productdata['session_data']['state'] . ',' . $productdata['session_data']['pincode'] ?>
                            </div>
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
                    <!-- <div class="payment-option">
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
                    </div> -->
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
                        <input type="radio" id="simpl" name="payment_method" value="simple">
                        <label for="simpl" style="font-weight:700;">
                            Simple Payments (Pay with Pay Later, Pay in 3, UPI)
                        </label>
                    </div>

                    <div class="payment-method cod d-flex gap-2">
                        <input type="radio" id="cod" name="payment_method" value="cash on delivery">
                        <label for="cod" style="font-weight:700;">
                            COD
                        </label>
                    </div>
                </div>
                <input type="hidden" id="selected_address_id" name="selected_address_id" value="">

                <!-- Billing Address -->
                <div class="billing-title">
                    <h4>Billing address</h4>
                    <p>Select the address that matches your card or payment method.</p>
                </div>
                <div class="payment-sec-txt">
                    <div class="address-option">
                        <input type="radio" name="shipping_address" value="shiping" id="same-address" checked>
                        <label for="same-address">Same as shipping address</label>
                    </div>
                    <div class="address-option pay-later">
                        <button type="button" class="billing-address" style="font-weight: 700;" data-bs-toggle="modal"
                            data-bs-target="#userModal">
                            <input type="radio" name="billing_id" value="billing" id="different-address">
                            <label for="different-address">Use a different billing address</label>

                        </button>
                    </div>
                </div>
            </div>
            <!-- Right Cart Section -->
            <div class="col-lg-5 col-md-12 cart-section cart-checkout"
                style="background-color: #e9efe4; border-top-left-radius: 4rem;">
                <span class="cart-heading">Add to cart (<span id="cartcounts"></span>)</span>

                <div class="cart-item mb-3 pt-8 scroll-checkout" id="cartcheckout">

                </div>

                <div
                    style="padding-top: 20px; padding-bottom: 20px; border-top: 1px solid rgba(74, 100, 55, 0.5); border-bottom: 1px solid rgba(74, 100, 55, 0.5);">
                    <div class="pricing-info pt-3">
                        <div class="subtotal">Subtotal:</div>

                        <div class="subtotals sub-total-price" id="carttotals">₹1,300.00</div>
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
                    <div class="subtotalss sub-total-price" id="totalsamount">₹1,300.00</div>
                </div>
                <div class="row align-items-center up-and-down" id="below_del">
                    <div class="col-12 col-lg-8 pt-8 pb-8" style="display: flex; gap: 16px;">
                        <img src="https://ramaeri.com/storage/app/public/images/Group1.png" alt="Protection Icon"
                            class="protection-icon" style="width:30px; height:27px;">
                        <p class="mb-0 hand-heading">100% Purchase Protection</p>
                    </div>

                    <div class="col-12 col-lg-4 pt-8 pb-8 down-and-up">
                                <!-- onclick="thankyou()" -->
                                <button type="submit" class="hand-button">
                                    Continue
                                    <img src="https://ramaeri.com/storage/app/public/images/Component1.png"
                                        alt="Arrow Icon" class="btn-arrow" style="height:20px;width:20px">
                                </button>
                    </div>
                </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            </div>
        </div>
</form>
    </d>
</section>

<!-- Modal thankyou-->
<div class="modal fade" id="thanks" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content text-center p-4 p-md-5" style="color: #267a2d;">
            <div class="fireworks-icon">
                <img style="width: 100px; height:100px;" src="./assets/flower.jpg" class="img-fluid"
                    alt="Fireworks Icon">
                <h2 class="m-2" style="color: #476947;" id="thankYouModalLabel">Thank You For Order!</h2>
            </div>
            <hr class="dividernew" id="hrLine">
            <p class="additional-text m-2">Order has been placed Successfully</p>
            <p>If you have any questions or queries then feel free to get in contact with us.</p>
            <p class="company-signature">All the best</p>
            <div class="company-logo">
                <img src="https://ramaeri.com/storage/app/public/images/logo.png" class="img-fluid" alt="Ramaeri Logo"
                    style="width: 128px; height: 40px;">
            </div>
            <div class="text-center continue-link mt-4" style="font-weight: 500;">
                <a href="./Products.html" style="color: #4A6437;"><span>Click Here To Continue</span></a>
            </div>
        </div>
    </div>
</div>
<!--close Modal thankyou-->

<!-- Modal usermodel-->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addressModalLabel">Select Billing Address</h5>
                <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                </button>
            </div>
            <div class="modal-body">
                <div class="address-list">
                    <div class="card mb-3">
                        <?php foreach ($productdata['alladdress'] as $key => $value) { ?>
                            <div class="card-body">
                                <input type="radio" name="address" id="address-0" value="<?php echo $value->id  ?>">
                                <label for="address0">
                                    <?= $value->building . ' ' . $value->address . '.' . $value->city . ' , ' . $value->state . ',' . $value->pincode ?></label>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Add more addresses as needed -->
                </div>
            </div>

            <div class="modal-footer">
                <!-- Trigger Button -->
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#settingsModal"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background:#4A6437;color: #fff">
                    +
                </button>
                <!-- <button class="btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background:#4A6437;color: #fff" id="addAddressBtn">+</button> -->
                <button type="button" class="btn"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background:#4A6437;color: #fff"
                   data-bs-dismiss="modal" id="applyAddressBtn">Apply Address</button>
            </div>
        </div>
    </div>
</div>
<!--Model 01 Use Diff Address Modal End-->

<!-- Modal Add New Address -->
<div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="addressModalLabel">Add New Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="addAddressForm">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="countryName" class="form-label">Email</label>
                            <input type="text" class="form-control" id="countryName" name="email"
                                value=""
                                required>

                        </div>
                        <div class="col-md-12">
                            <label for="countryName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="countryName" name="first_name"
                                value=""
                                required>

                        </div>
                        <div class="col-md-12">
                            <label for="countryName" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="countryName" name="number"
                                value=""
                                required>

                        </div>
                        <div class="col-md-12">
                            <label for="countryName" class="form-label">Country</label>
                            <input type="text" class="form-control" id="countryName" name="country"
                                value=""
                                required>

                        </div>
                        <div class="col-md-12">
                            <label for="stateName" class="form-label">State</label>
                            <select name="state" id="state-dropdown" class="form-control">
                                <option value="" selected>Select State </option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="city" class="form-label">City</label>
                             <select name="city" id="city-dropdown" class="form-control">
                                <option value="" selected>Select City</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="city" class="form-label">Building</label>
                            <input type="text" class="form-control" id="city" name="building"
                                value=""
                                required>
                        </div>
                        <div class="col-md-12">
                            <label for="city" class="form-label">Street</label>
                            <input type="text" class="form-control" id="city" name="street"
                                value=""
                                required>
                        </div>
                        <div class="col-md-12">
                            <label for="city" class="form-label">Landmark</label>
                            <input type="text" class="form-control" id="city" name="landmark"
                                value=""
                                required>
                        </div>
                        <div class="col-md-12">
                            <label for="zip" class="form-label">PinCode</label>
                            <input type="text" class="form-control" id="zip" name="pincode"
                                value=""
                                required>
                        </div>
                        <div class="col-12">
                            <label for="addressLine" class="form-label">Address</label>
                            <input type="textArea" class="form-control" id="addressLine" name="address"
                                value=""
                                required>
                        </div>

                    </div>

                    <div class="mt-4 text-end">
                        <button type="submit" class="btn saveAddressBtn"
                            style="color: #fff; background-color: #28a745;">Save Address</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!--Model 01 Add New Address Modal End-->

<?php echo $this->section('script'); ?>
<?php echo view('common_script/countryStateCity', ['stateid' => 'state-dropdown', 'cityid' => 'city-dropdown', 'selectedstate' => 'selectedstate', 'selectedcity' => 'selectedcity']); ?>
<script>
$(document).ready(function () {
        $("#final_order").submit(function (e) {
            e.preventDefault();
            const form = document.getElementById("final_order");
            let formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?= base_URL('final-order') ?>",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#final_order").val("Please Wait...");
                },
                success: function (response) {
                    if (response.status === 'success') {
                         thankyou();
                        toastr.success(response.message || "Profile updated successfully!");
                        if (response.locationChange) {
                            // setTimeout(() => {
                            //     location.href = '<?= base_url('order') ?>';
                            // }, 2000);
                        }

                    } else if (response.status === 'error') {
                        toastr.error(response.message || "An error occurred!");
                    }
                },
                error: function () {
                    toastr.error("An unexpected error occurred!");
                    $("#final_order").val("Save & Close");
                }
            });
        })
    })

    function joinaddtocartss(arrayhere, divID, baseurl) {
        if (arrayhere.length > 0) {
            let cartcount = arrayhere.length;
            let totalprice = 0;

            let result = arrayhere.map((details, index) => {
                totalprice += details.pro_qty * details.price;
                return `
                <div class="cart-item-inner w-100 datacart">
                    <div>
                        <img src="${baseurl}/writable/${details.image}" alt="Grape Glow Facewash" class="img-fluid">
                    </div>
                    <div class="w-100">
                        <h5 class="cart-item-inner-heading">${details.name}</h5>
                        <div class="add-item pb-5">
                            <button data-decid="${details.id}" class="decrease dec">-</button>
                            <input type="hidden" readonly value="${details.pro_id}" class="proids">
                            <input type="text" readonly value="${details.pro_qty}" class="cart-input" id="qnt_${index}">
                            <button  data-incid="${details.id}" class="decrease inc" >+</button>
                        </div>
                        <div class="price-container pb-5">
                            <p class="price">
                                ₹ ${details.price}
                            </p>
                            <button data-deleteid="${details.id}" class="deleteitemcart" type="button">
                                <img src="https://ramaeri.com/storage/app/public/images/trash1.png" class="img-fluid" style="width:16.77px;height:21.33px">
                            </button>
                        </div>
                    </div>
                </div>
            `;
            });
            const itemshtml = result.join('');
            $(divID).html(itemshtml);
            $('#cartcounts').text(cartcount);
            $('#carttotals').text(totalprice);
            $('#totalsamount').text(totalprice);
        } else {
            $(divID).html('');
            $('#cartcounts').text(0);
            $('#carttotals').text(0);
        }
    }
    function thankyou() {
        $('#thanks').modal('show');
    }

    $(document).ready(function () {
        $("#addAddressForm").submit(function (e) {
            e.preventDefault();
            const form = document.getElementById("addAddressForm");
            let formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?= base_URL('update-order-address') ?>",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#addAddressForm").val("Please Wait...");
                },
                success: function (response) {
                    if (response.status === 'success') {
                        // console.log(response.data.user);
                        toastr.success(response.message || "Profile updated successfully!");
                        if (response.locationChange) {
                            setTimeout(() => {
                                location.href = '<?= base_url('order') ?>';
                            }, 2000);
                        }

                    } else if (response.status === 'error') {
                        toastr.error(response.message || "An error occurred!");
                    }
                },
                error: function () {
                    toastr.error("An unexpected error occurred!");
                    $("#addAddressForm").val("Save & Close");
                }
            });
        })
    })

</script>
<script>
$(document).ready(function () {
    $('#applyAddressBtn').click(function () {
        var selectedRadio = $('input[name="address"]:checked');
        var selectedAddressId = selectedRadio.val();
        var fullAddress = selectedRadio.data('fulladdress');

        if (selectedAddressId) {
            $('#selected_address_id').val(selectedAddressId); // Store the address ID
            $('#billing_address').val(fullAddress); // Show full address in text input
            $('#addressModal').modal('hide'); // Close the modal
        } else {
            alert('Please select an address');
        }
    });
});
</script>
<script>
    // When one is checked, uncheck the other
    document.getElementById('same-address').addEventListener('change', function () {
        if (this.checked) {
            document.getElementById('different-address').checked = false;
        }
    });

    document.getElementById('different-address').addEventListener('change', function () {
        if (this.checked) {
            document.getElementById('same-address').checked = false;
        }
    });
</script>
<?php echo $this->endSection(); ?>