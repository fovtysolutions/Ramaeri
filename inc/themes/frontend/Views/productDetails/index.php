<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/product_details.css'); ?>">
<?php echo $this->endSection(); ?>
<!--product details start-->
<div class="product" style="margin-bottom:5rem;">
  <div class="container ls">
    <div class="product-row">
      <!-- First column: Side images (10%) -->
      <div class="side-images">
        <div class="image-box"><img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png" alt="Main Product Image"></div>
        <div class="image-box"><img src="https://www.ramaeri.com/public/uploads/media/uxRdgEJ0N6eFiREYofsCD0sCzE2rC9FMHNE52dLF.webp" alt="Main Product Image"></div>
        <div class="image-box"></div>
        <div class="image-box"></div>
        <div class="play-btn"><img src="https://www.ramaeri.com/public/images/playicon.png" class="play-image" alt=" Image">
        </div>
      </div>
      
      <!-- Second column: Main product image (40%) -->
      <div class="main-image">
        <img id="main-image" style="height:auto" src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png"
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

      <!-- Third column: Product details (50%) -->
      <div class="product-details">
        <h1 class="product-title">Grape Glow Facewash</h1>
        <p class="product-para">57% BRIGHTER SKIN IN 2 WEEKS</p>
        <div class="product-price">
          <span class="rupee-icon">₹</span>
        <span class="priceings">1,300.00</span>
    
 <span
            class="discount-price"></span>
          <span class="text-success"></span>
          <p style="color:black;font-weight:400;font-size:small">incusive of all taxes.</p>
        </div>
         
        <div class="quantity-selector" style="width:100% !important">
          <div style="display: flex; gap: 8px;">
            <button id="decrease-btn">-</button>
            <span id="quantity" class="quantity">1</span>
            <button id="increase-btn">+</button>
          </div>
          <form action="https://www.ramaeri.com/add-to-cart" method="POST" class="direct-add-to-cart-form" style="width:100%">
            <input type="hidden" name="_token" value="GbAh8jz0LNVUu4aodajcqyvyLw5tOEi5wtu87o1n">
            <input type="hidden" name="product_variation_id" value="33">
            <input type="hidden" value="1" id="hiddenInput" name="quantity">
                          <button href="javascript:void(0);" type="submit" onclick="directAddToCartFormSubmit(this)"
                class="add-to-cart-button direct-add-to-cart-btn add-to-cart-text btn-add-cart cartButton">Add to Cart
                &nbsp;
                <!-- <img src="https://www.ramaeri.com/storage/app/public/images/Component1.png" alt="Arrow Icon" > -->
              </button>
                      </form>
        </div>

        <ul class="product-info">
          <li class=""><strong style="">SKINTYPE</strong> <br><br> <span style="width:100%; line-height:18px">
              All</span></li>
          <li class=""><strong style="">BENEFITS</strong> <br><br> <span style="width:100%;line-height:18px">
              Deep</span></li>
          <li class=""><strong style="">KEY INGREDIENT</strong> <br><br> <span style="width:100%;line-height:18px">
              Sea</span></li>
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
              alt="Secure Payment Icon">
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
          <h2 class="detail-heading " style="box-sizing: border-box; margin-bottom: 25px; font-weight: 500; line-height: 39px; color: rgb(51, 51, 51); font-size: 30px; text-transform: uppercase;">Vital Glow Face Mist</h2><p class="detail-para" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 15px; line-height: 22.5px; color: rgb(51, 51, 51); width: 616.76px;">If you're concerned about the effects of prolonged screen exposure, our face wash gel with Vitis Vinifera Extract is designed to address digital aging head-on. Here's how it can benefit your skin:</p><div style="box-sizing: border-box; color: rgb(93, 99, 116); font-family: Inter, sans-serif; font-size: 16px; display: flex; gap: 6px; padding-top: 26px; align-items: center;"><img src="https://ramaeri.com/storage/app/public/images/list-right.png" alt="Product Image" style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 12.18px; color: rgb(51, 51, 51); line-height: 9.31px;">PREVENTS PREMATURE AGING</span></div><p class="detail-para pt-5" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 15px; line-height: 22.5px; color: rgb(51, 51, 51); width: 616.76px; padding-top: 1.25rem !important;">Blue Light Protection: Prolonged exposure to blue light from screens accelerates skin aging. Vitis Vinifera Extract, rich in antioxidants like proanthocyanidins and flavonoids, helps neutralize free radicals, reducing oxidative stress that leads to fine lines, wrinkles, and uneven skin tone.</p><div style="box-sizing: border-box; color: rgb(93, 99, 116); font-family: Inter, sans-serif; font-size: 16px; display: flex; gap: 6px; padding-top: 26px; align-items: center;"><img src="https://ramaeri.com/storage/app/public/images/list-right.png" alt="Product Image" style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 12.18px; color: rgb(51, 51, 51); line-height: 9.31px;">FADES HYPERPIGMENTATION</span></div><p class="detail-para pt-5" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 15px; line-height: 22.5px; color: rgb(51, 51, 51); width: 616.76px; padding-top: 1.25rem !important;">We call this dermatologically tested face cream Feng Shui for the skin. Why? Well, that’s because it’s made with the perfect blend of skin-balancing natural actives, including Prebiotics. Perfect for when your skin is out of sorts!</p><div style="box-sizing: border-box; color: rgb(93, 99, 116); font-family: Inter, sans-serif; font-size: 16px; display: flex; gap: 6px; padding-top: 26px; align-items: center;"><img src="https://ramaeri.com/storage/app/public/images/list-right.png" alt="Product Image" style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 12.18px; color: rgb(51, 51, 51); line-height: 9.31px;">PROTECTS THE SKIN BARRIER</span></div><p class="detail-para pt-5" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 15px; line-height: 22.5px; color: rgb(51, 51, 51); width: 616.76px; padding-top: 1.25rem !important;">We call this dermatologically tested face cream Feng Shui for the skin. Why? Well, that’s because it’s made with the perfect blend of skin-balancing natural actives, including Prebiotics. Perfect for when your skin is out of sorts!</p><div style="box-sizing: border-box; color: rgb(93, 99, 116); font-family: Inter, sans-serif; font-size: 16px; display: flex; gap: 6px; padding-top: 26px; align-items: center;"><img src="https://ramaeri.com/storage/app/public/images/list-right.png" alt="Product Image" style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 12.18px; color: rgb(51, 51, 51); line-height: 9.31px;">Hydrates and Moisturizes</span></div><p class="detail-para pt-5" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 15px; line-height: 22.5px; color: rgb(51, 51, 51); width: 616.76px; padding-top: 1.25rem !important;">Lightweight Hydration: Grape seed extract is lightweight and non-comedogenic, offering essential hydration without clogging pores. It helps maintain optimal moisture levels, which is crucial for skin compromised by digital exposure.</p><div style="box-sizing: border-box; color: rgb(93, 99, 116); font-family: Inter, sans-serif; font-size: 16px; display: flex; gap: 6px; padding-top: 26px; align-items: center;"><img src="https://ramaeri.com/storage/app/public/images/list-right.png" alt="Product Image" style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 12.18px; color: rgb(51, 51, 51); line-height: 9.31px;">Boosts Collagen for Firmness</span></div><p class="detail-para pt-5" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 15px; line-height: 22.5px; color: rgb(51, 51, 51); width: 616.76px; padding-top: 1.25rem !important;">Elasticity &amp; Firmness: Vitis Vinifera Extract supports collagen synthesis, essential for maintaining skin elasticity and firmness. This helps counteract the loss of skin structure caused by digital aging, leaving your skin looking youthful and resilient.</p><p class="detail-para pt-5" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 15px; line-height: 22.5px; color: rgb(51, 51, 51); width: 616.76px; padding-top: 1.25rem !important;">Incorporating this face wash gel into your daily routine will help protect your skin from the harmful effects of digital exposure, ensuring a healthy, glowing complexion.</p>
        </div>
        <div class="">
                    
          <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png" alt="Product Image" style="width:100%">        </div>
      </div>
    </div>

    <!-- Ingredients Tab Content -->
    <div id="ingredients" class="tab-content-item">
      <div class="content-section" style="padding-top:58px;padding-bottom:58px;">
        <div class="description">
          <h2 class="detail-heading" style="box-sizing: border-box; margin-bottom: 0.5rem; font-weight: 500; line-height: 39px; color: rgb(51, 51, 51); font-size: 30px; text-transform: uppercase;">INGREDIENTS LIST</h2><p class="detail-para pt-3" style="box-sizing: border-box; font-size: 15px; line-height: 22.5px; color: rgb(51, 51, 51); width: 537.307px; padding-top: 0.75rem !important;">Vitis Vinifera Extract, Honey, Nelumbo Nucifera Extract, Vaccinium Myrtillus Fruit Extract, Citrus Aurantium Dulcis Fruit Extract, Citrus Limon Fruit Extract, Mellisa Officinalis Leaf Extract, Caesalpinia Spinosa Fruit Extract, Helianthus Annuus Sprout Extract, Artichoke Extract, Oat Extract, Purified Water, Cocamidopropyl Betaine, Sodium Lauroyl Sarcosinate, Acrylate Copolymer, Decyl Glucoside, Sodium Cocoamphoacetate, D Panthenol, Glycerin, Natural Betaine, Perfume, Sodium PCA, Sodium Benzoate, Triethanolamine, Potassium Sorbate, Lactic Acid, Sodium Gluconate and Allantoin.</p><h2 class="detail-heading pt-4" style="box-sizing: border-box; margin-bottom: 0.5rem; font-weight: 500; line-height: 39px; color: rgb(51, 51, 51); font-size: 30px; text-transform: uppercase; padding-top: 1rem !important;">Do's &amp; Don’ts</h2><div class="containerss" style="box-sizing: border-box; display: flex; justify-content: space-between; padding-top: 40px !important;"><div class="list" style="box-sizing: border-box; --direction: column; display: flex; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; margin: 0px; padding: 0px; list-style: none; width: 257.906px;"><ul class="list-1" style="box-sizing: border-box; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-type: none; display: flex; flex-direction: column; gap: 23px;"><div style="box-sizing: border-box; display: flex; gap: 6px; align-items: center;"><img src="https://ramaeri.com/storage/app/public/images/301.png" alt="Product Image" style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 15px; color: rgb(51, 51, 51); line-height: 22.5px;">Do use consistently: Apply the face wash gel daily for best results.</span></div><div style="box-sizing: border-box; display: flex; gap: 6px; align-items: center;"><img src="https://ramaeri.com/storage/app/public/images/301.png" alt="Product Image" style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 15px; color: rgb(51, 51, 51); line-height: 22.5px;">Do patch test: Test any new production a small area to ensure compatibility.</span></div><div style="box-sizing: border-box; display: flex; gap: 6px; align-items: center;"><img src="https://ramaeri.com/storage/app/public/images/301.png" alt="Product Image" style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 15px; color: rgb(51, 51, 51); line-height: 22.5px;">Do hydrate: Follow up with a moisturiser to lock in hydration and support your skin barrier.</span></div></ul></div><div class="list" style="box-sizing: border-box; --direction: column; display: flex; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; margin: 0px; padding: 0px; list-style: none; width: 257.906px;"><ul class="list-1" style="box-sizing: border-box; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-type: none; display: flex; flex-direction: column; gap: 23px;"><div style="box-sizing: border-box; display: flex; gap: 6px; align-items: center;"><img src="https://ramaeri.com/storage/app/public/images/choice-3.png" alt="Product Image" style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 15px; color: rgb(51, 51, 51); line-height: 22.5px;">Don't skip moisturizing: Always seal in moisture after using the gel.</span></div><div style="box-sizing: border-box; display: flex; gap: 6px; align-items: center;"><img src="https://ramaeri.com/storage/app/public/images/choice-3.png" alt="Product Image" style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 15px; color: rgb(51, 51, 51); line-height: 22.5px;">Don't over-exfoliate: Avoid using too many exfoliating products at once.</span></div><div style="box-sizing: border-box; display: flex; gap: 6px; align-items: center;"><img src="https://ramaeri.com/storage/app/public/images/choice-3.png" alt="Product Image" style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 15px; color: rgb(51, 51, 51); line-height: 22.5px;">Don't ignore sensitivity: Stop use and consult a dermatologist if irritatio occurs.</span></div><div style="box-sizing: border-box; display: flex; gap: 6px; align-items: center;"><br style="color: rgb(93, 99, 116); font-family: Inter, sans-serif; font-size: 16px;"></div></ul></div></div> 
        </div>

        <div class="">
                    
          <img src="https://www.ramaeri.com/public/uploads/media/uxRdgEJ0N6eFiREYofsCD0sCzE2rC9FMHNE52dLF.webp" alt="Product Image" style="width:100%">        </div>
        </div>
      </div>
    </div>

    <!-- How to Use Tab Content -->
    <div id="howToUse" class="tab-content-item">

      <div class="how-to-use-section" style="padding-top:58px;padding-bottom:58px;justify-content:center;">
        <div class="how-to-use-description">
          <h2 class="detail-heading" style="box-sizing: border-box; margin-bottom: 0.5rem; font-weight: 500; line-height: 39px; color: rgb(51, 51, 51); font-size: 30px; text-transform: uppercase;">How to Use</h2><h3 class="how-to-use-heading" style="box-sizing: border-box; margin-bottom: 0.5rem; font-weight: 300; line-height: 9.31px; color: rgb(51, 51, 51); font-size: 25px; padding-top: 30px;">STEP 1</h3><p class="how-to-use-para" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 16px; line-height: 22.31px; color: rgb(51, 51, 51); padding-top: 30px;"><span class="how-to-use-strong" style="box-sizing: border-box; line-height: 22.31px;">Wet Your Face:&nbsp;</span>Splash with water to prepare your skin.</p><p class="how-to-use-para" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 16px; line-height: 22.31px; color: rgb(51, 51, 51);"><span class="how-to-use-strong" style="box-sizing: border-box; line-height: 22.31px;">Apply Gel:&nbsp;</span>Take a small amount and gently massage onto your face.</p><h3 class="how-to-use-heading" style="box-sizing: border-box; margin-bottom: 0.5rem; font-weight: 300; line-height: 9.31px; color: rgb(51, 51, 51); font-size: 25px; padding-top: 30px;">STEP 2</h3><p class="how-to-use-para" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 16px; line-height: 22.31px; color: rgb(51, 51, 51); padding-top: 30px;"><span class="how-to-use-strong" style="box-sizing: border-box; line-height: 22.31px;">Rinse:</span>&nbsp;Wash off with lukewarm water.</p><p class="how-to-use-para" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 16px; line-height: 22.31px; color: rgb(51, 51, 51);"><span class="how-to-use-strong" style="box-sizing: border-box; line-height: 22.31px;">Pat Dry:&nbsp;</span>Gently pat your face dry with a clean towel.</p><h3 class="how-to-use-heading" style="box-sizing: border-box; margin-bottom: 0.5rem; font-weight: 300; line-height: 9.31px; color: rgb(51, 51, 51); font-size: 25px; padding-top: 30px;">STEP 3</h3><p class="how-to-use-para" style="box-sizing: border-box; font-family: Inter, sans-serif; font-size: 16px; line-height: 22.31px; color: rgb(51, 51, 51); padding-top: 30px;"><span class="how-to-use-strong" style="box-sizing: border-box; line-height: 22.31px;">Follow Up:</span>&nbsp;Apply moisturizer and sunscreen as needed.</p>
        </div>
        <div class="how-to-use-video">
          <!--  <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Product Usage Video"></iframe>-->
                        <iframe 
                src="https://www.youtube.com/embed/K4TOrB7at0Y" 
                title="Product Video" 
                style="width:100%; height:400px;" 
                frameborder="0" 
                allow="autoplay; encrypted-media" 
                allowfullscreen>
            </iframe>          
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
      <p>Shields Skin From Digital Aging.</p>
    </div>
    <div class="benefit-item">
      <img src="https://www.ramaeri.com/storage/app/public/images/face-1.png" alt="Prevents Icon">
      <h3>Prevents</h3>
      <p>Reduces Signs Of Premature Aging.</p>
    </div>
    <div class="benefit-item">
      <img src="https://www.ramaeri.com/storage/app/public/images/skincare-1.png" alt="Fades Icon">
      <h3>Fades</h3>
      <p>Lightens Dark Spots &amp; Hyper Pigmentation.</p>
    </div>
    <div class="benefit-item">
      <img src="https://www.ramaeri.com/storage/app/public/images/soothing-1.png" alt="Soothes Icon">
      <h3>Soothes</h3>
      <p>Calms Irritated &amp; Sensitive Skin.</p>
    </div>

    <div class="benefit-item">
      <img src="https://www.ramaeri.com/storage/app/public/images/permeate-1.png" alt="Hydrates Icon">
      <h3>Hydrates</h3>
      <p>Keeps Skin Moisturized &amp; Balanced.</p>
    </div>

    <div class="benefit-item">
      <img src="https://www.ramaeri.com/storage/app/public/images/hydrate.png" alt="Strengthens Icon">
      <h3>Strengthens</h3>
      <p>Reinforces The Skin Barrier.</p>
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
            
            <!--code commented form here-->
            
            
            
            <!--code commentation end-->

                                          
            
                <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/SiTMRdbredgqpaZrCWgoVKqg2QcVEVxaxfmbWtYp.jpg" alt="Image 1" style="margin-right: 20px;" class="circular-image"/>
                        <div class="text-content">
                            <h3>Sneha R., Chief Marketing Officer</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                 
                 <div onclick="" class="testimonial-columns" style="cursor:pointer;"> 
                 
                       
                       <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png" alt="Image 2" style="    height: 109px; width: 90px; " /> 
                        <div class="text-contents">
                            <p class="serum-head">Between city pollution and intense screen-exposure, my skin felt like it had given up. But Ramaeri changed everything. The products are light and
