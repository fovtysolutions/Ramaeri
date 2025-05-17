<section class="categories-section" style="padding-bottom:100px;padding-top:2rem">
    <div class="tab-section1">
        <img src="https://www.ramaeri.com/storage/app/public/images/newleaf.png" alt="fire icon"
            style="width:58px;height:47px;">
        <span style="font-size:23px !important">Tried. Tested. & Adored</span>
    </div>
    <div class="container " id="trending_product_container">
        <div class="swiper-container">
            <div class="swiper-wrapper" id="trending_vedios">
                 <?php foreach ($productdata['video']  as $key => $value) { ?>
                <div class="swiper-slide">
                    <!-- Video element with a play button -->
                    <video id="video-31" class="video-player autoPlayFirst"
                        src="<?php echo base_url('./writable').'/'. $value->video?>"
                        autoplay muted loop preload="auto">
                    </video>
                    <!-- Play Button Image -->
                    <img class="play-btn-img playButton_id" data-video-id="31"
                        src="<?php echo base_url('./writable').'/'. $value->thumbnail?>" alt="Play">
                </div>
                <?php } ?>
            </div>
            <!-- Add Pagination -->
            <!-- adding some modal and iframe so that i can play vedio on iframe when user click on the vedio -->
            <!-- Video Modal -->
            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="videoModalLabel">Watch Video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Video Embed (You can change the source to YouTube, Vimeo, etc.) -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="100%" height="300px" id="videoIframe" class="embed-responsive-item"
                                    src="" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- addition end -->
            <!-- Add Navigation -->
            <div class="swiper-button">
                <button class="slider__button left"></button>
                <button class="slider__button right"></button>
            </div>
        </div>
    </div>
</section>