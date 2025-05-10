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
                            <h4>SMTP Setting</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 ">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-lg-12 mb-3">
                                <label for="product-categories" class="form-label">Type</label>
                                <select class="form-control" id="product-categories" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="type">
                                    <option value="" <?= empty($detailsdata->type) ? 'selected' : '' ?>>Select
                                        Type</option>
                                    <option value="Sendmail" <?= (isset($detailsdata->type) && $detailsdata->type == 'Sendmail') ? 'selected' : '' ?>>Sendmail</option>
                                    <option value="SMTP" <?= (isset($detailsdata->type) && $detailsdata->type == 'SMTP') ? 'selected' : '' ?>>SMTP</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Mail Host</label>
                                    <input name="mail_host" class="form-control" type="text"
                                        value="<?= isset($detailsdata->mail_host) ? $detailsdata->mail_host : '' ?>"
                                        placeholder="Enter mail_host">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Mail Port</label>
                                    <input name="mail_port" class="form-control" type="text"
                                        value="<?= isset($detailsdata->mail_port) ? $detailsdata->mail_port : '' ?>"
                                        placeholder="Enter mail_port">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Mail Username</label>
                                    <input name="mail_username" class="form-control" type="text"
                                        value="<?= isset($detailsdata->mail_username) ? $detailsdata->mail_username : '' ?>"
                                        placeholder="Enter mail_username">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Mail Password</label>
                                    <input name="mail_password" class="form-control" type="text"
                                        value="<?= isset($detailsdata->mail_password) ? $detailsdata->mail_password : '' ?>"
                                        placeholder="Enter mail_password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Mail Encryption</label>
                                    <input name="mail_encryption" class="form-control" type="text"
                                        value="<?= isset($detailsdata->mail_encryption) ? $detailsdata->mail_encryption : '' ?>"
                                        placeholder="Enter mail_encryption">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Mail From Address</label>
                                    <input name="mail_from_address" class="form-control" type="text"
                                        value="<?= isset($detailsdata->mail_from_address) ? $detailsdata->mail_from_address : '' ?>"
                                        placeholder="Enter mail_from_address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Mail From Name</label>
                                    <input name="mail_from_name" class="form-control" type="text"
                                        value="<?= isset($detailsdata->mail_from_name) ? $detailsdata->mail_from_name : '' ?>"
                                        placeholder="Enter mail_from_name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-start g-2">
                        <div class="col-lg-3 ">
                            <a href="javascript:void(0)" id="savebtn" class="btn btn-primary w-100 p-1">
                                Save Configuration</a>
                        </div>
                    </div>
                </div>
            </div>
       
        <div class="col-xl-3 col-lg-3 ">
                <div class="card">
                <div class="card-header">
                        <h4 class="card-title">Configure SMTP</h4>
                    </div>
                </div>
            </div>
            </form>
    </div>
</div>
<?php echo $this->section('script') ?>
<?php _ec($this->include('Core\Shiprockets\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>