<script src="{{ asset('user/assets/cdn/jquery2.js') }}"></script>
<script src="{{ asset('user/assets/cdn/jquery3.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('user/assets/cdn/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('user/assets/main.js') }}"></script>
<script>
    toastr.options = {
        "positionClass": "toast-top-right",
        "showDuration": "9000",
        "hideDuration": "9000",
        "timeOut": "9000",
        "extendedTimeOut": "9000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "320px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>

@stack('scripts')

</body>

</html>

