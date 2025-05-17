<div class="container-fluid">
    <form action="" method="post">
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-light-subtle">
                    <div class="card-header border-0 justify-content-between p-4">
                        <div>
                            <h4>Admin Dashboard</h4>
                        </div>
                        <div class="d-flex">
                            <div class="">
                                <a href="<?=base_url($addbtnroute)?>" class="btn btn-primary me-1 p-2"><i class="bx bx-plus"></i>
                                    Add
                                    Product</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>

</div>
<?php echo $this->section('script') ?>
<?php _ec($this->include('Core\Dashboard\Views\frontjavascript'), false) ?>
<?php echo $this->endSection() ?>