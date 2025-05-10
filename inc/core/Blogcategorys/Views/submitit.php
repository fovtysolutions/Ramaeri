<script>
    $(document).ready(function(){
        $("#savebtn").click(function(e){            
            e.preventDefault();
            const form = document.getElementById("<?=$formid ?>");
            let formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?= base_URL($formroute)?>",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#savebtn").val("Please Wait...");
                },
                success: function (response) {
                    if (response.status === 'success') {
                        toastr.success(response.message || "next step!");
                        if(response.locationChange){
                            setTimeout(() => {
                                location.href = '<?=base_url($successroute)?>';
                            }, 2000);
                        }else{
                            toastr.success(response.message || "next step!");
                        }
                    } else if (response.status === 'error') {
                        toastr.error(response.message || "An error occurred!");
                    }
                },
                error: function () {
                    toastr.error("An unexpected error occurred!");
                    $("#savebtn").val("Save & Close");
                }
            });
        })
    })
</script>