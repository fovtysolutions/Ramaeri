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
                            <h4>General Settings</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 ">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>General Informations</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label for="product-categories" class="form-label">System Title</label>
                                <input name="meta_title" class="form-control" type="text"
                                    value="<?= isset($detailsdata->meta_title) ? $detailsdata->meta_title : '' ?>"
                                    placeholder="Enter Meta Title">
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Browser Tab Title Separator</label>
                                    <input name="browser_tab_title" class="form-control" type="text"
                                        value="<?= isset($detailsdata->browser_tab_title) ? $detailsdata->browser_tab_title : '' ?>"
                                        placeholder="Enter browser_tab_title">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Address</label>
                                    <input name="address" class="form-control" type="text"
                                        value="<?= isset($detailsdata->address) ? $detailsdata->address : '' ?>"
                                        placeholder="Enter Address">
                                </div>
                            </div>
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
                                    <label for="product-brand" class="form-label">Invoice Address</label>
                                    <input name="invoice_address" class="form-control" type="text"
                                        value="<?= isset($detailsdata->invoice_address) ? $detailsdata->invoice_address : '' ?>"
                                        placeholder="Enter invoice_address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Contact Number</label>
                                    <input name="phone" class="form-control" type="text"
                                        value="<?= isset($detailsdata->phone) ? $detailsdata->phone : '' ?>"
                                        placeholder="Enter Phone">
                                </div>
                            </div>
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
            <div class="col-xl-9 col-lg-9 ">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>Dashboard Logo & Favicon</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Choose Dashboard Logo</label>
                                    <input type="file" id="dashboard-image" class="form-control"
                                        placeholder="Items Name">
                                    <input type="hidden" name="dashboard_logo_img" id="dashboardimage"
                                        value="<?= isset($detailsdata->dashboard_logo_img) ? $detailsdata->dashboard_logo_img : '' ?>">
                                </div>
                                <div>
                                    <img src="<?= isset($detailsdata->dashboard_logo_img) ? base_url('/writable/' . $detailsdata->dashboard_logo_img) : '' ?>"
                                        alt="" srcset="" width="75px">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Choose Favicon</label>
                                    <input type="file" id="favicon-image" class="form-control" placeholder="Items Name">
                                    <input type="hidden" name="favicon_img" id="faviconimage"
                                        value="<?= isset($detailsdata->favicon_img) ? $detailsdata->favicon_img : '' ?>">
                                </div>
                                <div>
                                    <img src="<?= isset($detailsdata->favicon_img) ? base_url('/writable/' . $detailsdata->favicon_img) : '' ?>"
                                        alt="" srcset="" width="75px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 ">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>SEO Meta Configuration</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label for="product-categories" class="form-label">Meta Title</label>
                                <input name="meta_title" class="form-control" type="text"
                                    value="<?= isset($detailsdata->meta_title) ? $detailsdata->meta_title : '' ?>"
                                    placeholder="Enter Meta Title">
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Canonical Name</label>
                                    <input name="canonical_name" class="form-control" type="text"
                                        value="<?= isset($detailsdata->canonical_name) ? $detailsdata->canonical_name : '' ?>"
                                        placeholder="Enter canonical_name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Author</label>
                                    <input name="author" class="form-control" type="text"
                                        value="<?= isset($detailsdata->author) ? $detailsdata->author : '' ?>"
                                        placeholder="Enter author">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Meta Description</label>
                                    <textarea name="meta_description" class="form-control" type="text" rows="4"
                                        placeholder="Enter meta_description"> <?= isset($detailsdata->meta_description) ? $detailsdata->meta_description : '' ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Meta Keywords</label>
                                    <textarea name="meta_keyword" class="form-control" type="text" rows="2"
                                        placeholder="Enter meta_keyword"> <?= isset($detailsdata->meta_keyword) ? $detailsdata->meta_keyword : '' ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Meta Image</label>
                                    <input type="file" id="meta-image" class="form-control"
                                        placeholder="Items Name">
                                    <input type="hidden" name="meta_image" id="metaimage"
                                        value="<?= isset($detailsdata->meta_image) ? $detailsdata->meta_image : '' ?>">
                                </div>
                                <div>
                                    <img src="<?= isset($detailsdata->meta_image) ? base_url('/writable/' . $detailsdata->meta_image) : '' ?>"
                                        alt="" srcset="" width="75px">
                                </div>
                            </div>
                        </div>
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
<?php echo view('common_script/imageorfileupload', ['imageids' => 'dashboardimage', 'input' => 'dashboard-image', 'filetype' => 'image']); ?>
<?php echo view('common_script/imageorfileupload', ['imageids' => 'faviconimage', 'input' => 'favicon-image', 'filetype' => 'image']); ?>
<?php echo view('common_script/imageorfileupload', ['imageids' => 'metaimage', 'input' => 'meta-image', 'filetype' => 'image']); ?>
<?php _ec($this->include('Core\Generalsettings\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>