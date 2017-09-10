<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <meta name="description" content="Elastic Grid | JQuery Responsive Porfolio"/>
    <meta name="keywords"
          content="responsive grid, responsive gallery, porfolio, thumbnails, grid, preview, google image search, jquery, image grid, expanding, preview, portfolio"/>
    <meta name="author" content="Vu Khanh Truong | porfolio.bonchen.net"/>
    <link rel="shortcut icon" href="../favicon.ico">
    <!--<link rel="stylesheet" type="text/css" href="public/gallery/css/demo.css" />-->
    <link rel="stylesheet" type="text/css" href="public/gallery/css/elastic_grid.min.css"/>
    <link href="public/gallery/css/style.css" rel="stylesheet" type="text/css"/>

    <title>@yield('page_title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('resources/assets/vantage_home/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('resources/assets/vantage_home/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">

    <link rel="stylesheet" href="{{url('resources/assets/vantage_home/')}}/vendor/lightbox/css/lightbox.min.css">
    <!-- Theme CSS -->
    <link href="{{url('resources/assets/vantage_home/')}}/css/style.css" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div class="top-nav clearfix hidden-xs">
    <div class="container">
        <div class="col-sm-6">
            <ul class="list-inline contact">
                <li><i class="fa fa-phone"></i>+61 2 8310 6699 AUS</li>
                <li><i class="fa fa-envelope"></i><a href="mailto:contact@veritalife.com">contact@veritalife.com</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-6">
            <ul class="list-unstyled list-inline pull-right">
                <li><a href=""><i class="fa fa-facebook icon-cirlce"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus icon-cirlce"></i></a></li>
                <li><a href=""><i class="fa fa-youtube icon-cirlce"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <img style="margin-top:-15px" src="{{url('public/images/logo.png')}}" alt="logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="{{url('home')}}">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{url('home#about')}}">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{url('service')}}">SERVICES</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{url('treatment')}}">TREATMENT</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{url('resort')}}">RESORTS</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{url('gallery')}}">GALLERY</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{url('contact')}}">CONTACT</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro others">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <hr>
                    <h2>Gallery</h2>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</header>

<div style="background: aliceblue;">
    <?php
    foreach ($gallery_info as $k => $g) {
    if (sizeof($g->hasPic) == 0) {
    } else {?>
    <div class="row">
        <p class="col-md-6 col-md-offset-3" style=" margin-bottom:16px !important; margin-top:20px !important;">
           <img width:28px; src="{{url('public/images/gallery_cat/')}}/cat_<?= $k+1?>.png"></img>
        </p>
    </div>
    <div class="row">
        <!--<h4 style="text-align: center;margin: 10px 0px;"><?= $g->name?></h4>-->
        <div id="elastic_grid_demo<?=$k?>" class="gallary_pics" data-cat-id= {{ $g->id }}></div>
        <div style="text-align:center; margin-bottom:20px;">
            <?php if(sizeof($g->hasPic)<=12){
            }else{ ?>
                <button class="btn btn-success galleryMore">More</button>
            <?php }?>
        </div>
    </div>

    <?php }
    }?>

</div>
<section id="footer-top" class="footer-top content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>OUR LOCATION</h4>
                @foreach($company_address as $cAddrss)
                    <ul class="list-unstyled">
                        <li>{{$cAddrss->house_no}},{{$cAddrss->street_no}}</li>
                        <li>{{$cAddrss->others}}{{$cAddrss->city}},{{$cAddrss->country}}</li>
                        <li>{{$cAddrss->phone}}</li>
                    </ul>
                    <br>
                @endforeach

                <br>
                <ul class="list-inline social">
                    <li><a href="{{$company[0]->facebookLink}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{$company[0]->googlePlusLink}}"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="{{$company[0]->youtubeLink}}"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="{{$company[0]->linkedinLink}}"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="{{$company[0]->twitterLink}}"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- /col -->

            <div class="col-md-4">
                <h4>Support</h4>
                <ul class="list-unstyled">
                    @foreach($support_info as $key90=>$s)
                        @if($s->type==2)
                            <li><a href="{{url($s->link)}}">{{$s->name}}</a></li>
                        @else
                            <li><a style="cursor: pointer" data-toggle="modal"
                                   data-target="#support_{{$s->id}}">{{$s->name}}</a>
                                <div id="support_{{$s->id}}" class="modal fade about-us-modal" tabindex="-1"
                                     role="dialog" aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel"
                                                    style="color: black">{{$s->name}}</h4>
                                            </div>
                                            <div class="modal-body" style="color: black;">
                                                <?= $s->details ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif
                    @endforeach
                    {{--<li><a style="cursor: pointer" data-toggle="modal" data-target="#support_0">Terms &amp; Conditions</a></li>                    --}}
                    {{--<li><a href="{{url('service')}}">Services</a></li>--}}
                    {{--<li><a href="{{url('home#about')}}">About Us</a></li>--}}
                    {{--<li><a href="{{url('contact')}}">Contact Us</a></li>--}}
                    {{--<li><a href="{{url('Login')}}">Login</a></li>--}}
                </ul>
            </div> <!-- /col -->

            <div class="col-md-4">
                <h4>Subscribe us</h4>
                <p>Subscribe us to get latest news and information.</p>
                <form action="" class="subscribe">
                    <input type="email" placeholder="E-mail here">
                    <button type="submit" class="btn btn-success">SUBSCRIBE</button>
                </form>
            </div>
        </div> <!-- /row -->
    </div> <!-- /container -->
