<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/product.css'); ?>">
<?php echo $this->endSection(); ?>
<section>
    <div class="banner">
    </div>
</section>

<?php // print_r($productdata['banner']) ?>
<?php // foreach ($productdata['banner'] as $key => $value) { ?>
<!-- <img src="<?php // echo base_url('./writable'). '/' .$value->home_image ?>" alt="fire icon" >-->
           
<?php // } ?>

<section class="categories-section pt-25 pb-20">
    <div class="text-center mb-15">
        <p class="customer-para mb-0">Customer favourites</p>
        <span class="customer-head">In The Spotlight</span>

    </div>
    <!-- all product  -->
     <?php if (isset($productdata['product_details'])): ?>
    <div class="container" style="padding:0px!important">
        <div class="slider" data-slider>
            <ul class="slider__track" data-slider-track>
                 <?php foreach ($productdata['product_details']  as $key => $value) { ?>
                <li>
                    <div>
                        <a href="<?php echo base_url('products').'/'.$value->id ?>" style="all: unset;">
                            <div class="slide"
                                style="position:relative; cursor:pointer; background-image: url('<?php echo base_url('./writable'. '/' .$value->image); ?>')">


                                <span class="text_overlay_content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00"
                                        class="bi bi-star-half" viewBox="0 0 16 16">
                                        <path
                                            d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                                    </svg>
                                    <span style="position:relative;top:3px"><?php echo $value->rating ?></span>
                                </span>

                            </div>
                        </a>


                        <a href="./Products.html" style="all: unset;">
                            <h6 class="slide-heading"
                                style="cursor:pointer; text-align:left;font-size: 20px !important;"><?php echo $value->name ?>
                            </h6>
                        </a>

                        <div class="slide-sub-heading">
                            <div class="col-9 discription_update">
                                <span class="font-for-mobile"
                                    stye="font-weight:400;line-height:19.5px;color:#666666"><?php echo $value->short_description ?></span>
                            </div>
                            <div class="price_argest col-3" style="text-align:right">
                                <span class="rupee-icon">₹</span>
                                <span class="priceings"><?php echo $value->price ?></span>

                            </div>
                        </div>

                        <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed"
                            autocomplete="off">
                        <form action="https://www.ramaeri.com/add-to-cart" method="POST"
                            class="direct-add-to-cart-form">
                            <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed">
                            <input type="hidden" name="product_variation_id" value="33">
                            <input type="hidden" value="1" name="quantity">

                            <button href="javascript:void(0);" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRightshowproduct" aria-controls="offcanvasRight"
                                class="add-to-cart-button direct-add-to-cart-btn add-to-cart-text cartButton">
                                Add to Cart &nbsp;
                            </button>
                        </form>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>

    <!-- category product -->
     <?php if (isset($productdata['categoryId'])): ?>
    <div class="container" style="padding:0px!important">
        <div class="slider" data-slider>
            <ul class="slider__track" data-slider-track>
                 <?php foreach ($productdata['categoryId']  as $key => $value) { ?>
                <li>
                    <div>
                        <a href="<?php echo base_url('products').'/'.$value->id ?>" style="all: unset;">
                            <div class="slide"
                                style="position:relative; cursor:pointer; background-image: url('<?php echo base_url('./writable'. '/' .$value->image); ?>')">


                                <span class="text_overlay_content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00"
                                        class="bi bi-star-half" viewBox="0 0 16 16">
                                        <path
                                            d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                                    </svg>
                                    <span style="position:relative;top:3px"><?php echo $value->rating ?></span>
                                </span>

                            </div>
                        </a>


                        <a href="./Products.html" style="all: unset;">
                            <h6 class="slide-heading"
                                style="cursor:pointer; text-align:left;font-size: 20px !important;"><?php echo $value->name ?>
                            </h6>
                        </a>

                        <div class="slide-sub-heading">
                            <div class="col-9 discription_update">
                                <span class="font-for-mobile"
                                    stye="font-weight:400;line-height:19.5px;color:#666666"><?php echo $value->short_description ?></span>
                            </div>
                            <div class="price_argest col-3" style="text-align:right">
                                <span class="rupee-icon">₹</span>
                                <span class="priceings"><?php echo $value->price ?></span>

                            </div>
                        </div>

                        <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed"
                            autocomplete="off">
                        <form action="https://www.ramaeri.com/add-to-cart" method="POST"
                            class="direct-add-to-cart-form">
                            <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed">
                            <input type="hidden" name="product_variation_id" value="33">
                            <input type="hidden" value="1" name="quantity">

                            <button href="javascript:void(0);" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRightshowproduct" aria-controls="offcanvasRight"
                                class="add-to-cart-button direct-add-to-cart-btn add-to-cart-text cartButton">
                                Add to Cart &nbsp;
                            </button>
                        </form>
                    </div>
                </li>
                <?php  } ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
</section>

<section class="pt-5 pb-20" style="background-color:#F8FFF3;">
    <div class="banner">
    </div>
</section>
<?php // _ec($this->include('Frontend\Views\video'), false) ?>

<section class="categories-section" style="padding-top:3rem">
    <div class="tab-section1">
        <img src="https://www.ramaeri.com/storage/app/public/images/logo-f.png" alt="fire icon" class="feedback-title">
    </div>
    <div class="swiper testimonial-slider">
        <div class="swiper-wrapper padding-wrapper">

            <!--code commented form here-->

            <!--code commentation end-->
            <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/SiTMRdbredgqpaZrCWgoVKqg2QcVEVxaxfmbWtYp.jpg"
                            alt="Image 1" style="margin-right: 20px;" class="circular-image" />
                        <div class="text-content">
                            <h3>Sneha R., Chief Marketing Officer</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>

                    <div onclick="" class="testimonial-columns" style="cursor:pointer;">
                        <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png"
                            alt="Image 2" style="    height: 109px; width: 90px; " />
                        <div class="text-contents">
                            <p class="serum-head">Between city pollution and intense screen-exposure, my skin felt like
                                it had given up. But Ramaeri changed everything. The products are light and
                                natural, and they really work. My skin feels smooth and shiny, and I do not suffer from
                                my weekend makeup woes again!</p>
                            <a href="https://www.ramaeri.com/products/ramaeri-grapeglow-facewash"
                                class="testimonial-shop-now">Shop Now >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/Fmf2w3od7EwNWtxbZEWi6Z2jlKCJNc5PCSwSljq8.jpg"
                            alt="Image 1" style="margin-right: 20px;" class="circular-image" />
                        <div class="text-content">
                            <h3>Arjun M., IT Consultant</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                    <div onclick="" class="testimonial-columns" style="cursor:pointer;">
                        <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png"
                            alt="Image 2" style="    height: 109px; width: 90px; " />
                        <div class="text-contents">
                            <p class="serum-head">&quot;Sitting in air-conditioned rooms and staring at screens all day
                                really hurt my skin—it was dry, dull, and lifeless. A friend told me about Ramaeri, and
                                it made such a big difference. I&#039;m in love with it.</p>
                            <a href="https://www.ramaeri.com/products/ramaeri-sea-hydration-face-moisturiser"
                                class="testimonial-shop-now">Shop Now >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/xCYygUBBC4Uyhqv6BCeMpjWttEHxacnLsZERVfYv.jpg"
                            alt="Image 1" style="margin-right: 20px;" class="circular-image" />
                        <div class="text-content">
                            <h3>Priya, HR Manager</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                    <div onclick="" class="testimonial-columns" style="cursor:pointer;">
                        <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png"
                            alt="Image 2" style="    height: 109px; width: 90px; " />
                        <div class="text-contents">
                            <p class="serum-head">I work in HR, and my days consist of meetings and long hours in harsh
                                office lighting. My skin was always dry and nothing seemed to help. Then I
                                tried Ramaeri — my skin really seemed to get its glow back! Now I don’t just look
                                comfortable; I feel it too, even after a full day of work.</p>
                            <a href="https://www.ramaeri.com/products/ramaeri-sea-hydration-face-moisturiser"
                                class="testimonial-shop-now">Shop Now >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/egno7MV7uQn298mnazwhogJf3646rVIrz4Oe4pqV.jpg"
                            alt="Image 1" style="margin-right: 20px;" class="circular-image" />
                        <div class="text-content">
                            <h3>Karan T., Financial Analyst</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                    <div onclick="" class="testimonial-columns" style="cursor:pointer;">
                        <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png"
                            alt="Image 2" style="    height: 109px; width: 90px; " />
                        <div class="text-contents">
                            <p class="serum-head">I&#039;m on the finances, so my job comes with endless hours at a desk
                                and a lot of stress. And my skin pays the price—it looked as tired, dry, and old as it
                                did. Ramaeri has been like a reset for me. My skin feels refreshed and alive again.</p>
                            <a href="https://www.ramaeri.com/products/pore-refine-face-serum"
                                class="testimonial-shop-now">Shop Now >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/Lzvl0nHEdJoNlkJ6GuDoComQEBYQb1UJOxI1QbaV.jpg"
                            alt="Image 1" style="margin-right: 20px;" class="circular-image" />
                        <div class="text-content">
                            <h3>Richa M., Team Leader</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                    <div onclick="" class="testimonial-columns" style="cursor:pointer;">
                        <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png"
                            alt="Image 2" style="    height: 109px; width: 90px; " />
                        <div class="text-contents">
                            <p class="serum-head">A team leading corporate strategy means stress and screen time are
                                constant partners. Ramaeri has been a game-changer. It&#039;s easy to use and the
                                results are self-evident.&quot; I get compliments that my skin is soft and glowing even
                                after a hard week!</p>
                            <a href="https://www.ramaeri.com/products/vital-glow-face-mist"
                                class="testimonial-shop-now">Shop Now >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/3YQi7oe0TCrXbA4b8Z0yo9nsBj6ydwCsyR8LMQUJ.jpg"
                            alt="Image 1" style="margin-right: 20px;" class="circular-image" />
                        <div class="text-content">
                            <h3>Ronika Kale</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                    <div onclick="" class="testimonial-columns" style="cursor:pointer;">
                        <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png"
                            alt="Image 2" style="    height: 109px; width: 90px; " />
                        <div class="text-contents">
                            <p class="serum-head">Explore authentic health product reviews from real users. Gain
                                insights on effectiveness and quality to make informed wellness choices. Join our
                                community and share your experience!</p>
                            <a href="https://www.ramaeri.com/products/ramaeri-blue-tea-antiox-foaming-facewash"
                                class="testimonial-shop-now">Shop Now >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/MfXaunXtkk8A6HsoepHDLBaJzumCDe0QBjpXaxH7.jpg"
                            alt="Image 1" style="margin-right: 20px;" class="circular-image" />
                        <div class="text-content">
                            <h3>Kalpna chawala</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                    <div onclick="" class="testimonial-columns" style="cursor:pointer;">
                        <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png"
                            alt="Image 2" style="    height: 109px; width: 90px; " />
                        <div class="text-contents">
                            <p class="serum-head">Explore authentic health product reviews from real users. Gain
                                insights on effectiveness and quality to make informed wellness choices. Join our
                                community and share your experience!</p>
                            <a href="https://www.ramaeri.com/products/ramaeri-sea-hydration-face-moisturiser"
                                class="testimonial-shop-now">Shop Now >></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $this->section('script'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                prevEl: '.left',
                nextEl: '.right',
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                }
            }
        });

        swiper.on('reachEnd', function () {
            swiper.autoplay.stop();

            setTimeout(function () {
                swiper.slideTo(0, 500);
                swiper.autoplay.start();
            }, 500);
        });

        function playVideo(videoId) {
            var video = document.getElementById('video-' + videoId);
            if (video) {
                if (video.paused) {
                    video.style.display = 'block'; // Show video
                    video.play();
                } else {
                    video.pause();
                }
            }
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.testimonial-slider', {
            slidesPerView: 1, // Mobile view
            spaceBetween: 30,
            loop: true, // Enable infinite loop
            autoplay: {
                delay: 0, // No delay between slides
                disableOnInteraction: false,
                pauseOnMouseEnter: true, // Pauses the slider on hover
            },
            speed: 3000, // Slow down the speed for continuous scroll (milliseconds)
            breakpoints: {
                768: {
                    slidesPerView: 4, // Tablet view
                },
                1024: {
                    slidesPerView: 4, // Desktop view
                },
            },
        });

        // Pause autoplay on hover
        var sliderElement = document.querySelector('.testimonial-slider');

        sliderElement.addEventListener('mouseenter', function () {
            swiper.autoplay.stop(); // Stop the autoplay on hover
        });

        sliderElement.addEventListener('mouseleave', function () {
            swiper.autoplay.start(); // Resume autoplay when hover is removed
        });
    });
</script>
<?php echo $this->endSection(); ?>