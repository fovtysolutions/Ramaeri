<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/product_details.css'); ?>">
<?php echo $this->endSection(); ?>
<style>
  .description img{
    /* position: absolute;
    right: 50px; */
  }
  </style>
<!--product details start-->
<div class="product" style="margin-bottom:5rem;">
  <div class="container ls">
    <div class="product-row">
      <?php $galleryImages = json_decode($productdetails['productId']->gellary_image);?>
      <!-- First column: Side images (10%) -->
      <div class="side-images">
        <?php if (!empty($galleryImages)): ?>
        <?php foreach ($galleryImages as $img): ?>
        <div class="image-box"><img src="<?= base_url($img->file) ?>" alt="<?= esc($img->original_name) ?>" ></div>
        <?php endforeach; endif;?>

         <?php if (!empty($productdetails['productId']->video_youtube)): ?>
          <div class="play-btn">
            <video id="video-28" width="50px" class="video-player autoPlayFirst" data-src="<?php echo $productdetails['productId']->video_youtube?>" autoplay="" muted="" loop="" preload="auto" src=<?php echo $productdetails['productId']->video_youtube?>></video>
          </div>
         <?php endif; ?>
      </div>
      
      <!-- Second column: Main product image (40%) -->
      <div class="main-image">
        <img id="main-image" style="height:auto" src="<?php echo base_url('writable').'/'.$productdetails['productId']->image ?>"
          alt="Main Product Image">
        <div class="rating-overlay">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbe00" class="bi bi-star-half" viewBox="0 0 16 16">
                <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
              </svg>
                                              <!-- Empty stars -->
            <span class="star" style="color:gold"></span>
                                              <!-- Empty stars -->
            <span class="star" style="color:gold"></span>
                             <span class="text-white" style="position:relative;top:3px">(2.3)</span> 

        </div>
      </div>
      <div class="product-details">
        <h1 class="product-title"><?php echo $productdetails['productId']->name ?></h1>
        <p class="product-para"><?php echo $productdetails['productId']->short_description ?></p>
        <div class="product-price">
          <span class="rupee-icon">₹</span>
        <span class="priceings"><?php echo $productdetails['productId']->price ?></span>
    
 <span
            class="discount-price"></span>
          <span class="text-success"></span>
          <p style="color:black;font-weight:400;font-size:small">incusive of all taxes.</p>
        </div>
         
        <form action="" method="POST" class="direct-add-to-cart-form" style="width:100%"></form>
        <div class="quantity-selector" style="width:100% !important">
          <div style="display: flex; gap: 8px;">
            <button id="decrease-btn">-</button>
            <span id="quantity" class="quantity">1</span>
            <button id="increase-btn">+</button>
          </div>
          
            <input type="hidden" name="_token" value="GbAh8jz0LNVUu4aodajcqyvyLw5tOEi5wtu87o1n">
            <input type="hidden" name="product_variation_id" value="33">
            <input type="hidden" value="1" id="hiddenInput" name="quantity">
                          <button href="javascript:void(0);" type="submit" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRightshowproduct" aria-controls="offcanvasRight"
                class="add-to-cart-button direct-add-to-cart-btn add-to-cart-text btn-add-cart cartButton">Add to Cart
                &nbsp;
              </button>
            </div>
          </form>

        <ul class="product-info">
          <li class=""><strong style="">SKINTYPE</strong> <br><br> <span style="width:100%; line-height:18px">
              <?php echo $productdetails['productId']->skin_type ?></span></li>
          <li class=""><strong style="">BENEFITS</strong> <br><br> <span style="width:100%;line-height:18px">
              <?php echo $productdetails['productId']->benefit ?></span></li>
          <li class=""><strong style="">KEY INGREDIENT</strong> <br><br> <span style="width:100%;line-height:18px">
              <?php echo $productdetails['productId']->key_ingredient ?></span></li>
        </ul>

        <div class="service-icons">
          <div>
            <img src="https://www.ramaeri.com/storage/app/public/images/bus.png" style="width: 35% !important"
              alt="Free Delivery Icon">
            Free Delivery
          </div>
          <div>
            <img src="https://www.ramaeri.com/storage/app/public/images/export.png" style="width: 35% !important"
              alt="Return Icon">
            Easy Return & Refund
          </div>
          <div>
            <img src="https://www.ramaeri.com/storage/app/public/images/payment.png" style="width: 35% !important"
    i       alt="Secure Payment Icon">
            Secure Payment
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div>
</div>
<!-- tab section start-->

