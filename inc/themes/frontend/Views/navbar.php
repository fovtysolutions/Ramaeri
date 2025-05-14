<nav class="navbar navbar_top">
    <div class="col-xxl-8 col-xl-8 col-md-8 col-4 order-lg-2 d-none d-sm-none d-md-none d-lg-block">
        <div class="gshop-navbar-left d-flex align-items-center position-relative justify-content-center">
            <nav class="gshop-navmenu ms-3  d-xl-block">
                <ul class="d-flex align-itmes-center">

                    <li><a class="underlinemenu home-menu" href="<?php echo base_url('/') ?>">Home</a></li>
                    <li><a class=" home-menu" href="<?php echo base_url('all-products') ?>">Products</a></li>
                    <li><a class=" home-menu" href="<?php echo base_url('care') ?>">Care</a></li>
                    <li><a class=" home-menu" href="<?php echo base_url('pages/about-us') ?>">About Us</a></li>
                    <li><a class=" home-menu" href="<?php echo base_url('pages/contact-us') ?>">Contact Us</a></li>

                </ul>
            </nav>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-2 col-md-2 col-4 order-2 order-lg-1 text-md-center text-lg-left">
        <a href="./Home.html" class="logo"><img src="https://www.ramaeri.com/storage/app/public/images/logo.png"
                alt=" logo" class="logo-img img-fluid"></a>
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
                            <li>
                                <a href="javascript:void(0);" target="loginFrame" id="loginFrame"
                                    onclick="loginmodel()">
                                    <i class="fas fa-sign-out-alt"></i> Sign In
                                </a>
                            </li>
                        </ul>
                        <div id="iframeBackdrop"></div>
                        <iframe id="loginFrame" name="loginFrame"></iframe>

                    </div>
                </div>
                <div class="gshop-header-cart position-relative">
                    <button type="button" class="header-icon cartButton" id="hidescroll">
                        <img src="https://www.ramaeri.com/storage/app/public/images/cart.png" alt=" logo"
                            class="icon-size" style="width:30px">
                        <span class="cart-counter badge rounded-circle p-0 d-none"
                            style="background-color:#4a6437">0</span>
                    </button>
                    <div class="cart-offcanvas cart-navbar-wrapper" id="cartOffcanvas">
                        <div class="cart-offcanvas-content">
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
                                    <a href="./Products.html">
                                        <button type="submit" class="hand-button">
                                            Add Products
                                            <img src="https://www.ramaeri.com/storage/app/public/images/Component1.png "
                                                alt="Arrow Icon" class="btn-arrow" style="width:20px; height:20px;">
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div> <!--cart listing-->
                    </div>
                </div>
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


</nav>