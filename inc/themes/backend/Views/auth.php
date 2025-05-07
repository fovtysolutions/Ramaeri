<?php 
    $db = \Config\Database::connect();
    $setting = $db->table('setting')->get();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo _ec((!empty($setting->title) ? $setting->title : null)) ?> ::
            <?php echo _ec((!empty($title) ? $title : null)) ?></title>
            <!-- Vendor css (Require in all Page) -->
        <link href="<?php echo base_url('assets/css/vendor.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Icons css (Require in all Page) -->
        <link href="<?php echo base_url('assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />

        <!-- App css (Require in all Page) -->
        <link href="<?php echo base_url('assets/css/app.min.css'); ?>" rel="stylesheet" type="text/css" />

        <!-- Theme Config js (Require in all Page) -->
        <script src="<?php echo base_url('assets/js/config.js'); ?>"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    </head>
    <body>
        <?php echo $content ?>
        <?php _ec($this->renderSection('script'), false) ?>
        <?php _ec($this->include('Backend\Views\toster'), false) ?>
        <?php _ec($this->include('Backend\Views\script'), false) ?>
        <?php _ec( $this->include('Backend\Views\submitit'), false )?>
    </body>
</html>