<div class="tabs d-flex">
  <button class="tab-link active" onclick="openTab(event, 'details')">DETAILS</button>
  <button class="tab-link" onclick="openTab(event, 'ingredients')">ALL INGREDIENTS</button>
  <button class="tab-link" onclick="openTab(event, 'howToUse')">HOW TO USE</button>
</div>

<div class="tab-content">
  <!-- Details Tab Content -->
  <div style="margin: 0px auto;
    width: 80%;">
    
    <div id="details" class="tab-content-item active-content">
      <div class="content-section" style="padding-top:58px;padding-bottom:58px;">
         <div class="description">
          <?php echo $productdetails['productId']->details ?>
          </div>
      </div>
    </div>

    <!-- Ingredients Tab Content -->
    <div id="ingredients" class="tab-content-item">
      <div class="content-section" style="padding-top:58px;padding-bottom:58px;">
         <div class="description">
          <?php echo $productdetails['productId']->ingredients ?>
          </div>
      
      </div>
    </div> 

    <!-- How to Use Tab Content -->
    <div id="howToUse" class="tab-content-item">

      <div class="how-to-use-section" style="padding-top:58px;padding-bottom:58px;justify-content:center;">
        <div class="how-to-use-description">
           <div class="description">
               <?php echo $productdetails['productId']->how ?>
          </div>
          </div>
        </div>
    </div>

  </div>
</div>
<!-- section benifits -->

<div class="benefits-section">


  <h2 class="benefits-heading">Benefits</h2>
  <div class="benefits-container" style="padding-top:33px;">
    <div class="benefit-item">
      <img src="https://www.ramaeri.com/storage/app/public/images/cream-1.png" alt="Protects Icon">
      <h3>Protects</h3>
      <p><?php echo $productdetails['productId']->protect ?></p>
    </div>
    <div class="benefit-item">
      <img src="https://www.ramaeri.com/storage/app/public/images/face-1.png" alt="Prevents Icon">
      <h3>Prevents</h3>
      <p><?php echo $productdetails['productId']->prevent ?></p>
    </div>
    <div class="benefit-item">
      <img src="https://www.ramaeri.com/storage/app/public/images/skincare-1.png" alt="Fades Icon">
      <h3>Fades</h3>
      <p><?php echo $productdetails['productId']->fade ?></p>
    </div>
    <div class="benefit-item">
      <img src="https://www.ramaeri.com/storage/app/public/images/soothing-1.png" alt="Soothes Icon">
      <h3>Soothes</h3>
      <p><?php echo $productdetails['productId']->soothe ?></p>
    </div>

    <div class="benefit-item">
      <img src="https://www.ramaeri.com/storage/app/public/images/permeate-1.png" alt="Hydrates Icon">
      <h3>Hydrates</h3>
      <p><?php echo $productdetails['productId']->hydrate ?></p>
    </div>

    <div class="benefit-item">
      <img src="https://www.ramaeri.com/storage/app/public/images/hydrate.png" alt="Strengthens Icon">
      <h3>Strengthens</h3>
      <p><?php echo $productdetails['productId']->strengthen ?></p>
    </div>
  </div>
</div>
<!-- section benifits end -->
<section>
  <div class="banner">
  </div>
</section>
<!-- section benifits end -->

