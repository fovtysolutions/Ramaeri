<div class="container-fluid">
    <form action="" method="post">
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-light-subtle">
                    <div class="card-header border-0 justify-content-between p-4">
                        <div>
                            <h4>Reviews</h4>
                        </div>
                        <div class="d-flex">
                            <div class="">
                                <a href="<?=base_url($addbtnroute)?>" class="btn btn-primary me-1 p-2"><i class="bx bx-plus"></i>
                                    Add
                                    Review</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div>
                        <div class="table-responsive">
                            <table width="100%" id="" class="datatable table table-hover">
                                <thead>
                                    <tr>
                                        <th class="w-5">S/L</th>
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
<?php _ec($this->include('Core\Reviews\Views\frontjavascript'), false) ?>
<?php echo $this->endSection() ?>