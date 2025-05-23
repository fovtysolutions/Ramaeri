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
                        <li><a href="<?php echo base_url('carts') ?>" class="cart">Cart</a></li>
                        <li><a href="<?php echo base_url('info')?>">Information</a></li>
                        <li><a href="<?php echo base_url('order') ?>" class="cart">Payment</a></li>
                    </ul>
                </div>
                <form id="order-information" method="POST">
                    <div class="row">
                        <input type="hidden" name="address_id" id="" value="<?php print_r($productdata['address']->id)?>">
                        <h3 class="checkout-heading">Contact</h3>
                        <div class="form-group col-lg-12">
                            <input type="email"  name="email" placeholder="Enter email ID or phone number"
                                autocomplete="off" class="float-input mb-5" value="<?php print_r($productdata['address']->email)?>" required >
                            <label for="email" class="float-label">Enter email ID or phone number</label>
                        </div>
                        <h3 class="checkout-heading">Shipping address</h3>

                        <div class="form-group col-lg-6">
                            <input type="text" name="first_name" placeholder="First name" value="<?php print_r($productdata['address']->first_name)?>"
                                autocomplete="off" class="float-input mb-5" required>
                            <label for="name" class="float-label">First name</label>
                        </div>

                        <div class="form-group col-lg-6">
                            <input type="text" name="last_name" placeholder="Second name" value="<?php print_r($productdata['address']->last_name)?>" autocomplete="off"
                                class="float-input mb-5">
                            <label for="second_name" class="float-label">Second name</label>
                        </div>

                        <div class="form-group col-lg-12">
                            <input type="number" name="number" id="mobile" placeholder="Mobile" autocomplete="off"
                                class="float-input mb-5" maxlength="10" value="<?php print_r($productdata['address']->number)?>">
                            <label for="mobile" class="float-label">Mobile</label>
                            <small class="error-message" style="display: none; color: red;">Please enter a valid
                                10-digit mobile number.</small>
                        </div>

                        <div class="form-group col-lg-12">
                            <input type="text" name="building" placeholder="Enter your building" value="<?php print_r($productdata['address']->building)?>"
                                autocomplete="off" class="float-input mb-5">
                            <label for="building" class="float-label">Enter your building</label>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="address" placeholder="Enter your Address" value="<?php print_r($productdata['address']->address)?>"
                                autocomplete="off" class="float-input mb-5">
                            <label for="building" class="float-label">Address</label>
                        </div>

                        <div class="form-group col-lg-12">
                            <input type="text" name="street" placeholder="Enter your street" value="<?php print_r($productdata['address']->street)?>" autocomplete="off"
                                class="float-input mb-5">
                            <label for="street" class="float-label">Enter your street</label>
                        </div>

                        <div class="form-group col-lg-12">
                            <input type="number" name="landmark" placeholder="Enter your landmark" value="<?php print_r($productdata['address']->landmark)?>"
                                autocomplete="off" class="float-input mb-5">
                            <label for="landmark" class="float-label">Enter your landmark</label>
                        </div>


                        <div class="form-group col-lg-4">
                            <input id="pincodedata" oninput="enforcePincodeLength(event)" type="number" name="pincode"
                                placeholder="Pincode" autocomplete="off" class="float-input mb-5" value="<?php print_r($productdata['address']->pincode)?>">
                            <label for="pincode" class="float-label">Pincode</label>
                        </div>

                        <div class="form-group col-lg-4 ">
                            <select name="state" id="state-dropdown" class="mb-5">
                                <option value="" selected>Select State </option>
                            </select>
                            <label for="state_id" class="float-label">State</label>
                        </div>
                        <div class="form-group col-lg-4 ">
                            <select name="city" id="city-dropdown" class="mb-5">
                                <option value="" selected>Select City</option>
                            </select>
                            <label for="state_id" class="float-label">City</label>
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
                        <div class="d-flex justify-content-between align-items-center up-and-down"
                            style="padding:80px 12px 90px 12px" id="showdisplayagain">
                            <div class="down-and-up" style="display: flex;gap: 16px;">
                                <img src="https://ramaeri.com/storage/app/public/images/Group1.png"
                                    alt="Protection Icon" class="protection-icon"
                                    style="width:                       30px;height: 27px;">
                                <p class="mb-0 hand-heading">100% Purchase Protection</p>
                            </div>

                            <button type="submit" class="hand-button">
                                Continue
                                <img src="https://ramaeri.com/storage/app/public/images/Component1.png" alt="Arrow Icon"
                                    class="btn-arrow">
                            </button>
                        </div>

                    </div>
                </form>



            </div>

            <div class="col-lg-2 col-md-12"></div>

            <!-- Right Cart Section -->
            <div class="col-lg-5 col-md-12 cart-section cart-checkout" style="background-color: #e9efe4; border-top-left-radius: 4rem;padding: 4rem;">
                <span class="cart-heading">Add to cart (<span id="cartcounts"></span>)</span>

                <div class="cart-item mb-3 pt-8 scroll-checkout" id="cartcheckout">
                    
                </div>
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
            </div>
        </div>
    </div>
</section>
<!-- Checkout Form End -->

<?php echo $this->section('script'); ?>
<?php echo view('common_script/countryStateCity', ['stateid' => 'state-dropdown', 'cityid' => 'city-dropdown', 'selectedstate' => 'selectedstate', 'selectedcity' => 'selectedcity']); ?>
<script>

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
    } else {
        $(divID).html('');
        $('#cartcounts').text(0);
        $('#carttotals').text(0);
    }
    }

</script>
<script>
    $(document).ready(function () {
        $("#order-information").submit(function (e) {
            e.preventDefault();
            const form = document.getElementById("order-information");
            let formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?= base_URL('address-add') ?>",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#order-information").val("Please Wait...");
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
                    $("#order-information").val("Save & Close");
                }
            });
        })
    })
</script>
<script>
    document.getElementById("order-information").addEventListener("submit", function (event) {
        const saveInfo = document.getElementById("saveInfo").checked;
        const readPolicy = document.getElementById("readPolicy").checked;

        if (!saveInfo || !readPolicy) {
            event.preventDefault(); // form ko submit hone se rokta hai
            alert("Please check both 'Save this information' and 'I've read the privacy policy' to continue.");
        }
    });
</script>
<script src="<?php echo base_url('assets/public/js/checkout.js') ?>"></script>
<?php echo $this->endSection(); ?>