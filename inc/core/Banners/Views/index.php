<?php 
$request = \Config\Services::request();
if ( !$request->isAJAX() ) {
?>
    <?php 
     _e( $this->extend('Backend\Views\index'), false);
    ?>
    <?php echo $this->section('content') ?>
        <?php echo $content ?>
    <?php echo $this->endSection() ?>
<?php }else{ ?>
    <?php echo $content ?>
<?php } ?>
