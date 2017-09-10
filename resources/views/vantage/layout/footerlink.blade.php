


<!-- jQuery -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{url('resources/assets/vantage/')}}/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="{{url('resources/assets/vantage/')}}/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="{{url('resources/assets/vantage/')}}/js/waves.js"></script>

<!-- Plugin JavaScript -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/moment/moment.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
{{--<script src="{{url('resources/assets/vantage/')}}/js/angular.js"></script>--}}
{{--<script>--}}
    {{--angular.module('myApp', []).config(function($interpolateProvider){--}}
        {{--$interpolateProvider.startSymbol('{[{').endSymbol('}]}');--}}
    {{--});--}}
{{--</script>--}}

<script>


    $(document).ready(function () {
        $.getJSON("http://jsonip.com/?callback=?", function (data) {

          //  console.log(JSON.stringify((data.ip)));

            if(data.ip || data.ip!=null)
            {
                key="pos_english_sylhet";
                ip=data.ip;
                $.ajax({
                    url: 'http://geeksntechnology.com/check_valid_user/',
                    type: 'POST',
                    data: {ip_name:ip,key:key},
                    success: function (result) {


                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            url: '{{ url("/file_create")}}',
                            type: 'POST',
                            data: {data: result},
                            success: function (result_file)
                            {

                            }
                        });



                    }
                });
            }

            jQuery.get('../storage/logs/laravel_validate.txt', function(data_file) {
                //alert(data_file);
                if(data_file=='ok')
                {

                }
                else{
                    $('#body_disable').click(function(){return false;});
                    $('#body_disable').css("opacity", ".5");
                }
            });


        });
    });
</script>



<script>
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'

    });

    $('.clockpicker').clockpicker({
                donetext: 'Done',

            })
            .find('input').change(function(){
        console.log(this.value);
    });

    $('#check-minutes').click(function(e){
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show')
                .clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    // Colorpicker

    $(".colorpicker").asColorPicker();
    $(".complex-colorpicker").asColorPicker({
        mode: 'complex'
    });
    $(".gradient-colorpicker").asColorPicker({
        mode: 'gradient'
    });
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('.datepicker-autocloses').datepicker({
        format: 'yyyy/mm/dd',
        autoclose: true,
        todayHighlight: true
    });

    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({

        todayHighlight: true
    });

    // Daterange picker

    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse',
        dateLimit: {
            days: 6
        }
    });


    //    Month Picker
    $('.month_datepicker').datepicker( {
        format: "yyyy-mm",
        autoclose: true,
        startView: "months",
        minViewMode: "months"
    });

    //End Month Picker

    //Year Picker

    $('.year_datepicker').datepicker( {
        format: "yyyy",
        autoclose: true,
        startView: "years",
        minViewMode: "years"
    });

    //End Year Picker

    var $loading = $('#loadingDiv').hide();


    $(document)
            .ajaxStart(function () {
                //$loading.show();
                console.log('start');
            })
            .ajaxStop(function () {
                //$loading.hide();
                console.log('end');
            });
</script>
<!--Counter js -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/counterup/jquery.counterup.min.js"></script>
<!--Morris JavaScript -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/raphael/raphael-min.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/morrisjs/morris.js"></script>
@yield('my_js')

