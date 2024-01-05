@extends('user.layouts.master')
@section('content')
    <style>
        .edit-submit-cstmbtn {
            margin-top: 2rem;
            background-color: #6ED6D3;
            font-family: "Solway-Bold";
            font-weight: 600;
            color: #2D6D95;
            border-radius: 12px;
            padding: 8px 16px;
            font-size: 16px;
        }

        .cstm-close-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 8px !important;
            border-radius: 6px;
        }

        .cstm-close-btn i {
            font-size: 20px;
        }


        .edit-submit-cstmbtn:hover {
            margin-top: 2rem;
            background-color: #6ED6D3;
            font-family: "Solway-Bold";
            font-weight: 600;
            color: #2D6D95;
        }

        .top-tabt-heading {
            color: #2D6D95;
            font-size: 58px;
            font-family: "JA-Hand-Reg";
        }

        .display_none {
            display: none;
        }

        .success_status {
            background-color: #6ed6d3;
        }

        .success_expire {
            background-color: rgb(236, 180, 106);
        }

        .badge_regenerate {
            cursor: pointer;
            background-color: #6ed688;
        }

        .badge_delete {
            cursor: pointer;
            background-color: #d66e6e;
        }

        /* ================================== SIGNIN FORM ============================= -->*/
        .siginin-main {
            /* background-color: #FFFFFF; */
            min-height: 593px;
            /* margin-top: 101px; */
        }

        .siginin-main h5 {
            z-index: 1;
        }

        .signin-wrap {
            background: #F2F2F2;
            border-radius: 50px;
            min-height: 600px;
            overflow: hidden;
        }

        .corner-img1 {
            width: 400px;
            right: -158px;
            top: -36px;
        }

        .corner-img1 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .corner-img2 {
            width: 400px;
            left: -81px;
            top: 380px;
        }

        .corner-img2 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .signin-wrap .form4 {
            width: 85%;
            padding-top: 100px;
        }

        .signin-wrap .form4 input {
            background: #E6E6E6;
            padding: 10px;
            border-radius: 11px;
            border: none;
        }

        .signin-wrap .form4 input::placeholder {
            color: #1A1A1A;
            font-family: "Solway-Reg";
            padding-left: 18px;
            font-weight: 600;
        }

        .signin-wrap .form4 input:focus {
            outline: none;
            box-shadow: none;
        }

        .signin-wrap .form4 a {
            color: #1A1A1A;
            font-family: "Solway-Reg";
            padding-left: 18px;
            font-weight: 600;
            text-decoration: none;
        }


        .modal-dialog {
            max-width: 1037px !important;
            height: auto !important;
            margin: auto !important;
        }

        .signin-wrap .form4 input {
            background: #E6E6E6 !important;
            padding: 10px;
            border-radius: 11px;
            border: none;
        }

        .close-button {
            right: 42px;
        }

        .btn-close {
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: 0.25em 0.25em;
            color: #000;
            background: transparent url(https://www.freeiconspng.com/thumbs/cross-png/cross-png-28.png) border: 0;
            border-radius: 0.25rem;
            opacity: .5;
            position: absolute;
            right: 0;
            top: 10px;
            background-color: beige !important;
            z-index: 213;
        }

        .link_copy_td {
            display: flex;
            min-width: 650px;
        }

        .link_copy_input {
            background: transparent;
            border: none;
            width: 100%;
        }

        .link_copy_input:focus {
            outline: none;
        }

        .link_copy_input::selection {
            outline: none;
        }

        .link_copy_btn {
            border: none;
        }

        .copied_span {
            display: none;
        }

        .copied_span_style {
            background: #c8a180;
            padding: 2px;
            color: #fff;
            border-radius: 2px;
        }

        .d-none {
            display: none;
        }

        .badge_logo_clr {
            background: #c8a180;
            padding: 7px;
        }

        .link_pass_copy_input {
            border: none;
            width: 140px;
            background-color: transparent
        }

        .link_pass_copy_input:focus {
            outline: none;
        }

        .link_pass_copy_input::selection {
            outline: none;
        }

        /* .link_copy_btn{
                                border:none;
                            } */
        .lcs_none {
            display: none;
        }

        @media only screen and (max-width: 1366px) {

            /* .for-scorll-right-left{
                        width: 500px;
                    }
                    .for-scorll-right-left .table.table-striped{
                        overflow: auto;
                        width: 100%;

                    } */
            .for-scorll-right-left{
                display: block;
                overflow: auto;
                width: 100%;
            }
        }
    </style>
    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">Pdf Link</h2>
        <br>

            <div class="for-scorll-right-left">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Download Pdf</th>
                        </tr>
                    </thead>
                    <tbody>
                    <td>
                        <a href="{{asset('uploads/cms/' .$pdf[0]->pdf) }}" target ="_blank" class="btn btn-large pull-left" download=""><i class="fa-solid fa-download"> </i> Download Pdf </a>
                    </td>
                    </tbody>
                </table>
            </div>
    </div>


    <div class="modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                                         <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal"
                                             aria-label="Close"></button>
                                     </div> -->
                <div class="modal-body">

                    <!-- ================================== REQUEST FOR FORM ============================= -->
                    <section>
                        <div class="siginin-main">
                            <div class="container signin-wrap position-relative  mt-3">
                                <div class="position-absolute close-button">
                                    <button type="button" class="btn-close cstm-close-btn" data-bs-dismiss="modal"
                                        aria-label="Close">

                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="h-1 d-flex justify-content-center pt-5 wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="0.5s">
                                    <h5 class="top-tabt-heading">
                                        Request Password
                                    </h5>
                                </div>

                                <div class="corner-img1 position-absolute wow bounceIn" data-wow-duration="1s"
                                    data-wow-delay="0.5s">
                                    <img src="{{ asset('assets/images/banner3-img.svg') }}" alt="">
                                </div>
                                <div class="corner-img2 position-absolute wow fadeInLeft" data-wow-duration="1s"
                                    data-wow-delay="0.5s">
                                    <img src="{{ asset('assets/images/banner3-img.svg') }}" alt="">
                                </div>
                                <div class="container form4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s ">
                                    <form id="request_password_form" method="post">
                                        @csrf
                                        <input type="hidden" name="request_password_id" id="request_password_id">
                                        <div class="form-group mb-4">
                                            <div class="input-group">
                                                <textarea name="write_note" id="" cols="30" rows="5" class="form-control py-3"
                                                    placeholder="Write your note regard link..." style="margin-top: 8px;background: #E6E6E6 !important;"></textarea>
                                            </div>
                                        </div>


                                        <div class="mt-4 pb-4 text-center">
                                            <button type="button" id="request_password_btn"
                                                class="btn py-2 edit-submit-cstmbtn">
                                                Request For Password
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $("#linkGenerateBtn").on("click", function() {

            $.ajax({
                url: '{{ route('prepare_link') }}',
                type: 'GET',
                success: function(data) {

                    $("#link_generate").val(data.link);
                    $("#inputPassword").val(data.password);

                    $("#inputs_list").removeClass('display_none');
                    $("#link_send_to").removeClass('display_none');
                    $("#linkGenerateBtn").remove();
                }

            });
        });


        $("#link_send_to").on("click", function() {

            $.ajax({
                url: '{{ route('link_store') }}',
                type: 'GET',
                data: $("#link_generate_form").serialize(),
                beforeSend: function() {
                    $("#preloader").css('display', 'block');
                },
                success: function(data) {
                    $("#preloader").css('display', 'none');
                    // console.log(data);
                    // return false;

                    if (data.status == 404) {
                        swal({
                            title: "Dear User!",
                            text: data.message,
                            type: "error",
                            icon: "error",
                        });
                        return false
                    }

                    if (data.status == 400) {
                        $.each(data.errors, function(prefix, val) {
                            console.log(val[0]);
                            toastr.error(val[0]);
                        });

                        return false
                    }


                    if (data.status == 200) {
                        swal({
                            title: "Dear User!",
                            text: data.message,
                            type: "success",
                            icon: "success",
                        }).then(function() {
                            location.href = "{{ route('link_generate') }}";
                        });
                    }

                }

            });
        });



        function get_request_password_id(req_pass_id) {
            $("#request_password_id").val(req_pass_id);
        }

        $("#request_password_btn").on("click", function() {

            $.ajax({
                url: '{{ route('request_password') }}',
                type: 'GET',
                data: $("#request_password_form").serialize(),
                beforeSend: function() {
                    $("#preloader").css('display', 'block');
                },
                success: function(data) {
                    $("#preloader").css('display', 'none');

                    if (data.status == 400) {
                        $.each(data.errors, function(prefix, val) {
                            toastr.error(val[0]);
                        });

                        return false
                    }


                    if (data.status == 200) {
                        swal({
                            title: "Dear User!",
                            text: data.message,
                            type: "success",
                            icon: "success",
                        }).then(function() {
                            location.href = "{{ route('link_generate') }}";
                        });
                    }

                }

            });
        });


        function delete_link(link_id) {
            alert("working")
            $.ajax({
                url: '{{ route('link_delete') }}',
                type: 'GET',
                data: {
                    id: link_id
                },
                success: function(data) {

                    if (data.status == 200) {
                        swal({
                            title: "Dear User!",
                            text: data.message,
                            type: "success",
                            icon: "success",
                        }).then(function() {
                            location.href = "{{ route('link_generate') }}";
                        });
                    } else {
                        swal('Link Generate', data.message, 'error');
                    }
                }

            });
        }


        function copyLink(id, btnSyle) {
            var copyText = document.getElementById("copy_" + id);
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);


            $("#copied_" + id).removeClass("copied_span");
            $("#copied_" + id).addClass("copied_span_style");
            $("#" + btnSyle).addClass("d-none");

            setTimeout(() => {
                $("#copied_" + id).addClass("copied_span");
                $("#" + btnSyle).removeClass("d-none");
                $("#copied_" + id).removeClass("copied_span_style");
            }, 500);

        }

        function copyPassword(id, btnSyle) {
            var copyText = document.getElementById("copyPass_" + id);
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);


            $("#copiedPass_" + id).removeClass("lcs_none");
            $("#copiedPass_" + id).addClass("copied_span_style");
            $("#" + btnSyle).addClass("d-none");

            setTimeout(() => {
                $("#copiedPass_" + id).addClass("lcs_none");
                $("#" + btnSyle).removeClass("d-none");
                $("#copiedPass_" + id).removeClass("copied_span_style");
            }, 500);

        }
    </script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}')
            </script>
        @endforeach
    @endif

    @if (Session::has('user_updated'))
        <script>
            swal('User Profile', '{{ Session::get('user_updated') }}', 'success')
        </script>
    @endif

    @if (Session::has('user_error'))
        <script>
            swal('User Profile', '{{ Session::get('user_error') }}', 'success')
        </script>
    @endif

@endpush
