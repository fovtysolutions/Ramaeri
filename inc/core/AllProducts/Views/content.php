<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
<?php echo $this->endSection(); ?>
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
                                        <input type="text" id="product-name" class="form-control"
                                            placeholder="Enter description for 'benefit'" name="benefit"
                                            value="<?= isset($detailsdata->benefit) ? $detailsdata->benefit : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Key Ingredients</label>
                                        <input type="text" id="product-name" class="form-control"
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
                                        <input type="text" id="product-name" class="form-control"
                                            placeholder="Enter description for 'fade'" name="fade"
                                            value="<?= isset($detailsdata->fade) ? $detailsdata->fade : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Prevents</label>
                                        <input type="text" id="product-name" class="form-control"
                                            placeholder="Enter description for 'prevent'" name="prevent"
                                            value="<?= isset($detailsdata->prevent) ? $detailsdata->prevent : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Soothes</label>
                                        <input type="text" id="product-name" class="form-control"
                                            placeholder="Enter description for 'key_ingredient'" name="soothe"
                                            value="<?= isset($detailsdata->soothe) ? $detailsdata->soothe : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Hydrates</label>
                                        <input type="text" id="product-name" class="form-control"
                                            placeholder="Enter description for 'hydrate'" name="hydrate"
                                            value="<?= isset($detailsdata->hydrate) ? $detailsdata->hydrate : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Strengthens</label>
                                        <input type="text" id="product-name" class="form-control"
                                            placeholder="Enter description for 'strengthen'" name="strengthen"
                                            value="<?= isset($detailsdata->strengthen) ? $detailsdata->strengthen : '' ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-8 ">
                    <div class="card details ">
                        <div class="nav-tabs-wrapper mt-3"></div>
                        <ul class="nav nav-tabs" id="editorTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="details-tab" data-bs-toggle="tab"
                                    data-bs-target="#details" type="button">Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="ingredients-tab" data-bs-toggle="tab"
                                    data-bs-target="#ingredients" type="button">Ingredients</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="how-tab" data-bs-toggle="tab" data-bs-target="#how"
                                    type="button">How to Use</button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="editorTabContent">
                            <div class="tab-pane fade show active" id="details" role="tabpanel">
                                <h5>Details</h5>
                                <textarea id="editor-details"
                                    name="details"><?= isset($detailsdata->details) ? $detailsdata->details : '' ?></textarea>
                            </div>
                            <div class="tab-pane fade" id="ingredients" role="tabpanel">
                                <h5>Ingredients</h5>
                                <textarea id="editor-ingredients"
                                    name="ingredients"><?= isset($detailsdata->ingredients) ? $detailsdata->ingredients : '' ?></textarea>
                            </div>
                            <div class="tab-pane fade" id="how" role="tabpanel">
                                <h5>How to Use</h5>
                                <textarea id="editor-how"
                                    name="how"><?= isset($detailsdata->how) ? $detailsdata->how : '' ?></textarea>
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
                            <div class="col-6">
                                <div class="star-rating" id="rating">
                                    <span class="star" data-value="1">&#9733;</span>
                                    <span class="star" data-value="2">&#9733;</span>
                                    <span class="star" data-value="3">&#9733;</span>
                                    <span class="star" data-value="4">&#9733;</span>
                                    <span class="star" data-value="5">&#9733;</span>
                                </div>
                            </div>
                            <!-- Hidden input for rating value -->
        <input type="hidden" name="rating" id="rating-value">
                            <div class="col-6 text-center">
                                <div  id="selected-rating" ><?= isset($detailsdata->rating) ? $detailsdata->rating : 'Selected Rating: 0' ?></div>
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
                                    name="price" value="<?= isset($detailsdata->price) ? $detailsdata->price : '' ?>">
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
<?php echo view('common_script/multifileuploader', ['previewid' => 'sethere', 'imageids' => 'gellary_image', 'input' => 'product-images', 'filetype' => 'image', 'filecount' => 15, 'selectedimage' => isset($detailsdata->gellary_image) ? json_decode($detailsdata->gellary_image) :  []]) ?>

<?php _ec($this->include('Core\AllProducts\Views\submitit'), false) ?>
<script>
    $("#editor").each(function (el) {
        var $this = $(this);
        var buttons = $this.data("buttons");
        var minHeight = $this.data("min-height");
        var placeholder = $this.attr("placeholder");
        var format = $this.data("format");

        buttons = !buttons ? [
            ["font", ["bold", "underline", "italic", "clear"]],
            ['fontname', ['fontname']],
            ["para", ["ul", "ol", "paragraph"]],
            ["style", ["style"]],
            ['fontsize', ['fontsize']],
            ["color", ["color"]],
            ["insert", ["link", "picture", "video"]],
            ["view", ["undo", "redo"]],
        ] :
            buttons;
        placeholder = !placeholder ? "" : placeholder;
        minHeight = !minHeight ? 150 : minHeight;
        format = typeof format == "undefined" ? false : format;

        $this.summernote({
            toolbar: buttons,
            placeholder: placeholder,
            height: minHeight,
            codeviewFilter: false,
            codeviewIframeFilter: true,
            disableDragAndDrop: true,
            callbacks: {

            },
        });

        var nativeHtmlBuilderFunc = $this.summernote(
            "module",
            "videoDialog"
        ).createVideoNode;

        $this.summernote("module", "videoDialog").createVideoNode = function (url) {
            var wrap = $(
                '<div class="embed-responsive embed-responsive-16by9"></div>'
            );
            var html = nativeHtmlBuilderFunc(url);
            html = $(html).addClass("embed-responsive-item");
            return wrap.append(html)[0];
        };
    });