natural, and they really work. My skin feels smooth and shiny, and I do not suffer from my weekend makeup woes again!</p>
                            <a href="./Products.html" class="testimonial-shop-now">Shop Now >></a>

                        </div>

                    </div>
                </div>
            </div>
                <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/Fmf2w3od7EwNWtxbZEWi6Z2jlKCJNc5PCSwSljq8.jpg" alt="Image 1" style="margin-right: 20px;" class="circular-image"/>
                        <div class="text-content">
                            <h3>Arjun M., IT Consultant</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                 
                 <div onclick="" class="testimonial-columns" style="cursor:pointer;"> 
                   <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png" alt="Image 2" style="    height: 109px; width: 90px; " /> 
                        <div class="text-contents">
                            <p class="serum-head">&quot;Sitting in air-conditioned rooms and staring at screens all day really hurt my skin—it was dry, dull, and lifeless. A friend told me about Ramaeri, and
it made such a big difference. I&#039;m in love with it.</p>
                            <a href="./productDetails.html" class="testimonial-shop-now">Shop Now >></a>
              </div>
                      </div>
                </div>
            </div>
            <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/xCYygUBBC4Uyhqv6BCeMpjWttEHxacnLsZERVfYv.jpg" alt="Image 1" style="margin-right: 20px;" class="circular-image"/>
                        <div class="text-content">
                            <h3>Priya, HR Manager</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                    <div onclick="" class="testimonial-columns" style="cursor:pointer;"> 
                 <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png" alt="Image 2" style="    height: 109px; width: 90px; " /> 
                        <div class="text-contents">
                            <p class="serum-head">I work in HR, and my days consist of meetings and long hours in harsh office lighting. My skin was always dry and nothing seemed to help. Then I
