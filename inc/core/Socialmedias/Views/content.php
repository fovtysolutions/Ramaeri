<div class="container-xxl">
    <form id="<?= $formid ?>">
        <?php if ($editit) { ?>
            <input type="hidden" name="edit" value="<?= $editit ?>">
        <?php } ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-light-subtle p-2">
                    <div class="card-header border-0 justify-content-between">
                        <div>
                            <h4>Social Login Configurations</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 ">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>Google Login</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label for="product-categories" class="form-label">Google Client ID</label>
                                <input name="google_client_id" class="form-control" type="text"
                                    value="<?= isset($detailsdata->google_client_id) ? $detailsdata->google_client_id : '' ?>"
                                    placeholder="Enter google_client_id">
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Google Client Secret</label>
                                    <input name="google_client_secret" class="form-control" type="text"
                                        value="<?= isset($detailsdata->google_client_secret) ? $detailsdata->google_client_secret : '' ?>"
                                        placeholder="Enter google_client_secret">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="product-categories" class="form-label">Is Active?</label>
                                <select class="form-control" id="product-categories" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="google_status">
                                    <option value="" <?= empty($detailsdata->google_status) ? 'selected' : '' ?>>Select
                                        Action</option>
                                    <option value="Active" <?= (isset($detailsdata->google_status) && $detailsdata->google_status == 'Active') ? 'selected' : '' ?>>Active</option>
                                    <option value="Deactive" <?= (isset($detailsdata->google_status) && $detailsdata->google_status == 'Deactive') ? 'selected' : '' ?>>Deactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Social Login Configurations</h4>
                    </div>
                </div>
            </div>
            
            <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-start g-2">
                        <div class="col-lg-3 ">
                            <a href="javascript:void(0)" id="savebtn" class="btn btn-primary w-75 p-1">
                                Save Configuration</a>
                        </div>
                    </div>
                </div>
            
    </form>
</div>
</div>
<?php echo $this->section('script') ?>
<?php _ec($this->include('Core\Socialmedias\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>