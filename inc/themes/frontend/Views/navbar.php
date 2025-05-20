<?php 
    $session = session();
    $uid = $session->get('uid');
    $cartcontroller = new  \Core\Home\Models\FronthomeModel;
    $cartdata = $cartcontroller->getcarts($uid);

?>
<nav class="navbar navbar_top">
    <div class="col-xxl-8 col-xl-8 col-md-8 col-4 order-lg-2 d-none d-sm-none d-md-none d-lg-block">
        <div class="gshop-navbar-left d-flex align-items-center position-relative justify-content-center">
            <nav class="gshop-navmenu ms-3  d-xl-block">
                <ul class="d-flex align-itmes-center">
                    <li><a class="underlinemenu home-menu" href="<?php echo base_url('/') ?>">Home</a></li>
                    <li><a class=" home-menu" href="<?php echo base_url('products') ?>">Products</a></li>
                    <li><a class=" home-menu" href="<?php echo base_url('care') ?>">Care</a></li>
                    <li><a class=" home-menu" href="<?php echo base_url('pages/about-us') ?>">About Us</a></li>
                    <li><a class=" home-menu" href="<?php echo base_url('pages/contact-us') ?>">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-2 col-md-2 col-4 order-2 order-lg-1 text-md-center text-lg-left">
        <a href="<?php echo base_url() ?>" class="logo"><img src="https://www.ramaeri.com/storage/app/public/images/logo.png" alt=" logo" class="logo-img img-fluid"></a>
    </div>
    <div class="col-xxl-2 col-xl-2 col-md-1 col-3 order-3 order-sm-3 order-md-3 order-lg-3 ">
        <div class="position-relative">
            <div class="d-flex align-items-center justify-content-end gshop-header-icons ms-3">
                <div class="gshop-header-user position-relative">
                    <button type="button" class="header-icon">
                        <img src="https://www.ramaeri.com/storage/app/public/images/user-image.png" alt="user"
                            class="icon-size" style="width:30px">
                    </button>
                    <div class="user-menu-wrapper">
                        <ul class="user-menu">
                            <?php 
                                $session = session();
                                $sessionuid = $session->get('uid');
                                if(!$sessionuid) {
                            ?>
                                <!-- Shown only when NOT logged in -->
                                <li id="signInMenu">
                                    <a href="javascript:void(0);" onclick="loginmodel()">
                                        <i class="fas fa-sign-in-alt"></i> Sign In
                                    </a>
                                </li>
                            <?php }else{ ?>
                                <!-- Shown only when logged in -->
                                <li id="profileMenu">
                                    <a href="<?= base_url('profile') ?>">
                                        <i class="fas fa-user"></i> My Profile
                                    </a>
                                </li>
                                <li id="profileMenu">
                                    <a href="<?= base_url('logout') ?>">
                                        <i class="fas fa-user"></i> logout
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                        <div id="iframeBackdrop"></div>
                        <iframe id="loginFrame" name="loginFrame"></iframe>
                    </div>
                </div>
                <button class="header-icon cartButton"  type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRightshowproduct" aria-controls="offcanvasRight"> <img
                        src="https://www.ramaeri.com/storage/app/public/images/cart.png" alt=" logo" class="icon-size"
                        style="width:30px" id="opencart"><span  class="cart-counter badge rounded-circle p-0 " style="background-color:#4a6437;" id="iconcount"></span>
                </button>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightshowproduct"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-body">
                    <div class="cart-offcanvas-content" id="cartarea">
                            
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-4 col-md-2 col-3 d-block d-sm-block d-md-block d-lg-none d-xl-none order-1"
                style="margin-left:-1rem">
                <button class="offcanvas-toggle ms-3">
                    <svg fill="#4A6437" class="img-bar" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M912 192H328c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h584c4.4 0 8-3.6 8-8v-56c0-4.4-3.6-8-8-8zm0 284H328c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h584c4.4 0 8-3.6 8-8v-56c0-4.4-3.6-8-8-8zm0 284H328c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h584c4.4 0 8-3.6 8-8v-56c0-4.4-3.6-8-8-8zM104 228a56 56 0 1 0 112 0 56 56 0 1 0-112 0zm0 284a56 56 0 1 0 112 0 56 56 0 1 0-112 0zm0 284a56 56 0 1 0 112 0 56 56 0 1 0-112 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<?php echo $this->section('script'); ?>
<script>
    $(document).ready(function(){
        let base_url = '<?php echo base_url(); ?>';
        let mainCartData = <?php echo json_encode(isset($cartdata) ? $cartdata : []); ?>;
        const paramsElement = $('#addtocartdata');
        console.log(mainCartData);
        joinaddtocart(mainCartData, paramsElement);
        if (typeof joinaddtocarts === 'function') {
            joinaddtocarts(mainCartData, '#cartadd', base_url);
        }
        $('.addtocart').click(function(){
            const proId = $(this).data('id');
            addToCartPro(proId, 1);
        })

        $(document).on("click", ".inc", function () {
            let row = $(this).closest('.datacart');
            let nowvalue = parseInt(row.find('.quantity').val()) || 0;
            const proid = parseInt(row.find('.proids').val()) || 0;
            let addvalue = nowvalue + 1;
            row.find('.quantity').val(addvalue);
            addToCartPro(proid, addvalue);
        });

        $(document).on("click", ".dec", function () {
            let row = $(this).closest('.datacart');
            let nowvalue = parseInt(row.find('.quantity').val()) || 0;
            const proid = parseInt(row.find('.proids').val()) || 0;
            let newvalue = nowvalue > 1 ? nowvalue - 1 : 1; 
            row.find('.quantity').val(newvalue);
            addToCartPro(proid, newvalue);
        });

        $(document).on("click", ".deleteitemcart", function () {
            let cartid = $(this).data('deleteid');
            $.ajax({
                url: '<?=base_url('deleteitem')?>',
                type: 'POST',
                data: {
                    'delete': cartid,
                },
                success: function (response) {
                    if(response.status == 'success') {
                        joinaddtocart(response.data, paramsElement);
                        if (typeof joinaddtocarts === 'function') {
                            joinaddtocarts(response.data, '#cartadd', base_url);
                        }
                        toastr.success(response.message);
                    }else{
                        toastr.error(response.message);
                        console.warn(response.message);
                    }
                },
                error: function (xhr) {
                    toastr.error(xhr.responseText);
                }
            });
        });

        function addToCartPro(productid, quantity) {
            $.ajax({
                url: '<?=base_url('add-to-cart')?>',
                type: 'POST',
                data: {
                    'pro_id': productid,
                    'pro_qty': quantity
                },
                success: function (response) {
                    if(response.status == 'success') {
                        $('#opencart').click();
                        joinaddtocart(response.data, paramsElement);
                        if (typeof joinaddtocarts === 'function') {
                            joinaddtocarts(response.data, '#cartadd', base_url);
                        }
                        toastr.success(response.message,'', { closeButton: true });
                    }else if(response.status == 'update') {
                        joinaddtocart(response.data, paramsElement);
                        if (typeof joinaddtocarts === 'function') {
                            joinaddtocarts(response.data, '#cartadd', base_url);
                        }
                    }else{
                        toastr.error(response.message);
                        console.warn(response.message);
                    }
                },
                error: function (xhr) {
                    toastr.error(xhr.responseText);
                }
            });
        }

        function joinaddtocart(arrayhere, divID) {
            if (arrayhere.length > 0) {
                let cartcount = arrayhere.length;
                let totalprice = 0;

                let result = arrayhere.map((details, index) => {
                    totalprice += details.pro_qty * details.price;

                    return `
                        <li class="d-flex pb-3 datacart">
                            <div class="thumb-wrapper">
                                <img src="${base_url}/writable/${details.image}" alt="Product" class="cart-image-short">
                            </div>
                            <div class="items-content ms-3 w-100">
                                <a href="https://ramaeri.com/products/ramaeri-grapeglow-facewash">
                                    <h6 class="mb-0 cart-heading-short">${details.name}</h6>
                                </a>
                                <div class="d-flex pt-2" style="gap: 8px;">
                                    <button data-incid="${details.id}" class="decrease dec">-</button>
                                    <input type="hidden" readonly value="${details.pro_id}" class="proids">
                                    <input type="text" readonly value="${details.pro_qty}" class="cart-input quantity" id="qnt_${index}">
                                    <button data-decid="${details.id}" class="decrease inc">+</button>
                                </div>
                                <div class="products_meta pt-2 d-flex align-items-center" style="justify-content:space-between;">
                                    <span class="price fw-semibold">₹ ${details.price}</span>
                                    <button class="remove_cart_btn ms-2 cart-remove deleteitemcart" data-deleteid="${details.id}">
                                        <img src="https://ramaeri.com/storage/app/public/images/trash1.png" class="img-fluid" style="width:16.77px; height:21.33px">
                                    </button>
                                </div>
                            </div>
                        </li>
                    `;
                });
                const itemshtml = result.join('');
                notemptycart(itemshtml, cartcount);
                $('#iconcount').text(cartcount);
                $('#carttotal').text(totalprice);
            } else {
                emptycart()
                $('#cartcount').text(0);
                $('#carttotal').text(0);
                $('#iconcount').text(0);
            }
        }

        function emptycart() {
            let html = 
            `
            <div style="padding-top:15px">
                <span class="off-canva-heading pt-5 pb-5">Add to cart (0)</span>
                <div class="position-absolute fixed-bottom mb-10 col-lg-12">
                    <p class="d-flex justify-content-center align-items-center"
                        style="color:#5681388a;">
                        <span class="m-2">
                            <img style="width: 30px; height: 30px;"
                                src="https://www.ramaeri.com/public/images/ramaeri_cart.png"
                                alt="Image Error">
                        </span>
                        <span class="mt-2">
                            Your Cart is Empty
                        </span>
                    </p>

                    <hr class="mb-10"
                        style="border-top:2px solid #568138; margin-left:10%; margin-right:10%;">
                    <a href="${base_url}/products">
                        <button type="submit" class="hand-button">
                            Add Products
                            <img src="https://www.ramaeri.com/storage/app/public/images/Component1.png "
                                alt="Arrow Icon" class="btn-arrow" style="width:20px; height:20px;">
                        </button>
                    </a>
                </div>
            </div>
            `;
            $('#cartarea').empty('');
            $('#cartarea').html(html);
        }

        function notemptycart(cartitem, count) {
            let html = `
            <div style="padding-top:15px">
                <span class="off-canva-heading pt-5 pb-5">Add to cart (${count})</span>
                <ul class="pt-12 scroll-checkout" id="addtocartdata">
                    ${cartitem}
                </ul>
                <div class="row align-items-center justify-content-between"
                    style="border-top:1px solid #4A643780;">
                    <div class="d-flex align-items-center justify-content-between pt-5">
                        <h6 class="mb-0 price-total">Total:</h6>
                        <span class="sub-total-price">₹ <span id="carttotal"></span></span>
                    </div>
                    <div class="col-12 pt-8">
                        <a href="${base_url}/carts">
                            <button type="submit" class="hand-button"> Continue
                                <img src="https://ramaeri.com/storage/app/public/images/Component1.png" alt="Arrow Icon" class="btn-arrow" style="width:20px; height:20px;">
                            </button>
                        </a>
                    </div>
                    <div class="col-12 pt-8 pb-8" style="display: flex; gap: 16px; justify-content:center;">
                        <img src="https://ramaeri.com/storage/app/public/images/Group1.png" alt="Protection Icon" class="protection-icon" style="width:30px; height:27px;">
                        <p class="mb-0 hand-heading">100% Purchase Protection</p>
                    </div>
                </div>
            </div>
            `;
            $('#cartarea').empty('');
            $('#cartarea').html(html);
        }
    })
</script>
<?php echo $this->endSection(); ?>