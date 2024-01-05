@php

    // $general_data = App\Models\Configuration::first();
    // dd($general_data);
@endphp

<footer>
    <div class="">
        <div class="container py-5">
            <div class="row pt-4">
                <div class="col-lg-5 px-5">
                    <div class="first-col">
                        <h5>
                            {{ $general_data->city_first ?? ''}}
                        </h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 mt-3">
                                <div class="phone-img d-inline-block">
                                    <img src="{{asset('assets/images/phone.svg')}}" alt="">
                                </div>
                                <a href="tel:+6016023624" class="p-3">
                                    {{ $general_data->phone_first ?? ''}}
                                </a>

                            </li>
                            <li class="d-flex align-items-center">
                                <div class="address-img mb-4">
                                    <img src="{{asset('assets/images/address.svg')}}" alt="">
                                </div>
                                <a href="https://goo.gl/maps/TYRrety8Nsvwg3YbA" target="_blank" class="p-3">
                                    {{ $general_data->address_first ?? ''}}
                                </a>


                            </li>
                            {{-- <li class="d-flex align-items-center">
                                <div class="address-img mb-4">
                                    <img src="{{asset('assets/images/faq.svg')}}" alt="" style="width:82%">
                                </div>
                                <a href="{{ route('faq_view') }}" class="p-3">
                                    Faq's
                                </a>

                            </li> --}}

                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 px-5">
                    <div class="second-col">
                        <h5>
                            {{ $general_data->city_second ?? ''}}
                        </h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 mt-3">
                                <div class="phone-img d-inline-block">
                                    <img src="{{asset('assets/images/phone.svg')}}" alt="">
                                </div>
                                <a href="tel:+8177447424" class="p-3">
                                    {{ $general_data->phone_second ?? ''}}
                                </a>

                            </li>
                            <li class="d-flex align-items-center">
                                <div class="address-img mb-4">
                                    <img src="{{asset('assets/images/address.svg')}}" alt="">
                                </div>
                                <a href="https://goo.gl/maps/8YDZH2iF2gqoftWu7" target="_blank" class="p-3">
                                    {{ $general_data->address_second ?? ''}}

                                </a>


                            </li>
                            

                            <li class="mb-3 mt-3">
                                <div class="phone-img d-inline-block">
                                    <img src="{{asset('assets/images/faq.svg')}}" alt="" style="width:82%;height: auto;" title="FAQs">
                                </div>
                                <a href="{{ route('faq_view') }}" class="p-3">
                                    FAQ
                                </a>

                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="third-col text-center mt-sm-4 mt-lg-0">
                        <h5>
                            Social Links
                        </h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4">
                                <a href="{{ $general_data->facebook ?? '#'}}" class="" target="__blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $general_data->instagram ?? '#'}}" class="" target="__blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            {{-- <li> --}}
                                {{-- <a href="{{ $general_data->instagram ?? '#'}}" class="" target="__blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a> --}}
                                {{-- <a href="{{ route('faq_view') }}" class="p-3">
                                    <div class="address-img faq-img mb-3">
                                        <img src="{{asset('assets/images/faq.svg')}}" alt="" style="width:82%" title="FAQs">
                                    </div>
                                </a>
                            </li> --}}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 d-flex align-items-center flex-column copyright">
            <a href="javascript:void(0);">
                {{ $general_data->copy_right }}
            </a>
            <p style="text-align: center; font-weight: bold;color: #4D4D4D;"><a href="https://designprosusa.com/" target="_blank" class="design_by">DESIGNED AND DEVELOPED BY  DESIGN PROS USA</a></p>
        </div>
    </div>


</footer>


@push('scripts')

    <script>
        $("#login_btn").on("click",function(){

            $.ajax({
                url: '{{ route('sign_in_form') }}',
                type: 'POST',
                data: $("#sigin_form").serialize(),
                success: function(data) {

                    if(data.admin == 'admin'){
                        location.href = "{{ url('/admin') }}";
                        return false
                    }


                    if(data.status == 404){
                        $.each(data.errors, function(prefix, val){
                           console.log(val[0]);
                            toastr.error(val[0]);
                       });


                       return false
                    }

                    if(data.status == 200){
                        swal({
                            title: "Dear User!",
                            text: data.message,
                            type: "success",
                            icon: "success",
                        }).then(function(){
                            location.href = "{{ route('user_dashboard') }}";
                        });
                    }else{


                        swal({
                            title: "Dear User!",
                            text: data.message,
                            type: "error",
                            icon: "error",
                        });


                    }
                }

            });


        });


        $("#signup_btn").on("click",function(){

            $.ajax({
                url: '{{ route('sign_up_form') }}',
                type: 'POST',
                data: $("#signup_form").serialize(),
                beforeSend: function(){
                    $("#preloader").css('display','block');
                },
                success: function(data) {
                    $("#preloader").css('display','none');

                    if(data.status == 200){

                        location.href = "{{ route('package') }}";


                    }else{


                        $.each(data.errors, function(prefix, val){
                           console.log(val[0]);
                            toastr.error(val[0]);
                       });

                    }
                }

            });


        });
    </script>

<script type="text/javascript">
    var zChar = new Array(' ', '(', ')', '-', '.');
    var maxphonelength = 13;
    var phonevalue1;
    var phonevalue2;
    var cursorposition;

    function ParseForNumber1(object) {
        phonevalue1 = ParseChar(object.value, zChar);
    }

    function ParseForNumber2(object) {
        phonevalue2 = ParseChar(object.value, zChar);
    }

    function backspacerUP(object, e) {
        if (e) {
            e = e
        } else {
            e = window.event
        }
        if (e.which) {
            var keycode = e.which
        } else {
            var keycode = e.keyCode
        }

        ParseForNumber1(object)

        if (keycode >= 48) {
            ValidatePhone(object)
        }
    }

    function backspacerDOWN(object, e) {

        if (e) {
            e = e
        } else {
            e = window.event
        }
        if (e.which) {
            var keycode = e.which
        } else {
            var keycode = e.keyCode
        }
        ParseForNumber2(object)
    }

    function GetCursorPosition() {

        var t1 = phonevalue1;
        var t2 = phonevalue2;
        var bool = false
        for (i = 0; i < t1.length; i++) {
            if (t1.substring(i, 1) != t2.substring(i, 1)) {
                if (!bool) {
                    cursorposition = i
                    bool = true
                }
            }
        }
    }

    function ValidatePhone(object) {

        var p = phonevalue1

        p = p.replace(/[^\d]*/gi, "")

        if (p.length < 3) {
            object.value = p
        } else if (p.length == 3) {
            pp = p;
            d4 = p.indexOf('(')
            d5 = p.indexOf(')')
            if (d4 == -1) {
                pp = "(" + pp;
            }
            if (d5 == -1) {
                pp = pp + ")";
            }
            object.value = pp;
        } else if (p.length > 3 && p.length < 7) {
            p = "(" + p;
            l30 = p.length;
            p30 = p.substring(0, 4);
            p30 = p30 + ")"

            p31 = p.substring(4, l30);
            pp = p30 + p31;

            object.value = pp;

        } else if (p.length >= 7) {
            p = "(" + p;
            l30 = p.length;
            p30 = p.substring(0, 4);
            p30 = p30 + ")"

            p31 = p.substring(4, l30);
            pp = p30 + p31;

            l40 = pp.length;
            p40 = pp.substring(0, 8);
            p40 = p40 + "-"

            p41 = pp.substring(8, l40);
            ppp = p40 + p41;

            object.value = ppp.substring(0, maxphonelength);
        }

        GetCursorPosition()

        if (cursorposition >= 0) {
            if (cursorposition == 0) {
                cursorposition = 2
            } else if (cursorposition <= 2) {
                cursorposition = cursorposition + 1
            } else if (cursorposition <= 5) {
                cursorposition = cursorposition + 2
            } else if (cursorposition == 6) {
                cursorposition = cursorposition + 2
            } else if (cursorposition == 7) {
                cursorposition = cursorposition + 4
                e1 = object.value.indexOf(')')
                e2 = object.value.indexOf('-')
                if (e1 > -1 && e2 > -1) {
                    if (e2 - e1 == 4) {
                        cursorposition = cursorposition - 1
                    }
                }
            } else if (cursorposition < 11) {
                cursorposition = cursorposition + 3
            } else if (cursorposition == 11) {
                cursorposition = cursorposition + 1
            } else if (cursorposition >= 12) {
                cursorposition = cursorposition
            }

            var txtRange = object.createTextRange();
            txtRange.moveStart("character", cursorposition);
            txtRange.moveEnd("character", cursorposition - object.value.length);
            txtRange.select();
        }

    }

    function ParseChar(sStr, sChar) {
        if (sChar.length == null) {
            zChar = new Array(sChar);
        } else zChar = sChar;

        for (i = 0; i < zChar.length; i++) {
            sNewStr = "";

            var iStart = 0;
            var iEnd = sStr.indexOf(sChar[i]);

            while (iEnd != -1) {
                sNewStr += sStr.substring(iStart, iEnd);
                iStart = iEnd + 1;
                iEnd = sStr.indexOf(sChar[i], iStart);
            }
            sNewStr += sStr.substring(sStr.lastIndexOf(sChar[i]) + 1, sStr.length);

            sStr = sNewStr;
        }

        return sNewStr;
    }
</script>

@endpush
