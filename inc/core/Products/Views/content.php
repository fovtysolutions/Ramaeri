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
                <div class="col-xl-12 col-lg-8 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Key Points</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Skin Type</label>
                                        <input type="text" id="product-name" class="form-control"
                                            placeholder="Enter description for 'skintype' " name="skin_type"
                                            value="<?= isset($detailsdata->skin_type) ? $detailsdata->skin_type : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Benefits</label>
                                        <input type="number" id="product-name" class="form-control"
                                            placeholder="Enter description for 'benefit'" name="benefit"
                                            value="<?= isset($detailsdata->benefit) ? $detailsdata->benefit : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Key Ingredients</label>
                                        <input type="number" id="product-name" class="form-control"
                                            placeholder="Enter description for 'key_ingredient'" name="key_ingredient"
                                            value="<?= isset($detailsdata->key_ingredient) ? $detailsdata->key_ingredient : '' ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-8 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Benefits</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Protects</label>
                                        <input type="text" id="product-name" class="form-control"
                                            placeholder="Enter description for 'protect' " name="protect"
                                            value="<?= isset($detailsdata->protect) ? $detailsdata->protect : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Fades</label>
                                        <input type="number" id="product-name" class="form-control"
                                            placeholder="Enter description for 'fade'" name="fade"
                                            value="<?= isset($detailsdata->fade) ? $detailsdata->fade : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Prevents</label>
                                        <input type="number" id="product-name" class="form-control"
                                            placeholder="Enter description for 'prevent'" name="prevent"
                                            value="<?= isset($detailsdata->prevent) ? $detailsdata->prevent : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Soothes</label>
                                        <input type="number" id="product-name" class="form-control"
                                            placeholder="Enter description for 'key_ingredient'" name="soothe"
                                            value="<?= isset($detailsdata->soothe) ? $detailsdata->soothe : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Hydrates</label>
                                        <input type="number" id="product-name" class="form-control"
                                            placeholder="Enter description for 'hydrate'" name="hydrate"
                                            value="<?= isset($detailsdata->hydrate) ? $detailsdata->hydrate : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Strengthens</label>
                                        <input type="number" id="product-name" class="form-control"
                                            placeholder="Enter description for 'strengthen'" name="strengthen"
                                            value="<?= isset($detailsdata->strengthen) ? $detailsdata->strengthen : '' ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-8 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Rate This Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 text-center">
                                    <div class="mb-3">
                                        <div>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffbe00"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffbe00"
                                        class="bi bi-star-half" viewBox="0 0 16 16">
                                        <path
                                            d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                                    </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-center">
                                    <button class="btn btn-secondry btn-outline-secondary">Selected Rating</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-8 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Product Youtube Vedio Embeded Code</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                   <div class="mb-3">
                                    <input type="text" id="product-name" class="form-control p-2" name="video_youtube"
                                            value="<?= isset($detailsdata->video_youtube) ? $detailsdata->video_youtube : '' ?>">
                                   </div>
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