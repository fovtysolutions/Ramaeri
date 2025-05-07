<script>
    $(document).ready(function(){
        let formroute = $("#base_url").val();
        let successroute = $("#successroute").val();
        $("#formsubmit").submit(function(e){  
            e.preventDefault();
            let formData = new FormData(this);
            
            $.ajax({
                type: "POST",
                url: formroute,
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#sendsubmit").val("Please Wait...");
                },
                success: function (response) {
                    console.log(response);
                    if (response.status === 'success') {
                        toastr.success(response.message || "next step!");
                        if(response.locationChange){
                            setTimeout(() => {
                                location.href = response.locationChange;
                            }, 1000);
                        }else{
                            toastr.success(response.message || "next step!");
                        }
                    } else if (response.status === 'error') {
                        toastr.error(response.message || "An error occurred!");
                    }
                },
                error: function () {
                    toastr.error("An unexpected error occurred!");
                    $("#sendsubmit").val("Save & Close");
                }
            });
        })
    })
</script>