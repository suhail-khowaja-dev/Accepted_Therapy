@extends('layouts.master')
@section('content')

@if(Session::has('schedule_created'))
    <script>
        swal('Schedule!','{{ Session::get('schedule_created') }}','success');
    </script>
@endif


<!-- ================================== BANNER2 =============================== -->
<section>
    <div class="banner3">
        <div class="container position-relative d-flex justify-content-center">
            <div class="position-absolute banner3-img">
                <img src="{{asset('assets/images/banner3-img.svg')}}" alt="">
            </div>
            <div class="position-absolute banner3-text  wow zoomIn" data-wow-duration="1s"
                data-wow-delay="0.5s ">
                <span class="h-1">
                    Scheduling
                </span>
            </div>
        </div>
    </div>
</section>
<!-- ================================== NEW CLIENTS =============================== -->
<section id="newclient">
    <div class="new-clients">
        <div class="container pt-5  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s ">
            <div class="d-flex justify-content-center text-center">
                <div class="h-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.8s">
                    <h1>
                        New Clients
                    </h1>
                    <p>
                        If you are interested in establishing care at Accepted Therapy Services, we would love
                        to
                        learn
                        more about you.
                    </p>
                    <p>
                        Please fill out the following form and someone will be in touch with you.
                    </p>
                </div>
            </div>

            <div class="container form2 pt-2">
                <form action="{{ route('schedule_store') }}" method="post" class="">
                    @csrf
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <input type="text" class="form-control" name="schedule_name" placeholder="Name" value="{{ old('schedule_name') }}" />
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <input type="email" class="form-control" name="schedule_email" placeholder="Email Address" value="{{ old('schedule_email') }}" />
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <input type="text" class="form-control" name="schedule_phone" placeholder="Phone Number" value="{{ old('schedule_phone') }}" / onkeydown="javascript:backspacerDOWN(this,event);"
                            onkeyup="javascript:backspacerUP(this,event);">
                        </div>
                    </div>


                    <div class="form-group mb-4">
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Message" name="schedule_message"
                                id="exampleFormControlTextarea1" rows="8" >{{ old('schedule_message') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="input-group">
                            <input type="text" class="form-control" name="schedule_insurance" placeholder="Insurance" />
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <input type="text" class="form-control addressInput" name="location" placeholder="Enter Location" id="ship-address" />
                        </div>
                    </div>
                    <div class="form-group mb-4">

                        <select class="form-select py-3" name="team_management_id">
                            <option selected value="0">No Preference</option>
                            @if (count($therapists) > 0)
                                @foreach ($therapists as $therapist)
                                <option value="{{ $therapist->id }}" @if (!empty($preferred_therapist->id))
                                    {{ $preferred_therapist->id == $therapist->id ? 'selected' : '' }}
                                @endif >{{ ucwords($therapist->first_name)." ".ucwords($therapist->last_name) }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>


                    <div class="mt-4 pb-4 text-center">
                        <a href="javascript:void(0);" class="w-100">
                            <button type="submit" class="btn">
                                Send
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ================================== EXISTING CLIENTS =============================== -->
<section>
    <div class="py-3 existing-client">

        <div class="container position-relative our-clients d-flex flex-wrap py-5">
            <div class="circles-6 position-absolute">
                <img src="{{asset('assets/images/circle1.png')}}" alt="">
            </div>
            <!-- ================= first row =================-->
            <!-- first card -->
            <div class="card mb-3 mx-auto wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.75s">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6">
                        <div class="client-img mx-auto wow bounceIn" data-wow-duration="1s"
                            data-wow-delay="0.8s">
                            <img src="{{asset('assets/images/client1.png')}}" class="card-img" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card-body py-5">
                            <h5 class="card-title">Existing Clients</h5>
                            <p class="card-text">If you are an existing client, you can schedule an
                                appointment through the portal.</p>
                            <div class="btn-2 mt-4">
                                <a href="https://accepted.mytheranest.com/appointments/new" target="_blank">
                                    <button type="button" class="btn">
                                        Click Here
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ================================== MAKE A REFERRAL =============================== -->
<section>
    <div class="referral" id="ref">
        <div class="container pt-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"">
            <div class=" h-1 pt-5 text-center">
                <h1>
                    Make a Referral
                </h1>
                <p>
                    If you would like to make a referral.
                </p>
            </div>
            <div class="container form3 pt-2">
                <form action="" method="" class="">
                    <div class="form-group mb-4">
                        <div class="input-group">
                            <a href="{{ route('referral_form_index') }}" class="w-100" target="__blank">
                                <button type="button" class="btn py-3" name="referralform" id="ref-form">
                                    Referral Form.Pdf
                                    <div class="download-img d-inline-block">
                                        <img src="{{asset('assets/images/downlaod-btn.svg')}}" alt="">
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('common.accepted_therapy_border')

@endsection

@push('scripts')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>
        toastr.error('{{ $error }}');
    </script>
@endforeach
@endif

<!-- Contact validation -->
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCab5ahH6KkodUavDwBCigXTL7ZbrkzS94&callback=initAutocomplete&libraries=places&v=weekly" async></script>

<script>

  let autocomplete;
  let address1Field;
  // let address2Field;
  let postalField;

  function initAutocomplete() {
    address1Field = document.querySelector("#ship-address");
    // address2Field = document.querySelector("#address2");
    postalField = document.querySelector("#postcode");
    // Create the autocomplete object, restricting the search predictions to
    // addresses in the US and Canada.
    autocomplete = new google.maps.places.Autocomplete(address1Field, {
      componentRestrictions: {
        country: ["us", "ca"]
      },
      fields: ["address_components", "geometry"],
      types: ["address"],
    });
    address1Field.focus();
    // When the user selects an address from the drop-down, populate the
    // address fields in the form.
    autocomplete.addListener("place_changed", fillInAddress);
  }

  function fillInAddress() {
    // Get the place details from the autocomplete object.
    const place = autocomplete.getPlace();
    let address1 = "";
    let postcode = "";
    // document.getElementById('latitude_input').value = place.geometry.location.lat();
    // document.getElementById('longitude_input').value = place.geometry.location.lng();


    // Get each component of the address from the place details,
    // and then fill-in the corresponding field on the form.
    // place.address_components are google.maps.GeocoderAddressComponent objects
    // which are documented at http://goo.gle/3l5i5Mr
    for (const component of place.address_components) {
      const componentType = component.types[0];

      // console

      switch (componentType) {
        case "street_number": {
          address1 = `${component.long_name} ${address1}`;
          break;
        }

        case "route": {
          address1 += component.short_name;
          break;
        }

        case "postal_code": {
          postcode = `${component.long_name}${postcode}`;
          break;
        }

        // case "postal_code_suffix": {
        //   postcode = `${postcode}-${component.long_name}`;
        //   break;
        // }
        case "locality":
          document.querySelector("#locality").value = component.long_name;
          break;
        case "administrative_area_level_1": {
          document.querySelector("#state").value = component.short_name;
          break;
        }
        // case "country":
        //   document.querySelector("#country").value = component.long_name;
        //   break;
      }
    }

    address1Field.value = address1;
    postalField.value = postcode;
    // After filling the form with address components from the Autocomplete
    // prediction, set cursor focus on the second address line to encourage
    // entry of subpremise information such as apartment, unit, or floor number.
    // address2Field.focus();
  }
</script>
<!-- end contact validaion -->
@endpush