<div class="review-section">
  <h2 class="review-heading">Customer Review <span class="hide-on-mobile">(0)</span></h2>

  <!-- Review Form -->
  <form id="reviewForm">
    <input type="hidden" value="33" name="product_id" id="product_id">
    <input type="hidden" value="1" name="published" id="published">
    <input type="hidden" name="type" value="product" id="type">
    <input type="hidden" name="rating" id="rating" value="0">
     <!-- Hidden field for rating -->

    <div class="review-box">  
          <!-- Star Rating Picker -->
      <div class="star-picker">
        <span class="star" data-value="1">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#c3c3c3" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
        </span>
        <span class="star" data-value="2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#c3c3c3" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
        </span>
        <span class="star" data-value="3">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#c3c3c3" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
        </span>
        <span class="star" data-value="4">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#c3c3c3" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
        </span>
        <span class="star" data-value="5">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#c3c3c3" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
        </span>
      </div>

      <input type="text" id="reviewText" class="write-review" name="review" placeholder="Write Your Own Review" required>
                        <input type="hidden" id="user_id" value="181">
          <button type="submit" class="submit-btn">WRITE REVIEW</button>
              
          </div>
  </form>

  
  <div id="reviews-container" style="height: 400px; overflow: scroll; scroll-behavior: smooth;"></div>
  <div class="pagination initialhidden">
    <button id="prev-page">Previous</button>
    <span id="page-info">Page 1</span>
    <button id="next-page">Next</button>
  </div>
  <div id="load-more" class="load-more mt-10" href="javascript:void(0);" onclick="loadMore()">Load More 
    <?xml version="1.0" encoding="iso-8859-1"?>
    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
    <svg fill="#000000" height="17px" width="17px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
      viewBox="0 0 330 330" xml:space="preserve">
    <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
      c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
      C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
      C255,161.018,253.42,157.202,250.606,154.389z"/>
    </svg>
  </div>
</div>
<section class="categories-section" style="padding-top:3rem">
            <div class="swiper testimonial-slider">
                    <div class="ml-5"><h4 class="review"><span class="poppins-regular">GUEST REVIEWS & RATINGS </span></h4></div>
            <div class="swiper-wrapper padding-wrapper">
              <?php foreach ($productdetails['review']  as $key => $value) { ?>
            <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="<?php echo base_url('./writable').'/'.$value->image?>" alt="Image 1" style="margin-right: 20px;" class="circular-image"/>
                        <div class="text-content">
                            <h3><?php echo $value->user_name ?></h3>
                            <p><?php echo $value->short_title ?></p>
                        </div>
                    </div>
                    <div onclick="" class="testimonial-columns" style="cursor:pointer;"> 
                     <img src="<?php echo base_url('./writable').'/'.$value->product_image?>" alt="Image 2" style="    height: 109px; width: 90px; " /> 
                        <div class="text-contents">
                            <p class="serum-head"><?php echo $value->short_description ?></p>
                            <a href="<?php echo base_url('products'.'/'.$value->product) ?>" class="testimonial-shop-now">Shop Now >></a>

                        </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
          </div>
    </div>
</section>


<?php echo $this->section('script'); ?>
<!-- <script>
    const contentSection = document.querySelectorAll('.tab-content-item');
    const description = document.querySelectorAll('.content-section');
    function addChildData(div, img){ 
    description.innerHTML = `<div class="description"> 
                      </div>
                      <div class="Img">
                        
                      </div>`;
    contentSection.style.display = 'flex';
     contentSection.style.justify-content = 'space-between';
      contentSection.style.gap = '20px'; -->
    <!-- // const firstChild =  `<div class="description"> 
    //                   </div>`;
    // let secondChild = `<div class="Img">
                        
    //                   </div>`
    contentSection.upendChild(description);
    contentSection.upendChild(description);
                      
    }

    addChildData(); -->
    

    
<!-- </script> -->
<script>
  const totalQty = 9;
  const decreaseBtn = document.getElementById('decrease-btn');
  const increaseBtn = document.getElementById('increase-btn');
  const quantitySpan = document.getElementById('quantity');
  const hiddenInput = document.getElementById('hiddenInput');
  let quantity = 1;

  // Update Toastr options
  toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "timeOut": "3000",
  };

  // Decrease quantity functionality
  decreaseBtn.addEventListener('click', () => {
    if (quantity > 1) {
      quantity--;
      quantitySpan.innerText = quantity;
      hiddenInput.value = quantity;
    } else {
      toastr.warning('Minimum quantity is 1');
    }
  });

  // Increase quantity functionality
  increaseBtn.addEventListener('click', () => {
    if (quantity < totalQty) {
      quantity++;
      quantitySpan.innerText = quantity;
      hiddenInput.value = quantity;
    } else {
      toastr.warning('No More Stock');
    }
  });
