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
                            <h4>Add Categories</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="category-title" class="form-label">Category
                                        Name</label>
                                    <input type="text" id="category-title" class="form-control"
                                        placeholder="Enter Title" name="name" value="<?= isset($detailsdata->name) ? $detailsdata->name : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="category-title" class="form-label">Top
                                        Priority</label>
                                    <input type="text" id="category-title" class="form-control"
                                        placeholder="Enter Title" name="priority" value="<?= isset($detailsdata->priority) ? $detailsdata->priority : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-stock" class="form-label">Brand</label>
                                    <input type="text" id="product-stock" class="form-control" placeholder="Brand"
                                        name="brand" value="<?= isset($detailsdata->brand) ? $detailsdata->brand : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-id" class="form-label">Theme</label>
                                    <input type="text" id="product-id" class="form-control"
                                        placeholder="Enter Your theme" name="theme" value="<?= isset($detailsdata->theme) ? $detailsdata->theme : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-0">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control bg-light-subtle" id="description" rows="4"
                                        placeholder="Type description" name="description"><?= isset($detailsdata->description) ? $detailsdata->description : '' ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Meta Options</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="meta-title" class="form-label">Meta Title</label>
                                    <input type="text" id="meta-title" class="form-control" placeholder="Enter Title"
                                        name="meta_title" value="<?= isset($detailsdata->meta_title) ? $detailsdata->meta_title : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="meta-tag" class="form-label">Meta Tag Keyword</label>
                                    <input type="text" id="meta-tag" class="form-control" placeholder="Enter word"
                                        name="meta_tag" value="<?= isset($detailsdata->meta_tag) ? $detailsdata->meta_tag : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-0">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control bg-light-subtle" id="description" rows="4"
                                        placeholder="Type description" name="description" value="<?= isset($detailsdata->description) ? $detailsdata->description : '' ?>"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Images</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Image</label>
                                    <input type="file" id="product-image" class="form-control" placeholder="Items Name">
                                    <input type="hidden" name="image" id="imagename"
                                        value="<?= isset($detailsdata->image) ? $detailsdata->image : '' ?>">
                                </div>
                                <img src="<?= isset($detailsdata->image) ? base_url('/writable/' . $detailsdata->image) : '' ?>"
                                    alt="" srcset="" width="75px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <a href="javascript:void(0)" id="savebtn" class="btn btn-outline-secondary w-100">Save
                                Change</a>
                        </div>
                        <div class="col-lg-2">
                            <a href="#!" onclick="history.back()" class="btn btn-primary w-100">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div class="card bg-light-subtle">
                    <div class="card-header border-0 justify-content-between p-4">
                        <div>
                            <h4>Category Information</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </form> -->
</div>
<?php echo $this->section('script') ?>
<?php echo view('common_script/imageorfileupload', ['imageids' => 'imagename', 'input' => 'product-image', 'filetype' => 'image']); ?>
<?php _ec($this->include('Core\Categories\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>