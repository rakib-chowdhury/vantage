<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(url('public/images/'.$company[0]->logo)); ?>">
    <title><?php echo $__env->yieldContent('page_title'); ?></title>
    <!-- Bootstrap Core CSS -->
 <link rel="stylesheet" href="<?php echo e(url('resources/assets/vantage/')); ?>/compiled/flipclock.css">
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
    <!--datatable-->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/www/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Menu CSS -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/dropify/dist/css/dropify.min.css">
    <!-- Page plugins css -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- summernotes CSS -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/summernote/dist/summernote.css" rel="stylesheet" />
    <!-- page CSS -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />

    <!-- toast CSS -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo e(url('resources/assets/vantage/')); ?>/css/colors/default.css" id="theme" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(url('resources/assets/vantage/')); ?>/css/simplebar.css" />
    <link rel="stylesheet" href="<?php echo e(url('resources/assets/vantage/')); ?>/css/demo.css" />

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })( window,document,'script','<?php echo e(url('resources/assets/vantage/')); ?>/js/analytics.js','ga');

        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');

    </script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <style>
        @media  screen and (min-width: 320px) {
            .flip-clock-meridium {
                margin: 3em 4em !important;
            }
            .flip-clock-wrapper {
                text-align: center;
                position: relative;
                width: 80%;
                margin: 1em;
            }
            .clock-text {
                text-align: center;
                font-size: 2em;
            }
            .clock-text2 {
                text-align: center;
                font-size: 2em;
            }
        }

        @media  screen and (min-width: 380px) {
            .flip-clock-meridium {
                margin: 3em 3.5em !important;
            }
            .flip-clock-wrapper {
                text-align: center;
                position: relative;
                width: 100%;
                margin: 1em;
            }
            .clock-text {
                margin-top: 2em;
            }
        }

        @media  screen and (min-width: 480px) {
            .clock-text {
                text-align: right;
                font-size: 3em;
            }
            .clock-text2 {
                text-align: right;
            }
        }

        @media  screen and (min-width: 680px) {
            .clock-text {
                margin-top: -2em;
                text-align: right;
                font-size: 3em;
            }
            .clock-text2 {
                text-align: right;
                font-size: 3em;
            }
        }

        @media  screen and (min-width: 768px) {
            .clock-text {
                margin-top: 2em;
                text-align: right;
                font-size: 3em;
            }
            .clock-text2 {
                text-align: right;
                font-size: 3em;
            }
        }

        @media  screen and (min-width: 1200px) {
            .clock-text {
                margin-top: 2.81em;
                text-align: center;
                font-size: 3em;
            }
            .clock-text2 {
                text-align: center;
                font-size: 3em;
            }
        }

        @media  screen and (min-width: 1280px) {
            .clock {
                margin: 4em 3em;
            }
            .clock-text {
                margin-top: 2em;
                text-align: center;
                font-size: 3em;
            }
            .clock-text2 {
                margin-bottom: 1.55em;
                text-align: center;
                font-size: 3em;
            }
        }
        body{
             background-image: url('public/images/shop.jpg');
             background-repeat: no-repeat;
             background-position: center;
             background-size: 100% 100%;
        }
        html{
             background-image: url('public/images/shop.jpg');
             background-repeat: no-repeat;
             background-position: center;
             background-size: 100% 100%;
        }

    </style>
</head>