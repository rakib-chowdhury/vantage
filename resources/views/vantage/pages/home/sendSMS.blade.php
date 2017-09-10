<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-material/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2016 09:20:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('public/images/')}}/">


    <title>Mail</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('resources/assets/pos/')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{url('resources/assets/pos/')}}//bower_components/sidebar-nav/dist/sidebar-nav.min.css"
          rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{url('resources/assets/pos/')}}/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('resources/assets/pos/')}}/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{url('resources/assets/pos/')}}/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        table, th, td {
            padding-top:5px;
            padding-bottom:5px;
            color:black;
            font-weight: 600;
            font-family: Verdana,sans-serif;
        }
        .tableTH{
            padding-top:10px;
            padding-bottom:10px;
            color:black;
            font-size:16px;
            font-weight: bold;
        }
        .heading{
            padding-top:10px;
            padding-bottom:10px;
            padding-left:5px;
            padding-right:5px;
            color:black;
            font-size:25px;
            font-weight: bold;
        }
    </style>
</head>
<body class="fix-sidebar">

@php
$bn_digits = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
@endphp

        <!-- Preloader -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <table align="center" border="0" width='100%'>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>{{$name}}</td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td>:</td>
                    <td>{{$mobile}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$email}}</td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td colspan="2">:</td>
                </tr>
                <tr>
                    <td colspan="3">{{$msg}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{url('resources/assets/pos/')}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{url('resources/assets/pos/')}}/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{url('resources/assets/pos/')}}/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="{{url('resources/assets/pos/')}}/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="{{url('resources/assets/pos/')}}/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="{{url('resources/assets/pos/')}}/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="{{url('resources/assets/pos/')}}/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-material/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2016 09:20:18 GMT -->
</html>
