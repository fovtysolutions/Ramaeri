<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/blog.css'); ?>">
<?php echo $this->endSection(); ?>
<div class="content-wrapper">
    <!--<img src="https://www.ramaeri.com/care/assets-2/images/leaf.png" alt="leaves icon" class="progressdata">-->
    <!--<img src="https://www.ramaeri.com/assets-2/images/leaf.png" class="progressdataright">-->
    <img src="<?php echo base_url('assets/public/img/banner1.webp'); ?>" alt="ramaeri banner"
        style="width:100%;position:relative;z-index:9;" class="back-top-image">
    <div class="container" style="padding-top:56px">
        <br>
        <ul class="nav nav-pills gap-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="./Blog.html" class="frame1" id="pills-all-tab" data-bs-target="#pills-all" type="button"
                    role="tab" aria-controls="pills-all" aria-selected="true">All</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="./Recent.html" class="frame1 " id="pills-category-0" data-bs-target="#pills-category-content-0"
                    type="button" role="tab" aria-controls="pills-category-content-0" aria-selected="true">Skincare</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="./Recent.html" class="frame1 " id="pills-category-1" data-bs-target="#pills-category-content-1"
                    type="button" role="tab" aria-controls="pills-category-content-1" aria-selected="false">Digital
                    Aging</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="./Recent.html" class="frame1 " id="pills-category-2" data-bs-target="#pills-category-content-2"
                    type="button" role="tab" aria-controls="pills-category-content-2" aria-selected="false">Glowing
                    Skin</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="./Recent.html" class="frame1 " id="pills-category-3" data-bs-target="#pills-category-content-3"
                    type="button" role="tab" aria-controls="pills-category-content-3" aria-selected="false">Life
                    Style</a>
            </li>
        </ul>
        <!-- hot topic sliders -->
        <div class="tab-content" id="pills-tabContent" style="padding-left: 1rem; padding-right: 1rem;">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <div class="tab-section1"
                    style="display:flex;justify-content:center;align-items: flex-start;gap: 10px;padding-top:69px">
                    <img src="https://www.ramaeri.com/NestedProject/assets-2/images/hot.png" alt="fire icon"
                        style="width:25px;height: 35px;">
                    <span>Hot Topics</span>
                </div>
                <div class="owl-carousel owl-theme">
                    <?php  foreach ($productdata['blog'] as $key => $value) { ?>
                    <div class="item slidersectionitems">
                        <div class="row" style="justify-content:space-between;padding-right:0.2rem">
                            <div class="col-md-4">
                                <div class="h-100">
                                    <a
                                        href="<?php echo base_url('./care').'/' . $value->slug  ?>">
                                        <img src="<?php echo base_url('./writable'). '/' .$value->banner_image ?>"
                                            alt="Hydration vs Moisturization What&#039;s the Difference and Why Does It Matter"
                                            class="first">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <a href="<?php echo base_url('./care').'/' . $value->slug  ?>"
                                        style="text-decoration:none;">
                                         <h5><?php
                                              $title = $value->name;
                                              $shortTitle = substr($title, 0, 30) . '...';
                                              echo $shortTitle;
                                             ?></h5>
                                    </a>
                                    <p><?php echo $value->excerpt?> </p>
                                    <div class="icon-calender">
                                        <div class="date-container">
                                            <svg stroke="currentColor" fill="rgba(74, 100, 55, 0.3)" stroke-width="0"
                                                viewBox="0 0 448 512" height="1.5em" width="1.5em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                                                </path>
                                            </svg>
                                             <span><?php echo date("Y-m-d", strtotime($value->created_at)); ?></span>
                                        </div>
                                        <div>
                                            <a href="<?php echo base_url('./care').'/' . $value->slug ?>"><button class="read_morebtn">Read More
                                                    &nbsp;&nbsp;<svg stroke="currentColor" fill="currentColor"
                                                        stroke-width="0" viewBox="0 0 512 512" height="1.88em"
                                                        width="1.88em" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M210.7 147.6c7.5-7.5 19.8-7.5 27.3 0l95.4 95.7c7.3 7.3 7.5 19.1.6 26.6l-94 94.3c-3.8 3.8-8.7 5.7-13.7 5.7-4.9 0-9.9-1.9-13.6-5.6-7.5-7.5-7.6-19.7 0-27.3l79.9-81.1-81.9-81.1c-7.6-7.4-7.6-19.6 0-27.2z">
                                                        </path>
                                                        <path
                                                            d="M48 256c0 114.9 93.1 208 208 208s208-93.1 208-208S370.9 48 256 48 48 141.1 48 256zm32 0c0-47 18.3-91.2 51.6-124.4C164.8 98.3 209 80 256 80s91.2 18.3 124.4 51.6C413.7 164.8 432 209 432 256s-18.3 91.2-51.6 124.4C347.2 413.7 303 432 256 432s-91.2-18.3-124.4-51.6C98.3 347.2 80 303 80 256z">
                                                        </path>
                                                    </svg></button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
                </div>
                <div class="btn-wrap" style="padding-top:23px">
                    <a class="prev-btn">
                        <span class="left"></span>
                    </a>
                    <a class="next-btn">
                        <span class="right"></span>
                    </a>
                </div>

                <div class="row" style="margin-bottom:0">
                    <?php  foreach ($productdata['blog'] as $key => $value) { ?>
                    <div class="col-md-6 myslider_section p-4" style="margin-top: 0rem;">
                        <div class="slidersection_two">
                            <div class="myClass">
                                <a href="<?php echo base_url('./care').'/' . $value->slug  ?>"
                                    style="text-decoration:none;">
                                    <img src="<?php echo base_url('./writable'). '/' .$value->banner_image ?>"
                                        alt="Hydration vs Moisturization What&#039;s the Difference and Why Does It Matter"
                                        style="width: 100%;border-radius:6px;"></a>
                            </div>
                            <span class="text_overlay_content"><?php echo $value->categoryname ?></span>
                            <a href="<?php echo base_url('./care').'/' . $value->slug  ?>"
                                style="text-decoration:none;">
                                <h6><?php $title = $value->name;
                                              $shortTitle = substr($title, 0, 30) . '...';
                                              echo $shortTitle;
                                    ?></h6>
                            </a>
                            <p><?php echo $value->excerpt?> </p>
                            <div class="icon-calenders pb-5 pt-3">
                                <div class="date-container">
                                    <svg stroke="currentColor" fill="rgba(74, 100, 55, 0.3)" stroke-width="0"
                                        viewBox="0 0 448 512" height="1.5em" width="1.5em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                                        </path>
                                    </svg>
                                    <span style="color:#4A6437;"><?php echo date("Y-m-d", strtotime($value->created_at)); ?></span>
                                </div>
                                <div>
                                    <a href="<?php echo base_url('./care').'/' . $value->slug  ?>"><button class="read_morebtn">Read More &nbsp;&nbsp;<svg
                                                stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" height="1.88em" width="1.88em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M210.7 147.6c7.5-7.5 19.8-7.5 27.3 0l95.4 95.7c7.3 7.3 7.5 19.1.6 26.6l-94 94.3c-3.8 3.8-8.7 5.7-13.7 5.7-4.9 0-9.9-1.9-13.6-5.6-7.5-7.5-7.6-19.7 0-27.3l79.9-81.1-81.9-81.1c-7.6-7.4-7.6-19.6 0-27.2z">
                                                </path>
                                                <path
                                                    d="M48 256c0 114.9 93.1 208 208 208s208-93.1 208-208S370.9 48 256 48 48 141.1 48 256zm32 0c0-47 18.3-91.2 51.6-124.4C164.8 98.3 209 80 256 80s91.2 18.3 124.4 51.6C413.7 164.8 432 209 432 256s-18.3 91.2-51.6 124.4C347.2 413.7 303 432 256 432s-91.2-18.3-124.4-51.6C98.3 347.2 80 303 80 256z">
                                                </path>
                                            </svg></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <input type="hidden" id="totalitems" value="44">

                <div class="custom-pagination">
                    <nav>
                        <div class="pagination-scroll-wrapper">
                            <ul class="pagination">

                                <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                </li>

                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item extra-sm"><a class="page-link" href="#">4</a></li>
                                <li class="page-item extra-sm"><a class="page-link" href="#">5</a></li>
                                <li class="page-item extra-sm"><a class="page-link" href="#">6</a></li>
                                <li class="page-item extra-sm"><a class="page-link" href="#">7</a></li>
                                <li class="page-item extra-sm"><a class="page-link" href="#">8</a></li>

                                <li class="page-item">
                                    <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
        <div class="leaf-container">
            <div class="bg_left_for_slider">
                <img src="https://www.ramaeri.com/NestedProject/assets-2/images/l-1.png" alt="leaves icon">
            </div>
            <div class="bg_right_for_slider">
                <img src="https://www.ramaeri.com/NestedProject/assets-2/images/l-2.png" alt="leaves icon">
            </div>
        </div>
    </div>
    <?php echo $this->section('script'); ?>
    <script>
        // slider.js
        document.addEventListener("DOMContentLoaded", function () {
            const owl = $('.owl-carousel');

            if (owl.length) {
                owl.owlCarousel({
                    items: 1,               // One item per slide
                    loop: true,
                    margin: 10,
                    nav: false,              // Show next/prev arrows
                    dots: true,             // Show navigation dots
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                });
            }
            // Custom Nav Buttons
            $('.next-btn').click(function () {
                owl.trigger('next.owl.carousel');
            });

            $('.prev-btn').click(function () {
                owl.trigger('prev.owl.carousel');
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const currentUrl = window.location.href;

            const navLinks = document.querySelectorAll('#pills-tab .nav-item a');

            navLinks.forEach(link => {
                if (link.href === currentUrl) {
                    navLinks.forEach(link => link.classList.remove('active'));

                    link.classList.add('active');
                }
            });
        });
    </script>
    <?php echo $this->endSection(); ?>