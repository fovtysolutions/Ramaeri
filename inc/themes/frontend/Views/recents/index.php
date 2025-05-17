<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/recent.css'); ?>">
<?php echo $this->endSection(); ?>
<div class="content-wrapper">
            <div class="section-banner">
                <img src="<?php echo base_url('./writable'). '/' .$productdetails['blog']->banner_image ?>"
                    alt="Skin Protection">
            </div>
            <div class="container olverlay-headse"
                style="padding-left: 0.5rem !important;padding-right: .5rem !important;">
                <div class="head-sec" style="background-color:#DDE3D7;padding: 14px 23px 53px 28px;">
                    <div class="icon-calender">
                        <div class="date-container">
                            <svg stroke="currentColor" fill="rgba(74, 100, 55, 0.3)" stroke-width="0"
                                viewBox="0 0 448 512" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                                </path>
                            </svg>
                            <span style="color:#4A6437;"><?php echo date("d/m/Y", strtotime($productdetails['blog']->created_at)); ?></span>
                        </div>
                        <div class="share-container">
                            <i class="fa fa-share-alt" style="font-size:24px;color:#4A6437;" id="share-btn"></i>
                            <div class="social-icons">
                                <div class="d-flex">
                                    <a href="./Home.html" id="copyLink" class="social-icon"><img
                                            src="https://www.ramaeri.com/care/assets-2/images/share.png" /></a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.ramaeri.com"
                                        class="social-icon"><img
                                            src="https://www.ramaeri.com/care/assets-2/images/Y FB.png" /></a>
                                    <a href="https://www.xender.com/share?url=https://www.ramaeri.com"
                                        class="social-icon"><img
                                            src="https://www.ramaeri.com/care/assets-2/images/twitter.png" /></a>
                                    <a href="https://www.instagram.com/share?url=https://www.ramaeri.com"
                                        class="social-icon"><img
                                            src="https://www.ramaeri.com/care/assets-2/images/instagram.png" /></a>
                                    <a href="whatsapp://send?text=Check%20this%20out%3A%20https://www.ramaeri.com"
                                        class="social-icon"><img
                                            src="https://www.ramaeri.com/care/assets-2/images/whatsapp.png" /></a>
                                    <!-- Add more social icons as needed -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <h1 style="color:#4A6437;margin-top:10px"><?php  print_r($productdetails['blog']->name) ; ?></h1>

                    <p><?php  print_r($productdetails['blog']->excerpt) ; ?></p>


                </div>
                <div class="text-end d-none d-md-block" style="position: absolute;
    top: 156px;
    right: 13px;">
                    <img src="https://www.ramaeri.com/NestedProject/assets-2/images/Group.png">
                </div>
                <div class="container blogsingle mt-5" style="padding:5px!important">
                      <?php  print_r($productdetails['blog']->meta_description) ; ?>
                    <hr style="margin:50px 0 50px 0;">
                    <?php // print_r($productdetails['bloglast_1']) ; ?> <br>
                    
                    <div class="recent_post">
                        <h1 style="color:#4A6437;margin-top:10px;font-size:25px;font-family:Poppins;font-weight:500">
                            Recent Post</h1>
                        <div class="row">
                            <div class="col-md-7">
                                <?php  foreach ($productdetails['secondlast_2'] as $key => $value) { ?>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <div class="myclass">
                                            <a href="<?php echo base_url('./care').'/'.$value->slug?>"
                                                style="text-decoration:none;">
                                                <img
                                                    src="<?php echo base_url('./writable'). '/' .$value->banner_image ?>"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 h-100">
                                        <div class="card p-3 h-100">
                                            <a href="<?php echo base_url('./care').'/'.$value->slug?>"
                                                style="text-decoration:none;">
                                                <h1 style="color:#4A6437;font-size:22px;line-height:27.54px">
                                                    <?php echo $value->name ?>
                                                </h1>
                                            </a>
                                            <div class="icon-calender">
                                                <div class="date-container">
                                                    <svg stroke="currentColor" fill="rgba(74, 100, 55, 0.3)"
                                                        stroke-width="0" viewBox="0 0 448 512" height="1.5em"
                                                        width="1.5em" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                                                        </path>
                                                    </svg>
                                                    <span style="color:#4A6437;"><?php echo date("d/m/Y", strtotime($value->created_at)); ?></span>
                                                </div>
                                                <div>
                                                    <a
                                                        href="<?php echo base_url('./care').'/'.$value->slug?>"><button
                                                            class="read_morebtnblog">Read More &nbsp;&nbsp;<svg
                                                                stroke="currentColor" fill="currentColor"
                                                                stroke-width="0" viewBox="0 0 512 512" height="19px"
                                                                width="19px" xmlns="http://www.w3.org/2000/svg">
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
                                <?php  }?>
                            </div>




                            <div class="col-md-5">
                                <div class="bolog_post_img">
                                    <a href="<?php echo base_url('./care').'/'.$value->slug?>"
                                        style="text-decoration:none;">
                                        <img src="<?php echo base_url('./writable'). '/' .$value->banner_image ?>"
                                            style="width:100%;border-radius:6px"></a>
                                </div>
                                <div>
                                    <a href="<?php echo base_url('./care').'/'.$value->slug?>"
                                        style="text-decoration:none;">
                                        <h5 style="color:#4A6437;margin-top:9px;font-size:20px;line-height:27.54px">
                                            <?php  print_r($productdetails['bloglast_1']->name) ; ?></h5>
                                    </a>
                                    <div class="icon-calenderss">
                                        <div class="date-container">
                                            <svg stroke="currentColor" fill="rgba(74, 100, 55, 0.3)" stroke-width="0"
                                                viewBox="0 0 448 512" height="1.5em" width="1.5em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                                                </path>
                                            </svg>
                                            <span style="color:#4A6437;"><?php echo date("d/m/Y", strtotime($value->created_at)); ?></span>
                                        </div>
                                        <div>
                                            <a
                                                href="<?php echo base_url('./care').'/'.$value->slug?>"><button
                                                    class="read_morebtnblog">Read More &nbsp;&nbsp;<svg
                                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 512 512" height="19px" width="19px"
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
                        </div>
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
            document.addEventListener('DOMContentLoaded', function () {
                // Get the link element
                var copyLink = document.getElementById('copyLink');

                // Add click event listener
                copyLink.addEventListener('click', function (event) {
                    // Prevent the default action of the link
                    event.preventDefault();

                    // Create a temporary input element to copy the link
                    var tempInput = document.createElement('input');
                    tempInput.value = copyLink.href;
                    document.body.appendChild(tempInput);

                    // Select and copy the input value
                    tempInput.select();
                    document.execCommand('copy');

                    // Remove the temporary input element
                    document.body.removeChild(tempInput);

                    // Optional: Alert or notify user that the link has been copied
                    // alert('Link copied to clipboard: ' + copyLink.href);
                });
            });

        </script>
<?php echo $this->endSection(); ?>