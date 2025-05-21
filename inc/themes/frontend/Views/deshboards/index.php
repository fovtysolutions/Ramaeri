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
                                <button class="nav-link" id="home-tab"><span id="profilespan"
                                        style="font-size:1.5rem">&#x2022;</span> My Profile</button>
                                <button class="nav-link" id="profile-tab"><span id="addressspan"
                                        style="font-size:1.5rem">&#x2022;</span> My Address</button>
                                <button class="nav-link" id="messages-tab"><span id="ordersspan"
                                        style="font-size:1.5rem">&#x2022;</span> My Orders</button>
                                <button class="nav-link" id="settings-tab"><a href="<?php echo base_url('logout') ?>"
                                        style="all:unset"><span style="font-size:1.5rem;color:#c4d0bb">&#x2022;</span>
                                        Logout</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 col-xl-10">
                        <div class="tab-content" id="">
                            <div class="tab-pane" id="home">
                                <h2 class="m-title">
                                    My Profile
                                </h2>
                                <hr class="hrline" style="" color="#4A6437;">
                                <div class="p-txt-cnt">
                                    <div class="row align-items-center"
                                        style="margin-top:1.5rem;margin-left:1.5rem;justify-content: space-between;padding-right: 30px;">
                                        <div class="col-9 col-md-8 col-xl-8">
                                            <div class="txt-cnt-main">
                                                <p id="profile-username"><?php echo $productdata['user']->username ?></p>
                                                <p id="profile-email"><?php echo $productdata['user']->email ?></p>
                                                <p id="profile-number"><?php echo $productdata['user']->number ?></p>
                                            </div>
                                        </div>
                                        <div class="col-2 col-md-2 col-xl-2 d-flex float-end" style="text-align:right;">
                                            <img src="https://www.ramaeri.com/storage/app/public/images/penpng.png"
                                                style="font-size:large;width:20px;height:20px;margin-top: .6rem;"
                                                alt="Arrow Icon" class="btn-arrow add_cart_arrow">
                                            <button class="edit-btn" style="font-size:large;margin-left: -10px"
                                                onclick="update_profile()">Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="profile">
                                <h2 class="m-title"> My Address</h2>
                                <hr class="hrline">
                                <div class="p-txt-cnt">
                                    <div class="container" style="padding-top:1rem">
                                        <?php foreach ($productdata['address'] as $key => $value) { ?>
                                            <div class="row align-items-center allclick0"
                                                style="cursor:pointer;justify-content: space-between;padding-right: 30px;">
                                                <div class="col-7 col-md-7 col-xl-7 d-flex">
                                                    <span class="dotin dotin0"
                                                        style="font-size:2rem;padding-top: 3.5rem;color:#858a82">&#x2022;</span>
                                                    <div class="txt-cnt-main address-l">
                                                        <p><span id="firstname"><?php echo $value->first_name ?></span>
                                                        <span id="lastname"><?php echo $value->last_name ?></span>,
                                                            <span id="landmark"><?php echo $value->landmark ?></span>
                                                        </p>
                                                        <p id="email"><?php echo $value->email ?></p>
                                                        <p>
                                                        <span ><?php echo $value->house ?></span>
                                                        <span id="address"><?php echo $value->address ?></span>,
                                                            <span id="pincode"><?php echo $value->pincode ?><?php echo $value->state ?><?php echo $value->city ?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-2 col-md-2 col-xl-2 deletein deletein0"
                                                    style="text-align: center;">
                                                    <span style="text-wrap: nowrap;">
                                                        <img src="https://ramaeri.com/storage/app/public/images/penpng.png"
                                                            style="font-size:large;width:20px;height:20px;margin-top: .6rem;"
                                                            alt="Arrow Icon" class="btn-arrow add_cart_arrow">
                                                        <button class="edit-btn"
                                                            style="font-size:large;margin-left: -10px;padding-right:15px;"
                                                            onclick="add_address()">Edit</button>
                                                        <a class="mr-2" style="color:#000;">
                                                            <span aria-hidden="true"
                                                                onclick="delete_address(<?php echo $value->id ?>)">
                                                                <img src="https://ramaeri.com/storage/app/public/images/trash1.png"
                                                                    class="img-fluid" style="width:16.77px; height:21.33px">
                                                            </span>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <button class="profile-add-btn" onclick="addnewAddress()">+</button>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane " id="messages">
                                <h2 class="m-title"> My Orders </h2>
                                <hr class="hrline">
                                <div class="p-txt-cnt">
                                    <div class="container" style="padding-top:1rem">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-md-2 col-xl-1">
                                                <div class="profile-p">
                                                    <img src="https://ramaeri.com/storage/app/public/images/t-11.png" alt=""
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-4 col-xl-7">
                                                <div class="profile-p">
                                                    <h5 class="cart-item-inner-heading pointer-text" id="openModalBtn"
                                                        data-index="160" data-toggle="modal" data-target="#scrollableModal">
                                                        Vital Glow Face Mist
                                                        <span> ( 1 ) </span>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-6 col-xl-4" style="text-align:center;margin-top:-1rem">
                                                <div class="col-6 col-md-6 col-xl-6">
                                                    <div class="profile-p" style="width:200%;margin-bottom: -0.5rem;">
                                                        <h6 style="all:unset;opacity:0.5;font-size:15px"
                                                            class="cart-item-inner-heading" id="openModalBtn"
                                                            data-index="160" data-toggle="modal"
                                                            data-target="#scrollableModal">
                                                            16-May-2025
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6 col-xl-6" style="text-align:left">
                                                    <div class="status-btn" style="width:190%">
                                                        <a href="<?php echo base_url('order-histery') ?>"
                                                            style="opacity:0.5;font-size:20px;" class="btn-pro"><span
                                                                class=""
                                                                style="font-size:1.5rem;padding-top: 3.5rem;color:#cecf87">&#x2022;</span>order_placed<span
                                                                style="width:10px">&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--order Modal -->
    <div class="modal fade custom-modal" id="scrollableModal" tabindex="-1" role="dialog"
        aria-labelledby="scrollableModalTitle" aria-hidden="true">
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

    <!-- new address model -->
    <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="newaddressaddLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="background:none;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newaddressaddLabel">Add New Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick='closeModal(event)'>
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="modal_address">
                        <input type="hidden" value="<?php echo $value->id?>" name="address_id">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control"  name="firstname" required >
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control"  name="lastname" required >
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="integer" class="form-control"  name="number" required maxlength="10"
                                pattern="\d{10}" title="Please enter a valid 10-digit mobile number">
                            <small id="mobile-error" style="color: red; display: none;">Please enter a valid 10-digit mobile
                                number.</small>
                        </div>
                        <div class="form-group">
                            <label for="building">Address</label>
                            <input type="text" class="form-control"  name="address" required >
                        </div>
                        <div class="form-group">
                            <label for="landmark">Landmark</label>
                            <input type="text" class="form-control" name="landmark" required>
                        </div>
                        <div class="form-group">
                            <label for="city">Pincode</label>
                            <input type="text" oninput="enforcePincodeLength(event)" class="form-control" id="pincode"
                                name="pincode" required>
                        </div>
                        <div class="form-group">
                            <label for="State_update">State</label>
                            <select class="form-control" id="State_update" name="state" required>
                                <option value="">Select state</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="City_updates">City</label>
                            <select class="form-control" id="City_update" name="city" required>
                                <option value="">Select city</option>
                            </select>
                        </div>
                        <button type="submit" id="address_saver" class="btn"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background:#4A6437;color: #fff"
                            style="background:#4A6437">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- update Profile -->
    <div class="modal fade" id="updateProfileModal" tabindex="-1" role="dialog" aria-labelledby="updateProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateProfileModalLabel">Update Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <form id="update-profile" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="GbAh8jz0LNVUu4aodajcqyvyLw5tOEi5wtu87o1n"
                            autocomplete="off">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="username"
                                value="<?= isset($productdata['user']->username) ? $productdata['user']->username : '' ?>"
                                placeholder="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name='email'
                                value="<?= isset($productdata['user']->email) ? $productdata['user']->email : '' ?>"
                                placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="number"
                                value="<?= isset($productdata['user']->number) ? $productdata['user']->number : '' ?>"
                                placeholder="Enter your Phone" pattern="\d{10}" maxlength="10" minlength="10" required
                                title="Phone number must be exactly 10 digits">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background:#4A6437;color: #fff"
                            id="saveProfileBtn">Save</button>
                    </div>
                </form>
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
    <?php echo view('common_script/countryStateCity', ['stateid' => 'State_update', 'cityid' => 'City_update', 'selectedstate' => 'selectedstate', 'selectedcity' => 'selectedcity']); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link');
            const tabPanes = document.querySelectorAll('.tab-pane');

            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    // Remove 'active' from all nav links and tab panes
                    navLinks.forEach(nav => nav.classList.remove('active'));

                    // Add 'active' to clicked nav and corresponding tab
                    this.classList.add('active');
                    const id = this.id;

                    if (id === 'home-tab') {
                        document.getElementById('home').classList.add('active');
                        document.getElementById('home').style.display = 'block';
                        document.getElementById('profile').style.display = 'none';
                        document.getElementById('messages').style.display = 'none';
                        console.log("click home");

                    } else if (id === 'profile-tab') {
                        document.getElementById('profile').classList.add('active');
                        document.getElementById('profile').style.display = 'block';
                        document.getElementById('home').style.display = 'none';
                        document.getElementById('messages').style.display = 'none';
                        console.log("click profile");

                    } else if (id === 'messages-tab') {
                        document.getElementById('messages').classList.add('active');
                        document.getElementById('messages').style.display = 'block';
                        document.getElementById('profile').style.display = 'none';
                        document.getElementById('home').style.display = 'none';
                        console.log("click msg");

                    }
                });
            });
        });
    </script>
    <script>
        function update_profile() {
            $('#updateProfileModal').modal('show');
        }
        function add_address() {
            $('#addressModal').modal('show');
        }
    </script>
    <script>
        $(document).ready(function () {
            $("#update-profile").submit(function (e) {
                e.preventDefault();
                const form = document.getElementById("update-profile");
                let formData = new FormData(form);
                $.ajax({
                    type: "POST",
                    url: "<?= base_URL('update-profile') ?>",
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $("#update-profile").val("Please Wait...");
                    },
                    success: function (response) {
                        if (response.status === 'success') {
                            toastr.success(response.message || "Profile updated successfully!");
                            $("#profile-username").text(response.data.username);
                            $("#profile-email").text(response.data.email);
                            $("#profile-number").text(response.data.number);

                            $('#updateProfileModal').modal('hide');
                        } else if (response.status === 'error') {
                            toastr.error(response.message || "An error occurred!");
                        }
                    },
                    error: function () {
                        toastr.error("An unexpected error occurred!");
                        $("#update-profile").val("Save & Close");
                    }
                });
            })
        })

        //update address
        $(document).ready(function () {
            $("#modal_address").submit(function (e) {
                e.preventDefault();
                const form = document.getElementById("modal_address");
                let formData = new FormData(form);
                $.ajax({
                    type: "POST",
                    url: "<?= base_URL('address-update') ?>",
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $("#modal_address").val("Please Wait...");
                    },
                    success: function (response) {
                        if (response.status === 'success') {
                            // console.log(response.data.user);
                            toastr.success(response.message || "Profile updated successfully!");
                            $("#firstname").text(response.data.user.firstname);
                            $("#last_name").text(response.data.user.lastname);
                            $("#number").text(response.data.user.number);
                            $("#address").text(response.data.address.address);
                            $("#landmark").text(response.data.address.landmark);
                            $("#pincode").text(response.data.address.pincode);
                            $("#State_update").text(response.data.address.state);
                            $("#City_update").text(response.data.address.city);

                            $('#addressModal').modal('hide');
                        } else if (response.status === 'error') {
                            toastr.error(response.message || "An error occurred!");
                        }
                    },
                    error: function () {
                        toastr.error("An unexpected error occurred!");
                        $("#modal_address").val("Save & Close");
                    }
                });
            })
        })

        function delete_address(address_id) {
            $.ajax({
                type: "POST",
                url: "<?= base_URL('address-delete') ?>",
                data: {
                    'address_id': address_id
                },
                success: function (response) {
                    if (response.status === 'success') {
                        toastr.success(response.message || 'Address deleted successfully');
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    } else {
                        toastr.error(response.message || 'Something went wrong');
                    }
                },
                error: function (xhr) {
                    toastr.error('Server error occurred');
                    console.error(xhr.responseText);
                }
            });
        }


    </script>
    <?php echo $this->endSection(); ?>