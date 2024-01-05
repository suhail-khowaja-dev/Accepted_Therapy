<script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<!-- jQuery UI -->
<script src="{{ asset('admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<!-- Atlantis JS -->
<script src="{{ asset('admin/assets/js/atlantis.min.js') }}"></script>
<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{ asset('admin/assets/js/setting-demo2.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="{{ asset('admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>
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
    $(document).ready(function() {
        $('#basic-datatables').DataTable({});

        $('#multi-filter-select').DataTable({
            "pageLength": 5,
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $(
                            '<select class="form-control"><option value=""></option></select>'
                            )
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d +
                            '</option>')
                    });
                });
            }
        });

        // Add Row
        $('#add-row').DataTable({
            "pageLength": 5,
        });

        var action =
            '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $('#addRowButton').click(function() {
            $('#add-row').dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action
            ]);
            $('#addRowModal').modal('hide');

        });
    });
</script>
<script type="text/javascript">
    setTimeout(() => {
        var po = document.getElementById('successBtn')
        if (po != null) {
            po.style.display = 'none'
        }
    }, 5000)





    $(function() {
        $("#sort").dataTable({
            "aaSorting": [
                [0, 'desc'],
                [1, 'desc']
            ],
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "searching": true,
            "bSort": false,
            "pageLength": 5
        });
    });




    function handleClick(cb) {

        if (document.getElementById('appointment').checked) {

            $('.selection').hide();
            $('#select_time_label').hide();
            $('.select2').addClass('importantRule');
            $(".cstm-date-btn").addClass('cstm-date-btn-m')

        } else {
            $('.selection').show();
            $('#select_time_label').show();
            $('.select2').removeClass('importantRule');
            $(".cstm-date-btn").removeClass('cstm-date-btn-m')
        }
    }

    $('select').on('change', function() {
        if (this.value) {
            $('#appointment').hide();
            $('#full_time_label').hide();
        } else {
            $('#appointment').show();
            $('#full_time_label').show();
        }
    });
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();

    });
</script>

<!-- Datatables -->
<script type="text/javascript">
    function phoneMask() {
        var num = $(this).val().replace(/\D/g, '');
        $(this).val( /*num.substring(0,1) */ "+1" + '(' + num.substring(1, 4) + ')' + num.substring(4, 7) + '-' + num
            .substring(7, 11));
    }
    $('[type="tel"]').keyup(phoneMask);
</script>
<script type="text/javascript">
    /* Encode string to slug */
    function convertToSlug(str) {

        //replace all special characters | symbols with a space
        str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();

        // trim spaces at start and end of string
        str = str.replace(/^\s+|\s+$/gm, '');

        // replace space with dash/hyphen
        str = str.replace(/\s+/g, '-');
        // document.getElementById("slug-text").innerHTML= str;
        document.getElementById("inputslug").value = str;
        //return str;
    }
</script>
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
    // function phoneMask() {
    // var num = $(this).val().replace(/\D/g,'');
    // // console.log(num)
    // $(this).val("+1"+ '(' + num.substring(1,4) + ')' + num.substring(4,7) + '-' + num.substring(7,11));
    // }
    // $('[type="tel"]').keyup(phoneMask);
</script>
<!-- end contact validaion -->
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
    //    case 'info':
    //    toastr.info(" {{ Session::get('message') }} ");
    //    break;
       case 'success':
       toastr.success(" {{ Session::get('message') }} ");
       break;
       case 'warning':
       toastr.warning(" {{ Session::get('message') }} ");
       break;
       case 'error':
       toastr.error(" {{ Session::get('message') }} ");
       break;
    }
    @endif
    </script>
       @if($errors->any())
       @foreach($errors->all() as $error)
       <script>
           toastr.error('{{$error}}');
       </script>
       @endforeach
       @endif
