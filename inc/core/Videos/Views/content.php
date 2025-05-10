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
                            <h4>Add Video</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 ">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-weight" class="form-label">Thumbnail</label>
                                    <input type="file" id="image-name" class="form-control" placeholder="Items Name">
                                    <input type="hidden" name="thumbnail" id="thumbnail"
                                        value="<?= isset($detailsdata->thumbnail) ? $detailsdata->thumbnail : '' ?>">
                                </div>
                                <?php if (!empty($detailsdata->thumbnail)): ?>
                                    <div class="mb-3">
                                        <img src="<?= isset($detailsdata->thumbnail) ? base_url('/writable/' . $detailsdata->thumbnail) : '' ?>"
                                            alt="" srcset="" width="75px">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Video Title</label>
                                    <input name="title" class="form-control" type="text"
                                        value="<?= isset($detailsdata->title) ? $detailsdata->title : '' ?>"
                                        placeholder="Enter video title">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
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
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Tags</label>
                                    <input name="tags" class="form-control" type="text"
                                        value="<?= isset($detailsdata->tags) ? $detailsdata->tags : '' ?>"
                                        placeholder="Enter video tags">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="video-file" class="form-label">Video</label>
                                    <input type="file" id="video-file" class="form-control" accept="video/*">
                                    <input type="hidden" name="video" id="video"
                                        value="<?= isset($detailsdata->video) ? $detailsdata->video : '' ?>">
                                </div>

                                <?php if (!empty($detailsdata->video)): ?>
                                    <video width="320" height="240" controls>
                                        <source src="<?= base_url('/writable/' . $detailsdata->video) ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <a href="javascript:void(0)" id="savebtn" class="btn btn-outline-secondary w-100">Create
                                Video</a>
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
<?php echo view('common_script/imageorfileupload', ['imageids' => 'video', 'input' => 'video-file', 'filetype' => 'video']); ?>
<?php echo view('common_script/imageorfileupload', ['imageids' => 'thumbnail', 'input' => 'image-name', 'filetype' => 'image']); ?>
<?php _ec($this->include('Core\Videos\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>