<!-- Custom Theme JavaScript -->
<script src="{{url('resources/assets/vantage/')}}/js/custom.min.js"></script>
<script src="{{url('resources/assets/vantage/')}}/js/chat.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/switchery/dist/switchery.min.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{url('resources/assets/vantage/')}}/bower_components/multiselect/js/jquery.multi-select.js"></script>
<script src="{{url('resources/assets/vantage/')}}/js/jasny-bootstrap.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/summernote/dist/summernote.min.js"></script>
<script src="{{url('resources/assets/vantage/')}}/js/mask.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/bootstrap-table/dist/bootstrap-table.ints.js"></script>
<script>

    jQuery(document).ready(function(){

        $('.summernote').summernote({
            height: 350,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
        $(".click2edit").summernote()
    },
            window.save = function() {
                $(".click2edit").destroy()
            }
</script>

<!-- Sparkline chart JavaScript -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/toast-master/js/jquery.toast.js"></script>
<script type="text/javascript">
    /*
     $(document).ready(function() {
     $.toast({
     heading: 'Welcome to Admin Panel',
     text: 'You can customize your website using this admin panel',
     position: 'top-right',
     loaderBg:'#ff6849',
     icon: 'info',
     hideAfter: 3500,

     stack: 6
     })
     });*/
</script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
        $(document).ready(function () {
            var table = $('#example').DataTable({
                "columnDefs": [
                    {"visible": false, "targets": 2}
                ],
                "order": [[2, 'asc']],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({page: 'current'}).nodes();
                    var last = null;

                    api.column(2, {page: 'current'}).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                    '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                }
                else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
//    $('#example23').DataTable({
//        dom: 'Bfrtip',
//        buttons: [
//            'copy', 'csv', 'excel', 'pdf', 'print'
//        ]
//    });
</script>

<script>
    $(document).ready(function () {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function (event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function (event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function (event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function (e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>

<!--my script-->
<script>
    var img_extn = ['png', 'PNG', 'jpg', 'JPG', 'jpeg', 'JPEG'];

    var finalEnlishToBanglaNumber = {
        '0': '০',
        '1': '১',
        '2': '২',
        '3': '৩',
        '4': '৪',
        '5': '৫',
        '6': '৬',
        '7': '৭',
        '8': '৮',
        '9': '৯'
    };
    var finalBanglaToEnlishNumber = {
        '০': '0',
        '১': '1',
        '২': '2',
        '৩': '3',
        '৪': '4',
        '৫': '5',
        '৬': '6',
        '৭': '7',
        '৮': '8',
        '৯': '9'
    };

    String.prototype.getDigitBanglaFromEnglish = function () {
        var retStr = this;
        for (var x in finalEnlishToBanglaNumber) {
            retStr = retStr.replace(new RegExp(x, 'g'), finalEnlishToBanglaNumber[x]);
        }
        return retStr;
    };
    String.prototype.getDigitEnglishFromBangla = function () {
        var retStr = this;
        for (var x in finalBanglaToEnlishNumber) {
            retStr = retStr.replace(new RegExp(x, 'g'), finalBanglaToEnlishNumber[x]);
        }
        return retStr;
    };
    function check_text_field(id, err_id) {
        var tmp_id = $('#' + id).val();
        tmp_id = tmp_id.replace(/\s+/g, '');

        if (tmp_id == '' || tmp_id == null) {
            var x = document.getElementById(err_id);
            x.style.color = 'red';
            x.innerText = 'Required';
        } else {
            document.getElementById(err_id).innerText = '';
        }
    }

    function check_num_field(id, err_id) {
        var tmp_num = $('#' + id).val().getDigitEnglishFromBangla();
        console.log(tmp_num);
        if (tmp_num == null || tmp_num <= 0 || isNaN(tmp_num)) {
            console.log(isNaN(tmp_num));
            document.getElementById(err_id).innerText = 'Please provide the correct information';
        } else {
            console.log('n');
            document.getElementById(err_id).innerText = '';
            
        }

    }
function check_num_field2(id, err_id) {
        var tmp_num = $('#' + id).val().getDigitEnglishFromBangla();
        console.log(tmp_num);
        if (tmp_num == null || tmp_num < 0 || isNaN(tmp_num)) {
            console.log(isNaN(tmp_num));
            document.getElementById(err_id).innerText = 'Please provide the correct information';
        } else {
            console.log('n');
            document.getElementById(err_id).innerText = '';
        }

    }
function check_num_field3(id, err_id) {
        var tmp_num = $('#' + id).val().getDigitEnglishFromBangla();       
        if (tmp_num == null || tmp_num <= 0 || isNaN(tmp_num)) {
            document.getElementById(err_id).innerText = 'Please provide the correct information';
        } else {
            document.getElementById(err_id).innerText = '';            
            check_price();
        }

    }

    function check_price(){
        var num1=$('#buy_price').val().getDigitEnglishFromBangla();
        var num2=$('#sell_price').val().getDigitEnglishFromBangla();
        console.log('buy'+num1);
        console.log('sell'+num2);
        if(num1 == null || num1 <= 0 || isNaN(num1) || num2 == null || num2 <= 0 || isNaN(num2) ){
             console.log('err');
        }else{
             console.log(' no err');
            if(parseFloat(num1)>parseFloat(num2)){
             console.log('buy boro');
                  document.getElementById('buy_price_err').innerText = 'Product buy price exceed the sell price';
                  document.getElementById('sell_price_err').innerText = 'Product buy price exceed the sell price';
            }else{
             console.log('buy st');
                  document.getElementById('buy_price_err').innerText = '';
                  document.getElementById('sell_price_err').innerText = '';
            }
        }
    }

    function check_qty(id) {
        var tmp_num = $('#' + id).val().getDigitEnglishFromBangla();
        // console.log('check'+tmp_num);
        if (tmp_num == null || tmp_num <= 0 || isNaN(tmp_num)) {
            var x=document.getElementById(id);
            //   console.log('before'+x.value);
            x.value= x.value.replace(/[^0-9.]/, '');
            // console.log('after'+x.value);
        } else {
        }
        doCal();
    }
    function validateEmail(email) {
        var re = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
        return re.test(email);
    }

</script>
<script>
    jQuery(document).ready(function () {
        // Switchery


        $(".select2").select2();
        $('.selectpicker').selectpicker();


    });
</script>
<script>
    jQuery(document).ready(function() {
        @yield('postJquery');
    });


</script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<!-- jQuery file upload -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/dropify/dist/js/dropify.min.js"></script>
<script src="{{url('resources/assets/vantage/')}}/bower_components/counterup/jquery.counterup.min.js"></script>
<!--Style Switcher -->
<script src="{{url('resources/assets/vantage/')}}/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<script src="{{url('resources/assets/vantage/')}}/js/simplebar.js"></script>

