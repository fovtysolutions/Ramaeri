<div class="container-fluid">
    <form action="" method="post">
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-light-subtle">
                    <div class="card-header border-0 justify-content-between p-4">
                        <div>
                            <h4>Payment Methods Settings</h4>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </form>

</div>
<?php echo $this->section('script') ?>
<?php _ec($this->include('Core\Paymentmethods\Views\frontjavascript'), false) ?>
<?php echo $this->endSection() ?>