tried Ramaeri — my skin really seemed to get its glow back! Now I don’t just look comfortable; I feel it too, even after a full day of work.</p>
                            <a href="./Recent.html" class="testimonial-shop-now">Shop Now >></a>

                        </div>
 </div>
                </div>
            </div>
             <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/egno7MV7uQn298mnazwhogJf3646rVIrz4Oe4pqV.jpg" alt="Image 1" style="margin-right: 20px;" class="circular-image"/>
                        <div class="text-content">
                            <h3>Karan T., Financial Analyst</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                    <div onclick="" class="testimonial-columns" style="cursor:pointer;"> 
                    <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png" alt="Image 2" style="    height: 109px; width: 90px; " /> 
                        <div class="text-contents">
                            <p class="serum-head">I&#039;m on the finances, so my job comes with endless hours at a desk and a lot of stress. And my skin pays the price—it looked as tired, dry, and old as it
did. Ramaeri has been like a reset for me. My skin feels refreshed and alive again.</p>
                            <a href="./productDetails.html" class="testimonial-shop-now">Shop Now >></a>
</div>
 </div>
                </div>
            </div>
                <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/Lzvl0nHEdJoNlkJ6GuDoComQEBYQb1UJOxI1QbaV.jpg" alt="Image 1" style="margin-right: 20px;" class="circular-image"/>
                        <div class="text-content">
                            <h3>Richa M., Team Leader</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                 <div onclick="" class="testimonial-columns" style="cursor:pointer;"> 
                 <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png" alt="Image 2" style="    height: 109px; width: 90px; " /> 
                        <div class="text-contents">
                            <p class="serum-head">A team leading corporate strategy means stress and screen time are constant partners. Ramaeri has been a game-changer. It&#039;s easy to use and the
