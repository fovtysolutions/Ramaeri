<script>
    $(document).ready(function(){
        $("#add_to_cart_form").submit(function(e){            
            e.preventDefault();
            const form = document.getElementById("add_to_cart_form");
            let formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?= base_URL('add-to-cart')?>",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#add_to_cart_form").val("Please Wait...");
                },
                success: function (response) {
                    if (response.status === 'success') {
                        toastr.success(response.message || "next step!");
                        if(response.locationChange){
                            setTimeout(() => {
                                location.href = '<?=base_url('products')?>';
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
                    $("#add_to_cart_form").val("Save & Close");
                }
            });
        })
    })

     $(document).ready(function(){
        $("#login-form").submit(function(e){            
            e.preventDefault();
            const form = document.getElementById("login-form");
            let formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?= base_URL('login')?>",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#login-form").val("Please Wait...");
                },
                success: function (response) {
                    if (response.status === 'success') {
                        toastr.success(response.message || "next step!");
                        if(response.locationChange){
                            setTimeout(() => {
                                location.href = '<?=base_url('/')?>';
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
                    $("#login-form").val("Save & Close");
                }
            });
        })
    })

     $(document).ready(function(){
        $("#register-form").submit(function(e){            
            e.preventDefault();
            const form = document.getElementById("register-form");
            let formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?= base_URL('submit-register')?>",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#register-form").val("Please Wait...");
                },
                success: function (response) {
                    if (response.status === 'success') {
                        toastr.success(response.message || "next step!");
                        if(response.locationChange){
                            setTimeout(() => {
                                location.href = '<?=base_url('/')?>';
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
                    $("#register-form").val("Save & Close");
                }
            });
        })
    })

     $(document).ready(function(){
        $("#forgotP-form").submit(function(e){            
            e.preventDefault();
            const form = document.getElementById("forgotP-form");
            let formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?= base_URL('forgot')?>",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#forgotP-form").val("Please Wait...");
                },
                success: function (response) {
                    if (response.status === 'success') {
                        toastr.success(response.message || "next step!");
                        if(response.locationChange){
                            setTimeout(() => {
                                location.href = '<?=base_url('/')?>';
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
                    $("#forgotP-form").val("Save & Close");
                }
            });
        })
    })

  $(document).ready(function(){
        $("#subscribeForm").submit(function(e){            
            e.preventDefault();
            const form = document.getElementById("subscribeForm");
            let formData = new FormData(form);
            $.ajax({
                type: "POST",
                url: "<?= base_URL('forgot')?>",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#subscribeForm").val("Please Wait...");
                },
                success: function (response) {
                    if (response.status === 'success') {
                        toastr.success(response.message || "next step!");
                        if(response.locationChange){
                            setTimeout(() => {
                                location.href = '<?=base_url('/')?>';
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
                    $("#subscribeForm").val("Save & Close");
                }
            });
        })
    })

</script>