<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Accepted Therapy | Admin Panel</title>
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="icon" href="{{url('/uploads/feature/'.logo_management()->feature_image)}}" type="image/x-icon" />

<!-- Fonts and icons -->
<script src="{{ asset('admin/assets/js/plugin/webfont/webfont.min.js') }}"></script>
<script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                "simple-line-icons"
            ],
            urls: ['../assets/css/fonts.min.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!-- CSS Files -->
<script src="{{asset('admin/assets/js/core/jquery.3.2.1.min.js')}}"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/css/atlantis.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/css/fonts.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}">
<!-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> -->
<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="{{ asset('user/assets/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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