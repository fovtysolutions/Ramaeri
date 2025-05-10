<div class="container-xxl">
    <form id="<?= $formid ?>">
        <?php if ($editit) { ?>
            <input type="hidden" name="edit" value="<?= $editit ?>">
        <?php } ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-light-subtle">
                    <div class="card-header border-0 justify-content-between p-4">
                        <div>
                            <h4>Add Ship Rocket</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">API Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Email</label>
                                    <input name="email" class="form-control" type="text"
                                        value="<?= isset($detailsdata->email) ? $detailsdata->email : '' ?>"
                                        placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Password</label>
                                    <input name="password" class="form-control" type="text"
                                        value="<?= isset($detailsdata->password) ? $detailsdata->password : '' ?>"
                                        placeholder="Enter Password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Configure Ship Rocket</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Name</label>
                                    <input name="name" class="form-control" type="text"
                                        value="<?= isset($detailsdata->name) ? $detailsdata->name : '' ?>"
                                        placeholder="Enter name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Icon Image</label>
                                    <input type="file" id="icon-image" class="form-control" placeholder="Items Name">
                                    <input type="hidden" name="icon" id="iconimage"
                                        value="<?= isset($detailsdata->icon) ? $detailsdata->icon : '' ?>">
                                </div>
                                <?php if (!empty($detailsdata->icon)): ?>
                                    <div>
                                        <img src="<?= base_url('/writable/' . $detailsdata->icon) ?>" alt="Icon Image"
                                            width="75px">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Key</label>
                                    <input name="key" class="form-control" type="text"
                                        value="<?= isset($detailsdata->key) ? $detailsdata->key : '' ?>"
                                        placeholder="Enter key">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Secret</label>
                                    <input name="secret" class="form-control" type="text"
                                        value="<?= isset($detailsdata->secret) ? $detailsdata->secret : '' ?>"
                                        placeholder="Enter secret">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="product-categories" class="form-label">Status</label>
                                <select class="form-control" id="product-categories" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="status">
                                    <option value="" <?= empty($detailsdata->status) ? 'selected' : '' ?>>Select
                                        Action</option>
                                    <option value="Active" <?= (isset($detailsdata->status) && $detailsdata->status == 'Active') ? 'selected' : '' ?>>Enable</option>
                                    <option value="Deactive" <?= (isset($detailsdata->status) && $detailsdata->status == 'Deactive') ? 'selected' : '' ?>>Disable</option>
                                </select>
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
    </form>
</div>
</div>
<?php echo $this->section('script') ?>
<?php echo view('common_script/imageorfileupload', ['imageids' => 'iconimage', 'input' => 'icon-image', 'filetype' => 'image']); ?>
<?php _ec($this->include('Core\Shiprockets\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>