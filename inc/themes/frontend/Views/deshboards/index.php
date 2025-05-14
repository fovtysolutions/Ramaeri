<?php echo $this->section('frontcss'); ?>
 <link rel="stylesheet" href="<?php echo base_url('assets/public/css/deshboard.css'); ?>">
<?php echo $this->endSection(); ?>
 <section class="profile-sec">
        <div class="container">
            <div class="row">
                <div class="d-flex align-items-start gap-5 mob-v">
                    <div class="col-12 col-md-3 col-xl-2">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <div style="text-align:center;margin-bottom:-2rem">
                                <button class="nav-link active" id="home-tab"><span id="profilespan" style="font-size:1.5rem">&#x2022;</span> My Profile</button>
                                <button class="nav-link" id="profile-tab" ><span id="addressspan" style="font-size:1.5rem">&#x2022;</span> My Address</button>
                            </div>
                            <div class="">
                                <button class="nav-link" id="messages-tab"><span  id="ordersspan" style="font-size:1.5rem">&#x2022;</span> My Orders</button>
                                <button class="nav-link" id="settings-tab"><a href="#" style="all:unset"><span style="font-size:1.5rem;color:#c4d0bb">&#x2022;</span> Logout</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 col-xl-10">
                        <div class="tab-content" id="">
                            <div class="tab-pane active" id="home">
                                <h2 class="m-title">
                                    My Profile
                                </h2>
                                <hr class="hrline" style="color=#4A6437;">
                                <div class="p-txt-cnt">
                                    <div class="row align-items-center" style="margin-top:1.5rem;margin-left:1.5rem;justify-content: space-between;padding-right: 30px;">
                                        <div class="col-9 col-md-8 col-xl-8">
                                            <div class="txt-cnt-main">
                                                <p>Shekhar</p>
                                                <p>example@demo.com</p>
                                                <p>*********</p>
                                            </div>
                                        </div>
                                        <div class="col-2 col-md-2 col-xl-2 d-flex float-end" style="text-align: right !impportant;">
                                            <img src="https://www.ramaeri.com/storage/app/public/images/penpng.png" style="font-size:large;width:20px;height:20px;margin-top: .6rem;" alt="Arrow Icon" class="btn-arrow add_cart_arrow">
                                            <button  class="edit-btn"  data-toggle="modal" style="font-size:large;margin-left: -10px" data-target="#updateProfileModal">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="profile">
                                <h2 class="m-title"> My Address</h2>   
                                <hr class="hrline">
                                <div class="p-txt-cnt">                
                                    <div class="container" style="padding-top:1rem">                        
                                                                        </div>
                                    <button class="profile-add-btn" onclick="addnewAddress()">+</button>
                                </div>
                                
                            </div>
                            <div class="tab-pane " id="messages">
                            <h2 class="m-title"> My Orders </h2>
                            <hr class="hrline">
                            <div class="p-txt-cnt">
                                <div class="container" style="padding-top:1rem"> 
                                      
                                </div>  
                                <!--  -->
                                <!--<div class="row align-items-center">-->
                                <!--    <div class="col-2 col-md-2 col-xl-2">-->
                                <!--        <div class="profile-p">-->
                                <!--            <img src="https://www.ramaeri.com/storage/app/public/images/t-11.png" alt=""-->
                                <!--                class="img-fluid">-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div class="col-6 col-md-6 col-xl-6">-->
                                <!--        <div class="profile-p">-->
                                <!--            <h5 class="cart-item-inner-heading">Facewash Gel - Grape Glow gel-->
                                <!--                for Digital Defense </h5>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div class="col-4 col-md-4 col-xl-4">-->
                                <!--        <div class="status-btn">-->
                                <!--            <a href="#" class="btn-cnl">Cancel ></a>-->
                                <!--        </div>-->
                                <!--    </div>-->
    
                                <!--</div>-->
                            </div>
                            <!-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <h2 class="m-title">
                                    Logout
                                </h2>
                                <div class="p-txt-cnt">
                                    <div class="content">
                                        <div class="row align-items-center">
    
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade custom-modal" id="scrollableModal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollableModalTitle">Orders Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid conmod">
                        <div class="row modal-row-header">
                            <div class="col-1">#</div>
                            <div class="col-2">Thumbnil</div>
                            <div class="col-5">Title</div>
                            <div class="col-2">Qty</div>
                            <div class="col-2">Price</div>
                        </div>
    
                        <!-- Example row start -->
                        
                        <div id="modal-product-details">
                            <!-- Dynamic content will be injected here -->
                        </div>
                         <div class="row modal-row-header">
                            <div class="col-1"></div>
                            <div class="col-9">Total Amount</div>
                            <div class="col-2 total_price"></div>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>                  
                <!-- model code ends -->
                  <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="newaddressaddLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="background:none;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newaddressaddLabel">Add New Address</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick='closeModal(event)'>
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST" id="modal_address">
                            <input type="hidden" name="_token" value="GbAh8jz0LNVUu4aodajcqyvyLw5tOEi5wtu87o1n" autocomplete="off">                        <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input 
                                    type="integer" 
                                    class="form-control" 
                                    id="mobile" 
                                    name="mobile" 
                                    required 
                                    maxlength="10" 
                                    pattern="\d{10}" 
                                    title="Please enter a valid 10-digit mobile number"
                                >
                                <small id="mobile-error" style="color: red; display: none;">Please enter a valid 10-digit mobile number.</small>
                            </div>
                            
                                
                                <input type="hidden" name="id" value="" id="id_fi"></input>
                                
                            
                            <div class="form-group">
                                <label for="building">Building</label>
                                <input type="text" class="form-control" id="building" name="building" required>
                            </div>
                            <div class="form-group">
                                <label for="landmark">Landmark</label>
                                <input type="text" class="form-control" id="landmark" name="landmark" required>
                            </div>
                            <div class="form-group">
                                <label for="street">Street</label>
                                <input type="text" class="form-control" id="street" name="street" required>
                            </div>
                            <div class="form-group">
                                <label for="city">Pincode</label>
                                <input type="text" oninput="enforcePincodeLength(event)" class="form-control" id="pincode" name="pincode" required>
                            </div>
                            <div class="form-group">
                                <label for="State_update">State</label>
                                <select class="form-control" id="State_update" name="State_update" required>
                                    <option value="">Select state</option>
                                                                                                        <option value="1">Andaman and Nicobar Islands</option>
                                                                        <option value="2">Andhra Pradesh</option>
                                                                        <option value="3">Arunachal Pradesh</option>
                                                                        <option value="4">Assam</option>
                                                                        <option value="5">Bihar</option>
                                                                        <option value="6">Chandigarh</option>
                                                                        <option value="7">Chhattisgarh</option>
                                                                        <option value="8">Dadra and Nagar Haveli</option>
                                                                        <option value="9">Daman and Diu</option>
                                                                        <option value="10">Delhi</option>
                                                                        <option value="11">Goa</option>
                                                                        <option value="12">Gujarat</option>
                                                                        <option value="13">Haryana</option>
                                                                        <option value="14">Himachal Pradesh</option>
                                                                        <option value="15">Jammu and Kashmir</option>
                                                                        <option value="16">Jharkhand</option>
                                                                        <option value="17">Karnataka</option>
                                                                        <option value="18">Kenmore</option>
                                                                        <option value="19">Kerala</option>
                                                                        <option value="20">Lakshadweep</option>
                                                                        <option value="21">Madhya Pradesh</option>
                                                                        <option value="22">Maharashtra</option>
                                                                        <option value="23">Manipur</option>
                                                                        <option value="24">Meghalaya</option>
                                                                        <option value="25">Mizoram</option>
                                                                        <option value="26">Nagaland</option>
                                                                        <option value="27">Narora</option>
                                                                        <option value="28">Natwar</option>
                                                                        <option value="29">Odisha</option>
                                                                        <option value="30">Paschim Medinipur</option>
                                                                        <option value="31">Pondicherry</option>
                                                                        <option value="32">Punjab</option>
                                                                        <option value="33">Rajasthan</option>
                                                                        <option value="34">Sikkim</option>
                                                                        <option value="35">Tamil Nadu</option>
                                                                        <option value="36">Telangana</option>
                                                                        <option value="37">Tripura</option>
                                                                        <option value="38">Uttar Pradesh</option>
                                                                        <option value="39">Uttarakhand</option>
                                                                        <option value="40">Vaishali</option>
                                                                        <option value="41">West Bengal</option>
                                                                </select>
                            </div>
                            <div class="form-group">
                                <label for="City_updates">City</label>
                                <select class="form-control" id="City_update" name="City_update" required>
                                    <option value="">Select city</option>
                                </select>
                            </div>
                            <button type="submit" id="address_saver" class="btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background:#4A6437;color: #fff" style="background:#4A6437">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                   <div class="modal fade" id="updateProfileModal" tabindex="-1" role="dialog" aria-labelledby="updateProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateProfileModalLabel">Update Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  action="/" method="POST">
                        <input type="hidden" name="_token" value="GbAh8jz0LNVUu4aodajcqyvyLw5tOEi5wtu87o1n" autocomplete="off">                <div class="form-group" >
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="update_name" value="Shekhar"  placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" email='email' value="example@demo.com" placeholder="Enter your email" readonly>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" 
                            class="form-control" 
                            id="phone" 
                            name="phone" 
                            value="8959281584" 
                            placeholder="Enter your Phone"
                            pattern="\d{10}" 
                            maxlength="10" 
                            minlength="10"
                            required
                            title="Phone number must be exactly 10 digits">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background:#4A6437;color: #fff" id="saveProfileBtn">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    /** openModal()     */

    async function openModal(event) {
      const btn    = event.currentTarget;
      const target = btn.getAttribute('data-bs-target');
      const modalEl = document.querySelector(target);
      let bodyEl;

      // Determine which modal body to populate
      switch (target) {
        case '#profileModal':
          bodyEl = modalEl.querySelector('#profileBody');
          // Load inline or via AJAX:
          bodyEl.innerHTML = `
            <strong>Shekhar</strong><br>
            <a href="mailto:example@demo.com">example@demo.com</a><br>
            *********`;
          break;

        case '#addressModal':
          bodyEl = modalEl.querySelector('#addressBody');
         // Load inline or via AJAX:
          bodyEl.innerHTML = `
            <strong>Shekhar</strong><br>
            <a href="mailto:example@demo.com">example@demo.com</a><br>
            *********`;
          break;

        case '#ordersModal':
          bodyEl = modalEl.querySelector('#ordersBody');
          // Load inline or via AJAX:
          bodyEl.innerHTML = `
            <strong>Shekhar</strong><br>
            <a href="mailto:example@demo.com">example@demo.com</a><br>
            *********`;
          break;

        // Logout modal has static content
      }

      // Finally, show the Bootstrap modal
      const modal = new bootstrap.Modal(modalEl);
      modal.show();  /* :contentReference[oaicite:2]{index=2} */
    }
  </script>               
<script>
    function showSection(sectionId) {
      document.querySelectorAll('.section').forEach(sec => sec.classList.add('hidden'));
      document.getElementById(sectionId).classList.remove('hidden');
    }
  </script>   
 <?php echo $this->endSection(); ?>