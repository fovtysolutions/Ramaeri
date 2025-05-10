<div class="container-fluid">
    <form action="" method="post">
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-light-subtle">
                    <div class="card-header border-0 justify-content-between p-4">
                        <div>
                            <h4>Products</h4>
                        </div>
                        <div class="d-flex">
                            <!-- <a href="#" class="btn btn-primary me-1">
                                <span class="iconify" data-icon="heroicons-outline:upload" data-inline="false"
                                    style="margin-right: 5px;"></span>
                                Import
                            </a>
                            <a href="#" class="btn btn-danger me-1">
                                <span class="iconify" data-icon="heroicons-outline:download" data-inline="false"
                                    style="margin-right: 5px;"></span>
                                Export
                            </a> -->

                            <div class="">
                                <a href="<?=base_url($addbtnroute)?>" class="btn btn-primary me-1 p-2"><i class="bx bx-plus"></i>
                                    Add
                                    Product</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0">
                                <iconify-icon icon="mdi:magnify" class="text-muted"></iconify-icon>
                            </span>
                            <input type="text" class="form-control border-start-0" placeholder="Search"
                                aria-label="Search">
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Select Brand
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="#!" class="dropdown-item">Select Brand</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Select Status
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="#!" class="dropdown-item">Select Status</a>
                                <!-- item-->
                                <a href="#!" class="dropdown-item">Published</a>
                                <!-- item-->
                                <a href="#!" class="dropdown-item">hidden</a>
                            </div>
                        </div>
                        <div>
                            <button type="button"
                                class="btn btn-light d-flex align-items-center gap-2 px-3 border rounded">
                                <iconify-icon icon="mdi:magnify" class="fs-5 text-dark"></iconify-icon>
                                <span class="text-dark">Search</span>
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table width="100%" id="" class="datatable table table-hover">
                                <thead>
                                    <tr>
                                        <th class="w-5">Sr-No</th>
                                        <?php foreach ($th as $valueth) { ?>
                                            <th><?= $valueth ?></th>
                                        <?php } ?>
                                        <th class="w-10">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="<?= $mainid ?>">
                                    <tr>
                                        <td colspan="<?= count($th) + 2 ?>" style="text-align: center;"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="card-footer border-top">
                                <nav aria-label="Page navigation example" id="pagimains">

                                </nav>
                            </div>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<?php echo $this->section('script') ?>
<?php _ec($this->include('Core\Products\Views\frontjavascript'), false) ?>
<?php echo $this->endSection() ?>