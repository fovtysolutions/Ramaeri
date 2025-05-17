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
                            <h4>Add Banners</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-8 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Banner Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Banner Image</label>
                                    <input type="file" id="product-name" class="form-control" placeholder="Items Name" >
                                        <input type="hidden" name="home_image" id="imagename" value="<?= isset($detailsdata->home_image) ? $detailsdata->home_image : '' ?>">
                                </div>
                                <img src="<?= isset($detailsdata->home_image) ? base_url('/writable/'.$detailsdata->home_image) : '' ?>" alt="" srcset="" width="75px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <a href="javascript:void(0)" id="savebtn" class="btn btn-outline-secondary w-100">Create
                                Banner</a>
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
<?php echo view('common_script/imageorfileupload', ['imageids'=>'imagename','input'=>'product-name','filetype'=>'image']); ?>
<?php _ec($this->include('Core\Banners\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>