</section>

<footer>
    <p class="text-center">&copy; {{$company[0]->footerText}} <a
                href="{{$company[0]->footerLindAddress}}">{{$company[0]->footerLink}}</a></p>
</footer>

<script src="{{url('resources/assets/vantage_home/')}}/vendor/jquery/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{url('resources/assets/vantage_home/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="{{url('resources/assets/vantage_home/')}}/js/main.js"></script>

<script src="{{url('resources/assets/vantage_home/')}}/vendor/lightbox/js/lightbox.min.js"></script>
<!-- Theme JavaScript -->
<script src="{{url('resources/assets/vantage_home/')}}/js/main.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="public/gallery/js/modernizr.custom.js"></script>
<script src="public/gallery/js/classie.js"></script>
<script type="text/javascript" src="public/gallery/js/elastic_grid.min.js"></script>

<script>
    $(document).ready(function () {
        $(".gallary_pics").each(function () {
            var cat_id = $(this).attr("data-cat-id");
            var div_id = $(this).attr('id');
            //console.log(div_id);
            $.ajax({
                type: 'get',
                url: '{{url("get-gallary-pics")}}',
                data: {
                    catId: cat_id
                }, success: function (result) {

                    var itms = [];
                    $.each(result, function (i, res) {
                        if(i<=11){
                            itms.push({
                                title: res.name,
                                thumbnail: ['public/images/thumbnail/' + res.image],
                                large: ['public/images/gallery/' + res.image],
                                button_list: [],
                                tags: [res.sub_category.sub_cat_name]
                            });    
                        }
                    });

                    $('#' + div_id).elastic_grid({
                        'showAllText': 'All',
                        'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
                        'hoverDirection': true,
                        'hoverDelay': 0,
                        'hoverInverse': false,
                        'expandingSpeed': 500,
                        'expandingHeight': 500,
                        'items': itms
                    });
                }
            });
        });


        $(".galleryMore").click(function () {
            var cat = $(this).parent().parent().find('.gallary_pics').attr('data-cat-id');
            var subCat =  $(this).parent().parent().find('.gallary_pics').contents().find("ul li.current a").html();
            console.log(cat);
            console.log(subCat);

            var div_id = $(this).parent().parent().find('.gallary_pics').attr('id');
            console.log(div_id);
            $.ajax({
                type: 'get',
                url: '{{url("get_gallary_pics")}}',
                data: {
                    catId: cat,
                    subCat : subCat
                }, success: function (result) {
                    var itms = [];
                    $.each(result, function (i, res) {
                        itms.push({
                            title: res.name,
                            thumbnail: ['public/images/thumbnail/' + res.image],
                            large: ['public/images/gallery/' + res.image],
                            button_list: [],
                            tags: [res.sub_category.sub_cat_name]
                        });
                    });

                    $('#' + div_id).elastic_grid({
                        'showAllText': 'All',
                        'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
                        'hoverDirection': true,
                        'hoverDelay': 0,
                        'hoverInverse': false,
                        'expandingSpeed': 500,
                        'expandingHeight': 500,
                        'items': itms
                    });
                }
            });
        });
    });
</script>

</body>
</html>