<style>
    .close_btn {
        position: absolute;
        right: 36px;
        top: 4px;
        font-size: 9px;
        cursor: pointer;
        background: red;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        text-align: center;
        color: white;
    }
</style>
<div class="container-xxl">
    <div class="row">
        <form id="<?= $formid ?>" enctype="multipart/form-data">
            <?php if ($editit) { ?>
                <input type="hidden" name="edit" value="<?= $editit ?>">
            <?php } ?>
            <div class="col-lg-12">
                <div class="card bg-light-subtle">
                    <div class="card-header border-0 justify-content-between p-4">
                        <div>
                            <h4>Add Products</h4>
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
                                    <label for="product-name" class="form-label">Product Name</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Items Name"
                                        name="name" value="<?= isset($detailsdata->name) ? $detailsdata->name : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Stock</label>
                                    <input type="number" id="product-name" class="form-control" placeholder="Items Name"
                                        name="stock"
                                        value="<?= isset($detailsdata->stock) ? $detailsdata->stock : '' ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Brand</label>
                                    <input type="text" id="product-brand" class="form-control" placeholder="Brand Name"
                                        name="brand"
                                        value="<?= isset($detailsdata->brand) ? $detailsdata->brand : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-weight" class="form-label">Weight</label>
                                    <input type="text" id="product-weight" class="form-control" placeholder="In gm & kg"
                                        name="weight"
                                        value="<?= isset($detailsdata->weight) ? $detailsdata->weight : '' ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Short Description</label>
                                    <textarea class="form-control bg-light-subtle" id="short_description" rows="4"
                                        placeholder="Short description about the product"
                                        name="short_description"><?= isset($detailsdata->short_description) ? $detailsdata->short_description : '' ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="editor"
                                        rows="7"><?= isset($detailsdata->description) ? $detailsdata->description : '' ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Categories</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="product-categories" class="form-label">Categories</label>
                                <select class="form-control" id="product-categories" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="category_id"
                                    value="<?= isset($detailsdata->category_id) ? $detailsdata->category_id : '' ?>">
                                    <option value="">Select Category</option>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?= $category['id'] ?>" <?= isset($detailsdata->category_id) && $detailsdata->category_id == $category['id'] ? 'selected' : '' ?>>
                                            <?= $category['name'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
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
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Gellary</label>
                                    <input type="file" id="product-images" class="form-control" placeholder="Items Name"
                                        multiple>
                                    <input type="hidden" name="gellary_image" id="gellary_image"
                                        value="<?= isset($detailsdata->gellary_image) ? $detailsdata->gellary_image : '' ?>">
                                </div>
                                <div class="container">
                                    <div class="row" id="sethere">

                                    </div>
                                </div>
                                <img src="<?= isset($detailsdata->gellary_image) ? base_url('/writable/' . $detailsdata->gellary_image) : '' ?>"
                                    alt="" srcset="" width="75px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pricing Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="product-price" class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                    <input type="number" id="product-price" class="form-control" placeholder="000"
                                        name="price"
                                        value="<?= isset($detailsdata->price) ? $detailsdata->price : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="product-price" class="form-label">Sub Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                    <input type="number" id="product-price" class="form-control" placeholder="000"
                                        name="sub_price"
                                        value="<?= isset($detailsdata->sub_price) ? $detailsdata->sub_price : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="product-discount" class="form-label">Discount</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                    <input type="number" id="product-discount" class="form-control" placeholder="000"
                                        name="discount"
                                        value="<?= isset($detailsdata->discount) ? $detailsdata->discount : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="product-categories" class="form-label">Discount Type</label>
                                <select class="form-control" id="product-categories" data-choices-groups
                                    data-placeholder="Select Categories" name="discount_type">
                                    <option value="" <?= empty($detailsdata->discount_type) ? 'selected' : '' ?>>Select
                                        discount_type</option>
                                    <option value="Percentage" <?= isset($detailsdata->discount_type) && $detailsdata->discount_type == 'Percentage' ? 'selected' : '' ?>>Percentage
                                    </option>
                                    <option value="Fixed" <?= isset($detailsdata->discount_type) && $detailsdata->discount_type == 'Fixed' ? 'selected' : '' ?>>Fixed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <a href="javascript:void(0)" id="savebtn" class="btn btn-outline-secondary w-100">Create
                                Product</a>
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
<?php echo view('common_script/imageorfileupload', ['imageids' => 'imagename', 'input' => 'product-image', 'filetype' => 'image']); ?>
<?php echo view('common_script/multifileuploader', ['previewid' => 'sethere', 'imageids' => 'gellary_image', 'input' => 'product-images', 'filetype' => 'image', 'filecount' => 15, 'selectedimage' => $imagedata]); ?>

<?php _ec($this->include('Core\Products\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>