<div class="container-xxl">
    <div class="row">
        <form id="<?= $formid ?>">
            <?php if ($editit) { ?>
                <input type="hidden" name="edit" value="<?= $editit ?>">
            <?php } ?>
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
                <?php foreach ($detailsdata as $key => $value) { ?>
                    <div class="col-lg-3">
                        <div class="card bg-light-subtle">
                            <div class="card-header border-0  justify-content-start align-items-center p-5">
                                <div class="d-flex align-items-center gap-3">
                                    <div>
                                        <img src="<?php echo base_url() ?>/writable/<?php echo $value['icon'] ?>"
                                            width="100px">
                                    </div>
                                    <div class="form-check form-switch ">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked1" checked="" name="status">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </form>
    </div>
</div>
<?php echo $this->section('script') ?>
<?php echo view('common_script/imageorfileupload', ['imageids' => 'imagename', 'input' => 'review-name', 'filetype' => 'image']); ?>
<?php _ec($this->include('Core\Paymentmethods\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>