</script>
<script>
  function openTab(event, tabId) {
    // Remove 'active' class from all tabs
    let tabs = document.querySelectorAll('.tab-link');
    tabs.forEach(tab => {
      tab.classList.remove('active');
    });

    // Hide all tab content
    let tabContents = document.querySelectorAll('.tab-content-item');
    tabContents.forEach(content => {
      content.classList.remove('active-content');
    });

    // Add 'active' class to the clicked tab and display its content
    event.currentTarget.classList.add('active');
    document.getElementById(tabId).classList.add('active-content');
  }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
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

        sliderElement.addEventListener('mouseenter', function() {
            swiper.autoplay.stop(); // Stop the autoplay on hover
        });

        sliderElement.addEventListener('mouseleave', function() {
            swiper.autoplay.start(); // Resume autoplay when hover is removed
        });
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
          slidesPerView: 1, // Tablet view
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
document.addEventListener('DOMContentLoaded', function() {
    // Select all image elements
    const images = document.querySelectorAll('img');

    // Function to set image size
    function setImageSize(isMobile768,ismobile560) {
        images.forEach(img => {
            // Check if the image's src or alt includes 'Component1' or 'Component2'
            if (img.src.includes('Component1') || img.alt.includes('Component1')) {
                if (isMobile768) {
                    // For mobile devices, set size to 10px
                    img.style.height = '18px'; // Set your desired height for mobile
                    img.style.width = '18px';  // Set your desired width for mobile
                }else if(ismobile560){
                     img.style.height = '16px'; // Set your desired height for mobile
                    img.style.width = '16px';  // Set your desired width for mobile
                }  else {
                    // For non-mobile devices, set size to 20px
                    img.style.height = '18px'; // Set your desired height for desktop
                    img.style.width = '18px';  // Set your desired width for desktop
                }
            }
            if (img.src.includes('Component2') || img.alt.includes('Component2')) {
                if (isMobile768) {
                    // For mobile devices, set size to 10px
                    img.style.height = '18px'; // Set your desired height for mobile
                    img.style.width = '18px';  // Set your desired width for mobile
                }else if(ismobile560){
                         img.style.height = '18px'; // Set your desired height for mobile
                    img.style.width = '18px';  // Set your desired width for mobile
                } else {
                    // For non-mobile devices, set size to 20px
                    img.style.height = '18px'; // Set your desired height for desktop
                    img.style.width = '18px';  // Set your desired width for desktop
                }
            }
        });
    }

    // Check if the device is mobile (screen width <= 768px)
    const isMobile768 = window.innerWidth <= 768;
    const ismobile560 = window.innerWidth <= 560;

    // Apply the image size based on the device type (mobile or desktop)
    setImageSize(isMobile768,ismobile560);
});

</script>
 <script>
            if (!navigator.serviceWorker?.controller) {
                navigator.serviceWorker?.register("./public/sw.js").then(function(reg) {
                    // console.log("Service worker has been registered for scope: " + reg.scope);
                });
            }
        </script>
<?php echo $this->endSection(); ?>