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
                            <h4>Order Setting</h4>
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
                                    <label for="product-brand" class="form-label">Order Code Prefix</label>
                                    <input name="order_code_prefix" class="form-control" type="text"
                                        value="<?= isset($detailsdata->order_code_prefix) ? $detailsdata->order_code_prefix : '' ?>"
                                        placeholder="Enter code_prefix">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Order Code Starts From</label>
                                    <input name="order_code_starts_from" class="form-control" type="text"
                                        value="<?= isset($detailsdata->order_code_starts_from) ? $detailsdata->order_code_starts_from : '' ?>"
                                        placeholder="Enter code_starts_from">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Invoice Thank You Message</label>
                                    <textarea name="invoice_message" class="form-control" type="text" placeholder="Enter invoice_message "><?= isset($detailsdata->invoice_message ) ? $detailsdata->invoice_message  : '' ?></textarea>
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
                        <h4 class="card-title">Configure Order Setting</h4>
                    </div>
                </div>
            </div>
            </form>
    </div>
</div>
<?php echo $this->section('script') ?>
<?php _ec($this->include('Core\Shiprockets\Views\submitit'), false) ?>
<?php echo $this->endSection() ?>