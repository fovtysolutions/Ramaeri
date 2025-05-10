<?php
$db = \Config\Database::connect();
$setting = $db->table('setting')->where('id', 3)->get()->getRow();
$session = session();
$useradmin = $session->get();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo _ec((!empty($setting->title) ? $setting->title : 'Ramaeri')) ?> -
        <?php echo _ec((!empty($title) ? $title : 'Data List')) ?>
    </title>
    <link rel="shortcut icon" href="<?php echo base_url(!empty($setting->favicon_img) ? '/writable/'.$setting->favicon_img : 'assets/images/logo-sm.png') ?>" type="image/x-icon">

    <!-- Vendor css (Require in all Page) -->
    <link href="<?php echo base_url('assets/css/vendor.min.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="<?php echo base_url('assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="<?php echo base_url('assets/css/app.min.css'); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.9.1/summernote-lite.min.js"
        integrity="sha512-sIOi8vwsJpzCHtHd06hxJa2umWfY1FfEEE0nGAaolGlR73EzNnQaWdijVyLueB0PSnIp8Mj2TDQLLHTiIUn1gw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.9.1/summernote-lite.min.css"
        integrity="sha512-ySljI0ZbsJxjJIpfsg+7ZJOyKzBduAajCJpc4mBiVpGDPln2jVQ0kwYu3e2QQM5fwxLp6VSVaJm8XCK9uWD4uA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Theme Config js (Require in all Page) -->
    <script src="<?php echo base_url('assets/js/config.js'); ?>"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
   

    <!-- Include module style -->
    <?php
    $path = 'inc/Core/';
    $map = directory_map($path);
    if (is_array($map) && sizeof($map) > 0)
        foreach ($map as $key => $value) {
            $css = str_replace("\\", '/', $path . $key . 'assets/css/style.css');
            if (file_exists($css)) {
                echo "<link href=" . base_url($css) . " rel=\"stylesheet\">";
            }
        }
    ?>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jquery.min.js'); ?>"></script>
    <script type="text/javascript">
        var PATH = '<?php _ec(base_url() . "/") ?>';
        var csrf = "<?php _ec(csrf_hash()) ?>";
    </script>
    <?php _ec($this->renderSection('frontcss'), false) ?>
</head>

<body>
    <input type="hidden" id='base_url' value="<?php echo base_url(); ?>" />
    <input type="hidden" id='csrf_token' value="<?php _ec(csrf_hash()); ?>" />
    <input name="csrfhash" id="csrfhashresarvation" type="hidden" value="<?php _ec(csrf_hash()); ?>" />

    <div class="wrapper">
        <!--Navbar-->
        <?php _ec($this->include('Backend\Views\header'), false) ?>
        <?php _ec($this->include('Backend\Views\sidebar'), false) ?>
        <div class="page-content">
            <?php _ec($this->renderSection('content'), false) ?>
            <?php _ec($this->include('Backend\Views\footer'), false) ?>
        </div>
    </div>
    <?php _ec($this->renderSection('script'), false) ?>
    <?php _ec($this->include('Backend\Views\toster'), false) ?>
    <?php _ec($this->include('Backend\Views\script'), false) ?>
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
    <script src="<?=base_url("source/js/pages/ecommerce-product-details.js")?>"></script>
</body>

</html>