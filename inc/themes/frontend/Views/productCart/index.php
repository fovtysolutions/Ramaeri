<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/product_cart.css'); ?>">
<?php echo $this->endSection(); ?>
<!--cart List Items and total payment-->
<section class="categories-section">

    <div class="cart-section">
        <div aria-label="breadcrumbss">
            <ul class="breadcrumbss">
                <li><a href="#">Cart</a></li>
                <li><a href="#" class="cart">Information</a></li>
                <li><a href="#" class="cart">Payment</a></li>
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
            <tbody class="cart-listing">
                <tr style="border-top: 1px solid #C2D0B7;">
                    <td class="product">

                        <img src="https://ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png"
                            alt="Grape Glow Facewash" class="img-fluid">
                        <span class="cart-heading">Grape Glow Facewash</span>
                    </td>
                    <td id='price899' style="font-weight:500">

                        ₹1,300.00
                    </td>
                    <td class="quantity-control">
                        <div class="d-flex justify-content-center" style="gap: 8px;">
                            <button class="decrease" onclick="handleCartItem('decrease', 899)">-</button>
                            <input type="text" id='qty899' readonly value="1">
                            <button class="increase" onclick="handleCartItem('increase', 899)">+</button>
                        </div>
                    </td>
                    <td id='total899'>

                        ₹1,300.00
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="footer-section">
            <div class="protection">
                <img src="https://ramaeri.com/storage/app/public/images/Group1.png" alt="Protection Icon"
                    class="protection-icon">
                <span>100% Purchase Protection</span>
            </div>
            <div>
                <a href="./Info.html">
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