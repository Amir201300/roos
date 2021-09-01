<script src="/Admin/toast/jquery.toast.js"></script>

{{-- Toset Function --}}
<script>
    function Toset(messag, btnClass, text, hideAfter) {
        $.toast({
            heading: messag,
            text: text,
            position: 'bottom-right',
            stack: 2,
            icon: btnClass,
            hideAfter: hideAfter,
        });
    }
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
