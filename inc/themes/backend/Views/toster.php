<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<style>
    .toast-close {
        margin-left: 20px;
        color: black;
    }
    .toastify {
        padding: 15px 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
        display: flex;
    }
    .toastify i {
        margin-right: 20px;
        font-size: 25px;
    }
    .toast-txt h4{
        font-size: 20px;
        font-weight: 800;
        margin-bottom: 0;
    }
    .toast-txt p{
        margin-bottom: 0;
    }
    .txt-dark{
        color: black;
    }

    .toast-with-progress::after {
        content: "";
        display: block;
        position: absolute;
        bottom: 0;
        left: 0;
        height: 4px;
        background-color: rgba(255, 255, 255, 0.7);
        width: 100%;
        border-radius: 5px;
        animation: toastProgress 3s linear forwards;
    }

    @keyframes toastProgress {
        from {
            width: 100%;
        }

        to {
            width: 0%;
        }
    }
</style>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    function showToast(type, title, message) {
        const icons = {
            success: "fas fa-check-circle",
            error: "fas fa-times-circle",
            warning: "fas fa-exclamation-triangle",
            info: "fas fa-info-circle"
        };

        const colors = {
            success: "#28a745",
            error: "#dc3545",
            warning: "#ffc107",
            info: "#17a2b8"
        };

        Toastify({
            text: `
                <div class="d-flex align-items-center ${type === 'warning' ? 'txt-dark' : ''}">
                    <i class="${icons[type]}"></i>
                    <div class="toast-txt">
                        <h4>${title}</h4>
                        <p>${message}</p>
                    </div>
                </div>
            `,
            duration: 3000,
            close: true,
            gravity: "bottom", // Position of the toast: "top" or "bottom"
            position: "right", // Position of the toast: "left", "center", or "right"
            backgroundColor: colors[type],
            stopOnFocus: true,
            escapeMarkup: false,
            className: "toast-with-progress",
            style: {
                borderRadius: "15px",
                padding: "15px 20px",
            },
            offset: {
                x: 30,
                y: 50
            },
        }).showToast();
    }
    const toastr = {
        success: function(message) {
            showToast('success', 'Success', message);
        },

        error: function (message) {
            showToast('error', 'Error', message);
        },
        warning: function(message){
            showToast('warning', 'Warning', message);
        },
        info: function(message){
            showToast('info', 'Information', message);
        }
    };
</script>