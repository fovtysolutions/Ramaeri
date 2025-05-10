<div class="container-xxl">
    <div class="row">
        <form id="<?= $formid ?>">
            <?php if ($editit) { ?>
                <input type="hidden" name="edit" value="<?= $editit ?>">
            <?php } ?>
            <div class="col-lg-12">
                <div class="card bg-light-subtle">
                    <div class="card-header border-0 justify-content-between p-4">
                        <div>
                            <h4>Add Reviews</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-8 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">User Name</label>
                                    <input type="text" id="product-name" class="form-control"
                                        placeholder="Enter User Name" name="user_name"
                                        value="<?= isset($detailsdata->user_name) ? $detailsdata->user_name : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Short Title</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Enter title"
                                        name="short_title"
                                        value="<?= isset($detailsdata->short_title) ? $detailsdata->short_title : '' ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Short Description</label>
                                    <textarea type="text" id="product-brand" class="form-control"
                                        placeholder="Enter description" name="short_description"><?= isset($detailsdata->short_description) ? $detailsdata->short_description : '' ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-weight" class="form-label">Select User Image</label>
                                    <input type="file" id="review-name" class="form-control" placeholder="Items Name">
                                    <input type="hidden" name="image" id="imagename"
                                        value="<?= isset($detailsdata->image) ? $detailsdata->image : '' ?>">
                                </div>
                                <img src="<?= isset($detailsdata->image) ? base_url('/writable/' . $detailsdata->image) : '' ?>"
                                    alt="" srcset="" width="75px">
                            </div>
                            <div class="col-lg-6">
                                <label for="product-categories" class="form-label">Categories</label>
                                 <select class="form-control" id="product-categories" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="category"
                                    value="<?= isset($detailsdata->category) ? $detailsdata->category : '' ?>">
                                    <option value="">Select Category</option>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?= $category['id'] ?>" <?= isset($detailsdata->category) && $detailsdata->category == $category['id'] ? 'selected' : '' ?>>
                                            <?= $category['name'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="product-categories" class="form-label">Products</label>
                                <select class="form-control" id="product-categories" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="product"
                                    value="<?= isset($detailsdata->products) ? $detailsdata->products : '' ?>">
                                    <option value="">Select Products</option>
                                    <?php foreach ($products as $product): ?>
                                        <option value="<?= $product['id'] ?>" <?= isset($detailsdata->product) && $detailsdata->product == $product['id'] ? 'selected' : '' ?>>
                                            <?= $product['name'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <a href="javascript:void(0)" id="savebtn" class="btn btn-outline-secondary w-100">Submit</a>
                        </div>
                        <div class="col-lg-2">
                            <a href="#!" onclick="history.back()" class="btn btn-primary w-100">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php echo $this->section('script') ?>
<?php echo view('common_script/imageorfileupload', ['imageids' => 'imagename', 'input' => 'review-name', 'filetype' => 'image']); ?>
<?php _ec($this->include('Core\Reviews\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>