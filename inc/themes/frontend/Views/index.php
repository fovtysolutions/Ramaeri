<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('assets/public/css/custom.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/public/css/custom1.css'); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url('assets/public/css/main.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/public/css/select2.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/public/css/summernote-custom.css'); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/public/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/public/css/owl.theme.default.css'); ?>">
    <!-- Include Slick carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/public/css/slick-theme.min..css'); ?>">

    <!-- Include Slick carousel JS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/public/css/slick.css'); ?>">
    <link href="<?php echo base_url('assets/public/css/summernote-lite.min.css'); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url('assets/public/css/toastr.css'); ?>" rel="stylesheet" type="text/css" />
    <?php _ec($this->renderSection('frontcss'), false) ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body style="overflow-x:hidden">
    <div class="main-wrapper" style="overflow:hidden">
        <?php _ec($this->include('Frontend\Views\navbar'), false) ?>
        <?php _ec($this->include('Frontend\Views\mobilenav'), false) ?>
        <?php _ec($this->include('Frontend\Views\login'), false) ?>
        <?php _ec($this->include('Frontend\Views\register'), false) ?>
        <?php _ec($this->include('Frontend\Views\forgot'), false) ?>
        <?php _ec($this->include('Frontend\Views\login'), false) ?>
        <?php _ec($this->include('Frontend\Views\thanks'), false) ?>
        <?= $content ?>
        <?php _ec($this->include('Frontend\Views\footer'), false) ?>
    </div>

    <script src="<?php echo base_url('assets/public/js/vendors/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/vendors/clipboard.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/vendors/isotop.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/vendors/jquery-3.6.4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/vendors/jquery-ui.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/vendors/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/vendors/parallax-scroll.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/vendors/range-slider.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/vendors/simplebar.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/vendors/swiper-bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/vendors/waypoints.js') ?>"></script>

    <script src="<?php echo base_url('assets/public/js/app.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/select2.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/sw.js') ?>"></script>
    <script src="<?php echo base_url('assets/public/js/toastr.min.js') ?>"></script>
    <?php _ec($this->renderSection('script'), false) ?>
    <?php _ec($this->include('Frontend\Views\submitit'), false) ?>
</body>

</html>