results are self-evident.&quot; I get compliments that my skin is soft and glowing even after a hard week!</p>
                            <a href="https://www.ramaeri.com/products/vital-glow-face-mist" class="testimonial-shop-now">Shop Now >></a>
 </div>
</div>
                </div>
            </div>
                     <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/3YQi7oe0TCrXbA4b8Z0yo9nsBj6ydwCsyR8LMQUJ.jpg" alt="Image 1" style="margin-right: 20px;" class="circular-image"/>
                        <div class="text-content">
                            <h3>Ronika Kale</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                 <div onclick="" class="testimonial-columns" style="cursor:pointer;"> 
                 <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png" alt="Image 2" style="    height: 109px; width: 90px; " /> 
                        <div class="text-contents">
                            <p class="serum-head">Explore authentic health product reviews from real users. Gain insights on effectiveness and quality to make informed wellness choices. Join our community and share your experience!</p>
                            
                                        
                            <a href="https://www.ramaeri.com/products/ramaeri-blue-tea-antiox-foaming-facewash" class="testimonial-shop-now">Shop Now >></a>

                        </div>
</div>
                </div>
            </div>
            <div onclick="" class="swiper-slide feedback-sweep" style="cursor:pointer;">
                <div class="testimonial-row" style="padding-left: 23px;padding-right: 25px;">
                    <div class="testimonial-column">
                        <img src="https://www.ramaeri.com/public/public/reviews/MfXaunXtkk8A6HsoepHDLBaJzumCDe0QBjpXaxH7.jpg" alt="Image 1" style="margin-right: 20px;" class="circular-image"/>
                        <div class="text-content">
                            <h3>Kalpna chawala</h3>
                            <p>Recomonded this product</p>
                        </div>
                    </div>
                 <div onclick="" class="testimonial-columns" style="cursor:pointer;"> 
                 <img src="https://www.ramaeri.com/public/uploads/media/bef2fKSqpiJk8FdXkM9qNxLhSsJfqcfZwjdv1p0I.png" alt="Image 2" style="    height: 109px; width: 90px; " /> 
                        <div class="text-contents">
                            <p class="serum-head">Explore authentic health product reviews from real users. Gain insights on effectiveness and quality to make informed wellness choices. Join our community and share your experience!</p>
                            <a href="https://www.ramaeri.com/products/ramaeri-sea-hydration-face-moisturiser" class="testimonial-shop-now">Shop Now >></a>
</div>

                    </div>
                </div>
            </div>
          </div>
    </div>
</section>


<?php echo $this->section('script'); ?>
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