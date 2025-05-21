<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/product_cart.css'); ?>">
<?php echo $this->endSection(); ?>
<!--cart List Items and total payment-->
<section class="categories-section">
    <div class="cart-section">
        <div aria-label="breadcrumbss">
            <ul class="breadcrumbss">
                <li><a href="<?php echo base_url('carts') ?>">Cart</a></li>
                <li><a href="<?php echo base_url('info') ?>" class="cart">Information</a></li>
                <li><a href="<?php echo base_url('order') ?>" class="cart">Payment</a></li>
            </ul>
        </div>


        <table class="cart-table nothing">
            <thead>
                <tr>
                    <th style="text-align:left;" class="col-lg-4">Product</th>

                    <th class="col-lg-3 col-1">Price</th>
                    <th class="col-lg-2 col-4">Quantity</th>
                    <th class="col-lg-3 col-3">Subtotal</th>
                    <!-- <th>Delete</th> -->
                </tr>
            </thead>
            <tbody class="cart-listing" id="cartadd">
                
            </tbody>
        </table>

        <div class="footer-section">
            <div class="protection">
                <img src="https://ramaeri.com/storage/app/public/images/Group1.png" alt="Protection Icon"
                    class="protection-icon">
                <span>100% Purchase Protection</span>
            </div>
            <div>
                <a href="<?php echo base_url('info') ?>">
                    <button type="submit" class="continues-button">Continue
                        <img src="https://www.ramaeri.com/storage/app/public/images/Component1.png" alt="Arrow Icon"
                            class="btn-arrow">
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- modals -->
<div class="modal fade" id="quickview_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content min-h-400">
            <div class="modal-body h-100 bg-white">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="data-preloader-wrapper d-flex align-items-center justify-content-center min-h-400">
                    <div class="" role="status">
                        <span class="sr-only"></span>
                    </div>
                </div>

                <div class="product-info">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- modals -->
<?php echo $this->section('script'); ?>
<script>

function joinaddtocarts(arrayhere, divID, baseurl) {
    if (arrayhere.length > 0) {
        let cartcount = arrayhere.length;

        let result = arrayhere.map((details, index) => {
            return `
                    <tr style="border-top: 1px solid #C2D0B7;" class="datacart">
                    <td class="product">
                        <img src="${baseurl}/writable/${details.image}" alt="Grape Glow Facewash"
                            class="img-fluid">
                        <span class="cart-heading">${details.name}</span>
                    </td>
                    <td id='price899' style="font-weight:500">
                        ₹ ${details.price}
                    </td>
                    <td class="quantity-control">
                        <div class="d-flex justify-content-center" style="gap: 8px;">
                            <button data-decid="${details.id}" class="change-btn dec" data-type="decrease">-</button>
                            <input type="hidden" readonly value="${details.pro_id}" class="proids" name="pro_id ">
                            <input type="text" readonly value="${details.pro_qty}" class="cart-input quantity" id="qnt_${index}">
                            <button data-incid="${details.id}" class="change-btn inc">+</button>
                        </div>
                    </td>
                    <td>
                        ₹ ${details.pro_qty * details.price}
                    </td>
                </tr>
            `;
        });
        const itemshtml = result.join('');
        $(divID).html(itemshtml);
    } else {
        $(divID).html('');
    }
}

</script>
<script>
    const decreaseBtn = document.getElementById("decrease-btn");
    const increaseBtn = document.getElementById("increase-btn");
    const quantityEl = document.getElementById("quantity");
    console.log(increaseBtn);
    let quantity = 1;

    increaseBtn.addEventListener("click", () => {
        quantity++;
        quantityEl.textContent = quantity;
    });

    decreaseBtn.addEventListener("click", () => {
        if (quantity > 1) {
            quantity--;
            quantityEl.textContent = quantity;
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var cart_nav = document.getElementById('cartOffcanvas');
        var modalOverlay = document.getElementById('modalOverlay');
        var body = document.body;
        var button = document.getElementById('hidescroll');

        function disableScroll() {
            body.style.overflow = "hidden";
            cart_nav.style.boxShadow = "-20px 3px 9px 5000px rgba(0, 0, 0, 0.2), 0 4px 6px rgba(0, 0, 0, 0.1)";
        }

        function enableScroll() {
            body.style.overflow = "";
            cart_nav.style.boxShadow = "";
        }

        button.addEventListener('click', function () {
            if (cart_nav.classList.contains('open')) {
                disableScroll();
            } else {
                enableScroll();
            }
        });

        body.addEventListener('click', function (event) {
            if (!cart_nav.contains(event.target) && cart_nav.classList.contains('open')) {
                cart_nav.classList.remove('open');
                enableScroll();
            }
        });
    });
</script> <!--cart listing-->
<?php echo $this->endSection(); ?>