</script>
<script>
    $("#editor-details").each(function (el) {
        var $this = $(this);
        var buttons = $this.data("buttons");
        var minHeight = $this.data("min-height");
        var placeholder = $this.attr("placeholder");
        var format = $this.data("format");

        buttons = !buttons ? [
            ["font", ["bold", "underline", "italic", "clear"]],
            ['fontname', ['fontname']],
            ["para", ["ul", "ol", "paragraph"]],
            ["style", ["style"]],
            ['fontsize', ['fontsize']],
            ["color", ["color"]],
            ["insert", ["link", "picture", "video"]],
            ["view", ["undo", "redo"]],
        ] :
            buttons;
        placeholder = !placeholder ? "" : placeholder;
        minHeight = !minHeight ? 150 : minHeight;
        format = typeof format == "undefined" ? false : format;

        $this.summernote({
            toolbar: buttons,
            placeholder: placeholder,
            height: minHeight,
            codeviewFilter: false,
            codeviewIframeFilter: true,
            disableDragAndDrop: true,
            callbacks: {

            },
        });

        var nativeHtmlBuilderFunc = $this.summernote(
            "module",
            "videoDialog"
        ).createVideoNode;

        $this.summernote("module", "videoDialog").createVideoNode = function (url) {
            var wrap = $(
                '<div class="embed-responsive embed-responsive-16by9"></div>'
            );
            var html = nativeHtmlBuilderFunc(url);
            html = $(html).addClass("embed-responsive-item");
            return wrap.append(html)[0];
        };
    });
</script>
<script>
    $("#editor-ingredients").each(function (el) {
        var $this = $(this);
        var buttons = $this.data("buttons");
        var minHeight = $this.data("min-height");
        var placeholder = $this.attr("placeholder");
        var format = $this.data("format");

        buttons = !buttons ? [
            ["font", ["bold", "underline", "italic", "clear"]],
            ['fontname', ['fontname']],
            ["para", ["ul", "ol", "paragraph"]],
            ["style", ["style"]],
            ['fontsize', ['fontsize']],
            ["color", ["color"]],
            ["insert", ["link", "picture", "video"]],
            ["view", ["undo", "redo"]],
        ] :
            buttons;
        placeholder = !placeholder ? "" : placeholder;
        minHeight = !minHeight ? 150 : minHeight;
        format = typeof format == "undefined" ? false : format;

        $this.summernote({
            toolbar: buttons,
            placeholder: placeholder,
            height: minHeight,
            codeviewFilter: false,
            codeviewIframeFilter: true,
            disableDragAndDrop: true,
            callbacks: {

            },
        });

        var nativeHtmlBuilderFunc = $this.summernote(
            "module",
            "videoDialog"
        ).createVideoNode;

        $this.summernote("module", "videoDialog").createVideoNode = function (url) {
            var wrap = $(
                '<div class="embed-responsive embed-responsive-16by9"></div>'
            );
            var html = nativeHtmlBuilderFunc(url);
            html = $(html).addClass("embed-responsive-item");
            return wrap.append(html)[0];
        };
    });
</script>
<script>
    $("#editor-how").each(function (el) {
        var $this = $(this);
        var buttons = $this.data("buttons");
        var minHeight = $this.data("min-height");
        var placeholder = $this.attr("placeholder");
        var format = $this.data("format");

        buttons = !buttons ? [
            ["font", ["bold", "underline", "italic", "clear"]],
            ['fontname', ['fontname']],
            ["para", ["ul", "ol", "paragraph"]],
            ["style", ["style"]],
            ['fontsize', ['fontsize']],
            ["color", ["color"]],
            ["insert", ["link", "picture", "video"]],
            ["view", ["undo", "redo"]],
        ] :
            buttons;
        placeholder = !placeholder ? "" : placeholder;
        minHeight = !minHeight ? 150 : minHeight;
        format = typeof format == "undefined" ? false : format;

        $this.summernote({
            toolbar: buttons,
            placeholder: placeholder,
            height: minHeight,
            codeviewFilter: false,
            codeviewIframeFilter: true,
            disableDragAndDrop: true,
            callbacks: {

            },
        });

        var nativeHtmlBuilderFunc = $this.summernote(
            "module",
            "videoDialog"
        ).createVideoNode;

        $this.summernote("module", "videoDialog").createVideoNode = function (url) {
            var wrap = $(
                '<div class="embed-responsive embed-responsive-16by9"></div>'
            );
            var html = nativeHtmlBuilderFunc(url);
            html = $(html).addClass("embed-responsive-item");
            return wrap.append(html)[0];
        };
    });
</script>
<script>
  const stars = document.querySelectorAll(".star");
  const output = document.getElementById("selected-rating");
  const ratingInput = document.getElementById("rating-value");

  stars.forEach((star, idx) => {
    star.addEventListener("click", () => {
      const rating = idx + 1;
      output.textContent = `Selected Rating: ${rating}`;
      ratingInput.value = rating;

      stars.forEach(s => s.classList.remove("selected"));
      for (let i = 0; i <= idx; i++) {
        stars[i].classList.add("selected");
      }
    });
  });
</script>
<?php echo $this->endSection() ?>