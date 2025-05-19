<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/custom2.css'); ?>">
<?php echo $this->endSection(); ?>
<div class="unique-slider">
    <div class="unique-slides">

        <div class="unique-slide" style="background-color: #D9D9D9;">

        </div>
        <div class="unique-slide" style="background-color: #D9D9D9;"></div>
        <div class="unique-slide" style="background-color:#D9D9D9;"></div>

    </div>
    <div class="unique-dots">
        <span class="unique-dot"></span>
        <span class="unique-dot"></span>
        <span class="unique-dot"></span>
    </div>
</div>


<?php // print_r($productdata['banner']) ?>
<?php // foreach ($productdata['banner'] as $key => $value) { ?>
<!-- <img src="<?php // echo base_url('./writable'). '/' .$value->home_image ?>" alt="fire icon" >-->
           
<?php // } ?>


<section class="categories-section pt-5 pb-lg-5 pb-5" id="featured-products-customs">
    <div class="tab-section1">
        <img src="https://www.ramaeri.com/storage/app/public/images/newleaf.png" alt="fire icon"
            style="width:58px;height:47px">
        <span>Our Products</span>
    </div>
    <div class="container p-container">
        <div class="slider" data-slider>
            <ul class="slider__track" data-slider-track>
                <?php foreach ($productdata['product_details'] as $key => $value) { ?>
                    <li id="slide_truck_list">
                        <div>
                            <a href="<?php echo base_url('products').'/'.$value->id ?>" class="slide"
                                style="position:relative; cursor:pointer; background-image: url('https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png')">
                                <div class="rating-wrapper  text_overlay_content">
                                    <img src="https://www.ramaeri.com/storage/app/public/images/rating4.5.png"
                                        alt="Grape Glow Facewash" class="desktop-star">
                                    <span class="mobile-star2"></span>(<?php echo $value->rating ?>)</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EBA633"
                                        class="bi bi-star-half mobile-star" viewBox="0 0 16 16">
                                        <path
                                            d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                                    </svg>
                                    <span class="mobile-star">(4.5)</span>
                                </div>
                            </a>


                            <a href="<?php echo base_url('products').'/'.$value->id ?>" style="all: unset;">
                                <h4 class="slide-heading"
                                    style="cursor:pointer; text-align:left;font-size: 20px !important;"><?php echo $value->name ?>
                                </h4>
                            </a>

                            <div class="slide-sub-heading">
                                <div class="col-9 discription_update">
                                    <span class="font-for-mobile"
                                        stye="font-weight:400;line-height:19.5px;color:#666666"><?php echo $value->short_description ?></span>
                                </div>
                                <div class="price_argest col-3" style="text-align:right">
                                    <span class="rupee-icon">₹</span>
                                    <span class="priceings"></span><?php echo $value->price ?></span>

                                </div>
                            </div>

                            <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed"
                                autocomplete="off">
                            <form method="POST"
                                class="direct-add-to-cart-form">
                                <input type="hidden" name="pro_id" value="<?php $value->id ?>">
                                <input type="hidden" value="1" name="quantity">

                                <button 
                                        href="javascript:void(0);" 
                                        type="button" 
                                        data-id = <?php echo $value->id ?>
                                        class="add-to-cart-button direct-add-to-cart-btn add-to-cart-text cartButton addtocart">
                                    Add to Cart &nbsp;
                                    <!--<img src="https://www.ramaeri.com/storage/app/public/images/Component1.png" alt="Arrow Icon" class="btn-arrow">-->
                                </button>
                            </form>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div class="slider__buttons text-center">
                <button class="slider__button left" data-slider-prev disabled> </button>
                <button class="slider__button right" data-slider-next> </button>
            </div>
        </div>
    </div>
</section>
<section class="categories-section pt-5 pb-lg-5 pb-5" style="padding:15px;">
    <div class="tab-section1">
        <img src="https://www.ramaeri.com/storage/app/public/images/newleaf.png" alt="fire icon"
            style="width:58px;height:47px">
        <span>A Little About Us</span>
    </div>
    <div class="container p-container">
        <h4 class="d-flex justify-content-center">Ramaeri: Revolutionizing Beauty with Antitoxic Care</h4>
        <p>
            We bring the best of nature to the corporate world. Our solutions designed for long hours, screen exposure,
            and
            daily stress rejuvenate and protect your well-being so that you are always fresh and confident in your
            9-to-5
            grind.
        </p>
        <p>
            Formulations blend seamlessly into your corporate routine—lightweight, fast-absorbing, and effective.
            Ramaeri
            delivers targeted skincare solutions that work as hard as you do to keep you polished and professional every
            day.
        </p>
    </div>
</section>
<section class="categories-section" style="overflow:hidden;margin-top:0rem">
    <div class="tab-section1">
        <img src="https://www.ramaeri.com/storage/app/public/images/newleaf.png" alt="fire icon"
            style="width:58px;height:47px;">
        <span style="font-size:23px;">Nature’s Best Products</span>
    </div>
    <div class="container">
        <div class="row gap-mobile">

         <div class="col-lg-6 col-12 d-lg-none d-sm-inline-block">
                <a style="all:unset;cursor:pointer" href="<?php echo base_url('products') ?>">
                        <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed"
                            autocomplete="off"> <input type="hidden" id="cats" name="catId" value="3">
                    <div onclick="onClickCategory(event)" class="box1" data-category="3" data-slug="Face Wash"
                        style="position:relative;">
                        <figure> <img
                                src="https://www.ramaeri.com/public/uploads/media/BbYIC2kJyJJ6hD3CptZuDwWOOKSz8Sk6FGirymfl.png"
                                alt="Face Wash" class="d-none d-lg-block f-img-1 "></figure>
                        <div style="padding-left:5px">
                            <figure class="mob_fig"> <img
                                    src="https://www.ramaeri.com/public/uploads/media/BbYIC2kJyJJ6hD3CptZuDwWOOKSz8Sk6FGirymfl.png"
                                    alt="Face Wash" class="d-block d-lg-none  img_hee " style="width: 100%;"></figure>
                        </div>
                        <div class="content-lg mob_c" style="position:absolute;">
                            <a style="all:unset;cursor:pointer" href="<?php echo base_url('products') ?>">
                            <h2 class="face-wash-heading mb-5">All Product</h2>
                            <span class="play-btn2"></span>
                            </a>
                        </div>
                    </div>
                </a>
            </div> 
            <div class="col-lg-6 col-12 d-lg-flex d-none">
                    <input type="hidden" name="_token" value="k1lV7OgWOXxXX70OaWB0XpoyfhfnI1UeHFjaZ8Ed"
                        autocomplete="off"> <input type="hidden" id="cat" name="catId" value="3">
                <div class="box1" data-category="3" data-slug="Face Wash"
                    style="position:relative;">
                    <figure> <img
                            src="<?php echo base_url('/writable'). '/',$productdata['category_first_details']->image ?>"
                            alt="" class="d-none d-lg-block f-img-1 "></figure>
                    <div style="padding-left:5px">
                        <figure class="mob_fig"> <img
                                src="https://www.ramaeri.com/public/uploads/media/BbYIC2kJyJJ6hD3CptZuDwWOOKSz8Sk6FGirymfl.png"
                                alt="" class="d-block d-lg-none  img_hee " style="width: 100%;"></figure>
                    </div>
                    <div class="content-lg mob_c" style="position:absolute;">
                        <a style="all:unset;cursor:pointer" href="<?php echo base_url('./category/'.$productdata['category_first_details']->id)?>">
                            <h2 class="face-wash-heading mb-5"><?php echo $productdata['category_first_details']->name ?></h2>
                            <span class="play-btn2"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row serum-gap">
                    <?php foreach ($productdata['categorydata']  as $key => $value) { ?>
                    <div class="col-6 col-lg-6 box1 d-lg-flex d-none" data-category="6"
                        data-slug="Face Mist" style="position:relative;">
                        <figure><img
                                src="<?php echo base_url('./writable'). '/' .$value->image ?>"
                                alt="" class="d-none d-lg-block f-img-2"></figure>
                        <figure><img
                                src="https://www.ramaeri.com/public/uploads/media/Y3tOFqjyA3iXJQ1ZO5dwykYWVI5sw5zIwjMfzhLc.png"
                                alt="" class="d-block d-lg-none" style="width: 100%;"></figure>
                        <div class="content-sm" style="position:absolute;">
                            <a style="all:unset;cursor:pointer" href="<?php echo base_url('./category/'.$value->id)?>">
                                <h2 class="face-wash-heading mb-5"><?php echo $value->name ?></h2>
                                <button class="play-btn"></button>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-6 col-lg-6 box1 d-lg-flex d-none" data-category="6"
                        data-slug="Face Mist" style="position:relative;">
                        <figure><img
                                src="https://www.ramaeri.com/public/uploads/media/Y3tOFqjyA3iXJQ1ZO5dwykYWVI5sw5zIwjMfzhLc.png"
                                alt="" class="d-none d-lg-block f-img-2"></figure>
                        <figure><img
                                src="https://www.ramaeri.com/public/uploads/media/Y3tOFqjyA3iXJQ1ZO5dwykYWVI5sw5zIwjMfzhLc.png"
                                alt="" class="d-block d-lg-none" style="width: 100%;"></figure>
                        <div class="content-sm" style="position:absolute;">
                            <a style="all:unset;cursor:pointer" href="<?php echo base_url('products') ?>">
                                <h2 class="face-wash-heading mb-5">All Products</h2>
                                <button class="play-btn"></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<?php // _ec($this->include('Frontend\Views\video'), false) ?>
<section class="categories-section pb-10">

    <div class="tab-section1" style="padding-bottom:15px">
        <img src="https://www.ramaeri.com/storage/app/public/images/newleaf.png" alt="fire icon" class="leaf-img"
            style="width:58px;height:47px">
        <span>Our Story</span>
    </div>
    <div class="containerss">
        <div class="image-column" style="z-index:1"><img
                src="https://www.ramaeri.com/storage/app/public/images/story-img.png" alt="Ramaeri Story"></div>
        <div class="content-column">

            <div class="contents">
                <p class="story-content">In the serene forests of Madhya Pradesh, our founder discovered the essence of
                    natural beauty amidst vibrant flora, crisp air,
                    and tranquil surroundings. He connected to the ability of nature to heal and rejuvenate—it not only
                    heals the environment but
                    the body and soul too.
                </p>
            </div>
            <div class="contentss pt-5">
                <p class="story-content">From this inspiration Ramaeri was born: a natural skincare brand designed for
                    the modern-day workforce. We
                    understand, employee challenges in MNCs that result from long working hours, artificial lighting,
                    harsh
                    air-conditioned environments, and managing the stress of constant deadlines. At times, these take a
                    toll and leave the skin
                    dulled, dry, and taut.
                </p>
            </div>
            <div class="contentss pt-5">
                <p class="story-content">
                    Success at Ramaeri is about what you feel through the process: A sense of fulfilment. In our
                    fast-paced busy world that
                    sometimes gets caught in the productivity hamster wheel, we're helping to create room for balance in
                    self-care, proving that
                    thriving personally and professionally can go hand in hand.
                </p>
            </div>
            <div class="contentss pt-5">
                <p class="story-content">
                    With ingredients ethically sourced from the very forests that inspired us, Ramaeri creates natural,
                    effective solutions
                    tailored to protect, hydrate, and rejuvenate the skin of professionals. Our products are designed to
                    help you look and feel
                    your best, empowering you to take on every day with confidence and grace.
                </p>
            </div>
        </div>
    </div>


</section>
<section class="categories-section position-relative z-1 pt-9 cat-bann">
    <div class="custom-slider-container">
        <div class="custom-slider">
            <div class="custom-slide active">
                <div class="custom-content">
                    <h2 class="customs-slider-heading">“The stress of corporate life shows first on your skin—skincare
                        is not just a luxury or a choice; it’s a necessity.”</h2>
                    <p class="customs-slider-para">– Dr. Murad</p>
                </div>
                <div class="custom-image">
                    <img src="https://www.ramaeri.com/storage/app/public/images/custom-slider1.png" alt="Image 1">
                </div>
            </div>
            <div class="custom-slide">
                <div class="custom-content">
                    <h2 class="customs-slider-heading">“Corporate professionals need skincare that works as hard as they
                        do—restorative, protective, and powered by nature.”</h2>
                    <p class="customs-slider-para">– Dr. Murad</p>
                </div>
                <div class="custom-image">
                    <img src="https://www.ramaeri.com/storage/app/public/images/custom-slider2.png" alt="Image 2">
                </div>
            </div>
            <div class="custom-slide">
                <div class="custom-content">
                    <h2 class="customs-slider-heading">“Hours under artificial lights and ACs take a toll on your
                        skin—skincare is the only way to restore its vitality.”</h2>
                    <p class="customs-slider-para">– Dr. Murad</p>
                </div>
                <div class="custom-image">
                    <img src="https://www.ramaeri.com/storage/app/public/images/custom-slider3.png" alt="Image 3">
                </div>
            </div>
            <div class="custom-slide">
                <div class="custom-content">
                    <h2 class="customs-slider-heading">“For modern-day professionals, effective skincare bridges the gap
                        between urban living and nature’s healing touch.”</h2>
                    <p class="customs-slider-para">– Dr. Murad</p>
                </div>
                <div class="custom-image">
                    <img src="https://www.ramaeri.com/storage/app/public/images/custom-slider4.png" alt="Image 4">
                </div>
            </div>
        </div>
        <div class="custom-dots">
            <span class="custom-dot active"></span>
            <span class="custom-dot"></span>
            <span class="custom-dot"></span>
            <span class="custom-dot"></span>
            <!-- Har slide ke liye ek dot -->
        </div>
    </div>


</section>
<section class="categories-section" style="padding-top:3rem;">
    <div class="tab-section1" style="padding-top:0px;padding-bottom:15px">
        <img src="https://www.ramaeri.com/storage/app/public/images/newleaf.png" alt="fire icon" class="leaf-img"
            style="width:58px;height:47px">
        <span>Our Blog</span>
    </div>

    <div class="blog-container">
            <?php  foreach ($productdata['blog']  as $key => $value) { ?>
        <a href="#">

            <div class="column image-columns">
                    <img src="<?php echo base_url('./writable').'/'.$value->banner_image?>" alt="Image 1"  class="blog-image"/>
                <span class="text_overlay_contents"><?php echo $value->categoryname ?></span>
                <h3 class="blog-image-heading"><?php echo $value->name ?></h3>
            </div>
        </a>
        <?php } ?>



        <div class="view-all-column">
            <div class="text-column">
                <a href="<?php echo base_url('care') ?>">
                    <h3 class="view-all-heading">View All</h3>
                </a>
                <p class="view-all-paragraph">Rediscover natural glow</p>
            </div>
            <div class="button-column">
                <a href="<?php echo base_url('care') ?>"><button class="blog-right" style="margin-left:0px;"></button></a>
            </div>
        </div>

    </div>
</section>
<section class="categories-section" style="padding-top:3rem">
    <div class="tab-section1">
        <img src="https://www.ramaeri.com/storage/app/public/images/newleaf.png" alt="fire icon" class="leaf-img"
            style="width:58px;height:47px">
        <span>Testimonials</span>
    </div>
    <div class="swiper testimonial-slider">
        <div class="swiper-wrapper padding-wrapper">
            <?php foreach ($productdata['review_details']  as $key => $value) { ?>
            <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="<?php echo base_url('./writable').'/'.$value->image?>"
                            alt="Image 1" style="margin-right: 20px;" class="circular-image" />
                        <div class="text-content">
                            <h3><?php echo $value->user_name ?></h3>
                            <p><?php echo $value->short_title ?></p>
                        </div>
                    </div>

                    <div onclick="" class="testimonial-columns" style="cursor:pointer;">


                        <img src="<?php echo base_url('./writable').'/'.$value->product_image?>"
                            alt="Image 2" style="    height: 109px; width: 90px; " />
                        <div class="text-contents">
                            <p class="serum-head"><?php echo $value->short_description	 ?></p>


                            <a href="<?php echo base_url('products'.'/'.$value->product) ?> "class="testimonial-shop-now">Shop Now >></a>

                        </div>

                    </div>
                </div>
            </div>
            <?php } ?>
         </div>
    </div>


</section>

<?php echo $this->section('script'); ?>

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
            console.log("Reached the end of the slider");

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
    function onclicklink() {
        window.location.href = "https://www.ramaeri.com/products/combo-offer-blue-tea-antiox-foaming-facewash";
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.querySelector("[data-slider]");
        const track = slider.querySelector("[data-slider-track]");
        const prev = slider.querySelector("[data-slider-prev]");
        const next = slider.querySelector("[data-slider-next]");

        let slidesPerView = 4; // default for desktop
        let autoplayInterval = null;
        let isDragging = false;
        let startX, scrollLeft;

        function startAutoplay() {
            // autoplayInterval = setInterval(() => {
            //     next.click();
            // }, 2500); // Autoplay every 2.5 seconds
        }

        function stopAutoplay() {
            clearInterval(autoplayInterval);
        }

        function updateSlidesPerView() {
            const width = window.innerWidth;

            if (width <= 320) {
                slidesPerView = 2;
            } else if (width <= 768) {
                slidesPerView = 1;
            } else {
                slidesPerView = 2;
            }
        }

        function getScrollWidth() {
            const slideWidth = track.firstElementChild.offsetWidth;
            const columnGap = parseInt(getComputedStyle(track).getPropertyValue('--slider-column-gap')) || 0;
            return slidesPerView * slideWidth + columnGap * (slidesPerView - 1);
        }

        // Initialize autoplay
        startAutoplay();

        // Update slidesPerView on load and resize
        updateSlidesPerView();
        window.addEventListener('resize', updateSlidesPerView);

        // Draggable functionality
        if (track) {
            track.addEventListener('mousedown', (e) => {
                stopAutoplay(); // Stop autoplay when dragging
                isDragging = true;
                startX = e.pageX - track.offsetLeft;
                scrollLeft = track.scrollLeft;
                track.style.cursor = 'grabbing';
            });

            track.addEventListener('mouseleave', () => {
                if (isDragging) {
                    isDragging = false;
                    track.style.cursor = 'grab';
                }
            });

            track.addEventListener('mouseup', () => {
                if (isDragging) {
                    isDragging = false;
                    track.style.cursor = 'grab';
                    startAutoplay(); // Resume autoplay after dragging
                }
            });

            track.addEventListener('mousemove', (e) => {
                if (!isDragging) return;
                e.preventDefault();
                const x = e.pageX - track.offsetLeft;
                const walk = (x - startX) * 2;
                track.scrollLeft = scrollLeft - walk;
            });

            prev.addEventListener("click", () => {
                next.removeAttribute("disabled");
                track.scrollBy({
                    left: -getScrollWidth(),
                    behavior: "smooth"
                });
            });

            next.addEventListener("click", () => {
                const maxScrollLeft = track.scrollWidth - track.clientWidth;

                if (track.scrollLeft >= maxScrollLeft) {
                    track.scrollTo({
                        left: 0,
                        behavior: 'smooth'
                    });
                } else {
                    track.scrollBy({
                        left: getScrollWidth(),
                        behavior: "smooth"
                    });
                }
                prev.removeAttribute("disabled");
            });
        }
    });
</script>
<!--Skin care banner crousel code aprt-->
<script>
    let customSlides = document.querySelectorAll('.custom-slide');
    let customDots = document.querySelectorAll('.custom-dot');
    let customCurrentIndex = 0;
    let totalSlides = customSlides.length;
    let slider = document.querySelector('.custom-slider');

    function customShowSlide(index) {
        if (index >= totalSlides) {
            // Reset to the first slide (for smooth looping)
            customCurrentIndex = 0;
            slider.style.transition = 'none'; // Temporarily disable animation
            slider.style.transform = `translateX(0%)`; // Jump to first slide
            setTimeout(() => {
                slider.style.transition = ''; // Re-enable animation
                customShowSlide(customCurrentIndex); // Continue to first slide
            }, 20); // Add slight delay for the transition effect
            return;
        }

        let offset = index * 100; // Calculate how far to shift the slides
        slider.style.transform = `translateX(-${offset}%)`;

        // Update active dot
        customDots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
    }

    customDots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            customCurrentIndex = i;
            customShowSlide(customCurrentIndex);
        });
    });

    // Auto-slide functionality with looping
    setInterval(() => {
        customCurrentIndex++;
        customShowSlide(customCurrentIndex);
    }, 3000);


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
</script>
<script>
    function togglePassword(inputId) {
        var passwordInput = document.getElementById(inputId);

        // Toggle between password and text types
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    }



</script>



<script>
  const decreaseBtn = document.getElementById("decrease");
  const increaseBtn = document.getElementById("increase");
  const quantityInput = document.getElementById("qnt");

  let quantity = parseInt(quantityInput.value);

  increaseBtn.addEventListener("click", () => {
    quantity++;
    quantityInput.value = quantity;
  });

  decreaseBtn.addEventListener("click", () => {
    if (quantity > 1) {
      quantity--;
      quantityInput.value = quantity;
    }
  });
</script>

<?php echo $this->endSection(); ?>