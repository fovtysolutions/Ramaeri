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
                            <h4>Add Blogs</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-8 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Blog Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Title</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Items Name"
                                        name="title"
                                        value="<?= isset($detailsdata->title) ? $detailsdata->title : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Slug</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Items Name"
                                        name="slug" value="<?= isset($detailsdata->slug) ? $detailsdata->slug : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="product-categories" class="form-label">Categories</label>
                                <select class="form-control" id="product-categories" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="category_name"
                                    value="<?= isset($detailsdata->category_name) ? $detailsdata->category_name : '' ?>">
                                    <option value="">Select Category</option>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?= $category['id'] ?>" <?= isset($detailsdata->category_name) && $detailsdata->category_name == $category['id'] ? 'selected' : '' ?>>
                                            <?= $category['name'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Banner Image</label>
                                    <input type="file" id="blog-img" class="form-control" placeholder="Items Name">
                                    <input type="hidden" name="banner_image" id="imagename"
                                        value="<?= isset($detailsdata->banner_image) ? $detailsdata->banner_image : '' ?>">
                                </div>
                            </div>
                            <?php if (!empty($detailsdata->banner_image)): ?>
                                <div class="text-center">
                                    <img src="<?= base_url('/writable/' . $detailsdata->banner_image) ?>" alt="Image"
                                        width="75px">
                                </div>
                            <?php endif; ?>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Image alt text</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Items Name"
                                        name="image_alt_text"
                                        value="<?= isset($detailsdata->image_alt_text) ? $detailsdata->image_alt_text : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Name</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Items Name"
                                        name="name"
                                        value="<?= isset($detailsdata->name) ? $detailsdata->name : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Meta Description</label>
                                    <textarea name="meta_description	" id="editor"
                                        rows="7"><?= isset($detailsdata->meta_description) ? $detailsdata->meta_description : '' ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Seo Title</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Items Name"
                                        name="seo_title"
                                        value="<?= isset($detailsdata->seo_title) ? $detailsdata->seo_title : '' ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Meta Keywords</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Items Name"
                                        name="meta_keyword"
                                        value="<?= isset($detailsdata->meta_keyword) ? $detailsdata->meta_keyword : '' ?>">
                                </div>
                            </div>
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
<?php echo view('common_script/imageorfileupload', ['imageids' => 'imagename', 'input' => 'blog-img', 'filetype' => 'image']); ?>
<?php _ec($this->include('Core\Blogs\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>