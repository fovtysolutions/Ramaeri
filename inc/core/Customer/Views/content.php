<div class="card">
    <div class="card-header"> <h4> <?=$heading?> <small class="float-right"><a href="<?php echo base_url("customer") ?>" class="btn btn-blue-th btn-md"><i class="ti-plus" aria-hidden="true"></i> Back</a></small></h4></div>
    <div class="row">
        <!--  table area -->
        <div class="col-sm-12">
            <div class="card-body">
                <form id="<?=$formid?>">
                    <?php if($editit){ ?>
                        <input type="hidden" name="edit" value="<?=$editit?>">
                    <?php } ?>
                    <div class="form-group row">
                        <label for="c_name" class="col-sm-2 col-form-label">Customer Name <span class="text-danger">*</span></label>
                        <div class="col-sm-4">
                            <input name="c_name" autocomplete="off" class="form-control" required type="text" placeholder="Customer Name" id="c_name" value="<?= isset($detailsdata->c_name)? $detailsdata->c_name : '' ?>">
                        </div>
                        <label for="c_email" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-4">
                            <input name="c_email" autocomplete="off" class="form-control" required type="text" placeholder="Email" id="c_email" value="<?= isset($detailsdata->c_email)? $detailsdata->c_email : '' ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="c_phone" class="col-sm-2 col-form-label">Phone<span class="text-danger">*</span></label>
                        <div class="col-sm-4">
                            <input name="c_phone" autocomplete="off" class="form-control" type="text" required placeholder="Phone" id="c_phone" value="<?= isset($detailsdata->c_phone)? $detailsdata->c_phone : '' ?>">
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-blue-th w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="button" id="savebtn" class="btn btn-orange-th w-md m-b-5"><?php echo display('ad') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $this->section('script') ?>
    <?php _ec( $this->include('Core\Customer\Views\submitit'), false )?>
<?php echo $this->endSection() ?>